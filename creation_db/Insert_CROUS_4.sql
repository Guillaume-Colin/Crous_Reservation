INSERT INTO Resto_Crous (id_restoCrous, nom_resto, adresse, codePostal, type, description_resto, longitude, latitude, horaire_ouverture, horaire_fermeture)
    VALUES
        (16, 'Cafet'' Pôle étudiant', 'Chemin de la Censive du Tertre', '44300', 'Cafétéria',
        'Restauration diversifiée. Prestations chaudes et froides. Terrasse. Accessible aux personnes à mobilité réduite. WIFI disponible.',
        -1.551552, 47.245735, '08:30:00', '20:00:00'),
        (17, 'Resto U'' La Lombarderie', '30 rue de la Haute Forêt', '44300', 'Restaurant',
        'Restauration traditionnelle. Cuisine du monde. Accessible aux personnes à mobilité réduite.',
        -1.55577, 47.234643, '11:15:00', '13:45:00'),
        (18, 'Resto U'' Le Tertre', '4 route de la Jonelière', '44300', 'Restaurant',
        'Restauration traditionnelle. Grillades. Pôle Vente A Emporter. Accessible aux personnes à mobilité réduite.',
        -1.554608, 47.245074, '11:00:00', '13:30:00'),
        (19, 'Salle administrative - Resto U'' Ricordeau', '1 place Alexis Ricordeau', '44000', 'Restaurant',
        'Restauration traditionnelle. Accessible aux personnes à mobilité réduite.',
        -1.552683, 47.212215, '11:15:00', '13:45:00'),
        (34, 'Resto U'' Le Tertre', '4 route de la Jonelière', '44300', 'Restaurant',
        'Campus Droit-Lettres. Du lundi au vendredi de 11h00 à 13h30. Grillades. Pôle Vente A Emporter. Carte bancaire acceptée.',
        -1.554608, 47.245074, '11:00:00', '13:30:00'),
        (33, 'Resto U'' La Lombarderie', '30 rue de la Haute Forêt', '44300', 'Restaurant',
        'Campus sciences. Du lundi au vendredi de 11h15 à 13h45. Cuisine du monde. Carte bancaire acceptée.',
        -1.55577, 47.234643, '11:15:00', '13:45:00'),
        (32, 'Cafet'' Pôle étudiant', 'Chemin de la Censive du Tertre', '44300', 'Cafétéria',
        'Campus Droit-Lettres. Du lundi au jeudi de 8h30 à 20h00, le vendredi de 8h30 à 17h00. WIFI disponible. Carte bancaire acceptée.',
        -1.551552, 47.245735, '08:30:00', '20:00:00'),
        (31, 'Resto U'' La Chantrerie', '4 rue Christian Pauc', '44300', 'Restaurant',
        'Campus Atlantech-Chantrerie. Ouvert du lundi au vendredi de 11h30 à 13h30. Carte bancaire acceptée.',
        -1.515834, 47.283152, '11:30:00', '13:30:00'),
        (30, "Cafétéria L'Escarpe", '35 avenue Alphonse Daudet', '83000', 'Cafétéria',
        'Cafétéria du campus universitaire de Toulon. Ouvert de 8h à 15h. Accessible aux personnes à mobilité réduite. Carte bancaire acceptée.',
        5.9387165, 43.1214158, '08:00:00', '15:00:00'),
        (29, 'Resto U Le Coudon', 'RN 98', '83130', 'Restaurant',
        'Campus universitaire de La Garde. Ouvert de 11h30 à 13h30. Carte bancaire acceptée.',
        6.01740717887878, 43.13625945, '11:30:00', '13:30:00'),
        (28, 'Cafétéria Staps', '261 route de Grenoble', '06205', 'Cafétéria',
        'Campus Staps. Ouvert de 8h à 16h. Accessible aux personnes à mobilité réduite. Carte bancaire acceptée.',
        7.20824092626571, 43.67049701, '08:00:00', '16:00:00'),
        (27, 'Cafétéria Lash', '98 boulevard Edouard Herriot', '06000', 'Cafétéria',
        'Campus Carlone. Ouvert de 7h45 à 16h30. Accessible aux personnes à mobilité réduite. Carte bancaire acceptée.',
        7.2373963, 43.6925299, '07:45:00', '16:30:00'),
        (26, 'Cafétéria St Symphorien', '25 rue du Pont volant', '37000', 'Cafétéria',
        'Située en face de l''IUT. RDC du restaurant universitaire. 130 places assises. Sandwichs variés, salades composées, paninis, pizzas. Confiseries. Carte bancaire acceptée.',
        0.702435, 47.407223, '09:00:00', '14:00:00'),
        (25, 'RU du Technopôle', '40 avenue Jean Portalis', '37200', 'Restaurant',
        'Situé près de l''UFR Droit et Polytech Tours. Cuisine du monde. Poissons. Grillades. Plats du jour et légumes variés. Carte bancaire acceptée.',
        0.683789, 47.365441, '11:30:00', '13:30:00'),
        (24, 'Cafétéria des Tanneurs', 'Rue des Tanneurs', '37000', 'Cafétéria',
        '28 places assises. Bar. Sandwichs variés, salades composées, paninis. Confiseries. Carte bancaire acceptée.',
        0.681452, 47.396199, '07:15:00', '16:00:00');


-- Ajout des membres du personnel dans travaille
INSERT INTO travaille (id_personne, id_restoCrous)
VALUES
    ('C203912F', 16),
    ('C203219T', 17),
    ('C162032K', 18);


INSERT INTO Personne (id_personne, nom, prenom, role, mdp)
VALUES
    ("E223029G", 'Dubois', 'Alice', 'Etudiant','123'),
    ("E224329B", 'Lefevre', 'Martin', 'Etudiant','123'),
    ("E225142I", 'Mercier', 'Camille', 'Etudiant','123'),
    ("E193045U", 'Girard', 'Théo', 'Etudiant','123'),
    ("E204615J", 'Leroy', 'Emma', 'Etudiant','123'),
    ("E225457X", 'Lambert', 'Hugo', 'Etudiant','123'),
    ("E227821Y", 'Moreau', 'Manon', 'Etudiant','123'),
    ("E183029C", 'Laurent', 'Lucas', 'Etudiant','123'),
    ("E223045D", 'Rousseau', 'Léa', 'Etudiant','123'),
    ("E214029G", 'Gauthier', 'Nathan', 'Etudiant','123'),
    ('P162535T', 'Doe', 'John', 'Professeur','123'),
    ('P186543F', 'Smith', 'Emily', 'Professeur','123'),
    ('P205484Y', 'Johnson', 'Alex', 'Professeur','123'),
    ('P143287K', 'Williams', 'Sophie', 'Professeur','123'),
    ('P215648N', 'Brown', 'Michael', 'Professeur','123'),
    ('C203912F', 'Garcia', 'Maria', 'Personnel','123'),
    ('C203219T', 'Martin', 'Antoine', 'Personnel','123'),
    ('C162032K', 'Dubois', 'Claire', 'Personnel','123');


INSERT INTO tarifs (statut, prix_ru)
VALUES
    ('Alternant', 0.30),
    ('Non Boursier', 3.30),
    ('Boursier', 1.00),
    ('Enseignant', 3.30),
    ('Personnel', 3.30);


INSERT INTO Porteur_de_carte (id_personne, statut, allergies)
VALUES
('E223029G', 'Alternant', NULL),
('E224329B', 'Alternant', NULL),
('E225142I', 'Alternant', NULL),
('E193045U', 'Non Boursier', NULL),
('E204615J', 'Non Boursier', NULL),
('E225457X', 'Non Boursier', NULL),
('E227821Y', 'Non Boursier', NULL),
('E183029C', 'Boursier', NULL),
('E223045D', 'Boursier', NULL),
('E214029G', 'Boursier', NULL),
('P162535T', 'Enseignant', NULL),
('P186543F', 'Enseignant', NULL),
('P205484Y', 'Enseignant', NULL),
('P143287K', 'Enseignant', NULL),
('P215648N', 'Enseignant', NULL),
('C203912F', 'Personnel', NULL),
('C203219T', 'Personnel', NULL),
('C162032K', 'Personnel', NULL);



    INSERT INTO Reserve (id_restoCrous, id_personne, date_reserve, heure_debut_reserve,id_menu, id_entree, id_plat, id_dessert)
    VALUES
    (16, 'E223029G', '2023-12-01', '12:00:00', 6, NULL, NULL, NULL),
    (16, 'E223029G', '2023-12-01', '11:00:00', 6, NULL, NULL, NULL),
    (17, 'E224329B', '2023-12-05', '13:30:00', 7, NULL, NULL, NULL),
    (18, 'E225142I', '2023-12-10', '12:00:00', 8, NULL, NULL, NULL),
    (18, 'E225142I', '2023-12-10', '11:30:00', 8, NULL, NULL, NULL),
    (19, 'E193045U', '2023-12-15', '12:30:00', 9, NULL, NULL, NULL),
    (34, 'E204615J', '2023-12-20', '13:00:00', 10, NULL, NULL, NULL),
    (34, 'E204615J', '2023-12-20', '12:00:00', 10, NULL, NULL, NULL),
    (33, 'E225457X', '2023-12-25', '11:30:00', 11, NULL, NULL, NULL),
    (32, 'E227821Y', '2023-12-30', '13:30:00', 12, NULL, NULL, NULL),
    (32, 'E227821Y', '2023-12-30', '12:30:00', 12, NULL, NULL, NULL),
    (31, 'E183029C', '2023-01-04', '12:30:00', 13, NULL, NULL, NULL),
    (30, 'E223045D', '2023-01-09', '12:00:00', 14, NULL, NULL, NULL),
    (30, 'E223045D', '2023-01-09', '13:00:00', 14, NULL, NULL, NULL),
    (29, 'E214029G', '2023-01-14', '13:30:00', 15, NULL, NULL, NULL);


INSERT INTO date_reserve(date_reserve, deuxieme_reserve)
VALUES
    ('2023-12-01', true),
    ('2023-12-01', false),
    ('2023-12-05', false),
    ('2023-12-10', true),
    ('2023-12-10', false),
    ('2023-12-15', false),
    ('2023-12-20', true),
    ('2023-12-20', false),
    ('2023-12-25', false),
    ('2023-12-30', true),
    ('2023-12-30', false),
    ('2023-01-04',false),
    ('2023-01-09',true),
    ('2023-01-09',false),
    ('2023-01-14', false);


INSERT INTO Cafet (Id_restoCrous)
VALUES
    (16),
    (32),
    (30),
    (28),
    (27),
    (26),
    (24);



-- Ajout des articles 
INSERT INTO Article (id_article, nom_article, type_article, vegetarien, prix)
VALUES
    (1, 'Assortiment de fruits de mer', 'plat', FALSE, 9.00),
    (2, 'Carpaccio de bœuf truffé', 'plat', FALSE, 8.50),
    (3, 'Fondant au chocolat', 'dessert', FALSE, 4.00),
    (4, 'Tiramisu aux fruits rouges', 'dessert', FALSE, 4.50),
    (5, 'Bruschetta à la tomate et mozzarella', 'plat', TRUE, 7.00),
    (6, 'Paella aux fruits de mer', 'entree', FALSE, 10.00),
    (7, 'Curry de pois chiches et légumes', 'entree', TRUE, 8.00),
    (8, 'Rouleaux de printemps aux légumes', 'plat', TRUE, 6.50),
    (9, 'Cheesecake végétalien', 'dessert', TRUE, 5.50),
    (10, 'Assortiment de grillades (bœuf, poulet, porc)', 'entree', FALSE, 12.00),
    (11, 'Salade de roquette aux noix', 'plat', TRUE, 6.00),
    (12, 'Mousse au citron', 'dessert', FALSE, 4.50),
    (13, 'Pâtes carbonara', 'entree', FALSE, 9.00),
    (14, 'Caprese classique', 'plat', TRUE, 7.50),
    (15, 'Tiramisu traditionnel', 'dessert', FALSE, 5.00),
    (16, 'Risotto aux asperges', 'entree', TRUE, 10.50),
    (17, 'Salade de quinoa aux légumes printaniers', 'plat', TRUE, 8.00),
    (18, 'Panna cotta à la fraise', 'dessert', FALSE, 5.50),
    (19, 'Tempura de glace au thé vert', 'dessert', FALSE, 6.00),
    (20, 'Soupe miso aux champignons', 'plat', TRUE, 6.50),
    (21, 'Sushi et sashimi assortis', 'entree', FALSE, 11.00),
    (22, 'Magret de canard rôti', 'entree', FALSE, 13.00),
    (23, 'Tacos au poisson', 'entree', FALSE, 9.50),
    (24, 'Tartare de saumon aux saveurs asiatiques', 'entree', FALSE, 11.50),
    (25, 'Carpaccio de Saint-Jacques', 'plat', FALSE, 10.00),
    (26, 'Guacamole frais avec nachos', 'plat', TRUE, 7.50),
    (27, 'Churros avec sauce au chocolat', 'dessert', FALSE, 4.50),
    (28, 'Maki au foie gras et mangue', 'plat', FALSE, 8.00),
    (29, 'Millefeuille exotique', 'dessert', FALSE, 6.50),
    (30, 'Fondant au caramel salé', 'dessert', FALSE, 5.00);



INSERT INTO Menu (id_menu, nom_menu, description_menu, id_plat,  id_entree, id_dessert, prix)
VALUES
    (6, 'Menu Dégustation', 'Expérience gastronomique avec une sélection de plats signatures.', 'Assortiment de fruits de mer', 'Carpaccio de bœuf truffé', 'Fondant au chocolat', 5.50),
    (7, 'Menu Méditerranéen', 'Voyagez au cœur de la Méditerranée avec cette sélection de saveurs ensoleillées.', 'Paella aux fruits de mer', 'Bruschetta à la tomate et mozzarella', 'Tiramisu aux fruits rouges', 6.50),
    (8, 'Menu Végan', 'Plaisirs végétaliens avec des plats riches en saveurs et en nutriments.', 'Curry de pois chiches et légumes', 'Rouleaux de printemps aux légumes', 'Cheesecake végétalien', 5.00),
    (9, 'Menu Grillades', 'Succombez aux délices des grillades avec une variété de viandes savoureuses.', 'Assortiment de grillades (bœuf, poulet, porc)', 'Salade de roquette aux noix', 'Mousse au citron', 6.00),
    (10, 'Menu Italien', 'Une escapade gustative en Italie avec des plats emblématiques.', 'Pâtes carbonara', 'Caprese classique', 'Tiramisu traditionnel', 4.25),
    (11, 'Menu Printanier', 'Célébrez la saison avec des saveurs fraîches et colorées de printemps.', 'Risotto aux asperges', 'Salade de quinoa aux légumes printaniers', 'Panna cotta à la fraise', 7.00),
    (12, 'Menu Asiatique', "Découvrez l'harmonie des saveurs asiatiques dans ce menu exotique.", 'Sushi et sashimi assortis', 'Soupe miso aux champignons', 'Tempura de glace au thé vert', 6.50),
    (13, 'Menu Gourmand', 'Un festin pour les gourmets avec une sélection de plats raffinés.', 'Magret de canard rôti', 'Carpaccio de Saint-Jacques', 'Fondant au caramel salé', 7.50),
    (14, 'Menu Mexicain', 'Éveillez vos papilles avec les saveurs épicées et vibrantes du Mexique.', 'Tacos au poisson', 'Guacamole frais avec nachos', 'Churros avec sauce au chocolat', 5.50),
    (15, 'Menu Fusion', 'Une fusion créative de cuisines du monde pour une expérience culinaire unique.', 'Tartare de saumon aux saveurs asiatiques', 'Maki au foie gras et mangue', 'Millefeuille exotique', 6.50);



INSERT INTO date_menu(date_menu)
VALUES
    ('2023-12-01'),
    ('2023-12-05'),
    ('2023-12-10'),
    ('2023-12-15'),
    ('2023-12-20'),
    ('2023-12-25'),
    ('2023-12-30'),
    ('2023-01-04'),
    ('2023-01-09'),
    ('2023-01-14'); 



INSERT INTO propose (id_menu, id_restoCrous, date_menu)
VALUES
    (6, 16,'2023-12-01'), 
    (7, 17,'2023-12-05'), 
    (8, 18,'2023-12-10'),
    (8, 28,'2023-12-15'),
    (6, 26,'2023-12-05'),
    (7, 25,'2023-12-15'),
    (8, 24,'2023-12-20'),
    (9, 27,'2023-12-25'),
    (10, 26,'2023-12-25'),
    (11, 30,'2023-12-05'),
    (12, 31,'2023-12-30'),
    (13, 32,'2023-12-30'),
    (14, 33,'2023-01-04'),
    (15, 34,'2023-12-05'),
    (6, 28,'2023-01-04'),
    (7, 27,'2023-01-04'),
    (8, 26,'2023-01-04'),
    (9, 25,'2023-01-09'),
    (10, 24,'2023-01-09'),
    (11, 29,'2023-01-14'),
    (12, 30,'2023-01-14'),
    (13, 31,'2023-01-14'),
    (14, 32,'2023-01-14');


INSERT INTO stock (id_restoCrous, id_article, stock)
VALUES
    (16, 1, 50),
    (16, 2, 30),
    (16, 3, 40),
    (17, 4, 25),
    (17, 5, 35),
    (17, 6, 20),
    (18, 7, 45),
    (18, 8, 15),
    (18, 9, 50),
    (28, 7, 25),
    (28, 8, 35),
    (28, 9, 20),
    (26, 1, 45),
    (26, 2, 15),
    (26, 3, 50),
    (25, 4, 30),
    (25, 5, 40),
    (25, 6, 25),
    (17, 2, 30),
    (18, 3, 40),
    (28, 4, 25),
    (16, 5, 35),
    (16, 9, 50),
    (17, 10, 30),
    (18, 11, 40),
    (28, 12, 25),
    (16, 13, 35),
    (17, 14, 20),
    (18, 15, 45),
    (28, 16, 15),
    (16, 17, 50),
    (17, 18, 30),
    (18, 19, 40),
    (28, 20, 25);



INSERT INTO RU (Id_restoCrous, nb_place)
VALUES
        (17, '400'),
    (18, '350'),
    (19, '300'),
    (34, '450'),
    (33, '500'),
    (31, '350'),
    (29, '400'),
    (26, '450'),
    (25, '500');



