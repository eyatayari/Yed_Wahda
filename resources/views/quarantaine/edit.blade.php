@extends('layouts.HomeLayout')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Modifier Quarantaine</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('quarantaine.update',$quarantaine->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">بطاقة تعريف الوطنية</label>
                                            <input type="text" class="form-control" value="{{ $quarantaine->cin }}" name="cin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">الاسم</label>
                                            <input type="text" class="form-control" value="{{ $quarantaine->nom }}" name="nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">اللقب</label>
                                            <input type="text" class="form-control" value="{{ $quarantaine->prenom }}" name="prenom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">المدينة</label>
                                            <input type="text" class="form-control" value="{{ $quarantaine->ville }}" name="ville">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">تاريخ الميلاد</label>
                                            <input type="date" class="form-control" value="{{ $quarantaine->date_naissance }}" name="date_naissance">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label"> الجنس</label>
                                            <input type="text" class="form-control" value="{{ $quarantaine->sexe }}" name="sexe">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">رقم الهاتف </label>
                                            <input type="numero" class="form-control" value="{{ $quarantaine->num_tel }}" name="num_tel">
                                        </div>
                                    </div>
                                </div>
                                
                                <a href="{{ route('quarantaine.index') }}" class="btn btn-danger">Retour</a>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush