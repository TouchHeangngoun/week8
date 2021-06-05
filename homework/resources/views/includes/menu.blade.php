<!-- header starts -->
<header class="main_header_area headerstye-1">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index-2.html">
                                <img src="{{asset('frontend/images/logo-white.png')}}" alt="image">
                                <img src="{{asset('frontend/images/logo.png')}}" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="nav-item">
                                    <a href="{{url('/')}}"role="button" aria-haspopup="true" aria-expanded="false">Home </a>
                                </li>
                                <li><a href="contact.html">Travel To Cambodia </a></li>                          
                                <li><a href="contact.html">Drink/Eat </a></li>                           
                                <li class="submenu dropdown">
                                    <a href="dashboard.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Think To Do <i class="fa fa-angle-down" aria-hidden="true"></i></a> 
                                    <ul class="dropdown-menu">
                                        <li><a href="dashboard.html">Where To Go?</a></li>
                                        <li><a href="dashboard-my-profile.html">History</a></li>
                                    </ul> 
                                 </li>

                                <li><a href="contact.html">About Us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->   
                        <div class="register-login">
                            <a href="#" class="mr-2" data-toggle="modal" data-target="#login"><i class="icon-user mr-1"></i> Register</a>
                            <a href="#" data-toggle="modal" data-target="#login"><i class="icon-login mr-1"></i> Login</a>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->