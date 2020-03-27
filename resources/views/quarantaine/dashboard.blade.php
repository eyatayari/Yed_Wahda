@extends('layouts.HomeLayout')
@section('content')
<br>
    <br>
    <br>
    <br>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100" style="width: 100%">
            <div class="table">

                <div class="row rowheader">
                    <div class="cell">
                        إسم الطبيب
                    </div>
                    <div class="cell">
                        لقب الطبيب
                    </div>
                    <div class="cell">
                        الولاية
                    </div>
                    <div class="cell">

                    </div>
                </div>
                @foreach($doctors as $doctor)
                    <div class="row">
                        <div class="cell">
                            {{$doctor->prenom}}
                        </div>
                        <div class="cell" data-title="Age">
                            {{$doctor->nom}}
                        </div>
                        <div class="cell" data-title="Job Title">
                            {{$doctor->gouvernorat}}
                        </div>
                        <div class="cell" data-title="Location">
                            <a href="#"></a>
                        </div>
                    </div>
                @endforeach






            </div>
        </div>
    </div>
</div>

@endsection
