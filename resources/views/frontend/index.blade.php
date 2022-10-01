@extends('frontend.layout')

@section('content')

 <!-- banner-section -->
 <section class="banner-section style-one" style="background-image: url({{asset('frontend/images/banner/banner-1.jpg')}});">
            <div class="bg-layer" style="background-image: url({{asset('frontend/images/banner/banner-1.png')}})"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-box">
                            <figure class="content-bg"><img src="{{asset('frontend/images/banner/b1.jpg')}}" alt=""></figure>
                            <div class="shape">
                                <div class="shape-1 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-1.png')}})"></div>
                            </div>
                            <div class="text">
                                <h2>Authentic Health<span style="color: #dfa803;"> Trustables Services Provider at Home</span> </h2>
                                <div class="btn-box">
                                    <a href="service.html" class="theme-btn-one">Our Services</a>
                                    <a href="contact.html" class="banner-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-box">
                            <figure class="content-bg"><img src="{{asset('frontend/images/banner/banner-img-2.jpg')}}" alt=""></figure>
                            <div class="shape">
                                <div class="shape-2 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-1.png')}})"></div>
                                <div class="shape-3" style="background-image: url({{asset('frontend/images/shape/shape-2.png')}})"></div>
                            </div>
                            <div class="text">
                                <h2>Authentic Health<span style="color: #dfa803;"> Trustables Services Provider at Home</span> </h2>
                                <div class="btn-box">
                                    <a href="service.html" class="theme-btn-one">Our Services</a>
                                    <a href="contact.html" class="banner-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="auto-container">
                        <div class="content-box">
                            <figure class="content-bg"><img src="{{asset('frontend/images/banner/b-2.png')}}"alt=""></figure>
                            <div class="shape">
                                <div class="shape-4 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-1.png')}})"></div>
                                <div class="shape-5" style="background-image: url({{asset('frontend/images/shape/shape-2.png')}})"></div>
                            </div>
                            <div class="text">
                                 <h2>Authentic Health<span style="color: #dfa803;"> Trustables Services Provider at Home</span> </h2>
                                <p>Established in the year 2012, Dr. Lal Pathlabs in Agra, Agra is a top player in the category Pathology Labs in the Agra. </p>
                                <div class="btn-box">
                                    <a href="service.html" class="theme-btn-one">Our Services</a>
                                    <a href="contact.html" class="banner-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        

        <!-- about-section -->
        <section class="about-section sec-pad-2">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6>About Us.</h6>
                                    <h2>Dr. Lal Pathlabs</h2>
                                </div>
                                <div class="bold-text">
                                    <p>Dr. Lal Pathlabs in Agra is one of the leading businesses in the Pathology Labs. Also known for Pathology Labs, Diagnostic Centres, Blood Testing Centres, HIV Testing Centres, Blood Test Home Visit, Blood Collection Centres, Allergy Testing Centres, Urine Testing Labs and much more. </p>
                                </div>
                                <div class="text">
                                    <p>Established in the year 2012, Dr. Lal Pathlabs in Agra, Agra is a top player in the category Pathology Labs in the Agra. </p>
                                    <ul class="list-style-one clearfix">
                                        <li>Diabetes Care</li>
                                        <li>Hormone testing, etc.</li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <a href="about.html" class="theme-btn-one">Read More.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <div class="shape">
                                    <div class="shape-1" style="background-image: url({{asset('frontend/images/shape/shape-5.png')}})"></div>
                                    <div class="shape-2" style="background-image: url({{asset('frontend/images/shape/shape-2.png')}})"></div>
                                </div>
                                <figure class="image"><img src="{{asset('frontend/images/resource/about-1.png')}}"alt=""></figure>
                                <div class="text">
                                    <h2>12</h2>
                                    <h5>Years of exps</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->



        <!-- service-section -->
        <section class="service-section">
            <div class="pattern-layer">
                <div class="pattern-1 wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url({{asset('frontend/images/shape/shape-3.png')}})"></div>
                <div class="pattern-2  wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="background-image: url({{asset('frontend/images/shape/shape-4.png')}})"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Laboratory Services</h6>
                    <h2>Reliable & Latest Technology <br />Health Service</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-5"></i></div>
                                <h4><a href="#">Clinical <br />Microbiology Tests</a></h4>
                                <p>We provide these test in low prices.</p>
                                <div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-6"></i></div>
                                <h4><a href="#">Testing for <br />Traces & Impurities</a></h4>
                                <p>We provide these test in low prices.</p>
                                <div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-7"></i></div>
                                <h4><a href="#">Clinical <br />Biochemistry Tests</a></h4>
                                <p>We provide these test in low prices.</p>
                                <div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-8"></i></div>
                                <h4><a href="#">Clinical <br />Histopatology Tests</a></h4>
                                <p>We provide these test in low prices.</p>
                                <div class="btn-box"><a href="#" class="theme-btn-two">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block"><br>
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-32"></i></div>
                                <h4><a href="#">Lab Test</a></h4>
                                <p>From time to time, you will undoubtedly have to talk with a specialist for general wellbeing registration…</p>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!--<div class="col-lg-3 col-md-6 col-sm-12 service-block"><br>-->
                    <!--    <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">-->
                    <!--        <div class="inner-box">-->
                    <!--            <div class="icon-box"><img src="{{asset('frontend/images/resource/med_1.png')}}"style="width:60px;"></div>-->
                    <!--            <h4><a href="#">Pharmacy</a></h4>-->
                    <!--            <p>Vaccination is the way toward regulating an antigenic substance or antibody, etc…</p>-->
                                
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- service-style-three -->
        <section class="service-style-three">
            <div class="shape">
                <div class="shape-1 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-26.png')}})"></div>
                <div class="shape-2 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-26.png')}})"></div>
                <div class="shape-3"></div>
                <div class="shape-4"></div>
            </div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content centred">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Urine Test</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Diabetes Care</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Hormone testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Blood Group Test</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Diagnostic And Pathology</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-10"></i></div>
                                            <h4><a href="#">Ultrasonography - Pelvic</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Allergy Testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">HIV Testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">General Pathology</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}"style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Kidney Function Test</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content centred">
                            <div class="row clearfix">
                           
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-9"></i></div>
                                            <h4><a href="#">Abdominal Ultrasound</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                               
                               <!--  <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-7"></i></div>
                                            <h4><a href="#"> Diagnostic Ultrasound</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                               <!--  <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-8"></i></div>
                                            <h4><a href="#">Digital Ultrasound Services</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="icon-9"></i></div>
                                            <h4><a href="#">Ultrasound And Ultrasonography</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                            
                               <!--   <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="fa fa-heartbeat" aria-hidden="true"></i></div>
                                            <h4><a href="#">ECG</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div> -->
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-style-three end -->

       
       


        <!-- funfact-section -->
        <section class="funfact-section bg-color-2">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                </div>
                                <div class="text">
                                    <p>Experience Lab Tests</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="999">0</span><span>%</span>
                                </div>
                                <div class="text">
                                    <p>Happy Customer</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="99%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="100">0</span><span>%</span>
                                </div>
                                <div class="text">
                                    <p>Work Quality</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                        <div class="counter-block-one">
                            <div class="inner-box">
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="1500" data-stop="2">0</span><span>+</span>
                                </div>
                                <div class="text">
                                    <p>Working Experience</p>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->

        
        <!-- testimonial-section -->
        <section class="testimonial-section sec-pad-2" style="background-image: url({{asset('frontend/images/background/testimonial-1.jpg')}});">
            <div class="auto-container">
                <div class="inner-content">
                    <div class="sec-title">
                        <h6>Testimonials</h6>
                        <h2>What Our Patient Say?</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                        <div class="content_block_3">
                            <div class="content-box">
                                <ul class="rating clearfix">
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                </ul>
                                <div class="text">
                                    <p>We have regularly working with Dr. Lal Pathlabs lab, and feeling very great to get good service from them.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('frontend/images/resource/testimonial-1.png')}}"alt=""></figure>
                                    <h4>Mr. Somesh Kulkarni</h4>
                                    <span class="designation">Agra </span>
                                </div>
                            </div>
                        </div>
                        <div class="content_block_3">
                            <div class="content-box">
                                <ul class="rating clearfix">
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                </ul>
                                <div class="text">
                                    <p>Very Supportive & Co-operative Staff Quality work, as well as report turnaround time.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('frontend/images/resource/thumb-2.png')}}"alt=""></figure>
                                    <h4>Mr. Anil Jaywant</h4>
                                    <span class="designation">Agra</span>
                                </div>
                            </div>
                        </div>
                        <div class="content_block_3">
                            <div class="content-box">
                                <ul class="rating clearfix">
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                    <li><i class="icon-20"></i></li>
                                </ul>
                                <div class="text">
                                    <p>The staff of this lab is very professional, polite, and accurate in lab testing. And home collection and timely delivery of reports at home are also very efficient.</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('frontend/images/resource/thumb-3.png')}}"alt=""></figure>
                                    <h4>Minal Sharma</h4>
                                    <span class="designation">Agra</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->

    
       
         

        <!-- google-map-section -->
        <section class="google-map-section" style="margin-top:50px;">
            
            <div class="info-section">
                <div class="auto-container">
                    <div class="info-inner clearfix">
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-23"></i></div>
                            <h4> Location Us</h4>
                            <p><b>Center 1 : </b> Kendriya Hindi Sansthan Road, Opp. Vaishno Mata Mandir, Near Bye Pass Khandari X-ing, AGRA-5.</p><br>
                            <p><b>Center 2 : </b>Opp. State Bank of India, 100 Foota Road, Dayalbagh, AGRA-5.</p><br>
                            <p><b>Center 3 : </b>Infront of Park View Apartment, Near Vijay Nagar Police Chowki, Vijay Nagar, Agra.</p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-59"></i></div>
                            <h4>Help Line Number's</h4>
                            <p><a href="tel:9927777172">(+91) 9927777172</a>, 
                                <a href="tel:9927167172">(+91) 9927167172</a>, 
                                <a href="tel:7534017172">(+91) 7534017172</a>, 
                                <a href="tel:9837527138">(+91) 9837527138</a>, 
                                <a href="tel:7037333172">(+91) 7037333172</a>
                            </p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-60"></i></div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:satyenlalpathlab@gmail.com">satyenlalpathlab@gmail.com</a><br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- google-map-section end -->

         
        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Contact Us</h6>
                    <h2>Have Any Question Contact With Us</h2>
                </div>
                <div class="form-inner">
                    <form method="post" action="http://azim.commonsupport.com/Laborex/sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Full Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-one" type="submit" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-style-two end -->

         <!-- research-style-two -->
        <section class="research-style-two centred bg-color-1">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{asset('frontend/images/shape/shape-65.png')}})"></div>
                <div class="pattern-2" style="background-image: url({{asset('frontend/images/shape/shape-66.png')}})"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Dr. Lal Pathlabs</h6>
                    <h2>Trustables Authentic Health <br> Services Provider at Home</h2><br>
                    <div class="btn-box">
                       <a href="tel:9927777172" class="theme-btn-one">Book Now.</a>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- research-style-two end -->

        
        <section>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113579.63202948698!2d77.9099719560236!3d27.176309823404935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39740d857c2f41d9%3A0x784aef38a9523b42!2sAgra%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1664269374987!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

@endsection()