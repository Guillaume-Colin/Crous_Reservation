-- Création de la table Resto_Crous
CREATE TABLE Resto_Crous (
    Id_restoCrous INT PRIMARY KEY,
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


-- Création de la table Personnel
CREATE TABLE Personnel (
    id_personne VARCHAR(8) PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    role VARCHAR(50) check(role='Personnel')
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

-- Création de la table Porteur_de_carte
CREATE TABLE Porteur_de_carte (
    id_personne VARCHAR(8) PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    role VARCHAR(50) CHECK (role IN ('Etudiant', 'Personnel', 'Administrateur', 'Professeur')),
    statut VARCHAR(50) CHECK (statut IN ('Enseignant', 'Personnel', 'Boursier', 'Non Boursier', 'Alternant', 'Extérieur')),
    allergies VARCHAR(255)
);

-- Création de la table reserve
CREATE TABLE reserve (
    id_restoCrous INT,
    id_personne VARCHAR(8),
    date_reserve DATE,
    deuxieme_reserve Boolean,
    heure_debut_reserve TIME,
    id_entree INT,
    id_plat INT,
    id_dessert INT,
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    FOREIGN KEY (id_personne) REFERENCES Personne(id_personne),
    PRIMARY KEY (id_restoCrous, id_personne, date_reserve, deuxieme_reserve)
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
    nom_resto VARCHAR(100),
    adresse VARCHAR(255),
    codePostal VARCHAR(20),
    type VARCHAR(50),
    description_resto TEXT,
    longitude DECIMAL(10, 6),
    latitude DECIMAL(10, 6),
    horaire_ouverture TIME,
    horaire_fermeture TIME
);


-- Création de la table Menu
CREATE TABLE Menu (
    id_menu INT PRIMARY KEY,
    nom_menu VARCHAR(100),
    description_menu TEXT,
    plat_principal VARCHAR(100),
    entree VARCHAR(100),
    dessert VARCHAR(100),
    prix DECIMAL (10, 2) check(prix >= 0)
);

-- Création de la table date_menu
CREATE TABLE date_menu (
    date_menu DATE PRIMARY KEY
);


-- Création de la table propose
CREATE TABLE propose (
    id_menu INT,
    id_restoCrous INT,
	date_menu DATE,
	FOREIGN KEY (date_menu) REFERENCES date_menu(date_menu),
    FOREIGN KEY (id_menu) REFERENCES Menu(id_menu),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    PRIMARY KEY (id_menu, id_restoCrous, date_menu)
);

-- Création de la table Article
CREATE TABLE Article (
    id_article INT PRIMARY KEY,
    nom_article VARCHAR(100)
);

-- Création de la table compose
CREATE TABLE compose (
    id_menu INT,
    id_article INT,
    FOREIGN KEY (id_menu) REFERENCES Menu(id_menu),
    FOREIGN KEY (id_article) REFERENCES Article(id_article),
    PRIMARY KEY (id_menu, id_article)
);



-- Création de la table possede
CREATE TABLE possede (
    id_restoCrous INT,
    id_article INT,
    stock INT check(stock >= 0),
    FOREIGN KEY (id_restoCrous) REFERENCES Resto_Crous(Id_restoCrous),
    FOREIGN KEY (id_article) REFERENCES Article(id_article),
    PRIMARY KEY (id_restoCrous, id_article)
);

-- Création de la table RU
CREATE TABLE RU (
    Id_restoCrous INT PRIMARY KEY,
    nom_resto VARCHAR(100),
    adresse VARCHAR(255),
    codePostal VARCHAR(20),
    type VARCHAR(50),
    description_resto TEXT,
    longitude DECIMAL(10, 6),
    latitude DECIMAL(10, 6),
    horaire_ouverture TIME,
    horaire_fermeture TIME,
    nb_place INT check(nb_place >= 0)
);

