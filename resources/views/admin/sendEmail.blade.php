<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap-datepicker.min.css')}}">

    <title>Send email</title>

</head>
<body>
@include('admin/partials/header')

<div class="col-md-12">
    <div style="max-width: 810px; margin: 0 auto;">
        <form action="/admin/email/send" method="post">
            <div class="form-group">
                <strong style="color:darkgrey">Available variable: {name}</strong>
                <br>
                <label>Email subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Subject">
                <br>
                <label>Email text</label>
                <textarea rows="5"  name="text" class="form-control"  placeholder="Your text"></textarea>
                <br>
                <input data-provide="datepicker" name="from_date" class="form-control"  placeholder="Date from">
                <br>
                <input data-provide="datepicker" name="end_date" class="form-control"  placeholder="End date">
                <br><br>
                {{ csrf_field() }}

                <input type="submit" class="btn btn-default">
            </div>
        </form>
    </div>
    @if (isset($sent))
        <div class="alert alert-success">
            Emails sent successfully.
        </div>
    @endif
</div>




<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/bootstrap-datepicker.min.js')}}"></script>
</body>
</html>
