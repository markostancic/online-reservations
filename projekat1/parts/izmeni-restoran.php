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
        <link rel="stylesheet" type="text/css" href="../css/ispit.css">
        <title>Izmeni restoran</title>
        <?php
        require_once __DIR__ . '/header.php';  
    ?>
    </head>

    <body>

        <?php
	require_once __DIR__ . '/baza/DB.php';
    $db = new \Baza\DB();
    
    $id = $_GET['id'];

    $restorani = $db->fetch("SELECT * FROM restoran WHERE id = {$id};");

?>
            <div class="forma">
                <h1>Izmena restorana</h1>
                <form action="db-izmeni-restoran.php" method="post">
                    Redni broj: <input readonly type="text" name="id" value="<?php echo $id; ?>"><br/> Ime: <input type="text" name="restoran_ime" value="<?php echo $restorani['restoran_ime']; ?>"><br/> Adresa: <input type="text" name="restoran_adresa" value="<?php echo $restorani['restoran_adresa']; ?>"><br/> Region: <input type="text" name="restoran_region" value="<?php echo $restorani['restoran_region']; ?>"><br/> Telefon: <input type="text" name="restoran_tel" value="<?php echo $restorani['restoran_tel']; ?>"><br/> Kapacitet: <input type="text" name="ukupan_broj_gostiju" value="<?php echo $restorani['ukupan_broj_gostiju']; ?>"><br/>

                    <input type="submit" value="Izmeni">
                    <a href="pregled-restorana.php" id="dugme2">Odustani</a>
                </form>
            </div>
            <?php
}
?>
    </body>

    </html>