-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 08 juin 2021 à 12:03
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
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `accrediregion`
--

INSERT INTO `accrediregion` (`idaccrediregion`, `idregion`, `idaccreditation`, `actif`, `created_at`, `updated_at`) VALUES
(1, 1, 25, 1, '2021-06-07 05:25:01', '2021-06-07 05:25:01'),
(2, 3, 25, 1, '2021-06-07 05:25:01', '2021-06-07 05:25:01'),
(3, 2, 25, 1, '2021-06-07 05:25:01', '2021-06-07 05:25:01'),
(4, 12, 25, 1, '2021-06-07 05:25:02', '2021-06-07 05:25:02'),
(5, 1, 26, 0, '2021-06-07 12:36:52', '2021-06-07 12:36:52'),
(6, 3, 26, 1, '2021-06-07 05:26:42', '2021-06-07 05:26:42'),
(7, 2, 26, 0, '2021-06-07 12:39:15', '2021-06-07 12:39:15'),
(8, 12, 26, 1, '2021-06-07 05:26:42', '2021-06-07 05:26:42'),
(9, 1, 27, 0, '2021-06-07 12:02:05', '2021-06-07 12:02:05'),
(10, 6, 27, 0, '2021-06-07 12:02:05', '2021-06-07 12:02:05'),
(11, 7, 27, 0, '2021-06-07 12:13:03', '2021-06-07 12:13:03'),
(12, 4, 27, 0, '2021-06-07 12:13:03', '2021-06-07 12:13:03'),
(13, 10, 27, 0, '2021-06-07 12:22:30', '2021-06-07 12:22:30'),
(14, 11, 27, 1, '2021-06-07 12:13:23', '2021-06-07 12:13:23'),
(15, 5, 27, 0, '2021-06-07 12:21:48', '2021-06-07 12:21:48'),
(16, 9, 27, 1, '2021-06-07 12:13:56', '2021-06-07 12:13:56'),
(17, 12, 28, 1, '2021-06-07 12:20:26', '2021-06-07 12:20:26'),
(18, 10, 28, 1, '2021-06-07 12:20:26', '2021-06-07 12:20:26'),
(19, 9, 28, 1, '2021-06-07 12:20:26', '2021-06-07 12:20:26'),
(20, 1, 28, 1, '2021-06-07 12:21:48', '2021-06-07 12:21:48'),
(21, 1, 28, 1, '2021-06-07 12:22:30', '2021-06-07 12:22:30'),
(22, 7, 28, 1, '2021-06-07 12:22:30', '2021-06-07 12:22:30'),
(23, 1, 28, 1, '2021-06-07 12:31:22', '2021-06-07 12:31:22'),
(24, 1, 28, 1, '2021-06-07 12:33:55', '2021-06-07 12:33:55'),
(25, 9, 28, 1, '2021-06-07 12:36:52', '2021-06-07 12:36:52'),
(26, 1, 26, 0, '2021-06-07 12:39:45', '2021-06-07 12:39:45'),
(27, 7, 26, 1, '2021-06-07 12:39:45', '2021-06-07 12:39:45'),
(28, 11, 26, 1, '2021-06-07 12:39:45', '2021-06-07 12:39:45'),
(29, 9, 26, 1, '2021-06-07 12:40:06', '2021-06-07 12:40:06'),
(30, 6, 29, 1, '2021-06-07 15:51:58', '2021-06-07 15:51:58'),
(31, 5, 30, 1, '2021-06-08 04:16:48', '2021-06-08 04:16:48'),
(32, 1, 31, 1, '2021-06-08 04:43:03', '2021-06-08 04:43:03'),
(33, 1, 32, 1, '2021-06-08 04:56:31', '2021-06-08 04:56:31'),
(34, 1, 33, 1, '2021-06-08 05:00:53', '2021-06-08 05:00:53'),
(35, 1, 34, 1, '2021-06-08 05:12:39', '2021-06-08 05:12:39'),
(36, 1, 35, 1, '2021-06-08 05:18:03', '2021-06-08 05:18:03'),
(37, 1, 36, 1, '2021-06-08 05:18:33', '2021-06-08 05:18:33'),
(38, 1, 37, 1, '2021-06-08 05:19:58', '2021-06-08 05:19:58'),
(39, 1, 38, 1, '2021-06-08 05:23:44', '2021-06-08 05:23:44'),
(40, 1, 39, 1, '2021-06-08 05:29:55', '2021-06-08 05:29:55'),
(41, 1, 40, 1, '2021-06-08 06:06:03', '2021-06-08 06:06:03'),
(42, 1, 41, 1, '2021-06-08 06:06:36', '2021-06-08 06:06:36'),
(43, 1, 42, 1, '2021-06-08 06:07:08', '2021-06-08 06:07:08'),
(44, 1, 43, 1, '2021-06-08 06:07:44', '2021-06-08 06:07:44'),
(45, 1, 44, 1, '2021-06-08 06:08:18', '2021-06-08 06:08:18'),
(46, 1, 45, 1, '2021-06-08 06:08:40', '2021-06-08 06:08:40'),
(47, 1, 46, 1, '2021-06-08 06:12:01', '2021-06-08 06:12:01'),
(48, 1, 47, 1, '2021-06-08 06:13:49', '2021-06-08 06:13:49'),
(49, 1, 48, 1, '2021-06-08 06:17:49', '2021-06-08 06:17:49'),
(50, 1, 49, 1, '2021-06-08 06:19:07', '2021-06-08 06:19:07'),
(51, 1, 50, 1, '2021-06-08 06:20:51', '2021-06-08 06:20:51'),
(52, 1, 51, 1, '2021-06-08 06:24:36', '2021-06-08 06:24:36'),
(53, 1, 52, 1, '2021-06-08 06:25:13', '2021-06-08 06:25:13'),
(54, 1, 53, 1, '2021-06-08 06:26:55', '2021-06-08 06:26:55'),
(55, 1, 54, 1, '2021-06-08 06:29:25', '2021-06-08 06:29:25'),
(56, 1, 55, 1, '2021-06-08 06:31:59', '2021-06-08 06:31:59'),
(57, 1, 56, 1, '2021-06-08 08:40:06', '2021-06-08 08:40:06'),
(58, 1, 57, 1, '2021-06-08 08:45:10', '2021-06-08 08:45:10'),
(59, 1, 58, 1, '2021-06-08 08:46:20', '2021-06-08 08:46:20'),
(60, 1, 59, 1, '2021-06-08 08:47:09', '2021-06-08 08:47:09'),
(61, 1, 60, 1, '2021-06-08 08:47:48', '2021-06-08 08:47:48'),
(62, 1, 61, 1, '2021-06-08 08:47:55', '2021-06-08 08:47:55'),
(63, 1, 62, 1, '2021-06-08 08:48:17', '2021-06-08 08:48:17'),
(64, 1, 63, 1, '2021-06-08 08:50:24', '2021-06-08 08:50:24'),
(65, 1, 64, 1, '2021-06-08 08:52:14', '2021-06-08 08:52:14'),
(66, 1, 65, 1, '2021-06-08 08:53:14', '2021-06-08 08:53:14'),
(67, 1, 66, 1, '2021-06-08 08:54:52', '2021-06-08 08:54:52'),
(68, 1, 67, 1, '2021-06-08 08:56:12', '2021-06-08 08:56:12'),
(69, 1, 68, 1, '2021-06-08 08:56:43', '2021-06-08 08:56:43'),
(70, 1, 69, 1, '2021-06-08 09:00:41', '2021-06-08 09:00:41'),
(71, 1, 70, 1, '2021-06-08 09:02:31', '2021-06-08 09:02:31'),
(72, 1, 71, 1, '2021-06-08 09:03:05', '2021-06-08 09:03:05'),
(73, 1, 72, 1, '2021-06-08 09:06:38', '2021-06-08 09:06:38'),
(74, 1, 73, 1, '2021-06-08 09:08:47', '2021-06-08 09:08:47'),
(75, 1, 74, 1, '2021-06-08 09:11:21', '2021-06-08 09:11:21'),
(76, 1, 75, 1, '2021-06-08 09:12:23', '2021-06-08 09:12:23'),
(77, 1, 76, 1, '2021-06-08 09:15:30', '2021-06-08 09:15:30'),
(78, 1, 77, 1, '2021-06-08 09:18:52', '2021-06-08 09:18:52'),
(79, 1, 78, 1, '2021-06-08 09:19:26', '2021-06-08 09:19:26'),
(80, 1, 79, 1, '2021-06-08 09:24:46', '2021-06-08 09:24:46'),
(81, 1, 80, 1, '2021-06-08 09:46:10', '2021-06-08 09:46:10');

-- --------------------------------------------------------

--
-- Structure de la table `accreditation`
--

CREATE TABLE `accreditation` (
  `idaccreditation` int(11) NOT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `titreevenement` varchar(254) DEFAULT NULL,
  `lieuevenement` varchar(254) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `datefin` date DEFAULT NULL,
  `moyentransport` varchar(254) DEFAULT NULL,
  `immatriculation` varchar(254) DEFAULT NULL,
  `listemateriel` varchar(254) DEFAULT NULL,
  `membresequipe` varchar(254) NOT NULL,
  `lettrerecommendation` varchar(255) DEFAULT NULL,
  `region1` varchar(255) DEFAULT NULL,
  `region2` varchar(255) DEFAULT NULL,
  `region3` varchar(255) DEFAULT NULL,
  `region4` varchar(255) DEFAULT NULL,
  `region5` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `valider` tinyint(1) NOT NULL DEFAULT '0',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accreditation`
--

INSERT INTO `accreditation` (`idaccreditation`, `iddemandeur`, `titreevenement`, `lieuevenement`, `datedebut`, `datefin`, `moyentransport`, `immatriculation`, `listemateriel`, `membresequipe`, `lettrerecommendation`, `region1`, `region2`, `region3`, `region4`, `region5`, `actif`, `valider`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 'la foire de la Semaine Nationale de la Culture 2021', 'Bobo', '2021-05-03', '2021-06-30', 'Vehicule RAV4', '24 ZZ01', 'Camera\r\nmicro', 'SAMA DAOUDA\r\nDICKO Arnaud\r\nDIALLO Paul\r\nZOURE Paul', NULL, NULL, NULL, NULL, NULL, '', 1, 0, '2021-05-27 12:26:23', '2021-05-27 12:26:23'),
(2, 4, 'La campagne electorale', 'Bobo Dioulasso', '2021-05-13', '2021-05-19', 'Vehicule RAV 4', 'AS45788', 'Camera\r\nRadio', 'GANAME PAUL\r\nBONKIAN GEORGES\r\nTIEMTORE SYLVESTRE', NULL, NULL, NULL, NULL, NULL, '', 1, 0, '2021-05-29 11:20:10', '2021-05-29 11:20:10'),
(3, 5, 'kjdshfjdshf', 'dsfhjskdhf', '2021-05-27', '2021-05-18', 'jhsdhjsgdf', 'sdfjnsjkhdf', 'dfds', 'sdsd', NULL, NULL, NULL, NULL, NULL, '', 1, 0, '2021-05-29 13:19:45', '2021-05-29 13:19:45'),
(4, 8, 'TOURE Alidou', NULL, '2021-06-17', '2021-06-17', 'Vehicule RAV 4', 'B7856932', 'Micro', 'TOURE JEAN', NULL, 'Centre', 'Centre-Nord', 'Centre-Ouest', 'choisir la region', 'choisir la region', 1, 0, '2021-06-04 12:21:44', '2021-06-04 12:21:44'),
(5, 9, 'la moisson au village de koumi', NULL, '2021-06-10', '2021-06-18', 'Vehicule Tout terrain', '578878', 'Micro\r\nVideo', 'SOURE Alimata', NULL, 'Boucle du Mouhoun', 'Centre', 'Centre-Est', 'choisir la region', 'choisir la region', 1, 0, '2021-06-04 14:59:54', '2021-06-04 14:59:54'),
(6, 10, 'le marché', NULL, '2021-06-02', '2021-06-18', 'vehicule', '5654', 'micro', 'SOURABIE Paul', NULL, 'Centre-Est', 'Centre-Nord', 'Centre-Sud', 'choisir la region', 'choisir la region', 1, 0, '2021-06-04 15:13:46', '2021-06-04 15:13:46'),
(7, 11, 'Le marche de pagalayiri', NULL, '2021-06-17', '2021-06-18', 'Vehicule 4', '785966', 'Micro', 'SOUTE GALO', NULL, 'Centre-Nord', 'Nord', 'Sud-Ouest', 'choisir la region', 'choisir la region', 1, 0, '2021-06-04 18:19:31', '2021-06-04 18:19:31'),
(8, 29, 'ryhteyrety', NULL, '2021-06-24', '2021-06-24', '\'teqytr', 'ytrtytry', 'tryyrury', 'tryrtyurt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:49:58', '2021-06-07 04:49:58'),
(9, 29, 'ryhteyrety', NULL, '2021-06-24', '2021-06-24', '\'teqytr', 'ytrtytry', 'tryyrury', 'tryrtyurt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:52:03', '2021-06-07 04:52:03'),
(10, 29, 'ryhteyrety', NULL, '2021-06-24', '2021-06-24', '\'teqytr', 'ytrtytry', 'tryyrury', 'tryrtyurt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:52:14', '2021-06-07 04:52:14'),
(11, 29, 'ryhteyrety', NULL, '2021-06-24', '2021-06-24', '\'teqytr', 'ytrtytry', 'tryyrury', 'tryrtyurt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:52:41', '2021-06-07 04:52:41'),
(12, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:53:58', '2021-06-07 04:53:58'),
(13, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:54:12', '2021-06-07 04:54:12'),
(14, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:54:50', '2021-06-07 04:54:50'),
(15, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 04:55:22', '2021-06-07 04:55:22'),
(16, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:04:52', '2021-06-07 05:04:52'),
(17, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:05:40', '2021-06-07 05:05:40'),
(18, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:06:55', '2021-06-07 05:06:55'),
(19, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:07:50', '2021-06-07 05:07:50'),
(20, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:08:52', '2021-06-07 05:08:52'),
(21, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:15:36', '2021-06-07 05:15:36'),
(22, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:18:29', '2021-06-07 05:18:29'),
(23, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:23:30', '2021-06-07 05:23:30'),
(24, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:24:12', '2021-06-07 05:24:12'),
(25, 30, 'rrtrtretre', NULL, '2021-06-02', '2021-06-17', 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:25:01', '2021-06-07 05:25:01'),
(26, 32, 'rrtrtretre', NULL, NULL, NULL, 'rtrtreT', '2687878', 'rzTZRT', 'ZERTRZt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 05:26:42', '2021-06-07 12:36:52'),
(27, 32, 'la foire de la Semaine Nationale de la Culture 2021', NULL, NULL, NULL, 'RAV4', '4564974', 'JHGIUH', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 11:29:40', '2021-06-07 12:21:48'),
(28, 32, 'la moisson au village de koumi', NULL, '2021-06-15', '2021-06-10', 'RAV4', '5654', 'dsfdsf', 'sdfds', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 12:20:25', '2021-06-07 12:20:25'),
(29, 33, 'la danse des masques', NULL, '2021-06-14', '2021-06-23', 'RAV4', '78963214', 'Micro', 'MINOUGOU P SYLVAIN\r\nDIALLO AROUNA', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 15:51:58', '2021-06-07 15:51:58'),
(30, 34, 'la chasse au village', NULL, '2021-06-14', '2021-06-22', 'Vehicule RAV 4', '85669', 'Micro', 'TOURE François', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 04:16:48', '2021-06-08 04:16:48'),
(31, 35, 'la moisson au village de koumi', NULL, '2021-06-21', '2021-07-01', 'RAV4', '6', NULL, 'rtttttt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 04:43:03', '2021-06-08 04:43:03'),
(32, 35, 'la moisson au village de koumi', NULL, '2021-06-21', '2021-07-01', 'RAV4', '6', NULL, 'rtttttt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 04:56:31', '2021-06-08 04:56:31'),
(33, 35, 'la moisson au village de koumi', NULL, '2021-06-21', '2021-07-01', 'RAV4', '6', NULL, 'rtttttt', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:00:53', '2021-06-08 05:00:53'),
(34, 36, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:12:39', '2021-06-08 05:12:39'),
(35, 37, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:18:03', '2021-06-08 05:18:03'),
(36, 37, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:18:33', '2021-06-08 05:18:33'),
(37, 37, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:19:57', '2021-06-08 05:19:57'),
(38, 37, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:23:44', '2021-06-08 05:23:44'),
(39, 37, 'JHTJGJHG', NULL, '2021-06-11', '2021-06-23', 'N?GHJ', 'JKHJK', 'JGJHG', 'JHGJHG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 05:29:55', '2021-06-08 05:29:55'),
(40, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:06:03', '2021-06-08 06:06:03'),
(41, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:06:36', '2021-06-08 06:06:36'),
(42, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:07:08', '2021-06-08 06:07:08'),
(43, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:07:44', '2021-06-08 06:07:44'),
(44, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:08:18', '2021-06-08 06:08:18'),
(45, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:08:40', '2021-06-08 06:08:40'),
(46, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:12:01', '2021-06-08 06:12:01'),
(47, 37, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:13:49', '2021-06-08 06:13:49'),
(48, 37, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:17:49', '2021-06-08 06:17:49'),
(49, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:19:07', '2021-06-08 06:19:07'),
(50, 37, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:20:51', '2021-06-08 06:20:51'),
(51, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:24:36', '2021-06-08 06:24:36'),
(52, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:25:13', '2021-06-08 06:25:13'),
(53, 37, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:26:55', '2021-06-08 06:26:55'),
(54, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:29:25', '2021-06-08 06:29:25'),
(55, NULL, 'sggtghjg', NULL, '2021-06-24', '2021-06-24', 'qrree', '54646', 'jhjkh', 'khjkhj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 06:31:59', '2021-06-08 06:31:59'),
(56, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:40:06', '2021-06-08 08:40:06'),
(57, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:45:10', '2021-06-08 08:45:10'),
(58, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:46:20', '2021-06-08 08:46:20'),
(59, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:47:09', '2021-06-08 08:47:09'),
(60, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:47:48', '2021-06-08 08:47:48'),
(61, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:47:55', '2021-06-08 08:47:55'),
(62, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:48:17', '2021-06-08 08:48:17'),
(63, NULL, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:50:24', '2021-06-08 08:50:24'),
(64, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:52:14', '2021-06-08 08:52:14'),
(65, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:53:14', '2021-06-08 08:53:14'),
(66, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:54:52', '2021-06-08 08:54:52'),
(67, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:56:12', '2021-06-08 08:56:12'),
(68, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 08:56:42', '2021-06-08 08:56:42'),
(69, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:00:41', '2021-06-08 09:00:41'),
(70, NULL, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:02:31', '2021-06-08 09:02:31'),
(71, NULL, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:03:05', '2021-06-08 09:03:05'),
(72, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:06:38', '2021-06-08 09:06:38'),
(73, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:08:46', '2021-06-08 09:08:46'),
(74, NULL, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:11:21', '2021-06-08 09:11:21'),
(75, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:12:23', '2021-06-08 09:12:23'),
(76, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:15:30', '2021-06-08 09:15:30'),
(77, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:18:52', '2021-06-08 09:18:52'),
(78, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:19:26', '2021-06-08 09:19:26'),
(79, 38, 'la danse des masques', NULL, '2021-06-15', '2021-06-24', 'RAV4', '56565', 'ZAEAE', 'AZEAZE\r\nAZRZR', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:24:46', '2021-06-08 09:24:46'),
(80, 39, 'la moisson au village de koumi', NULL, '2021-06-22', '2021-06-22', 'RAV 4', '16696994', 'ZRZRE', 'AZEAE\r\nDZEDZE', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-08 09:46:10', '2021-06-08 09:46:10');

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
  `typecorrespondant` varchar(255) DEFAULT NULL,
  `parcourspro` varchar(254) DEFAULT NULL,
  `region` varchar(254) DEFAULT NULL,
  `origine` varchar(255) DEFAULT NULL,
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

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `cnib`, `passeport`, `fonction`, `telephone1`, `telephone2`, `mail1`, `lieuresidence`, `numcartepresse`, `photo`, `cv`, `visamedia`, `refjournal`, `typecorrespondant`, `parcourspro`, `region`, `origine`, `pjcartepresse`, `pjpasseport`, `pjcnib`, `organe`, `typepresse`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 0, 'DICKO', 'Moussa', 'B123456', 'AZR258', 'Journaliste', 2500000, 7000000, 'moussa@gmail.com', 'Dori', 12, NULL, NULL, NULL, NULL, NULL, NULL, 'Sahel', NULL, NULL, NULL, NULL, '', '', 1, '2021-05-19 00:00:00', '2021-05-24 17:56:07'),
(2, NULL, 'MINOUGOU', 'Sylvain', 'B785269', 'S78002158', 'Journaliste', 78526369, 70452587, 'minougou@yahoo.fr', 'Ouagadougou', 778821476, NULL, NULL, NULL, 'ref journalistes', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'Sidwaya', 'Presse Ecrite', 1, '2021-05-27 10:23:30', '2021-05-27 10:23:30'),
(3, NULL, 'DRABO', 'Alidou', 'B78526945', 'S784563', 'Journaliste', 70000001, 64020012, 'drabo@yahoo.fr', 'Ouagadougou', 452, NULL, NULL, NULL, 'mes references', NULL, 'mon parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Radio', 1, '2021-05-27 11:32:16', '2021-05-27 11:32:16'),
(4, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:28:35', '2021-05-29 12:28:35'),
(5, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:29:22', '2021-05-29 12:29:22'),
(6, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo1@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:45:22', '2021-05-29 12:45:22'),
(7, NULL, 'ZOURA', 'LKHJKJH', '54767464', '5465784', 'Journaliste', 65456, 654564, 'sakalata@yahoo.fr', 'jgjhguhj', 6546576, NULL, NULL, NULL, 'Ref', NULL, 'Parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:47:19', '2021-05-29 12:47:19'),
(8, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo12@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 12:49:50', '2021-05-29 12:49:50'),
(9, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', NULL, 'uyytug', 'Centre', NULL, NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:52:41', '2021-05-29 12:52:41'),
(10, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail2@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', NULL, 'uyytug', 'Centre', NULL, NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:57:17', '2021-05-29 12:57:17'),
(11, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail23@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', NULL, 'uyytug', 'Centre', NULL, NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 12:58:10', '2021-05-29 12:58:10'),
(12, NULL, 'jdsgchdjg', 'kjshkjvhs', '546576', '6546546', 'l,sdhfjkhd', 6546, 65465, 'monmail234@yahoo.fr', 'jhgjhg', 35456456, NULL, NULL, NULL, 'jhghty', NULL, 'uyytug', 'Centre', NULL, NULL, NULL, NULL, 'jhjh', 'Presse Ecrite', 1, '2021-05-29 13:01:24', '2021-05-29 13:01:24'),
(13, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo152@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:02:05', '2021-05-29 13:02:05'),
(14, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo1527@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:03:10', '2021-05-29 13:03:10'),
(15, NULL, 'Doumabalao', 'Georges', 'B78963214', 'S78963214', 'Journaliste', 78555285, 70215486, 'doumabalo15287@yahoo.fr', 'Ouagadougou', 8885884, NULL, NULL, NULL, 'References', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-05-29 13:04:57', '2021-05-29 13:04:57'),
(16, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', NULL, 'polki', 'Centre', NULL, NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:07:19', '2021-05-29 13:07:19'),
(17, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara4@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', NULL, 'polki', 'Centre', NULL, NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:08:57', '2021-05-29 13:08:57'),
(18, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara45@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', NULL, 'polki', 'Centre', NULL, NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:10:33', '2021-05-29 13:10:33'),
(19, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara465@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', NULL, 'polki', 'Centre', NULL, NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:12:19', '2021-05-29 13:12:19'),
(20, NULL, 'Toure', 'LOKOKA', '45456', '5664564', 'JHJG', 65465, 45654, 'Gara4657@yahoo.fr', 'hgfhgg', 45465, NULL, NULL, NULL, 'oioo', NULL, 'polki', 'Centre', NULL, NULL, NULL, NULL, 'kjhihiu', 'Presse Ecrite', 1, '2021-05-29 13:14:55', '2021-05-29 13:14:55'),
(21, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:21:44', '2021-05-29 13:21:44'),
(22, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:23:37', '2021-05-29 13:23:37'),
(23, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:24:37', '2021-05-29 13:24:37'),
(24, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop788@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:26:59', '2021-05-29 13:26:59'),
(25, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:29:45', '2021-05-29 13:29:45'),
(26, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:30:37', '2021-05-29 13:30:37'),
(27, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop789897@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:32:34', '2021-05-29 13:32:34'),
(28, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898979@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:33:09', '2021-05-29 13:33:09'),
(29, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989799@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:33:42', '2021-05-29 13:33:42'),
(30, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop7898979910@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:35:03', '2021-05-29 13:35:03'),
(31, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop789897991011@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:36:13', '2021-05-29 13:36:13'),
(32, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lop78989799101112@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:37:56', '2021-05-29 13:37:56'),
(33, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:38:52', '2021-05-29 13:38:52'),
(34, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo1@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:39:44', '2021-05-29 13:39:44'),
(35, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo12@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:44:32', '2021-05-29 13:44:32'),
(36, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo123@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:46:30', '2021-05-29 13:46:30'),
(37, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo55@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:49:20', '2021-05-29 13:49:20'),
(38, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo556@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:50:43', '2021-05-29 13:50:43'),
(39, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo5567@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:51:41', '2021-05-29 13:51:41'),
(40, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopo55678@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:53:18', '2021-05-29 13:53:18'),
(41, NULL, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopora@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', NULL, 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 13:59:53', '2021-05-29 13:59:53'),
(42, 34, 'poloiii', 'sdfdsfd', 'dfdsf', '54564', 'sdfdsfd', 5646584, 654684, 'lopora1@yahoo.fr', 'fdgfdgfd', 5456, NULL, NULL, NULL, 'dsfsdf', 'Correspondant de la Presse Nationale', 'sqdsqd', 'Centre', NULL, NULL, NULL, NULL, 'dfsfdsf', 'Presse Ecrite', 1, '2021-05-29 14:01:47', '2021-05-29 14:02:07'),
(43, NULL, 'SARO', 'Alidou', '54488', 'S54855', 'trezrj', 544865, 5487866, 'homme@yahoo.fr', 'polarise', 54664498, NULL, NULL, NULL, 'DSQDDQS', NULL, 'QSDQSD', 'Centre', NULL, NULL, NULL, NULL, 'SQDQSD', 'Presse Ecrite', 1, '2021-06-01 11:52:32', '2021-06-01 11:52:32'),
(44, 35, 'ramapo', 'lamota', 'B5454', '156465', 'poli', 545, 3546, 'toulousa@yahoo.fr', 'dfdsf', 35468, NULL, NULL, NULL, 'DSFDFD', NULL, 'AZAF', 'Centre', NULL, NULL, NULL, NULL, 'SDFSDF', 'Presse Ecrite', 1, '2021-06-01 14:26:49', '2021-06-01 14:38:24'),
(45, 36, 'ramapo', 'lamota', 'B5454', '156465', 'poli', 545, 3546, 'toulousa2@yahoo.fr', 'dfdsf', 35468, NULL, NULL, NULL, 'DSFDFD', NULL, 'AZAF', 'Centre', NULL, NULL, NULL, NULL, 'SDFSDF', 'Presse Ecrite', 1, '2021-06-01 14:42:22', '2021-06-01 14:43:56'),
(46, NULL, 'ramapo', 'lamota', 'B5454', '156465', 'poli', 545, 3546, 'toulousa2@yahoo.fr', 'dfdsf', 35468, NULL, NULL, NULL, 'DSFDFD', NULL, 'AZAF', 'Centre', NULL, NULL, NULL, NULL, 'SDFSDF', 'Presse Ecrite', 1, '2021-06-01 15:05:38', '2021-06-01 15:05:38'),
(47, NULL, 'ramapo', 'lamota', 'B5454', '156465', 'poli', 545, 3546, 'toulousa2@yahoo.fr', 'dfdsf', 35468, NULL, NULL, NULL, 'DSFDFD', NULL, 'AZAF', 'Centre', NULL, NULL, NULL, NULL, 'SDFSDF', 'Presse Ecrite', 1, '2021-06-01 15:07:35', '2021-06-01 15:07:35'),
(48, 37, 'dqfqdsf', 'qdfqsdf', '455', '24665', 'dqsfqsdf', 654, 656985, 'lolo@yahoo.fr', 'dfdsqfdsf', 654854, NULL, NULL, NULL, 'qdfqdsf', NULL, 'sqdqsd', 'Centre', NULL, NULL, NULL, NULL, 'sqdsqd', 'Presse Ecrite', 0, '2021-06-01 15:09:45', '2021-06-04 18:07:43'),
(49, NULL, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 1, '2021-06-01 15:12:55', '2021-06-01 15:12:55'),
(50, NULL, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali5@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 1, '2021-06-01 15:16:40', '2021-06-01 15:16:40'),
(51, NULL, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali567@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 1, '2021-06-01 15:23:07', '2021-06-01 15:23:07'),
(52, NULL, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali56879@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 1, '2021-06-01 15:36:59', '2021-06-01 15:36:59'),
(53, 42, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali568f79@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:42:54', '2021-06-04 18:07:41'),
(54, 43, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali568f789@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:44:06', '2021-06-04 18:07:35'),
(55, 44, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'tali568f7889@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:45:27', '2021-06-04 18:07:38'),
(56, 45, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'talliao@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:47:18', '2021-06-04 18:04:55'),
(57, 46, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'talliao1@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:53:26', '2021-06-04 18:07:22'),
(58, 47, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'talliao12@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:54:45', '2021-06-04 18:07:31'),
(59, 48, 'dfdfdsf', 'dfdsfdsf', '545', '654564', 'dsfdsf', 3546574, 65786, 'talliao123@yahoo.fr', 'fdsfsdf', 65486, NULL, NULL, NULL, 'dqsfdsqf', NULL, 'qdsfdsqf', 'Centre', NULL, NULL, NULL, NULL, 'dffdsq', 'Presse Ecrite', 0, '2021-06-01 15:57:18', '2021-06-04 18:07:26'),
(60, NULL, 'KABORE', 'Pierre', '548555', '5448987', 'Journaliste', 56548459, 54785569, 'kabore@yahoo.fr', 'Ouagadougou', 215588, NULL, NULL, NULL, 'References journalistiques', NULL, 'parcours professionnel', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-02 10:28:26', '2021-06-02 10:28:26'),
(61, 50, 'KABORE', 'Pierre', '548555', '5448987', 'Journaliste', 56548459, 54785569, 'kabore25@yahoo.fr', 'Ouagadougou', 215588, NULL, NULL, NULL, 'References journalistiques', NULL, 'parcours professionnel', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-02 10:37:13', '2021-06-02 10:37:53'),
(62, 51, 'KABORE', 'Pierre', '548555', '5448987', 'Journaliste', 56548459, 54785569, 'kabore256@yahoo.fr', 'Ouagadougou', 215588, NULL, NULL, NULL, 'References journalistiques', NULL, 'parcours professionnel', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-02 10:41:06', '2021-06-02 10:41:57'),
(63, 52, 'KABORE', 'Pierre', '548555', '5448987', 'Journaliste', 56548459, 54785569, 'kabore2567@yahoo.fr', 'Ouagadougou', 215588, NULL, NULL, NULL, 'References journalistiques', NULL, 'parcours professionnel', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-02 10:45:49', '2021-06-02 10:46:05'),
(64, 53, 'ZOULIRA', 'Maladou', '5463', '35445', 'tramoli', 54654756, 35345, 'golola@yahoo.fr', 'dsfsq', 24535, NULL, NULL, NULL, 'references', NULL, 'parcours', 'Centre', NULL, NULL, NULL, NULL, 'Sidwaya', 'Presse Ecrite', 1, '2021-06-02 12:03:32', '2021-06-02 12:04:04'),
(65, 54, 'ZAMPALIGRE', 'Alidou', '576876', '5376', 'journaliste', 52757, 57585, 'kombo@yahoo.fr', 'Dedougou', 358769, NULL, NULL, NULL, 'ref', NULL, 'parc', 'Centre', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-02 12:41:20', '2021-06-02 12:42:08'),
(66, NULL, 'TAMINI', 'A', 'B4856545', 'S515454', 'LAIN', 78451236, 78523698, 'tamini@yahoo.fr', 'Ouagadougou', 555654, NULL, NULL, NULL, 'JHGDHJ', NULL, 'KJHDJIFHD', 'Nord', NULL, NULL, NULL, NULL, 'RFI', 'Radio', 1, '2021-06-08 05:05:33', '2021-06-08 05:05:33'),
(67, NULL, 'SOUMALA', 'Jean', 'B78559632', '78453698', 'Instituteur', 78541236, 85479632, 'pokali@yahoo.fr', 'Bobo Dioulasso', 7894562, NULL, NULL, NULL, 'REF', NULL, 'PARC', 'Nord', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-08 09:28:49', '2021-06-08 09:28:49'),
(68, NULL, 'SOUMALA', 'Jean', 'B78559632', '78453698', 'Instituteur', 78541236, 85479632, 'pokali@yahoo.fr', 'Bobo Dioulasso', 7894562, NULL, NULL, NULL, 'REF', NULL, 'PARC', 'Nord', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-08 09:31:30', '2021-06-08 09:31:30'),
(69, 87, 'SOUMALA', 'Jean', 'B78559632', '78453698', 'Instituteur', 78541236, 85479632, 'pokali1@yahoo.fr', 'Bobo Dioulasso', 7894562, NULL, NULL, NULL, 'REF', NULL, 'PARC', 'Nord', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-08 09:32:28', '2021-06-08 09:35:09'),
(70, 88, 'SOUMALA', 'Jean', 'B78559632', '78453698', 'Instituteur', 78541236, 85479632, 'pokali12@yahoo.fr', 'Bobo Dioulasso', 7894562, NULL, NULL, NULL, 'REF', NULL, 'PARC', 'Nord', NULL, NULL, NULL, NULL, 'RFI', 'Presse Ecrite', 1, '2021-06-08 09:40:51', '2021-06-08 09:41:26');

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
  `adressfixeur` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
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

INSERT INTO `demandeur` (`iddemandeur`, `iduser`, `nom`, `prenom`, `profession`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `numPasseport`, `carteconsulaire`, `datedelivcnib`, `dateexpircnib`, `telephone`, `adressfixeur`, `email`, `personneprevenir`, `lieuresidence`, `organe`, `telorgane`, `adressestruct`, `pjcnib`, `pjpasseport`, `pjcinibperprev`, `pjpasseportperprev`, `pjcartepresse`, `numcnib`, `telephonepersp`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, NULL, 'SORI', 'Mariame', 'Jiurnaliste', '1997-05-04 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'B45789632', '784512', '2021-05-11 00:00:00', '2021-05-03 00:00:00', 70203025, NULL, '', 'Toure Alain', 'Ouagadougou', 'FRNCE24', 78456321, 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, 'B789632', 78453695, 1, '2021-05-27 11:57:53', '2021-05-27 11:57:53'),
(2, NULL, 'MILLOGO', 'Jean', 'Journaliste', '2021-05-11 00:00:00', 'Kaya', 'Burkinabè', 'HOMME', 'S8865625', 'B78566629', '2021-05-19 00:00:00', '2021-05-19 00:00:00', 78204578, NULL, '', 'ZOUMANA Frederick', '78659632', 'FRANCE 24', 70201032, 'Rue 15.588', NULL, NULL, NULL, NULL, NULL, 'B78459632', 7855965, 1, '2021-05-28 09:01:46', '2021-05-28 09:01:46'),
(3, 6, 'TABOURE', 'Paul', 'Journaliste', '2021-04-29 00:00:00', 'Ouagadougou', 'Burkinabe', 'HOMME', 'S784536', '02156954', '2021-05-26 00:00:00', '2021-05-20 00:00:00', 70203040, NULL, '', 'TOURE Alidou', 'Ouagadougou', 'France 44', 72124569, 'Rue 34.177', NULL, NULL, NULL, NULL, NULL, 'B78452163', 78521236, 1, '2021-05-29 11:05:09', '2021-05-29 11:08:11'),
(4, 7, 'TABOURELI', 'Paul', 'Journaliste', '2021-04-29 00:00:00', 'Ouagadougou', 'Burkinabe', 'HOMME', 'S784536', '02156954', '2021-05-26 00:00:00', '2021-05-20 00:00:00', 70203040, NULL, '', 'TOURE Alidou', 'Ouagadougou', 'France 44', 72124569, 'Rue 34.177', NULL, NULL, NULL, NULL, NULL, 'B78452163', 78521236, 1, '2021-05-29 11:17:13', '2021-05-29 11:17:35'),
(5, 20, 'dfsdfdsf', 'dkfjndsjkhf', 'kdsnfjkdshf', '2021-05-20 00:00:00', 'ffdgdfg', 'jhghgh', 'HOMME', '564', '5456848', '2021-05-06 00:00:00', '2021-05-11 00:00:00', 5456, NULL, '', 'jhgugfgf', 'hghgfh', 'tthghgfyt', 546848, 'hggyffdfd', NULL, NULL, NULL, NULL, NULL, '5454', 65465, 1, '2021-05-29 13:18:58', '2021-05-29 13:19:12'),
(6, 55, 'TOURE', 'Alidou', 'Journaliste', '2021-06-15 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '67678', '5798', '2021-06-02 00:00:00', '2021-06-23 00:00:00', 78451236, NULL, 'boukari@yahoo.fr', 'TOURA MALIDOU', 'Ouagadougou', 'RFI', 75525, 'Rue 55.155', NULL, NULL, NULL, NULL, NULL, 'B7845699', 74123698, 1, '2021-06-04 12:10:10', '2021-06-04 12:10:11'),
(7, NULL, 'TOURE', 'Alidou', 'Journaliste', '2021-06-15 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '67678', '5798', '2021-06-02 00:00:00', '2021-06-23 00:00:00', 78451236, NULL, 'boukari@yahoo.fr', 'TOURA MALIDOU', 'Ouagadougou', 'RFI', 75525, 'Rue 55.155', NULL, NULL, NULL, NULL, NULL, 'B7845699', 74123698, 1, '2021-06-04 12:14:32', '2021-06-04 12:14:32'),
(8, 56, 'TOURE', 'Alimatou', 'Journaliste', '2021-06-17 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '35456', '325456', '2021-06-17 00:00:00', '2021-06-15 00:00:00', 654456, '35768', 'fralik@yahoo.fr', 'madala', 'Bobo', 'RFI', 5458, 'Rue 22.187', NULL, NULL, NULL, NULL, NULL, '546876', 35465, 1, '2021-06-04 12:17:19', '2021-06-04 12:17:19'),
(9, 57, 'KOUMBIA', 'Alphonse', 'Journaliste', '2021-06-09 00:00:00', 'Ouagadougou', 'Birkinabè', 'HOMME', '22548', '65996', '2021-06-30 00:00:00', '2021-06-26 00:00:00', 54548, 'rue', 'koumbia@yahoo.fr', 'Zoure Paul', 'Ouagadougou', 'RFI', 645464, 'Rue 43.155', NULL, NULL, NULL, NULL, NULL, '57557', 15486, 1, '2021-06-04 14:58:39', '2021-06-04 14:58:41'),
(10, 58, 'DOUMBIA', 'Alidou', 'journaliste', '2021-06-23 00:00:00', 'Ouagadougou', 'BUrkinabè', 'HOMME', '6545668', '6564565', '2021-06-09 00:00:00', '2021-06-09 00:00:00', 5465, 'TAMALI', 'traore@yahoo.fr', 'SOUARE', 'Bobo Dioulasso', 'RFI', 4887789, 'rama', NULL, NULL, NULL, NULL, NULL, '55468', 5454485, 1, '2021-06-04 15:13:04', '2021-06-04 15:13:04'),
(11, 59, 'OUATTARA', 'SOUNGALO', 'Journaliste', '2021-06-16 00:00:00', 'Bobo', 'Burkinabè', 'HOMME', '566778', '123658', '2021-06-10 00:00:00', '2021-06-30 00:00:00', 48888, 'Rue 44.155', 'ouattara@yahoo.fr', 'Soulama Paul', 'Bobo Dioulasso', 'RFI', 74256982, 'Rue 21.178', NULL, NULL, NULL, NULL, NULL, 'B458866', 78451236, 1, '2021-06-04 18:18:05', '2021-06-04 18:18:08'),
(12, 60, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2003@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 15:53:42', '2021-06-06 15:53:43'),
(13, NULL, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2003@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 15:56:15', '2021-06-06 15:56:15'),
(14, 61, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2004@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 15:57:43', '2021-06-06 15:57:43'),
(15, 62, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2005@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:00:35', '2021-06-06 16:00:35'),
(16, 63, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2006@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:06:46', '2021-06-06 16:06:47'),
(17, 64, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2007@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:08:08', '2021-06-06 16:08:08'),
(18, 65, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2008@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:20:22', '2021-06-06 16:20:23'),
(19, 66, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2009@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:22:58', '2021-06-06 16:22:59'),
(20, 67, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2010@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:25:39', '2021-06-06 16:25:40'),
(21, NULL, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2011@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:35:07', '2021-06-06 16:35:07'),
(22, NULL, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama2012@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:35:44', '2021-06-06 16:35:44'),
(23, 70, 'SOULAMA', 'Jean  François', 'Journaliste', '2021-06-16 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S78963214', '7852236', '2021-06-10 00:00:00', '2021-06-23 00:00:00', 78452136, 'Rue 21.177', 'soulama200005@yahoo.fr', 'Doumbia Arnaud', 'Bobo Dioulasso', 'RFI', 78451236, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 70256398, 1, '2021-06-06 16:36:32', '2021-06-06 16:36:32'),
(24, 71, 'TOUMBIA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '5889956', '366985', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 70215478, 'Rue 22.178', 'toumbia@yahoo.fr', 'Toumbia Alidou', 'Ouagadougou', 'RFI', 78653214, 'Rue55', NULL, NULL, NULL, NULL, NULL, '789456123', 556589, 1, '2021-06-07 03:42:14', '2021-06-07 03:42:16'),
(25, 72, 'TOUMBIA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '5889956', '366985', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 70215478, 'Rue 22.178', 'toumbika@yahoo.fr', 'Toumbia Alidou', 'Ouagadougou', 'RFI', 78653214, 'Rue55', NULL, NULL, NULL, NULL, NULL, '789456123', 556589, 1, '2021-06-07 03:44:47', '2021-06-07 03:44:47'),
(26, NULL, 'TOUMBIA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '5889956', '366985', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 70215478, 'Rue 22.178', 'toumbika@yahoo.fr', 'Toumbia Alidou', 'Ouagadougou', 'RFI', 78653214, 'Rue55', NULL, NULL, NULL, NULL, NULL, '789456123', 556589, 1, '2021-06-07 03:50:13', '2021-06-07 03:50:13'),
(27, 73, 'TOUMBIA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '5889956', '366985', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 70215478, 'Rue 22.178', 'toumbikka@yahoo.fr', 'Toumbia Alidou', 'Ouagadougou', 'RFI', 78653214, 'Rue55', NULL, NULL, NULL, NULL, NULL, '789456123', 556589, 1, '2021-06-07 03:50:39', '2021-06-07 03:50:40'),
(28, 74, 'TOUMBIA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '5889956', '366985', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 70215478, 'Rue 22.178', 'toumbikpka@yahoo.fr', 'Toumbia Alidou', 'Ouagadougou', 'RFI', 78653214, 'Rue55', NULL, NULL, NULL, NULL, NULL, '789456123', 556589, 1, '2021-06-07 03:52:56', '2021-06-07 03:52:57'),
(29, 75, 'ROUAMBA', 'Paul', 'Journaliste', '2021-06-24 00:00:00', 'dtytyt', 'tytryt', 'HOMME', '4546', '55464', '2021-06-09 00:00:00', '2021-06-18 00:00:00', 6556, 'gdrg', 'rolo@yahoo.fr', 'za', 'tyteyte', 'dt', 35543, 'retgert', NULL, NULL, NULL, NULL, NULL, '564', 35454, 1, '2021-06-07 04:36:10', '2021-06-07 04:36:11'),
(30, 76, 'ROUAMBA', 'Paul', 'Journaliste', '2021-06-24 00:00:00', 'dtytyt', 'tytryt', 'HOMME', '4546', '55464', '2021-06-09 00:00:00', '2021-06-18 00:00:00', 6556, 'gdrg', 'rolog@yahoo.fr', 'za', 'tyteyte', 'dt', 35543, 'retgert', NULL, NULL, NULL, NULL, NULL, '564', 35454, 1, '2021-06-07 04:53:32', '2021-06-07 04:53:32'),
(31, 77, 'SAMBORE', 'Alain', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '545488', '5485989', '2021-06-08 00:00:00', '2021-06-24 00:00:00', 78451236, 'Rue 21.177', 'souga@yahoo.fr', 'TOURE Alidou', 'Bobo Dioulasso', 'Radio Omega', 44585666, 'Rue 47.1587', NULL, NULL, NULL, NULL, NULL, '78451236', 54878, 1, '2021-06-07 11:28:55', '2021-06-07 11:28:56'),
(32, 78, 'OUEDRAOGO', 'Paul', 'Journaliste', '2021-06-09 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '22548', '564564', '2021-06-22 00:00:00', '2021-06-17 00:00:00', 74565, 'Rue 22.178', 'pauli@yahoo.fr', 'TOURE Alidou', 'Bobo Dioulasso', 'RFI', 564564, 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, 'B78451236', 784512, 1, '2021-06-07 12:19:23', '2021-06-07 12:19:23'),
(33, 79, 'DIARRA', 'Arnaud', 'Journaliste', '2021-06-08 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '78459632', '78541236', '2021-06-01 00:00:00', '2021-06-15 00:00:00', 78451236, 'Zemani Alidou', 'diarra@yahoo.fr', 'TOURE Arnaud', 'Bobo Dioulasso', 'RFI', 78452136, 'Rue 21.188', NULL, NULL, NULL, NULL, NULL, '78451236', 70256985, 1, '2021-06-07 15:50:43', '2021-06-07 15:50:44'),
(34, 80, 'ZOUMANA', 'Issoufou', 'journaliste', '2021-06-02 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', '7896321', '456852', '2021-06-07 00:00:00', '2021-06-17 00:00:00', 78451236, 'Rue 21.188', 'zoum@yahoo.fr', 'TOURE Alidou', 'Bobo', 'RFI', 7896525, 'Rue 45.555', NULL, NULL, NULL, NULL, NULL, '78945612', 7896523, 1, '2021-06-08 04:15:45', '2021-06-08 04:15:47'),
(35, 81, 'tira', 'hello', 'Journaliste', '2021-07-01 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S455996', '78965412', '2021-06-24 00:00:00', '2021-06-29 00:00:00', 78542136, 'Rue 21.188', 'tira@yahoo.fr', 'TOURE Alidou', 'Ouagadougou', 'France 44', 7885566, 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, 'B7845698', 545995, 1, '2021-06-08 04:42:17', '2021-06-08 04:42:18'),
(36, 83, 'njbjhg', 'jhjkhj', 'nbnb', '2021-06-10 00:00:00', 'kjhjkhgj', ',hjk', 'HOMME', 'S54564', '58789', '2021-06-09 00:00:00', '2021-06-29 00:00:00', 54654, 'HGFGRTY', 'fratrttt@yahoo.fr', 'HJGJHFGHJ', 'kjgjg', 'RFI', 14564, 'KJHUIYU', NULL, NULL, NULL, NULL, NULL, '655464', 35456768, 1, '2021-06-08 05:12:16', '2021-06-08 05:12:16'),
(37, NULL, 'njbjhg', 'jhjkhj', 'nbnb', '2021-06-10 00:00:00', 'kjhjkhgj', ',hjk', 'HOMME', 'S54564', '58789', '2021-06-09 00:00:00', '2021-06-29 00:00:00', 54654, 'HGFGRTY', 'fratrttt@yahoo.fr', 'HJGJHFGHJ', 'kjgjg', 'RFI', 14564, 'KJHUIYU', NULL, NULL, NULL, NULL, NULL, '655464', 35456768, 1, '2021-06-08 05:17:51', '2021-06-08 05:17:51'),
(38, 84, 'DIALLO', 'Ahmed', 'Journaliste', '2021-06-02 00:00:00', 'Ouagadougou', 'Burkinabè', 'HOMME', 'S786325', '78453621', '2021-06-15 00:00:00', '2021-06-17 00:00:00', 48544, 'Rue 21.188', 'diallo12@yahoo.fr', 'DAMIEN ALIDOU', 'Bobo Dioulasso', 'RFI', 85895, 'Rue 55.155', NULL, NULL, NULL, NULL, NULL, 'B78459632', 78452136, 1, '2021-06-08 08:39:22', '2021-06-08 08:39:22'),
(39, 89, 'DOUMBO', 'Paulin', 'Journaliste', '2021-06-16 00:00:00', 'Bobo', 'Burkinabè', 'HOMME', 'S78963215', '78945632', '2021-06-14 00:00:00', '2021-06-18 00:00:00', 78456321, 'SORE Alidou', 'doumbo@yahoo.fr', 'TOURE Alidou', 'Ouagadougou', 'RFI', 78452136, 'Rue 25.155', NULL, NULL, NULL, NULL, NULL, 'B78963215', 852147, 1, '2021-06-08 09:45:24', '2021-06-08 09:45:24');

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
  `iduser` int(11) DEFAULT NULL,
  `titre` varchar(254) DEFAULT NULL,
  `contenu` varchar(254) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `informations`
--

INSERT INTO `informations` (`idinfo`, `idcorrespondant`, `iduser`, `titre`, `contenu`, `date`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, NULL, 'La pèche', 'Un nouveau champs a été crée au village de Balandougou', NULL, 1, '2021-06-04 18:38:26', '2021-06-04 18:38:26'),
(2, 1, NULL, 'La pèche', 'Un nouveau champs a été crée au village de Balandougou', NULL, 1, '2021-06-04 18:42:28', '2021-06-04 18:42:28'),
(3, 1, NULL, 'La pèche', 'Un nouveau champs a été crée au village de Balandougou', NULL, 1, '2021-06-04 18:46:19', '2021-06-04 18:46:19'),
(4, 1, NULL, 'La pèche', 'Un nouveau champs a été crée au village de Balandougou', NULL, 1, '2021-06-04 18:46:30', '2021-06-04 18:46:30'),
(5, 1, NULL, 'La pèche', 'Un nouveau champs a été crée au village de Balandougou', NULL, 1, '2021-06-04 18:48:57', '2021-06-04 18:48:57'),
(6, 1, NULL, 'La rentrée des classses', 'le nouveau maitre', NULL, 1, '2021-06-04 18:49:40', '2021-06-04 18:49:40');

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
  `idaccreditation` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `pjpasseport` varchar(255) DEFAULT NULL,
  `pjcnib` varchar(255) DEFAULT NULL,
  `pjcartepresse` varchar(255) DEFAULT NULL,
  `pjcnibperprev` varchar(255) DEFAULT NULL,
  `pjpasseportperprev` varchar(255) DEFAULT NULL,
  `pjcarteconsulaire` varchar(255) DEFAULT NULL,
  `visamedia` varchar(255) DEFAULT NULL,
  `lettrerecommendation` varchar(255) DEFAULT NULL,
  `idcorrespondant` int(11) DEFAULT NULL,
  `iddemandeur` int(11) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piecesjointes`
--

INSERT INTO `piecesjointes` (`id`, `idaccreditation`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjcnibperprev`, `pjpasseportperprev`, `pjcarteconsulaire`, `visamedia`, `lettrerecommendation`, `idcorrespondant`, `iddemandeur`, `actif`, `updated_at`, `created_at`) VALUES
(178, 74, 'rapport T1 2020.docx', NULL, 'Recépissé _ Hawa.pdf', 'Recépissé _ Hawa.pdf', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bd_recop_last.sql', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 38, 1, '2021-06-08 09:11:23', '2021-06-08 09:11:23'),
(179, 75, 'rapport T1 2020.docx', NULL, 'Recépissé _ Hawa.pdf', 'Recépissé _ Hawa.pdf', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bd_recop_last.sql', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 38, 1, '2021-06-08 09:12:26', '2021-06-08 09:12:26'),
(180, 76, 'rapport T1 2020.docx', NULL, 'Recépissé _ Hawa.pdf', 'Recépissé _ Hawa.pdf', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bd_recop_last.sql', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 38, 1, '2021-06-08 09:16:44', '2021-06-08 09:16:44'),
(181, 77, 'C:\\xampp\\tmp\\php9E92.tmp', NULL, 'C:\\xampp\\tmp\\php9E94.tmp', 'C:\\xampp\\tmp\\php9E93.tmp', NULL, 'C:\\xampp\\tmp\\php9EA5.tmp', NULL, 'C:\\xampp\\tmp\\php9EA4.tmp', NULL, 'C:\\xampp\\tmp\\php9E91.tmp', NULL, 38, 1, '2021-06-08 09:18:54', '2021-06-08 09:18:54'),
(182, 78, 'rapport T1 2020.docx', NULL, 'Recépissé _ Hawa.pdf', 'Recépissé _ Hawa.pdf', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bd_recop_last.sql', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 38, 1, '2021-06-08 09:19:29', '2021-06-08 09:19:29'),
(183, 79, 'rapport T1 2020.docx', NULL, 'Recépissé _ Hawa.pdf', 'Recépissé _ Hawa.pdf', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bd_recop_last.sql', NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 38, 1, '2021-06-08 09:24:48', '2021-06-08 09:24:48'),
(184, 79, 'bdmeetdoctor.sql', 'Programme d\'activités 2020 Version définitive.docx', NULL, 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, 'rapport T1 2020.docx', NULL, 68, NULL, 1, '2021-06-08 09:31:48', '2021-06-08 09:31:48'),
(185, 79, 'bdmusee.sql', 'Programme d\'activités 2020 Version définitive.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, 69, NULL, 1, '2021-06-08 09:32:53', '2021-06-08 09:32:53'),
(186, 79, 'bdmusee.sql', 'Programme d\'activités 2020 Version définitive.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, 69, NULL, 1, '2021-06-08 09:35:09', '2021-06-08 09:35:09'),
(187, NULL, 'bdmusee.sql', 'Programme d\'activités 2020 Version définitive.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, 69, NULL, 1, '2021-06-08 09:40:22', '2021-06-08 09:40:22'),
(188, NULL, 'Programme d\'activités 2020 Version définitive.docx', 'Recépissé _ Hawa.pdf', NULL, 'bd_recop_last.sql', NULL, NULL, NULL, NULL, 'bdmusee.sql', NULL, 70, NULL, 1, '2021-06-08 09:41:26', '2021-06-08 09:41:26'),
(189, 80, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bdmusee.sql', 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, 'bd_recop_31052021.sql', NULL, 39, 1, '2021-06-08 09:46:37', '2021-06-08 09:46:37'),
(190, 80, 'Programme d\'activités 2020 Version définitive.docx', NULL, 'bdmusee.sql', 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, 'bd_recop_31052021.sql', NULL, 39, 1, '2021-06-08 09:56:20', '2021-06-08 09:56:20');

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
(34, 'poloiii sdfdsfd', 'dalou896', 'lopora1@yahoo.fr', NULL, '$2y$10$HThTu9NnGwbvLwwamb0zOezuzDjP3AP4dDCtbEXkS4D6UKKPYVPY2', 1, 'Correspondant', NULL, '2021-05-29 14:02:07', '2021-05-29 14:02:07'),
(35, 'ramapo lamota', 'GAMZA', 'toulousa@yahoo.fr', NULL, '$2y$10$4Xof8uoLgiHzec3D3KAKfenqxgtxLvoW2gz1.tA4.UKqDo9xJkPUu', 1, 'Correspondant', NULL, '2021-06-01 14:38:24', '2021-06-01 14:38:24'),
(36, 'ramapo lamota', 'GRATARA', 'toulousa2@yahoo.fr', NULL, '$2y$10$lxDyQ4TXQGgGkTMoY9QGdeWO5Dk8P7V9tkHlS8JkBJ9PvgB3Ftm3S', 1, 'Correspondant', NULL, '2021-06-01 14:43:56', '2021-06-01 14:43:56'),
(37, 'dqfqdsf qdfqsdf', 'touralo', 'lolo@yahoo.fr', NULL, '$2y$10$9v1ZiPTMWJ5Mcg2/uLqVxe7z2c0aBJU8YJ2aYhGGfwAyb0VA13TH2', 1, 'Correspondant', NULL, '2021-06-01 15:10:30', '2021-06-01 15:10:30'),
(38, 'dfdfdsf dfdsfdsf', 'galata', 'tali@yahoo.fr', NULL, '$2y$10$i8AvJ276B6fQb4s9AekV..8rD00vQ/TfDtaSa11dzjYbeOJkmdguG', 1, 'Correspondant', NULL, '2021-06-01 15:13:42', '2021-06-01 15:13:42'),
(39, 'dfdfdsf dfdsfdsf', 'ramaza', 'tali5@yahoo.fr', NULL, '$2y$10$LApReScYtW.TNcyLbXYHSOIi2x/gXHZz5TG.g8FsoPYqHJABwbAQ.', 1, 'Correspondant', NULL, '2021-06-01 15:17:06', '2021-06-01 15:17:06'),
(40, 'dfdfdsf dfdsfdsf', 'MACATA', 'tali567@yahoo.fr', NULL, '$2y$10$kR7nP94emprDifvxdwwzOu03X8m26xDVjUoN1KQWaAcFBHYHBEIO6', 1, 'Correspondant', NULL, '2021-06-01 15:23:34', '2021-06-01 15:23:34'),
(41, 'dfdfdsf dfdsfdsf', 'Ramati', 'tali56879@yahoo.fr', NULL, '$2y$10$KNGONPgqLymt/SqGiLSW5eWeX1098KQqR239wz19lKKe8bO6Ffvty', 1, 'Correspondant', NULL, '2021-06-01 15:37:24', '2021-06-01 15:37:24'),
(42, 'dfdfdsf dfdsfdsf', 'taza', 'tali568f79@yahoo.fr', NULL, '$2y$10$u2dwjU.Jo/TC3Sow610qOODWf9uyM4gR5.s4YsgulDYR4zbAvSInK', 1, 'Correspondant', NULL, '2021-06-01 15:43:12', '2021-06-01 15:43:12'),
(43, 'dfdfdsf dfdsfdsf', 'zata', 'tali568f789@yahoo.fr', NULL, '$2y$10$zxoLxzy8XfRz./sjttFru.2/GVfBKTkg0TX8.OAa0F6NOjcxy4tJ6', 1, 'Correspondant', NULL, '2021-06-01 15:44:26', '2021-06-01 15:44:26'),
(44, 'dfdfdsf dfdsfdsf', 'Zampa', 'tali568f7889@yahoo.fr', NULL, '$2y$10$EG96H2Ahpn/8XcaL/0t65OMLF4poDTEAyF4Qvo744kh920zFx41K6', 1, 'Correspondant', NULL, '2021-06-01 15:45:45', '2021-06-01 15:45:45'),
(45, 'dfdfdsf dfdsfdsf', 'taliaoma', 'talliao@yahoo.fr', NULL, '$2y$10$vOiRPqfWYSuzUjDU1bN.QuVZfaKowfohD97UMSmT1OhSsKX6TZZH6', 1, 'Correspondant', NULL, '2021-06-01 15:47:39', '2021-06-01 15:47:39'),
(46, 'dfdfdsf dfdsfdsf', 'tialoma78', 'talliao1@yahoo.fr', NULL, '$2y$10$UJYwIj6MPc.WkEe9YDu9te30nUljytu83WdMKEvigj7UlRGIsnAwa', 1, 'Correspondant', NULL, '2021-06-01 15:53:56', '2021-06-01 15:53:56'),
(47, 'dfdfdsf dfdsfdsf', 'zazaz', 'talliao12@yahoo.fr', NULL, '$2y$10$n49ge8UXTcWuz3l.1nVPHek8Pi6OnD9ptweatjIz/FuMp1szG8nDu', 1, 'Correspondant', NULL, '2021-06-01 15:55:06', '2021-06-01 15:55:06'),
(48, 'dfdfdsf dfdsfdsf', 'Zarata', 'talliao123@yahoo.fr', NULL, '$2y$10$JBiHESrrvCLL9Oh9thqKnunZgMKlu1SvCVTNAijmk6lFKVVKLhUwa', 1, 'Correspondant', NULL, '2021-06-01 15:58:04', '2021-06-01 15:58:04'),
(49, 'KABORE Pierre', 'Tirolama', 'kabore@yahoo.fr', NULL, '$2y$10$/DdlVw28flXZTXN0/8mbA.f8TSNbvD.Gkuk6JH4UYf2TYMAq6xQki', 1, 'Correspondant', NULL, '2021-06-02 10:29:08', '2021-06-02 10:29:08'),
(50, 'KABORE Pierre', 'koli', 'kabore25@yahoo.fr', NULL, '$2y$10$vq1uZlggFqqbs511.kQxZeU8gMuoQ4mVLCEcMoYhd9yaqfLG9j0sW', 1, 'Correspondant', NULL, '2021-06-02 10:37:52', '2021-06-02 10:37:52'),
(51, 'KABORE Pierre', 'Gouloumi', 'kabore256@yahoo.fr', NULL, '$2y$10$nmnbdnAnt9TJ/WwTf10nYOq6p/uKQALa7gNOLn1rTzGqDeAQrmV4O', 1, 'Correspondant', NULL, '2021-06-02 10:41:57', '2021-06-02 10:41:57'),
(52, 'KABORE Pierre', 'kibarou', 'kabore2567@yahoo.fr', NULL, '$2y$10$8VVI2/SEmgpSjK/z6iMFke3fpkCyStnIFWcJVcRFzkCadROOTdyBm', 1, 'Correspondant', NULL, '2021-06-02 10:46:05', '2021-06-02 10:46:05'),
(53, 'ZOULIRA Maladou', 'timbo', 'golola@yahoo.fr', NULL, '$2y$10$WpQfJpx0WanNPLEEURFXv.vZTfgXAHY98AeOmMgzAnsPKwq5.tgJy', 1, 'Correspondant', NULL, '2021-06-02 12:04:03', '2021-06-02 12:04:03'),
(54, 'ZAMPALIGRE Alidou', 'talimao', 'kombo@yahoo.fr', NULL, '$2y$10$r6uTOqDTwfhXW4Fwyp2SKuD6er2VQIq0USp3wZkzXFuyVvPoY69Nu', 1, 'Correspondant', NULL, '2021-06-02 12:42:08', '2021-06-02 12:42:08'),
(55, 'TOURE Alidou', 'tolo', 'boukari@yahoo.fr', NULL, '$2y$10$YbBvkNiQrQituukNKDiEBelNr2TRKNXB709hWvdY8B02w0IIAsjnW', 1, 'Demandeur', NULL, '2021-06-04 12:10:11', '2021-06-04 12:10:11'),
(56, 'TOURE Alimatou', 'Matissa', 'fralik@yahoo.fr', NULL, '$2y$10$Oozck.8.3ps0DaWEgsrTIuO0H4Yi9vmxHryBPG1DIkD3oDgQh6Q1y', 1, 'Demandeur', NULL, '2021-06-04 12:17:19', '2021-06-04 12:17:19'),
(57, 'KOUMBIA Alphonse', 'rafia', 'koumbia@yahoo.fr', NULL, '$2y$10$ZaMVZROB1YnYu4YmvdRVveKeiuQH54FDkzqOZqTPdJ.XkF4Iaxmji', 1, 'Demandeur', NULL, '2021-06-04 14:58:41', '2021-06-04 14:58:41'),
(58, 'DOUMBIA Alidou', 'dozo', 'traore@yahoo.fr', NULL, '$2y$10$5MHjRiOD8P1zCJOQ1BsCDO7ceFoktT/2kIwQZc6jx5mr6Ko4GCEFW', 1, 'Demandeur', NULL, '2021-06-04 15:13:04', '2021-06-04 15:13:04'),
(59, 'OUATTARA SOUNGALO', 'soungalo', 'ouattara@yahoo.fr', NULL, '$2y$10$ElqjhfkVQBM4H2utKr0O0e53cRaqmpK8qhBYKeqBayXdz60kA4Li.', 1, 'Demandeur', NULL, '2021-06-04 18:18:07', '2021-06-04 18:18:07'),
(60, 'SOULAMA Jean  François', 'soulama2020', 'soulama2003@yahoo.fr', NULL, '$2y$10$h5QI6tHDK19JI30LY5XQ5.vCzeo5oblGPrVKVJLf4C2an6lmXc4Fq', 1, 'Demandeur', NULL, '2021-06-06 15:53:43', '2021-06-06 15:53:43'),
(61, 'SOULAMA Jean  François', 'soulama2021', 'soulama2004@yahoo.fr', NULL, '$2y$10$1oA.6ePjfH4j/GnX6yui5edNbuj34Rs.e4Y9gwuL9sozUlQb27KrG', 1, 'Demandeur', NULL, '2021-06-06 15:57:43', '2021-06-06 15:57:43'),
(62, 'SOULAMA Jean  François', 'soulama2022', 'soulama2005@yahoo.fr', NULL, '$2y$10$6MNjJgYBhZ5a3ytg8qNSpOC0/H0fYOCgCUv5WvwDCmirWcl12Ytnq', 1, 'Demandeur', NULL, '2021-06-06 16:00:35', '2021-06-06 16:00:35'),
(63, 'SOULAMA Jean  François', 'soulama2023', 'soulama2006@yahoo.fr', NULL, '$2y$10$4Vq/p/hZ9ilR0vyaNfk8Eew2a0Eu71l93NvsnZAk85sSv4sThbMcS', 1, 'Demandeur', NULL, '2021-06-06 16:06:46', '2021-06-06 16:06:46'),
(64, 'SOULAMA Jean  François', 'soulama2024', 'soulama2007@yahoo.fr', NULL, '$2y$10$666yjnszuPnu1u6pWMEyaOXSAfMg9.WIjgf3W8ImEY.5tvgA9ASn6', 1, 'Demandeur', NULL, '2021-06-06 16:08:08', '2021-06-06 16:08:08'),
(65, 'SOULAMA Jean  François', 'soulama2025', 'soulama2008@yahoo.fr', NULL, '$2y$10$nm6BBAFGOkJrfJ1HbU/peONfeb6a4cXxHcisAjVfcf/hBq80TlGaS', 1, 'Demandeur', NULL, '2021-06-06 16:20:23', '2021-06-06 16:20:23'),
(66, 'SOULAMA Jean  François', 'soulama2026', 'soulama2009@yahoo.fr', NULL, '$2y$10$c86Z3Su9kcuBP7XouzbcqeLdagOBqL4Q89lTxMm0zzVXS.FCta1Ca', 1, 'Demandeur', NULL, '2021-06-06 16:22:59', '2021-06-06 16:22:59'),
(67, 'SOULAMA Jean  François', 'soulama2027', 'soulama2010@yahoo.fr', NULL, '$2y$10$5hCo5xZd1ezFkAv3wPlFnOo8Z3BPi1OIgUJK9CjjwSx6ADbM.8Nym', 1, 'Demandeur', NULL, '2021-06-06 16:25:40', '2021-06-06 16:25:40'),
(70, 'SOULAMA Jean  François', 'soulama2070', 'soulama200005@yahoo.fr', NULL, '$2y$10$aMiVwZ0AqKrp8SIkj4LAjOjDGj9k5BrHLSklAjDrFb.AJ78riNCvq', 1, 'Demandeur', NULL, '2021-06-06 16:36:32', '2021-06-06 16:36:32'),
(71, 'TOUMBIA Arnaud', 'toumbia2020', 'toumbia@yahoo.fr', NULL, '$2y$10$Ex33MY0IMFaFLFoStl4UbuZK4MN45FgP.jZXETQfLWJVzJbQI9aey', 1, 'Demandeur', NULL, '2021-06-07 03:42:15', '2021-06-07 03:42:15'),
(72, 'TOUMBIA Arnaud', 'toumbkia2020', 'toumbika@yahoo.fr', NULL, '$2y$10$BcA.hGy6BIwGEkSgdXBSHOcaFDQfwny3lxctRDQxpzuTLx908pJey', 1, 'Demandeur', NULL, '2021-06-07 03:44:47', '2021-06-07 03:44:47'),
(73, 'TOUMBIA Arnaud', 'toumbhkia2020', 'toumbikka@yahoo.fr', NULL, '$2y$10$0cmgVR3mp6CQDSZyiHmJ1.Z7H8K.SmYFuBcbQVn3FX7raCZ/fk7q.', 1, 'Demandeur', NULL, '2021-06-07 03:50:39', '2021-06-07 03:50:39'),
(74, 'TOUMBIA Arnaud', 'toumbhpkia2020', 'toumbikpka@yahoo.fr', NULL, '$2y$10$.9djDABMQb36vaYMulUOjujnTh54bAkOGV8duovb/uDlx9QhYdcim', 1, 'Demandeur', NULL, '2021-06-07 03:52:57', '2021-06-07 03:52:57'),
(75, 'ROUAMBA Paul', 'zoum', 'rolo@yahoo.fr', NULL, '$2y$10$s8jRoyBtcCcLSfhOHYco9.VWY9O2tVaQkQOCEYLUyprn.q3RZpaDy', 1, 'Demandeur', NULL, '2021-06-07 04:36:11', '2021-06-07 04:36:11'),
(76, 'ROUAMBA Paul', 'zouma', 'rolog@yahoo.fr', NULL, '$2y$10$yzekudjNfr6c4x2DQ.bBy.1Yw9GJgxjrNTOfhBwo6E.zNI1u0xOaW', 1, 'Demandeur', NULL, '2021-06-07 04:53:32', '2021-06-07 04:53:32'),
(77, 'SAMBORE Alain', 'sambore', 'souga@yahoo.fr', NULL, '$2y$10$Ex/H5Zz.Zf0EymThmuX7EeJg9si40/WXRIoKTfhlXwNf2j5g1gh26', 1, 'Demandeur', NULL, '2021-06-07 11:28:56', '2021-06-07 11:28:56'),
(78, 'OUEDRAOGO Paul', 'paulin', 'pauli@yahoo.fr', NULL, '$2y$10$IQ0wjiE0J1jGECKVg4d2pejg5QmsbzBOjUIaX2YLCYXyeoZe.qg72', 1, 'Demandeur', NULL, '2021-06-07 12:19:23', '2021-06-07 12:19:23'),
(79, 'DIARRA Arnaud', 'ibrat', 'diarra@yahoo.fr', NULL, '$2y$10$vsQ8SoWbWyblxs3azqCZqOb4o6uqBxZeUlNZ6aphZRikelo.49wGK', 1, 'Demandeur', NULL, '2021-06-07 15:50:43', '2021-06-07 15:50:43'),
(80, 'ZOUMANA Issoufou', 'Zoumi', 'zoum@yahoo.fr', NULL, '$2y$10$HF884lnecnGC1vPss4fPA.L0HKgzOnP4qBHn7O9JEMlzZTwT1QEOy', 1, 'Demandeur', NULL, '2021-06-08 04:15:47', '2021-06-08 04:15:47'),
(81, 'tira hello', 'tourya', 'tira@yahoo.fr', NULL, '$2y$10$OQY7enOeAixMy/h8o4waROIRa/qgQ1z485cpv1mwV1Wg7QHF5rMyC', 1, 'Demandeur', NULL, '2021-06-08 04:42:17', '2021-06-08 04:42:17'),
(83, 'njbjhg jhjkhj', 'BJHIHJ', 'fratrttt@yahoo.fr', NULL, '$2y$10$n33furmP2ZH5Tf/LLpe/vugJEfQVsD0QLTnv.LxdIG24KzVR0vECO', 1, 'Demandeur', NULL, '2021-06-08 05:12:16', '2021-06-08 05:12:16'),
(84, 'DIALLO Ahmed', 'galou', 'diallo12@yahoo.fr', NULL, '$2y$10$so/BEyKo6Bm1bHEVrN7v.ubDwoakFXr2WN/Cizp7we0TA3PJEBL.O', 1, 'Demandeur', NULL, '2021-06-08 08:39:22', '2021-06-08 08:39:22'),
(87, 'SOUMALA Jean', 'bonbon85', 'pokali1@yahoo.fr', NULL, '$2y$10$TeEpkLGsbGY5tPWKADBK4.jc2oQdmx/oPUyr.DZjhy09OWaoEAXu2', 1, 'Correspondant', NULL, '2021-06-08 09:35:09', '2021-06-08 09:35:09'),
(88, 'SOUMALA Jean', 'gazio', 'pokali12@yahoo.fr', NULL, '$2y$10$YoW56etazWwG/qwHlOJWC.L37Ah0zHyxeI0S8T3CLzhNeYkZgs206', 1, 'Correspondant', NULL, '2021-06-08 09:41:26', '2021-06-08 09:41:26'),
(89, 'DOUMBO Paulin', 'doumbo2021', 'doumbo@yahoo.fr', NULL, '$2y$10$YTt2HXaVhdm5A15RI0xcAuOtf1q6HEr5Qbphfv6hhXPXVfX/ImiKG', 1, 'Demandeur', NULL, '2021-06-08 09:45:24', '2021-06-08 09:45:24');

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
,`id` int(11)
,`iddemandeur` int(11)
,`titreevenement` varchar(254)
,`lieuevenement` varchar(254)
,`datedebut` date
,`datefin` date
,`moyentransport` varchar(254)
,`immatriculation` varchar(254)
,`listemateriel` varchar(254)
,`valider` tinyint(1)
,`membresequipe` varchar(254)
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
,`fonction` varchar(254)
,`cv` varchar(254)
,`numcartepresse` int(11)
,`photo` varchar(254)
,`visamedia` varchar(254)
,`created_at` datetime
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
-- Structure de la vue `vueaccreditation`
--
DROP TABLE IF EXISTS `vueaccreditation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccreditation`  AS  select `ac`.`idaccreditation` AS `idaccreditation`,`ac`.`idaccreditation` AS `id`,`ac`.`iddemandeur` AS `iddemandeur`,`ac`.`titreevenement` AS `titreevenement`,`ac`.`lieuevenement` AS `lieuevenement`,`ac`.`datedebut` AS `datedebut`,`ac`.`datefin` AS `datefin`,`ac`.`moyentransport` AS `moyentransport`,`ac`.`immatriculation` AS `immatriculation`,`ac`.`listemateriel` AS `listemateriel`,`ac`.`valider` AS `valider`,`ac`.`membresequipe` AS `membresequipe`,`d`.`actif` AS `actif`,`d`.`nom` AS `nomdemandeur`,`d`.`prenom` AS `prenomdemandeur`,`d`.`telephone` AS `telephone`,`d`.`iduser` AS `iduser`,`r`.`idregion` AS `idregion`,`ac`.`CREATED_AT` AS `created_at`,`r`.`nomregion` AS `nomregion`,`pj`.`id` AS `idpiecesjointes`,`ar`.`idaccrediregion` AS `idaccrediregion` from (((((`demandeur` `d` join `accreditation` `ac`) join `users` `u`) join `region` `r`) join `accrediregion` `ar`) join `piecesjointes` `pj`) where ((`d`.`iddemandeur` = `ac`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`) and (`ar`.`idregion` = `r`.`idregion`) and (`ar`.`idaccreditation` = `ac`.`idaccreditation`) and (`pj`.`idaccreditation` = `ac`.`idaccreditation`) and (`ar`.`actif` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`iduser` AS `iduser`,`c`.`nom` AS `nomcorrespondant`,`c`.`typecorrespondant` AS `typecorrespondant`,`c`.`origine` AS `originecorrespondant`,`c`.`region` AS `region`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`cnib` AS `cnibcorrespondant`,`c`.`passeport` AS `passportcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`telephone2` AS `telephone2correspondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`c`.`organe` AS `organe`,`c`.`fonction` AS `fonction`,`c`.`cv` AS `cv`,`c`.`numcartepresse` AS `numcartepresse`,`c`.`photo` AS `photo`,`c`.`visamedia` AS `visamedia`,`c`.`CREATED_AT` AS `created_at`,`c`.`refjournal` AS `refjournal`,`c`.`parcourspro` AS `parcourspro`,`c`.`pjcartepresse` AS `pjcartepresse`,`c`.`pjpasseport` AS `pjpasseport`,`c`.`pjcnib` AS `pjcnib`,`c`.`actif` AS `actif` from (`correspondant` `c` join `users` `u`) where (`c`.`iduser` = `u`.`id`) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinformation`  AS  select `i`.`idinfo` AS `idinfo`,`i`.`iduser` AS `iduser`,`i`.`titre` AS `titreinfo`,`i`.`contenu` AS `contenuinfo`,`i`.`actif` AS `actif`,`i`.`CREATED_AT` AS `CREATED_AT`,`c`.`idcorrespondant` AS `idcorrespondant`,`c`.`nom` AS `nomcorrespondant`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`telephone1` AS `telephonecorrespondant`,`c`.`mail1` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`m`.`idmedia` AS `idmedia`,`m`.`nommedia` AS `media`,`t`.`libelle` AS `typepresse` from (((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) join `informations` `i`) where ((`c`.`idcorrespondant` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `p`.`IDMEDIAPRESSE`) and (`t`.`idtype` = `p`.`IDMEDIAPRESSE`) and (`i`.`idinfo` = `c`.`idcorrespondant`)) ;

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
  MODIFY `idaccrediregion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `iddemandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

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

--
-- Contraintes pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  ADD CONSTRAINT `fk_idaccreditation` FOREIGN KEY (`idaccreditation`) REFERENCES `accreditation` (`idaccreditation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
