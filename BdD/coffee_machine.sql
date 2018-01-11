-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 jan. 2018 à 14:37
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coffee_machine`
--

-- --------------------------------------------------------

--
-- Structure de la table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `code` char(3) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `drinks`
--

INSERT INTO `drinks` (`code`, `name`, `price`) VALUES
('cap', 'Capuccino', 90),
('cho', 'Chocolat', 60),
('dbl', 'Double expresso', 80),
('exp', 'Expresso', 40),
('lat', 'Latte', 70),
('let', 'Thé au citron', 70),
('tea', 'Thé', 50);

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ingredients_stock` smallint(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `ingredients_stock`) VALUES
(1, 'water', 500),
(2, 'coffee', 0),
(3, 'milk', 100),
(4, 'cocoa', 100),
(5, 'tea', 100),
(6, 'sugar', 100),
(7, 'lemon', 100);

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `drinks_code` char(3) NOT NULL,
  `ingredients_id` int(11) NOT NULL,
  `recipeqty` int(11) DEFAULT NULL,
  PRIMARY KEY (`drinks_code`,`ingredients_id`),
  KEY `fk_drinks_has_ingredients_ingredients1_idx` (`ingredients_id`),
  KEY `fk_drinks_has_ingredients_drinks_idx` (`drinks_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`drinks_code`, `ingredients_id`, `recipeqty`) VALUES
('cap', 1, 1),
('cap', 2, 1),
('cap', 3, 1),
('cap', 4, 1),
('cho', 1, 1),
('cho', 3, 1),
('cho', 4, 1),
('dbl', 1, 2),
('dbl', 2, 2),
('exp', 1, 1),
('exp', 2, 1),
('lat', 1, 1),
('lat', 2, 1),
('lat', 3, 1),
('let', 1, 2),
('let', 5, 1),
('let', 7, 1),
('tea', 1, 2),
('tea', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `drinks_code` char(3) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sugar` tinyint(5) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`,`drinks_code`),
  KEY `fk_drinks_has_ingredients_drinks1_idx` (`drinks_code`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sales`
--

INSERT INTO `sales` (`drinks_code`, `id`, `sugar`, `date`) VALUES
('exp', 1, NULL, '2018-01-05 08:38:12'),
('dbl', 2, NULL, '2018-01-05 09:05:44'),
('exp', 3, NULL, '2018-01-05 09:11:17'),
('tea', 4, NULL, '2018-01-05 09:39:13'),
('exp', 5, NULL, '2018-01-05 10:11:14'),
('dbl', 6, NULL, '2018-01-05 09:44:06'),
('cho', 7, NULL, '2018-01-05 10:40:15'),
('tea', 8, NULL, '2018-01-05 10:37:14'),
('cho', 9, NULL, '2018-01-05 10:48:25'),
('dbl', 10, NULL, '2018-01-05 11:08:34');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `fk_drinks_has_ingredients_drinks` FOREIGN KEY (`drinks_code`) REFERENCES `drinks` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_drinks_has_ingredients_ingredients1` FOREIGN KEY (`ingredients_id`) REFERENCES `ingredients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `fk_drinks_has_ingredients_drinks1` FOREIGN KEY (`drinks_code`) REFERENCES `drinks` (`code`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
