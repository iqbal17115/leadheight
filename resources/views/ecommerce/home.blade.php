@extends('layouts.ecommerce')
@section('content')
@push('css')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
@endpush
<!-- Main Container  -->
<div class="main-container container">
    <style>
        h2 {
            text-align: center;
            padding: 20px;
        }

        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>
    <div id="content">
        <div class="content-top-w">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col2">
                    <div class="module sohomepage-slider ">
                        <div class="yt-content-slider" data-rtl="yes" data-autoplay="yes" data-autoheight="no"
                            data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1"
                            data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1"
                            data-items_column4="1" data-arrows="yes" data-pagination="yes" data-lazyload="yes"
                            data-loop="yes" data-hoverpause="yes">
                            @foreach ($sliderImages as $sliderImage)
                            <div class="yt-content-slide">
                                <a href="#"><img src="{{ asset('storage/photo/'.$sliderImage->image) }}" alt="slider1"
                                        class="img-responsive" style="height: 400px;width: 100%;"></a>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="row content-main-w">

            <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12 main-right">

                <!-- Deals -->
                <div class="module deals-layout1">
                    <div class="head-title">
                        <div class="modtitle">
                            <span>Flash Sale</span>
                            <div class="cslider-item-timer">
                                <div class="product_time_maxprice">

                                    <div class="item-time">
                                        <div class="item-timer">
                                            <div class="defaultCountdown-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="viewall" href="indexf110.html?route=product/special">View All</a>

                        </div>
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <img src="{{ asset('images/how_we_can_help.png') }}" />
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div>
                                                <h2 class="heading-title"
                                                    style="color: #FF3C00; font-family: Poppins, Sans-serif; font-weight: 700;">
                                                    Lead Height</h2>
                                            </div>
                                            <div>
                                                <h3
                                                    style="color: #1e1666; font-family: Poppins, Sans-serif; font-size: 35px; font-weight: 700; line-height: 45px; letter-spacing: -0.8px;">
                                                    Where truly great things can happen</h3>
                                            </div>
                                            <div
                                                style="text-align: left;color: #1E1666;font-family: Poppins, Sans-serif;font-size: 15px;font-weight: 700;line-height: 25px;">
                                                <p style="margin: 0 0 10px;">Let’s find out, How we will Help?</p>
                                            </div>
                                            <div class="row">
                                                @foreach($how_we_will_helps as $how_we_will_help)
                                                <div class="col-md-6" style="margin-bottom: 6px;">
                                                    <div class="card">

                                                        <div class="container">
                                                            <h4><img src="{{ asset('storage/photo/' . $how_we_will_help->image) }}"
                                                                    alt="" style="width: 15%;;"><b
                                                                    style="padding-left: px;">{{ $how_we_will_help->name
                                                                    }}</b>
                                                            </h4>
                                                            <p style="padding-left: 40px;">
                                                                {{ $how_we_will_help->title }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Deals -->
                        <!-- Start Story -->
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="row">
                                <div class="col-md-12" style="background-color: #001366;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <img src="{{ asset('images/story.png') }}" alt="" style="float: right;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div>
                                                <div>
                                                    <div>
                                                        <h6
                                                            style="color: #FF7528;font-family: Poppins, Sans-serif;font-size: 15px;font-weight: 400;line-height: 28px;">
                                                            Get on the right path!</h6>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h3
                                                        style="color: #FFFFFF;font-family: Poppins, Sans-serif;font-size: 35px;font-weight: 500;line-height: 45px;letter-spacing: -0.3px;">
                                                        Beautiful story that make your brand
                                                        unique</h3>
                                                </div>
                                            </div>
                                            <div>
                                                <h5
                                                    style="margin-bottom: 20px;font-size: 25px;color: #FFFFFF;font-family: Spartan, Sans-serif;">
                                                    In a digital world where everything is
                                                    networked, we also have to unite the
                                                    approach to digital communication.
                                                    </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Story -->
                <!-- Start category -->
                <div id="so_deal_1" class="so-deal style1">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div style="margin-top: 300px;">
                                <div>
                                    <h2
                                        style="color: #1E1666;font-family: Poppins, Sans-serif;font-size: 34px;font-weight: 700;line-height: 42px;text-shadow: 0px 0px 0px rgb(0 0 0 / 30%);">
                                        Who
                                        Trust US</h2>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p
                                        style="color: #453F3F;font-family: Poppins, Sans-serif;font-size: 14px;font-weight: 400;">
                                        A few brands confided in us to deal with their
                                        computerized
                                        impression and construct their business.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <p
                                        style="color: #FD3430;font-size: 14px;font-weight: 400;line-height: 28px;width: auto;">
                                        See Our Stunning Portfolio</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container">
                                    <div class="row">
                                        @foreach($who_trusts as $who_trust)
                                        <div class="col-md-4">
                                            <center>
                                                <img src="{{ asset('storage/photo/' . $who_trust->image) }}" alt="">
                                            </center>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>


                <div class="container">
                    <h2>Our Partners/ Our Clients</h2>
                    <section class="customer-logos slider">
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg">
                        </div>
                        <div class="slide"><img src="http://www.webcoderskull.com/img/logo.png"></div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg">
                        </div>
                        <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg">
                        </div>
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg">
                        </div>
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg">
                        </div>
                        <div class="slide"><img
                                src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg">
                        </div>
                    </section>

                    {{-- <h2><a href="http://www.webcoderskull.com" target="_blank">http://www.webcoderskull.com</a></h2> --}}
                </div>
                <!-- End Category -->

                {{--
                <!-- Banners -->
                <div class="banners3 banners">
                    <div class="item1">
                        <a href="#"><img src="{{ URL::asset('supermarket/') }}/image/catalog/banners/banner3.jpg"
                                alt="image"></a>
                    </div>
                    <div class="item2">
                        <a href="#"><img src="{{ URL::asset('supermarket/') }}/image/catalog/banners/banner4.jpg"
                                alt="image"></a>
                    </div>
                    <div class="item3">
                        <a href="#"><img src="{{ URL::asset('supermarket/') }}/image/catalog/banners/banner5.jpg"
                                alt="image"></a>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Category Slider 1 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">
                        <div class="page-top">
                            <div class="page-title-categoryslider">Technology</div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="Smartphone" target="_self">Smartphone</a></li>
                                    <li><a href="#" title="Tablets" target="_self">Tablets</a>
                                    </li>
                                    <li><a href="#" title="Computer" target="_self">Computer</a>
                                    </li>
                                    <li><a href="#" title="Accessories" target="_self">Accessories</a></li>
                                    <li><a href="#" title="Hitech" target="_self">Hitech</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Technology" target="_self">
                                    <img class="categories-loadimage" alt="Technology"
                                        src="{{ URL::asset('supermarket/') }}/image/catalog/demo/category/tab1.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes"
                                data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30"
                                data-items_column00="4" data-items_column0="4" data-items_column1="2"
                                data-items_column2="1" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                                data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">




                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Excepteur sint occ">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/e5.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/e6.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 4 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Excepteur sint
                                                            occ</a></h4>

                                                </div>
                                                <p class="price">
                                                    <span class="price-new">$90.00</span>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="PCenison meatloa">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/e6.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/e2.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 6 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Cenison meatloa</a>
                                                    </h4>

                                                </div>
                                                <p class="price">$42.00</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Category Slider 1 -->

                <!-- Category Slider 2 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider2">
                    <div class="modcontent">
                        <div class="page-top">
                            <div class="page-title-categoryslider">Funiture & Decor</div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="Smartphone" target="_self">Living
                                            room</a></li>
                                    <li><a href="#" title="Tablets" target="_self">Bathroom</a>
                                    </li>
                                    <li><a href="#" title="Computer" target="_self">Bedroom</a>
                                    </li>
                                    <li><a href="#" title="Accessories" target="_self">Accessories</a></li>
                                    <li><a href="#" title="Hitech" target="_self">Decor</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Funiture & Decor" target="_self">
                                    <img class="categories-loadimage" alt="Funiture & Decor"
                                        src="{{ URL::asset('supermarket/') }}/image/catalog/demo/category/tab2.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes"
                                data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30"
                                data-items_column00="4" data-items_column0="4" data-items_column1="2"
                                data-items_column2="1" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                                data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">



                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Mecepteur sint rew">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu5.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu6.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Mecepteur sint
                                                            rew</a></h4>

                                                </div>
                                                <p class="price">
                                                    <span class="price-new">$90.00</span>

                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Sed ut perspicia">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu6.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu2.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 1 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Sed
                                                            ut perspicia</a>
                                                    </h4>

                                                </div>
                                                <p class="price">$42.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 2 -->

                <!-- Category Slider 3 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">
                        <div class="page-top">
                            <div class="page-title-categoryslider">Fashion & Accessories</div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="Smartphone" target="_self">Smartphone</a></li>
                                    <li><a href="#" title="Tablets" target="_self">Tablets</a>
                                    </li>
                                    <li><a href="#" title="Computer" target="_self">Computer</a>
                                    </li>
                                    <li><a href="#" title="Accessories" target="_self">Accessories</a></li>
                                    <li><a href="#" title="Hitech" target="_self">Hitech</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                    <img class="categories-loadimage" alt="Fashion & Accessories"
                                        src="{{ URL::asset('supermarket/') }}/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes"
                                data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30"
                                data-items_column00="4" data-items_column0="4" data-items_column1="2"
                                data-items_column2="1" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                                data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">



                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Excepteur sint occ">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f5.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f6.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Excepteur sint
                                                            occ</a></h4>

                                                </div>
                                                <p class="price">
                                                    <span class="price-new">$90.00</span>

                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="PCenison meatloa">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f6.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f2.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->


                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Cenison meatloa</a>
                                                    </h4>

                                                </div>
                                                <p class="price">$42.00</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">

                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Chicken swinesha">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu2.jpg"
                                                            class="img-1 img-responsive" alt="image1">
                                                        <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/fu9.jpg"
                                                            class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                        href="quickview.html" title="Quick view"
                                                        data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->

                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart"
                                                        onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>
                                                    </button>
                                                    <button type="button" class="wishlist btn-button"
                                                        title="Add to Wish List" onclick="wishlist.add('60');"><i
                                                            class="fa fa-heart-o"></i><span>Add
                                                            to Wish
                                                            List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button"
                                                        title="Compare this Product " onclick="compare.add('60');"><i
                                                            class="fa fa-retweet"></i><span>Compare
                                                            this
                                                            Product</span>
                                                    </button>

                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box"> <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon"
                                                            target="_self">Chicken swinesha</a>
                                                    </h4>

                                                </div>
                                                <p class="price">
                                                    <span class="price-new">$55.00</span>

                                                </p>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 3 -->

                <!-- Banners -->
                <div class="banners4 banners">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="{{ URL::asset('supermarket/') }}/image/catalog/banners/bn1.jpg"
                                    alt="image"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="{{ URL::asset('supermarket/') }}/image/catalog/banners/bn2.jpg"
                                    alt="image"></a>
                        </div>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Listing tabs -->
                <div class="module listingtab-layout1">

                    <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600"
                                data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3"
                                data-sm="2" data-xs="1" data-margin="30">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap">
                                    <span class="ltabs-tab-selected">Bathroom</span> <span
                                        class="ltabs-tab-arrow">▼</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20"
                                                data-active-content=".items-category-20"> <span
                                                    class="ltabs-tab-label">Best Seller</span>
                                            </li>
                                            <li class="ltabs-tab " data-category-id="18"
                                                data-active-content=".items-category-18"> <span
                                                    class="ltabs-tab-label">New Arrivals</span>
                                            </li>
                                            <li class="ltabs-tab " data-category-id="25"
                                                data-active-content=".items-category-25"> <span
                                                    class="ltabs-tab-label">Most Rating</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>

                            <div class="ltabs-items-container products-list grid">
                                <!--Begin Items-->
                                <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                    <div class="ltabs-items-inner ltabs-slider">






                                        <div class="item">
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">

                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self"
                                                                title="PCenison meatloa">
                                                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f6.jpg"
                                                                    class="img-1 img-responsive" alt="image1">
                                                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f2.jpg"
                                                                    class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                href="quickview.html" title="Quick view"
                                                                data-fancybox-type="iframe"><i
                                                                    class="fa fa-eye"></i><span>Quick
                                                                    view</span></a>
                                                        </div>
                                                        <!--end quickview-->


                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart"
                                                                onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>
                                                            </button>
                                                            <button type="button" class="wishlist btn-button"
                                                                title="Add to Wish List"
                                                                onclick="wishlist.add('60');"><i
                                                                    class="fa fa-heart-o"></i><span>Add
                                                                    to
                                                                    Wish
                                                                    List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button"
                                                                title="Compare this Product "
                                                                onclick="compare.add('60');"><i
                                                                    class="fa fa-retweet"></i><span>Compare
                                                                    this
                                                                    Product</span>
                                                            </button>

                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon"
                                                                    target="_self">Cenison
                                                                    meatloa</a></h4>

                                                        </div>
                                                        <p class="price">$42.00</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        <div class="box-label">
                                                            <span class="label-product label-sale">-10%</span>
                                                        </div>
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self"
                                                                title="Quis nostrud exercita">
                                                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f2.jpg"
                                                                    class="img-1 img-responsive" alt="image1">
                                                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/demo/product/270/f4.jpg"
                                                                    class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg"
                                                                href="quickview.html" title="Quick view"
                                                                data-fancybox-type="iframe"><i
                                                                    class="fa fa-eye"></i><span>Quick
                                                                    view</span></a>
                                                        </div>
                                                        <!--end quickview-->

                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart"
                                                                onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>
                                                            </button>
                                                            <button type="button" class="wishlist btn-button"
                                                                title="Add to Wish List"
                                                                onclick="wishlist.add('60');"><i
                                                                    class="fa fa-heart-o"></i><span>Add
                                                                    to
                                                                    Wish
                                                                    List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button"
                                                                title="Compare this Product "
                                                                onclick="compare.add('60');"><i
                                                                    class="fa fa-retweet"></i><span>Compare
                                                                    this
                                                                    Product</span>
                                                            </button>

                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating"> <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon"
                                                                    target="_self">Quis nostrud
                                                                    exercita</a>
                                                            </h4>

                                                        </div>
                                                        <p class="price">
                                                            <span class="price-new">$50.00</span>
                                                            <span class="price-old">$59.00</span>
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="ltabs-items items-category-18 grid" data-total="16">
                                    <div class="ltabs-loading"></div>

                                </div>
                                <div class="ltabs-items  items-category-25 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                </div>
                                <!--End Items-->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end Listing tabs -->

                <!-- Slider Brands -->
                <div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6"
                        data-margin="0" data-items_column00="7" data-items_column0="7" data-items_column1="5"
                        data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                        data-pagination="no" data-lazyload="yes" data-loop="yes">
                        <div class="item">
                            <a href="#">
                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/brands/b1.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{ URL::asset('supermarket/') }}/image/catalog/brands/b2.png" alt="brand">
                            </a>
                        </div>

                    </div>
                </div>
                <!-- Slider Brands --> --}}


            </div>

        </div>

    </div>
</div>
<!-- //Main Container -->
@endsection
@push('scripts')
<script>
   $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
@endpush

{{-- <script>

</script> --}}
