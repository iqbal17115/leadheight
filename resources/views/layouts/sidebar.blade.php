<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{url('/admin')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">01</span>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Products</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('product.product')}}">Add Product</a></li>
                        <li><a href="{{route('product.product-list')}}">All Product List</a></li>
                        <li><a href="{{route('product.category')}}">Category</a></li>
                        <li><a href="{{route('product.sub-category')}}">Sub Category</a></li>
                        <li><a href="{{route('product.package')}}">Package</a></li>
                        <li><a href="{{route('product.portfolio')}}">Portfolio</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Order</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('order.order-processing')}}">Processing Order</a></li>
                        <li><a href="{{route('order.order-delivered')}}">Delivered Order</a></li>
                        <li><a href="{{route('order.order-cancel')}}">Cancelled Order</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Setting</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('setting.slider')}}">Slider</a></li>
                        <li><a href="{{route('setting.why_we_are_different')}}">Why We are Different</a></li>
                        <li><a href="{{route('setting.how_we_will_help')}}">How We Will Help</a></li>
                        <li><a href="{{route('setting.who_trust')}}">Who Trust</a></li>
                        <li><a href="{{route('setting.affiliation')}}">Affiliation</a></li>
                        <li><a href="{{route('setting.companyinfo')}}">Company Info</a></li>
                        <li><a href="{{route('setting.carrer')}}">Carrer</a></li>
                        <li><a href="{{route('setting.pay-now')}}">Pay Now</a></li>
                        <li><a href="{{route('setting.about-us-info')}}">About Us Info</a></li>
                        <li><a href="{{route('setting.currency')}}">Currency</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Blog</span>
                    </a>
                    
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('blog.blog')}}">Blog</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span>Contact Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('message')}}">Messages</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
