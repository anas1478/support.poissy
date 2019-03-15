 
 
create table utilisateur   
 (id_utilisateur INT (3) AUTO_INCREMENT PRIMARY KEY,
 prenom VARCHAR (30),
 nom VARCHAR (30),
 email VARCHAR (50),
 telephone INT (10)zerofill,
 mdp VARCHAR (12),
 pseudo VARCHAR (30),
 avatar VARCHAR (20),
 age INT (3),
 date_naissance DATE,
 sexe ENUM('H', 'F'),
 etat_civil ENUM('M.', 'Mme '),
 adresse VARCHAR (50),
 code_postal INT (5) zerofill,
 ville VARCHAR (30),
 pays VARCHAR (20),
 site_web VARCHAR (50));



create table titre_cv
 (id_titre_cv INT (3) AUTO_INCREMENT PRIMARY KEY,
 titre_cv TEXT,
 accroche TEXT,
 logo VARCHAR (20),
 utilisateur_id INT(3));



create table loisirs

 (id_loisir INT (3) AUTO_INCREMENT PRIMARY KEY,
 loisir VARCHAR (30),
 utilisateur_id INT (3));


create table competences 
 (id_competence INT(3) AUTO_INCREMENT PRIMARY KEY,
 competence VARCHAR (30),
 c_niveau INT(3),
 utilisateur_id INT (3));



create table experiences
( id_experience INT (3) AUTO_INCREMENT PRIMARY KEY,
 e_titre VARCHAR (50),
 e_soustitre VARCHAR (50),
 e_dates VARCHAR (50),
 e_description TEXT,
 utilisateur_id INT (3));


create table formations
( id_formation INT (3) AUTO_INCREMENT PRIMARY KEY,
 f_titre VARCHAR(50),
 f_soustitre VARCHAR(50),
 f_dates VARCHAR (50),
 f_description TEXT,
 utilisateur_id INT (3));


create table realisations

 (id_realisation INT(3) AUTO_INCREMENT PRIMARY KEY,
 r_titre VARCHAR (50),
 r_soustitre VARCHAR (50),
 r_dates VARCHAR (50),
 r_description TEXT,
 utilisateur_id INT (3));