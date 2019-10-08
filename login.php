<?php
session_start();
require_once('connect.php');

if (!empty($_POST)){
    //If not logged in then check if login was submitted
    $sql = "SELECT username, password, realname FROM test.users";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($_POST["username"] == $row["username"] && md5($_POST["password"]) == $row["password"])

        {
        $_SESSION["loggedin"] = "logged in";
        $_SESSION["realname"] = $row["realname"];
        $loggedIn = $_SESSION["loggedin"];
        }
     } else {
         echo "Username or Password is incorrect. Please try again";
        $loggedIn = $_SESSION["loggedin"] ?? "not logged in";
    }

if ($loggedIn == "logged in") {
    // if logged in redirect to index
    header("Location: http://192.168.33.10/index");
} else {
    // if not logged in show login

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
        <h2>Welcome to the login page</h2>
        <form action="login.php" method="post">
            Username: <input type="text" name="username"> </br>
            Password: <input type="password" name="password"> </br>
        <input type="submit" value="Submit Login">
    </body>
</html>
<?php }