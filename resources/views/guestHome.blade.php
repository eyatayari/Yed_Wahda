<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zeta</title>
  <meta charset="utf-8" >
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Zeta Template Project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">


  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">



  <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">


  <link href="{{asset('css/GuestHome.css')}}" rel="stylesheet">
<!--style navbar-->
  <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">


  <!-- Template Main JS File -->

</head>
<body>
<div class="row">
<header class="header d-flex flex-row justify-content-end align-items-center">

  <!-- Logo -->
  <div class="logo_container mr-auto">
    <div class="logo">
      <a href="#">يد وحدة</a>
    </div>
  </div>

  <!-- Main Navigation -->
  <nav class="main_nav justify-self-end">
    <ul class="nav_items">
          <li class="active arabic" lang="ar" >
            <a href="{{route('home')}}" >الرئيسية
            </a>
          </li>

          <li class="arabic">
            <a href="#contact">
              <span>إتصل بنا</span>
            </a>
          </li>

          <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="{{route('register')}}">

                        <i class="fa fa-user fa-stack-3x" style="font-size:24px; color:#fc8760;"></i>

                    </a>
                </span>
        </span>


    </ul>
  </nav>



</header>

</div>


  <!-- Vendor CSS Files -->
<main id="main" >

<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <div class="carousel-background"><img src="{{asset('images/1.jpg')}}" alt=""></div>

        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{asset('images/2.jpg')}}" alt=""></div>

        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{asset('images/3.jpg')}}" alt=""></div>
          <div class="carousel-container">

          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{asset('images/2.jpg')}}" alt=""></div>

        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{asset('images/4.jpg')}}" alt=""></div>

        </div>

      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- End Intro Section -->



    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header ">
          <h3>أرقام عن الوضع في تونس</h3>
          <p > أخر تحديث:  {{$resultat->covid19Stats[0]->lastUpdate}}</p>
        </header>

        <div class="row counters">



          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultat->covid19Stats[0]->deaths}}</span>
            <p class="arabic">حالات وفاة</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultat->covid19Stats[0]->confirmed}}</span>
            <p class="arabic">عدد الحالات المسجلة</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultat->covid19Stats[0]->recovered}}</span>
            <p class="arabic">حالات إستردت عافيتها</p>
          </div>

        </div>



      </div>
    </section>
    <section id="facts" class="wow fadeIn">
      <div class="container">

        <header class="section-header ">
          <h3>أرقام عن الوضع في العالم </h3>
          <p > أخر تحديث:  {{$resultat->covid19Stats[0]->lastUpdate}}</p>
        </header>

        <div class="row counters">



          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultatWorld->deaths}}</span>
            <p class="arabic">حالات وفاة</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultatWorld->confirmed}}</span>
            <p class="arabic">عدد الحالات المسجلة</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">{{$resultatWorld->recovered}}</span>
            <p class="arabic">حالات مستردة عافيتها</p>
          </div>

        </div>



      </div>
    </section>
  <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">

      <div class="section-header">
        <h3>                               باش تكلمنا
        </h3>

      </div>



      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="إسمك" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="بريدك الإلكتروني" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="المحتوى"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">أرسل</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->
  </main>
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>3Bgroupe</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->

      </div>
    </div>
  </footer><!-- End Footer -->



  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->

</body>

<!-- Template Main JS File -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('vendor/superfish/superfish.min.js')}}"></script>
<script src="{{asset('vendor/jquery-touchswipe/jquery.touchSwipe.min.js')}}"></script>
<script src="{{asset('js/Counter.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>



</html>