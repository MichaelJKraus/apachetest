<?php
require_once('nav.php');
require_once('content.php');
require_once('functions.php');
$loggedin = True;
$firstName = $_POST["firstname"] ?? "Friend";
$lastName = $_POST["lastname"] ?? "of mine.";
$eMailAddress = $_POST["emailaddress"] ?? "Where should I send you an email?";
// $lastName = $_POST["lastname"];
?>
<html>
<head></head>
  <body>
    <nav>
    <?php makeNav($myNav, $loggedin); 
    ?>
    </nav>
    <section>
      <div>
        <?php makeContent($myContent,0);
        echo 'Hello ' . $firstName . ' ' . $lastName . ' ' . $eMailAddress;
        ?>
      </div>
    </section>
    <form class="" action="contact.php" method="post">
    <p> First Name: <input type="text" name="firstname" value=""></p>
    <p> Last Name: <input type="text" name="lastname" value=""></p>
    <p> eMail: <input type="email" name="emailaddress" value=""></p>
    <input type="submit" name="" value="Submit">
    </form>
  </body>
</html>
