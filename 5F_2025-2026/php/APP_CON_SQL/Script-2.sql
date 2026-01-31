create database if not exists mattia_pavarin_itis;

use mattia_pavarin_itis;

create table studenti(
id int auto_increment primary key,
nome varchar(20),
cognome varchar(20),
media float,
data_iscrizione DATE
);

INSERT INTO studenti (nome, cognome, media, data_iscrizione) VALUES
("Antonio", "Rossi", 6, "2001-05-12"),
("Luca", "Bianchi", 7.5, "2002-09-20"),
("Marco", "Verdi", 8, "2000-03-15"),
("Giulia", "Neri", 9, "2001-11-30");
