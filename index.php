<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="fr">

<head>
    <title>Livret de la flotte</title>
    <link href="css\site.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <?php 
    include 'header.php';
    ?>


<hr class="head_hr" style="height: 1px; background-color: rgb(255, 255, 255)">

<?php
    // function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    //     throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
    //     }
    //     set_error_handler("exception_error_handler");
?>

<?php 
    if(isset($_GET['page'])) {
        // if($_GET['page']=="contact") {
        //     include 'contact.php';
        // }
        // if($_GET['page']=="pha") {
        //     include 'pha.php';
        // }
        // if($_GET['page']=="action_page") {
        //     include 'action_page.php';
        // }

        try {
            if ((include  $_GET['page'] . ".php") !== 1)
            {
            throw new Exception("Include failed");
            }
        } 
        catch (Exception $e) {
            include 'error_page.php';
        }

        if(isset($_GET['bateau'])) {
            
        }
            
    } 
    else {
        include 'main.php';
    }
?>




    <?php 
    include 'footer.php';
    ?>
</body>
</html>