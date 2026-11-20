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

Website & design pages:

- `rapid-website-design.php` - Rapid website design
- `website-design.php` - Website design
- `website-redesign.php` - Website redesign
- `website-optimization.php` - Website optimization
- `responsive-design.php` - Responsive design
- `ui-design-services.php` - UI design services
- `ux-design-services.php` - UX design services
- `prototyping.php` - Prototyping
- `interaction-design.php` - Interaction design
- `product-design.php` - Product design
- `digital-branding.php` - Digital branding
- `ecommerce-web-design.php` - Ecommerce web design (not in menu)
- `shopify-web-design.php` - Shopify web design (not in menu)

Marketing pages:

- `digital-marketing.php` - Digital marketing
- `product-marketing.php` - Product marketing
- `b2b-marketing.php` - B2B marketing
- `b2c-marketing.php` - B2C marketing
- `b2c-and-d2c-marketing.php` - B2C and D2C marketing
- `lead-generation.php` - Lead generation
- `social-media-ads.php` - Social media ads
- `digital-pr.php` - Digital PR
- `haro-link-building.php` - HARO link building
- `email-newsletter-design.php` - Email newsletter design

SEO & ecommerce pages:

- `seo-audit.php` - SEO audit
- `local-seo.php` - Local SEO
- `ecommerce-seo.php` - Ecommerce SEO
- `ecommerce-optimization.php` - Ecommerce optimization
- `technical-seo.php` - Technical SEO (not in menu)
- `ai-seo.php` - AI SEO (not in menu)
- `on-page-seo.php` - On-page SEO (not in menu)
- `off-page-seo.php` - Off-page SEO (not in menu)
- `shopify-seo.php` - Shopify SEO (not in menu)
- `seo-content-writing.php` - SEO content writing (not in menu)

App pages:

- `app-store-optimization.php` - App store submission & optimization
- `mobile-app-design.php` - Mobile app design

Atlanta location pages (not in menu):

- `digital-marketing-agency-atlanta.php` - Digital marketing agency, Atlanta
- `seo-company-atlanta.php` - SEO company, Atlanta
- `local-seo-atlanta.php` - Local SEO, Atlanta
- `content-marketing-atlanta.php` - Content marketing, Atlanta
- `ppc-management-atlanta.php` - PPC management, Atlanta
- `social-media-marketing-atlanta.php` - Social media marketing, Atlanta
- `website-design-atlanta.php` - Website design, Atlanta
- `ios-app-development-atlanta.php` - iOS app development, Atlanta
- `android-app-development-atlanta.php` - Android app development, Atlanta
- `app-development-atlanta.php` - App design & development, Atlanta

## Assets

- `assets/` - Site-wide assets (used by every page, not just the homepage)
  - `vendor/` - Third-party libraries (Bootstrap CSS/JS)
  - `css/` - Custom stylesheets (`custom.css`, `font-size.css`, `services.css`, `about.css` for the About pages, `svc.css` for the sub-service, SEO and location pages)
  - `images/` - Image assets, see "Where to find an image" below
  - `include/` - Shared PHP includes, reused across pages:
    - `navbar.php` / `footer.php` - Site-wide header/footer
    - `services-menu.php` - Services/About link lists and contact details shared by the header and footer (edit links here)
    - `trusted-brands.php` - Homepage's single-row logo marquee
    - `brands-loop.php` - 2-row logo marquee used on the service pages
    - `testimonials.php` - Review slider, parameterized per page (`$testimonials_heading`, `$testimonials_subheading`)
    - `faq.php` - FAQ accordion, parameterized per page (`$faq_heading_pre`, `$faq_heading_hi`, `$faq_items`)
- `wordpress/blog-custom.css` - CSS to paste into the WordPress blog (Appearance → Customize → Additional CSS) so it matches the Figma blog design
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
| Sub-service page icons (check, alert, CTA) | `icons/svc/` |
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
├── rapid-website-design.php
├── website-design.php
├── website-redesign.php
├── website-optimization.php
├── responsive-design.php
├── ui-design-services.php
├── ux-design-services.php
├── prototyping.php
├── interaction-design.php
├── product-design.php
├── digital-branding.php
├── ecommerce-web-design.php
├── shopify-web-design.php
├── digital-marketing.php
├── product-marketing.php
├── b2b-marketing.php
├── b2c-marketing.php
├── b2c-and-d2c-marketing.php
├── lead-generation.php
├── social-media-ads.php
├── digital-pr.php
├── haro-link-building.php
├── email-newsletter-design.php
├── seo-audit.php
├── local-seo.php
├── ecommerce-seo.php
├── ecommerce-optimization.php
├── technical-seo.php
├── ai-seo.php
├── on-page-seo.php
├── off-page-seo.php
├── shopify-seo.php
├── seo-content-writing.php
├── app-store-optimization.php
├── mobile-app-design.php
├── digital-marketing-agency-atlanta.php
├── seo-company-atlanta.php
├── local-seo-atlanta.php
├── content-marketing-atlanta.php
├── ppc-management-atlanta.php
├── social-media-marketing-atlanta.php
├── website-design-atlanta.php
├── ios-app-development-atlanta.php
├── android-app-development-atlanta.php
├── app-development-atlanta.php
├── README.md
├── wordpress/
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
        │   ├── nav/
        │   └── svc/
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
        │   ├── ai-seo/
        │   ├── android-app-development/
        │   ├── android-app-development-atlanta/
        │   ├── app-development/
        │   ├── app-development-atlanta/
        │   ├── app-store-optimization/
        │   ├── b2b-marketing/
        │   ├── b2c-d2c-marketing/
        │   ├── b2c-marketing/
        │   ├── content-marketing/
        │   ├── content-marketing-atlanta/
        │   ├── cro-audit/
        │   ├── cro-services/
        │   ├── digital-branding/
        │   ├── digital-marketing/
        │   ├── digital-marketing-agency-atlanta/
        │   ├── digital-pr/
        │   ├── drive-business-growth/
        │   ├── ecommerce/
        │   ├── ecommerce-seo/
        │   ├── ecommerce-web-design/
        │   ├── email-marketing/
        │   ├── email-newsletter-design/
        │   ├── flutter-app-development/
        │   ├── haro-link-building/
        │   ├── interaction-design/
        │   ├── ios-app-development-atlanta/
        │   ├── lead-generation/
        │   ├── link-building/
        │   ├── local-seo/
        │   ├── local-seo-atlanta/
        │   ├── mobile-app-design/
        │   ├── mobile-app-performance/
        │   ├── mobile-app-testing/
        │   ├── off-page-seo/
        │   ├── on-page-seo/
        │   ├── page-speed/
        │   ├── ppc/
        │   ├── ppc-management-atlanta/
        │   ├── product-design/
        │   ├── product-marketing/
        │   ├── rapid-website-design/
        │   ├── react-native-development/
        │   ├── responsive-design/
        │   ├── seo-audit/
        │   ├── seo-company-atlanta/
        │   ├── seo-content-writing/
        │   ├── seo-service/
        │   ├── shopify-seo/
        │   ├── shopify-web-design/
        │   ├── social-media/
        │   ├── social-media-ads/
        │   ├── social-media-marketing-atlanta/
        │   ├── technical-seo/
        │   ├── ui-design/
        │   ├── user-behavior-analytics/
        │   ├── user-experience-testing/
        │   ├── ux-design/
        │   ├── website-design/
        │   ├── website-design-atlanta/
        │   ├── website-development/
        │   ├── website-optimization/
        │   └── website-redesign/
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
