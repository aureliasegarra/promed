-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 03 mai 2022 à 12:50
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `promed`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_praticien` int DEFAULT NULL,
  `id_patient` int DEFAULT NULL,
  `voie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numéro` int NOT NULL,
  `code_postal` int NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `id_praticien`, `id_patient`, `voie`, `numéro`, `code_postal`, `ville`) VALUES
(1, 1, 0, 'rue General Leclerc', 52, 56000, 'Vannes'),
(2, 2, 0, 'Chemin Chantemerle', 12, 56250, 'Tredion'),
(4, NULL, 6, 'Lieu dit Culdesac', 50, 56250, 'Elven'),
(6, 3, NULL, 'Avenue Adolph Tiers', 10, 56000, 'Vannes'),
(7, 3, NULL, 'Avenue Adolph Tiers', 10, 56000, 'Vannes');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `activité` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_secu` bigint DEFAULT NULL,
  `mutuelle` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `caisse` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `nom_tuteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` bigint DEFAULT NULL,
  `sexe` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `id_adresse` int NOT NULL,
  `salt` char(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `email`, `activité`, `num_secu`, `mutuelle`, `caisse`, `date_naissance`, `nom_tuteur`, `telephone`, `sexe`, `mot_de_passe`, `photo`, `id_adresse`, `salt`) VALUES
(1, 'Dupont', 'Jean', 'jeanDupont@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 1, ''),
(2, 'Durand', 'Juliette', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '87654321', NULL, 3, ''),
(3, 'Macron', 'Emmanuel', 'emmanuelmacron@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '563287410', NULL, 5, ''),
(4, 'Pierre', 'Thierry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 1, ''),
(6, 'Filo', 'Jeannine', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 3, ''),
(10, 'TestNom', 'TestPrenom', 'test@email.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, ''),
(12, 'TestNom2', 'TestPrenom2', 'test2@email.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
CREATE TABLE IF NOT EXISTS `praticien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_adresse` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rpps` bigint NOT NULL,
  `activite` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`id`, `nom`, `prenom`, `id_adresse`, `email`, `rpps`, `activite`, `mot_de_passe`, `salt`) VALUES
(1, 'Tournesol', 'Pierre', 1, 'pierre.t@free.com', 56253, 'infirmier', '12345678', ''),
(2, 'Raoult', 'Jean', 3, 'jr@gmail.com', 23654, 'podologue', '12345678', ''),
(3, 'Dodu', 'Marc', 5, 'md@free.com', 564325, 'kinésitherapeute', '12345678', '');

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

DROP TABLE IF EXISTS `prise_en_charge`;
CREATE TABLE IF NOT EXISTS `prise_en_charge` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(11,0) NOT NULL,
  `duree` int NOT NULL,
  `regle` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `prise_en_charge`
--

INSERT INTO `prise_en_charge` (`id`, `type`, `prix`, `duree`, `regle`) VALUES
(1, 'Consultation', '25', 20, 0),
(2, 'Bilan', '30', 25, 0),
(4, 'Suivi', '25', 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_praticien` int NOT NULL,
  `id_patient` int NOT NULL,
  `id_pec` int NOT NULL,
  `date_heure` datetime NOT NULL,
  `validite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_praticien` (`id_praticien`),
  KEY `id_patient` (`id_patient`),
  KEY `id_pec` (`id_pec`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id`, `id_praticien`, `id_patient`, `id_pec`, `date_heure`, `validite`) VALUES
(1, 1, 6, 1, '0000-00-00 09:30:00', 0),
(3, 1, 3, 2, '2023-04-06 17:45:00', 1),
(4, 2, 4, 1, '0000-00-00 00:00:00', 1),
(5, 2, 1, 1, '2022-05-03 10:00:00', 1),
(6, 3, 1, 1, '2022-05-03 10:45:00', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
