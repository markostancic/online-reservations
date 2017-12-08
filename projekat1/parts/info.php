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
  //poziv f-je meni u slucaju da je korisnik ulogovan

?>
<!DOCTYPE html>
<html>
<head>

	<title>Restorani</title>
	    <?php
        require_once __DIR__ . '/header.php';  
    ?>
        <link rel="stylesheet" type="text/css" href="../css/ispit.css">
</head>
<body>
<div class="restoran">
    <h1>Pregled rezervacija</h1>
    <br>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>Redni broj</th>
                <th>Restoran</th>
                <th>Datum i vreme</th>
                <th>Broj osoba</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Napomena</th>
                <th></th>

            </tr>
            </thead>
            <?php
            require_once __DIR__ . '/baza/DB.php';
            $db = new \Baza\DB();
            $restoran_id = isset($_GET['restoran_id']) ? intval($_GET['restoran_id']) : null;
            $restoran = $db->fetch("SELECT * FROM restoran WHERE id = {$restoran_id};"); 
            $rezervacije = $db->fetchAll("SELECT * FROM rezervacija WHERE restoran_id = {$restoran_id};");
            $i=1;
            foreach ($rezervacije as $rez)
            {
                   
                echo "<tr>\n";
                echo " <td>$i</td>\n";
                echo " <td>{$restoran['restoran_ime']}</td>\n";
                echo " <td>{$rez['datum']}</td>\n";
                echo " <td>{$rez['broj_osoba']}</td>\n";
                echo " <td>{$rez['rezervacija_ime']}</td>\n";
                echo " <td>{$rez['rezervacija_prezime']}</td>\n";
                echo " <td>{$rez['rezervacija_tel']}</td>\n";
                echo " <td>{$rez['rezervacija_email']}</td>\n";
                echo " <td>{$rez['napomena']}</td>\n";
                echo " <td><a href='db-ukloni-rezervaciju.php?id={$rez['id']}' id='dugme' onclick='if(!confirm(\"Da li ste sigurni?\"))return false;'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>\n";
                echo "</tr>\n";
                $i++;
            }
            
            ?>
        </table>
    </div>
    <br>
    <a href="pregled-rezervacija.php" id="dugme1">Nazad</a>
</div>
<br>
<?php
}
?>
</body>
</html>



