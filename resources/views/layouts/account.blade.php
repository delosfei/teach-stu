<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','后盾人')</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
<div class="account d-flex align-items-center" id="app">

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @include('layouts.message')
                @yield('content')

            </div>
        </div>
    </div>
</div>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
