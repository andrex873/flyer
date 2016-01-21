<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flyer new</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascript" src="/js/libs.js"></script>
    @yield('scripts.footer')
    @include('partials.messages')
</body>
</html>