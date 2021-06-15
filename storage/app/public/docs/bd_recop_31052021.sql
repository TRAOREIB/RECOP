-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 31 mai 2021 à 17:10
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_recop`
--

-- --------------------------------------------------------

--
-- Structure de la table `accreditation`
--

CREATE TABLE `accreditation` (
  `idaccreditation` int(11) NOT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `titreevenement` varchar(254) DEFAULT NULL,
  `lieuevenement` varchar(254) DEFAULT NULL,
  `datedebut` datetime DEFAULT NULL,
  `datefin` datetime DEFAULT NULL,
  `moyentransport` varchar(254) DEFAULT NULL,
  `immatriculation` varchar(254) DEFAULT NULL,
  `listemateriel` varchar(254) DEFAULT NULL,
  `membresequipe` varchar(254) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `valider` tinyint(1) NOT NULL DEFAULT '0',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accreditation`
--

INSERT INTO `accreditation` (`idaccreditation`, `iddemandeur`, `titreevenement`, `lieuevenement`, `datedebut`, `datefin`, `moyentransport`, `immatriculation`, `listemateriel`, `membresequipe`, `actif`, `valider`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 'la foire de la Semaine Nationale de la Culture 2021', 'Bobo', '2021-05-03 00:00:00', '2021-06-30 00:00:00', 'Vehicule RAV4', '24 ZZ01', 'Camera\r\nmicro', 'SAMA DAOUDA\r\nDICKO Arnaud\r\nDIALLO Paul\r\nZOURE Paul', 1, 0, '2021-05-27 12:26:23', '2021-05-27 12:26:23'),
(2, 4, 'La campagne electorale', 'Bobo Dioulasso', '2021-05-13 00:00:00', '2021-05-19 00:00:00', 'Vehicule RAV 4', 'AS45788', 'Camera\r\nRadio', 'GANAME PAUL\r\nBONKIAN GEORGES\r\nTIEMTORE SYLVESTRE', 1, 0, '2021-05-29 11:20:10', '2021-05-29 11:20:10'),
(3, 5, 'kjdshfjdshf', 'dsfhjskdhf', '2021-05-27 00:00:00', '2021-05-18 00:00:00', 'jhsdhjsgdf', 'sdfjnsjkhdf', 'dfds', 'sdsd', 1, 0, '2021-05-29 13:19:45', '2021-05-29 13:19:45');

-- --------------------------------------------------------

--
-- Structure de la table `correspondant`
--

CREATE TABLE `correspondant` (
  `idcorrespondant` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `passeport` varchar(254) DEFAULT NULL,
  `fonction` varchar(254) DEFAULT NULL,
  `telephone1` int(11) DEFAULT NULL,
  `telephone2` int(11) DEFAULT NULL,
  `mail1` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `numcartepresse` int(11) DEFAULT NULL,
  `photo` varchar(254) DEFAULT NULL,
  `cv` varchar(254) DEFAULT NULL,
  `visamedia` varchar(254) DEFAULT NULL,
  `refjournal` varchar(254) DEFAULT NULL,
  `parcourspro` varchar(254) DEFAULT NULL,
  `region` varchar(254) DEFAULT NULL,
  `pjcartepresse` varchar(254) DEFAULT NULL,
  `pjpasseport` varchar(254) DEFAULT NULL,
  `pjcnib` varchar(254) DEFAULT NULL,
  `organe` varchar(255) NOT NULL,
  `typepresse` varchar(255) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `correspondant`
--

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `cnib`, `passeport`, `fonction`, `telephone1`, `telephone2`, `mail1`, `lieuresidence`, `numcartepresse`, `photo`, `cv`, `visamedia`, `refjournal`, `parcourspro`, `region`, `pjcartepresse`, `pjpasseport`, `pjcnib`, `organe`, `typepresse`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 0, 'DICKO', 'Moussa', 'B123456', 'AZR258', 'Journaliste', 2500000, 7000000, 'moussa@gmail.com', 'Dori', 12, NULL, NULL, NULL, NULL, NULL, 'Sahel', NULL, NULL, NULL, '', '', 1, '2021-05-19 00:00:00', '2021-05-24 17:56:07'),
(2, NULL, 'MINOUGOU', 'Sylvain', 'B785269', 'S78002158', 'Journaliste', 78526369, 70452587, 'minougou@yahoo.fr', 'Ouagadougou', 778821476, NULL, NULL, NULL, 'ref journalistes', 'parcours', 'Centre', NULL, NULL, NULL, 'Sidwaya', 'Presse Ecrite', 1, '2021-05-27 10:23:30', '2021-05-27 10:23:30'),
(3, NULL, 'DRABO', 'Alidou', 'B78526945', 'S784563', 'Journaliste', 70000001, 64020012, 'drabo@yahoo.fr', 'Ouagadougou', 452, NULL, NULL, NULL, 'mes references', 'mon parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Radio', 1, '2021-05-27 11:32:16', '2021-05-27 11:32:16'),
(4, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:28:35', '2021-05-29 12:28:35'),
(5, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:29:22', '2021-05-29 12:29:22'),
(6, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo1@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:45:22', '2021-05-29 12:45:22'),
(7, NULL, 'ZOURA', 'LKHJKJH', '54767464', '5465784', 'Journaliste', 65456, 654564, 'sakalata@yahoo.fr', 'jgjhguhj', 6546576, NULL, NULL, NULL, 'Ref', 'Parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:47:19', '2021-05-29 12:47:19'),
(8, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo12@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:49:50', '2021-05-29 12:49:50'),
(9, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', 'uyytug', 'Centre', NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:52:41', '2021-05-29 12:52:41'),
(10, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail2@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', 'uyytug', 'Centre', NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:57:17', '2021-05-29 12:57:17'),
(11, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail23@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', 'uyytug', 'Centre', NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:58:10', '2021-05-29 12:58:10'),
(12, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail234@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', 'uyytug', 'Centre', NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 13:01:24', '2021-05-29 13:01:24'),
(13, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo152@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:02:05', '2021-05-29 13:02:05'),
(14, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo1527@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:03:10', '2021-05-29 13:03:10'),
(15, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo15287@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', 'parcours', 'Centre', NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:04:57', '2021-05-29 13:04:57'),
(16, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', 'polki', 'Centre', NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:07:19', '2021-05-29 13:07:19'),
(17, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara4@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', 'polki', 'Centre', NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:08:57', '2021-05-29 13:08:57'),
(18, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara45@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', 'polki', 'Centre', NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:10:33', '2021-05-29 13:10:33'),
(19, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara465@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', 'polki', 'Centre', NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:12:19', '2021-05-29 13:12:19'),
(20, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara4657@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', 'polki', 'Centre', NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:14:55', '2021-05-29 13:14:55'),
(21, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:21:44', '2021-05-29 13:21:44'),
(22, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:23:37', '2021-05-29 13:23:37'),
(23, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:24:37', '2021-05-29 13:24:37'),
(24, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop788@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:26:59', '2021-05-29 13:26:59'),
(25, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:29:45', '2021-05-29 13:29:45'),
(26, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:30:37', '2021-05-29 13:30:37'),
(27, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop789897@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:32:34', '2021-05-29 13:32:34'),
(28, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898979@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:33:09', '2021-05-29 13:33:09'),
(29, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989799@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:33:42', '2021-05-29 13:33:42'),
(30, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898979910@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:35:03', '2021-05-29 13:35:03'),
(31, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop789897991011@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:36:13', '2021-05-29 13:36:13'),
(32, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989799101112@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:37:56', '2021-05-29 13:37:56'),
(33, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:38:52', '2021-05-29 13:38:52'),
(34, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo1@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:39:44', '2021-05-29 13:39:44'),
(35, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo12@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:44:32', '2021-05-29 13:44:32'),
(36, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo123@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:46:30', '2021-05-29 13:46:30'),
(37, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo55@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:49:20', '2021-05-29 13:49:20'),
(38, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo556@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:50:43', '2021-05-29 13:50:43'),
(39, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo5567@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:51:41', '2021-05-29 13:51:41'),
(40, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo55678@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:53:18', '2021-05-29 13:53:18'),
(41, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopora@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:59:53', '2021-05-29 13:59:53'),
(42, 34, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopora1@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'sqdsqd', 'Centre', NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 14:01:47', '2021-05-29 14:02:07');

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `iddemandeur` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `profession` varchar(254) DEFAULT NULL,
  `datenaissance` datetime DEFAULT NULL,
  `lieunaissance` varchar(254) DEFAULT NULL,
  `nationalite` varchar(254) DEFAULT NULL,
  `sexe` varchar(254) DEFAULT NULL,
  `numPasseport` varchar(254) DEFAULT NULL,
  `carteconsulaire` varchar(254) DEFAULT NULL,
  `datedelivcnib` datetime DEFAULT NULL,
  `dateexpircnib` datetime DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `personneprevenir` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `organe` varchar(254) DEFAULT NULL,
  `telorgane` int(11) DEFAULT NULL,
  `adressestruct` varchar(254) DEFAULT NULL,
  `pjcnib` varchar(254) DEFAULT NULL,
  `pjpasseport` varchar(254) DEFAULT NULL,
  `pjcinibperprev` varchar(254) DEFAULT NULL,
  `pjpasseportperprev` varchar(254) DEFAULT NULL,
  `pjcartepresse` varchar(254) DEFAULT NULL,
  `numcnib` varchar(254) NOT NULL,
  `telephonepersp` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`iddemandeur`, `iduser`, `nom`, `prenom`, `profession`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `numPasseport`, `carteconsulaire`, `datedelivcnib`, `dateexpircnib`, `telephone`, `personneprevenir`, `lieuresidence`, `organe`, `telorgane`, `adressestruct`, `pjcnib`, `pjpasseport`, `pjcinibperprev`, `pjpasseportperprev`, `pjcartepresse`, `numcnib`, `telephonepersp`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, NULL, 'SORI', 'Mariame', 'Jiurnaliste', '1997-05-04 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'B45789632', '784512', '2021-05-11 00:00:00', '2021-05-03 00:00:00', 70203025, 'Toure Alain', 'Ouagadougou', 'FRNCE24', 78456321, 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, 'B789632', 78453695, 1, '2021-05-27 11:57:53', '2021-05-27 11:57:53'),
(2, NULL, 'MILLOGO', 'Jean', 'Journaliste', '2021-05-11 00:00:00', 'Kaya', 'Burkinabè', 'HOMME', 'S8865625', 'B78566629', '2021-05-19 00:00:00', '2021-05-19 00:00:00', 78204578, 'ZOUMANA Frederick', '78659632', 'FRANCE 24', 70201032, 'Rue 15.588', NULL, NULL, NULL, NULL, NULL, 'B78459632', 7855965, 1, '2021-05-28 09:01:46', '2021-05-28 09:01:46'),
(3, 6, 'TABOURE', 'Paul', 'Journaliste', '2021-04-29 00:00:00', 'Ouagadougou', 'Burkinabe', 'HOMME', 'S784536', '02156954', '2021-05-26 00:00:00', '2021-05-20 00:00:00', 70203040, 'TOURE Alidou', 'Ouagadougou', 'France 44', 72124569, 'Rue 34.177', NULL, NULL, NULL, NULL, NULL, 'B78452163', 78521236, 1, '2021-05-29 11:05:09', '2021-05-29 11:08:11'),
(4, 7, 'TABOURELI', 'Paul', 'Journaliste', '2021-04-29 00:00:00', 'Ouagadougou', 'Burkinabe', 'HOMME', 'S784536', '02156954', '2021-05-26 00:00:00', '2021-05-20 00:00:00', 70203040, 'TOURE Alidou', 'Ouagadougou', 'France 44', 72124569, 'Rue 34.177', NULL, NULL, NULL, NULL, NULL, 'B78452163', 78521236, 1, '2021-05-29 11:17:13', '2021-05-29 11:17:35'),
(5, 20, 'dfsdfdsf', 'dkfjndsjkhf', 'kdsnfjkdshf', '2021-05-20 00:00:00', 'ffdgdfg', 'jhghgh', 'HOMME', '564', '5456848', '2021-05-06 00:00:00', '2021-05-11 00:00:00', 5456, 'jhgugfgf', 'hghgfh', 'tthghgfyt', 546848, 'hggyffdfd', NULL, NULL, NULL, NULL, NULL, '5454', 65465, 1, '2021-05-29 13:18:58', '2021-05-29 13:19:12');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `idinfo` int(11) NOT NULL,
  `idcorrespondant` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `contenu` varchar(254) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `idmedia` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `typemedia` varchar(254) DEFAULT NULL,
  `nommedia` varchar(254) DEFAULT NULL,
  `telmedia` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`idmedia`, `iduser`, `typemedia`, `nommedia`, `telmedia`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 0, 'International', 'RFI', '250001', 1, '2021-05-19 00:00:00', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `mediacorrespondant`
--

CREATE TABLE `mediacorrespondant` (
  `IDMEDIACORRES` int(11) NOT NULL,
  `idcorrespondant` int(11) NOT NULL,
  `idmedia` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mediacorrespondant`
--

INSERT INTO `mediacorrespondant` (`IDMEDIACORRES`, `idcorrespondant`, `idmedia`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 1, 1, '2021-05-19 00:00:00', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `mediapresse`
--

CREATE TABLE `mediapresse` (
  `IDMEDIAPRESSE` int(11) NOT NULL,
  `idmedia` int(11) NOT NULL,
  `idtype` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mediapresse`
--

INSERT INTO `mediapresse` (`IDMEDIAPRESSE`, `idmedia`, `idtype`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 1, 1, '2021-05-19 00:00:00', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `piecesjointes`
--

CREATE TABLE `piecesjointes` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pjpasseport` varchar(255) DEFAULT NULL,
  `pjcnib` varchar(255) DEFAULT NULL,
  `pjcartepresse` varchar(255) DEFAULT NULL,
  `pjcnibperprev` varchar(255) DEFAULT NULL,
  `pjpasseportperprev` varchar(255) DEFAULT NULL,
  `pjcarteconsulaire` varchar(255) DEFAULT NULL,
  `visamedia` varchar(255) DEFAULT NULL,
  `idcorrespondant` int(11) DEFAULT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecesjointes`
--

INSERT INTO `piecesjointes` (`id`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjcnibperprev`, `pjpasseportperprev`, `pjcarteconsulaire`, `visamedia`, `idcorrespondant`, `iddemandeur`, `actif`, `updated_at`, `created_at`) VALUES
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 16, NULL, 0, '2021-05-23 01:37:11', '2021-05-23 01:37:11'),
(17, 'C:\\xampp\\tmp\\php15B1.tmp', 'C:\\xampp\\tmp\\php15E1.tmp', 'C:\\xampp\\tmp\\php1612.tmp', 'C:\\xampp\\tmp\\php1602.tmp', 'C:\\xampp\\tmp\\php16A1.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php1601.tmp', 17, NULL, 0, '2021-05-23 01:39:54', '2021-05-23 01:39:54'),
(18, 'C:\\xampp\\tmp\\php118C.tmp', 'C:\\xampp\\tmp\\php118D.tmp', 'C:\\xampp\\tmp\\php11B0.tmp', 'C:\\xampp\\tmp\\php11AF.tmp', 'C:\\xampp\\tmp\\php11C1.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php118E.tmp', 17, NULL, 0, '2021-05-23 01:40:59', '2021-05-23 01:40:59'),
(19, 'C:\\xampp\\tmp\\phpB050.tmp', 'C:\\xampp\\tmp\\phpB061.tmp', 'C:\\xampp\\tmp\\phpB064.tmp', 'C:\\xampp\\tmp\\phpB063.tmp', 'C:\\xampp\\tmp\\phpB075.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpB062.tmp', 17, NULL, 0, '2021-05-23 01:56:57', '2021-05-23 01:56:57'),
(20, 'C:\\xampp\\tmp\\php9A8E.tmp', 'C:\\xampp\\tmp\\php9A8F.tmp', 'C:\\xampp\\tmp\\php9B00.tmp', 'C:\\xampp\\tmp\\php9AFF.tmp', 'C:\\xampp\\tmp\\php9B11.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php9AFE.tmp', 18, NULL, 0, '2021-05-23 02:00:08', '2021-05-23 02:00:08'),
(21, 'C:\\xampp\\tmp\\phpCEA7.tmp', 'C:\\xampp\\tmp\\phpCEA8.tmp', 'C:\\xampp\\tmp\\phpCEBA.tmp', 'C:\\xampp\\tmp\\phpCEAA.tmp', 'C:\\xampp\\tmp\\phpCEBC.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpCEA9.tmp', 19, NULL, 0, '2021-05-23 02:03:38', '2021-05-23 02:03:38'),
(22, 'C:\\xampp\\tmp\\php921D.tmp', 'C:\\xampp\\tmp\\php922E.tmp', 'C:\\xampp\\tmp\\php9231.tmp', 'C:\\xampp\\tmp\\php9230.tmp', 'C:\\xampp\\tmp\\php9233.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php922F.tmp', 19, NULL, 0, '2021-05-23 02:04:28', '2021-05-23 02:04:28'),
(23, 'C:\\xampp\\tmp\\php15D6.tmp', 'C:\\xampp\\tmp\\php15D7.tmp', 'C:\\xampp\\tmp\\php15DA.tmp', 'C:\\xampp\\tmp\\php15D9.tmp', 'C:\\xampp\\tmp\\php15EC.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php15D8.tmp', 19, NULL, 0, '2021-05-23 02:06:07', '2021-05-23 02:06:07'),
(24, 'C:\\xampp\\tmp\\php28B9.tmp', 'C:\\xampp\\tmp\\php28BA.tmp', 'C:\\xampp\\tmp\\php28BD.tmp', 'C:\\xampp\\tmp\\php28BC.tmp', 'C:\\xampp\\tmp\\php28CF.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php28BB.tmp', 19, NULL, 0, '2021-05-23 02:06:12', '2021-05-23 02:06:12'),
(25, 'C:\\xampp\\tmp\\phpD8D2.tmp', 'C:\\xampp\\tmp\\phpD8D3.tmp', 'C:\\xampp\\tmp\\phpD8D6.tmp', 'C:\\xampp\\tmp\\phpD8D5.tmp', 'C:\\xampp\\tmp\\phpD8E7.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpD8D4.tmp', 19, NULL, 0, '2021-05-23 02:08:02', '2021-05-23 02:08:02'),
(26, 'C:\\xampp\\tmp\\phpE9C1.tmp', 'C:\\xampp\\tmp\\phpE9C2.tmp', 'C:\\xampp\\tmp\\phpE9D4.tmp', 'C:\\xampp\\tmp\\phpE9D3.tmp', 'C:\\xampp\\tmp\\phpE9D6.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpE9D2.tmp', 19, NULL, 0, '2021-05-23 02:08:07', '2021-05-23 02:08:07'),
(27, 'C:\\xampp\\tmp\\php9620.tmp', 'C:\\xampp\\tmp\\php9621.tmp', 'C:\\xampp\\tmp\\php9624.tmp', 'C:\\xampp\\tmp\\php9623.tmp', 'C:\\xampp\\tmp\\php9636.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php9622.tmp', 19, NULL, 0, '2021-05-23 02:09:56', '2021-05-23 02:09:56'),
(28, 'C:\\xampp\\tmp\\phpA5F6.tmp', 'C:\\xampp\\tmp\\phpA606.tmp', 'C:\\xampp\\tmp\\phpA609.tmp', 'C:\\xampp\\tmp\\phpA608.tmp', 'C:\\xampp\\tmp\\phpA61B.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpA607.tmp', 19, NULL, 0, '2021-05-23 02:10:00', '2021-05-23 02:10:00'),
(29, 'C:\\xampp\\tmp\\phpD81F.tmp', 'C:\\xampp\\tmp\\phpD830.tmp', 'C:\\xampp\\tmp\\phpD842.tmp', 'C:\\xampp\\tmp\\phpD841.tmp', 'C:\\xampp\\tmp\\phpD844.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpD831.tmp', 19, NULL, 0, '2021-05-23 02:12:24', '2021-05-23 02:12:24'),
(30, 'C:\\xampp\\tmp\\phpD459.tmp', 'C:\\xampp\\tmp\\phpD45A.tmp', 'C:\\xampp\\tmp\\phpD46C.tmp', 'C:\\xampp\\tmp\\phpD46B.tmp', 'C:\\xampp\\tmp\\phpD46E.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpD45B.tmp', 19, NULL, 0, '2021-05-23 02:13:29', '2021-05-23 02:13:29'),
(31, 'C:\\xampp\\tmp\\php80B8.tmp', 'C:\\xampp\\tmp\\php80B9.tmp', 'C:\\xampp\\tmp\\php80CB.tmp', 'C:\\xampp\\tmp\\php80CA.tmp', 'C:\\xampp\\tmp\\php80CD.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php80C9.tmp', 19, NULL, 0, '2021-05-23 02:15:19', '2021-05-23 02:15:19'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 23, NULL, 0, '2021-05-23 02:18:48', '2021-05-23 02:18:48'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 23, NULL, 0, '2021-05-23 02:21:21', '2021-05-23 02:21:21'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 24, NULL, 0, '2021-05-23 02:22:15', '2021-05-23 02:22:15'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 24, NULL, 0, '2021-05-23 02:24:18', '2021-05-23 02:24:18'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 24, NULL, 0, '2021-05-23 02:25:25', '2021-05-23 02:25:25'),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 25, NULL, 0, '2021-05-23 02:27:15', '2021-05-23 02:27:15'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 25, NULL, 0, '2021-05-23 02:29:35', '2021-05-23 02:29:35'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 26, NULL, 0, '2021-05-23 02:32:37', '2021-05-23 02:32:37'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 26, NULL, 0, '2021-05-23 02:33:00', '2021-05-23 02:33:00'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 26, NULL, 0, '2021-05-23 02:34:05', '2021-05-23 02:34:05'),
(42, 'C:\\xampp\\tmp\\phpBF28.tmp', 'C:\\xampp\\tmp\\phpBF38.tmp', 'C:\\xampp\\tmp\\phpBF3B.tmp', 'C:\\xampp\\tmp\\phpBF3A.tmp', 'C:\\xampp\\tmp\\phpBF4D.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\phpBF39.tmp', 27, NULL, 0, '2021-05-23 02:35:14', '2021-05-23 02:35:14'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 28, NULL, 0, '2021-05-23 02:36:15', '2021-05-23 02:36:15'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 28, NULL, 0, '2021-05-23 02:36:38', '2021-05-23 02:36:38'),
(45, 'C:\\xampp\\tmp\\php9CA7.tmp', 'C:\\xampp\\tmp\\php9CA8.tmp', 'C:\\xampp\\tmp\\php9CBB.tmp', 'C:\\xampp\\tmp\\php9CBA.tmp', 'C:\\xampp\\tmp\\php9CBD.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php9CB9.tmp', 31, NULL, 0, '2021-05-23 02:44:55', '2021-05-23 02:44:55'),
(46, 'C:\\xampp\\tmp\\php8DBB.tmp', 'C:\\xampp\\tmp\\php8DBC.tmp', 'C:\\xampp\\tmp\\php8DCF.tmp', 'C:\\xampp\\tmp\\php8DCE.tmp', 'C:\\xampp\\tmp\\php8DD1.tmp', NULL, NULL, '', 'C:\\xampp\\tmp\\php8DCD.tmp', 31, NULL, 0, '2021-05-23 02:48:08', '2021-05-23 02:48:08'),
(47, 'C:\\xampp\\tmp\\php88F4.tmp', 'C:\\xampp\\tmp\\php88F5.tmp', 'C:\\xampp\\tmp\\php88F8.tmp', 'C:\\xampp\\tmp\\php88F7.tmp', 'C:\\xampp\\tmp\\php890A.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php88F9.tmp', 'C:\\xampp\\tmp\\php88F6.tmp', 2, NULL, 1, '2021-05-27 10:30:18', '2021-05-27 10:30:18'),
(48, 'C:\\xampp\\tmp\\php4E6E.tmp', 'C:\\xampp\\tmp\\php4E6F.tmp', 'C:\\xampp\\tmp\\php4E72.tmp', 'C:\\xampp\\tmp\\php4E71.tmp', 'C:\\xampp\\tmp\\php4E74.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php4E73.tmp', 'C:\\xampp\\tmp\\php4E70.tmp', 2, NULL, 1, '2021-05-27 10:31:09', '2021-05-27 10:31:09'),
(49, 'C:\\xampp\\tmp\\php680E.tmp', 'C:\\xampp\\tmp\\php680F.tmp', 'C:\\xampp\\tmp\\php6822.tmp', 'C:\\xampp\\tmp\\php6821.tmp', 'C:\\xampp\\tmp\\php6824.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php6823.tmp', 'C:\\xampp\\tmp\\php6820.tmp', 2, NULL, 1, '2021-05-27 10:33:26', '2021-05-27 10:33:26'),
(50, 'C:\\xampp\\tmp\\php3B54.tmp', 'C:\\xampp\\tmp\\php3B55.tmp', 'C:\\xampp\\tmp\\php3B68.tmp', 'C:\\xampp\\tmp\\php3B57.tmp', 'C:\\xampp\\tmp\\php3BC7.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php3B69.tmp', 'C:\\xampp\\tmp\\php3B56.tmp', 3, NULL, 1, '2021-05-27 11:38:47', '2021-05-27 11:38:47'),
(51, 'C:\\xampp\\tmp\\php9591.tmp', 'C:\\xampp\\tmp\\php9592.tmp', 'C:\\xampp\\tmp\\php95A4.tmp', 'C:\\xampp\\tmp\\php95A3.tmp', 'C:\\xampp\\tmp\\php95A6.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php95A5.tmp', 'C:\\xampp\\tmp\\php9593.tmp', 3, NULL, 1, '2021-05-27 11:39:10', '2021-05-27 11:39:10'),
(52, 'C:\\xampp\\tmp\\php591D.tmp', NULL, 'C:\\xampp\\tmp\\php591F.tmp', 'C:\\xampp\\tmp\\php591E.tmp', 'C:\\xampp\\tmp\\php5932.tmp', 'C:\\xampp\\tmp\\php5931.tmp', NULL, 'C:\\xampp\\tmp\\php5930.tmp', NULL, NULL, 1, 1, '2021-05-27 12:07:19', '2021-05-27 12:07:19'),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, '2021-05-29 11:17:35', '2021-05-29 11:17:35'),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, 1, '2021-05-29 12:29:52', '2021-05-29 12:29:52'),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, NULL, 1, '2021-05-29 12:45:40', '2021-05-29 12:45:40'),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 1, '2021-05-29 12:47:37', '2021-05-29 12:47:37'),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, 1, '2021-05-29 12:48:56', '2021-05-29 12:48:56'),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, 1, '2021-05-29 12:50:07', '2021-05-29 12:50:07'),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, 1, '2021-05-29 12:51:19', '2021-05-29 12:51:19'),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, 1, '2021-05-29 12:52:59', '2021-05-29 12:52:59'),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, 1, '2021-05-29 12:55:39', '2021-05-29 12:55:39'),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, NULL, 1, '2021-05-29 12:58:47', '2021-05-29 12:58:47'),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, NULL, 1, '2021-05-29 13:02:23', '2021-05-29 13:02:23'),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, 1, '2021-05-29 13:03:23', '2021-05-29 13:03:23'),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, 1, '2021-05-29 13:05:27', '2021-05-29 13:05:27'),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, 1, '2021-05-29 13:07:33', '2021-05-29 13:07:33'),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, NULL, 1, '2021-05-29 13:10:46', '2021-05-29 13:10:46'),
(68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, 1, '2021-05-29 13:12:32', '2021-05-29 13:12:32'),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, '2021-05-29 13:19:12', '2021-05-29 13:19:12'),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, 1, '2021-05-29 13:22:01', '2021-05-29 13:22:01'),
(71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, 1, '2021-05-29 13:23:53', '2021-05-29 13:23:53'),
(72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-29 13:24:52', '2021-05-29 13:24:52'),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-29 13:27:24', '2021-05-29 13:27:24'),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-29 13:29:48', '2021-05-29 13:29:48'),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-29 13:32:48', '2021-05-29 13:32:48'),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-29 13:33:22', '2021-05-29 13:33:22'),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, NULL, 1, '2021-05-29 13:36:27', '2021-05-29 13:36:27'),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, NULL, 1, '2021-05-29 13:44:51', '2021-05-29 13:44:51'),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36, NULL, 1, '2021-05-29 13:46:47', '2021-05-29 13:46:47'),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, NULL, 1, '2021-05-29 13:49:50', '2021-05-29 13:49:50'),
(81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, 1, '2021-05-29 13:51:00', '2021-05-29 13:51:00'),
(82, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, NULL, 1, '2021-05-29 13:51:56', '2021-05-29 13:51:56'),
(83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, NULL, 1, '2021-05-29 13:53:32', '2021-05-29 13:53:32'),
(84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, NULL, 1, '2021-05-29 14:00:07', '2021-05-29 14:00:07'),
(85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, NULL, 1, '2021-05-29 14:02:07', '2021-05-29 14:02:07');

-- --------------------------------------------------------

--
-- Structure de la table `typepresse`
--

CREATE TABLE `typepresse` (
  `idtype` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepresse`
--

INSERT INTO `typepresse` (`idtype`, `iduser`, `libelle`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 0, 'radio', 1, '2021-05-19 00:00:00', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifiant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  `profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Correspondant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `identifiant`, `email`, `email_verified_at`, `password`, `valid`, `profil`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'DICKO Alou', 'dalou', NULL, NULL, '$2y$10$7Bk2b9GSxKbpTBZ5eqhdiOWgYIKPx48oNXACEDvrZq1QC9FzRvpj2', 1, 'Administrateur', NULL, '2021-05-25 11:00:55', '2021-05-25 11:00:55'),
(4, 'MINOUGOU Sylvain', NULL, 'minougou@yahoo.fr', NULL, '$2y$10$Fg12IiOJJhSTxI.v8IzELe.UIF2jqIkBdr4b3vPxhcSL9hm/1oY8q', 1, 'Correspondant', NULL, '2021-05-27 10:31:09', '2021-05-27 10:31:09'),
(5, 'DRABO Alidou', 'drabo', 'drabo@yahoo.fr', NULL, '$2y$10$JzlFG0RZtL8.VvKPCuH5NeaKCdDGpV8Au/yYZcOeSvw8dKp7DofRK', 1, 'Correspondant', NULL, '2021-05-27 11:38:48', '2021-05-27 11:38:48'),
(6, 'TABOURE Paul', 'taboula', 'taboure@yahoo.fr', NULL, '$2y$10$YZoTS2WyW.8S6nZlQ9mMs.ULXBe4NU4CJ8F3CzwshVUlut64cNUAe', 1, 'Demandeur', NULL, '2021-05-29 11:08:11', '2021-05-29 11:08:11'),
(7, 'TABOURELI Paul', 'taboureli', 'taboureli@yahoo.fr', NULL, '$2y$10$2sQ8K65iooXZpvngcUrhY.gCQNN8.nOq7dCQUSyPwxAB6U/jznZL2', 1, 'Demandeur', NULL, '2021-05-29 11:17:35', '2021-05-29 11:17:35'),
(9, 'Doumabalao Georges', 'koroyere', 'doumabalo1@yahoo.fr', NULL, '$2y$10$e2fBNjZEPvOtVn2ijCxhOezDvYTyiQkj3ruEYA42v0M.22aZS9KC.', 1, 'Correspondant', NULL, '2021-05-29 12:45:40', '2021-05-29 12:45:40'),
(10, 'ZOURA LKHJKJH', 'Douloukoum', 'sakalata@yahoo.fr', NULL, '$2y$10$yPypezJIcSQ9HtP4YB1rJOBxIQ/daeCD48I6yBuHjETc3BeuoUBLm', 1, 'Correspondant', NULL, '2021-05-29 12:47:37', '2021-05-29 12:47:37'),
(11, 'Doumabalao Georges', 'triande', 'doumabalo12@yahoo.fr', NULL, '$2y$10$.TiT6MjbX0zQ7krKIheQ5u5Wtoy8Odlob0m6GRygCaysLwmMntcgm', 1, 'Correspondant', NULL, '2021-05-29 12:50:07', '2021-05-29 12:50:07'),
(12, 'jdsgchdjg kjshkjvhs', 'solo', 'monmail@yahoo.fr', NULL, '$2y$10$124WXhTXhhivcXhdwe51iuY6nVrlTZPzxVDSMxwstfPT3dMuCubA.', 1, 'Correspondant', NULL, '2021-05-29 12:52:59', '2021-05-29 12:52:59'),
(13, 'jdsgchdjg kjshkjvhs', 'lolo', 'monmail23@yahoo.fr', NULL, '$2y$10$IooqfT2fn/waRH9OJPGDreAZS2dnVonvIyfdIL3L7cLQrhhbJPHC2', 1, 'Correspondant', NULL, '2021-05-29 12:58:47', '2021-05-29 12:58:47'),
(14, 'Doumabalao Georges', 'raeae', 'doumabalo152@yahoo.fr', NULL, '$2y$10$mpsH2ckRwy7SVVlMQPZzmevXTUTHdwH/Tt0WAcE9kn0BvwsjKYPHC', 1, 'Correspondant', NULL, '2021-05-29 13:02:23', '2021-05-29 13:02:23'),
(15, 'Doumabalao Georges', 'tito', 'doumabalo1527@yahoo.fr', NULL, '$2y$10$PhNVTSPY9tkUpBkt/BThaOUzbxQMr4r9hHyXT6ROufgvzD42r3qZG', 1, 'Correspondant', NULL, '2021-05-29 13:03:24', '2021-05-29 13:03:24'),
(16, 'Doumabalao Georges', 'toto', 'doumabalo15287@yahoo.fr', NULL, '$2y$10$kAzTvwJpns/AfB.1DvI66uQXqWH9ys6D8OA60vxLXeC6gQ7HVEnry', 1, 'Correspondant', NULL, '2021-05-29 13:05:27', '2021-05-29 13:05:27'),
(17, 'Toure LOKOKA', 'dibo', 'Gara@yahoo.fr', NULL, '$2y$10$zUS/KsuMkI5sSPebPKVB0OSq8dZfgGOHnFkHJngGonj.2x6gNN2L2', 1, 'Correspondant', NULL, '2021-05-29 13:07:33', '2021-05-29 13:07:33'),
(18, 'Toure LOKOKA', 'lopo', 'Gara45@yahoo.fr', NULL, '$2y$10$aofgPp1xrpEnF3VQKLEyfuhiYub/rp8CUxatqE4HPH/tJn5FPg02S', 1, 'Correspondant', NULL, '2021-05-29 13:10:46', '2021-05-29 13:10:46'),
(19, 'Toure LOKOKA', 'lili', 'Gara465@yahoo.fr', NULL, '$2y$10$GwndTVuDMzbv0uxxNPRzfusQl7gB4UiqaqZ/n7Hph2TobzEEQ0ZHu', 1, 'Correspondant', NULL, '2021-05-29 13:12:32', '2021-05-29 13:12:32'),
(20, 'dfsdfdsf dkfjndsjkhf', 'tirap', 'tirap@yahoo.fr', NULL, '$2y$10$rQFBe/LvGXlypFpxHR.p3.9T8TYIrD3zM0eEDCJ1P3GozbLtz0tO2', 1, 'Demandeur', NULL, '2021-05-29 13:19:12', '2021-05-29 13:19:12'),
(21, 'poloiii sdfdsfd', 'kolo', 'lop@yahoo.fr', NULL, '$2y$10$f42NDOL0XFPmYDrGh.HguOZ3NEpGEcjlr6a7fVgBWU.hmRA0Qmdoa', 1, 'Correspondant', NULL, '2021-05-29 13:22:01', '2021-05-29 13:22:01'),
(22, 'poloiii sdfdsfd', 'sss', 'lop7@yahoo.fr', NULL, '$2y$10$/ZgdI1qrVXiqBZwsZHp1WuOTnGKCP5/eM/BlCTRjA2yVKYduUw6Oa', 1, 'Correspondant', NULL, '2021-05-29 13:23:53', '2021-05-29 13:23:53'),
(23, 'poloiii sdfdsfd', 'dolo', 'lop78@yahoo.fr', NULL, '$2y$10$omSGRbOmZfzE7KINpfJ13enn/UKG6J9Ofywku4VSbl0F.5XYqSG.u', 1, 'Correspondant', NULL, '2021-05-29 13:24:52', '2021-05-29 13:24:52'),
(24, 'poloiii sdfdsfd', 'totp', 'lop788@yahoo.fr', NULL, '$2y$10$qawXtKXk/ZhG/tYtSgm6R.jhkSEH0N6dOlHYljCDZxpq59/Xktif2', 1, 'Correspondant', NULL, '2021-05-29 13:27:24', '2021-05-29 13:27:24'),
(25, 'poloiii sdfdsfd', 'tinto', 'lop789897@yahoo.fr', NULL, '$2y$10$ntCBAe8sIzWRU.RzZVRP7uWQXJla0aKZY9J3BZzO1F1Lfdwf9JO6i', 1, 'Correspondant', NULL, '2021-05-29 13:32:49', '2021-05-29 13:32:49'),
(26, 'poloiii sdfdsfd', 'zara', 'lop7898979@yahoo.fr', NULL, '$2y$10$wYp.jN8VvaVudnDIG1hbv.kdja0yaRFnreQ09QkuJ.WKpm/MiNMSa', 1, 'Correspondant', NULL, '2021-05-29 13:33:22', '2021-05-29 13:33:22'),
(27, 'poloiii sdfdsfd', 'diona', 'lop789897991011@yahoo.fr', NULL, '$2y$10$ImdbaldmHG5I/J2iTmwo/u4zTRMTx196r/Y.TPDbYX8fu8tdXU3rG', 1, 'Correspondant', NULL, '2021-05-29 13:36:27', '2021-05-29 13:36:27'),
(28, 'poloiii sdfdsfd', 'zakaro', 'lopo123@yahoo.fr', NULL, '$2y$10$ss5UdzQHrUT4izUnjjIlMuyeEdlML/6zvBrjScTRMdeyFtsm.wJ2S', 1, 'Correspondant', NULL, '2021-05-29 13:46:48', '2021-05-29 13:46:48'),
(29, 'poloiii sdfdsfd', 'kataro', 'lopo55@yahoo.fr', NULL, '$2y$10$y6mg6u.LqhoTzJ1uUxK5JedmNHNh0fH2R9cCvRAwuG4YiwO7l46pC', 1, 'Correspondant', NULL, '2021-05-29 13:49:50', '2021-05-29 13:49:50'),
(30, 'poloiii sdfdsfd', 'douglass', 'lopo556@yahoo.fr', NULL, '$2y$10$FBir2kuKKRgSKHudPD9tnefTsTluJg8UwHmxiFiJDqW3Eq/54h/x.', 1, 'Correspondant', NULL, '2021-05-29 13:51:00', '2021-05-29 13:51:00'),
(31, 'poloiii sdfdsfd', 'gramala', 'lopo5567@yahoo.fr', NULL, '$2y$10$jWrsKrl2SIqahW1ztbgIROjj4YhiveIcNht9qI/iKLrWwI7Ox3KSm', 1, 'Correspondant', NULL, '2021-05-29 13:51:57', '2021-05-29 13:51:57'),
(32, 'poloiii sdfdsfd', 'toro', 'lopo55678@yahoo.fr', NULL, '$2y$10$99P2QGIQTSCETprqs6bJiu.wpor45mkSExJlazSfNWT/PUIqN5EG2', 1, 'Correspondant', NULL, '2021-05-29 13:53:32', '2021-05-29 13:53:32'),
(33, 'poloiii sdfdsfd', 'zamino', 'lopora@yahoo.fr', NULL, '$2y$10$WK4qJUxiocd3NS5gf1iipO68LwpDPrDH4biF1DM95cau.SGOYGF0.', 1, 'Correspondant', NULL, '2021-05-29 14:00:08', '2021-05-29 14:00:08'),
(34, 'poloiii sdfdsfd', 'dalou896', 'lopora1@yahoo.fr', NULL, '$2y$10$HThTu9NnGwbvLwwamb0zOezuzDjP3AP4dDCtbEXkS4D6UKKPYVPY2', 1, 'Correspondant', NULL, '2021-05-29 14:02:07', '2021-05-29 14:02:07');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `marques` varchar(250) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `type`, `marques`, `actif`, `created_at`, `updated_at`) VALUES
(4, 'RAV10', 'HONDA', 1, '2021-05-19 15:59:10', '2021-05-19 15:59:10'),
(5, 'ADVENSIS 2.0', 'TOYOTA', 0, '2021-05-20 10:47:07', '2021-05-20 10:47:07'),
(6, 'ADVENSIS 5.0', 'TOYOTA', 1, '2021-05-20 10:24:11', '2021-05-20 10:24:11');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vueaccreditation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vueaccreditation` (
`idaccreditation` int(11)
,`iddemandeur` int(11)
,`titreevenement` varchar(254)
,`lieuevenement` varchar(254)
,`datedebut` datetime
,`datefin` datetime
,`moyentransport` varchar(254)
,`immatriculation` varchar(254)
,`listemateriel` varchar(254)
,`membresequipe` varchar(254)
,`actif` tinyint(1)
,`iduser` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuecorrespondant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuecorrespondant` (
`idcorrespondant` int(11)
,`iduser` int(11)
,`nomcorrespondant` varchar(254)
,`region` varchar(254)
,`prenomcorrespondant` varchar(254)
,`cnibcorrespondant` varchar(254)
,`passportcorrespondant` varchar(254)
,`telephonecorrespondant` int(11)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`actif` tinyint(1)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuedemandeur`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuedemandeur` (
`iddemandeur` int(11)
,`iduser` int(11)
,`actif` tinyint(1)
,`nom` varchar(254)
,`prenom` varchar(254)
,`profession` varchar(254)
,`datenaissance` datetime
,`lieunaissance` varchar(254)
,`nationalite` varchar(254)
,`sexe` varchar(254)
,`numPasseport` varchar(254)
,`carteconsulaire` varchar(254)
,`datedelivcnib` datetime
,`dateexpircnib` datetime
,`telephone` int(11)
,`personneprevenir` varchar(254)
,`lieuresidence` varchar(254)
,`organe` varchar(254)
,`telorgane` int(11)
,`adressestruct` varchar(254)
,`numcnib` varchar(254)
,`telephonepersp` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vueinformation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vueinformation` (
`idinfo` int(11)
,`iduser` int(11)
,`titreinfo` varchar(254)
,`contenuinfo` varchar(254)
,`actif` tinyint(1)
,`dateinfo` datetime
,`idcorrespondant` int(11)
,`nomcorrespondant` varchar(254)
,`prenomcorrespondant` varchar(254)
,`telephonecorrespondant` int(11)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`idmedia` int(11)
,`media` varchar(254)
,`typepresse` varchar(254)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuepjcorrespondant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuepjcorrespondant` (
`idcorrespondant` int(11)
,`iduser` int(11)
,`actif` tinyint(1)
,`photo` varchar(255)
,`cv` varchar(255)
,`pjpasseport` varchar(255)
,`pjcnib` varchar(255)
,`pjcartepresse` varchar(255)
,`pjcnibperprev` varchar(255)
,`pjpasseportperprev` varchar(255)
,`pjcarteconsulaire` varchar(255)
,`visamedia` varchar(255)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuepjdemandeur`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuepjdemandeur` (
`iddemandeur` int(11)
,`iduser` int(11)
,`actif` tinyint(1)
,`photo` varchar(255)
,`cv` varchar(255)
,`pjpasseport` varchar(255)
,`pjcnib` varchar(255)
,`pjcartepresse` varchar(255)
,`pjcnibperprev` varchar(255)
,`pjpasseportperprev` varchar(255)
,`pjcarteconsulaire` varchar(255)
,`visamedia` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la vue `vueaccreditation`
--
DROP TABLE IF EXISTS `vueaccreditation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccreditation`  AS  select `ac`.`idaccreditation` AS `idaccreditation`,`ac`.`iddemandeur` AS `iddemandeur`,`ac`.`titreevenement` AS `titreevenement`,`ac`.`lieuevenement` AS `lieuevenement`,`ac`.`datedebut` AS `datedebut`,`ac`.`datefin` AS `datefin`,`ac`.`moyentransport` AS `moyentransport`,`ac`.`immatriculation` AS `immatriculation`,`ac`.`listemateriel` AS `listemateriel`,`ac`.`membresequipe` AS `membresequipe`,`d`.`actif` AS `actif`,`d`.`iduser` AS `iduser` from ((`demandeur` `d` join `accreditation` `ac`) join `users` `u`) where ((`d`.`iddemandeur` = `ac`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`iduser` AS `iduser`,`c`.`nom` AS `nomcorrespondant`,`c`.`region` AS `region`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`cnib` AS `cnibcorrespondant`,`c`.`passeport` AS `passportcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`c`.`actif` AS `actif` from (`correspondant` `c` join `users` `u`) where (`c`.`iduser` = `u`.`id`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuedemandeur`
--
DROP TABLE IF EXISTS `vuedemandeur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuedemandeur`  AS  select `d`.`iddemandeur` AS `iddemandeur`,`d`.`iduser` AS `iduser`,`d`.`actif` AS `actif`,`d`.`nom` AS `nom`,`d`.`prenom` AS `prenom`,`d`.`profession` AS `profession`,`d`.`datenaissance` AS `datenaissance`,`d`.`lieunaissance` AS `lieunaissance`,`d`.`nationalite` AS `nationalite`,`d`.`sexe` AS `sexe`,`d`.`numPasseport` AS `numPasseport`,`d`.`carteconsulaire` AS `carteconsulaire`,`d`.`datedelivcnib` AS `datedelivcnib`,`d`.`dateexpircnib` AS `dateexpircnib`,`d`.`telephone` AS `telephone`,`d`.`personneprevenir` AS `personneprevenir`,`d`.`lieuresidence` AS `lieuresidence`,`d`.`organe` AS `organe`,`d`.`telorgane` AS `telorgane`,`d`.`adressestruct` AS `adressestruct`,`d`.`numcnib` AS `numcnib`,`d`.`telephonepersp` AS `telephonepersp` from (`demandeur` `d` join `users` `u`) where (`d`.`iduser` = `u`.`id`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueinformation`
--
DROP TABLE IF EXISTS `vueinformation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinformation`  AS  select `i`.`idinfo` AS `idinfo`,`i`.`iduser` AS `iduser`,`i`.`titre` AS `titreinfo`,`i`.`contenu` AS `contenuinfo`,`i`.`actif` AS `actif`,`i`.`CREATED_AT` AS `dateinfo`,`c`.`idcorrespondant` AS `idcorrespondant`,`c`.`nom` AS `nomcorrespondant`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`m`.`idmedia` AS `idmedia`,`m`.`nommedia` AS `media`,`t`.`libelle` AS `typepresse` from (((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) join `informations` `i`) where ((`c`.`idcorrespondant` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `p`.`IDMEDIAPRESSE`) and (`t`.`idtype` = `p`.`IDMEDIAPRESSE`) and (`i`.`idinfo` = `c`.`idcorrespondant`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuepjcorrespondant`
--
DROP TABLE IF EXISTS `vuepjcorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepjcorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`iduser` AS `iduser`,`c`.`actif` AS `actif`,`pj`.`photo` AS `photo`,`pj`.`cv` AS `cv`,`pj`.`pjpasseport` AS `pjpasseport`,`pj`.`pjcnib` AS `pjcnib`,`pj`.`pjcartepresse` AS `pjcartepresse`,`pj`.`pjcnibperprev` AS `pjcnibperprev`,`pj`.`pjpasseportperprev` AS `pjpasseportperprev`,`pj`.`pjcarteconsulaire` AS `pjcarteconsulaire`,`pj`.`visamedia` AS `visamedia` from ((`correspondant` `c` join `piecesjointes` `pj`) join `users` `u`) where ((`c`.`idcorrespondant` = `pj`.`idcorrespondant`) and (`c`.`iduser` = `u`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuepjdemandeur`
--
DROP TABLE IF EXISTS `vuepjdemandeur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepjdemandeur`  AS  select `d`.`iddemandeur` AS `iddemandeur`,`d`.`iduser` AS `iduser`,`d`.`actif` AS `actif`,`pj`.`photo` AS `photo`,`pj`.`cv` AS `cv`,`pj`.`pjpasseport` AS `pjpasseport`,`pj`.`pjcnib` AS `pjcnib`,`pj`.`pjcartepresse` AS `pjcartepresse`,`pj`.`pjcnibperprev` AS `pjcnibperprev`,`pj`.`pjpasseportperprev` AS `pjpasseportperprev`,`pj`.`pjcarteconsulaire` AS `pjcarteconsulaire`,`pj`.`visamedia` AS `visamedia` from ((`demandeur` `d` join `piecesjointes` `pj`) join `users` `u`) where ((`d`.`iddemandeur` = `pj`.`idcorrespondant`) and (`d`.`iduser` = `u`.`id`)) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accreditation`
--
ALTER TABLE `accreditation`
  ADD PRIMARY KEY (`idaccreditation`),
  ADD KEY `FK_accreditation` (`iddemandeur`);

--
-- Index pour la table `correspondant`
--
ALTER TABLE `correspondant`
  ADD PRIMARY KEY (`idcorrespondant`);

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`iddemandeur`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`idinfo`),
  ADD KEY `FK_information` (`idcorrespondant`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idmedia`);

--
-- Index pour la table `mediacorrespondant`
--
ALTER TABLE `mediacorrespondant`
  ADD PRIMARY KEY (`IDMEDIACORRES`),
  ADD KEY `FK_mediacorrespondant` (`idcorrespondant`),
  ADD KEY `FK_mediacorrespondant1` (`idmedia`);

--
-- Index pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  ADD PRIMARY KEY (`IDMEDIAPRESSE`),
  ADD KEY `FK_mediapresse` (`idmedia`),
  ADD KEY `FK_mediapresse1` (`idtype`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idcorrespondant` (`idcorrespondant`),
  ADD KEY `FK_iddemandeur` (`iddemandeur`);

--
-- Index pour la table `typepresse`
--
ALTER TABLE `typepresse`
  ADD PRIMARY KEY (`idtype`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_identifiant_unique` (`identifiant`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `iddemandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mediacorrespondant`
--
ALTER TABLE `mediacorrespondant`
  MODIFY `IDMEDIACORRES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  MODIFY `IDMEDIAPRESSE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accreditation`
--
ALTER TABLE `accreditation`
  ADD CONSTRAINT `FK_accreditation` FOREIGN KEY (`iddemandeur`) REFERENCES `demandeur` (`iddemandeur`);

--
-- Contraintes pour la table `informations`
--
ALTER TABLE `informations`
  ADD CONSTRAINT `FK_information` FOREIGN KEY (`idcorrespondant`) REFERENCES `correspondant` (`idcorrespondant`);

--
-- Contraintes pour la table `mediacorrespondant`
--
ALTER TABLE `mediacorrespondant`
  ADD CONSTRAINT `FK_mediacorrespondant` FOREIGN KEY (`idcorrespondant`) REFERENCES `correspondant` (`idcorrespondant`),
  ADD CONSTRAINT `FK_mediacorrespondant1` FOREIGN KEY (`idmedia`) REFERENCES `media` (`idmedia`);

--
-- Contraintes pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  ADD CONSTRAINT `FK_mediapresse` FOREIGN KEY (`idmedia`) REFERENCES `media` (`idmedia`),
  ADD CONSTRAINT `FK_mediapresse1` FOREIGN KEY (`idtype`) REFERENCES `typepresse` (`idtype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
