# CLAUDE.md — Transestrella WordPress Site

## Project Overview

**Transportadora Estrella** is the corporate website for a Colombian cargo and freight transportation company. The site serves as a marketing and lead generation platform, presenting company services (national cargo, urban transport, hazardous goods), branch locations, and contact forms for quote requests.

The project is a **WordPress installation** with the Astra theme, a set of standard plugins, and a separate directory of **12 custom static HTML landing pages** that were designed independently of WordPress.

---

## Tech Stack & Versions

| Component | Technology | Version |
|-----------|-----------|---------|
| CMS | WordPress | 6.9+ |
| Language | PHP | 7.4 min / 8.3+ recommended |
| Database | MySQL / MariaDB | 5.5.5+ / 10.6+ recommended |
| Theme | Astra | 4.12.1 |
| Frontend | HTML5, CSS3 (custom) | — |
| Fonts | Google Fonts (Barlow Condensed, Nunito Sans) | — |
| Local Dev | MAMP / similar (port 8889 for MySQL) | — |

**There is no Node.js, npm, webpack, or Vite build process** for the WordPress portion. The static HTML pages in `/html/` are also vanilla HTML/CSS with no build step.

---

## Directory Structure

```
transestrella/
├── CLAUDE.md                  # This file
├── docs/                      # Project documentation
│   ├── ARCHITECTURE.md
│   ├── DEPLOYMENT.md
│   └── INTEGRATIONS.md
├── wp-config.php              # WordPress config (DB creds, salts, debug)
├── index.php                  # WordPress front controller
├── wp-login.php               # Admin login
├── wp-admin/                  # WordPress admin panel (do not edit)
├── wp-includes/               # WordPress core (do not edit)
├── wp-content/
│   ├── themes/
│   │   ├── astra/             # ⭐ Active theme (v4.12.1)
│   │   ├── twentytwentyfive/  # Inactive default themes
│   │   ├── twentytwentyfour/
│   │   └── twentytwentythree/
│   ├── plugins/
│   │   ├── akismet/           # Spam protection
│   │   ├── easy-wp-smtp/      # Email delivery via SMTP
│   │   ├── eps-301-redirects/ # URL redirect manager
│   │   ├── forminator/        # Contact/quote forms
│   │   ├── updraftplus/       # Backup & restore
│   │   ├── wordpress-seo/     # Yoast SEO (v26.8)
│   │   └── wp-headers-and-footers/ # Custom code injection
│   ├── uploads/               # Media library (2025/, 2026/ subfolders)
│   ├── languages/             # Translation files (es_CO)
│   └── updraft/               # Backup archives (large, do not commit)
└── html/                      # ⭐ Custom static HTML landing pages
    ├── transestrella-nosotros.html
    ├── transestrella-servicios.html
    ├── transestrella-sucursales.html
    ├── transestrella-sucursal-bogota.html
    ├── transestrella-sucursal-medellin.html
    ├── transestrella-sucursal-cali.html
    ├── transestrella-sucursal-barranquilla.html
    ├── transestrella-carga-nacional.html
    ├── transestrella-transporte-urbano.html
    ├── transestrella-mercancias-peligrosas.html
    └── transestrella-itr.html
```

---

## Local Development Setup

### Prerequisites
- PHP 8.3+ (or 7.4+)
- MySQL 5.5.5+ or MariaDB 10.6+
- A local web server: **MAMP Pro** (configured for port 8889), Laragon, or similar
- WordPress CLI (`wp-cli`) recommended but not required

### Steps

1. **Clone the repository** and place it in your web server's document root.

2. **Create the database:**
   ```sql
   CREATE DATABASE db_transestrella_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```

3. **Configure `wp-config.php`** with your local credentials:
   ```php
   define( 'DB_NAME', 'db_transestrella_wp' );
   define( 'DB_USER', 'your_db_user' );
   define( 'DB_PASSWORD', 'your_db_password' );
   define( 'DB_HOST', '127.0.0.1:8889' );  // adjust port for your stack
   ```

4. **Import the database dump** (obtain from team or UpdraftPlus backup):
   ```bash
   mysql -u root -p db_transestrella_wp < transestrella_backup.sql
   ```

5. **Update the site URL** in the database if your local domain differs:
   ```sql
   UPDATE wp_options SET option_value = 'http://transestrella.local' WHERE option_name IN ('siteurl', 'home');
   ```
   Or with WP-CLI:
   ```bash
   wp search-replace 'https://transestrella.com.co' 'http://transestrella.local' --all-tables
   ```

6. **Enable debug mode** during development — add to `wp-config.php`:
   ```php
   define( 'WP_DEBUG', true );
   define( 'WP_DEBUG_LOG', true );
   define( 'WP_DEBUG_DISPLAY', false );
   ```
   Logs will appear at `wp-content/debug.log`.

7. **Access the site:**
   - Frontend: `http://transestrella.local/`
   - Admin: `http://transestrella.local/wp-admin/`

---

## Key Commands

### WP-CLI (recommended)
```bash
# Check WordPress status
wp core version

# Update all plugins
wp plugin update --all

# Flush rewrite rules (do this after any permalink changes)
wp rewrite flush

# Export database
wp db export transestrella_backup.sql

# Import database
wp db import transestrella_backup.sql

# Search-replace URLs (e.g., dev → production)
wp search-replace 'http://transestrella.local' 'https://transestrella.com.co' --all-tables

# List installed plugins and their status
wp plugin list

# Clear object cache
wp cache flush
```

### No build step required
There is no `npm install`, `composer install`, or build pipeline for this project. WordPress and its plugins are version-controlled as-is.

---

## Environment Variables

This project uses WordPress's `wp-config.php` for configuration — there is no `.env` file. Key constants:

| Constant | Current Dev Value | Purpose |
|----------|------------------|---------|
| `DB_NAME` | `db_transestrella_wp` | Database name |
| `DB_USER` | `root` | Database user |
| `DB_PASSWORD` | `root` | Database password |
| `DB_HOST` | `127.0.0.1:8889` | DB host:port (MAMP default) |
| `DB_CHARSET` | `utf8mb4` | Character set |
| `WP_DEBUG` | `false` | Enable PHP/WP error display |
| `WP_DEBUG_LOG` | *(not set)* | Write errors to debug.log |
| `table_prefix` | `wp_` | WordPress table prefix |

> **Security note:** Never commit production database credentials. For production, consider using a secrets manager or at minimum a `.gitignore`-excluded `wp-config-local.php`.

---

## Database Setup

- **Database name:** `db_transestrella_wp`
- **Table prefix:** `wp_`
- **Charset:** `utf8mb4` / `utf8mb4_unicode_ci`
- **WordPress manages its own schema** via the installer and plugin activations — no manual migrations are needed.
- Backups are managed via **UpdraftPlus** and stored in `wp-content/updraft/`. Do not commit these archives to git.

---

## Design System & Conventions

### Brand Colors (CSS Custom Properties in `/html/` pages)
```css
--ts-blue: #0F5BA7;       /* Primary brand blue */
--ts-blue-dark: #0A4580;  /* Hover / dark variant */
--ts-gold: #F5A623;       /* Accent / CTA color */
--ts-gray: #F5F5F5;       /* Section backgrounds */
```

### Typography
- **Display / Headings:** Barlow Condensed (weights: 400, 600, 700, 800) — Google Fonts
- **Body Text:** Nunito Sans (weights: 300, 400, 600, 700) — Google Fonts

### Static HTML Pages (`/html/`)
- These pages are **standalone HTML files** — no WordPress dependency, no templating engine.
- They share a common visual design system (same CSS variables and fonts as the WordPress theme).
- Each file name follows the pattern: `transestrella-[page-slug].html`
- All content is in **Colombian Spanish (es_CO)**.
- When adding a new page, copy an existing file as a template to maintain brand consistency.

### WordPress Theme
- **Active theme:** Astra (not a child theme — customizations go via WordPress Customizer or custom CSS, not by editing theme files directly).
- **Do not edit files inside `wp-content/themes/astra/`** — they will be overwritten on theme updates.
- Custom code snippets should be injected via the **WP Headers and Footers** plugin.

### Astra Theme Customization
- Global settings managed via WordPress Customizer (`Appearance > Customize`).
- `theme.json` controls block editor design tokens.
- Elementor cache stored in `wp-content/et-cache/`.

---

## Plugins — Quick Reference

| Plugin | Admin Path | Purpose |
|--------|-----------|---------|
| Akismet | Settings > Akismet | Spam comment filtering (requires API key) |
| Forminator | Forminator | Contact and quote forms — **primary lead capture** |
| Easy WP SMTP | Settings > Easy WP SMTP | Outbound email delivery |
| EPS 301 Redirects | Tools > Redirects | Manage URL redirects without code |
| UpdraftPlus | Settings > UpdraftPlus | Backups — run before any major changes |
| Yoast SEO | SEO | On-page SEO, XML sitemaps |
| WP Headers & Footers | Settings > WP Headers and Footers | Inject custom HTML/JS/CSS globally |

---

## Known Issues & Quirks

1. **No child theme** — If you need to override Astra template files, create a child theme first rather than editing theme files directly. Astra updates will overwrite changes.

2. **MAMP port 8889** — The current `wp-config.php` hardcodes `127.0.0.1:8889`. If you use a different MySQL port (standard is `3306`), update `DB_HOST` accordingly.

3. **Static HTML pages are disconnected from WordPress** — The `/html/` pages have no WordPress headers/footers injected. Navigation links inside them are hardcoded. When the site URL changes, update anchor `href` values in each HTML file manually.

4. **No staging environment defined** — There is currently no automated promotion path from local → staging → production. URL swaps are done manually with `wp search-replace`.

5. **Large `updraft/` folder** — Backup archives accumulate in `wp-content/updraft/`. This directory should be in `.gitignore` to avoid bloating the repository.

6. **Authentication salts are committed** — The `wp-config.php` in the repo contains real authentication salts. For production, regenerate salts at https://api.wordpress.org/secret-key/1.1/salt/ and never share the production salts publicly.

---

## Git Workflow

Currently no `.gitignore` or formal branching strategy is documented. Recommended setup:

### `.gitignore` (add to repo root)
```
wp-config.php
wp-content/uploads/
wp-content/updraft/
wp-content/et-cache/
wp-content/et-cache-old/
wp-content/cache/
*.log
.DS_Store
```

### Recommended Branching
- `main` — production-ready code
- `develop` — integration branch for ongoing work
- `feature/[description]` — individual features or page additions
- Deploy via FTP/SSH diff or a deployment tool (Deployer, Beanstalk, etc.)

---

## Related Documentation

- [docs/ARCHITECTURE.md](docs/ARCHITECTURE.md) — System design and component relationships
- [docs/DEPLOYMENT.md](docs/DEPLOYMENT.md) — Server setup and deployment steps
- [docs/INTEGRATIONS.md](docs/INTEGRATIONS.md) — Third-party services and how they connect
