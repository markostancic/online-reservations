<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restoran Franš</title>
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
            <div class="row" >
                <div class="col-md-6">
                    <img src="../images/frans/sFrans.png" alt="" class="img img-response slika col-3-md"/> 
                    <br/>
                    <p class="restorani-info">Kontakt: 060 000 100</p>
                    <p class="restorani-info">English: +381 62 000 300</p>
                    <p class="restorani-info1">Radno vreme: Ponedeljak-Nedelja 10h - 00h</p>
                    <p class="restorani-info1">Adresa: Bulevar oslobođenja 18a, 11000 Beograd</p>
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
                    <p class="restorani-text">Franš, to je simbolički korzo Beograda, prvorazredno mesto društvenog života, to je mesto na kome se pokazuje nova garderoba, nova ljubav, sklapaju poslovi i slave rodjendani.</p> 
                    <p class="restorani-text">To su stepenice i raskošna bašta, to su lampe i topla atmosfera, to su paravani sa pampurima koji su označili onolika pomirenja i raskide, političke pobede, velike poslove i knjižice sa svim peticama.</p> 
                    <p class="restorani-text">Franš, to su naočari svih dioptrija za one koji ne vide dobro, to je ćebence da se ogrnemo u bašti kada duva, to su mentol bombone na izlasku i ruže za svaku damu, petkom i subotom. To su pokloni za one koji slave rodjendane i ljubazni konobari koji pevaju rodjendanske pesme, to su kišobrani u boji ako napolju pljušti, to su novine na poklon i Hulio, Eros, Aznavur, Nora Džons i lagani džez za ručak. To je četrdeset i pet vrsta salata i mala gurmanska pljeskavica, to su jelovnici za dame i jelovnici za gospodu, to su pohovane paprike punjene sirom, to su domaće njoke i najbolja vina, to su vruće lepinje iz sopstvene pekare i kolači iz domaće poslastičarnice.</p> 
                    <p class="restorani-text">To je mesto na koje se vraćaju i oni koji su otišli daleko, to su i legendarni konobari. To je onaj osećaj da ste uvek dobrodošli i da će za vas uvek biti stola.</p> 
                    <p class="restorani-text">Franš, to je romantika i isčekivanje, večernji sfumato i podnevna svetkovina, to je svih ovih godina bilo jedno od retkih mesta u Beogradu na koje su devojke mogle da izadju same, a da se uvek osećaju lagodno.</p>
                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="column">
                        <img src="../images/frans/frans1.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans2.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans3.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans4.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="../images/frans/frans5.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans6.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans7.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/frans/frans8.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="../images/frans/frans1.jpg" alt="" class="img img-response galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="../images/frans/frans2.jpg" alt="" class="img img-response galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="../images/frans/frans3.jpg" alt="" class="img img-response galerija2" >
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="../images/frans/frans4.jpg" alt="" class="img img-response galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="../images/frans/frans5.jpg" alt="" class="img img-response galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="../images/frans/frans6.jpg" alt="" class="img img-response galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="../images/frans/frans7.jpg" alt="" class="img img-response galerija2" >
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="../images/frans/frans8.jpg" alt="" class="img img-response galerija2" >
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-response demo" src="../images/frans/frans1.jpg" alt="" onclick="currentSlide(1)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans2.jpg" alt="" onclick="currentSlide(2)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans3.jpg" alt="" onclick="currentSlide(3)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans4.jpg" alt="" onclick="currentSlide(4)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans5.jpg" alt="" onclick="currentSlide(5)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans6.jpg" alt="" onclick="currentSlide(6)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans7.jpg" alt="" onclick="currentSlide(7)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/frans/frans8.jpg" alt="" onclick="currentSlide(8)" >
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


