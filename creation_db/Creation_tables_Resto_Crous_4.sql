-- Création de la table Resto_Crous
CREATE TABLE Resto_Crous (
    id_restoCrous INT PRIMARY KEY,
    nom_resto VARCHAR(100),
    adresse VARCHAR(255),
    codePostal VARCHAR(20),
    type VARCHAR(50) check (type IN ('Cafétéria', 'Restaurant')),
    description_resto TEXT,
    longitude DECIMAL(10, 6),
    latitude DECIMAL(10, 6),
    horaire_ouverture TIME,
    horaire_fermeture TIME
);

-- Création de la table travaille
CREATE TABLE travaille (
    id_restoCrous INT,
    id_personne VARCHAR(15),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    FOREIGN KEY (id_personne) REFERENCES Personnel(id_personne),
    PRIMARY KEY (id_restoCrous, id_personne)
);


-- Création de la table Personne
CREATE TABLE Personne (
    id_personne VARCHAR(8) PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    role VARCHAR(50) CHECK (role IN ('Etudiant', 'Personnel', 'Administrateur', 'Professeur')),
    mdp VARCHAR (50)
);

CREATE TABLE tarifs(
    statut varchar(15) PRIMARY KEY,
    prix_ru DECIMAL
);

-- Création de la table Porteur_de_carte
CREATE TABLE Porteur_de_carte (
    id_personne VARCHAR(8) PRIMARY KEY,
    statut VARCHAR(50) CHECK (statut IN ('Enseignant', 'Personnel', 'Boursier', 'Non Boursier', 'Alternant')),
    allergies VARCHAR(255),
    FOREIGN KEY (statut) REFERENCES tarifs(statut)
);


-- Création de la table reserve
CREATE TABLE reserve (
    id_restoCrous INT,
    id_personne VARCHAR(8),
    date_reserve DATE,
    heure_debut_reserve TIME,
    id_menu INT,
    id_entree INT,
    id_plat INT,
    id_dessert INT,
    PRIMARY KEY (id_restoCrous, id_personne, date_reserve, heure_debut_reserve),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    FOREIGN KEY (id_personne) REFERENCES Personne(id_personne)
    
);

-- Création de la table date_reserve
CREATE TABLE date_reserve (
    date_reserve DATE,
    deuxieme_reserve Boolean,
    PRIMARY KEY (date_reserve, deuxieme_reserve)
);

-- Création de la table Cafet
CREATE TABLE Cafet (
    Id_restoCrous INT PRIMARY KEY,
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous)
);

-- Création de la table Article :
CREATE TABLE Article (
    id_article INT PRIMARY KEY,
    nom_article VARCHAR(100),
    type_article varchar(10),
    vegetarien Boolean,
    prix DECIMAL
);

CREATE TABLE Menu 
(
    id_menu INT PRIMARY KEY,
    nom_menu VARCHAR(100),
    description_menu TEXT,
    id_entree INT,
    id_plat INT,
    id_dessert INT,
    prix DECIMAL (10, 2) CHECK (prix >= 0),
    FOREIGN KEY (id_entree) REFERENCES article(id_article),
    FOREIGN KEY (id_plat) REFERENCES article(id_article),
    FOREIGN KEY (id_dessert) REFERENCES article(id_article)
);

-- Création de la table date_menu
CREATE TABLE date_menu (
    date_menu DATE PRIMARY KEY
);



CREATE TABLE propose (
    id_menu INT,
    id_restoCrous INT,
	date_menu DATE,
	FOREIGN KEY (date_menu) REFERENCES date_menu(date_menu),
    FOREIGN KEY (id_menu) REFERENCES Menu(id_menu),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    PRIMARY KEY (id_menu, id_restoCrous, date_menu)
);


-- Création de la table possede
CREATE TABLE stock (
    id_restoCrous INT,
    id_article INT,
    stock INT CHECK (stock >= 0),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(id_restoCrous),
    FOREIGN KEY (id_article) REFERENCES Article(id_article),
    PRIMARY KEY (id_restoCrous, id_article)
);

-- Création de la table RU
CREATE TABLE RU (
    id_restoCrous INT PRIMARY KEY,
    nb_place INT CHECK (nb_place >= 0),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(id_restoCrous)
);
