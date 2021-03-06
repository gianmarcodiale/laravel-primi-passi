<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<style>
    .text-center {
        text-align: center;
    }

    #site_nav a {
        text-decoration: none;
        color: cornflowerblue;
        padding: 1rem;
        font-size: 1.25rem;
    }
</style>

<body>
    <nav id="site_nav" class="text-center">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
    </nav>
    <div id="heading" class="text-center">
        <h1>{{ $msg }}</h1>
    </div>
</body>

</html>
