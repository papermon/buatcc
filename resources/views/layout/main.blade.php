<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon -->
    <link rel="icon" href="/confer/img/core-img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/confer/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
    <style>
        .owl-item {
            height: 100%;
        }

    </style>

</head>

<body>

    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img style="width: 1cm;" src="/confer/img/core-img/logo.png" alt="">
                        BoardGames</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="/boardgames">Top 50</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="/random" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Suprise Me ! <i
                                    class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>

    @if (\Request::is('/'))
    @else
        <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax"
            style="background-image: url(confer/img/bg-img/board3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="page-title">@yield('title')</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @yield('container')
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="/confer/img/core-img/logo.png" alt=""></a>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain.</p>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contact</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map"></i> 184 Main Collins Street</p>
                                <p><i class="zmdi zmdi-phone"></i> (226) 446 9371</p>
                                <p><i class="zmdi zmdi-email"></i> confer@gmail.com</p>
                                <p><i class="zmdi zmdi-globe"></i> www.confer.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Workshops</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">Microsoft Excel Basics</a></li>
                                <li><a href="#">Forum Speaker Series</a></li>
                                <li><a href="#">Tedx Moscow Conference</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="/confer/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="/confer/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="/confer/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="/confer/js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="/confer/js/default-assets/active.js"></script>

</body>

</html>
