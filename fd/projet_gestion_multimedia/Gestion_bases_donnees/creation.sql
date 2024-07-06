CREATE DATABASE gestionFichiers
CREATE TABLE fichiers(
    id int PRIMARY KEY AUTO_INCREMENT,
    nomFichier varchar(100),
    typeFichier varchar(100),
    tailleFichier decimal,
    dateTelech TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);