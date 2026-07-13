<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Lassana Gedara Construction | Your Trusted Construction Company')</title>
    <meta name="description" content="@yield('meta_description', 'Lassana Gedara delivers professional construction, renovation, and design services for luxury & affordable residential, commercial, and industrial projects across Sri Lanka.')">
    <meta name="keywords" content="@yield('meta_keywords', 'lassana gedara, construction company, building services, general contractor, residential construction, commercial construction, industrial, renovation, sustainable building, green construction, project management, Gampaha, Sri Lanka, blueprint drafting, LEED, eco-friendly, house building')">
    
    
    <!-- Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{asset('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    </head>

    <body>

        <div class="page-wrapper">


            @include('components.header')

            @yield('content')

            @include('components.footer')    

        </div>
        
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
        <script src="{{asset('assets/js/jquery.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
        <script src="{{asset('assets/js/owl.js')}}"></script>
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('assets/js/wow.js')}}"></script>
        <script src="{{asset('assets/js/appear.js')}}"></script>
        <script src="{{asset('assets/js/mixitup.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <!-- Color Setting -->
        <script src="{{asset('assets/js/color-settings.js')}}"></script>

    </body>
</html>
