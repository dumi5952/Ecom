<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Master Page')</title>


    <link href="{{asset('frontEnd/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/css/style.min.css')}}"  rel="stylesheet">

    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{asset('frontEnd/main css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/main css/style.css')}}"> --}}


    <!--[if lt IE 9]>-->
    <script src="{{asset('frontEnd/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontEnd/js/respond.min.js')}}"></script>
    <!--[endif]-->
    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head><!--/head-->

<body>

    <section class="header">

        @include('frontEnd.layouts.header')

    </section>
<main>
    <div class="row">


        {{-- @include('frontEnd.layouts.banner') --}}
        @include('frontEnd.layouts.slider')

        </div>

        @yield('content')
</main>


    @include('frontEnd.layouts.footer')

<!-- JS here -->

		{{-- <!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('frontEnd/main js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('frontEnd/main js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('frontEnd/main js/popper.min.js')}}"></script>
        <script src="{{asset('frontEnd/main js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('frontEnd/main js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('frontEnd/main js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontEnd/main js/slick.min.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('frontEnd/main js/wow.min.js')}}"></script>
		<script src="{{asset('frontEnd/main js/animated.headline.js')}}"></script>
        <script src="{{asset('frontEnd/main js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{asset('frontEnd/main js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('frontEnd/main js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('frontEnd/main js/jquery.sticky.js"')}}"></script>

        <!-- contact js -->
        <script src="{{asset('frontEnd/main js/contact.js')}}"></script>
        <script src="{{asset('frontEnd/main js/jquery.form.js')}}"></script>
        <script src="{{asset('frontEnd/main js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('frontEnd/main js/mail-script.js')}}"></script>
        <script src="{{asset('frontEnd/main js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('frontEnd/main js/plugins.js')}}"></script>
        {{-- <script src="{{asset('frontEnd/main js/main.js')}}"></script> --}}

 <script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="{{asset('frontEnd/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontEnd/js/price-range.js')}}"></script>
<script src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontEnd/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>

<script>
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();

    // Setup thumbnails example
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

    $('.thumbnails').on('click', 'a', function(e) {
        var $this = $(this);

        e.preventDefault();

        // Use EasyZoom's `swap` method
        api1.swap($this.data('standard'), $this.attr('href'));
    });

    // Setup toggles example
    var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

    $('.toggle').on('click', function() {
        var $this = $(this);

        if ($this.data("active") === true) {
            $this.text("Switch on").data("active", false);
            api2.teardown();
        } else {
            $this.text("Switch off").data("active", true);
            api2._init();
        }
    });
</script>
</body>
</html>
