<?php
// Single source for the Services menu (Figma "Website header" + "Website footer", Nov 2026).
// Used by navbar.php (desktop mega menu + mobile accordion) and footer.php (services accordion).
// Pages that are not built yet point to '#'. Replace with the real file when the page exists.
// 'col' = column in the desktop mega menu (1-4), in Figma's top-to-bottom order.
$iynix_services = [
    ['title' => 'Digital marketing', 'col' => 1, 'links' => [
        ['Digital Marketing', 'digital-marketing.php'],
        ['Content Marketing', 'content-marketing.php'],
        ['PPC Management Services', 'ppc_management.php'],
        ['Email Marketing', 'email-marketing.php'],
        ['Lead Generation', 'lead-generation.php'],
        ['Product Marketing', 'product-marketing.php'],
        ['B2B Marketing', 'b2b-marketing.php'],
        ['B2C Marketing', 'b2c-marketing.php'],
        ['B2C and D2C', 'b2c-and-d2c-marketing.php'],
        ['Business Automation & CRM', '#'],
    ]],
    ['title' => 'Social media', 'col' => 1, 'links' => [
        ['Social Media Ads', 'social-media-ads.php'],
        ['Social Media Marketing', 'social-media-marketing.php'],
    ]],
    ['title' => 'SEO & link building', 'col' => 2, 'links' => [
        ['SEO', 'seo-service.php'],
        ['SEO Audit', 'seo-audit.php'],
        ['Local SEO Service', 'local-seo.php'],
        ['Page Speed Optimization', 'page-speed-optimization.php'],
        ['Link Building', 'link-building.php'],
        ['HARO Link Building', 'haro-link-building.php'],
        ['Digital PR', 'digital-pr.php'],
    ]],
    ['title' => 'E-commerce solutions', 'col' => 2, 'links' => [
        ['E-commerce SEO', 'ecommerce-seo.php'],
        ['E-commerce Optimization', 'ecommerce-optimization.php'],
        ['E-commerce Marketing', 'ecommerce-marketing.php'],
    ]],
    ['title' => 'UI/UX design & branding', 'col' => 3, 'links' => [
        ['UI Design Services', 'ui-design-services.php'],
        ['UX Design Services', 'ux-design-services.php'],
        ['Prototyping', 'prototyping.php'],
        ['Interaction Design', 'interaction-design.php'],
        ['Mobile App Design', 'mobile-app-design.php'],
        ['Website Design', 'website-design.php'],
        ['Responsive Design', 'responsive-design.php'],
        ['Product Design', 'product-design.php'],
        ['Digital Branding', 'digital-branding.php'],
    ]],
    ['title' => 'Conversion optimization', 'col' => 3, 'links' => [
        ['CRO Services', 'cro-services.php'],
        ['CRO Audit', 'cro-audit.php'],
        ['User Behaviour Analytics', 'user-behavior-analytics.php'],
        ['User Experience Testing', 'user-experience-testing.php'],
    ]],
    ['title' => 'Website development', 'col' => 4, 'links' => [
        ['Website Development', 'website-development.php'],
        ['Website Design & Development', '#'],
        ['Website Redesign', 'website-redesign.php'],
        ['Website Optimisation', 'website-optimization.php'],
        ['Rapid Website Design', 'rapid-website-design.php'],
        ['E-Mail Newsletter Design', 'email-newsletter-design.php'],
    ]],
    ['title' => 'Mobile app development', 'col' => 4, 'links' => [
        ['App Design & Development', 'app-design-development.php'],
        ['iOS App Development', 'ios-app-development-company.php'],
        ['Android App Development', 'android-app-development.php'],
        ['Flutter App Development', 'flutter-app-development-company.php'],
        ['React Native App Development', 'react-native-app-development-company.php'],
        ['Mobile App Testing & Quality Assurance', 'mobile-app-testing.php'],
        ['App Optimization & Performance Tuning', 'mobile-app-store-optimization.php'],
        ['App Store Submission & Optimization', 'app-store-optimization.php'],
    ]],
];

// Mobile / footer accordion order (Figma mobile header + footer).
$iynix_services_order = ['Digital marketing', 'SEO & link building', 'Social media', 'E-commerce solutions',
    'UI/UX design & branding', 'Website development', 'Mobile app development', 'Conversion optimization'];

$iynix_about = [
    ['Who We Are', 'who-we-are.php', 'assets/images/shared/photos/office-high-five.png'],
    ['What We Do', 'what-we-do.php', 'assets/images/shared/photos/Business-goals.png'],
    ['How We Work', 'how-we-work.php', 'assets/images/shared/photos/Still-Confused.png'],
    ['Our Leadership', 'our-leadership.php', 'assets/images/shared/photos/cash-and-chess.png'],
];

$iynix_contact = [
    'phone' => '+91 79821 53343',
    'tel' => '+917982153343',
    'email' => 'support@iynixdigital.com',
    'address' => '10th Floor, Joy Tower, Sector 62, Noida, Uttar Pradesh, 201309',
    'map' => 'https://www.google.com/maps/search/?api=1&query=10th+Floor+Joy+Tower+Sector+62+Noida+201309',
];

if (!function_exists('iynix_services_by_title')) {
    function iynix_services_by_title($services) {
        $out = [];
        foreach ($services as $s) { $out[$s['title']] = $s; }
        return $out;
    }
}
