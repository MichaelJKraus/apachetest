<?php
function makeNav($conn, $loggedIn){
    $sql = "SELECT pagename, pagetitle FROM test.navigation";
    $result = $conn->query($sql);
    echo "<ul>";
    while ( $row = $result->fetch_assoc() ) {
        echo "<li><a href='" . $row['pagename'] . "'>" .$row['pagetitle']. "</a></li>";
    }
    if ($loggedIn == "YOU ARE NOT LOGGED IN") {
        echo "<li><a href='login.php'>Log In</a></li>";
    }
        echo "</ul>";
} // End of makeNav function

function makeContent($conn, $thisPagename) {
        /* This  creates content from the content table based on the supplied $thisPagename variable
        It will loop through the all matching  content records and export them individually */
        $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()){
            echo "<p>" . $row['contenttitle'];
            echo "<p>" . $row['content'];
        }
    }   // End of makeContent

    function makeTitle($conn, $thisPagename){
        /* This will echo out the current page title fro  the content
        table based on the page name in $thisPagename */
        $sql = "SELECT * FROM test.content WHERE pagename = '$thisPagename'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['pagename'];
    }
    // End of makeTitle