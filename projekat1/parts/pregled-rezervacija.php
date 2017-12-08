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

    <title>Rezervaije</title>
    <?php
        require_once __DIR__ . '/header.php';  
    ?>
        <link rel="stylesheet" type="text/css" href="../css/ispit.css">
</head>

<body>
    <div class="restoran">
        <h1>Pregled rezervacija</h1>
        <br>

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
                    $('#period_from').datepicker({
                        dateFormat: 'yy-mm-dd'
                    });
                })
            }
        </script>
        <script src="../js/function.js"></script>
        <form>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td>Period od</td>
                            <td>
                                <input type='date' class="form-control" id='period_from' style="margin-bottom: 10px;" name="datum" />
                            </td>
                            <td><input type="button" onclick="filterAppointment()" value="Prikazi"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </form>
        <div>
            <table id="app_table" border="1">
                <thead>
                    <tr>
                        <th>Redni broj</th>
                        <th>Restoran</th>
                        <th>Datum i vreme</th>
                        <th>Broj osoba</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Napomena</th>
                        <th></th>
                        <th></th>

                    </tr>
                </thead>
                <?php
            require_once __DIR__ . '/baza/DB.php';
            $db = new \Baza\DB();
            $rezervacije = $db->fetchAll("SELECT * FROM rezervacija;");
            $i=1;
            foreach ($rezervacije as $rez)
            {
                $restoran = $db->fetch("SELECT * FROM restoran WHERE id = {$rez['restoran_id']};"); 
                echo "<tr>\n";
                echo " <td>{$rez['id']}</td>\n";
                echo " <td>{$restoran['restoran_ime']}</td>\n";
                echo " <td>{$rez['datum']}</td>\n";
                echo " <td>{$rez['broj_osoba']}</td>\n";
                echo " <td>{$rez['rezervacija_ime']}</td>\n";
                echo " <td>{$rez['rezervacija_prezime']}</td>\n";
                echo " <td>{$rez['rezervacija_tel']}</td>\n";
                echo " <td>{$rez['rezervacija_email']}</td>\n";
                echo " <td>{$rez['napomena']}</td>\n";
                echo " <td><a href='izmeni-rezervaciju.php?id={$rez['id']}' id='dugme'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>\n";
                echo " <td><a href='db-ukloni-rezervaciju.php?id={$rez['id']}' id='dugme' onclick='if(!confirm(\"Da li ste sigurni?\"))return false;'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>\n";
                echo "</tr>\n";
                $i++;
            }
            
            ?>
            </table>
        </div>
        <br>
        <a href="../admin/index.php" id="dugme1">Nazad</a>
    </div>
    <br>
    <?php
    }
    ?>
</body>

</html>