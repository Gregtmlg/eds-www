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


<hr >



<nav>
    <table border="0" style="width: 100%; padding: 10px; background-color: rgb(1, 1, 78);  " >
        <tr>
            <td style="text-align: center; " ><a href="index.php?page=pha">Surface</a></td>

            <td style="text-align: center; "><a href="index.php?page=sous_marine">Sous-Marine</a></td>

            <td style="text-align: center; "><a href="index.php?page=aero_navale">Force Aéro-Navale</a></td>

            <td style="text-align: center; "><a href="index.php?page=boutique">Boutique</a></td>
            
           
        </tr>
    </table>

   
<nav>

<hr>
<br>

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