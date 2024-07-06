CREATE TABLE Modele (
    NumeroType INT PRIMARY KEY,
    Marque VARCHAR(50),
    Modele VARCHAR(50)
);

CREATE TABLE Proprietaire (
    IDProprietaire INT PRIMARY KEY,
    Nom VARCHAR(50),
    Prenom VARCHAR(50),
    Adresse VARCHAR(100)
);

CREATE TABLE Vehicule (
    NumeroImmatriculation VARCHAR(15) PRIMARY KEY,
    NumeroType INT,
    FOREIGN KEY (NumeroType) REFERENCES Modele(NumeroType)
);

CREATE TABLE CertificatImmatriculation (
    NumeroCertificat INT PRIMARY KEY,
    DateDelivrance DATE,
    DateExpiration DATE,
    NumeroImmatriculation VARCHAR(15),
    FOREIGN KEY (NumeroImmatriculation) REFERENCES Vehicule(NumeroImmatriculation)
);

CREATE TABLE ProprietaireVehicule (
    IDProprietaire INT,
    NumeroImmatriculation VARCHAR(15),
    PRIMARY KEY (IDProprietaire, NumeroImmatriculation),
    FOREIGN KEY (IDProprietaire) REFERENCES Proprietaire(IDProprietaire),
    FOREIGN KEY (NumeroImmatriculation) REFERENCES Vehicule(NumeroImmatriculation)
);
