@extends('client.layout.shared')

@section('title','Home Page')
@section('content')


    <section class="slider_section mb-15">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                            <h1> The Frisco</h1>
                                <h2>Armchair</h2>
                                <p>An elegant selection of chairs combining comfort & practicality. Providing the perfect solution for large & small scale exhibition</p>
                                <a class="button" href="shop.html">shop Now <i class="fa fa-angle-double-right"></i></a>
                            </div>
                    </div>
                </div>
            </div>
                
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_content">
                                <h1> Season Sale</h1>
                                <h2>Up to 50%</h2>
                                <p>An elegant selection of chairs combining comfort & practicality. Providing the perfect solution for large & small scale exhibition</p>
                                <a class="button" href="shop.html">shop Now <i class="fa fa-angle-double-right"></i></a>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

  
    <!--banner area start-->
    <div class="banner_area">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner box_1 mb-15">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner1.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner box_2">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner2.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    
    <!--featured products area start-->
    <div class="featured-products mb-78">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>  
                                            <span class="current_price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Driven Backpack</a></h4>
                                        <div class="price_box">  
                                            <span class="current_price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Compete Track Tote</a></h4>
                                        <div class="price_box"> 
                                            <span class="current_price">$75.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">$86.00</span>  
                                            <span class="current_price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Chaz Kangeroo Hoodie1</a></h4>
                                        <div class="price_box"> 
                                            <span class="current_price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                        <article class="single_featured">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                            <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="featured_content">
                                        <h4 class="featured_name"><a href="product-details.html">Fusion Backpack</a></h4>
                                        <div class="price_box"> 
                                            <span class="current_price">$65.00</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--featured products area end-->
    
    <!--product area start-->
    <div class="product_area mb-73">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>New arrivals</h2>
                    </div>
                </div>
            </div> 
            <div class="product_container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <div class="product_left">
                           <div class="row">
                                <div class="product_carousel product_column2 owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                        <div class="price_box"> 
                                                            <span class="old_price">$86.00</span> 
                                                            <span class="current_price">$79.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                        <div class="price_box"> 
                                                            <span class="current_price">$74.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                        <div class="price_box"> 
                                                           <span class="old_price">$80.00</span> 
                                                            <span class="current_price">$70.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                        <div class="price_box"> 
                                                            <span class="current_price">$65.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                        <div class="price_box"> 
                                                            <span class="current_price">$79.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                        <div class="price_box"> 
                                                           <span class="old_price">$86.00</span> 
                                                            <span class="current_price">$79.00</span>
                                                        </div>
                                                        <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                       </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0">
                        <div class="product_right">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="product-details.html"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_new">new</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <figcaption class="product_content">
                                        <h4 class="featured_name"><a href="product-details.html">Driven Backpack12</a></h4>
                                        <div class="price_box"> 
                                            <span class="old_price">$86.00</span> 
                                            <span class="current_price">$79.00</span>
                                        </div>
                                        <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
    </div>
    <!--product area end-->
    
    <!--banner area start-->
    <div class="banner_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner3.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner4.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner5.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area mb-75">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                       <h2>Best selling</h2>
                       <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-bs-toggle="tab" href="#Shoes" role="tab" aria-controls="Shoes" aria-selected="true"> 
                                        Shoes
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Bags" role="tab" aria-controls="Bags" aria-selected="false">
                                        Bags
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Clothing" role="tab" aria-controls="Clothing" aria-selected="false">
                                        Clothing
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" href="#Necklaces" role="tab" aria-controls="Necklaces" aria-selected="false">
                                        Necklaces
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Shoes" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
                <div class="tab-pane fade" id="Bags" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div> 
                    </div>      
                </div>
                <div class="tab-pane fade" id="Clothing" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div> 
                    </div>    
                </div>
                <div class="tab-pane fade" id="Necklaces" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product8.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product7.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product6.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product5.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product4.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product3.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
                                                <div class="price_box"> 
                                                    <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Rival Field Messenger</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$74.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product12.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Endeavor Daytrip Backpack</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$80.00</span> 
                                                    <span class="current_price">$70.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product11.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$65.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product_items">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                                <div class="price_box"> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart"><a href="cart.html" title="Add to cart"><i class="pe-7s-cart"></i></a></li>
                                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"> <i class="pe-7s-search"></i></a></li>
                                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="pe-7s-like"></i></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="featured_name"><a href="product-details.html">Savvy Shoulder Tote1</a></h4>
                                                <div class="price_box"> 
                                                   <span class="old_price">$86.00</span> 
                                                    <span class="current_price">$79.00</span>
                                                </div>
                                                <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div> 
                    </div>    
                </div>
            </div> 
              
        </div>
    </div>
    <!--product area end-->
    
    <!--shipping area start-->
    <div class="shipping_area mb-75">
        <div class="container">
            <div class="shipping_container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="pe-7s-world"></i>
                            </div>
                            <div class="shipping_content">
                                <h4>FREE SHIP ALL ORDER</h4>
                                <p>Mirum est notare quam littera gothica, quam nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="pe-7s-next-2"></i>
                            </div>
                            <div class="shipping_content">
                                <h4>FREE RETURNS</h4>
                                <p>Mirum est notare quam littera gothica, quam nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single_shipping">
                            <div class="shipping_icone">
                                <i class="pe-7s-gift"></i>
                            </div>
                            <div class="shipping_content">
                                <h4>SPECIAL GIFT CARDS</h4>
                                <p>Mirum est notare quam littera gothica, quam nunc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end--> 

    
<section class="blog_section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                   <h2>New arrivals</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                                <div class="post_date">
                                    <span class="day_time">24</span>
                                    <span class=moth_time>Aug</span>
                                </div>
                            </div>
                            <figcaption class="blog_content">
                               <h4 class="post_title"><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                                <p class="post_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Show more <i class="fa fa-angle-double-right"></i></a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                                <div class="post_date">
                                    <span class="day_time">24</span>
                                    <span class=moth_time>Aug</span>
                                </div>
                            </div>
                            <figcaption class="blog_content">
                               <h4 class="post_title"><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                                <p class="post_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Show more <i class="fa fa-angle-double-right"></i></a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                                <div class="post_date">
                                    <span class="day_time">24</span>
                                    <span class=moth_time>Aug</span>
                                </div>
                            </div>
                            <figcaption class="blog_content">
                               <h4 class="post_title"><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                                <p class="post_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Show more <i class="fa fa-angle-double-right"></i></a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3">
                    <article class="single_blog">
                        <figure>
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                                <div class="post_date">
                                    <span class="day_time">24</span>
                                    <span class=moth_time>Aug</span>
                                </div>
                            </div>
                            <figcaption class="blog_content">
                               <h4 class="post_title"><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                                <p class="post_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                                <footer class="btn_more">
                                    <a href="blog-details.html"> Show more <i class="fa fa-angle-double-right"></i></a>
                                </footer>
                            </figcaption>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
