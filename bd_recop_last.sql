-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 24 mai 2021 à 13:25
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
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `correspondant`
--

CREATE TABLE `correspondant` (
  `idcorrespondant` int(11) NOT NULL,
  `iduser` bigint(20) UNSIGNED DEFAULT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `passeport` varchar(254) DEFAULT NULL,
  `fonction` varchar(254) DEFAULT NULL,
  `telephone1` varchar(20) DEFAULT NULL,
  `telephone2` varchar(20) DEFAULT NULL,
  `mail1` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `numcartepresse` int(11) DEFAULT NULL,
  `refjournal` varchar(254) DEFAULT NULL,
  `parcourspro` varchar(254) DEFAULT NULL,
  `region` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `correspondant`
--

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `cnib`, `passeport`, `fonction`, `telephone1`, `telephone2`, `mail1`, `lieuresidence`, `numcartepresse`, `refjournal`, `parcourspro`, `region`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(5, NULL, 'TOURE', 'Karim', NULL, NULL, NULL, '78452156', '70856595', 'karim@yahoo.fr', 'Ouagadougou', NULL, 'journaliste à omega', 'mon parcours', NULL, 1, '2021-05-22 23:50:02', '2021-05-22 23:50:02'),
(6, NULL, 'TOURE', 'Karim', NULL, NULL, NULL, '78452156', '70856595', 'karim@yahoo.fr', 'Ouagadougou', NULL, 'journaliste à omega', 'mon parcours', NULL, 1, '2021-05-22 23:50:34', '2021-05-22 23:50:34'),
(7, NULL, 'TOURE', 'Karim', NULL, NULL, NULL, '78452156', '70856595', 'karim@yahoo.fr', 'Ouagadougou', NULL, 'journaliste à omega', 'mon parcours', NULL, 1, '2021-05-22 23:54:38', '2021-05-22 23:54:38'),
(11, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 00:38:20', '2021-05-23 00:38:20'),
(12, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 00:50:14', '2021-05-23 00:50:14'),
(13, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:06:43', '2021-05-23 01:06:43'),
(14, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:06:52', '2021-05-23 01:06:52'),
(15, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:09:56', '2021-05-23 01:09:56'),
(16, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:12:17', '2021-05-23 01:12:17'),
(17, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:37:57', '2021-05-23 01:37:57'),
(18, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 01:59:14', '2021-05-23 01:59:14'),
(19, NULL, 'nhd', 'djff', NULL, NULL, NULL, '5456', '54486', 'ib@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:00:49', '2021-05-23 02:00:49'),
(20, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:16:36', '2021-05-23 02:16:36'),
(21, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:17:13', '2021-05-23 02:17:13'),
(22, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:17:36', '2021-05-23 02:17:36'),
(23, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:18:14', '2021-05-23 02:18:14'),
(24, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:22:01', '2021-05-23 02:22:01'),
(25, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:26:55', '2021-05-23 02:26:55'),
(26, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:31:51', '2021-05-23 02:31:51'),
(27, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:34:23', '2021-05-23 02:34:23'),
(28, NULL, 'TIRAKOYA', 'DAMIEN', NULL, NULL, NULL, '5456', '54486', 'ibra@yahoo.fr', 'ouagadougou', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:36:00', '2021-05-23 02:36:00'),
(29, NULL, 'qsdsqdr', 'lk,lkjl,', NULL, NULL, 'pkopkp', '54', NULL, NULL, NULL, NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:42:58', '2021-05-23 02:42:58'),
(30, NULL, 'qsdsqdr', 'lk,lkjl,', NULL, NULL, 'pkopkp', '547', '6465465', 'tirou@yahoo.fr', 'kjhjkhui', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:43:35', '2021-05-23 02:43:35'),
(31, NULL, 'qsdsqdr', 'lk,lkjl,', NULL, NULL, 'pkopkp', '547', '6465465', 'tirou@yahoo.fr', 'kjhjkhui', NULL, NULL, NULL, 'Centre', 1, '2021-05-23 02:44:00', '2021-05-23 02:44:00'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Centre', 1, '2021-05-24 10:52:35', '2021-05-24 10:52:35'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Centre', 1, '2021-05-24 11:02:43', '2021-05-24 11:02:43'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Centre', 1, '2021-05-24 11:15:40', '2021-05-24 11:15:40'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Centre', 1, '2021-05-24 11:15:51', '2021-05-24 11:15:51');

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `iddemandeur` int(11) NOT NULL,
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
  `numcnib` varchar(254) NOT NULL,
  `telephonepersp` int(11) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `typemedia` varchar(254) DEFAULT NULL,
  `nommedia` varchar(254) DEFAULT NULL,
  `telmedia` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `pjcarteconsulaire` varchar(255) DEFAULT NULL,
  `pjpasseportperprev` varchar(255) DEFAULT NULL,
  `visamedia` varchar(255) DEFAULT NULL,
  `idcorrespondant` int(11) DEFAULT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecesjointes`
--

INSERT INTO `piecesjointes` (`id`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjcnibperprev`, `pjpasseportperprev`, `visamedia`, `idcorrespondant`, `iddemandeur`, `updated_at`, `created_at`) VALUES
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, '2021-05-23 01:37:11', '2021-05-23 01:37:11'),
(17, 'C:\\xampp\\tmp\\php15B1.tmp', 'C:\\xampp\\tmp\\php15E1.tmp', 'C:\\xampp\\tmp\\php1612.tmp', 'C:\\xampp\\tmp\\php1602.tmp', 'C:\\xampp\\tmp\\php16A1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php1601.tmp', 17, NULL, '2021-05-23 01:39:54', '2021-05-23 01:39:54'),
(18, 'C:\\xampp\\tmp\\php118C.tmp', 'C:\\xampp\\tmp\\php118D.tmp', 'C:\\xampp\\tmp\\php11B0.tmp', 'C:\\xampp\\tmp\\php11AF.tmp', 'C:\\xampp\\tmp\\php11C1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php118E.tmp', 17, NULL, '2021-05-23 01:40:59', '2021-05-23 01:40:59'),
(19, 'C:\\xampp\\tmp\\phpB050.tmp', 'C:\\xampp\\tmp\\phpB061.tmp', 'C:\\xampp\\tmp\\phpB064.tmp', 'C:\\xampp\\tmp\\phpB063.tmp', 'C:\\xampp\\tmp\\phpB075.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpB062.tmp', 17, NULL, '2021-05-23 01:56:57', '2021-05-23 01:56:57'),
(20, 'C:\\xampp\\tmp\\php9A8E.tmp', 'C:\\xampp\\tmp\\php9A8F.tmp', 'C:\\xampp\\tmp\\php9B00.tmp', 'C:\\xampp\\tmp\\php9AFF.tmp', 'C:\\xampp\\tmp\\php9B11.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9AFE.tmp', 18, NULL, '2021-05-23 02:00:08', '2021-05-23 02:00:08'),
(21, 'C:\\xampp\\tmp\\phpCEA7.tmp', 'C:\\xampp\\tmp\\phpCEA8.tmp', 'C:\\xampp\\tmp\\phpCEBA.tmp', 'C:\\xampp\\tmp\\phpCEAA.tmp', 'C:\\xampp\\tmp\\phpCEBC.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpCEA9.tmp', 19, NULL, '2021-05-23 02:03:38', '2021-05-23 02:03:38'),
(22, 'C:\\xampp\\tmp\\php921D.tmp', 'C:\\xampp\\tmp\\php922E.tmp', 'C:\\xampp\\tmp\\php9231.tmp', 'C:\\xampp\\tmp\\php9230.tmp', 'C:\\xampp\\tmp\\php9233.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php922F.tmp', 19, NULL, '2021-05-23 02:04:28', '2021-05-23 02:04:28'),
(23, 'C:\\xampp\\tmp\\php15D6.tmp', 'C:\\xampp\\tmp\\php15D7.tmp', 'C:\\xampp\\tmp\\php15DA.tmp', 'C:\\xampp\\tmp\\php15D9.tmp', 'C:\\xampp\\tmp\\php15EC.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php15D8.tmp', 19, NULL, '2021-05-23 02:06:07', '2021-05-23 02:06:07'),
(24, 'C:\\xampp\\tmp\\php28B9.tmp', 'C:\\xampp\\tmp\\php28BA.tmp', 'C:\\xampp\\tmp\\php28BD.tmp', 'C:\\xampp\\tmp\\php28BC.tmp', 'C:\\xampp\\tmp\\php28CF.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php28BB.tmp', 19, NULL, '2021-05-23 02:06:12', '2021-05-23 02:06:12'),
(25, 'C:\\xampp\\tmp\\phpD8D2.tmp', 'C:\\xampp\\tmp\\phpD8D3.tmp', 'C:\\xampp\\tmp\\phpD8D6.tmp', 'C:\\xampp\\tmp\\phpD8D5.tmp', 'C:\\xampp\\tmp\\phpD8E7.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD8D4.tmp', 19, NULL, '2021-05-23 02:08:02', '2021-05-23 02:08:02'),
(26, 'C:\\xampp\\tmp\\phpE9C1.tmp', 'C:\\xampp\\tmp\\phpE9C2.tmp', 'C:\\xampp\\tmp\\phpE9D4.tmp', 'C:\\xampp\\tmp\\phpE9D3.tmp', 'C:\\xampp\\tmp\\phpE9D6.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpE9D2.tmp', 19, NULL, '2021-05-23 02:08:07', '2021-05-23 02:08:07'),
(27, 'C:\\xampp\\tmp\\php9620.tmp', 'C:\\xampp\\tmp\\php9621.tmp', 'C:\\xampp\\tmp\\php9624.tmp', 'C:\\xampp\\tmp\\php9623.tmp', 'C:\\xampp\\tmp\\php9636.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9622.tmp', 19, NULL, '2021-05-23 02:09:56', '2021-05-23 02:09:56'),
(28, 'C:\\xampp\\tmp\\phpA5F6.tmp', 'C:\\xampp\\tmp\\phpA606.tmp', 'C:\\xampp\\tmp\\phpA609.tmp', 'C:\\xampp\\tmp\\phpA608.tmp', 'C:\\xampp\\tmp\\phpA61B.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpA607.tmp', 19, NULL, '2021-05-23 02:10:00', '2021-05-23 02:10:00'),
(29, 'C:\\xampp\\tmp\\phpD81F.tmp', 'C:\\xampp\\tmp\\phpD830.tmp', 'C:\\xampp\\tmp\\phpD842.tmp', 'C:\\xampp\\tmp\\phpD841.tmp', 'C:\\xampp\\tmp\\phpD844.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD831.tmp', 19, NULL, '2021-05-23 02:12:24', '2021-05-23 02:12:24'),
(30, 'C:\\xampp\\tmp\\phpD459.tmp', 'C:\\xampp\\tmp\\phpD45A.tmp', 'C:\\xampp\\tmp\\phpD46C.tmp', 'C:\\xampp\\tmp\\phpD46B.tmp', 'C:\\xampp\\tmp\\phpD46E.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD45B.tmp', 19, NULL, '2021-05-23 02:13:29', '2021-05-23 02:13:29'),
(31, 'C:\\xampp\\tmp\\php80B8.tmp', 'C:\\xampp\\tmp\\php80B9.tmp', 'C:\\xampp\\tmp\\php80CB.tmp', 'C:\\xampp\\tmp\\php80CA.tmp', 'C:\\xampp\\tmp\\php80CD.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php80C9.tmp', 19, NULL, '2021-05-23 02:15:19', '2021-05-23 02:15:19'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, '2021-05-23 02:18:48', '2021-05-23 02:18:48'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, '2021-05-23 02:21:21', '2021-05-23 02:21:21'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, '2021-05-23 02:22:15', '2021-05-23 02:22:15'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, '2021-05-23 02:24:18', '2021-05-23 02:24:18'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, '2021-05-23 02:25:25', '2021-05-23 02:25:25'),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, '2021-05-23 02:27:15', '2021-05-23 02:27:15'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, '2021-05-23 02:29:35', '2021-05-23 02:29:35'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, '2021-05-23 02:32:37', '2021-05-23 02:32:37'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, '2021-05-23 02:33:00', '2021-05-23 02:33:00'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, '2021-05-23 02:34:05', '2021-05-23 02:34:05'),
(42, 'C:\\xampp\\tmp\\phpBF28.tmp', 'C:\\xampp\\tmp\\phpBF38.tmp', 'C:\\xampp\\tmp\\phpBF3B.tmp', 'C:\\xampp\\tmp\\phpBF3A.tmp', 'C:\\xampp\\tmp\\phpBF4D.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpBF39.tmp', 27, NULL, '2021-05-23 02:35:14', '2021-05-23 02:35:14'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, '2021-05-23 02:36:15', '2021-05-23 02:36:15'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, '2021-05-23 02:36:38', '2021-05-23 02:36:38'),
(45, 'C:\\xampp\\tmp\\php9CA7.tmp', 'C:\\xampp\\tmp\\php9CA8.tmp', 'C:\\xampp\\tmp\\php9CBB.tmp', 'C:\\xampp\\tmp\\php9CBA.tmp', 'C:\\xampp\\tmp\\php9CBD.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9CB9.tmp', 31, NULL, '2021-05-23 02:44:55', '2021-05-23 02:44:55'),
(46, 'C:\\xampp\\tmp\\php8DBB.tmp', 'C:\\xampp\\tmp\\php8DBC.tmp', 'C:\\xampp\\tmp\\php8DCF.tmp', 'C:\\xampp\\tmp\\php8DCE.tmp', 'C:\\xampp\\tmp\\php8DD1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php8DCD.tmp', 31, NULL, '2021-05-23 02:48:08', '2021-05-23 02:48:08');

-- --------------------------------------------------------

--
-- Structure de la table `typepresse`
--

CREATE TABLE `typepresse` (
  `idtype` int(11) NOT NULL,
  `libelle` varchar(254) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepresse`
--

INSERT INTO `typepresse` (`idtype`, `libelle`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'radio', 1, '2021-05-19 00:00:00', '2021-05-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifiant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Correspondant',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `identifiant`, `email`, `email_verified_at`, `password`, `valid`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TIRAKOYA DAMIEN', 'Takola', 'ibra@yahoo.fr', NULL, '$2y$10$9ZWL2aoU40.p1le/8MYXT.6/2FyALUyLRXpx0iJvvifzJDDrz1xBK', 1, 'Correspondant', NULL, '2021-05-23 02:33:00', '2021-05-23 02:33:00'),
(2, 'qsdsqdr lk,lkjl,', 'ibraloko', 'tirou@yahoo.fr', NULL, '$2y$10$OjL9lBVDzjDSV6TfVJ94Ee1gSp7uOVngqRQwJ5RFktIDH28xjIGc6', 1, 'Correspondant', NULL, '2021-05-23 02:44:55', '2021-05-23 02:44:55');

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
-- Doublure de structure pour la vue `vuecorrespondant`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vuecorrespondant` (
`idcorrespondant` int(11)
,`nomcorrespondant` varchar(254)
,`region` varchar(254)
,`prenomcorrespondant` varchar(254)
,`cnibcorrespondant` varchar(254)
,`passportcorrespondant` varchar(254)
,`telephonecorrespondant` varchar(20)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`actif` tinyint(1)
,`idmedia` int(11)
,`media` varchar(254)
,`idtype` int(11)
,`typepresse` varchar(254)
,`IDMEDIAPRESSE` int(11)
,`IDMEDIACORRES` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `vueinformation`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `vueinformation` (
`idinfo` int(11)
,`titreinfo` varchar(254)
,`contenuinfo` varchar(254)
,`actif` tinyint(1)
,`dateinfo` datetime
,`idcorrespondant` int(11)
,`nomcorrespondant` varchar(254)
,`prenomcorrespondant` varchar(254)
,`telephonecorrespondant` varchar(20)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`idmedia` int(11)
,`media` varchar(254)
,`typepresse` varchar(254)
);

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`nom` AS `nomcorrespondant`,`c`.`region` AS `region`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`cnib` AS `cnibcorrespondant`,`c`.`passeport` AS `passportcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`c`.`actif` AS `actif`,`m`.`idmedia` AS `idmedia`,`m`.`nommedia` AS `media`,`t`.`idtype` AS `idtype`,`t`.`libelle` AS `typepresse`,`p`.`IDMEDIAPRESSE` AS `IDMEDIAPRESSE`,`s`.`IDMEDIACORRES` AS `IDMEDIACORRES` from ((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) where ((`c`.`idcorrespondant` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `p`.`IDMEDIAPRESSE`) and (`t`.`idtype` = `p`.`IDMEDIAPRESSE`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueinformation`
--
DROP TABLE IF EXISTS `vueinformation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinformation`  AS  select `i`.`idinfo` AS `idinfo`,`i`.`titre` AS `titreinfo`,`i`.`contenu` AS `contenuinfo`,`i`.`actif` AS `actif`,`i`.`CREATED_AT` AS `dateinfo`,`c`.`idcorrespondant` AS `idcorrespondant`,`c`.`nom` AS `nomcorrespondant`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`m`.`idmedia` AS `idmedia`,`m`.`nommedia` AS `media`,`t`.`libelle` AS `typepresse` from (((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) join `informations` `i`) where ((`c`.`idcorrespondant` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `p`.`IDMEDIAPRESSE`) and (`t`.`idtype` = `p`.`IDMEDIAPRESSE`) and (`i`.`idinfo` = `c`.`idcorrespondant`)) ;

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
  ADD PRIMARY KEY (`idcorrespondant`),
  ADD KEY `FK_iduser` (`iduser`);

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
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `iddemandeur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- Contraintes pour la table `correspondant`
--
ALTER TABLE `correspondant`
  ADD CONSTRAINT `FK_iduser` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

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

--
-- Contraintes pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  ADD CONSTRAINT `FK_idcorrespondant` FOREIGN KEY (`idcorrespondant`) REFERENCES `correspondant` (`idcorrespondant`),
  ADD CONSTRAINT `FK_iddemandeur` FOREIGN KEY (`iddemandeur`) REFERENCES `demandeur` (`iddemandeur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
