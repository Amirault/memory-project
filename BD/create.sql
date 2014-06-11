CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `pathOfImage` varchar(255) NOT NULL,
  `collection` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `difficulties` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `nom` varchar(255) NOT NULL,
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
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `difficulty_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `typeOfGame` enum('Arcade', 'Versus') NOT NULL,
  `isPending` boolean NOT NULL,
  `numberOfPlayers` int(11) NOT NULL,
  `numberMaximumOfPlayers` int(11) NOT NULL,
  `currentPlayer` int(11),
  `hostPlayer` int(11) NOT NULL,
  FOREIGN KEY (`hostPlayer`) REFERENCES players(`id`),
  FOREIGN KEY (`difficulty_id`) REFERENCES difficulties(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `game_players` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `player_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `masterCard` int(11),
  FOREIGN KEY (`player_id`) REFERENCES players(`id`),
  FOREIGN KEY (`game_id`) REFERENCES games(`id`),
  FOREIGN KEY (`masterCard`) REFERENCES cards(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);

CREATE TABLE IF NOT EXISTS `game_cards` (
  `id` int(10) unsigned AUTO_INCREMENT PRIMARY KEY,
  `game_id` int(11) NOT NULL,
  `card_id` int(11) NOT NULL,
  `position_x` int(11) NOT NULL,
  `position_y` int(11) NOT NULL,
  FOREIGN KEY (`card_id`) REFERENCES cards(`id`),
  FOREIGN KEY (`game_id`) REFERENCES games(`id`),
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
);
