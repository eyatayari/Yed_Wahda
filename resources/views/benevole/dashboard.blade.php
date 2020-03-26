@extends('layouts.HomeLayoutbenevole')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- Hero Slider -->


    <div class="home_social_container d-flex flex-row justify-content-end align-items-center">
        <ul class="home_social">
            <li><a href="#"><i class="fab fa-facebook-f trans_500"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter trans_500"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in trans_500"></i></a></li>
        </ul>
    </div>
   


   <br> <br> <br> <br> <br> <br> <br> <br> <br> <br><br><br>

    
            <center>
          
                <h1  >   {{Auth::guard('benevole')->user()->prenom}} {{Auth::guard('benevole')->user()->nom}} مرحبا بك <br> شكرا على حسن اخلاقك وحبك للخير و الكرم <br>تنجم توا تبدا في مهمتك الخيرية
                <br> <i style="font-size:27px" class="fa">&#xf118;</i> بالتوفيق</h1>
                
            </center>
       <br>  <br>  <br>  <br>  <br>  <br>

    <!-- demandeconfirmé -->
  
   
    <div  id="demandeconfirmé">
        <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
        <div class="contact_background prlx" style=""></div>
        <div class="contact_shapes"><img src="images/contact_shape.png" alt=""></div>
        <div class="contact_content">

                <div class="container">



                 
                    <div class="contact_subtitle"></div>

                    <!-- Contact Us Form -->
                    <center style="font-size:24px"><b> الناس الي عاونتهم</b></center><br>
                    <table class="w3-table-all w3-card-4" >
                   
                      <thead style="color:#ff4200;">
                      
                     
                       
                       
                       
                        <th><center> اسم صاحب الطلب</center></th>
                        <th><center>لقب صاحب الطلب</center> </th>
                        <th><center>حي صاحب الطلب </center></th>
                       
                        <th><center>شناوا يستحق </center></th>
                      
                        <th ><center>المحتوى</center></th>
                        <th><center>تاريخ الطلب</center></th>
                        <th><center>رقم هاتف صاحب الطلب</center></th>
                      
                      </thead>
                      <tbody>
                   
                      @foreach($m as $m)
                  
                      @if((($m->ville)==(Auth::guard('benevole')->user()->ville))&&(($m->etat)=="confirmé")&&(($m->id_benevole)==(Auth::guard('benevole')->user()->id)))
                        <tr>
                          
                         
                          
                          <td><center>{{$m->prenom}}</center></td>
                          <td><center>{{$m->nom}}</center></td>
                          <td><center>{{$m->cite}}<center></td>
                        
                          <td><center>{{$m->type_course}}</center></td>
                         
                          <td  ><center>{{$m->description}}</center></td>
                          <td><center>{{$m->date_demande}}</center></td>
                          <td><center>{{$m->num_telephone}}</center></td>
                         
                          <td>
                         <a href="">
                         <button type="button" class="btn btn-rounded  py-2 m-0 px-3 mr-3 " style=" background-color:#ff4200;"><p  style="color:#ffffff;"> احكي معاه</p></button>
                   
                
                   
                   
                                    
                
                         </td>
                       
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                    </div>
            </div>
           

 


      <!-- demandenonconfirmé -->
      @if ($k>0 )
     <div class="contact prlx_parent" id="demandenonconfirmé">
        <!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
        <div class="contact_background prlx" style=""></div>
        <div class="contact_shapes"><img src="images/contact_shape.png" alt=""></div>
        <div class="contact_content">

                <div class="container">



                <div class="contact_main_content">

                    <div class="contact_subtitle"></div>

                    <!-- Contact Us Form -->
                  
                    <center style="font-size:24px"><b> الناس الي مستحقين تعاونهم</b></center><br>
                   
                    <table class="w3-table-all w3-card-4">
                   
                      <thead style="color:#ff4200;">
                      
                     
                       
                       
                       
                        <th><center> اسم صاحب الطلب</center></th>
                        <th><center>لقب صاحب الطلب</center> </th>
                        <th><center>حي صاحب الطلب </center></th>
                       
                        <th><center>شناوا يستحق</center></th>
                        <th><center>المحتوى</center></th>
                        <th><center>تاريخ الطلب</center></th>
                        <th><center>رقم هاتف صاحب الطلب</center></th>
                      
                      </thead>
                      <tbody>
                   
                      @foreach($c as $c)
                  
                      @if((($c->ville)== (Auth::guard('benevole')->user()->ville))&&(($c->etat)=="n'est pas confirmé"))
                        <tr>
                         
                         
                          
                          
                        <td><center>{{$m->prenom}}</center></td>
                          <td><center>{{$m->nom}}</center></td>
                          <td><center>{{$m->cite}}<center></td>
                        
                          <td><center>{{$m->type_course}}</center></td>
                          <td><center>{{$m->description}}</center></td>
                          <td><center>{{$m->date_demande}}</center></td>
                          <td><center>{{$m->num_telephone}}</center></td>
                          <td>
                         <a href="/confirme/{{$c->id}}/{{Auth::guard('benevole')->user()->id}}">
                         <button type="button" class="btn btn-rounded py-2 m-0 px-3 mr-3 " style=" background-color:#ff4200;"><p  style="color:#ffffff;">وافق تعاون</p></button>
                   
                
                   </a>
                   
                                    
                
                         </td>
                       
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                   
                </div>
            </div>

            @endif 
      <br>
           
@endsection