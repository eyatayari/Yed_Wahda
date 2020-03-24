<html>

<body>
<link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet"/>
<div class="content">
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Liste Benevoles</h4>
                
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                 
                    <table class="table" id="datatable" >
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                     
                       
                       
                        <th>nom qurantaine </th>
                        <th>prenom qurantaine </th>
                        <th>date de naissance</th>
                       
                        <th>type course</th>
                        <th>description</th>
                        <th>date demande</th>
                      
                      </thead>
                      <tbody>
                      @foreach($c as $c)
                      @if((($c->ville)=='manouba')&&(($c->etat)=='confirmé'))
                        <tr>
                           <td>
                        
                          </td>
                        
                         
                          
                          <td>{{$c->nom}}</td>
                          <td>{{$c->prenom}}</td>
                          <td>{{$c->date_naissance}}</td>
                        
                          <td>{{$c->type_course}}</td>
                          <td>{{$c->description}}</td>
                          <td>{{$c->date_demande}}</td>
                         
                       
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                    </body>
                    </html>