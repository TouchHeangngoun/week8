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
    <div class="cta-horizon bg-white pt-4 pb-2">
        <div class="container d-md-flex align-items-center justify-content-between">
            <h4 class="mb-2 black">Didn't find the service suite you! Need a custom service?</h4>
            <a href="#"></a>
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

    <!-- *Scripts* -->
   @include('includes.scripts')
    
</body>

</html>