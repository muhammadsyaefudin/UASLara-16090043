<!DOCTYPE html>
<html lang="en">

@include('frontend.partials._head')

<body>

@include('frontend.partials._header')

@include('frontend.partials._slide')

@yield('content')


@include('frontend.partials._footer')

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- Back to top -->

<!-- jQuery Plugins -->
<!-- jQuery Plugins -->
<script src="{{asset('assets-user/js/jquery.min.js')}}"></script>
<script src="{{asset('assets-user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets-user/js/main.js')}}"></script>

</body>
</html>
