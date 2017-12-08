<?php
session_start();
require_once 'login.php';


if (!isset($_SESSION['id'])) {
    //echo $_SESSION['korisnik_id'];
    $_SESSION['id'] = 0;

}

checkLogout($db);
Login($db);


if ($_SESSION['id'] == 0) {
  //poziv f-je sa formom za logovanje
    loginScreen();

} else {



?>
<!DOCTYPE html>
<html>
<head>
  
	<title>Rezervaije</title>
	    <?php
        require_once __DIR__ . '/header.php';  
    ?>
      <link rel="stylesheet" type="text/css" href="../css/ispit.css">
</head>
<body>
<div class="restoran">
    <h1>Pregled dobijenih mailova</h1>
    <br>

    <div>
        <table id= "app_table" border="1">
            <thead>
            <tr>
                <th>Redni broj</th>
                <th>Ime</th>
                <th>Email</th>
                <th>Naslov</th>
                <th>Poruka</th>
                <th></th>


            </tr>
            </thead>
            <?php


            require_once __DIR__ . '/baza/DB.php';
            $db = new \Baza\DB();
            $kontakt = $db->fetchAll("SELECT * FROM kontakt;");
            $i=1;
            foreach ($kontakt as $rez)
            { 
                echo "<tr>\n";
                echo " <td>$i</td>\n";
                echo " <td>{$rez['ime']}</td>\n";
                echo " <td>{$rez['email']}</td>\n";
                echo " <td>{$rez['naslov']}</td>\n";
                echo " <td>{$rez['poruka']}</td>\n";
                echo " <td><a href='db-ukloni-mail.php?id={$rez['id']}' id='dugme' onclick='if(!confirm(\"Da li ste sigurni?\"))return false;'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>\n";
                echo "</tr>\n";
                $i++;
            }
            
            ?>
        </table>
    </div>
    <br>
    <a href="../admin/index.php" id="dugme1">Nazad</a>
</div>
<br>
</body>
</html>
<?php
  }  
?>



