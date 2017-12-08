<!DOCTYPE html>
<html lang="en">

<head>
    <title>Početna</title>

    <meta charset="utf-8">

    <meta name="description" content="početna">

    <meta name="keywords" content="web, design, html, css, html5, css3, javascript, jquery, bootstrap, development">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500italic,600italic,600,700,700italic,300italic,300,400,400italic,800,900' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600italic,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/gallery.css">

    <!-- BX slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="min-menu">
            <div class="col-md-6 col-sm-3">
                <p id="rez">Rezervacije: 062 780 100 || rezervisi.rs</p>
            </div>
            <div class="col-md-6 col-sm-3">
                <ul id="gornji-meni" class="menu">
                    <li id="meni2"><a href="parts/rezervacija.php">Online rezervacije</a></li>
                </ul>
            </div>
        </div>
        <div class="row" id="add-ons">
            <div class="row" id="icon-image">
                <div class="col-md-6 col-sm-3" id="jezik">
                    <a href="#" style="cursor:default"><img src="images/srbija.png" alt="" id="sr" class="img img-response" /></a>
                    <a href="#" style="cursor:default"><img src="images/english.png" alt="" id="en" class="img img-response" /></a>
                </div>
                <div class="col-md-6 col-sm-3" id="logo">
                    <a href="https://www.facebook.com/provod.u.gradu.rezervacije" target="_blank"><img src="images/fb.png" alt="" class="img img-response" id="fb"/></a>
                    <a href="#" target="_blank"><img src="images/instagram.png" alt="" class="img img-response" id="instagram" /></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p id="text6">Rezervacija mesta u najboljim restoranima i klubovima u vašem gradu potpuno besplatno!</p>
                </div>
            </div>
            <div class="row" id="pretraga">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <form action="/projekat/parts/search.php" method="get">
                        <input type="text" id="search" name="search" placeholder="Pretraga lokala..." />
                        <button id="submit" name="submit" value="Search" class="icon"><i class="glyphicon glyphicon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
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
                            <li><a href="index.php" class="nav-item active">Pocetna</a></li>
                            <li><a href="parts/za-firme.php" class="nav-item">Za Firme</a></li>
                            <li><a href="parts/restoran.php" class="nav-item ">Restorani</a></li>
                            <li><a href="parts/rezervacija.php" class="nav-item">Online Rezervacija</a></li>
                            <li><a href="parts/o-nama.php" class="nav-item">O nama</a></li>
                            <li><a href="parts/kontakt.php" class="nav-item">Kontakt</a></li>
                        </ul>


                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <div class="row" id="nedeljni-meni">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="text4">PREPORUKA NEDELJE</h3>
                <p class="text5">Pogledajte našu preporuku ove nedelje.</p>
                <div class="well" id="nedeljni">
                    <h4 id="text3">5 najboljih restorana</h4>
                    <hr id="meni-linija" />
                    <table>
                        <tr>
                            <td class="menu_text">Franš</td>
                            <td class="menu_br">1.</td>
                        </tr>
                        <tr>
                            <td class="menu_text">Molti Baci</td>
                            <td class="menu_br">2.</td>
                        </tr>
                        <tr>
                            <td class="menu_text">Kalemegdanska terasa</td>
                            <td class="menu_br">3.</td>
                        </tr>
                        <tr>
                            <td class="menu_text">Durmitor</td>
                            <td class="menu_br">4.</td>
                        </tr>
                        <tr>
                            <td class="menu_text">Tri Šešira</td>
                            <td class="menu_br">5.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-4 col-md-offset-4">
                <div class="well" id="slike_nedelje">
                    <h2>SLIKE <span id="col1">NEDELJE</span></h2>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="row">
                    <div class="column">
                        <img src="images/slika1.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika2.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika3.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika4.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-responsive hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="images/slika5.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika6.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika7.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-responsive hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="images/slika8.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-responsive hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="images/slika1.jpg" alt="" class="img img-responsive galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="images/slika2.jpg" alt class="img img-responsive galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="images/slika3.jpg" alt="" class="img img-responsive galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="images/slika4.jpg" alt="" class="img img-responsive galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="images/slika5.jpg" alt="" class="img img-responsive galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="images/slika6.jpg" alt="" class="img img-responsive galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="images/slika7.jpg" alt="" class="img img-responsive galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="images/slika8.jpg" alt="" class="img img-responsive galerija2" >
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika1.jpg" alt="" onclick="currentSlide(1)">
                        </div>

                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika2.jpg" alt="" onclick="currentSlide(2)">
                        </div>

                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika3.jpg" alt="" onclick="currentSlide(3)">
                        </div>

                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika4.jpg" alt="" onclick="currentSlide(4)">
                        </div>
                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika5.jpg" alt="" onclick="currentSlide(5)">
                        </div>
                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika6.jpg" alt="" onclick="currentSlide(6)">
                        </div>
                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika7.jpg" alt="" onclick="currentSlide(7)">
                        </div>
                        <div class="column">
                            <img class="img img-responsive demo galerija3" src="images/slika8.jpg" alt="" onclick="currentSlide(8)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require_once __DIR__ . '/parts/reklama.php';  
        ?>
            <div class="row" id="detaljnije">
                <div class="col-md-6 col-md-offset-3">
                    <h2 id="text1">PLANIRATE PROSLAVU?</h2>
                    <h4 id="text2">Organizujemo proslavu po Vašoj želji u restoranima.</h4>
                    <button class="btn btn-default btn-lg" id="btn-detaljnije"><a href="parts/za-firme.php" id="a-detaljnije">DETALJNIJE</a></button>
                </div>
            </div>
    </div>


    <!-- Bootstrap JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Bx Slider JS -->
    <script src="js/jquery.bxslider.min.js"></script>

    <!-- Add JS counter lib -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- Add wow js lib -->
    <script src="js/wow.min.js"></script>

    <!-- Custom Js -->
    <script src="js/gallery.js"></script>
    <script src="js/input.js"></script>
</body>

</html>