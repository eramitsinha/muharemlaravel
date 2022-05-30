<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Users</h1>
    <form action="updateuser" method="post">
        @csrf

        @foreach($data as $k)
        Name: <input type="text" name="n1" value="{{$k->name}}">

        <br><br>

        Email: <input type="email" name="e1" value="{{$k->email}}">

        <br><br>

        Phone: <input type="text" name="p1" value="{{$k->phone}}">

        <br><br>

        User ID : <input type="text" name="" value="{{$k->id}}">

        <br><br>
        @endforeach
        <input type="submit" value="Update">

    </form>
</body>
</html>