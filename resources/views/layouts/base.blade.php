<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('pageTitle')</title>
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

   @include('layouts.partials.header')

   @include('layouts.partials.footer')
   
   <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>