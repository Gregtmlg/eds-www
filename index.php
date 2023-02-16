<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <link href="css\site.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <?php 
    include 'header.php';
    ?>


<hr class="head_hr" style="height: 1px; background-color: rgb(255, 255, 255)">

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
        include $_GET['page'].'.php';        
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