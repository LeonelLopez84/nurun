<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{url('css/app.css')}}" rel="stylesheet">

    <link href="{{url('css/ionicons.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLES -->
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- FANCYBOX POPUP STYLES -->
    <link href="{{url('js/source/jquery.fancybox.css')}}" rel="stylesheet" />
    <!-- STYLES FOR VIEWPORT ANIMATION -->
    <link href="{{url('css/animations.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM CSS -->
    <link href="{{url('css/style-solid-black.css')}}" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body data-spy="scroll" data-target="#menu-section">
    <div id="front">
        @include('partials.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
<script src="{{url('js/app.js')}}"></script>

<script src="{{url('js/vegas/jquery.vegas.min.js')}}"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="{{url('js/jquery.easing.min.js')}}"></script>
<!-- FANCYBOX PLUGIN -->
<script src="{{url('js/source/jquery.fancybox.js')}}"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="{{url('js/jquery.isotope.js')}}"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="{{url('js/appear.min.js')}}"></script>

<script src="{{url('js/animations.min.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{url('js/custom-solid.js')}}"></script>
</body>
</html>
