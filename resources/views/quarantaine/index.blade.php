@extends('layouts.HomeLayout')





@section('content')
    <div class="home">
    <div class="row"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Quaranties</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table"  cellspacing="0" width="100%">
                                <thead class="text-primary">
                                <th>المعرف</th>
                                <th>بطاقة تعريف الوطنية</th>
                                <th> الاسم</th>
                                <th>اللقب</th>
                                <th>المدينة</th>
                                <th>تاريخ الميلاد</th>
                                <th> الجنس</th>
                                <th> رقم الهاتف</th>
                                
        
                                <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($quarantaines as $key=>$quarantaine)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $quarantaine->cin }}</td>
                                            <td>{{ $quarantaine->nom }}</td>
                                            <td>{{ $quarantaine->prenom }}</td>
                                            <td>{{ $quarantaine->ville }}</td>
                                            <td>{{ $quarantaine->date_naissance }}</td>
                                            <td>{{ $quarantaine->sexe }}</td>
                                            <td>{{ $quarantaine->num_tel }}</td>
                                            
                                            
                                            <td>
                                                <a href="{{ route('quarantaine.edit',$quarantaine->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                                                <form id="delete-form-{{ $quarantaine->id }}" action="{{ route('quarantaine.destroy',$quarantaine->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $quarantaine->id }}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"><i class="material-icons">delete</i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush