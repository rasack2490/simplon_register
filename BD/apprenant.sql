CREATE DATABASE simplon_register;

CREATE TABLE administration(
    ID_admin INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mdp VARCHAR(50) NOT NULL,
    PRIMARY KEY(ID_admin)
);

CREATE TABLE apprenant(
    ID_apprenant INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(20) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    date_naissance VARCHAR(50) NOT NULL,
    ville VARCHAR(50) NOT NULL,
    formation VARCHAR(50) NOT NULL,
    PRIMARY KEY(ID_apprenant)
);