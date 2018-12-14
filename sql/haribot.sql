/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
* Objectif : Créer dans PHPMyAdmin une base de données haribo dont la modélisation est ci-dessous, les étapes sont détaillées ensuite.
*/

/**
+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_stagiaire  | int(11)        | NO   | PRI  | NULL    | auto_increment |
| prenom        | varchar(100)   | NO   |      | NULL    |                |
| yeux          | varchar(30)    | NO   |      | NULL    |                |
| genre         | enum('h','f')  | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_bonbon     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| nom           | varchar(100)   | NO   |      | NULL    |                |
| saveur        | varchar(100)   | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+
 
+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_manger     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| id_bonbon     | int(11)        | YES  |      | NULL    |                |
| id_stagiaire  | int(11)        | YES  |      | NULL    |                |
| date_manger   | date           | NO   |      | NULL    |                |
| quantite      | int(11)        | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

*/

/**
* REQUETES A EFFECTUER dans PHPMyAdmin
*/

--1-- lister toutes les BDD de PHPMyAdmin

MariaDB [haribo]> show databases;
+--------------------+
| Database           |
+--------------------+
| bibliotheque       |
| cours              |
| entreprise         |
| haribo             |
| hotel              |
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
| test2              |
+--------------------+
11 rows in set (0.00 sec)

--2-- Créer une base de données SQL nommée HARIBO
'aribo est cree dans phpmyadmin'
--3--
/**
* créer une table stagiaire
* qui comporte 3 champs :
* - id_stagiaire => nombre qui s'auto-incrémente, requis et clé primaire
* - prenom => 100 caractères, requis
* - couleur des yeux => 30 caractères, requis
* - genre => homme ou femme, requis
*/

--4--
/**
* insérer dans cette table les informations de votre groupe (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO bonbons (nom, saveur) VALUES ('dragibus', 'cola');


MariaDB [haribo]> INSERT INTO bonbon (nom, saveur) VALUES ('dragibus', 'cola');
Query OK, 1 row affected (0.01 sec)

MariaDB [haribo]>
--5--
/**
* créer une table bonbon
* qui comporte 3 champs :
* - id_bonbon => nombre qui s'auto-incrémente, requis et clé primaire
* - nom => 100 caractères, requis
* - saveur => 100 caractères, requis
*/
MariaDB [haribo]> desc bonbon;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| id_bonbon | int(11)      | NO   | PRI | NULL    | auto_increment |
| nom       | varchar(100) | YES  |     | NULL    |                |
| saveur    | varchar(30)  | YES  |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+

--6--
/**
* insérer dans cette table des bonbons haribo (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO stagiaires (prenom, yeux, genre) VALUES ('jhordan', 'marron','h');
MariaDB [haribo]> desc stagiaire;
+--------------+---------------+------+-----+---------+----------------+
| Field        | Type          | Null | Key | Default | Extra          |
+--------------+---------------+------+-----+---------+----------------+
| id_stagiaire | int(11)       | NO   | PRI | NULL    | auto_increment |
| prenom       | varchar(100)  | YES  |     | NULL    |                |
| yeux         | varchar(30)   | YES  |     | NULL    |                |
| genre        | enum('h','f') | YES  |     | NULL    |                |
+--------------+---------------+------+-----+---------+----------------+

--7--
/**
* créer une table manger
* qui comporte 5 champs :
* - id_manger => nombre qui s'auto-incrémente, requis et clé primaire
* - id_stagiaire => champs de la table stagiaire
* - id_bonbon => champs de la table bonbon
* - date_manger => type date, requis
* - quantite => nombre, requis
*/
MariaDB [haribo]> desc manger;
+--------------+---------+------+-----+---------+----------------+
| Field        | Type    | Null | Key | Default | Extra          |
+--------------+---------+------+-----+---------+----------------+
| id_manger    | int(11) | NO   | PRI | NULL    | auto_increment |
| id_bonbon    | int(11) | YES  |     | NULL    |                |
| id_stagiaire | int(11) | YES  |     | NULL    |                |
| date_manger  | date    | YES  |     | NULL    |                |
| quantite     | int(11) | YES  |     | NULL    |                |
+--------------+---------+------+-----+---------+----------------+

--8--
/**
* insérer dans la table manger des informations sur qui a consommé quel bonbon, quand et dans quelles quantités (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO manger (id_bonbon, id_stagiaire, date_manger, quantite) VALUES (4,7,'2018-09-20', 5);

--9-- Lister les tables de la BDD *haribo*
MariaDB [haribo]> show tables from haribo;
+------------------+
| Tables_in_haribo |
+------------------+
| bonbon           |
| manger           |
| stagiaire        |
+------------------+

--10-- voir les paramètres de la table *bonbon*
MariaDB [haribo]> select *from bonbon;
+-----------+----------+--------+
| id_bonbon | nom      | saveur |
+-----------+----------+--------+
|         1 | dragibus | cola   |
+-----------+----------+--------+

--11-- Sélectionner tous les champs de tous les enregistrements de la table *stagiaire*
MariaDB [haribo]> select * from stagiaire;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
+--------------+---------+--------+-------+
--12-- Rajouter un nouveau stagiaire *Patriiiick* en forçant la numérotation de l'id
MariaDB [haribo]> insert into stagiaire (id_stagiaire,prenom,yeux,genre)values(5,'patrik','vert','h');

--13-- Rajouter un nouveau stagiaire *Mila* SANS forcer la numérotation de l'id
MariaDB [haribo]> insert into stagiaire (prenom,yeux,genre)values('mila','vert','f');
Query OK, 1 row affected (0.01 sec)


--14-- Changer le prénom du stagiaire qui a l'id 100 de *Patriiiick* à *Patrick*
MariaDB [haribo]> UPDATE stagiaire SET id_stagiaire = '100' WHERE id_stagiaire = '5';
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0


--15-- Rajouter dans la table manger que Patrick a mangé 5 Tagada purpule le 15 septembre

--16-- Sélectionner tous les noms des bonbons
MariaDB [haribo]> select nom from bonbon;
+----------+
| nom      |
+----------+
| dragibus |
| tagada   |
| chupa    |
| tagada   |
+----------+

--17-- Sélectionner tous les noms des bonbons en enlevant les doublons
MariaDB [haribo]> select nom from bonbon group by nom;
+----------+
| nom      |
+----------+
| chupa    |
| dragibus |
| tagada   |
+----------+
--18-- Récupérer les couleurs des yeux des stagiaires (Sélectionner plusieurs champs dans une table)
MariaDB [haribo]> select yeux from stagiaire;
+--------+
| yeux   |
+--------+
| marron |
| vert   |
| vert   |
+--------+

--19-- Dédoublonner un résultat sur plusieurs champs

--20-- Sélectionner le stagiaire qui a l'id 100
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire ='100';
+--------+--------------+
| prenom | id_stagiaire |
+--------+--------------+
| patrik |          100 |
+--------+--------------+
1 row in set (0.00 sec)

--21-- Sélectionner tous les stagiaires qui ont les yeux vert
MariaDB [haribo]> select prenom,yeux from stagiaire where yeux ='vert';
+--------+------+
| prenom | yeux |
+--------+------+
| mila   | vert |
| patrik | vert |
+--------+------+
2 rows in set (0.00 sec)

--22-- Sélectionner tous les stagiaires dont l'id est plus grand que 9
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire >'9';
+--------+--------------+
| prenom | id_stagiaire |
+--------+--------------+
| patrik |          100 |
+--------+--------------+
--23-- Sélectionner tous les stagiaires SAUF celui dont l'id est 13 (soyons supersticieux !) :!\ il y a 2 façons de faire
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire !='13';
+---------+--------------+
| prenom  | id_stagiaire |
+---------+--------------+
| jhordan |            1 |
| mila    |            6 |
| patrik  |          100 |
+---------+--------------+
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire <>'13';
+---------+--------------+
| prenom  | id_stagiaire |
+---------+--------------+
| jhordan |            1 |
| mila    |            6 |
| patrik  |          100 |
+---------+--------------+
3 rows in set (0.00 sec)

--24-- Sélectionner tous les stagiaires qui ont un id inférieur ou égal à 10
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire <='10';
+---------+--------------+
| prenom  | id_stagiaire |
+---------+--------------+
| jhordan |            1 |
| mila    |            6 |
+---------+--------------+
--25-- Sélectionner tous les stagiaires dont l'id est compris entre 7 et 110
MariaDB [haribo]> select prenom,id_stagiaire from stagiaire where id_stagiaire between 7 and 110;
+--------+--------------+
| prenom | id_stagiaire |
+--------+--------------+
| patrik |          100 |
+--------+--------------+
1 row in set (0.00 sec)

--26-- Sélectionner les stagiaires dont le prénom commence par un *p*
MariaDB [haribo]> select prenom from stagiaire where prenom like 'p%';
+--------+
| prenom |
+--------+
| patrik |
+--------+
--27-- Trier les stagiaires femmes par id décroissant
MariaDB [haribo]> select prenom,genre from stagiaire where genre='h' order by prenom;
+---------+-------+
| prenom  | genre |
+---------+-------+
| jhordan | h     |
| patrik  | h     |
+---------+-------+
2 rows in set (0.00 sec)

--28-- Trier les stagiaires hommes par prénom dans l'ordre alphabétique
MariaDB [haribo]> select prenom,genre from stagiaire where genre='h' order by prenom;
+---------+-------+
| prenom  | genre |
+---------+-------+
| jhordan | h     |
| patrik  | h     |
+---------+-------+
2 rows in set (0.00 sec)

--29-- Trier les stagiaires en affichant les femmes en premier et en classant les couleurs des yeux dans l'ordre alphabétique
MariaDB [haribo]> select prenom,genre,yeux from stagiaire order by genre desc;
+---------+-------+--------+
| prenom  | genre | yeux   |
+---------+-------+--------+
| mila    | f     | vert   |
| jhordan | h     | marron |
| patrik  | h     | vert   |
+---------+-------+--------+

!!!!!!!!!!!!!!!!!! a moitier!!!!!!!!!!!!!!!!!!!!!!!!!!!

--30-- Limiter l'affichage d'une requête de sélection de tous les stagiaires aux 3 premires résultats
MariaDB [haribo]> select prenom,genre,yeux from stagiaire limit 0,3;
+---------+-------+--------+
| prenom  | genre | yeux   |
+---------+-------+--------+
| jhordan | h     | marron |
| mila    | f     | vert   |
| patrik  | h     | vert   |
+---------+-------+--------+
--31-- Limiter l'affichage d'une requête de sélection de tous les stagiaires à partir du 2ème résultat et des 3 suivants
MariaDB [haribo]> select id_stagiaire,prenom,genre,yeux from stagiaire limit 2,3;
+--------------+--------+-------+------+
| id_stagiaire | prenom | genre | yeux |
+--------------+--------+-------+------+
|          100 | patrik | h     | vert |
+--------------+--------+-------+------+

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! je rajoute des stagiaire !!!!!!!!!!!!!!!!!!

--32-- Afficher les 4 premiers stagiaires qui ont les yeux marron
MariaDB [haribo]> select id_stagiaire,prenom,genre,yeux from stagiaire where yeux ='marron' limit 0,4;
+--------------+---------+-------+--------+
| id_stagiaire | prenom  | genre | yeux   |
+--------------+---------+-------+--------+
|            1 | jhordan | h     | marron |
|            7 | jean;   | h     | marron |
|            8 | julie   | f     | marron |
|            9 | richard | f     | marron |
+--------------+---------+-------+--------+
4 rows in set (0.00 sec)

--33-- Pareil mais en triant les prénoms dans l'ordre alphabétique
MariaDB [haribo]> select * from stagiaire where yeux="marron" order by prenom asc limit 4;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            7 | jean;   | marron | h     |
|            1 | jhordan | marron | h     |
|            8 | julie   | marron | f     |
|            9 | richard | marron | f     |
+--------------+---------+--------+-------+
4 rows in set (0.00 sec)

--34-- Compter le nombre de stagiaires
ariaDB [haribo]> select count(*) from stagiaire;
+----------+
| count(*) |
+----------+
|        6 |
+----------+
1 row in set (0.00 sec)

MariaDB [haribo]>
--35-- Compter le nombre de stagiaires hommes mais en changeant le nom de la colonne de résultat par *nb_stagiaires_H*
MariaDB [haribo]> select count(*)as 'nb_stagiaires_h' from stagiaire where genre='h';
+-----------------+
| nb_stagiaires_h |
+-----------------+
|               3 |
+-----------------+
1 row in set (0.00 sec)

--36-- Compter le nombre de couleurs d'yeux différentes
MariaDB [haribo]> select count(*),yeux from stagiaire group by yeux;
+----------+--------+
| count(*) | yeux   |
+----------+--------+
|        4 | marron |
|        2 | vert   |
+----------+--------+
2 rows in set (0.00 sec)

--37-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus petit
MariaDB [haribo]> select prenom,yeux,min(id_stagiaire) from stagiaire ;
+---------+--------+-------------------+
| prenom  | yeux   | min(id_stagiaire) |
+---------+--------+-------------------+
| jhordan | marron |                 1 |
+---------+--------+-------------------+
1 row in set (0.00 sec)
--38-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus grand /!\ c'est une requête imbriquée qu'il faut faire (requête sur le résultat d'une autre requête)
MariaDB [haribo]> select prenom,yeux,max(id_stagiaire) from stagiaire ;
+---------+--------+-------------------+
| prenom  | yeux   | max(id_stagiaire) |
+---------+--------+-------------------+
| jhordan | marron |               100 |
+---------+--------+-------------------+
1 row in set (0.00 sec)
--39-- Afficher les stagiaires qui ont les yeux bleu et vert
MariaDB [haribo]> select prenom,yeux from stagiaire where yeux ='vert' or yeux ='marron';
+---------+--------+
| prenom  | yeux   |
+---------+--------+
| jhordan | marron |
| mila    | vert   |
| jean;   | marron |
| julie   | marron |
| richard | marron |
| patrik  | vert   |
+---------+--------+
6 rows in set (0.00 sec)
--40-- A l'inverse maintenant, afficher les stagiaires qui n'ont pas les yeux vert
MariaDB [haribo]> select prenom,yeux from stagiaire where yeux !='vert';
+---------+--------+
| prenom  | yeux   |
+---------+--------+
| jhordan | marron |
| jean;   | marron |
| julie   | marron |
| richard | marron |
+---------+--------+
4 rows in set (0.00 sec)

MariaDB [haribo]>

--41-- récupérer tous les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations
MariaDB [haribo]> select * from manger where quantite !='0';
+-----------+-----------+--------------+-------------+----------+
| id_manger | id_bonbon | id_stagiaire | date_manger | quantite |
+-----------+-----------+--------------+-------------+----------+
|         1 |         4 |            7 | 2018-09-20  |        5 |
|         2 |         4 |            9 | 2017-08-10  |        4 |
|         3 |         3 |            1 | 2015-11-10  |        4 |
|         4 |         4 |          100 | 2018-01-17  |        2 |
+-----------+-----------+--------------+-------------+----------+
4 rows in set (0.00 sec)

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
j ai essayer :
 select prenom,nom from stagiaire  where quantite from manger !='0';


--42-- récupérer que les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations

--43-- prénom du stagiaire, le nom du bonbon, la date de consommation pour tous les stagiaires qui ont mangé au moins une fois



--44-- Afficher les quantités consommées par les stagiaires (uniquement ceux qui ont mangé !)

--45-- Calculer combien de bonbons ont été mangés au total par chaque stagiaire et afficher le nombre de fois où ils ont mangé

--46-- Afficher combien de bonbons ont été consommés au total
MariaDB [haribo]> select sum(quantite) from manger;
+---------------+
| sum(quantite) |
+---------------+
|            15 |
+---------------+
1 row in set (0.00 sec)


--47-- Afficher le total de *Tagada* consommées

--48-- Afficher les prénoms des stagiaires qui n'ont rien mangé

--49-- Afficher les saveurs des bonbons (sans doublons)

--50-- Afficher le prénom du stagiaire qui a mangé le plus de bonbons