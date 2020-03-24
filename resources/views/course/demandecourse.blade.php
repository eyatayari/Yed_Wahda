@extends('layouts.HomeLayout')
@section('content')

   

  <br> <br> <br> <br> <br> <br> 

        
                <form method="POST"  action="{{ route('storecourse') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                 
                   <div class="form-group">
                      
                                <label class="label"> Type Course</label>
                              
                                <select class="form-control"   name="type_course">
      
     
      <option >pharmacie</option>
      <option >grande surface</option>
      <option >super marché</option>
      <option >hopital</option>
</select></div>

      Comments
      
                        
                      
                    <br><br><br>  </div>
                 
                    <div class="form-group">
      
        <textarea name="description" class="form-control" id="Comments" rows="3" placeholder="Please add comments here"></textarea></div>
                 
                       <center> <button type="submit" class="btn btn-rounded btn-primary  m-b-4"><i class="fa  pr-1" >&#xf046;</i>Ajouter</button></center>
                </form>
           </div>   </div>   </div>   </div>
      @endsection