
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="HandheldFriendly" content="true">
<title>Photo Maker</title>
@yield('style')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="icon" type="image/png" href="{{asset('assets/images/icon.png')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/owl-carousel/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
@if (app()->getLocale()=='ar')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-ar.css')}}">

@else
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-en.css')}}">

@endif


