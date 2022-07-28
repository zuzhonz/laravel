<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/cillis/cillis/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 06:07:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> @yield('title') </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/plugins.css")}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

</head>

<body>
     <!--header area start-->
    
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="header_right_info">
                           <ul>
                               <li class="search_box"><a href="javascript:void(0)"><i class="pe-7s-search"></i></a>
                                   <div class="search_widget">
                                        <form action="#">
                                            <input placeholder="Search our catalog" type="text">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                               </li>
                               <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="pe-7s-cart"></i> <span class="item_count">2</span></a>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_gallery">
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                    <p>Qty: 1 X <span> $65.00 </span></p>    
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Natus erro at congue massa commodo</a>
                                                    <p>Qty: 1 X <span> $60.00 </span></p>   
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-android-close"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_table_border">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$125.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                           <div class="cart_button">
                                                <a href="cart.html">View cart</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"> Checkout</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--mini cart end-->
                               </li>
                               <li class="top_setting"><a href="#"><i class="pe-7s-config"></i></a>
                                   <div class="dropdown_setting">
                                        <div class="language">
                                            <h3><a href="#">Language:</a></h3>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Français</a></li>
                                            </ul>
                                        </div>
                                        <div class="currency">
                                            <h3><a href="#">Currency:</a></h3>
                                            <ul>
                                                <li><a href="#">EUR €</a></li>
                                                <li><a href="#">USD $</a></li>
                                            </ul>
                                        </div>
                                        <div class="account">
                                            <ul>
                                                <li><a href="my-account.html"> My account</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="#"> Sign in</a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </li>
                           </ul>
                        </div>   
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <header>
        <div class="main_header sticky-header">
            <div class="container">
                <div class="header_container">  
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!--main menu start-->
                            <div class="main_menu menu_position"> 
                                <nav>  
                                    <ul>
                                        <li>
                                            <a class="active" href="{{ route('home.index')}}">home</a>
                                           
                                        </li>
                                        <li class="mega_items"> <a href="{{ route('home.product')}}">shop</a> </li>
                                        <li><a href="{{ route('home.blog')}}">blog</a> </li>
                                        <li><a href="{{ route('home.shop.cart')}}">cart <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                              
                                            </ul>
                                        </li> 
                                        {{-- <li><a href="about.html">about Us</a></li> --}}
                                        <li><a href="{{ route('home.contact')}}"> Contact Us</a></li>
                                    </ul>  
                                </nav> 
                            </div>
                            <!--main menu end-->
                        </div>
                        <div class="col-lg-2">
                           <div class="header_right_info">
                               <ul>
                                   <li class="search_box"><a href="javascript:void(0)"><i class="pe-7s-search"></i></a>
                                       <div class="search_widget">
                                            <form action="#">
                                                <input placeholder="Search our catalog" type="text">
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                   </li>
                                   <li class="mini_cart_wrapper"><a href="javascript:void(0)"><i class="pe-7s-cart"></i> <span class="item_count">2</span></a>
                                        <!--mini cart-->
                                        <div class="mini_cart">
                                            <div class="cart_gallery">
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                                        <p>Qty: 1 X <span> $65.00 </span></p>    
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart_item">
                                                   <div class="cart_img">
                                                       <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                                   </div>
                                                    <div class="cart_info">
                                                        <a href="#">Natus erro at congue massa commodo</a>
                                                        <p>Qty: 1 X <span> $60.00 </span></p>   
                                                    </div>
                                                    <div class="cart_remove">
                                                        <a href="#"><i class="ion-android-close"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_table">
                                                <div class="cart_table_border">
                                                    <div class="cart_total">
                                                        <span>Sub total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                    <div class="cart_total mt-10">
                                                        <span>total:</span>
                                                        <span class="price">$125.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini_cart_footer">
                                               <div class="cart_button">
                                                    <a href="cart.html">View cart</a>
                                                </div>
                                                <div class="cart_button">
                                                    <a href="checkout.html"> Checkout</a>
                                                </div>

                                            </div>
                                        </div>
                                        <!--mini cart end-->
                                   </li>
                                   <li class="top_setting"><a href="#"><i class="pe-7s-config"></i></a>
                                       <div class="dropdown_setting">
                                           
                                            <div class="account">
                                                <ul>
                                                    <li><a href="{{ route('home.account')}}"> My account</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="{{ route('home.login')}}"> Sign in</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                   </li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
    <!--header area end-->
    
       @yield('content')
      <!--brand area start-->
      <div class="brand_area mb-78">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand1.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand2.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand3.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand4.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand5.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand6.png')}}" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('assets/img/brand/brand7.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
    <!--newsletter area start-->
    <div class="newsletter_area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_container">
                        <div class="newsletter_title">
                            <h3>NEWSLETTER</h3>
                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                        </div>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter" >
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email.." />
                                <button id="mc-submit">Subscribe!</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--newsletter area end-->
     <!--footer area start-->
    <footer class="footer_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widgets_container">
                        <h3>About Cillis</h3>
                        <div class="footer_desc">
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="widgets_container widget_menu">
                        <h3>Products</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Prices drop</a></li>
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Best sales</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="widgets_container widget_menu">
                        <h3>Our company</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#"> Secure payment</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="#">Stores</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="widgets_container widget_menu">
                        <h3>Your account</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="#">Affiliate</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-8">
                   <div class="widgets_container contact_us">
                       <h3>CONTACT US</h3>
                        <div class="footer_contact">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>8901 Marmora Road, Glasgow D04 89 GR, New York</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p> Telephone: <a href="tel:+(+1)866-540-3229">(+1) 866-540-3229</a> Fax: <a href="tel:+(+1)866-540-3229">(+1) 866-540-3229</a> </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <p>Email: support@posthemes.com</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright &copy; 2021 <a href="#">Cillis</a>  All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <a href="#"><img src="assets/img/icon/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </footer>
   

    
 <!-- Plugins JS -->
 <script src="{{asset('assets/js/plugins.js')}}"></script>
 <!-- Main JS -->
 <script src="{{asset('assets/js/main.js')}}"></script>
</body>



<!-- Mirrored from htmldemo.net/cillis/cillis/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 06:07:49 GMT -->

</html>