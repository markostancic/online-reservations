<!DOCTYPE html>
<html lang="en">
<head>
    <title>Restoran Ser Gilles</title>
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
                    <img src="../images/serGilles/sSerGilles.jpg" alt="" class="img img-response slika col-3-md"/> 
                    <br/>
                    <p class="restorani-info">Kontakt: 060 000 100</p>
                    <p class="restorani-info">English: +381 62 000 300</p>
                    <p class="restorani-info1">Radno vreme: Ponedeljak-Nedelja 09h - 00h</p>
                    <p class="restorani-info1">Adresa: Crnotravska 4, 11000 Beograd</p>
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
                   <p class="restorani-text">Za one koje žele da se izdvoje od gradske gužve i da užuvaju u prekrasnoj okolini Banjičke šumice, na već dobro poznatoj adresi, Crnotravska 4b, prekoputa Sportskog centra Banjica, nalazi se Ser Gilles Lounge Bar.
                   </p>
                   <p class="restorani-text">Naspram drugih objekata u Beogradu, sličnog karaktera, ono što Ser Gilles Lounge Bar.čini posebnim je to što kod nas, uz pomoć našeg stručnog tima, možete organizovati svaku vrstu okupljanja u skladu sa vašim potrebama. U veoma prijatnoj atmosferi moderno i otmeno opremljenog caffe bara, možete započeti svoj dan uz kafu po vašem ukusu, organizovati poslovne sastanke, porodične skupove, pratiti sportske događaje ili uživati sa društvom do kasnih večernjih sati. Na našem meniju posluženja je širok izbor kafa, sveže ceđenih sokova, piva, koktela i još mnogo drugih bezalkoholnih i alkoholnih pića. Pored toga na meniju restorana su i razni nacionalni specijaliteti i posebno sa ljubavlju pripremljene poslastice naših vrhunskih kuvara koji su godinama sticali iskustvo u najprestižnijim restoranima, a sada su dostupni ovde i vama.
                   </p>
                   <p class="restorani-text">Da bi ugođaj bio jos lepši i bolji, posebno odabran stručan tim u Ser Gilles-u se trudi da sve uvek savršeno funkcioniše, kako bi vi kao naši gosti bili prezadovoljni a ne samo zadovoljni uslugom kojom naš bar pruža, jer naš cilj je da nas iznova stalno posećujete. Tu je i ljubazno osoblje da se svaki put maksimalno potrudi kako bi vaše želje bile ispoštovane u svakom trenutku jer mi za vas želimo samo najbolje pa je samim tim i naša usluga besprekorna . Ser Gilles Lounge Bar.poseduje i obezbeđen veliki broj parking mesta za sve naše goste, tako da ne morate da brinete o tome.
                   </p>
                   <p class="restorani-text">Mi smo vam dali neke od razloga zašto baš nama treba da ukažete vaše poverenje i postanete jedan od naših stalnih gostiju, a na vama je da svratite i uverite se u istinitost i kvalitet naše usluge.
                   </p>

                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="column">
                        <img src="../images/serGilles/sergilles1.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles2.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles3.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles4.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="../images/serGilles/sergilles5.jpg" alt="" onclick="openModal();currentSlide(1)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles6.jpg" alt="" onclick="openModal();currentSlide(2)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles7.jpg" alt="" onclick="openModal();currentSlide(3)" class="img img-response hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/serGilles/sergilles8.jpg" alt="" onclick="openModal();currentSlide(4)" class="img img-response hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="../images/serGilles/sergilles1.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="../images/serGilles/sergilles2.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="../images/serGilles/sergilles3.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="../images/serGilles/sergilles4.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="../images/serGilles/sergilles5.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="../images/serGilles/sergilles6.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="../images/ambar/ambar7.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="../images/serGilles/sergilles8.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles1.jpg" alt="" onclick="currentSlide(1)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles2.jpg" alt="" onclick="currentSlide(2)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles3.jpg" alt="" onclick="currentSlide(3)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles4.jpg" alt="" onclick="currentSlide(4)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles5.jpg" alt="" onclick="currentSlide(5)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles6.jpg" alt="" onclick="currentSlide(6)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles7.jpg" alt="" onclick="currentSlide(7)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/serGilles/sergilles8.jpg" alt="" onclick="currentSlide(8)" >
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


