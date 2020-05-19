-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 mai 2020 à 07:23
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `calendrier`
--
CREATE DATABASE IF NOT EXISTS `calendrier` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `calendrier`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCategorie` varchar(50) NOT NULL,
  `CouleurCategorie` varchar(7) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `libelleCategorie`, `CouleurCategorie`) VALUES
(1, 'Concert', '#eda901'),
(2, 'Manifestation', '#bf172e'),
(3, 'Culture', '#1f7833'),
(4, 'Sport', '#1d80c4'),
(5, 'Marché', '#754494'),
(6, 'Kermesse', '#da6612'),
(7, 'Test', '#e24792');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `idEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEvenement` varchar(150) NOT NULL,
  `dateEvenement` datetime NOT NULL,
  `descriptionEvenement` varchar(500) NOT NULL,
  `auteurEvenement` varchar(50) NOT NULL,
  `lieuEvenement` varchar(50) NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUtilisateur` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idEvenement`),
  KEY `Evenements_Utilisateurs_FK` (`idUtilisateur`),
  KEY `Evenements_Categories_FK` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`idEvenement`, `libelleEvenement`, `dateEvenement`, `descriptionEvenement`, `auteurEvenement`, `lieuEvenement`, `dateCreation`, `idUtilisateur`, `idCategorie`) VALUES
(1, 'Marché aux légumes', '2020-05-16 00:00:00', 'un Marché aux légumes ouvert à tous', 'Alison', 'Parking Mairie', '2020-05-14 00:00:00', 1, 5),
(2, 'Concert de Booba', '2020-06-10 00:00:00', 'Concert de Booba', 'Booba', 'Salle ', '2020-05-14 00:00:00', 2, 1),
(4, 'Tournoi Ping Pong', '2020-06-10 00:00:00', 'ping', 'Nico', 'Gymnase', '2020-05-14 00:00:00', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `emailUtilisateur` varchar(150) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `telephoneUtilisateur` int(11) DEFAULT NULL,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(150) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `pseudo`, `emailUtilisateur`, `motDePasse`, `role`, `telephoneUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`) VALUES
(1, 'AlisonV', 'alison@alison.fr', '38b05a6ea700fa6774e8aee14f6704eb', 1, NULL, 'Veraghe', 'Alison'),
(2, 'MathysC', 'Mathys@mathys.fr', 'd65a03ef275eaaf4fb2531d00fd71f48', 2, NULL, 'Colin', 'Mathys');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD CONSTRAINT `Evenements_Categories_FK` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`),
  ADD CONSTRAINT `Evenements_Utilisateurs_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
