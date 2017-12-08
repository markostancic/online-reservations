CREATE TABLE rezervacije(
  rezervacija_id INT PRIMARY KEY AUTO_INCREMENT,
  korisnik_id INT NOT NULL,
  restoran_id INT NOT NULL,
  ime VARCHAR(128) NOT NULL,
  prezime VARCHAR (128) NOT NULL,
  telefon VARCHAR(128) NOT NULL,
  email VARCHAR(128) NOT NULL,
  broj_osoba INT NOT NULL,
  datum TIMESTAMP NOT NULL,
  napomena TEXT
  );

-- Napraviti fk ka tabeli korisnici!