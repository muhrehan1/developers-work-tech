
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>{{$title}}- IT Solutions and Technology</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/dev.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.cs')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container"></div>
</div>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">

    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
        <header id="rs-header" class="rs-header style3 header-transparent">
            <!-- Topbar Area Start -->
            <div class="topbar-area style2 modify1">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-8">
                            <div class="topbar-contact">
                                <ul>
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@rstheme.com">support@developersworktech.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="tel:++1(990)999–5554"> +92-316-2443134</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        Karachi,Pak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right">
                            <div class="toolbar-sl-share">
                                <ul>
                                    <li class="opening"> <em><i class="flaticon-clock"></i> 08:00am-6:00pm</em> </li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar Area End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-part">
                                <a href="{{route('MainHome')}}">
                                    <img class="normal-logo" src="{{asset('assets/images/dev-white.png')}}" alt="logo">
                                    <img class="sticky-logo" src="{{asset('assets/images/dev-black.png')}}" alt="logo">
                                </a>
                            </div>
                            <div class="mobile-menu">
                                <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 text-right">
                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <nav class="rs-menu pr-70 lg-pr-50 md-pr-0">
                                        <ul class="nav-menu">
                                            <li class="rs-mega-menu menu-item-has-children current-menu-item"> <a href="{{route('MainHome')}}">Home</a>

                                            </li>
                                            <li>
                                                <a href="{{route('About')}}">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li><a href="software-development.html">Software Development</a> </li>
                                                    <li><a href="web-development.html">Web Development</a> </li>
                                                    <li><a href="analytic-solutions.html">Analytic Solutions</a> </li>
                                                    <li><a href="cloud-and-devops.html">Cloud and DevOps</a></li>
                                                    <li><a href="product-design.html">Product Design</a> </li>
                                                    <li><a href="data-center.html">Data Center</a> </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="services1.html">Services 1</a></li>
                                                            <li><a href="services2.html">Services 2</a></li>
                                                            <li><a href="services3.html">Services 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="our-team.html">Our Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-team.html">Single Team</a>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Case Studies</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="case-studies-style1.html">Case Studies Style 1</a></li>
                                                            <li><a href="case-studies-style2.html">Case Studies Style 2</a></li>
                                                            <li><a href="case-studies-style3.html">Case Studies Style 3</a></li>
                                                            <li><a href="case-studies-style4.html">Case Studies Style 4</a></li>
                                                            <li><a href="case-studies-style5.html">Case Studies Style 5</a></li>
                                                            <li><a href="case-studies-style6.html">Case Studies Style 6</a></li>
                                                            <li><a href="case-studies-style7.html">Case Studies Style 7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-single.html">Shop Single</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="pricing.html">Pricing</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">Faq</a>
                                                    </li>
                                                    <li>
                                                        <a href="error.html">404</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="blog.html">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog</a> </li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('Contact')}}">Contact</a>
                                            </li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>
                                </div> <!-- //.main-menu -->
                                <div class="expand-btn-inner hidden-md">
                                    <ul>
                                        <li class="sidebarmenu-search">
                                            <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn"><span id="nav-close" class="text-center"><i class="fa fa-close"></i></span></div>
            <div class="canvas-logo">
                <a href="{{route('MainHome')}}"><img src="{{asset('assets/images/dev.png')}}" alt="logo"></a>
            </div>
            <div class="offcanvas-text">
                <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>
            </div>
            <div class="canvas-contact">
                <h5 class="canvas-contact-title">Contact Info</h5>
                <ul class="contact">
                    <li><i class="fa fa-globe"></i>Middle Badda, Dhaka, BD</li>
                    <li><i class="fa fa-phone"></i>+123445789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:info@yourcompany.com">info@yourcompany.com</a></li>
                    <li><i class="fa fa-clock-o"></i>10:00 AM - 11:30 PM</li>
                </ul>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </div>
    <!--Full width header End-->
{{--        MAIN CONTENT SECTION STARTS FROM HERE    --}}
    @yield('content')
{{--MAIN CONTENT SECTION  ENDS HERE--}}
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer style1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="index.html"><img src="{{asset('assets/images/dev.png')}}" alt=""></a>
                    </div>
                    <div class="textwidget pb-30"><p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">IT Services</h3>
                    <ul class="site-map">
                        <li><a href="software-development.html">Software Development</a></li>
                        <li><a href="web-development.html">Web Development</a></li>
                        <li><a href="analytic-solutions.html">Analytic Solutions</a></li>
                        <li><a href="web-development.html">Cloud and DevOps</a></li>
                        <li><a href="web-development.html">Product Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">374 FA Tower, William S Blvd 2721, IL, USA</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)155-69569">(+880)155-69569</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 10:00 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="widget-title">Newsletter</h3>
                    <p class="widget-desc">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
                    <p>
                        <input type="email" name="EMAIL" placeholder="Your email address" required="">
                        <em class="paper-plane"><input type="submit" value="Sign up"></em>
                        <i class="flaticon-send"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; 2021 All Rights Reserved. Developed By <a href="http://rstheme.com/">RSTheme</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Menu js -->
<script src="{{asset('assets/js/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('assets/js/swiper.min.js')}}"></script>
<!-- particles js -->
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- pointer js -->
<script src="{{asset('assets/js/pointer.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('assets/js/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
