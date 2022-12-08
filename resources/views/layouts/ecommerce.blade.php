<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
    @if ($companyInfo)
        {{ $companyInfo->name }}
    @endif
    </title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('porto/assets/images/icons/favicon.png') }}">


        <!-- New  -->
        <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('supermarket/') }}/css/bootstrap/css/bootstrap.min.css">
    <link href="{{ URL::asset('supermarket/') }}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="{{ URL::asset('supermarket/') }}/css/footer/footer1.css" rel="stylesheet">
    <link href="{{ URL::asset('supermarket/') }}/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{ URL::asset('supermarket/') }}/css/theme.css" rel="stylesheet"> 
    <link href="{{ URL::asset('supermarket/') }}/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}
    </style>
    
<style>
.top-left {
  background-color: rgb(235, 43, 43);
  color: white;
  padding-left: 6px;
}
@media only screen and (min-width: 768px) {
    .categories{
        margin-left: 80px;
    }
}
.heading-title {
   
 }
 .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>

</head>

<body class="common-home res layout-1">

    <!-- Scroll-top-end-->
    <div id="wrapper" class="wrapper-fluid banners-effect-3">
        <!-- header-area -->
        @include('ecommerce.header')
        <!-- header-area-end -->

        <!-- main-area -->

        @yield('content')
        <!-- main-area-end -->

    </div>

    <!-- Start Mobile Responseive Footer -->
    @include('ecommerce.footer')
    <!-- Start Mobile Responseive Footer -->
    
<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/slick-slider/slick.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/libs.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/modernizr/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/minicolors/jquery.miniColors.min.js"></script>

<!-- Theme files
============================================ -->

<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/application.js"></script>

<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/homepage.js"></script>

<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/toppanel.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/so_megamenu.js"></script>
<script type="text/javascript" src="{{ URL::asset('supermarket/') }}/js/themejs/addtocart.js"></script>  
    <script>
        $.ajaxSetup({
            crossDomain: true,
            xhrFields: {
                withCredentials: true
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

</body>

</html>
