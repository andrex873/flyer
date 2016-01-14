<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flyer new</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">

</head>
<body>
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="/js/libs.js"></script>
    @include('partials.messages')
</body>
</html>