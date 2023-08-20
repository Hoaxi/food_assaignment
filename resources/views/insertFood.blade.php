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
    <h2>Insert Food </h2>
    {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\MainController@store','files'=>true]) !!}
    {{csrf_field()}}
        <div class="form-group">
            <label for="email">Food Name</label>
            <input type="text" name="food" class="form-control" placeholder="Enter Food" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Price:</label>
            <input type="text" name="price" class="form-control" placeholder="Enter Price" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    {!! Form::close() !!}
</div>


</body>
</html>
