<?php
// Site footer — matches Figma "Website footer" frames (Desktop 1588:10337, Tablet 1588:10606, Mobile 1588:10876).
include_once __DIR__ . '/services-menu.php';
$ft_services = iynix_services_by_title($iynix_services);
$ft_social = [
    ['Facebook', 'https://www.facebook.com/iynixdigital', 'facebook'],
    ['Instagram', '#', 'instagram'],
    ['Twitter', '#', 'twitter'],
    ['LinkedIn', 'https://www.linkedin.com/company/iynix-digital-solutions', 'linkedin'],
    ['YouTube', '#', 'youtube'],
];
$ft_explore = [['Home', 'index.php'], ['Who We Are', 'who-we-are.php'], ['What We Do', 'what-we-do.php'], ['How We Work', 'how-we-work.php'],
    ['Our Leadership', 'our-leadership.php'], ['Portfolio', '#'], ['Blog', 'https://iynixdigital.com/blog/'], ['Contact Us', '#']];
?>
<style>
    .ft {
        background-image: linear-gradient(74deg, #101010 45%, #211f1f 100%);
        font-family: 'Inter', var(--bs-font-sans-serif);
        color: rgba(255, 255, 255, .85);
    }

    .ft-body {
        display: grid;
        grid-template-columns: 320fr 380fr 200fr 380fr;
        grid-template-areas:
            "company services explore contact"
            "divA divA divA divA"
            "sub sub sub sub";
        column-gap: 80px;
        row-gap: 48px;
        padding-top: 80px;
        padding-bottom: 64px;
    }

    .ft-company { grid-area: company; display: flex; flex-direction: column; gap: 24px; }
    .ft-services { grid-area: services; }
    .ft-explore { grid-area: explore; }
    .ft-contact { grid-area: contact; display: flex; flex-direction: column; gap: 24px; }
    .ft-sub { grid-area: sub; display: flex; align-items: center; gap: 80px; }
    .ft-div { height: 1px; background: rgba(255, 255, 255, .16); }
    .ft-div-a { grid-area: divA; }
    .ft-div-b { grid-area: divB; display: none; }
    .ft-div-c { grid-area: divC; display: none; }

    .ft-logo { display: block; width: 228px; height: 71px; }
    .ft-logo img { display: block; width: 100%; height: 100%; }

    .ft { font-size: 14px; line-height: 24px; }
    .ft a { font-size: 14px; line-height: 24px; }
    .ft-text { margin: 0; color: rgba(255, 255, 255, .85); }

    .ft-social { display: flex; gap: 12px; }

    .ft-social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border: 1px solid rgba(255, 255, 255, .3);
        border-radius: 8px;
        transition: background .2s ease, border-color .2s ease;
    }

    .ft-social a:hover { background: #d81f28; border-color: #d81f28; }
    .ft-social img { width: 20px; height: 20px; display: block; }

    .ft-heading { margin: 0 0 16px; font: 900 16px/24px 'Mulish', sans-serif; color: #fff; }
    .ft-contact .ft-heading { margin-bottom: 0; }

    .ft-acc { border-bottom: 1px solid rgba(255, 255, 255, .16); }

    .ft-acc > summary {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 0;
        list-style: none;
        cursor: pointer;
        font: 600 14px/24px 'Inter', sans-serif;
        color: #fff;
    }

    .ft-acc > summary::-webkit-details-marker { display: none; }
    .ft-acc > summary span { flex: 1; }
    .ft-acc > summary img { width: 16px; height: 16px; transition: transform .25s ease; }
    .ft-acc[open] > summary img { transform: rotate(180deg); }

    .ft-list { list-style: none; margin: 0; padding: 0; }
    .ft-acc .ft-list { padding: 0 0 12px 12px; }
    .ft-list a { display: block; padding: 7px 0 ; color: rgba(255, 255, 255, .85); text-decoration: none; transition: color .2s ease; }
    .ft-acc .ft-list a { padding: 4px 0; }
    .ft-list a:hover, .ft-contact a:hover { color: #fff; text-decoration: underline; }

    .ft-info { display: flex; gap: 12px; align-items: flex-start; }
    .ft-info img { width: 20px; height: 20px; flex-shrink: 0; margin-top: 2px; }
    .ft-info div { display: flex; flex-direction: column; gap: 4px; }
    .ft-info strong { font: 600 14px/24px 'Inter', sans-serif; color: #fff; }
    .ft-info a { color: rgba(255, 255, 255, .85); text-decoration: none; }

    .ft-sub-intro { width: 500px; flex-shrink: 0; }
    .ft-sub-title { margin: 0 0 8px; font: 900 24px/32px 'Mulish', sans-serif !important; color: #fff; }
    .ft-sub-form { flex: 1; display: flex; flex-direction: column; gap: 10px; }
    .ft-sub-form label { font: 600 14px/24px 'Inter', sans-serif; color: #fff; }
    .ft-sub-row { display: flex; gap: 12px; }

    .ft-sub-row input {
        flex: 1;
        min-width: 0;
        height: 52px;
        padding: 0 16px;
        border: 0;
        border-radius: 8px;
        background: #fff;
        font: 400 14px/24px 'Inter', sans-serif;
        color: #101010;
    }

    .ft-sub-row input::placeholder { color: #666; }

    .ft-sub-row button {
        width: 144px;
        height: 52px;
        border: 0;
        border-radius: 8px;
        background: #d81f28;
        color: #fff;
        font: 600 16px/24px 'Inter', sans-serif;
        transition: background .2s ease;
    }

    .ft-sub-row button:hover { background: #b5161e; }
    .ft-sub-note { color: rgba(255, 255, 255, .75) !important; text-decoration: none; }
    .ft-sub-note:hover { color: #fff !important; }

    .ft-bottom { background: #d81f28; color: #fff; }

    .ft-bottom .container {
        display: flex;
        align-items: center;
        gap: 40px;
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .ft-bottom .ft-copy { flex: 1; }
    .ft-legal { display: flex; gap: 24px; white-space: nowrap; }
    .ft-legal a { color: #fff; text-decoration: none; }
    .ft-legal a:hover { text-decoration: underline; }

    /* Tablet (Figma 834px): two columns */
    @media (max-width: 1199.98px) {
        .ft-body {
            grid-template-columns: 1fr 1fr;
            grid-template-areas:
                "company sub"
                "divA divA"
                "services explore"
                "services contact";
            grid-template-rows: auto auto auto 1fr;
            column-gap: 40px;
            row-gap: 40px;
            padding-top: 48px;
            padding-bottom: 48px;
        }

        .ft-sub { flex-direction: column; align-items: stretch; gap: 16px; }
        .ft-sub-intro { width: auto; }
        .ft-bottom .container { flex-direction: column; align-items: flex-start; gap: 16px; }
    }

    /* Mobile (Figma 390px): single column */
    @media (max-width: 767.98px) {
        .ft-body {
            grid-template-columns: 1fr;
            grid-template-areas: "company" "divA" "sub" "divB" "services" "explore" "divC" "contact";
            grid-template-rows: none;
            row-gap: 40px;
        }

        .ft-div-b, .ft-div-c { display: block; }
        .ft-sub-row { flex-direction: column; }
        .ft-sub-row input, .ft-sub-row button { width: 100%; flex: none; }
    }
</style>

<footer class="ft">
    <div class="container ft-body">

        <div class="ft-company">
            <a href="index.php" class="ft-logo"><img src="assets/images/icons/nav/footer-logo.svg" alt="iYnix Digital" width="228" height="71"></a>
            <div class="ft-text">Iynix Digital helps you attract more leads, make a great impression, and convert those leads into paying customers.</div>
            <div class="ft-social">
                <?php foreach ($ft_social as [$name, $url, $icon]): ?>
                <a href="<?= $url ?>" aria-label="<?= $name ?>"<?= $url !== '#' ? ' target="_blank" rel="noopener"' : '' ?>><img src="assets/images/icons/nav/<?= $icon ?>.svg" alt=""></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="ft-services">
            <div class="ft-heading">Services</div>
            <?php foreach ($iynix_services_order as $t): $grp = $ft_services[$t]; ?>
            <details class="ft-acc">
                <summary><span><?= htmlspecialchars($grp['title']) ?></span><img src="assets/images/icons/nav/chevron-white.svg" alt=""></summary>
                <ul class="ft-list">
                    <?php foreach ($grp['links'] as [$label, $href]): ?>
                    <li><a href="<?= $href ?>"><?= htmlspecialchars($label) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </details>
            <?php endforeach; ?>
        </div>

        <div class="ft-explore">
            <div class="ft-heading">Explore</div>
            <ul class="ft-list">
                <?php foreach ($ft_explore as [$label, $href]): ?>
                <li><a href="<?= $href ?>"><?= $label ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="ft-contact">
            <div class="ft-heading">Contact Us</div>
            <div class="ft-info">
                <img src="assets/images/icons/nav/location.svg" alt="">
                <div><strong>Office address</strong><a href="<?= $iynix_contact['map'] ?>" target="_blank" rel="noopener"><?= $iynix_contact['address'] ?></a></div>
            </div>
            <div class="ft-info">
                <img src="assets/images/icons/nav/phone.svg" alt="">
                <div><strong>Phone</strong><a href="tel:<?= $iynix_contact['tel'] ?>"><?= $iynix_contact['phone'] ?></a></div>
            </div>
            <div class="ft-info">
                <img src="assets/images/icons/nav/email.svg" alt="">
                <div><strong>Email</strong><a href="mailto:<?= $iynix_contact['email'] ?>"><?= $iynix_contact['email'] ?></a></div>
            </div>
        </div>

        <div class="ft-div ft-div-a"></div>
        <div class="ft-div ft-div-b"></div>
        <div class="ft-div ft-div-c"></div>

        <div class="ft-sub">
            <div class="ft-sub-intro">
                <div class="ft-sub-title">Subscribe Us</div>
                <div class="ft-text">Get digital marketing insights and updates, straight to your inbox.</div>
            </div>
            <!-- No newsletter backend yet: a valid email opens the existing lead form modal (#hsFormModal). -->
            <form class="ft-sub-form" id="ft-subscribe" novalidate>
                <label for="ft-email">Email address</label>
                <div class="ft-sub-row">
                    <input type="email" id="ft-email" name="email" placeholder="Enter your email address" required autocomplete="email">
                    <button type="submit">Subscribe</button>
                </div>
                <a href="#" class="ft-sub-note">By subscribing, you agree to our Privacy Policy.</a>
            </form>
        </div>
    </div>

    <div class="ft-bottom">
        <div class="container">
            <div class="ft-copy">© Copyright 2026. All Rights Reserved. Designed by iYnix Digital</div>
            <div class="ft-legal">
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('ft-subscribe');
    if (!form) return;
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const input = form.querySelector('input');
        if (!input.checkValidity()) { input.reportValidity(); return; }
        const modal = document.getElementById('hsFormModal');
        if (modal && window.bootstrap) bootstrap.Modal.getOrCreateInstance(modal).show();
    });
});
</script>
