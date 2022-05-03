-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 jan. 2022 à 12:50
-- Version du serveur : 5.7.36
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_praticien` int(11) DEFAULT NULL,
  `id_patient` int(11) DEFAULT NULL,
  `voie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numéro` int(11) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activité` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_secu` bigint(20) DEFAULT NULL,
  `mutuelle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caisse` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `nom_tuteur` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` bigint(20) DEFAULT NULL,
  `sexe` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `id_adresse` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `email`, `activité`, `num_secu`, `mutuelle`, `caisse`, `date_naissance`, `nom_tuteur`, `telephone`, `sexe`, `mot_de_passe`, `photo`, `id_adresse`) VALUES
(1, 'Dupont', 'Jean', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 1),
(2, 'Durand', 'Juliette', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '87654321', NULL, 3),
(3, 'Macron', 'Emmanuel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '563287410', NULL, 5),
(4, 'Pierre', 'Thierry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 1),
(6, 'Filo', 'Jeannine', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12345678', NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
CREATE TABLE IF NOT EXISTS `praticien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_adresse` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rpps` bigint(20) NOT NULL,
  `activite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mot_de_passe` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`id`, `nom`, `prenom`, `id_adresse`, `email`, `rpps`, `activite`, `mot_de_passe`) VALUES
(1, 'Tournesol', 'pierre', 1, 'pierre.t@free.com', 56253, 'infirmier', '12345678'),
(2, 'Raoult', 'Jean', 3, 'jr@gmail.com', 23654, 'podologue', '12345678'),
(3, 'Dodu', 'Marc', 5, 'md@free.com', 564325, 'kinésitherapeute', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `prise_en_charge`
--

DROP TABLE IF EXISTS `prise_en_charge`;
CREATE TABLE IF NOT EXISTS `prise_en_charge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prix` decimal(11,0) NOT NULL,
  `duree` int(11) NOT NULL,
  `regle` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_praticien` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_pec` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_praticien` (`id_praticien`),
  KEY `id_patient` (`id_patient`),
  KEY `id_pec` (`id_pec`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id`, `id_praticien`, `id_patient`, `id_pec`) VALUES
(1, 1, 6, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
