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


$greske = array();

if (isset($_POST['submit'])) {
    $ime = isset($_POST['ime']) ? $db->prepareString($_POST['ime']) : null;
    if (empty($ime)) {
        $greske[] = 'Ime je prazano';
    }
    $adresa = isset($_POST['adresa']) ? $db->prepareString($_POST['adresa']) : null;
    if (empty($adresa)) {
        $greske[] = 'Adresa je prazana';
    }
    $region = isset($_POST['region']) ? $db->prepareString($_POST['region']) : null;
    if (empty($region)) {
        $greske[] = 'Region je prazan';
    }
    $telefon = isset($_POST['telefon']) ? $db->prepareString($_POST['telefon']) : null;
    if (empty($telefon)) {
        $greske[] = 'Telefon je prazan';
    }
    $ukupan_broj_gostiju = isset($_POST['ukupan_broj_gostiju']) ? $db->prepareString($_POST['ukupan_broj_gostiju']) : null;
    if (empty($ukupan_broj_gostiju)) {
        $greske[] = 'Broj gostiju je prazan';
    }
    if (!ctype_alpha($ime)) {
        $greske[] = 'Ime nije dobro';
    }
        if (!ctype_alpha($region)) {
        $greske[] = 'Region nije dobar';
    }
    if (!ctype_digit($telefon)) {
        $greske[] = 'Telefon nije dobar';
    }
    if (!ctype_digit($ukupan_broj_gostiju)) {
        $greske[] = 'Kapacitet nije dobar';
    }

    if (empty($greske)) {
        $sql = "INSERT INTO restoran (restoran_ime, restoran_adresa, restoran_region, restoran_tel, ukupan_broj_gostiju) "
            ." VALUES ('{$ime}', '{$adresa}', '{$region}', '{$telefon}', '{$ukupan_broj_gostiju}');";
        $res = $db->exec($sql);
        if (empty($res)) {
            var_dump('nije uspeo upis u bazu');
            die;
        }
        $info = "Uspesno ste dodali restoran!";
        $_POST = array();
        header("Location: pregled-restorana.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/ispit.css">
    <title>Restorani</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Dodavanje restorana</h1>
<div class="forma">
    <form action="restorani.php" method="post">
        <p>Ime <span style="color:red;">*</span><br>
            <span><input type="text" name="ime" value="<?php echo isset($_POST['ime']) ? $_POST['ime'] : ''?>" size="40"aria-required="true" aria-invalid="false"></span> </p>
        <p>Adresa <span style="color:red;">*</span><br>
            <span><input type="text" name="adresa" value="<?php echo isset($_POST['adresa']) ? $_POST['adresa'] : ''?>" size="40"aria-required="true" aria-invalid="false"></span> </p>
        <p>Region <span style="color:red;">*</span><br>
            <span><input type="text" name="region" value="<?php echo isset($_POST['region']) ? $_POST['region'] : ''?>" size="40" aria-required="true" aria-invalid="false"></span> </p>
        <p>Telefon <span style="color:red;">*</span><br>
            <span><input type="text" name="telefon" value="<?php echo isset($_POST['telefon']) ? $_POST['telefon'] : ''?>" size="40"></span> </p>
        <p>Kapacitet <span style="color:red;">*</span><br>
            <span><input type="number" min="0" name="ukupan_broj_gostiju" value="<?php echo isset($_POST['ukupan_broj_gostiju']) ? $_POST['ukupan_broj_gostiju'] : ''?>" size="40" aria-required="true" aria-invalid="false"></span> </p>
        <tr><input type="submit" name="submit" class="dugme2" value="Dodajte">
        <a href="../admin/index.php" class="dugme2">Nazad</a></tr>
        <p><span style="color:red;">*</span> <?php echo isset($info) ? $info : 'obavezno polje'?></p>
    </form>
    <div id="greske">
        <?php
        if (!empty($greske)) {
            foreach ($greske as $greska) {
                echo $greska . '<br>';
            }
        }
        ?>
    </div>
    
</div>
<?php
}
?>
</body>
</html>