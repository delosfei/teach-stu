<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,  initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title',site()['title'])</title>
    <link href="/modules/Edu/app.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/highlight.js/10.1.2/styles/color-brewer.min.css" rel="stylesheet">


</head>
<body class="front">
<div>
    @include('edu::layouts.header')
    <div class="container">
        @include('layouts.message')


    </div>
    @yield('content')

    @include('edu::layouts.footer')

</div>


@stack('scripts')
<script src="/modules/Edu/app.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>
</body>
</html>
