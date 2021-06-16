<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{-- Google Font --}}
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   {{-- /Google Font --}}
   <title>@yield('pageTitle')</title>
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

   @include('layouts.partials.header')

   @include('layouts.partials.footer')
   
   @yield('script')
</body>
</html>