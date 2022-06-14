<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}" defer></script>
   <!-- Bootstrap core JavaScript-->

   <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>

   <!-- Core plugin JavaScript-->
   <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}" defer></script>

   <!-- Custom scripts for all pages-->
   <script src="{{asset('js/sb-admin-2.min.js')}}" defer></script>

   <!-- Fonts -->
   <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
   <div id="app">

      <main>
         @yield('content')
      </main>
   </div>
</body>

</html>