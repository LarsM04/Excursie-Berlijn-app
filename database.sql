CREATE DATABASE IF NOT EXISTS excursie_berlijn_app
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

USE excursie_berlijn_app;

DROP TABLE IF EXISTS activiteiten;
DROP TABLE IF EXISTS bezienswaardigheden;
DROP TABLE IF EXISTS gebruikers;

CREATE TABLE gebruikers (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	naam VARCHAR(120) NOT NULL,
	gebruikersnaam VARCHAR(80) NOT NULL UNIQUE,
	wachtwoord VARCHAR(255) NOT NULL,
	rol ENUM('admin', 'redacteur') NOT NULL DEFAULT 'admin',
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE bezienswaardigheden (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titel VARCHAR(150) NOT NULL,
	categorie VARCHAR(60) NOT NULL,
	beschrijving TEXT NOT NULL,
	afbeelding VARCHAR(255) NOT NULL,
	reistijd VARCHAR(40) NOT NULL,
	prijs VARCHAR(40) NOT NULL,
	is_featured TINYINT(1) NOT NULL DEFAULT 0,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE activiteiten (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titel VARCHAR(150) NOT NULL,
	categorie VARCHAR(60) NOT NULL,
	beschrijving TEXT NOT NULL,
	afbeelding VARCHAR(255) NOT NULL,
	duur VARCHAR(40) NOT NULL,
	label VARCHAR(80) NOT NULL,
	bezienswaardigheid_id INT UNSIGNED NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	CONSTRAINT fk_activiteiten_bezienswaardigheid
		FOREIGN KEY (bezienswaardigheid_id)
		REFERENCES bezienswaardigheden(id)
		ON DELETE SET NULL
		ON UPDATE CASCADE
) ENGINE=InnoDB;

INSERT INTO gebruikers (naam, gebruikersnaam, wachtwoord, rol) VALUES
('Beheerder', 'admin', '$2y$10$2FhO5v9O3s4dY0oWmK2b4uBqJrFf3fXK7ZQ9x4d2QmH2m1KxY7S9S', 'admin');

INSERT INTO bezienswaardigheden (titel, categorie, beschrijving, afbeelding, reistijd, prijs, is_featured) VALUES
('Brandenburger Tor', 'historisch', 'Het meest herkenbare symbool van Berlijn en een perfecte startplek voor foto''s en een korte uitleg over de stad.', 'assets/images/Brandenburg.jpg', '15 min', 'Gratis', 1),
('Reichstag', 'politiek', 'Een indrukwekkend parlementsgebouw met glazen koepel en een mooi uitzicht over het centrum.', 'assets/images/reichstach.jpg', '30 min', 'Gratis', 1),
('Museuminsel', 'kunst', 'Een sterk cultuurcluster met verschillende musea op loopafstand. Ideaal voor een educatieve stop.', 'assets/images/Museuminsel.jpg', '45 min', 'Ticket', 1),
('Fernsehturm', 'uitzicht', 'De televisietoren geeft je een panoramisch uitzicht over de stad en maakt de skyline direct herkenbaar.', 'assets/images/Fernsehturm.jpg', '40 min', 'Betaald', 1),
('East Side Gallery', 'street art', 'De langste openluchtgalerie van de stad, vol street art en verhalen over de Berlijnse Muur.', 'assets/images/eastside.jpg', '25 min', 'Gratis', 1);

INSERT INTO activiteiten (titel, categorie, beschrijving, afbeelding, duur, label, bezienswaardigheid_id) VALUES
('Fietstour langs highlights', 'route', 'Een actieve start waarmee je in korte tijd veel van de stad ziet.', 'assets/images/Brandenburg.jpg', '2 uur', 'Groepsactiviteit', 1),
('Avondwandeling door het centrum', 'avond', 'Rustig wandelen langs bekende plekken en de stad in de avond ervaren.', 'assets/images/Fernsehturm.jpg', '1,5 uur', 'Relaxed tempo', 4),
('Streetfood of foodmarkt', 'eten', 'Handig voor lunch of avondeten: veel keuze en vaak betaalbaar voor studenten.', 'assets/images/eastside.jpg', 'Vrij', 'Budgetvriendelijk', 5),
('Museum challenge', 'route', 'Geef de groep een korte opdracht of quiz voor extra focus tijdens het museumbezoek.', 'assets/images/Museuminsel.jpg', '30 min', 'Interactief', 3),
('Groepsfoto-stop', 'route', 'Plan een vaste fotospot bij een monument of uitzichtpunt voor een duidelijk excursiemoment.', 'assets/images/reichstach.jpg', '10 min', 'Makkelijk in te passen', 2);
