<?php
session_start();

require_once("connect.php");
require_once("function-new.php");
$loggedIn = $_SESSION['loggedin'];

/* This pulls the text from after the first / in the url and sets it to an array */
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

/* This pulls the last item out of the uri array */
$thisPagename = array_pop($uriSegments);

// This sets the pagename if none is provided in the URL
if ($thisPagename == ""){
    $thisPagename = "index";
}
// $thisPagename = $_GET["page"] ?? "Home";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php ?></title>
</head>
  <body>
    <nav>
      <?php
      makeNav($conn, $loggedIn);
      echo "<p>" . $loggedIn . "</p>";
      ?>
    </nav>
    <section>
      <div>
        <?php
        makeContent($conn, $thisPagename);
        // echo ($thisPagename);
        // echo "test" . $thisPagename;

        // if ($thisPagename == 'CONTACT') {
        //   include(contact-form.php);
        // }
        ?>
      </div>
    </section>
  </body>
</html>