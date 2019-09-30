<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
    <form action="check_login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="password1">Password</label>
        <input type="text" name="password">
        <br>
        <input type="submit" value="login">
    </form>
</body>
</html>