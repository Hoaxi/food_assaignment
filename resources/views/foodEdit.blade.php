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
<div>
    <br>
    <form action="{{route('edit.food.now',$food->id)}}" method="POST" class="container">
        @csrf
        <input type="text" value="{{$food->name}}" name="name" class="form-control">
        <br>
        <input type="text" value="{{$food->price}}" name="price" class="form-control">
        <br>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
</body>

</html>
