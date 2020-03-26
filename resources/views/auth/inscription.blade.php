
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.HomeLayout')

@section('content')
<div class=" register" >
    <div class="row" style="padding-top: 5%">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>مرحبا بيك </h3>
            <h6>تونس بينا أقوى</h6>

            <a href="{{route('Login')}}"> <input  type="submit" value="تسجيل الدخول" style="margin-top: 8%;"/></a><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">شخص في الحجر الصحي</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">متطوع</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class=" arabic register-heading">قيد معانا كشخص في الحجر الصحي</h3>
                    <form action="{{route('createQuarantaine')}}" method="post">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="prenom" placeholder="إسمك" value=""
                                                                                                                                                                                                />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cin" placeholder="رقم بطاقة التعريف" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" />
                                </div>

                                <div class="form-group">
                                    <select  class="form-control" >
                                        <option value="">---الولاية---</option>
                                        @foreach ($gouvernorat_list as $gouvernorat)
                                            <option value="{{ $gouvernorat->id }}" name="gouvernorat" >{{ $gouvernorat->nom_gouvernorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="sexe" value="male" checked>
                                            <span> رجل </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="sexe" value="female">
                                            <span>امرأة </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nom" placeholder="لقبك" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="8" maxlength="12" name="num_telephone" class="form-control" placeholder="رقم الهاتف" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="كلمة السر" value="" />
                            </div>
                                <div class="form-group">

                                    <select name="municipalite" class="form-control" >
                                        <option value="">---البلدية---</option>
                                    </select>
                                </div>
                            <input type="submit" class="btnRegister"  value="قيد"/>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">قيد معانا كمتطوع</h3>
                    <form method="post" action="{{route('createBenevole')}}">
                        @csrf

                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="prenom" placeholder="إسمك" value=""
                                    />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cin" placeholder="رقم بطاقة التعريف" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" />
                                </div>

                                <div class="form-group">
                                    <select name="gouvernorat" class="form-control" >
                                        <option value="">---الولاية---</option>
                                        @foreach ($gouvernorat_list as $gouvernorat)
                                            <option value="{{ $gouvernorat->id }}">{{ $gouvernorat->nom_gouvernorat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="sexe" value="male" checked>
                                            <span> رجل </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="sexe" value="female">
                                            <span>امرأة </span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nom" placeholder="لقبك" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="8" maxlength="12" name="num_telephone" class="form-control" placeholder="رقم الهاتف" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="كلمة السر" value="" />
                                </div>
                                <div class="form-group">

                                    <select name="municipalite" class="form-control" >
                                        <option value="">---البلدية---</option>
                                    </select>
                                </div>
                                <input type="submit" class="btnRegister"  value="قيد"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

