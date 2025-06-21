-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql209.infinityfree.com
-- Généré le :  sam. 21 juin 2025 à 19:39
-- Version du serveur :  10.6.19-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_39289255_resonia`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_affinite`
--

CREATE TABLE `tb_affinite` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(125) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Risque` varchar(2000) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_affinite`
--

INSERT INTO `tb_affinite` (`Id`, `Nom`, `Description`, `Risque`, `Type`) VALUES
(30, 'Double', 'Neant', 'Neant', 1),
(31, 'Double inversÃ©e', 'Neant', 'Neant', 2),
(32, 'Mirroir', 'Neant', 'Neant', 3),
(33, 'Echo', 'Neant', 'Neant', 4),
(34, 'Dimension parrallÃ¨le', 'Neant', 'Neant', 5),
(35, 'Profondeur', 'Neant', 'Neant', 6),
(36, 'ComplÃ©ment', 'Neant', 'Neant', 7),
(37, 'Cadre harmonieux', 'Neant', 'Neant', 8),
(38, 'Cadre faible', 'Neant', 'Neant', 9),
(39, 'Adjuvant', 'Neant', 'Neant', 10),
(40, 'CuriositÃ©', 'Neant', 'Neant', 11),
(41, 'Echo complÃ©mentaire', 'Neant', 'Neant', 12),
(42, 'Echo contradictoire', 'Neant', 'Neant', 13),
(43, 'Moteur', 'Neant', 'Neant', 14),
(44, 'RÃ©vÃ©lateur', 'Neant', 'Neant', 15),
(45, 'Double opposÃ©e', 'Neant', 'Neant', 16),
(46, 'Entraineur', 'Neant', 'Neant', 17),
(47, 'Aspirant', 'Neant', 'Neant', 18),
(48, 'AffinitÃ© souterraine', 'Neant', 'Neant', 19),
(49, 'Terrain dangereux', 'Neant', 'Neant', 20),
(50, 'AlliÃ© Ã©fficace', 'Neant', 'Neant', 21),
(51, 'AlliÃ© conflictuel', 'Neant', 'Neant', 22),
(52, 'Cadre inversÃ©e', 'Neant', 'Neant', 23),
(53, 'OpposÃ©e', 'Neant', 'Neant', 24),
(54, 'Traducteur', 'Neant', 'Neant', 25),
(55, 'Immobilisateur', 'Neant', 'Neant', 26);

-- --------------------------------------------------------

--
-- Structure de la table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `Id` int(11) NOT NULL,
  `Vie` varchar(20) NOT NULL,
  `Action` varchar(20) NOT NULL,
  `Pensee` varchar(20) NOT NULL,
  `Volonte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_categories`
--

INSERT INTO `tb_categories` (`Id`, `Vie`, `Action`, `Pensee`, `Volonte`) VALUES
(1, 'G', 'S', 'SD', 'P'),
(2, 'G', 'S', 'P', 'SD'),
(3, 'G', 'SD', 'S', 'P'),
(4, 'G', 'SD', 'P', 'S'),
(5, 'G', 'P', 'S', 'SD'),
(6, 'G', 'P', 'SD', 'S'),
(7, 'S', 'G', 'SD', 'P'),
(8, 'S', 'G', 'P', 'SD'),
(9, 'S', 'SD', 'G', 'P'),
(10, 'S', 'SD', 'P', 'G'),
(11, 'S', 'P', 'G', 'SD'),
(12, 'S', 'P', 'SD', 'G'),
(13, 'SD', 'S', 'G', 'P'),
(14, 'SD', 'S', 'P', 'G'),
(15, 'SD', 'G', 'S', 'P'),
(16, 'SD', 'G', 'P', 'S'),
(17, 'SD', 'P', 'S', 'G'),
(18, 'SD', 'P', 'G', 'S'),
(19, 'P', 'S', 'SD', 'G'),
(20, 'P', 'S', 'G', 'SD'),
(21, 'P', 'SD', 'S', 'G'),
(22, 'P', 'SD', 'G', 'S'),
(23, 'P', 'G', 'S', 'SD'),
(24, 'P', 'G', 'SD', 'S');

-- --------------------------------------------------------

--
-- Structure de la table `tb_personne`
--

CREATE TABLE `tb_personne` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(125) NOT NULL,
  `Id_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_personne`
--

INSERT INTO `tb_personne` (`Id`, `Nom`, `Id_Categorie`) VALUES
(6, 'ZAOUI Adam', 23),
(7, 'FAIVRE ElÃ©na', 14),
(8, 'Mathias', 7),
(9, 'BELAÃD Myriam', 17),
(10, 'BELAÃD Adam', 1),
(11, 'HAMIDI Liesse', 7),
(12, 'HAMIDI Noria', 1),
(13, 'ZERMANI Bilel', 2),
(14, 'PINEAUT Audrey', 6),
(15, 'ELUSUE Samuel', 5),
(16, 'BOUBEZOULA Zinedine', 24),
(17, 'RETOUT OphÃ©lie', 2),
(18, 'BENAOUDA Habib', 9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_affinite`
--
ALTER TABLE `tb_affinite`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tb_personne`
--
ALTER TABLE `tb_personne`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_affinite`
--
ALTER TABLE `tb_affinite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `tb_personne`
--
ALTER TABLE `tb_personne`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
