<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Logging</title>
</head>
<style>
    body{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
</style>

<script src='https://www.google.com/recaptcha/api.js'></script>

<body>
    <h1>User Loging</h1>
    <form action=""  method="post">
        @csrf
       
        <label>Email</label>
        <input type="email" name="email">
        <br><br>
        <label>Password</label>
        <input type="password" name="password">
        <br><br>
        <div class="g-recaptcha" data-sitekey="6LeCS4QdAAAAALeyx7L5EfJd4ekmwMuRjyhnnoSW"></div>
        
        <input type="submit" value="Log in">
    </form>
</body>
</html>
