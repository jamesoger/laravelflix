@props(['titre'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="https://use.typekit.net/mku0pvm.css">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">

</head>

<body>

    {{ $slot }}

</body>

</html>
