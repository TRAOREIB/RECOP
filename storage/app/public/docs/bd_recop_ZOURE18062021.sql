-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 juin 2021 à 15:54
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_recop`
--

-- --------------------------------------------------------

--
-- Structure de la table `accrediregion`
--

CREATE TABLE `accrediregion` (
  `idaccrediregion` int(11) NOT NULL,
  `idregion` int(11) NOT NULL,
  `idaccreditation` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `lieuevenement` varchar(255) DEFAULT NULL,
  `titreevenement` varchar(255) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accrediregion`
--

INSERT INTO `accrediregion` (`idaccrediregion`, `idregion`, `idaccreditation`, `datedebut`, `datefin`, `lieuevenement`, `titreevenement`, `actif`, `created_at`, `updated_at`) VALUES
(131, 1, 116, '2021-06-08', '2021-06-25', 'Rouage', 'la roue de la miroire', 1, '2021-06-12 13:02:54', '2021-06-12 13:02:54'),
(132, 9, 116, '2021-06-08', '2021-06-25', 'la montagne', 'la peche monotone', 1, '2021-06-12 13:04:23', '2021-06-12 13:04:23'),
(133, 2, 117, '2021-06-09', '2021-07-02', 'a la cascade', 'la vision de deni', 0, '2021-06-13 15:44:32', '2021-06-13 15:44:32'),
(134, 1, 117, '2021-06-02', '2021-06-25', 'le domicile', 'la bonne conduite', 0, '2021-06-13 15:04:07', '2021-06-13 15:04:07'),
(135, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la nouvelle danse des kima', 1, '2021-06-13 15:03:12', '2021-06-13 15:03:12'),
(136, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la nouvelle danse des kimajourou', 0, '2021-06-13 15:40:25', '2021-06-13 15:40:25'),
(137, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la nouvelle danse des kimajourou', 0, '2021-06-13 15:44:15', '2021-06-13 15:44:15'),
(138, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'un bon ouvrier', 0, '2021-06-13 15:42:15', '2021-06-13 15:42:15'),
(139, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'un bon ouvrier', 0, '2021-06-13 15:42:24', '2021-06-13 15:42:24'),
(140, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'un bon ouvrier', 0, '2021-06-13 15:43:39', '2021-06-13 15:43:39'),
(141, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'un bon ouvrier', 0, '2021-06-13 16:15:32', '2021-06-13 16:15:32'),
(142, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'un bon ouvrier', 1, '2021-06-13 15:20:05', '2021-06-13 15:20:05'),
(143, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire', 1, '2021-06-13 15:25:47', '2021-06-13 15:25:47'),
(144, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire', 0, '2021-06-13 15:44:21', '2021-06-13 15:44:21'),
(145, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire', 0, '2021-06-13 15:45:15', '2021-06-13 15:45:15'),
(146, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire du nord', 0, '2021-06-13 15:45:03', '2021-06-13 15:45:03'),
(147, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire du nord', 0, '2021-06-13 15:44:26', '2021-06-13 15:44:26'),
(148, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire du nord', 0, '2021-06-13 15:44:50', '2021-06-13 15:44:50'),
(149, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire du nord', 0, '2021-06-13 15:44:43', '2021-06-13 15:44:43'),
(150, 1, 117, '2021-06-02', '2021-06-18', 'la place de la nation', 'la suite au territoire du nord', 0, '2021-06-13 15:44:38', '2021-06-13 15:44:38'),
(151, 5, 117, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'la belle cité de sya est encore la', 1, '2021-06-13 15:47:39', '2021-06-13 15:47:39'),
(152, 9, 117, '2021-06-09', '2021-06-26', 'Village de kilimandjaro', 'le village de kilimandjaro', 1, '2021-06-13 16:16:50', '2021-06-13 16:16:50'),
(153, 5, 137, '2021-06-08', '2021-06-25', 'le marché', 'la nouvelle danse des kima', 1, '2021-06-14 11:22:48', '2021-06-14 11:22:48'),
(154, 3, 137, '2021-06-08', '2021-06-18', 'maison', 'le village de kilimandjaro', 1, '2021-06-14 11:23:15', '2021-06-14 11:23:15'),
(155, 4, 137, '2021-06-08', '2021-06-17', 'au village', 'la revolte des villageois', 0, '2021-06-14 12:09:42', '2021-06-14 12:09:42'),
(156, 4, 137, '2021-06-08', '2021-06-17', 'au village', 'la revolte des villageois', 0, '2021-06-14 12:02:39', '2021-06-14 12:02:39'),
(157, 4, 137, '2021-06-08', '2021-06-17', 'au village', 'la revolte des villageois', 0, '2021-06-14 12:02:44', '2021-06-14 12:02:44'),
(158, 1, 137, '2021-06-09', '2021-06-22', NULL, 'la gazouillère', 1, '2021-06-14 12:03:40', '2021-06-14 12:03:40'),
(159, 1, 137, '2021-06-09', '2021-06-22', NULL, 'la gazouillère', 1, '2021-06-14 12:08:41', '2021-06-14 12:08:41'),
(160, 1, 137, '2021-06-09', '2021-06-22', NULL, 'la gazouillère', 1, '2021-06-14 12:09:38', '2021-06-14 12:09:38'),
(161, 6, 141, '2021-06-08', '2021-06-10', 'la maison', 'le vieux mossi', 1, '2021-06-14 12:13:20', '2021-06-14 12:13:20'),
(162, 1, 141, '2021-06-09', '2021-06-23', 'tama', 'la parade des animaux', 1, '2021-06-14 12:14:31', '2021-06-14 12:14:31'),
(163, 3, 141, '2021-06-09', '2021-06-10', 'la pèche', 'la pèche lointaine', 1, '2021-06-14 12:15:23', '2021-06-14 12:15:23'),
(164, 5, 142, '1444-12-14', '1444-12-14', 'KAYA', 'DALON TECH DAY', 1, '2021-06-15 14:42:30', '2021-06-15 14:42:30'),
(165, 3, 142, '1111-11-19', '1111-11-11', 'OUAGADOUDOU', 'DALON TECH DAY', 1, '2021-06-15 14:43:12', '2021-06-15 14:43:12');

-- --------------------------------------------------------

--
-- Structure de la table `accreditation`
--

CREATE TABLE `accreditation` (
  `idaccreditation` int(11) NOT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `iduser` int(11) DEFAULT NULL,
  `titreevenement` varchar(254) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `moyentransport` varchar(254) DEFAULT NULL,
  `immatriculation` varchar(254) DEFAULT NULL,
  `listemateriel` varchar(254) DEFAULT NULL,
  `membresequipe` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `valider` tinyint(1) NOT NULL DEFAULT 0,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accreditation`
--

INSERT INTO `accreditation` (`idaccreditation`, `iddemandeur`, `iduser`, `titreevenement`, `datedebut`, `datefin`, `moyentransport`, `immatriculation`, `listemateriel`, `membresequipe`, `actif`, `valider`, `CREATED_AT`, `UPDATED_AT`) VALUES
(116, 147, NULL, 'la roue de la miroire', '2021-06-08', '2021-06-25', 'RAV4', '78542369', 'Micro\r\nOrdinateur', NULL, 1, 0, '2021-06-12 13:02:53', '2021-06-12 13:05:31'),
(117, 148, 187, 'la vision de deni', '2021-06-09', '2021-07-02', 'RAV4', '54646', 'Radio walkman', NULL, 1, 0, '2021-06-12 14:58:51', '2021-06-13 16:17:17'),
(118, NULL, NULL, 'la nouvelle danse des kima', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 14:59:53', '2021-06-13 14:59:53'),
(119, NULL, NULL, 'la nouvelle danse des kima', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:02:55', '2021-06-13 15:02:55'),
(120, NULL, NULL, 'la nouvelle danse des kima', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:03:12', '2021-06-13 15:03:12'),
(121, NULL, NULL, 'la nouvelle danse des kimajourou', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:05:24', '2021-06-13 15:05:24'),
(122, NULL, NULL, 'la nouvelle danse des kimajourou', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:15:55', '2021-06-13 15:15:55'),
(123, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:16:24', '2021-06-13 15:16:24'),
(124, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:17:55', '2021-06-13 15:17:55'),
(125, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:18:18', '2021-06-13 15:18:18'),
(126, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:19:02', '2021-06-13 15:19:02'),
(127, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:20:05', '2021-06-13 15:20:05'),
(128, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:25:47', '2021-06-13 15:25:47'),
(129, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:26:20', '2021-06-13 15:26:20'),
(130, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:28:21', '2021-06-13 15:28:21'),
(131, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:29:04', '2021-06-13 15:29:04'),
(132, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:40:32', '2021-06-13 15:40:32'),
(133, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:42:20', '2021-06-13 15:42:20'),
(134, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:43:36', '2021-06-13 15:43:36'),
(135, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 15:44:11', '2021-06-13 15:44:11'),
(136, NULL, NULL, 'le village de kilimandjaro', '2021-06-09', '2021-06-26', NULL, NULL, NULL, NULL, 1, 0, '2021-06-13 16:16:50', '2021-06-13 16:16:50'),
(137, 151, 190, 'la nouvelle danse des kima', '2021-06-08', '2021-06-25', 'Pick up', '785525', 'Camera', NULL, 1, 0, '2021-06-14 11:22:48', '2021-06-14 11:33:42'),
(138, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, '2021-06-14 11:33:23', '2021-06-14 11:33:23'),
(139, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, '2021-06-14 11:44:09', '2021-06-14 11:44:09'),
(140, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, '2021-06-14 11:44:42', '2021-06-14 11:44:42'),
(141, 152, 191, 'le vieux mossi', '2021-06-08', '2021-06-10', 'vehicule', '7787', 'Micro', NULL, 1, 0, '2021-06-14 12:13:20', '2021-06-14 12:15:47'),
(142, 158, 197, 'DALON TECH DAY', '1444-12-14', '1444-12-14', 'MOTO', '12457PO', 'CAMS ETC ...', NULL, 1, 0, '2021-06-15 14:42:30', '2021-06-15 14:56:43');

-- --------------------------------------------------------

--
-- Structure de la table `correspondant`
--

CREATE TABLE `correspondant` (
  `idcorrespondant` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `lieunaissance` varchar(255) DEFAULT NULL,
  `nationalite` varchar(255) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `datedelivcnib` date DEFAULT NULL,
  `dateexpircnib` date DEFAULT NULL,
  `passeport` varchar(254) DEFAULT NULL,
  `profession` varchar(254) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `telephone2` int(11) DEFAULT NULL,
  `mail` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `numcartepresse` int(11) DEFAULT NULL,
  `refjournal` varchar(254) DEFAULT NULL,
  `typecorrespondant` varchar(255) DEFAULT NULL,
  `parcourspro` varchar(254) DEFAULT NULL,
  `region` varchar(254) DEFAULT NULL,
  `origine` varchar(255) DEFAULT NULL,
  `personneprevenir` varchar(255) DEFAULT NULL,
  `telephonepersp` int(20) DEFAULT NULL,
  `pjcartepresse` varchar(254) DEFAULT NULL,
  `pjpasseport` varchar(254) DEFAULT NULL,
  `organe` varchar(255) NOT NULL,
  `typeorgane` varchar(255) DEFAULT NULL,
  `telorgane` varchar(20) DEFAULT NULL,
  `adresseorgane` varchar(255) DEFAULT NULL,
  `typepresse` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `correspondant`
--

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `cnib`, `datedelivcnib`, `dateexpircnib`, `passeport`, `profession`, `telephone`, `telephone2`, `mail`, `lieuresidence`, `numcartepresse`, `refjournal`, `typecorrespondant`, `parcourspro`, `region`, `origine`, `personneprevenir`, `telephonepersp`, `pjcartepresse`, `pjpasseport`, `organe`, `typeorgane`, `telorgane`, `adresseorgane`, `typepresse`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(185, 170, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, '78521478', NULL, NULL, '74102036', 'Journaliste', 70203024, NULL, 'tourealidou20501789@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70203041', NULL, NULL, NULL, NULL, 0, '2021-06-12 11:03:16', '2021-06-16 09:43:10'),
(186, 171, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, '78521478', NULL, NULL, '74102036', 'Journaliste', 70203024, NULL, 'tourealidou205017899@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70203041', NULL, NULL, NULL, NULL, 0, '2021-06-12 11:04:45', '2021-06-12 11:04:45'),
(187, NULL, 'SAMBARE', 'Alidou', NULL, NULL, NULL, NULL, '78456321', NULL, NULL, '78453698', 'Journaliste', 70203024, 74125874, 'sambare12@yahoo.fr', 'Bobo Dioulasso', 7894562, 'Ref', 'Correspondant national', 'Parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 11:17:43', '2021-06-12 11:17:43'),
(188, 173, 'DIALLO', 'Sita', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Centre', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 11:38:51', '2021-06-12 11:38:51'),
(189, 174, 'MILLOGO', 'Ramata', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita12@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:42:49', '2021-06-12 11:42:49'),
(190, 175, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita123@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:45:16', '2021-06-12 11:45:16'),
(191, 176, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita78@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:47:04', '2021-06-12 11:47:05'),
(192, 177, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita789@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:50:21', '2021-06-12 11:50:22'),
(193, 178, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita7899@yahoo.fr', 'Bobo Dioulasso', 5456, 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:55:39', '2021-06-12 11:55:40'),
(194, 179, 'ZOUARI', 'Malickou', NULL, NULL, NULL, NULL, '74859632', NULL, NULL, '74102036', 'Journaliste', 78451236, 74125874, 'malickou@yahoo.fr', 'Bobo Dioulasso', 145237, 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:02:39', '2021-06-12 12:02:39'),
(195, 180, 'ZOUARI', 'Malickou', NULL, NULL, NULL, NULL, '74859632', NULL, NULL, '74102036', 'Journaliste', 78451236, 74125874, 'malickou1@yahoo.fr', 'Bobo Dioulasso', 145237, 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:05:50', '2021-06-12 12:05:51'),
(196, 181, 'ZOUARI', 'ZOURE', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, NULL, 'zoumari@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 12:19:06', '2021-06-12 12:19:06'),
(197, 183, 'ZOUARI', 'ZOURE', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, NULL, 'zoumari1234@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 12:36:14', '2021-06-12 12:36:14'),
(198, 184, 'MADIAGA', 'Aristide', NULL, NULL, NULL, NULL, '78963214', NULL, NULL, '74102036', 'Journaliste', 70203024, 74125874, 'madiaga@yahoo.fr', 'Bobo Dioulasso', 7894562, 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:39:53', '2021-06-12 12:39:53'),
(199, 185, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, 'B78453621', NULL, NULL, '74102036', 'Journaliste', 70203024, 74125874, 'tourila@yahoo.fr', 'Bobo Dioulasso', 4546, 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 12:48:16', '2021-06-12 12:48:17'),
(200, 186, 'SAMANDOULGOU', 'Alidou', NULL, NULL, NULL, NULL, '45879632', NULL, NULL, '78453698', 'Journaliste', 74123689, NULL, 'alidou5@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, NULL, 1, '2021-06-12 13:00:44', '2021-06-12 13:00:44'),
(201, 187, 'ZOUMBARA', 'Kalilou', NULL, NULL, NULL, NULL, '78456321', NULL, NULL, '5664564', 'Journaliste', 70203024, NULL, 'souare@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 14:58:19', '2021-06-13 12:04:21'),
(202, 188, 'DIABOUGOU', 'Alimata', NULL, NULL, NULL, 'HOMME', 'B78456321', NULL, NULL, 'B78541236', 'Journaliste', 70203045, 77859654, 'diabougou@yahoo.fr', 'Bobo Dioulasso', 74185296, 'references', 'Journaliste independant', 'parcours', 'Centre', NULL, NULL, NULL, NULL, NULL, 'France 24', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-13 17:34:23', '2021-06-14 05:54:36'),
(203, 189, 'DIABOUGA', 'Pouga', NULL, NULL, NULL, 'HOMME', '2564564', '2021-06-04', '2021-06-26', '245', 'Journaliste', 70203045, 77859654, 'zoromela@yahoo.fr', 'Bobo Dioulasso', 12454, 'References', 'Correspondant national', 'parcours', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'France 24', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-14 06:01:55', '2021-06-14 18:29:07'),
(204, 190, 'TAMBOULA', 'Cheik Omar', NULL, NULL, NULL, 'HOMME', '7855236', NULL, NULL, '7455', 'Journaliste', 70203045, NULL, 'tamboula12@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 70000000, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-14 11:22:28', '2021-06-14 11:32:33'),
(205, 191, 'TAMBOULA', 'Alimata', NULL, NULL, NULL, 'MASCULIN', '55', '2021-06-16', '2021-06-24', '557', 'Journaliste', 70203045, NULL, 'tatata@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 75757, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-14 12:12:51', '2021-06-14 12:12:52'),
(206, 192, 'KONATE', 'Arnaud', NULL, NULL, NULL, 'HOMME', '7855236', '2021-06-23', '2021-06-17', 'B78541236', 'Journaliste', 70203045, 77859654, 'konatelo@yahoo.fr', 'Bobo Dioulasso', 566666, 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, 'Toure Arnaud', 455556, NULL, NULL, 'Sidwaya', NULL, '78566', 'Rue 44', 'Radio', 1, '2021-06-15 08:30:26', '2021-06-15 08:30:27'),
(207, 193, 'KONATE', 'Arnaud', '2021-06-15', NULL, NULL, 'HOMME', '7855236', '2021-06-23', '2021-06-17', 'B78541236', 'Journaliste', 70203045, 77859654, 'konatelo1@yahoo.fr', 'Bobo Dioulasso', 566666, 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, 'Toure Arnaud', 455556, NULL, NULL, 'Sidwaya', NULL, '78566', 'Rue 44', 'Radio', 0, '2021-06-15 08:35:52', '2021-06-15 08:35:53'),
(208, 194, 'TAMBOULARE', 'Alphonse', '2021-06-09', NULL, NULL, 'FEMME', 'B7855226', '2021-06-21', '2021-06-11', '51556', 'Journaliste', 7845125, 7020365, 'tamboulare@yahoo.fr', 'Bobo Dioulasso', 21545, 'REF', 'Journaliste independant', 'PARC', 'Centre', NULL, 'Toure Arnaud', 544525, NULL, NULL, 'RFI', NULL, '785236', 'Rue 44', 'Presse Ecrite', 1, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(209, 195, 'TONDE', 'SAYOUBA', '1111-11-11', 'ZORGHO', 'BURKINABE', 'HOMME', '1424A', '1111-11-11', '1111-11-11', '121121', 'JOURNALISTE', 121212, 12112, 'tonde001@gmail.com', 'KAYA', 11214344, 'AZER', 'Correspondant national', 'AZER', 'Centre', NULL, 'TOURE KIRI', 121231, NULL, NULL, 'RFI', NULL, '123344', 'KAYA', 'Presse Ecrite', 1, '2021-06-15 13:45:42', '2021-06-15 14:14:01'),
(210, 196, 'MINOUGOU', 'DIEUDONNE', '1111-11-11', 'PARIS', 'BURKINABE', 'HOMME', '124578', '1111-11-11', '1111-11-11', '12344', 'JOUEUR', 147258, 124578, 'minoud@yahoo.fr', 'KADIOGO', 1234, 'AZER', 'Correspondant international', 'AZERTY', 'Centre', 'Nationale', 'TOURE KIRI', 1231, NULL, NULL, 'RFI', NULL, '1111111111', 'AZER', 'Presse Ecrite', 1, '2021-06-15 14:23:56', '2021-06-15 14:23:57'),
(211, 197, 'MINOUGOU', 'DALOU', '1111-11-11', 'KOUDOUGOU', 'BURKINABE', 'MASCULIN', '147852', '1444-12-14', '4444-12-14', '14785', 'JOURNALISTE', 124578, NULL, 'daloum@yahoo.fr', 'BURKINA', NULL, NULL, NULL, NULL, NULL, NULL, 'DOULOU ERIC', 124578, NULL, NULL, 'DELOU.COM', NULL, '124578', NULL, NULL, 0, '2021-06-15 14:41:55', '2021-06-15 14:41:56'),
(212, 198, 'MINOUGOU', 'MOUSSA', '1111-11-11', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', '123445', '1111-11-11', '1111-11-11', NULL, 'JOURNALISTE', 1223, NULL, 'minoumouss@yahoo.fr', 'OUAGADOUGOU, 10, OUAGA 2000', 11111, 'RFI, BF1', 'Correspondant national', 'RFI, BF1', 'Centre', NULL, 'ZEA REA', 11111111, NULL, NULL, 'RFI', NULL, '1243', 'OUAGA', 'Presse Ecrite', 1, '2021-06-15 17:35:23', '2021-06-15 17:35:24'),
(213, 199, 'MINOUGOU', 'MOUSSA', '1111-11-11', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', '123', '1111-11-11', '1111-11-11', NULL, 'JOURNALISTE', 122, NULL, 'minoumoussa@yahoo.fr', 'OUAGADOUGOU, 10, OUAGA 2000', 11111, 'RFI, BF1', NULL, 'RFI, BF1', 'Centre', NULL, 'ZEA REA', 11111111, NULL, NULL, 'RFI', NULL, '1111111', 'OUAGA', 'Presse Ecrite', 1, '2021-06-15 17:40:42', '2021-06-15 17:40:43'),
(214, 200, 'OLLO', 'asd', '0011-11-11', 'DD', 'DD', 'HOMME', '1234', '1111-11-11', '1111-11-11', NULL, 'AAA', 111, NULL, 'daloum12@yahoo.fr', 'DAZ', 1111, 'RFI', 'Correspondant national', 'RFI', 'Centre', NULL, 'RDE GRR', 1111, NULL, NULL, 'RFI', NULL, '111', 'OUAGA', 'Presse Ecrite', 1, '2021-06-15 17:43:52', '2021-06-15 17:43:52'),
(215, 202, 'TAMBOURA', 'MOUSSA', '1111-11-11', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', '1231', '1111-11-11', '1111-11-11', NULL, 'INFORMATICIEN', 142578, NULL, 'tonde00134@gmail.com', 'KADIOGO', 124578, 'DEV', 'Correspondant national', 'DEV', 'Centre', NULL, 'TOURE KIRI', 123423, NULL, NULL, 'RFI', 'National', '121212', 'AZER', 'Presse Ecrite', 1, '2021-06-16 10:22:56', '2021-06-16 10:22:57'),
(216, 203, 'TIMBILA', 'PAUL', '0001-11-11', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', '12345A', '1111-11-11', '1111-11-11', NULL, 'JOURNALISTE', 1234567, NULL, 'tonde001345@gmail.com', 'OUAGADOUGOU, 10, OUAGA 2000', 1111, 'CV', 'Correspondant international', 'CV', 'Centre', 'Etrangere', 'TOE HARUN', 123344, NULL, NULL, 'RFI', 'International', '1111111', 'OUAGA', 'Radio', 1, '2021-06-16 10:58:37', '2021-06-16 10:58:38');

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
  `passeport` varchar(254) DEFAULT NULL,
  `laissepasser` varchar(50) DEFAULT NULL,
  `professionfixeur` varchar(255) DEFAULT NULL,
  `carteprofessionnelfixeur` varchar(50) DEFAULT NULL,
  `carteconsulaire` varchar(254) DEFAULT NULL,
  `datedelivcnib` datetime DEFAULT NULL,
  `dateexpircnib` datetime DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `telephoneresidence` varchar(20) DEFAULT NULL,
  `adressfixeur` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `personneprevenir` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `adressepaysresidence` varchar(255) DEFAULT NULL,
  `organe` varchar(254) DEFAULT NULL,
  `telorgane` int(11) DEFAULT NULL,
  `adressestruct` varchar(254) DEFAULT NULL,
  `pjcnib` varchar(254) DEFAULT NULL,
  `pjpasseport` varchar(254) DEFAULT NULL,
  `pjcinibperprev` varchar(254) DEFAULT NULL,
  `pjpasseportperprev` varchar(254) DEFAULT NULL,
  `pjcartepresse` varchar(254) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `telephonepersp` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`iddemandeur`, `iduser`, `nom`, `prenom`, `profession`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `passeport`, `laissepasser`, `professionfixeur`, `carteprofessionnelfixeur`, `carteconsulaire`, `datedelivcnib`, `dateexpircnib`, `telephone`, `telephoneresidence`, `adressfixeur`, `mail`, `personneprevenir`, `lieuresidence`, `adressepaysresidence`, `organe`, `telorgane`, `adressestruct`, `pjcnib`, `pjpasseport`, `pjcinibperprev`, `pjpasseportperprev`, `pjcartepresse`, `cnib`, `telephonepersp`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(131, 170, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Bobo', 'Burkinabè', 'MASCULIN', '74102036', NULL, 'journaliste', '788', '866584', '2021-06-15 00:00:00', '2021-06-25 00:00:00', 70203024, '70202589', 'Rue 21.177', 'tourealidou20501789@yahoo.fr', 'TOURE FRANCK', 'Burkina Faso', NULL, '70203041', 78966655, '783666', NULL, NULL, NULL, NULL, NULL, '78521478', 78456321, 1, '2021-06-12 11:03:15', '2021-06-12 11:03:15'),
(132, 171, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Bobo', 'Burkinabè', 'MASCULIN', '74102036', NULL, 'journaliste', '788', '866584', '2021-06-15 00:00:00', '2021-06-25 00:00:00', 70203024, '70202589', 'Rue 21.177', 'tourealidou205017899@yahoo.fr', 'TOURE FRANCK', 'Burkina Faso', NULL, '70203041', 78966655, '783666', NULL, NULL, NULL, NULL, NULL, '78521478', 78456321, 0, '2021-06-12 11:04:44', '2021-06-12 11:04:45'),
(133, NULL, 'SAMBARE', 'Alidou', 'Journaliste', '2021-06-17 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '852147', '2021-06-09 00:00:00', '2021-06-25 00:00:00', 70203024, NULL, NULL, 'sambare12@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78456321', 78456321, 1, '2021-06-12 11:17:44', '2021-06-12 11:17:44'),
(134, 173, 'DIALLO', 'Sita', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 1, '2021-06-12 11:38:51', '2021-06-12 11:38:51'),
(135, 174, 'MILLOGO', 'Ramata', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita12@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 0, '2021-06-12 11:42:49', '2021-06-12 11:42:49'),
(136, 175, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita123@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 0, '2021-06-12 11:45:16', '2021-06-12 11:45:16'),
(137, 176, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita78@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 0, '2021-06-12 11:47:05', '2021-06-12 11:47:05'),
(138, 177, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita789@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 0, '2021-06-12 11:50:22', '2021-06-12 11:50:22'),
(139, 178, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15 00:00:00', '2021-06-26 00:00:00', 70203024, NULL, NULL, 'sita7899@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', 7784536, 0, '2021-06-12 11:55:40', '2021-06-12 11:55:40'),
(140, 179, 'ZOUARI', 'Malickou', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '74102036', NULL, NULL, NULL, '74185236', '2021-06-07 00:00:00', '2021-06-25 00:00:00', 78451236, NULL, NULL, 'malickou@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74859632', 78456321, 0, '2021-06-12 12:02:39', '2021-06-12 12:02:39'),
(141, 180, 'ZOUARI', 'Malickou', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '74102036', NULL, NULL, NULL, '74185236', '2021-06-07 00:00:00', '2021-06-25 00:00:00', 78451236, NULL, NULL, 'malickou1@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 70203041, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74859632', 78456321, 0, '2021-06-12 12:05:51', '2021-06-12 12:05:51'),
(142, 181, 'ZOUARI', 'ZOURE', 'Journaliste', '2021-07-01 00:00:00', 'Ouagadougou', 'Burkinabè', 'FEMININ', '78453698', '783666', 'Toure', '788', '7852236', '2021-06-08 00:00:00', '2021-06-25 00:00:00', 70203024, '70202589', 'Rue 21.177', 'zoumari@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 78453698, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, '74589632', 78456321, 0, '2021-06-12 12:19:06', '2021-06-12 12:19:06'),
(143, NULL, 'ROUAMBA', 'Pouga', 'Journaliste', NULL, NULL, NULL, 'HOMME', '245', '783666', 'Toure', '788', NULL, '2021-06-04 00:00:00', '2021-06-26 00:00:00', 70203045, '70202589', 'Rue 21.177', 'zoromela@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2564564', 78563214, 1, '2021-06-12 12:34:55', '2021-06-14 18:21:32'),
(144, 183, 'ZOUARI', 'ZOURE', 'Journaliste', '2021-07-01 00:00:00', 'Ouagadougou', 'Burkinabè', 'FEMININ', '78453698', '783666', 'Toure', '788', '7852236', '2021-06-08 00:00:00', '2021-06-25 00:00:00', 70203024, '70202589', 'Rue 21.177', 'zoumari1234@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 78453698, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, '74589632', 78456321, 1, '2021-06-12 12:36:14', '2021-06-12 12:36:14'),
(145, 184, 'MADIAGA', 'Aristide', 'Journaliste', '2021-06-22 00:00:00', 'Bobo', '255', 'HOMME', '74102036', NULL, NULL, NULL, '7859632', '2021-06-15 00:00:00', '2021-06-25 00:00:00', 70203024, NULL, NULL, 'madiaga@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 78453698, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78963214', 78456321, 0, '2021-06-12 12:39:54', '2021-06-12 12:39:54'),
(146, 185, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-22 00:00:00', 'Bobo', 'Burkinabe', 'HOMME', '74102036', NULL, NULL, NULL, '7852236', '2021-06-16 00:00:00', '2021-06-25 00:00:00', 70203024, NULL, NULL, 'tourila@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', 78453698, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, 'B78453621', 78456321, 0, '2021-06-12 12:48:17', '2021-06-12 12:48:17'),
(147, 186, 'SAMANDOULGOU', 'Alidou', 'Journaliste', '2021-06-08 00:00:00', 'Bobo', 'Burkinabè', 'MASCULIN', '78453698', '783666', 'Toure', '5', '564564', '2021-06-15 00:00:00', '2021-06-25 00:00:00', 74123689, '78655122', 'Rue 21.177', 'alidou5@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', 85895, 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, '45879632', 4546, 1, '2021-06-12 13:00:44', '2021-06-12 13:00:44'),
(148, 187, 'ZOUMBARA', 'Kalilou', 'Journaliste', NULL, 'Bobo', 'Burkinabè', 'HOMME', '5664564', '78543269', 'Toure', '785', '7859632', NULL, NULL, 70203024, '78655122', 'Toure Alidou', 'souare@yahoo.fr', 'TOURE Alidou', 'Bobo Dioulasso', NULL, 'RFI', 78453698, 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78456321', 852147, 1, '2021-06-12 14:58:18', '2021-06-13 10:13:57'),
(149, 188, 'DIABOUGOU', 'Aline', 'Journaliste', '2021-06-15 00:00:00', 'ouagadougou', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '78459632', '2021-06-15 00:00:00', '2021-06-25 00:00:00', 70203045, NULL, NULL, 'diabougou@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', 78456332, 'Rue 22.144', NULL, NULL, NULL, NULL, NULL, 'B78456321', 78563214, 0, '2021-06-13 17:34:24', '2021-06-13 17:34:24'),
(150, 189, 'DIABOUGA', 'Pouga', 'Journaliste', NULL, NULL, NULL, 'HOMME', '245', NULL, NULL, NULL, NULL, '2021-06-04 00:00:00', '2021-06-26 00:00:00', 70203045, NULL, NULL, 'zoromela@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2564564', 78563214, 1, '2021-06-14 06:01:56', '2021-06-14 18:29:24'),
(151, 190, 'TAMBOULA', 'Cheik Omar', 'Journaliste', NULL, 'Boromo', 'Burkinabè', 'HOMME', '7455', '45787', 'journaliste', '4545', '535635', NULL, NULL, 70203045, '70203040', 'rue 22.145', 'tamboula12@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', 44545, '45454', NULL, NULL, NULL, NULL, NULL, '7855236', 70000000, 1, '2021-06-14 11:22:28', '2021-06-14 11:32:33'),
(152, 191, 'TAMBOULA', 'Alimata', 'Journaliste', '2021-06-16 00:00:00', 'Boromo', 'Burkinabè', 'MASCULIN', '557', '45689', 'journaliste', '4575', '7565756', '2021-06-16 00:00:00', '2021-06-24 00:00:00', 70203045, '70203040', 'rue 22.145', 'tatata@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', 78456332, 'Rue 22.144', NULL, NULL, NULL, NULL, NULL, '55', 75757, 1, '2021-06-14 12:12:51', '2021-06-14 12:12:51'),
(153, 192, 'KONATE', 'Arnaud', 'Journaliste', '2021-06-15 00:00:00', 'Boromo', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '788656', '2021-06-23 00:00:00', '2021-06-17 00:00:00', 70203045, NULL, NULL, 'konatelo@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'Sidwaya', 78566, NULL, NULL, NULL, NULL, NULL, NULL, '7855236', 455556, 0, '2021-06-15 08:30:27', '2021-06-15 08:30:28'),
(154, 193, 'KONATE', 'Arnaud', 'Journaliste', '2021-06-15 00:00:00', 'Boromo', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '788656', '2021-06-23 00:00:00', '2021-06-17 00:00:00', 70203045, NULL, NULL, 'konatelo1@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'Sidwaya', 78566, NULL, NULL, NULL, NULL, NULL, NULL, '7855236', 455556, 0, '2021-06-15 08:35:53', '2021-06-15 08:35:53'),
(155, 194, 'TAMBOULARE', 'Alphonse', 'Journaliste', '2021-06-09 00:00:00', 'ouagadougou', 'Burkinabè', 'FEMME', '51556', NULL, NULL, NULL, '254545', '2021-06-21 00:00:00', '2021-06-11 00:00:00', 7845125, NULL, NULL, 'tamboulare@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', 785236, NULL, NULL, NULL, NULL, NULL, NULL, 'B7855226', 544525, 0, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(156, 195, 'TONDE', 'SAYOUBA', 'JOURNALISTE', '1111-11-11 00:00:00', 'ZORGHO', 'BURKINABE', 'HOMME', '121121', NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 121212, NULL, NULL, 'tonde001@gmail.com', 'TOURE KIRI', 'KAYA', NULL, 'RFI', 123344, NULL, NULL, NULL, NULL, NULL, NULL, '1424A', 121231, 1, '2021-06-15 13:45:43', '2021-06-15 14:18:41'),
(157, 196, 'MINOUGOU', 'DIEUDONNE', 'JOUEUR', '1111-11-11 00:00:00', 'PARIS', 'BURKINABE', 'HOMME', '12344', NULL, NULL, NULL, '123EEZD', '1111-11-11 00:00:00', '1111-11-11 00:00:00', 147258, NULL, NULL, 'minoud@yahoo.fr', 'TOURE KIRI', 'KADIOGO', NULL, 'RFI', 1111111111, NULL, NULL, NULL, NULL, NULL, NULL, '124578', 1231, 0, '2021-06-15 14:23:57', '2021-06-15 14:23:57'),
(158, 197, 'MINOUGOU', 'DALOU', 'JOURNALISTE', '1111-11-11 00:00:00', 'KOUDOUGOU', 'BURKINABE', 'MASCULIN', '14785', '14254787', 'JOURNALISTE', '124578', '147852', '1444-12-14 00:00:00', '4444-12-14 00:00:00', 124578, '124578', 'KAYA', 'daloum@yahoo.fr', 'DOULOU ERIC', 'BURKINA', 'KAYA', 'DELOU.COM', 124578, 'KAYA', NULL, NULL, NULL, NULL, NULL, '147852', 124578, 1, '2021-06-15 14:41:55', '2021-06-15 14:41:55'),
(159, 198, 'MINOUGOU', 'MOUSSA', 'JOURNALISTE', '1111-11-11 00:00:00', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', NULL, NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 1223, NULL, NULL, 'minoumouss@yahoo.fr', 'ZEA REA', 'OUAGADOUGOU, 10, OUAGA 2000', NULL, 'RFI', 1243, NULL, NULL, NULL, NULL, NULL, NULL, '123445', 11111111, 0, '2021-06-15 17:35:24', '2021-06-15 17:35:24'),
(160, 199, 'MINOUGOU', 'MOUSSA', 'JOURNALISTE', '1111-11-11 00:00:00', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', NULL, NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 122, NULL, NULL, 'minoumoussa@yahoo.fr', 'ZEA REA', 'OUAGADOUGOU, 10, OUAGA 2000', NULL, 'RFI', 1111111, NULL, NULL, NULL, NULL, NULL, NULL, '123', 11111111, 0, '2021-06-15 17:40:43', '2021-06-15 17:40:43'),
(161, 200, 'OLLO', 'asd', 'AAA', '0011-11-11 00:00:00', 'DD', 'DD', 'HOMME', NULL, NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 111, NULL, NULL, 'daloum12@yahoo.fr', 'RDE GRR', 'DAZ', NULL, 'RFI', 111, NULL, NULL, NULL, NULL, NULL, NULL, '1234', 1111, 0, '2021-06-15 17:43:52', '2021-06-15 17:43:52'),
(162, 202, 'TAMBOURA', 'MOUSSA', 'INFORMATICIEN', '1111-11-11 00:00:00', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', NULL, NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 142578, NULL, NULL, 'tonde00134@gmail.com', 'TOURE KIRI', 'KADIOGO', NULL, 'RFI', 121212, NULL, NULL, NULL, NULL, NULL, NULL, '1231', 123423, 0, '2021-06-16 10:22:57', '2021-06-16 10:22:57'),
(163, 203, 'TIMBILA', 'PAUL', 'JOURNALISTE', '0001-11-11 00:00:00', 'OUAGADOUGOU', 'BURKINABE', 'HOMME', NULL, NULL, NULL, NULL, NULL, '1111-11-11 00:00:00', '1111-11-11 00:00:00', 1234567, NULL, NULL, 'tonde001345@gmail.com', 'TOE HARUN', 'OUAGADOUGOU, 10, OUAGA 2000', NULL, 'RFI', 1111111, NULL, NULL, NULL, NULL, NULL, NULL, '12345A', 123344, 0, '2021-06-16 10:58:38', '2021-06-16 10:58:38');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

CREATE TABLE `informations` (
  `idinfo` int(11) NOT NULL,
  `idcorrespondant` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `contenu` varchar(254) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
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
  `actif` tinyint(1) NOT NULL DEFAULT 1,
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
  `iduser` int(11) DEFAULT NULL,
  `organe` varchar(255) DEFAULT NULL,
  `telorgane` varchar(20) DEFAULT NULL,
  `adresseorgane` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mediacorrespondant`
--

INSERT INTO `mediacorrespondant` (`IDMEDIACORRES`, `idcorrespondant`, `iduser`, `organe`, `telorgane`, `adresseorgane`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 206, NULL, 'Sidwaya', '78566', 'Rue 44', 1, '2021-06-15 08:30:27', '2021-06-15 08:30:27'),
(3, 207, 193, 'Sidwaya', '78566', 'Rue 44', 1, '2021-06-15 08:35:53', '2021-06-15 08:35:53'),
(4, 208, 194, 'RFI', '785236', 'Rue 44', 1, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(5, 209, 195, 'RFI', '123344', 'KAYA', 1, '2021-06-15 13:45:43', '2021-06-15 13:45:43'),
(6, 210, 196, 'RFI', '1111111111', 'AZER', 1, '2021-06-15 14:23:56', '2021-06-15 14:23:56'),
(7, 212, 198, 'RFI', '1243', 'OUAGA', 1, '2021-06-15 17:35:24', '2021-06-15 17:35:24'),
(8, 213, 199, 'RFI', '1111111', 'OUAGA', 1, '2021-06-15 17:40:42', '2021-06-15 17:40:42'),
(9, 214, 200, 'RFI', '111', 'OUAGA', 1, '2021-06-15 17:43:52', '2021-06-15 17:43:52'),
(10, 215, 202, 'RFI', '121212', 'AZER', 1, '2021-06-16 10:22:57', '2021-06-16 10:22:57'),
(11, 216, 203, 'RFI', '1111111', 'OUAGA', 1, '2021-06-16 10:58:38', '2021-06-16 10:58:38');

-- --------------------------------------------------------

--
-- Structure de la table `mediapresse`
--

CREATE TABLE `mediapresse` (
  `IDMEDIAPRESSE` int(11) NOT NULL,
  `idmedia` int(11) NOT NULL,
  `idtype` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
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
  `idaccreditation` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pjpasseport` varchar(255) DEFAULT NULL,
  `pjcnib` varchar(255) DEFAULT NULL,
  `pjcartepresse` varchar(255) DEFAULT NULL,
  `pjlaissezpasser` varchar(255) DEFAULT NULL,
  `pjcnibperprev` varchar(255) DEFAULT NULL,
  `pjpasseportperprev` varchar(255) DEFAULT NULL,
  `pjcarteconsulaire` varchar(255) DEFAULT NULL,
  `visamedia` varchar(255) DEFAULT NULL,
  `lettrerecommendation` varchar(255) DEFAULT NULL,
  `idcorrespondant` int(11) DEFAULT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecesjointes`
--

INSERT INTO `piecesjointes` (`id`, `idaccreditation`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjlaissezpasser`, `pjcnibperprev`, `pjpasseportperprev`, `pjcarteconsulaire`, `visamedia`, `lettrerecommendation`, `idcorrespondant`, `iddemandeur`, `actif`, `updated_at`, `created_at`) VALUES
(254, 116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 DEMANDES D\'AUDIENCES_Michel (1) (1).docx', NULL, 147, 1, '2021-06-12 13:05:45', '2021-06-12 13:05:45'),
(255, 117, 'accreditaion.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vueinformationevoluée.JPG', NULL, 148, 1, '2021-06-13 17:19:55', '2021-06-12 14:59:47'),
(256, NULL, 'accreditation2.jpg', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 202, NULL, 1, '2021-06-13 17:34:52', '2021-06-13 17:34:52'),
(257, NULL, 'Recépissé _ Hawa.pdf', 'bdmeetdoctor.sql', NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 203, NULL, 1, '2021-06-14 12:46:02', '2021-06-14 06:02:09'),
(258, 138, 'rapport T1 2020.docx', NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 151, 1, '2021-06-14 11:34:37', '2021-06-14 11:23:50'),
(259, 141, 'Recépissé _ Hawa.pdf', NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'meetdoc_26102020.sql', NULL, 152, 1, '2021-06-14 12:24:11', '2021-06-14 12:16:29'),
(260, NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 208, NULL, 1, '2021-06-15 09:37:43', '2021-06-15 09:37:43'),
(261, NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 208, NULL, 1, '2021-06-15 09:48:50', '2021-06-15 09:48:50'),
(262, NULL, 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', 'Sans titre.png', NULL, NULL, NULL, 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', NULL, 209, NULL, 1, '2021-06-15 13:47:04', '2021-06-15 13:47:04'),
(263, NULL, 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', 'Sans titre.png', NULL, NULL, NULL, 'fichiers_modif_session_27_05.PNG', 'Sans titre.png', NULL, 209, NULL, 1, '2021-06-15 13:48:40', '2021-06-15 13:48:40'),
(264, NULL, 'Capture.PNG', 'fichiers_modif_session_27_05.PNG', 'fichiers_modif_session_27_05.PNG', 'fichiers_modif_session_27_05.PNG', 'fichiers_modif_session_27_05.PNG', NULL, NULL, NULL, 'Sans titre.png', 'Capture.PNG', NULL, 210, NULL, 1, '2021-06-15 14:34:53', '2021-06-15 14:24:16'),
(265, 142, 'Capture.PNG', NULL, 'Sans titre.png', 'fichiers_modif_session_27_05.PNG', 'fichiers_modif_session_27_05.PNG', 'C:\\xampp\\tmp\\php944C.tmp', 'Capture.PNG', NULL, 'Capture.PNG', NULL, 'Sans titre.png', NULL, 158, 1, '2021-06-15 14:44:11', '2021-06-15 14:44:11'),
(266, NULL, 'Capture.PNG', 'fichiers_modif_session_27_05.PNG', NULL, 'fichiers_modif_session_27_05.PNG', 'fichiers_modif_session_27_05.PNG', NULL, NULL, NULL, NULL, 'Sans titre.png', NULL, 214, NULL, 1, '2021-06-15 17:44:09', '2021-06-15 17:44:09'),
(267, NULL, 'Capture.PNG', 'Capture.PNG', 'Capture.PNG', 'Capture.PNG', 'Capture.PNG', NULL, NULL, NULL, 'Capture.PNG', 'Sans titre.png', NULL, 215, NULL, 1, '2021-06-16 10:23:18', '2021-06-16 10:23:18'),
(268, NULL, 'Capture.PNG', 'Capture.PNG', NULL, 'Capture.PNG', 'Capture.PNG', NULL, NULL, NULL, NULL, 'Capture.PNG', NULL, 216, NULL, 1, '2021-06-16 10:59:02', '2021-06-16 10:59:02');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idregion` int(11) NOT NULL,
  `nomregion` varchar(254) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`idregion`, `nomregion`, `actif`, `created_at`, `updated_at`) VALUES
(1, 'Boucle du Mouhoun', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(2, 'Cascades', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(3, 'Centre', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(4, 'Centre-Est', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(5, 'Centre-Nord', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(6, 'Centre-Ouest', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(7, 'Centre-Sud', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(8, 'Est', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(9, 'Hauts-Bassins', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(10, 'Nord', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(11, 'Plateau Central', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(12, 'Sahel', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(13, 'Sud-Ouest', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `typepresse`
--

CREATE TABLE `typepresse` (
  `idtype` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
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
  `valid` tinyint(1) NOT NULL DEFAULT 1,
  `profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Correspondant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `identifiant`, `email`, `email_verified_at`, `password`, `valid`, `profil`, `remember_token`, `created_at`, `updated_at`) VALUES
(151, 'TOURE Arnaud', 'diabouga40', 'toure15@yahoo.fr', NULL, '$2y$10$7tr5CQtctjzFui6AFWgy4ehP8WSWdC6Eyat9pUWY4xDiCClKpMICS', 1, 'Enregistre', NULL, '2021-06-12 10:04:30', '2021-06-12 10:04:30'),
(152, 'TOURE Arnaud', 'diabouga80', 'toure150@yahoo.fr', NULL, '$2y$10$yZ5LDlqQpRWZaYFgtGfITuZSY7l.EsV4DRoANFQDH6jbzUVXwoOEm', 1, 'Enregistre', NULL, '2021-06-12 10:07:01', '2021-06-12 10:07:01'),
(153, 'TOURE Arnaud', 'diabouga808', 'toure1508@yahoo.fr', NULL, '$2y$10$Y3/JSxFeY76tZiXIVFmHo.qq51oSzUEd5gKuGYBHA7ehkmkNnJUPm', 1, 'Enregistre', NULL, '2021-06-12 10:08:48', '2021-06-12 10:08:48'),
(154, 'TOURE Arnaud', 'diabouga809', 'toure15088@yahoo.fr', NULL, '$2y$10$FFvO7f0cfIAuPLtYrzs.wuttWbaJCxsagyMDGeLFOLYHTg88h1K/a', 1, 'Enregistre', NULL, '2021-06-12 10:10:47', '2021-06-12 10:10:47'),
(155, 'TOURE Arnaud', 'diabouga8097', 'toure150889@yahoo.fr', NULL, '$2y$10$0KRFuFMi2vd7lv/isutEju79K9oh9bch80MPYZ3KcDn35Ae.tyrJO', 1, 'Enregistre', NULL, '2021-06-12 10:11:58', '2021-06-12 10:11:58'),
(156, 'TOURE Arnaud', 'diabouga80979', 'toure1508897@yahoo.fr', NULL, '$2y$10$mBRwOcAqUKQHfsHsF8ZtxOe20Gk6D/2cdcVw/29Si1jaBCQx5Y3g.', 1, 'Enregistre', NULL, '2021-06-12 10:14:29', '2021-06-12 10:14:29'),
(157, 'TOURE Arnaud', 'diabouga809799', 'toure15088978@yahoo.fr', NULL, '$2y$10$dTa4WY0hHYroZlTX7IlrZuE9A7iUGivdgjrZ1UkUhoUp6ISIXqK0e', 1, 'Enregistre', NULL, '2021-06-12 10:18:11', '2021-06-12 10:18:11'),
(158, 'TOURE Arnaud', 'diabouga8097999', 'toure150889789@yahoo.fr', NULL, '$2y$10$wN99zGnyJtDR10kmwUSGXu.Kwlj/czmKDt1.gtuvXD8Hs7tTAwkEa', 1, 'Enregistre', NULL, '2021-06-12 10:19:28', '2021-06-12 10:19:28'),
(159, 'TOURE Arnaud', 'diabouga809799910', 'toure15088978910@yahoo.fr', NULL, '$2y$10$vvZJ7JkgFdCkx58.CRRNr.og4wSAdy49uq.2n8b5jbVqiBeh5HHJi', 1, 'Enregistre', NULL, '2021-06-12 10:20:56', '2021-06-12 10:20:56'),
(160, 'TOURE Arnaud', 'diabouga2021', 'tourealidou12@yahoo.fr', NULL, '$2y$10$8ssBJtGSm9NnXfVPd965mugdrltGXMR4Fzt/QkJTwPZF.qGJ5GVyS', 1, 'Enregistre', NULL, '2021-06-12 10:22:10', '2021-06-12 10:22:10'),
(161, 'TOURE Arnaud', 'diabouga20213', 'tourealidou123@yahoo.fr', NULL, '$2y$10$.UlWQoyEZXIEQHF27fCJH.cpJZvCw52pHiyNJYod4shg5jXpMbe6K', 1, 'Enregistre', NULL, '2021-06-12 10:25:19', '2021-06-12 10:25:19'),
(162, 'TOURE Arnaud', 'diabouga202134', 'tourealidou1234@yahoo.fr', NULL, '$2y$10$MljLBf2NHRCIbjMFBp82N.goRlTzAyPSuidprANPCe2dJIAkRJNgS', 1, 'Enregistre', NULL, '2021-06-12 10:31:07', '2021-06-12 10:31:07'),
(163, 'TOURE Arnaud', 'diabouga2021345', 'tourealidou12345@yahoo.fr', NULL, '$2y$10$4LimVXGbgsea2elSFYiCwOhC62aV1RV28BIu3sQ3fTqeVpnFDzwrq', 1, 'Enregistre', NULL, '2021-06-12 10:32:26', '2021-06-12 10:32:26'),
(164, 'TOURE Arnaud', 'tarzan', 'tourealidou123456@yahoo.fr', NULL, '$2y$10$u0HopRD7CNn6bwykKTnJq.LuyRFOynf4iR8oaksOj8K2ELdBA5e4O', 1, 'Enregistre', NULL, '2021-06-12 10:33:38', '2021-06-12 10:33:38'),
(165, 'TOURE Arnaud', 'tarzan12', 'tourealidou1234567@yahoo.fr', NULL, '$2y$10$neGwg4oxsCCmzb3NsOvC3.3hMUc2YCVrb2GrDCJgy8xalyD3G1lka', 1, 'Enregistre', NULL, '2021-06-12 10:41:02', '2021-06-12 10:41:02'),
(166, 'TOURE Arnaud', 'tarzan50', 'tourealidou2050@yahoo.fr', NULL, '$2y$10$eya//HUJzZSoMTwDnAk5Fu2PIH9PRssaCKHEXi2L3kkXuijOudWV6', 1, 'Enregistre', NULL, '2021-06-12 10:49:12', '2021-06-12 10:49:12'),
(167, 'TOURE Arnaud', 'tarzan501', 'tourealidou20501@yahoo.fr', NULL, '$2y$10$IkURXSc1.POlL3sp9oFPc.Za69/ljlEk9gC9gCVxMf6YmNtDQe.w6', 1, 'Enregistre', NULL, '2021-06-12 10:54:07', '2021-06-12 10:54:07'),
(168, 'TOURE Arnaud', 'tarzan5017', 'tourealidou205017@yahoo.fr', NULL, '$2y$10$Zo4zYuv1PupXK3EBJ0Ira.9IG/YPLn.L.tdfiPmZJXzNvmi1KT9Je', 1, 'Enregistre', NULL, '2021-06-12 10:56:45', '2021-06-12 10:56:45'),
(169, 'TOURE Arnaud', 'tarzan50178', 'tourealidou2050178@yahoo.fr', NULL, '$2y$10$WFKyjyEL1NoNW0z7UoD2gOfC9VcVMQKxTU52Er8bJHecw8OdeqSYi', 1, 'Enregistre', NULL, '2021-06-12 10:57:56', '2021-06-12 10:57:56'),
(170, 'TOURE Arnaud', 'tarzan501789', 'tourealidou20501789@yahoo.fr', NULL, '$2y$10$J.T1Utlz0XfAvL8MkZVmj.1o0q4J/owCajTZ7i.eLxqOqDE374b1u', 1, 'Enregistre', NULL, '2021-06-12 11:03:15', '2021-06-12 11:03:15'),
(171, 'TOURE Arnaud', 'tarzan5017899', 'tourealidou205017899@yahoo.fr', NULL, '$2y$10$bF9GG5/nStFcIMN5URbDKe5WLwdAzautiG75NU3CwzS.tAnB0owCa', 1, 'Enregistre', NULL, '2021-06-12 11:04:44', '2021-06-12 11:04:44'),
(172, 'SAMBARE Alidou', 'sambare', 'sambare12@yahoo.fr', NULL, '$2y$10$v3Dc2TvbApo3yba31v9NLOKqpDGCLErpWf3/3xWk2QNhy6T.sk3vq', 1, 'Enregistre', NULL, '2021-06-12 11:17:44', '2021-06-12 11:17:44'),
(173, 'DIALLO Sita', 'sita', 'sita@yahoo.fr', NULL, '$2y$10$VpyJ7aYL/03j3qxqO27fHukMpQnKDiFuLg3XhYJiKsvNXWzsKYTE6', 1, 'Enregistre', NULL, '2021-06-12 11:38:51', '2021-06-12 11:38:51'),
(174, 'MILLOGO Ramata', 'sita12', 'sita12@yahoo.fr', NULL, '$2y$10$5/HGhdbGOo0MT9P.Ax19bukhS8R4KkwAy90e6ORvCtkFosaamZ3.e', 1, 'Enregistre', NULL, '2021-06-12 11:42:49', '2021-06-12 11:42:49'),
(175, 'DAKOUROU Souleymane', 'sita123', 'sita123@yahoo.fr', NULL, '$2y$10$WVXM6W9dB52zsVzpMoOQE.HEdLadqg2sLODBHZ.GtpGkcZlZ0wQXe', 1, 'Enregistre', NULL, '2021-06-12 11:45:16', '2021-06-12 11:45:16'),
(176, 'DAKOUROU Souleymane', 'dakourou', 'sita78@yahoo.fr', NULL, '$2y$10$RuE4yf6xgxxfAfhmnHniYuZ0uMGD7alp25i6Q4RC0Gd.q6i7Ih2z6', 1, 'Enregistre', NULL, '2021-06-12 11:47:04', '2021-06-12 11:47:04'),
(177, 'DAKOUROU Souleymane', 'dakourou8', 'sita789@yahoo.fr', NULL, '$2y$10$B0KKznGax1lmUF5h8foW6.K9t9nrhCHLJC9quFfZ4qbXob/0z1OzS', 1, 'Enregistre', NULL, '2021-06-12 11:50:21', '2021-06-12 11:50:21'),
(178, 'DAKOUROU Souleymane', 'dakourou89', 'sita7899@yahoo.fr', NULL, '$2y$10$5wWu30sQI2aBsU5KgewbquJF6/p6I/et/gy/Nv9FV5wPG0FeWdqT.', 1, 'Enregistre', NULL, '2021-06-12 11:55:40', '2021-06-12 11:55:40'),
(179, 'ZOUARI Malickou', 'zouari', 'malickou@yahoo.fr', NULL, '$2y$10$LG5obkw9l7Au/V/sG9c6VebygAI76y0q2Mj4ndB1fisK8xadn3iMG', 1, 'Enregistre', NULL, '2021-06-12 12:02:39', '2021-06-12 12:02:39'),
(180, 'ZOUARI Malickou', 'zouari1', 'malickou1@yahoo.fr', NULL, '$2y$10$MTZwqGGc5x1oiF8CSTvLNOkqK.gDGlF6UIqzAJPi//qM6JfV67T06', 1, 'Enregistre', NULL, '2021-06-12 12:05:51', '2021-06-12 12:05:51'),
(181, 'ZOUARI ZOURE', 'souali', 'zoumari@yahoo.fr', NULL, '$2y$10$udWc.ebnwTcKFQLU4WhgKO/CSn3JiMUHlDvX.n0i.X2gz5LSnKycC', 1, 'Enregistre', NULL, '2021-06-12 12:19:06', '2021-06-12 12:19:06'),
(182, 'ZOUARI ZOURE', 'souali123', 'zoumari123@yahoo.fr', NULL, '$2y$10$hEs3EnGjCrEd1TXgmTrIC./dk60w7/hH/vyD6P8BHWBPLIGcKuYNK', 1, 'Enregistre', NULL, '2021-06-12 12:34:55', '2021-06-12 12:34:55'),
(183, 'ZOUARI ZOURE', 'souali1234', 'zoumari1234@yahoo.fr', NULL, '$2y$10$EDkGT4zYhCcgJdlxiM0v7uk8tOeLQvHp3OSa7aBucLmk/b..TBGtq', 1, 'Enregistre', NULL, '2021-06-12 12:36:14', '2021-06-12 12:36:14'),
(184, 'MADIAGA Aristide', 'madiaga', 'madiaga@yahoo.fr', NULL, '$2y$10$eg4oYl2mUfvBNCtF8tMlr.eD.040WqVa730RBGWgHQHp8O6xRK4qm', 1, 'Enregistre', NULL, '2021-06-12 12:39:53', '2021-06-12 12:39:53'),
(185, 'TOURE Arnaud', 'toure20', 'tourila@yahoo.fr', NULL, '$2y$10$O64cDVqGbcyJqALIecLZ/.ANobP7Chj/Ed1gU6ENI..hx7Q5Ivztm', 1, 'Enregistre', NULL, '2021-06-12 12:48:17', '2021-06-12 12:48:17'),
(186, 'SAMANDOULGOU Alidou', 'sama', 'alidou5@yahoo.fr', NULL, '$2y$10$5D0DS5LZNJXjkNN6Eofzt.B2cSRfeJt/l8ulKb4dCMOTp2YwF2Xae', 1, 'Enregistre', NULL, '2021-06-12 13:00:44', '2021-06-12 13:00:44'),
(187, 'ZOUMBARA Kalilou', 'deni', 'souare@yahoo.fr', NULL, '$2y$10$f/JG2Y4L3qmyXqscPjgj8efsvsaHF8lMoHdAKWsxMzOZA2xdGeHEC', 1, 'Enregistre', NULL, '2021-06-12 14:58:19', '2021-06-13 12:21:16'),
(188, 'DIABOUGOU Aline', 'golo', 'diabougou@yahoo.fr', NULL, '$2y$10$jIQfosi7WyoOBDNvBYLLuuThIZuXs.aERo0Jb4XKcuAjk8Yv3J6v2', 1, 'Enregistre', NULL, '2021-06-13 17:34:24', '2021-06-13 17:34:24'),
(189, 'DIABOUGA Pouga', 'zoro', 'zoromela@yahoo.fr', NULL, '$2y$10$tUMLueA5HgeZIpFukGmjH.NuuFsfuTe8g7IeQnHSBiXE/MJB6GSf.', 1, 'Enregistre', NULL, '2021-06-14 06:01:55', '2021-06-14 18:29:07'),
(190, 'TAMBOULA Cheik Omar', 'bobo', 'tamboula12@yahoo.fr', NULL, '$2y$10$nqIiXXO8IOZgntZJZBvOweDmLj7QwDvzlqrKa0jFcFDbyMAdduEfC', 1, 'Enregistre', NULL, '2021-06-14 11:22:28', '2021-06-14 11:22:28'),
(191, 'TAMBOULA Alimata', 'baza', 'tatata@yahoo.fr', NULL, '$2y$10$7RaOVF/0guCQxQeAekUJA.H7VabDATlndey/N2iSXxTDnqwVQtsGm', 1, 'Enregistre', NULL, '2021-06-14 12:12:51', '2021-06-14 12:12:51'),
(192, 'KONATE Arnaud', 'konate', 'konatelo@yahoo.fr', NULL, '$2y$10$.busk3dgKXfXV0osb2US7ukKmu.AKxnxN00vUUeZdmkgyUZ3kemHG', 1, 'Enregistre', NULL, '2021-06-15 08:30:27', '2021-06-15 08:30:27'),
(193, 'KONATE Arnaud', 'konate2', 'konatelo1@yahoo.fr', NULL, '$2y$10$bSxw0hmUAvzgRC4ew5fdie/blaot0HGx0DGNleA0V2mVHdst8kNxG', 1, 'Enregistre', NULL, '2021-06-15 08:35:53', '2021-06-15 08:35:53'),
(194, 'TAMBOULARE Alphonse', 'zamouni', 'tamboulare@yahoo.fr', NULL, '$2y$10$5Q2Hn53MVMDVxE11aB4dI.d.JL7FPTmohiRipAeKEqJ7m8jaih62a', 1, 'Enregistre', NULL, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(195, 'TONDE SAYOUBA', 'tonde001', 'tonde001@gmail.com', NULL, '$2y$10$OWSKfOX1RrQ0BQ/PWNsdk.6o7pSBUjuKFqFyzoWuojn1R6AUwa9na', 1, 'Enregistre', NULL, '2021-06-15 13:45:43', '2021-06-15 13:45:43'),
(196, 'MINOUGOU DIEUDONNE', 'minoud', 'minoud@yahoo.fr', NULL, '$2y$10$MflJkw0aZudpUwvS4Hy.lup2Uxq2RVvkA3cRQjN1a201rC66whKf2', 1, 'Enregistre', NULL, '2021-06-15 14:23:56', '2021-06-15 14:23:56'),
(197, 'MINOUGOU DALOU', 'dieudonnedalou', 'daloum@yahoo.fr', NULL, '$2y$10$jtIP4AvckHixiwbTdzZEa.5RgbbyHAPEDY7Odd9O9byd7gUIqEaTe', 1, 'Enregistre', NULL, '2021-06-15 14:41:55', '2021-06-15 14:41:55'),
(198, 'MINOUGOU MOUSSA', 'minoum', 'minoumouss@yahoo.fr', NULL, '$2y$10$xyUFHcdTtAAS4ydJiwo/W.C1dBxUtHJpDV.EztOqQn5VOMVTFi5W2', 1, 'Enregistre', NULL, '2021-06-15 17:35:24', '2021-06-15 17:35:24'),
(199, 'MINOUGOU MOUSSA', 'minouma', 'minoumoussa@yahoo.fr', NULL, '$2y$10$L.LLrslhwyANMmSaSI8FqummhL7tkYxycIQz1T3NA2.h/VMen.TNq', 1, 'Enregistre', NULL, '2021-06-15 17:40:42', '2021-06-15 17:40:42'),
(200, 'OLLO asd', 'dalou25', 'daloum12@yahoo.fr', NULL, '$2y$10$bXEsWIhL7WM1q9PUeYfB6u3T7O7rPPSn/p9hw11UGVXq1Dtw87UnC', 1, 'Enregistre', NULL, '2021-06-15 17:43:52', '2021-06-15 17:43:52'),
(201, 'admin', 'admin', 'admin@yahoo.fr', NULL, '123456789', 1, 'administrateur', NULL, '2021-06-16 10:18:46', '2021-06-16 10:18:46'),
(202, 'TAMBOURA MOUSSA', 'recop', 'tonde00134@gmail.com', NULL, '$2y$10$9hP7Ypmnm6G/iZdKUTzu0erhvc.cOG6jtG8Jvsp6Pi5hXmdNMWQb6', 1, 'Administrateur', NULL, '2021-06-16 10:22:56', '2021-06-16 10:22:56'),
(203, 'TIMBILA PAUL', 'timbilap', 'tonde001345@gmail.com', NULL, '$2y$10$O92XL6HrsDefWVrA2J/C2.PcAlDi9GYAlLBXodPfiUXz0zWxdPVXW', 1, 'Enregistre', NULL, '2021-06-16 10:58:38', '2021-06-16 10:58:38');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `type` varchar(250) NOT NULL,
  `marques` varchar(250) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
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
-- Doublure de structure pour la vue `vueaccrediregion`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vueaccrediregion` (
`idaccrediregion` int(11)
,`idregion` int(11)
,`id` int(11)
,`datedebut` date
,`datefin` date
,`lieuevenement` varchar(255)
,`actif` tinyint(1)
,`titre` varchar(255)
,`created_at` timestamp
,`nomregion` varchar(254)
,`iddemandeur` int(11)
,`nomdemandeur` varchar(254)
,`prenomdemandeur` varchar(254)
,`iduser` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vueaccreditation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vueaccreditation` (
`idaccreditation` int(11)
,`id` int(11)
,`iddemandeur` int(11)
,`moyentransport` varchar(254)
,`immatriculation` varchar(254)
,`listemateriel` varchar(254)
,`valider` tinyint(1)
,`actif` tinyint(1)
,`nomdemandeur` varchar(254)
,`prenomdemandeur` varchar(254)
,`telephone` int(11)
,`iduser` int(11)
,`idregion` int(11)
,`created_at` datetime
,`nomregion` varchar(254)
,`idpiecesjointes` int(11)
,`idaccrediregion` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vuecorrespondant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuecorrespondant` (
`idcorrespondant` int(11)
,`iduser` int(11)
,`id` int(11)
,`nomcorrespondant` varchar(254)
,`typecorrespondant` varchar(255)
,`originecorrespondant` varchar(255)
,`region` varchar(254)
,`prenomcorrespondant` varchar(254)
,`cnibcorrespondant` varchar(254)
,`passportcorrespondant` varchar(254)
,`telephonecorrespondant` int(11)
,`telephone2correspondant` int(11)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`organe` varchar(255)
,`typeorgane` varchar(255)
,`profession` varchar(254)
,`numcartepresse` int(11)
,`created_at` datetime
,`refjournal` varchar(254)
,`parcourspro` varchar(254)
,`pjcartepresse` varchar(254)
,`pjpasseport` varchar(254)
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
,`passeport` varchar(254)
,`carteconsulaire` varchar(254)
,`datedelivcnib` datetime
,`dateexpircnib` datetime
,`telephone` int(11)
,`mail` varchar(255)
,`personneprevenir` varchar(254)
,`lieuresidence` varchar(254)
,`organe` varchar(254)
,`telorgane` int(11)
,`adressestruct` varchar(254)
,`numcnib` varchar(254)
,`created_at` datetime
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
,`CREATED_AT` datetime
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
-- Structure de la vue `vueaccrediregion`
--
DROP TABLE IF EXISTS `vueaccrediregion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccrediregion`  AS SELECT `ar`.`idaccrediregion` AS `idaccrediregion`, `ar`.`idregion` AS `idregion`, `ar`.`idaccreditation` AS `id`, `ar`.`datedebut` AS `datedebut`, `ar`.`datefin` AS `datefin`, `ar`.`lieuevenement` AS `lieuevenement`, `ar`.`actif` AS `actif`, `ar`.`titreevenement` AS `titre`, `ar`.`created_at` AS `created_at`, `r`.`nomregion` AS `nomregion`, `d`.`iddemandeur` AS `iddemandeur`, `d`.`nom` AS `nomdemandeur`, `d`.`prenom` AS `prenomdemandeur`, `d`.`iduser` AS `iduser` FROM ((((`accrediregion` `ar` join `region` `r`) join `accreditation` `ac`) join `users` `u`) join `demandeur` `d`) WHERE `ar`.`idaccreditation` = `ac`.`idaccreditation` AND `ar`.`idregion` = `r`.`idregion` AND `d`.`iddemandeur` = `ac`.`iddemandeur` AND `d`.`iduser` = `u`.`id` AND `d`.`actif` = 1 ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueaccreditation`
--
DROP TABLE IF EXISTS `vueaccreditation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccreditation`  AS SELECT `ac`.`idaccreditation` AS `idaccreditation`, `ac`.`idaccreditation` AS `id`, `ac`.`iddemandeur` AS `iddemandeur`, `ac`.`moyentransport` AS `moyentransport`, `ac`.`immatriculation` AS `immatriculation`, `ac`.`listemateriel` AS `listemateriel`, `ac`.`valider` AS `valider`, `d`.`actif` AS `actif`, `d`.`nom` AS `nomdemandeur`, `d`.`prenom` AS `prenomdemandeur`, `d`.`telephone` AS `telephone`, `d`.`iduser` AS `iduser`, `r`.`idregion` AS `idregion`, `ac`.`CREATED_AT` AS `created_at`, `r`.`nomregion` AS `nomregion`, `pj`.`id` AS `idpiecesjointes`, `ar`.`idaccrediregion` AS `idaccrediregion` FROM (((((`demandeur` `d` join `accreditation` `ac`) join `users` `u`) join `region` `r`) join `accrediregion` `ar`) join `piecesjointes` `pj`) WHERE `d`.`iddemandeur` = `ac`.`iddemandeur` AND `d`.`iduser` = `u`.`id` AND `ar`.`idregion` = `r`.`idregion` AND `ar`.`idaccreditation` = `ac`.`idaccreditation` AND `pj`.`idaccreditation` = `ac`.`idaccreditation` AND `ar`.`actif` = 1 ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS SELECT `c`.`idcorrespondant` AS `idcorrespondant`, `c`.`iduser` AS `iduser`, `c`.`iduser` AS `id`, `c`.`nom` AS `nomcorrespondant`, `c`.`typecorrespondant` AS `typecorrespondant`, `c`.`origine` AS `originecorrespondant`, `c`.`region` AS `region`, `c`.`prenom` AS `prenomcorrespondant`, `c`.`cnib` AS `cnibcorrespondant`, `c`.`passeport` AS `passportcorrespondant`, `c`.`telephone` AS `telephonecorrespondant`, `c`.`telephone2` AS `telephone2correspondant`, `c`.`mail` AS `mailcorrespondant`, `c`.`lieuresidence` AS `lieuresidence`, `c`.`organe` AS `organe`, `c`.`typeorgane` AS `typeorgane`, `c`.`profession` AS `profession`, `c`.`numcartepresse` AS `numcartepresse`, `c`.`CREATED_AT` AS `created_at`, `c`.`refjournal` AS `refjournal`, `c`.`parcourspro` AS `parcourspro`, `c`.`pjcartepresse` AS `pjcartepresse`, `c`.`pjpasseport` AS `pjpasseport`, `c`.`actif` AS `actif` FROM (`correspondant` `c` join `users` `u`) WHERE `c`.`iduser` = `u`.`id` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuedemandeur`
--
DROP TABLE IF EXISTS `vuedemandeur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuedemandeur`  AS SELECT `d`.`iddemandeur` AS `iddemandeur`, `d`.`iduser` AS `iduser`, `d`.`actif` AS `actif`, `d`.`nom` AS `nom`, `d`.`prenom` AS `prenom`, `d`.`profession` AS `profession`, `d`.`datenaissance` AS `datenaissance`, `d`.`lieunaissance` AS `lieunaissance`, `d`.`nationalite` AS `nationalite`, `d`.`sexe` AS `sexe`, `d`.`passeport` AS `passeport`, `d`.`carteconsulaire` AS `carteconsulaire`, `d`.`datedelivcnib` AS `datedelivcnib`, `d`.`dateexpircnib` AS `dateexpircnib`, `d`.`telephone` AS `telephone`, `d`.`mail` AS `mail`, `d`.`personneprevenir` AS `personneprevenir`, `d`.`lieuresidence` AS `lieuresidence`, `d`.`organe` AS `organe`, `d`.`telorgane` AS `telorgane`, `d`.`adressestruct` AS `adressestruct`, `d`.`cnib` AS `numcnib`, `d`.`CREATED_AT` AS `created_at`, `d`.`telephonepersp` AS `telephonepersp` FROM (`demandeur` `d` join `users` `u`) WHERE `d`.`iduser` = `u`.`id` AND `d`.`actif` = 1 ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueinformation`
--
DROP TABLE IF EXISTS `vueinformation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinformation`  AS SELECT `i`.`idinfo` AS `idinfo`, `i`.`iduser` AS `iduser`, `i`.`titre` AS `titreinfo`, `i`.`contenu` AS `contenuinfo`, `i`.`actif` AS `actif`, `i`.`CREATED_AT` AS `CREATED_AT`, `c`.`idcorrespondant` AS `idcorrespondant`, `c`.`nom` AS `nomcorrespondant`, `c`.`prenom` AS `prenomcorrespondant`, `c`.`telephone` AS `telephonecorrespondant`, `c`.`mail` AS `mailcorrespondant`, `c`.`lieuresidence` AS `lieuresidence`, `m`.`idmedia` AS `idmedia`, `m`.`nommedia` AS `media`, `t`.`libelle` AS `typepresse` FROM (((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) join `informations` `i`) WHERE `c`.`idcorrespondant` = `s`.`IDMEDIACORRES` AND `m`.`idmedia` = `s`.`IDMEDIACORRES` AND `m`.`idmedia` = `p`.`IDMEDIAPRESSE` AND `t`.`idtype` = `p`.`IDMEDIAPRESSE` AND `i`.`idinfo` = `c`.`idcorrespondant` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuepjcorrespondant`
--
DROP TABLE IF EXISTS `vuepjcorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepjcorrespondant`  AS SELECT `c`.`idcorrespondant` AS `idcorrespondant`, `c`.`iduser` AS `iduser`, `c`.`actif` AS `actif`, `pj`.`photo` AS `photo`, `pj`.`cv` AS `cv`, `pj`.`pjpasseport` AS `pjpasseport`, `pj`.`pjcnib` AS `pjcnib`, `pj`.`pjcartepresse` AS `pjcartepresse`, `pj`.`pjcnibperprev` AS `pjcnibperprev`, `pj`.`pjpasseportperprev` AS `pjpasseportperprev`, `pj`.`pjcarteconsulaire` AS `pjcarteconsulaire`, `pj`.`visamedia` AS `visamedia` FROM ((`correspondant` `c` join `piecesjointes` `pj`) join `users` `u`) WHERE `c`.`idcorrespondant` = `pj`.`idcorrespondant` AND `c`.`iduser` = `u`.`id` ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuepjdemandeur`
--
DROP TABLE IF EXISTS `vuepjdemandeur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepjdemandeur`  AS SELECT `d`.`iddemandeur` AS `iddemandeur`, `d`.`iduser` AS `iduser`, `d`.`actif` AS `actif`, `pj`.`photo` AS `photo`, `pj`.`cv` AS `cv`, `pj`.`pjpasseport` AS `pjpasseport`, `pj`.`pjcnib` AS `pjcnib`, `pj`.`pjcartepresse` AS `pjcartepresse`, `pj`.`pjcnibperprev` AS `pjcnibperprev`, `pj`.`pjpasseportperprev` AS `pjpasseportperprev`, `pj`.`pjcarteconsulaire` AS `pjcarteconsulaire`, `pj`.`visamedia` AS `visamedia` FROM ((`demandeur` `d` join `piecesjointes` `pj`) join `users` `u`) WHERE `d`.`iddemandeur` = `pj`.`iddemandeur` AND `d`.`iduser` = `u`.`id` ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accrediregion`
--
ALTER TABLE `accrediregion`
  ADD PRIMARY KEY (`idaccrediregion`),
  ADD KEY `fk_idaccreditation` (`idaccreditation`),
  ADD KEY `fk_idregion` (`idregion`);

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
  ADD PRIMARY KEY (`IDMEDIACORRES`);

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
  ADD KEY `FK_iddemandeur` (`iddemandeur`),
  ADD KEY `fk_idaccreditation` (`idaccreditation`);

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
-- AUTO_INCREMENT pour la table `accrediregion`
--
ALTER TABLE `accrediregion`
  MODIFY `idaccrediregion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT pour la table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `iddemandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT pour la table `informations`
--
ALTER TABLE `informations`
  MODIFY `idinfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mediacorrespondant`
--
ALTER TABLE `mediacorrespondant`
  MODIFY `IDMEDIACORRES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  MODIFY `IDMEDIAPRESSE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

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
-- Contraintes pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  ADD CONSTRAINT `FK_mediapresse` FOREIGN KEY (`idmedia`) REFERENCES `media` (`idmedia`),
  ADD CONSTRAINT `FK_mediapresse1` FOREIGN KEY (`idtype`) REFERENCES `typepresse` (`idtype`);

--
-- Contraintes pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  ADD CONSTRAINT `fk_idaccreditation` FOREIGN KEY (`idaccreditation`) REFERENCES `accreditation` (`idaccreditation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
