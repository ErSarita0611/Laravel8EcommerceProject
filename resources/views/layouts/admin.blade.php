<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link rel="stylesheet" href="{{ admin/css/material-dashboard.css') }}">

</head>
<body>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
@include('layouts.inc.sidebar');
</aside>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layout.inc.adminnav');
    @yield('content');
    @include('layout.inc.adminfooter');
</main>

    <!-- script -->
    <script src="{{'admin/js/popper.min.js'}}" defer></script>
    <script src="{{'admin/js/bootstrap.min.js'}}" defer></script>
    <script src="{{'admin/js/perfect-scrollbar.min.js'}}" defer></script>
    <script src="{{'admin/js/smooth-scrollbar.min.js'}}" defer></script>
    <script src="{{'admin/js/chartjs.min.js'}}" defer></script>


    
</body>
</html>
