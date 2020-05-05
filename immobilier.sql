CREATE DATABASE immobilier;

CREATE TABLE logement(
    id_logement NOT NULL AUTO_INCREMENT,
    titre VARCHAR 255,
    adresse VARCHAR 255,
    ville VARCHAR 255,
    cp CHAR 5,
    surface INT 5,
    prix INT,
    photo FILE,
    genre TEXT,
    descriptif TEXT,
    PRIMARY KEY (id_logement)
)
[ENGINE = INNODB];