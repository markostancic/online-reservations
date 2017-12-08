<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restoran Orašac</title>

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
                    <img src="../images/orasac/sOrasac.jpg" alt="" class="img img-response slika col-3-md"/> 
                    <br/>
                    <p class="restorani-info">Kontakt: 060 000 100</p>
                    <p class="restorani-info">English: +381 62 000 300</p>
                    <p class="restorani-info1">Radno vreme: Ponedeljak-Nedelja 08h - 01h</p>
                    <p class="restorani-info1">Adresa: Bulevar kralja Aleksandra 122</p>
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
                    <p class="restorani-text">Restoran Orašac je jedno od poslednjih mesta u ovoj ulici, ali i u užem centru Beograda, koje nije izgubilo svoju tradicionalnu prepoznatljivost.
                    Odličan roštilj i izvrsnost jela spremljenih po receptima iz stare Srpske kuhinje dokaz su zašto restoran Orašac nosi naziv vodeće nacionalne kuhinje u Beogradu.</p>
                    <p class="restorani-text">Zvuci tambura i melodije starogradskih pesama nadahnuju goste da se uvek vraćaju ovom restoranu, poznatom i pod nazivom Skadarlija na bulevaru.</p>
                    <p class="restorani-text">Iz restorana se pruža spektakularan pogled na grad i reku, a zalazak sunca na Kalemegdanskoj terasi ima posebnu boju. Kalemegdanska terasa je ultimativni hedonizam sa pogledom. Odlična usluga, prijatna atmosfera u gotovo idiličnom ambijentu samo su deo rama u koji ćete staviti uspomene sa ovog čarobnog i posebnog mesta.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="column">
                        <img src="../images/orasac/orasac1.jpg" alt="" onclick="openModal();currentSlide(1)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac2.jpg" alt="" onclick="openModal();currentSlide(2)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac3.jpg" alt="" onclick="openModal();currentSlide(3)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac4.jpg" alt="" onclick="openModal();currentSlide(4)" class="hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="../images/orasac/orasac5.jpg" alt="" onclick="openModal();currentSlide(1)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac6.jpg" alt="" onclick="openModal();currentSlide(2)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac7.jpg" alt="" onclick="openModal();currentSlide(3)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/orasac/orasac8.jpg" alt="" onclick="openModal();currentSlide(4)" class="hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="../images/orasac/orasac1.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="../images/orasac/orasac2.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="../images/orasac/orasac3.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="../images/orasac/orasac4.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="../images/orasac/orasac5.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="../images/orasac/orasac6.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="../images/orasac/orasac7.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="../images/orasac/orasac8.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac1.jpg" alt="" onclick="currentSlide(1)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac2.jpg" alt="" onclick="currentSlide(2)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac3.jpg" alt="" onclick="currentSlide(3)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac4.jpg" alt="" onclick="currentSlide(4)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac5.jpg" alt="" onclick="currentSlide(5)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac6.jpg" alt="" onclick="currentSlide(6)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac7.jpg" alt="" onclick="currentSlide(7)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/orasac/orasac8.jpg" alt="" onclick="currentSlide(8)" >
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
