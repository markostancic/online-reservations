<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ . '/header.php';  
    ?>
        <link rel="stylesheet" type="text/css" href="../css/pretraga.css">
        <title>Pretraga</title>
</head>

<body>
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
        <?php
require_once __DIR__ . '/baza/DB.php';
$db = new \Baza\DB();
$name = $_GET['search']; 
$result = $db->fetchAll("SELECT * FROM restoran WHERE restoran_ime LIKE '{$name}%';");


foreach($result as $row)
{
        echo "<div style='height:120px;' class='col-md-4 col-md-offset-4'>
              
              <a href = '{$row['putanja']}' id='pretraga'><img class='img img-responsive'style='width:200px;height:120px;' src='../images/{$row['slika']}' alt='' /><h4 id='text'>{$row['restoran_ime']}</h4><p id='text1'>Adresa: {$row['restoran_adresa']}</p><p id='text2'>Telefon: {$row['restoran_tel']}</p></a></div>";
        echo "<br>";
}
    
    
            require_once __DIR__ . '/footer.php';  
    ?>
</body>

</html>