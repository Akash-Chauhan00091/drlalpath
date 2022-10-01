<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Dr. Lal Pathlabs</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('frontend/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/owl.css')}}" rel="stylesheet">

<link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/color.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper about-page">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- search-popup -->
        <div id="search-popup" class="search-popup">
            <div class="close-search"><span>x</span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://azim.commonsupport.com/Laborex/{{url('/')}}">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="{{url('/')}}">Finance</a></li>
                        <li><a href="{{url('/')}}">Idea</a></li>
                        <li><a href="{{url('/')}}">Service</a></li>
                        <li><a href="{{url('/')}}">Growth</a></li>
                        <li><a href="{{url('/')}}">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- search-popup end -->


        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('frontend/images/logo-2.png')}}" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>Contact Now</h4>
                                    <form action="http://azim.commonsupport.com/Laborex/index-2.html" method="post" class="booking-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="number" placeholder="Number" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn-one">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li><i class="icon-26"></i>&nbsp;&nbsp;Kendriya Hindi Sansthan Road, Opp. Vaishno Mata Mandir, Near Bye Pass Khandari X-ing, AGRA-5.</li>
                                        <li><i class="icon-26"></i>&nbsp;&nbsp;Infront of Park View Apartment, Near Vijay Nagar Police Chowki, Vijay Nagar, Agra.</li>
                                        <li><i class="icon-26"></i>&nbsp;&nbsp;Opp. State Bank of India, 100 Foota Road, Dayalbagh, AGRA-5.</li>
                                        <li><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9927777172"> (+91) 9927777172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9927167172"> (+91) 9927167172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+7534017172"> (+91) 7534017172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9837527138"> (+91) 9837527138</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+7037333172"> (+91) 7037333172</a><br>
                                        </li>
                                        
                                        <li><a href="mailto:satyenlalpathlab@gmail.com">satyenlalpathlab@gmail.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


         <!-- main header -->
        <header class="main-header style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <ul class="social-links pull-left clearfix">
                            <li><h6>Share with on:</h6></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                       
                    </div>
                </div>
            </div>
            <!-- header-upper -->
            <div class="header-upper-two">
                <div class="auto-container">
                    <div class="upper-inner clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" style="width: 150px; height: 100px;" alt=""></a></figure>
                        </div>
                        <ul class="info-box pull-right clearfix">
                            <li>
                                <p><img src="{{asset('frontend/images/header_1.png')}}" style="width:70px; margin-right: 10px;"></p>
                            </li>
                            <li>
                                <i class="icon-28"></i>
                                <h5>Call Us</h5>
                                <p><a href="tel:9927777172"> <strong>(+91) 9927777172</strong> </a></p>
                            </li>
                            <li>
                                <i class="icon-29"></i>
                                <h5>E-mail Us</h5>
                                <p><a href="mailto:satyenlalpathlab@gmail.com"> <strong>satyenlalpathlab@gmail.com </strong></a></p>
                            </li>
                            <li class="btn-box"><a href="{{url('/contact')}}" class="theme-btn-one">Enquiry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-left clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="{{url('/service')}}">Service</a></li> 
                                        <li><a href="{{url('/branches')}}">Branches</a></li> 
                                        <!-- <li><a href="gallery.html">Gallery</a></li>  -->
                                        <li><a href="{{url('/contact')}}">Contact</a> </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="menu-area pull-left">
                  
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <ul class="menu-right-content pull-right clearfix">
                            <li class="nav-btn nav-toggler navSidebar-button clearfix">
                                <!-- <button><i class="icon-30"></i></button> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo-2.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                       <li><i class="icon-26"></i>&nbsp;&nbsp;Kendriya Hindi Sansthan Road, Opp. Vaishno Mata Mandir, Near Bye Pass Khandari X-ing, AGRA-5.</li>
                                        <li><i class="icon-26"></i>&nbsp;&nbsp;Infront of Park View Apartment, Near Vijay Nagar Police Chowki, Vijay Nagar, Agra.</li>
                                        <li><i class="icon-26"></i>&nbsp;&nbsp;Opp. State Bank of India, 100 Foota Road, Dayalbagh, AGRA-5.</li>
                                        <li><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9927777172"> (+91) 9927777172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9927167172"> (+91) 9927167172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+7534017172"> (+91) 7534017172</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+9837527138"> (+91) 9837527138</a><br><i class="icon-24"></i>&nbsp;&nbsp;
                                        <a href="tel:+7037333172"> (+91) 7037333172</a><br>
                                        </li>
                                        
                                        <li><a href="mailto:satyenlalpathlab@gmail.com">satyenlalpathlab@gmail.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->






       @yield('content')
       @show()












        <!-- main-footer -->
        <footer class="main-footer border-top-10 bg-color-1">
            <div class="footer-top">
                <div class="shape">
                    <div class="shape-1 rotate-me" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                    <div class="shape-2 rotate-me" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo">
                                    <figure class="logo"><a href="{{url('/')}}"><img src="{{asset('frontend/images/logo.png')}}" style="width: 150px; height: 100px;" alt=""></a></figure>
                                </div>
                                <div class="text">
                                    <p>Dr. Lal Pathlabs in Agra is one of the leading businesses in the Pathology Labs. Also known for Pathology Labs, Diagnostic Centres, Blood Testing Centres, HIV Testing Centres, Blood Test Home Visit, Blood Collection Centres, Allergy Testing Centres, Urine Testing Labs and much more.</p>
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h4>Quick Link</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="{{url('/service')}}">Service</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget ml-70">
                                <div class="widget-title">
                                    <h4>Our Details</h4>
                                </div>
                                <div class="footer-widget logo-widget">
                                
                                <div class="text">
                                    
                                    <ul class="info clearfix">
                                        <li><i class="icon-26"></i>Kendriya Hindi Sansthan Road, Opp. Vaishno Mata Mandir, Near Bye Pass Khandari X-ing, AGRA-5.</li>
                                        <li><i class="icon-26"></i>Infront of Park View Apartment, Near Vijay Nagar Police Chowki, Vijay Nagar, Agra.</li>
                                        <li><i class="icon-26"></i>Opp. State Bank of India, 100 Foota Road, Dayalbagh, AGRA-5.</li>
                                       

                                       
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget ml-70">
                                <div class="widget-title">
                                    <h4>Contact Info</h4>
                                </div>
                                <div class="footer-widget logo-widget">
                                
                                <div class="text">
                                    
                                    <ul class="info clearfix">
                                        
                                        <li><i class="icon-24"></i>  
                                        <a href="tel:9927777172">(+91) 9927777172</a>,
                                        <br> 
                                        <a href="tel:9927167172">(+91) 9927167172</a>,
                                        <br> 
                                        <a href="tel:7534017172">(+91) 7534017172</a>,
                                        <br> 
                                        
                                        <a href="tel:9837527138">(+91) 9837527138</a>, 
                                        <br>
                                        <a href="tel:7037333172">(+91) 7037333172</a>
                                    </li>

                                        <li><i class="icon-25"></i><a href="mailto:satyenlalpathlab@gmail.com">satyenlalpathlab@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright">
                        <p><a href="{{url('/')}}">Dr. Lal Pathlabs</a> &copy; 2022 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.js')}}"></script>
    <script src="{{asset('frontend/js/wow.js')}}"></script>
    <script src="{{asset('frontend/js/validation.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('frontend/js/appear.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('frontend/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Laborex/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jun 2022 08:28:07 GMT -->
</html>
