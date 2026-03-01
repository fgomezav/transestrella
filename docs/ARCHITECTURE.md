# ARCHITECTURE.md — Transestrella System Design

## Overview

The Transestrella website is composed of two parallel layers that share a visual identity but are technically independent:

1. **WordPress CMS** — manages all dynamic content, forms, SEO, and media
2. **Static HTML pages** (`/html/`) — standalone marketing/landing pages with no CMS dependency

```
┌─────────────────────────────────────────────────────────────┐
│                    WEB SERVER (Apache/Nginx)                 │
│                                                             │
│   ┌────────────────────────┐   ┌──────────────────────┐    │
│   │    WordPress (CMS)     │   │  Static HTML (/html/) │    │
│   │                        │   │                        │    │
│   │  index.php             │   │  *.html files          │    │
│   │  ↓                     │   │  Standalone pages      │    │
│   │  WordPress Core        │   │  No PHP / No DB        │    │
│   │  ↓                     │   │  Shared brand CSS      │    │
│   │  Astra Theme           │   └──────────────────────┘    │
│   │  ↓                     │                                 │
│   │  Plugins (7 active)    │                                 │
│   │  ↓                     │                                 │
│   │  MySQL Database        │                                 │
│   └────────────────────────┘                                 │
└─────────────────────────────────────────────────────────────┘
```

---

## WordPress Architecture

### Request Lifecycle

```
Browser Request
      │
      ▼
wp-load.php → wp-config.php (DB creds, constants)
      │
      ▼
wp-settings.php (loads core, plugins, theme)
      │
      ▼
Plugin hooks fire (init, wp_loaded, etc.)
      │
      ▼
WordPress Query (WP_Query resolves URL → post/page)
      │
      ▼
Astra Theme Templates (header.php, page.php, footer.php, etc.)
      │
      ▼
HTML Response to Browser
```

### Key WordPress Files

| File | Purpose |
|------|---------|
| `wp-config.php` | Database, salts, debug flags — **do not commit production values** |
| `wp-settings.php` | Core bootstrap (do not edit) |
| `wp-content/themes/astra/functions.php` | Theme setup: feature support, enqueued assets, includes |
| `wp-content/themes/astra/theme.json` | Block editor design tokens (colors, typography, spacing) |
| `wp-content/themes/astra/style.css` | Theme metadata header (name, version, author) |

### Database Schema (WordPress Standard)

WordPress maintains its own relational schema. Key tables with prefix `wp_`:

| Table | Contains |
|-------|---------|
| `wp_posts` | Pages, posts, attachments, revisions |
| `wp_postmeta` | Meta fields for pages/posts (Elementor data, Yoast SEO, etc.) |
| `wp_options` | Site settings, plugin configs, theme mods, widget data |
| `wp_users` | Admin and editor accounts |
| `wp_usermeta` | User capabilities and profile data |
| `wp_terms` / `wp_term_taxonomy` | Categories, tags, custom taxonomies |
| `wp_comments` | Comments and contact entries |

> Forminator form submissions are stored in custom tables created by the plugin (prefixed `wp_frmt_`).

---

## Theme Architecture (Astra)

Astra is a performance-focused multipurpose theme. It renders output via a hook-based system rather than traditional PHP template overrides.

```
wp-content/themes/astra/
├── functions.php          # Master include file — loads all /inc/ classes
├── theme.json             # Block editor tokens
├── style.css              # Theme header metadata
├── index.php              # Fallback template
├── page.php               # Standard page template
├── header.php             # Global header markup
├── footer.php             # Global footer markup
├── inc/
│   ├── customizer/        # Customizer panels and settings
│   ├── class-astra-*      # Core feature classes
│   └── ...
├── assets/
│   ├── css/
│   │   ├── minified/      # Production CSS (do not edit)
│   │   └── unminified/    # Source CSS for reference
│   └── js/
│       ├── minified/      # Production JS
│       └── unminified/    # Source JS for reference
└── template-parts/        # Reusable template fragments
```

**Important:** Never directly edit files inside `wp-content/themes/astra/`. Customizations belong in:
- WordPress Customizer (Appearance > Customize) for visual/layout settings
- WP Headers and Footers plugin for custom CSS/JS snippets
- A child theme if PHP template overrides are required

---

## Plugin Architecture & Data Flow

```
User visits page
      │
      ├─→ Yoast SEO injects meta tags, OG tags, JSON-LD schema
      │
      ├─→ Astra Theme renders header + page content
      │
      ├─→ Forminator renders contact/quote form (if page contains form shortcode)
      │         │
      │         ▼
      │    User submits form
      │         │
      │         ├─→ Form entry saved to wp_frmt_* tables
      │         │
      │         └─→ Easy WP SMTP sends notification email to admin
      │
      └─→ WP Headers and Footers injects custom analytics/tracking code
```

### Plugin Interaction Map

```
Akismet ←──────────── Comment submission (spam check)
Yoast SEO ─────────── wp_head() (meta, sitemaps, schema)
Forminator ────────── [forminator_form id="X"] shortcode
Easy WP SMTP ─────── wp_mail() override (outbound email)
EPS 301 Redirects ─── init hook (URL redirect rules)
UpdraftPlus ─────────── wp-cron (scheduled backups)
WP Headers & Footers ── wp_head() / wp_footer() hooks
```

---

## Static HTML Pages (`/html/`)

These pages were built outside WordPress as pixel-perfect marketing templates.

### Structure of Each HTML File

```html
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Meta tags, viewport -->
  <!-- Preconnect to Google Fonts -->
  <!-- Inline <style> block with:
         CSS custom properties (--ts-blue, --ts-gold, etc.)
         Component styles (hero, cards, nav, footer)  -->
</head>
<body>
  <!-- Fixed navigation bar (hardcoded links) -->
  <!-- Hero section -->
  <!-- Content sections -->
  <!-- Footer with company info -->
</body>
</html>
```

### Page Inventory

| File | Page | Content |
|------|------|---------|
| `transestrella-nosotros.html` | Nosotros (About) | Company history, mission, values |
| `transestrella-servicios.html` | Servicios (Services) | Service overview |
| `transestrella-carga-nacional.html` | Carga Nacional | National cargo service detail |
| `transestrella-transporte-urbano.html` | Transporte Urbano | Urban transport service detail |
| `transestrella-mercancias-peligrosas.html` | Mercancías Peligrosas | Hazardous goods service detail |
| `transestrella-itr.html` | ITR | ITR service detail |
| `transestrella-sucursales.html` | Sucursales (Branches) | Branch locations overview |
| `transestrella-sucursal-bogota.html` | Sucursal Bogotá | Bogotá branch detail |
| `transestrella-sucursal-medellin.html` | Sucursal Medellín | Medellín branch detail |
| `transestrella-sucursal-cali.html` | Sucursal Cali | Cali branch detail |
| `transestrella-sucursal-barranquilla.html` | Sucursal Barranquilla | Barranquilla branch detail |

### Design System (Shared across all HTML pages)

```css
/* Brand Tokens */
--ts-blue: #0F5BA7;
--ts-blue-dark: #0A4580;
--ts-gold: #F5A623;
--ts-gray: #F5F5F5;

/* Typography */
/* Display/Headings */ font-family: 'Barlow Condensed', sans-serif;
/* Body */           font-family: 'Nunito Sans', sans-serif;
```

---

## Content & Language

- All user-facing content is in **Colombian Spanish (es_CO)**.
- WordPress language files are stored in `wp-content/languages/`.
- The Astra theme includes WPML compatibility (`wpml-config.xml`) should multilingual support be needed in the future.

---

## Media & Assets

- Uploaded media: `wp-content/uploads/YYYY/MM/filename`
- Current media years: **2025**, **2026**
- Additional upload subdirectories: `astra-docs/`, `et_temp/`, `forminator/`, `rank-math/`
- Elementor temporary files: `wp-content/et-cache/` and `wp-content/et-cache-old/`

---

## Security Model

| Concern | Current Approach |
|---------|-----------------|
| Admin login protection | WordPress default (`/wp-login.php`) |
| Spam | Akismet (requires API key to be active) |
| Form security | Forminator CSRF tokens + honeypot |
| Authentication | WordPress salts defined in `wp-config.php` |
| Debug exposure | `WP_DEBUG = false` (production-safe default) |
| File permissions | Standard WordPress: 644 files / 755 directories |

---

## Scalability Considerations

- **CDN:** No CDN is currently configured. For media-heavy production traffic, connect `wp-content/uploads/` to a CDN (Cloudflare, BunnyCDN, etc.)
- **Caching:** No caching plugin is installed. Add WP Rocket, W3 Total Cache, or Cloudflare for production performance.
- **Object Cache:** Not configured. For high traffic, add Redis object cache.
- **Search:** WordPress default search. If advanced search is needed, add ElasticPress or Relevanssi.
