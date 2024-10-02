<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>

        <title>Business For Life</title>
        <meta name="description" content="Business For Life">
        <meta charset="utf-8">
        <meta name="author" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="icon" href="{{asset('theme/images/favicon.png')}}" type="image/png" sizes="any">
        <link rel="icon" href="{{asset('theme/images/favicon.svg')}}" type="image/svg+xml">

        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/style-responsive.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/vertical-rhythm.min.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/splitting.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/YTPlayer.css')}}">
        <link rel="stylesheet" href="{{asset('theme/css/demo-bold/demo-bold.css')}}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="css2-1?family=Roboto:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

    </head>
    <body class="appear-animate">

        <!-- Page Loader -->
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->

        <!-- Page Wrap -->
        <div class="page" id="top">

            <!-- Navigation Panel -->
            <nav class="main-nav dark transparent stick-fixed wow-menubar">
                <div class="main-nav-sub full-wrapper">

                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo font-alt">
                            <img src="images/logo-white.svg" alt="Your Company Logo" width="105" height="34">
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>

                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll">
                            <li><a href="bold-multi-page.html" class="active">Home</a></li>
                            <li><a href="bold-about.html">About</a></li>
                            <li><a href="bold-services.html">Services</a></li>
                            <li><a href="bold-portfolio.html">Portfolio</a></li>
                            <li><a href="bold-blog.html">Blog</a></li>
                            <li><a href="bold-contact.html">Contact</a></li>
                        </ul>

                        <ul class="items-end clearlist local-scroll">
                            <li>
                                <a href="bold-contact.html" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">
                                        Let’s talk
                                        <i class="icon-arrow-right1 size-16"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- End Main Menu -->

                </div>
            </nav>
            <!-- End Navigation Panel -->

            <main id="main">

                <!-- Home Section -->
                <section class="home-section light-content" id="home">
                    <div class="container min-height-100vh d-flex align-items-center pt-100 pb-100 pt-sm-120 pb-sm-120">

                        <!-- Background Video -->
                        <!-- Please replace the video file in folder "video" with your own file -->
                        <div class="bg-video-wrapper">
                            <video class="bg-video" preload="auto" autoplay="" loop="" muted="" playsinline="">
                                <source src="videos/video-4.mp4" type="video/mp4">
                            </video>
                            {{-- <div class="bg-video-overlay bg-dark-alpha-30"></div> --}}
                            <div class="bg-video-overlay bg-dark-alpha-60"></div>
                        </div>

                        <a href="#" role="button" class="bg-video-button-muted"><i class="mi-volume-off"></i> <span class="visually-hidden">Volume On</span></a>
                        <a href="#" role="button" class="bg-video-button-pause"><i class="mi-pause"></i> <span class="visually-hidden">Pause</span></a>
                        <!-- End Background Video -->

                        <!-- Home Section Content -->
                        <div class="home-content pt-20 pt-md-0 text-center">

                            <h2 class="section-title-tiny font-alt mb-40 mb-sm-30 wow fadeInUp">I’m Ronald Smith</h2>

                            <h1 class="hs-title-4 font-alt mb-60 mb-sm-40"><span class="wow charsAnimIn" data-splitting="chars">Visual & Web Designer Based in Melburn.</span></h1>

                            <div class="local-scroll wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="0">
                                <a href="bold-portfolio.html" class="btn btn-mod btn-large btn-w btn-circle" data-btn-animate="y">Discover projects</a>
                            </div>

                        </div>
                        <!-- End Home Section Content -->

                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap-4 wow fadeInUp" data-wow-offset="0">
                            <div class="full-wrapper text-end">
                                <a href="#about" class="scroll-down-4">
                                    <i class="icon-arrow-down1 size-22"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End Scroll Down -->

                    </div>
                </section>
                <!-- End Home Section -->


                <!-- About Section -->
                <section class="page-section pb-0" id="about">
                    <div class="container">

                        <div class="row">

                            <div class="col-md-5 order-last order-md-first">
                                <div class="overflow-hidden">
                                    <img src="images/demo-bold/section-image-1.jpg" class="w-100 wow scaleOutIn" alt="Image Description">
                                </div>
                            </div>

                            <div class="col-md-7 col-lg-6 offset-lg-1 d-flex align-items-center mb-sm-80">
                                <div class="wow fadeInUp">

                                    <h2 class="section-title-medium font-alt text-outline-cont mt-20 mb-50 mb-md-30"><span class="text-outline">About</span></h2>

                                    <p class="section-text mb-60 mb-md-40 mb-sm-30">
                                        <span class="section-title-inline">Who?</span> The role of the graphic designer in the communication process is that of encoder or interpreter of&nbsp;the message. They work on the interpretation, ordering, and presentation of visual messages. The design work always starts from a client's demand, a demand that ends up being established linguistically, either orally or in writing, that is, that graphic design transforms a linguistic message into a graphic manifestation.
                                    </p>

                                    <div class="local-scroll">
                                        <a href="bold-about.html" class="link-hover-anim underline align-middle" data-link-animate="y">Learn more <span class="visually-hidden">about us</span></a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- End About Section -->


                <!-- Marquee Section -->
                <div class="page-section overflow-hidden">
                    <div class="pt-40 pb-40 pt-md-0 pb-md-0">

                        <!-- Marquee Text Line -->
                        <div class="marquee marquee-style-2">
                            <div class="marquee-track marquee-animation-1a">
                                <div>10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                                <div aria-hidden="true">10 Years of experience</div>
                            </div>
                        </div>
                        <!-- End Marquee Text Line -->

                    </div>
                </div>
                <!-- End Marquee Section -->


                <!-- Services Section -->
                <section class="page-section pt-0" id="services">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-5 mb-md-80">

                                <h2 class="section-title-medium font-alt text-outline-cont mt-20 mb-50 mb-md-30"><span class="text-outline">Services</span></h2>

                                <p class="section-text mb-60 mb-md-40 mb-sm-30">
                                    <span class="section-title-inline">Why?</span> I use the power of design to solve complex problems and cultivate business solutions.
                                </p>

                                <div class="local-scroll">
                                    <a href="bold-contact.html" class="link-hover-anim underline align-middle" data-link-animate="y">Request a quote</a>
                                </div>

                            </div>

                            <div class="col-lg-7 col-xl-6 offset-xl-1">

                                <!-- Accordion -->
                                <dl class="accordion-1 wow fadeInUp">
                                    <dt>
                                        <a href="#"><span>Brand Strategy</span> <i class="icon-plus"></i></a>
                                    </dt>
                                    <dd>
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis mauris, semper a diam vitae, accumsan hendrerit tellus. Nunc euismod urna at luctus hendrerit. In hac habitasse platea dictumst.
                                        </div>
                                    </dd>
                                    <dt>
                                        <a href="#"><span>Web Design</span> <i class="icon-plus"></i></a>
                                    </dt>
                                    <dd>
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis mauris, semper a diam vitae, accumsan hendrerit tellus. Nunc euismod urna at luctus hendrerit. In hac habitasse platea dictumst.
                                        </div>
                                    </dd>
                                    <dt>
                                        <a href="#"><span>Art Direction</span> <i class="icon-plus"></i></a>
                                    </dt>
                                    <dd>
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis mauris, semper a diam vitae, accumsan hendrerit tellus. Nunc euismod urna at luctus hendrerit. In hac habitasse platea dictumst.
                                        </div>
                                    </dd>
                                    <dt>
                                        <a href="#"><span>Web Development</span> <i class="icon-plus"></i></a>
                                    </dt>
                                    <dd>
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis mauris, semper a diam vitae, accumsan hendrerit tellus. Nunc euismod urna at luctus hendrerit. In hac habitasse platea dictumst.
                                        </div>
                                    </dd>
                                    <dt>
                                        <a href="#"><span>Marketing</span> <i class="icon-plus"></i></a>
                                    </dt>
                                    <dd>
                                        <div>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque felis mauris, semper a diam vitae, accumsan hendrerit tellus. Nunc euismod urna at luctus hendrerit. In hac habitasse platea dictumst.
                                        </div>
                                    </dd>
                                </dl>
                                <!-- End Accordion -->

                            </div>

                        </div>

                        <!-- Divider -->
                        <div class="page-section">
                            <hr class="black mt-0 mb-0">
                        </div>
                        <!-- End Divider -->

                        <!-- Steps -->
                        <div class="row g-5">

                            <div class="col-sm-6 col-lg-3">
                                <h3 class="steps-1-title"><span class="steps-1-number">1</span> Research</h3>
                                <div class="steps-1-text">
                                    Lorem ipsum dolor siter amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua.
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <h3 class="steps-1-title"><span class="steps-1-number">2</span> Design</h3>
                                <div class="steps-1-text">
                                    Fusce pretium turpis pharetra orci sodales auctor. Aliquam eget felis mi. Maecenas malesuada non purus at sollicitudin.
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <h3 class="steps-1-title"><span class="steps-1-number">3</span> Development</h3>
                                <div class="steps-1-text">
                                    Vivamus at leo a felis ullamcorper consectetur elementum urna enim sagittis. Fusce hendrerit dolor sed nisi ultricies congue.
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <h3 class="steps-1-title"><span class="steps-1-number">4</span> Production</h3>
                                <div class="steps-1-text">
                                    Aliquam viverra tempus consequat vivamus sed turpis tempu euismod nibh et, euismod lorem  iaculis feugiat elit ipsum dolor sit amet.
                                </div>
                            </div>

                        </div>
                        <!-- End Steps -->

                    </div>
                </section>
                <!-- End Services Section -->


                <!-- Divider -->
                <hr class="black mt-0 mb-0">
                <!-- End Divider -->


                <!-- Portfolio Section -->
                <section class="page-section" id="portfolio">
                    <div class="container">

                        <div class="row mb-90 mb-md-40">

                            <div class="col-lg-5 mb-md-30">
                                <h2 class="section-title-medium font-alt text-outline-cont mt-20 mb-0"><span class="text-outline">Works</span></h2>
                            </div>

                            <div class="col-lg-7 pb-20 pb-md-0 d-flex align-items-end">
                                <!-- Works Filter -->
                                <div class="works-filter works-filter-bold text-start text-lg-end w-100">
                                    <a href="#" class="filter active" role="button" aria-pressed="true" data-filter="*">All works</a>
                                    <a href="#branding" class="filter" role="button" aria-pressed="false" data-filter=".branding">Branding</a>
                                    <a href="#design" class="filter" role="button" aria-pressed="false" data-filter=".design">Design</a>
                                    <a href="#development" class="filter" role="button" aria-pressed="false" data-filter=".development">Development</a>
                                </div>
                                <!-- End Works Filter -->
                            </div>

                        </div>

                        <!-- Portfolio Grid -->
                        <div id="isotope" class="mb-n100 mb-sm-n50">

                            <!-- Portfolio Item -->
                            <div class="portfolio-2-item mb-100 mb-sm-50 mix development">
                                <div class="row wow-p fadeInUp">
                                    <div class="col-md-8 mb-sm-30">
                                        <div class="portfolio-2-image">
                                            <a href="bold-portfolio-single.html"><img src="images/demo-bold/portfolio/1.jpg" alt="Image Description"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                        <h3 class="portfolio-2-title font-alt mb-20"><a href="#">Medium Scene</a></h3>
                                        <p class="portfolio-2-descr">Lorem ipsum dolor siter amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua. </p>
                                        <div>
                                            <a href="bold-portfolio-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="portfolio-2-item mb-100 mb-sm-50 mix branding">
                                <div class="row wow-p fadeInUp">
                                    <div class="col-md-4">
                                        <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                        <h3 class="portfolio-2-title font-alt mb-20"><a href="#">Rise of Design</a></h3>
                                        <p class="portfolio-2-descr">Proin elementum ipsum vel mauris pellentesque accumsan. Nulla in erat ligula vivamus sed egestas elit, sit amet convallis metus.</p>
                                        <div>
                                            <a href="bold-portfolio-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">View Project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-sm-30 order-first order-md-last">
                                        <div class="portfolio-2-image">
                                            <a href="bold-portfolio-single.html"><img src="images/demo-bold/portfolio/2.jpg" alt="Image Description"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="portfolio-2-item mb-100 mb-sm-50 mix design development">
                                <div class="row wow-p fadeInUp">
                                    <div class="col-md-8 mb-sm-30">
                                        <div class="portfolio-2-image">
                                            <a href="bold-portfolio-single.html"><img src="images/demo-bold/portfolio/3.jpg" alt="Image Description"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                        <h3 class="portfolio-2-title font-alt mb-20"><a href="#">Visual Stranger</a></h3>
                                        <p class="portfolio-2-descr">Suspendisse scelerisque convallis nibh. Maecenas bibendum porta mattis. Donec quis nibh porta dolor ultrices bibendum vel quis leo.</p>
                                        <div>
                                            <a href="bold-portfolio-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="portfolio-2-item mb-100 mb-sm-50 mix branding design">
                                <div class="row wow-p fadeInUp">
                                    <div class="col-md-4">
                                        <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                        <h3 class="portfolio-2-title font-alt mb-20"><a href="#">Amplitude</a></h3>
                                        <p class="portfolio-2-descr">Aliquam tempus nunc nec rutrum malesuada. Proin pulvinar augue quis pharetra vulputate. Sed lacinia convallis orci vitae condimentum.</p>
                                        <div>
                                            <a href="bold-portfolio-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">View Project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-sm-30 order-first order-md-last">
                                        <div class="portfolio-2-image">
                                            <a href="bold-portfolio-single.html"><img src="images/demo-bold/portfolio/4.jpg" alt="Image Description"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->

                            <!-- Portfolio Item -->
                            <div class="portfolio-2-item mb-100 mb-sm-50 mix design development">
                                <div class="row wow-p fadeInUp">
                                    <div class="col-md-8 mb-sm-30">
                                        <div class="portfolio-2-image">
                                            <a href="bold-portfolio-single.html"><img src="images/demo-bold/portfolio/5.jpg" alt="Image Description"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                        <h3 class="portfolio-2-title font-alt mb-20"><a href="#">Super Awards</a></h3>
                                        <p class="portfolio-2-descr">Praesent est lacus, fringilla et justo vel, scelerisque aliquet elit. Mauris malesuada eleifend sapien irere semper a orci ac turpis luctus.</p>
                                        <div>
                                            <a href="bold-portfolio-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">View Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Item -->

                        </div>
                        <!-- End Portfolio Grid -->

                    </div>
                </section>
                <!-- End Portfolio Section -->


                <!-- Divider -->
                <hr class="black mt-0 mb-0">
                <!-- End Divider -->

                <!-- Testimonials Section -->
                <section class="page-section">
                    <div class="container">

                        <div class="row wow fadeInUp">
                            <div class="col-lg-11">
                                <div class="testimonials-slider-2 slider-bold">

                                    <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="">
                                            </div>
                                            <p>
                                                Beautifull template, nice code and easy to customize. Optimization and structure are very good for seo basics.
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="44" height="44" src="images/ts1-user.jpg" alt="Image description is here">
                                                </div>
                                                <div class="overflow-hidden">
                                                    Adam Peterson
                                                    <div class="small">
                                                        Business Owner
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->

                                    <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="">
                                            </div>
                                            <p>
                                                Beautifull template, nice code and easy to customize. Optimization and structure are very good for seo basics.
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="44" height="44" src="images/ts1-user.jpg" alt="Image description is here">
                                                </div>
                                                <div class="overflow-hidden">
                                                    Adam Peterson
                                                    <div class="small">
                                                        Business Owner
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->

                                    <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="">
                                            </div>
                                            <p>
                                                Beautifull template, nice code and easy to customize. Optimization and structure are very good for seo basics.
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="44" height="44" src="images/ts1-user.jpg" alt="Image description is here">
                                                </div>
                                                <div class="overflow-hidden">
                                                    Adam Peterson
                                                    <div class="small">
                                                        Business Owner
                                                    </div>
                                                </div>
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->

                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End Testimonials Section -->


                <!-- Divider -->
                <hr class="black mt-0 mb-0">
                <!-- End Divider -->


                <!-- Blog Section -->
                <section class="page-section" id="blog">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-5 mb-md-80">

                                <h2 class="section-title-medium font-alt text-outline-cont mt-20 mb-50 mb-md-30"><span class="text-outline">Latest News</span></h2>

                                <p class="section-text mb-60 mb-md-40 mb-sm-30">
                                    <span class="section-title-inline">Where?</span> Check the latest news about our company in our blog. Discover the methods of&nbsp;creativity and technology.
                                </p>

                                <div class="local-scroll">
                                    <a href="bold-blog-single.html" class="link-hover-anim underline align-middle" data-link-animate="y">All news</a>
                                </div>

                            </div>
                        </div>

                        <!-- Blog Grid -->
                        <div class="row gy-4">

                            <!-- Post Item -->
                            <div class="post-prev-2 col-md-6 col-lg-4" data-rellax-y="" data-rellax-speed="-1" data-rellax-percentage="0.37">
                                <div class="mt-140 mt-md-0">

                                    <div class="post-prev-2-img">
                                        <a href="bold-blog-single.html"><img src="images/demo-modern/blog/1.jpg" alt="Image Description"></a>
                                    </div>

                                    <h3 class="post-prev-2-title"><a href="bold-blog-single.html">Natura Insects Series: Crafting Insects Made by Flowers</a></h3>

                                    <div class="post-prev-2-info">
                                        December 3, 2023
                                    </div>

                                </div>
                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev-2 col-md-6 col-lg-4">

                                <div class="post-prev-2-img">
                                    <a href="bold-blog-single.html"><img src="images/demo-modern/blog/2.jpg" alt="Image Description"></a>
                                </div>

                                <h3 class="post-prev-2-title"><a href="bold-blog-single.html">Minimalistic Design Concept for Balmain Online Store</a></h3>

                                <div class="post-prev-2-info">
                                    December 2, 2023
                                </div>

                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev-2 col-md-6 col-lg-4" data-rellax-y="" data-rellax-speed="1" data-rellax-percentage="0.37">
                                <div class="mt-n140 mt-md-0">

                                    <div class="post-prev-2-img">
                                        <a href="bold-blog-single.html"><img src="images/demo-modern/blog/3.jpg" alt="Image Description"></a>
                                    </div>

                                    <h3 class="post-prev-2-title"><a href="bold-blog-single.html">Spotlight — Equinox Collection by Shane Griffin</a></h3>

                                    <div class="post-prev-2-info">
                                        November 29, 2023
                                    </div>

                                </div>
                            </div>
                            <!-- End Post Item -->

                        </div>
                        <!-- End Blog Grid -->

                    </div>
                </section>
                <!-- End Blog Section -->


                <!-- Divider -->
                <hr class="black mt-0 mb-0">
                <!-- End Divider -->


                <!-- Contact Section -->
                <section class="page-section" id="contact">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-5 mb-md-70">

                                <h2 class="section-title-medium font-alt text-outline-cont mt-20 mb-50 mb-md-30"><span class="text-outline">Contact Me</span></h2>

                                <p class="section-text mb-60 mb-md-40 mb-sm-30">
                                    <span class="section-title-inline">How?</span> Have a question? Just drop me a line via email or make a WhatsApp call. I am available for new projects and interesting ideas.
                                </p>

                                <div>
                                    <a href="mailto:support@bestlooker.pro" class="link-hover-anim align-middle" data-link-animate="y">support@bestlooker.pro</a>
                                </div>

                                <div>
                                    <a href="tel:+18376528800" class="link-hover-anim align-middle" data-link-animate="y">+1 837 652 8800</a>
                                </div>

                            </div>

                            <div class="col-lg-7 col-xl-6 offset-xl-1 pt-30 pt-md-0">

                                <!-- Contact Form -->
                                <form class="form contact-form wow fadeInUp" id="contact_form">

                                    <!-- Name -->
                                    <div class="form-group d-block d-md-flex align-items-center">
                                        <label for="name" class="mb-0 mb-sm-10 me-3">Your Name</label>
                                        <div class="flex-grow-1">
                                            <input type="text" name="name" id="name" class="input-sm form-control underline text-md-center" placeholder="Enter your name here" pattern=".{3,100}" required="" aria-required="true">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="form-group d-block d-md-flex align-items-center">
                                        <label for="email" class="mb-0 mb-sm-10 me-3">Email Address</label>
                                        <div class="flex-grow-1">
                                            <input type="email" name="email" id="email" class="input-sm form-control underline text-md-center" placeholder="Enter your email here" pattern=".{5,100}" required="" aria-required="true">
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="form-group">
                                        <label for="message" class="mb-sm-10">What’s your question?</label>
                                        <textarea name="message" id="message" class="input-sm form-control underline" style="height: 120px;" placeholder="Enter your message here"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <!-- Button -->
                                            <button class="submit_btn btn btn-mod btn-ellipse" data-btn-animate="ellipse" id="submit_btn" aria-controls="result">Send Message</button>
                                        </div>
                                        <div class="col-sm-7 d-flex align-items-center">
                                            <!-- Inform Tip -->
                                            <div class="form-tip pt-30 pt-sm-20">
                                                <i class="icon-info size-16"></i>
                                                All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                            </div>
                                        </div>
                                    </div>

                                    <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                                </form>
                                <!-- End Contact Form -->

                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Contact Section -->

            </main>

            <!-- Footer -->
            <footer class="footer-1 bg-dark-1 light-content">
                <div class="container">

                    <div class="page-section">
                        <div class="row">

                            <!-- Copyright -->
                            <div class="col-lg-3 text-center text-lg-start mb-md-50">
                                © Bestlooker 2023.
                            </div>
                            <!-- End Copyright -->

                            <!-- Social Links -->
                            <div class="col-lg-6 fw-social-inline text-center mb-md-40">

                                <div class="fw-social-inline-item">
                                    <a href="#" target="_blank" rel="nofollow noopener" class="link-hover-anim align-middle" data-link-animate="y">Instagram</a>
                                </div>

                                <div class="fw-social-inline-item">
                                    <a href="#" target="_blank" rel="nofollow noopener" class="link-hover-anim" data-link-animate="y">Facebook</a>
                                </div>

                                <div class="fw-social-inline-item">
                                    <a href="#" target="_blank" rel="nofollow noopener" class="link-hover-anim" data-link-animate="y">Youtube</a>
                                </div>

                                <div class="fw-social-inline-item">
                                    <a href="#" target="_blank" rel="nofollow noopener" class="link-hover-anim" data-link-animate="y">LinkedIn</a>
                                </div>
                            </div>
                            <!-- End Social Links -->

                            <div class="col-lg-3 text-center text-lg-end local-scroll">
                                <a href="#top" class="fw-top-link">
                                    <span class="fw-top-link-underline">Back to top</span>
                                    <span class="icon ms-1">
                                        <i class="icon-arrow-up1 size-22"></i>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Text -->
                    <div class="footer-text text-center mt-n10 pb-50">

                        Made with love for great people.

                        <div class="small">
                            Read <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                        </div>

                    </div>
                    <!-- End Footer Text -->

                </div>
            </footer>
            <!-- End Footer -->

        </div>
        <!-- End Page Wrap -->

        <!-- JS -->
        <script src="{{asset('theme/js/jquery.min.js')}}"></script>
        <script src="{{asset('theme/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('theme/js/plugins.js')}}"></script>
        <script src="{{asset('theme/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('theme/js/contact-form.js')}}"></script>
        <script src="{{asset('theme/js/all.js')}}"></script>
        <!-- End JS -->

    </body>
</html>
