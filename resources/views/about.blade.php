<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
    </nav>
    <div id="heading" class="text-center">
        <h4>My name is {{ $name . ' ' . $surname }} and I am a {{ $job }}</h4>
        <p>My interests are:</p>
        @foreach ($interests as $interest)
            <p>{{ $interest }}</p>
        @endforeach
    </div>
</body>

</html>
