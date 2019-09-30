<?php

$loggedin = True;
$firstName = $_POST["firstname"] ?? "Friend";
$lastName = $_POST["lastname"] ?? "of mine.";
$eMailAddress = $_POST["emailaddress"] ?? "Where should I send you an email?";
// $lastName = $_POST["lastname"];
?>
    <form class="" action="contact.php" method="post">
    <p> First Name: <input type="text" name="firstname" value=""></p>
    <p> Last Name: <input type="text" name="lastname" value=""></p>
    <p> eMail: <input type="email" name="emailaddress" value=""></p>
    <input type="submit" name="" value="Submit">
    </form>