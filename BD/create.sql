
drop table joueur_parties;
drop table parties;
drop table joueurs;
drop table niveaux;
drop table cartes;

CREATE TABLE joueurs (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(255) not null,
	mdp VARCHAR (255) not null,
	point INT,
	nbParties INT,
	nbVictoires INT,
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

CREATE TABLE parties (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) not null,
	typeP enum('Arcade', 'Versus') not null,
	enCours boolean not null,
	nbJoueurs INT,
	joueurCourant INT,
	joueurHost INT,
    created DATETIME DEFAULT NULL,
	FOREIGN KEY (joueurHost) REFERENCES joueurs(id)
);

CREATE TABLE cartes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255) not null,
	collection VARCHAR(255) not null
);

CREATE TABLE niveaux (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) not null,
	nbCartes int not null,
	CoeffPoint int
);

CREATE TABLE joueur_parties (
	id_joueur INT not null,
	id_table INT not null,
	id_carte_maitresse INT,
	PRIMARY KEY (id_joueur,id_table),
	FOREIGN KEY (id_joueur) REFERENCES joueurs(id),
	FOREIGN KEY (id_table) REFERENCES tables(id),
	FOREIGN KEY (id_carte_maitresse) REFERENCES cartes(id)
);

CREATE TABLE carte_parties(
	id_table INT not null,
	id_carte INT not null,
	position_x INT not null,
	position_y INT not null,
	PRIMARY KEY (id_carte,id_table),
	FOREIGN KEY (id_carte) REFERENCES cartes(id),
	FOREIGN KEY (id_table) REFERENCES tables(id)
);

