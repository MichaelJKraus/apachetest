<?php
session_start();
$loggedIn = $_SESSION['loggedin'];

if ($loggedIn == "logged in") {
    echo "Welcome to the Jungle. We've got fun and games, We've got everything you want, honey just say my name.";
} else {
    header("Location: http://192.168.33.10/index");
}

