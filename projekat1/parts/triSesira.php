<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restoran Tri Šešira</title>
    <?php
        require_once __DIR__ . '/header.php';  
    ?>
</head>
<body>
   <div class="container-fluid">
        <?php
            require_once __DIR__ . '/meni_klijent.php';  
            require_once __DIR__ . '/restorani_meni.php';  
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="../images/triSesira/sTriSesira.jpg" alt="" class="img img-response slika col-3-md"/> 
                    <br/>
                    <p class="restorani-info">Kontakt: 060 000 100</p>
                    <p class="restorani-info">English: +381 62 000 300</p>
                    <p class="restorani-info1">Radno vreme: Ponedeljak-Nedelja 10h - 01h</p>
                    <p class="restorani-info1">Adresa: Skadarska 29, 11000 Beograd</p>
                </div>
                <div class="col-md-6" id="mapa">
                    <div id="map" style="height:400px;width:500px;margin-left:70px;"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="o-restoranu">
                <h1>O restoranu</h1> 
                <hr id="restorani-hr">
                <div class="col-3-md" >
                    <p class="restorani-text">Tri Šešira" je pravi biser među restoranima Skadarlije. Sagrađen je u srcu Skadarske ulice i u prepoznatljivom ambijentu postoji više od 150 godina. Otvoren je 1864. u zgradi u kojoj se prethodno nalazila zanatska radionica, koja je kao logotip imala tri plehana šešira. Po tome je restoran i dobio naziv. </p>

                    <p class="restorani-text">Po svojoj usluzi i kvalitetu restoran je poznat i izvan granica naše zemlje. Imao je čast da ugosti najeminentnije domaće i svetske ličnosti: Kralja Huana Karlosa, Džorža Buša, Pertinija, Vili Branta i druge. Svedočanstva o prijatnom boravku u restoranu čuvaju se u knjizi gostiju. </p>
                    <p class="restorani-text">
                    "Tri Šešira" - bogatstvo tradicije, umetnosti i boemskog života. Ovde su uživali i dane provodili Tin Ujević, Branislav Nušić, Gustav Krklec, Čiča Ilija Stanojević, Raka Drainac, a najznamenitiji stanovnik Skadarske ulice - Đura Jakšić ga je često nazivao "vinsko vrelo".
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="column">
                        <img src="../images/triSesira/triSesira1.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira2.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira3.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira4.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="../images/triSesira/triSesira5.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira6.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira7.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/triSesira/triSesira8.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="../images/triSesira/triSesira1.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="../images/triSesira/triSesira2.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="../images/triSesira/triSesira3.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="../images/triSesira/triSesira4.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="../images/triSesira/triSesira5.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="../images/triSesira/triSesira6.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="../images/triSesira/triSesira7.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="../images/triSesira/triSesira8.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira1.jpg" alt="" onclick="currentSlide(1)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira2.jpg" alt="" onclick="currentSlide(2)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira3.jpg" alt="" onclick="currentSlide(3)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira4.jpg" alt="" onclick="currentSlide(4)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira5.jpg" alt="" onclick="currentSlide(5)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira6.jpg" alt="" onclick="currentSlide(6)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira7.jpg" alt="" onclick="currentSlide(7)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/triSesira/triSesira8.jpg" alt="" onclick="currentSlide(8)" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require_once __DIR__ . '/reklama2.php';  
        ?>

    </div>
    <?php
        require_once __DIR__ . '/footer.php';  
    ?>
	<script src="../js/gallery.js"></script>
    <script src="../js/mapa.js"></script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJxHvzTNhNhhPp9JOzHKi3CNKfLN8D8MM&callback=initMap">
    </script>
</body>
</html>

