<?php

session_start();
require_once 'login.php';
require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();

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



$id = $_GET['id'];

$upit = "DELETE FROM `rezervacija` WHERE id = {$id};";
$res = $db->exec($upit);
if (empty($res)) {
    var_dump('nije uspeolo brisanje iz baze');
    die;
}

header("Location: pregled-rezervacija.php");
}