@extends('layouts.HomeLayout')

@section('content')

    <!-- Hero Slider -->

    <div class="home">
        <div class="hero_slider_container slider_prlx">
            <div class="owl-carousel owl-theme hero_slider">

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:{{asset('images/4.jpg')}}"></div>
                    <div class="main_slider_shapes"><img src="{{asset('images/4.jpg')}}" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
                                    <div class="button discover_button">
                                        <a href="#" class="d-flex flex-row align-items-center justify-content-center">discover<img src="images/arrow_right.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url(images/main_slider_1.jpg)"></div>
                    <div class="main_slider_shapes"><img src="{{asset('images/4.jpg')}}" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
                                    <div class="button discover_button">
                                        <a href="#" class="d-flex flex-row align-items-center justify-content-center">discover<img src="images/arrow_right.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item main_slider_item">
                    <div class="main_slider_item_bg" style="background-image:url(images/main_slider_1.jpg)"></div>
                    <div class="main_slider_shapes"><img src="{{asset('images/5.jpg')}}" alt="" style="width: 100% !important;"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col slider_content_col">
                                <div class="main_slider_content">
                                    <h1>Do you need</h1>
                                    <h1>a <span>modern</span> website?</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. </p>
                                    <div class="button discover_button">
                                        <a href="#" class="d-flex flex-row align-items-center justify-content-center">discover<img src="images/arrow_right.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Dots -->

            <div class="main_slider_dots">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul id="main_slider_custom_dots" class="main_slider_custom_dots">
                                <li class="main_slider_custom_dot active">01.</li>
                                <li class="main_slider_custom_dot">02.</li>
                                <li class="main_slider_custom_dot">03.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Dots -->

            <div class="main_slider_nav_left main_slider_nav">
                <i class="fas fa-chevron-left trans_300"></i>
            </div>

            <div class="main_slider_nav_right main_slider_nav">
                <i class="fas fa-chevron-right trans_300"></i>
            </div>

        </div>
    </div>

    <div class="home_social_container d-flex flex-row justify-content-end align-items-center">
        <ul class="home_social">
            <li><a href="#"><i class="fab fa-facebook-f trans_300"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter trans_300"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in trans_300"></i></a></li>
        </ul>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row align-items-end">

                <!-- Features Item -->
                <div class="col-lg-4 features_col">
                    <div class="features_item d-flex flex-column align-items-center justify-content-end text-center">
                        <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
                        <div class="icon_container d-flex flex-column justify-content-end">
                            <img src="images/icon_1.svg" alt="">
                        </div>
                        <h3>modern design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-4 features_col">
                    <div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
                        <div class="icon_container d-flex flex-column justify-content-end">
                            <img src="images/icon_2.svg" alt="">
                        </div>
                        <h3>easy to use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-4 features_col">
                    <div class="features_item d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
                        <div class="icon_container d-flex flex-column justify-content-end">
                            <img src="images/icon_3.svg" alt="">
                        </div>
                        <h3>well documented</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- About -->

    <div class="about prlx_parent">
        <!-- https://unsplash.com/@nativemello -->
        <div class="about_background prlx" style="background-image:url(images/about_background.jpg)"></div>
        <div class="about_shapes"><img src="images/about_shapes.png" alt=""></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title">
                    <h2>about our project<span>z</span></h2>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="about_text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus.</p>
                        <img src="images/signiture.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="skills_container">
                        <ul class="progress_bar_container col_12 clearfix">
                            <li class="pb_item">
                                <div id="skill_1_pbar" class="skill_bars" data-perc="0.85" data-name="skill_1_pbar"></div>
                                <h5>management</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_2_pbar" class="skill_bars" data-perc="1" data-name="skill_2_pbar"></div>
                                <h5>design</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar"></div>
                                <h5>projects</h5>
                            </li>
                            <li class="pb_item">
                                <div id="skill_4_pbar" class="skill_bars" data-perc="0.95" data-name="skill_4_pbar"></div>
                                <h5>inspiration</h5>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
                    <h2>testimonials<span>z</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonials_container">
                        <div class="testimonials_container_inner"></div>

                        <!-- Testimonials Slider -->

                        <div class="owl-carousel owl-theme testimonials_slider">

                            <!-- Testimonials Item -->
                            <div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="testimonials_content">
                                    <div class="test_user_pic"><img src="images/test_user.jpg" alt="https://unsplash.com/@michaeldam"></div>
                                    <div class="test_name">maria williams</div>
                                    <div class="test_title">Company CEO</div>
                                    <div class="test_quote">"</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante.</p>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="testimonials_content">
                                    <div class="test_user_pic"><img src="images/test_user.jpg" alt="https://unsplash.com/@michaeldam"></div>
                                    <div class="test_name">maria williams</div>
                                    <div class="test_title">Company CEO</div>
                                    <div class="test_quote">"</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante.</p>
                                </div>
                            </div>

                            <!-- Testimonials Item -->
                            <div class="owl-item testimonials_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="testimonials_content">
                                    <div class="test_user_pic"><img src="images/test_user.jpg" alt="https://unsplash.com/@michaeldam"></div>
                                    <div class="test_name">maria williams</div>
                                    <div class="test_title">Company CEO</div>
                                    <div class="test_quote">"</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Testimonials Slider Navigation -->

                <div class="test_slider_nav test_slider_nav_left d-flex flex-column justify-content-center align-items-center trans_200">
                    <i class="fas fa-chevron-left trans_200"></i>
                </div>

                <div class="test_slider_nav test_slider_nav_right d-flex flex-column justify-content-center align-items-center trans_200">
                    <i class="fas fa-chevron-right trans_200"></i>
                </div>

            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services prlx_parent contact" >
        <!-- artist: https://unsplash.com/@nativemello -->
        <div class="services_background prlx" style="background-image:url(images/services_background.jpg)"></div>
        <div class="services_shapes"><img src="images/services_shapes.png" alt=""></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_1.svg" alt="">
                    </div>
                    <h3>modern design</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_2.svg" alt="">
                    </div>
                    <h3>easy to use</h3>
                    <p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_3.svg" alt="">
                    </div>
                    <h3>well documented</h3>
                    <p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_4.svg" alt="">
                    </div>
                    <h3>smart structure</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_5.svg" alt="">
                    </div>
                    <h3>elements</h3>
                    <p>Dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/icon_6.svg" alt="">
                    </div>
                    <h3>bold colors</h3>
                    <p>Adipiscing elit. Phasellus vestibulum, quam tincidunt venen atis ultrices.</p>
                </div>

            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="button services_button">
                        <a href="services.html" class="d-flex flex-row align-items-center justify-content-center">
                            discover<img src="images/arrow_right.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->

    <div class="clients">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center section_title section_title_dark">
                    <h2>our clients<span>z</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, est libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac consectetur diam neque eget quam. </p>
                </div>
                <div class="col-lg-6">
                    <p>Amet, consectetur adipiscing elit. Phasellus vestibulum, olor sit amet, consectetur adipiscing eli quam tincidunt venen atis ultrices, quam tincidunest libero olor sit amet, consectetur adipiscing eli mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis quam tincidun ante, ac cquam tincidunonsectetur diam neque eget quam.</p>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    <!-- Clients Slider -->

                    <div class="clients_slider_container">
                        <div class="owl-carousel owl-theme clients_slider">

                            <!-- Slider Item -->
                            <div class="owl-item clients_item">
                                <img src="images/client_1.png" alt="">
                            </div>

                            <!-- Slider Item -->
                            <div class="owl-item clients_item">
                                <img src="images/client_2.png" alt="">
                            </div>

                            <!-- Slider Item -->
                            <div class="owl-item clients_item">
                                <img src="images/client_3.png" alt="">
                            </div>

                            <!-- Slider Item -->
                            <div class="owl-item clients_item">
                                <img src="images/client_4.png" alt="">
                            </div>

                            <!-- Slider Item -->
                            <div class="owl-item clients_item">
                                <img src="images/client_5.png" alt="">
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Contact -->

    <div class="contact prlx_parent" id="contact">
        <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
        <div class="contact_background prlx" style="background-image: url(images/contact_background.jpg);"></div>
        <div class="contact_shapes"><img src="images/contact_shape.png" alt=""></div>
        <div class="contact_content">

                <div class="container">



                <div class="row">
                    <div class=" arabic col-lg-6 offset-lg-3 text-center section_title ">
                        <h2>بش تكلمنا</h2>
                    </div>
                </div>
                    <div class="row">

            <div class="col-lg-8">
                <div class="contact_main_content">

                    <div class="contact_subtitle"></div>

                    <!-- Contact Us Form -->
                    <div class="contact_form_container">
                        <form id="reply_form" action="post">
                            <div>
                                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="الإسم" required="required" data-error="Name is required.">
                                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="البريد الإلكتروني" required="required" data-error="Valid email is required.">
                                <input id="contact_form_subject" class="input_field contact_form_subject" type="text" placeholder="الموضوع" required="required" data-error="Subject is required.">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message"  placeholder="المحتوى" rows="4" required data-error="Please, write us a message."></textarea>
                            </div>
                            <div>
                                <button id="contact_form_submit" type="submit" class="arabic contact_submit_btn trans_300" value="Submit">
                                    ابعث<img src="images/arrow_right.svg" alt="">
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="contact_sidebar">

                    <!-- Contact Info -->
                    <div class="sidebar_section">
                        <div class="sidebar_contact_info">
                            <div class="sidebar_title">contact info</div>
                            <ul>
                                <li>Rosia Road , No234/56
                                    <br>
                                    Gibraltar , UK</li>
                                <li>contact@cocoontemplate.com</li>
                                <li>+5463 834 53 2245</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

                </div>
            </div>
        </div>
    </div>



@endsection