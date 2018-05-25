-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2018 at 02:36 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lechiroquiroule`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) NOT NULL,
  `date_crea` date NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_Blog_User1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
CREATE TABLE IF NOT EXISTS `civilite` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) NOT NULL,
  `raccourcis` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `civilite`
--

INSERT INTO `civilite` (`id`, `libelle`, `raccourcis`) VALUES
(1, 'Monsieur', 'Mr.'),
(2, 'Madame', 'Mme.');

-- --------------------------------------------------------

--
-- Table structure for table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `comment` varchar(75) DEFAULT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`User_id`),
  KEY `fk_Conge_User1_idx` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `motif`
--

DROP TABLE IF EXISTS `motif`;
CREATE TABLE IF NOT EXISTS `motif` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `motif` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motif`
--

INSERT INTO `motif` (`id`, `motif`) VALUES
(1, 'Bouche-a-oreille'),
(2, 'BDD'),
(3, 'Autre');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `date_nais` date DEFAULT NULL,
  `date_crea` date DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `complement` varchar(45) DEFAULT NULL,
  `cd_postale` varchar(5) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telehone` varchar(10) DEFAULT NULL,
  `profession` varchar(25) DEFAULT NULL,
  `motif` varchar(50) DEFAULT NULL,
  `description` tinytext,
  `Civilite_id` tinyint(3) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Profile_Civilite1_idx` (`Civilite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_crea` date NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `cd_postale` varchar(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `date_rdv` date NOT NULL,
  `heure_rdv` time NOT NULL,
  `duree_min_rdv` int(10) UNSIGNED NOT NULL DEFAULT '60',
  `accompt_verse` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_RDV_User_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `temoignage`
--

DROP TABLE IF EXISTS `temoignage`;
CREATE TABLE IF NOT EXISTS `temoignage` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `note` tinyint(3) UNSIGNED NOT NULL,
  `libelle` varchar(45) NOT NULL,
  `content` text NOT NULL,
  `date_crea` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_Temoignage_User1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `date_nais` date NOT NULL,
  `date_crea` date NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `complement` varchar(45) DEFAULT NULL,
  `cd_postale` varchar(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `role` tinyint(3) UNSIGNED DEFAULT NULL,
  `motif` varchar(50) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `Civilite_id` tinyint(3) UNSIGNED NOT NULL,
  `newsletter` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`,`Civilite_id`),
  KEY `fk_User_Civilite1_idx` (`Civilite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `date_nais`, `date_crea`, `adresse`, `complement`, `cd_postale`, `ville`, `email`, `telephone`, `profession`, `role`, `motif`, `mdp`, `status`, `Civilite_id`, `newsletter`) VALUES
(1, 'titi', 'tata', '2000-05-15', '2018-05-05', '1 rue de l\'exemple', '1er étage', '53000', 'Laval', 'titi@tata.local', '0202020202', 'plombier', NULL, 'publicité', 'azerty', 1, 1, 0),
(2, 'Carter', 'John', '2018-05-15', '2018-05-25', '3 rue de la faim', '1er etage', '12345', 'NYC', 'john@carter.local', '0987654321', 'deboucheur', 0, 'Grace au poisson', 'azerty', 1, 1, 1),
(3, 'Frizbee', 'Jimmy', '1993-06-08', '2018-05-25', '5, Rue de la mer', 'Rez de chaussÃ©', '67893', 'Notingham', 'pression@pneu.local', '0607050405', 'Mangeur', 0, 'Chenille', 'qsdfghj', 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(25) NOT NULL,
  `duree_min_add` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_Blog_User1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `conge`
--
ALTER TABLE `conge`
  ADD CONSTRAINT `fk_Conge_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_Profile_Civilite1` FOREIGN KEY (`Civilite_id`) REFERENCES `civilite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `fk_RDV_User` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `temoignage`
--
ALTER TABLE `temoignage`
  ADD CONSTRAINT `fk_Temoignage_User1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Civilite1` FOREIGN KEY (`Civilite_id`) REFERENCES `civilite` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
