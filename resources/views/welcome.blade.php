<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Welcome</title>

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

                            <i class="decode-icon-resume wow tada"></i>
                            <h1>Blog &amp; News</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($posts as $post)

                        <div class="blog-article">

                            <div class="blog-article-thumbnail">
                                <a href="#"><img src="{{$post->img_url}}" alt=""></a>
                            </div><!-- blog-article-thumbnail -->

                            <h4 class="blog-article-title"><a href="#">{{ $post->title }}</a></h4>

                            <ul class="blog-article-details">
                                <li class="date"><i class="decode-icon-time"></i> <a href="#">{{ $post->publised_at }}</a></li>
                                <li class="author"><i class="decode-icon-edit"></i> by <a href="#">Loredana Papp</a></li>
                                <lI class="category"><i class="decode-icon-layers"></i> in <a href="#">{{ $post->category->name}}</a></lI>
                                <li class="comments"><i class="decode-icon-chat"></i> <a href="#">3 Comments</a></li>
                            </ul><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>{{$post->description}}</p>

                                <a href="#">See more</a>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->
                        @endforeach

                    </div><!-- col -->
                    <div class="col-md-4">

                        <div class="widget widget-search">

                            <form name="search" novalidate method="get" action="#">
                                <fieldset>
                                    <input id="s" type="search" name="search" placeholder="" required>
                                    <label for="s">Search</label>
                                    <span></span>
                                    <input type="submit" name="submit" value="">
                                </fieldset>
                            </form>

                        </div><!-- widget-search -->

                        <div class="widget widget-archives">

                            <h6 class="widget-title">Archives</h6>

                            <ul>
                                <li><a href="#">September 2017</a></li>
                                <li><a href="#">August 2017</a></li>
                                <li><a href="#">July 2017</a></li>
                            </ul>

                        </div><!-- widget-archives -->

                        <div class="widget widget-categories">

                            <h6 class="widget-title">Categories</h6>

                            <ul>
                                @foreach($categories as $category)
                                <li><a href="#">{{ $category->name}}</a></li>
                                @endforeach
                            </ul>

                        </div><!-- widget-categories -->

                        <div class="widget widget-recent-posts">

                            <h6 class="widget-title">Latest Posts</h6>

                            <ul>
                                @foreach($posts as $post)
                                <li>
                                    <img src="{{ $post->img_url}}" alt="">
                                    <a class="post-title" href="#">{{ $post->title }}</a>
                                    <div class="post-details">
                                        by <a class="post-author" href="#">Jane Smith</a>
                                        <a class="post-date" href="#">{{ $post->published_at }}</a>
                                    </div><!-- post-details -->
                                </li>
                                @endforeach

                            </ul>

                        </div><!-- widget-recent-posts -->

                        <div class="widget widget-flickr">

                            <h6 class="widget-title">Flickr</h6>

                            <div class="flickr-photos">
                                <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user_set&amp;set=72157685386175133"></script>
                            </div><!-- flickr-photos -->

                        </div><!-- widget-flickr -->

                        <div class="widget widget-recent-comments">

                            <h6 class="widget-title">Recent comments</h6>

                            <ul>
                                <li><a href="#">Cristinne </a> on <a href="#">Good Investments</a> <span>2 min ago</span></li>
                                <li><a href="#">Michael </a> on <a href="#">Best Vines</a> <span>3 min ago</span></li>
                                <li><a href="#">Louise </a> on <a href="#">The Black Sea</a> <span>4 min ago</span></li>
                                <li><a href="#">Damon </a> on <a href="#">Banking Strategies</a> <span>5 min ago</span></li>
                            </ul>

                        </div><!-- widget-recent-comments -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <ul class="pagination">
                            <li class="active"><a href="#">1.</a></li>
                            <li><a href="#">2.</a></li>
                            <li><a href="#">3.</a></li>
                            <li><a href="#">4.</a></li>
                        </ul>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

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
