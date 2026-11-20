<?php
// Site header — matches Figma "Website header" frames (Desktop 1588:11142, Desktop/Menu open 1588:11196,
// Tablet 1588:11388, Mobile 1588:11670, Mobile/Menu open 1588:11700).
// Bootstrap CSS + Bootstrap Icons + Inter are linked in every page's <head>; only Mulish (menu headings) is added here.
// Do NOT re-link bootstrap.min.css here: loading it inside <body> after custom.css overrides custom.css rules.
include_once __DIR__ . '/services-menu.php';
$nh_services = iynix_services_by_title($iynix_services);
$nh_chevron = '<img src="assets/images/icons/nav/chevron.svg" alt="" width="16" height="16" class="nh-chevron">';
?>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Mulish:wght@900&display=swap" rel="stylesheet">

<style>
    .nh-header {
        position: sticky;
        top: 0;
        z-index: 999;
        background: #fff;
        border-bottom: 1px solid #eaeaea;
        font-family: 'Inter', var(--bs-font-sans-serif);
    }

    .nh-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 104px;
    }

    .nh-logo { display: block; width: 141px; height: 44px; flex-shrink: 0; }
    .nh-logo img { display: block; width: 100%; height: 100%; }

    .nh-primary { display: flex; align-items: center; gap: 48px; }

    .nh-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 16px 0;
        background: none;
        border: 0;
        font: 500 16px/24px 'Inter', sans-serif;
        color: #666;
        text-decoration: none;
        cursor: pointer;
        transition: color .2s ease;
    }

    .nh-link:hover, .nh-link:focus-visible, .nh-link.is-active { color: #d81f28; }
    .nh-link .nh-chevron { transition: transform .25s ease; }
    .nh-link[aria-expanded="true"] { color: #d81f28; }
    .nh-link[aria-expanded="true"] .nh-chevron { transform: rotate(180deg); }

    .nh-actions { display: flex; align-items: center; gap: 24px; }

    .nh-cta {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 56px;
        width: 128px;
        background: #101010;
        color: #fff;
        border: 0;
        border-radius: 8px;
        font: 600 16px/24px 'Inter', sans-serif;
        transition: background .2s ease;
    }

    .nh-cta:hover { background: #d81f28; color: #fff; }

    .nh-icon-btn {
        display: none;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        padding: 0;
        background: none;
        border: 0;
        border-radius: 8px;
        color: #101010;
        font-size: 28px;
        line-height: 1;
    }

    .nh-icon-btn img { width: 24px; height: 24px; display: block; }

    /* ---------- Desktop drop panels (Services / About) ---------- */
    .nh-panel {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        border-bottom: 1px solid #eaeaea;
        box-shadow: 0 16px 32px rgba(16, 16, 16, .06);
        padding: 32px 0 40px;
        max-height: calc(100vh - 104px);
        overflow-y: auto;
    }

    .nh-panel[hidden] { display: none; }

    .nh-panel-head { display: flex; align-items: center; margin-bottom: 24px; }

    .nh-panel-title {
        flex: 1;
        margin: 0;
        font: 900 24px/32px 'Mulish', sans-serif;
        color: #101010;
    }

    .nh-panel .nh-icon-btn { display: inline-flex; }

    .nh-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; }
    .nh-col { display: flex; flex-direction: column; gap: 24px; }

    .nh-group-title {
        margin: 0 0 12px;
        font: 900 16px/24px 'Mulish', sans-serif;
        color: #101010;
    }

    .nh-sublinks { list-style: none; margin: 0; padding: 0; }

    .nh-sublinks a {
        display: block;
        padding: 5px 0;
        font: 400 14px/24px 'Inter', sans-serif;
        color: #666;
        text-decoration: none;
        transition: color .2s ease;
    }

    .nh-sublinks a:hover { color: #d81f28; }

    .nh-divider { height: 1px; background: #eaeaea; margin: 24px 0; }

    .nh-panel-foot { display: flex; align-items: center; gap: 32px; }

    .nh-panel-foot div { flex: 1; margin: 0; font: 600 16px/24px 'Inter', sans-serif; color: #101010; }

    .nh-panel-foot a {
        flex: 1;
        padding: 8px 0;
        font: 600 16px/24px 'Inter', sans-serif;
        color: #666;
        text-decoration: none;
    }

    .nh-panel-foot a:hover { color: #d81f28; }

    .nh-about-card { display: block; text-decoration: none; }

    .nh-about-card img {
        display: block;
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 12px;
        transition: transform .3s ease;
    }

    .nh-about-card span { font: 900 16px/24px 'Mulish', sans-serif; color: #101010; }
    .nh-about-card:hover img { transform: scale(1.03); }
    .nh-about-card:hover span { color: #d81f28; }

    /* ---------- Mobile / tablet menu ---------- */
    .nh-mobile {
        position: fixed;
        top: 104px;
        left: 0;
        right: 0;
        bottom: 0;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        padding: 16px 24px 32px;
    }

    .nh-mobile[hidden] { display: none; }

    .nh-m-link {
        display: block;
        padding: 12px 0;
        font: 500 16px/24px 'Inter', sans-serif;
        color: #666;
        text-decoration: none;
    }

    .nh-m-link:hover { color: #d81f28; }

    .nh-acc { border-bottom: 1px solid #eaeaea; }

    .nh-acc > summary {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 0;
        list-style: none;
        cursor: pointer;
        font: 500 16px/24px 'Inter', sans-serif;
        color: #101010;
    }

    .nh-acc > summary::-webkit-details-marker { display: none; }
    .nh-acc > summary span { flex: 1; }
    .nh-acc > summary .nh-chevron { transition: transform .25s ease; }
    .nh-acc[open] > summary .nh-chevron { transform: rotate(180deg); }
    .nh-acc .nh-sublinks { padding: 0 0 12px 12px; }

    .nh-m-label {
        margin: 16px 0 8px;
        font: 900 16px/24px 'Mulish', sans-serif;
        color: #101010;
    }

    .nh-m-cta { width: 100%; height: 52px; margin-top: 16px; }

    .nh-m-contact { margin-top: 16px; display: flex; flex-direction: column; gap: 8px; }
    .nh-m-contact a { font: 400 14px/24px 'Inter', sans-serif; color: #666; text-decoration: none; }

    body.nh-lock { overflow: hidden; }

    /* Tablet: Let's Talk + hamburger (Figma Tablet 834px) */
    @media (max-width: 1199.98px) {
        .nh-bar { height: 88px; }
        .nh-primary, .nh-panel { display: none !important; }
        .nh-icon-btn.nh-burger { display: inline-flex; }
        .nh-mobile { top: 88px; }
        .nh-m-cta, .nh-m-contact { display: none; }
    }

    /* Mobile: hamburger only, CTA moves into the menu (Figma Mobile 390px) */
    @media (max-width: 767.98px) {
        .nh-bar { height: 80px; }
        .nh-actions .nh-cta { display: none; }
        .nh-mobile { top: 80px; }
        .nh-m-cta { display: inline-flex; }
        .nh-m-contact { display: flex; }
    }
</style>

<header class="nh-header">
    <div class="container nh-bar">

        <a href="index.php" class="nh-logo"><img src="assets/images/icons/nav/header-logo.svg" alt="iYnix Digital" width="141" height="44"></a>

        <nav class="nh-primary" aria-label="Primary">
            <a class="nh-link" href="index.php">Home</a>
            <button type="button" class="nh-link" aria-expanded="false" aria-controls="nh-about-panel" data-nh-panel="nh-about-panel">About <?= $nh_chevron ?></button>
            <button type="button" class="nh-link" aria-expanded="false" aria-controls="nh-services-panel" data-nh-panel="nh-services-panel">Services <?= $nh_chevron ?></button>
            <a class="nh-link" href="#">Portfolio</a>
            <a class="nh-link" href="https://iynixdigital.com/blog/">Blogs</a>
            <a class="nh-link" href="#">Contact</a>
        </nav>

        <div class="nh-actions">
            <button type="button" class="nh-cta" data-bs-toggle="modal" data-bs-target="#hsFormModal">Let’s Talk</button>
            <button type="button" class="nh-icon-btn nh-burger" aria-label="Open menu" aria-expanded="false" aria-controls="nh-mobile-menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="#101010" stroke-width="1.8" stroke-linecap="round"/></svg>
            </button>
        </div>
    </div>

    <!-- Desktop: Services mega menu -->
    <div class="nh-panel" id="nh-services-panel" hidden>
        <div class="container">
            <div class="nh-panel-head">
                <div class="nh-panel-title">Our services</div>
                <button type="button" class="nh-icon-btn nh-close" aria-label="Close services"><img src="assets/images/icons/nav/close.svg" alt=""></button>
            </div>
            <div class="nh-grid">
                <?php for ($c = 1; $c <= 4; $c++): ?>
                <div class="nh-col">
                    <?php foreach ($iynix_services as $grp): if ($grp['col'] !== $c) continue; ?>
                    <div>
                        <div class="nh-group-title"><?= htmlspecialchars($grp['title']) ?></div>
                        <ul class="nh-sublinks">
                            <?php foreach ($grp['links'] as [$label, $href]): ?>
                            <li><a href="<?= $href ?>"><?= htmlspecialchars($label) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endfor; ?>
            </div>
            <div class="nh-divider"></div>
            <div class="nh-panel-foot">
                <div>Not sure where to start?</div>
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#hsCalendarModal">Talk to our team</a>
            </div>
        </div>
    </div>

    <!-- Desktop: About panel -->
    <div class="nh-panel" id="nh-about-panel" hidden>
        <div class="container">
            <div class="nh-panel-head">
                <div class="nh-panel-title">About us</div>
                <button type="button" class="nh-icon-btn nh-close" aria-label="Close about"><img src="assets/images/icons/nav/close.svg" alt=""></button>
            </div>
            <div class="nh-grid">
                <?php foreach ($iynix_about as [$label, $href, $img]): ?>
                <a class="nh-about-card" href="<?= $href ?>"><img src="<?= $img ?>" alt="<?= htmlspecialchars($label) ?>"><span><?= htmlspecialchars($label) ?></span></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Tablet / mobile menu -->
    <div class="nh-mobile" id="nh-mobile-menu" hidden>
        <a class="nh-m-link" href="index.php">Home</a>

        <details class="nh-acc">
            <summary><span>About</span><?= $nh_chevron ?></summary>
            <ul class="nh-sublinks">
                <?php foreach ($iynix_about as [$label, $href]): ?>
                <li><a href="<?= $href ?>"><?= htmlspecialchars($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </details>

        <div class="nh-m-label">Services</div>
        <?php foreach ($iynix_services_order as $t): $grp = $nh_services[$t]; ?>
        <details class="nh-acc">
            <summary><span><?= htmlspecialchars($grp['title']) ?></span><?= $nh_chevron ?></summary>
            <ul class="nh-sublinks">
                <?php foreach ($grp['links'] as [$label, $href]): ?>
                <li><a href="<?= $href ?>"><?= htmlspecialchars($label) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </details>
        <?php endforeach; ?>

        <div class="mt-3">
            <a class="nh-m-link" href="#">Portfolio</a>
            <a class="nh-m-link" href="https://iynixdigital.com/blog/">Blogs</a>
            <a class="nh-m-link" href="#">Contact</a>
        </div>

        <button type="button" class="nh-cta nh-m-cta" data-bs-toggle="modal" data-bs-target="#hsFormModal">Let’s Talk</button>
        <div class="nh-m-contact">
            <a href="tel:<?= $iynix_contact['tel'] ?>"><?= $iynix_contact['phone'] ?></a>
            <a href="mailto:<?= $iynix_contact['email'] ?>"><?= $iynix_contact['email'] ?></a>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.nh-header');
    if (!header) return;
    const triggers = header.querySelectorAll('[data-nh-panel]');
    const burger = header.querySelector('.nh-burger');
    const mobile = document.getElementById('nh-mobile-menu');

    function closePanels(except) {
        triggers.forEach(function (t) {
            if (t === except) return;
            t.setAttribute('aria-expanded', 'false');
            document.getElementById(t.dataset.nhPanel).hidden = true;
        });
    }

    triggers.forEach(function (t) {
        t.addEventListener('click', function (e) {
            e.stopPropagation();
            const panel = document.getElementById(t.dataset.nhPanel);
            const open = t.getAttribute('aria-expanded') === 'true';
            closePanels(t);
            t.setAttribute('aria-expanded', open ? 'false' : 'true');
            panel.hidden = open;
        });
    });

    header.querySelectorAll('.nh-close').forEach(function (b) {
        b.addEventListener('click', function () { closePanels(); });
    });

    // Clicks inside a panel stay in it; anywhere else closes it.
    header.querySelectorAll('.nh-panel').forEach(function (p) {
        p.addEventListener('click', function (e) { e.stopPropagation(); });
    });
    document.addEventListener('click', function () { closePanels(); });

    function setMobile(open) {
        mobile.hidden = !open;
        burger.setAttribute('aria-expanded', open ? 'true' : 'false');
        burger.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        burger.innerHTML = open ? '<img src="assets/images/icons/nav/close.svg" alt="">' : '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16" stroke="#101010" stroke-width="1.8" stroke-linecap="round"/></svg>';
        document.body.classList.toggle('nh-lock', open);
    }

    burger.addEventListener('click', function (e) {
        e.stopPropagation();
        setMobile(mobile.hidden);
    });

    // Opening a modal from inside the mobile menu should close the menu first.
    mobile.querySelectorAll('[data-bs-toggle="modal"]').forEach(function (b) {
        b.addEventListener('click', function () { setMobile(false); });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') { closePanels(); setMobile(false); }
    });

    // Leaving the tablet/mobile range with the menu open must not leave it stuck.
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1200 && !mobile.hidden) setMobile(false);
        if (window.innerWidth < 1200) closePanels();
    });
});
</script>
