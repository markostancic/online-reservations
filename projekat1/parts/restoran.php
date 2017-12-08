<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restorani</title>
    <?php
  require_once __DIR__ . '/header.php';  
?>

</head>

<body>
    <div class="container-fluid">
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
                                <li><a href="restoran.php" class="nav-item active">Restorani</a></li>
                                <li><a href="rezervacija.php" class="nav-item">Online Rezervacija</a></li>
                                <li><a href="o-nama.php" class="nav-item">O nama</a></li>
                                <li><a href="kontakt.php" class="nav-item">Kontakt</a></li>
                            </ul>


                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>

            <div class="col-md-8 col-md-offset-2" id="div-restoran">
                <div class="row">
                    <div class="col-md-3" id="reklama">
                        <a href="../parts/kalemegdanskaTerasa.php">
                        <img src="../images/terasa/sKalemegdanskaTerasa.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Kalemegdanska terasa</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/orasac.php">
                        <img src="../images/orasac/sOrasac.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Orašac</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/graficar.php">
                        <img src="../images/graficar/sGraficar.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Grafičar</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/serGilles.php">
                        <img src="../images/serGilles/sSerGilles.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Ser Gilles</h4>
                    </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a href="../parts/madera.php">
                        <img src="../images/madera/sMadera.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Madera</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/devetka.php">
                        <img src="../images/devetka/sDevetka.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Devetka</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/triSesira.php">
                        <img src="../images/triSesira/sTriSesira.jpg" alt="" class="slika">
                        <h4 class="text-restoran">Tri šešira</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/frans.php">
                        <img src="../images/frans/sFrans.png" alt="" class="slika">
                        <h4 class="text-restoran">Franš</h4>
                    </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <a href="../parts/durmitor.php">
                        <img src="../images/durmitor/sDurmitor.png" alt="" class="slika">
                        <h4 class="text-restoran">Durmitor</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/manufaktura.php">
                        <img src="../images/manufaktura/sMAnufaktura.png" alt="" class="slika">
                        <h4 class="text-restoran">Manufaktura</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/ambar.php">
                        <img src="../images/ambar/sAmbar.png" alt="" class="slika">
                        <h4 class="text-restoran">Ambar</h4>
                    </a>
                    </div>
                    <div class="col-md-3">
                        <a href="../parts/moltiBaci.php">
                        <img src="../images/moltiBaci/sMoltiBaci.png" alt="" class="slika">
                        <h4 class="text-restoran">Molti Baci</h4>
                    </a>
                    </div>
                </div>
            </div>

    </div>
    <?php
  require_once __DIR__ . '/footer.php';  
?>



</body>

</html>