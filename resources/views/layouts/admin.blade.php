<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title','后盾人')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    @stack('styles')
</head>

<body>
<div class="system">
    @include('layouts.admin.header')

    <div class="d-sm-block d-none">
        @include('layouts.admin.quick-menu')
    </div>

    <div class="bg-white rounded shadow m-3 p-3 {{route_class()}}" id="app">
        @include('layouts.message')
        @yield('content')
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
        <span>解放人，人人做解放！</span>
        <span>Copyright © 2010-2020 www.faw4s.com</span>
    </div>
</div>
@stack('scripts')
<script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
