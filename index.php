<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iYnix Digital</title>
    <link href="homepage/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="homepage/css/font-size.css">
    <link rel="stylesheet" href="homepage/css/custom.css">


</head>

<body>
    <?php include_once 'homepage/include/navbar.php';?>


    <main style="margin-top: 90px;">
        <section class="bg-dark main-banner">
            <div class="container d-flex overflow-h flex-column flex-md-column flex-lg-row">

                <div class="container d-flex flex-column justify-content-end hero-banner-text">
                    <a href="services.php"><button class="btn btn-primary accent"><img
                                src="homepage/images/icons/lightning.svg" alt=""> AI-Driven Digital Marketing
                            Services</button></a>
                    <h1 class="mt-4 my-3 dt text-light">
                        Empowering Businesses with <span class="text-crimson">Predictable Leads</span> and Revenue
                        Growth
                    </h1>
                    <a href="services.php"><button class="btn btn-secondary mt-5">Get in Touch With Us</button></a>
                    <div class="container d-flex align-items-center clutch-gap mb-3 mt-5">
                        <img src="homepage/images/clutch-one.png" class="img-fluid" alt="">
                        <img src="homepage/images/clutch-two.png" class="img-fluid" alt="">
                        <img src="homepage/images/clutch-three.png" class="img-fluid" alt="">
                    </div>
                    <div class="container d-flex align-items-center clutch-gap mt-4">
                        <img src="homepage/images/google.png" class="img-fluid" alt="">
                        <img src="homepage/images/trustpilot.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="container mt-md-5 mt-sm-4 mt-3">

                    <div class="ban-sl-section">

                        <div class="container-fluid">

                            <!-- TOP ROW -->

                            <div class="ban-sl-row ban-sl-left ban-sl-row-top">

                                <img src="https://picsum.photos/320/400?random=1" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=2" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=3" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=4" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=5" class="ban-sl-img">

                                <!-- duplicate -->

                                <img src="https://picsum.photos/320/400?random=6" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=7" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=8" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=9" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=10" class="ban-sl-img">

                            </div>


                            <!-- BOTTOM ROW -->

                            <div class="ban-sl-row ban-sl-right">

                                <img src="https://picsum.photos/320/400?random=11" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=12" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=13" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=14" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=15" class="ban-sl-img">

                                <!-- duplicate -->

                                <img src="https://picsum.photos/320/400?random=16" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=17" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=18" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=19" class="ban-sl-img">
                                <img src="https://picsum.photos/320/400?random=20" class="ban-sl-img">

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!-- section two slider -->



        <section class="hs-b-loop-section">

            <div class="container-fluid">

                <div class="hs-b-loop-track" id="hs-b-loop-track">

                    <!-- ITEMS -->
                    <div class="hs-b-loop-item">
                        <img src="homepage/images/icons/clock.svg" alt="">
                        Clients Served in 10+ Countries
                    </div>

                    <div class="hs-b-loop-item">
                        <img src="homepage/images/icons/clock.svg" alt="">
                        3+ Years of Hands-on Experience
                    </div>

                    <div class="hs-b-loop-item">
                        <img src="homepage/images/icons/clock.svg" alt="">
                        Hundreds of Qualified Leads Generated
                    </div>

                    <div class="hs-b-loop-item">
                        <img src="homepage/images/icons/clock.svg" alt="">
                        Proven Results Across Multiple Industries
                    </div>

                </div>

            </div>

        </section>


        <script>

            /* DUPLICATE ITEMS FOR TRUE INFINITE LOOP */
            const track = document.getElementById("hs-b-loop-track");
            track.innerHTML += track.innerHTML;

        </script>



        <!-- section two slider end -->


        <!-- SMART MARKETING SECTION -->


        <section class="hs-c-smart-section sbg-light section-gap">

            <div class="container text-center">

                <!-- Heading -->
                <h2 class="hs-c-smart-title mb-3 fw-semibold text-dark">
                    We Help Businesses to Build <br>
                    <span class="text-crimson">Smart Marketing Systems</span>
                </h2>

                <!-- Subtitle -->
                <p class="hs-c-smart-sub mb-5 text-dark">
                    We create smart marketing systems that bring consistent leads,
                    higher conversions, and real business growth.
                </p>

                <!-- Cards -->
                <div class="row justify-content-center g-4 mb-5 container">

                    <div class="col-md-6">
                        <div class="hs-c-smart-card sbg-gray">
                            <img src="homepage/images/icons/double-arrow.svg" alt="">
                            <h4 class="fw-semibold mt-3">Get Consistent High-Quality Leads</h4>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hs-c-smart-card sbg-gray">
                            <img src="homepage/images/icons/double-arrow.svg" alt="">
                            <h4 class="fw-semibold mt-3">Get 2x-3x Revenue Growth</h4>
                        </div>
                    </div>

                </div>

                <!-- CTA -->
                <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Get a Free Marketing
                        Audit!</button></a>

            </div>

        </section>


        <!-- SMART MARKETING SECTION END -->



        <!-- Real Growth SECTION -->


        <section class="hs-d-smart-section bg-dark section-gap">

            <div class="container text-center">

                <!-- Heading -->
                <h2 class="hs-d-smart-title mb-3 fw-semibold text-light">
                    Trusted by Brands That Believe in <br>
                    <span class="text-crimson">Real Growth!</span>
                </h2>

                <!-- Subtitle -->
                <p class="hs-d-smart-sub mb-5 text-light">
                    We work with businesses across industries to improve visibility, leads, and real business
                    results.
                </p>

            </div>


            <div class="hs-d-logo-section">

                <div class="container-fluid">

                    <div class="hs-d-logo-track" id="hs-d-track">

                        <div class="hs-d-logo-item"><img src="homepage/images/logos/bsw.png"></div>
                        <div class="hs-d-logo-item"><img src="homepage/images/logos/cmed.png"></div>
                        <div class="hs-d-logo-item"><img src="homepage/images/logos/bsw.png"></div>
                        <div class="hs-d-logo-item"><img src="homepage/images/logos/cmed.png"></div>
                        <div class="hs-d-logo-item"><img src="homepage/images/logos/bsw.png"></div>
                        <div class="hs-d-logo-item"><img src="homepage/images/logos/cmed.png"></div>

                    </div>

                </div>

            </div>


            <script>
                window.addEventListener("load", function () {

                    const track = document.querySelector("#hs-d-track");
                    if (!track) return;

                    track.innerHTML += track.innerHTML;

                    let pos = 0;
                    let speed = 0.4;

                    function animate() {
                        pos -= speed;

                        if (pos <= -track.scrollWidth / 2) {
                            pos = 0;
                        }

                        track.style.transform = `translateX(${pos}px)`;

                        requestAnimationFrame(animate);
                    }

                    animate();

                });
            </script>



        </section>


        <!-- Real Growth SECTION END -->



        <!-- Testimonials SECTION -->

        <section class="hs-e-smart-section">

            <div class="container text-center">

                <!-- Heading -->
                <h2 class="hs-e-smart-title mb-3 fw-semibold text-black">
                    What Our
                    <span class="text-crimson">Clients Say?</span>
                </h2>

                <!-- Subtitle -->
                <p class="hs-e-smart-sub text-black">
                    Reviews from our satisfied clients
                </p>

                <div class="container">
                    <script src="https://widget.trustmary.com/4Pp1GEjos"></script>
                </div>

            </div>

        </section>


        <!-- Testimonials SECTION End -->


        <!-- You Found Us SECTION -->

        <section class="hs-f-section">
            <div class="container">
                <div
                    class="container hs-f-content d-flex align-items-center gap-0 align-items-stretch flex-sm-column-reverse flex-column-reverse flex-lg-row">
                    <div class="container hs-f-text">
                        <h2 class="hs-e-smart-title mb-3 fw-semibold text-black">
                            Oh, Hi. <span class="text-crimson">You Found Us!</span></h2>
                        <p class="mt-3">That means one thing: <span><b><i>our marketing strategy
                                        works.</i></b></span></p>
                        <p class="hs-f-p p-sm my-4">Just like you found us today, we help your ideal customers find
                            you. We help businesses around the world get found by the right people, at the right
                            time, with the right message.</p>
                        <div class="hs-f-info mt-2">
                            <p class="p-sm">Iynix Digital will help you provide simple, data-backed marketing
                                strategies that attract, convert, and grow.</p>
                        </div>
                    </div>
                    <div class="container hs-f-image p-0">
                        <img src="homepage/images/office-high-five.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>


        <!-- You Found Us SECTION End -->
        <!-- PORTFOLIO SECTION -->


        <section class="hs-g-portfolio section-gap-top">

            <div class="container-hs-g text-center">


                <h2 class="hs-g-smart-title mb-3 fw-semibold text-black">
                    Our Creative
                    <span class="text-crimson">Portfolio</span>
                </h2>

                <!-- Subtitle -->
                <p class="hs-g-smart-sub text-black mb-5 fw-medium">
                    Have a look at our strategic designs and development projects that drive real business impact.
                </p>

                <!-- TABS -->
                <div class="hs-g-tabs text-center">
                    <button class="hs-g-tab fw-bold" data-tab="branding">
                        <p>Branding</p>
                    </button>
                    <button class="hs-g-tab fw-bold active" data-tab="web">
                        <p>Website Development</p>
                    </button>
                    <button class="hs-g-tab fw-bold" data-tab="ui">
                        <p>UI/UX Design</p>
                    </button>
                </div>

                <!-- TAB CONTENT -->

                <!-- Branding Grid -->
                <div class="hs-g-content container" id="branding">
                    <div class="row g-4">
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-a.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-b.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-c.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-d.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-e.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-branding-f.png" class="hs-g-img">
                        </div>
                    </div>
                </div>

                <!-- Website Carousel -->
                <div class="hs-g-content active" id="web">

                    <div class="hs-g-carousel">
                        <div class="hs-g-track" id="hs-g-track">

                            <img src="homepage/images/portfolio-web-d-a.png" class="hs-g-img">
                            <img src="homepage/images/portfolio-web-d-b.png" class="hs-g-img">
                            <img src="homepage/images/portfolio-web-d-c.png" class="hs-g-img">
                            <img src="homepage/images/portfolio-web-d-a.png" class="hs-g-img">

                        </div>
                    </div>

                </div>

                <!-- UI UX Grid -->
                <div class="hs-g-content container" id="ui">
                    <div class="row g-4">
                        <div class="col-md-6"><img src="homepage/images/portfolio-uiux-a.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-uiux-b.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-uiux-c.png" class="hs-g-img">
                        </div>
                        <div class="col-md-6"><img src="homepage/images/portfolio-uiux-d.png" class="hs-g-img">
                        </div>
                    </div>
                </div>

            </div>
        </section>




        <script>

            /* TAB SWITCH */
            document.querySelectorAll(".hs-g-tab").forEach(btn => {
                btn.onclick = function () {

                    document.querySelectorAll(".hs-g-tab").forEach(b => b.classList.remove("active"));
                    this.classList.add("active");

                    document.querySelectorAll(".hs-g-content").forEach(c => c.classList.remove("active"));
                    document.getElementById(this.dataset.tab).classList.add("active");

                }
            });


            /* INFINITE LOOP CAROUSEL */
            window.addEventListener("load", function () {

                const track = document.getElementById("hs-g-track");
                track.innerHTML += track.innerHTML;

                let pos = 0;
                let speed = 0.6;

                function loop() {
                    pos -= speed;

                    if (pos <= -track.scrollWidth / 2) {
                        pos = 0;
                    }

                    track.style.transform = `translateX(${pos}px)`;

                    requestAnimationFrame(loop);
                }

                loop();

            });

        </script>


        <!-- PORTFOLIO SECTION End -->


        <!-- Marketing Efforts -->

        <section class="hs-h-smart-section section-gap-top px-2a">

            <div class="container text-center">

                <!-- Heading -->
                <h2 class="hs-h-smart-title fw-semibold text-black m-auto">
                    Do You Still
                    <span class="text-crimson">Feel Stuck </span>
                    Despite All the Marketing Efforts?
                </h2>


            </div>
            <div class="container">

                <div class="row g-4 mt-5">

                    <div class="col-md-6">
                        <div class="hs-h-problem-card p-4 sbg-gray gap-3">
                            <i class="bi bi-exclamation-triangle-fill hs-h-icon"></i>
                            <span>
                                <p>You are neither getting traffic nor enough leads.</p>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hs-h-problem-card p-4 sbg-gray gap-3">
                            <i class="bi bi-exclamation-triangle-fill hs-h-icon"></i>
                            <span>
                                <p>You spend money on ads, but sales are low.</p>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hs-h-problem-card p-4 sbg-gray gap-3">
                            <i class="bi bi-exclamation-triangle-fill hs-h-icon"></i>
                            <span>
                                <p>Your website looks good, but it does not convert.</p>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="hs-h-problem-card p-4 sbg-gray gap-3">
                            <i class="bi bi-exclamation-triangle-fill hs-h-icon"></i>
                            <span>
                                <p>Agencies promise results but fail to deliver.</p>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="container text-center mt-5">
                    <img src="homepage/images/icons/arrow-down.svg" alt="">
                    <p class="fw-bold text-black mt-4">
                        But now, you don't have to worry anymore.
                        <span class="text-crimson">We're here to help you!</span>
                    </p>
                    <p class="fw-bold text-black mt-3">
                        Let us see what we will bring to you.</p>
                </div>
            </div>

        </section>



        <!-- Marketing Efforts End -->
        <!-- Leads section -->


        <section class="hs-i-lead-section section-gap px-2a ">

            <div class="container">

                <div class="row align-items-center g-4 flex-sm-column-reverse flex-column-reverse flex-lg-row">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6">

                        <div class="hs-i-tag mb-3 p-xsm fw-medium text-crimson">
                            <img src="homepage/images/icons/circle.svg" alt=""> LEAD GENERATION
                        </div>

                        <h2 class="hs-i-title text-black fw-semibold">
                            Generate up to <span class="text-crimson">100% More</span><br>
                            Qualified Leads.
                        </h2>

                        <p class="hs-i-text mt-3 text-black p-sm">
                            We specialize in bringing people who are already seeking what you have to offer.
                            Through intent, messaging, and closing conversion holes, we have helped clients
                            create up to 100% more qualified leads – not more enquiries, but better enquiries.
                        </p>

                        <!-- CTA -->
                        <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Get Your Free
                                Marketing Audit</button></a>

                    </div>

                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6">

                        <div class="hs-i-img-card">
                            <img src="homepage/images/qualified-leads.png" class="img-fluid">
                        </div>

                    </div>

                </div>

            </div>
            <!-- Second section -->

            <div class="container hs-i-content-2">

                <div class="row align-items-center g-4">
                    <!-- RIGHT IMAGE -->
                    <div class="col-lg-6">

                        <div class="hs-i-img-card">
                            <img src="homepage/images/Grow-Your-Revenue.png" class="img-fluid">
                        </div>

                    </div>

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6 ps-3 ps-lg-5">

                        <div class="hs-i-tag mb-3 p-xsm fw-medium text-crimson">
                            <img src="homepage/images/icons/circle.svg" alt=""> REVENUE GROWTH
                        </div>

                        <h2 class="hs-i-title text-black fw-semibold">
                            Grow Your Revenue by <span class="text-crimson">2x-3x Times.</span></h2>

                        <p class="hs-i-text mt-3 text-black p-sm">
                            We've helped brands generating revenue and scale through data-driven marketing. These
                            are outputs that we have provided to actual businesses. Through fixing funnels, better
                            conversions and putting on the hotspot of what actually drives sales, we have helped
                            clients multiply revenue 2-3 times without added chaos or wasted money.
                        </p>

                        <!-- CTA -->
                        <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Get Your Free
                                Marketing Audit</button></a>

                    </div>



                </div>

            </div>




        </section>


        <!-- Leads section End -->
        <!-- Drive Growth section -->

        <section class="hs-j-smart-section bg-dark section-gap px-2a">

            <div class="container text-center">

                <!-- Heading -->
                <h2 class="hs-j-smart-title mb-3 fw-semibold text-light">
                    But, You Might Be Thinking,<br>How Do We
                    <span class="text-crimson">Drive Growth?</span>
                </h2>


            </div>

            <div class="container mt-5">

                <div class="row g-4">

                    <!-- CARD 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="hs-j-card h-100 sbg-gray">
                            <div class="hs-j-icon mb-5"><img src="homepage/images/icons/bulb.svg" alt=""></div>
                            <h5 class="p-xsm hs-j-card-title fw-bold">We Understand Your Business First!</h5>
                            <p class="p-xsm fw-light text-black">We first learn about your goals, audience, and
                                competition.</p>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="hs-j-card h-100 sbg-gray">
                            <div class="hs-j-icon mb-5"><img src="homepage/images/icons/target.svg" alt=""></div>
                            <h5 class="p-xsm hs-j-card-title fw-bold">Then, We Build a Clear Strategy For You!</h5>
                            <p class="p-xsm fw-light text-black">No guesswork. We create a custom plan based on
                                prior data and experience.</p>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="hs-j-card h-100 sbg-gray">
                            <div class="hs-j-icon mb-5"><img src="homepage/images/icons/rocket.svg" alt=""></div>
                            <h5 class="p-xsm hs-j-card-title fw-bold">Now is the Time To Execute & Optimize!</h5>
                            <p class="p-xsm fw-light text-black">We launch and manage Google Ads, Meta Ads, and SEO
                                campaigns, track results closely, and continuously optimize what works best for your
                                business.</p>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="hs-j-card h-100 sbg-gray">
                            <div class="hs-j-icon mb-5"><img src="homepage/images/icons/growth.svg" alt=""></div>
                            <h5 class="p-xsm hs-j-card-title fw-bold">At Last, We Scale What Works For Your Growth.
                            </h5>
                            <p class="p-xsm fw-light text-black">We continue exploring new opportunities based on
                                market trends and scale what works to drive faster revenue growth.</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>



        <!-- Drive Growth section End -->
        <!-- Crunch the Strategy section -->


        <section class="hs-k-section section-gap-top px-2a">
            <div class="container">
                <div
                    class="container hs-k-content d-flex align-items-center gap-0 align-items-stretch flex-sm-column flex-column flex-lg-row">
                    <div class="container hs-k-image p-0">
                        <img src="homepage/images/cash-and-chess.png" class="img-fluid" alt="">
                    </div>
                    <div class="container hs-k-text d-flex flex-column justify-content-center">
                        <h2 class="hs-k-title mb-3 fw-semibold text-black">
                            We Crunch the Strategy. <span class="text-crimson">You Cash the Results!</span></h2>
                        <p class="hs-k-p p-sm my-4">Do you have big goals? Let’s map out a strategy that actually
                            brings in customers and revenue. Book a quick call with our team.</p>
                        <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Schedule a 15-Min Call
                                With Us!</button></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Crunch the Strategy section End -->
        <!-- Industries We Work With section -->

        <section class="hs-l-section section-gap-top">

            <div class="container">

                <h2 class="hs-k-title mb-5 fw-semibold text-black text-center" style="margin:auto;">
                    Industries We <span class="text-crimson">Work With!</span></h2>

                <div class="hs-l-grid">

                    <!-- ITEM -->
                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Beauty-Lifestyle.svg"></div>
                        <p>Beauty & Lifestyle</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Healthcare.svg"></div>
                        <p>Healthcare</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Music-Singing.svg"></div>
                        <p>Music & Singing</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Renovation-Remodeling.svg"></div>
                        <p>Renovation & Remodeling</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/E-commerce.svg"></div>
                        <p>E-commerce</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Professional-Services.svg"></div>
                        <p>Professional Services</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Construction.svg"></div>
                        <p>Construction</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Home-Repair.svg"></div>
                        <p>Home Repair</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Laundry-Dry-Cleaning.svg"></div>
                        <p>Laundry & Dry Cleaning</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Real-Estate.svg"></div>
                        <p>Real Estate</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/Ed-Tech.svg"></div>
                        <p>Ed-Tech</p>
                    </div>

                    <div class="hs-l-item">
                        <div class="hs-l-icon"><img src="homepage/images/industries/IT-Software-Services.svg"></div>
                        <p>IT & Software Services</p>
                    </div>

                </div>

            </div>
        </section>


        <!-- Industries We Work With section End -->
        <!-- Curious About Business section -->

        <section class="hs-m-audit-section section-gap-top">

            <div class="container">

                <div class="hs-m-audit-box text-center">

                    <!-- ICON -->
                    <div class="mb-4">
                        <img src="homepage/images/icons/search.svg" alt="">
                    </div>

                    <!-- HEADING -->
                    <h2 class="fw-semibold text-light mt-4">
                        Curious About What Could Work Better for Your Business?
                    </h2>

                    <h2 class="mt-3 fw-semibold text-crimson">
                        Let Us Do a Free Marketing & SEO Audit.
                    </h2>

                    <!-- TEXT -->
                    <p class="hs-m-text mt-3 p-sm text-light fw-medium">
                        We will analyze your existing marketing, find out the weaknesses that are limiting you
                        and present the transparent follow-ups to generate leads and increase revenue.
                    </p>

                    <!-- BUTTON -->
                    <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Book Your Free Audit
                            Now!</button></a>

                </div>

            </div>

        </section>




        <!-- Curious About Business section End -->
        <!-- Results You Can Measure section -->


        <section class="hs-n-results-section section-gap-top px-2a">

            <div class="container">

                <!-- HEADING -->
                <div class="text-center mb-5">
                    <h2 class="text-black fw-semibold">
                        Results You Can Measure. <span class="text-crimson">Growth You Can See!</span>
                    </h2>

                    <p class="hs-n-sub mt-2 text-black">
                        We believe that results speak louder than words. Have a look at some of the real data
                        that states our marketing and automation strategies work.
                    </p>
                </div>

                <!-- GRID -->
                <div class="row g-4">

                    <!-- CARD -->
                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/Home-Screen.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/User-Acquisition.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/before-after-01.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/before-after-02.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/leads.png" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="hs-n-card">
                            <img src="homepage/images/Phone-call-Tracker.png" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>

        </section>




        <!-- Results You Can Measure section End -->
        <!-- Still Confused? section -->

        <section class="hs-o-section section-gap px-2a">
            <div class="container">
                <div
                    class="container hs-o-content d-flex align-items-center gap-0 align-items-stretch flex-sm-column-reverse flex-column-reverse flex-lg-row">
                    <div class="container hs-o-text d-flex flex-column justify-content-center">
                        <h2 class="hs-e-smart-title mb-3 fw-semibold text-black">
                            Still Confused?<br> <span class="text-crimson">Let Us Show You Our Work!</span></h2>
                        <p class="hs-o-p p-sm my-4">We don't just talk about results; we prove them.
                            Explore our detailed case studies to see how we helped businesses improve traffic,
                            leads, and revenue.</p>
                        <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Book Your Free Audit
                                Now!</button></a>
                    </div>
                    <div class="container hs-o-image p-0">
                        <img src="homepage/images/Still-Confused.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>


        <!-- Still Confused? section End -->
        <!-- Why Choose Iynix section -->

        <section class="hs-p-smart-section bg-dark section-gap px-2a">

            <div class="container">

                <div class="hs-p-video-box">

                    <!-- <img src="homepage/images/video-banner.png" class="hs-p-video-thumb"> -->
                    <picture>

                        <!-- Mobile (≤575px) -->
                        <source srcset="homepage/images/video-banner-ph.jpeg" media="(max-width: 575px)">

                        <!-- Tablet (576px – 1240px) -->
                        <source srcset="homepage/images/video-banner-tab.jpeg" media="(max-width: 1240px)">

                        <!-- Desktop fallback -->
                        <img src="homepage/images/video-banner.png" class="hs-p-video-thumb">

                    </picture>

                    <div class="hs-p-play"
                        data-video="https://www.youtube.com/embed/Az-mGR-CehY?list=RDGMEMWO-g6DgCWEqKlDtKbJA1Gw&index=18">
                        <i class="bi bi-play-fill"></i>
                    </div>

                </div>

            </div>

        </section>


        <!-- MODAL -->
        <div class="hs-p-modal" id="hsPModal">
            <div class="hs-p-modal-inner">
                <span class="hs-p-close">&times;</span>
                <iframe id="hsPFrame" src="" allowfullscreen></iframe>
            </div>
        </div>

        <script>
            const playBtn = document.querySelector(".hs-p-play");
            const modal = document.getElementById("hsPModal");
            const frame = document.getElementById("hsPFrame");
            const closeBtn = document.querySelector(".hs-p-close");

            playBtn.onclick = function () {
                frame.src = this.dataset.video;
                modal.style.display = "flex";
            }

            closeBtn.onclick = function () {
                modal.style.display = "none";
                frame.src = "";
            }

            modal.onclick = function (e) {
                if (e.target === modal) {
                    modal.style.display = "none";
                    frame.src = "";
                }
            }
        </script>








        <!-- Why Choose Iynix section End -->
        <!-- Help You Grow section -->

        <section class="hs-q-services section-gap-top px-2a">
            <div class="container">

                <h2 class="hs-e-smart-title mb-3 fw-semibold text-black text-center pb-5">
                    Services That Will <span class="text-crimson">Help You Grow!</span></h2>
            </div>
            <div class="container">
                <div class="row g-4">

                    <!-- LEFT COLUMN -->
                    <div class="col-lg-4">
                        <div class="hs-q-card mb-4 sbg-gray">
                            <img src="homepage/images/icons/Digital-Marketing.svg" alt="Digital Marketing">
                            <h5 class="fw-semibold">Digital Marketing</h5>
                            <p class="p-xsm">We don't run random campaigns. We develop a detailed plan, which aligns
                                with your
                                objectives, your target audience, and your budget; therefore, every activity will propel
                                your business.</p>
                        </div>

                        <div class="hs-q-card mb-4 sbg-gray">
                            <img src="homepage/images/icons/Website-Design.svg" alt="Website Design & Development">
                            <h5 class="fw-semibold">Website Design & Development</h5>
                            <p class="p-xsm">Your website should do more than look good. We design fast, clear, and
                                conversion-focused
                                websites that turn visitors into leads.</p>
                        </div>

                        <div class="hs-q-card sbg-gray">
                            <img src="homepage/images/icons/Ecommerce-Marketing.svg" alt="Ecommerce Marketing">
                            <h5 class="fw-semibold">Ecommerce Marketing</h5>
                            <p class="p-xsm">From traffic to checkout, we optimize your ecommerce marketing to increase
                                your purchases
                                and checkouts, and grow revenue consistently.</p>
                        </div>
                    </div>


                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-8 d-flex flex-column justify-content-between" style="gap: 24px;">

                        <!-- Top Full Card -->
                        <div class="hs-q-card h-100 sbg-gray">
                            <img src="homepage/images/icons/Business-Automation.svg"
                                alt="Business Automation Services & CRM Management">
                            <h5 class="fw-semibold">Business Automation Services & CRM Management</h5>
                            <p class="p-xsm">We set up AI automations and CRM workflows to automate business processes,
                                save time,
                                improve follow-ups, and ensure no lead slips through the cracks.</p>
                        </div>

                        <!-- Middle Two Cards (Uneven Height) -->
                        <div class="row g-4 flex-md-column flex-lg-row">
                            <div class="col-md-12 col-lg-6">
                                <div class="hs-q-card hs-q-tall h-100 sbg-gray">
                                    <img src="homepage/images/icons/Search-Engine.svg" alt="">
                                    <h5 class="fw-semibold">Search Engine Optimization</h5>
                                    <p class="p-xsm">We ensure your business is found when it is needed the most in
                                        search. Our SEO is
                                        aimed at actual visibility, slow traffic, and organic leads that will be
                                        received over a long period. SEO is most effective for businesses looking for
                                        sustainable, long-term growth.</p>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                                <div class="hs-q-card h-100 sbg-gray">
                                    <img src="homepage/images/icons/Social-Media.svg" alt="">
                                    <h5 class="fw-semibold">Social Media Marketing</h5>
                                    <p class="p-xsm">With social platforms, we help to link your business to the correct
                                        audience,
                                        create trust, and bring about actual engagement, not only likes and followers.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Full Card -->
                        <div class="hs-q-card h-100 sbg-gray">
                            <img src="homepage/images/icons/Google-Ads.svg" alt="">
                            <h5 class="fw-semibold">Google Ads / Performance Marketing</h5>
                            <p class="p-xsm">We manage and optimise paid ads to reach high-intent users, control costs,
                                and maximise
                                ROAS by turning ad spend into measurable returns.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- Help You Grow section End -->
        <!-- Meet The People section -->
        <style>
            .hs-r-slider {
                overflow: hidden;
                position: relative;
            }

            .hs-r-track {
                display: flex;
                gap: 24px;
                width: max-content;
                will-change: transform;
            }

            .hs-r-card {
                width: 400px;
                height: 380px;
                border-radius: 20px;
                overflow: hidden;
                position: relative;
                flex-shrink: 0;
            }

            .hs-r-card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .hs-r-info {
                position: absolute;
                bottom: -100%;
                left: 0;
                width: 100%;
                background: #D81F28;
                color: #fff;
                text-align: center;
                padding: 14px;
                transition: .4s;
            }

            .hs-r-card:hover .hs-r-info {
                bottom: 0;
            }

            @media(max-width:768px) {
                .hs-r-card {
                    width: 180px;
                    height: 250px;
                }
            }
        </style>

        <section class="hs-r-team section-gap-top">

            <div class="container text-center mb-5">
                <h2 class="fw-semibold">Meet The People <span class="text-crimson">Behind Your Success</span></h2>
                <p class="text-black mt-3" style="max-width:1078px;margin:0 auto;">A crew of thinkers, builders, and
                    problem-solvers who don’t just plan big ideas, we make them work and provide real results.</p>
            </div>

            <div class="hs-r-slider">
                <div class="hs-r-track">

                    <!-- CARD -->
                    <div class="hs-r-card">
                        <img src="homepage/images/people/akash.png">
                        <div class="hs-r-info">
                            <h6>Akash</h6><span>Senior Developer</span>
                        </div>
                    </div>

                    <div class="hs-r-card">
                        <img src="homepage/images/people/adarsh.png">
                        <div class="hs-r-info">
                            <h6>Adarsh Mathuri</h6><span>SEO Expert</span>
                        </div>
                    </div>

                    <div class="hs-r-card">
                        <img src="homepage/images/people/het.png">
                        <div class="hs-r-info">
                            <h6>Het Patel</h6><span>Automation Expert</span>
                        </div>
                    </div>

                    <div class="hs-r-card">
                        <img src="homepage/images/people/samim.png">
                        <div class="hs-r-info">
                            <h6>Samim Pathan</h6><span>Senior Designer</span>
                        </div>
                    </div>

                    <div class="hs-r-card">
                        <img src="homepage/images/people/gunjan.png">
                        <div class="hs-r-info">
                            <h6>Gunjan</h6><span>Content Specialist</span>
                        </div>
                    </div>

                </div>
            </div>

        </section>




        <script>
                (function () {

                    document.querySelectorAll('.hs-r-team').forEach(section => {

                        let slider = section.querySelector('.hs-r-slider');
                        let track = section.querySelector('.hs-r-track');

                        let cards = track.children;
                        let baseWidth = track.scrollWidth;

                        while (track.scrollWidth < slider.offsetWidth * 2) {
                            track.innerHTML += track.innerHTML;
                        }

                        let pos = 0;
                        let speed = 0.5;
                        let pause = false;

                        track.addEventListener('mouseover', function (e) {
                            if (e.target.closest('.hs-r-card')) {
                                pause = true;
                            }
                        });

                        track.addEventListener('mouseout', function (e) {
                            if (e.target.closest('.hs-r-card')) {
                                pause = false;
                            }
                        });

                        function animate() {

                            if (!pause) {

                                pos += speed;
                                track.style.transform = `translateX(-${pos}px)`;

                                if (pos >= baseWidth) {
                                    pos = 0;
                                }

                            }

                            requestAnimationFrame(animate);
                        }

                        animate();

                    });

                })();
        </script>

        <!-- Meet The People section End -->
        <!-- FAQs section -->


        <section class="hs-s-faq section-gap-top px-2a">

            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="fw-semibold">Have Some Questions? <span class="text-crimson">Let Us Clear!</span></h2>
                </div>

                <div class="hs-s-accordion">

                    <div class="hs-s-item active sbg-gray">
                        <div class="hs-s-question">
                            <h3>What is your decision about selecting the appropriate marketing strategy in my market?
                            </h3>
                            <div class="hs-s-icon">+</div>
                        </div>
                        <div class="hs-s-answer fw-light">
                            We look at your audience, competitors and market demand and then select the channels that would best suit your business and region: SEO, Google Ads, Meta Ads or AI-led growth.
                        </div>
                    </div>

                    <div class="hs-s-item sbg-gray">
                        <div class="hs-s-question">
                            <h3>What is your measure of success in various markets?</h3>
                            <div class="hs-s-icon">+</div>
                        </div>
                        <div class="hs-s-answer fw-light">
                            We measure success based on ROI, lead quality, conversion rate and sustainable growth
                            metrics.
                        </div>
                    </div>

                    <div class="hs-s-item sbg-gray">
                        <div class="hs-s-question">
                            <h3>I have had previous experience with agencies. How are you different?</h3>
                            <div class="hs-s-icon">+</div>
                        </div>
                        <div class="hs-s-answer fw-light">
                            We measure success based on ROI, lead quality, conversion rate and sustainable growth
                            metrics.
                        </div>
                    </div>

                    <div class="hs-s-item sbg-gray">
                        <div class="hs-s-question">
                            <h3>Will you be able to assist us in scaling out of one country or region?</h3>
                            <div class="hs-s-icon">+</div>
                        </div>
                        <div class="hs-s-answer fw-light">
                            We measure success based on ROI, lead quality, conversion rate and sustainable growth
                            metrics.
                        </div>
                    </div>

                    <div class="hs-s-item sbg-gray">
                        <div class="hs-s-question">
                            <h3>Will I have visibility into performance and progress?</h3>
                            <div class="hs-s-icon">+</div>
                        </div>
                        <div class="hs-s-answer fw-light">
                            We focus on performance driven marketing backed by data, transparency and optimization.
                        </div>
                    </div>

                </div>
            </div>

        </section>



        <script>
            (function () {

                document.querySelectorAll('.hs-s-accordion').forEach(acc => {

                    let items = acc.querySelectorAll('.hs-s-item');

                    items.forEach(item => {

                        let answer = item.querySelector('.hs-s-answer');
                        let icon = item.querySelector('.hs-s-icon');

                        if (item.classList.contains('active')) {
                            answer.style.maxHeight = answer.scrollHeight + 'px';
                            icon.innerHTML = '−';
                        }

                        item.querySelector('.hs-s-question').addEventListener('click', () => {

                            items.forEach(i => {
                                let a = i.querySelector('.hs-s-answer');
                                let ic = i.querySelector('.hs-s-icon');

                                i.classList.remove('active');
                                a.style.maxHeight = null;
                                ic.innerHTML = '+';
                            });

                            item.classList.add('active');
                            answer.style.maxHeight = answer.scrollHeight + 'px';
                            icon.innerHTML = '−';

                        });

                    });

                });

            })();
        </script>


        <!-- FAQs section End -->
        <!-- Business Goals section -->

        <section class="hs-t-section section-gap px-2a">
            <div class="container">
                <div
                    class="container hs-t-content d-flex align-items-center gap-0 align-items-stretch flex-sm-column flex-column flex-lg-row">
                    <div class="container hs-t-image p-0">
                        <img src="homepage/images/business-goals.png" class="img-fluid" alt="">
                    </div>
                    <div class="container hs-t-text d-flex flex-column justify-content-center">
                        <h2 class="hs-t-title mb-3 fw-semibold text-black">
                            Ready To Talk About Your <span class="text-crimson">Business Goals?</span></h2>
                        <p class="hs-t-p p-sm my-4">If you're looking for better leads, stronger sales, or clearer
                            direction, we'd love to hear about your business and see how we can help.</p>
                        <a href="services.php"><button class="btn btn-secondary mt-5 mt-md-4">Connect With
                                Us</button></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- Business Goals section End -->






    </main>





    <script src="homepage/assets/js/bootstrap.bundle.min.js"></script>
    <script src="homepage/assets/js/main.js"></script>


    <?php include_once 'homepage/include/footer.php';?>
</body>

</html>