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
        <link rel="stylesheet" href="{{asset('theme/css/demo-corporate/demo-corporate.css')}}">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="css2-1?family=Roboto:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
             <nav class="main-nav dark transparent stick-fixed wow-menubar" >
                <div class="main-nav-sub full-wrapper">

                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo font-alt">
                            <img src="{{asset('uploads/logo-svg.png')}}" alt="BFL Logo"  >
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>

                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist scroll-nav local-scroll">
                            {{-- <li><a href="#home" class="active">Home</a></li> --}}
                            <li><a href="#about">Who We Are</a></li>
                            <li><a href="#programs">What We Do</a></li>
                            <li><a href="#portfolio">Impact Stories</a></li>
                            <li><a href="#blog"> Updates</a></li>
                            <li><a href="#contact">Contact</a></li>


                            <li class="desktop-nav-display">
                                <div class="vr mt-2"></div>
                            </li>

                            {{-- <li><a class="text-white" href="tel:+18376528800"><i class="mi-mobile size-24 color-primary-1 align-center text-white"></i> +254 (723) 014 032</a></li> --}}

                            <!-- Social Links -->
                            <li>
                                <a href="#" class="no-hover opacity-1 pe-1 text-white"><span class="mn-soc-link mn-soc-link-color text-white" title="Facebook"><i class="fab fa-facebook"></i></span> <span class="mobile-nav-display-i">Facebook</span></a>
                                <a href="#" class="no-hover opacity-1 pe-1 text-white"><span class="mn-soc-link mn-soc-link-color text-white" title="LinkedIn"><i class="fab fa-linkedin"></i></span> <span class="mobile-nav-display-i">LinkedIn</span></a>
                                <a href="#" class="no-hover opacity-1 text-white"><span class="mn-soc-link mn-soc-link-color text-white" title="Youtube"><i class="fab fa-youtube"></i></span> <span class="mobile-nav-display-i">Youtube</span></a>
                            </li>
                        </ul>

                        <ul class="items-end clearlist local-scroll">
                            <li>
                                <a href="#contact" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">
                                        <i class="fa fa-donate size-16"></i>
                                        Donate Now
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
                                <source src="{{asset('uploads/video.mp4')}}" type="video/mp4">
                            </video>
                            {{-- <div class="bg-video-overlay bg-dark-alpha-30"></div> --}}
                            <div class="bg-video-overlay bg-dark-alpha-80"></div>
                        </div>
                        <a href="#" role="button" class="bg-video-button-muted"><i class="mi-volume-off"></i> <span class="visually-hidden">Volume On</span></a>
                        <a href="#" role="button" class="bg-video-button-pause"><i class="mi-pause"></i> <span class="visually-hidden">Pause</span></a>
                        <!-- End Background Video -->

                        <!-- Home Section Content -->
                        <div class="home-content pt-20 pt-md-0 text-center">

                            <h1 class="hs-title-44 font-alt mb-60 mb-sm-40"><span class="wow charsAnimIn" data-splitting="chars">Transforming lives through business training</span></h1>
                            <h2 class="section-title-tiny font-alt mb-40 mb-sm-30 wow charsAnimIn" data-splitting="chars" style="font-size:30px">Business Skills Training shouldn’t just be for <br> those who can afford it</h2>





                            {{--  --}}
                            {{-- <h1 class="hs-title-13a font-alt mb-50 mb-sm-30 wow fadeRotateIn" data-wow-delay="0.2s">
                                We are going to type some core values below <br>
                                <span class="visually-hidden">based in Melburn, with passion to art, and freelancer</span>
                                <span data-period="3250" data-type='[ "based in Nairobi", "with passion to art", "and freelancer"]' class="typewrite" aria-hidden="true"></span>
                            </h1> --}}
                            {{--  --}}
                            <div class="local-scroll wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="0">
                                <a href="#" class="btn btn-mod btn-large btn-w btn-circle" data-btn-animate="y">Impact Stories</a>
                            </div>

                        </div>
                        <!-- End Home Section Content -->

                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap wow fadeInUp" data-wow-offset="0">
                            <a href="#about" class="scroll-down"><i class="mi-chevron-down"></i><span class="visually-hidden">Scroll to the next section</span></a>
                        </div>
                        <!-- End Scroll Down -->

                    </div>
                </section>
                <!-- End Home Section -->

                <!-- About Section -->
                <section class="page-section" id="about" style="padding-top:0px">
                    <div class="row wow fadeInRight" >
                        <div class="col-md-12 col-lg-12 top-heading-left">
                            <h2 class="section-title mb-30 mb-sm-20"><span class="theme-color"></span>Who We Are<span class="text-black"></span></h2>
                        </div>
                    </div>

                    <!-- Decorative Line -->
                    {{-- <div class="bg-line-1 opacity-025">
                        <img src="{{asset('theme/images/demo-corporate/decoration-2.svg')}}" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
                    </div> --}}
                    <!-- End Decorative Line -->

                    <div class="container position-relative" style="padding-top:140px">

                        <div class="row mb-70 mb-sm-50">
                            <div class="row mb-80 mb-sm-60" style="position:relative; right:0px !important;">
                                <div class="col-md-12  col-lg-12 text-center">
                                    {{-- <h2 class="section-title mb-40 mb-xs-30">Let’s have a conversation</h2> --}}
                                    <p class="section-descr mb-0" style="font-size:50px;">
                                        Through <span style="color: #c26940;"><strong>hands-on</strong></span> business skills training, Business For Life provides a <span style="color: #c26940;"><strong>hand-up</strong></span> rather than a <span style="color: #c26940;"><strong>hand-out.</strong></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-10 offset-md-1 col-lg-10  text-center">

                                <p class="section-descr mb-0">
                                        <span>
                                            {{-- <strong> --}}



                                                <span>Since 2007, Business For Life has been empowering primarily poor and unemployed people to rise from poverty into fullness of life.
                                                    <br>
                                                <strong>
                                                    <span style="color: #c26940;font-weight:600"> Business For Life is a concrete and holistic expression of God’s love in practical and life-changing ways.</span>

                                                    {{-- <span style="color: #30676e;">Through hands-on business skills training, Business For Life provides a hand-up rather than a hand-out</span></strong> --}}


                                            </strong>
                                        </span>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- End About Section -->
                 <!-- Call to Action Section -->

                 <section class="page-section bg-scroll light-content" style="background-image: url('{{asset('uploads/1.jpg')}}'); background-position: center middle !important;  ">

                    <!-- Desktop Overlay -->
                    {{-- <div class="bg-overlay bg-gradient-primary-alpha-1 d-none d-md-block"></div> --}}
                    <!-- End Desktop Overlay -->

                    <!-- Mobile Overlay -->
                    {{-- <div class="bg-overlay bg-primary-1 opacity-09 d-md-none"></div> --}}
                    <div class="bg-video-overlay bg-dark-alpha-80"></div>
                    <!-- End Mobile Overlay -->

                    <div class="container position-relative" >

                        <div class="row" style="margin:0 auto">
                            <div class="col-md-10 col-lg-10 col-xl-10" style="margin:0 auto; text-align:center">

                                <h2 class="section-title mb-40 mb-xs-30">What makes us  <span class="mark-decoration-5">different</span> </h2>

                                <p class="section-descr mb-50 mb-sm-40">
                                    <span style="color: #c26940; font-size:45px; font-weight:900">Business For life uses a distinctive training methodology:</span> <br><br>

                                    - Facilitators are local entrepreneurs with personal business experience<br>
                                    - Training is practical and interactive<br>
                                    - Mentorship visits follow the training program<br>
                                </p>

                            </div>
                        </div>


                    </div>
                </section>
                <!-- End Call to Action Section -->

                 <!-- About Section -->
                 {{-- <section class="page-section" id="about">

                    <!-- Decorative Line -->
                    <div class="bg-line-1 opacity-025">
                        <img src="{{asset('theme/images/demo-corporate/decoration-2.svg')}}" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
                    </div>
                    <!-- End Decorative Line -->

                    <div class="container position-relative">

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

                </section> --}}
                <!-- End About Section -->

                 <!-- Portfolio Section -->
                 <section class="page-section" id="programs" style="padding-top:0px">
                    <div class="row wow fadeInLeft" >
                        <div class="col-md-12 col-lg-12 top-heading-right">
                            <h2 class="section-title mb-30 mb-sm-20"><span class="theme-color"></span>What We Do<span class="text-black"></span></h2>
                        </div>
                    </div>


                            <div class="row">
                                <div class="container position-relative" style="padding-top:140px">
                                    <div class="row mb-80 mb-sm-60">
                                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                                            <p class="section-descr mb-0">
                                                <span style="font-size:40px; font-weight:500; color:#30676e">The quickest and most direct way out of poverty is for people to make their own money. <br>
                                                      ~Polak</span><br> The Business For Life training changes lives by <strong style="color:#30676e;">Decreasing Dependency</strong> and <strong style="color:#30676e;">Developing People</strong>
                                                      in a way that <strong style="color:#30676e; font-weight:500;">Enhances Dignity</strong>. This <strong style="color:#30676e;">Inspires Destiny</strong> as people are motivated to move into their full potential.

                                                <br>

                                            </p>
                                        </div>
                                    </div>

                                    <!-- Portfolio Grid -->
                                    <div id="isotope" class="mb-n100 mb-sm-n50">

                                        <!-- Portfolio Item -->
                                        <div class="portfolio-2-item mb-100 mb-sm-50 mix development">
                                            <div class="row wow-p fadeInUp">
                                                <div class="col-md-6 mb-sm-30">
                                                    <div class="portfolio-2-image round-large-radius">

                                                        <a href="#"><img class="round-large-radius" src="{{asset('uploads/Class-discussion.jpg')}}" alt="Business Training & Mentorship"></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                                    <h3 class="portfolio-2-title font-alt mb-20" >Business Training and Mentoring</h3>
                                                    <p class="section-descr">
                                                        The <strong style="color:#30676e;">Business For Life training</strong> is practical and interactive with participants implementing what they have learned during the course.  Because business skills are primarily caught not taught, all courses are facilitated by local entrepreneurs with business experience.  For six months after the end of the course, each participant is personally mentored.
                                                    </p>
                                                    <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="0">
                                                        <a href="{{url('/')}}/business-training-mentorship" class="btn btn-mod btn-large btn-theme  btn-circle" data-btn-animate="y">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Portfolio Item -->

                                        <!-- Portfolio Item -->
                                        <div class="portfolio-2-item mb-100 mb-sm-50 mix development">
                                            <div class="row wow-p fadeInUp">
                                                <div class="col-md-6">
                                                    <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                                    <h3 class="portfolio-2-title font-alt mb-20" >Mentorship</h3>
                                                    <p class="section-descr">
                                                        The Business For Life offers <strong style="color:#30676e;">a comprehensive Business Mentorship Program</strong> aimed at empowering entrepreneurs and small business owners with the tools and knowledge necessary for sustainable growth. This program connects experienced business professionals with mentees who are seeking guidance in areas like business strategy, financial management, operations, and marketing.
                                                    </p>
                                                    <div class="wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="0">
                                                        <a href="{{url('/')}}/business-training-mentorship" class="btn btn-mod btn-large btn-theme  btn-circle" data-btn-animate="y">Learn More</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-sm-30">
                                                    <div class="portfolio-2-image round-large-radius">
                                                        <a href="#"><img class="round-large-radius" src="{{asset('uploads/mentorship.jpg')}}" alt="Business Training & Mentorship"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Portfolio Item -->

                                        <!-- Portfolio Item -->
                                        <div class="portfolio-2-item mb-100 mb-sm-50 mix branding">
                                            <div class="row wow-p fadeInUp">
                                                <div class="col-md-6">
                                                    <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                                    <h3 class="portfolio-2-title font-alt mb-20">Alumni</h3>
                                                    <p class="section-descr">
                                                        BFL ensures ongoing support and accountability for participants after their initial training. Through regular engagements, mentors track progress, address challenges, and provide additional guidance. These follow-ups help mentees stay on course, refine their business strategies, and continue growing towards financial independence and success.
                                                    </p>
                                                </div>
                                                <div class="col-md-6 mb-sm-30 order-first order-md-last">
                                                    <div class="portfolio-2-image">
                                                        <a href="#"><img src="{{asset('uploads/alumni.jpg')}}" alt="Mentees Follow Ups"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Portfolio Item -->



                                    </div>
                                    <!-- End Portfolio Grid -->

                        </div>
                    </div>
                </section>
                <!-- End Portfolio Section -->

                <!-- Blog Section -->
                <section class="page-section bg-gradient-gray-light-1" id="blog" style="padding-top:0px">
                    <div class="row wow fadeInRight" >
                        <div class="col-md-12 col-lg-12 top-heading-left">
                            <h2 class="section-title mb-30 mb-sm-20"><span class="theme-color"></span>Updates.<span class="text-black"></span></h2>
                        </div>
                    </div>
                    <div class="container" style="padding-top:140px">
                        <div class="row mb-80 mb-sm-60">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                                <p class="section-descr mb-0">
                                    Stay up to date with the latest news, stories, and important updates. Explore insights, key developments, and events as they unfold, keeping you informed and connected to what matters most
                                </p>
                            </div>
                        </div>

                        <div class="row mt-n30">

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0">


                                    <div class="post-prev-img image-updates">
                                        <a href="#"><img src="{{url('/')}}/uploads/Class-discussion.jpg" alt="Unlocking Potential: How Micro-Enterprises Are Transforming Lives"></a>
                                        <span class="overlay-text">Empowering Through Courses</span>
                                    </div>

                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0.1s">


                                    <div class="post-prev-img image-updates">
                                        <a href="#"><img src="{{url('/')}}/uploads/mentoring.jpg" alt="Add Image Description"></a>
                                        <span class="overlay-text">Empowering Through Mentoring</span>
                                    </div>


                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="post-prev-img image-updates">
                                        <a href="#"><img src="{{url('/')}}/uploads/Class-discussion.jpg" alt="Add Image Description"></a>
                                        <span class="overlay-text">Empowering <br> Our <br> Alumni</span>
                                    </div>
                            </div>
                            <!-- End Post Item -->

                        </div>

                    </div>
                </section>
                <!-- End Blog Section -->

                <!-- Contact Section -->
                <section class="page-section" id="contact" style="padding-top:0px">
                    <div class="row wow fadeInLeft" >
                        <div class="col-md-12 col-lg-12 top-heading-right">
                            <h2 class="section-title mb-30 mb-sm-20"><span class="theme-color"></span>Let’s have a conversation<span class="text-black"></span></h2>
                        </div>
                    </div>



                    <div class="container position-relative" style="padding-top:140px">

                        <div class="row mb-80 mb-sm-60" style="position:relative; right:0px !important;">
                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center">
                                {{-- <h2 class="section-title mb-40 mb-xs-30">Let’s have a conversation</h2> --}}
                                <p class="section-descr mb-0">
                                    Reach out to us and let's begin a journey toward productive collaboration. Together we can achieve great things.
                                </p>
                            </div>
                        </div>

                        <div class="row wow fadeInUp">

                            <!-- Left Column -->
                            <div class="col-lg-5 mb-md-50 mb-sm-30 d-flex align-items-strech">
                                <div class="bg-color-primary-1 bg-color-alpha-90 bg-image bg-scroll light-content w-100 round overflow-hidden px-4 px-sm-5 py-5" style="background-image: url(images/demo-corporate/section-bg-4.jpg)">

                                    <!-- Address -->
                                    <div class="contact-item mb-40 mb-sm-20">
                                        <div class="ci-icon">
                                            <i class="mi-location"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Address
                                        </h4>
                                        <div class="ci-text large">
                                            Shalom House, Block C, St Daniel Comboni Rd, Off Ngong Road
                                        </div>
                                        <div class="ci-link">
                                            <a href="https://maps.app.goo.gl/qpqeUt9RfbJAC7JE6" rel="nofollow noopener" target="_blank">See Map</a>
                                        </div>
                                    </div>
                                    <!-- End Address -->

                                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                                    <!-- Email -->
                                    <div class="contact-item mb-40 mb-sm-20">
                                        <div class="ci-icon">
                                            <i class="mi-email"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Email
                                        </h4>
                                        <div class="ci-text large">
                                            businessforlife@empoweringlives.org
                                        </div>
                                        <div class="ci-link">
                                            <a href="mailto:businessforlife@empoweringlives.org">Say Hello</a>
                                        </div>
                                    </div>
                                    <!-- End Email -->

                                    <hr class="mt-0 mb-40 mb-sm-20 opacity-02"/>

                                    <!-- Phone -->
                                    <div class="contact-item">
                                        <div class="ci-icon">
                                            <i class="mi-mobile"></i>
                                        </div>
                                        <h4 class="ci-title">
                                            Phone
                                        </h4>
                                        <div class="ci-text large">
                                            +254 721 179 061
                                        </div>
                                        <div class="ci-link">
                                            <a href="tel:+254 721 179 061">Call now</a>
                                        </div>
                                    </div>
                                    <!-- End Phone -->

                                </div>
                            </div>
                            <!-- End Left Column -->

                            <!-- Right Column -->
                            <div class="col-lg-7 d-flex align-items-strech">
                                <div class="border-color-primary-1 round w-100 px-4 px-sm-5 py-5">

                                    <h3 class="section-title-small mt-n10 mb-40 mb-sm-30">We'd love to hear from you</h3>

                                    <!-- Contact Form -->
                                    <form class="form contact-form" id="contact_form">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" class="input-lg round form-control" placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                                                </div>
                                                <!-- End Name -->

                                            </div>

                                            <div class="col-md-6">

                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="input-lg round form-control" placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                                                </div>
                                                <!-- End Email -->

                                            </div>
                                        </div>

                                        <!-- Message -->
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea name="message" id="message" class="input-lg round form-control" style="height: 132px;" placeholder="Enter your message"></textarea>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-6 col-xl-7 d-flex align-items-center">

                                                <!-- Inform Tip -->
                                                <div class="form-tip w-100 pt-3">
                                                    <i class="icon-info size-16"></i>
                                                    All the fields are required. By sending the form you agree to the <a href="{{url('/')}}/terms-and-conditions">Terms & Conditions</a> and <a href="{{url('/')}}/privacy-policy">Privacy Policy</a>.
                                                </div>
                                                <!-- End Inform Tip -->

                                            </div>

                                            <div class="col-md-6 col-xl-5 mt-sm-20">

                                                <!-- Send Button -->
                                                <div class="pt-3 text-md-end">
                                                    <button type="submit" class="submit_btn btn btn-mod btn-color btn-large btn-round btn-hover-anim" id="submit_btn" aria-controls="result">
                                                        <span>Send Message</span>
                                                    </button>
                                                </div>
                                                <!-- End Send Button -->

                                            </div>

                                        </div>

                                       <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>

                                    </form>
                                    <!-- End Contact Form -->

                                </div>
                            </div>
                            <!-- End Right Column -->

                        </div>

                    </div>

                </section>
                <!-- End Contact Section -->

                 <!-- Google Map -->
                 <div class="google-map">

                    <a href="#" class="map-section">
                        <div class="map-toggle wow fadeInUpShort" aria-hidden="true">
                            <div class="mt-icon">
                                <i class="mi-location"></i>
                            </div>
                            <div class="mt-text">
                                <div class="mt-open">Open the map <i class="mt-open-icon"></i></div>
                                <div class="mt-close">Close the map <i class="mt-close-icon"></i></div>
                            </div>
                        </div>
                    </a>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d426.21116951397175!2d36.75433370367086!3d-1.3001102594562906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1b00389d3b57%3A0x8e4c921c3610dd84!2sBusiness%20For%20Life!5e1!3m2!1sen!2ske!4v1729765292707!5m2!1sen!2ske" width="600" height="450" loading="lazy" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
                <!-- End Google Map -->

                <!-- FAQ Section -->
                <section class="page-section">
                    <div class="container position-relative">

                        <div class="row position-relative">

                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                                <h3 class="section-title text-center mb-80 mb-sm-60" style="color: #c26940;">
                                    Frequently Asked Questions
                                </h3>

                                <!-- Accordion -->
                                <dl class="toggle">

                                    <dt>
                                        <a href="#" style="color: #c26940;">What is BFL, and what services do you provide?</a>
                                    </dt>
                                    <dd class="blacks" style="color:#30676e !important; font-weight:400 !important; ">
                                        Business for life empowers poor, marginalized and disadvantaged people to start and run sustainable businesses through effective business training.  After the completion of the course, the business skills learned are enhanced through business mentorship and alumni care.
                                    </dd>

                                    <dt>
                                        <a style="color: #c26940;" href="#">How can i support BFL?</a>
                                    </dt>
                                   <dd class="blacks" style="color:#30676e !important; font-weight:400 !important; ">
                                    As business for life targets those who are poor and unable to fund their own training, business courses, mentorship and alumni support rely heavily on donations.   Join business for life in changing lives by giving the gift of business training to:

                                        <ul>
                                            <li>an individual - $300 trains one business owner and impacts an average of 10 family members</li>
                                            <li>a full class - $7500 trains an entire class of 25 business owners and impacts 250 lives</li>
                                            <li>an entire community - $30,000 trains $100 business owners, which changes 1000 individuals and impacts a whole community</li>

                                        </ul>
                                    </dd>

                                    <dt>
                                        <a style="color: #c26940;" href="#">What is BFL's success rate?</a>
                                    </dt>
                                   <dd class="blacks" style="color:#30676e !important; font-weight:400 !important; ">
                                    In the 12 countries where the business for life courses have been facilitated, over 80% of those who have completed the training in both urban and rural communities, are still running profitable businesses one year later.
                                    </dd>

                                    <dt>
                                        <a style="color: #c26940;" href="#">How can BFL serve my organization?</a>
                                    </dt>
                                   <dd class="blacks" style="color:#30676e !important; font-weight:400 !important; ">
                                    Community development requires empowerment on many levels.  Business for life, due to expertise, experience and proven success in this area; can partner with your organization by providing the economic empowerment aspect.
                                    </dd>



                                </dl>
                                <!-- End Accordion -->

                            </div>

                        </div>
                    </div>
                </section>
                <!-- End FAQ Section -->



            </main>

            <!-- Footer -->
            <footer class="footer-1 bg-dark-1 light-content">
                <div class="container">

                    <div class="page-section">
                        <div class="row">

                            <!-- Copyright -->
                            <div class="col-lg-3 text-center text-lg-start mb-md-50">
                                © Business For Life 2024.
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

                        {{-- Made with love for great people. --}}

                        <div class="small">
                            Read <a href="{{url('/')}}/terms-and-conditions">Terms & Conditions</a> and <a href="{{url('/')}}/privacy-policy">Privacy Policy</a>.
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
