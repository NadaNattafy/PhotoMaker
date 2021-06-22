<!DOCTYPE html>
<html lang="en">
<head>
  @include('website.layout.header')
</head>
<body>

<!--===============================
    NAV
===================================-->

@include('website.layout.navbar')

<!--===============================
    SLIDER
===================================-->

@include('website.layout.sidebar')

<div class="content-page">
    <div class="content">
        @yield('content')
    </div>

</div>

<!--===============================
    FOOTER
===================================-->
@include('website.layout.footer')

<!--===============================z
    SCRIPT
===================================-->

<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/owl-carousel/owl.carousel.min.js')}}"></script>
@stack('script')
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
