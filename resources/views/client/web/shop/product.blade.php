@extends('client.layout.shared')
@section('title','Shop Page')

@section('content')
    
 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>

                        <li>shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_reverse mt-60 mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
               <!--sidebar widget start-->
                <aside class="sidebar_widget">
                    <div class="widget_inner">
                        <div class="widget_list widget_categories">
                            <h3>Category</h3>
                            <ul>
                                <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Shoes</a>
                                    <ul class="widget_dropdown_categories dropdown_categories1">
                                        <li><a href="#">Document</a></li>
                                        <li><a href="#">Dropcap</a></li>
                                        <li><a href="#">Dummy Image</a></li>
                                        <li><a href="#">Dummy Text</a></li>
                                        <li><a href="#">Fancy Text</a></li>
                                    </ul>
                                </li>
                                <li class="widget_sub_categories sub_categories2"><a href="javascript:void(0)">Bags</a>
                                    <ul class="widget_dropdown_categories dropdown_categories2">
                                        <li><a href="#">Flickr</a></li>
                                        <li><a href="#">Flip Box</a></li>
                                        <li><a href="#">Cocktail</a></li>
                                        <li><a href="#">Frame</a></li>
                                        <li><a href="#">Flickrq</a></li>
                                    </ul>
                                </li>
                                <li class="widget_sub_categories sub_categories3"><a href="javascript:void(0)">Clothing</a>
                                    <ul class="widget_dropdown_categories dropdown_categories3">
                                        <li><a href="#">Platform Beds</a></li>
                                        <li><a href="#">Storage Beds</a></li>
                                        <li><a href="#">Regular Beds</a></li>
                                        <li><a href="#">Sleigh Beds</a></li>
                                        <li><a href="#">Laundry</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h3>Filter by price</h3>
                            <form action="#"> 
                                <div id="slider-range"></div>   
                                <button type="submit">Filter</button>
                                <input type="text" name="text" id="amount" />   

                            </form> 
                        </div>
                        <div class="widget_list widget_color">
                            <h3>Select By Color</h3>
                            <ul>
                                <li>
                                    <a href="#">Black  <span>(6)</span></a> 
                                </li>
                                <li>
                                    <a href="#"> Blue <span>(8)</span></a> 
                                </li>
                                <li>
                                    <a href="#">Brown <span>(10)</span></a> 
                                </li>
                                <li>
                                    <a href="#"> Green <span>(6)</span></a> 
                                </li>
                                <li>
                                    <a href="#">Pink <span>(4)</span></a> 
                                </li>
                              
                            </ul>
                        </div>
                        <div class="widget_list widget_color">
                            <h3>Select By SIze</h3>
                            <ul>
                                <li>
                                    <a href="#">S  <span>(6)</span></a> 
                                </li>
                                <li>
                                    <a href="#"> M <span>(8)</span></a> 
                                </li>
                                <li>
                                    <a href="#">L <span>(10)</span></a> 
                                </li>
                                <li>
                                    <a href="#"> XL <span>(6)</span></a> 
                                </li>
                                <li>
                                    <a href="#">XLL <span>(4)</span></a> 
                                </li>
                              
                            </ul>
                        </div>
                        <div class="widget_list widget_manu">
                            <h3>Manufacturer</h3>
                            <ul>
                                <li>
                                    <a href="#">Brake Parts <span>(6)</span></a> 
                                </li>
                                <li>
                                    <a href="#">Accessories <span>(10)</span></a> 
                                </li>
                                <li>
                                    <a href="#">Engine Parts <span>(4)</span></a> 
                                </li>
                                <li>
                                    <a href="#">hermes <span>(10)</span></a> 
                                </li>
                                <li>
                                    <a href="#">louis vuitton <span>(8)</span></a> 
                                </li>
                            
                            </ul>
                        </div>
                        <div class="widget_list tags_widget">
                            <h3>Product tags</h3>
                            <div class="tag_cloud">
                                <a href="#">Men</a>
                                <a href="#">Women</a>
                                <a href="#">Watches</a>
                                <a href="#">Bags</a>
                                <a href="#">Dress</a>
                                <a href="#">Belt</a>
                                <a href="#">Accessories</a>
                                <a href="#">Shoes</a>
                            </div>
                        </div>
                    </div>
                </aside>
                <!--sidebar widget end-->
            </div>
            <div class="col-lg-9 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper">
                    <div class="shop_toolbar_btn">

                        <button data-role="grid_3" type="button" class="active btn-grid-3" data-bs-toggle="tooltip" title="3"></button>

                        <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                        <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                    </div>
                    <div class=" niceselect_option">
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">

                                <option selected value="1">Sort by average rating</option>
                                <option  value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>
                    </div>
                    <div class="page_amount">
                        <p>Showing 1–9 of 21 results</p>
                    </div>
                </div>
                 <!--shop toolbar end-->
                 <div class="row shop_wrapper">
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Compete Track Tote</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Compete Track Tote</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Driven Backpack</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Driven Backpack</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Fusion Backpack</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Fusion Backpack</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Voyage Yoga Bag</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Voyage Yoga Bag</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Chaz Kangeroo Hoodie</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Chaz Kangeroo Hoodie</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Joust Duffle Bag</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Joust Duffle Bag</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Impulse Duffle</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Impulse Duffle</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Crown Summit Backpack2</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Rival Field Messenger</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Rival Field Messenger</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 ">
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
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
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
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Strive Shoulder Pack</a></h4>
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
                                    <div class="product_desc">
                                        <p>This Teton Pullover Hoodie gives you more than laid-back style. It's equipped with moisture-wicking fabric to keep light and dry inside, especially in chilly-weather workouts.</p>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>

                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">next</a></li>
                            <li><a href="#">>></a></li>
                        </ul>
                    </div>
                </div>
                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->


@endsection


