<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flyer new</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    @include('partials.header')
    <div class="container">
        @yield('content')

        <hr>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</body>
</html>