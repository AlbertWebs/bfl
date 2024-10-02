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
             <nav class="main-nav dark transparent stick-fixed wow-menubar">
                <div class="main-nav-sub full-wrapper">

                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format.
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="#top" class="logo font-alt">
                            <img src="{{asset('theme/images/logo-white.svg')}}" alt="Your Company Logo" width="105" height="34">
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
                            <li><a href="#home" class="active">Home</a></li>
                            <li><a href="#about">Who We Are</a></li>
                            <li><a href="#programs">Programs</a></li>
                            <li><a href="#portfolio">Impact Stories</a></li>
                            <li><a href="#blog">News Updates</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>

                        <ul class="items-end clearlist local-scroll">
                            <li>
                                <a href="#contact" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">
                                        <i class="fa fa-donate size-16"></i>
                                        Donete Now
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

                            <h2 class="section-title-tiny font-alt mb-40 mb-sm-30 wow fadeInUp">Welcome to Bussiness For Life</h2>

                            <h1 class="hs-title-44 font-alt mb-60 mb-sm-40"><span class="wow charsAnimIn" data-splitting="chars">Healing shouldn’t be just for <br>those who can afford it.</span></h1>

                            {{--  --}}
                            {{-- <h1 class="hs-title-13a font-alt mb-50 mb-sm-30 wow fadeRotateIn" data-wow-delay="0.2s">
                                We are going to type some core values below <br>
                                <span class="visually-hidden">based in Melburn, with passion to art, and freelancer</span>
                                <span data-period="3250" data-type='[ "based in Nairobi", "with passion to art", "and freelancer"]' class="typewrite" aria-hidden="true"></span>
                            </h1> --}}
                            {{--  --}}
                            <div class="local-scroll wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="0">
                                <a href="#" class="btn btn-mod btn-large btn-w btn-circle" data-btn-animate="y">Explore Success Stories</a>
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
                <section class="page-section" id="about">

                    <!-- Decorative Line -->
                    <div class="bg-line-1 opacity-025">
                        <img src="{{asset('theme/images/demo-corporate/decoration-2.svg')}}" alt="" class="wow fadeIn" data-wow-delay="0.4s" />
                    </div>
                    <!-- End Decorative Line -->

                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">
                            <div class="col-md-10 offset-md-1 col-lg-10  text-center">

                                <p class="section-descr mb-0">
                                        <span>
                                            {{-- <strong> --}}
                                                <span>For nearly 30 years, BFL has been empowering orphans and families to break free from poverty and embrace the teachings of Christ.
                                                <strong>
                                                    <span style="color: #c26940;"> Through their dedicated efforts, BFL has provided essential support while fostering both spiritual and material transformation.</span>
                                                    <span style="color: #d8a13d;"> These families, now strengthened and renewed,</span>
                                                    <span style="color: #1A383C;">are sharing their stories of change, creating a positive ripple effect in their communities.</span></strong>
                                                    For 29 years, BFL has stood as a beacon of hope, inspiring faith, resilience, and lasting empowerment.

                                            {{-- </strong> --}}
                                        </span>
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                </section>
                <!-- End About Section -->
                 <!-- Call to Action Section -->
                 <section class="page-section bg-scroll light-content" style="background-image: url('{{asset('uploads/2149004358.jpg')}}'); background-position: bottom right !important;  ">

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
                                    Even when people in poverty receive help, it is usually limited to their external problems. BFL looks at the whole person (who God made them to be) and their community to see what relational, emotional, and spiritual support is needed as well.
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
                                    <!-- Portfolio Grid -->
                            <div id="isotope" class="mb-n100 mb-sm-n50">

                                <!-- Portfolio Item -->
                                <div class="portfolio-2-item mb-100 mb-sm-50 mix development">
                                    <div class="row wow-p fadeInUp">
                                        <div class="col-md-6 mb-sm-30">
                                            <div class="portfolio-2-image">
                                                <a href="#"><img src="{{asset('uploads/pexels-mikhail-nilov-9301156.jpg')}}" alt="Business Training & Mentorship"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                            <h3 class="portfolio-2-title font-alt mb-20">Business Training & Mentorship</h3>
                                            <p class="section-descr">
                                                BFL's <strong>Business Training & Mentorship</strong> program equips individuals with the skills to start or grow businesses. With practical training and guidance from experienced mentors, participants gain confidence, fostering financial independence and long-term success in their communities.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Portfolio Item -->

                                <!-- Portfolio Item -->
                                <div class="portfolio-2-item mb-100 mb-sm-50 mix branding">
                                    <div class="row wow-p fadeInUp">
                                        <div class="col-md-6">
                                            <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                            <h3 class="portfolio-2-title font-alt mb-20">Mentees Follow Ups</h3>
                                            <p class="section-descr">
                                                BFL's ensure ongoing support and accountability for participants after their initial training. Through regular check-ins, mentors track progress, address challenges, and provide additional guidance. These follow-ups help mentees stay on course, refine their business strategies, and continue growing towards financial independence and success.
                                            </p>
                                        </div>
                                        <div class="col-md-6 mb-sm-30 order-first order-md-last">
                                            <div class="portfolio-2-image">
                                                <a href="#"><img src="{{asset('uploads/pexels-gabby-k-9490629.jpg')}}" alt="Mentees Follow Ups"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Portfolio Item -->

                                <!-- Portfolio Item -->
                                <div class="portfolio-2-item mb-100 mb-sm-50 mix design development">
                                    <div class="row wow-p fadeInUp">
                                        <div class="col-md-6 mb-sm-30">
                                            <div class="portfolio-2-image">
                                                <a href="#"><img src="{{asset('uploads/pexels-overly-olu-264845430-12714976.jpg')}}" alt="Image Description"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <hr class="black thick mt-0 mb-20 d-none d-md-block">
                                            <h3 class="portfolio-2-title font-alt mb-20">Alumni Program</h3>
                                            <p class="section-descr">
                                                BFL's **Alumni Program** provides ongoing support for past participants through networking, advanced workshops, and resources. Alumni can further grow their businesses, share knowledge, and mentor others, fostering a strong community of collaboration and continued success.
                                            </p>
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
                    <div class="row mb-70 mb-sm-50 top-heading-left wow fadeInRight">
                        <div class="col-md-12 col-lg-12">
                            <h2 class="section-title mb-30 mb-sm-20"><span class="theme-color"></span> Insights and Update.<span class="text-black"></span></h2>
                        </div>
                    </div>
                    <div class="container" style="padding-top:140px">

                        <div class="row mt-n30">

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0">
                                <div class="post-prev-container">

                                    <div class="post-prev-img">
                                        <a href="#"><img src="{{url('/')}}/uploads/leaders.png" alt="Unlocking Potential: How Micro-Enterprises Are Transforming Lives"></a>
                                    </div>

                                    <h3 class="post-prev-title"><a href="#">Unlocking Potential: How Micro-Enterprises Are Transforming Lives</a></h3>

                                    <div class="post-prev-text">
                                        In a world often dominated by large corporations, the power of small businesses cannot be overlooked. Micro-enterprises,
                                    </div>

                                    <div class="post-prev-info clearfix">
                                        <div class="float-start">
                                            <a href="#" class="icon-author">
                                                <i class="mi-user size-14 align-middle"></i>
                                            </a>
                                            <a href="#">Thomas Johnson</a>
                                        </div>
                                        <div class="float-end">
                                            <i class="mi-calendar size-14 align-middle"></i>
                                            <a href="#">August 5</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="post-prev-container">

                                    <div class="post-prev-img">
                                        <a href="#"><img src="{{url('/')}}/uploads/leaders.png" alt="Add Image Description"></a>
                                    </div>

                                    <h3 class="post-prev-title"><a href="#">Navigating the Road to Success: Lessons from Our Clients</a></h3>

                                    <div class="post-prev-text">
                                        Starting a business is not without its challenges. From securing funding to managing risk, entrepreneurs face a myriad of obstacles along the way.
                                    </div>

                                    <div class="post-prev-info clearfix">
                                        <div class="float-start">
                                            <a href="#" class="icon-author">
                                                <i class="mi-user size-14 align-middle"></i>
                                            </a>
                                            <a href="#">Robert Gitau</a>
                                        </div>
                                        <div class="float-end">
                                            <i class="mi-calendar size-14 align-middle"></i>
                                            <a href="#">August 5</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Post Item -->

                            <!-- Post Item -->
                            <div class="post-prev col-md-6 col-lg-4 mt-30 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="post-prev-container">

                                    <div class="post-prev-img">
                                        <a href="#"><img src="{{url('/')}}/uploads/leaders.png" alt="Add Image Description"></a>
                                    </div>

                                    <h3 class="post-prev-title"><a href="#">Embracing Flexibility: How the Gig Economy is Reshaping the Workforce</a></h3>

                                    <div class="post-prev-text">
                                        The traditional 9-to-5 job is no longer the only path to financial stability. The rise of the gig economy has created new..
                                    </div>

                                    <div class="post-prev-info clearfix">
                                        <div class="float-start">
                                            <a href="#" class="icon-author">
                                                <i class="mi-user size-14 align-middle"></i>
                                            </a>
                                            <a href="#">Noel Kiptum</a>
                                        </div>
                                        <div class="float-end">
                                            <i class="mi-calendar size-14 align-middle"></i>
                                            <a href="#">August 5</a>
                                        </div>
                                    </div>

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
                                    We’re here to connect with like-minded individuals. Reach out, say hello, and let's begin a journey toward productive collaboration. Together, we can create your own success story and achieve great things.
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
                                            Jamuhuri Estate, Ngong Road, Kilimani
                                        </div>
                                        <div class="ci-link">
                                            <a href="#" rel="nofollow noopener" target="_blank">See Map</a>
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
                                            support@businessforlife.com
                                        </div>
                                        <div class="ci-link">
                                            <a href="mailto:support@businessforlife.com">Say Hello</a>
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
                                            +254 723 014 032
                                        </div>
                                        <div class="ci-link">
                                            <a href="tel:+254 723 014 032">Call now</a>
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
                                                    All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
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
