@extends('frontend.layout')

@section('content')

 <!-- Page Title -->
 <section class="page-title centred" style="background-image: url({{asset('frontend/images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="shape" style="background-image: url({{asset('frontend/images/shape/shape-63.png')}});"></div>
                    <div class="title">
                        <h1>Service</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        
         <!-- service-section -->
        <section class="service-section">
            <div class="pattern-layer">
                <div class="pattern-1 wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url({{asset('frontend/images/shape/shape-3.png')}});"></div>
                <div class="pattern-2  wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="background-image: url({{asset('frontend/images/shape/shape-4.png')}});"></div>
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
                    <!--            <div class="icon-box"><img src="{{asset('frontend/images/resource/med_1.png')}}" style="width:60px;"></div>-->
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
                <div class="shape-1 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-26.png')}});"></div>
                <div class="shape-2 rotate-me" style="background-image: url({{asset('frontend/images/shape/shape-26.png')}});"></div>
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
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Urine Test</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Diabetes Care</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Hormone testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Blood Group Test</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
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
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">Allergy Testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">HIV Testing</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
                                            <h4><a href="#">General Pathology</a></h4>
                                            <p><b>Price</b> : $--</p>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                                    <div class="service-block-three">
                                        <div class="inner-box">
                                            <div class="icon-box"><span><img src="{{asset('frontend/images/icons/ring.png')}}" style="width: 50px; height:50px;"></span> </div>
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

@endsection()