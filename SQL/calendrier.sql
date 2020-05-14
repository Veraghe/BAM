-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 mai 2020 à 12:07
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

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
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `libelleCategorie`) VALUES
(1, 'Concert'),
(2, 'Manifestation'),
(3, 'Culture'),
(4, 'Sport'),
(5, 'Marché');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `idEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `libelleEvenement` varchar(150) NOT NULL,
  `dateEvenement` date NOT NULL,
  `descriptionEvenement` varchar(500) NOT NULL,
  `auteurEvenement` varchar(50) NOT NULL,
  `lieuEvenement` varchar(50) NOT NULL,
  `dateCreation` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idEvenement`),
  KEY `Evenements_Utilisateurs_FK` (`idUtilisateur`),
  KEY `Evenements_Categories_FK` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`idEvenement`, `libelleEvenement`, `dateEvenement`, `descriptionEvenement`, `auteurEvenement`, `lieuEvenement`, `dateCreation`, `idUtilisateur`, `idCategorie`) VALUES
(1, 'Marché aux légumes', '2020-05-16', 'un Marché aux légumes ouvert à tous', 'Alison', 'Parking Mairie', '2020-05-14', 1, 5),
(2, 'Concert de Booba', '2020-06-10', 'Concert de Booba', 'Booba', 'Salle ', '2020-05-14', 2, 1);

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
(1, 'AlisonV', 'alison@alison.fr', 'alison', 1, NULL, 'Veraghe', 'Alison'),
(2, 'MathysC', 'Mathys@mathys.fr', 'mathys', 2, NULL, 'Colin', 'Mathys');

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
