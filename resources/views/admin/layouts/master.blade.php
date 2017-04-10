<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row" id="admin">
            @include('admin.partials.aside')
         <div class="container-fluid">
            <div class="side-body">
                @include("flash::message")
               @include("admin.partials.errors")
                @yield('content')
            </div>
        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
