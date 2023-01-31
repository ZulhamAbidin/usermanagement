<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
</head>
<body class="py-5">

    {{-- Menu Mobile --}}
    @include('komponen.mobilemenu')
   

    <div class="flex mt-[4.7rem] md:mt-0">
        
        {{-- Menu Non Mobile --}}
        @include('komponen.sidenav')
      
        <div class="content">
           
            @yield('main')
            
        </div>

    </div>
  
    <script src="{{ asset('dist/js/app.js') }}"></script>
</body>
</html>