<?php
require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();



if(isset($_POST['query'])) {

  if(!empty($_POST['from'])) {
   $datum = $_POST['from'];




    $stmt=$db->fetchAll("SELECT * FROM rezervacija WHERE datum = '{$datum}';");



    $arr= array();
    foreach ($stmt as $row) {


      $id           = $row['id'];
      $datum        = $row['datum'];
      $broj_osoba   = $row['broj_osoba'];
      $ime          = $row['rezervacija_ime'];
      $prezime      = $row['rezervacija_prezime'];
      $tel          = $row['rezervacija_tel'];
      $email        = $row['rezervacija_email'];
      $napomena     = $row['napomena'];


      $arr2 = array($datum, $broj_osoba, $ime, $prezime, $tel, $email, $napomena, $id);
       array_push($arr, $arr2);
    }
    $json = json_encode($arr);
    echo $json;
    }
}