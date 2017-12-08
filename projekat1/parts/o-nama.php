<!DOCTYPE html>
<html lang="en">

<head>
    <title>O nama</title>
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
                                <li><a href="restoran.php" class="nav-item">Restorani</a></li>
                                <li><a href="rezervacija.php" class="nav-item">Online Rezervacija</a></li>
                                <li><a href="o-nama.php" class="nav-item active">O nama</a></li>
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
                    <p class="pf1">Naša agencija posluje u oblasti rezervacije mesta u restoranima na teritoriji grada Beograda.</p>
                    <p class="pf1">Osnovna ideja je pomoć kako turistima tako i našim sugrađanima da se informišu i pronađu restoran koji odgovara njihovim potrebama.</p>
                    <p class="pf1">Opis našeg posla je pružanje brzih i kvalitetnih informacija o objektima u ponudi.</p>
                    <p class="pf1">Verujemo da ste se više puta našli u situaciji da ne možete da se odlučite koji ćete restoran izabrati, ili Vam je u posetu došao prijatelj iz inostranstva pa želite da ima potpuni ugođaj.</p>
                    <p class="pf1">U zavisnosti od vaših potreba i želja, mi ćemo pronaći pravo mesto za Vas.</p>
                    <p class="pf1">Za sva pitanja obratite nam se putem maila ili telefona.</p>
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