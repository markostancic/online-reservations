-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2017 at 11:16 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rezervacija_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `naslov` varchar(20) NOT NULL,
  `poruka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `ime`, `email`, `naslov`, `poruka`) VALUES
(2, 'Marko', 'stancic6@gmail.com', 'Rezervacija', 'Vi ste sjajni, od sad rezervisemo samo preko Vas.');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `korisnicko_ime` text NOT NULL,
  `sifra` text NOT NULL,
  `email` text NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `sifra`, `email`, `tel`) VALUES
(2, 'Milos', 'Milosevic', 'milos', '81dc9bdb52d04dc20036dbd8313ed055', 'milos@gmail.com', 505);

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int(11) NOT NULL,
  `restoran_ime` varchar(20) NOT NULL,
  `restoran_adresa` varchar(50) NOT NULL,
  `restoran_region` varchar(20) NOT NULL,
  `restoran_tel` varchar(11) NOT NULL,
  `ukupan_broj_gostiju` int(11) NOT NULL,
  `putanja` text NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `restoran_ime`, `restoran_adresa`, `restoran_region`, `restoran_tel`, `ukupan_broj_gostiju`, `putanja`, `slika`) VALUES
(7, 'Orašac', 'Bulevar kralja Aleksandra 122', 'Zvezdara', '060 000 100', 150, 'orasac.php', 'orasac/sOrasac.png'),
(9, 'Frans', 'Bulevar oslobođenja 18a', 'Voždovac', '060 000 100', 500, 'frans.php', 'frans/sFrans.png'),
(12, 'Ambar', 'Karadjordjeva 12', 'Zemun', '060 000 100', 50, 'ambar.php', 'ambar/sAmbar.png'),
(15, 'Kalemegdanska terasa', 'Mali kalemegdan', 'Dorcol 2', '8888845454', 123, 'kalemegdanskaTerasa.php', 'terasa/sKalemegdanskaTerasa.jpg'),
(16, 'Grafičar', 'Vase Pelagića 31', 'Senjak', '060 000 100', 70, 'graficar.php', 'graficar/sGraficar.php'),
(17, 'Ser Gilles', ' Crnotravska 4', 'Voždovac', '060 000 100', 50, 'serGilles.php', 'serGilles/sSerGilles.jpg'),
(18, 'Madera', 'Bulevar kralja Aleksandra 43', 'Palilula', '060 000 100', 50, 'madera.php', 'madera/sMadera.png'),
(19, 'Devetka', 'Kneza Višeslava 25', 'Rakovica', '060 000 100', 50, 'devetka.php', 'devetka/sDevetka.png\r\n'),
(20, 'Tri Šešira', 'Skadarska 29', 'Stari grad', '060 000 100', 50, 'triSesira.php', 'triSesira/sTriSesira.png\r\n'),
(21, 'Durmitor', 'Omladinskih brigada 16a', 'Novi Beograd', '060 000 100', 70, 'durmitor.php', 'durmitor/sDurmitor.png\r\n'),
(22, 'Manufaktura', 'Kralja Petra 13', 'Stari Grad', '060 000 100', 50, 'manufaktura.php', 'manufaktura/sManufaktura.png'),
(23, 'Molti Bači', 'Turgenjeva 16', 'Čukarica', '060 000 100', 50, 'moltiBaci.php', 'moltiBaci/sMoltiBaci.png');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(11) NOT NULL,
  `restoran_id` int(11) NOT NULL,
  `rezervacija_ime` text NOT NULL,
  `rezervacija_prezime` text NOT NULL,
  `rezervacija_tel` int(11) NOT NULL,
  `rezervacija_email` text NOT NULL,
  `broj_osoba` int(11) NOT NULL,
  `napomena` text NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id`, `restoran_id`, `rezervacija_ime`, `rezervacija_prezime`, `rezervacija_tel`, `rezervacija_email`, `broj_osoba`, `napomena`, `datum`) VALUES
(1, 9, 'Marko', 'Stancic', 551515, 'stancic6@gmail.com', 2, 'asdasd', '2017-11-20'),
(2, 12, 'sada', 'asd', 0, 'asd@s', 3, 'asd', '2017-11-16'),
(3, 9, 'Marko', 'Stancic', 8484848, 'marko.stancic.14@gmail.com', 3, 'asdasd', '2017-11-16'),
(4, 15, 'Marko', 'Stancic', 12312, 'stancic6@gmail.com', 3, 'dsasaa', '2017-11-19'),
(5, 7, 'Marko', 'Stancic', 1231231, 'marko.stancic.14@gmail.com', 5, 'asdas', '2017-11-29'),
(6, 7, 'Marko', 'Stancic', 551515, 'stancic6@gmail.com', 2, 'vip za gazdu', '2017-12-13'),
(7, 7, 'Marko', 'Stancic', 551515, 'stancic6@gmail.com', 2, 'sa', '2017-12-02'),
(8, 9, 'Marko', 'Stancic', 51515151, 'stancic6@gmail.com', 4, 'sda', '2017-12-02'),
(9, 9, 'Marko', 'Stancic', 51515151, 'marko.stancic.14@gmail.com', 2, 'sad', '2017-12-02'),
(10, 9, 'Marko', 'Stancic', 8484848, 'marko.stancic.14@singimail.rs', 4, 'sadda', '2017-12-02'),
(11, 9, 'Marko', 'Stancic', 51515151, 'stancic6@gmail.com', 5, 'asdasd', '2017-12-02'),
(12, 12, 'Marko', 'Stancic', 51515151, 'stancic6@gmail.com', 3, 'asdad', '2017-12-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_1` (`restoran_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`restoran_id`) REFERENCES `restoran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
