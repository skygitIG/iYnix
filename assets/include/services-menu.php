<?php
// Single source for the Services menu (Figma "Website header" + "Website footer", Nov 2026).
// Used by navbar.php (desktop mega menu + mobile accordion) and footer.php (services accordion).
// Pages that are not built yet point to '#'. Replace with the real file when the page exists.
// 'col' = column in the desktop mega menu (1-4), in Figma's top-to-bottom order.
$iynix_services = [
    ['title' => 'Digital marketing', 'col' => 1, 'links' => [
        ['Digital Marketing', '#'],
        ['Content Marketing', 'content-marketing.php'],
        ['PPC Management Services', 'ppc_management.php'],
        ['Email Marketing', 'email-marketing.php'],
        ['Lead Generation', '#'],
        ['Product Marketing', '#'],
        ['B2B Marketing', '#'],
        ['B2C Marketing', '#'],
        ['B2C and D2C', '#'],
        ['Business Automation & CRM', '#'],
    ]],
    ['title' => 'Social media', 'col' => 1, 'links' => [
        ['Social Media Ads', '#'],
        ['Social Media Marketing', 'social-media-marketing.php'],
    ]],
    ['title' => 'SEO & link building', 'col' => 2, 'links' => [
        ['SEO', 'seo-service.php'],
        ['SEO Audit', '#'],
        ['Local SEO Service', '#'],
        ['Page Speed Optimization', 'page-speed-optimization.php'],
        ['Link Building', 'link-building.php'],
        ['HARO Link Building', '#'],
        ['Digital PR', '#'],
    ]],
    ['title' => 'E-commerce solutions', 'col' => 2, 'links' => [
        ['E-commerce SEO', '#'],
        ['E-commerce Optimization', '#'],
        ['E-commerce Marketing', 'ecommerce-marketing.php'],
    ]],
    ['title' => 'UI/UX design & branding', 'col' => 3, 'links' => [
        ['UI Design Services', '#'],
        ['UX Design Services', '#'],
        ['Prototyping', '#'],
        ['Interaction Design', '#'],
        ['Mobile App Design', '#'],
        ['Website Design', '#'],
        ['Responsive Design', '#'],
        ['Product Design', '#'],
        ['Digital Branding', '#'],
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
        ['Website Redesign', '#'],
        ['Website Optimisation', '#'],
        ['Rapid Website Design', '#'],
        ['E-Mail Newsletter Design', '#'],
    ]],
    ['title' => 'Mobile app development', 'col' => 4, 'links' => [
        ['App Design & Development', 'app-design-development.php'],
        ['iOS App Development', 'ios-app-development-company.php'],
        ['Android App Development', 'android-app-development.php'],
        ['Flutter App Development', 'flutter-app-development-company.php'],
        ['React Native App Development', 'react-native-app-development-company.php'],
        ['Mobile App Testing & Quality Assurance', 'mobile-app-testing.php'],
        ['App Optimization & Performance Tuning', 'mobile-app-store-optimization.php'],
        ['App Store Submission & Optimization', '#'],
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
