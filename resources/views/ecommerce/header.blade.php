<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @media (min-width: 1200px) and (max-width: 1649px) {
        .typeheader-1 .main-menu-w {
            width: 57%;
        }
    }
</style>
<!-- Header Container  -->
<header id="header" class="typeheader-1">

    <!-- Header Top -->
    <div class="header-top hidden-compact">
        <div class="container">
            <div class="row">
                <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                    {{-- <div class="hidden-md hidden-sm hidden-xs welcome-msg">Welcome to SuperMarket! Wrap new offers
                        / gift every single day on Weekends - New Coupon code: <span>Happy2018</span> </div>
                    <ul class="top-link list-inline hidden-lg ">
                    </ul> --}}
                    <ul class="top-link list-inline lang-curr">
                        <li class="currency">
                            <div class="btn-group currencies-block">
                                <form action="" method="post" enctype="multipart/form-data" id="currency">
                                    <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span> Call Us:
                                        @if (isset($companyInfo->mobile))
                                        {{ $companyInfo->mobile }}
                                        @endif
                                    </a>
                                    <ul class="">

                                    </ul>
                                </form>
                            </div>
                        </li>

                        <li class="currency">
                            <div class="btn-group currencies-block">
                                <form action="" method="post" enctype="multipart/form-data" id="currency">
                                    <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span> Contact:
                                        @if (isset($companyInfo->email))
                                        {{ $companyInfo->email }}
                                        @endif
                                    </a>
                                    <ul class="">
                                    </ul>
                                </form>
                            </div>
                        </li>
                        <li class="language">
                            <div class="btn-group languages-block ">
                                <form action="" method="post" enctype="multipart/form-data" id="bt-language">
                                    <a class="btn btn-link dropdown-toggle fa fa-facebook-f" style="font-size:17px"
                                        data-toggle="dropdown">
                                        <span class="icon icon-credit "></span>
                                    </a>
                                    <a class="btn btn-link dropdown-toggle fa fa-twitter"
                                        style="font-size:17px; margin-left: 3px;" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span>
                                    </a>

                                    <a class="btn btn-link dropdown-toggle fa fa-youtube-play"
                                        style="font-size:17px; margin-left: 3px; " data-toggle="dropdown">
                                        <span class="icon icon-credit "></span>
                                    </a>

                                    <a class="btn btn-link dropdown-toggle fa fa-instagram"
                                        style="font-size:17px; margin-left: 3px;" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span>
                                    </a>

                                    <ul class="">

                                    </ul>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                    <ul class="top-link list-inline lang-curr">
                        <li class="currency">
                            <div class="btn-group currencies-block">
                                <form action="" method="post" enctype="multipart/form-data" id="currency">
                                    <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="icon icon-credit "></span>Carrer
                                    </a>
                                    <ul class="btn-xs">
                                    </ul>
                                </form>
                            </div>
                        </li>
                        <li class="language">
                            <div class="btn-group languages-block ">
                                <form action="" method="post" enctype="multipart/form-data" id="bt-language">
                                    <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                        <span class="">Conatct Us</span>
                                    </a>
                                    <ul class="">
                                    </ul>
                                </form>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //Header Top -->

    <!-- Header center -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <div class="logo"><a href="{{route('home')}}"><img @if($companyInfo)
                                src="{{ asset('storage/photo/'.$companyInfo->logo) }}" @endif title="Your Store"
                                alt="Your Store" style="height: 40px;" /></a></div>
                </div>
                <!-- //end Logo -->


                <!-- Search -->
                <div class="col-lg-7 col-md-6 col-sm-5">
                    <div class="search-header-w">
                        <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>

                        <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                            <form method="GET"
                                action="https://demo.smartaddons.com/templates/html/supermarket/index.html">
                                <div id="search0" class="search input-group form-group">
                                    <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                        <select class="no-border" name="category_id">
                                            <option value="0">All Categories</option>
                                            <option value="78">Apparel</option>
                                            <option value="77">Cables &amp; Connectors</option>
                                            <option value="82">Cameras &amp; Photo</option>
                                            <option value="80">Flashlights &amp; Lamps</option>
                                            <option value="81">Mobile Accessories</option>
                                            <option value="79">Video Games</option>
                                            <option value="20">Jewelry &amp; Watches</option>
                                            <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                            <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings
                                            </option>
                                            <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                        </select>
                                    </div>

                                    <input class="autosearch-input form-control" type="text" value="" size="50"
                                        autocomplete="off" placeholder="Keyword here..." name="search">

                                    <button type="submit" class="button-search btn btn-primary" name="submit_search"><i
                                            class="fa fa-search"></i></button>

                                </div>
                                <input type="hidden" name="route" value="product/search" />
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //end Search -->
                <div class="middle-right col-lg-3 col-md-3 col-sm-3">
                    <!--cart-->
                    <div class="shopping_cart">
                        <div id="cart" class="btn-shopping-cart">

                            <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                                data-toggle="dropdown" aria-expanded="true">
                                <div class="shopcart">
                                    <span class="icon-c">
                                        <i class="fa fa-shopping-bag"></i>
                                    </span>
                                    <div class="shopcart-inner">
                                        <p class="text-shopping-cart">
                                            My cart
                                        </p>

                                        <span class="total-shopping-cart cart-total-full">
                                            <span class="items_cart">02</span><span class="items_cart2">
                                                item(s)</span><span class="items_carts">( $162.00 )</span>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                <li>
                                    <table class="table table-striped">
                                        <tbody>

                                            <tr>
                                                <td class="text-center" style="width:70px">
                                                    <a href="product.html">
                                                        <img src="image/catalog/demo/product/80/2.jpg"
                                                            style="width:70px" alt="Xancetta bresao"
                                                            title="Xancetta bresao" class="preview">
                                                    </a>
                                                </td>
                                                <td class="text-left"> <a class="cart_product_name"
                                                        href="product.html">Xancetta bresao</a>
                                                </td>
                                                <td class="text-center">x1</td>
                                                <td class="text-center">$60.00</td>
                                                <td class="text-right">
                                                    <a href="product.html" class="fa fa-edit"></a>
                                                </td>
                                                <td class="text-right">
                                                    <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-left"><strong>Sub-Total</strong>
                                                    </td>
                                                    <td class="text-right">$140.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                    </td>
                                                    <td class="text-right">$2.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>VAT (20%)</strong>
                                                    </td>
                                                    <td class="text-right">$20.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left"><strong>Total</strong>
                                                    </td>
                                                    <td class="text-right">$162.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-right"> <a class="btn view-cart" href="cart.html"><i
                                                    class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a
                                                class="btn btn-mega checkout-cart" href="checkout.html"><i
                                                    class="fa fa-share"></i>Checkout</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--//cart-->

                    <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                        <li class="compare hidden-xs"><a href="#" class="top-link-compare" title="Compare "><i
                                    class="fa fa-refresh"></i></a>
                        </li>
                        <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist"
                                title="Wish List (0) "><i class="fa fa-heart"></i></a>
                        </li>
                    </ul>



                </div>

            </div>

        </div>
    </div>
    <!-- //Header center -->

    <!-- Header Bottom -->
    <div class="header-bottom hidden-compact">
        <div class="container">
            <div class="row">
                <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                    <div class="responsive so-megamenu megamenu-style-dev ">
                        {{-- <div class="so-vertical-menu ">
                            <nav class="navbar-default">
                                <div class="container-megamenu vertical">
                                    <div id="menuHeading">
                                        <div class="megamenuToogle-wrapper">
                                            <div class="megamenuToogle-pattern">
                                                <div class="container">
                                                    <div>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    All Categories
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </nav>
                        </div> --}}
                    </div>
                </div>

                <!-- Main menu -->
                <div class="main-menu-w col-lg-10 col-md-9">
                    <div class="responsive so-megamenu megamenu-style-dev">
                        <nav class="navbar-default">
                            <div class=" container-megamenu  horizontal open ">
                                <div class="navbar-header">
                                    <button type="button" id="show-megamenu" data-toggle="collapse"
                                        class="navbar-toggle">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="megamenu-wrapper">
                                    <span id="remove-megamenu" class="fa fa-times"></span>
                                    <div class="megamenu-pattern">
                                        <div class="container-mega">
                                            <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                <li class="home hover">
                                                    <a href="{{route('home')}}">Home</a>
                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('about')}}" class="clearfix">
                                                        <strong>About Us</strong>
                                                    </a>
                                                </li>
                                                <li class="with-sub-menu hover">
                                                    <p class="close-menu"></p>
                                                    <a href="#" class="clearfix">
                                                        <strong>Services</strong>
                                                        <b class="caret"></b>
                                                    </a>
                                                    <div class="sub-menu" style="width: 100%; right: auto;">
                                                        <div class="content">
                                                            <div class="row">
                                                                @foreach($categories as $category)
                                                                <div class="col-md-3">
                                                                    <div class="column">
                                                                        <a href="#" class="title-submenu"
                                                                            style="color: #301A63; font-family: Roboto, Sans-serif;font-size: 19px;font-weight: 900; 0.4px;margin-bottom: 10px;">{{
                                                                            $category->name }}</a>
                                                                        <div>
                                                                            <ul class="row-list">
                                                                                @foreach ($category->SubCategory as
                                                                                $subCategory)
                                                                                <li><a href="category.html">{{
                                                                                        $subCategory->name }}</a></li>
                                                                                @endforeach
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{'contact'}}" class="clearfix">
                                                        <strong>Contact Us</strong>
                                                    </a>

                                                </li>
                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('view-carrer')}}" class="clearfix">
                                                        <strong>Career</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>


                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('pay-now')}}" class="clearfix">
                                                        <strong>Pay Now</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>

                                                <li class="">
                                                    <p class="close-menu"></p>
                                                    <a href="{{route('blog-view')}}" class="clearfix">
                                                        <strong>Blog</strong>
                                                        <span class="label"></span>
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- //end Main menu -->

                <div class="bottom3">
                    <div class="telephone hidden-xs hidden-sm hidden-md">
                        <ul class="blank">
                            <li><a href="#"><i class="fa fa-phone-square"></i>Hotline (+123)4 567 890</a></li>
                        </ul>
                    </div>
                    <div class="signin-w hidden-md hidden-sm hidden-xs">
                        <ul class="signin-link blank">
                            <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="login.html">Login
                                </a> or <a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>
<!-- //Header Container  -->
