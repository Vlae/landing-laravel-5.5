<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tapmedia Test</title>

    <!-- Fonts -->
    <link href="{{asset('css/my.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
    <a href="/?banner=true"><img src="{{asset('images/banner.jpg')}}"> </a>
</body>
</html>
