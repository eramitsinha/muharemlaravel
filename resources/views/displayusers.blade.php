<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Display Users</h1>
    <table border="2" cellpadding="10" width="100%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($data as $k)
        <tr>
            <td>{{$k->name}}</td>
            <td>{{$k->email}}</td>
            <td>{{$k->phone}}</td>
            <td>
                <a href="deleteuser/{{$k->id}}">Delete</a>
                <!--<a href=" deleteuser.php?id='id'"> Delete</a> -->
            </td>
            <td>
            <a href="edituser/{{$k->id}}">Edit</a>
                <!--<a href=" edituser.php?id='id'"> Edit</a> -->
            </td>
        </tr>

        @endforeach
        
    </table>
</body>
</html>