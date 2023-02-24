<?php
  if((isset($_POST['commentaire']) and ($_POST['commentaire']!="  " or $_POST['commentaire']!=""))) {
    echo '<div style="text-align: center; font-family: Impact, Haettenschweiler, sans-serif; font-weight: bold;">
        Merci ';echo  $_POST["fname"]; echo ' '; echo $_POST['lname']; echo' pour votre commentaire !
    </div>';
    echo '<br><br>';

    // paramètres de connexion à la BDD
    $server = "localhost";
    $bdd = "bdd_flotte";
    $user = "root";
    $passwd  = "";

    // Connexion au serveur
    $sql_connexion = mysqli_connect($server, $user, $passwd) or die("erreur de connexion au serveur");
    mysqli_select_db($sql_connexion, $bdd) or die("erreur de connexion a la base de donnees");

    // Creation et envoi de la requete
    $query = "INSERT into f_contact (c_prenom, c_nom, c_email, c_commentaire) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['commentaire']."')";
    mysqli_query($sql_connexion, $query);

    
    mysqli_close($sql_connexion);
    unset($_POST);
  }
?>


<br>

  <form action="index.php?page=contact" method="post" style="text-align: center;">
    <label for="fname">Prénom:</label>
    <input type="text" id="fname" name="fname"><br><br>
    
    <label for="lname">Nom:</label>
    <input type="text" id="lname" name="lname"><br><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br><br>

    <label for="commentaire">Commentaire:</label><br>
    <textarea id="commentaire" name="commentaire" rows="4" cols="50" required>  </textarea><br><br>

    <input type="submit" value="Submit"><br><br>

  </form>
