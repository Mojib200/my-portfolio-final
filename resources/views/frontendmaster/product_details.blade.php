
{{-- @foreach ($protfolio as $protfolios)
@endforeach --}}
@foreach ($homes as $item)
@endforeach
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:11 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend') }}/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/slick.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/aos.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/default.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('/frontend') }}/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="{{ asset('/frontend') }}/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="{{ asset('/frontend') }}/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="{{ asset('/frontend') }}/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>Portfolio Single POST</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">

                                    <img src="{{ asset('/uploads/portfolio_photo') }}/{{ $protfolio->portfolio_photo }}"   class="rounded" alt="img">


                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <h2>Consectetur neque elit quis nunc cras elementum</h2>
                                    <p>{{ $protfolio->portfolio_description }}</p>



                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img src="{{ asset('/uploads/profile_photo') }}/{{ $item->profile_photo }}"
                                                class="rounded-circle" height="200"
                                                width="200" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>{{ $item->name }}</h5>
                                                <p>{{ $item->myself }}</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->



		<!-- JS here -->
        <script src="{{ asset('/frontend') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/popper.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/one-page-nav-min.js"></script>
        <script src="{{ asset('/frontend') }}/js/slick.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/ajax-form.js"></script>
        <script src="{{ asset('/frontend') }}/js/wow.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/aos.js"></script>
        <script src="{{ asset('/frontend') }}/js/jquery.waypoints.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/jquery.counterup.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('/frontend') }}/js/plugins.js"></script>
        <script src="{{ asset('/frontend') }}/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/portfolio-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:29:14 GMT -->
</html>
