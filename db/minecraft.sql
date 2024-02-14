-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 fév. 2024 à 16:24
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `minecraft`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `image`, `nom`) VALUES
(1, 'assets\\img\\ingredients\\Sucre.webp', 'Sucre'),
(2, 'assets\\img\\ingredients\\Poudre_de_Blaze.webp', 'Poudre de blaze'),
(3, 'assets\\img\\ingredients\\Oeil_d\'araignée.webp', 'Oeil araignee'),
(4, 'assets\\img\\ingredients\\carottedoree', 'Carotte dorée'),
(5, 'assets\\img\\ingredients\\tranchedepasteque', 'Tranche de pastèque scintillante');

-- --------------------------------------------------------

--
-- Structure de la table `potions`
--

DROP TABLE IF EXISTS `potions`;
CREATE TABLE IF NOT EXISTS `potions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `effet` varchar(100) DEFAULT NULL,
  `duree` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `potions`
--

INSERT INTO `potions` (`id`, `image`, `nom`, `effet`, `duree`) VALUES
(1, 'assets\\img\\potions\\force.webp', 'Potion de Force', 'Augmente les dégâts de mêlée de 3 coeur par niveau.', 3),
(3, 'assets\\img\\potions\\poison.webp', 'Potion de poison', 'Réduit progressivement la vie de 36 jusqu’à ce qu\'il ne reste plus que 1 coeur maximum.', 1),
(4, 'assets\\img\\potions\\regeneration.webp', 'Potion de régénération', 'Régénère progressivement 18 coeur au rythme de 1/2 coeur par seconde ', 2),
(5, 'assets\\img\\potions\\vitesse.webp', 'Potion de vitesse', 'Augmente la vitesse de déplacement du joueur de 20 % ainsi que le champ de vision (6,6 blocs par sec', 3);

-- --------------------------------------------------------

--
-- Structure de la table `potion_ingredients`
--

DROP TABLE IF EXISTS `potion_ingredients`;
CREATE TABLE IF NOT EXISTS `potion_ingredients` (
  `potion_id` int NOT NULL,
  `ingredient_id` int NOT NULL,
  PRIMARY KEY (`potion_id`,`ingredient_id`),
  KEY `ingredient_id` (`ingredient_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `potion_ingredients`
--

INSERT INTO `potion_ingredients` (`potion_id`, `ingredient_id`) VALUES
(1, 1),
(5, 1),
(1, 2),
(5, 2),
(3, 3),
(4, 4),
(5, 4),
(3, 5),
(4, 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `potion_ingredients`
--
ALTER TABLE `potion_ingredients`
  ADD CONSTRAINT `potion_ingredients_ibfk_1` FOREIGN KEY (`potion_id`) REFERENCES `potions` (`id`),
  ADD CONSTRAINT `potion_ingredients_ibfk_2` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
