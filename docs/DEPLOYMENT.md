# DEPLOYMENT.md — Server Setup & Deployment

## Environments

| Environment | URL | DB Host | Notes |
|-------------|-----|---------|-------|
| Local (MAMP) | `http://transestrella.local` | `127.0.0.1:8889` | Dev credentials in `wp-config.php` |
| Production | `https://transestrella.com.co` | *(provided by host)* | Requires updated `wp-config.php` |

> There is currently no staging environment. It is recommended to set one up before deploying major changes.

---

## Production Server Requirements

| Requirement | Minimum | Recommended |
|-------------|---------|-------------|
| PHP | 7.4 | 8.3+ |
| MySQL | 5.5.5 | MariaDB 10.6+ |
| Web Server | Apache 2.4 / Nginx | Apache 2.4 (WordPress `.htaccess` compatible) |
| Memory Limit | 64 MB | 256 MB (`memory_limit` in `php.ini`) |
| Disk Space | 2 GB | 5 GB+ (uploads grow over time) |
| SSL | Required | Let's Encrypt or host-provided |

**Required PHP Extensions:** `mysqli`, `curl`, `gd` or `imagick`, `mbstring`, `xml`, `zip`, `openssl`

---

## Deployment: Manual (FTP/SFTP)

This is the current deployment method (no CI/CD pipeline configured).

### First-Time Deployment

1. **Upload all files** via SFTP to the server's document root (e.g., `public_html/` or `/var/www/html/`):
   ```bash
   # Use FileZilla, Transmit, or rsync:
   rsync -avz --exclude='wp-content/updraft/' \
     --exclude='wp-content/cache/' \
     --exclude='.DS_Store' \
     /Users/fgomezav/workspace/bitbucket/transestrella/ \
     user@server.com:/var/www/html/transestrella/
   ```

2. **Create the production database** on the server:
   ```sql
   CREATE DATABASE db_transestrella_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   CREATE USER 'transestrella_user'@'localhost' IDENTIFIED BY 'strong_password_here';
   GRANT ALL PRIVILEGES ON db_transestrella_wp.* TO 'transestrella_user'@'localhost';
   FLUSH PRIVILEGES;
   ```

3. **Export the local database** and import it on the server:
   ```bash
   # Export locally (via WP-CLI or phpMyAdmin)
   wp db export transestrella_export.sql

   # Import on server
   mysql -u transestrella_user -p db_transestrella_wp < transestrella_export.sql
   ```

4. **Update `wp-config.php`** on the server with production credentials:
   ```php
   define( 'DB_NAME', 'db_transestrella_wp' );
   define( 'DB_USER', 'transestrella_user' );
   define( 'DB_PASSWORD', 'strong_password_here' );
   define( 'DB_HOST', 'localhost' );  // usually 'localhost' on shared hosting
   define( 'WP_DEBUG', false );
   ```

5. **Run URL search-replace** to update site URLs:
   ```bash
   wp search-replace 'http://transestrella.local' 'https://transestrella.com.co' --all-tables
   ```

6. **Flush rewrite rules:**
   ```bash
   wp rewrite flush
   ```

7. **Verify file permissions:**
   ```bash
   find /var/www/html/transestrella -type f -exec chmod 644 {} \;
   find /var/www/html/transestrella -type d -exec chmod 755 {} \;
   chmod 600 wp-config.php
   ```

---

## Deployment: Incremental Updates

For routine content/plugin updates after the site is live:

### WordPress Core/Plugin Updates
1. Run a **UpdraftPlus backup** before any updates (Admin > Settings > UpdraftPlus)
2. Update via WP Admin (Dashboard > Updates) or WP-CLI:
   ```bash
   wp core update
   wp plugin update --all
   wp theme update astra
   ```
3. Verify the site loads correctly after each update

### Code/Template Changes (HTML Pages)
```bash
# Upload only changed HTML files
rsync -avz html/ user@server.com:/var/www/html/transestrella/html/
```

### Theme Customizations (CSS/code snippets)
- Managed via WordPress Customizer and WP Headers & Footers plugin — **no file upload needed**
- Changes are stored in the database and go live immediately

---

## Apache / `.htaccess` Configuration

WordPress generates its own `.htaccess` (at the root). The standard WordPress rewrite block should be:

```apache
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
```

**Do not manually edit between the `# BEGIN WordPress` and `# END WordPress` markers** — WordPress manages this block automatically.

For SSL redirects, add **above** the WordPress block:
```apache
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

---

## Nginx Configuration (if not using Apache)

```nginx
server {
    listen 443 ssl;
    server_name transestrella.com.co www.transestrella.com.co;

    root /var/www/html/transestrella;
    index index.php index.html;

    ssl_certificate /etc/letsencrypt/live/transestrella.com.co/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/transestrella.com.co/privkey.pem;

    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }

    location ~* \.(js|css|png|jpg|jpeg|gif|ico|svg|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }

    location ~ /\.(ht|git) {
        deny all;
    }
}
```

---

## SSL Certificate Setup (Let's Encrypt)

```bash
# Install Certbot
sudo apt install certbot python3-certbot-apache  # For Apache
sudo apt install certbot python3-certbot-nginx   # For Nginx

# Obtain certificate
sudo certbot --apache -d transestrella.com.co -d www.transestrella.com.co

# Auto-renewal (usually set up automatically by Certbot)
sudo certbot renew --dry-run
```

---

## Post-Deployment Checklist

- [ ] Site loads at production URL with HTTPS
- [ ] `wp-admin/` login works
- [ ] Forminator forms submit and send email notifications
- [ ] Yoast SEO sitemap accessible at `/sitemap_index.xml`
- [ ] 301 redirects working (via EPS 301 Redirects plugin)
- [ ] Static HTML pages accessible at `/html/transestrella-*.html`
- [ ] Media uploads loading correctly
- [ ] UpdraftPlus scheduled backup configured for production
- [ ] Akismet API key entered and active
- [ ] Easy WP SMTP configured and tested (send a test email)
- [ ] `WP_DEBUG` is `false` in production `wp-config.php`
- [ ] File permissions verified (644/755, wp-config.php at 600)

---

## Backup Strategy

- **Automated backups:** UpdraftPlus (configure schedule in Admin > Settings > UpdraftPlus)
- **Before any major update:** Manually trigger a full backup (files + database)
- **Backup retention:** Keep at least 2 recent full backups
- **Offsite storage:** Configure UpdraftPlus to push backups to Google Drive, Dropbox, or S3
- **Local backup archives:** Stored in `wp-content/updraft/` — **exclude from git with `.gitignore`**

### Manual Database Backup
```bash
# Via WP-CLI
wp db export ~/backups/transestrella-$(date +%Y%m%d).sql

# Via mysqldump
mysqldump -u transestrella_user -p db_transestrella_wp > ~/backups/transestrella-$(date +%Y%m%d).sql
```

---

## Rollback Procedure

1. **Database rollback:** Import the pre-update UpdraftPlus backup via Admin > Settings > UpdraftPlus > Restore
2. **File rollback:** Re-upload the previous version of any changed files via SFTP
3. **Plugin downgrade:** Download the previous version from wordpress.org/plugins and upload manually

---

## Production Security Hardening

Add these constants to production `wp-config.php`:

```php
// Disable file editing via admin panel
define( 'DISALLOW_FILE_EDIT', true );

// Disable plugin/theme installation from admin
define( 'DISALLOW_FILE_MODS', true );  // optional - blocks updates too

// Force SSL for admin
define( 'FORCE_SSL_ADMIN', true );

// Limit post revisions
define( 'WP_POST_REVISIONS', 5 );

// Disable XML-RPC if not needed (reduces attack surface)
// (Handle via plugin or server rule, not wp-config)
```
