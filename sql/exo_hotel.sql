MariaDB [hotel]> CREATE TABLE chambres(id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, num_chambre INT(3), prix FLOAT, nb_lit INT(3), nb_pers INT(3), confort VARCHAR(255), equipement VARCHAR(255));

MariaDB [hotel]> CREATE TABLE client(id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, num_client INT(3), nom VARCHAR(255), prenom VARCHAR(255), adresse VARCHAR(150));

MariaDB [hotel]>  CREATE TABLE reservation (id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL, num_client INT(3), date_arrive DATETIME, date_depart DATETIME);


MariaDB [hotel]>insert into chambres (num_chambre,prix,nb_lit,nb_pers,confort,equipement) values (20,115.00,3,4,'salle de bain,wc','tv,wifi,mini bar,sauna');
MariaDB [hotel]> insert into chambres (num_chambre,prix,nb_lit,nb_pers,confort,equipement) values (50,39.00,1,1,'douche, wc', 'tv, wifi');
MariaDB [hotel]> insert into chambres (num_chambre,prix,nb_lit,nb_pers,confort,equipement) values (40,70.00,3,6,'douche, wc', 'tv, wifi,mini bar');