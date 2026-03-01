# INTEGRATIONS.md — Third-Party Services & Connections

## Overview

| Service | Plugin/Method | Purpose | Requires Key? |
|---------|--------------|---------|--------------|
| Google Fonts | Direct HTML link | Brand typography | No |
| Akismet | WordPress plugin | Spam filtering | Yes (API key) |
| SMTP Email | Easy WP SMTP plugin | Outbound email delivery | Yes (SMTP creds) |
| Yoast SEO | WordPress plugin | SEO meta, sitemaps | No (premium optional) |
| Forminator | WordPress plugin | Contact/quote forms | No (built-in) |
| UpdraftPlus | WordPress plugin | Backups | Optional (remote storage) |

---

## 1. Google Fonts

**Used in:** All `/html/` static pages and Astra theme
**Method:** DNS preconnect + stylesheet link in `<head>`

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800&family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
```

**Fonts loaded:**
- `Barlow Condensed` — headings/display (weights 400, 600, 700, 800)
- `Nunito Sans` — body text (weights 300, 400, 600, 700)

**Configuration:** No API key required. If GDPR compliance is a concern (EU users), self-host the fonts instead using a tool like [google-webfonts-helper](https://gwfh.mranftl.com/).

---

## 2. Akismet Anti-Spam

**Plugin:** `wp-content/plugins/akismet/`
**Admin:** Settings > Akismet Anti-Spam
**Requires:** Akismet API key (free tier available at akismet.com)

### Setup
1. Go to **Settings > Akismet Anti-Spam** in WP Admin
2. Enter the API key obtained from [akismet.com](https://akismet.com)
3. Choose a plan (Personal plan is free for non-commercial use)

### How It Works
- Every comment submitted goes through Akismet's spam classification API
- Spam is held in the moderation queue or discarded
- No database changes needed — configured entirely in `wp_options`

### Key `wp_options` entries (set by plugin)
- `akismet_strictness`
- `akismet_spam_count`

---

## 3. Easy WP SMTP (Email Delivery)

**Plugin:** `wp-content/plugins/easy-wp-smtp/`
**Admin:** Settings > Easy WP SMTP
**Purpose:** Replaces PHP's `mail()` with a reliable SMTP connection to ensure contact form notifications and admin emails are delivered

### Configuration
Go to **Settings > Easy WP SMTP** and configure:

| Field | Value |
|-------|-------|
| From Email | `noreply@transestrella.com.co` (or company address) |
| From Name | `Transportadora Estrella` |
| SMTP Host | *(provided by email provider — e.g., `smtp.gmail.com`, `mail.transestrella.com.co`)* |
| SMTP Port | `587` (TLS) or `465` (SSL) |
| Encryption | `TLS` recommended |
| Authentication | Yes |
| Username | *(SMTP account email)* |
| Password | *(SMTP account password or app password)* |

### Common SMTP Providers

**Gmail (with App Password):**
- Host: `smtp.gmail.com`
- Port: `587`, TLS
- Requires: Google account with 2FA + App Password generated

**cPanel Hosting (most shared hosts):**
- Host: `mail.transestrella.com.co` (or server hostname)
- Port: `587` or `465`
- Credentials: cPanel email account

### Testing
Use the "Test Email" button within Easy WP SMTP settings to verify delivery before going live.

---

## 4. Forminator (Contact & Quote Forms)

**Plugin:** `wp-content/plugins/forminator/`
**Admin:** Forminator
**Purpose:** All lead capture and contact forms on the site

### Form Shortcode Usage
Forms are embedded in WordPress pages/posts using shortcodes:
```
[forminator_form id="123"]
```
To find form IDs: Forminator > Forms — the ID is shown in the form list.

### Form Submission Flow
```
User fills form → Forminator validates (CSRF + honeypot)
      │
      ├─→ Saves entry to wp_frmt_form_entry + wp_frmt_form_entry_meta tables
      │
      └─→ Sends email notification via wp_mail() → Easy WP SMTP → SMTP server
```

### Email Notifications
Configure per-form in Forminator > Forms > [Form Name] > Email Notifications:
- **Admin notification:** Sent to company email when a form is submitted
- **User confirmation:** Optional confirmation email to the person who submitted

### Key Features Available
- Conditional logic (show/hide fields based on selections)
- File uploads (for document attachments)
- Payment integration (Stripe/PayPal — not currently configured)
- GDPR data export/erasure support

### Database Tables Created by Forminator
| Table | Contains |
|-------|---------|
| `wp_frmt_form_entry` | Form submission records |
| `wp_frmt_form_entry_meta` | Individual field values per submission |
| `wp_frmt_poll_entry` | Poll entries (if polls are used) |

---

## 5. Yoast SEO

**Plugin:** `wp-content/plugins/wordpress-seo/`
**Admin:** SEO
**Version:** 26.8
**Purpose:** On-page SEO optimization, meta tags, XML sitemaps, social sharing metadata

### Key Features in Use
- **Meta title & description** per page/post (stored in `wp_postmeta` as `_yoast_wpseo_title`, `_yoast_wpseo_metadesc`)
- **XML Sitemaps** — accessible at `/sitemap_index.xml`
- **Open Graph / Twitter Cards** — social sharing previews
- **Structured Data (JSON-LD)** — organization, breadcrumb, webpage schema auto-injected

### Sitemap URLs
- Index: `https://transestrella.com.co/sitemap_index.xml`
- Posts: `https://transestrella.com.co/post-sitemap.xml`
- Pages: `https://transestrella.com.co/page-sitemap.xml`

### Google Search Console Connection
After deploying to production:
1. Verify ownership of `transestrella.com.co` in [Google Search Console](https://search.google.com/search-console)
2. Submit the sitemap URL: `https://transestrella.com.co/sitemap_index.xml`
3. The Yoast verification meta tag can be added via SEO > General > Webmaster Tools

### Yoast Premium (optional)
The free version is installed. Yoast Premium adds redirect manager, internal link suggestions, and multiple focus keywords. The EPS 301 Redirects plugin currently handles redirects.

---

## 6. UpdraftPlus (Backup & Restore)

**Plugin:** `wp-content/plugins/updraftplus/`
**Admin:** Settings > UpdraftPlus Backups
**Backup storage:** `wp-content/updraft/` (local by default)

### Backup Configuration
Go to **Settings > UpdraftPlus Backups > Settings** to configure:

| Setting | Recommended Value |
|---------|-----------------|
| Files backup schedule | Weekly |
| Database backup schedule | Daily |
| Retain backups | 2-3 copies |
| Remote storage | Google Drive, Dropbox, or S3 (configure offsite!) |

### Remote Storage Options
UpdraftPlus supports:
- **Google Drive** — OAuth connection, free 15 GB storage
- **Dropbox** — OAuth connection
- **Amazon S3** — Requires AWS access key + secret key
- **FTP/SFTP** — Any server with FTP access

### Manual Backup
Admin > Settings > UpdraftPlus Backups > click **Backup Now**
Select both "Include your database" and "Include your files" options.

### Restore Procedure
1. Admin > Settings > UpdraftPlus Backups > Existing Backups
2. Select the backup to restore
3. Choose components (database, plugins, themes, uploads, others)
4. Click Restore

### Files Excluded from Backup (recommended)
Configure in UpdraftPlus settings to exclude:
- `wp-content/updraft/` (the backups themselves)
- `wp-content/cache/`
- `wp-content/et-cache/`

---

## 7. EPS 301 Redirects

**Plugin:** `wp-content/plugins/eps-301-redirects/`
**Admin:** Tools > 301 Redirects
**Purpose:** Manage URL redirects for SEO-safe page moves and URL cleanup

### Adding a Redirect
1. Go to Tools > 301 Redirects
2. Enter the **Request URL** (old URL, relative path e.g. `/old-page/`)
3. Enter the **Destination URL** (new URL, can be absolute or relative)
4. Save

### Common Use Cases
- Redirecting old page slugs after WordPress page restructuring
- Pointing `/html/` page URLs to their WordPress equivalents (or vice versa)
- Handling URL changes after domain migration

---

## 8. WP Headers and Footers

**Plugin:** `wp-content/plugins/wp-headers-and-footers/`
**Admin:** Settings > WP Headers and Footers
**Purpose:** Inject custom HTML, CSS, or JavaScript into the global `<head>` or before `</body>` without editing theme files

### Typical Uses
- Google Analytics / Google Tag Manager script
- Facebook Pixel
- Custom global CSS overrides
- Cookie consent scripts
- Structured data (JSON-LD) snippets

### How to Add a Script
1. Admin > Settings > WP Headers and Footers
2. Paste code into **Header** (runs in `<head>`), **Body** (runs after `<body>`), or **Footer** (runs before `</body>`)
3. Save

> This is the **correct place** to add analytics or tracking scripts — not the theme files.

---

## Future Integrations to Consider

| Service | Purpose | Plugin |
|---------|---------|--------|
| Google Analytics 4 / GTM | Traffic analytics | Site Kit by Google or manual via WP Headers & Footers |
| Facebook / Meta Pixel | Ad retargeting | Manual via WP Headers & Footers |
| WhatsApp Business | Lead chat | WP Social Chat or similar |
| WooCommerce | Online payments / quote checkout | WooCommerce (Yoast and Forminator are already compatible) |
| Redis / Memcached | Object caching | Redis Object Cache plugin |
| Cloudflare | CDN + DDoS protection | Cloudflare plugin or DNS-level setup |
