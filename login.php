<?php
session_start();
require_once('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Derpy Login</title>
</head>
<body>
    <h1>Login Page</h1>
    <p>Welcome to the login page</p>
    <form action="login.php" method="post">
        Username: <input type="text" name="username"> </br>
        Password: <input type="password" name="password"> </br>
        <input type="submit" value="Submit Login">
</body>
</html>