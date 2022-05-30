<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
</head>
<style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    table ,td, th{
        border: 1px solid black ;
    }

    table{
        width: 70%;
        margin: 0 auto;
        border-collapse: collapse;
        text-align: center;
    }
    table, h1{
        text-align: center;
    }
</style>
<body>
    <h1>Showing Users</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Pin</th>
            <th>City</th>
            <th>Phone</th>
        </tr>

        @foreach( $k as $z)

        <tr>
            <td>{{$z->name}}</td>
            <td>{{$z->email}}</td>
            <td>{{$z->pin}}</td>
            <td>{{$z->city}}</td>
            <td>{{$z->phone}}</td>
        </tr>

        @endforeach
    </table>
</body>
</html>


