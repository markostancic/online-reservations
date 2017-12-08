<?php
require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();

$greske = array();
if (isset($_POST['submit'])) {

    $datum = isset($_POST['datum']) ? $db->prepareString($_POST['datum']) : null;
    if (empty($datum)) {
        $greske[] = 'Datum je prazan';
    }
    $_date = explode(' ', $datum);
    $date = DateTime::createFromFormat('d/m/Y', $_date[0]);
    $_datum = $date->format('Y-m-d');
    //$_vreme = $_date[1];

    $broj_osoba = isset($_POST['broj_osoba']) ? intval($_POST['broj_osoba']) : null;
    if (empty($broj_osoba)) {
        $greske[] = 'Broj osoba je prazano';
    }
    $ime = isset($_POST['ime']) ? $db->prepareString($_POST['ime']) : null;
    if (empty($ime)) {
        $greske[] = 'Ime je prazano';
    }
    $prezime = isset($_POST['prezime']) ? $db->prepareString($_POST['prezime']) : null;
    if (empty($prezime)) {
        $greske[] = 'Prezime je prazano';
    }
    $telefon = isset($_POST['telefon']) ? $db->prepareString($_POST['telefon']) : null;
    if (empty($telefon)) {
        $greske[] = 'Telefon je prazan';
    }
    $email = isset($_POST['email']) ? $db->prepareString($_POST['email']) : null;
    if (empty($email)) {
        $greske[] = 'Email je prazan';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email nije ispravan";
    }
    $napomena = isset($_POST['napomena']) ? $db->prepareString($_POST['napomena']) : null;

    $restoran_id = isset($_POST['restoran']) ? $db->prepareString($_POST['restoran']) : null;
    if (empty($restoran_id)) {
        $greske[] = 'Restoran je prazan';
    }

    $_restoran = $db->fetch("SELECT * FROM restoran WHERE id = {$restoran_id}");
    if (empty($_restoran)) {
        $greske[] = 'Restoran nije pronadjen';
    }

    $ukupan_broj_gostiju = $_restoran['ukupan_broj_gostiju'];
    
    $res = $db->fetch("SELECT SUM(broj_osoba) AS broj_gostiju FROM rezervacija WHERE restoran_id = {$restoran_id} AND datum = '{$_datum}';");
    $broj_gostiju = isset($res['broj_gostiju']) ? $res['broj_gostiju'] : 0;
    if (($broj_gostiju + $broj_osoba) > $ukupan_broj_gostiju) {
        $greske[] = 'Nema slobodnih mesta. Trenutno je ostalo ' . ($ukupan_broj_gostiju - ($broj_gostiju)) . ' slobonih mesta';
    }


    if (empty($greske)) {
        $sql = "INSERT INTO rezervacija (restoran_id, rezervacija_ime, rezervacija_prezime, rezervacija_tel, rezervacija_email, datum, broj_osoba, napomena) "
            ." VALUES ({$restoran_id}, '{$ime}', '{$prezime}', '{$telefon}', '{$email}', '{$_datum}', {$broj_osoba}, '{$napomena}');";
        $res = $db->exec($sql);
        if (empty($res)) {
            var_dump('nije uspeo upis u bazu');
            die;
        }
        $info = "Uspesno ste rezervisali mesto!";
        $_POST = array();
    }
}
$restorani= $db->fetchAll("SELECT * FROM restoran");
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Online Rezervacije</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="../css/animate.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">


        <!-- BX slider CSS -->
        <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">

        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    </head>

    <body>
        <?php
            require_once __DIR__ . '/meni_klijent.php';  
        ?>
            <div class="col-lg-6 col-lg-offset-3">
                <nav class="navbar">


                    <div class="container">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header" id="menu1">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="nav navbar-nav">
                                <li><a href="../index.php" class="nav-item">Pocetna</a></li>
                                <li><a href="za-firme.php" class="nav-item">Za Firme</a></li>
                                <li><a href="restoran.php" class="nav-item">Restorani</a></li>
                                <li><a href="rezervacija.php" class="nav-item active">Online Rezervacija</a></li>
                                <li><a href="o-nama.php" class="nav-item">O nama</a></li>
                                <li><a href="kontakt.php" class="nav-item">Kontakt</a></li>
                            </ul>


                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            <div class="col-md-6 col-md-offset-3 forma">
                <form name="" action="rezervacija.php" method="post">
                    <p>Objekat <span style="color:red;">*</span><br>
                        <span>
            <select name="restoran" id="objekat" aria-required="true" aria-invalid="false">
                <option value="">---</option>
                <?php
                foreach ($restorani as $restoran){
                    echo "<option value='{$restoran["id"]}'" . (isset($_POST['restoran']) && $_POST['restoran'] == $restoran["id"] ? 'selected="selected"' : '') . ">{$restoran["restoran_ime"]}</option>";
                }
                ?>
            </select>
        </span>
                    </p>
                    <p>Datum<span style="color:red;">*</span><br>
                        <div class='col-sm-12'>
                            <input type='text' class="form-control" id='datetimepicker' style="margin-bottom: 10px;" name="datum" />
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                var datum = '<?php echo isset($datum) ? $datum : date("d/m/Y", time()); ?>';
                                $('#datetimepicker').datetimepicker({
                                    sideBySide: true,
                                    date: datum,
                                    format: 'DD/MM/YYYY',
                                    minDate: new Date()
                                });
                            });
                        </script>
                        <p>Broj osoba <span style="color:red;">*</span><br>
                            <span><input type="number" min="0" name="broj_osoba" id="broj_osoba" value="<?php echo isset($_POST['broj_osoba']) ? $_POST['broj_osoba'] : ''?>" size="40" aria-required="true" aria-invalid="false"></span> </p>
                        <p>Ime <span style="color:red;">*</span><br>
                            <span><input type="text" name="ime" id="ime" value="<?php echo isset($_POST['ime']) ? $_POST['ime'] : ''?>" size="40"aria-required="true" aria-invalid="false"></span> </p>
                        <p>Prezime <span style="color:red;">*</span><br>
                            <span><input type="text" name="prezime" id="prezime" value="<?php echo isset($_POST['prezime']) ? $_POST['prezime'] : ''?>" size="40"aria-required="true" aria-invalid="false"></span> </p>
                        <p>Telefon <span style="color:red;">*</span><br>
                            <span><input type="number" name="telefon" id="telefon" value="<?php echo isset($_POST['telefon']) ? $_POST['telefon'] : ''?>" size="40" pattern="/^[0-9]$/"></span> </p>
                        <p>E-mail <span style="color:red;">*</span><br>
                            <span><input type="email" name="email" id="email2" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''?>" size="40" aria-required="true" aria-invalid="false" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"></span> </p>
                        <p>Napomena<br>
                            <span><textarea name="napomena" id="napomena" cols="40" rows="10" aria-invalid="false"><?php echo isset($_POST['napomena']) ? $_POST['napomena'] : ''?></textarea></span> </p>
                        <p><input type="submit" name="submit" class="btn btn-block btn-md btn-success" value="Rezervišite"></p>
                        <p><span style="color:red;">*</span>
                            <?php echo isset($info) ? $info : 'obavezno polje'?>
                        </p>
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


            <!-- Bx Slider JS -->
            <script src="../js/jquery.bxslider.min.js"></script>

            <!-- Add JS counter lib -->
            <script src="../js/jquery.waypoints.min.js"></script>
            <script src="../js/jquery.counterup.min.js"></script>

            <!-- Add wow js lib -->
            <script src="../js/wow.min.js"></script>

            <!-- Custom Js -->
            <script src="../js/input.js"></script>
    </body>

    </html>