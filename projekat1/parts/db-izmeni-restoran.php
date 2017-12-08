<?php

require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();

 $id = $_POST['id'];

$restoran_ime = $_POST['restoran_ime'];
$restoran_adresa = $_POST['restoran_adresa'];
$restoran_region = $_POST['restoran_region'];
$restoran_tel = $_POST['restoran_tel'];
$ukupan_broj_gostiju = $_POST['ukupan_broj_gostiju'];

$upit = "UPDATE restoran SET restoran_ime = '{$restoran_ime}', restoran_adresa = '{$restoran_adresa}', restoran_region = '{$restoran_region}', restoran_tel = '{$restoran_tel}', ukupan_broj_gostiju = '{$ukupan_broj_gostiju}'  WHERE id = {$id};";
$res = $db->exec($upit);
if (empty($res)) {
    echo"<script>alert('Nije uspela izmena');</script>";
    echo"<script>window.location.href = 'pregled-restorana.php';</script>";

}



header("Location: pregled-restorana.php");



