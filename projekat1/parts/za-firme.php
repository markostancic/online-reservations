<!DOCTYPE html>
<html lang="en">

<head>
    <title>Za firme</title>
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
                                <li><a href="za-firme.php" class="nav-item active">Za Firme</a></li>
                                <li><a href="restoran.php" class="nav-item">Restorani</a></li>
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
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="pf1">Organizujete korporativni event i pitate se kako da izaberete lokal i od tog lokala dobijete najbolju novčanu ponudu? Ah, kad bi samo neko to radio umesto vas… Ali to bi mnogo koštalo, zar ne? Pa, zapravo, ne. Mi sve to radimo potpuno besplatno.</p>

                    <p class="pf1">Naravno, mi ćemo vam pomoći da vidite da li je prostor koji tražite dostupan u periodu kada vam je potreban, ali vas i posavetovati koji je lokal idealan za vaše potrebe. Zahvaljujući ugovorima koje imamo sa većinom restorana u gradu, ako rezervišete prostor preko nas, dobićete najjeftiniju moguću ponudu. Kasnije, mi vas spajamo sa ovlašćenom osobom iz lokala po vašem izboru sa kojom ćete se dogovoriti o ostalim detaljima.</p>

                    <p class="pf1">Za sve proslave, konferencije i ostale event-ove vaše firme, tu smo mi da vam pomogne.</p>

                    <p id="pf2">062 780 100 || rezervisi.rs</p>
                </div>
            </div>
            <?php
            require_once __DIR__ . '/reklama1.php';  
        ?>

    </div>

    <?php
        require_once __DIR__ . '/footer.php';  
    ?>
</body>

</html>