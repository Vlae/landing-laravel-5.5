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

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Download date</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($downloads as $download)
        <tr>
            <th>{{$download->id}}</th>
            <td>{{date('d-m-Y h:m:s', $download->date)}}</td>
            <td>{{$download->name}}</td>
            <td>{{$download->email}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
</body>
</html>
