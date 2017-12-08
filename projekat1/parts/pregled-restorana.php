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
    <h1>Pregled restorana</h1>
    <br>
    <div>
        <table border="1">
            <thead>
            <tr>
                <th>Redni broj</th>
                <th>Ime</th>
                <th>Adresa</th>
                <th>Region</th>
                <th>Telefon</th>
                <th>Kapacitet</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <?php
            require_once __DIR__ . '/baza/DB.php';
            $db = new \Baza\DB();
            $i=1;
            $restorani = $db->fetchAll("SELECT * FROM restoran;");
            foreach ($restorani as $restoran)
            {
                echo "<tr>\n";
                echo " <td>$i</td>\n";
                echo " <td>{$restoran['restoran_ime']}</td>\n";
                echo " <td>{$restoran['restoran_adresa']}</td>\n";
                echo " <td>{$restoran['restoran_region']}</td>\n";
                echo " <td>{$restoran['restoran_tel']}</td>\n";
                echo " <td>{$restoran['ukupan_broj_gostiju']}</td>\n";
                echo " <td><a href='info.php?restoran_id={$restoran['id']}' id='dugme'>Rezervacije</a></td>\n";
                echo " <td><a href='izmeni-restoran.php?id={$restoran['id']}' id='dugme'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>\n";
              $i++;  
            }
            
            ?>
        </table>
    </div>
    <br>
    <a href="../admin/index.php" id="dugme1">Nazad</a>
    <a href="restorani.php" id="dugme2">Dodaj restoran</a>
</div>
<br>
      <?php
        }
      ?>
       <!-- Bootstrap JavaScript -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!-- Bx Slider JS -->
    <script src="../js/jquery.bxslider.min.js"></script>

    <!-- Add JS counter lib -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>

    <!-- Add wow js lib -->
    <script src="../js/wow.min.js"></script>

    <!-- Custom Js -->
    <script src="../js/custom.js"></script>
    <script src="../js/input.js"></script>
</body>
</html>



