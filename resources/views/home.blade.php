<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body>
    <h1>{{ $msg }}</h1>
    <p>My name is <strong>{{ $name . ' ' . $surname }}</strong> and I am a {{ $job }}</p>
</body>
</html>