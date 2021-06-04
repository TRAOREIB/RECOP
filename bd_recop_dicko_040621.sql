-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 juin 2021 à 17:14
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
-- Structure de la table `accrediregion`
--

CREATE TABLE `accrediregion` (
  `idaccrediregion` int(11) NOT NULL,
  `idregion` int(11) NOT NULL,
  `idaccreditation` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accrediregion`
--

INSERT INTO `accrediregion` (`idaccrediregion`, `idregion`, `idaccreditation`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `accreditation`
--

CREATE TABLE `accreditation` (
  `idaccreditation` int(11) NOT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `iduser` int(11) NOT NULL,
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

--
-- Déchargement des données de la table `accreditation`
--

INSERT INTO `accreditation` (`idaccreditation`, `iddemandeur`, `iduser`, `titreevenement`, `lieuevenement`, `datedebut`, `datefin`, `moyentransport`, `immatriculation`, `listemateriel`, `membresequipe`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 3, 'Education', 'Bani', '2021-06-09 00:00:00', '2021-06-16 00:00:00', 'vehicule', '24zz0001', 'camera,radio', 'issa yaya\r\nHama amadou', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `correspondant`
--

CREATE TABLE `correspondant` (
  `idcorrespondant` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nom` varchar(254) DEFAULT NULL,
  `prenom` varchar(254) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `typecorrespondant` varchar(254) NOT NULL,
  `origine` varchar(254) NOT NULL,
  `passeport` varchar(254) DEFAULT NULL,
  `fonction` varchar(254) DEFAULT NULL,
  `organe` varchar(254) NOT NULL,
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
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `correspondant`
--

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `cnib`, `typecorrespondant`, `origine`, `passeport`, `fonction`, `organe`, `telephone1`, `telephone2`, `mail1`, `lieuresidence`, `numcartepresse`, `photo`, `cv`, `visamedia`, `refjournal`, `parcourspro`, `region`, `pjcartepresse`, `pjpasseport`, `pjcnib`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 3, 'DICKO', 'Moussa', 'B123456', 'Correspondant de la Presse Nationale', '', 'AZR258', 'Journaliste', 'France24', 2500000, 7000000, 'moussa@gmail.com', 'Dori', 12, NULL, NULL, NULL, NULL, NULL, 'Sahel', NULL, NULL, NULL, 1, '2021-05-19 00:00:00', '2021-05-24 17:56:07');

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `iddemandeur` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
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
(1, 3, 'SORI', 'Mariame', 'Jiurnaliste', '1997-05-04 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'B45789632', '784512', '2021-05-11 00:00:00', '2021-05-03 00:00:00', 70203025, 'Toure Alain', 'Ouagadougou', 'FRNCE24', 78456321, 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, 'B789632', 78453695, 1, '2021-05-27 11:57:53', '2021-05-27 11:57:53'),
(2, 0, 'MILLOGO', 'Jean', 'Journaliste', '2021-05-11 00:00:00', 'Kaya', 'Burkinabè', 'HOMME', 'S8865625', 'B78566629', '2021-05-19 00:00:00', '2021-05-19 00:00:00', 78204578, 'ZOUMANA Frederick', '78659632', 'FRANCE 24', 70201032, 'Rue 15.588', NULL, NULL, NULL, NULL, NULL, 'B78459632', 7855965, 1, '2021-05-28 09:01:46', '2021-05-28 09:01:46'),
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
(2, 3, 'radio', 'France24', '0001001', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

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
(3, 1, 2, 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

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
(2, 2, 2, 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

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
  `iduser` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pjpasseport` varchar(255) DEFAULT NULL,
  `pjcnib` varchar(255) DEFAULT NULL,
  `pjcartepresse` varchar(255) DEFAULT NULL,
  `pjcnibperprev` varchar(255) DEFAULT NULL,
  `pjpasseportperprev` varchar(255) DEFAULT NULL,
  `visamedia` varchar(255) DEFAULT NULL,
  `idcorrespondant` int(11) DEFAULT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecesjointes`
--

INSERT INTO `piecesjointes` (`id`, `iduser`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjcnibperprev`, `pjpasseportperprev`, `visamedia`, `idcorrespondant`, `iddemandeur`, `actif`, `updated_at`, `created_at`) VALUES
(16, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, 0, '2021-05-23 01:37:11', '2021-05-23 01:37:11'),
(17, 0, 'C:\\xampp\\tmp\\php15B1.tmp', 'C:\\xampp\\tmp\\php15E1.tmp', 'C:\\xampp\\tmp\\php1612.tmp', 'C:\\xampp\\tmp\\php1602.tmp', 'C:\\xampp\\tmp\\php16A1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php1601.tmp', 17, NULL, 0, '2021-05-23 01:39:54', '2021-05-23 01:39:54'),
(18, 0, 'C:\\xampp\\tmp\\php118C.tmp', 'C:\\xampp\\tmp\\php118D.tmp', 'C:\\xampp\\tmp\\php11B0.tmp', 'C:\\xampp\\tmp\\php11AF.tmp', 'C:\\xampp\\tmp\\php11C1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php118E.tmp', 17, NULL, 0, '2021-05-23 01:40:59', '2021-05-23 01:40:59'),
(19, 0, 'C:\\xampp\\tmp\\phpB050.tmp', 'C:\\xampp\\tmp\\phpB061.tmp', 'C:\\xampp\\tmp\\phpB064.tmp', 'C:\\xampp\\tmp\\phpB063.tmp', 'C:\\xampp\\tmp\\phpB075.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpB062.tmp', 17, NULL, 0, '2021-05-23 01:56:57', '2021-05-23 01:56:57'),
(20, 0, 'C:\\xampp\\tmp\\php9A8E.tmp', 'C:\\xampp\\tmp\\php9A8F.tmp', 'C:\\xampp\\tmp\\php9B00.tmp', 'C:\\xampp\\tmp\\php9AFF.tmp', 'C:\\xampp\\tmp\\php9B11.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9AFE.tmp', 18, NULL, 0, '2021-05-23 02:00:08', '2021-05-23 02:00:08'),
(21, 0, 'C:\\xampp\\tmp\\phpCEA7.tmp', 'C:\\xampp\\tmp\\phpCEA8.tmp', 'C:\\xampp\\tmp\\phpCEBA.tmp', 'C:\\xampp\\tmp\\phpCEAA.tmp', 'C:\\xampp\\tmp\\phpCEBC.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpCEA9.tmp', 19, NULL, 0, '2021-05-23 02:03:38', '2021-05-23 02:03:38'),
(22, 0, 'C:\\xampp\\tmp\\php921D.tmp', 'C:\\xampp\\tmp\\php922E.tmp', 'C:\\xampp\\tmp\\php9231.tmp', 'C:\\xampp\\tmp\\php9230.tmp', 'C:\\xampp\\tmp\\php9233.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php922F.tmp', 19, NULL, 0, '2021-05-23 02:04:28', '2021-05-23 02:04:28'),
(23, 0, 'C:\\xampp\\tmp\\php15D6.tmp', 'C:\\xampp\\tmp\\php15D7.tmp', 'C:\\xampp\\tmp\\php15DA.tmp', 'C:\\xampp\\tmp\\php15D9.tmp', 'C:\\xampp\\tmp\\php15EC.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php15D8.tmp', 19, NULL, 0, '2021-05-23 02:06:07', '2021-05-23 02:06:07'),
(24, 0, 'C:\\xampp\\tmp\\php28B9.tmp', 'C:\\xampp\\tmp\\php28BA.tmp', 'C:\\xampp\\tmp\\php28BD.tmp', 'C:\\xampp\\tmp\\php28BC.tmp', 'C:\\xampp\\tmp\\php28CF.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php28BB.tmp', 19, NULL, 0, '2021-05-23 02:06:12', '2021-05-23 02:06:12'),
(25, 0, 'C:\\xampp\\tmp\\phpD8D2.tmp', 'C:\\xampp\\tmp\\phpD8D3.tmp', 'C:\\xampp\\tmp\\phpD8D6.tmp', 'C:\\xampp\\tmp\\phpD8D5.tmp', 'C:\\xampp\\tmp\\phpD8E7.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD8D4.tmp', 19, NULL, 0, '2021-05-23 02:08:02', '2021-05-23 02:08:02'),
(26, 0, 'C:\\xampp\\tmp\\phpE9C1.tmp', 'C:\\xampp\\tmp\\phpE9C2.tmp', 'C:\\xampp\\tmp\\phpE9D4.tmp', 'C:\\xampp\\tmp\\phpE9D3.tmp', 'C:\\xampp\\tmp\\phpE9D6.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpE9D2.tmp', 19, NULL, 0, '2021-05-23 02:08:07', '2021-05-23 02:08:07'),
(27, 0, 'C:\\xampp\\tmp\\php9620.tmp', 'C:\\xampp\\tmp\\php9621.tmp', 'C:\\xampp\\tmp\\php9624.tmp', 'C:\\xampp\\tmp\\php9623.tmp', 'C:\\xampp\\tmp\\php9636.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9622.tmp', 19, NULL, 0, '2021-05-23 02:09:56', '2021-05-23 02:09:56'),
(28, 0, 'C:\\xampp\\tmp\\phpA5F6.tmp', 'C:\\xampp\\tmp\\phpA606.tmp', 'C:\\xampp\\tmp\\phpA609.tmp', 'C:\\xampp\\tmp\\phpA608.tmp', 'C:\\xampp\\tmp\\phpA61B.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpA607.tmp', 19, NULL, 0, '2021-05-23 02:10:00', '2021-05-23 02:10:00'),
(29, 0, 'C:\\xampp\\tmp\\phpD81F.tmp', 'C:\\xampp\\tmp\\phpD830.tmp', 'C:\\xampp\\tmp\\phpD842.tmp', 'C:\\xampp\\tmp\\phpD841.tmp', 'C:\\xampp\\tmp\\phpD844.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD831.tmp', 19, NULL, 0, '2021-05-23 02:12:24', '2021-05-23 02:12:24'),
(30, 0, 'C:\\xampp\\tmp\\phpD459.tmp', 'C:\\xampp\\tmp\\phpD45A.tmp', 'C:\\xampp\\tmp\\phpD46C.tmp', 'C:\\xampp\\tmp\\phpD46B.tmp', 'C:\\xampp\\tmp\\phpD46E.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpD45B.tmp', 19, NULL, 0, '2021-05-23 02:13:29', '2021-05-23 02:13:29'),
(31, 0, 'C:\\xampp\\tmp\\php80B8.tmp', 'C:\\xampp\\tmp\\php80B9.tmp', 'C:\\xampp\\tmp\\php80CB.tmp', 'C:\\xampp\\tmp\\php80CA.tmp', 'C:\\xampp\\tmp\\php80CD.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php80C9.tmp', 19, NULL, 0, '2021-05-23 02:15:19', '2021-05-23 02:15:19'),
(32, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, 0, '2021-05-23 02:18:48', '2021-05-23 02:18:48'),
(33, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, 0, '2021-05-23 02:21:21', '2021-05-23 02:21:21'),
(34, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, 0, '2021-05-23 02:22:15', '2021-05-23 02:22:15'),
(35, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, 0, '2021-05-23 02:24:18', '2021-05-23 02:24:18'),
(36, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, 0, '2021-05-23 02:25:25', '2021-05-23 02:25:25'),
(37, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, 0, '2021-05-23 02:27:15', '2021-05-23 02:27:15'),
(38, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, 0, '2021-05-23 02:29:35', '2021-05-23 02:29:35'),
(39, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, 0, '2021-05-23 02:32:37', '2021-05-23 02:32:37'),
(40, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, 0, '2021-05-23 02:33:00', '2021-05-23 02:33:00'),
(41, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, 0, '2021-05-23 02:34:05', '2021-05-23 02:34:05'),
(42, 0, 'C:\\xampp\\tmp\\phpBF28.tmp', 'C:\\xampp\\tmp\\phpBF38.tmp', 'C:\\xampp\\tmp\\phpBF3B.tmp', 'C:\\xampp\\tmp\\phpBF3A.tmp', 'C:\\xampp\\tmp\\phpBF4D.tmp', NULL, NULL, 'C:\\xampp\\tmp\\phpBF39.tmp', 27, NULL, 0, '2021-05-23 02:35:14', '2021-05-23 02:35:14'),
(43, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, 0, '2021-05-23 02:36:15', '2021-05-23 02:36:15'),
(44, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, NULL, 0, '2021-05-23 02:36:38', '2021-05-23 02:36:38'),
(45, 0, 'C:\\xampp\\tmp\\php9CA7.tmp', 'C:\\xampp\\tmp\\php9CA8.tmp', 'C:\\xampp\\tmp\\php9CBB.tmp', 'C:\\xampp\\tmp\\php9CBA.tmp', 'C:\\xampp\\tmp\\php9CBD.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php9CB9.tmp', 31, NULL, 0, '2021-05-23 02:44:55', '2021-05-23 02:44:55'),
(46, 0, 'C:\\xampp\\tmp\\php8DBB.tmp', 'C:\\xampp\\tmp\\php8DBC.tmp', 'C:\\xampp\\tmp\\php8DCF.tmp', 'C:\\xampp\\tmp\\php8DCE.tmp', 'C:\\xampp\\tmp\\php8DD1.tmp', NULL, NULL, 'C:\\xampp\\tmp\\php8DCD.tmp', 31, NULL, 0, '2021-05-23 02:48:08', '2021-05-23 02:48:08');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idregion` int(11) NOT NULL,
  `nomregion` varchar(254) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typepresse`
--

INSERT INTO `typepresse` (`idtype`, `iduser`, `libelle`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(2, 3, 'En ligne', 1, '2021-06-02 00:00:00', '2021-06-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifiant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, 'DICKO Alou', 'dalou', NULL, NULL, '$2y$10$7Bk2b9GSxKbpTBZ5eqhdiOWgYIKPx48oNXACEDvrZq1QC9FzRvpj2', 1, 'Correspondant', NULL, '2021-05-25 11:00:55', '2021-05-25 11:00:55');

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
,`nomdemandeur` varchar(254)
,`prenomdemandeur` varchar(254)
,`telephone` int(11)
,`iduser` int(11)
,`idregion` int(11)
,`nomregion` varchar(254)
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
,`typecorrespondant` varchar(254)
,`originecorrespondant` varchar(254)
,`region` varchar(254)
,`prenomcorrespondant` varchar(254)
,`cnibcorrespondant` varchar(254)
,`passportcorrespondant` varchar(254)
,`telephonecorrespondant` int(11)
,`telephone2correspondant` int(11)
,`mailcorrespondant` varchar(254)
,`lieuresidence` varchar(254)
,`organe` varchar(254)
,`fonction` varchar(254)
,`cv` varchar(254)
,`numcartepresse` int(11)
,`photo` varchar(254)
,`visamedia` varchar(254)
,`refjournal` varchar(254)
,`parcourspro` varchar(254)
,`pjcartepresse` varchar(254)
,`pjpasseport` varchar(254)
,`pjcnib` varchar(254)
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
-- Structure de la vue `vueaccreditation`
--
DROP TABLE IF EXISTS `vueaccreditation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccreditation`  AS  select `ac`.`idaccreditation` AS `idaccreditation`,`ac`.`iddemandeur` AS `iddemandeur`,`ac`.`titreevenement` AS `titreevenement`,`ac`.`lieuevenement` AS `lieuevenement`,`ac`.`datedebut` AS `datedebut`,`ac`.`datefin` AS `datefin`,`ac`.`moyentransport` AS `moyentransport`,`ac`.`immatriculation` AS `immatriculation`,`ac`.`listemateriel` AS `listemateriel`,`ac`.`membresequipe` AS `membresequipe`,`d`.`actif` AS `actif`,`d`.`nom` AS `nomdemandeur`,`d`.`prenom` AS `prenomdemandeur`,`d`.`telephone` AS `telephone`,`d`.`iduser` AS `iduser`,`r`.`idregion` AS `idregion`,`r`.`nomregion` AS `nomregion` from ((((`demandeur` `d` join `accreditation` `ac`) join `users` `u`) join `region` `r`) join `accrediregion` `ar`) where ((`d`.`iddemandeur` = `ac`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`) and (`ar`.`idregion` = `r`.`idregion`) and (`ar`.`idaccreditation` = `ac`.`idaccreditation`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`iduser` AS `iduser`,`c`.`nom` AS `nomcorrespondant`,`c`.`typecorrespondant` AS `typecorrespondant`,`c`.`origine` AS `originecorrespondant`,`c`.`region` AS `region`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`cnib` AS `cnibcorrespondant`,`c`.`passeport` AS `passportcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`telephone2` AS `telephone2correspondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`c`.`organe` AS `organe`,`c`.`fonction` AS `fonction`,`c`.`cv` AS `cv`,`c`.`numcartepresse` AS `numcartepresse`,`c`.`photo` AS `photo`,`c`.`visamedia` AS `visamedia`,`c`.`refjournal` AS `refjournal`,`c`.`parcourspro` AS `parcourspro`,`c`.`pjcartepresse` AS `pjcartepresse`,`c`.`pjpasseport` AS `pjpasseport`,`c`.`pjcnib` AS `pjcnib`,`c`.`actif` AS `actif` from (`correspondant` `c` join `users` `u`) where (`c`.`iduser` = `u`.`id`) ;

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
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idregion`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accrediregion`
--
ALTER TABLE `accrediregion`
  MODIFY `idaccrediregion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `mediacorrespondant`
--
ALTER TABLE `mediacorrespondant`
  MODIFY `IDMEDIACORRES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  MODIFY `IDMEDIAPRESSE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idregion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accrediregion`
--
ALTER TABLE `accrediregion`
  ADD CONSTRAINT `fk_idaccreditation` FOREIGN KEY (`idaccreditation`) REFERENCES `accreditation` (`idaccreditation`),
  ADD CONSTRAINT `fk_idregion` FOREIGN KEY (`idregion`) REFERENCES `region` (`idregion`);

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
