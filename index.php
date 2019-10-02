<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("connect.php");
require_once("function-new.php");
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$thisPagename = array_pop($uriSegments);
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
      makeNav($conn);
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