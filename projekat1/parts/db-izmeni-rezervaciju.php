<?php

require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();

 $id = $_POST['id'];
$restoran_id = $_POST['restoran_id'];
$rezervacija_ime = $_POST['rezervacija_ime'];
$rezervacija_prezime = $_POST['rezervacija_prezime'];
$rezervacija_tel = $_POST['rezervacija_tel'];
$rezervacija_email = $_POST['rezervacija_email'];
$broj_osoba = $_POST['broj_osoba'];
$napomena = $_POST['napomena'];
$datum = $_POST['datum'];

$upit = "UPDATE rezervacija SET restoran_id = '{$restoran_id}', rezervacija_ime = '{$rezervacija_ime}', rezervacija_prezime = '{$rezervacija_prezime}', rezervacija_tel = '{$rezervacija_tel}', broj_osoba = '{$broj_osoba}', napomena = '{$napomena}',
datum = '{$datum}'  WHERE id = {$id};";
$res = $db->exec($upit);
if (empty($res)) {
    echo"<script>alert('Nije uspela izmena');</script>";
    echo"<script>window.location.href = 'pregled-rezervacija.php';</script>";

}



header("Location: pregled-rezervacija.php");



