@extends('layouts.LayoutLogin')

@section('content')



    <div class="limiter" style="">
        <div class="container-login100" style="background-image: url('images/facts-bg-2.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="login100-form validate-form">
                <form method="post" action="{{route('LoginVerification')}} ">
                    @csrf
                    <strong class=" login100-form-title">
                        تسجيل الدخول
                </strong>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">البريد الإلكتروني</span>
                    <input class="input100" type="text" name="email" placeholder="البريد الإلكتروني">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">كلمة السر</span>
                    <input class="input100" type="password" name="password" placeholder="كلمة السر">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                        نسيت كلمة السر؟
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            دخول
                        </button>
                    </div>
                </div>

            </form>

                    <a href="{{route('register')}}" class="txt2 login100-form-title" style="font-size: 20px; padding-top: 5px">
                       قيد معانا
                    </a>
              </div>
            </div>
        </div>
    </div>





@endsection
<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('js/Login.js')}}"></script>