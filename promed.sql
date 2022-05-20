-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 20 mai 2022 à 12:56
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
  `voie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `code_postal` int NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`id`, `voie`, `numero`, `code_postal`, `ville`) VALUES
(1, 'rue General Leclerc', 52, 56000, 'Vannes'),
(2, 'Chemin Chantemerle', 12, 56250, 'Tredion'),
(4, 'Lieu dit Culdesac', 50, 56250, 'Elven'),
(6, 'Avenue Adolph Tiers', 10, 56000, 'Vannes'),
(7, 'Avenue Adolph Tiers', 10, 56000, 'Vannes');

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
  `activite` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_secu` bigint DEFAULT NULL,
  `mutuelle` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `caisse` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `nom_tuteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` bigint DEFAULT NULL,
  `sexe` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `id_adresse` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `email`, `activite`, `num_secu`, `mutuelle`, `caisse`, `date_naissance`, `nom_tuteur`, `telephone`, `sexe`, `mot_de_passe`, `photo`, `id_adresse`) VALUES
(59, 'Bignou', 'Fabien', 'fabienBignou@test.com', '', 1234567891234, 'Mutuelle Test', 'Caisse Test', '1975-05-20', '', 633445566, '', '$2y$10$5kxhZUYOYUjgYnRV28hfRe3XPMQ1uQPBNi4ENqqoRMtnUawkuW9KC', NULL, 6),
(60, 'Bleu', 'Ludovic', 'ludovicBleu@test.com', '', 1234567854694, 'Mutuelle Test2', 'Caisse Test2', '1990-04-30', '', 655667744, '', '$2y$10$ZdbTwaugVrjegWj/raUaI.27XLlv2uSqLYf.QVQBKlGdp0KGxME9S', NULL, 7),
(61, 'Codeur', 'Julie', 'julieCodeur@test.com', '', 1234543457659, 'Mutuelle Test3', 'Caisse Test3', '2015-01-02', 'Codeur Jean', 677456754, '', '$2y$10$ZXEv3Rw.A/lxll0YsVv1uercbBRgZtWuorB.juhtjPySpJJeh5GVi', NULL, 1);

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
  PRIMARY KEY (`id`),
  KEY `id_adresse` (`id_adresse`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `praticien`
--

INSERT INTO `praticien` (`id`, `nom`, `prenom`, `id_adresse`, `email`, `rpps`, `activite`, `mot_de_passe`) VALUES
(9, 'Tournesol', 'Pierre', 1, 'pierreTournesol@test.com', 56253, 'Infirmier', '$2y$10$vzv/hkklvZYM.iCr4.jtqujYpQDG1uvzsvDhhv7mkVJfvjyoHK6r.'),
(10, 'Raoult', 'Jean', 2, 'jeanRaoult@test.com', 23654, 'Podologue', '$2y$10$q9iGpBdkwPxd0/i9WdjnC.l79b.CaSSQ4klyi8e5mjLSuHd.ZlOLy'),
(11, 'Dodu', 'Marc', 4, 'marcDodo@test.com', 564325, 'Kinésitherapeute', '$2y$10$tbOFACdy4rKeK8ZWcnqsuuFm9NR2hFR.q6vZKHfGB6loHoQkjd8cW');

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
  `date_heure` datetime DEFAULT NULL,
  `validite` tinyint(1) DEFAULT NULL,
  `paiement` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_praticien` (`id_praticien`),
  KEY `id_patient` (`id_patient`),
  KEY `id_pec` (`id_pec`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id`, `id_praticien`, `id_patient`, `id_pec`, `date_heure`, `validite`, `paiement`) VALUES
(1, 9, 59, 1, '2022-05-20 17:30:00', 1, b'0'),
(3, 9, 60, 2, '2022-05-20 16:00:00', 1, b'0'),
(4, 10, 61, 2, '2022-05-20 15:00:00', 1, b'0'),
(5, 10, 59, 2, '2022-05-20 18:00:00', 1, b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
