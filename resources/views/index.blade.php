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



    <div class="services prlx_parent contact" id="autorisationsortie" >
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



    <br><br>

     <!--Element -->
    <div class="contact prlx_parent wow fadeIn" id="facts" style="background: url(/images/facts-bg-2.jpg) center top no-repeat fixed  ;;
    background-size: cover">
        <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->

        <div class="contact_shapes" ></div>
        <div class="contact_content">

            <div class="container">



                <div class="row">

                    <div class="col-3"></div><div class="col-9"> <div class="col-lg-9">
                            <div class="contact_main_content">

                                <div class="contact_subtitle"></div>

                                <!-- Contact Us Form -->
                                <div class="contact_form_container">
                                    <form id="reply_form" method="POST"  action="{{route('storecourse')}}" onsubmit="return checkForm(this);">
                                        {{ csrf_field() }}
                                        <div>

                                            <div class="form-group">

                                                <center style="font-size:24px;"><b> اختار الي تستحقو في قضيتك لدار  </b></center><br>
                                                <div class="group">
                                                    <input type="checkbox" value="médicaments"  id="médicaments" class="input_field"  name='type_course[]'> <label for="médicaments">ادوية </label><br>
                                                    <input type="checkbox" value="nourriture" id="nourriture" name='type_course[]' > <label for="nourriture">طعام </label><br>
                                                    <input type="checkbox" value="besoins pour la maison" id="des besoins pour la maison" name='type_course[]'> <label for="des besoins pour la maison">احتياجات منزلية </label><br>
                                                    <input type="checkbox" value="matériaux de stérilisation" id="matériaux de stérilisation" name='type_course[]'> <label for="matériaux de stérilisation">  مواد تعقيم</label><br>
                                                    <br>

                                                </div>

                                            </div>
                                            <textarea id="contact_form_message" class="text_field contact_form_message" name="description"  placeholder="شناوا تستحق بالتفصيل" rows="4" required data-error="Please, write us a message."></textarea>
                                        </div>
                                        <div>
                                            <center>  <button id="contact_form_submit"  class="arabic contact_submit_btn trans_300" type="submit"  value="Submit">
                                                    ابعث<img src="images/arrow_right.svg" alt=""></center>
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>

@endsection