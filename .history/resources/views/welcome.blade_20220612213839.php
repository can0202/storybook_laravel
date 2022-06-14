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
            <div class="menu pc">
                <!-- Header Top -->
                <div class="header-top d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <h1 title="Story Book">Story <span>Book</span></h1>
                        </a>
                    </div>
                    <nav class="nav-menus">
                        <ul class="list-menu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li>
                                <a href="#">Type Story</a>
                                <ul class="sub-menu">
                                    @foreach($category as $key => $value)
                                    <li><a href="{{url('danh-muc/'.$value->slug)}}">{{$value->title}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Bottom -->
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <form action="{{url('tim-kiem')}}" method="GET" class="form-search position-relative d-flex w-100 ">
                                <input type="search" class="search rounded-pill w-100" name="search" placeholder="Search story, author, ...">
                                <button class="btn btn-success rounded-pill" type="submit"><span>Search</span></button>
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
            </div>

            <!-- Mobile Menu -->
            <aside class="menu-mobile">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <h1 title="Story Book">Story <span>Book</span></h1>
                        </a>
                    </div>
                    <div class="icon-menu">
                        <div class="icon">
                            <i class="ion-navicon" id="icon-bar"></i>
                            <i class="ion-android-close" id="icon-close"></i>
                        </div>
                    </div>
                </div>
            </aside>
        </header>
    </div>
    <main class="main mt-5 mb-5">
        <div class="container">
            <!-- banner -->
            @yield('banner')
            <!-- Content Main -->
            @yield('content')
        </div>
    </main>

    <footer class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo text-center mb-3">
                        <a href="{{url('/')}}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 10,
            // loop: true,
            // autoplay: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                300: {
                    slidesPerView: 1.5
                },
                500: {
                    slidesPerView: 1
                },
                700: {
                    slidesPerView: 1.5
                },
                1024: {
                    slidesPerView: 4
                },
                1200: {
                    slidesPerView: 5
                }
            }
        });
    </script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=716605555442217&autoLogAppEvents=1" nonce="7GtW3zlL"></script>
</body>

</html>