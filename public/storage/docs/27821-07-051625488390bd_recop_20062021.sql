-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 20 juin 2021 à 23:07
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
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `lieuevenement` varchar(255) DEFAULT NULL,
  `titreevenement` varchar(255) NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
(164, 7, 142, '2021-06-07', '2021-06-25', 'marché', 'la bonne bouffe', 1, '2021-06-16 05:11:31', '2021-06-16 05:11:31'),
(165, 1, 142, '2021-06-15', '2021-06-18', 'la place de la nation', 'le reveil de la personne', 1, '2021-06-16 05:12:19', '2021-06-16 05:12:19'),
(166, 9, 148, '2021-06-10', '2021-06-18', 'Le village de Tchiara', 'le village de gnampo', 1, '2021-06-16 15:09:48', '2021-06-16 15:09:48'),
(167, 11, 148, '2021-06-15', '2021-06-18', 'le plateau', 'la pèche au village', 1, '2021-06-16 15:10:41', '2021-06-16 15:10:41'),
(168, 7, 149, '2021-06-08', '2021-07-02', 'le plateau', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 04:19:59', '2021-06-17 04:19:59'),
(169, 7, 150, '2021-06-08', '2021-07-02', 'le plateau', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 04:34:46', '2021-06-17 04:34:46'),
(170, 7, 151, '2021-06-08', '2021-07-02', 'le plateau', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 04:35:00', '2021-06-17 04:35:00'),
(171, 3, 152, '2021-06-15', '2021-06-26', 'marche', 'la danse du chef', 1, '2021-06-17 04:37:30', '2021-06-17 04:37:30'),
(172, 3, 153, '2021-06-15', '2021-06-26', 'marche', 'la danse du chef', 1, '2021-06-17 04:51:47', '2021-06-17 04:51:47'),
(173, 8, 153, '2021-06-05', '2021-07-02', 'Le village de Tchiara', 'la restauration', 1, '2021-06-17 04:52:15', '2021-06-17 04:52:15'),
(174, 7, 154, '2021-06-08', '2021-06-11', 'village de Tiara', 'un bon petit', 1, '2021-06-17 04:55:11', '2021-06-17 04:55:11'),
(175, 7, 155, '2021-06-08', '2021-06-11', 'village de Tiara', 'un bon petit', 1, '2021-06-17 05:00:46', '2021-06-17 05:00:46'),
(176, 1, 155, '2021-06-08', '2021-06-03', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:01:07', '2021-06-17 05:01:07'),
(177, 4, 156, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:05:14', '2021-06-17 05:05:14'),
(178, 4, 157, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:20:11', '2021-06-17 05:20:11'),
(179, 4, 158, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:20:56', '2021-06-17 05:20:56'),
(180, 4, 159, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:22:47', '2021-06-17 05:22:47'),
(181, 4, 160, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:25:39', '2021-06-17 05:25:39'),
(182, 4, 161, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:26:09', '2021-06-17 05:26:09'),
(183, 4, 162, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:27:07', '2021-06-17 05:27:07'),
(184, 4, 163, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:27:17', '2021-06-17 05:27:17'),
(185, 4, 164, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:27:40', '2021-06-17 05:27:40'),
(186, 4, 165, '2021-06-15', '2021-06-09', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-17 05:28:27', '2021-06-17 05:28:27'),
(187, 4, 166, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:32:51', '2021-06-17 05:32:51'),
(188, 4, 167, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:39:02', '2021-06-17 05:39:02'),
(189, 4, 168, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:40:46', '2021-06-17 05:40:46'),
(190, 4, 169, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:43:03', '2021-06-17 05:43:03'),
(191, 4, 170, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:44:07', '2021-06-17 05:44:07'),
(192, 4, 171, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:45:58', '2021-06-17 05:45:58'),
(193, 4, 172, '2021-06-09', '2021-06-29', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 05:57:25', '2021-06-17 05:57:25'),
(194, 2, 172, '2021-06-16', '2021-06-19', 'cascades', 'la gazouillère', 1, '2021-06-17 05:58:02', '2021-06-17 05:58:02'),
(195, 1, 172, '2021-06-02', '2021-06-22', 'ezdfe', 'le vieux mossi', 1, '2021-06-17 05:58:39', '2021-06-17 05:58:39'),
(196, 1, 173, '2021-06-08', '2021-06-25', 'gaoua', 'La fièvre est montée', 1, '2021-06-17 06:03:33', '2021-06-17 06:03:33'),
(197, 1, 173, '2021-06-15', '2021-06-23', 'le plateau', 'la chasse au peroquet', 1, '2021-06-17 06:04:16', '2021-06-17 06:04:16'),
(198, 1, 174, '2021-06-23', '2021-06-22', 'le premier', 'La maison du siècle', 1, '2021-06-17 06:16:54', '2021-06-17 06:16:54'),
(199, 1, 175, '2021-06-08', '2021-06-24', 'ouagadougou', 'la vision du peuple', 1, '2021-06-17 06:34:08', '2021-06-17 06:34:08'),
(200, 1, 176, '2021-06-15', '2021-06-18', 'Bobo Dioulasso', 'le village de kilimandjaro', 0, '2021-06-17 07:03:08', '2021-06-17 07:03:08'),
(201, 1, 176, '2021-06-16', '2021-06-19', 'ouagadougou', 'le village de mankoro', 0, '2021-06-17 07:03:16', '2021-06-17 07:03:16'),
(202, 1, 176, '2021-06-16', '2021-06-25', 'ouagadougou', 'la fin des temps', 1, '2021-06-17 07:02:56', '2021-06-17 07:02:56'),
(203, 1, 177, '2021-06-08', '2021-07-02', 'ouagadougou', 'la coupe du foot des euros', 1, '2021-06-17 07:12:32', '2021-06-17 07:12:32'),
(204, 1, 177, '2021-06-09', '2021-06-24', 'maison', 'la dernière rencontre', 1, '2021-06-17 07:13:55', '2021-06-17 07:13:55'),
(205, 9, 178, '2021-06-09', '2021-06-25', 'la place de la nation', 'le village de gnampo', 1, '2021-06-17 07:29:34', '2021-06-17 07:29:34'),
(206, 1, 179, '2021-06-09', '2021-06-24', 'la region', 'la chasse des komodos', 1, '2021-06-17 07:33:35', '2021-06-17 07:33:35'),
(207, 1, 179, '2021-06-11', '2021-06-16', 'maison', 'le go', 1, '2021-06-17 07:38:19', '2021-06-17 07:38:19'),
(208, 1, 180, '2021-06-15', '2021-06-24', 'ouagadougou', 'la gazouillère', 1, '2021-06-18 07:43:54', '2021-06-18 07:43:54'),
(209, 8, 181, '2021-06-08', '2021-06-25', 'la place de la nation', 'le tour du faso', 0, '2021-06-18 17:29:14', '2021-06-18 17:29:14'),
(210, 3, 181, '2021-06-08', '2021-06-23', 'palais du roi', 'le faux depart du mogho naaba', 0, '2021-06-18 15:51:05', '2021-06-18 15:51:05'),
(211, 1, 182, '2021-06-09', '2021-06-25', 'champs du village', 'la prochaine recolte du village', 1, '2021-06-18 17:06:43', '2021-06-18 17:06:43'),
(212, 1, 183, '2021-06-09', '2021-06-25', 'champs du village', 'la prochaine recolte du village', 1, '2021-06-18 17:09:00', '2021-06-18 17:09:00'),
(213, 1, 183, '2021-06-09', '2021-06-27', 'la place de la nation', 'la nouvelle vision', 1, '2021-06-18 17:09:31', '2021-06-18 17:09:31'),
(214, 1, 184, '2021-06-16', '2021-06-26', 'la place de la nation', 'la nouvelle villa', 1, '2021-06-18 17:13:20', '2021-06-18 17:13:20'),
(215, 1, 184, '2021-06-09', '2021-07-02', 'champs du village', 'le village de gnampo', 1, '2021-06-18 17:29:34', '2021-06-18 17:29:34'),
(216, 1, 184, '2021-06-09', '2021-07-02', 'champs du village', 'le village de gnampo', 1, '2021-06-18 17:29:50', '2021-06-18 17:29:50'),
(217, 3, 185, '2021-06-19', '2021-06-19', 'OUAGADOUGOU', 'TEST VALIDATOR', 1, '2021-06-18 17:38:30', '2021-06-18 17:38:30'),
(218, 3, 186, '2021-06-20', '2021-06-20', 'OUAGADOUGOU', 'TEST PLATEFORME', 1, '2021-06-18 17:40:59', '2021-06-18 17:40:59'),
(219, 1, 187, '2021-06-02', '2021-06-23', 'la place de la nation', 'la region des cascade', 1, '2021-06-19 08:48:18', '2021-06-19 08:48:18'),
(220, 1, 187, '2021-06-08', '2021-06-26', 'le village de pow', 'la mairie de la ville de kaya', 1, '2021-06-19 09:01:50', '2021-06-19 09:01:50'),
(221, 3, 188, '2021-06-08', '2021-06-25', 'le champ', 'La ville de sya', 0, '2021-06-19 09:29:42', '2021-06-19 09:29:42'),
(222, 2, 188, '2021-06-10', '2021-06-25', 'Village de kilimandjaro', 'la montagne de hervé', 0, '2021-06-19 09:29:51', '2021-06-19 09:29:51'),
(223, 10, 188, '2021-06-08', '2021-06-17', 'ouahigouya', 'la revision de la leçon', 1, '2021-06-19 09:21:58', '2021-06-19 09:21:58'),
(224, 6, 188, '2021-06-09', '2021-06-24', 'la plaine', 'le bouton', 1, '2021-06-19 09:27:36', '2021-06-19 09:27:36'),
(225, 8, 188, '2021-06-08', '2021-06-24', 'la foret', 'le règne de molokoye', 1, '2021-06-19 09:29:31', '2021-06-19 09:29:31'),
(226, 7, 188, '2021-06-08', '2021-06-26', 'maison', 'la boucle du nord', 0, '2021-06-19 09:51:09', '2021-06-19 09:51:09'),
(227, 1, 188, '2021-06-16', '2021-06-25', 'la revolution', 'la nouvelle vision', 1, '2021-06-19 10:08:50', '2021-06-19 10:08:50'),
(228, 12, 189, '2021-06-08', '2021-06-25', 'la roue', 'la saison des pluies', 1, '2021-06-19 10:32:19', '2021-06-19 10:32:19'),
(229, 11, 189, '2021-06-08', '2021-06-25', 'le plateau', 'la societe la plus retenue', 1, '2021-06-19 10:33:12', '2021-06-19 10:33:12'),
(230, 2, 189, '2021-06-08', '2021-06-26', 'le terrain de football', 'la bonne chasse', 0, '2021-06-19 10:34:04', '2021-06-19 10:34:04'),
(231, 1, 189, '2021-06-09', '2021-06-17', 'laroue', 'le nouveau petit de la ruine', 1, '2021-06-19 10:36:35', '2021-06-19 10:36:35'),
(232, 11, 190, '2021-06-09', '2021-06-25', 'le marché', 'la fin de la peche', 0, '2021-06-19 18:14:41', '2021-06-19 18:14:41'),
(233, 2, 190, '2021-06-11', '2021-06-25', 'le village', 'la bonne jauge de la personne', 1, '2021-06-19 18:08:47', '2021-06-19 18:08:47'),
(234, 3, 190, '2021-06-16', '2021-06-17', 'Village de kilimandjaro', 'le bon petit', 1, '2021-06-19 18:11:31', '2021-06-19 18:11:31'),
(235, 3, 190, '2021-06-16', '2021-06-17', 'Village de kilimandjaro', 'le bon petit', 1, '2021-06-19 18:12:46', '2021-06-19 18:12:46'),
(236, 3, 190, '2021-06-16', '2021-06-17', 'Village de kilimandjaro', 'le bon petit', 0, '2021-06-19 18:15:14', '2021-06-19 18:15:14'),
(237, 3, 190, '2021-06-16', '2021-06-17', 'Village de kilimandjaro', 'le bon petit', 0, '2021-06-19 18:14:48', '2021-06-19 18:14:48'),
(238, 3, 190, '2021-06-16', '2021-06-17', 'Village de kilimandjaro', 'le bon petit', 0, '2021-06-19 18:14:44', '2021-06-19 18:14:44'),
(239, 1, 191, '2021-06-11', '2021-06-10', 'solomani', 'la bonne chasse', 1, '2021-06-20 05:57:52', '2021-06-20 05:57:52'),
(240, 1, 191, '2021-06-02', '2021-06-10', '2415', '454', 1, '2021-06-20 06:17:54', '2021-06-20 06:17:54'),
(241, 1, 192, '2021-06-09', '2021-06-17', '5456', '324545', 1, '2021-06-20 06:28:04', '2021-06-20 06:28:04'),
(242, 1, 192, '2021-06-01', '2021-06-18', '5454', '5454', 1, '2021-06-20 06:31:35', '2021-06-20 06:31:35'),
(243, 1, 192, '2021-06-15', '2021-06-23', '45545', '45', 1, '2021-06-20 06:34:14', '2021-06-20 06:34:14'),
(244, 1, 193, '2021-06-10', '2021-06-10', '45454', '548787', 0, '2021-06-20 06:39:34', '2021-06-20 06:39:34'),
(245, 1, 193, '2021-06-17', '2021-06-16', 'sjdskqj', 'hjsdkjhsd', 1, '2021-06-20 06:42:22', '2021-06-20 06:42:22'),
(246, 1, 194, '2021-06-16', '2021-06-24', 'lama 1225', 'la gazouillère', 1, '2021-06-20 07:01:40', '2021-06-20 07:01:40'),
(247, 1, 194, '2021-06-23', '2021-06-10', '1455', 'le village de kilimandjaro', 0, '2021-06-20 07:02:08', '2021-06-20 07:02:08'),
(248, 1, 195, '2021-06-03', '2021-06-26', 'la plaine', 'la bonne cavalerie', 1, '2021-06-20 12:55:56', '2021-06-20 12:55:56'),
(249, 1, 195, '2021-06-09', '2021-06-25', 'marché', 'le retour des personnes', 1, '2021-06-20 12:56:27', '2021-06-20 12:56:27'),
(250, 1, 196, '2021-06-03', '2021-06-02', 'Bobo Dioulasso', 'SNC 2021', 1, '2021-06-20 14:35:40', '2021-06-20 14:35:40'),
(251, 3, 197, '2021-06-08', '2021-06-26', 'ouagadougou', 'la ville de zoula', 1, '2021-06-20 16:21:44', '2021-06-20 16:21:44'),
(252, 3, 198, '2021-12-15', '2021-12-22', 'Bobo Dioulasso', 'SNC 2021', 1, '2021-06-20 16:24:13', '2021-06-20 16:24:13'),
(253, 1, 199, '2021-03-12', '2021-03-17', 'Bobo Dioulasso', 'SNC 2021', 1, '2021-06-20 16:55:21', '2021-06-20 16:55:21'),
(254, 2, 199, '2021-06-14', '2021-06-21', 'Banfora', 'SIAO', 1, '2021-06-20 16:56:53', '2021-06-20 16:56:53'),
(255, 1, 200, '2021-05-28', '2021-05-03', 'Bobo Dioulasso', 'SNC 2021', 1, '2021-06-20 17:01:27', '2021-06-20 17:01:27'),
(256, 1, 200, '2021-02-15', '2021-02-21', 'Dédougou', 'SNC 2021', 1, '2021-06-20 17:02:33', '2021-06-20 17:02:33'),
(257, 1, 201, '2021-06-11', '2021-06-17', 'ouagadougou', 'TEST PLATEFORME', 1, '2021-06-20 17:07:57', '2021-06-20 17:07:57'),
(258, 1, 202, '2021-06-11', '2021-06-17', 'ouagadougou', 'TEST PLATEFORME', 1, '2021-06-20 17:13:21', '2021-06-20 17:13:21'),
(259, 1, 203, '2021-06-11', '2021-06-17', 'ouagadougou', 'TEST PLATEFORME', 1, '2021-06-20 17:13:54', '2021-06-20 17:13:54'),
(260, 7, 203, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'erzrfze', 1, '2021-06-20 17:15:03', '2021-06-20 17:15:03'),
(261, 7, 203, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'erzrfze', 1, '2021-06-20 17:16:00', '2021-06-20 17:16:00'),
(262, 7, 203, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'erzrfze', 1, '2021-06-20 17:21:05', '2021-06-20 17:21:05'),
(263, 7, 203, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'erzrfze', 1, '2021-06-20 17:21:09', '2021-06-20 17:21:09'),
(264, 7, 203, '2021-06-09', '2021-06-25', 'Bobo Dioulasso', 'erzrfze', 1, '2021-06-20 17:21:25', '2021-06-20 17:21:25'),
(265, 1, 204, '2021-06-10', '2021-06-17', 'la place de la nation', 'le village de gnampo', 1, '2021-06-20 18:02:00', '2021-06-20 18:02:00'),
(266, 1, 205, '2021-06-10', '2021-06-17', 'la place de la nation', 'le village de gnampo', 1, '2021-06-20 18:03:07', '2021-06-20 18:03:07'),
(267, 1, 205, '2021-06-17', '2021-06-27', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-20 18:03:31', '2021-06-20 18:03:31'),
(268, 1, 205, '2021-06-09', '2021-06-27', 'ouagadougou', 'le village de kilimandjaro', 1, '2021-06-20 18:03:47', '2021-06-20 18:03:47'),
(269, 3, 206, '2021-06-25', '2021-06-25', 'OUAGADOUDOU', 'GRANDE NUIT GALIAN', 1, '2021-06-20 18:10:54', '2021-06-20 18:10:54'),
(270, 3, 206, '2021-06-21', '2021-06-21', 'LOUMBILA', 'VALIDATION RECOP', 1, '2021-06-20 18:11:11', '2021-06-20 18:11:11'),
(271, 9, 207, '2021-06-02', '2021-06-26', 'la place de la nation', 'la nouvelle pèche du village kolikoro', 1, '2021-06-20 19:38:11', '2021-06-20 19:38:11'),
(272, 1, 208, '2021-06-10', '2021-06-10', 'Bobo Dioulasso', 'le village de gnampo', 1, '2021-06-20 20:04:12', '2021-06-20 20:04:12'),
(273, 1, 208, '2021-06-10', '2021-06-30', 'la place de la nation', 'la gazouillère', 1, '2021-06-20 20:06:16', '2021-06-20 20:06:16'),
(274, 1, 209, '2021-06-10', '2021-06-17', 'ouagadougou', 'la gazouillère', 1, '2021-06-20 20:08:15', '2021-06-20 20:08:15'),
(275, 1, 210, '2021-06-23', '2021-06-23', 'ouagadougou', 'la nouvelle pèche du village kolikoro', 1, '2021-06-20 20:12:21', '2021-06-20 20:12:21'),
(276, 1, 210, '2021-06-24', '2021-06-09', 'Le village de Tchiara', 'la nouvelle pèche du village kolikoro', 1, '2021-06-20 20:13:19', '2021-06-20 20:13:19'),
(277, 1, 211, '2021-06-23', '2021-06-09', 'la place de la nation', 'le village de gnampo', 1, '2021-06-20 20:19:00', '2021-06-20 20:19:00');

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
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `valider` tinyint(1) DEFAULT '0',
  `transfer` tinyint(1) DEFAULT NULL,
  `datetransfer` varchar(255) DEFAULT NULL,
  `datevalider` varchar(255) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `accreditation`
--

INSERT INTO `accreditation` (`idaccreditation`, `iddemandeur`, `iduser`, `titreevenement`, `datedebut`, `datefin`, `moyentransport`, `immatriculation`, `listemateriel`, `membresequipe`, `actif`, `valider`, `transfer`, `datetransfer`, `datevalider`, `CREATED_AT`, `UPDATED_AT`) VALUES
(116, 147, NULL, 'la roue de la miroire', '2021-06-08', '2021-06-25', 'RAV4', '78542369', 'Micro\r\nOrdinateur', NULL, 1, 1, 1, 'Fri, 18 Jun 2021 05:21:34', 'Fri, 18 Jun 2021 07:22:00', '2021-06-12 13:02:53', '2021-06-18 07:22:08'),
(117, 148, 187, 'la vision de deni', '2021-06-09', '2021-07-02', 'RAV4', '54646', 'Radio walkman', NULL, 1, 1, 1, 'Fri, 18 Jun 2021 05:36:18', 'Fri, 18 Jun 2021 07:25:23', '2021-06-12 14:58:51', '2021-06-18 07:26:43'),
(120, NULL, NULL, 'la nouvelle danse des kima', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:03:12', '2021-06-13 15:03:12'),
(121, NULL, NULL, 'la nouvelle danse des kimajourou', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:05:24', '2021-06-13 15:05:24'),
(122, NULL, NULL, 'la nouvelle danse des kimajourou', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:15:55', '2021-06-13 15:15:55'),
(123, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:16:24', '2021-06-13 15:16:24'),
(124, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:17:55', '2021-06-13 15:17:55'),
(125, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:18:18', '2021-06-13 15:18:18'),
(126, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:19:02', '2021-06-13 15:19:02'),
(127, NULL, NULL, 'un bon ouvrier', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:20:05', '2021-06-13 15:20:05'),
(128, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:25:47', '2021-06-13 15:25:47'),
(129, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:26:20', '2021-06-13 15:26:20'),
(130, NULL, NULL, 'la suite au territoire', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:28:21', '2021-06-13 15:28:21'),
(131, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:29:04', '2021-06-13 15:29:04'),
(132, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:40:32', '2021-06-13 15:40:32'),
(133, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:42:20', '2021-06-13 15:42:20'),
(134, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:43:36', '2021-06-13 15:43:36'),
(135, NULL, NULL, 'la suite au territoire du nord', '2021-06-02', '2021-06-18', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 15:44:11', '2021-06-13 15:44:11'),
(136, NULL, NULL, 'le village de kilimandjaro', '2021-06-09', '2021-06-26', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-13 16:16:50', '2021-06-13 16:16:50'),
(137, 151, 190, 'la nouvelle danse des kima', '2021-06-08', '2021-06-25', 'Pick up', '785525', 'Camera', NULL, 1, 1, 1, 'Fri, 18 Jun 2021 05:50:39', 'Sun, 20 Jun 2021 20:31:43', '2021-06-14 11:22:48', '2021-06-20 20:31:48'),
(138, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-14 11:33:23', '2021-06-14 11:33:23'),
(139, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-14 11:44:09', '2021-06-14 11:44:09'),
(140, NULL, NULL, 'la revolte des villageois', '2021-06-08', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-14 11:44:42', '2021-06-14 11:44:42'),
(141, 152, 191, 'le vieux mossi', '2021-06-08', '2021-06-10', 'vehicule', '7787', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-14 12:13:20', '2021-06-14 12:15:47'),
(142, 156, 195, 'la bonne bouffe', '2021-06-07', '2021-06-25', 'Velo', '55445', 'Camera', NULL, 1, 0, 0, NULL, NULL, '2021-06-16 05:11:30', '2021-06-16 05:12:41'),
(156, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', 'Vehicule RAV4', '555', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:05:13', '2021-06-17 05:05:33'),
(157, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', 'Vehicule RAV4', '555', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:20:11', '2021-06-17 05:20:14'),
(158, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', 'Vehicule RAV4', '555', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:20:56', '2021-06-17 05:20:59'),
(159, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', 'Vehicule RAV4', '555', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:22:47', '2021-06-17 05:22:50'),
(160, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', 'Vehicule RAV4', '555', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:25:39', '2021-06-17 05:25:41'),
(161, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:26:09', '2021-06-17 05:26:09'),
(162, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:27:06', '2021-06-17 05:27:06'),
(163, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', NULL, NULL, NULL, NULL, 1, 1, 1, 'Fri, 18 Jun 2021 05:58:03', 'Fri, 18 Jun 2021 07:28:32', '2021-06-17 05:27:17', '2021-06-18 07:30:47'),
(164, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:27:40', '2021-06-17 05:27:40'),
(165, 157, 196, 'la nouvelle pèche du village kolikoro', '2021-06-15', '2021-06-09', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:28:27', '2021-06-17 05:28:27'),
(166, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', 'Vehicule RAV4', '78452136', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:32:51', '2021-06-17 05:33:12'),
(167, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:39:01', '2021-06-17 05:39:01'),
(168, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:40:46', '2021-06-17 05:40:46'),
(169, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:43:03', '2021-06-17 05:43:03'),
(170, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:44:07', '2021-06-17 05:44:07'),
(171, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:45:58', '2021-06-17 05:45:58'),
(172, 157, 196, 'le village de gnampo', '2021-06-09', '2021-06-29', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 05:57:25', '2021-06-17 05:57:25'),
(173, NULL, 196, 'La fièvre est montée', '2021-06-08', '2021-06-25', 'Vehicule RAV4', '78523695', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 06:03:33', '2021-06-17 06:12:21'),
(174, NULL, 196, 'La maison du siècle', '2021-06-23', '2021-06-22', 'Vehicule RAV4', '78452136', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 06:16:54', '2021-06-17 06:19:33'),
(175, 157, 196, 'la vision du peuple', '2021-06-08', '2021-06-24', 'Vehicule RAV4', '78523695', 'Micro', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 06:34:07', '2021-06-17 06:34:31'),
(176, 157, 196, 'le village de kilimandjaro', '2021-06-15', '2021-06-18', 'Vehicule RAV4', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 07:01:45', '2021-06-17 07:03:30'),
(177, 158, 197, 'la coupe du foot des euros', '2021-06-08', '2021-07-02', 'Vehicule RAV4', '788965', 'Micro ordinateur', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 07:12:32', '2021-06-17 07:14:30'),
(178, 161, 199, 'le village de gnampo', '2021-06-09', '2021-06-25', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '2021-06-17 07:29:34', '2021-06-17 07:29:34'),
(179, 162, 200, 'la chasse des komodos', '2021-06-09', '2021-06-24', 'Vehicule RAV4', '2544565', 'Ordinateur', NULL, 1, 0, 0, NULL, NULL, '2021-06-17 07:33:35', '2021-06-17 07:38:44'),
(180, 163, 201, 'la gazouillère', '2021-06-15', '2021-06-24', 'Vehicule RAV4', '785525', 'Micro', NULL, 1, 1, 1, 'Fri, 18 Jun 2021 09:37:46', 'Sat, 19 Jun 2021 10:45:33', '2021-06-18 07:43:54', '2021-06-19 10:46:14'),
(181, 165, 203, 'le tour du faso', '2021-06-08', '2021-06-25', 'Vehicule RAV4', '21555', 'Micro ordinateur\r\nCamera\r\nBaladeur haut parleur', NULL, 1, 1, 1, 'Sat, 19 Jun 2021 10:40:48', 'Sat, 19 Jun 2021 10:46:21', '2021-06-18 15:50:13', '2021-06-19 10:46:30'),
(184, NULL, NULL, 'la nouvelle villa', '2021-06-16', '2021-06-26', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2021-06-18 17:13:20', '2021-06-18 17:13:20'),
(185, 166, 204, 'TEST VALIDATOR', '2021-06-19', '2021-06-19', 'MOTO', '14JI1452', 'PC', NULL, 1, NULL, 1, 'Sat, 19 Jun 2021 10:41:01', NULL, '2021-06-18 17:38:30', '2021-06-19 10:41:02'),
(186, NULL, NULL, 'TEST PLATEFORME', '2021-06-20', '2021-06-20', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2021-06-18 17:40:59', '2021-06-18 17:40:59'),
(187, NULL, NULL, 'la region des cascade', '2021-06-02', '2021-06-23', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2021-06-19 08:48:18', '2021-06-19 08:48:18'),
(188, 167, 205, 'La ville de sya', '2021-06-08', '2021-06-25', 'Train', '7875452', 'Micro\r\nCamera', NULL, 1, NULL, 1, 'Sat, 19 Jun 2021 10:40:20', NULL, '2021-06-19 09:14:59', '2021-06-19 10:40:43'),
(189, 168, 206, 'la saison des pluies', '2021-06-08', '2021-06-25', 'Mobylette CT', '785596', 'Micro\r\nCamera', NULL, 1, NULL, 1, 'Sat, 19 Jun 2021 10:41:18', NULL, '2021-06-19 10:32:18', '2021-06-19 10:41:20'),
(190, 180, 218, 'la fin de la peche', '2021-06-09', '2021-06-25', 'Velo', '785566', 'Micro\r\nCamera', NULL, 1, NULL, 1, 'Sun, 20 Jun 2021 20:34:04', NULL, '2021-06-19 18:08:11', '2021-06-20 20:34:08'),
(191, 187, 225, 'la bonne chasse', '2021-06-11', '2021-06-10', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2021-06-20 05:57:52', '2021-06-20 05:57:52'),
(192, 188, 226, '324545', '2021-06-09', '2021-06-17', NULL, NULL, NULL, NULL, 1, NULL, 1, 'Sun, 20 Jun 2021 20:34:11', NULL, '2021-06-20 06:28:03', '2021-06-20 20:34:13'),
(193, 189, 227, '548787', '2021-06-10', '2021-06-10', NULL, NULL, NULL, NULL, 1, NULL, 1, 'Sun, 20 Jun 2021 20:34:15', NULL, '2021-06-20 06:39:24', '2021-06-20 20:34:17'),
(194, 192, 230, 'la gazouillère', '2021-06-16', '2021-06-24', 'Vehicule RAV4', '555', 'micro', NULL, 1, NULL, 1, 'Sun, 20 Jun 2021 20:35:10', NULL, '2021-06-20 07:01:40', '2021-06-20 20:35:12'),
(195, 195, 236, 'la bonne cavalerie', '2021-06-03', '2021-06-26', 'Vehicule RAV4', '78452136', 'Micro\r\nOrdinateur', NULL, 1, 1, 1, 'Sun, 20 Jun 2021 13:02:11', 'Sun, 20 Jun 2021 13:03:42', '2021-06-20 12:55:56', '2021-06-20 13:15:19'),
(196, 196, 237, 'SNC 2021', '2021-06-03', '2021-06-02', 'Voitutre', 'cz458692', 'Caméra\r\nMicrophone', NULL, 1, 2, 1, 'Sun, 20 Jun 2021 20:34:21', 'Sun, 20 Jun 2021 20:36:31', '2021-06-20 14:35:40', '2021-06-20 20:36:33'),
(197, 194, 235, 'la ville de zoula', '2021-06-08', '2021-06-26', 'Vehicule RAV4', '25565', 'Micro', NULL, 1, 0, 1, 'Sun, 20 Jun 2021 20:34:48', NULL, '2021-06-20 16:21:44', '2021-06-20 20:34:49'),
(198, 197, 238, 'SNC 2021', '2021-12-15', '2021-12-22', 'Voiture', 'MW759468', 'Caméra\r\nMicro', NULL, 1, 0, 1, 'Sun, 20 Jun 2021 20:34:32', NULL, '2021-06-20 16:24:13', '2021-06-20 20:34:34'),
(200, 198, 239, 'SNC 2021', '2021-05-28', '2021-05-03', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 17:01:27', '2021-06-20 17:01:27'),
(201, 199, 240, 'TEST PLATEFORME', '2021-06-11', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 17:07:57', '2021-06-20 17:07:57'),
(202, 199, 240, 'TEST PLATEFORME', '2021-06-11', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 17:13:21', '2021-06-20 17:13:21'),
(203, 199, 240, 'TEST PLATEFORME', '2021-06-11', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 17:13:54', '2021-06-20 17:13:54'),
(204, 200, 241, 'le village de gnampo', '2021-06-10', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, 1, 'Sun, 20 Jun 2021 20:34:55', NULL, '2021-06-20 18:02:00', '2021-06-20 20:34:56'),
(205, 200, 241, 'le village de gnampo', '2021-06-10', '2021-06-17', 'Vehicule RAV4', '78523695', 'Micro', NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 18:03:07', '2021-06-20 18:04:07'),
(206, 201, 242, 'GRANDE NUIT GALIAN', '2021-06-25', '2021-06-25', 'VOITURE', '124578', 'MOTO', NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 18:10:54', '2021-06-20 18:11:31'),
(207, 202, 243, 'la nouvelle pèche du village kolikoro', '2021-06-02', '2021-06-26', 'RAV', '4545', 'Micro', NULL, 1, 0, 1, 'Sun, 20 Jun 2021 20:35:30', NULL, '2021-06-20 19:38:11', '2021-06-20 20:35:32'),
(208, NULL, NULL, 'le village de gnampo', '2021-06-10', '2021-06-10', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 20:04:12', '2021-06-20 20:04:12'),
(209, NULL, NULL, 'la gazouillère', '2021-06-10', '2021-06-17', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 20:08:15', '2021-06-20 20:08:15'),
(210, NULL, NULL, 'la nouvelle pèche du village kolikoro', '2021-06-23', '2021-06-23', NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2021-06-20 20:12:21', '2021-06-20 20:12:21'),
(211, 202, 243, 'le village de gnampo', '2021-06-23', '2021-06-09', 'Vehicule RAV4', '78523695', 'RAV', NULL, 1, 0, 1, 'Sun, 20 Jun 2021 20:35:44', NULL, '2021-06-20 20:19:00', '2021-06-20 20:35:46');

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
  `numcartepresse` varchar(20) DEFAULT NULL,
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
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `correspondant`
--

INSERT INTO `correspondant` (`idcorrespondant`, `iduser`, `nom`, `prenom`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `cnib`, `datedelivcnib`, `dateexpircnib`, `passeport`, `profession`, `telephone`, `telephone2`, `mail`, `lieuresidence`, `numcartepresse`, `refjournal`, `typecorrespondant`, `parcourspro`, `region`, `origine`, `personneprevenir`, `telephonepersp`, `pjcartepresse`, `pjpasseport`, `organe`, `typeorgane`, `telorgane`, `adresseorgane`, `typepresse`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(185, 170, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, '78521478', NULL, NULL, '74102036', 'Journaliste', 70203024, NULL, 'tourealidou20501789@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70203041', NULL, NULL, NULL, NULL, 1, '2021-06-12 11:03:16', '2021-06-12 11:03:16'),
(186, 171, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, '78521478', NULL, NULL, '74102036', 'Journaliste', 70203024, NULL, 'tourealidou205017899@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '70203041', NULL, NULL, NULL, NULL, 0, '2021-06-12 11:04:45', '2021-06-12 11:04:45'),
(187, NULL, 'SAMBARE', 'Alidou', NULL, NULL, NULL, NULL, '78456321', NULL, NULL, '78453698', 'Journaliste', 70203024, 74125874, 'sambare12@yahoo.fr', 'Bobo Dioulasso', '7894562', 'Ref', 'Correspondant national', 'Parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 11:17:43', '2021-06-12 11:17:43'),
(188, 173, 'DIALLO', 'Sita', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita@yahoo.fr', 'Bobo Dioulasso', '5456', 'ref', 'Correspondant national', 'parcours', 'Centre', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 11:38:51', '2021-06-12 11:38:51'),
(189, 174, 'MILLOGO', 'Ramata', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita12@yahoo.fr', 'Bobo Dioulasso', '5456', 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:42:49', '2021-06-12 11:42:49'),
(190, 175, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita123@yahoo.fr', 'Bobo Dioulasso', '5456', 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:45:16', '2021-06-12 11:45:16'),
(191, 176, 'DAKOUROU', 'Souleymane', '2021-06-03', NULL, NULL, NULL, '74589632', NULL, NULL, '5555', 'Journaliste', 70203024, 25252, 'sita78@yahoo.fr', 'Bobo Dioulasso', '78562265', 'REF', NULL, 'PARC', 'Nord', NULL, '445552', 1551, NULL, NULL, 'RFI', NULL, '78456332', 'Rue 44', 'Radio', 1, '2021-06-12 11:47:04', '2021-06-16 03:44:23'),
(192, 177, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita789@yahoo.fr', 'Bobo Dioulasso', '5456', 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:50:21', '2021-06-12 11:50:22'),
(193, 178, 'DAKOUROU', 'Souleymane', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, 74258796, 'sita7899@yahoo.fr', 'Bobo Dioulasso', '5456', 'ref', 'Correspondant national', 'parcours', 'Nord', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 11:55:39', '2021-06-12 11:55:40'),
(194, 179, 'ZOUARI', 'Malickou', NULL, NULL, NULL, NULL, '74859632', NULL, NULL, '74102036', 'Journaliste', 78451236, 74125874, 'malickou@yahoo.fr', 'Bobo Dioulasso', '145237', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:02:39', '2021-06-12 12:02:39'),
(195, 180, 'ZOUARI', 'Malickou', NULL, NULL, NULL, NULL, '74859632', NULL, NULL, '74102036', 'Journaliste', 78451236, 74125874, 'malickou1@yahoo.fr', 'Bobo Dioulasso', '145237', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:05:50', '2021-06-12 12:05:51'),
(196, 181, 'ZOUARI', 'ZOURE', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, NULL, 'zoumari@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 12:19:06', '2021-06-12 12:19:06'),
(197, 183, 'ZOUARI', 'ZOURE', NULL, NULL, NULL, NULL, '74589632', NULL, NULL, '78453698', 'Journaliste', 70203024, NULL, 'zoumari1234@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 12:36:14', '2021-06-12 12:36:14'),
(198, 184, 'MADIAGA', 'Aristide', NULL, NULL, NULL, NULL, '78963214', NULL, NULL, '74102036', 'Journaliste', 70203024, 74125874, 'madiaga@yahoo.fr', 'Bobo Dioulasso', '7894562', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, 'Presse Ecrite', 0, '2021-06-12 12:39:53', '2021-06-12 12:39:53'),
(199, 185, 'TOURE', 'Arnaud', NULL, NULL, NULL, NULL, 'B78453621', NULL, NULL, '74102036', 'Journaliste', 70203024, 74125874, 'tourila@yahoo.fr', 'Bobo Dioulasso', '4546', 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-12 12:48:16', '2021-06-12 12:48:17'),
(200, 186, 'SAMANDOULGOU', 'Alidou', NULL, NULL, NULL, NULL, '45879632', NULL, NULL, '78453698', 'Journaliste', 74123689, NULL, 'alidou5@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Radio Omega', NULL, NULL, NULL, NULL, 1, '2021-06-12 13:00:44', '2021-06-12 13:00:44'),
(201, 187, 'ZOUMBARA', 'Kalilou', NULL, NULL, NULL, NULL, '78456321', NULL, NULL, '5664564', 'Journaliste', 70203024, NULL, 'souare@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-12 14:58:19', '2021-06-13 12:04:21'),
(202, 188, 'DIABOUGOU', 'Alimata', NULL, NULL, NULL, 'HOMME', 'B78456321', NULL, NULL, 'B78541236', 'Journaliste', 70203045, 77859654, 'diabougou@yahoo.fr', 'Bobo Dioulasso', '74185296', 'references', 'Journaliste independant', 'parcours', 'Centre', NULL, NULL, NULL, NULL, NULL, 'France 24', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-13 17:34:23', '2021-06-14 05:54:36'),
(203, 189, 'DIABOUGA', 'Pouga', NULL, NULL, NULL, 'HOMME', '2564564', '2021-06-04', '2021-06-26', '245', 'Journaliste', 70203045, 77859654, 'zoromela@yahoo.fr', 'Bobo Dioulasso', '12454', 'References', 'Correspondant national', 'parcours', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'France 24', NULL, NULL, NULL, 'Presse Ecrite', 1, '2021-06-14 06:01:55', '2021-06-14 18:29:07'),
(204, 190, 'TAMBOULA', 'Cheik Omar', NULL, NULL, NULL, 'HOMME', '7855236', NULL, NULL, '7455', 'Journaliste', 70203045, NULL, 'tamboula12@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 70000000, NULL, NULL, 'RFI', NULL, NULL, NULL, NULL, 0, '2021-06-14 11:22:28', '2021-06-14 11:32:33'),
(205, NULL, 'TAMBOULA', 'Alimata', '2021-06-22', NULL, NULL, 'MASCULIN', '55', '2021-06-16', '2021-06-24', '48748', 'Journaliste', 70203045, 477, 'tatata@yahoo.fr', 'Bobo Dioulasso', '5545', 'ref', NULL, 'parc', NULL, NULL, 'Toure Arnaud', 555, NULL, NULL, 'RFI', NULL, '555', '554', 'Presse Ecrite', 0, '2021-06-14 12:12:51', '2021-06-16 05:07:13'),
(206, 192, 'KONATE', 'Arnaud', NULL, NULL, NULL, 'HOMME', '7855236', '2021-06-23', '2021-06-17', 'B78541236', 'Journaliste', 70203045, 77859654, 'konatelo@yahoo.fr', 'Bobo Dioulasso', '566666', 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, 'Toure Arnaud', 455556, NULL, NULL, 'Sidwaya', NULL, '78566', 'Rue 44', 'Radio', 1, '2021-06-15 08:30:26', '2021-06-15 08:30:27'),
(207, 193, 'KONATE', 'Arnaud', '2021-06-15', NULL, NULL, 'HOMME', '7855236', '2021-06-23', '2021-06-17', 'B78541236', 'Journaliste', 70203045, 77859654, 'konatelo1@yahoo.fr', 'Bobo Dioulasso', '566666', 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, 'Toure Arnaud', 455556, NULL, NULL, 'Sidwaya', NULL, '78566', 'Rue 44', 'Radio', 0, '2021-06-15 08:35:52', '2021-06-15 08:35:53'),
(208, 194, 'TAMBOULARE', 'Alphonse', '2021-06-09', NULL, NULL, 'FEMME', 'B7855226', '2021-06-21', '2021-06-11', '51556', 'Journaliste', 7845125, 7020365, 'tamboulare@yahoo.fr', 'Bobo Dioulasso', '21545', 'REF', 'Journaliste independant', 'PARC', 'Centre', NULL, 'Toure Arnaud', 544525, NULL, NULL, 'RFI', NULL, '785236', 'Rue 44', 'Presse Ecrite', 1, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(209, 195, 'GANAME', 'Jean de dieu', '2021-06-10', 'ouagadougou', 'Burkinabè', 'HOMME', '78555', '2021-06-22', '2021-06-09', '545456', 'Journaliste', 7845125, 5545, 'ganame2020@yahoo.fr', 'Burkina Faso', '345546', 'ref', NULL, 'parc', 'Centre', NULL, 'Toure Arnaud', 554, NULL, NULL, 'RFI', NULL, '5545', 'Rue 44', 'Presse Ecrite', 1, '2021-06-16 05:11:01', '2021-06-16 05:46:59'),
(210, 196, 'DIABOUGA', 'Herman', '2021-06-10', 'Boromo', 'Burkinabè', 'HOMME', 'B78456321', '2021-06-22', '2021-06-24', '78562265', 'Journaliste', 78451236, 70201458, 'diabouga2@yahoo.fr', 'Bobo Dioulasso', '789654', 'REF', 'Correspondant national', 'PARC', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', NULL, '78456332', 'Rue 44', 'Radio', 1, '2021-06-16 10:23:20', '2021-06-16 10:23:21'),
(211, 197, 'TRAORE', 'Assitou', '2021-06-08', 'Boromo', 'Burkinabè', 'FEMININ', 'B8965552', '2021-06-08', '2021-07-01', '786325', 'Journaliste', 70203045, NULL, 'traore_assitou@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 741258, NULL, NULL, 'RFI', NULL, '741966', NULL, NULL, 0, '2021-06-17 07:11:59', '2021-06-17 07:11:59'),
(212, 198, 'TRAORE', 'Ibrahim', '2021-06-14', 'Boromo', 'Burkinabè', 'MASCULIN', '88588', '2021-06-08', '2021-06-25', '78523654', 'journaliste', 7452145, NULL, 'ibrat@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 59658, NULL, NULL, 'RFI', NULL, '457822', NULL, NULL, 0, '2021-06-17 07:26:07', '2021-06-17 07:26:07'),
(213, 199, 'TRAORE', 'Ibrahim', '2021-06-14', 'Boromo', 'Burkinabè', 'MASCULIN', '88588', '2021-06-08', '2021-06-25', '78523654', 'journaliste', 7452145, NULL, 'ibrat1@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 59658, NULL, NULL, 'RFI', NULL, '457822', NULL, NULL, 0, '2021-06-17 07:27:56', '2021-06-17 07:27:56'),
(214, 200, 'DOUMBIA', 'Alphonse', '2021-07-07', 'Boromo', 'Burkinabè', 'MASCULIN', '6565', '2021-06-15', '2021-06-09', '566', 'Journaliste', 55646, NULL, 'alphonse2@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 545, NULL, NULL, 'RFI', NULL, '5454', NULL, NULL, 0, '2021-06-17 07:33:03', '2021-06-17 07:33:03'),
(215, 201, 'TRAORE', 'Sa Akim', '2021-06-15', 'Boromo', 'Burkinabè', 'MASCULIN', '78452125', '2021-06-16', '2021-06-24', 'S78963214', 'Journaliste', 78542136, NULL, 'akim@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 70203045, NULL, NULL, 'RFI', NULL, '70215896', NULL, NULL, 0, '2021-06-18 07:42:26', '2021-06-18 07:42:27'),
(216, 202, 'SAMANDOULGOU', 'Joel Herman', '2021-06-08', 'ouagadougou', 'Burkinabè', 'HOMME', '4566', '2021-06-16', '2021-06-26', '45456', 'Journaliste', 785596, 70203658, 'samandoulgou@yahoo.fr', 'Bobo Dioulasso', '5465', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, 'Toure Arnaud', 456456, NULL, NULL, 'RFI', 'national', '465565', 'Rue 44', 'Presse Ecrite', 0, '2021-06-18 15:30:19', '2021-06-18 15:41:34'),
(217, 203, 'KOANDA', 'Kader Arnaud', '2021-06-16', 'Kaya', 'Burkinabè', 'HOMME', '78541269', '2021-06-15', '2021-06-23', '78521478', 'Monteur', 70101010, NULL, 'koanda2@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'RFI', NULL, '555', NULL, NULL, 0, '2021-06-18 15:49:38', '2021-06-18 16:59:53'),
(218, 204, 'TRAORET', 'ALIDOU', '1988-05-14', 'ouagadougou', 'Burkinabè', 'MASCULIN', '1245124', '1111-11-11', '1111-11-11', '147852', 'Journaliste', 142578, NULL, 'traoret@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'TRAORET ALICE', 124578, NULL, NULL, 'RFI', NULL, '124578', NULL, NULL, 0, '2021-06-18 17:35:20', '2021-06-18 17:35:20'),
(219, 205, 'DIABOUGA', 'Assita Nadège Kadi', '2021-06-09', 'Boromo', 'Burkinabè', 'HOMME', '78456321', '2021-06-16', '2021-07-02', '78544258', 'Journaliste', 78541220, 457889, 'oui@yahoo.fr', 'Burkina Faso', '556585', 'ref', NULL, 'parcours', 'Centre', NULL, 'Toure Arnaud', 7855, NULL, NULL, 'RFI', NULL, '7845256', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 09:14:21', '2021-06-19 10:15:17'),
(220, 206, 'TRAORE', 'Faridatou', '2021-06-15', 'Boromo', 'Burkinabè', 'HOMME', '78541236', '2021-06-08', '2021-06-25', '5546', 'journaliste', 70203654, 5555, 'syfarid@yahoo.fr', 'Burkina Faso', '78965231', 'ref', 'Journaliste independant', 'parc', 'Centre', NULL, '78452136', 70124587, NULL, NULL, 'RFI', 'National', '78589632', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 10:27:01', '2021-06-19 10:37:21'),
(221, 207, 'DALOUA', 'Ali Noel', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali@yahoo.fr', 'Bobo Dioulasso', '65659', 'dsfd', 'Correspondant national', 'dfsdf', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:29:50', '2021-06-19 16:29:54'),
(222, 207, 'DALOUA', 'Ali Noel', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali@yahoo.fr', 'Bobo Dioulasso', '65659', 'dsfd', 'Correspondant national', 'dfsdf', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:36:30', '2021-06-19 16:36:30'),
(223, 208, 'DALOUA', 'Ali Noel vataza', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali2@yahoo.fr', 'Bobo Dioulasso', '65659', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:37:15', '2021-06-19 16:37:15'),
(224, 208, 'DALOUA', 'Ali Noel vataza', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali2@yahoo.fr', 'Bobo Dioulasso', '65659', 'ref', 'Correspondant national', 'parc', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:37:56', '2021-06-19 16:37:56'),
(225, 208, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali2@yahoo.fr', 'Bobo Dioulasso', '65659', 'qds', 'Correspondant national', 'zdeaze', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:38:30', '2021-06-19 16:38:30'),
(226, 208, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali2@yahoo.fr', 'Bobo Dioulasso', '65659', 'fgdgfd', 'Correspondant national', 'fdgfdg', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:38:55', '2021-06-19 16:38:55'),
(227, 209, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali23@yahoo.fr', 'Bobo Dioulasso', '65659', 'fesre', 'Correspondant national', 'ezrear', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:39:35', '2021-06-19 16:39:40'),
(228, 209, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali23@yahoo.fr', 'Bobo Dioulasso', '65659', 'fesre', 'Correspondant national', 'ezrear', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:42:19', '2021-06-19 16:42:19'),
(229, 210, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali234@yahoo.fr', 'Bobo Dioulasso', '65659', 'qsdqs', 'Correspondant national', 'sqddqs', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:43:32', '2021-06-19 16:43:34'),
(230, 210, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali234@yahoo.fr', 'Bobo Dioulasso', '65659', 'qsdqs', 'Correspondant national', 'sqddqs', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:44:23', '2021-06-19 16:44:23'),
(231, 210, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', '6565', 'Journaliste', 785555, 5544545, 'dali234@yahoo.fr', 'Bobo Dioulasso', '65659', 'erzer', 'Correspondant national', 'dfdsfs', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:44:49', '2021-06-19 16:44:49'),
(232, 210, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali234@yahoo.fr', 'Bobo Dioulasso', '65659', 'xcvdf', 'Correspondant national', 'dsfsdfds', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:45:10', '2021-06-19 16:45:10'),
(233, 211, 'DALOUA', 'Ali Noel vatazara', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '5455', '2021-06-23', '2021-06-24', NULL, 'Journaliste', 785555, 5544545, 'dali2345@yahoo.fr', 'Bobo Dioulasso', '65659', 'azezae', 'Correspondant national', 'zaezae', 'Centre', NULL, 'Toure Arnaud', 78563214, NULL, NULL, 'RFI', 'national', '55757', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:49:06', '2021-06-19 16:49:08'),
(234, 212, 'TOURE', 'Alimata Samira', '2021-06-08', 'Boromo', 'Burkinabè', 'Masculin', '785758', '2021-06-16', '2021-06-24', NULL, 'Journaliste', 70203045, 7020365, 'ouiassita@yahoo.fr', 'Bobo Dioulasso', '45454', 'dsfsqdf', 'Journaliste independant', 'sdfdsf', 'Centre', NULL, 'Toure Arnaud', 555555555, NULL, NULL, 'RFI', 'National', '78578', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 16:57:17', '2021-06-19 16:57:17'),
(235, 213, 'SOUARE', 'Paulin', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '78542369', '2021-06-01', '2021-06-27', NULL, 'Journaliste', 78632145, 7845963, 'souare12@yahoo.fr', 'Bobo Dioulasso', 'A5445', 'dfsd', 'Correspondant international', 'dffds', 'Centre', 'Etranger', 'Toure Arnaud', 554, NULL, NULL, 'RFI', 'international', '56565', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 17:02:15', '2021-06-19 17:02:15'),
(236, 214, 'TIRAOGO', 'Bandala', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '86568', '2021-06-15', '2021-06-25', '555', 'Journaliste', 785555, 5544545, 'bandala@yahoo.fr', 'Bobo Dioulasso', '5454', 'ref', 'Journaliste independant', 'parc', 'Centre', NULL, 'TRAORET ALICE', 75757, NULL, NULL, 'RFI', 'International', '75787', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 17:07:05', '2021-06-19 17:07:05'),
(237, 215, 'TAMARA', 'Arnaud', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '455', '2021-06-16', '2021-06-24', NULL, 'Journaliste', 55646, 5757, 'tamara123@yahoo.fr', 'Bobo Dioulasso', '625989', 'dfsf', 'Correspondant national', 'dsfdsf', 'Boucle du Mouhoun', NULL, 'Toure Arnaud', 565, NULL, NULL, 'RFI', 'national', '75787', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 17:32:51', '2021-06-19 17:32:51'),
(238, 216, 'ggre', 'rgtret', '2021-06-01', 'retret', 'retret', 'Masculin', '656', '2021-06-15', '2021-06-24', '656', 'retgret', 656, 6595, 'tatatapp@yahoo.fr', 'erezrze', '656', 'zeeaze', 'Correspondant international', 'zaezae', 'Centre', 'Etranger', 'dezz', 656, NULL, NULL, 'eaze', 'international', '656', 'zeaeza', 'Presse Ecrite', 1, '2021-06-19 17:37:18', '2021-06-19 17:37:18'),
(239, 217, 'rtretr', 'retrr', '2021-06-09', 'retretr', 'retret', 'Masculin', 'fdfdsf', '2021-06-09', '2021-06-25', NULL, 'rtgrtre', 55646, 565, 'makisso@yahoo.fr', 'sfdfdsfd', '6456', 'ref', 'Correspondant international', 'parc', 'Centre', 'Etranger', 'Toure Arnaud', 55, NULL, NULL, 'gff', 'international', '5645', 'gfhgfvg', 'Presse Ecrite', 1, '2021-06-19 17:43:36', '2021-06-19 17:43:37'),
(240, 218, 'SAMANDOULGOU', 'Aristide Armand', '2021-06-25', 'Boromo', 'Burkinabè', 'Masculin', '256', '2021-06-15', '2021-06-25', 'fdgf', 'Journaliste', 856556, NULL, 'tiao@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 626556, NULL, NULL, 'RFI', NULL, '665', NULL, NULL, 0, '2021-06-19 18:07:37', '2021-06-19 18:07:38'),
(241, 219, 'DIABOUGA', 'Ganine', '2021-06-08', 'Boromo', 'Burkinabè', 'Masculin', '556', '2021-06-09', '2021-06-24', '2656', 'Journaliste', 78541220, 7020365, 'ganine2@yahoo.fr', 'Bobo Dioulasso', '32565', 'references', 'Correspondant national', 'parc', 'Hauts-Bassins', NULL, 'TRAORET ALICE', 25456, NULL, NULL, 'RFI', 'national', '4545', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 18:40:34', '2021-06-19 18:40:35'),
(242, 220, 'marcelin', 'marcelin', '2021-06-03', 'ouaga', 'burkinabé', 'Masculin', 'cnib 07', '2021-06-19', '2021-06-19', 'p1488', 'informaticien', 5034271, 47891298, 'marcelin@gmail.com', 'ouagadougou', 'cp17m9', 'ref 0789', 'Correspondant national', 'major', 'Centre', NULL, 'ismael', 74891254, NULL, NULL, 'sidwaya', 'national', '47878', 'bpr41', 'Presse Ecrite', 1, '2021-06-19 18:41:26', '2021-06-19 18:41:27'),
(243, 221, 'TRAORE', 'Adama', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '5565', '2021-06-22', '2021-06-24', NULL, 'Journaliste', 70142569, 70001000, 'traadama@yahoo.fr', 'Bobo Dioulasso', '4545', 'erer', 'Correspondant national', 'erer', 'Boucle du Mouhoun', NULL, 'Toure Arnaud', 568, NULL, NULL, 'France 24', 'national', '702665', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 19:09:40', '2021-06-19 19:09:41'),
(244, 222, 'TRAORE', 'Ibrahim', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', 'B78456321', '2021-06-08', '2021-06-25', '455', 'Journaliste', 70203045, 77859654, 'ibi@yahoo.fr', 'Ouagadougou', '7022556', 'ref', 'Correspondant national', 'parc', 'Hauts-Bassins', NULL, 'Toure Arnaud', 59658, NULL, NULL, 'RFI', 'national', '87888', 'Rue 44', 'Presse Ecrite', 1, '2021-06-19 19:27:10', '2021-06-19 19:27:11'),
(245, 223, 'TRAORE', 'Arnaud', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '7556', '2021-06-08', '2021-06-26', '54554', 'Journaliste', 54526, NULL, 'tramita@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'RFI', NULL, '2565', NULL, NULL, 0, '2021-06-20 05:51:24', '2021-06-20 05:51:24'),
(246, 224, 'TRAORE', 'Arnaud', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '7556', '2021-06-08', '2021-06-26', '54554', 'Journaliste', 54526, NULL, 'tramita2@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'RFI', NULL, '2565', NULL, NULL, 0, '2021-06-20 05:55:39', '2021-06-20 05:55:39'),
(247, 225, 'TRAORE', 'Arnaud', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '7556', '2021-06-08', '2021-06-26', '54554', 'Journaliste', 54526, NULL, 'tramita23@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'RFI', NULL, '2565', NULL, NULL, 0, '2021-06-20 05:56:58', '2021-06-20 05:56:58'),
(248, 226, 'SAMANDOULGOU', 'Lionel', '2021-06-04', 'kaya', 'Burkinabè', 'Masculin', '78542369', '2021-06-16', '2021-06-26', '5454', 'Journaliste', 78541220, NULL, 'gagag@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'TRAORET ALICE', 78555, NULL, NULL, 'RFI', NULL, '7855', NULL, NULL, 0, '2021-06-20 06:27:35', '2021-06-20 06:27:35'),
(249, 227, 'kjhjkhjk', 'oioioioi', '2021-06-23', 'kjkjioj', 'kjkjk', 'Masculin', '5454', '2021-06-24', '2021-06-27', '188', 'hjhjhj', 4, NULL, 'lili@yahoo.fr', 'jhjijoij', NULL, NULL, NULL, NULL, NULL, NULL, '22', 255, NULL, NULL, 'jhgjh', NULL, '54454', NULL, NULL, 0, '2021-06-20 06:39:05', '2021-06-20 06:39:05'),
(250, 228, 'sfdsf', 'bhghgh', '2021-06-22', 'gfgfgf', 'hgfghfg', 'Masculin', '45454', '2021-06-10', '2021-07-03', '54545', 'hghg', 5454, NULL, 'gratali@yahoo.fr', 'ytrtyryt', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 5454, NULL, NULL, 'jhggh', NULL, '5424', NULL, NULL, 0, '2021-06-20 06:45:32', '2021-06-20 06:45:32'),
(251, 229, 'ndbndsbf', 'nbnbb', '2021-06-10', 'jhgjhgjh', 'hjgjghj', 'Masculin', '545', '2021-06-17', '2021-07-03', 'jhjh', 'nnbkbk', 3545, NULL, 'tataop@yahoo.fr', 'rue 2656', NULL, NULL, NULL, NULL, NULL, NULL, 'hghg', 545, NULL, NULL, 'nghg', NULL, '2454', NULL, NULL, 0, '2021-06-20 06:48:39', '2021-06-20 06:48:39'),
(252, 230, 'sdqsdsqd', 'jhjkhgj', '2021-06-18', 'hgh', 'hjgjh', 'Masculin', '5454', '2021-06-09', '2021-06-26', '5454', 'jkhjkhkj', 45456, NULL, 'trooo@yahoo.fr', 'Bobo Dioulasso', NULL, NULL, NULL, NULL, NULL, NULL, 'jhyujh', 5445, NULL, NULL, 'hghf', NULL, '4545', NULL, NULL, 0, '2021-06-20 07:01:14', '2021-06-20 07:01:14'),
(253, NULL, 'TRAORE', 'Ardiouma', '1990-02-22', 'Banfora', 'Burkinabé', 'Masculin', 'B1922729', '2021-06-24', '2021-02-12', NULL, 'Journaliste', 70414909, 77140808, 'ardioumtra@gmail.com', 'Kadiogo,Ouagadougou,Larlé', '015264', 'XXXSXSQUJujqxnusjxsu', 'Correspondant national', 'snxjshsxbsjxb\r\nsxjbshsbhjsns\r\nssxjsjx,nxj wjjx shxbsx xbsuxjsxujsxn\r\nxnjsbhsjnj', 'Cascades', NULL, 'SKSJCNSJ NJNSCJSCH', 74859632, NULL, NULL, 'RFI', 'national', '7885963231', 'JNCJSNS SSJSBCJSNB', 'Radio', 1, '2021-06-20 11:48:45', '2021-06-20 11:48:45'),
(254, 231, 'TRAORE', 'Ardiouma', '1990-02-22', 'Banfora', 'Burkinabé', 'Masculin', 'B1922729', '2021-06-24', '2021-02-12', NULL, 'Journaliste', 70414909, 77140808, 't_ardioum@yahoo.fr', 'Kadiogo,Ouagadougou,Larlé', '015264', 'jncjnchcbscn sjcnsjcschs', 'Correspondant national', 'snsjcshbh jscnsjbshbs\r\nscjschscbs::;;:;!;:;;', 'Boucle du Mouhoun', NULL, 'SKSJCNSJ NJNSCJSCH', 74859632, NULL, NULL, 'RFI', 'national', '7885963231', 'JNCJSNS SSJSBCJSNB', 'Presse Ecrite', 1, '2021-06-20 11:52:03', '2021-06-20 11:52:04'),
(255, 232, 'TRAORE', 'Ardiouma', '1990-02-22', 'Banfora', 'Burkinabé', 'Masculin', 'B1922729', '2021-06-24', '2021-02-12', NULL, 'Journaliste', 70414909, 77140808, 't_ardioum1235@yahoo.fr', 'Kadiogo,Ouagadougou,Larlé', '015264', 'snxshbsh', 'Correspondant national', 'xsn shbsg', 'Boucle du Mouhoun', NULL, 'SKSJCNSJ NJNSCJSCH', 74859632, NULL, NULL, 'RFI', 'national', '7885963231', 'JNCJSNS SSJSBCJSNB', 'Presse Ecrite', 1, '2021-06-20 12:00:42', '2021-06-20 12:00:43'),
(256, 233, 'TRAORE', 'Ardiouma', '1990-02-22', 'Banfora', 'Burkinabé', 'Masculin', 'B1922729', '2021-06-24', '2021-02-12', NULL, 'Journaliste', 70414909, 77140808, 't_ardioum1111@yahoo.fr', 'Kadiogo,Ouagadougou,Larlé', '015264', 'snxshbsh', 'Correspondant national', 'xsn shbsg', 'Boucle du Mouhoun', NULL, 'SKSJCNSJ NJNSCJSCH', 74859632, NULL, NULL, 'RFI', 'national', '78859632', 'JNCJSNS SSJSBCJSNB', 'Presse Ecrite', 1, '2021-06-20 12:04:18', '2021-06-20 12:04:18'),
(257, 234, 'ZAZOU', 'ABDIUL KARIM', '2021-06-17', 'OUAGADOUGOU', 'BURKINABE', 'Masculin', '12457', '2021-06-24', '2021-06-23', NULL, 'JOURNALISTE', 124578, 124578, 'zazou@yahoo.fr', 'BOBO', '145278', 'CV', 'Correspondant national', 'CV', 'Boucle du Mouhoun', NULL, 'AZAZ ZAA', 124578, NULL, NULL, 'RFI', 'national', '12345678912345678', 'OUAGA', 'Presse Ecrite', 1, '2021-06-20 12:08:20', '2021-06-20 12:08:21'),
(258, 235, 'ZAZOU', 'ABDIUL KARIM', '2021-06-17', 'OUAGADOUGOU', 'BURKINABE', 'Masculin', '12457', '2021-06-24', '2021-06-23', NULL, 'JOURNALISTE', 124578, 124578, 'zazou2021@yahoo.fr', 'BOBO', '145278', 'CV', 'Correspondant national', 'CV', 'Boucle du Mouhoun', NULL, 'AZAZ ZAA', 124578, NULL, NULL, 'RFI', 'national', '1234567891011121214', 'OUAGA', 'Presse Ecrite', 1, '2021-06-20 12:12:01', '2021-06-20 12:12:01'),
(259, 236, 'DIANDA', 'Arnaud', '2021-06-15', 'Boromo', 'Burkinabè', 'Masculin', '78541236', '2021-06-15', '2021-06-26', '78541265', 'Journaliste', 7577555, NULL, 'dianda45@yahoo.fr', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'RFI', NULL, '78452136', NULL, NULL, 0, '2021-06-20 12:55:30', '2021-06-20 12:55:30'),
(260, 237, 'KONATE', 'Nafissatou', '1998-04-12', 'Wangolo', 'Burkinabé', 'Feminin', 'B1922754', '2016-02-15', '2026-02-14', NULL, 'Journaliste', 74859632, NULL, 'nafi156@gmail.com', 'Burkina Faso', NULL, NULL, NULL, NULL, NULL, NULL, 'ZONGO Ousmane', 74853210, NULL, NULL, 'Le Pays', NULL, '78965412', NULL, NULL, 0, '2021-06-20 14:33:54', '2021-06-20 14:33:54'),
(261, 238, 'KAM', 'Mamadou', NULL, 'Loumbila', 'Burkinabé', 'Masculin', 'B19227458', '2021-02-15', '2031-02-14', NULL, 'Journaliste', 78965423, 77140847, 'mamadou@gamail.com', 'Burkina Faso', NULL, 'jxsbjqbjhj', NULL, 'skjndjknjk\r\nscjscsjcnjsn\r\nscjscjbsujn', NULL, NULL, 'OUATTARA Lamine', 870489635, NULL, NULL, 'Le Pays', NULL, '789654586', 'JNCJSNS sjcsncjscnjscn', 'Radio', 0, '2021-06-20 16:22:29', '2021-06-20 16:33:42'),
(262, 239, 'ILBOUDO', 'Idrissa', '1978-08-15', 'Koupéla', 'Burkinabé', 'Masculin', 'B4596321', '2014-08-15', '2024-08-14', NULL, 'Journaliste', 70414909, 77140821, 'idriss@gmail.com', 'Burkina Faso', '015264', 'DCDJUDJDJB', 'Correspondant national', 'DDJNDCHJBDC\r\nCKCNJCNJCDN', 'Centre-Est', NULL, 'ZONGO Ousmane', 74859614, NULL, NULL, 'Le Pays', 'national', '78965498', 'JNCJSNS SSJSBCJSNB', 'Presse Ecrite', 1, '2021-06-20 16:49:19', '2021-06-20 16:49:20'),
(263, 240, 'SOLOMANI', 'DALOU', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '26663', '2021-06-23', '2021-06-24', '5556', 'Journaliste', 5585, 5555, 'badoulo@yahoo.fr', 'Bobo Dioulasso', '2256', 'ref', 'Correspondant national', 'parc', 'Boucle du Mouhoun', NULL, 'TRAORET ALICE', 5566, NULL, NULL, 'RFI', 'national', '454', 'Rue 44', 'Presse Ecrite', 1, '2021-06-20 17:06:19', '2021-06-20 17:06:19'),
(264, 241, 'SAMANDOULGOU', 'Sa Akim', '2021-06-23', 'Gaoua', 'Burkinabè', 'Masculin', 'B78456321', '2021-06-09', '2021-06-22', '5454', 'Journaliste', 55646, 477, 'saoiu@yahoo.fr', 'Bobo Dioulasso', '2256', 'ref', 'Correspondant national', 'parc', 'Hauts-Bassins', NULL, 'Toure Arnaud', 78451236, NULL, NULL, 'France 24', 'national', '78963215', '554', 'Presse Ecrite', 1, '2021-06-20 17:46:38', '2021-06-20 17:46:39'),
(265, 242, 'ZONGO', 'ALI', '2021-06-29', 'OUAGADOUGOU', 'BURKINABE', 'Masculin', '1111', '2021-05-31', '2021-06-23', '11111AZ', 'JOURNALISTE', 123461, 1235, 'zongoali2021@yahoo.fr', 'BOBO', '123AZ', 'CR', 'Journaliste independant', 'CR', 'Hauts-Bassins', NULL, 'ZONGO ISSA', 111111, NULL, NULL, 'RFI', 'National', '121212', 'OUAGA', 'Radio', 1, '2021-06-20 18:08:54', '2021-06-20 18:08:55'),
(266, 243, 'SAMANDOULGOU', 'Sa Akim', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', 'B78456321', '2021-06-08', '2021-06-25', '4545', 'Journaliste', 78541220, 71209632, 'samara@yahoo.fr', 'Bobo Dioulasso', '5557', 'ref', 'Correspondant national', 'parc', 'Cascades', NULL, 'Toure Arnaud', 5454, NULL, NULL, 'RFI', 'national', '4455', 'Rue 44', 'Presse Ecrite', 1, '2021-06-20 19:35:21', '2021-06-20 19:35:22');

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
  `datenaissance` date DEFAULT NULL,
  `lieunaissance` varchar(254) DEFAULT NULL,
  `nationalite` varchar(254) DEFAULT NULL,
  `sexe` varchar(254) DEFAULT NULL,
  `passeport` varchar(254) DEFAULT NULL,
  `laissepasser` varchar(50) DEFAULT NULL,
  `professionfixeur` varchar(255) DEFAULT NULL,
  `carteprofessionnelfixeur` varchar(50) DEFAULT NULL,
  `carteconsulaire` varchar(254) DEFAULT NULL,
  `datedelivcnib` date DEFAULT NULL,
  `dateexpircnib` date DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `telephoneresidence` varchar(20) DEFAULT NULL,
  `adressfixeur` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `personneprevenir` varchar(254) DEFAULT NULL,
  `lieuresidence` varchar(254) DEFAULT NULL,
  `adressepaysresidence` varchar(255) DEFAULT NULL,
  `organe` varchar(254) DEFAULT NULL,
  `telorgane` varchar(20) DEFAULT NULL,
  `adressestruct` varchar(254) DEFAULT NULL,
  `pjcnib` varchar(254) DEFAULT NULL,
  `pjpasseport` varchar(254) DEFAULT NULL,
  `pjcinibperprev` varchar(254) DEFAULT NULL,
  `pjpasseportperprev` varchar(254) DEFAULT NULL,
  `pjcartepresse` varchar(254) DEFAULT NULL,
  `cnib` varchar(254) DEFAULT NULL,
  `telephonepersp` varchar(20) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
  `CREATED_AT` datetime DEFAULT NULL,
  `UPDATED_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandeur`
--

INSERT INTO `demandeur` (`iddemandeur`, `iduser`, `nom`, `prenom`, `profession`, `datenaissance`, `lieunaissance`, `nationalite`, `sexe`, `passeport`, `laissepasser`, `professionfixeur`, `carteprofessionnelfixeur`, `carteconsulaire`, `datedelivcnib`, `dateexpircnib`, `telephone`, `telephoneresidence`, `adressfixeur`, `mail`, `personneprevenir`, `lieuresidence`, `adressepaysresidence`, `organe`, `telorgane`, `adressestruct`, `pjcnib`, `pjpasseport`, `pjcinibperprev`, `pjpasseportperprev`, `pjcartepresse`, `cnib`, `telephonepersp`, `actif`, `CREATED_AT`, `UPDATED_AT`) VALUES
(131, 170, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-08', 'Bobo', 'Burkinabè', 'MASCULIN', '74102036', NULL, 'journaliste', '788', '866584', '2021-06-15', '2021-06-25', 70203024, '70202589', 'Rue 21.177', 'tourealidou20501789@yahoo.fr', 'TOURE FRANCK', 'Burkina Faso', NULL, '70203041', '78966655', '783666', NULL, NULL, NULL, NULL, NULL, '78521478', '78456321', 1, '2021-06-12 11:03:15', '2021-06-12 11:03:15'),
(132, 171, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-08', 'Bobo', 'Burkinabè', 'MASCULIN', '74102036', NULL, 'journaliste', '788', '866584', '2021-06-15', '2021-06-25', 70203024, '70202589', 'Rue 21.177', 'tourealidou205017899@yahoo.fr', 'TOURE FRANCK', 'Burkina Faso', NULL, '70203041', '78966655', '783666', NULL, NULL, NULL, NULL, NULL, '78521478', '78456321', 0, '2021-06-12 11:04:44', '2021-06-12 11:04:45'),
(133, NULL, 'SAMBARE', 'Alidou', 'Journaliste', '2021-06-17', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '852147', '2021-06-09', '2021-06-25', 70203024, NULL, NULL, 'sambare12@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78456321', '78456321', 1, '2021-06-12 11:17:44', '2021-06-12 11:17:44'),
(134, 173, 'DIALLO', 'Sita', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 1, '2021-06-12 11:38:51', '2021-06-12 11:38:51'),
(135, 174, 'MILLOGO', 'Ramata', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita12@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 0, '2021-06-12 11:42:49', '2021-06-12 11:42:49'),
(136, 175, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita123@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 0, '2021-06-12 11:45:16', '2021-06-12 11:45:16'),
(137, 176, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita78@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 0, '2021-06-12 11:47:05', '2021-06-12 11:47:05'),
(138, 177, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita789@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 0, '2021-06-12 11:50:22', '2021-06-12 11:50:22'),
(139, 178, 'DAKOUROU', 'Souleymane', 'Journaliste', '2021-06-16', 'Ouagadougou', 'Burkinabè', 'HOMME', '78453698', NULL, NULL, NULL, '564564', '2021-06-15', '2021-06-26', 70203024, NULL, NULL, 'sita7899@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74589632', '7784536', 0, '2021-06-12 11:55:40', '2021-06-12 11:55:40'),
(140, 179, 'ZOUARI', 'Malickou', 'Journaliste', '2021-06-08', 'Ouagadougou', 'Burkinabè', 'HOMME', '74102036', NULL, NULL, NULL, '74185236', '2021-06-07', '2021-06-25', 78451236, NULL, NULL, 'malickou@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74859632', '78456321', 0, '2021-06-12 12:02:39', '2021-06-12 12:02:39'),
(141, 180, 'ZOUARI', 'Malickou', 'Journaliste', '2021-06-08', 'Ouagadougou', 'Burkinabè', 'HOMME', '74102036', NULL, NULL, NULL, '74185236', '2021-06-07', '2021-06-25', 78451236, NULL, NULL, 'malickou1@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '70203041', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '74859632', '78456321', 0, '2021-06-12 12:05:51', '2021-06-12 12:05:51'),
(142, 181, 'ZOUARI', 'ZOURE', 'Journaliste', '2021-07-01', 'Ouagadougou', 'Burkinabè', 'FEMININ', '78453698', '783666', 'Toure', '788', '7852236', '2021-06-08', '2021-06-25', 70203024, '70202589', 'Rue 21.177', 'zoumari@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '78453698', 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, '74589632', '78456321', 0, '2021-06-12 12:19:06', '2021-06-12 12:19:06'),
(143, NULL, 'ROUAMBA', 'Pouga', 'Journaliste', NULL, NULL, NULL, 'HOMME', '245', '783666', 'Toure', '788', NULL, '2021-06-04', '2021-06-26', 70203045, '70202589', 'Rue 21.177', 'zoromela@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2564564', '78563214', 1, '2021-06-12 12:34:55', '2021-06-14 18:21:32'),
(144, 183, 'ZOUARI', 'ZOURE', 'Journaliste', '2021-07-01', 'Ouagadougou', 'Burkinabè', 'FEMININ', '78453698', '783666', 'Toure', '788', '7852236', '2021-06-08', '2021-06-25', 70203024, '70202589', 'Rue 21.177', 'zoumari1234@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '78453698', 'Rue 21.155', NULL, NULL, NULL, NULL, NULL, '74589632', '78456321', 1, '2021-06-12 12:36:14', '2021-06-12 12:36:14'),
(145, 184, 'MADIAGA', 'Aristide', 'Journaliste', '2021-06-22', 'Bobo', '255', 'HOMME', '74102036', NULL, NULL, NULL, '7859632', '2021-06-15', '2021-06-25', 70203024, NULL, NULL, 'madiaga@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '78453698', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78963214', '78456321', 0, '2021-06-12 12:39:54', '2021-06-12 12:39:54'),
(146, 185, 'TOURE', 'Arnaud', 'Journaliste', '2021-06-22', 'Bobo', 'Burkinabe', 'HOMME', '74102036', NULL, NULL, NULL, '7852236', '2021-06-16', '2021-06-25', 70203024, NULL, NULL, 'tourila@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'RFI', '78453698', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, 'B78453621', '78456321', 0, '2021-06-12 12:48:17', '2021-06-12 12:48:17'),
(147, 186, 'SAMANDOULGOU', 'Alidou', 'Journaliste', '2021-06-08', 'Bobo', 'Burkinabè', 'MASCULIN', '78453698', '783666', 'Toure', '5', '564564', '2021-06-15', '2021-06-25', 74123689, '78655122', 'Rue 21.177', 'alidou5@yahoo.fr', 'TOURE FRANCK', 'Bobo Dioulasso', NULL, 'Radio Omega', '85895', 'Rue 21.158', NULL, NULL, NULL, NULL, NULL, '45879632', '4546', 1, '2021-06-12 13:00:44', '2021-06-12 13:00:44'),
(148, 187, 'ZOUMBARA', 'Kalilou', 'Journaliste', NULL, 'Bobo', 'Burkinabè', 'HOMME', '5664564', '78543269', 'Toure', '785', '7859632', NULL, NULL, 70203024, '78655122', 'Toure Alidou', 'souare@yahoo.fr', 'TOURE Alidou', 'Bobo Dioulasso', NULL, 'RFI', '78453698', 'Rue 21.1558', NULL, NULL, NULL, NULL, NULL, '78456321', '852147', 1, '2021-06-12 14:58:18', '2021-06-13 10:13:57'),
(149, 188, 'DIABOUGOU', 'Aline', 'Journaliste', '2021-06-15', 'ouagadougou', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '78459632', '2021-06-15', '2021-06-25', 70203045, NULL, NULL, 'diabougou@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', '78456332', 'Rue 22.144', NULL, NULL, NULL, NULL, NULL, 'B78456321', '78563214', 0, '2021-06-13 17:34:24', '2021-06-13 17:34:24'),
(150, 189, 'DIABOUGA', 'Pouga', 'Journaliste', NULL, NULL, NULL, 'HOMME', '245', NULL, NULL, NULL, NULL, '2021-06-04', '2021-06-26', 70203045, NULL, NULL, 'zoromela@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2564564', '78563214', 1, '2021-06-14 06:01:56', '2021-06-14 18:29:24'),
(151, 190, 'TAMBOULA', 'Cheik Omar', 'Journaliste', NULL, 'Boromo', 'Burkinabè', 'HOMME', '7455', '45787', 'journaliste', '4545', '535635', NULL, NULL, 70203045, '70203040', 'rue 22.145', 'tamboula12@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '44545', '45454', NULL, NULL, NULL, NULL, NULL, '7855236', '70000000', 1, '2021-06-14 11:22:28', '2021-06-14 11:32:33'),
(152, 191, 'TAMBOULA', 'Alimata', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'MASCULIN', '557', '45689', 'journaliste', '4575', '7565756', '2021-06-16', '2021-06-24', 70203045, '70203040', 'rue 22.145', 'tatata@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '78456332', 'Rue 22.144', NULL, NULL, NULL, NULL, NULL, '55', '75757', 1, '2021-06-14 12:12:51', '2021-06-14 12:12:51'),
(153, 192, 'KONATE', 'Arnaud', 'Journaliste', '2021-06-15', 'Boromo', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '788656', '2021-06-23', '2021-06-17', 70203045, NULL, NULL, 'konatelo@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'Sidwaya', '78566', NULL, NULL, NULL, NULL, NULL, NULL, '7855236', '455556', 0, '2021-06-15 08:30:27', '2021-06-15 08:30:28'),
(154, 193, 'KONATE', 'Arnaud', 'Journaliste', '2021-06-15', 'Boromo', 'Burkinabè', 'HOMME', 'B78541236', NULL, NULL, NULL, '788656', '2021-06-23', '2021-06-17', 70203045, NULL, NULL, 'konatelo1@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'Sidwaya', '78566', NULL, NULL, NULL, NULL, NULL, NULL, '7855236', '455556', 0, '2021-06-15 08:35:53', '2021-06-15 08:35:53'),
(155, 194, 'TAMBOULARE', 'Alphonse', 'Journaliste', '2021-06-09', 'ouagadougou', 'Burkinabè', 'FEMME', '51556', NULL, NULL, NULL, '254545', '2021-06-21', '2021-06-11', 7845125, NULL, NULL, 'tamboulare@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '785236', NULL, NULL, NULL, NULL, NULL, NULL, 'B7855226', '544525', 0, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(156, 195, 'GANAME', 'Jean de dieu', 'Journaliste', '2021-06-10', 'ouagadougou', 'Burkinabè', 'HOMME', '545456', '54545', 'journaliste', '21454', NULL, '2021-06-22', '2021-06-09', 7845125, '78559625', 'rue 22.145', 'ganame2020@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', NULL, 'RFI', '5545', 'Rue 478', NULL, NULL, NULL, NULL, NULL, '78555', '554', 1, '2021-06-16 05:11:00', '2021-06-16 05:47:30'),
(157, 196, 'DIABOUGA', 'Herman', 'Journaliste', '2021-06-10', 'Boromo', 'Burkinabè', 'HOMME', '78562265', '412546', 'journaliste', '4575', '8899696', '2021-06-22', '2021-06-24', 78451236, '78542136', 'TOURE ALIDOU', 'diabouga2@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '78963215', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, 'B78456321', '70203045', 1, '2021-06-16 10:23:21', '2021-06-17 07:01:19'),
(158, 197, 'TRAORE', 'Assitou', 'Journaliste', '2021-06-08', 'Boromo', 'Burkinabè', 'FEMININ', '786325', '789452', 'journaliste', '785421', '789654', '2021-06-08', '2021-07-01', 70203045, '74859632', 'rue 22.145', 'traore_assitou@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '741966', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, 'B8965552', '741258', 1, '2021-06-17 07:11:57', '2021-06-17 07:11:59'),
(159, 198, 'TRAORE', 'Ibrahim', 'journaliste', '2021-06-14', 'Boromo', 'Burkinabè', 'MASCULIN', '78523654', '785696', 'journaliste', '4545', '4888', '2021-06-08', '2021-06-25', 7452145, '5454', NULL, 'ibrat@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '457822', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '88588', '59658', 1, '2021-06-17 07:26:07', '2021-06-17 07:26:07'),
(160, 198, 'TRAORE', 'Ibrahim', 'journaliste', '2021-06-14', 'Boromo', 'Burkinabè', 'MASCULIN', '78523654', '785696', 'journaliste', '4545', '4888', '2021-06-08', '2021-06-25', 7452145, '5454', NULL, 'ibrat@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '457822', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '88588', '59658', 1, '2021-06-17 07:27:27', '2021-06-17 07:27:27'),
(161, 199, 'TRAORE', 'Ibrahim', 'journaliste', '2021-06-14', 'Boromo', 'Burkinabè', 'MASCULIN', '78523654', '785696', 'journaliste', '4545', '4888', '2021-06-08', '2021-06-25', 7452145, '5454', NULL, 'ibrat1@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '457822', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '88588', '59658', 0, '2021-06-17 07:27:56', '2021-06-17 07:27:56'),
(162, 200, 'DOUMBIA', 'Alphonse', 'Journaliste', '2021-07-07', 'Boromo', 'Burkinabè', 'MASCULIN', '566', '5454', 'journaliste', '546', '63565', '2021-06-15', '2021-06-09', 55646, '6565', 'Rue 526', 'alphonse2@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', NULL, 'RFI', '5454', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '6565', '545', 1, '2021-06-17 07:33:03', '2021-06-17 07:33:03'),
(163, 201, 'TRAORE', 'Sa Akim', 'Journaliste', '2021-06-15', 'Boromo', 'Burkinabè', 'MASCULIN', 'S78963214', '78566', 'Journaliste', '545', '78452136', '2021-06-16', '2021-06-24', 78542136, '78541236', 'rue 22.145', 'akim@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '70215896', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '78452125', '70203045', 1, '2021-06-18 07:42:24', '2021-06-18 07:42:26'),
(164, 202, 'SAMANDOULGOU', 'Joel Herman', 'Journaliste', '2021-06-08', 'ouagadougou', 'Burkinabè', 'HOMME', '45456', NULL, NULL, NULL, NULL, '2021-06-16', '2021-06-26', 785596, NULL, NULL, 'samandoulgou@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '465565', NULL, NULL, NULL, NULL, NULL, NULL, '4566', '456456', 0, '2021-06-18 15:30:20', '2021-06-18 15:43:05'),
(165, 203, 'KOANDA', 'Kader Arnaud', 'Monteur', '2021-06-16', 'Kaya', 'Burkinabè', 'HOMME', '78521478', '56565', 'journaliste', '5544', '455458', '2021-06-15', '2021-06-23', 70101010, '75214785', 'rue 22.145', 'koanda2@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '555', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '78541269', '78451236', 1, '2021-06-18 15:49:38', '2021-06-18 16:59:53'),
(166, 204, 'TRAORET', 'ALIDOU', 'Journaliste', '1988-05-14', 'ouagadougou', 'Burkinabè', 'MASCULIN', '147852', '124578', 'journaliste', '124578', '124578', '1111-11-11', '1111-11-11', 142578, '124578', 'KADIOGO', 'traoret@yahoo.fr', 'TRAORET ALICE', 'Burkina Faso', 'Kadiogo', 'RFI', '124578', 'KADIOGO', NULL, NULL, NULL, NULL, NULL, '1245124', '124578', 1, '2021-06-18 17:35:19', '2021-06-18 17:35:20'),
(167, 205, 'DIABOUGA', 'Assita Nadège Kadi', 'Journaliste', '2021-06-09', 'Boromo', 'Burkinabè', 'HOMME', '78544258', '55585', 'TOURE Alidou', '7855266', NULL, '2021-06-16', '2021-07-02', 78541220, '78451236', 'rue 22.145', 'oui@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '7845256', NULL, NULL, NULL, NULL, NULL, NULL, '78456321', '7855', 1, '2021-06-19 09:14:20', '2021-06-19 10:15:17'),
(168, 206, 'TRAORE', 'Faridatou', 'journaliste', '2021-06-15', 'Boromo', 'Burkinabè', 'HOMME', '5546', '78541236', '70201478', '78965218', '2356545', '2021-06-08', '2021-06-25', 70203654, '70201035', 'rue 22.145', 'syfarid@yahoo.fr', '78452136', 'Burkina Faso', 'Rue 21.155', 'RFI', '78589632', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '78541236', '70124587', 1, '2021-06-19 10:27:01', '2021-06-19 10:37:21'),
(169, 207, 'DALOUA', 'Ali Noel', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-23', '2021-06-24', 785555, NULL, NULL, 'dali@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '55757', NULL, NULL, NULL, NULL, NULL, NULL, '5455', '78563214', 0, '2021-06-19 16:29:55', '2021-06-19 16:29:55'),
(170, 208, 'DALOUA', 'Ali Noel vataza', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-23', '2021-06-24', 785555, NULL, NULL, 'dali2@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '55757', NULL, NULL, NULL, NULL, NULL, NULL, '5455', '78563214', 0, '2021-06-19 16:37:16', '2021-06-19 16:37:16'),
(171, 209, 'DALOUA', 'Ali Noel vatazara', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-23', '2021-06-24', 785555, NULL, NULL, 'dali23@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '55757', NULL, NULL, NULL, NULL, NULL, NULL, '5455', '78563214', 0, '2021-06-19 16:39:40', '2021-06-19 16:39:41'),
(172, 210, 'DALOUA', 'Ali Noel vatazara', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-23', '2021-06-24', 785555, NULL, NULL, 'dali234@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '55757', NULL, NULL, NULL, NULL, NULL, NULL, '5455', '78563214', 0, '2021-06-19 16:43:34', '2021-06-19 16:43:34'),
(173, 211, 'DALOUA', 'Ali Noel vatazara', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-23', '2021-06-24', 785555, NULL, NULL, 'dali2345@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '55757', NULL, NULL, NULL, NULL, NULL, NULL, '5455', '78563214', 0, '2021-06-19 16:49:08', '2021-06-19 16:49:08'),
(174, 212, 'TOURE', 'Alimata Samira', 'Journaliste', '2021-06-08', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-16', '2021-06-24', 70203045, NULL, NULL, 'ouiassita@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '78578', NULL, NULL, NULL, NULL, NULL, NULL, '785758', '555555555', 0, '2021-06-19 16:57:17', '2021-06-19 16:57:17'),
(175, 213, 'SOUARE', 'Paulin', 'Journaliste', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-01', '2021-06-27', 78632145, NULL, NULL, 'souare12@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '56565', NULL, NULL, NULL, NULL, NULL, NULL, '78542369', '554', 0, '2021-06-19 17:02:15', '2021-06-19 17:02:15'),
(176, 214, 'TIRAOGO', 'Bandala', 'Journaliste', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '555', NULL, NULL, NULL, '5445', '2021-06-15', '2021-06-25', 785555, NULL, NULL, 'bandala@yahoo.fr', 'TRAORET ALICE', 'Bobo Dioulasso', NULL, 'RFI', '75787', NULL, NULL, NULL, NULL, NULL, NULL, '86568', '75757', 0, '2021-06-19 17:07:05', '2021-06-19 17:07:05'),
(177, 215, 'TAMARA', 'Arnaud', 'Journaliste', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-16', '2021-06-24', 55646, NULL, NULL, 'tamara123@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'RFI', '75787', NULL, NULL, NULL, NULL, NULL, NULL, '455', '565', 0, '2021-06-19 17:32:51', '2021-06-19 17:32:51'),
(178, 216, 'ggre', 'rgtret', 'retgret', '2021-06-01', 'retret', 'retret', 'Masculin', '656', NULL, NULL, NULL, '6565', '2021-06-15', '2021-06-24', 656, NULL, NULL, 'tatatapp@yahoo.fr', 'dezz', 'erezrze', NULL, 'eaze', '656', NULL, NULL, NULL, NULL, NULL, NULL, '656', '656', 0, '2021-06-19 17:37:18', '2021-06-19 17:37:19'),
(179, 217, 'rtretr', 'retrr', 'rtgrtre', '2021-06-09', 'retretr', 'retret', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-09', '2021-06-25', 55646, NULL, NULL, 'makisso@yahoo.fr', 'Toure Arnaud', 'sfdfdsfd', NULL, 'gff', '5645', NULL, NULL, NULL, NULL, NULL, NULL, 'fdfdsf', '55', 0, '2021-06-19 17:43:37', '2021-06-19 17:43:37'),
(180, 218, 'SAMANDOULGOU', 'Aristide Armand', 'Journaliste', '2021-06-25', 'Boromo', 'Burkinabè', 'Masculin', 'fdgf', 'fdgd', 'TOURE Alidou', '656', '56gfdgfd', '2021-06-15', '2021-06-25', 856556, '6556', 'rue 22.145', 'tiao@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', 'Rue 21.155', 'RFI', '665', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '256', '626556', 1, '2021-06-19 18:07:37', '2021-06-19 18:07:37'),
(181, 219, 'DIABOUGA', 'Ganine', 'Journaliste', '2021-06-08', 'Boromo', 'Burkinabè', 'Masculin', '2656', NULL, NULL, NULL, '6565', '2021-06-09', '2021-06-24', 78541220, NULL, NULL, 'ganine2@yahoo.fr', 'TRAORET ALICE', 'Bobo Dioulasso', NULL, 'RFI', '4545', NULL, NULL, NULL, NULL, NULL, NULL, '556', '25456', 0, '2021-06-19 18:40:35', '2021-06-19 18:40:35'),
(182, 220, 'marcelin', 'marcelin', 'informaticien', '2021-06-03', 'ouaga', 'burkinabé', 'Masculin', 'p1488', NULL, NULL, NULL, 'cc178', '2021-06-19', '2021-06-19', 5034271, NULL, NULL, 'marcelin@gmail.com', 'ismael', 'ouagadougou', NULL, 'sidwaya', '47878', NULL, NULL, NULL, NULL, NULL, NULL, 'cnib 07', '74891254', 0, '2021-06-19 18:41:27', '2021-06-19 18:41:27'),
(183, 221, 'TRAORE', 'Adama', 'Journaliste', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-22', '2021-06-24', 70142569, NULL, NULL, 'traadama@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', NULL, 'France 24', '702665', NULL, NULL, NULL, NULL, NULL, NULL, '5565', '568', 0, '2021-06-19 19:09:41', '2021-06-19 19:09:42'),
(184, 222, 'TRAORE', 'Ibrahim', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '455', NULL, NULL, NULL, '5566', '2021-06-08', '2021-06-25', 70203045, NULL, NULL, 'ibi@yahoo.fr', 'Toure Arnaud', 'Ouagadougou', NULL, 'RFI', '87888', NULL, NULL, NULL, NULL, NULL, NULL, 'B78456321', '59658', 0, '2021-06-19 19:27:11', '2021-06-19 19:27:11'),
(185, 223, 'TRAORE', 'Arnaud', 'Journaliste', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '54554', '6565', 'TOURE Alidou', '5546', '2455', '2021-06-08', '2021-06-26', 54526, '70001263', 'rue 22.145', 'tramita@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '2565', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '7556', '78451236', 1, '2021-06-20 05:51:23', '2021-06-20 05:51:24'),
(186, 224, 'TRAORE', 'Arnaud', 'Journaliste', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '54554', '6565', 'TOURE Alidou', '5546', '2455', '2021-06-08', '2021-06-26', 54526, '70001263', 'rue 22.145', 'tramita2@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '2565', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '7556', '78451236', 0, '2021-06-20 05:55:38', '2021-06-20 05:55:39'),
(187, 225, 'TRAORE', 'Arnaud', 'Journaliste', '2021-06-23', 'Boromo', 'Burkinabè', 'Masculin', '54554', '6565', 'TOURE Alidou', '5546', '2455', '2021-06-08', '2021-06-26', 54526, '70001263', 'rue 22.145', 'tramita23@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '2565', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '7556', '78451236', 0, '2021-06-20 05:56:58', '2021-06-20 05:56:58'),
(188, 226, 'SAMANDOULGOU', 'Lionel', 'Journaliste', '2021-06-04', 'kaya', 'Burkinabè', 'Masculin', '5454', '25585', 'TOURE Alidou', '878', '2415', '2021-06-16', '2021-06-26', 78541220, '78559625', 'rue 22.145', 'gagag@yahoo.fr', 'TRAORET ALICE', 'Bobo Dioulasso', 'Rue 21.155', 'RFI', '7855', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '78542369', '78555', 1, '2021-06-20 06:27:34', '2021-06-20 06:27:35'),
(189, 227, 'kjhjkhjk', 'oioioioi', 'hjhjhj', '2021-06-23', 'kjkjioj', 'kjkjk', 'Masculin', '188', 'hjgjhg', 'gfhgfjhg', 'hjgjhg', '5454', '2021-06-24', '2021-06-27', 4, '54', '554', 'lili@yahoo.fr', '22', 'jhjijoij', 'kjoiokjj', 'jhgjh', '54454', 'jhgjh', NULL, NULL, NULL, NULL, NULL, '5454', '255', 1, '2021-06-20 06:39:04', '2021-06-20 06:39:05'),
(190, 228, 'sfdsf', 'bhghgh', 'hghg', '2021-06-22', 'gfgfgf', 'hgfghfg', 'Masculin', '54545', '454', 'ghgh', '5454', '2454', '2021-06-10', '2021-07-03', 5454, '5454', 'hghg', 'gratali@yahoo.fr', 'Toure Arnaud', 'ytrtyryt', 'Rue 21.155', 'jhggh', '5424', 'hghg', NULL, NULL, NULL, NULL, NULL, '45454', '5454', 1, '2021-06-20 06:45:31', '2021-06-20 06:45:32'),
(191, 229, 'ndbndsbf', 'nbnbb', 'nnbkbk', '2021-06-10', 'jhgjhgjh', 'hjgjghj', 'Masculin', 'jhjh', '245', 'hghgf', '545', '5454', '2021-06-17', '2021-07-03', 3545, '54354', 'gfgf', 'tataop@yahoo.fr', 'hghg', 'rue 2656', 'hgfhfh', 'nghg', '2454', 'ghgg', NULL, NULL, NULL, NULL, NULL, '545', '545', 0, '2021-06-20 06:48:39', '2021-06-20 06:48:39'),
(192, 230, 'sdqsdsqd', 'jhjkhgj', 'jkhjkhkj', '2021-06-18', 'hgh', 'hjgjh', 'Masculin', '5454', 'h454', 'jhjgh', '515241', '1454', '2021-06-09', '2021-06-26', 45456, '5555', 'hgggh', 'trooo@yahoo.fr', 'jhyujh', 'Bobo Dioulasso', 'Rue 21.155', 'hghf', '4545', 'hgfg', NULL, NULL, NULL, NULL, NULL, '5454', '5445', 1, '2021-06-20 07:01:14', '2021-06-20 07:01:14'),
(193, 233, 'TRAORE', 'Ardiouma', 'Journaliste', '1990-02-22', 'Banfora', 'Burkinabé', 'Masculin', NULL, NULL, NULL, NULL, NULL, '2021-06-24', '2021-02-12', 70414909, NULL, NULL, 't_ardioum1111@yahoo.fr', 'SKSJCNSJ NJNSCJSCH', 'Kadiogo,Ouagadougou,Larlé', NULL, 'RFI', '78859632', NULL, NULL, NULL, NULL, NULL, NULL, 'B1922729', '74859632', 0, '2021-06-20 12:04:18', '2021-06-20 12:04:19'),
(194, 235, 'ZAZOU', 'ABDIUL KARIM', 'JOURNALISTE', '2021-06-17', 'OUAGADOUGOU', 'BURKINABE', 'Masculin', NULL, '7855', 'journaliste', '78542369', NULL, '2021-06-24', '2021-06-23', 124578, '78652352', 'Rue 44.1578', 'zazou2021@yahoo.fr', 'TRAORET ALICE', 'Burkina Faso', 'Rue 21.155', 'RFI', '78456332', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '12457', '78451236', 1, '2021-06-20 12:12:02', '2021-06-20 16:20:55'),
(195, 236, 'DIANDA', 'Arnaud', 'Journaliste', '2021-06-15', 'Boromo', 'Burkinabè', 'Masculin', '78541265', '5455', 'TOURE Alidou', '7875421', '78452136', '2021-06-15', '2021-06-26', 7577555, '26566566', 'rue 22.145', 'dianda45@yahoo.fr', 'Toure Arnaud', 'Burkina Faso', 'Rue 21.155', 'RFI', '78452136', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '78541236', '78451236', 1, '2021-06-20 12:55:29', '2021-06-20 12:55:30'),
(196, 237, 'KONATE', 'Nafissatou', 'Journaliste', '1998-04-12', 'Wangolo', 'Burkinabé', 'Feminin', NULL, NULL, 'Agent de bureau', '00000124', NULL, '2016-02-15', '2026-02-14', 74859632, '0022625416398', 'Kadiogo, Ziniaré, , ,', 'nafi156@gmail.com', 'ZONGO Ousmane', 'Burkina Faso', 'Kadiogo,Ouagadougou,Gounguin', 'Le Pays', '78965412', 'Ouaga', NULL, NULL, NULL, NULL, NULL, 'B1922754', '74853210', 1, '2021-06-20 14:33:53', '2021-06-20 14:33:54'),
(197, 238, 'KAM', 'Mamadou', 'Journaliste', '1978-05-12', 'Loumbila', 'Burkinabé', 'Masculin', NULL, NULL, 'Agent de bureau', '00000124', NULL, '2021-02-15', '2031-02-14', 78965423, '0022650849657', 'Kadiogo', 'mamadou@gamail.com', 'ZONGO Ousmane', 'Burkina Faso', 'Kadiogo,Bobo-Dioulasso,Yegueré', 'Omega', '78965412', 'Ouaga', NULL, NULL, NULL, NULL, NULL, 'B19227458', '74853210', 1, '2021-06-20 16:22:28', '2021-06-20 16:22:29'),
(198, 239, 'ILBOUDO', 'Idrissa', 'Journaliste', '1978-08-15', 'Koupéla', 'Burkinabé', 'Masculin', NULL, '125', 'Agent de bureau', '00000124', NULL, '2014-08-15', '2024-08-14', 70414909, '0022678965230', 'Kadiogo, Ziniaré, , ,', 'idriss@gmail.com', 'OUATTARA Lamine', 'Burkina Faso', 'Kadiogo,Ouagadougou,Gounguin', 'Le Pays', '78965412', 'Ouaga', NULL, NULL, NULL, NULL, NULL, 'B4596321', '74853210', 0, '2021-06-20 16:49:20', '2021-06-20 17:00:46'),
(199, 240, 'SOLOMANI', 'DALOU', 'Journaliste', '2021-06-09', 'Boromo', 'Burkinabè', 'Masculin', '5556', '4545', 'journaliste', '454', '25665', '2021-06-23', '2021-06-24', 5585, '62566', 'rue 22.145', 'badoulo@yahoo.fr', 'TRAORET ALICE', 'Bobo Dioulasso', 'Rue 21.155', 'RFI', '4545', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, '26663', '2565', 0, '2021-06-20 17:06:19', '2021-06-20 17:07:19'),
(200, 241, 'SAMANDOULGOU', 'Sa Akim', 'Journaliste', '2021-06-23', 'Gaoua', 'Burkinabè', 'Masculin', '5454', '877866', 'journaliste', '78542369', '5454', '2021-06-09', '2021-06-22', 55646, '5454', 'rue 22.145', 'saoiu@yahoo.fr', 'Toure Arnaud', 'Bobo Dioulasso', 'Rue 21.155', 'France 24', '78456332', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, 'B78456321', '78451236', 1, '2021-06-20 17:46:39', '2021-06-20 17:58:45'),
(201, 242, 'ZONGO', 'ALI', 'JOURNALISTE', '2021-06-29', 'OUAGADOUGOU', 'BURKINABE', 'Masculin', '11111AZ', '1253', 'CAMERAMAN', '2021', '11233AZ', '2021-05-31', '2021-06-23', 123461, '124578', 'OUAGA 10', 'zongoali2021@yahoo.fr', 'TOURE KIRI', 'BURKINA', 'OUAGA', 'BF1', '121212', 'KAYA', NULL, NULL, NULL, NULL, NULL, '1111', '11111', 1, '2021-06-20 18:08:55', '2021-06-20 18:26:58'),
(202, 243, 'SAMANDOULGOU', 'Sa Akim', 'Journaliste', '2021-06-16', 'Boromo', 'Burkinabè', 'Masculin', '4545', '565', 'Journaliste', '5566', '4545', '2021-06-08', '2021-06-25', 78541220, '85868', 'rue 22.145', 'samara@yahoo.fr', 'TRAORET ALICE', 'Bobo Dioulasso', 'Rue 21.155', 'RFI', '5454', 'Rue 22.1287', NULL, NULL, NULL, NULL, NULL, 'B78456321', '775587', 1, '2021-06-20 19:35:22', '2021-06-20 20:18:47');

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
  `iduser` int(11) DEFAULT NULL,
  `organe` varchar(255) DEFAULT NULL,
  `telorgane` varchar(20) DEFAULT NULL,
  `adresseorgane` varchar(255) DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '1',
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
(5, 209, NULL, 'RFI', '5545', NULL, 1, '2021-06-16 05:46:59', '2021-06-16 05:46:59'),
(6, 209, NULL, 'RFI', '5545', NULL, 1, '2021-06-16 05:47:30', '2021-06-16 05:47:30'),
(7, 210, 196, 'RFI', '78456332', 'Rue 44', 1, '2021-06-16 10:23:21', '2021-06-16 10:23:21'),
(8, 216, 202, 'RFI', '465565', 'Rue 44', 1, '2021-06-18 15:30:20', '2021-06-18 15:30:20'),
(9, 216, 202, 'RFI', '465565', NULL, 1, '2021-06-18 15:41:33', '2021-06-18 15:41:33'),
(10, 216, 202, 'RFI', '465565', NULL, 1, '2021-06-18 15:43:05', '2021-06-18 15:43:05'),
(11, 219, 205, 'RFI', '7845256', NULL, 1, '2021-06-19 10:15:17', '2021-06-19 10:15:17'),
(12, 220, 206, 'RFI', '70215896', 'Rue 44', 1, '2021-06-19 10:27:01', '2021-06-19 10:27:01'),
(13, 221, 207, 'RFI', '55757', 'Rue 44', 1, '2021-06-19 16:29:54', '2021-06-19 16:29:54'),
(14, 223, 208, 'RFI', '55757', 'Rue 44', 1, '2021-06-19 16:37:15', '2021-06-19 16:37:15'),
(15, 227, 209, 'RFI', '55757', 'Rue 44', 1, '2021-06-19 16:39:40', '2021-06-19 16:39:40'),
(16, 229, 210, 'RFI', '55757', 'Rue 44', 1, '2021-06-19 16:43:34', '2021-06-19 16:43:34'),
(17, 233, 211, 'RFI', '55757', 'Rue 44', 1, '2021-06-19 16:49:07', '2021-06-19 16:49:07'),
(18, 234, 212, 'RFI', '78578', 'Rue 44', 1, '2021-06-19 16:57:17', '2021-06-19 16:57:17'),
(19, 235, 213, 'RFI', '56565', 'Rue 44', 1, '2021-06-19 17:02:15', '2021-06-19 17:02:15'),
(20, 236, 214, 'RFI', '75787', 'Rue 44', 1, '2021-06-19 17:07:05', '2021-06-19 17:07:05'),
(21, 237, 215, 'RFI', '75787', 'Rue 44', 1, '2021-06-19 17:32:51', '2021-06-19 17:32:51'),
(22, 238, 216, 'eaze', '656', 'zeaeza', 1, '2021-06-19 17:37:18', '2021-06-19 17:37:18'),
(23, 239, 217, 'gff', '5645', 'gfhgfvg', 1, '2021-06-19 17:43:37', '2021-06-19 17:43:37'),
(24, 241, 219, 'RFI', '4545', 'Rue 44', 1, '2021-06-19 18:40:35', '2021-06-19 18:40:35'),
(25, 242, 220, 'sidwaya', '47878', 'bpr41', 1, '2021-06-19 18:41:27', '2021-06-19 18:41:27'),
(26, 243, 221, 'France 24', '702665', 'Rue 44', 1, '2021-06-19 19:09:41', '2021-06-19 19:09:41'),
(27, 244, 222, 'RFI', '87888', 'Rue 44', 1, '2021-06-19 19:27:11', '2021-06-19 19:27:11'),
(28, 254, 231, 'RFI', '7885963231', 'JNCJSNS SSJSBCJSNB', 1, '2021-06-20 11:52:03', '2021-06-20 11:52:03'),
(29, 255, 232, 'RFI', '7885963231', 'JNCJSNS SSJSBCJSNB', 1, '2021-06-20 12:00:42', '2021-06-20 12:00:42'),
(30, 256, 233, 'RFI', '78859632', 'JNCJSNS SSJSBCJSNB', 1, '2021-06-20 12:04:18', '2021-06-20 12:04:18'),
(31, 257, 234, 'RFI', '12345678912345678', 'OUAGA', 1, '2021-06-20 12:08:20', '2021-06-20 12:08:20'),
(32, 258, 235, 'RFI', '1234567891011121214', 'OUAGA', 1, '2021-06-20 12:12:01', '2021-06-20 12:12:01'),
(33, 262, 239, 'Le Pays', '78965498', 'JNCJSNS SSJSBCJSNB', 1, '2021-06-20 16:49:20', '2021-06-20 16:49:20'),
(34, 263, 240, 'RFI', '454', 'Rue 44', 1, '2021-06-20 17:06:19', '2021-06-20 17:06:19'),
(35, 264, 241, 'France 24', '78963215', '554', 1, '2021-06-20 17:46:39', '2021-06-20 17:46:39'),
(36, 265, 242, 'RFI', '121212', 'OUAGA', 1, '2021-06-20 18:08:55', '2021-06-20 18:08:55'),
(37, 266, 243, 'RFI', '4455', 'Rue 44', 1, '2021-06-20 19:35:22', '2021-06-20 19:35:22');

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
  `pjlaissezpasser` varchar(255) DEFAULT NULL,
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

INSERT INTO `piecesjointes` (`id`, `idaccreditation`, `photo`, `cv`, `pjpasseport`, `pjcnib`, `pjcartepresse`, `pjlaissezpasser`, `pjcnibperprev`, `pjpasseportperprev`, `pjcarteconsulaire`, `visamedia`, `lettrerecommendation`, `idcorrespondant`, `iddemandeur`, `actif`, `updated_at`, `created_at`) VALUES
(254, 116, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2 DEMANDES D\'AUDIENCES_Michel (1) (1).docx', NULL, 147, 1, '2021-06-12 13:05:45', '2021-06-12 13:05:45'),
(255, 117, 'accreditaion.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'vueinformationevoluée.JPG', NULL, 148, 1, '2021-06-13 17:19:55', '2021-06-12 14:59:47'),
(256, NULL, 'accreditation2.jpg', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 202, NULL, 1, '2021-06-13 17:34:52', '2021-06-13 17:34:52'),
(257, NULL, 'Recépissé _ Hawa.pdf', 'bdmeetdoctor.sql', NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 203, NULL, 1, '2021-06-14 12:46:02', '2021-06-14 06:02:09'),
(258, 138, 'rapport T1 2020.docx', NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 151, 1, '2021-06-14 11:34:37', '2021-06-14 11:23:50'),
(259, 141, 'Recépissé _ Hawa.pdf', NULL, NULL, 'Recépissé _ Hawa.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'meetdoc_26102020.sql', NULL, 152, 1, '2021-06-14 12:24:11', '2021-06-14 12:16:29'),
(260, NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 208, NULL, 1, '2021-06-15 09:37:43', '2021-06-15 09:37:43'),
(261, NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 208, NULL, 1, '2021-06-15 09:48:50', '2021-06-15 09:48:50'),
(264, NULL, 'accreditaion.jpg', 'accreditation2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-06-16 04:58:52', '2021-06-16 04:58:52'),
(265, NULL, 'bd_recop_31052021.sql', 'bdmusee.sql', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-06-16 05:07:14', '2021-06-16 05:07:14'),
(269, NULL, 'accreditaion.jpg', 'bd_recop_31052021.sql', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accreditation2.jpg', NULL, 209, NULL, 1, '2021-06-16 05:42:44', '2021-06-16 05:39:28'),
(270, NULL, 'bd_recop_15062021.sql', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 210, NULL, 1, '2021-06-16 10:23:34', '2021-06-16 10:23:34'),
(272, 156, 'C:\\xampp\\tmp\\php1DF1.tmp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php1DE1.tmp', NULL, NULL, 1, '2021-06-17 05:05:47', '2021-06-17 05:05:47'),
(273, 175, 'bdmusee.sql', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accreditaion.jpg', NULL, 157, 1, '2021-06-17 06:34:46', '2021-06-17 06:34:46'),
(274, 176, NULL, NULL, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accreditation2.jpg', NULL, 157, 1, '2021-06-17 07:05:44', '2021-06-17 07:03:47'),
(275, 177, 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bdmeetdoctor.sql', NULL, 158, 1, '2021-06-17 07:14:48', '2021-06-17 07:14:48'),
(276, 179, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rapport T1 2020.docx', NULL, 162, 1, '2021-06-17 07:39:03', '2021-06-17 07:39:03'),
(277, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'accreditaion.jpg', NULL, 163, 1, '2021-06-18 07:44:28', '2021-06-18 07:44:28'),
(278, NULL, 'Recépissé _ Hawa.pdf', 'bdmeetdoctor.sql', 'presse_fini.pdf', 'bd_recop_last.sql', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, 'bd_recop_last.sql', NULL, 216, NULL, 1, '2021-06-18 15:43:56', '2021-06-18 15:31:55'),
(280, 181, 'tele_fini.pdf', NULL, NULL, 'presse_suite.pdf', NULL, NULL, NULL, NULL, NULL, NULL, 'presse_fini.pdf', NULL, 165, 1, '2021-06-18 15:58:06', '2021-06-18 15:58:06'),
(282, 185, 'demandeur1.JPG', NULL, 'demandeur3.JPG', 'demandeur2.JPG', NULL, NULL, 'demandeur2.JPG', NULL, 'demandeur4.JPG', NULL, 'correspondant4.JPG', NULL, 166, 1, '2021-06-18 17:39:51', '2021-06-18 17:39:51'),
(283, 188, 'Recépissé _ Hawa.pdf', NULL, NULL, 'bdmusee.sql', NULL, NULL, NULL, NULL, NULL, NULL, 'demandeur1.JPG', NULL, 167, 1, '2021-06-19 09:51:50', '2021-06-19 09:16:06'),
(284, NULL, 'accreditaion.jpg', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rapport T1 2020.docx', NULL, 219, NULL, 1, '2021-06-19 10:17:40', '2021-06-19 10:13:57'),
(285, NULL, 'rapport T1 2020.docx', 'Recépissé _ Hawa.pdf', NULL, 'rapport T1 2020.docx', 'rapport T1 2020.docx', NULL, NULL, NULL, NULL, 'bd_recop_last.sql', NULL, 220, NULL, 1, '2021-06-19 10:27:52', '2021-06-19 10:27:52'),
(286, 189, 'Recépissé _ Hawa.pdf', NULL, NULL, 'bdmusee.sql', NULL, NULL, NULL, NULL, NULL, NULL, 'Programme d\'activités 2020 Version définitive.docx', NULL, 168, 1, '2021-06-19 10:35:08', '2021-06-19 10:35:08'),
(287, NULL, 'bd_recop_dicko_040621.sql', 'bd_recop_ZOURE_04062021.sql', NULL, 'bd_recop_dicko_040621.sql', 'bd_recop_ZOURE18062021.sql', NULL, NULL, NULL, NULL, 'bd_recop_ZOURE_04062021.sql', NULL, 233, NULL, 1, '2021-06-19 16:51:06', '2021-06-19 16:51:06'),
(288, NULL, 'bd_recop_0806221.sql', 'bd_recop_15062021.sql', NULL, 'bd_recop_ZOURE_04062021.sql', 'bd_recop_0806221.sql', NULL, NULL, NULL, NULL, 'bd_recop_ZOURE_04062021.sql', NULL, 234, NULL, 1, '2021-06-19 16:58:36', '2021-06-19 16:58:36'),
(289, NULL, 'bd_recop_15062021.sql', 'bd_recop_dicko_040621.sql', NULL, 'bd_recop_ZOURE_04062021.sql', 'bd_recop_0806221.sql', NULL, NULL, NULL, NULL, 'bd_recop_31052021.sql', NULL, 235, NULL, 1, '2021-06-19 17:03:51', '2021-06-19 17:03:51'),
(290, NULL, 'bd_recop_15062021.sql', 'bd_recop_31052021.sql', NULL, 'bd_recop_31052021.sql', 'bd_recop_15062021.sql', NULL, NULL, NULL, NULL, 'bd_recop_31052021.sql', NULL, 237, NULL, 1, '2021-06-19 17:33:36', '2021-06-19 17:33:36'),
(291, NULL, 'bd_recop_0806221.sql', 'bd_recop_31052021.sql', NULL, 'bd_recop_0806221.sql', 'bd_recop_15062021.sql', NULL, NULL, NULL, NULL, 'bd_recop_ZOURE18062021.sql', NULL, 239, NULL, 1, '2021-06-19 17:44:03', '2021-06-19 17:44:03'),
(292, 190, 'bd_recop_31052021.sql', NULL, NULL, 'bd_recop_dicko_040621.sql', 'bd_recop_31052021.sql', NULL, 'bd_recop_ZOURE_04062021.sql', NULL, NULL, NULL, 'bd_recop_15062021.sql', NULL, 180, 1, '2021-06-19 18:29:11', '2021-06-19 18:29:11'),
(293, NULL, 'test.pdf', 'bd_recop_last.sql', NULL, 'bd_recop_31052021.sql', 'bd_recop_15062021.sql', NULL, NULL, NULL, NULL, 'bdmeetdoctor.sql', NULL, 241, NULL, 1, '2021-06-19 18:41:16', '2021-06-19 18:41:16'),
(294, NULL, 'test.pdf', 'Capture.PNG', NULL, 'Capture.PNG', 'Capture.PNG', NULL, NULL, NULL, NULL, 'Capture.PNG', NULL, 242, NULL, 1, '2021-06-19 18:44:47', '2021-06-19 18:44:47'),
(295, NULL, '22121-06-191624130572accreditaion.jpg', '22121-06-191624129811bd_recop_31052021.sql', NULL, '22121-06-191624129811rapport T2 2020  14.07 2020(1) VF.docx', '22121-06-191624129811sites_ministeres.txt', NULL, NULL, NULL, NULL, '22121-06-191624129811test.pdf', NULL, 243, NULL, 1, '2021-06-19 19:22:52', '2021-06-19 19:10:11'),
(296, NULL, '22221-06-191624130869accueil_footer.JPG', '22221-06-191624130869menu.JPG', '22221-06-191624130869bdmusee.sql', '22221-06-191624130869bd_recop_31052021.sql', '22221-06-191624130869rapport T2 2020  14.07 2020(1) VF.docx', NULL, NULL, NULL, NULL, '22221-06-191624130869bd_recop_last.sql', NULL, 244, NULL, 1, '2021-06-19 19:27:49', '2021-06-19 19:27:49'),
(297, 194, '23021-06-201624176890bd_recop_31052021.sql', NULL, NULL, '23021-06-201624176890bd_recop_last.sql', '23021-06-201624176890bd_recop_last.sql', NULL, '23021-06-201624176890bdmeetdoctor.sql', NULL, NULL, NULL, '23021-06-201624176890bd_recop_15062021.sql', NULL, 192, 1, '2021-06-20 08:14:50', '2021-06-20 08:14:50'),
(298, 194, '23021-06-201624182956bd_recop_31052021.sql', NULL, NULL, '23021-06-201624182956bd_recop_last.sql', '23021-06-201624182956bd_recop_last.sql', NULL, '23021-06-201624182956bdmeetdoctor.sql', NULL, NULL, NULL, '23021-06-201624182956bd_recop_15062021.sql', NULL, 192, 1, '2021-06-20 09:55:56', '2021-06-20 09:55:56'),
(299, 194, '23021-06-201624183166bd_recop_31052021.sql', NULL, NULL, '23021-06-201624183166bd_recop_last.sql', '23021-06-201624183166bd_recop_last.sql', NULL, '23021-06-201624183166bdmeetdoctor.sql', NULL, NULL, NULL, '23021-06-201624183166bd_recop_15062021.sql', NULL, 192, 1, '2021-06-20 09:59:26', '2021-06-20 09:59:26'),
(300, NULL, '23521-06-201624191218TYPO3.url', '23521-06-201624191218@IP DCMEF.docx', NULL, '23521-06-201624191218carte de presse.docx', '23521-06-201624191218Amendements de la réunion du 28 mai.docx', NULL, NULL, NULL, NULL, '23521-06-201624191218Amendements de la réunion du 28 mai.docx', NULL, 258, NULL, 1, '2021-06-20 12:13:38', '2021-06-20 12:13:38'),
(301, NULL, '23321-06-201624191335téléchargement.jpg', '23321-06-201624191335Architecture-des-Reseaux.pdf', NULL, '23321-06-201624191335téléchargement.jpg', '23321-06-201624191335téléchargement.jpg', NULL, NULL, NULL, NULL, '23321-06-201624191335Architecture-des-Reseaux.pdf', NULL, 256, NULL, 1, '2021-06-20 12:15:35', '2021-06-20 12:15:35'),
(302, 195, '23621-06-201624193886bd_recop_last.sql', NULL, NULL, '23621-06-201624193886rapport T1 2020.docx', '23621-06-201624193886test.pdf', NULL, '23621-06-201624193886rapport T1 2020.docx', NULL, NULL, NULL, '23621-06-201624193886accreditation2.jpg', NULL, 195, 1, '2021-06-20 12:58:06', '2021-06-20 12:58:06'),
(303, 196, '23721-06-201624200157téléchargement.jpg', NULL, '23721-06-201624200157téléchargement.jpg', '23721-06-201624200157téléchargement.jpg', '23721-06-201624200157téléchargement.jpg', 'C:\\xampp\\tmp\\php4DFD.tmp', '23721-06-201624200157BUGET 2020.xlsx', NULL, '23721-06-201624200157téléchargement.jpg', NULL, '23721-06-201624200157téléchargement.jpg', NULL, 196, 1, '2021-06-20 14:42:37', '2021-06-20 14:42:37'),
(304, 197, '23521-06-201624206153bd_recop_last.sql', NULL, NULL, '23521-06-201624206153bdmusee.sql', '23521-06-201624206153bdmusee.sql', NULL, '23521-06-201624206153bd_recop_last.sql', NULL, NULL, NULL, '23521-06-201624206153accreditaion.jpg', NULL, 194, 1, '2021-06-20 16:22:33', '2021-06-20 16:22:33'),
(305, 198, '23821-06-201624206390téléchargement.jpg', NULL, '23821-06-201624206390téléchargement.jpg', '23821-06-201624206390téléchargement.jpg', '23821-06-201624206390téléchargement.jpg', 'C:\\xampp\\tmp\\php6A5E.tmp', '23821-06-201624206390téléchargement.jpg', NULL, '23821-06-201624206390téléchargement.jpg', NULL, '23821-06-201624206390téléchargement.jpg', NULL, 197, 1, '2021-06-20 16:26:30', '2021-06-20 16:26:30'),
(306, NULL, '23821-06-201624206934téléchargement.jpg', '23821-06-201624206934téléchargement.jpg', NULL, '23821-06-201624206934téléchargement.jpg', '23821-06-201624206934téléchargement.jpg', NULL, NULL, NULL, NULL, '23821-06-201624206934téléchargement.jpg', NULL, 261, NULL, 1, '2021-06-20 16:35:34', '2021-06-20 16:35:34'),
(307, NULL, '23921-06-201624207788téléchargement.jpg', '23921-06-201624207788téléchargement.jpg', NULL, '23921-06-201624207788téléchargement.jpg', '23921-06-201624207788téléchargement.jpg', NULL, NULL, NULL, NULL, '23921-06-201624207788téléchargement.jpg', NULL, 262, NULL, 1, '2021-06-20 16:49:48', '2021-06-20 16:49:48'),
(308, NULL, '24021-06-201624208799bd_recop_15062021.sql', '24021-06-201624208799rapport T1 2020.docx', NULL, '24021-06-201624208799Programme d\'activités 2020 Version définitive.docx', '24021-06-201624208799test.pdf', NULL, NULL, NULL, NULL, '24021-06-201624208799test.pdf', NULL, 263, NULL, 1, '2021-06-20 17:06:39', '2021-06-20 17:06:39'),
(309, NULL, '24121-06-201624211226bd_recop_31052021.sql', '24121-06-201624211226rapport T1 2020.docx', NULL, '24121-06-201624211226test.pdf', '24121-06-201624211226rapport T2 2020  14.07 2020(1) VF.docx', NULL, NULL, NULL, NULL, '24121-06-201624211226rapport T1 2020.docx', NULL, 264, NULL, 1, '2021-06-20 17:47:06', '2021-06-20 17:47:06'),
(310, 205, '24121-06-201624212275rapport T1 2020.docx', NULL, NULL, '24121-06-201624212275rapport T1 2020.docx', '24121-06-201624212275bdmusee.sql', NULL, '24121-06-201624212275bdmusee.sql', NULL, NULL, NULL, '24121-06-201624212275bd_recop_15062021.sql', NULL, 200, 1, '2021-06-20 18:04:35', '2021-06-20 18:04:35'),
(311, NULL, '24221-06-201624212561@IP DCMEF.docx', '24221-06-201624212561@IP DCMEF.docx', '24221-06-201624212561@IP DCMEF.docx', '24221-06-201624212561@IP DCMEF.docx', '24221-06-201624212561@IP DCMEF.docx', NULL, NULL, NULL, '24221-06-201624212561@IP DCMEF.docx', '24221-06-201624212561@IP DCMEF.docx', NULL, 265, NULL, 1, '2021-06-20 18:09:21', '2021-06-20 18:09:21'),
(312, 206, '24221-06-201624212741@IP DCMEF.docx', NULL, '24221-06-201624212741@IP DCMEF.docx', '24221-06-201624212741@IP DCMEF.docx', '24221-06-201624212741@IP DCMEF.docx', 'C:\\xampp\\tmp\\php5521.tmp', '24221-06-201624212741@IP DCMEF.docx', NULL, '24221-06-201624212741@IP DCMEF.docx', NULL, '24221-06-201624212741@IP DCMEF.docx', NULL, 201, 1, '2021-06-20 18:12:21', '2021-06-20 18:12:21'),
(313, NULL, '24321-06-201624217754bd_recop_31052021.sql', '24321-06-201624217754meetdoc_26102020.sql', NULL, '24321-06-201624217754bdmeetdoctor.sql', '24321-06-201624217754bdmeetdoctor.sql', NULL, NULL, NULL, NULL, '24321-06-201624217754bd_recop_31052021.sql', NULL, 266, NULL, 1, '2021-06-20 19:35:54', '2021-06-20 19:35:54'),
(314, 207, '24321-06-201624217937rapport T1 2020.docx', NULL, NULL, '24321-06-201624217937test.pdf', '24321-06-201624217937bdmusee.sql', NULL, '24321-06-201624217937test.pdf', NULL, NULL, NULL, '24321-06-201624217937bd_recop_15062021.sql', NULL, 202, 1, '2021-06-20 19:38:57', '2021-06-20 19:38:57'),
(315, 211, '24321-06-201624220374rapport T1 2020.docx', NULL, NULL, '24321-06-201624220374meetdoc_26102020.sql', '24321-06-201624220374test.pdf', NULL, '24321-06-201624220374rapport T1 2020.docx', NULL, NULL, NULL, '24321-06-201624220374bd_recop_31052021.sql', NULL, 202, 1, '2021-06-20 20:19:34', '2021-06-20 20:19:34');

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
(190, 'TAMBOULA Cheik Omar', 'bobo', 'tamboula12@yahoo.fr', NULL, '$2y$10$nqIiXXO8IOZgntZJZBvOweDmLj7QwDvzlqrKa0jFcFDbyMAdduEfC', 1, 'Administrateur', NULL, '2021-06-14 11:22:28', '2021-06-14 11:22:28'),
(191, 'TAMBOULA Alimata', 'baza', 'tatata@yahoo.fr', NULL, '$2y$10$7RaOVF/0guCQxQeAekUJA.H7VabDATlndey/N2iSXxTDnqwVQtsGm', 1, 'Enregistre', NULL, '2021-06-14 12:12:51', '2021-06-14 12:12:51'),
(192, 'KONATE Arnaud', 'konate', 'konatelo@yahoo.fr', NULL, '$2y$10$.busk3dgKXfXV0osb2US7ukKmu.AKxnxN00vUUeZdmkgyUZ3kemHG', 1, 'Enregistre', NULL, '2021-06-15 08:30:27', '2021-06-15 08:30:27'),
(193, 'KONATE Arnaud', 'konate2', 'konatelo1@yahoo.fr', NULL, '$2y$10$bSxw0hmUAvzgRC4ew5fdie/blaot0HGx0DGNleA0V2mVHdst8kNxG', 1, 'Enregistre', NULL, '2021-06-15 08:35:53', '2021-06-15 08:35:53'),
(194, 'TAMBOULARE Alphonse', 'zamouni', 'tamboulare@yahoo.fr', NULL, '$2y$10$5Q2Hn53MVMDVxE11aB4dI.d.JL7FPTmohiRipAeKEqJ7m8jaih62a', 1, 'Enregistre', NULL, '2021-06-15 09:37:23', '2021-06-15 09:37:23'),
(195, 'GANAME Jean de dieu', 'toto', 'ganame2020@yahoo.fr', NULL, '$2y$10$iuS1XHjjmW0wvbriJjZfRO6TBvUDv2wU6QWPOH/fA5/cjgVBfcYZW', 1, 'Coordonateur', NULL, '2021-06-16 05:11:01', '2021-06-16 05:46:59'),
(196, 'DIABOUGA Herman', 'koko', 'diabouga2@yahoo.fr', NULL, '$2y$10$YQ0dCJlHx0hDCclH4anbDe6YQwM7hmeD/moMOR0cTgjOpWM9DWw0a', 1, 'Enregistre', NULL, '2021-06-16 10:23:21', '2021-06-16 10:23:21'),
(197, 'TRAORE Assitou', 'assi', 'traore_assitou@yahoo.fr', NULL, '$2y$10$L8RVZPPC0QCL19HBC/GbOOSLeepjgYAOPLitQGpk0o1q7Ulkhep.u', 1, 'Enregistre', NULL, '2021-06-17 07:11:59', '2021-06-17 07:11:59'),
(198, 'TRAORE Ibrahim', 'ibrat', 'ibrat@yahoo.fr', NULL, '$2y$10$p7vWpFs9.fo37q/Mah/lr.NZst/HYnyaxKgwkZZcGNoUWrVl1YuPS', 1, 'Verificateur', NULL, '2021-06-17 07:26:07', '2021-06-17 07:26:07'),
(199, 'TRAORE Ibrahim', 'ibrata', 'ibrat1@yahoo.fr', NULL, '$2y$10$px5ypIyrtmH15NH2Qe/vjeSTTYzLNha74Fmxb3wXqgm/0SMSwaoDW', 1, 'Enregistre', NULL, '2021-06-17 07:27:56', '2021-06-17 07:27:56'),
(200, 'DOUMBIA Alphonse', 'doumbia', 'alphonse2@yahoo.fr', NULL, '$2y$10$zWptUG.D/St7jEyckDnf..94/6HQ1bPv7eTARzVCwXuReC/jE6u4W', 1, 'Enregistre', NULL, '2021-06-17 07:33:03', '2021-06-17 07:33:03'),
(201, 'TRAORE Sa Akim', 'akim', 'akim@yahoo.fr', NULL, '$2y$10$RJ9L/jfTGRU6EKg8aETZFuvntdEfx3fgFnUZV4HYL8NdGK008US4W', 1, 'Enregistre', NULL, '2021-06-18 07:42:26', '2021-06-18 07:42:26'),
(202, 'SAMANDOULGOU Joel Herman', 'sami', 'samandoulgou@yahoo.fr', NULL, '$2y$10$U280mrpo3rW8UUjvkKcBD.EG4o8p3Qbbyux7HU7t/E0NAugB2xij.', 1, 'Enregistre', NULL, '2021-06-18 15:30:20', '2021-06-18 15:41:34'),
(203, 'KOANDA Kader Arnaud', 'bolo', 'koanda2@yahoo.fr', NULL, '$2y$10$FFZS6Db36NR4GKOLpJ2Rmey4TN4NzLU7HKWE.OozzNmfz.MZYMCAu', 1, 'Enregistre', NULL, '2021-06-18 15:49:38', '2021-06-18 16:59:53'),
(204, 'TRAORET ALIDOU', 'traoret', 'traoret@yahoo.fr', NULL, '$2y$10$HVf9a8MN/mX87sOWJ1xKJuW5vR2aqNo.Uoz5ZSTJeIY3W3nGU7Hui', 1, 'Enregistre', NULL, '2021-06-18 17:35:19', '2021-06-18 17:35:19'),
(205, 'DIABOUGA Assita Nadège Kadi', 'oui', 'oui@yahoo.fr', NULL, '$2y$10$a8XHcVdGzOe7AvlJ3s.QeOnccc2ryX6qMrCco1e2YyQRQwTRZAivi', 1, 'Enregistre', NULL, '2021-06-19 09:14:21', '2021-06-19 10:15:17'),
(206, 'TRAORE Faridatou', 'farid2', 'syfarid@yahoo.fr', NULL, '$2y$10$tiLpbV8IarTiVNKPS.bsCe8axr3NHYyyMGoBVFgJSgR9AidHljJMG', 1, 'Enregistre', NULL, '2021-06-19 10:27:01', '2021-06-19 10:37:21'),
(207, 'DALOUA Ali Noel', 'ali', 'dali@yahoo.fr', NULL, '$2y$10$.MnV3bzhQ0UP5mtHExxTVO.r5yBGlnyZoLLKcIxZtaMqAxD7ONida', 1, 'Enregistre', NULL, '2021-06-19 16:29:52', '2021-06-19 16:29:52'),
(208, 'DALOUA Ali Noel vataza', 'ali2', 'dali2@yahoo.fr', NULL, '$2y$10$vca/hCN/AD3Ne10visUIl.G1H1D3kGYjRz7USzdtWpvC9m3jXWgza', 1, 'Enregistre', NULL, '2021-06-19 16:37:15', '2021-06-19 16:37:15'),
(209, 'DALOUA Ali Noel vatazara', 'ali2345', 'dali23@yahoo.fr', NULL, '$2y$10$rBuh66GNFJxHPNhvzJ7LveglwWcpPNd1YOqhKsCUcMGI7TWvFkwqa', 1, 'Enregistre', NULL, '2021-06-19 16:39:36', '2021-06-19 16:39:36'),
(210, 'DALOUA Ali Noel vatazara', 'ali23456', 'dali234@yahoo.fr', NULL, '$2y$10$qPnks57I/3YWdRVTZk6XD.0c3IVEW361NF9fklUYUACSvPwXJiWQm', 1, 'Enregistre', NULL, '2021-06-19 16:43:33', '2021-06-19 16:43:33'),
(211, 'DALOUA Ali Noel vatazara', 'ali234567', 'dali2345@yahoo.fr', NULL, '$2y$10$wnC16/Rzws.DJ9BZ6PQl4O.ZTH6EZcZyIT98OTbMLQNuNxE83UsDa', 1, 'Enregistre', NULL, '2021-06-19 16:49:06', '2021-06-19 16:49:06'),
(212, 'TOURE Alimata Samira', 'toto2', 'ouiassita@yahoo.fr', NULL, '$2y$10$C4j4F9vVEaT.NOrZqWHM2O8jYMwiHlR6O0tRlu8FiY6I0bHLmj5Hy', 1, 'Enregistre', NULL, '2021-06-19 16:57:17', '2021-06-19 16:57:17'),
(213, 'SOUARE Paulin', 'zatatama', 'souare12@yahoo.fr', NULL, '$2y$10$xULUtISJrOgkCMUtkKLUfe/ABsbSaYy8JENnfpqaXkP7MEtwkIvdq', 1, 'Enregistre', NULL, '2021-06-19 17:02:15', '2021-06-19 17:02:15'),
(214, 'TIRAOGO Bandala', 'bandala', 'bandala@yahoo.fr', NULL, '$2y$10$a4BRNtWskZsvbZh9f9gqu.rLN0lO8LbDiljf4Dmvwzho6n0woB5ru', 1, 'Enregistre', NULL, '2021-06-19 17:07:05', '2021-06-19 17:07:05'),
(215, 'TAMARA Arnaud', 'tamara12', 'tamara123@yahoo.fr', NULL, '$2y$10$YmWyMMhBktqYxrbMQFuJ0eEvmcNmfnGOaqR12/LlMG5qrX67a5f6S', 1, 'Enregistre', NULL, '2021-06-19 17:32:51', '2021-06-19 17:32:51'),
(216, 'ggre rgtret', 'kele', 'tatatapp@yahoo.fr', NULL, '$2y$10$vfN6XeTUCXrIk5UPleU2xujxZgOXgy/QeNMELcEciw.0H4Uf//gX6', 1, 'Enregistre', NULL, '2021-06-19 17:37:18', '2021-06-19 17:37:18'),
(217, 'rtretr retrr', 'avairo', 'makisso@yahoo.fr', NULL, '$2y$10$.AqLV22yqGfUrDp5qSZe2u5OXIzSIdV/L8Cd62TPMS8Y/.0ftJq7C', 1, 'Enregistre', NULL, '2021-06-19 17:43:36', '2021-06-19 17:43:36'),
(218, 'SAMANDOULGOU Aristide Armand', 'jacki', 'tiao@yahoo.fr', NULL, '$2y$10$WLniGzkKrhIQjQNoSMFbYO6u9iZarKt10PHS4VkTuUh0mXHv06vyy', 1, 'Enregistre', NULL, '2021-06-19 18:07:37', '2021-06-19 18:07:37'),
(219, 'DIABOUGA Ganine', 'ganine', 'ganine2@yahoo.fr', NULL, '$2y$10$WkhFzLPQnwTVp1o9cu42mesyNxJA/2LvmmpnXcYrqJbgCWCAqdvay', 1, 'Enregistre', NULL, '2021-06-19 18:40:35', '2021-06-19 18:40:35'),
(220, 'marcelin marcelin', 'marcelin', 'marcelin@gmail.com', NULL, '$2y$10$Q00DVK2lNFayjDIkYxx6Denr88ChcC0iOHaOVk5Q.xmj5kEd67TPW', 1, 'Enregistre', NULL, '2021-06-19 18:41:26', '2021-06-19 18:41:26'),
(221, 'TRAORE Adama', 'adams', 'traadama@yahoo.fr', NULL, '$2y$10$eUi5OdiGKFAHNRUWyU1Ehe6BsLxLerTbUHlCKoybI4rto6rP.drqC', 1, 'Enregistre', NULL, '2021-06-19 19:09:41', '2021-06-19 19:09:41'),
(222, 'TRAORE Ibrahim', 'tramo', 'ibi@yahoo.fr', NULL, '$2y$10$sPNFBHruQC9nHduao.4pzuSO5RNoP9QhMwHmtkv3PBn.jt4LO/i/q', 1, 'Enregistre', NULL, '2021-06-19 19:27:11', '2021-06-19 19:27:11'),
(223, 'TRAORE Arnaud', 'limo', 'tramita@yahoo.fr', NULL, '$2y$10$Mi4pDzv6nq5TQPA93aSLrOd8I.bG9lpadzvJDKHkVKDuHvN.jO79a', 1, 'Enregistre', NULL, '2021-06-20 05:51:23', '2021-06-20 05:51:23'),
(224, 'TRAORE Arnaud', 'limo2', 'tramita2@yahoo.fr', NULL, '$2y$10$F3EWdglTZNV33tCO/QdRaemcnAtNAU4hs3SFkxmfxn0elsEF6INg6', 1, 'Enregistre', NULL, '2021-06-20 05:55:39', '2021-06-20 05:55:39'),
(225, 'TRAORE Arnaud', 'limo23', 'tramita23@yahoo.fr', NULL, '$2y$10$pH/k.Aq7i6yY4gab5h2P9uRPcUx3zwiLjcCh8GE3Oof58oLuF1uRC', 1, 'Enregistre', NULL, '2021-06-20 05:56:58', '2021-06-20 05:56:58'),
(226, 'SAMANDOULGOU Lionel', 'gaza1226', 'gagag@yahoo.fr', NULL, '$2y$10$.ayR2p92KIvBtIWX/buki.OfbUMl.RWqarxUYRNudGyDH3ZISS7uW', 1, 'Enregistre', NULL, '2021-06-20 06:27:34', '2021-06-20 06:27:34'),
(227, 'kjhjkhjk oioioioi', 'gami', 'lili@yahoo.fr', NULL, '$2y$10$JZzcSaQ77MNRY5E2XaGv7OtbI/SOeM351rTJSer8jBtHEijmBcyfu', 1, 'Enregistre', NULL, '2021-06-20 06:39:05', '2021-06-20 06:39:05'),
(228, 'sfdsf bhghgh', 'zaza', 'gratali@yahoo.fr', NULL, '$2y$10$4BGWZlN1bZtn84EPkngHrubHTxXz5PnpwgTCQS6i/eHiv3t5tmMBq', 1, 'Enregistre', NULL, '2021-06-20 06:45:32', '2021-06-20 06:45:32'),
(229, 'ndbndsbf nbnbb', 'rara', 'tataop@yahoo.fr', NULL, '$2y$10$rYRjdj9hRPrY9bephXySE.EWyirrHxmPy//5LY049krhMK2F/G71u', 1, 'Enregistre', NULL, '2021-06-20 06:48:39', '2021-06-20 06:48:39'),
(230, 'sdqsdsqd jhjkhgj', 'gouta', 'trooo@yahoo.fr', NULL, '$2y$10$YIe6kI7L9k9xjwI9qecFqOr8HWGZPQAl8OL.lVRudrFMcBF4DAzoO', 1, 'Enregistre', NULL, '2021-06-20 07:01:14', '2021-06-20 07:01:14'),
(231, 'TRAORE Ardiouma', 'ardioumtra', 't_ardioum@yahoo.fr', NULL, '$2y$10$j/Z9pbsgepphV8UwHtJVY.UfkuVzqQrJuASSzL3ngJYZcaI4T05fa', 1, 'Enregistre', NULL, '2021-06-20 11:52:03', '2021-06-20 11:52:03'),
(232, 'TRAORE Ardiouma', 'ardio123', 't_ardioum1235@yahoo.fr', NULL, '$2y$10$ox69OkUbEza8VQd4IgJ1eOGAlqAaHpueN8xE7w5UwUp5bN0F/KgrO', 1, 'Enregistre', NULL, '2021-06-20 12:00:42', '2021-06-20 12:00:42'),
(233, 'TRAORE Ardiouma', 'ardio1111', 't_ardioum1111@yahoo.fr', NULL, '$2y$10$YOOHW1CFj241.kjsWnvPSuKVjRQOYX/DbDTxnr0VOeiQjfVSurCDq', 1, 'Enregistre', NULL, '2021-06-20 12:04:18', '2021-06-20 12:04:18'),
(235, 'ZAZOU ABDIUL KARIM', 'zazou2022', 'zazou2021@yahoo.fr', NULL, '$2y$10$Hbk3jryHq1192qwRR34E9OkioZZp0gk20hmVUniTyV5qexgT3xmjO', 1, 'Enregistre', NULL, '2021-06-20 12:12:01', '2021-06-20 12:12:01'),
(236, 'DIANDA Arnaud', 'dianda', 'dianda45@yahoo.fr', NULL, '$2y$10$flGxIVmycBU.PO/KUKSwGeCaFBrymmo8iXkaTzMm4om9UKpD.Kt6O', 1, 'Enregistre', NULL, '2021-06-20 12:55:29', '2021-06-20 12:55:29'),
(237, 'KONATE Nafissatou', 'nafissa', 'nafi156@gmail.com', NULL, '$2y$10$w7wpshJZncji6qpU1tUvFOELQR7s6c3rNZfu/4kBTH2GSTBkgsGfu', 1, 'Enregistre', NULL, '2021-06-20 14:33:54', '2021-06-20 14:33:54'),
(238, 'KAM Mamadou', 'mamadou', 'mamadou@gamail.com', NULL, '$2y$10$ZAxxA3ZftP.1Nyw4QR4Cjut7BQsSlbFUq54R0kR8s1F2..2KVljoK', 1, 'Enregistre', NULL, '2021-06-20 16:22:28', '2021-06-20 16:22:28'),
(239, 'ILBOUDO Idrissa', 'ilboudo', 'idriss@gmail.com', NULL, '$2y$10$nqImQ5FepLHgWAPagK1WWuBFfkipx8L1aXw2OdqOPKutspZ5TtLUS', 1, 'Enregistre', NULL, '2021-06-20 16:49:19', '2021-06-20 16:49:19'),
(240, 'SOLOMANI DALOU', 'zama', 'badoulo@yahoo.fr', NULL, '$2y$10$JYejc0RGQUu.YpOErrKIfOapAS78tL8EcPm33/9RaLKstzcX3Fwwa', 1, 'Enregistre', NULL, '2021-06-20 17:06:19', '2021-06-20 17:06:19'),
(241, 'SAMANDOULGOU Sa Akim', 'poto', 'saoiu@yahoo.fr', NULL, '$2y$10$CqxCVBZytjkiZFrZ27Vh9e7c2L79hGwi8ZYsgXa0b/8xvJCwOPEdi', 1, 'Enregistre', NULL, '2021-06-20 17:46:38', '2021-06-20 17:46:38'),
(242, 'ZONGO ALI', 'zongoali2021', 'zongoali2021@yahoo.fr', NULL, '$2y$10$rGuRYX7CMFNrmHH1Hk.rU.UFBLOoj9fHwzEKujLRF8KUiTKEFmw0i', 1, 'Enregistre', NULL, '2021-06-20 18:08:54', '2021-06-20 18:08:54'),
(243, 'SAMANDOULGOU Sa Akim', 'toyota', 'samara@yahoo.fr', NULL, '$2y$10$3aMyjwEq5z.Sa5H/FGwr9.bY.W/m71xR2vX7yMk4pSw5EEcjDn7hq', 1, 'Enregistre', NULL, '2021-06-20 19:35:22', '2021-06-20 19:35:22'),
(244, 'TOURE Jean', 'jany', 'Jean@yahoo.fr', NULL, '$2y$10$5QCAPCVmceu3nuJT4zr1hueGKDvq7/DA/bU.rHwwQDEhO4cKZUuUy', 1, 'Verificateur', NULL, '2021-06-20 20:55:48', '2021-06-20 21:06:09');

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
,`profession` varchar(254)
,`numcartepresse` varchar(20)
,`created_at` datetime
,`refjournal` varchar(254)
,`parcourspro` varchar(254)
,`pjcartepresse` varchar(254)
,`pjpasseport` varchar(254)
,`typepresse` varchar(255)
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
,`datenaissance` date
,`lieunaissance` varchar(254)
,`nationalite` varchar(254)
,`sexe` varchar(254)
,`passeport` varchar(254)
,`carteconsulaire` varchar(254)
,`datedelivcnib` date
,`dateexpircnib` date
,`telephone` int(11)
,`personneprevenir` varchar(254)
,`lieuresidence` varchar(254)
,`organe` varchar(254)
,`telorgane` varchar(20)
,`adressestruct` varchar(254)
,`numcnib` varchar(254)
,`telephonepersp` varchar(20)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccrediregion`  AS  select `ar`.`idaccrediregion` AS `idaccrediregion`,`ar`.`idregion` AS `idregion`,`ar`.`idaccreditation` AS `id`,`ar`.`datedebut` AS `datedebut`,`ar`.`datefin` AS `datefin`,`ar`.`lieuevenement` AS `lieuevenement`,`ar`.`actif` AS `actif`,`ar`.`titreevenement` AS `titre`,`ar`.`created_at` AS `created_at`,`r`.`nomregion` AS `nomregion`,`d`.`iddemandeur` AS `iddemandeur`,`d`.`nom` AS `nomdemandeur`,`d`.`prenom` AS `prenomdemandeur`,`d`.`iduser` AS `iduser` from ((((`accrediregion` `ar` join `region` `r`) join `accreditation` `ac`) join `users` `u`) join `demandeur` `d`) where ((`ar`.`idaccreditation` = `ac`.`idaccreditation`) and (`ar`.`idregion` = `r`.`idregion`) and (`d`.`iddemandeur` = `ac`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`) and (`d`.`actif` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueaccreditation`
--
DROP TABLE IF EXISTS `vueaccreditation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueaccreditation`  AS  select `ac`.`idaccreditation` AS `idaccreditation`,`ac`.`idaccreditation` AS `id`,`ac`.`iddemandeur` AS `iddemandeur`,`ac`.`moyentransport` AS `moyentransport`,`ac`.`immatriculation` AS `immatriculation`,`ac`.`listemateriel` AS `listemateriel`,`ac`.`valider` AS `valider`,`d`.`actif` AS `actif`,`d`.`nom` AS `nomdemandeur`,`d`.`prenom` AS `prenomdemandeur`,`d`.`telephone` AS `telephone`,`d`.`iduser` AS `iduser`,`r`.`idregion` AS `idregion`,`ac`.`CREATED_AT` AS `created_at`,`r`.`nomregion` AS `nomregion`,`pj`.`id` AS `idpiecesjointes`,`ar`.`idaccrediregion` AS `idaccrediregion` from (((((`demandeur` `d` join `accreditation` `ac`) join `users` `u`) join `region` `r`) join `accrediregion` `ar`) join `piecesjointes` `pj`) where ((`d`.`iddemandeur` = `ac`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`) and (`ar`.`idregion` = `r`.`idregion`) and (`ar`.`idaccreditation` = `ac`.`idaccreditation`) and (`pj`.`idaccreditation` = `ac`.`idaccreditation`) and (`ar`.`actif` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuecorrespondant`
--
DROP TABLE IF EXISTS `vuecorrespondant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuecorrespondant`  AS  select `c`.`idcorrespondant` AS `idcorrespondant`,`c`.`iduser` AS `iduser`,`c`.`iduser` AS `id`,`c`.`nom` AS `nomcorrespondant`,`c`.`typecorrespondant` AS `typecorrespondant`,`c`.`origine` AS `originecorrespondant`,`c`.`region` AS `region`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`cnib` AS `cnibcorrespondant`,`c`.`passeport` AS `passportcorrespondant`,`c`.`telephone` AS `telephonecorrespondant`,`c`.`telephone2` AS `telephone2correspondant`,`c`.`mail` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`c`.`organe` AS `organe`,`c`.`profession` AS `profession`,`c`.`numcartepresse` AS `numcartepresse`,`c`.`CREATED_AT` AS `created_at`,`c`.`refjournal` AS `refjournal`,`c`.`parcourspro` AS `parcourspro`,`c`.`pjcartepresse` AS `pjcartepresse`,`c`.`pjpasseport` AS `pjpasseport`,`c`.`typepresse` AS `typepresse`,`c`.`actif` AS `actif` from (`correspondant` `c` join `users` `u`) where (`c`.`iduser` = `u`.`id`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vuedemandeur`
--
DROP TABLE IF EXISTS `vuedemandeur`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuedemandeur`  AS  select `d`.`iddemandeur` AS `iddemandeur`,`d`.`iduser` AS `iduser`,`d`.`actif` AS `actif`,`d`.`nom` AS `nom`,`d`.`prenom` AS `prenom`,`d`.`profession` AS `profession`,`d`.`datenaissance` AS `datenaissance`,`d`.`lieunaissance` AS `lieunaissance`,`d`.`nationalite` AS `nationalite`,`d`.`sexe` AS `sexe`,`d`.`passeport` AS `passeport`,`d`.`carteconsulaire` AS `carteconsulaire`,`d`.`datedelivcnib` AS `datedelivcnib`,`d`.`dateexpircnib` AS `dateexpircnib`,`d`.`telephone` AS `telephone`,`d`.`personneprevenir` AS `personneprevenir`,`d`.`lieuresidence` AS `lieuresidence`,`d`.`organe` AS `organe`,`d`.`telorgane` AS `telorgane`,`d`.`adressestruct` AS `adressestruct`,`d`.`cnib` AS `numcnib`,`d`.`telephonepersp` AS `telephonepersp` from (`demandeur` `d` join `users` `u`) where ((`d`.`iduser` = `u`.`id`) and (`d`.`actif` = 1)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `vueinformation`
--
DROP TABLE IF EXISTS `vueinformation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vueinformation`  AS  select `i`.`idinfo` AS `idinfo`,`i`.`iduser` AS `iduser`,`i`.`titre` AS `titreinfo`,`i`.`contenu` AS `contenuinfo`,`i`.`actif` AS `actif`,`i`.`CREATED_AT` AS `CREATED_AT`,`c`.`idcorrespondant` AS `idcorrespondant`,`c`.`nom` AS `nomcorrespondant`,`c`.`prenom` AS `prenomcorrespondant`,`c`.`telephone` AS `telephonecorrespondant`,`c`.`mail` AS `mailcorrespondant`,`c`.`lieuresidence` AS `lieuresidence`,`m`.`idmedia` AS `idmedia`,`m`.`nommedia` AS `media`,`t`.`libelle` AS `typepresse` from (((((`correspondant` `c` join `media` `m`) join `typepresse` `t`) join `mediacorrespondant` `s`) join `mediapresse` `p`) join `informations` `i`) where ((`c`.`idcorrespondant` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `s`.`IDMEDIACORRES`) and (`m`.`idmedia` = `p`.`IDMEDIAPRESSE`) and (`t`.`idtype` = `p`.`IDMEDIAPRESSE`) and (`i`.`idinfo` = `c`.`idcorrespondant`)) ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vuepjdemandeur`  AS  select `d`.`iddemandeur` AS `iddemandeur`,`d`.`iduser` AS `iduser`,`d`.`actif` AS `actif`,`pj`.`photo` AS `photo`,`pj`.`cv` AS `cv`,`pj`.`pjpasseport` AS `pjpasseport`,`pj`.`pjcnib` AS `pjcnib`,`pj`.`pjcartepresse` AS `pjcartepresse`,`pj`.`pjcnibperprev` AS `pjcnibperprev`,`pj`.`pjpasseportperprev` AS `pjpasseportperprev`,`pj`.`pjcarteconsulaire` AS `pjcarteconsulaire`,`pj`.`visamedia` AS `visamedia` from ((`demandeur` `d` join `piecesjointes` `pj`) join `users` `u`) where ((`d`.`iddemandeur` = `pj`.`iddemandeur`) and (`d`.`iduser` = `u`.`id`)) ;

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
  MODIFY `idaccrediregion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT pour la table `accreditation`
--
ALTER TABLE `accreditation`
  MODIFY `idaccreditation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT pour la table `correspondant`
--
ALTER TABLE `correspondant`
  MODIFY `idcorrespondant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `iddemandeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

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
  MODIFY `IDMEDIACORRES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `mediapresse`
--
ALTER TABLE `mediapresse`
  MODIFY `IDMEDIAPRESSE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `piecesjointes`
--
ALTER TABLE `piecesjointes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT pour la table `typepresse`
--
ALTER TABLE `typepresse`
  MODIFY `idtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

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
