<html>

<body>
<link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
<div class="content">
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Liste Benevoles</h4>
                
                </div>
                <div class="card-body">
          @if ($k>0)      
        <div class="my-btn">
	<div class="my-btn-border"></div>
	<i class="fa fa-bell btn-bell"></i>
</div>
@endif
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
                      @if((($c->ville)=='manouba')&&(($c->etat)=="n'est pas confirmé"))
                        <tr>
                           <td>
                        
                          </td>
                        
                         
                          
                          <td>{{$c->nom}}</td>
                          <td>{{$c->prenom}}</td>
                          <td>{{$c->date_naissance}}</td>
                        
                          <td>{{$c->type_course}}</td>
                          <td>{{$c->description}}</td>
                          <td>{{$c->date_demande}}</td>
                          <td>
                         <a href="/confirmé/{{$c->id}}">
                         <button type="button" class="btn btn-rounded btn-success py-2 m-0 px-3 mr-3 ">confirmer</button>
                   
                
                   
                   
                                    
                
                         </td>
                       
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                    </body>
                    <script>
        $(function() {
	
	// check this out on a mobile device.
	if (/Mobi/.test(navigator.userAgent)) {
    setInterval(function() {
			navigator.vibrate();
		}, 3000);
	}
	
	
});</script>
                    </html>