<!DOCTYPE html>
<html lang="en">
<head>

    {{-- META DATA--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TITLE --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- STYLES -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">


    {{-- CSS-CDN --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <script>
           window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">

    {{-- NAVIGATION --}}
    @include('partials.admin-navigation')

    {{-- CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    @include('partials.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
