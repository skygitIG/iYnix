<!-- Bootstrap CSS (LOCAL) -->
<link rel="stylesheet" href="homepage/assets/css/bootstrap.min.css">

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>
    .nav-header {
        position: relative;
        background: #fff;
        border-bottom: 1px solid #eaeaea;
        z-index: 999;
        font-family: Arial, sans-serif;
    }
    .nav-header .container {
        max-width: 100%;
        padding: 0;
    }

    .nav-wrap {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: calc(var(--bs-gutter-x) * .5);
        position: relative;
    }

    .nav-logo {
        font-size: 28px;
        font-weight: 700;
        color: #111;
        text-decoration: none;
        flex: 1;
    }

    .nav-center {
        flex: 2;
        display: flex;
        justify-content: center;
    }

    .nav-menu {
        display: flex;
        gap: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        padding: 12px 0;
    }

    .nav-link {
        text-decoration: none;
        color: #111;
        font-weight: 600;
        cursor: pointer;
    }

    .nav-btn-wrap {
        flex: 1;
        display: flex;
        justify-content: flex-end;
    }

    .nav-btn {
        background: #D81F28;
        color: #fff;
        padding: 12px 24px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
    }

    .nav-mega {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #fff;
        padding: calc(var(--bs-gutter-x) * .5);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
    }

    .nav-services:hover .nav-mega,
    .nav-about:hover .nav-mega {
        opacity: 1;
        visibility: visible;
    }

    .nav-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
    }

    .nav-col h6 {
        margin: 0 0 15px;
        /* font-size: 20px; */
        font-weight: 600;
        color: #D81F28;
    }

    .nav-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-col li {
        margin-bottom: 10px;
    }

    .nav-col a {
        color: #141414;
        text-decoration: none;
    }

    .nav-col a:hover {
        color: #000;
        text-decoration: underline;
        transition: 0.8s ease;
    }

    .nav-menu-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 16px;
        transition: 0.3s ease;
        display: block;
    }

    .nav-col:hover .nav-menu-img {
        transform: scale(1.03);
    }

    .nav-toggle {
        display: none;
        font-size: 30px;
        cursor: pointer;
    }
    .nav-link {
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

.nav-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
    margin-left: 10px;
    line-height: 1;
}

/* desktop hover */
.nav-services:hover .nav-arrow,
.nav-about:hover .nav-arrow {
    transform: rotate(180deg);
}

/* mobile open state */
.nav-item.nav-open .nav-arrow {
    transform: rotate(180deg);
}

@media (max-width: 767px) {
    .nav-toggle {
        display: block !important;
        font-size: 30px;
        cursor: pointer;
        z-index: 1001;
    }

    .nav-btn-wrap {
        display: none !important;
    }

    .nav-center {
        display: none !important;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #fff;
        padding: 20px;
        box-shadow: 0 12px 25px rgba(0,0,0,0.08);
        z-index: 1000;
        flex: unset !important;
    }

    .nav-center.nav-active {
        display: block !important;
    }

    .nav-menu {
      display: flex !important;
        flex-direction: column;
        gap: 0;
        width: 100%;
    }

    .nav-item {
        cursor: pointer;
        padding: 14px 0;
    }

    .nav-link {
        display: inline-flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }

    .nav-mega {
        position: static !important;
        width: 100%;
        padding: 12px 0 0;
        box-shadow: none;
        display: none;
        opacity: 1 !important;
        visibility: visible !important;
    }

    .nav-item.nav-open .nav-mega {
        display: block;
    }

    .nav-grid {
        display: block !important;
    }

    .nav-col {
        margin-bottom: 20px;
    }

    .nav-menu-img {
        width: 100%;
        height: 140px;
        margin-bottom: 12px;
    }
}
</style>

<header class="nav-header">
    <div class="container">
        <div class="nav-wrap">

            <a href="#" class="nav-logo"><img src="homepage/images/Iynix-Logo.svg" alt=""></a>

            <div class="nav-center">
                <ul class="nav-menu">

                
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>

                    <li class="nav-item nav-services">
                        <a class="nav-link" href="#">
        <span>Services</span>
        <span class="nav-arrow">
            <svg viewBox="0 0 24 24" width="16" height="16">
                <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"/>
            </svg>
        </span>
    </a>

                        <div class="nav-mega">
                            <div class="nav-grid">

                                <div class="nav-col">
                                    <h6>Digital Marketing</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">SEO</a></li>
                                        <li><a href="#" class="p-xsm">SEO Audit</a></li>
                                        <li><a href="#" class="p-xsm">Local SEO Services</a></li>
                                        <li><a href="#" class="p-xsm">Page Speed Optimization</a></li>
                                        <li><a href="#" class="p-xsm">Product Marketing</a></li>
                                        <li><a href="#" class="p-xsm">Content Marketing</a></li>
                                        <li><a href="#" class="p-xsm">PPC Management Services</a></li>
                                        <li><a href="#" class="p-xsm">B2B Marketing</a></li>
                                        <li><a href="#" class="p-xsm">B2C Marketing</a></li>
                                        <li><a href="#" class="p-xsm">B2C and D2C</a></li>
                                    </ul>
                                    <br>
                                    <h6>Website Development</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">Website Design & Development</a></li>
                                        <li><a href="#" class="p-xsm">Website Redesign</a></li>
                                        <li><a href="#" class="p-xsm">Website Optimisation</a></li>
                                        <li><a href="#" class="p-xsm">Rapid Website Design</a></li>
                                        <li><a href="#" class="p-xsm">E-Mail Newsletter Design Services</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6>Social Media</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">Social Media Ads</a></li>
                                        <li><a href="#" class="p-xsm">Social Media Marketing</a></li>
                                    </ul>
                                    <br>
                                    <h6>Mobile Application Development</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">iOS App Development</a></li>
                                        <li><a href="#" class="p-xsm">Android App Development</a></li>
                                        <li><a href="#" class="p-xsm">Flutter App Development</a></li>
                                        <li><a href="#" class="p-xsm">React Native App Development</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Testing and Quality Assurance</a></li>
                                        <li><a href="#" class="p-xsm">App Optimization and Performance Tuning</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Store Submission and Optimization</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6>E-commerce Solutions</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">E-commerce SEO</a></li>
                                        <li><a href="#" class="p-xsm">E-commerce Optimization</a></li>
                                        <li><a href="#" class="p-xsm">E-commerce Marketing</a></li>
                                    </ul>
                                </div>

                                <div class="nav-col">
                                    <h6>UI/UX Design</h6>
                                    <ul>
                                        <li><a href="#" class="p-xsm">UI Design Services</a></li>
                                        <li><a href="#" class="p-xsm">UX Design Services</a></li>
                                        <li><a href="#" class="p-xsm">Prototyping</a></li>
                                        <li><a href="#" class="p-xsm">Interaction Design</a></li>
                                        <li><a href="#" class="p-xsm">Mobile App Design</a></li>
                                        <li><a href="#" class="p-xsm">Website Design</a></li>
                                        <li><a href="#" class="p-xsm">Responsive Design</a></li>
                                        <li><a href="#" class="p-xsm">Product Design</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-about">
                        <a class="nav-link" href="#">
        <span>About</span>
        <span class="nav-arrow">
            <svg viewBox="0 0 24 24" width="16" height="16">
                <path d="M6 9l6 6 6-6" fill="none" stroke="currentColor" stroke-width="2"/>
            </svg>
        </span>
    </a>

                        <div class="nav-mega">
                            <div class="nav-grid">

                                <div class="nav-col">
                                    <a href=""><img src="homepage/images/navbar/SEO.jpg" alt="Who We Are" class="nav-menu-img">
                                    <h6>Who We Are</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="homepage/images/navbar/SEO.jpg" alt="What We Do" class="nav-menu-img">
                                    <h6>What We Do</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="homepage/images/navbar/SEO.jpg" alt="Our Work" class="nav-menu-img">
                                    <h6>How We Work</h6></a>
                                </div>

                                <div class="nav-col">
                                    <a href=""><img src="homepage/images/navbar/SEO.jpg" alt="Our Leadership" class="nav-menu-img">
                                    <h6>Our Leadership</h6></a>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>
            </div>

            <div class="nav-btn-wrap">
                <!-- <a href="#" class="nav-btn">Get Proposal</a> -->
            
            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#hsFormModal"
                        style="width: fit-content;">
                        Get Proposal
                    </button>
            </div>

            <div class="nav-toggle">&#9776;</div>

        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.nav-toggle');
    const navCenter = document.querySelector('.nav-center');
    const items = document.querySelectorAll('.nav-item');

    // mobile menu toggle
    toggle.addEventListener('click', function () {
        navCenter.classList.toggle('nav-active');
    });

    // submenu toggle on full item block click
    if (window.innerWidth <= 767) {
        items.forEach(item => {
            const mega = item.querySelector('.nav-mega');

            if (mega) {
                item.addEventListener('click', function (e) {
                    // prevent anchor navigation
                    e.preventDefault();
                    e.stopPropagation();

                    this.classList.toggle('nav-open');
                });
            }
        });
    }
});
</script>