<!-- Footer Container -->
<footer class="footer-container typefooter-1">
    <!-- Footer Top Container -->

    {{-- <div class="container">
        <div class="row footer-top">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="socials-w">
                    <h2>Follow socials</h2>
                    <ul class="socials">
                        <li class="facebook"><a href="https://www.facebook.com/MagenTech" target="_blank"><i
                                    class="fa fa-facebook"></i><span>Facebook</span></a></li>
                        <li class="twitter"><a href="https://twitter.com/smartaddons" target="_blank"><i
                                    class="fa fa-twitter"></i><span>Twitter</span></a></li>
                        <li class="google_plus"><a href="https://plus.google.com/u/0/+Smartaddons/posts"
                                target="_blank"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                        <li class="pinterest"><a href="https://www.pinterest.com/smartaddons/" target="_blank"><i
                                    class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                        <li class="youtube"><a href="#" target="_blank"><i
                                    class="fa fa-youtube-play"></i><span>Youtube</span></a></li>
                        <li class="linkedin"><a href="#" target="_blank"><i
                                    class="fa fa-linkedin"></i><span>linkedin</span></a></li>
                        <li class="skype"><a href="#" target="_blank"><i class="fa fa-skype"></i><span>skype</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="module newsletter-footer1">
                    <div class="newsletter">

                        <div class="title-block">
                            <div class="page-heading font-title">
                                Signup for Newsletter
                            </div>

                        </div>

                        <div class="block_content">
                            <form method="post" id="signup" name="signup"
                                class="form-group form-inline signup send-mail">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" placeholder="Your email address..." value=""
                                            class="form-control" id="txtemail" name="txtemail" size="55">
                                    </div>
                                    <div class="subcribe">
                                        <button class="btn btn-primary btn-default font-title" type="submit"
                                            onclick="return subscribe_newsletter();" name="submit">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <!--/.modcontent-->

                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    <!-- /Footer Top Container -->

    <div class="footer-middle ">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                    <div class="infos-footer">
                        <a href="#"><img src="image/catalog/logo-footer.png" alt="image"></a>
                        <ul class="menu">
                            <li class="adres">
                                San Luis potosí, centro historico, 78000 san luis potosí, SPL, Mexico
                            </li>
                            <li class="phone">
                                (+0214)0 315 215 - (+0214)0 315 215
                            </li>
                            <li class="mail">
                                <a href="mailto:contact@opencartworks.com">contact@opencartworks.com</a>
                            </li>
                            <li class="time">
                                Open time: 8:00AM - 6:00PM
                            </li>
                        </ul>
                    </div>


                </div>
                @foreach($categories as $category)
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                    <div class="box-information box-footer">
                        <div class="module clearfix">
                            <h3 class="modtitle">{{ $category->name }}</h3>
                            <div class="modcontent">
                                <ul class="menu">
                                    @foreach ($category->SubCategory as $subCategory)
                                    <li><a href="#">{{ $subCategory->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="footer-b">
                <div class="bottom-cont">
                    <a href="#"><img src="image/catalog/demo/payment/pay1.jpg" alt="image"></a>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('terms-condition')}}">Terms & Condition</a></li>
                        <li><a href="{{route('return-policy')}}">Returns Refund & Cancellation policy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <p>**$50 off orders $350+ with the code BOO50. $75 off orders $500+ with the code BOO75. $150 off
                        orders $1000+ with the code BOO150. Valid from October 28, 2016 to October 31, 2016. Offer may
                        not be combined with any other offers or promotions, is non-exchangeable and non-refundable.
                        Offer valid within the US only.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Container -->
    <div class="footer-bottom">
        <div class="container">
            <div class="col-lg-12 col-xs-12 payment-w">
                <img src="image/catalog/demo/payment/payment.png" alt="imgpayment">
            </div>
        </div>
        <div class="copyright-w">
            <div class="container">
                <div class="copyright">
                    SuperMarket © 2018 Demo Store. All Rights Reserved. Designed by <a
                        href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer Bottom Container -->


    <!--Back To Top-->
    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
</footer>
<!-- //end Footer Container -->
