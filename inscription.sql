-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 17 Décembre 2022 à 15:47
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `inscription`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `tel` varchar(25) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `CIN` varchar(20) NOT NULL,
  `CNE` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DateNaissance` varchar(20) NOT NULL,
  `photo` varchar(25) NOT NULL,
  `Scan_CIN` varchar(25) NOT NULL,
  `Type_Bac` varchar(25) NOT NULL,
  `Annee_Bac` varchar(30) NOT NULL,
  `Option_Bac` varchar(20) NOT NULL,
  `Lycee_Origine` varchar(20) NOT NULL,
  `Moy_national` varchar(25) NOT NULL,
  `Moy_regional` varchar(30) NOT NULL,
  `Mention` varchar(20) NOT NULL,
  `Bac` varchar(20) NOT NULL,
  `Releve_Bac` varchar(20) NOT NULL,
  `Releve_Reg` varchar(20) NOT NULL,
  `Academie` varchar(20) NOT NULL,
  `Province` varchar(10) NOT NULL,
  `choix1` varchar(20) NOT NULL,
  `choix2` varchar(20) NOT NULL,
  `choix3` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `Nom`, `Prenom`, `Sexe`, `tel`, `Adresse`, `CIN`, `CNE`, `password`, `Email`, `DateNaissance`, `photo`, `Scan_CIN`, `Type_Bac`, `Annee_Bac`, `Option_Bac`, `Lycee_Origine`, `Moy_national`, `Moy_regional`, `Mention`, `Bac`, `Releve_Bac`, `Releve_Reg`, `Academie`, `Province`, `choix1`, `choix2`, `choix3`) VALUES
(103, 'ALAMI', 'Ahmed', 'homme', '0643001200', '987 RUE quartie', 'hh12', 'J5679', 'aa', 'A@gmail.com', '2001-01-17', './assets/favicon.ico.ico.', './assets/favicon.ico.ico.', 'Public', '2021', 'PC', 'MOULAY ISMAIL', '13,5', '13', 'Assez bien', './assets/favicon.ico', './assets/favicon.ico', './assets/favicon.ico', 'CASABLANCA-STAT', 'CASABLANCA', 'GI', 'GI', 'GI'),
(104, 'CHETTIR', 'Meriem', 'femme', '0643001200', 'Quartier EL ZOHOR', 'hh12345', 'K3489', 'sss', 'meryam@gmail.com', '2001-06-24', './assets/favicon.ico.ico', './assets/favicon.ico.ico', 'Public', '2019', 'SM', 'hassan22', '16', '14', 'trÃ©s bien', './assets/favicon.ico', './assets/favicon.ico', './assets/favicon.ico', 'MAREKESH-SAFI', 'safi', 'GIM', 'TM', 'TIMQ'),
(108, 'SALMI', 'SOULAYMAN', 'homme', '0654321234', 'Quartier worod', 'HH1234', 'K56789', 'a', 'SOULAYMAN@gmail.com', '2002-01-09', './assets/favicon.ico.ico', './assets/favicon.ico.ico', 'Public', '2020', 'SVT', 'MOULAY ISMAIL', '12', '16', 'Assez bien', './assets/favicon.ico', './assets/favicon.ico', './assets/favicon.ico', 'RABAT-KNITRA', 'KNITRA', 'TM', 'TIMQ', 'TM'),
(109, 'RANIM', 'TAHA', 'homme', '0654321234', 'Rue wid', 'H1234', 'Q98754', 'aaaze', 'TAHA@gmail.com', '2002-01-18', './assets/favicon.ico.ico.', './assets/favicon.ico.ico.', 'Prive', '2021', 'Economie', 'hassan2', '14', '15', 'Bien', './assets/favicon.ico', './assets/favicon.ico', './assets/favicon.ico', 'AKADIR-MASSA-DARAA', 'AKADIR', 'TM', 'TIMQ', 'TM'),
(118, 'chettir', 'meriem', 'femme', '0643001200', '987 RUE quartie', 'hh1234', 'K139132832', 'E', 'meryamchettir@gmail.', '2003-01-17', './assets/favicon.ico.ico.', './assets/favicon.ico.ico.', 'Public', '2020', 'PC', 'Khwarizmi', '15', '12', 'Bien', './assets/favicon.ico', './assets/favicon.ico', './assets/favicon.ico', 'CASABLANCA-STAT', 'CASABLANCA', 'GI', 'GI', 'GI');

-- --------------------------------------------------------

--
-- Structure de la table `filiere1`
--

CREATE TABLE IF NOT EXISTS `filiere1` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Specialite` varchar(30) NOT NULL,
  `Capacite` int(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `filiere1`
--

INSERT INTO `filiere1` (`ID`, `Specialite`, `Capacite`) VALUES
(2, 'TIMQ', 125),
(3, 'TM', 120),
(4, 'GI', 120),
(5, 'GIM', 129);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
