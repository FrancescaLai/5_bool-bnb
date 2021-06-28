<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- Favicon --}}
   <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">
   {{-- /Favicon --}}
   {{-- Google Font --}}
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   {{-- /Google Font --}}
   <title>@yield('pageTitle')</title>
   {{-- TomTom --}}
   <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js"></script>
   <link rel='stylesheet' type='text/css' href='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css'>
   {{-- /TomTom --}}
   <link rel="stylesheet" href="{{asset('css/glide.core.css')}}">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
   <div id="app" :class="isMenuActive == true ? '-menu-open' : ''">
      {{-- Header --}}
      @include('layouts.partials.header')
      {{-- /Header --}}
      
      {{-- Main --}}
      @yield('content')
      {{-- /Main --}}

      {{-- Footer --}}
      @include('layouts.partials.footer')
      {{-- /Footer --}}
   </div>
   {{-- Cursor --}}
   @yield('cursor')
   {{-- /Cursor --}}
   {{-- Script --}}
   @yield('script')
   {{-- Script --}}
</body>
</html>