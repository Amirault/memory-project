CREATE TABLE IF NOT EXISTS `gameTypes` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `difficulties` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `numberOfPairs` int(11) NOT NULL,
  `CoefficientForPoint` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` int(11) DEFAULT 0,
  `numberOfGames` int(11) DEFAULT 0,
  `numberOfVictories` int(11) DEFAULT 0,
  UNIQUE KEY `login` (`login`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `difficulty_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gameType_id` int(11) NOT NULL,
  `isPending` boolean NOT NULL,
  `numberMaximumOfPlayers` int(11) NOT NULL,
  `currentPlayer` int(11),
  `player_id` int(11) NOT NULL,
  FOREIGN KEY (`player_id`) REFERENCES players(`id`),
  FOREIGN KEY (`difficulty_id`) REFERENCES difficulties(`id`),
  FOREIGN KEY (`gameType_id`) REFERENCES gameTypes(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `game_players` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `card_id` int(11),
  `points` int(11) DEFAULT 0,
  FOREIGN KEY (`player_id`) REFERENCES players(`id`),
  FOREIGN KEY (`game_id`) REFERENCES games(`id`),
  FOREIGN KEY (`card_id`) REFERENCES cards(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `game_cards` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `game_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `position_x` int(11) NOT NULL,
  `position_y` int(11) NOT NULL,
  `isFlippedUp` boolean DEFAULT false,
  `isGone` boolean DEFAULT false,
  FOREIGN KEY (`card_id`) REFERENCES cards(`id`),
  FOREIGN KEY (`game_id`) REFERENCES games(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

INSERT INTO `gametypes` (`id`, `name`) VALUES
(1, 'Arcade'),
(2, 'Versus');

INSERT INTO `memory_dev`.`difficulties` (`id`, `numberOfPairs`, `CoefficientForPoint`, `created`, `modified`) VALUES (NULL, '8', '1', NULL, NULL);
INSERT INTO `memory_dev`.`difficulties` (`id`, `numberOfPairs`, `CoefficientForPoint`, `created`, `modified`) VALUES (NULL, '18', '2', NULL, NULL);
INSERT INTO `memory_dev`.`difficulties` (`id`, `numberOfPairs`, `CoefficientForPoint`, `created`, `modified`) VALUES (NULL, '32', '3', NULL, NULL);

--
-- Contenu de la table `cards`
--

INSERT INTO `cards` (`id`, `pathOfImage`, `collection_id`, `created`, `modified`) VALUES
(2, 'Aurelien Normand', 1, '2014-06-12 22:50:03', '2014-06-12 22:50:03'),
(3, 'Cedric Boulet', 1, '2014-06-12 22:50:14', '2014-06-12 22:50:14'),
(4, 'Céline Danglet', 1, '2014-06-12 22:51:38', '2014-06-12 22:51:38'),
(5, 'Clément Farez', 1, '2014-06-12 22:51:47', '2014-06-12 22:51:47'),
(6, 'Dat', 1, '2014-06-12 22:52:01', '2014-06-12 22:52:01'),
(7, 'Eyal Schwebel', 1, '2014-06-12 22:52:12', '2014-06-12 22:52:12'),
(8, 'Fabien Lassié', 1, '2014-06-12 22:52:23', '2014-06-12 22:52:23'),
(9, 'Faouzi Gazzah', 1, '2014-06-12 22:52:32', '2014-06-12 22:52:32'),
(10, 'Flavien MATRAT', 1, '2014-06-12 22:52:45', '2014-06-12 22:52:45'),
(11, 'Francine Ong', 1, '2014-06-12 22:52:54', '2014-06-12 22:52:54'),
(12, 'Giovanny Pierre-Nicolas', 1, '2014-06-12 22:53:03', '2014-06-12 22:53:03'),
(13, 'Julien Beaussier', 1, '2014-06-12 22:53:15', '2014-06-12 22:53:15'),
(14, 'Julien De Almeida', 1, '2014-06-12 22:53:26', '2014-06-12 22:53:26'),
(15, 'Matthias Ballarini', 1, '2014-06-12 22:53:39', '2014-06-12 22:53:39'),
(16, 'Sofiane Akli', 1, '2014-06-12 22:53:48', '2014-06-12 22:53:48'),
(17, 'Stéphanie Chou', 1, '2014-06-12 22:53:58', '2014-06-12 22:53:58'),
(18, 'Thomas Veron', 1, '2014-06-12 22:54:08', '2014-06-12 22:54:08'),
(19, 'Tony Amirault', 1, '2014-06-12 22:54:23', '2014-06-12 22:54:23'),
(20, 'Vaïk Duhautois', 1, '2014-06-12 22:54:31', '2014-06-12 22:54:31'),
(21, 'Vanessa Lenormand', 1, '2014-06-12 22:54:40', '2014-06-12 22:54:40'),
(22, 'Yannig Colin', 1, '2014-06-12 22:54:50', '2014-06-12 22:54:50');