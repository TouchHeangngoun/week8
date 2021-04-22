<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

@include('includes.styles')

<body>

    <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
        <!-- Navigation Bar -->
           @include('includes.menu')
        <!-- Navigation Bar Ends -->
    <!-- header ends -->

    <!-- banner starts -->
        <section class="banner overflow-hidden">
            <div class="slider">
             @yield('content') 
            </div>
        </section>
    <!-- banner ends -->

    <!-- plan schedule form -->
        @include('includes.plan-schedule')
    <!-- plan schedule form ends -->

    <!-- popular place Starts -->
        @include('includes.popular-place')
    <!-- popular place Ends -->

    <!-- popular food starts -->
        @include('includes.popular-food')
    <!-- popular food ends -->

    <!-- top deal starts -->
    <section class="top-deals bg-grey pt-9">
        <div class="container">
            <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                <h2 class="m-0">Today's <span>Top Deal</span></h2>
                <p class="mb-0">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
            </div> 
            <div class="row team-slider">
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{asset('fe/images/new-deal/deal1.jpg')}}" alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> United Kingdom</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{asset('fe/images/new-deal/deal2.jpg')}}" alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Thailand</h6>
                        <h4><a href="#">Save big on hotels!</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 slider-item">
                    <div class="slider-image">
                        <img src="{{asset('fe/images/new-deal/deal3.jpg')}}" alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> South Korea</h6>
                        <h4><a href="#">Experience Europe Your Way</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 slider-item">
                    <div class="slider-image">
                        <img src="{{asset('fe/images/new-deal/deal4.jpg')}}" alt="image">
                    </div>
                    <div class="slider-content">
                        <h6 class="font-weight-normal pink"><i class="fa fa-map-marker-alt"></i> Germany</h6>
                        <h4><a href="#">Earning Asiana Club Miles</a></h4>
                        <p>With upto 30% Off, experience Europe your way!</p>
                        <div class="deal-price">
                            <p class="price font-weight-bold pink mb-0">From <span>$250.00</span></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top deal ends --> 

    <!-- Instagram starts -->
    <section class="insta-main p-0">
        <div class="insta-inner">
            <div class="follow-button">
                <h5 class="m-0"><a href="#" title="">Follow on Instagram</a></h5>
            </div>
            <div class="row attract-slider">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-3.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-4.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-5.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-1.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-7.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-8.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-2.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-6.jpg')}}" alt="insta"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="insta-image">
                        <a href="#"><img src="{{asset('fe/images/insta/ins-9.jpg')}}" alt="insta"></a>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!-- Instagram ends -->

    <!-- cta-horizon starts -->
    <div class="cta-horizon bg-blue pt-4 pb-2">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-2 white">Didn't find the service suite you! Need a custom service?</h4>
            <a href="#" class="nir-btn-black">Let's talk</a>
        </div>
    </div>
    <!-- cta-horizon Ends -->

    <!-- footer starts -->
        @include('includes.footer')
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- Register Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink mb-1">Register</h3>  
                            <p>Access thousands of online classes in design, business, and more!</p>                  
                        </div>
                        <div class="login-form text-center">
                            <form>
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">Register</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> By clicking this, you are agree to to<a href="#" class=""> our terms of use</a> and <a href="#" class="">privacy policy</a> including the use of cookies
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                            <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i> Google</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Already have an account? <a href="login.html" class="pink">Login</a></p>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- login Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bordernone p-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="login-content p-4 text-center">
                        <div class="login-title section-border">
                            <h3 class="pink">Login</h3>                    
                        </div>
                        <div class="login-form">
                            <form>
                                <div class="form-group">
                                    <input type="email" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Enter password">
                                </div>
                            </form>
                            <div class="form-btn">
                                <a href="#" class="nir-btn">LOGIN</a>
                            </div>
                            <div class="form-group mb-0 form-checkbox mt-3">
                                <input type="checkbox"> Remember Me | <a href="#" class="">Forgot password?</a>
                            </div>
                        </div>
                        <div class="login-social border-t mt-3 pt-2 mb-3">
                            <p class="mb-2">OR continue with</p>
                            <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                            <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                        </div>
                        <div class="sign-up">
                            <p class="m-0">Do not have an account? <a href="login.html" class="pink">Sign Up</a></p>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header side menu --> 
    <div class="header_sidemenu">
        <div class="header_sidemenu_in">
            <div class="menu">
                <div class="close-menu">
                    <i class="fa fa-times white"></i>
                </div>
                 <div class="m-contentmain">
                    <div class="cart-main">
                        <div class="cart-box">
                            <div class="popup-container">
                                <h5 class="p-3 mb-0 bg-pink white text-caps">My Carts(3 Items)</h5>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{asset('fe/images/shop/shop1.jpg')}}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$45.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{asset('fe/images/shop/shop2.jpg')}}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="cart-entry d-flex align-items-center p-3">
                                    <a href="#" class="image">
                                        <img src="{{asset('fe/images/shop/shop6.jpg')}}" alt="">
                                    </a>
                                    <div class="content">
                                        <a href="#" class="title font-weight-bold">Pullover Batwing</a>
                                        <p class="quantity m-0">Quantity: 3</p>
                                        <span class="price">$90.00</span>
                                    </div>
                                    <div class="button-x">
                                        <i class="icon-close"></i>
                                    </div>
                                </div>
                                <div class="summary-total">
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Delivery Charge</div>
                                        <div class="price-s">$10</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Sub Total</div>
                                        <div class="price-s">$200</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Discount</div>
                                        <div class="price-s">$2</div>
                                    </div>
                                    <div class="summary d-flex align-items-center justify-content-between">
                                        <div class="subtotal font-weight-bold">Total</div>
                                        <div class="price-s">$208</div>
                                    </div>
                                </div>
                                <div class="cart-buttons d-flex align-items-center justify-content-between">
                                    <a href="#" class="nir-btn">View Cart</a>
                                    <a href="#" class="nir-btn-black">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="overlay hide"></div>
        </div>
    </div>

    <!-- *Scripts* -->
   @include('includes.scripts')
    
</body>

</html>