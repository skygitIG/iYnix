# iYnix

This is the iYnix project repository. It contains web application files organized in the following structure:

## Pages

- `index.php` - Homepage
- `seo-service.php` - SEO services page
- `ppc_management.php` - PPC management services page
- `social-media-marketing.php` - Social media marketing services page
- `ecommerce-marketing.php` - Ecommerce marketing services page
- `content-marketing.php` - Content marketing services page
- `email-marketing.php` - Email marketing services page
- `website-development.php` - Website development services page
- `link-building.php` - Link building services page

## Assets

- `assets/` - Site-wide assets (used by every page, not just the homepage)
  - `vendor/` - Third-party libraries (Bootstrap CSS/JS)
  - `css/` - Custom stylesheets (`custom.css`, `font-size.css`, `services.css`)
  - `images/` - Image assets
    - `icons/` - Icon files
    - `services/` - Images used across the service pages (SEO, PPC, social media, ecommerce)
  - `include/` - Shared PHP includes, reused across pages:
    - `navbar.php` / `footer.php` - Site-wide header/footer
    - `trusted-brands.php` - Homepage's single-row logo marquee
    - `brands-loop.php` - 2-row logo marquee used on the service pages
    - `testimonials.php` - Review slider, parameterized per page (`$testimonials_heading`, `$testimonials_subheading`)
    - `faq.php` - FAQ accordion, parameterized per page (`$faq_heading_pre`, `$faq_heading_hi`, `$faq_items`)
  - `services-img/` - Legacy images used on the services page

## Project Structure

```
iYnix/
├── index.php
├── seo-service.php
├── ppc_management.php
├── social-media-marketing.php
├── ecommerce-marketing.php
├── content-marketing.php
├── email-marketing.php
├── website-development.php
├── link-building.php
├── README.md
└── assets/
    ├── vendor/
    │   ├── css/
    │   └── js/
    ├── css/
    ├── images/
    │   ├── icons/
    │   └── services/
    ├── services-img/
    └── include/
```

## Setup

This repository is synced with your local XAMPP installation at `C:\xampp\htdocs\iYnix`.

## Getting Started

1. Clone this repository
2. Place files in the respective directories
3. Commit changes regularly to GitHub
