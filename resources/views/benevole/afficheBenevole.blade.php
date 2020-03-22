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
                     
                       
                       
                        <th>Penom / الاسم </th>
                        <th>Nom / اللقب</th>
                        <th>ville / المدينة</th>
                       
                        <th> numéro de téléphone / رقم الهاتف </th>
                      
                      </thead>
                      <tbody>
                      @foreach($b as $b)
                        <tr>
                           <td>
                        
                          </td>
                        
                         
                          
                          <td>{{$b->nom}}</td>
                          <td>{{$b->prenom}}</td>
                          <td>{{$b->ville}}</td>
                        
                          <td>{{$b->num_telephone}}</td>
                          <td>
                         <a href="">
                         <button type="button" class="btn btn-rounded btn-success py-2 m-0 px-3 mr-3 ">contacter</button>
                   
                
                   
                   
                                    
                
                         </td>
                       
                        </tr>
                        
                        @endforeach
                        
                      </tbody>
                    </table>
                    </body>
                    </html>