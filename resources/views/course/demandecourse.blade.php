<html><body>

<link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet"/>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   



        <div class="card ">
        <div class="card-header card-header-primary">
          
           
            </div>
            <div class="card-body">
              
                <form method="POST"  action="{{ route('storecourse') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                 
                   <div class="form-group">
                      
                                <label class="label"> Type Course</label>
                              
                                <select class="form-control"   name="type_course">
      
     
      <option >pharmacie</option>
      <option >grande surface</option>
      <option >super marché</option>
      <option >hopital</option>



      
                        
                      
                    <br><br><br>  </div>
                 
                    <div class="form-group">
        <label for="Comments">Comments</label>
        <textarea name="description" class="form-control" id="Comments" rows="3" placeholder="Please add comments here"></textarea></div>
                 
                       <center> <button type="submit" class="btn btn-rounded btn-primary  m-b-4"><i class="fa  pr-1" >&#xf046;</i>Ajouter</button></center>
                </form>
            </div>
        </div>
        </div>
        </div> 
        </body></html>