<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Kamu saat ini berada di : {{ $lokasi }} </h1>
    <a href="/profile">profile</a>
    <a href="{{ route('halaman-profile') }}">halaman profile</a>
</body>
</html>