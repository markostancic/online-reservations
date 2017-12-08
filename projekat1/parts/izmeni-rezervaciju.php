<?php

session_start();
require_once 'login.php';

if (!isset($_SESSION['id'])) {
    //echo $_SESSION['korisnik_id'];
    $_SESSION['id'] = 0;

}

checkLogout($db);
Login($db);


if ($_SESSION['id'] == 0) {
  //poziv f-je sa formom za logovanje
    loginScreen();

} else {
  //poziv f-je meni u slucaju da je korisnik ulogovan


?>
    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

        <!-- Animate CSS -->
        <link rel="stylesheet" type="text/css" href="../css/animate.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">


        <!-- BX slider CSS -->
        <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">

        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="../css/responsive.css">

        <link rel="stylesheet" type="text/css" href="../css/ispit.css">
        <title>Izmeni restoran</title>

    </head>

    <body>

        <?php
	require_once __DIR__ . '/baza/DB.php';
    $db = new \Baza\DB();
    
    $id = $_GET['id'];
    $restorani= $db->fetchAll("SELECT * FROM restoran");
    $rezervacije = $db->fetch("SELECT * FROM rezervacija WHERE id = {$id};");
    $restoran = $db->fetch("SELECT * FROM restoran WHERE id = {$rezervacije['restoran_id']};"); 

?>
            <div class="forma">
                <h1>Izmena rezervacija</h1>
                <form action="db-izmeni-rezervaciju.php" method="post">
                    Redni broj: <input readonly type="text" name="id" value="<?php echo $id; ?>"><br/> 
                    Objekat: <select name="restoran_id" id="objekat1" aria-required="true" aria-invalid="false" value="<?php echo $restoran['restoran_ime']; ?>">
                <option value="">---</option>
                <?php
                foreach ($restorani as $restoran){
                    echo "<option value='{$restoran["id"]}'" . (isset($_POST['restoran']) && $_POST['restoran'] == $restoran["id"] ? 'selected="selected"' : '') . ">{$restoran["restoran_ime"]}</option>";
                }
                ?>
            </select><br/> 
                    Datum: <input type='date' id='datetimepicker' class="datum" style="margin-bottom: 10px;" name="datum" value="<?php echo $rezervacije['datum']; ?>" /><br/>
                    <script>
                        var datefield = document.createElement("input")
                        datefield.setAttribute("type", "date")
                        if (datefield.type != "date") { //if browser doesn't support input type="date", load files for jQuery UI Date Picker
                            document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
                            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
                            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
                        }
                    </script>
                    <script>
                        if (datefield.type != "date") { //if browser doesn't support input type="date", initialize date picker widget:
                            jQuery(function($) { //on document.ready
                                $('#datetimepicker').datepicker({
                                    dateFormat: 'yy-mm-dd'
                                });
                            })
                        }
                    </script>
                    Broj osoba: <input type="number" name="broj_osoba" value="<?php echo $rezervacije['broj_osoba']; ?>"><br/> 
                    Ime: <input type="text" name="rezervacija_ime" value="<?php echo $rezervacije['rezervacija_ime']; ?>"><br/> 
                    Prezime: <input type="text" name="rezervacija_prezime" value="<?php echo $rezervacije['rezervacija_prezime']; ?>"><br/>
                    Telefon: <input type="number" name="rezervacija_tel" value="<?php echo $rezervacije['rezervacija_tel']; ?>"><br/>
                    Email: <input type="email" name="rezervacija_email" id="email3" value="<?php echo $rezervacije['rezervacija_email']; ?>"><br/> 
                    Napomena: <input type="text" name="napomena" id="napomena1" value="<?php echo $rezervacije['napomena']; ?>"><br/>

                    <input type="submit" value="Izmeni">
                    <a href="pregled-rezervacija.php" id="dugme2">Odustani</a>
                </form>
            </div>
            <?php
}

?>
               <!-- Bx Slider JS -->
            <script src="../js/jquery.bxslider.min.js"></script>

            <!-- Add JS counter lib -->
            <script src="../js/jquery.waypoints.min.js"></script>
            <script src="../js/jquery.counterup.min.js"></script>

            <!-- Add wow js lib -->
            <script src="../js/wow.min.js"></script>

            <!-- Custom Js -->
            <script src="../js/input.js"></script>
    </body>

    </html>