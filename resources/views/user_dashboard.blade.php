<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>welcome to Dashboard</h1>
    <h2>Your Logged in Email is: {{Auth::user()->email}}</h2>

    <a href="user_logout">Logout</a>
</body>
</html>