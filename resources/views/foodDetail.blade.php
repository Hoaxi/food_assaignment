<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Food List</h2>

    <div class="card bg-info text-white">
        <div class="card-body " style="padding: 0.5em!important;margin: 0.5em!important;">
            {{$food->name}}
            <p>{{$food->price}}</p>
            <a href="{{route('deletefood',$food->id)}}" class="btn btn-danger">Delete Food</a>
        </div>
    </div>
</div>


</body>
</html>
