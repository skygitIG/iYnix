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
- `app-design-development.php` - App design and development services page
- `cro-services.php` - Conversion rate optimization (CRO) services page
- `page-speed-optimization.php` - Page speed / site speed optimization services page
- `cro-audit.php` - Conversion rate optimization (CRO) audit page
- `user-behavior-analytics.php` - User behavior analytics services page
- `user-experience-testing.php` - User experience testing services page
- `ios-app-development-company.php` - iOS app development page
- `android-app-development.php` - Android app development page
- `flutter-app-development-company.php` - Flutter app development page
- `react-native-app-development-company.php` - React Native app development page
- `mobile-app-testing.php` - Mobile app testing services page
- `mobile-app-store-optimization.php` - Mobile app optimization page
- `who-we-are.php` - About: Who We Are
- `what-we-do.php` - About: What We Do
- `how-we-work.php` - About: How We Work
- `our-leadership.php` - About: Our Leadership

## Assets

- `assets/` - Site-wide assets (used by every page, not just the homepage)
  - `vendor/` - Third-party libraries (Bootstrap CSS/JS)
  - `css/` - Custom stylesheets (`custom.css`, `font-size.css`, `services.css`, `about.css` for the About pages)
  - `images/` - Image assets, see "Where to find an image" below
  - `include/` - Shared PHP includes, reused across pages:
    - `navbar.php` / `footer.php` - Site-wide header/footer
    - `services-menu.php` - Services/About link lists and contact details shared by the header and footer (edit links here)
    - `trusted-brands.php` - Homepage's single-row logo marquee
    - `brands-loop.php` - 2-row logo marquee used on the service pages
    - `testimonials.php` - Review slider, parameterized per page (`$testimonials_heading`, `$testimonials_subheading`)
    - `faq.php` - FAQ accordion, parameterized per page (`$faq_heading_pre`, `$faq_heading_hi`, `$faq_items`)
- `design-specs/` - Designer PDF specs for reference only, not used by the website

## Where to find an image

| Looking for | Folder (inside `assets/images/`) |
| --- | --- |
| iYnix logo | `brand/` |
| Homepage hero video banners | `home/hero/` |
| Homepage hero carousel and mockups | `home/carousel/` |
| Homepage client logos | `home/client-logos/` |
| Homepage portfolio work | `home/portfolio/` |
| Homepage team photos | `home/team/` |
| Homepage industry icons | `home/industries/` |
| Other homepage pictures | `home/photos/` |
| A service page's banner and pictures | `services/<page-name>/` |
| About pages' pictures | `about/<page-name>/` |
| Header/footer logos and icons | `icons/nav/` |
| Logos in the service pages' "Trusted by Brands" | `shared/brand-logos/` |
| Photos used on more than one page | `shared/photos/` |
| CTA box icon and background | `shared/cta/` |
| Week 01-04 process numbers | `shared/step-numbers/` |
| Warning icon, slider arrows, rating stars | `shared/ui/` |
| General icons | `icons/` |
| Images no page currently uses | `_unused/` |

`_unused/` keeps the old folder names and is safe to clear once nobody needs those files.

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
├── app-design-development.php
├── cro-services.php
├── page-speed-optimization.php
├── cro-audit.php
├── user-behavior-analytics.php
├── user-experience-testing.php
├── ios-app-development-company.php
├── android-app-development.php
├── flutter-app-development-company.php
├── react-native-app-development-company.php
├── mobile-app-testing.php
├── mobile-app-store-optimization.php
├── who-we-are.php
├── what-we-do.php
├── how-we-work.php
├── our-leadership.php
├── README.md
├── design-specs/
└── assets/
    ├── vendor/
    │   ├── css/
    │   └── js/
    ├── css/
    ├── include/
    └── images/
        ├── brand/
        ├── icons/
        │   └── nav/
        ├── home/
        │   ├── carousel/
        │   ├── client-logos/
        │   ├── hero/
        │   ├── industries/
        │   ├── photos/
        │   ├── portfolio/
        │   └── team/
        ├── about/
        │   ├── how-we-work/
        │   ├── our-leadership/
        │   ├── what-we-do/
        │   └── who-we-are/
        ├── services/
        │   ├── android-app-development/
        │   ├── app-development/
        │   ├── content-marketing/
        │   ├── cro-audit/
        │   ├── cro-services/
        │   ├── drive-business-growth/
        │   ├── ecommerce/
        │   ├── email-marketing/
        │   ├── flutter-app-development/
        │   ├── link-building/
        │   ├── mobile-app-performance/
        │   ├── mobile-app-testing/
        │   ├── page-speed/
        │   ├── ppc/
        │   ├── react-native-development/
        │   ├── seo-service/
        │   ├── social-media/
        │   ├── user-behavior-analytics/
        │   ├── user-experience-testing/
        │   └── website-development/
        ├── shared/
        │   ├── brand-logos/
        │   ├── cta/
        │   ├── photos/
        │   ├── step-numbers/
        │   └── ui/
        └── _unused/
```

## Setup

This repository is synced with your local XAMPP installation at `C:\xampp\htdocs\iYnix`.

## Getting Started

1. Clone this repository
2. Place files in the respective directories
3. Commit changes regularly to GitHub
