<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
</style>
<body>
    <h1>Registartion Form</h1>
    <form action=""  method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <br><br>
        <label>Email</label>
        <input type="email" name="email">
        <br><br>
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <label>Pin</label>
        <input type="text" name="pin">
        <br><br>
        <label>City</label>
        <input type="text" name="city">
        <br><br>
        <label>Phone</label>
        <input type="text" name="phone">
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
