<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
</head>
<body>
    <h1>Register</h1>
    <form action="register_user.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>
        <label for="password1">Password</label>
        <input type="text" name="password1">
        <br>
        <label for="password2">Password again</label>
        <input type="text" name="password2">
        <br>
        <input type="submit" value="register">
    </form>
</body>
</html>