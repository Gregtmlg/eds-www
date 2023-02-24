<nav>
    <table class="border0table" style="width: 100%; padding: 10px; background-color: rgb(1, 1, 78); font-family: Arial, Helvetica, sans-serif; font-weight: bold;" >
        <tr>
            <td style="text-align: center; " ><a class="head_nav" href="index.php?page=surface&bateau=pa">PA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=surface&bateau=pha">PHA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bcr">BCR</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=surface&bateau=fremm">FREMM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=fremm_da">FREMM-DA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=fasm">FASM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=fda">FDA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=faa">FAA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=flf">FLF</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=fs">FS</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=phm">PHM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=psp">PSP</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=pag">PAG</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=rpc">RPC</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=cmt">CMT</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=brs">BRS</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bbpd">BBPD</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=pp">PP</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bsam">BSAM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bsaom">BSAOM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bh">BH</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bho">BHO</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bem">BEM</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=be">BE</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=rias">RIAS</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=bsaa">BSAA</a></td>
            <td style="text-align: center; "><a class="head_nav" href="index.php?page=ve">VE</a></td>
           
        </tr>
    </table>
   
<nav>


<?php
if(isset($_GET['bateau'])) {

    
    $classe_bateau = strtoupper($_GET['bateau']);
    echo $classe_bateau;
    
    // paramètres de connexion à la BDD
    $server = "localhost";
    $bdd = "flotte_mn";
    $user = "root";
    $passwd  = "";

    // Connexion au serveur
    
    $sql_connexion = mysqli_connect($server, $user, $passwd) or die("erreur de connexion au serveur");

    mysqli_select_db($sql_connexion, $bdd) or die("erreur de connexion a la base de donnees");

    // Creation et envoi de la requete
    $query = "SELECT * FROM surfaces WHERE surfaces.Type='".$classe_bateau."' ORDER BY Code";
    $result = mysqli_query($sql_connexion, $query);

    // Recuperation des resultats
    echo '<table class="border2th" style="width: 800px; padding: 10px ; text-align: center">';
    echo '<tr><th class="border2th" style="text-align: center;">CODE</th><th class="border2th" style="text-align: center;">NOM</th><th class="border2th" style="text-align: center;">TYPE</th><th class="border2th" style="text-align: center;">PORT</th></tr>';

    while($row = mysqli_fetch_row($result)){

        $Code = $row[0];
        $Nom = $row[1];
        $Type = $row[2];
        $Port = $row[3];
        
        echo "<tr>\n
        <td class='border2th'>$Code</td>\n
        <td class='border2th'>$Nom</td>\n
        <td class='border2th'>$Type</td>\n
        <td class='border2th'>$Port</td>\n
        </tr>\n";
    
    

        }
    echo "</table>";
    }

?>