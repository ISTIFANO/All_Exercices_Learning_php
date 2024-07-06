CREATE TABLE Employe (
    NumeroEmploye INT PRIMARY KEY,
    NomEmploye VARCHAR(255) NOT NULL,
    Salaire DECIMAL(10, 2) CHECK (Salaire >= 0) NOT NULL,
    DateEmbauche DATE NOT NULL,
    Departement VARCHAR(50) NOT NULL
);
/* Une table nommée "Employe" est créée.
Le champ "NumeroEmploye" est la clé primaire de la table.
Le champ "NomEmploye" est une chaîne de caractères non nulle (NOT NULL).
Le champ "Salaire" est un champ décimal pouvant avoir jusqu'à 10 chiffres au total, dont 2 décimales, et une vérification est ajoutée pour s'assurer que le salaire est supérieur ou égal à zéro (CHECK).
Le champ "DateEmbauche" est un champ de type date et il ne peut pas être nul (NOT NULL).
Le champ "Departement" est une chaîne de caractères non nulle (NOT NULL).
Vous pouvez ajuster ce modèle en fonction de vos besoins spécifiques.
*/

INSERT INTO Employe (NumeroEmploye, NomEmploye, Salaire, DateEmbauche, Departement)
VALUES (1, 'John Doe', 50000.00, '2024-01-16', 'Ressources Humaines');

/*Nous utilisons l'instruction INSERT INTO pour ajouter des données dans la table "Employe".
Les colonnes spécifiées entre parenthèses (NumeroEmploye, NomEmploye, Salaire, DateEmbauche, Departement) 
indiquent dans quelles colonnes nous allons insérer les données.
Les valeurs spécifiées dans la clause VALUES (1, 'John Doe', 50000.00, '2024-01-16', 'Ressources Humaines') 
correspondent aux données réelles que nous voulons insérer.*/

SELECT * FROM Employe;
/* 
L'instruction SELECT est utilisée pour récupérer des données de la table.
L'astérisque * est utilisé pour sélectionner toutes les colonnes de la table.
La clause FROM Employe indique la table à partir de laquelle les données doivent être récupérées, ici, c'est la table "Employe".*/

SELECT NomEmploye, Salaire FROM Employe;


// where 

SELECT * FROM Employe
WHERE Salaire > 60000.00;

SELECT NomEmploye, Salaire FROM Employe
WHERE Salaire > 60000.00 AND Departement = 'Ressources Humaines';

// update 

UPDATE Employe
SET Salaire = 65000.00
WHERE NumeroEmploye = 1;


ALTER TABLE Employe
ADD COLUMN DateNaissance DATE;
/*
L'instruction ALTER TABLE est utilisée pour modifier la structure de la table "Employe".
La clause ADD COLUMN est utilisée pour ajouter une nouvelle colonne à la table.
 Ici, nous ajoutons une colonne "DateNaissance" de type DATE.*/


 DELETE FROM Employe
WHERE NumeroEmploye = 1;

/*
L'instruction DELETE FROM est utilisée pour supprimer des enregistrements de la table "Employe".
La clause WHERE est utilisée pour spécifier la condition selon laquelle les données doivent être supprimées. Ici,
 nous voulons supprimer l'employé avec le numéro d'employé égal à 1.
Faites très attention lors de l'utilisation de l'instruction DELETE,
 car elle supprime définitivement des données. Assurez-vous d'avoir une condition de 
 filtrage précise pour ne supprimer que les données nécessaires.

Vous pouvez ajuster la condition WHERE en fonction de vos besoins spécifiques pour 
cibler les enregistrements que vous souhaitez supprimer.*/

/*  

1. **SELECT :**
   - Utilisé pour extraire des données d'une ou plusieurs tables dans une base de données.
   - Syntaxe : `SELECT colonnes FROM table WHERE conditions;`

2. **INSERT :**
   - Utilisé pour ajouter de nouvelles lignes de données à une table.
   - Syntaxe : `INSERT INTO table (colonnes) VALUES (valeurs);`

3. **UPDATE :**
   - Utilisé pour modifier les données existantes dans une table.
   - Syntaxe : `UPDATE table SET colonne1 = valeur1, colonne2 = valeur2 WHERE condition;`

4. **DELETE :**
   - Utilisé pour supprimer des lignes de données d'une table.
   - Syntaxe : `DELETE FROM table WHERE condition;`

5. **ALTER TABLE :**
   - Utilisé pour modifier la structure d'une table existante, telle que l'ajout ou la suppression de colonnes.
   - Syntaxe : `ALTER TABLE nom_table ADD COLUMN nouvelle_colonne TYPE;`

6. **CREATE TABLE :**
   - Utilisé pour créer une nouvelle table dans la base de données.
   - Syntaxe : `CREATE TABLE nom_table (colonne1 TYPE1, colonne2 TYPE2, ...);`

7. **DROP TABLE :**
   - Utilisé pour supprimer une table existante de la base de données.
   - Syntaxe : `DROP TABLE nom_table;`

8. **WHERE :**
   - Utilisé avec SELECT, UPDATE, et DELETE pour spécifier une condition de filtrage.
   - Syntaxe : `WHERE condition;`

9. **ORDER BY :**
   - Utilisé avec SELECT pour trier les résultats par une ou plusieurs colonnes.
   - Syntaxe : `ORDER BY colonne [ASC|DESC];`

10. **GROUP BY :**
    - Utilisé avec SELECT pour regrouper les résultats en fonction des valeurs d'une ou plusieurs colonnes.
    - Syntaxe : `GROUP BY colonne1, colonne2;`

11. **JOIN :**
    - Utilisé pour combiner des lignes de deux tables ou plus en fonction d'une condition de liaison.
    - Syntaxe : `SELECT * FROM table1 JOIN table2 ON table1.colonne = table2.colonne;`










/ ----------------------------------------------------------------   function sql 

1. **COUNT() :**
   - Utilisé pour compter le nombre d'enregistrements dans une table.
   - Exemple : Compter le nombre d'employés dans la table "Employe".
     ```sql
                                                                                 SELECT COUNT(*) AS NombreEmployes FROM Employe;
     ```

2. **SUM() :**
   - Utilisé pour calculer la somme d'une colonne numérique.
   - Exemple : Calculer la somme des salaires dans la table "Employe".
     ```sql
                                                                                 SELECT SUM(Salaire) AS SommeSalaires FROM Employe;
     ```

3. **AVG() :**
   - Utilisé pour calculer la moyenne d'une colonne numérique.
   - Exemple : Calculer la moyenne des salaires dans la table "Employe".
     ```sql
                                                                                 SELECT AVG(Salaire) AS MoyenneSalaires FROM Employe;
     ```

4. **MIN() :**
   - Utilisé pour trouver la valeur minimale dans une colonne.
   - Exemple : Trouver le salaire le plus bas dans la table "Employe".
     ```sql
                                                                                 SELECT MIN(Salaire) AS SalaireMinimum FROM Employe;
     ```

5. **MAX() :**
   - Utilisé pour trouver la valeur maximale dans une colonne.
   - Exemple : Trouver le salaire le plus élevé dans la table "Employe".
     ```sql
                                                                                SELECT MAX(Salaire) AS SalaireMaximum FROM Employe;
     ```

6. **CONCAT() :**
   - Utilisé pour concaténer (joindre) des chaînes de caractères.
   - Exemple : Concaténer les colonnes "Prenom" et "Nom" dans la table "Employe".
     ```sql
                                                                                SELECT CONCAT(Prenom, ' ', Nom) AS NomComplet FROM Employe;
     ```

7. **SUBSTRING() :**
   - Utilisé pour extraire une sous-chaîne à partir d'une chaîne de caractères.
   - Exemple : Extraire les trois premiers caractères du champ "Nom" dans la table "Employe".
     ```sql
                                                                                SELECT SUBSTRING(Nom, 1, 3) AS TroisPremiersCaracteres FROM Employe;
     ```

8. **NOW() :**
   - Utilisé pour obtenir la date et l'heure actuelles.
   - Exemple : Obtenir la date et l'heure actuelles.
     ```sql
                                                                                 SELECT NOW() AS DateActuelle;
     ```

9. **YEAR(), MONTH(), DAY() :**
   - Utilisées pour extraire l'année, le mois et le jour à partir d'une date.
   - Exemple : Extraire l'année de la colonne "DateEmbauche" dans la table "Employe".
     ```sql
     S                                                                          ELECT YEAR(DateEmbauche) AS AnneeEmbauche FROM Employe;
     ```

