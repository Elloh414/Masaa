<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iconfont.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iconmoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/print.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.min.css')}}">
    
</head>
<body>

@yield('preloader')
<!-- Import the header -->
@include('includes.header')

@yield('home-area')
@yield('feature-area')
@yield('about-area')
@yield('video-area')
@yield('why-chose-area')
@yield('product-area')
@yield('newsletter-area')
@yield('faq-area')
@yield('testimonials')
@yield('contact-area')

@include('includes.footer')




<!-- JAVASCRIPT -->
    <!--jQuery js-->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!--proper js-->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--bootstrap js-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--magnic popup js-->
    <script src="{{asset('js/magnific-popup.min.js')}}"></script>
    <!--owl carousel js-->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!--scrollIt js-->
    <script src="{{asset('js/scrollIt.min.js')}}"></script>
    <!--validator js-->
    <script src="{{asset('js/validator.min.js')}}"></script>
    <!--contact js-->
    <script src="{{asset('js/contact.js')}}"></script>
    <!--main js-->
    <script src="{{asset('js/custom.js')}}"></script>
<!-- END OF JAVASCRIPT -->
</body>
</html>