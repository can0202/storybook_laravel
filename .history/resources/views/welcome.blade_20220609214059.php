<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Laravel</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   <!-- Styles -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
   <div class="container">
      <!-- Header -->
      <header>
         <!-- Header Top -->
         <div class="header-top d-flex align-items-center justify-content-between">
            <div class="logo">
               <a href="#">
                  <h1 title="Story Book">Story <span>Book</span></h1>
               </a>
            </div>
            <nav class="nav-menus">
               <ul class="list-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Type Story</a></li>
                  <li><a href="#">Contact Us</a></li>
               </ul>
            </nav>
         </div>
         <!-- Header Bottom -->
         <div class="header-bottom">
            <div class="row align-items-center">
               <div class="col-lg-7">
                  <form action="" class="form-search position-relative d-flex w-100 ">
                     <input type="search" class="search rounded-pill w-100" name="s" placeholder="Search story, author, ...">
                     <button class="btn btn-success rounded-pill"><span>Search</span></button>
                  </form>
               </div>
               <div class="col-lg-5 text-right">
                  <div class="head-social">
                     <ul>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                        <li><a href="#"><i class="ion-social-skype"></i></a></li>
                        <li><a href="#"><i class="ion-social-whatsapp"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
   </div>
   <main class="main">
      <!-- banner -->
      <!-- Swiper -->
      <div class="swiper mySwiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </main>
   <footer class="pt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="logo text-center mb-3">
                  <a href="#">
                     <h1>Story <span>Book</span></h1>
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <h2>Infomation</h2>
               <ul class="list-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Type story</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </div>
            <div class="col-lg-4">
               <h2>Extras</h2>
               <ul class="list-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Type story</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </div>
            <div class="col-lg-4">
               <h2>Read More</h2>
               <ul class="list-menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Type story</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>

   <!-- Toggle Switch Theme -->
   <div class="theme-switch-wrapper" title="Theme Mode">
      <label class="theme-switch" for="checkbox">
         <input type="checkbox" id="checkbox">
         <div class="slider round"></div>
      </label>
   </div>

   <script src="{{asset('vendor/jquery/jquery.min.js')}}" defer></script>
   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>