<?php
  if(isset($_POST['w3review']) and $_POST['w3review']!="  ") {
    echo '<div style="text-align: center; font-family: Impact, Haettenschweiler, sans-serif; font-weight: bold;">
        Merci ';echo  $_POST["fname"]; echo ' '; echo $_POST['lname']; echo' pour votre commentaire !
    </div>';
    echo '<br><br>';
  }
  if(isset($_POST['w3review']) and $_POST['w3review']=="  ") {
    echo '<div style="text-align: center; font-family: Impact, Haettenschweiler, \'Arial Narrow Bold\' , sans-serif; font-weight: bold;">
    Remplis tous les champs enculé !!!
</div>';
echo '<br><br>';
  }

?>

  <form action="index.php?page=contact" method="post" style="text-align: center;">
    <label for="fname">Prénom:</label>
    <input type="text" id="fname" name="fname"><br><br>
    
    <label for="lname">Nom:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <!-- <label for="lname">Password:</label>
    <input type="password" id="lname" name="pwd"><br><br> -->

    <label for="w3review">Commentaire:</label><br>
    <textarea id="w3review" name="w3review" rows="4" cols="50">  </textarea><br><br>

    <input type="submit" value="Submit"><br><br>

  </form>
