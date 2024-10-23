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
                        <a href="{{url('/')}}" class="logo font-alt">
                            <img src="{{asset('uploads/BFL-Logo.png')}}" alt="BFL Logo"  >
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


                <section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

                    <!-- Background Shape -->
                    <div class="bg-shape-1 wow fadeIn" style=" width: 100%;">
                        <img class="opacity-05 about-banner" src="https://palla.rickelectronics.co.ke/public/uploads/business-loans-1-768x512.jpg" alt="" />
                    </div>
                    <!-- End Background Shape -->

                    <div class="container position-relative pt-10 pt-sm-40 text-center">

                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">

                                <h1 class="hs-title-9 mb-10">
                                    <span class="wow charsAnimIn" data-splitting="chars">
                                         <span class="mark-decoration-3-wrap">Business Training Mentorship<b class="mark-decoration-3 wow scalexIn" data-wow-delay="0.5s"></b></span>
                                    </span>
                                </h1>

                            </div>
                        </div>

                    </div>

                </section>
                <!-- End Home Section -->


                  <!-- Portfolio Section -->
                  <section class="page-section bg-gradient-gray-light-1" id="portfolio">
                    <div class="container position-relative">

                        <div class="row mb-70 mb-sm-50">

                            <div class="col-lg-12 col-xl-10 mb-md-40" style="margin:0 auto">



                                <p class="section-descr mb-0">
                                    <strong>Selection Process</strong><br>
                                    The intervention begins with a selection process during which those who are more entrepreneurially inclined and willing to commit themselves to this training process are selected.  Each applicant must contribute the equivalent of $10 for the money-making activity they will be involved in during the course.
                                    <br><br><strong>The Course</strong><br>

                                    During the course a unique combination of theory and practice is employed.  Business concepts learned in the classroom are applied directly in their local marketplace, thereby reinforcing the acquisition of practical business skills.
                                    Fieldwork throughout the course includes researching business opportunities and choosing the opportunity which best suits the participant’s interest and abilities. The profitability and sustainability of the new business is analyzed as participants learn to calculate their breakeven point.  The participants determine the most suitable marketing and management strategy as their new business is started.  Participants explore ways to grow the new venture, draw up a business plan and keep the necessary records as per what they learned on the course.
                                    The $10 the participants contribute for the money-making exercise during the course often provides some of the “seed capital” for their new business.
                                    <br><br>


                                    <strong>Mentorship</strong><br>

                                    Mentorship, crucial to ongoing learner success, commences immediately after the initial month of training for a further 6 months, when each learner is personally engaged four times by one of the trainers. It is during these one-on-one sessions that the new business owners receive helpful business mentoring, as the trainer helps them to implement the skills learned on the training, as they face the inevitable challenges of starting a new business.<br><br>

                                    <strong>Financial Understanding Board Game</strong><br>
                                    During the course participants engage in a board game exercise developed especially to help them practically integrate the skills and thinking acquired on the course into their business practices. The Financial Understanding Board Game was designed to train the learners practically how to manage their business finances and their working capital, to make good financial decisions, to work through problems, to manage their cash flow, to manage their stock levels, and to keep accurate records.

                                </p>

                            </div>

                            <div class="col-lg-2 offset-xl-1 d-flex align-items-end pb-10">

                                <!-- Features List -->
                                <div class="row mt-n10">



                                </div>
                                <!-- End Features List -->

                            </div>

                        </div>





                    </div>
                </section>
                <!-- End Portfolio Section -->


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
