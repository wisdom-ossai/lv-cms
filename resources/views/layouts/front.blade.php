<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>
        Chux Blog | @yield('title')
    </title>


    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="./favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-180x180.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('images/mstile.png') }}">
    <meta name="msapplication-TileColor" content="#00f0d1">
    <meta name="theme-color" content="#00f0d1">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:100,500">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DECODE ICONS -->
    <link rel="stylesheet" href="{{asset('fonts/decode-icons/css/decode-icons.min.css')}}">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="{{ asset('plugins/animations/animate.min.css') }}">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages-style.css') }}">


</head>

<body class="sticky-header header-classic footer-light">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="/">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="decode-icon-menu"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="megamenu">
                                    <a class="btn btn-default btn-outline waves waves-dark btn-xs" href="{{route('login') }}">Sign In<i class="decode-icon-cursor"></i></a>
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container-fluid -->

        </header><!-- HEADER -->


        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header">

                <div class="ken-burns" style="background-image:url('{{ asset('images/blogbanner1.jpg') }}');"></div>

                <div class="overlay"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            @yield('page-header-text')

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- page-header -->

            @yield('content')


            @yield('paging')

        </div><!-- PAGE CONTENT -->


        <!-- FOOTER -->
        <footer>

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="widget widget-text">

                                <div>

                                    <p><img src="{{ asset('images/logo.png') }}" alt="">
                                    </p>
                                    <br>
                                    <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet
                                        tellus blandit. Etiam nec odio vestibul.</p>

                                </div>

                            </div><!-- widget-text -->

                        </div><!-- col -->
                        <div class="col-md-3">

                            <div class="widget widget-pages">

                                <h6 class="widget-title">Fast links</h6>

                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Services &amp; Features</a></li>
                                    <li><a href="#">Accordions &amp; Tabs</a></li>
                                    <li><a href="#">Menu ideas</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                        </div><!-- col -->
                        <div class="col-md-3">

                            <div class="widget widget-pages">

                                <h6 class="widget-title">Usefull links</h6>

                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                        </div><!-- col -->
                        <div class="col-md-3">

                            <div class="widget widget-contact">

                                <h6 class="widget-title">Contact info</h6>

                                <ul>
                                    <li>26 Omolayo Idowu street Ori okuta, <br class="d-block d-md-none d-lg-block"> Ikorodu, Lagos
                                    </li>
                                    <li>+234 806 748 0053</li>
                                    <li><a href="mailto:ossaiwisdom48@gmail.com">ossaiwisdom48@gmail.com</a></li>
                                </ul>

                            </div><!-- widget-contact -->

                        </div>
                        <!--col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->

            <div id="footer-bottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 order-md-6">

                            <div class="widget widget-social">

                                <div class="social-media rounded">

                                    <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                    <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>

                                </div><!-- social-media -->

                            </div><!-- widget-social -->

                        </div><!-- col -->
                        <div class="col-md-6">

                            <div class="widget widget-text">

                                <div>

                                    <p class="copyright"><img src="{{ asset('images/logo.png') }}" alt="">&copy; {{ date('Y') }}. All Rights Reserved.</p>

                                </div>

                            </div><!-- widget-text -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer-bottom -->

        </footer><!-- FOOTER -->

    </div><!-- MAIN CONTAINER -->


    <!-- SCROLL UP -->
    <a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


    <!-- jQUERY -->
    <script src="{{ asset('plugins/jquery/jquery-2.2.4.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- VIEWPORT -->
    <script src="{{ asset('plugins/viewport/jquery.viewport.js') }}"></script>

    <!-- ANIMATIONS -->
    <script src="{{ asset('plugins/animations/wow.min.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
