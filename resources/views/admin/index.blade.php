<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.css')}}">


    <title>Admin panel</title>

</head>
<body>
@include('admin/partials/header')

<div class="row">
    <div class="center-block col-md-4" style="float: none; font-size: 19px;font-weight: bold;">
        File downloaded: {{ $downloadsQnt }} times
        </div>
</div>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
