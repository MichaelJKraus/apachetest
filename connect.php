<?php
// $loggedIn = "Not logged in";
$_SESSION["loggedin"] = "logged in";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creating variables
$servername = "localhost";
$username = "root";
$password = "secret";

// Create connection
$conn = new mysqli($servername,$username,$password);

// Check connection
if ($conn->connect_error) {
  die("No worky Jerky ".$conn->connect_error);
} else {
    $success = "It Worked ";
}
