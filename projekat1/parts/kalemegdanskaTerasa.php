<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalemegdanska terasa</title>
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
                    <img src="../images/terasa/sKalemegdanskaTerasa.jpg" alt="" class="img img-response slika col-3-md"/> 
                    <br/>
                    <p class="restorani-info">Kontakt: 060 000 100</p>
                    <p class="restorani-info">English: +381 62 000 300</p>
                    <p class="restorani-info1">Radno vreme: Ponedeljak-Nedelja 08h - 01h</p>
                    <p class="restorani-info1">Adresa: Mali Kalemegdan bb Beograd 11000</p>
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
                    <p class="restorani-text">Za poseban ugođaj uživanja u hrani zaslužuan je šef kuhinje Danijel Stevanović koji je na osnovu svog bogatog iskustva kreirao jedinstven meni, a jela spremljena od organskih namirnica su pravi izbor za porodični ručak.
                    </p>
                    <p class="restorani-text">Iz restorana se pruža spektakularan pogled na grad i reku, a zalazak sunca na Kalemegdanskoj terasi ima posebnu boju. Kalemegdanska terasa je ultimativni hedonizam sa pogledom. Odlična usluga, prijatna atmosfera u gotovo idiličnom ambijentu samo su deo rama u koji ćete staviti uspomene sa ovog čarobnog i posebnog mesta.
                    </p>



                    <p class="restorani-text">Pogled na reku koji se pruža sa tvrđave i romantičan zalazak sunca biće dar prirode povodom Vašeg venčanja. Nadomak restorana nalazi se jedna od najlepših crkvi u Beogradu – crkva svete Petke. Da Vaše crkveno venčanje takođe bude besprekorno naš organizator Vam stoji na raspolaganju. Iako je sala restorana Kalemegdanska terasa sama po sebi posebna najbolji saloni za dekoraciju sa kojima sarađujemo stoje Vam na raspolaganju.
                    </p>
                    <p class="restorani-text">Na Kalemegdanskoj terasi Vaši gosti uživaće u vrhunskim specijalitetima najboljih šefova kuhinje na Balkanu. U dogovoru sa njima možete formirati meni koji će se služiti tog dana i koji će probuditi sva čula Vaših zvanica. Prvi ples je jedan od najlepših momenata na početku zajedničkom bračnog života. Prvi taktovi i izbor muzike su veoma važan deo dobrog provoda na proslavi venčanja. Restoran Kalemegdanska terasa Vam i u tome može pomoći, jer sarađujemo sa najboljim muzičarima, bendovima i di džejevima. Zato pustite mašti na volju, doživite svoju bajku na Kalemegdanskoj terasi.
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="galerija">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="column">
                        <img src="../images/terasa/terasa1.jpg" alt="" onclick="openModal();currentSlide(1)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa2.jpg" alt="" onclick="openModal();currentSlide(2)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa3.jpg" alt="" onclick="openModal();currentSlide(3)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa4.jpg" alt="" onclick="openModal();currentSlide(4)" class="hover-shadow galerija1">
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="../images/terasa/terasa5.jpg" alt="" onclick="openModal();currentSlide(1)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa6.jpg" alt="" onclick="openModal();currentSlide(2)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa7.jpg" alt="" onclick="openModal();currentSlide(3)" class="hover-shadow galerija1">
                    </div>
                    <div class="column">
                        <img src="../images/terasa/terasa8.jpg" alt="" onclick="openModal();currentSlide(4)" class="hover-shadow galerija1">
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 8</div>
                            <img src="../images/terasa/terasa1.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 8</div>
                            <img src="../images/terasa/terasa2.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 8</div>
                            <img src="../images/terasa/terasa3.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 8</div>
                            <img src="../images/terasa/terasa4.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 8</div>
                            <img src="../images/terasa/terasa5.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 8</div>
                            <img src="../images/terasa/terasa6.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">7 / 8</div>
                            <img src="../images/terasa/terasa7.jpg" alt="" class="img img-response galerija2">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">8 / 8</div>
                            <img src="../images/terasa/terasa8.jpg" alt="" class="img img-response galerija2">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa1.jpg" alt="" onclick="currentSlide(1)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa2.jpg" alt="" onclick="currentSlide(2)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa3.jpg" alt="" onclick="currentSlide(3)" >
                        </div>

                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa4.jpg" alt="" onclick="currentSlide(4)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa5.jpg" alt="" onclick="currentSlide(5)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa6.jpg" alt="" onclick="currentSlide(6)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa7.jpg" alt="" onclick="currentSlide(7)" >
                        </div>
                        <div class="column">
                            <img class="img img-response demo galerija3" src="../images/terasa/terasa8.jpg" alt="" onclick="currentSlide(8)" >
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