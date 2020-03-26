<header class="header d-flex flex-row justify-content-end align-items-center">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Logo -->
    <div class="logo_container mr-auto">
        <div class="logo">
            <a href="#">يد وحدة</a>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="main_nav justify-self-end">
    
        <ul class="nav_items">
       
            <li class="active arabic" lang="ar" ><a href="{{route('BenevoleshowDashboard')}}" >الرئيسية</a></li>
         
            <li ><a href="{{route('BenevoleshowDashboard')}}#demandeconfirmé"> الناس الي عاونتهم</a></li> 
        
            <a href="{{ route('logout') }}">
                                           
                                           
                                <i class="fa fa-sign-out p-2" style="font-size:24px; color:#fc8760;"></i>

                                </a>


         

</ul></nav>
         

            @if (($k>0 )&&(($c->ville)== (Auth::guard('benevole')->user()->ville)))<div class="p-5">  <div> <li><a href="{{route('BenevoleshowDashboard')}}#demandenonconfirmé"><div class="my-btn">
	<div class="my-btn-border"></div>
	<i class="fa fa-bell btn-bell"></i>
</div></a></li></div></div>@endif


 




    

    <!-- Hamburger
    <div class="hamburger_container">
        <span class="hamburger_text">Menu</span>
        <span class="hamburger_icon"></span>
    </div>
-->
</header>
<script>
        $(function() {
	
	// check this out on a mobile device.
	if (/Mobi/.test(navigator.userAgent)) {
    setInterval(function() {
			navigator.vibrate();
		}, 3000);
	}
	
	
});</script>     


