<?php
require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();

$greske = array();

if (isset($_POST['submit'])) {

    $ime = isset($_POST['ime']) ? $db->prepareString($_POST['ime']) : null;
    if (empty($ime)) {
        $greske[] = 'Ime je prazano';
    }
    $email = isset($_POST['email']) ? $db->prepareString($_POST['email']) : null;
    if (empty($email)) {
        $greske[] = 'Email je prazan';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email nije ispravan";
    }
    $naslov = isset($_POST['naslov']) ? $db->prepareString($_POST['naslov']) : null;
    if (empty($naslov)) {
        $greske[] = 'Polje za naslov je prazano';
    }
    $poruka = isset($_POST['poruka']) ? $db->prepareString($_POST['poruka']) : null;
    if (empty($poruka)) {
        $greske[] = 'Polje za poruku je prazano';
    }
    

    if (empty($greske)) {
        $sql = "INSERT INTO kontakt (ime, email, naslov, poruka) "
            ." VALUES ('{$ime}', '{$email}', '{$naslov}', '{$poruka}');";
        $res = $db->exec($sql);
        if (empty($res)) {
            var_dump('nije uspeo upis u bazu');
            die;
        }
        $info = "Uspesno ste poslali mail, odgovor ćete dobiti u najbržem roku, hvala.";
        $_POST = array();
    }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Kontakt</title>
        <?php
        require_once __DIR__ . '/header.php';  
    ?>

    </head>

    <body>
        <div class="container-fluid">
            <?php
            require_once __DIR__ . '/meni_klijent.php';  
        ?>
                <div class="col-md-6 col-md-offset-3">
                    <nav class="navbar">


                        <div class="container">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header" id="menu11">
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
                                    <li><a href="rezervacija.php" class="nav-item">Online Rezervacija</a></li>
                                    <li><a href="o-nama.php" class="nav-item">O nama</a></li>
                                    <li><a href="kontakt.php" class="nav-item active">Kontakt</a></li>
                                </ul>


                            </div>
                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="col-md-6" id="kontakt_info">
                                <h1 class="kontakt1">Kontakt informacije</h1>
                                <hr class="linija">
                                <h3 class="kontakt1">Telefon:</h3>
                                <p class="kontakt3">063/245968</p>
                                <h3 class="kontakt1">Email:</h3>
                                <p class="kontakt3"><a href="mailto:rezervacija@gmail.com" target="_top">rezervacija@gmail.com</a></p>
                            </div>
                            <div class="col-md-6" id="kontakt_forma">
                                <div id="greske">
                                    <?php
                                    if (!empty($greske)) {
                                        foreach ($greske as $greska) {
                                            echo $greska . '<br>';
                                        }
                                    }
                                    ?>
                                </div>
                                <form method="post" action="">
                                    <h1 class="kontakt1">Kontakt forma</h1>
                                    <hr class="linija">
                                    <p class="kontakt2">Vaše ime <span style="color:red;">*</span><br />
                                        <input type="text" name="ime" id="name" value="<?php echo isset($_POST['ime']) ? $_POST['ime'] : ''?>" size="40" aria-required="true" aria-invalid="false" /></p>
                                    <p class="kontakt2">Vaš e-mail <span style="color:red;">*</span><br />
                                        <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''?>" size="40" aria-required="true" aria-invalid="false" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"/> </p>
                                    <p class="kontakt2">Naslov poruke <span style="color:red;">*</span><br />
                                        <input type="text" name="naslov" id="subject" value="<?php echo isset($_POST['naslov']) ? $_POST['naslov'] : ''?>" size="40" aria-required="true" aria-invalid="false" /></p>
                                    <p class="kontakt2">Vaša poruka <span style="color:red;">*</span><br />
                                        <textarea name="poruka" id="message" value="<?php echo isset($_POST['poruka']) ? $_POST['poruka'] : ''?>" cols="40" rows="10" aria-required="true" aria-invalid="false"></textarea> </p>
                                    <input type="submit" name="submit" onclick="checkForm();" class="btn btn-md btn-default" id="kontakt" value="Pošaljite" />
                                    <p class="kontakt2"><span style="color:red;">*</span>
                                        <?php echo isset($info) ? $info : 'obavezno polje'?>
                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
        <?php
        require_once __DIR__ . '/footer.php';  
    ?>
    </body>

    </html>