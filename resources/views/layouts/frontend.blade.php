<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from shivaaythemes.in/morbizz-demo/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 12:20:30 GMT -->
   <head>
      <title>Hex Gency</title>
      <meta name="keywords" content="Morbizz" />
      <meta name="description" content="Morbizz" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <!-- FavIcon CSS -->
      <link rel="icon" href="{{ asset('frontend') }}/assets/images/favicon2.png" type="image/gif" sizes="16x16">
      <!--Bootstrap CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
      <!--Google Fonts CSS-->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
      <!--Font Awesome Icon CSS-->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css">
      <!-- Slick Slider CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/slick-theme.css">
      <!-- Wow Animation CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/animate.min.css">
      <!-- Magnific Popup CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/magnific-popup.min.css">
      <!-- Main Style CSS  -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/assets/css/style.css">
   </head>
   <body>
      <!-- Loder Start -->
      <div class="loader-box-two">
         <div class="dank-ass-loader">
            <div class="load-shap">
               <div class="arrow-two up outer outer-18"></div>
               <div class="arrow-two down outer outer-17"></div>
               <div class="arrow-two up outer outer-16"></div>
               <div class="arrow-two down outer outer-15"></div>
               <div class="arrow-two up outer outer-14"></div>
            </div>
            <div class="load-shap">
               <div class="arrow-two up outer outer-1"></div>
               <div class="arrow-two down outer outer-2"></div>
               <div class="arrow-two up inner inner-6"></div>
               <div class="arrow-two down inner inner-5"></div>
               <div class="arrow-two up inner inner-4"></div>
               <div class="arrow-two down outer outer-13"></div>
               <div class="arrow-two up outer outer-12"></div>
            </div>
            <div class="load-shap">
               <div class="arrow-two down outer outer-3"></div>
               <div class="arrow-two up outer outer-4"></div>
               <div class="arrow-two down inner inner-1"></div>
               <div class="arrow-two up inner inner-2"></div>
               <div class="arrow-two down inner inner-3"></div>
               <div class="arrow-two up outer outer-11"></div>
               <div class="arrow-two down outer outer-10"></div>
            </div>
            <div class="load-shap">
               <div class="arrow-two down outer outer-5"></div>
               <div class="arrow-two up outer outer-6"></div>
               <div class="arrow-two down outer outer-7"></div>
               <div class="arrow-two up outer outer-8"></div>
               <div class="arrow-two down outer outer-9"></div>
            </div>
            <p class="loader__label-one">Loading...</p>
         </div>
      </div>
      <!-- Loder End -->
      <!-- Header Start -->
      @include('frontend.common.header')
      <!-- Header End -->
      @yield('content')
      <!--Footer Start-->
      @include('frontend.common.footer')
      <!--Footer End-->
      <!--Back To Top Start-->
      <div class="progress-wrap active-progress">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 273.171;"></path>
         </svg>
      </div>
      <!--Back To Top End-->
      <!-- Jquery JS Link -->
      <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
      <!-- Bootstrap JS Link -->
      <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
      <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
      <!-- Custom JS Link -->
      <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>
      <!-- Slick Slider JS Link -->
      <script src="{{ asset('frontend') }}/assets/js/slick.min.js"></script>
      <!-- Wow Animation JS -->
      <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
      <!-- Bg Moving Js -->
      <script src="{{ asset('frontend') }}/assets/js/bg-moving.js"></script>
      <!--Scroll Counter Js-->
      <script src="{{ asset('frontend') }}/assets/js/custom-scroll-count.js"></script>
      <!--Back To Top JS-->
      <script src="{{ asset('frontend') }}/assets/js/back-to-top.js"></script>
   </body>
   <!-- Mirrored from shivaaythemes.in/morbizz-demo/index-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Aug 2024 12:20:42 GMT -->
</html>