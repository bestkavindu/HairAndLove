<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="zuse.lk">
    <meta name="description" content="Hair and Love">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- head  -->
    @hasSection('head')
        @yield('head')
    @else
        <title>Hair and Love</title>
    @endif
    <!-- /.head -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- css  -->
    @include('layouts.css')
    <!-- /.css -->
</head>

<body>
    <!-- Header START -->
    @include('layouts.nav')
    <!-- Header END -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->

    <!-- Footer content -->
    @include('layouts.footer')
    <!-- /.Footer -->

    <!-- js  -->
    @include('layouts.js')
    <!-- /.js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
