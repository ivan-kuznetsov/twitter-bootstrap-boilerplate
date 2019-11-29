<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- styles -->
    <link rel="stylesheet" href="assets/build/css/main.css">
    <!-- /styles -->

    <title>{{ $page->siteTitle }}</title>

</head>

<body>

    @include('_partials.header')

    @yield('content')

    @include('_partials.footer')


    <!-- js -->
    <script src="assets/build/js/main.js"></script>
    <!-- /js -->

</body>

</html>