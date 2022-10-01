@extends('frontend.layout')

@section('content')

 <!-- Page Title -->
 <section class="page-title centred" style="background-image: url({{asset('frontend/images/background/page-title.jpg')}});">
            <div class="auto-container">
                <div class="content-box">
                    <div class="shape" style="background-image: url({{asset('frontend/images/shape/shape-63.png')}});"></div>
                    <div class="title">
                        <h1>Contact US</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>
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

         <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113579.63202948698!2d77.9099719560236!3d27.176309823404935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39740d857c2f41d9%3A0x784aef38a9523b42!2sAgra%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1664269374987!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>



@endsection()