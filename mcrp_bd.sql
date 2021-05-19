-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Octobre 2019 à 12:17
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mcrp_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `code_archiver` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `analyse` varchar(1500) COLLATE utf8_bin DEFAULT NULL,
  `date_debut` int(11) DEFAULT NULL,
  `date_fin` int(11) DEFAULT NULL,
  `prescription` int(11) DEFAULT NULL,
  `doc_manquant` text COLLATE utf8_bin,
  `observation` text COLLATE utf8_bin,
  `emprunte` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `emprunte_tout` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nat_doc` text COLLATE utf8_bin,
  `site` text COLLATE utf8_bin,
  `id_serie` int(11) DEFAULT NULL,
  `id_sous_serie` int(11) DEFAULT NULL,
  `id_sous_sous_serie` int(11) DEFAULT NULL,
  `salle` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `travee` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `rayon` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `boite` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `id_direction_generale` int(11) DEFAULT NULL,
  `id_direction` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `id_section` int(11) DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `fichier` varchar(1) COLLATE utf8_bin DEFAULT '0',
  `emprunt` int(11) DEFAULT '0',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `archives`
--

INSERT INTO `archives` (`id`, `code_archiver`, `analyse`, `date_debut`, `date_fin`, `prescription`, `doc_manquant`, `observation`, `emprunte`, `emprunte_tout`, `adresse`, `nat_doc`, `site`, `id_serie`, `id_sous_serie`, `id_sous_sous_serie`, `salle`, `travee`, `rayon`, `boite`, `id_direction_generale`, `id_direction`, `id_service`, `id_section`, `statut_id`, `type_id`, `fichier`, `emprunt`, `created`, `modified`) VALUES
(1, NULL, 'Decret n93-413/PRES/MFP portant reéorganisation du conseil national de la population', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(2, NULL, 'circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(3, NULL, 'circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(4, NULL, 'Decret n93-414/PRES/MFPL portant rectificatif à l''article Ier du decret 93-374/PRES/MFPL du 25/11/1993', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(5, NULL, 'Decret n930-409/PRES/TPHU portant nomination d''un secrétaire général', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 0, '1', 0, '2019-10-02', '2019-10-02'),
(6, NULL, 'Circulaire N°93-101/PF/DELGI/DEI/EL Précision/ programme de formation secrétaire de direction -DAAF et DEP des départements ministériels et institutions ', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(7, NULL, 'N°93-00043/MESSRS/SG/DOB/SIOP Exploitation de l''aide financière', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 6, 7, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(8, NULL, 'Decret n 93-408/PRES/MFPL portant nomination d''un membre du conseil d''administration de la SONAR', 2019, NULL, NULL, ' ', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(9, NULL, 'Decret n93-407/PRES/MFPL portant nomination d''un secrétaire exécutif du programme d''ajustement structurel', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(10, NULL, 'Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/30/1B', 'Avancement\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 1, '1', 0, '2019-10-02', '2019-10-02'),
(11, NULL, 'Circulaire N°93/008/MFPMA/SG/DGMA/DGPP répertoire des diplômés', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 0, '1', 0, '2019-10-02', '2019-10-02'),
(12, NULL, 'Decret n93-406/PRES/MFPL portant nomination de directeurs centraux', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(13, NULL, 'Circulaire N°00946/MESSRS enquête en vue de la constitution d''un fichier informatique ', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', '', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '0', 0, '2019-10-02', '2019-10-02'),
(14, NULL, 'Decret n93-405/PRES/MFPL portant nomination de directeurs régionaux des impots', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(15, NULL, 'Circulaire N°93-006/MFPMA/CAB - mise en place des organes consultatifs de la fonction publique ', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(16, NULL, 'Decret n93-404/PRES/MICM portant nomination d''un administrateur provisoire de la société de commercialisation Faso Yaar', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(17, NULL, ' Circulaire N°93-372/MAT/SG/DAAF -  information sur les modalités d'' utilisation de autobus du MAT', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(18, NULL, 'Decret n93-402/PRES/MICM portant attribution des administrateurs provisoire des sociétés a capitaux publics', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(19, NULL, 'Circulaire n°93-007/MFPMA/SG Mise en place des CTP et des conseils de discipline', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 6, 0, 0, NULL, 2, 0, '1', 0, '2019-10-02', '2019-10-02'),
(20, NULL, 'Decret n93-403/PRES/MICM portant nomination d''un administrateur provisoire de la caisse de stabilisation des prix des produits agricoles', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Arrêtés/Raabo\r\nDécrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(21, NULL, 'Circulaire n°93-002/FPMA/ENAM - Thème d''études relatifs aux travaux de recherche', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(22, NULL, 'Circulaire n°93-024/FPMA/CAB - circulaire sur la question des statuts particuliers', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(23, NULL, 'Decret n93-401/PRES/PM/MEBAM portant reorganisation du ministère de l''enseignement de bas et de l''alphabetisation de masse', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(24, NULL, 'Circulaire n°93-001/ FPMA/CAB - rédaction et examen des statuts particuliers des cadres de fonctionnaires', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 6, 0, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(25, NULL, 'Decret n93-400/PRES/PM/MFPMA/MFPL portant statut particulier des personnels du cadre de l''administration des douanes ', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(26, NULL, 'Decret n93-399/PRES/PM portant nomination d''un secrétaire permanent de la commission nationale de la decentralisation', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(27, NULL, 'Circulaire n°95-025/MEFP/SG/DGB/DM - Besoins en fournitures de bureau et en produits d''entretien et de nettoyage de l''année 1996', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 6, 0, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(28, NULL, 'Decret n93-398/PRES instituant deuil national', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(29, NULL, 'Circulaire n°95-012/MESSRS/SG/DOB/SIOP', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(30, NULL, 'Decret n93-397/PRES/MICM/MFP portant transfert de propriété d''action de l''etat et de ses demembrements a mr Dianguinaba barro', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(31, NULL, 'Circulaire n°079/MFPMA/SG - Rencontre d''information sur le recensement des agents de l''Etat', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 6, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(32, NULL, 'Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte.', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 0, '1', 0, '2019-10-02', '2019-10-02'),
(33, NULL, 'Circulaire n°94-001 prise en charge des indemnités de sessions', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(34, NULL, 'Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b) ', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(35, NULL, 'Circulaire n°940001 FPMA/DGMA Participation des directeurs généraux à un séminaire en top Management', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(36, NULL, 'Circulaire n°94-006 Invitation à participer à un séminaire de formation', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(37, NULL, 'Circulaire n°94-296/MFPMA/CAB - Invitation à participer au séminaire de formation sur le Management Efficient', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '1', 0, '2019-10-02', '2019-10-02'),
(38, NULL, 'Decret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant.', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(39, NULL, 'Decret n 93-392/PRES/TRANS portant nomination d''un conseiller technique', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-02', '2019-10-02'),
(40, NULL, 'Circulaire n)96-012-PM/CAB Association des représentants des travailleurs aux restructions des entreprises', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 2, 2, '0', 0, '2019-10-02', '2019-10-02'),
(41, NULL, 'Circulaire 94\r\n', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', '', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 0, '1', 0, '2019-10-03', '2019-10-03'),
(42, NULL, 'Circulaire 96', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 2, '1', 0, '2019-10-03', '2019-10-03'),
(43, NULL, 'Decret n 93-391/PRES/TRANS', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-03', '2019-10-03'),
(44, NULL, 'Circulaire 97', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 2, '1', 0, '2019-10-03', '2019-10-03'),
(45, NULL, 'Decret 1993', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 3, '1', 0, '2019-10-03', '2019-10-03'),
(46, NULL, 'Deuxieme session extraordinaire 1994', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/30/1B', 'Projets de loi\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 1, '1', 0, '2019-10-03', '2019-10-03'),
(47, NULL, 'Circulaire 98', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 2, '1', 0, '2019-10-03', '2019-10-03'),
(51, NULL, 'Troisieme session extraordinaire 1994- dossier 42', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/30/1B', 'Projets de loi\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 1, '1', 0, '2019-10-03', '2019-10-03'),
(50, NULL, 'Circulaire 99', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 2, '1', 0, '2019-10-03', '2019-10-03'),
(52, NULL, 'Circulaire 2000', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, 2, 2, '1', 0, '2019-10-03', '2019-10-03'),
(53, NULL, 'Premiere session ordinaire de 1995', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/31/1B', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(54, NULL, 'Circulaire 2001', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '0', 0, '2019-10-04', '2019-10-04'),
(55, NULL, 'Circulaire 2002', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\nCirculaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(56, NULL, 'Circulaire 2003', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(57, NULL, 'Circulaire 2004', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(58, NULL, 'Deuxieme session ordinaire de 1995', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/32/1B', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(59, NULL, 'Circulaire 2005', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 0, 2, '1', 0, '2019-10-04', '2019-10-04'),
(60, NULL, 'Circulaire2006', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 0, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(61, NULL, 'Circulaire 2007', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(62, NULL, 'Premiere session extraordinaire de 1995', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/33/1B', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(63, NULL, 'Circulaire2008', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(64, NULL, 'Premiere session ordinaire de 1996', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/34/', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(65, NULL, 'Circulaire 2009', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(66, NULL, 'Decret 1992', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 19, 0, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(67, NULL, 'Circulaire 2010', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(68, NULL, 'Decret 1990', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 3, '1', 0, '2019-10-04', '2019-10-04'),
(69, NULL, 'Decret 1989', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(70, NULL, 'Decret 1991', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(71, NULL, 'Decret 1987', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(72, NULL, 'decret 19896', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/10/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(73, NULL, 'Deuxieme session ordinaire de 1996', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/35/1B', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(74, NULL, 'Circulaire 2011', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(75, NULL, 'Circulaire 2012', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(76, NULL, 'Premiere session extraordinaire de 1996', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/A/36/1B', 'Exposé des motifs\r\nProjets de loi\r\nRapports\r\n', 'Pyramide', 2, 18, 0, NULL, NULL, NULL, NULL, 4, 17, 0, NULL, 0, 0, '1', 0, '2019-10-04', '2019-10-04'),
(77, NULL, 'Circulaire 2013', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(78, NULL, 'Decret 1994', 2019, NULL, NULL, '', NULL, NULL, NULL, 'S1AMCRP/1/D/11/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 0, '1', 0, '2019-10-04', '2019-10-04'),
(79, NULL, 'Decret 1995', 2019, NULL, NULL, '5-25-27-29', NULL, NULL, NULL, 'S1AMCRP/1/D/12/4A', 'Décrets/Kiti\r\n', 'Pyramide', 1, 13, 0, NULL, NULL, NULL, NULL, 4, 19, 11, NULL, 2, 3, '1', 0, '2019-10-04', '2019-10-04'),
(80, NULL, 'Circulaire 2014', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', '', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(81, NULL, 'Circulaire 2017', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/', 'Circulaires/Koega\r\n', 'Pyramide', 1, 0, 0, NULL, NULL, NULL, NULL, 4, 19, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04'),
(82, NULL, 'Circulaire', 2019, NULL, NULL, 'RAS', NULL, NULL, NULL, 'S1AMCRP/1/B/23/7A', 'Circulaires/Koega\r\n', 'Pyramide', 1, 16, 0, NULL, NULL, NULL, NULL, 4, 17, 11, NULL, 2, 2, '1', 0, '2019-10-04', '2019-10-04');

-- --------------------------------------------------------

--
-- Structure de la table `beneficiaires`
--

CREATE TABLE `beneficiaires` (
  `id` int(11) NOT NULL,
  `matricule` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `nom` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(700) COLLATE utf8_bin DEFAULT NULL,
  `genre` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `telephone` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `fonction` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `poste` varchar(1000) COLLATE utf8_bin NOT NULL,
  `numero_bene` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nom_bene` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `bene_interne` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `autre_info` text COLLATE utf8_bin,
  `directiongen_id` int(11) DEFAULT NULL,
  `direction_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `usergroup_id` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `beneficiaires`
--

INSERT INTO `beneficiaires` (`id`, `matricule`, `nom`, `prenom`, `genre`, `telephone`, `email`, `fonction`, `poste`, `numero_bene`, `nom_bene`, `bene_interne`, `autre_info`, `directiongen_id`, `direction_id`, `service_id`, `usergroup_id`) VALUES
(1, '', 'BATORO', 'Babou', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(2, '', 'TRAORE', 'Ibrahim', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 7, 0, 1),
(3, '', 'BOUSSA', 'Tobouré', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(4, '', 'BADO', 'Joseph', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(5, '', 'GUIBO', 'Toni', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(6, '', 'NIKIEMA', 'Olga', 'F', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(7, '', 'KARAMBIRI', 'N. Haoua', 'F', '', '', '', '', NULL, NULL, NULL, NULL, 6, 6, 0, 1),
(8, '91893N', 'SAWADOGO', 'Moussa', 'M', '79029708', 'sawlee11@yahoo.fr', 'Chef de service', '', NULL, NULL, NULL, NULL, 6, 0, 0, 1),
(9, '', 'WOUROUGOU', 'K. Nina', 'F', '', '', '', '', NULL, NULL, NULL, NULL, 6, 3, 0, 1),
(10, '', 'TIEMTORE', 'Alphonsine', 'F', '', '', '', '', NULL, NULL, NULL, NULL, 5, 0, 0, 1),
(11, '238497A', 'KONATE', 'Dramane', 'M', '70963611', 'konadra85@yahoo.fr', 'Agent', '', NULL, NULL, NULL, NULL, 3, 0, 0, 1),
(12, '', 'OUEDRAOGO', 'Ousseni', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 4, 0, 0, 1),
(13, '', 'KONFE', 'Konfe', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 4, 0, 1),
(14, '', 'DAGO', 'Roland', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
(15, '', 'BAYALA', 'Bayala', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 7, 0, 1),
(16, '', 'DRABO', 'Drabo', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 0, 0, 0, 1),
(17, '', 'BOUSSIM', 'Toboure', 'M', '', '', '', '', NULL, NULL, NULL, NULL, 6, 20, 0, 1),
(18, '223074', 'KARAMBIRI', 'N Aoua', 'F', '78674359', 'batoma1234@gmail.com', 'archiviste', 'chef de service numérisation', NULL, NULL, NULL, NULL, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `boites`
--

CREATE TABLE `boites` (
  `id` int(11) NOT NULL,
  `boite` int(11) DEFAULT NULL,
  `rayon_id` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `boites`
--

INSERT INTO `boites` (`id`, `boite`, `rayon_id`, `created`, `modified`) VALUES
(1, 30, 1, '2019-10-03', '2019-10-03'),
(2, 31, 1, '2019-10-03', '2019-10-03'),
(3, 32, 1, '2019-10-03', '2019-10-03'),
(4, 33, 1, '2019-10-03', '2019-10-03'),
(5, 34, 1, '2019-10-03', '2019-10-03'),
(6, 35, 1, '2019-10-03', '2019-10-03'),
(7, 36, 1, '2019-10-03', '2019-10-03'),
(8, 23, 7, '2019-10-03', '2019-10-03'),
(9, 24, 7, '2019-10-03', '2019-10-03'),
(10, 25, 7, '2019-10-03', '2019-10-03'),
(11, 26, 7, '2019-10-03', '2019-10-03'),
(12, 27, 7, '2019-10-03', '2019-10-03'),
(13, 28, 7, '2019-10-03', '2019-10-03'),
(14, 29, 7, '2019-10-03', '2019-10-03'),
(15, 17, 13, '2019-10-03', '2019-10-03'),
(16, 18, 13, '2019-10-03', '2019-10-03'),
(17, 19, 13, '2019-10-03', '2019-10-03'),
(18, 20, 13, '2019-10-03', '2019-10-03'),
(19, 21, 13, '2019-10-03', '2019-10-03'),
(20, 22, 13, '2019-10-03', '2019-10-03'),
(21, 10, 19, '2019-10-03', '2019-10-03'),
(22, 11, 19, '2019-10-03', '2019-10-03'),
(23, 12, 19, '2019-10-03', '2019-10-03'),
(24, 13, 19, '2019-10-03', '2019-10-03'),
(25, 14, 19, '2019-10-03', '2019-10-03'),
(26, 15, 19, '2019-10-03', '2019-10-03'),
(27, 16, 19, '2019-10-03', '2019-10-03'),
(28, 66, 2, '2019-10-03', '2019-10-03'),
(29, 67, 2, '2019-10-03', '2019-10-03'),
(30, 68, 2, '2019-10-03', '2019-10-03'),
(31, 69, 2, '2019-10-03', '2019-10-03'),
(32, 70, 2, '2019-10-03', '2019-10-03'),
(33, 71, 2, '2019-10-03', '2019-10-03'),
(34, 72, 2, '2019-10-03', '2019-10-03'),
(35, 59, 8, '2019-10-03', '2019-10-03'),
(36, 60, 8, '2019-10-03', '2019-10-03'),
(37, 61, 8, '2019-10-03', '2019-10-03'),
(38, 62, 8, '2019-10-03', '2019-10-03'),
(39, 63, 8, '2019-10-03', '2019-10-03'),
(40, 64, 8, '2019-10-03', '2019-10-03'),
(41, 65, 8, '2019-10-03', '2019-10-03'),
(42, 51, 14, '2019-10-03', '2019-10-03'),
(43, 52, 14, '2019-10-03', '2019-10-03'),
(44, 53, 14, '2019-10-03', '2019-10-03'),
(45, 54, 14, '2019-10-03', '2019-10-03'),
(46, 55, 14, '2019-10-03', '2019-10-03'),
(47, 56, 14, '2019-10-03', '2019-10-03'),
(48, 57, 14, '2019-10-03', '2019-10-03'),
(49, 58, 14, '2019-10-03', '2019-10-03'),
(50, 44, 20, '2019-10-03', '2019-10-03'),
(51, 45, 20, '2019-10-03', '2019-10-03'),
(52, 46, 20, '2019-10-03', '2019-10-03'),
(53, 47, 20, '2019-10-03', '2019-10-03'),
(54, 48, 20, '2019-10-03', '2019-10-03'),
(55, 49, 20, '2019-10-03', '2019-10-03'),
(56, 50, 20, '2019-10-03', '2019-10-03'),
(57, 37, 25, '2019-10-03', '2019-10-03'),
(58, 38, 25, '2019-10-03', '2019-10-03'),
(59, 39, 25, '2019-10-03', '2019-10-03'),
(60, 40, 25, '2019-10-03', '2019-10-03'),
(61, 41, 25, '2019-10-03', '2019-10-03'),
(62, 42, 25, '2019-10-03', '2019-10-03'),
(63, 43, 25, '2019-10-03', '2019-10-03'),
(64, 101, 3, '2019-10-03', '2019-10-03'),
(65, 102, 3, '2019-10-03', '2019-10-03'),
(66, 103, 3, '2019-10-03', '2019-10-03'),
(67, 104, 3, '2019-10-03', '2019-10-03'),
(68, 105, 3, '2019-10-03', '2019-10-03'),
(69, 106, 3, '2019-10-03', '2019-10-03'),
(70, 94, 9, '2019-10-03', '2019-10-03'),
(71, 95, 9, '2019-10-03', '2019-10-03'),
(72, 96, 9, '2019-10-03', '2019-10-03'),
(73, 97, 9, '2019-10-03', '2019-10-03'),
(74, 98, 9, '2019-10-03', '2019-10-03'),
(75, 99, 9, '2019-10-03', '2019-10-03'),
(76, 100, 9, '2019-10-03', '2019-10-03'),
(77, 87, 15, '2019-10-03', '2019-10-03'),
(78, 88, 15, '2019-10-03', '2019-10-03'),
(79, 89, 15, '2019-10-03', '2019-10-03'),
(80, 90, 15, '2019-10-03', '2019-10-03'),
(81, 91, 15, '2019-10-03', '2019-10-03'),
(82, 92, 15, '2019-10-03', '2019-10-03'),
(83, 93, 15, '2019-10-03', '2019-10-03'),
(84, 80, 21, '2019-10-03', '2019-10-03'),
(85, 81, 21, '2019-10-03', '2019-10-03'),
(86, 82, 21, '2019-10-03', '2019-10-03'),
(87, 83, 21, '2019-10-03', '2019-10-03'),
(88, 84, 21, '2019-10-03', '2019-10-03'),
(89, 85, 21, '2019-10-03', '2019-10-03'),
(90, 86, 21, '2019-10-03', '2019-10-03'),
(91, 73, 26, '2019-10-03', '2019-10-03'),
(92, 74, 26, '2019-10-03', '2019-10-03'),
(93, 75, 26, '2019-10-03', '2019-10-03'),
(94, 76, 26, '2019-10-03', '2019-10-03'),
(95, 77, 26, '2019-10-03', '2019-10-03'),
(96, 78, 26, '2019-10-03', '2019-10-03'),
(97, 79, 26, '2019-10-03', '2019-10-03'),
(98, 134, 4, '2019-10-03', '2019-10-03'),
(99, 135, 4, '2019-10-03', '2019-10-03'),
(100, 136, 4, '2019-10-03', '2019-10-03'),
(101, 137, 4, '2019-10-03', '2019-10-03'),
(102, 138, 4, '2019-10-03', '2019-10-03'),
(103, 139, 4, '2019-10-03', '2019-10-03'),
(104, 127, 10, '2019-10-03', '2019-10-03'),
(105, 128, 10, '2019-10-03', '2019-10-03'),
(106, 129, 10, '2019-10-03', '2019-10-03'),
(107, 130, 10, '2019-10-03', '2019-10-03'),
(108, 131, 10, '2019-10-03', '2019-10-03'),
(109, 132, 10, '2019-10-03', '2019-10-03'),
(110, 133, 10, '2019-10-03', '2019-10-03'),
(111, 121, 16, '2019-10-03', '2019-10-03'),
(112, 122, 16, '2019-10-03', '2019-10-03'),
(113, 123, 16, '2019-10-03', '2019-10-03'),
(114, 124, 16, '2019-10-03', '2019-10-03'),
(115, 125, 16, '2019-10-03', '2019-10-03'),
(116, 126, 16, '2019-10-03', '2019-10-03'),
(117, 114, 22, '2019-10-03', '2019-10-03'),
(118, 115, 22, '2019-10-03', '2019-10-03'),
(119, 116, 22, '2019-10-03', '2019-10-03'),
(120, 117, 22, '2019-10-03', '2019-10-03'),
(121, 118, 22, '2019-10-03', '2019-10-03'),
(122, 119, 22, '2019-10-03', '2019-10-03'),
(123, 120, 22, '2019-10-03', '2019-10-03'),
(124, 107, 27, '2019-10-03', '2019-10-03'),
(125, 108, 27, '2019-10-03', '2019-10-03'),
(126, 109, 27, '2019-10-03', '2019-10-03'),
(127, 110, 27, '2019-10-03', '2019-10-03'),
(128, 111, 27, '2019-10-03', '2019-10-03'),
(129, 112, 27, '2019-10-03', '2019-10-03'),
(130, 113, 27, '2019-10-03', '2019-10-03'),
(131, 166, 5, '2019-10-03', '2019-10-03'),
(132, 167, 5, '2019-10-03', '2019-10-03'),
(133, 168, 5, '2019-10-03', '2019-10-03'),
(134, 169, 5, '2019-10-03', '2019-10-03'),
(135, 170, 5, '2019-10-03', '2019-10-03'),
(136, 171, 5, '2019-10-03', '2019-10-03'),
(137, 160, 11, '2019-10-03', '2019-10-03'),
(138, 161, 11, '2019-10-03', '2019-10-03'),
(139, 162, 11, '2019-10-03', '2019-10-03'),
(140, 163, 11, '2019-10-03', '2019-10-03'),
(141, 164, 11, '2019-10-03', '2019-10-03'),
(142, 165, 11, '2019-10-03', '2019-10-03'),
(143, 154, 17, '2019-10-03', '2019-10-03'),
(144, 155, 17, '2019-10-03', '2019-10-03'),
(145, 156, 17, '2019-10-03', '2019-10-03'),
(146, 157, 17, '2019-10-03', '2019-10-03'),
(147, 158, 17, '2019-10-03', '2019-10-03'),
(148, 159, 17, '2019-10-03', '2019-10-03'),
(149, 147, 23, '2019-10-03', '2019-10-03'),
(150, 148, 23, '2019-10-03', '2019-10-03'),
(151, 149, 23, '2019-10-03', '2019-10-03'),
(152, 150, 23, '2019-10-03', '2019-10-03'),
(153, 151, 23, '2019-10-03', '2019-10-03'),
(154, 152, 23, '2019-10-03', '2019-10-03'),
(155, 153, 23, '2019-10-03', '2019-10-03'),
(156, 140, 28, '2019-10-03', '2019-10-03'),
(157, 141, 28, '2019-10-03', '2019-10-03'),
(158, 142, 28, '2019-10-03', '2019-10-03'),
(159, 143, 28, '2019-10-03', '2019-10-03'),
(160, 144, 28, '2019-10-03', '2019-10-03'),
(161, 145, 28, '2019-10-03', '2019-10-03'),
(162, 146, 28, '2019-10-03', '2019-10-03'),
(163, 199, 6, '2019-10-03', '2019-10-03'),
(164, 200, 6, '2019-10-03', '2019-10-03'),
(165, 201, 6, '2019-10-03', '2019-10-03'),
(166, 202, 6, '2019-10-03', '2019-10-03'),
(167, 203, 6, '2019-10-03', '2019-10-03'),
(168, 193, 12, '2019-10-03', '2019-10-03'),
(169, 194, 12, '2019-10-03', '2019-10-03'),
(170, 195, 12, '2019-10-03', '2019-10-03'),
(171, 196, 12, '2019-10-03', '2019-10-03'),
(172, 197, 12, '2019-10-03', '2019-10-03'),
(173, 198, 12, '2019-10-03', '2019-10-03'),
(174, 187, 18, '2019-10-03', '2019-10-03'),
(175, 188, 18, '2019-10-03', '2019-10-03'),
(176, 189, 18, '2019-10-03', '2019-10-03'),
(177, 190, 18, '2019-10-03', '2019-10-03'),
(178, 191, 18, '2019-10-03', '2019-10-03'),
(179, 192, 18, '2019-10-03', '2019-10-03'),
(180, 179, 24, '2019-10-03', '2019-10-03'),
(181, 180, 24, '2019-10-03', '2019-10-03'),
(182, 181, 24, '2019-10-03', '2019-10-03'),
(183, 182, 24, '2019-10-03', '2019-10-03'),
(184, 183, 24, '2019-10-03', '2019-10-03'),
(185, 184, 24, '2019-10-03', '2019-10-03'),
(186, 185, 24, '2019-10-03', '2019-10-03'),
(187, 186, 24, '2019-10-03', '2019-10-03'),
(188, 172, 29, '2019-10-03', '2019-10-03'),
(189, 173, 29, '2019-10-03', '2019-10-03'),
(190, 174, 29, '2019-10-03', '2019-10-03'),
(191, 175, 29, '2019-10-03', '2019-10-03'),
(192, 176, 29, '2019-10-03', '2019-10-03'),
(193, 177, 29, '2019-10-03', '2019-10-03'),
(194, 178, 29, '2019-10-03', '2019-10-03');

-- --------------------------------------------------------

--
-- Structure de la table `btranselts`
--

CREATE TABLE `btranselts` (
  `id` int(11) NOT NULL,
  `btranfert_id` int(11) DEFAULT NULL,
  `numero` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `date_ext` date DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `btransferts`
--

CREATE TABLE `btransferts` (
  `id` int(11) NOT NULL,
  `ministere_org` varchar(1500) COLLATE utf8_bin DEFAULT NULL,
  `unite_adm` varchar(1500) COLLATE utf8_bin DEFAULT NULL,
  `directiongen_id` text COLLATE utf8_bin,
  `direction_id` text COLLATE utf8_bin,
  `service_id` text COLLATE utf8_bin,
  `nbr_chrono` int(11) DEFAULT NULL,
  `nbr_boite` int(11) DEFAULT NULL,
  `autre_docs` text COLLATE utf8_bin,
  `nom_resp` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `prenom_resp` varchar(450) COLLATE utf8_bin DEFAULT NULL,
  `tel_resp` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `num_fiche` int(11) DEFAULT NULL,
  `date_trans` date DEFAULT NULL,
  `fichier` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `localisation` text COLLATE utf8_bin,
  `observation` text COLLATE utf8_bin,
  `typetransfert` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `nom` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `matricule_cnib` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `provenance` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `direction` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `heure` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `analyse` text COLLATE utf8_bin,
  `adresse` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `motif_consultation` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `descripteurs`
--

CREATE TABLE `descripteurs` (
  `id` int(11) NOT NULL,
  `descripteur` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `code` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `descripteurs`
--

INSERT INTO `descripteurs` (`id`, `descripteur`, `code`) VALUES
(1, 'LOIN°2', 1),
(2, 'Decret n93-413', 1),
(3, 'Conseil national de la population', 1),
(4, 'Circulaire N°93-091/PF/DELGI/DEI/EL', 2),
(5, 'Circulaire N°93-091/PF/DELGI/DEI/EL', 3),
(6, 'Decret n93-414', 4),
(7, 'Portant rectificatif', 4),
(8, 'Decret n 930-409', 5),
(9, 'Portant nomination d''un secrétaire', 5),
(10, 'Circulaire N° 93- 101-/PF/DELGI/DEI/EL', 6),
(11, 'Decret n 93-408', 8),
(12, 'Portant nomination d''un membre du conseil d''administration de la SONAR', 8),
(13, 'Lettre circulaire N°93-00042/MESSRS/SG/DOB/SIOP', 7),
(14, 'Decret n 93-407', 9),
(15, 'Programme d''ajustement structurel', 9),
(16, 'Rapport presenté au nom de la Comfep par le député Bertin Ouiya,rapporteur général', 10),
(17, 'Rapport n°94-002-ADP-COMFEP du 14janvier 1994', 10),
(18, 'Circulaire N°93-008/MFPMA/SG/DGMA/DGPP', 11),
(19, 'Decret n 93-406', 12),
(20, 'Portant nomination de directeurs centraux', 12),
(21, 'Circulaire N° 00946/MESSRS', 13),
(22, 'Decret n 93-405', 14),
(23, 'Portant nomination de directeurs régionaux des impots', 14),
(24, 'Circulaire N°93-006/MFPMA/CAB', 15),
(25, 'Decret n 93-404', 16),
(26, 'Portant nomination d''un administrateur provisoire ', 16),
(27, 'Circulaire N°93-372/MAT/SG/DAAF', 17),
(28, 'Decret n 93-402', 18),
(29, 'Portant nomination des administrateurs provisoires ', 18),
(30, 'Circulaire n°93-007/MFPMA/SG', 19),
(31, 'Decret n 93-403', 20),
(32, 'Portant nomination d''un administrateur provisoire ', 20),
(33, 'Circulaire n°93-002/FPMA/ENAM', 21),
(34, 'Circulaire n°93-024/FPMA/CAB', 22),
(35, 'Decret n 93-401', 23),
(36, 'portant reorganisation du ministère de l''enseignement', 23),
(37, 'Circulaire n°93-001/FPMA/CAB', 24),
(38, 'Decret n 93-400', 25),
(39, 'Statut particulier des douanes', 25),
(40, 'Decret n 93-399', 26),
(41, 'Portant nomination d''un secrétaire permanent', 26),
(42, 'Circulaire n°95-025/MEFP/SG/DGB/DM', 27),
(43, 'Decret n 93-398', 28),
(44, 'Deuil national', 28),
(45, 'Circulaire n°95-012/MESSRS/SG/DOB/SIOP', 29),
(46, 'Decret n 93-397', 30),
(47, 'Propriété d''action', 30),
(48, 'Circulaire n°079/MFPMA/SG', 31),
(49, 'Decret n 93-396', 32),
(50, 'societé d''economie mixte', 32),
(51, 'conseil annuel des administrateurs', 32),
(52, 'Circulaire n°94- 001', 33),
(53, 'Decret 93-395', 34),
(54, 'Dissolution de la societé de gestion des marchés', 34),
(55, 'sogema-b', 34),
(56, 'Circulaire n°940001FPMA/DGMA', 35),
(57, 'Circulaire n° 94-006', 36),
(58, 'Circulaire n°94-296/MFPMA/CAB', 37),
(59, 'Decret 93-393', 38),
(60, 'Modification des articles 4 et 5', 38),
(61, 'Décret n 81-0432/PRES/CMRPN/MCDIM du 12 septembre 1981', 38),
(62, 'Décret n93-392', 39),
(63, 'nomination d''un conseiller technique', 39),
(64, 'Circulaire n°94/172/PRES/SGG-CM', 41),
(65, 'Circulaire n°94-0001/FPMA/DGMA', 41),
(66, 'Circulaire n°94-00-01', 41),
(67, 'Circulaire n°96-007/MFPMA/SG/DGFP/DRFP', 42),
(68, 'Circulaire n° 96-000083/MEF/SG/DGB', 42),
(69, 'Circulaire n°96-885 MS/SG/OST', 42),
(70, 'Decret n 93-391/PRES/TRANS', 43),
(71, 'Nominateur de directeurs centraux', 43),
(72, ' circulaire N°96-012/PM/CAB', 42),
(73, 'Circulaire n°96/MEF/DGI/DLC/SLDA', 42),
(74, 'Circulaire N°97-011/MRP/SG/DAAF', 44),
(75, 'Circulaire n°97-024/PM/S/AG-SE', 44),
(76, 'Circulaire n°97-0279/PRES/GC', 44),
(77, 'circulaire N°97-011/PM/SG/DEF', 44),
(78, 'circulaire N°97-01260/DEF/CAB', 44),
(79, 'Circulaire n°97-013/MESSRS/SG/DRES/SIP', 44),
(80, 'Circulaire n°97- 000064/MEF/SG/DGB', 44),
(81, 'Circulaire n°97-0097/PRES/GC', 44),
(82, 'Circulaire n°97-125/MRP/CAB/SG', 44),
(83, 'Decret n 93-386/PRES/REX', 45),
(84, 'Decret n 93-387', 45),
(85, 'Decret n 93-388/PRES/MET', 45),
(86, 'Correspondance-ordre du jour-calendrier de travail ', 46),
(87, 'Expose des motifs-projet de loi-rapport', 46),
(88, 'Circulaire n°98-025/PM/SG/DAPJ', 47),
(89, 'Circulaire n°98-018/PM/SG/DAPJ', 47),
(90, 'Circulaire n°98-0128/PRES/GC', 47),
(91, 'Circulaire N°98-318/MFPDI/SG', 48),
(92, 'Circulaire n° 98-311/MFPDI/SG', 48),
(93, 'Circulaire n°98-057/MRP/SG/DAAF', 48),
(94, 'Circulaire N°98-318/MFPDI/SG', 49),
(95, 'Circulaire n° 98-311/MFPDI/SG', 49),
(96, 'Circulaire n°98-057/MRP/SG/DAAF', 49),
(97, 'Circulaire N°99-161/MFPDI/SG/DGDI/DPP', 50),
(98, 'Circulaire n° 99-146/MFPDI/SG/DGDI', 50),
(99, 'Circulaire n°99-1984/MS/SG/OST', 50),
(100, 'Expose des motifs-projet de loi- rapports', 51),
(101, 'Circulaire N°2000-010/PRES/SGG/CM', 52),
(102, 'Accord de prêt du 28 janvier 1993', 45),
(103, 'Convention de constitution', 45),
(104, 'Nomination d''un directeur régional', 45),
(105, 'circulaire n°2000/ LOT 1', 52),
(106, 'Circulaire n°2000/LOT2', 52),
(107, 'Circulaire n°2000/LOT3', 52),
(108, 'Nomination de directeurs centraux', 45),
(118, 'Distinctions honorifiques', 45),
(117, 'Organisation de concours professionnels', 45),
(111, 'exposé des motifs-projet de loi-rapports', 53),
(112, 'Nomination d''un directeur de cooperation', 45),
(113, 'Organisation des services administratifs C.E.S', 45),
(114, 'Abrogation de l''alinéa 2 de l''article 1', 45),
(119, 'Organisation, Grande chancellerie', 45),
(116, 'Nomination d''un ordonnateur délégué', 45),
(120, 'Creation de la medaille militaire', 45),
(121, 'Fonctionnement des ordres burkinabè', 45),
(122, 'Nomination d''un commandant', 45),
(123, 'Decret n 93', 45),
(124, 'Decret n 93-251', 45),
(125, 'Decret n 93-248', 45),
(126, 'Decret n 93-242', 45),
(127, 'Decret n 93-237', 45),
(128, 'Decret n 93-234', 45),
(129, 'Decret n 93-233', 45),
(130, 'Decret n93-229', 45),
(131, 'Decret n 93-223', 45),
(132, 'Decret n 93-217', 45),
(133, 'Circulaire 2001', 54),
(134, 'Circulaire 2002', 55),
(135, 'Decret n 93-219', 45),
(136, 'Decret n 93-218', 45),
(137, 'Decret n 93-217', 45),
(138, 'Circulaire 2002', 55),
(139, 'Decret n 93-214', 45),
(140, 'Decret n 93-212', 45),
(141, 'Decret n 93-211', 45),
(142, 'Decret n 93-209', 45),
(143, 'Decret n 93-208', 45),
(144, 'Decret n 93-207', 45),
(145, 'Decret n 93-206', 45),
(146, 'Decret n 93-205', 45),
(147, 'Decret n 93-204', 45),
(148, 'Circulaire 2003', 56),
(149, 'Decret n 93-203bis', 45),
(150, 'Decret n 93203', 45),
(151, 'Decret n 93-202', 45),
(152, 'Decret n 93-200', 45),
(153, 'Decret n 93-201', 45),
(154, 'Decret n 93-199', 45),
(155, 'Decret n 93-196', 45),
(156, 'Decret n 93-197', 45),
(157, 'Decret n 93-169', 45),
(158, 'Decret n 93-168', 45),
(159, 'Decret n 93-167', 45),
(160, 'Decret n 93-166', 45),
(161, 'Decret n 93-161', 45),
(162, 'Decret n 93-160', 45),
(163, 'Decret n 93-159', 45),
(164, 'Decret n 93-157', 45),
(165, 'Decret n 93-156', 45),
(166, 'Decret n 93-155', 45),
(167, 'Decret n 93-154', 45),
(168, 'Decret n 93-198', 45),
(169, 'Decret n 93-153', 45),
(170, 'Decret n 93-152', 45),
(171, 'Decret n 93-151', 45),
(172, 'Decret n 93-146', 45),
(173, 'Decret n 93-145', 45),
(174, 'Decret n 93-144', 45),
(175, 'Decret n 93-143', 45),
(176, 'Decret n 93-142', 45),
(177, 'Decret n 93-141', 45),
(178, 'Decret n 93-140', 45),
(179, 'Decret n 93-133', 45),
(180, 'Decret n 93-122', 45),
(181, 'Circulaire 2004', 57),
(182, 'Expose des motifs-projet de loi-rapports', 58),
(183, 'Decret n 93-121', 45),
(184, 'Decret n 93-120', 45),
(185, 'Decret n 93-119', 45),
(186, 'Decret n 93-118', 45),
(187, 'Decret n 93-117', 45),
(188, 'Decret n 93-116', 45),
(189, 'Decret n 93-115', 45),
(190, 'Decret n 93-113', 45),
(191, 'Decret n 93-111', 45),
(192, 'Circulaire 2005', 59),
(193, 'Circulaire 2006', 60),
(194, 'Decret n 93 lot1', 45),
(195, 'Circulaire 2007', 61),
(196, 'Circulaire 2008', 63),
(197, 'Expose des motifs-projet de loi-rapports', 62),
(198, 'Calendrier de travail-ordre du jour', 64),
(199, 'expose des motifs-projet de loi-rapports', 64),
(200, 'Circulaire 2009', 65),
(201, 'decret 1992 lot1', 66),
(202, 'Circulaire 2010', 67),
(203, 'Decret 1990 lot1', 68),
(204, 'Decret 1989 lot1', 69),
(205, 'decret 1991 lot1', 70),
(206, 'Decret 1987 lot1', 71),
(207, 'Decret 1986 lot1', 72),
(208, 'Calendrier de travail', 73),
(209, 'Expose des motifs-projet de loi-rapports', 73),
(210, 'Circulaire 2011', 74),
(211, 'Circulaire 2012', 75),
(212, 'Calendrier de travail-ordre du jour', 76),
(213, 'expose des motifs-projet de loi-rapports', 76),
(214, 'Circulaire 2013', 77),
(215, 'decret 1994 lot1', 78),
(216, 'Decret 1995 lot1', 79),
(217, 'Circulaire 2014', 80),
(218, 'Circulaire 2017', 81),
(219, 'Circulaire 2018', 82);

-- --------------------------------------------------------

--
-- Structure de la table `directiongens`
--

CREATE TABLE `directiongens` (
  `id` int(11) NOT NULL,
  `sigle` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `nom_direction` varchar(300) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `directiongens`
--

INSERT INTO `directiongens` (`id`, `sigle`, `nom_direction`) VALUES
(1, 'ITS', 'Inspection Technique des Services'),
(2, 'SIG', 'Service d''Information du GOuvernement'),
(3, 'DGM', 'Direction Générale de Médias'),
(4, 'DGRP', 'Direction Générale des Relations avec le Parlement'),
(5, 'DGESS', 'Direction Générale des Etudes et des Statistiques Sectorielles 	'),
(6, 'SG', 'Sécrétariat Général'),
(7, 'DGC', 'Direction generale de la communication'),
(8, 'DGPP', 'direction generale de la prospection et de la planification'),
(9, 'DGS', 'direction générale des sports'),
(10, 'DGAN', 'Direction Génenale des Archives Nationales'),
(11, 'DGA', 'Direction Générale des Archives '),
(12, 'DGEP', 'DIRECTION GENERALE DES ETUDES ET DE LA PLANIFICATION '),
(13, 'DGL', 'Direction Générale de la Logistique'),
(14, 'dgpp', 'direction generale de la prospective et de la planification'),
(15, 'dgpp', 'dierction  de la planification'),
(16, 'DGR', 'Directuion Générale des Routes');

-- --------------------------------------------------------

--
-- Structure de la table `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `sigle` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `direction` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `directiongen_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `directions`
--

INSERT INTO `directions` (`id`, `sigle`, `direction`, `directiongen_id`) VALUES
(9, 'DPPO', 'Direction de la Prospective et de la Planification Opérationnelle', 5),
(2, 'DAF', 'Direction de l''Administration et des FInances', 6),
(3, 'DRH', 'Direction des Ressources Humaines', 6),
(4, 'DMP', 'Direction des Marchés Publics', 6),
(5, 'DCPM', 'Direction de la Communication et de la Presse Ministérielle', 6),
(6, 'DAD', 'Direction des Archives et de la Documentation', 6),
(7, 'DSI', 'Direction des Services Informatiques', 6),
(8, 'DDII', 'Direction du Développement Institutionnel et de l''Innovation', 6),
(10, 'DFP', 'Direction de la Formulation des politiques', 5),
(11, 'DSS', 'Direction des Statistiques Sectorielles', 5),
(12, 'DCPP', 'Direction de la Coordination des Projets et Programmes', 5),
(13, 'DDSM', 'Direction du Développement et du Suivi des Médias', 3),
(14, 'DLC', 'Direction de la Législation et de la Coopération', 3),
(15, 'DPM', 'Direction du Patrimoine des Média', 3),
(16, 'DLR', 'Direction de la législation et de la Réglementation', 4),
(17, 'DSSP', 'Direction du Suivi des Sessions du Parlement', 4),
(18, 'DC', 'Direction de la communication', 7),
(19, 'DA', 'Direction des Archives', 11),
(20, 'DGAN', 'Direction des Arcchives', 10),
(21, 'DS', 'direction des sports', 9),
(22, 'Direction logistique', 'DL', 13),
(23, 'DEP', 'Direction des Etudes et de la Planification', 12),
(24, 'DR', 'Direction des routes', 16);

-- --------------------------------------------------------

--
-- Structure de la table `documentnumeriques`
--

CREATE TABLE `documentnumeriques` (
  `id` int(11) NOT NULL,
  `archive_id` int(11) DEFAULT NULL,
  `nom_document` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `taille` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `documentnumeriques`
--

INSERT INTO `documentnumeriques` (`id`, `archive_id`, `nom_document`, `type`, `taille`, `created`, `modified`) VALUES
(1, 1, 'Decret n93-413-pres-mfp.pdf', 'application/pdf', '882524', '2019-10-02', '2019-10-02'),
(2, 2, 'Circulaire-93-091-PF-DELGI-DEI-EL.pdf', 'application/pdf', '517789', '2019-10-02', '2019-10-02'),
(3, 3, 'Circulaire-93-091-PF-DELGI-DEI-EL.pdf', 'application/pdf', '517789', '2019-10-02', '2019-10-02'),
(4, 4, 'Decret n93-414-pres-mfpl.pdf', 'application/pdf', '203930', '2019-10-02', '2019-10-02'),
(5, 5, 'Decret 930-409-pres-tphu.pdf', 'application/pdf', '361607', '2019-10-02', '2019-10-02'),
(6, 6, 'Circulaire n-93-101-PF-DELGI-DEI-EL.pdf', 'application/pdf', '57408', '2019-10-02', '2019-10-02'),
(7, 7, 'Lettre circulaire n93-00043-MESSRS-SG-DOB-SIOP.pdf', 'application/pdf', '538960', '2019-10-02', '2019-10-02'),
(8, 8, 'Decret n93-408-pres-mfpl.pdf', 'application/pdf', '304619', '2019-10-02', '2019-10-02'),
(9, 9, 'Decret n93-407-pres-mfpl.pdf', 'application/pdf', '253478', '2019-10-02', '2019-10-02'),
(15, 15, 'Circulaire n-93-006-MFPMA-CAB.pdf', 'application/pdf', '1303069', '2019-10-02', '2019-10-02'),
(11, 11, 'Circulaire n-93-008-MFPMA-SG-DGMA-DGPP.pdf', 'application/pdf', '359512', '2019-10-02', '2019-10-02'),
(12, 12, 'Decret n93-406-pres-mfpl.pdf', 'application/pdf', '205306', '2019-10-02', '2019-10-02'),
(13, 13, 'Circulaire n-00946-MESSRS-.pdf', 'application/pdf', '409421', '2019-10-02', '2019-10-02'),
(14, 14, 'Decret n93-405-pres-mfpl.pdf', 'application/pdf', '231762', '2019-10-02', '2019-10-02'),
(16, 16, 'Decret n93-404-pres-micm.pdf', 'application/pdf', '421052', '2019-10-02', '2019-10-02'),
(17, 17, 'Lettre circulaire n-93-372-MAT-SG-DAAF.pdf', 'application/pdf', '240558', '2019-10-02', '2019-10-02'),
(18, 18, 'Decret n°93-402-pres-micm.pdf', 'application/pdf', '783115', '2019-10-02', '2019-10-02'),
(19, 19, 'Circulaire n-93-007-MFPMA-SG.pdf', 'application/pdf', '303093', '2019-10-02', '2019-10-02'),
(20, 20, 'Decret n39-403-pres-micm.pdf', 'application/pdf', '421821', '2019-10-02', '2019-10-02'),
(21, 21, 'Lettre circulaire n-93-002-MFMA-ENAM.pdf', 'application/pdf', '303942', '2019-10-02', '2019-10-02'),
(22, 22, 'Circulaire-n-93-024-FPMA-CAB.pdf', 'application/pdf', '458404', '2019-10-02', '2019-10-02'),
(23, 23, 'Decret n°93-401-pres-pm-mebam.pdf', 'application/pdf', '821191', '2019-10-02', '2019-10-02'),
(24, 24, 'Circualire-n-93-001-FPMA-CAB.pdf', 'application/pdf', '589428', '2019-10-02', '2019-10-02'),
(25, 25, 'Decret n°93-400-pres-mfpma-mfpl.pdf', 'application/pdf', '1364115', '2019-10-02', '2019-10-02'),
(26, 26, 'Decret n°93-399-pres-pm.pdf', 'application/pdf', '372006', '2019-10-02', '2019-10-02'),
(27, 27, 'Circulaire-n-95-025-MEFP-SG-DGB-DM.pdf', 'application/pdf', '659344', '2019-10-02', '2019-10-02'),
(28, 28, 'Decret n°93-398-pres.pdf', 'application/pdf', '222244', '2019-10-02', '2019-10-02'),
(29, 29, 'Circulaire-n-95-012-MESSRS-SG-DOB-SIOP.pdf', 'application/pdf', '519538', '2019-10-02', '2019-10-02'),
(30, 30, 'Decret n°93-397-pres-micm-mfp.pdf', 'application/pdf', '224004', '2019-10-02', '2019-10-02'),
(31, 31, 'Circulaire-n-079-MFPMA-SG.pdf', 'application/pdf', '222131', '2019-10-02', '2019-10-02'),
(32, 32, 'Decret n 93-396-pres-micm.pdf', 'application/pdf', '578800', '2019-10-02', '2019-10-02'),
(33, 33, 'Circulaire n-94-001.pdf', 'application/pdf', '210989', '2019-10-02', '2019-10-02'),
(34, 34, 'Décret n93-395-pres-micm.pdf', 'application/pdf', '186652', '2019-10-02', '2019-10-02'),
(35, 35, 'Circulaire n-94-0001-FPMA-DGMA.pdf', 'application/pdf', '533952', '2019-10-02', '2019-10-02'),
(36, 36, 'Circulaire n-94-006-.pdf', 'application/pdf', '179896', '2019-10-02', '2019-10-02'),
(37, 37, 'Circulaire-n-94-296-MFPMA-CAB.pdf', 'application/pdf', '384760', '2019-10-02', '2019-10-02'),
(38, 38, 'Decret n93-394-pres-micm.pdf', 'application/pdf', '289947', '2019-10-02', '2019-10-02'),
(39, 39, 'Decret n93-392.pdf', 'application/pdf', '271501', '2019-10-02', '2019-10-02'),
(40, 41, 'Circulaire-n-94-172-PRES-SGG-CM___OLD.pdf', 'application/pdf', '1211386', '2019-10-03', '2019-10-03'),
(41, 41, 'Circulaire-n-94-0001-fpma-dgma.pdf', 'application/pdf', '812156', '2019-10-03', '2019-10-03'),
(42, 41, 'Circulaire-n-94-00-01.pdf', 'application/pdf', '142748', '2019-10-03', '2019-10-03'),
(43, 42, 'Circulaire-n-96-007-mfpma-sg-dgfp-drfp.pdf', 'application/pdf', '210555', '2019-10-03', '2019-10-03'),
(44, 42, 'Circulaire-n-96-000083-mef-sg-dgb.pdf', 'application/pdf', '443466', '2019-10-03', '2019-10-03'),
(45, 42, 'Circulaire-n-96-0885-ms-sg-ost.pdf', 'application/pdf', '384126', '2019-10-03', '2019-10-03'),
(46, 43, 'Decret n 93-391-press-trans.pdf', 'application/pdf', '289231', '2019-10-03', '2019-10-03'),
(47, 42, 'Circulaire-n-96-012-pm-cab.pdf', 'application/pdf', '79594', '2019-10-03', '2019-10-03'),
(48, 42, 'Circulaire-n-96-1342-mef-sg-dgi-dlc-slda.pdf', 'application/pdf', '273278', '2019-10-03', '2019-10-03'),
(49, 44, 'Circulaire-n-97-011-mrp-sg-daaf.pdf', 'application/pdf', '194349', '2019-10-03', '2019-10-03'),
(50, 44, 'Circulaire-n-97-024-pm-s-ag-se.pdf', 'application/pdf', '352556', '2019-10-03', '2019-10-03'),
(51, 44, 'Circulaire-n-97-0279-pres-gc.pdf', 'application/pdf', '437440', '2019-10-03', '2019-10-03'),
(52, 45, 'Decret n93-386-pres-rex.pdf', 'application/pdf', '257020', '2019-10-03', '2019-10-03'),
(53, 45, 'Decret n 93-387-pres.pdf', 'application/pdf', '516212', '2019-10-03', '2019-10-03'),
(54, 45, 'Decret n93-388-pres-met.pdf', 'application/pdf', '237066', '2019-10-03', '2019-10-03'),
(55, 45, 'Decret n 93-389-pres-mat-def.pdf', 'application/pdf', '640851', '2019-10-03', '2019-10-03'),
(56, 46, 'Deuxieme session extraordinaire de 1994.pdf', 'application/pdf', '1094196', '2019-10-03', '2019-10-03'),
(57, 46, 'Dossier n003.pdf', 'application/pdf', '623226', '2019-10-03', '2019-10-03'),
(58, 46, 'Dossier n004.pdf', 'application/pdf', '975214', '2019-10-03', '2019-10-03'),
(60, 45, 'Decret n93-392.pdf', 'application/pdf', '271501', '2019-10-03', '2019-10-03'),
(61, 45, 'Decret n93-393-pres-trans.pdf', 'application/pdf', '233496', '2019-10-03', '2019-10-03'),
(62, 45, 'Decret n93-355-pres-mat.pdf', 'application/pdf', '272962', '2019-10-03', '2019-10-03'),
(63, 45, 'Decret n93-356-pres-mat.pdf', 'application/pdf', '230949', '2019-10-03', '2019-10-03'),
(64, 45, 'Decret n93-357-pres-micm-mfpl.pdf', 'application/pdf', '232616', '2019-10-03', '2019-10-03'),
(65, 45, 'Decret n93-358-pres.pdf', 'application/pdf', '234886', '2019-10-03', '2019-10-03'),
(66, 45, 'Decret n93-360-pres-pm.pdf', 'application/pdf', '199084', '2019-10-03', '2019-10-03'),
(67, 45, 'Decret n93-361-pres-mj.pdf', 'application/pdf', '175035', '2019-10-03', '2019-10-03'),
(68, 45, 'Decret n93-362-pres-mj.pdf', 'application/pdf', '208032', '2019-10-03', '2019-10-03'),
(69, 47, 'Circulaire-n-98-025-pm-sg-dapj.pdf', 'application/pdf', '47081', '2019-10-03', '2019-10-03'),
(70, 47, 'Circulaire-n-98-0128-pres-gc.pdf', 'application/pdf', '768592', '2019-10-03', '2019-10-03'),
(71, 47, 'Circulaire-n-98-0128-pres-gc.pdf', 'application/pdf', '768592', '2019-10-03', '2019-10-03'),
(72, 45, 'Decret n93-363-pres-mj.pdf', 'application/pdf', '391093', '2019-10-03', '2019-10-03'),
(73, 45, 'Decret n93-364-pres-mj.pdf', 'application/pdf', '198728', '2019-10-03', '2019-10-03'),
(74, 45, 'Decret n93-365-pres-mat.pdf', 'application/pdf', '1161596', '2019-10-03', '2019-10-03'),
(75, 45, 'Decret n93-366-pres-messrs.pdf', 'application/pdf', '314140', '2019-10-03', '2019-10-03'),
(76, 45, 'Decret n93-367-pres-tphu.pdf', 'application/pdf', '205508', '2019-10-03', '2019-10-03'),
(77, 45, 'Decret n93-368-pres-micm.pdf', 'application/pdf', '325490', '2019-10-03', '2019-10-03'),
(78, 45, 'Decret n 93-369-pres-pm.pdf', 'application/pdf', '301405', '2019-10-03', '2019-10-03'),
(79, 45, 'Decret n 93-370-pres-mfp.pdf', 'application/pdf', '265685', '2019-10-03', '2019-10-03'),
(80, 45, 'Decret n 93-371-pres-etss.pdf', 'application/pdf', '219473', '2019-10-03', '2019-10-03'),
(81, 45, 'Decret n 93-373-pres-etss.pdf', 'application/pdf', '376028', '2019-10-03', '2019-10-03'),
(82, 45, 'Decret n 93-374-pres-mfpl.pdf', 'application/pdf', '326525', '2019-10-03', '2019-10-03'),
(83, 45, 'Decret n 93-375-pres-mfpl.pdf', 'application/pdf', '302360', '2019-10-03', '2019-10-03'),
(84, 45, 'Decret n 93-376-pres-mfpl.pdf', 'application/pdf', '267875', '2019-10-03', '2019-10-03'),
(85, 45, 'Decret n 93-377-pres-mfpl.pdf', 'application/pdf', '273312', '2019-10-03', '2019-10-03'),
(86, 45, 'Decret n 93-378-pres-micm-mfpl.pdf', 'application/pdf', '220104', '2019-10-03', '2019-10-03'),
(87, 45, 'Decret n 93-379-pres-micm-mfp-msasf.pdf', 'application/pdf', '271164', '2019-10-03', '2019-10-03'),
(88, 45, 'Decret n 93-381-pres-micm-mfpl.pdf', 'application/pdf', '220149', '2019-10-03', '2019-10-03'),
(89, 45, 'Decret n 93-382-pres-rex.pdf', 'application/pdf', '288367', '2019-10-03', '2019-10-03'),
(90, 45, 'Decret n 93-383-pres-rex.pdf', 'application/pdf', '296604', '2019-10-03', '2019-10-03'),
(91, 45, 'Decret n 93-384-pres-def.pdf', 'application/pdf', '216679', '2019-10-03', '2019-10-03'),
(93, 45, 'Decret n°93-372-pres-etss.pdf', 'application/pdf', '485705', '2019-10-03', '2019-10-03'),
(94, 48, 'Circulaire-n-98-318-mfpdi-sg.pdf', 'application/pdf', '76433', '2019-10-03', '2019-10-03'),
(95, 48, 'Circulaire-n-98-311-mfpdi-sg.pdf', 'application/pdf', '51142', '2019-10-03', '2019-10-03'),
(96, 48, 'Circulaire-n-98-057-mrp-sg-daaf.pdf', 'application/pdf', '66169', '2019-10-03', '2019-10-03'),
(97, 49, 'Circulaire-n-98-318-mfpdi-sg.pdf', 'application/pdf', '76433', '2019-10-03', '2019-10-03'),
(98, 49, 'Circulaire-n-98-311-mfpdi-sg.pdf', 'application/pdf', '51142', '2019-10-03', '2019-10-03'),
(99, 49, 'Circulaire-n-98-057-mrp-sg-daaf.pdf', 'application/pdf', '66169', '2019-10-03', '2019-10-03'),
(100, 45, 'Decret n°93-380-pres-micm-mfpl.pdf', 'application/pdf', '232492', '2019-10-03', '2019-10-03'),
(101, 45, 'Decret n°93-385-pres-pm-mfpl.pdf', 'application/pdf', '1578429', '2019-10-03', '2019-10-03'),
(102, 47, 'Circulaire-n-98-311-mfpdi-sg.pdf', 'application/pdf', '51142', '2019-10-03', '2019-10-03'),
(103, 47, 'Circulaire-n-98-057-mrp-sg-daaf.pdf', 'application/pdf', '66169', '2019-10-03', '2019-10-03'),
(104, 47, 'Circulaire-n-98-311-mfpdi-sg.pdf', 'application/pdf', '51142', '2019-10-03', '2019-10-03'),
(105, 45, 'Decret n°93-354-pres-mat.pdf', 'application/pdf', '268383', '2019-10-03', '2019-10-03'),
(106, 45, 'Decret n°93-353-pres-cult.pdf', 'application/pdf', '261513', '2019-10-03', '2019-10-03'),
(107, 45, 'Decret n°93-352-pres-rex.pdf', 'application/pdf', '284185', '2019-10-03', '2019-10-03'),
(108, 45, 'Decret n°93-351-pres-rex.pdf', 'application/pdf', '373316', '2019-10-03', '2019-10-03'),
(109, 45, 'Decret n°93-350-pres-rex.pdf', 'application/pdf', '296588', '2019-10-03', '2019-10-03'),
(110, 45, 'Decret n°93-349-pres-mfpl.pdf', 'application/pdf', '336515', '2019-10-03', '2019-10-03'),
(111, 45, 'Decret n93-347-pres-eau.pdf', 'application/pdf', '259123', '2019-10-03', '2019-10-03'),
(112, 45, 'Decretn93-346-pres-fasf.pdf', 'application/pdf', '292769', '2019-10-03', '2019-10-03'),
(113, 47, 'Circulaire-n-98-003-mfpdi-dgfp-drfp.pdf', 'application/pdf', '221176', '2019-10-03', '2019-10-03'),
(114, 47, 'Circulaire-n-n98-002-mfpdi-sg-dgfp-drfp.pdf', 'application/pdf', '262850', '2019-10-03', '2019-10-03'),
(115, 45, 'Decret n93-345-pres-mfass.pdf', 'application/pdf', '390670', '2019-10-03', '2019-10-03'),
(116, 45, 'Decret n93-344-pres-sasf.pdf', 'application/pdf', '294122', '2019-10-03', '2019-10-03'),
(117, 45, 'Decret n93-343-pres-pm.pdf', 'application/pdf', '197610', '2019-10-03', '2019-10-03'),
(118, 45, 'Decret n93-342-pres-mfpl.pdf', 'application/pdf', '281694', '2019-10-03', '2019-10-03'),
(119, 45, 'Decret n93-341-pres-micm.pdf', 'application/pdf', '332726', '2019-10-03', '2019-10-03'),
(120, 45, 'Decret n93-340-pres-mfpl-micm.pdf', 'application/pdf', '294268', '2019-10-03', '2019-10-03'),
(121, 45, 'Dercet n93-339-pres-rex.pdf', 'application/pdf', '289044', '2019-10-03', '2019-10-03'),
(122, 45, 'Decret n93-338-pres-mbam.pdf', 'application/pdf', '200575', '2019-10-03', '2019-10-03'),
(123, 45, 'Decret n93-337-pres-gc.pdf', 'application/pdf', '371696', '2019-10-03', '2019-10-03'),
(124, 46, 'Dossier n005.pdf', 'application/pdf', '1850407', '2019-10-03', '2019-10-03'),
(125, 46, 'Dossier n006.pdf', 'application/pdf', '825233', '2019-10-03', '2019-10-03'),
(126, 46, 'Dossier n007.pdf', 'application/pdf', '1570075', '2019-10-03', '2019-10-03'),
(127, 46, 'Dossier n008.pdf', 'application/pdf', '1501776', '2019-10-03', '2019-10-03'),
(251, 51, 'Troisieme session- extraordinaire-  dossier44.pdf', 'application/pdf', '5036133', '2019-10-04', '2019-10-04'),
(129, 50, 'Circulaire-n-99-161-mfpdi-sg-dgdi-dpp.pdf', 'application/pdf', '312892', '2019-10-03', '2019-10-03'),
(130, 50, 'Circulaire-n-99-146-mfpdi-sg-dgdi.pdf', 'application/pdf', '296138', '2019-10-03', '2019-10-03'),
(131, 50, 'Circulaire-n-99-1984-ms-sg-ost.pdf', 'application/pdf', '381003', '2019-10-03', '2019-10-03'),
(132, 45, 'Decret n93-336-pres-mtphu.pdf', 'application/pdf', '257512', '2019-10-03', '2019-10-03'),
(133, 45, 'Decret n93-335-pres-sasf.pdf', 'application/pdf', '277140', '2019-10-03', '2019-10-03'),
(134, 45, 'Decret n93-334-pres-sasf.pdf', 'application/pdf', '320818', '2019-10-03', '2019-10-03'),
(135, 47, 'Circulaire-n-99-013-mfpdi-sg-dgdi.pdf', 'application/pdf', '290087', '2019-10-03', '2019-10-03'),
(136, 45, 'Decret n 93-333-pres-def.pdf', 'application/pdf', '230818', '2019-10-03', '2019-10-03'),
(137, 45, 'Decret n93-332-pres-def.pdf', 'application/pdf', '172273', '2019-10-03', '2019-10-03'),
(138, 45, 'Decret n93-332-pres-def.pdf', 'application/pdf', '172273', '2019-10-03', '2019-10-03'),
(139, 45, 'Decret n93-331-pres-def.pdf', 'application/pdf', '184960', '2019-10-03', '2019-10-03'),
(140, 45, 'Decret n93-330-pres-def.pdf', 'application/pdf', '206616', '2019-10-03', '2019-10-03'),
(141, 45, 'Decret n93-329-def.pdf', 'application/pdf', '163178', '2019-10-03', '2019-10-03'),
(142, 45, 'Decret n93-328-pres-def.pdf', 'application/pdf', '288868', '2019-10-03', '2019-10-03'),
(143, 45, 'Decret n93-327-pres-met.pdf', 'application/pdf', '341206', '2019-10-03', '2019-10-03'),
(144, 45, 'Decret n93-326-pres-pm.pdf', 'application/pdf', '181858', '2019-10-03', '2019-10-03'),
(145, 45, 'Decret n93-325-pres-pm.pdf', 'application/pdf', '251790', '2019-10-03', '2019-10-03'),
(146, 45, 'Decret n93-324-pres-tphu.pdf', 'application/pdf', '289662', '2019-10-03', '2019-10-03'),
(147, 45, 'Decret n93-323-pres-tpuh.pdf', 'application/pdf', '199327', '2019-10-03', '2019-10-03'),
(148, 45, 'Decret n93-322-pres-met.pdf', 'application/pdf', '431747', '2019-10-03', '2019-10-03'),
(149, 45, 'Decret n93-321-pres-mfpl.pdf', 'application/pdf', '314564', '2019-10-03', '2019-10-03'),
(150, 45, 'Decret n93-320-pres-micm.pdf', 'application/pdf', '194311', '2019-10-03', '2019-10-03'),
(151, 45, 'Decret n93-319-pres-micm.pdf', 'application/pdf', '187213', '2019-10-03', '2019-10-03'),
(152, 45, 'Decret n93-318-pres-mjs.pdf', 'application/pdf', '277206', '2019-10-03', '2019-10-03'),
(153, 45, 'Decret n93-317-pres-mfpl.pdf', 'application/pdf', '400256', '2019-10-03', '2019-10-03'),
(154, 45, 'Decret n93-316-pres-mfpl.pdf', 'application/pdf', '330007', '2019-10-03', '2019-10-03'),
(155, 45, 'Decret n93-315-pres-met.pdf', 'application/pdf', '292696', '2019-10-03', '2019-10-03'),
(156, 45, 'Decret n93-314-pres-mjs.pdf', 'application/pdf', '266710', '2019-10-03', '2019-10-03'),
(157, 45, 'Decret n93-313-pres-rex.pdf', 'application/pdf', '210896', '2019-10-03', '2019-10-03'),
(158, 45, 'Decret n93-312-pres-sgg-cm.pdf', 'application/pdf', '345629', '2019-10-03', '2019-10-03'),
(159, 45, 'Decret n93-311-pres.pdf', 'application/pdf', '195781', '2019-10-03', '2019-10-03'),
(172, 45, 'Decret n93-305-pres-com.pdf', 'application/pdf', '303228', '2019-10-03', '2019-10-03'),
(164, 45, 'Decret n93-310-pres-rex.pdf', 'application/pdf', '386095', '2019-10-03', '2019-10-03'),
(165, 45, 'Decret n 93-309-pres-micm.pdf', 'application/pdf', '280312', '2019-10-03', '2019-10-03'),
(173, 45, 'Decret n93-304-pres-rex.pdf', 'application/pdf', '185269', '2019-10-03', '2019-10-03'),
(167, 45, 'Decret n93-308-pres-eau.pdf', 'application/pdf', '295629', '2019-10-03', '2019-10-03'),
(168, 45, 'Decret n93-307-pres-def.pdf', 'application/pdf', '182349', '2019-10-03', '2019-10-03'),
(169, 45, 'Decret n93-306-pres-res.pdf', 'application/pdf', '356721', '2019-10-03', '2019-10-03'),
(174, 45, 'Decret n93-303-pres-eau.pdf', 'application/pdf', '247104', '2019-10-03', '2019-10-03'),
(175, 50, 'Circulaire-n-99-013-mfpdi-sg-dgdi.pdf', 'application/pdf', '290087', '2019-10-03', '2019-10-03'),
(176, 50, 'Circulaire-n-n99-102-mef-sg-dgtcp-delf.pdf', 'application/pdf', '468601', '2019-10-03', '2019-10-03'),
(177, 50, 'Circulaire-99-015-mfpdi-sg-dgdi-desip.pdf', 'application/pdf', '965749', '2019-10-03', '2019-10-03'),
(178, 45, 'Decret n93-302-pres-etss.pdf', 'application/pdf', '346324', '2019-10-03', '2019-10-03'),
(179, 45, 'Decret n93-301-pres-ces.pdf', 'application/pdf', '192501', '2019-10-03', '2019-10-03'),
(180, 45, 'Decret n93-300-pres-ces.pdf', 'application/pdf', '200054', '2019-10-03', '2019-10-03'),
(181, 45, 'Decret n93-299-pres-ces.pdf', 'application/pdf', '181308', '2019-10-03', '2019-10-03'),
(182, 50, 'Circulaire-n-99-013-mfpdi-sg-dgdi.pdf', 'application/pdf', '290087', '2019-10-03', '2019-10-03'),
(183, 50, 'Circulaire-n-99-019-mfpdi-sg.pdf', 'application/pdf', '207676', '2019-10-03', '2019-10-03'),
(184, 50, 'Circulaire-n-99-002098-maet-sg-dgapjc-ajc-sac.pdf', 'application/pdf', '232051', '2019-10-03', '2019-10-03'),
(185, 50, 'Circulaire-n-99-20-mfpdi-sg.pdf', 'application/pdf', '146600', '2019-10-03', '2019-10-03'),
(186, 50, 'Circulaire-n-99-016-mfpdi-sg-dgdi.pdf', 'application/pdf', '497934', '2019-10-03', '2019-10-03'),
(187, 50, 'Circulaire-n-99-018-mfpdi-sg-dgdi.pdf', 'application/pdf', '420202', '2019-10-03', '2019-10-03'),
(188, 50, 'Circulairen-n-99-734-mir-sg-daaf-yn-tp.pdf', 'application/pdf', '487677', '2019-10-03', '2019-10-03'),
(189, 45, 'Decret n93-298-pres-micm-mfp-mc.pdf', 'application/pdf', '297832', '2019-10-03', '2019-10-03'),
(190, 45, 'Decret n93-297-pres-def.pdf', 'application/pdf', '273887', '2019-10-03', '2019-10-03'),
(191, 45, 'Decret n93-296-pres-def.pdf', 'application/pdf', '306240', '2019-10-03', '2019-10-03'),
(192, 45, 'Decret n93-295-pres-def.pdf', 'application/pdf', '266172', '2019-10-03', '2019-10-03'),
(193, 45, 'Decret n93-293-pres-def.pdf', 'application/pdf', '189864', '2019-10-03', '2019-10-03'),
(194, 45, 'Decret n93-294-pres-def.pdf', 'application/pdf', '187269', '2019-10-03', '2019-10-03'),
(195, 45, 'Decret n93-292-pres-rex.pdf', 'application/pdf', '231557', '2019-10-03', '2019-10-03'),
(196, 45, 'Decret n93-291-pres.pdf', 'application/pdf', '235407', '2019-10-03', '2019-10-03'),
(197, 45, 'Decret n93-290-pres-rex.pdf', 'application/pdf', '228958', '2019-10-03', '2019-10-03'),
(198, 50, 'Circulaire-n-99-012-mfpdi-sg-dgdi.pdf', 'application/pdf', '287810', '2019-10-03', '2019-10-03'),
(199, 50, 'Circulaire-n-99-0441-def-cab-snd.pdf', 'application/pdf', '316189', '2019-10-03', '2019-10-03'),
(200, 50, 'Circulaire-n-99-0167-pres-gc.pdf', 'application/pdf', '418005', '2019-10-03', '2019-10-03'),
(201, 45, 'Decret n93-289-pres-rex-messrs.pdf', 'application/pdf', '238036', '2019-10-03', '2019-10-03'),
(202, 45, 'Decret n93-288-pres-rex.pdf', 'application/pdf', '267437', '2019-10-03', '2019-10-03'),
(203, 45, 'Decret n93-287-pres-rex.pdf', 'application/pdf', '271729', '2019-10-03', '2019-10-03'),
(204, 45, 'Decret n93-286-pres-rex.pdf', 'application/pdf', '267309', '2019-10-03', '2019-10-03'),
(205, 45, 'Decret n93-285-pres-messrs-rex-mfpl.pdf', 'application/pdf', '245619', '2019-10-03', '2019-10-03'),
(206, 45, 'Decret n 93-384-pres-def.pdf', 'application/pdf', '216679', '2019-10-03', '2019-10-03'),
(207, 45, 'Decret n°93-385-pres-pm-mfpl.pdf', 'application/pdf', '1578429', '2019-10-03', '2019-10-03'),
(208, 45, 'Decret n93-284-pres-rex.pdf', 'application/pdf', '278353', '2019-10-03', '2019-10-03'),
(209, 45, 'Decret n 93-383-pres-rex.pdf', 'application/pdf', '296604', '2019-10-03', '2019-10-03'),
(210, 50, 'Circulaire-n-99-007-mfdi-sg-dgdi-dpp.pdf', 'application/pdf', '499268', '2019-10-03', '2019-10-03'),
(211, 50, 'Circulaire-n-n99-066-mee-sg-dgpe.pdf', 'application/pdf', '408250', '2019-10-03', '2019-10-03'),
(212, 50, 'Circulaire-n-99-008-mfpdi-sg-dgfp-dpe.pdf', 'application/pdf', '229306', '2019-10-03', '2019-10-03'),
(213, 45, 'Decret n93-280-pres-rex.pdf', 'application/pdf', '290149', '2019-10-03', '2019-10-03'),
(214, 45, 'Decret n93-279-pres-sasf-micm.pdf', 'application/pdf', '791556', '2019-10-03', '2019-10-03'),
(215, 45, 'Decret n93-271-pres-micm.pdf', 'application/pdf', '240569', '2019-10-03', '2019-10-03'),
(216, 50, 'Circulaire-n-99-004-mfpdi-sg-dgdi.pdf', 'application/pdf', '50467', '2019-10-03', '2019-10-03'),
(217, 50, 'Circulaire-n-99-007-mfpdi-sg-.pdf', 'application/pdf', '479523', '2019-10-03', '2019-10-03'),
(218, 50, 'Circulaire-n-99-001-mfpdi-dpp.pdf', 'application/pdf', '364362', '2019-10-03', '2019-10-03'),
(219, 45, 'Decret n93-270-pres-micm.pdf', 'application/pdf', '273335', '2019-10-03', '2019-10-03'),
(220, 45, 'Decret n93-273-pres-mj.pdf', 'application/pdf', '209962', '2019-10-03', '2019-10-03'),
(221, 45, 'Decret n 93-374-pres-mfpl.pdf', 'application/pdf', '326525', '2019-10-03', '2019-10-03'),
(222, 45, 'Decret n 93-375-pres-mfpl.pdf', 'application/pdf', '302360', '2019-10-03', '2019-10-03'),
(223, 45, 'Decret n 93-376-pres-mfpl.pdf', 'application/pdf', '267875', '2019-10-03', '2019-10-03'),
(224, 45, 'Decret n 93-377-pres-mfpl.pdf', 'application/pdf', '273312', '2019-10-03', '2019-10-03'),
(225, 45, 'Decret n 93-378-pres-micm-mfpl.pdf', 'application/pdf', '220104', '2019-10-03', '2019-10-03'),
(226, 45, 'Decret n93-359-pres-pm.pdf', 'application/pdf', '333827', '2019-10-03', '2019-10-03'),
(227, 45, 'Decret n93-331-pres-def.pdf', 'application/pdf', '184960', '2019-10-03', '2019-10-03'),
(228, 50, 'Circulaire-n-99-293-mfpdi-sg.pdf', 'application/pdf', '0', '2019-10-03', '2019-10-03'),
(229, 50, 'Circulaire-n-99-004-mfpdi-sg.pdf', 'application/pdf', '248758', '2019-10-03', '2019-10-03'),
(230, 47, 'Circulaire-n-98-015-media-fa-sg-srdpcap.pdf', 'application/pdf', '45783', '2019-10-03', '2019-10-03'),
(231, 47, 'Circulaire-n-98--0411-def-cab-dsnd.pdf', 'application/pdf', '210732', '2019-10-03', '2019-10-03'),
(232, 45, 'Decret n93-272-pres-messrs-mbam.pdf', 'application/pdf', '451183', '2019-10-03', '2019-10-03'),
(233, 45, 'Decret n93-210-pres-metss.pdf', 'application/pdf', '1009924', '2019-10-03', '2019-10-03'),
(234, 45, 'Decret n93-092-pres-mfpl.pdf', 'application/pdf', '438150', '2019-10-03', '2019-10-03'),
(235, 52, 'Circulaire-n-2000-010-pres-sgg-cm.pdf', 'application/pdf', '66220', '2019-10-03', '2019-10-03'),
(236, 45, 'Decret n 93-415-pres-mfpma.pdf', 'application/pdf', '442835', '2019-10-03', '2019-10-03'),
(237, 45, 'Decret n93-269-pres-micm.pdf', 'application/pdf', '325616', '2019-10-04', '2019-10-04'),
(247, 45, 'Decret n93-267-pres-micm.pdf', 'application/pdf', '257768', '2019-10-04', '2019-10-04'),
(245, 51, NULL, NULL, NULL, '2019-10-04', '2019-10-04'),
(249, 45, 'Decret n93-268-pres-mfpl.pdf', 'application/pdf', '300951', '2019-10-04', '2019-10-04'),
(248, 45, 'Decret n93-266-pres-cult.pdf', 'application/pdf', '284244', '2019-10-04', '2019-10-04'),
(250, 46, 'Dossier n009.pdf', 'application/pdf', '61801416', '2019-10-04', '2019-10-04'),
(252, 51, 'Troisieme session extraordinaire de 1994.pdf', 'application/pdf', '4486793', '2019-10-04', '2019-10-04'),
(253, 51, 'Troisieme session extraordinaire de 1994-dossier 43.pdf', 'application/pdf', '5653734', '2019-10-04', '2019-10-04'),
(254, 52, 'Circulaire-2000-lot1.pdf', 'application/pdf', '3912961', '2019-10-04', '2019-10-04'),
(255, 52, 'Circulaire-2000-lot2.pdf', 'application/pdf', '6285205', '2019-10-04', '2019-10-04'),
(256, 52, 'Circulaire-2000-lot3.pdf', 'application/pdf', '6950097', '2019-10-04', '2019-10-04'),
(257, 45, 'Decret n93-265-pres-cult.pdf', 'application/pdf', '208808', '2019-10-04', '2019-10-04'),
(258, 53, 'Dossier 001.pdf', 'application/pdf', '4592911', '2019-10-04', '2019-10-04'),
(259, 53, 'Dossier 003.pdf', 'application/pdf', '2584697', '2019-10-04', '2019-10-04'),
(260, 53, 'Dossier 005.pdf', 'application/pdf', '2258932', '2019-10-04', '2019-10-04'),
(261, 45, 'Decret n93-0265-bis-pres-mat.pdf', 'application/pdf', '338511', '2019-10-04', '2019-10-04'),
(262, 53, 'Dossier 005.pdf', 'application/pdf', '2258932', '2019-10-04', '2019-10-04'),
(263, 53, 'Dossier 006.pdf', 'application/pdf', '4264600', '2019-10-04', '2019-10-04'),
(264, 53, 'Dossier 007.pdf', 'application/pdf', '2940696', '2019-10-04', '2019-10-04'),
(265, 45, 'Decret n93-264-pres.pdf', 'application/pdf', '393334', '2019-10-04', '2019-10-04'),
(266, 45, 'Decret n93-263-pres-mfpl.pdf', 'application/pdf', '201287', '2019-10-04', '2019-10-04'),
(267, 45, 'Decret n93-262-pres-mfpl.pdf', 'application/pdf', '197712', '2019-10-04', '2019-10-04'),
(268, 53, 'Dossier 008.pdf', 'application/pdf', '9600050', '2019-10-04', '2019-10-04'),
(269, 53, 'Dossier 12.pdf', 'application/pdf', '1845881', '2019-10-04', '2019-10-04'),
(270, 53, 'Dossier 13.pdf', 'application/pdf', '5249307', '2019-10-04', '2019-10-04'),
(271, 53, 'Dossier 14.pdf', 'application/pdf', '11658907', '2019-10-04', '2019-10-04'),
(272, 53, 'Dossier 16.pdf', 'application/pdf', '4338954', '2019-10-04', '2019-10-04'),
(273, 53, 'Dossier 17.pdf', 'application/pdf', '13791674', '2019-10-04', '2019-10-04'),
(274, 53, 'Dossier18.pdf', 'application/pdf', '1479771', '2019-10-04', '2019-10-04'),
(275, 53, 'Dossier19.pdf', 'application/pdf', '1555249', '2019-10-04', '2019-10-04'),
(276, 53, 'Dossier20.pdf', 'application/pdf', '1453997', '2019-10-04', '2019-10-04'),
(277, 53, 'Dossier21.pdf', 'application/pdf', '1409999', '2019-10-04', '2019-10-04'),
(278, 53, 'Dossier22.pdf', 'application/pdf', '814020', '2019-10-04', '2019-10-04'),
(279, 53, 'Dossier23.pdf', 'application/pdf', '11193080', '2019-10-04', '2019-10-04'),
(280, 53, 'Dossier24.pdf', 'application/pdf', '9369956', '2019-10-04', '2019-10-04'),
(281, 53, 'Dossier25.pdf', 'application/pdf', '4824423', '2019-10-04', '2019-10-04'),
(282, 53, 'Dossier27.pdf', 'application/pdf', '2725270', '2019-10-04', '2019-10-04'),
(283, 53, 'Dossier28.pdf', 'application/pdf', '2274889', '2019-10-04', '2019-10-04'),
(284, 45, 'Decret n93-261-mfpl.pdf', 'application/pdf', '209588', '2019-10-04', '2019-10-04'),
(285, 45, 'Decret n93-259-pres-gc.pdf', 'application/pdf', '358665', '2019-10-04', '2019-10-04'),
(286, 45, 'Decret n93-258-pres.pdf', 'application/pdf', '397464', '2019-10-04', '2019-10-04'),
(287, 53, 'Dossier26.pdf', 'application/pdf', '23892552', '2019-10-04', '2019-10-04'),
(288, 45, 'Decret n93-257-pres-gc.pdf', 'application/pdf', '418845', '2019-10-04', '2019-10-04'),
(289, 45, 'Decret n93-256-pres-gc.pdf', 'application/pdf', '936250', '2019-10-04', '2019-10-04'),
(290, 45, 'Decret n93-255-pres-pm-mij.pdf', 'application/pdf', '312787', '2019-10-04', '2019-10-04'),
(291, 45, 'Decret n93-254-pres-pm-mj.pdf', 'application/pdf', '256476', '2019-10-04', '2019-10-04'),
(292, 45, 'Decret n93-253-pres-pm-mfp-micm-mdem.pdf', 'application/pdf', '379612', '2019-10-04', '2019-10-04'),
(293, 45, 'Decret n93-252-pres-pm-mfp-micm-mdem.pdf', 'application/pdf', '273716', '2019-10-04', '2019-10-04'),
(294, 45, 'Decret n93-251-pres-mfpl.pdf', 'application/pdf', '418484', '2019-10-04', '2019-10-04'),
(295, 45, 'Decret n93-250-pres-mj.pdf', 'application/pdf', '435553', '2019-10-04', '2019-10-04'),
(296, 45, 'Decret n93-249-pres.pdf', 'application/pdf', '238308', '2019-10-04', '2019-10-04'),
(297, 45, 'Decret n93-248-pres-sasf.pdf', 'application/pdf', '491288', '2019-10-04', '2019-10-04'),
(298, 45, 'Decret n93-247-pres-micm.pdf', 'application/pdf', '275641', '2019-10-04', '2019-10-04'),
(299, 45, 'Decret n93-246-pres-micm.pdf', 'application/pdf', '259640', '2019-10-04', '2019-10-04'),
(300, 45, 'Decret n93-245-pres-mat.pdf', 'application/pdf', '509450', '2019-10-04', '2019-10-04'),
(301, 45, 'Decret n93-244-pres-mat.pdf', 'application/pdf', '446606', '2019-10-04', '2019-10-04'),
(302, 45, 'Decret n93-243-pres-mat.pdf', 'application/pdf', '262479', '2019-10-04', '2019-10-04'),
(303, 45, 'Decret n93-242-pres-mat.pdf', 'application/pdf', '255700', '2019-10-04', '2019-10-04'),
(304, 45, 'Decret n93-241-pres-rex.pdf', 'application/pdf', '372180', '2019-10-04', '2019-10-04'),
(305, 45, 'Decret n93-238-pres-tphu.pdf', 'application/pdf', '290473', '2019-10-04', '2019-10-04'),
(306, 45, 'Decret n93-237-pres-rex.pdf', 'application/pdf', '336155', '2019-10-04', '2019-10-04'),
(307, 45, 'Decret n93-236-pres-rex.pdf', 'application/pdf', '330033', '2019-10-04', '2019-10-04'),
(308, 45, 'Decret n93-235-pres-messrs.pdf', 'application/pdf', '294764', '2019-10-04', '2019-10-04'),
(309, 45, 'Decret n93-240-pres-rex.pdf', 'application/pdf', '220416', '2019-10-04', '2019-10-04'),
(310, 45, 'Decret n93-239-pres-msasf.pdf', 'application/pdf', '304641', '2019-10-04', '2019-10-04'),
(311, 45, 'Decret n93-234-pres-mrp.pdf', 'application/pdf', '314716', '2019-10-04', '2019-10-04'),
(312, 45, 'Decret n93-233-pres-com.pdf', 'application/pdf', '308675', '2019-10-04', '2019-10-04'),
(313, 45, 'Decret n93-232-pres-sasf.pdf', 'application/pdf', '302706', '2019-10-04', '2019-10-04'),
(314, 45, 'Decret n93-230-pres-pm.pdf', 'application/pdf', '230963', '2019-10-04', '2019-10-04'),
(315, 45, 'Decret n93-229-pres-pm-tphu.pdf', 'application/pdf', '607557', '2019-10-04', '2019-10-04'),
(316, 45, 'Decret n93-223-pres-rex.pdf', 'application/pdf', '284097', '2019-10-04', '2019-10-04'),
(317, 45, 'Decret n93-217-pres-mfpl.pdf', 'application/pdf', '318101', '2019-10-04', '2019-10-04'),
(318, 45, 'Decret n93-213-pres-sgg-cm.pdf', 'application/pdf', '336905', '2019-10-04', '2019-10-04'),
(319, 54, 'Circulaire-n-2001-lot1.pdf', 'application/pdf', '3671931', '2019-10-04', '2019-10-04'),
(320, 54, 'Circulaire-n-2001-lot2.pdf', 'application/pdf', '4235891', '2019-10-04', '2019-10-04'),
(321, 54, 'Circulaire-n-2001-lot3.pdf', 'application/pdf', '3033844', '2019-10-04', '2019-10-04'),
(322, 54, 'Circulaire-n-2001-lot4.pdf', 'application/pdf', '4529861', '2019-10-04', '2019-10-04'),
(323, 54, 'Circulaire-n-2001-lot5.pdf', 'application/pdf', '3845778', '2019-10-04', '2019-10-04'),
(324, 55, 'Circulaire-n-2002-lot1.pdf', 'application/pdf', '3517686', '2019-10-04', '2019-10-04'),
(325, 55, 'Circulaire-n-2002-lot2.pdf', 'application/pdf', '4573549', '2019-10-04', '2019-10-04'),
(326, 45, 'Decret n93-219-pres-micm.pdf', 'application/pdf', '393381', '2019-10-04', '2019-10-04'),
(327, 45, 'Decret n93-218-pres-sasf.pdf', 'application/pdf', '590326', '2019-10-04', '2019-10-04'),
(328, 45, 'Decret n93-215-pres-def.pdf', 'application/pdf', '243132', '2019-10-04', '2019-10-04'),
(329, 45, 'Decret n93-219-pres-micm.pdf', 'application/pdf', '393381', '2019-10-04', '2019-10-04'),
(330, 45, 'Decret n93-218-pres-sasf.pdf', 'application/pdf', '590326', '2019-10-04', '2019-10-04'),
(331, 45, 'Decret n93-215-pres-def.pdf', 'application/pdf', '243132', '2019-10-04', '2019-10-04'),
(332, 45, 'Decret n93-219-pres-micm.pdf', 'application/pdf', '393381', '2019-10-04', '2019-10-04'),
(333, 45, 'Decret n93-218-pres-sasf.pdf', 'application/pdf', '590326', '2019-10-04', '2019-10-04'),
(334, 45, 'Decret n93-215-pres-def.pdf', 'application/pdf', '243132', '2019-10-04', '2019-10-04'),
(335, 45, 'Decret n93-214-pres-def.pdf', 'application/pdf', '204429', '2019-10-04', '2019-10-04'),
(336, 45, 'Decret n93-212-pres-cult.pdf', 'application/pdf', '190673', '2019-10-04', '2019-10-04'),
(337, 45, 'Decret n93-211-pres-etss.pdf', 'application/pdf', '317173', '2019-10-04', '2019-10-04'),
(338, 55, 'Circulaire-n-2002-lot3.pdf', 'application/pdf', '2935130', '2019-10-04', '2019-10-04'),
(339, 55, 'Circulaire-n-2002-lot4.pdf', 'application/pdf', '5379612', '2019-10-04', '2019-10-04'),
(340, 45, 'Decret n93-209-pres-etss.pdf', 'application/pdf', '235066', '2019-10-04', '2019-10-04'),
(341, 45, 'Decret n93-208-pres-etss.pdf', 'application/pdf', '282801', '2019-10-04', '2019-10-04'),
(342, 45, 'Decret n93-207-pres-com.pdf', 'application/pdf', '226427', '2019-10-04', '2019-10-04'),
(343, 45, 'Decret n93-205-pres.pdf', 'application/pdf', '244171', '2019-10-04', '2019-10-04'),
(344, 45, 'Decret n93-206-pres-mat.pdf', 'application/pdf', '338330', '2019-10-04', '2019-10-04'),
(345, 45, 'Decret n93-204-pres-messrs.pdf', 'application/pdf', '374811', '2019-10-04', '2019-10-04'),
(346, 56, 'Circulaire-n-2003-lot1.pdf', 'application/pdf', '3831608', '2019-10-04', '2019-10-04'),
(347, 56, 'Circulaire-n-2003-lot2.pdf', 'application/pdf', '5016009', '2019-10-04', '2019-10-04'),
(348, 45, 'Decret n93-203-bis-pres-messrs.pdf', 'application/pdf', '221060', '2019-10-04', '2019-10-04'),
(349, 45, 'Decret n93-203-press-messrs.pdf', 'application/pdf', '375662', '2019-10-04', '2019-10-04'),
(350, 45, 'Decret n93-202-pres-mspma.pdf', 'application/pdf', '349051', '2019-10-04', '2019-10-04'),
(351, 45, 'Decret n93-200-pres-micm.pdf', 'application/pdf', '302098', '2019-10-04', '2019-10-04'),
(352, 45, 'Decret n93-201-pres-mat.pdf', 'application/pdf', '361712', '2019-10-04', '2019-10-04'),
(353, 45, 'Decret n93-199-pres-com.pdf', 'application/pdf', '307678', '2019-10-04', '2019-10-04'),
(354, 45, 'Decret n93-197-pres-rex.pdf', 'application/pdf', '334631', '2019-10-04', '2019-10-04'),
(355, 45, 'Decret n93-196-pres-com.pdf', 'application/pdf', '329985', '2019-10-04', '2019-10-04'),
(356, 45, 'Decret n93-171-pres-met.pdf', 'application/pdf', '357619', '2019-10-04', '2019-10-04'),
(357, 45, 'Decret n93-172-pres-trans.pdf', 'application/pdf', '304949', '2019-10-04', '2019-10-04'),
(358, 45, 'Decret n93-170-pres-micm.pdf', 'application/pdf', '346347', '2019-10-04', '2019-10-04'),
(359, 45, 'Decret n93-169-pres-mebam.pdf', 'application/pdf', '306573', '2019-10-04', '2019-10-04'),
(360, 45, 'Decret n93-168-pres-asf.pdf', 'application/pdf', '201618', '2019-10-04', '2019-10-04'),
(361, 45, 'Decret n93-167-pres-rex.pdf', 'application/pdf', '272718', '2019-10-04', '2019-10-04'),
(362, 45, 'Decret n93-166-pres-pm-tphu.pdf', 'application/pdf', '347572', '2019-10-04', '2019-10-04'),
(363, 45, 'Decret n93-161-pres-messrs.pdf', 'application/pdf', '371491', '2019-10-04', '2019-10-04'),
(364, 45, 'Decret n93-160-pres-mfpl.pdf', 'application/pdf', '317531', '2019-10-04', '2019-10-04'),
(365, 45, 'Decret n93-159-pm-mrp.pdf', 'application/pdf', '89698', '2019-10-04', '2019-10-04'),
(366, 45, 'Decret n93-157-pres-micm.pdf', 'application/pdf', '238405', '2019-10-04', '2019-10-04'),
(367, 45, 'Decret n93-156-pres-sasf.pdf', 'application/pdf', '265924', '2019-10-04', '2019-10-04'),
(368, 45, 'Decret n93-155-pres-mfpl.pdf', 'application/pdf', '275342', '2019-10-04', '2019-10-04'),
(369, 45, 'Decret n93-154-pres-mfpl.pdf', 'application/pdf', '309365', '2019-10-04', '2019-10-04'),
(370, 45, 'Decret n93-198-pres-mat.pdf', 'application/pdf', '236252', '2019-10-04', '2019-10-04'),
(371, 45, 'Decret n93-153-pres-mfpl.pdf', 'application/pdf', '219176', '2019-10-04', '2019-10-04'),
(372, 45, 'Decret n93-150-pres-micm.pdf', 'application/pdf', '363199', '2019-10-04', '2019-10-04'),
(373, 45, 'Decret n93-151-pres-etss.pdf', 'application/pdf', '282062', '2019-10-04', '2019-10-04'),
(374, 45, 'Decret n93-150-pres-micm.pdf', 'application/pdf', '363199', '2019-10-04', '2019-10-04'),
(375, 45, 'Decret n93-149-pres-micm.pdf', 'application/pdf', '292315', '2019-10-04', '2019-10-04'),
(376, 45, 'Decret n93-147-pres-rex.pdf', 'application/pdf', '268580', '2019-10-04', '2019-10-04'),
(377, 45, 'Decret n93-146-pres-mij.pdf', 'application/pdf', '839907', '2019-10-04', '2019-10-04'),
(378, 45, 'Decret n93-144-pres-mfpl-agri-ra.pdf', 'application/pdf', '273339', '2019-10-04', '2019-10-04'),
(379, 45, 'Decret n93-145-pres-rex.pdf', 'application/pdf', '337544', '2019-10-04', '2019-10-04'),
(380, 45, 'Decret n93-143-pres-agri-ra.pdf', 'application/pdf', '223551', '2019-10-04', '2019-10-04'),
(381, 45, 'Decret n93-142-pres-messrs.pdf', 'application/pdf', '207231', '2019-10-04', '2019-10-04'),
(382, 45, 'Decret n93-141-pres-messrs.pdf', 'application/pdf', '230087', '2019-10-04', '2019-10-04'),
(383, 45, 'Decret n93-140-pres-mfpl-tphu.pdf', 'application/pdf', '309120', '2019-10-04', '2019-10-04'),
(384, 45, 'Decret n93-133-pres-tphu.pdf', 'application/pdf', '158056', '2019-10-04', '2019-10-04'),
(385, 45, 'Decret n93-122-pres.pdf', 'application/pdf', '223191', '2019-10-04', '2019-10-04'),
(386, 57, 'Circulaire-n-2004-lot1.pdf', 'application/pdf', '5273595', '2019-10-04', '2019-10-04'),
(387, 57, 'Circulaire-n-2004-lot2.pdf', 'application/pdf', '2951400', '2019-10-04', '2019-10-04'),
(388, 57, 'Circulaire-n-2004-lot3.pdf', 'application/pdf', '7476760', '2019-10-04', '2019-10-04'),
(389, 57, 'Circulaire-n-2004-lot4.pdf', 'application/pdf', '5427891', '2019-10-04', '2019-10-04'),
(390, 57, 'Circulaire-n-2004-lot5.pdf', 'application/pdf', '5307808', '2019-10-04', '2019-10-04'),
(392, 45, 'Decret n93-158-pres-pm.pdf', 'application/pdf', '389321', '2019-10-04', '2019-10-04'),
(393, 58, 'Ordre du jour.pdf', 'application/pdf', '1186401', '2019-10-04', '2019-10-04'),
(394, 58, 'Calendrier de travail des comission.pdf', 'application/pdf', '1041057', '2019-10-04', '2019-10-04'),
(395, 58, 'Dossier39.pdf', 'application/pdf', '6042123', '2019-10-04', '2019-10-04'),
(396, 45, 'Decret n93-121-pres-rex.pdf', 'application/pdf', '274677', '2019-10-04', '2019-10-04'),
(397, 45, 'Decret n93-120-pres-mat.pdf', 'application/pdf', '283865', '2019-10-04', '2019-10-04'),
(398, 45, 'Decret n93-119-pres-sasf.pdf', 'application/pdf', '253810', '2019-10-04', '2019-10-04'),
(399, 58, 'Dossier40.pdf', 'application/pdf', '4915808', '2019-10-04', '2019-10-04'),
(400, 58, 'Dossier41.pdf', 'application/pdf', '1755654', '2019-10-04', '2019-10-04'),
(401, 58, 'Dossier42.pdf', 'application/pdf', '6571671', '2019-10-04', '2019-10-04'),
(402, 45, 'Decret n93-118-pres.pdf', 'application/pdf', '264511', '2019-10-04', '2019-10-04'),
(403, 45, 'Decret n93-117-pres-com.pdf', 'application/pdf', '341741', '2019-10-04', '2019-10-04'),
(404, 45, 'Decret n93-116-pres-com.pdf', 'application/pdf', '371297', '2019-10-04', '2019-10-04'),
(405, 58, 'Dossier43.pdf', 'application/pdf', '4994046', '2019-10-04', '2019-10-04'),
(406, 58, 'Dossier44.pdf', 'application/pdf', '1870157', '2019-10-04', '2019-10-04'),
(407, 58, 'Dossier45.pdf', 'application/pdf', '2814163', '2019-10-04', '2019-10-04'),
(408, 45, 'Decret n93-115-pres-micm.pdf', 'application/pdf', '221251', '2019-10-04', '2019-10-04'),
(409, 45, 'Decret n93-113-pres-rex.pdf', 'application/pdf', '303968', '2019-10-04', '2019-10-04'),
(410, 45, 'Decret n93-111-pres-mat.pdf', 'application/pdf', '330303', '2019-10-04', '2019-10-04'),
(411, 58, 'Dossier46.pdf', 'application/pdf', '4533012', '2019-10-04', '2019-10-04'),
(412, 58, 'Dossier47.pdf', 'application/pdf', '936224', '2019-10-04', '2019-10-04'),
(413, 58, 'Dossier49.pdf', 'application/pdf', '713763', '2019-10-04', '2019-10-04'),
(414, 45, 'Decret n93-114-pres-tphu.pdf', 'application/pdf', '365787', '2019-10-04', '2019-10-04'),
(415, 45, 'Decret n93-110-pres-mat.pdf', 'application/pdf', '212296', '2019-10-04', '2019-10-04'),
(416, 45, 'Decret n93-148-pres-mij.pdf', 'application/pdf', '860931', '2019-10-04', '2019-10-04'),
(417, 58, 'Dossier50.pdf', 'application/pdf', '2132402', '2019-10-04', '2019-10-04'),
(418, 58, 'Ordre du jour.pdf', 'application/pdf', '1186401', '2019-10-04', '2019-10-04'),
(419, 58, 'Dossier52.pdf', 'application/pdf', '693014', '2019-10-04', '2019-10-04'),
(420, 58, 'Dossier51.pdf', 'application/pdf', '722220', '2019-10-04', '2019-10-04'),
(421, 58, 'Dossier53.pdf', 'application/pdf', '605711', '2019-10-04', '2019-10-04'),
(422, 58, 'Dossier54.pdf', 'application/pdf', '441691', '2019-10-04', '2019-10-04'),
(423, 58, 'Dossier55.pdf', 'application/pdf', '472764', '2019-10-04', '2019-10-04'),
(424, 58, 'Dossier56.pdf', 'application/pdf', '1703992', '2019-10-04', '2019-10-04'),
(425, 58, 'Dossier57.pdf', 'application/pdf', '595901', '2019-10-04', '2019-10-04'),
(426, 58, 'Dossier58.pdf', 'application/pdf', '2204891', '2019-10-04', '2019-10-04'),
(427, 58, 'Dossier59.pdf', 'application/pdf', '1359517', '2019-10-04', '2019-10-04'),
(428, 59, 'Circulaire-n-2005-lot1.pdf', 'application/pdf', '3704379', '2019-10-04', '2019-10-04'),
(429, 59, 'Circulaire-n-2005-lot2.pdf', 'application/pdf', '3927047', '2019-10-04', '2019-10-04'),
(430, 59, 'Circulaire-n-2005-lot3.pdf', 'application/pdf', '5779971', '2019-10-04', '2019-10-04'),
(431, 59, 'Circulaire-n-2005-lot4.pdf', 'application/pdf', '3165127', '2019-10-04', '2019-10-04'),
(432, 45, 'Decret n93 lot 1.pdf', 'application/pdf', '17966267', '2019-10-04', '2019-10-04'),
(433, 58, 'Dossier 60.pdf', 'application/pdf', '1456331', '2019-10-04', '2019-10-04'),
(434, 58, 'Dossier 61.pdf', 'application/pdf', '1633627', '2019-10-04', '2019-10-04'),
(435, 58, 'Dossier62.pdf', 'application/pdf', '284939', '2019-10-04', '2019-10-04'),
(436, 60, 'Circulaire-n-2006-lot1.pdf', 'application/pdf', '2369822', '2019-10-04', '2019-10-04'),
(437, 58, 'Dossier 63.pdf', 'application/pdf', '1499797', '2019-10-04', '2019-10-04'),
(438, 58, 'Dossier 64.pdf', 'application/pdf', '2810277', '2019-10-04', '2019-10-04'),
(439, 58, 'Dossier 65.pdf', 'application/pdf', '735494', '2019-10-04', '2019-10-04'),
(440, 61, 'Circulaire-n-2007-lot1.pdf', 'application/pdf', '4114607', '2019-10-04', '2019-10-04'),
(441, 58, 'Dossier 66.pdf', 'application/pdf', '438314', '2019-10-04', '2019-10-04'),
(442, 58, 'Dossier 67.pdf', 'application/pdf', '2217054', '2019-10-04', '2019-10-04'),
(443, 58, 'Dossier68.pdf', 'application/pdf', '2950862', '2019-10-04', '2019-10-04'),
(444, 58, 'Dossier69.pdf', 'application/pdf', '3431671', '2019-10-04', '2019-10-04'),
(445, 45, 'Decret n93 lot 2.pdf', 'application/pdf', '11448376', '2019-10-04', '2019-10-04'),
(446, 62, 'Dossier 31.pdf', 'application/pdf', '2368937', '2019-10-04', '2019-10-04'),
(447, 62, 'Dossier 32.pdf', 'application/pdf', '2713201', '2019-10-04', '2019-10-04'),
(448, 62, 'Dossier 33.pdf', 'application/pdf', '1040505', '2019-10-04', '2019-10-04'),
(449, 63, 'Circulaire-n-2008-lot1.pdf', 'application/pdf', '3374027', '2019-10-04', '2019-10-04'),
(450, 63, 'Circulaire-n-2008-lot2.pdf', 'application/pdf', '6461503', '2019-10-04', '2019-10-04'),
(451, 63, 'Circuliare-n-2008-lot3.pdf', 'application/pdf', '6176262', '2019-10-04', '2019-10-04'),
(452, 45, 'Decret n93 lot 3.pdf', 'application/pdf', '8874885', '2019-10-04', '2019-10-04'),
(466, 45, 'Decret n93 lot 4.pdf', 'application/pdf', '8576927', '2019-10-04', '2019-10-04'),
(455, 62, 'Dossier 34.pdf', 'application/pdf', '962863', '2019-10-04', '2019-10-04'),
(456, 62, 'Dossier 35.pdf', 'application/pdf', '7528742', '2019-10-04', '2019-10-04'),
(457, 62, 'Dossier 36.pdf', 'application/pdf', '1348485', '2019-10-04', '2019-10-04'),
(458, 62, 'Dossier 37.pdf', 'application/pdf', '510727', '2019-10-04', '2019-10-04'),
(459, 62, 'Dossier 38.pdf', 'application/pdf', '1221917', '2019-10-04', '2019-10-04'),
(460, 45, 'Decret n93 lot 5.pdf', 'application/pdf', '14859717', '2019-10-04', '2019-10-04'),
(467, 45, 'Decret n93 lot 6.pdf', 'application/pdf', '20385319', '2019-10-04', '2019-10-04'),
(462, 64, 'Calendrier de travail des commissions.pdf', 'application/pdf', '781659', '2019-10-04', '2019-10-04'),
(463, 64, 'Ordre du jour.pdf', 'application/pdf', '1507507', '2019-10-04', '2019-10-04'),
(464, 64, 'Dossier 01.pdf', 'application/pdf', '18452441', '2019-10-04', '2019-10-04'),
(468, 65, 'Circulaire-n-2009-lot1.pdf', 'application/pdf', '5068465', '2019-10-04', '2019-10-04'),
(469, 65, 'Circulaire-n-2009-lot2.pdf', 'application/pdf', '4352647', '2019-10-04', '2019-10-04'),
(470, 65, 'Circulaire-n-2009-lot3.pdf', 'application/pdf', '5767170', '2019-10-04', '2019-10-04'),
(471, 65, 'Circulaire-n-2009-lot4.pdf', 'application/pdf', '3280622', '2019-10-04', '2019-10-04'),
(472, 65, 'Circulaire-n-2009-lot5.pdf', 'application/pdf', '5474849', '2019-10-04', '2019-10-04'),
(478, 64, 'Dossier 5.pdf', 'application/pdf', '744952', '2019-10-04', '2019-10-04'),
(474, 64, 'Dossier 3.pdf', 'application/pdf', '1634633', '2019-10-04', '2019-10-04'),
(475, 64, 'Dossier 4.pdf', 'application/pdf', '11405638', '2019-10-04', '2019-10-04'),
(477, 64, 'Dossier 2.pdf', 'application/pdf', '5713817', '2019-10-04', '2019-10-04'),
(479, 64, 'Dossier 6-7.pdf', 'application/pdf', '8654415', '2019-10-04', '2019-10-04'),
(480, 64, 'Dossier 8.pdf', 'application/pdf', '1034831', '2019-10-04', '2019-10-04'),
(481, 64, 'Dossier 9.pdf', 'application/pdf', '3800186', '2019-10-04', '2019-10-04'),
(482, 64, 'Dossier 10.pdf', 'application/pdf', '4016433', '2019-10-04', '2019-10-04'),
(483, 64, 'Dossier 14.pdf', 'application/pdf', '2449859', '2019-10-04', '2019-10-04'),
(484, 66, 'Decret n92 lot 1.pdf', 'application/pdf', '8990247', '2019-10-04', '2019-10-04'),
(485, 64, 'Dossier 17.pdf', 'application/pdf', '573703', '2019-10-04', '2019-10-04'),
(486, 64, 'Dossier 15.pdf', 'application/pdf', '2877233', '2019-10-04', '2019-10-04'),
(487, 64, 'Dossier 19.pdf', 'application/pdf', '658765', '2019-10-04', '2019-10-04'),
(488, 67, 'Circulaire-n-2010-lot2.pdf', 'application/pdf', '3399684', '2019-10-04', '2019-10-04'),
(489, 67, 'Circulaire-n-2010-lot1.pdf', 'application/pdf', '4203221', '2019-10-04', '2019-10-04'),
(490, 68, 'Decret n90 lot 1.pdf', 'application/pdf', '1131728', '2019-10-04', '2019-10-04'),
(491, 61, 'Circulaire-n-2007.pdf', 'application/pdf', '1207881', '2019-10-04', '2019-10-04'),
(492, 64, 'Dossier 18.pdf', 'application/pdf', '1060083', '2019-10-04', '2019-10-04'),
(493, 69, 'Decret n89 lot 1.pdf', 'application/pdf', '931200', '2019-10-04', '2019-10-04'),
(494, 70, 'Decret n91 lot 1.pdf', 'application/pdf', '233745', '2019-10-04', '2019-10-04'),
(495, 71, 'Decret n87 lot 1.pdf', 'application/pdf', '732466', '2019-10-04', '2019-10-04'),
(496, 72, 'Decret n86 lot 1.pdf', 'application/pdf', '1238789', '2019-10-04', '2019-10-04'),
(497, 73, 'Calendrier de travail de commission.pdf', 'application/pdf', '1475360', '2019-10-04', '2019-10-04'),
(498, 73, 'Dossier 1.pdf', 'application/pdf', '11451387', '2019-10-04', '2019-10-04'),
(499, 73, 'Dossier 35.pdf', 'application/pdf', '7036051', '2019-10-04', '2019-10-04'),
(500, 73, 'Dossier 36.pdf', 'application/pdf', '764715', '2019-10-04', '2019-10-04'),
(501, 73, 'Dssier 37.pdf', 'application/pdf', '1542484', '2019-10-04', '2019-10-04'),
(502, 73, 'Dossier 38.pdf', 'application/pdf', '2690790', '2019-10-04', '2019-10-04'),
(503, 73, 'Dossier 40.pdf', 'application/pdf', '516583', '2019-10-04', '2019-10-04'),
(504, 73, 'Dossier 41.pdf', 'application/pdf', '562420', '2019-10-04', '2019-10-04'),
(505, 73, 'Dossier 42-48.pdf', 'application/pdf', '2253602', '2019-10-04', '2019-10-04'),
(506, 73, 'Dossier 49.pdf', 'application/pdf', '1938582', '2019-10-04', '2019-10-04'),
(507, 73, 'Dossier 50.pdf', 'application/pdf', '2385186', '2019-10-04', '2019-10-04'),
(508, 74, 'Circulaire-n-2011-lot1.pdf', 'application/pdf', '4596159', '2019-10-04', '2019-10-04'),
(509, 74, 'Circulaire-n-2011-lot2.pdf', 'application/pdf', '5264280', '2019-10-04', '2019-10-04'),
(510, 74, 'Circulaire-n-2011-lot3.pdf', 'application/pdf', '6629887', '2019-10-04', '2019-10-04'),
(511, 74, 'Circulaire-n-2011-lot4.pdf', 'application/pdf', '5452924', '2019-10-04', '2019-10-04'),
(512, 73, 'Dossier 51.pdf', 'application/pdf', '839506', '2019-10-04', '2019-10-04'),
(513, 73, 'Dossier 52.pdf', 'application/pdf', '2300694', '2019-10-04', '2019-10-04'),
(514, 73, 'Dossier 54.pdf', 'application/pdf', '861761', '2019-10-04', '2019-10-04'),
(515, 73, 'Dossier 55.pdf', 'application/pdf', '1272713', '2019-10-04', '2019-10-04'),
(516, 73, 'Dossier 56.pdf', 'application/pdf', '8136863', '2019-10-04', '2019-10-04'),
(517, 73, 'Dossier 57.pdf', 'application/pdf', '2767340', '2019-10-04', '2019-10-04'),
(518, 73, 'Dossier 58.pdf', 'application/pdf', '2251164', '2019-10-04', '2019-10-04'),
(519, 73, 'Dossier 59.pdf', 'application/pdf', '1044749', '2019-10-04', '2019-10-04'),
(520, 73, 'Dossier 60.pdf', 'application/pdf', '1000998', '2019-10-04', '2019-10-04'),
(521, 75, 'circulaire 2012 - lot1.pdf', 'application/pdf', '6639367', '2019-10-04', '2019-10-04'),
(522, 75, 'Circulaire n2012- lot2.pdf', 'application/pdf', '3675664', '2019-10-04', '2019-10-04'),
(523, 75, 'Circulaire n 2012- lot3.pdf', 'application/pdf', '3186280', '2019-10-04', '2019-10-04'),
(524, 76, 'Calendrier de travail des commissions.pdf', 'application/pdf', '1809394', '2019-10-04', '2019-10-04'),
(525, 76, 'Ordre du jour.pdf', 'application/pdf', '1003931', '2019-10-04', '2019-10-04'),
(526, 76, 'Dossier 15.pdf', 'application/pdf', '1677346', '2019-10-04', '2019-10-04'),
(527, 76, 'Dossier 16.pdf', 'application/pdf', '908485', '2019-10-04', '2019-10-04'),
(528, 76, 'Dossier 30.pdf', 'application/pdf', '1577853', '2019-10-04', '2019-10-04'),
(529, 76, 'Dossier 31.pdf', 'application/pdf', '935711', '2019-10-04', '2019-10-04'),
(530, 76, 'Dossier 33.pdf', 'application/pdf', '431209', '2019-10-04', '2019-10-04'),
(531, 63, 'Circulaire-n-2008.pdf', 'application/pdf', '110223', '2019-10-04', '2019-10-04'),
(532, 77, 'Circulaire n-2013 - lot1.pdf', 'application/pdf', '14111742', '2019-10-04', '2019-10-04'),
(533, 77, 'Circulaire n -2013- lot2.pdf', 'application/pdf', '6107871', '2019-10-04', '2019-10-04'),
(534, 77, 'Circulaire n - 2013- lot3.pdf', 'application/pdf', '5353370', '2019-10-04', '2019-10-04'),
(535, 77, 'Circulaire n - 2013 - lot4.pdf', 'application/pdf', '7620815', '2019-10-04', '2019-10-04'),
(536, 78, 'Decret n94 lot1.pdf', 'application/pdf', '15942347', '2019-10-04', '2019-10-04'),
(537, 78, 'Decret n94 lot 2.pdf', 'application/pdf', '12466360', '2019-10-04', '2019-10-04'),
(538, 78, 'Decret n94 lot 3.pdf', 'application/pdf', '15913420', '2019-10-04', '2019-10-04'),
(539, 78, 'Decret n94 lot 4.pdf', 'application/pdf', '12475954', '2019-10-04', '2019-10-04'),
(540, 78, 'Decret n94 lot 5.pdf', 'application/pdf', '12985852', '2019-10-04', '2019-10-04'),
(541, 78, 'Decret n94 lot 6.pdf', 'application/pdf', '11764519', '2019-10-04', '2019-10-04'),
(542, 78, 'Decret n94 lot 7.pdf', 'application/pdf', '9520735', '2019-10-04', '2019-10-04'),
(543, 78, 'Decret n94 lot 8.pdf', 'application/pdf', '10583882', '2019-10-04', '2019-10-04'),
(544, 78, 'Decret n94 lot 9.pdf', 'application/pdf', '13028819', '2019-10-04', '2019-10-04'),
(545, 78, 'Decret n94 lot 10.pdf', 'application/pdf', '13994134', '2019-10-04', '2019-10-04'),
(546, 78, 'Decret n94 lot 11.pdf', 'application/pdf', '12362264', '2019-10-04', '2019-10-04');
INSERT INTO `documentnumeriques` (`id`, `archive_id`, `nom_document`, `type`, `taille`, `created`, `modified`) VALUES
(547, 79, 'Decret n95 lot1.pdf', 'application/pdf', '20167522', '2019-10-04', '2019-10-04'),
(548, 79, 'Decret n95 lot2.pdf', 'application/pdf', '31301836', '2019-10-04', '2019-10-04'),
(549, 79, 'Decret n95 lot3.pdf', 'application/pdf', '45088680', '2019-10-04', '2019-10-04'),
(550, 79, 'Deccret n95 lot4.pdf', 'application/pdf', '48064508', '2019-10-04', '2019-10-04'),
(551, 80, 'Circulaire n- 2014 - lot1.pdf', 'application/pdf', '7130644', '2019-10-04', '2019-10-04'),
(552, 80, 'Circulaire n - 2014 - lot2.pdf', 'application/pdf', '10976130', '2019-10-04', '2019-10-04'),
(553, 80, 'Circulaire n - 2014 - lot3.pdf', 'application/pdf', '13099318', '2019-10-04', '2019-10-04'),
(554, 80, 'Circulaire n - 2014 - lot4.pdf', 'application/pdf', '11441837', '2019-10-04', '2019-10-04'),
(555, 80, 'Circulaire n - 2014 - lot5.pdf', 'application/pdf', '6321924', '2019-10-04', '2019-10-04'),
(556, 80, 'Circulaire n - 2014 - lot6.pdf', 'application/pdf', '12795251', '2019-10-04', '2019-10-04'),
(557, 80, 'Circulaire n -2014 - lot7.pdf', 'application/pdf', '13669239', '2019-10-04', '2019-10-04'),
(558, 81, 'Circulaire n - 2017.pdf', 'application/pdf', '309649', '2019-10-04', '2019-10-04'),
(559, 82, 'Circulaire n - 2018.pdf', 'application/pdf', '400943', '2019-10-04', '2019-10-04');

-- --------------------------------------------------------

--
-- Structure de la table `emprunts`
--

CREATE TABLE `emprunts` (
  `id` int(11) NOT NULL,
  `codeID` int(11) DEFAULT NULL,
  `tout_dossier` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `detail` text COLLATE utf8_bin,
  `date_emprunt` date DEFAULT NULL,
  `datepro_retour` date DEFAULT NULL,
  `heure_emprunt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `id_bene` int(11) DEFAULT NULL,
  `date_retour` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `heure_retour` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `code_user` int(11) DEFAULT NULL,
  `retourne` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `analyse` text COLLATE utf8_bin,
  `adresse` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `statement` text COLLATE utf8_bin NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `statement`, `created`) VALUES
(1, 12, 'Connexion au systeme', '2019-10-02 08:57:04'),
(2, 9, 'Connexion au systeme', '2019-10-02 08:57:08'),
(3, 1, 'Connexion au systeme', '2019-10-02 09:01:34'),
(4, 13, 'Connexion au systeme', '2019-10-02 09:02:42'),
(5, 9, 'Connexion au systeme', '2019-10-02 09:05:10'),
(6, 4, 'Connexion au systeme', '2019-10-02 09:14:02'),
(7, 10, 'Connexion au systeme', '2019-10-02 09:18:18'),
(8, 12, 'Modification du mot de passe de WOUROUGOU K. Nina', '2019-10-02 09:24:03'),
(9, 13, 'Modification du mot de passe de TIEMTORE Alphonsine', '2019-10-02 09:24:19'),
(10, 12, 'Connexion au systeme', '2019-10-02 09:24:30'),
(11, 13, 'Connexion au systeme', '2019-10-02 09:24:36'),
(12, 9, 'Connexion au systeme', '2019-10-02 09:25:34'),
(13, 4, 'Modification du mot de passe de BOUSSA Tobouré', '2019-10-02 09:25:53'),
(14, 10, 'Modification du mot de passe de KARAMBIRI N. Haoua', '2019-10-02 09:26:16'),
(15, 17, 'Connexion au systeme', '2019-10-02 09:26:28'),
(16, 9, 'Modification du mot de passe de NIKIEMA Olga', '2019-10-02 09:26:37'),
(17, 16, 'Connexion au systeme', '2019-10-02 09:26:42'),
(18, 4, 'Connexion au systeme', '2019-10-02 09:26:49'),
(19, 16, 'Modification beneficiaire id: 1', '2019-10-02 09:27:29'),
(20, 6, 'Connexion au systeme', '2019-10-02 09:28:20'),
(21, 16, 'Modification du mot de passe de KONATE Dramane', '2019-10-02 09:28:27'),
(22, 1, 'Connexion au systeme', '2019-10-02 09:28:29'),
(23, 17, 'Modification du mot de passe de OUEDRAOGO Ousseni', '2019-10-02 09:28:37'),
(24, 8, 'Connexion au systeme', '2019-10-02 09:28:40'),
(25, 15, 'Connexion au systeme', '2019-10-02 09:29:11'),
(26, 17, 'Connexion au systeme', '2019-10-02 09:29:17'),
(27, 6, 'Modification du mot de passe de BADO Joseph', '2019-10-02 09:29:38'),
(28, 15, 'Modification du mot de passe de OUEDRAOGO Moussa', '2019-10-02 09:29:51'),
(29, 10, 'Connexion au systeme', '2019-10-02 09:30:09'),
(30, 16, 'Connexion au systeme', '2019-10-02 09:30:15'),
(31, 6, 'Connexion au systeme', '2019-10-02 09:30:28'),
(32, 12, 'Connexion au systeme', '2019-10-02 09:31:01'),
(33, 10, 'Modification beneficiaire id: 1', '2019-10-02 09:31:33'),
(34, 9, 'Connexion au systeme', '2019-10-02 09:32:30'),
(35, 16, 'Modification beneficiaire id: 1', '2019-10-02 09:33:11'),
(36, 1, 'Connexion au systeme', '2019-10-02 09:36:00'),
(37, 1, 'Connexion au systeme', '2019-10-02 09:37:21'),
(38, 1, 'Creation beneficiaire id: 1', '2019-10-02 09:38:43'),
(39, 17, 'Connexion au systeme', '2019-10-02 09:38:44'),
(40, 25, 'Connexion au systeme', '2019-10-02 09:39:27'),
(41, 12, 'Connexion au systeme', '2019-10-02 09:39:35'),
(42, 25, 'Connexion au systeme', '2019-10-02 09:40:05'),
(43, 1, 'Connexion au systeme', '2019-10-02 09:45:57'),
(44, 10, 'Connexion au systeme', '2019-10-02 09:46:15'),
(45, 25, 'Connexion au systeme', '2019-10-02 09:46:46'),
(46, 1, 'Modification travee id: 1', '2019-10-02 09:47:24'),
(47, 1, 'Modification travee id: 1', '2019-10-02 09:47:39'),
(48, 1, 'Modification travee id: 1', '2019-10-02 09:47:45'),
(49, 1, 'Modification travee id: 1', '2019-10-02 09:47:52'),
(50, 1, 'Modification travee id: 1', '2019-10-02 09:48:00'),
(51, 1, 'Modification travee id: 1', '2019-10-02 09:48:11'),
(52, 1, 'Modification travee id: 1', '2019-10-02 09:48:21'),
(53, 1, 'Modification travee id: 1', '2019-10-02 09:48:27'),
(54, 1, 'Modification travee id: 1', '2019-10-02 09:48:35'),
(55, 1, 'Modification travee id: 1', '2019-10-02 09:49:01'),
(56, 1, 'Modification travee id: 1', '2019-10-02 09:49:17'),
(57, 1, 'Modification travee id: 1', '2019-10-02 09:49:25'),
(58, 1, 'Modification travee id: 1', '2019-10-02 09:49:31'),
(59, 1, 'Modification travee id: 1', '2019-10-02 09:49:39'),
(60, 1, 'Modification travee id: 1', '2019-10-02 09:49:47'),
(61, 1, 'Modification travee id: 1', '2019-10-02 09:49:53'),
(62, 1, 'Modification travee id: 1', '2019-10-02 09:49:59'),
(63, 1, 'Modification travee id: 1', '2019-10-02 09:50:05'),
(64, 10, 'Creation beneficiaire id: 1', '2019-10-02 09:50:36'),
(65, 1, 'Modification salle id: 1', '2019-10-02 09:50:43'),
(66, 1, 'Modification site id: 1', '2019-10-02 09:51:04'),
(67, 1, 'Suppression Sitesid:2, id:3, id:5, id:6, id:7, id:8, id:9', '2019-10-02 09:51:18'),
(68, 1, 'Modification travee id: 1', '2019-10-02 09:52:02'),
(69, 1, 'Modification travee id: 1', '2019-10-02 09:52:08'),
(70, 1, 'Modification travee id: 1', '2019-10-02 09:52:16'),
(71, 1, 'Modification travee id: 1', '2019-10-02 09:52:22'),
(72, 12, 'Connexion au systeme', '2019-10-02 09:52:36'),
(73, 1, 'Suppression Sallesid:2, id:3, id:4, id:5, id:6, id:7, id:8', '2019-10-02 09:52:50'),
(74, 8, 'Enregistrement du mot clé: LOIN°2/  Mot clé correspondant à l''archive: LOI PORTAN 888 ', '2019-10-02 10:44:23'),
(75, 8, 'Creation archive :LOI PORTAN 8881', '2019-10-02 10:44:23'),
(76, 1, 'Connexion au systeme', '2019-10-02 11:06:30'),
(77, 1, 'Modification boite id: 1', '2019-10-02 11:09:49'),
(78, 1, 'Modification boite id: 1', '2019-10-02 11:10:02'),
(79, 1, 'Modification boite id: 1', '2019-10-02 11:10:15'),
(80, 1, 'Modification boite id: 1', '2019-10-02 11:10:39'),
(81, 1, 'Modification boite id: 1', '2019-10-02 11:10:47'),
(82, 1, 'Modification boite id: 1', '2019-10-02 11:10:57'),
(83, 1, 'Modification boite id: 1', '2019-10-02 11:11:10'),
(84, 1, 'Modification boite id: 1', '2019-10-02 11:11:18'),
(85, 1, 'Modification boite id: 1', '2019-10-02 11:11:27'),
(86, 1, 'Modification boite id: 1', '2019-10-02 11:11:46'),
(87, 1, 'Modification boite id: 1', '2019-10-02 11:11:58'),
(88, 1, 'Modification boite id: 1', '2019-10-02 11:12:11'),
(89, 1, 'Modification boite id: 1', '2019-10-02 11:12:27'),
(90, 1, 'Modification boite id: 1', '2019-10-02 11:12:39'),
(91, 1, 'Creation boite id: 1', '2019-10-02 11:12:56'),
(92, 1, 'Creation boite id: 1', '2019-10-02 11:13:02'),
(93, 1, 'Creation boite id: 1', '2019-10-02 11:13:13'),
(94, 1, 'Creation boite id: 1', '2019-10-02 11:13:27'),
(95, 1, 'Creation boite id: 1', '2019-10-02 11:13:44'),
(96, 1, 'Creation boite id: 1', '2019-10-02 11:13:52'),
(97, 1, 'Creation boite id: 1', '2019-10-02 11:14:01'),
(98, 1, 'Creation boite id: 1', '2019-10-02 11:14:16'),
(99, 1, 'Creation boite id: 1', '2019-10-02 11:14:28'),
(100, 1, 'Creation boite id: 1', '2019-10-02 11:14:36'),
(101, 1, 'Modification rayon id: 1', '2019-10-02 11:18:35'),
(102, 1, 'Creation boite id: 1', '2019-10-02 11:18:49'),
(103, 1, 'Creation boite id: 1', '2019-10-02 11:19:35'),
(104, 1, 'Creation boite id: 1', '2019-10-02 11:19:41'),
(105, 1, 'Creation boite id: 1', '2019-10-02 11:19:48'),
(106, 1, 'Creation boite id: 1', '2019-10-02 11:19:56'),
(107, 1, 'Creation boite id: 1', '2019-10-02 11:20:12'),
(108, 1, 'Modification boite id: 1', '2019-10-02 11:20:25'),
(109, 1, 'Modification boite id: 1', '2019-10-02 11:26:25'),
(110, 1, 'Creation boite id: 1', '2019-10-02 11:26:43'),
(111, 13, 'Connexion au systeme', '2019-10-02 11:37:26'),
(112, 15, 'Connexion au systeme', '2019-10-02 11:38:03'),
(113, 15, 'Connexion au systeme', '2019-10-02 11:39:50'),
(114, 25, 'Connexion au systeme', '2019-10-02 11:40:38'),
(115, 1, 'Connexion au systeme', '2019-10-02 11:40:49'),
(116, 13, 'Connexion au systeme', '2019-10-02 11:43:06'),
(117, 25, 'Connexion au systeme', '2019-10-02 11:43:15'),
(118, 13, 'Connexion au systeme', '2019-10-02 11:44:24'),
(119, 12, 'Connexion au systeme', '2019-10-02 11:46:32'),
(120, 15, 'Connexion au systeme', '2019-10-02 11:47:50'),
(121, 12, 'Connexion au systeme', '2019-10-02 11:48:41'),
(122, 13, 'Upload du document numérique: Decret n93-413-pres-mfp.pdf/  Type: application/pdf/ Taille: 882524/  Document correspondant à l''archive: Decret n93-413/PRES/MFP portant reéorganisation du conseil national de la population ', '2019-10-02 11:57:44'),
(123, 13, 'Enregistrement du mot clé: Decret n93-413/  Mot clé correspondant à l''archive: Decret n93-413/PRES/MFP portant reéorganisation du conseil national de la population ', '2019-10-02 11:57:44'),
(124, 13, 'Enregistrement du mot clé: Conseil national de la population/  Mot clé correspondant à l''archive: Decret n93-413/PRES/MFP portant reéorganisation du conseil national de la population ', '2019-10-02 11:57:44'),
(125, 13, 'Creation archive :Decret n93-413/PRES/MFP portant reéorganisation du conseil national de la population1', '2019-10-02 11:57:44'),
(126, 12, 'Connexion au systeme', '2019-10-02 11:58:54'),
(127, 15, 'Upload du document numérique: Circulaire-93-091-PF-DELGI-DEI-EL.pdf/  Type: application/pdf/ Taille: 517789/  Document correspondant à l''archive: circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions ', '2019-10-02 11:59:37'),
(128, 15, 'Enregistrement du mot clé: Circulaire N°93-091/PF/DELGI/DEI/EL/  Mot clé correspondant à l''archive: circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions ', '2019-10-02 11:59:37'),
(129, 15, 'Creation archive :circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions1', '2019-10-02 11:59:37'),
(130, 15, 'Upload du document numérique: Circulaire-93-091-PF-DELGI-DEI-EL.pdf/  Type: application/pdf/ Taille: 517789/  Document correspondant à l''archive: circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions ', '2019-10-02 11:59:38'),
(131, 15, 'Enregistrement du mot clé: Circulaire N°93-091/PF/DELGI/DEI/EL/  Mot clé correspondant à l''archive: circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions ', '2019-10-02 11:59:38'),
(132, 15, 'Creation archive :circulaire N° 93-091/PF/DELGI/DEI/EL Programme de Formation des Secrétaires de Direction, DAAF et DEP. Département Ministeriels et Institutions1', '2019-10-02 11:59:38'),
(133, 13, 'Upload du document numérique: Decret n93-414-pres-mfpl.pdf/  Type: application/pdf/ Taille: 203930/  Document correspondant à l''archive: Decret n93-414/PRES/MFPL portant rectificatif à l''article Ier du decret 93-374/PRES/MFPL du 25/11/1993 ', '2019-10-02 12:04:08'),
(134, 13, 'Enregistrement du mot clé: Decret n93-414/  Mot clé correspondant à l''archive: Decret n93-414/PRES/MFPL portant rectificatif à l''article Ier du decret 93-374/PRES/MFPL du 25/11/1993 ', '2019-10-02 12:04:08'),
(135, 13, 'Enregistrement du mot clé: Portant rectificatif/  Mot clé correspondant à l''archive: Decret n93-414/PRES/MFPL portant rectificatif à l''article Ier du decret 93-374/PRES/MFPL du 25/11/1993 ', '2019-10-02 12:04:08'),
(136, 13, 'Creation archive :Decret n93-414/PRES/MFPL portant rectificatif à l''article Ier du decret 93-374/PRES/MFPL du 25/11/19931', '2019-10-02 12:04:08'),
(137, 1, 'Connexion au systeme', '2019-10-02 12:05:37'),
(138, 13, 'Upload du document numérique: Decret 930-409-pres-tphu.pdf/  Type: application/pdf/ Taille: 361607/  Document correspondant à l''archive: Decret n930-409/PRES/TPHU portant nomination d''un secrétaire général ', '2019-10-02 12:08:23'),
(139, 13, 'Enregistrement du mot clé: Decret n 930-409/  Mot clé correspondant à l''archive: Decret n930-409/PRES/TPHU portant nomination d''un secrétaire général ', '2019-10-02 12:08:23'),
(140, 13, 'Enregistrement du mot clé: Portant nomination d''un secrétaire/  Mot clé correspondant à l''archive: Decret n930-409/PRES/TPHU portant nomination d''un secrétaire général ', '2019-10-02 12:08:23'),
(141, 13, 'Creation archive :Decret n930-409/PRES/TPHU portant nomination d''un secrétaire général1', '2019-10-02 12:08:23'),
(142, 15, 'Upload du document numérique: Circulaire n-93-101-PF-DELGI-DEI-EL.pdf/  Type: application/pdf/ Taille: 57408/  Document correspondant à l''archive: Circulaire N°93-101/PF/DELGI/DEI/EL Précision/ programme de formation secrétaire de direction -DAAF et DEP des départements ministériels et institutions  ', '2019-10-02 12:09:37'),
(143, 15, 'Enregistrement du mot clé: Circulaire N° 93- 101-/PF/DELGI/DEI/EL/  Mot clé correspondant à l''archive: Circulaire N°93-101/PF/DELGI/DEI/EL Précision/ programme de formation secrétaire de direction -DAAF et DEP des départements ministériels et institutions  ', '2019-10-02 12:09:37'),
(144, 15, 'Creation archive :Circulaire N°93-101/PF/DELGI/DEI/EL Précision/ programme de formation secrétaire de direction -DAAF et DEP des départements ministériels et institutions 1', '2019-10-02 12:09:37'),
(145, 1, 'Connexion au systeme', '2019-10-02 12:10:42'),
(146, 15, 'Upload du document numérique: Lettre circulaire n93-00043-MESSRS-SG-DOB-SIOP.pdf/  Type: application/pdf/ Taille: 538960/  Document correspondant à l''archive: N°93-00043/MESSRS/SG/DOB/SIOP Exploitation de l''aide financière ', '2019-10-02 12:13:13'),
(147, 15, 'Creation archive :N°93-00043/MESSRS/SG/DOB/SIOP Exploitation de l''aide financière1', '2019-10-02 12:13:13'),
(148, 13, 'Upload du document numérique: Decret n93-408-pres-mfpl.pdf/  Type: application/pdf/ Taille: 304619/  Document correspondant à l''archive: Decret n 93-408/PRES/MFPL portant nomination d''un membre du conseil d''administration de la SONAR ', '2019-10-02 12:14:03'),
(149, 13, 'Enregistrement du mot clé: Decret n 93-408/  Mot clé correspondant à l''archive: Decret n 93-408/PRES/MFPL portant nomination d''un membre du conseil d''administration de la SONAR ', '2019-10-02 12:14:03'),
(150, 13, 'Enregistrement du mot clé: Portant nomination d''un membre du conseil d''administration de la SONAR/  Mot clé correspondant à l''archive: Decret n 93-408/PRES/MFPL portant nomination d''un membre du conseil d''administration de la SONAR ', '2019-10-02 12:14:03'),
(151, 13, 'Creation archive :Decret n 93-408/PRES/MFPL portant nomination d''un membre du conseil d''administration de la SONAR1', '2019-10-02 12:14:03'),
(152, 13, 'Upload du document numérique: Decret n93-407-pres-mfpl.pdf/  Type: application/pdf/ Taille: 253478/  Document correspondant à l''archive: Decret n93-407/PRES/MFPL portant nomination d''un secrétaire exécutif du programme d''ajustement structurel ', '2019-10-02 12:17:22'),
(153, 13, 'Enregistrement du mot clé: Decret n 93-407/  Mot clé correspondant à l''archive: Decret n93-407/PRES/MFPL portant nomination d''un secrétaire exécutif du programme d''ajustement structurel ', '2019-10-02 12:17:22'),
(154, 13, 'Enregistrement du mot clé: Programme d''ajustement structurel/  Mot clé correspondant à l''archive: Decret n93-407/PRES/MFPL portant nomination d''un secrétaire exécutif du programme d''ajustement structurel ', '2019-10-02 12:17:22'),
(155, 13, 'Creation archive :Decret n93-407/PRES/MFPL portant nomination d''un secrétaire exécutif du programme d''ajustement structurel1', '2019-10-02 12:17:22'),
(156, 12, 'Upload du document numérique: RAPPORT N94-002-ADP-COMFEP.pdf/  Type: application/pdf/ Taille: 248980/  Document correspondant à l''archive: Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso ', '2019-10-02 12:19:23'),
(157, 12, 'Enregistrement du mot clé: Rapport presenté au nom de la Comfep par le député Bertin Ouiya,rapporteur général/  Mot clé correspondant à l''archive: Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso ', '2019-10-02 12:19:23'),
(158, 12, 'Enregistrement du mot clé: Rapport n°94-002-ADP-COMFEP du 14janvier 1994/  Mot clé correspondant à l''archive: Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso ', '2019-10-02 12:19:23'),
(159, 12, 'Creation archive :Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso1', '2019-10-02 12:19:23'),
(160, 15, 'Upload du document numérique: Circulaire n-93-008-MFPMA-SG-DGMA-DGPP.pdf/  Type: application/pdf/ Taille: 359512/  Document correspondant à l''archive: Circulaire N°93/008/MFPMA/SG/DGMA/DGPP répertoire des diplômés ', '2019-10-02 12:19:45'),
(161, 15, 'Enregistrement du mot clé: Circulaire N°93-008/MFPMA/SG/DGMA/DGPP/  Mot clé correspondant à l''archive: Circulaire N°93/008/MFPMA/SG/DGMA/DGPP répertoire des diplômés ', '2019-10-02 12:19:45'),
(162, 15, 'Creation archive :Circulaire N°93/008/MFPMA/SG/DGMA/DGPP répertoire des diplômés1', '2019-10-02 12:19:45'),
(163, 13, 'Upload du document numérique: Decret n93-406-pres-mfpl.pdf/  Type: application/pdf/ Taille: 205306/  Document correspondant à l''archive: Decret n93-406/PRES/MFPL portant nomination de directeurs centraux ', '2019-10-02 12:20:36'),
(164, 13, 'Enregistrement du mot clé: Decret n 93-406/  Mot clé correspondant à l''archive: Decret n93-406/PRES/MFPL portant nomination de directeurs centraux ', '2019-10-02 12:20:36'),
(165, 13, 'Enregistrement du mot clé: Portant nomination de directeurs centraux/  Mot clé correspondant à l''archive: Decret n93-406/PRES/MFPL portant nomination de directeurs centraux ', '2019-10-02 12:20:36'),
(166, 13, 'Creation archive :Decret n93-406/PRES/MFPL portant nomination de directeurs centraux1', '2019-10-02 12:20:36'),
(167, 15, 'Enregistrement du mot clé: Circulaire N° 00946/MESSRS/  Mot clé correspondant à l''archive: Circulaire N°00946/MESSRS enquête en vue de la constitution d''un fichier informatique  ', '2019-10-02 12:23:11'),
(168, 15, 'Creation archive :Circulaire N°00946/MESSRS enquête en vue de la constitution d''un fichier informatique 1', '2019-10-02 12:23:11'),
(169, 12, 'Connexion au systeme', '2019-10-02 12:24:23'),
(170, 13, 'Upload du document numérique: Decret n93-405-pres-mfpl.pdf/  Type: application/pdf/ Taille: 231762/  Document correspondant à l''archive: Decret n93-405/PRES/MFPL portant nomination de directeurs régionaux des impots ', '2019-10-02 12:24:26'),
(171, 13, 'Enregistrement du mot clé: Decret n 93-405/  Mot clé correspondant à l''archive: Decret n93-405/PRES/MFPL portant nomination de directeurs régionaux des impots ', '2019-10-02 12:24:26'),
(172, 13, 'Enregistrement du mot clé: Portant nomination de directeurs régionaux des impots/  Mot clé correspondant à l''archive: Decret n93-405/PRES/MFPL portant nomination de directeurs régionaux des impots ', '2019-10-02 12:24:26'),
(173, 13, 'Creation archive :Decret n93-405/PRES/MFPL portant nomination de directeurs régionaux des impots1', '2019-10-02 12:24:26'),
(174, 12, 'Suppression Documentnumeriquesid:10', '2019-10-02 12:25:30'),
(175, 15, 'Upload du document numérique: Circulaire n-93-006-MFPMA-CAB.pdf/  Type: application/pdf/ Taille: 1303069/  Document correspondant à l''archive: Circulaire N°93-006/MFPMA/CAB - mise en place des organes consultatifs de la fonction publique  ', '2019-10-02 12:27:22'),
(176, 15, 'Enregistrement du mot clé: Circulaire N°93-006/MFPMA/CAB/  Mot clé correspondant à l''archive: Circulaire N°93-006/MFPMA/CAB - mise en place des organes consultatifs de la fonction publique  ', '2019-10-02 12:27:22'),
(177, 15, 'Creation archive :Circulaire N°93-006/MFPMA/CAB - mise en place des organes consultatifs de la fonction publique 1', '2019-10-02 12:27:23'),
(178, 13, 'Upload du document numérique: Decret n93-404-pres-micm.pdf/  Type: application/pdf/ Taille: 421052/  Document correspondant à l''archive: Decret n93-404/PRES/MICM portant nomination d''un administrateur provisoire de la société de commercialisation Faso Yaar ', '2019-10-02 12:29:30'),
(179, 13, 'Enregistrement du mot clé: Decret n 93-404/  Mot clé correspondant à l''archive: Decret n93-404/PRES/MICM portant nomination d''un administrateur provisoire de la société de commercialisation Faso Yaar ', '2019-10-02 12:29:30'),
(180, 13, 'Enregistrement du mot clé: Portant nomination d''un administrateur provisoire /  Mot clé correspondant à l''archive: Decret n93-404/PRES/MICM portant nomination d''un administrateur provisoire de la société de commercialisation Faso Yaar ', '2019-10-02 12:29:30'),
(181, 13, 'Creation archive :Decret n93-404/PRES/MICM portant nomination d''un administrateur provisoire de la société de commercialisation Faso Yaar1', '2019-10-02 12:29:30'),
(182, 12, 'Connexion au systeme', '2019-10-02 12:32:00'),
(183, 15, 'Upload du document numérique: Lettre circulaire n-93-372-MAT-SG-DAAF.pdf/  Type: application/pdf/ Taille: 240558/  Document correspondant à l''archive: N°93-372/MAT/SG/DAAF - Information sur les modalités d'' utilisation de autobus du MAT ', '2019-10-02 12:32:20'),
(184, 15, 'Enregistrement du mot clé: Circulaire N°93-372/MAT/SG/DAAF/  Mot clé correspondant à l''archive: N°93-372/MAT/SG/DAAF - Information sur les modalités d'' utilisation de autobus du MAT ', '2019-10-02 12:32:20'),
(185, 15, 'Creation archive :N°93-372/MAT/SG/DAAF - Information sur les modalités d'' utilisation de autobus du MAT1', '2019-10-02 12:32:20'),
(186, 1, 'Connexion au systeme', '2019-10-02 12:33:11'),
(187, 13, 'Upload du document numérique: Decret n°93-402-pres-micm.pdf/  Type: application/pdf/ Taille: 783115/  Document correspondant à l''archive: Decret n93-402/PRES/MICM portant attribution des administrateurs provisoire des sociétés a capitaux publics ', '2019-10-02 12:34:45'),
(188, 13, 'Enregistrement du mot clé: Decret n 93-402/  Mot clé correspondant à l''archive: Decret n93-402/PRES/MICM portant attribution des administrateurs provisoire des sociétés a capitaux publics ', '2019-10-02 12:34:45'),
(189, 13, 'Enregistrement du mot clé: Portant nomination des administrateurs provisoires /  Mot clé correspondant à l''archive: Decret n93-402/PRES/MICM portant attribution des administrateurs provisoire des sociétés a capitaux publics ', '2019-10-02 12:34:45'),
(190, 13, 'Creation archive :Decret n93-402/PRES/MICM portant attribution des administrateurs provisoire des sociétés a capitaux publics1', '2019-10-02 12:34:45'),
(191, 1, 'Connexion au systeme', '2019-10-02 12:37:13'),
(192, 15, 'Upload du document numérique: Circulaire n-93-007-MFPMA-SG.pdf/  Type: application/pdf/ Taille: 303093/  Document correspondant à l''archive: Circulaire n°93-007/MFPMA/SG Mise en place des CTP et des conseils de discipline ', '2019-10-02 12:37:35'),
(193, 15, 'Enregistrement du mot clé: Circulaire n°93-007/MFPMA/SG/  Mot clé correspondant à l''archive: Circulaire n°93-007/MFPMA/SG Mise en place des CTP et des conseils de discipline ', '2019-10-02 12:37:35'),
(194, 15, 'Creation archive :Circulaire n°93-007/MFPMA/SG Mise en place des CTP et des conseils de discipline1', '2019-10-02 12:37:35'),
(195, 13, 'Upload du document numérique: Decret n39-403-pres-micm.pdf/  Type: application/pdf/ Taille: 421821/  Document correspondant à l''archive: Decret n93-403/PRES/MICM portant nomination d''un administrateur provisoire de la caisse de stabilisation des prix des produits agricoles ', '2019-10-02 12:39:59'),
(196, 13, 'Enregistrement du mot clé: Decret n 93-403/  Mot clé correspondant à l''archive: Decret n93-403/PRES/MICM portant nomination d''un administrateur provisoire de la caisse de stabilisation des prix des produits agricoles ', '2019-10-02 12:39:59'),
(197, 13, 'Enregistrement du mot clé: Portant nomination d''un administrateur provisoire /  Mot clé correspondant à l''archive: Decret n93-403/PRES/MICM portant nomination d''un administrateur provisoire de la caisse de stabilisation des prix des produits agricoles ', '2019-10-02 12:39:59'),
(198, 13, 'Creation archive :Decret n93-403/PRES/MICM portant nomination d''un administrateur provisoire de la caisse de stabilisation des prix des produits agricoles1', '2019-10-02 12:39:59'),
(199, 15, 'Upload du document numérique: Lettre circulaire n-93-002-MFMA-ENAM.pdf/  Type: application/pdf/ Taille: 303942/  Document correspondant à l''archive: Circulaire n°93-002/FPMA/ENAM - Thème d''études relatifs aux travaux de recherche ', '2019-10-02 12:41:59'),
(200, 15, 'Enregistrement du mot clé: Circulaire n°93-002/FPMA/ENAM/  Mot clé correspondant à l''archive: Circulaire n°93-002/FPMA/ENAM - Thème d''études relatifs aux travaux de recherche ', '2019-10-02 12:41:59'),
(201, 15, 'Creation archive :Circulaire n°93-002/FPMA/ENAM - Thème d''études relatifs aux travaux de recherche1', '2019-10-02 12:41:59'),
(202, 15, 'Upload du document numérique: Circulaire-n-93-024-FPMA-CAB.pdf/  Type: application/pdf/ Taille: 458404/  Document correspondant à l''archive: Circulaire n°93-024/FPMA/CAB - circulaire sur la question des statuts particuliers ', '2019-10-02 12:45:42'),
(203, 15, 'Enregistrement du mot clé: Circulaire n°93-024/FPMA/CAB/  Mot clé correspondant à l''archive: Circulaire n°93-024/FPMA/CAB - circulaire sur la question des statuts particuliers ', '2019-10-02 12:45:42'),
(204, 15, 'Creation archive :Circulaire n°93-024/FPMA/CAB - circulaire sur la question des statuts particuliers1', '2019-10-02 12:45:42'),
(205, 13, 'Upload du document numérique: Decret n°93-401-pres-pm-mebam.pdf/  Type: application/pdf/ Taille: 821191/  Document correspondant à l''archive: Decret n93-401/PRES/PM/MEBAM portant reorganisation du ministère de l''enseignement de bas et de l''alphabetisation de masse ', '2019-10-02 12:45:52'),
(206, 13, 'Enregistrement du mot clé: Decret n 93-401/  Mot clé correspondant à l''archive: Decret n93-401/PRES/PM/MEBAM portant reorganisation du ministère de l''enseignement de bas et de l''alphabetisation de masse ', '2019-10-02 12:45:52'),
(207, 13, 'Enregistrement du mot clé: portant reorganisation du ministère de l''enseignement/  Mot clé correspondant à l''archive: Decret n93-401/PRES/PM/MEBAM portant reorganisation du ministère de l''enseignement de bas et de l''alphabetisation de masse ', '2019-10-02 12:45:52'),
(208, 13, 'Creation archive :Decret n93-401/PRES/PM/MEBAM portant reorganisation du ministère de l''enseignement de bas et de l''alphabetisation de masse1', '2019-10-02 12:45:52'),
(209, 15, 'Upload du document numérique: Circualire-n-93-001-FPMA-CAB.pdf/  Type: application/pdf/ Taille: 589428/  Document correspondant à l''archive: Circulaire n°93-001/ FPMA/CAB - rédaction et examen des statuts particuliers des cadres de fonctionnaires ', '2019-10-02 12:49:07'),
(210, 15, 'Enregistrement du mot clé: Circulaire n°93-001/FPMA/CAB/  Mot clé correspondant à l''archive: Circulaire n°93-001/ FPMA/CAB - rédaction et examen des statuts particuliers des cadres de fonctionnaires ', '2019-10-02 12:49:07'),
(211, 15, 'Creation archive :Circulaire n°93-001/ FPMA/CAB - rédaction et examen des statuts particuliers des cadres de fonctionnaires1', '2019-10-02 12:49:07'),
(212, 13, 'Upload du document numérique: Decret n°93-400-pres-mfpma-mfpl.pdf/  Type: application/pdf/ Taille: 1364115/  Document correspondant à l''archive: Decret n93-400/PRES/PM/MFPMA/MFPL portant statut particulier des personnels du cadre de l''administration des douanes  ', '2019-10-02 12:50:31'),
(213, 13, 'Enregistrement du mot clé: Decret n 93-400/  Mot clé correspondant à l''archive: Decret n93-400/PRES/PM/MFPMA/MFPL portant statut particulier des personnels du cadre de l''administration des douanes  ', '2019-10-02 12:50:31'),
(214, 13, 'Enregistrement du mot clé: Statut particulier des douanes/  Mot clé correspondant à l''archive: Decret n93-400/PRES/PM/MFPMA/MFPL portant statut particulier des personnels du cadre de l''administration des douanes  ', '2019-10-02 12:50:31'),
(215, 13, 'Creation archive :Decret n93-400/PRES/PM/MFPMA/MFPL portant statut particulier des personnels du cadre de l''administration des douanes 1', '2019-10-02 12:50:31'),
(216, 13, 'Upload du document numérique: Decret n°93-399-pres-pm.pdf/  Type: application/pdf/ Taille: 372006/  Document correspondant à l''archive: Decret n93-399/PRES/PM portant nomination d''un secrétaire permanent de la commission nationale de la decentralisation ', '2019-10-02 12:54:02'),
(217, 13, 'Enregistrement du mot clé: Decret n 93-399/  Mot clé correspondant à l''archive: Decret n93-399/PRES/PM portant nomination d''un secrétaire permanent de la commission nationale de la decentralisation ', '2019-10-02 12:54:02'),
(218, 13, 'Enregistrement du mot clé: Portant nomination d''un secrétaire permanent/  Mot clé correspondant à l''archive: Decret n93-399/PRES/PM portant nomination d''un secrétaire permanent de la commission nationale de la decentralisation ', '2019-10-02 12:54:02'),
(219, 13, 'Creation archive :Decret n93-399/PRES/PM portant nomination d''un secrétaire permanent de la commission nationale de la decentralisation1', '2019-10-02 12:54:02'),
(220, 15, 'Upload du document numérique: Circulaire-n-95-025-MEFP-SG-DGB-DM.pdf/  Type: application/pdf/ Taille: 659344/  Document correspondant à l''archive: Circulaire n°95-025/MEFP/SG/DGB/DM - Besoins en fournitures de bureau et en produits d''entretien et de nettoyage de l''année 1996 ', '2019-10-02 12:54:10'),
(221, 15, 'Enregistrement du mot clé: Circulaire n°95-025/MEFP/SG/DGB/DM/  Mot clé correspondant à l''archive: Circulaire n°95-025/MEFP/SG/DGB/DM - Besoins en fournitures de bureau et en produits d''entretien et de nettoyage de l''année 1996 ', '2019-10-02 12:54:10'),
(222, 15, 'Creation archive :Circulaire n°95-025/MEFP/SG/DGB/DM - Besoins en fournitures de bureau et en produits d''entretien et de nettoyage de l''année 19961', '2019-10-02 12:54:10'),
(223, 13, 'Upload du document numérique: Decret n°93-398-pres.pdf/  Type: application/pdf/ Taille: 222244/  Document correspondant à l''archive: Decret n93-398/PRES instituant deuil national ', '2019-10-02 12:57:08'),
(224, 13, 'Enregistrement du mot clé: Decret n 93-398/  Mot clé correspondant à l''archive: Decret n93-398/PRES instituant deuil national ', '2019-10-02 12:57:08'),
(225, 13, 'Enregistrement du mot clé: Deuil national/  Mot clé correspondant à l''archive: Decret n93-398/PRES instituant deuil national ', '2019-10-02 12:57:08'),
(226, 13, 'Creation archive :Decret n93-398/PRES instituant deuil national1', '2019-10-02 12:57:08'),
(227, 15, 'Upload du document numérique: Circulaire-n-95-012-MESSRS-SG-DOB-SIOP.pdf/  Type: application/pdf/ Taille: 519538/  Document correspondant à l''archive: Circulaire n°95-012/MESSRS/SG/DOB/SIOP ', '2019-10-02 12:57:53'),
(228, 15, 'Enregistrement du mot clé: Circulaire n°95-012/MESSRS/SG/DOB/SIOP/  Mot clé correspondant à l''archive: Circulaire n°95-012/MESSRS/SG/DOB/SIOP ', '2019-10-02 12:57:53'),
(229, 15, 'Creation archive :Circulaire n°95-012/MESSRS/SG/DOB/SIOP1', '2019-10-02 12:57:53'),
(230, 1, 'Connexion au systeme', '2019-10-02 12:59:05'),
(231, 1, 'Connexion au systeme', '2019-10-02 12:59:57'),
(232, 13, 'Upload du document numérique: Decret n°93-397-pres-micm-mfp.pdf/  Type: application/pdf/ Taille: 224004/  Document correspondant à l''archive: Decret n93-397/PRES/MICM/MFP portant transfert de propriété d''action de l''etat et de ses demembrements a mr Dianguinaba barro ', '2019-10-02 13:01:07'),
(233, 13, 'Enregistrement du mot clé: Decret n 93-397/  Mot clé correspondant à l''archive: Decret n93-397/PRES/MICM/MFP portant transfert de propriété d''action de l''etat et de ses demembrements a mr Dianguinaba barro ', '2019-10-02 13:01:07'),
(234, 13, 'Enregistrement du mot clé: Propriété d''action/  Mot clé correspondant à l''archive: Decret n93-397/PRES/MICM/MFP portant transfert de propriété d''action de l''etat et de ses demembrements a mr Dianguinaba barro ', '2019-10-02 13:01:07'),
(235, 13, 'Creation archive :Decret n93-397/PRES/MICM/MFP portant transfert de propriété d''action de l''etat et de ses demembrements a mr Dianguinaba barro1', '2019-10-02 13:01:08'),
(236, 10, 'Connexion au systeme', '2019-10-02 13:03:47'),
(237, 10, 'Upload du document numérique: Circulaire-n-079-MFPMA-SG.pdf/  Type: application/pdf/ Taille: 222131/  Document correspondant à l''archive: Circulaire n°079/MFPMA/SG - Rencontre d''information sur le recensement des agents de l''Etat ', '2019-10-02 13:10:06'),
(238, 10, 'Enregistrement du mot clé: Circulaire n°079/MFPMA/SG/  Mot clé correspondant à l''archive: Circulaire n°079/MFPMA/SG - Rencontre d''information sur le recensement des agents de l''Etat ', '2019-10-02 13:10:06'),
(239, 10, 'Creation archive :Circulaire n°079/MFPMA/SG - Rencontre d''information sur le recensement des agents de l''Etat1', '2019-10-02 13:10:06'),
(240, 13, 'Upload du document numérique: Decret n 93-396-pres-micm.pdf/  Type: application/pdf/ Taille: 578800/  Document correspondant à l''archive: Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte. ', '2019-10-02 13:11:42'),
(241, 13, 'Enregistrement du mot clé: Decret n 93-396/  Mot clé correspondant à l''archive: Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte. ', '2019-10-02 13:11:42'),
(242, 13, 'Enregistrement du mot clé: societé d''economie mixte/  Mot clé correspondant à l''archive: Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte. ', '2019-10-02 13:11:42'),
(243, 13, 'Enregistrement du mot clé: conseil annuel des administrateurs/  Mot clé correspondant à l''archive: Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte. ', '2019-10-02 13:11:42'),
(244, 13, 'Creation archive :Decret n°93-396 PRES/MICM portant création d''un conseil annuel des adminitrateurs representant l''etat dans les societés d''economie mixte.1', '2019-10-02 13:11:42'),
(245, 10, 'Upload du document numérique: Circulaire n-94-001.pdf/  Type: application/pdf/ Taille: 210989/  Document correspondant à l''archive: Circulaire n°94-001 prise en charge des indemnités de sessions ', '2019-10-02 13:14:04'),
(246, 10, 'Enregistrement du mot clé: Circulaire n°94- 001/  Mot clé correspondant à l''archive: Circulaire n°94-001 prise en charge des indemnités de sessions ', '2019-10-02 13:14:04'),
(247, 10, 'Creation archive :Circulaire n°94-001 prise en charge des indemnités de sessions1', '2019-10-02 13:14:04'),
(248, 13, 'Upload du document numérique: Décret n93-395-pres-micm.pdf/  Type: application/pdf/ Taille: 186652/  Document correspondant à l''archive: Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b)  ', '2019-10-02 13:18:28'),
(249, 13, 'Enregistrement du mot clé: Decret 93-395/  Mot clé correspondant à l''archive: Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b)  ', '2019-10-02 13:18:28'),
(250, 13, 'Enregistrement du mot clé: Dissolution de la societé de gestion des marchés/  Mot clé correspondant à l''archive: Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b)  ', '2019-10-02 13:18:28'),
(251, 13, 'Enregistrement du mot clé: sogema-b/  Mot clé correspondant à l''archive: Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b)  ', '2019-10-02 13:18:28'),
(252, 13, 'Creation archive :Decret n°93-395 /PRES/MICM portant dissolution de la societé des gestion des marchés du burkina(sogema-b) 1', '2019-10-02 13:18:29'),
(253, 10, 'Upload du document numérique: Circulaire n-94-0001-FPMA-DGMA.pdf/  Type: application/pdf/ Taille: 533952/  Document correspondant à l''archive: Circulaire n°940001 FPMA/DGMA Participation des directeurs généraux à un séminaire en top Management ', '2019-10-02 13:19:45'),
(254, 10, 'Enregistrement du mot clé: Circulaire n°940001FPMA/DGMA/  Mot clé correspondant à l''archive: Circulaire n°940001 FPMA/DGMA Participation des directeurs généraux à un séminaire en top Management ', '2019-10-02 13:19:45'),
(255, 10, 'Creation archive :Circulaire n°940001 FPMA/DGMA Participation des directeurs généraux à un séminaire en top Management1', '2019-10-02 13:19:45'),
(256, 10, 'Upload du document numérique: Circulaire n-94-006-.pdf/  Type: application/pdf/ Taille: 179896/  Document correspondant à l''archive: Circulaire n°94-006 Invitation à participer à un séminaire de formation ', '2019-10-02 13:24:38'),
(257, 10, 'Enregistrement du mot clé: Circulaire n° 94-006/  Mot clé correspondant à l''archive: Circulaire n°94-006 Invitation à participer à un séminaire de formation ', '2019-10-02 13:24:38'),
(258, 10, 'Creation archive :Circulaire n°94-006 Invitation à participer à un séminaire de formation1', '2019-10-02 13:24:38'),
(259, 25, 'Connexion au systeme', '2019-10-02 13:30:59'),
(260, 1, 'Connexion au systeme', '2019-10-02 13:30:59'),
(261, 1, 'Connexion au systeme', '2019-10-02 13:31:05'),
(262, 10, 'Upload du document numérique: Circulaire-n-94-296-MFPMA-CAB.pdf/  Type: application/pdf/ Taille: 384760/  Document correspondant à l''archive: Circulaire n°94-296/MFPMA/CAB - Invitation à participer au séminaire de formation sur le Management Efficient ', '2019-10-02 13:31:33'),
(263, 10, 'Enregistrement du mot clé: Circulaire n°94-296/MFPMA/CAB/  Mot clé correspondant à l''archive: Circulaire n°94-296/MFPMA/CAB - Invitation à participer au séminaire de formation sur le Management Efficient ', '2019-10-02 13:31:33'),
(264, 10, 'Creation archive :Circulaire n°94-296/MFPMA/CAB - Invitation à participer au séminaire de formation sur le Management Efficient1', '2019-10-02 13:31:33'),
(265, 25, 'Connexion au systeme', '2019-10-02 13:31:36'),
(266, 1, 'Connexion au systeme', '2019-10-02 13:31:39'),
(267, 13, 'Upload du document numérique: Decret n93-394-pres-micm.pdf/  Type: application/pdf/ Taille: 289947/  Document correspondant à l''archive: Décret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant. ', '2019-10-02 13:32:25'),
(268, 13, 'Enregistrement du mot clé: Decret 93-393/  Mot clé correspondant à l''archive: Décret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant. ', '2019-10-02 13:32:25'),
(269, 13, 'Enregistrement du mot clé: Modification des articles 4 et 5/  Mot clé correspondant à l''archive: Décret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant. ', '2019-10-02 13:32:25'),
(270, 13, 'Enregistrement du mot clé: Décret n 81-0432/PRES/CMRPN/MCDIM du 12 septembre 1981/  Mot clé correspondant à l''archive: Décret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant. ', '2019-10-02 13:32:25'),
(271, 13, 'Creation archive :Décret n93-394/PRES/MICM portant modification des articles 4 et 5 du décret n0432/PRES/CMRPN/MCDIM du 12 septembre 1981 portant modalités d''application de l''Ordonnance n81/0026/PRES/CMRPN du 26 aout 1981 relative à la règlementation de la profession de commerçant.1', '2019-10-02 13:32:25'),
(272, 13, 'Upload du document numérique: Decret n93-392.pdf/  Type: application/pdf/ Taille: 271501/  Document correspondant à l''archive: Décret n 93-392/PRES/TRANS portant nomination d''un conseiller technique ', '2019-10-02 13:37:07'),
(273, 13, 'Enregistrement du mot clé: Décret n93-392/  Mot clé correspondant à l''archive: Décret n 93-392/PRES/TRANS portant nomination d''un conseiller technique ', '2019-10-02 13:37:07'),
(274, 13, 'Enregistrement du mot clé: nomination d''un conseiller technique/  Mot clé correspondant à l''archive: Décret n 93-392/PRES/TRANS portant nomination d''un conseiller technique ', '2019-10-02 13:37:08'),
(275, 13, 'Creation archive :Décret n 93-392/PRES/TRANS portant nomination d''un conseiller technique1', '2019-10-02 13:37:08'),
(276, 1, 'Connexion au systeme', '2019-10-02 13:40:04'),
(277, 1, 'Consultation des archives suivants: circulaire N° 93-091 ID: 3', '2019-10-02 13:43:49'),
(278, 1, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Circulaire/ Adresse:  ', '2019-10-02 13:45:14'),
(279, 1, 'Connexion au systeme', '2019-10-02 14:01:22'),
(280, 16, 'Connexion au systeme', '2019-10-02 14:02:01'),
(281, 16, 'Consultation des archives suivants: Decret n93-413 ID: 1', '2019-10-02 14:02:35'),
(282, 9, 'Connexion au systeme', '2019-10-02 14:02:37'),
(283, 6, 'Connexion au systeme', '2019-10-02 14:02:46'),
(284, 10, 'Connexion au systeme', '2019-10-02 14:02:49'),
(285, 12, 'Connexion au systeme', '2019-10-02 14:02:51'),
(286, 10, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: 7/ Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:03:56'),
(287, 12, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decrets/ Adresse:  ', '2019-10-02 14:04:03'),
(288, 10, 'Reinitialisation des filtres', '2019-10-02 14:04:24'),
(289, 16, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: 16/ Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:04:27'),
(290, 10, 'Reinitialisation des filtres', '2019-10-02 14:04:30'),
(291, 10, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 7/ Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:04:44'),
(292, 16, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: 17/ Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:04:46'),
(293, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:05:02'),
(294, 12, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:05:09'),
(295, 10, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: 7/ Service: /  Serie: / Sous serie: /  Type doc: 7/ Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:05:10'),
(296, 10, 'Reinitialisation des filtres', '2019-10-02 14:05:18'),
(297, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:decret/ Adresse:  ', '2019-10-02 14:05:21'),
(298, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:décret/ Adresse:  ', '2019-10-02 14:05:42'),
(299, 9, 'Reinitialisation des filtres', '2019-10-02 14:06:26'),
(300, 12, 'Reinitialisation des filtres', '2019-10-02 14:06:30'),
(301, 25, 'Connexion au systeme', '2019-10-02 14:07:06'),
(302, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 33/ Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:07:14'),
(303, 25, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 33/ Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:08:11'),
(304, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:08:18'),
(305, 25, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: 4/  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 33/ Année début: / Analyse:/ Adresse:  ', '2019-10-02 14:08:42'),
(306, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Circulaire/ Adresse:  ', '2019-10-02 14:08:48'),
(307, 25, 'Reinitialisation des filtres', '2019-10-02 14:08:50'),
(308, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:09:39'),
(309, 25, 'Connexion au systeme', '2019-10-02 14:10:30'),
(310, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:11:10'),
(311, 16, 'Consultation des archives suivants: Session extraordinaire de janvier1994 dossier n°001 relatif au projet de loi portant code de l''environnement au Burkina Faso ID: 10', '2019-10-02 14:11:54'),
(312, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Décret/ Adresse:  ', '2019-10-02 14:13:19'),
(313, 9, 'Modification archive id: 1', '2019-10-02 14:14:05'),
(314, 9, 'Modification archive id: 1', '2019-10-02 14:14:22'),
(315, 9, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:14:57'),
(316, 12, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Circulaire/ Adresse:  ', '2019-10-02 14:15:09'),
(317, 12, 'Reinitialisation des filtres', '2019-10-02 14:15:41'),
(318, 10, 'Modification archive id: 1', '2019-10-02 14:16:35'),
(319, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-02 14:18:04'),
(320, 12, 'Reinitialisation des filtres', '2019-10-02 14:18:26'),
(321, 10, 'Modification archive id: 1', '2019-10-02 14:19:21'),
(322, 10, 'Modification archive id: 1', '2019-10-02 14:21:15'),
(323, 10, 'Modification archive id: 1', '2019-10-02 14:22:45'),
(324, 10, 'Modification archive id: 1', '2019-10-02 14:23:45'),
(325, 10, 'Modification archive id: 1', '2019-10-02 14:24:45'),
(326, 10, 'Modification archive id: 1', '2019-10-02 14:34:08'),
(327, 10, 'Modification archive id: 1', '2019-10-02 14:42:44'),
(328, 10, 'Connexion au systeme', '2019-10-02 15:30:39'),
(329, 10, 'Modification archive id: 1', '2019-10-02 15:33:19'),
(330, 10, 'Modification archive id: 1', '2019-10-02 15:34:45'),
(331, 10, 'Modification archive id: 1', '2019-10-02 15:36:00'),
(332, 10, 'Modification archive id: 1', '2019-10-02 15:38:18'),
(333, 10, 'Modification archive id: 1', '2019-10-02 15:39:54'),
(334, 10, 'Modification archive id: 1', '2019-10-02 15:40:43'),
(335, 10, 'Modification archive id: 1', '2019-10-02 15:42:02'),
(336, 10, 'Modification archive id: 1', '2019-10-02 15:43:07'),
(337, 10, 'Modification archive id: 1', '2019-10-02 15:43:57'),
(338, 10, 'Modification archive id: 1', '2019-10-02 15:44:47'),
(339, 10, 'Modification archive id: 1', '2019-10-02 15:45:45'),
(340, 6, 'Connexion au systeme', '2019-10-02 15:50:27'),
(341, 10, 'Connexion au systeme', '2019-10-02 15:50:39'),
(342, 10, 'Modification archive id: 1', '2019-10-02 15:52:12'),
(343, 10, 'Modification archive id: 1', '2019-10-02 15:53:43'),
(344, 10, 'Connexion au systeme', '2019-10-02 16:06:55'),
(345, 10, 'Enregistrement du mot clé: Circulaire n°96-012- PM/CAB à tous Ministères etablissements publics entreprises publiques et sociétés d''Etat projets financés sur fonds publics/  Mot clé correspondant à l''archive: Circulaire n)96-012-PM/CAB Association des représentants des travailleurs aux restructions des entreprises ', '2019-10-02 16:24:59'),
(346, 10, 'Creation archive :Circulaire n)96-012-PM/CAB Association des représentants des travailleurs aux restructions des entreprises1', '2019-10-02 16:24:59'),
(347, 1, 'Connexion au systeme', '2019-10-03 08:51:18'),
(348, 1, 'Connexion au systeme', '2019-10-03 09:02:53'),
(349, 1, 'Connexion au systeme', '2019-10-03 09:04:53'),
(350, 12, 'Connexion au systeme', '2019-10-03 09:08:36'),
(351, 8, 'Connexion au systeme', '2019-10-03 09:18:57'),
(352, 8, 'Connexion au systeme', '2019-10-03 09:19:54'),
(353, 8, 'Connexion au systeme', '2019-10-03 09:20:00'),
(354, 8, 'Connexion au systeme', '2019-10-03 09:27:15'),
(355, 10, 'Connexion au systeme', '2019-10-03 10:12:38'),
(356, 17, 'Connexion au systeme', '2019-10-03 10:24:52'),
(357, 8, 'Connexion au systeme', '2019-10-03 10:26:58'),
(358, 12, 'Connexion au systeme', '2019-10-03 10:27:28'),
(359, 17, 'Connexion au systeme', '2019-10-03 10:29:39'),
(360, 9, 'Connexion au systeme', '2019-10-03 10:30:16'),
(361, 25, 'Connexion au systeme', '2019-10-03 10:30:43'),
(362, 13, 'Connexion au systeme', '2019-10-03 10:31:01'),
(363, 25, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 5/ Année début: / Analyse:/ Adresse:  ', '2019-10-03 10:31:45'),
(364, 9, 'Modification naturedoc id: 1', '2019-10-03 10:33:50'),
(365, 12, 'Connexion au systeme', '2019-10-03 10:35:55'),
(366, 10, 'Connexion au systeme', '2019-10-03 10:40:58'),
(367, 10, 'Upload du document numérique: Circulaire-n-94-172-PRES-SGG-CM___OLD.pdf/  Type: application/pdf/ Taille: 1211386/  Document correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48'),
(368, 10, 'Upload du document numérique: Circulaire-n-94-0001-fpma-dgma.pdf/  Type: application/pdf/ Taille: 812156/  Document correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48'),
(369, 10, 'Upload du document numérique: Circulaire-n-94-00-01.pdf/  Type: application/pdf/ Taille: 142748/  Document correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48'),
(370, 10, 'Enregistrement du mot clé: Circulaire n°94/172/PRES/SGG-CM/  Mot clé correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48');
INSERT INTO `logs` (`id`, `user_id`, `statement`, `created`) VALUES
(371, 10, 'Enregistrement du mot clé: Circulaire n°94-0001/FPMA/DGMA/  Mot clé correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48'),
(372, 10, 'Enregistrement du mot clé: Circulaire n°94-00-01/  Mot clé correspondant à l''archive: Circulaire 94\r\n ', '2019-10-03 10:52:48'),
(373, 10, 'Creation archive :Circulaire 94\r\n1', '2019-10-03 10:52:48'),
(374, 9, 'Connexion au systeme', '2019-10-03 10:54:26'),
(375, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:/ Adresse:  ', '2019-10-03 11:12:10'),
(376, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret n 93-391/ Adresse:  ', '2019-10-03 11:12:40'),
(377, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret n 93-391/ Adresse:  ', '2019-10-03 11:14:16'),
(378, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret n93-391/ Adresse:  ', '2019-10-03 11:14:33'),
(379, 10, 'Upload du document numérique: Circulaire-n-96-007-mfpma-sg-dgfp-drfp.pdf/  Type: application/pdf/ Taille: 210555/  Document correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(380, 10, 'Upload du document numérique: Circulaire-n-96-000083-mef-sg-dgb.pdf/  Type: application/pdf/ Taille: 443466/  Document correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(381, 10, 'Upload du document numérique: Circulaire-n-96-0885-ms-sg-ost.pdf/  Type: application/pdf/ Taille: 384126/  Document correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(382, 10, 'Enregistrement du mot clé: Circulaire n°96-007/MFPMA/SG/DGFP/DRFP/  Mot clé correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(383, 10, 'Enregistrement du mot clé: Circulaire n° 96-000083/MEF/SG/DGB/  Mot clé correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(384, 10, 'Enregistrement du mot clé: Circulaire n°96-885 MS/SG/OST/  Mot clé correspondant à l''archive: Circulaire 96 ', '2019-10-03 11:15:24'),
(385, 10, 'Creation archive :Circulaire 961', '2019-10-03 11:15:24'),
(386, 13, 'Upload du document numérique: Decret n 93-391-press-trans.pdf/  Type: application/pdf/ Taille: 289231/  Document correspondant à l''archive: Decret n 93-391/PRES/TRANS ', '2019-10-03 11:17:22'),
(387, 13, 'Enregistrement du mot clé: Decret n 93-391/PRES/TRANS/  Mot clé correspondant à l''archive: Decret n 93-391/PRES/TRANS ', '2019-10-03 11:17:22'),
(388, 13, 'Enregistrement du mot clé: Nominateur de directeurs centraux/  Mot clé correspondant à l''archive: Decret n 93-391/PRES/TRANS ', '2019-10-03 11:17:22'),
(389, 13, 'Creation archive :Decret n 93-391/PRES/TRANS1', '2019-10-03 11:17:23'),
(390, 9, 'Connexion au systeme', '2019-10-03 11:53:38'),
(391, 13, 'Consultation des archives suivants: Circulaire 94 ID: 41', '2019-10-03 12:10:27'),
(392, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: 5/ Année début: / Analyse:Decrets 1993/ Adresse:  ', '2019-10-03 12:14:25'),
(393, 10, 'Upload du document numérique: Circulaire-n-97-011-mrp-sg-daaf.pdf/  Type: application/pdf/ Taille: 194349/  Document correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(394, 10, 'Upload du document numérique: Circulaire-n-97-024-pm-s-ag-se.pdf/  Type: application/pdf/ Taille: 352556/  Document correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(395, 10, 'Upload du document numérique: Circulaire-n-97-0279-pres-gc.pdf/  Type: application/pdf/ Taille: 437440/  Document correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(396, 10, 'Enregistrement du mot clé: Circulaire N°97-011/MRP/SG/DAAF/  Mot clé correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(397, 10, 'Enregistrement du mot clé: Circulaire n°97-024/PM/S/AG-SE/  Mot clé correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(398, 10, 'Enregistrement du mot clé: Circulaire n°97-0279/PRES/GC/  Mot clé correspondant à l''archive: Circulaire 97 ', '2019-10-03 12:17:27'),
(399, 10, 'Creation archive :Circulaire 971', '2019-10-03 12:17:28'),
(400, 12, 'Connexion au systeme', '2019-10-03 12:21:20'),
(401, 12, 'Connexion au systeme', '2019-10-03 12:25:16'),
(402, 10, 'Connexion au systeme', '2019-10-03 12:30:14'),
(403, 10, 'Connexion au systeme', '2019-10-03 12:30:36'),
(404, 25, 'Connexion au systeme', '2019-10-03 12:30:41'),
(405, 12, 'Connexion au systeme', '2019-10-03 12:31:10'),
(406, 12, 'Connexion au systeme', '2019-10-03 12:32:11'),
(407, 17, 'Connexion au systeme', '2019-10-03 12:32:16'),
(408, 8, 'Connexion au systeme', '2019-10-03 12:34:46'),
(409, 8, 'Connexion au systeme', '2019-10-03 12:35:46'),
(410, 12, 'Connexion au systeme', '2019-10-03 12:51:35'),
(411, 10, 'Connexion au systeme', '2019-10-03 12:52:55'),
(412, 8, 'Connexion au systeme', '2019-10-03 12:54:24'),
(413, 25, 'Upload du document numérique: Decret n93-386-pres-rex.pdf/  Type: application/pdf/ Taille: 257020/  Document correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(414, 25, 'Upload du document numérique: Decret n 93-387-pres.pdf/  Type: application/pdf/ Taille: 516212/  Document correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(415, 25, 'Upload du document numérique: Decret n93-388-pres-met.pdf/  Type: application/pdf/ Taille: 237066/  Document correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(416, 25, 'Enregistrement du mot clé: Decret n 93-386/PRES/REX/  Mot clé correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(417, 25, 'Enregistrement du mot clé: Decret n 93-387/  Mot clé correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(418, 25, 'Enregistrement du mot clé: Decret n 93-388/PRES/MET/  Mot clé correspondant à l''archive: Decret 1993 ', '2019-10-03 12:59:43'),
(419, 25, 'Creation archive :Decret 19931', '2019-10-03 12:59:43'),
(420, 12, 'Connexion au systeme', '2019-10-03 13:00:12'),
(421, 13, 'Connexion au systeme', '2019-10-03 13:00:43'),
(422, 12, 'Connexion au systeme', '2019-10-03 13:01:53'),
(423, 12, 'Connexion au systeme', '2019-10-03 13:02:02'),
(424, 12, 'Connexion au systeme', '2019-10-03 13:02:05'),
(425, 12, 'Connexion au systeme', '2019-10-03 13:02:25'),
(426, 12, 'Connexion au systeme', '2019-10-03 13:02:27'),
(427, 12, 'Connexion au systeme', '2019-10-03 13:02:29'),
(428, 12, 'Connexion au systeme', '2019-10-03 13:02:30'),
(429, 12, 'Connexion au systeme', '2019-10-03 13:02:34'),
(430, 8, 'Connexion au systeme', '2019-10-03 13:12:48'),
(431, 13, 'Connexion au systeme', '2019-10-03 13:14:20'),
(432, 8, 'Upload du document numérique: Deuxieme session extraordinaire de 1994.pdf/  Type: application/pdf/ Taille: 1094196/  Document correspondant à l''archive: Deuxieme session extraordinaire 1994 ', '2019-10-03 13:14:47'),
(433, 8, 'Upload du document numérique: Dossier n003.pdf/  Type: application/pdf/ Taille: 623226/  Document correspondant à l''archive: Deuxieme session extraordinaire 1994 ', '2019-10-03 13:14:47'),
(434, 8, 'Upload du document numérique: Dossier n004.pdf/  Type: application/pdf/ Taille: 975214/  Document correspondant à l''archive: Deuxieme session extraordinaire 1994 ', '2019-10-03 13:14:47'),
(435, 8, 'Enregistrement du mot clé: Correspondance-ordre du jour-calendrier de travail /  Mot clé correspondant à l''archive: Deuxieme session extraordinaire 1994 ', '2019-10-03 13:14:47'),
(436, 8, 'Enregistrement du mot clé: Expose des motifs-projet de loi-rapport/  Mot clé correspondant à l''archive: Deuxieme session extraordinaire 1994 ', '2019-10-03 13:14:47'),
(437, 8, 'Creation archive :Deuxieme session extraordinaire 19941', '2019-10-03 13:14:47'),
(438, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret/ Adresse:  ', '2019-10-03 13:16:07'),
(439, 12, 'Connexion au systeme', '2019-10-03 13:17:08'),
(440, 13, 'Suppression Documentnumeriquesid:59', '2019-10-03 13:18:24'),
(441, 8, 'Connexion au systeme', '2019-10-03 13:21:26'),
(442, 13, 'Connexion au systeme', '2019-10-03 13:21:44'),
(443, 8, 'Connexion au systeme', '2019-10-03 13:22:03'),
(444, 8, 'Connexion au systeme', '2019-10-03 13:25:58'),
(445, 13, 'Connexion au systeme', '2019-10-03 13:34:01'),
(446, 9, 'Connexion au systeme', '2019-10-03 13:34:39'),
(447, 9, 'Connexion au systeme', '2019-10-03 13:36:58'),
(448, 10, 'Upload du document numérique: Circulaire-n-98-025-pm-sg-dapj.pdf/  Type: application/pdf/ Taille: 47081/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(449, 10, 'Upload du document numérique: Circulaire-n-98-0128-pres-gc.pdf/  Type: application/pdf/ Taille: 768592/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(450, 10, 'Upload du document numérique: Circulaire-n-98-0128-pres-gc.pdf/  Type: application/pdf/ Taille: 768592/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(451, 10, 'Enregistrement du mot clé: Circulaire n°98-025/PM/SG/DAPJ/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(452, 10, 'Enregistrement du mot clé: Circulaire n°98-018/PM/SG/DAPJ/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(453, 10, 'Enregistrement du mot clé: Circulaire n°98-0128/PRES/GC/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:38:15'),
(454, 10, 'Creation archive :Circulaire 981', '2019-10-03 13:38:15'),
(455, 13, 'Suppression Documentnumeriquesid:92', '2019-10-03 13:44:43'),
(456, 10, 'Upload du document numérique: Circulaire-n-98-318-mfpdi-sg.pdf/  Type: application/pdf/ Taille: 76433/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(457, 10, 'Upload du document numérique: Circulaire-n-98-311-mfpdi-sg.pdf/  Type: application/pdf/ Taille: 51142/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(458, 10, 'Upload du document numérique: Circulaire-n-98-057-mrp-sg-daaf.pdf/  Type: application/pdf/ Taille: 66169/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(459, 10, 'Enregistrement du mot clé: Circulaire N°98-318/MFPDI/SG/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(460, 10, 'Enregistrement du mot clé: Circulaire n° 98-311/MFPDI/SG/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(461, 10, 'Enregistrement du mot clé: Circulaire n°98-057/MRP/SG/DAAF/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:39'),
(462, 10, 'Creation archive :Circulaire 981', '2019-10-03 13:45:39'),
(463, 10, 'Upload du document numérique: Circulaire-n-98-318-mfpdi-sg.pdf/  Type: application/pdf/ Taille: 76433/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(464, 10, 'Upload du document numérique: Circulaire-n-98-311-mfpdi-sg.pdf/  Type: application/pdf/ Taille: 51142/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(465, 10, 'Upload du document numérique: Circulaire-n-98-057-mrp-sg-daaf.pdf/  Type: application/pdf/ Taille: 66169/  Document correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(466, 10, 'Enregistrement du mot clé: Circulaire N°98-318/MFPDI/SG/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(467, 10, 'Enregistrement du mot clé: Circulaire n° 98-311/MFPDI/SG/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(468, 10, 'Enregistrement du mot clé: Circulaire n°98-057/MRP/SG/DAAF/  Mot clé correspondant à l''archive: Circulaire 98 ', '2019-10-03 13:45:40'),
(469, 10, 'Creation archive :Circulaire 981', '2019-10-03 13:45:40'),
(470, 10, 'Suppression Archivesid:48, id:49', '2019-10-03 13:49:32'),
(471, 13, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-03 13:52:03'),
(472, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret n 93-390/ Adresse:  ', '2019-10-03 13:55:53'),
(473, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret 1993/ Adresse:  ', '2019-10-03 13:56:28'),
(474, 13, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-03 13:56:31'),
(475, 12, 'Connexion au systeme', '2019-10-03 14:17:07'),
(476, 12, 'Connexion au systeme', '2019-10-03 14:18:48'),
(477, 12, 'Connexion au systeme', '2019-10-03 14:44:06'),
(478, 10, 'Upload du document numérique: Circulaire-n-99-161-mfpdi-sg-dgdi-dpp.pdf/  Type: application/pdf/ Taille: 312892/  Document correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(479, 10, 'Upload du document numérique: Circulaire-n-99-146-mfpdi-sg-dgdi.pdf/  Type: application/pdf/ Taille: 296138/  Document correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(480, 10, 'Upload du document numérique: Circulaire-n-99-1984-ms-sg-ost.pdf/  Type: application/pdf/ Taille: 381003/  Document correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(481, 10, 'Enregistrement du mot clé: Circulaire N°99-161/MFPDI/SG/DGDI/DPP/  Mot clé correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(482, 10, 'Enregistrement du mot clé: Circulaire n° 99-146/MFPDI/SG/DGDI/  Mot clé correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(483, 10, 'Enregistrement du mot clé: Circulaire n°99-1984/MS/SG/OST/  Mot clé correspondant à l''archive: Circulaire 99 ', '2019-10-03 14:46:57'),
(484, 10, 'Creation archive :Circulaire 991', '2019-10-03 14:46:57'),
(485, 12, 'Connexion au systeme', '2019-10-03 14:53:09'),
(486, 12, 'Upload du document numérique: /  Type: / Taille: /  Document correspondant à l''archive: Troisieme session extraordinaire 1994- dossier 42 ', '2019-10-03 15:01:52'),
(487, 12, 'Enregistrement du mot clé: Expose des motifs-projet de loi- rapports/  Mot clé correspondant à l''archive: Troisieme session extraordinaire 1994- dossier 42 ', '2019-10-03 15:01:52'),
(488, 12, 'Creation archive :Troisieme session extraordinaire 1994- dossier 421', '2019-10-03 15:01:52'),
(489, 12, 'Connexion au systeme', '2019-10-03 15:04:47'),
(490, 12, 'Connexion au systeme', '2019-10-03 15:04:49'),
(491, 12, 'Connexion au systeme', '2019-10-03 15:04:50'),
(492, 12, 'Connexion au systeme', '2019-10-03 15:04:50'),
(493, 12, 'Connexion au systeme', '2019-10-03 15:04:51'),
(494, 12, 'Suppression Documentnumeriquesid:160, id:161, id:162, id:163, id:166', '2019-10-03 15:05:25'),
(495, 12, 'Suppression Documentnumeriquesid:170', '2019-10-03 15:05:41'),
(496, 12, 'Suppression Documentnumeriquesid:171', '2019-10-03 15:06:00'),
(497, 12, 'Connexion au systeme', '2019-10-03 15:06:05'),
(498, 12, 'Connexion au systeme', '2019-10-03 15:27:06'),
(499, 12, 'Connexion au systeme', '2019-10-03 15:32:53'),
(500, 8, 'Connexion au systeme', '2019-10-03 15:34:40'),
(501, 13, 'Connexion au systeme', '2019-10-03 15:37:45'),
(502, 10, 'Upload du document numérique: Circulaire-n-2000-010-pres-sgg-cm.pdf/  Type: application/pdf/ Taille: 66220/  Document correspondant à l''archive: Circulaire 2000 ', '2019-10-03 15:45:23'),
(503, 10, 'Enregistrement du mot clé: Circulaire N°2000-010/PRES/SGG/CM/  Mot clé correspondant à l''archive: Circulaire 2000 ', '2019-10-03 15:45:23'),
(504, 10, 'Creation archive :Circulaire 20001', '2019-10-03 15:45:23'),
(505, 16, 'Connexion au systeme', '2019-10-04 08:01:42'),
(506, 16, 'Consultation des archives suivants: Decret n93-394 ID: 38', '2019-10-04 08:03:50'),
(507, 10, 'Connexion au systeme', '2019-10-04 08:10:05'),
(508, 10, 'Connexion au systeme', '2019-10-04 08:13:56'),
(509, 13, 'Connexion au systeme', '2019-10-04 08:15:08'),
(510, 8, 'Connexion au systeme', '2019-10-04 08:15:38'),
(511, 8, 'Connexion au systeme', '2019-10-04 08:17:06'),
(512, 12, 'Connexion au systeme', '2019-10-04 08:18:31'),
(513, 8, 'Connexion au systeme', '2019-10-04 08:19:54'),
(514, 8, 'Connexion au systeme', '2019-10-04 08:19:57'),
(515, 1, 'Connexion au systeme', '2019-10-04 08:55:24'),
(516, 1, 'Connexion au systeme', '2019-10-04 08:56:11'),
(517, 1, 'Connexion au systeme', '2019-10-04 08:56:44'),
(518, 6, 'Connexion au systeme', '2019-10-04 09:04:30'),
(519, 10, 'Connexion au systeme', '2019-10-04 09:04:32'),
(520, 12, 'Connexion au systeme', '2019-10-04 09:06:09'),
(521, 13, 'Connexion au systeme', '2019-10-04 09:09:41'),
(522, 1, 'Connexion au systeme', '2019-10-04 09:11:34'),
(523, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret 1993/ Adresse:  ', '2019-10-04 09:13:44'),
(524, 1, 'Connexion au systeme', '2019-10-04 09:17:48'),
(525, 13, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret 1993/ Adresse:  ', '2019-10-04 09:18:13'),
(526, 13, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 09:18:23'),
(527, 13, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 09:18:33'),
(528, 12, 'Suppression Documentnumeriquesid:238', '2019-10-04 09:22:23'),
(529, 12, 'Suppression Documentnumeriquesid:239, id:240', '2019-10-04 09:22:31'),
(530, 12, 'Suppression Documentnumeriquesid:241, id:242', '2019-10-04 09:26:17'),
(531, 12, 'Suppression Documentnumeriquesid:243', '2019-10-04 09:28:39'),
(532, 12, 'Suppression Documentnumeriquesid:244', '2019-10-04 09:29:00'),
(533, 13, 'Connexion au systeme', '2019-10-04 09:34:00'),
(534, 13, 'Connexion au systeme', '2019-10-04 09:38:11'),
(535, 13, 'Suppression Documentnumeriquesid:246', '2019-10-04 09:38:36'),
(536, 12, 'Suppression Documentnumeriquesid:128', '2019-10-04 09:41:35'),
(537, 10, 'Connexion au systeme', '2019-10-04 09:44:07'),
(538, 12, 'Upload du document numérique: Dossier 001.pdf/  Type: application/pdf/ Taille: 4592911/  Document correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(539, 12, 'Upload du document numérique: Dossier 003.pdf/  Type: application/pdf/ Taille: 2584697/  Document correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(540, 12, 'Upload du document numérique: Dossier 005.pdf/  Type: application/pdf/ Taille: 2258932/  Document correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(541, 12, 'Enregistrement du mot clé: Expose des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(542, 12, 'Enregistrement du mot clé: expose des motifs- projet de loi-rapports/  Mot clé correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(543, 12, 'Enregistrement du mot clé: exposé des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Premiere session ordinaire de 1995 ', '2019-10-04 10:00:02'),
(544, 12, 'Creation archive :Premiere session ordinaire de 19951', '2019-10-04 10:00:02'),
(545, 13, 'Suppression Descripteursid:115', '2019-10-04 10:06:55'),
(546, 9, 'Connexion au systeme', '2019-10-04 10:08:16'),
(547, 12, 'Suppression Descripteursid:109, id:110', '2019-10-04 10:08:49'),
(548, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret 1993/ Adresse:  ', '2019-10-04 10:14:07'),
(549, 6, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 10:14:11'),
(550, 6, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 10:14:11'),
(551, 10, 'Connexion au systeme', '2019-10-04 10:48:25'),
(552, 10, 'Creation archive :Circulaire 20011', '2019-10-04 10:56:41'),
(553, 10, 'Modification archive id: 1', '2019-10-04 10:58:11'),
(554, 10, 'Connexion au systeme', '2019-10-04 11:11:09'),
(555, 10, 'Upload du document numérique: Circulaire-n-2002-lot1.pdf/  Type: application/pdf/ Taille: 3517686/  Document correspondant à l''archive: Circulaire ', '2019-10-04 11:13:45'),
(556, 10, 'Upload du document numérique: Circulaire-n-2002-lot2.pdf/  Type: application/pdf/ Taille: 4573549/  Document correspondant à l''archive: Circulaire ', '2019-10-04 11:13:45'),
(557, 10, 'Enregistrement du mot clé: Circulaire 2002/  Mot clé correspondant à l''archive: Circulaire ', '2019-10-04 11:13:45'),
(558, 10, 'Creation archive :Circulaire1', '2019-10-04 11:13:45'),
(559, 10, 'Modification archive id: 1', '2019-10-04 11:18:23'),
(560, 13, 'Connexion au systeme', '2019-10-04 11:19:10'),
(561, 10, 'Modification archive id: 1', '2019-10-04 11:19:41'),
(562, 9, 'Connexion au systeme', '2019-10-04 11:20:04'),
(563, 10, 'Upload du document numérique: Circulaire-n-2003-lot1.pdf/  Type: application/pdf/ Taille: 3831608/  Document correspondant à l''archive: Circulaire 2003 ', '2019-10-04 11:31:42'),
(564, 10, 'Upload du document numérique: Circulaire-n-2003-lot2.pdf/  Type: application/pdf/ Taille: 5016009/  Document correspondant à l''archive: Circulaire 2003 ', '2019-10-04 11:31:42'),
(565, 10, 'Enregistrement du mot clé: Circulaire 2003/  Mot clé correspondant à l''archive: Circulaire 2003 ', '2019-10-04 11:31:42'),
(566, 10, 'Creation archive :Circulaire 20031', '2019-10-04 11:31:42'),
(567, 12, 'Connexion au systeme', '2019-10-04 11:55:17'),
(568, 13, 'Connexion au systeme', '2019-10-04 12:10:56'),
(569, 10, 'Upload du document numérique: Circulaire-n-2004-lot1.pdf/  Type: application/pdf/ Taille: 5273595/  Document correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(570, 10, 'Upload du document numérique: Circulaire-n-2004-lot2.pdf/  Type: application/pdf/ Taille: 2951400/  Document correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(571, 10, 'Upload du document numérique: Circulaire-n-2004-lot3.pdf/  Type: application/pdf/ Taille: 7476760/  Document correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(572, 10, 'Upload du document numérique: Circulaire-n-2004-lot4.pdf/  Type: application/pdf/ Taille: 5427891/  Document correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(573, 10, 'Upload du document numérique: Circulaire-n-2004-lot5.pdf/  Type: application/pdf/ Taille: 5307808/  Document correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(574, 10, 'Enregistrement du mot clé: Circulaire 2004/  Mot clé correspondant à l''archive: Circulaire 2004 ', '2019-10-04 12:11:23'),
(575, 10, 'Creation archive :Circulaire 20041', '2019-10-04 12:11:23'),
(576, 9, 'Suppression Documentnumeriquesid:391', '2019-10-04 12:13:16'),
(577, 12, 'Upload du document numérique: Ordre du jour.pdf/  Type: application/pdf/ Taille: 1186401/  Document correspondant à l''archive: Deuxieme session ordinaire de 1995 ', '2019-10-04 12:17:45'),
(578, 12, 'Upload du document numérique: Calendrier de travail des comission.pdf/  Type: application/pdf/ Taille: 1041057/  Document correspondant à l''archive: Deuxieme session ordinaire de 1995 ', '2019-10-04 12:17:45'),
(579, 12, 'Upload du document numérique: Dossier39.pdf/  Type: application/pdf/ Taille: 6042123/  Document correspondant à l''archive: Deuxieme session ordinaire de 1995 ', '2019-10-04 12:17:45'),
(580, 12, 'Enregistrement du mot clé: Expose des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Deuxieme session ordinaire de 1995 ', '2019-10-04 12:17:45'),
(581, 12, 'Creation archive :Deuxieme session ordinaire de 19951', '2019-10-04 12:17:45'),
(582, 2, 'Connexion au systeme', '2019-10-04 12:33:27'),
(583, 10, 'Upload du document numérique: Circulaire-n-2005-lot1.pdf/  Type: application/pdf/ Taille: 3704379/  Document correspondant à l''archive: Circulaire 2005 ', '2019-10-04 12:38:24'),
(584, 10, 'Upload du document numérique: Circulaire-n-2005-lot2.pdf/  Type: application/pdf/ Taille: 3927047/  Document correspondant à l''archive: Circulaire 2005 ', '2019-10-04 12:38:24'),
(585, 10, 'Upload du document numérique: Circulaire-n-2005-lot3.pdf/  Type: application/pdf/ Taille: 5779971/  Document correspondant à l''archive: Circulaire 2005 ', '2019-10-04 12:38:24'),
(586, 10, 'Upload du document numérique: Circulaire-n-2005-lot4.pdf/  Type: application/pdf/ Taille: 3165127/  Document correspondant à l''archive: Circulaire 2005 ', '2019-10-04 12:38:24'),
(587, 10, 'Enregistrement du mot clé: Circulaire 2005/  Mot clé correspondant à l''archive: Circulaire 2005 ', '2019-10-04 12:38:24'),
(588, 10, 'Creation archive :Circulaire 20051', '2019-10-04 12:38:24'),
(589, 9, 'Connexion au systeme', '2019-10-04 12:40:36'),
(590, 10, 'Upload du document numérique: Circulaire-n-2006-lot1.pdf/  Type: application/pdf/ Taille: 2369822/  Document correspondant à l''archive: Circulaire2006 ', '2019-10-04 12:40:38'),
(591, 10, 'Enregistrement du mot clé: Circulaire 2006/  Mot clé correspondant à l''archive: Circulaire2006 ', '2019-10-04 12:40:38'),
(592, 10, 'Creation archive :Circulaire20061', '2019-10-04 12:40:38'),
(593, 10, 'Upload du document numérique: Circulaire-n-2007-lot1.pdf/  Type: application/pdf/ Taille: 4114607/  Document correspondant à l''archive: Circulaire 2007 ', '2019-10-04 12:44:17'),
(594, 10, 'Enregistrement du mot clé: Circulaire 2007/  Mot clé correspondant à l''archive: Circulaire 2007 ', '2019-10-04 12:44:18'),
(595, 10, 'Creation archive :Circulaire 20071', '2019-10-04 12:44:18'),
(596, 12, 'Upload du document numérique: Dossier 31.pdf/  Type: application/pdf/ Taille: 2368937/  Document correspondant à l''archive: Premiere session extraordinaire de 1995 ', '2019-10-04 12:54:11'),
(597, 12, 'Upload du document numérique: Dossier 32.pdf/  Type: application/pdf/ Taille: 2713201/  Document correspondant à l''archive: Premiere session extraordinaire de 1995 ', '2019-10-04 12:54:11'),
(598, 12, 'Upload du document numérique: Dossier 33.pdf/  Type: application/pdf/ Taille: 1040505/  Document correspondant à l''archive: Premiere session extraordinaire de 1995 ', '2019-10-04 12:54:12'),
(599, 12, 'Creation archive :Premiere session extraordinaire de 19951', '2019-10-04 12:54:12'),
(600, 6, 'Connexion au systeme', '2019-10-04 12:55:41'),
(601, 10, 'Upload du document numérique: Circulaire-n-2008-lot1.pdf/  Type: application/pdf/ Taille: 3374027/  Document correspondant à l''archive: Circulaire2008 ', '2019-10-04 12:57:42'),
(602, 10, 'Upload du document numérique: Circulaire-n-2008-lot2.pdf/  Type: application/pdf/ Taille: 6461503/  Document correspondant à l''archive: Circulaire2008 ', '2019-10-04 12:57:42'),
(603, 10, 'Upload du document numérique: Circuliare-n-2008-lot3.pdf/  Type: application/pdf/ Taille: 6176262/  Document correspondant à l''archive: Circulaire2008 ', '2019-10-04 12:57:42'),
(604, 10, 'Enregistrement du mot clé: Circulaire 2008/  Mot clé correspondant à l''archive: Circulaire2008 ', '2019-10-04 12:57:42'),
(605, 10, 'Creation archive :Circulaire20081', '2019-10-04 12:57:42'),
(606, 6, 'Suppression Documentnumeriquesid:454', '2019-10-04 13:03:21'),
(607, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decret 1993/ Adresse:  ', '2019-10-04 13:05:33'),
(608, 6, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 13:05:40'),
(609, 6, 'Consultation des archives suivants: Decret 1993 ID: 45', '2019-10-04 13:05:40'),
(610, 6, 'Connexion au systeme', '2019-10-04 13:15:55'),
(611, 6, 'Connexion au systeme', '2019-10-04 13:18:45'),
(612, 12, 'Upload du document numérique: Calendrier de travail des commissions.pdf/  Type: application/pdf/ Taille: 781659/  Document correspondant à l''archive: Premiere session ordinaire de 1996 ', '2019-10-04 13:21:52'),
(613, 12, 'Upload du document numérique: Ordre du jour.pdf/  Type: application/pdf/ Taille: 1507507/  Document correspondant à l''archive: Premiere session ordinaire de 1996 ', '2019-10-04 13:21:52'),
(614, 12, 'Upload du document numérique: Dossier 01.pdf/  Type: application/pdf/ Taille: 18452441/  Document correspondant à l''archive: Premiere session ordinaire de 1996 ', '2019-10-04 13:21:52'),
(615, 12, 'Enregistrement du mot clé: Calendrier de travail-ordre du jour/  Mot clé correspondant à l''archive: Premiere session ordinaire de 1996 ', '2019-10-04 13:21:52'),
(616, 12, 'Enregistrement du mot clé: expose des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Premiere session ordinaire de 1996 ', '2019-10-04 13:21:52'),
(617, 12, 'Creation archive :Premiere session ordinaire de 19961', '2019-10-04 13:21:52'),
(618, 6, 'Suppression Documentnumeriquesid:453', '2019-10-04 13:24:32'),
(619, 6, 'Suppression Documentnumeriquesid:461, id:465', '2019-10-04 13:27:18'),
(620, 6, 'Connexion au systeme', '2019-10-04 13:27:32'),
(621, 10, 'Upload du document numérique: Circulaire-n-2009-lot1.pdf/  Type: application/pdf/ Taille: 5068465/  Document correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(622, 10, 'Upload du document numérique: Circulaire-n-2009-lot2.pdf/  Type: application/pdf/ Taille: 4352647/  Document correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(623, 10, 'Upload du document numérique: Circulaire-n-2009-lot3.pdf/  Type: application/pdf/ Taille: 5767170/  Document correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(624, 10, 'Upload du document numérique: Circulaire-n-2009-lot4.pdf/  Type: application/pdf/ Taille: 3280622/  Document correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(625, 10, 'Upload du document numérique: Circulaire-n-2009-lot5.pdf/  Type: application/pdf/ Taille: 5474849/  Document correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(626, 10, 'Enregistrement du mot clé: Circulaire 2009/  Mot clé correspondant à l''archive: Circulaire 2009 ', '2019-10-04 13:32:06'),
(627, 10, 'Creation archive :Circulaire 20091', '2019-10-04 13:32:06'),
(628, 12, 'Suppression Documentnumeriquesid:473, id:476', '2019-10-04 13:36:21'),
(629, 6, 'Connexion au systeme', '2019-10-04 13:48:40'),
(630, 6, 'Upload du document numérique: Decret n92 lot 1.pdf/  Type: application/pdf/ Taille: 8990247/  Document correspondant à l''archive: Decret 1992 ', '2019-10-04 13:52:51'),
(631, 6, 'Enregistrement du mot clé: decret 1992 lot1/  Mot clé correspondant à l''archive: Decret 1992 ', '2019-10-04 13:52:51'),
(632, 6, 'Creation archive :Decret 19921', '2019-10-04 13:52:51'),
(633, 6, 'Modification archive id: 1', '2019-10-04 13:54:34'),
(634, 12, 'Modification archive id: 1', '2019-10-04 13:54:34'),
(635, 12, 'Modification archive id: 1', '2019-10-04 13:55:40'),
(636, 12, 'Modification archive id: 1', '2019-10-04 13:56:18'),
(637, 12, 'Modification archive id: 1', '2019-10-04 13:57:17'),
(638, 10, 'Upload du document numérique: Circulaire-n-2010-lot2.pdf/  Type: application/pdf/ Taille: 3399684/  Document correspondant à l''archive: Circulaire 2010 ', '2019-10-04 13:58:25'),
(639, 10, 'Enregistrement du mot clé: Circulaire 2010/  Mot clé correspondant à l''archive: Circulaire 2010 ', '2019-10-04 13:58:25'),
(640, 10, 'Creation archive :Circulaire 20101', '2019-10-04 13:58:25'),
(641, 6, 'Upload du document numérique: Decret n90 lot 1.pdf/  Type: application/pdf/ Taille: 1131728/  Document correspondant à l''archive: Decret 1990 ', '2019-10-04 14:01:13'),
(642, 6, 'Enregistrement du mot clé: Decret 1990 lot1/  Mot clé correspondant à l''archive: Decret 1990 ', '2019-10-04 14:01:13'),
(643, 6, 'Creation archive :Decret 19901', '2019-10-04 14:01:13'),
(644, 6, 'Upload du document numérique: Decret n89 lot 1.pdf/  Type: application/pdf/ Taille: 931200/  Document correspondant à l''archive: Decret 1989 ', '2019-10-04 14:03:51'),
(645, 6, 'Enregistrement du mot clé: Decret 1989 lot1/  Mot clé correspondant à l''archive: Decret 1989 ', '2019-10-04 14:03:51'),
(646, 6, 'Creation archive :Decret 19891', '2019-10-04 14:03:51'),
(647, 12, 'Modification archive id: 1', '2019-10-04 14:05:21'),
(648, 6, 'Upload du document numérique: Decret n91 lot 1.pdf/  Type: application/pdf/ Taille: 233745/  Document correspondant à l''archive: Decret 1991 ', '2019-10-04 14:05:51'),
(649, 6, 'Enregistrement du mot clé: decret 1991 lot1/  Mot clé correspondant à l''archive: Decret 1991 ', '2019-10-04 14:05:51'),
(650, 6, 'Creation archive :Decret 19911', '2019-10-04 14:05:51'),
(651, 6, 'Upload du document numérique: Decret n87 lot 1.pdf/  Type: application/pdf/ Taille: 732466/  Document correspondant à l''archive: Decret 1987 ', '2019-10-04 14:08:06'),
(652, 6, 'Enregistrement du mot clé: Decret 1987 lot1/  Mot clé correspondant à l''archive: Decret 1987 ', '2019-10-04 14:08:06'),
(653, 6, 'Creation archive :Decret 19871', '2019-10-04 14:08:06'),
(654, 6, 'Upload du document numérique: Decret n86 lot 1.pdf/  Type: application/pdf/ Taille: 1238789/  Document correspondant à l''archive: decret 19896 ', '2019-10-04 14:10:40'),
(655, 6, 'Enregistrement du mot clé: Decret 1986 lot1/  Mot clé correspondant à l''archive: decret 19896 ', '2019-10-04 14:10:40'),
(656, 6, 'Creation archive :decret 198961', '2019-10-04 14:10:40'),
(657, 13, 'Connexion au systeme', '2019-10-04 14:41:01'),
(658, 2, 'Connexion au systeme', '2019-10-04 14:41:18'),
(659, 12, 'Connexion au systeme', '2019-10-04 14:41:27'),
(660, 10, 'Connexion au systeme', '2019-10-04 14:43:15'),
(661, 12, 'Upload du document numérique: Calendrier de travail de commission.pdf/  Type: application/pdf/ Taille: 1475360/  Document correspondant à l''archive: Deuxieme session ordinaire de 1996 ', '2019-10-04 14:56:25'),
(662, 12, 'Upload du document numérique: Dossier 1.pdf/  Type: application/pdf/ Taille: 11451387/  Document correspondant à l''archive: Deuxieme session ordinaire de 1996 ', '2019-10-04 14:56:25'),
(663, 12, 'Enregistrement du mot clé: Calendrier de travail/  Mot clé correspondant à l''archive: Deuxieme session ordinaire de 1996 ', '2019-10-04 14:56:25'),
(664, 12, 'Enregistrement du mot clé: Expose des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Deuxieme session ordinaire de 1996 ', '2019-10-04 14:56:25'),
(665, 12, 'Creation archive :Deuxieme session ordinaire de 19961', '2019-10-04 14:56:25'),
(666, 2, 'Connexion au systeme', '2019-10-04 15:07:12'),
(667, 12, 'Connexion au systeme', '2019-10-04 15:08:34'),
(668, 10, 'Connexion au systeme', '2019-10-04 15:09:35'),
(669, 10, 'Upload du document numérique: Circulaire-n-2011-lot1.pdf/  Type: application/pdf/ Taille: 4596159/  Document correspondant à l''archive: Circulaire 2011 ', '2019-10-04 15:17:30'),
(670, 10, 'Upload du document numérique: Circulaire-n-2011-lot2.pdf/  Type: application/pdf/ Taille: 5264280/  Document correspondant à l''archive: Circulaire 2011 ', '2019-10-04 15:17:30'),
(671, 10, 'Upload du document numérique: Circulaire-n-2011-lot3.pdf/  Type: application/pdf/ Taille: 6629887/  Document correspondant à l''archive: Circulaire 2011 ', '2019-10-04 15:17:30'),
(672, 10, 'Upload du document numérique: Circulaire-n-2011-lot4.pdf/  Type: application/pdf/ Taille: 5452924/  Document correspondant à l''archive: Circulaire 2011 ', '2019-10-04 15:17:30'),
(673, 10, 'Enregistrement du mot clé: Circulaire 2011/  Mot clé correspondant à l''archive: Circulaire 2011 ', '2019-10-04 15:17:30'),
(674, 10, 'Creation archive :Circulaire 20111', '2019-10-04 15:17:30'),
(675, 10, 'Upload du document numérique: circulaire 2012 - lot1.pdf/  Type: application/pdf/ Taille: 6639367/  Document correspondant à l''archive: Circulaire 2012 ', '2019-10-04 15:33:52'),
(676, 10, 'Upload du document numérique: Circulaire n2012- lot2.pdf/  Type: application/pdf/ Taille: 3675664/  Document correspondant à l''archive: Circulaire 2012 ', '2019-10-04 15:33:52'),
(677, 10, 'Upload du document numérique: Circulaire n 2012- lot3.pdf/  Type: application/pdf/ Taille: 3186280/  Document correspondant à l''archive: Circulaire 2012 ', '2019-10-04 15:33:52'),
(678, 10, 'Enregistrement du mot clé: Circulaire 2012/  Mot clé correspondant à l''archive: Circulaire 2012 ', '2019-10-04 15:33:52'),
(679, 10, 'Creation archive :Circulaire 20121', '2019-10-04 15:33:52'),
(680, 12, 'Upload du document numérique: Calendrier de travail des commissions.pdf/  Type: application/pdf/ Taille: 1809394/  Document correspondant à l''archive: Premiere session extraordinaire de 1996 ', '2019-10-04 15:35:17'),
(681, 12, 'Upload du document numérique: Ordre du jour.pdf/  Type: application/pdf/ Taille: 1003931/  Document correspondant à l''archive: Premiere session extraordinaire de 1996 ', '2019-10-04 15:35:17'),
(682, 12, 'Upload du document numérique: Dossier 15.pdf/  Type: application/pdf/ Taille: 1677346/  Document correspondant à l''archive: Premiere session extraordinaire de 1996 ', '2019-10-04 15:35:17'),
(683, 12, 'Enregistrement du mot clé: Calendrier de travail-ordre du jour/  Mot clé correspondant à l''archive: Premiere session extraordinaire de 1996 ', '2019-10-04 15:35:17'),
(684, 12, 'Enregistrement du mot clé: expose des motifs-projet de loi-rapports/  Mot clé correspondant à l''archive: Premiere session extraordinaire de 1996 ', '2019-10-04 15:35:17'),
(685, 12, 'Creation archive :Premiere session extraordinaire de 19961', '2019-10-04 15:35:17'),
(686, 13, 'Connexion au systeme', '2019-10-04 15:44:53'),
(687, 10, 'Upload du document numérique: Circulaire n-2013 - lot1.pdf/  Type: application/pdf/ Taille: 14111742/  Document correspondant à l''archive: Circulaire 2013 ', '2019-10-04 16:10:48'),
(688, 10, 'Upload du document numérique: Circulaire n -2013- lot2.pdf/  Type: application/pdf/ Taille: 6107871/  Document correspondant à l''archive: Circulaire 2013 ', '2019-10-04 16:10:48'),
(689, 10, 'Upload du document numérique: Circulaire n - 2013- lot3.pdf/  Type: application/pdf/ Taille: 5353370/  Document correspondant à l''archive: Circulaire 2013 ', '2019-10-04 16:10:48'),
(690, 10, 'Upload du document numérique: Circulaire n - 2013 - lot4.pdf/  Type: application/pdf/ Taille: 7620815/  Document correspondant à l''archive: Circulaire 2013 ', '2019-10-04 16:10:48'),
(691, 10, 'Enregistrement du mot clé: Circulaire 2013/  Mot clé correspondant à l''archive: Circulaire 2013 ', '2019-10-04 16:10:48'),
(692, 10, 'Creation archive :Circulaire 20131', '2019-10-04 16:10:48'),
(693, 6, 'Connexion au systeme', '2019-10-04 16:14:40'),
(694, 6, 'Upload du document numérique: Decret n94 lot1.pdf/  Type: application/pdf/ Taille: 15942347/  Document correspondant à l''archive: Decret 1994 ', '2019-10-04 16:18:14'),
(695, 6, 'Enregistrement du mot clé: decret 1994 lot1/  Mot clé correspondant à l''archive: Decret 1994 ', '2019-10-04 16:18:14'),
(696, 6, 'Creation archive :Decret 19941', '2019-10-04 16:18:14'),
(697, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decrets 1994/ Adresse:  ', '2019-10-04 16:25:25'),
(698, 6, 'Rercheche archive avec paramètre(s) suivante(s):\r\n				Direction gen: /  Direction: / Service: /  Serie: / Sous serie: /  Type doc: / Année début: / Analyse:Decrets 1994/ Adresse:  ', '2019-10-04 16:25:29'),
(699, 12, 'Upload du document numérique: Decret n95 lot1.pdf/  Type: application/pdf/ Taille: 20167522/  Document correspondant à l''archive: Decret 1995 ', '2019-10-04 16:32:08'),
(700, 12, 'Enregistrement du mot clé: Decret 1995 lot1/  Mot clé correspondant à l''archive: Decret 1995 ', '2019-10-04 16:32:08'),
(701, 12, 'Creation archive :Decret 19951', '2019-10-04 16:32:08'),
(702, 10, 'Upload du document numérique: Circulaire n- 2014 - lot1.pdf/  Type: application/pdf/ Taille: 7130644/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(703, 10, 'Upload du document numérique: Circulaire n - 2014 - lot2.pdf/  Type: application/pdf/ Taille: 10976130/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(704, 10, 'Upload du document numérique: Circulaire n - 2014 - lot3.pdf/  Type: application/pdf/ Taille: 13099318/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(705, 10, 'Upload du document numérique: Circulaire n - 2014 - lot4.pdf/  Type: application/pdf/ Taille: 11441837/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(706, 10, 'Upload du document numérique: Circulaire n - 2014 - lot5.pdf/  Type: application/pdf/ Taille: 6321924/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(707, 10, 'Upload du document numérique: Circulaire n - 2014 - lot6.pdf/  Type: application/pdf/ Taille: 12795251/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(708, 10, 'Upload du document numérique: Circulaire n -2014 - lot7.pdf/  Type: application/pdf/ Taille: 13669239/  Document correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(709, 10, 'Enregistrement du mot clé: Circulaire 2014/  Mot clé correspondant à l''archive: Circulaire 2014 ', '2019-10-04 17:04:44'),
(710, 10, 'Creation archive :Circulaire 20141', '2019-10-04 17:04:44'),
(711, 10, 'Upload du document numérique: Circulaire n - 2017.pdf/  Type: application/pdf/ Taille: 309649/  Document correspondant à l''archive: Circulaire 2017 ', '2019-10-04 17:11:54'),
(712, 10, 'Enregistrement du mot clé: Circulaire 2017/  Mot clé correspondant à l''archive: Circulaire 2017 ', '2019-10-04 17:11:54'),
(713, 10, 'Creation archive :Circulaire 20171', '2019-10-04 17:11:54'),
(714, 10, 'Upload du document numérique: Circulaire n - 2018.pdf/  Type: application/pdf/ Taille: 400943/  Document correspondant à l''archive: Circulaire ', '2019-10-04 17:17:18'),
(715, 10, 'Enregistrement du mot clé: Circulaire 2018/  Mot clé correspondant à l''archive: Circulaire ', '2019-10-04 17:17:18'),
(716, 10, 'Creation archive :Circulaire1', '2019-10-04 17:17:18'),
(717, 1, 'Connexion au systeme', '2019-10-05 16:15:44'),
(718, 1, 'Connexion au systeme', '2019-10-06 22:02:47'),
(719, 1, 'Consultation des archives suivants: Decret n93-413 ID: 1', '2019-10-06 22:13:47'),
(720, 1, 'Connexion au systeme', '2019-10-07 13:25:41'),
(721, 1, 'Connexion au systeme', '2019-10-07 13:43:14'),
(722, 1, 'Connexion au systeme', '2019-10-07 13:43:23'),
(723, 1, 'Connexion au systeme', '2019-10-07 13:50:36'),
(724, 1, 'Connexion au systeme', '2019-10-07 13:52:02'),
(725, 1, 'Connexion au systeme', '2019-10-07 14:16:21'),
(726, 1, 'Connexion au systeme', '2019-10-07 14:21:42'),
(727, 1, 'Connexion au systeme', '2019-10-07 14:24:38'),
(728, 1, 'Connexion au systeme', '2019-10-07 14:27:52'),
(729, 1, 'Connexion au systeme', '2019-10-07 14:43:09'),
(730, 1, 'Connexion au systeme', '2019-10-07 15:39:40'),
(731, 1, 'Connexion au systeme', '2019-10-07 16:00:32'),
(732, 1, 'Connexion au systeme', '2019-10-08 13:55:24'),
(733, 1, 'Connexion au systeme', '2019-10-08 19:54:17'),
(734, 1, 'Connexion au systeme', '2019-10-11 11:27:42'),
(735, 1, 'Connexion au systeme', '2019-10-11 12:13:34'),
(736, 1, 'Consultation des archives suivants: circulaire N° 93-091 ID: 2', '2019-10-11 12:14:10'),
(737, 1, 'Consultation des archives suivants: Decret n93-414 ID: 4', '2019-10-11 12:14:15');

-- --------------------------------------------------------

--
-- Structure de la table `naturedocs`
--

CREATE TABLE `naturedocs` (
  `id` int(11) NOT NULL,
  `nature_doc` varchar(500) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `naturedocs`
--

INSERT INTO `naturedocs` (`id`, `nature_doc`) VALUES
(1, 'Constitutions'),
(2, 'Lois'),
(3, 'Résolutions'),
(4, 'Ordonnances'),
(5, 'Décrets/Kiti'),
(6, 'Arrêtés/Raabo'),
(7, 'Décisions/Koega'),
(8, 'Circulaires/Koega'),
(9, 'Journal officiel'),
(10, 'Questions parlementaires'),
(11, 'Réponses parlementaires'),
(12, 'Exposé des motifs'),
(13, 'Rapports'),
(14, 'Rapports de sessions'),
(15, 'Projets de loi'),
(16, 'Avis juridiques'),
(17, 'Plaintes'),
(18, 'Requêtes'),
(19, 'Jugements'),
(20, 'Sentences'),
(21, 'Correspondances départ'),
(22, 'Correspondances arrivée'),
(23, 'Bordereaux d''envoi'),
(24, 'Notes à l''intention du ministre'),
(25, 'Notes circonstances'),
(26, 'Notes de service'),
(27, 'Instructions'),
(28, 'Registres départ'),
(29, 'Registres arrivée'),
(30, 'Lettre de mission'),
(31, 'Contrat d''objectif'),
(32, 'Strategies'),
(33, 'Politiques'),
(34, 'Plans d''action'),
(35, 'Programmes d''activités'),
(36, 'Termes de références'),
(37, 'Rapports d''activités'),
(38, 'Ordre de mission'),
(39, 'Rapports de missions'),
(40, 'Comptes rendus de mission'),
(41, 'Rapports d''études'),
(42, 'Rapports d''audit'),
(43, 'Rapports d''inspection'),
(44, 'PV de passation de service'),
(45, 'Rapports de réunion'),
(46, 'PV de réunion'),
(47, 'Compte rendus de réunion'),
(48, 'Discours'),
(49, 'Allocutions'),
(50, 'Déclarations'),
(51, 'Communiqués'),
(52, 'Communications'),
(53, 'Points de presse'),
(54, 'Revues de presse'),
(55, 'Plan de communication'),
(56, 'Bulletins d''informations'),
(57, 'Autorisations de prise de vue'),
(58, 'Plan de passation des marchés'),
(59, 'Dossier d''appel d''offres'),
(60, 'Cotation'),
(61, 'Demande de prix'),
(62, 'Procés-verbaux'),
(63, 'Contrats de prestation'),
(64, 'Rapports de vérification'),
(65, 'Rapports de fin d'' éxecution'),
(66, 'Rapports de fin d''étude'),
(67, 'Factures'),
(68, 'Recus'),
(69, 'QUittances'),
(70, 'Décharges'),
(71, 'Etats de paiement'),
(72, 'Revues des marchés public'),
(73, 'Bons'),
(74, 'Lettres de commandes'),
(75, 'Bordereaux de livraison'),
(76, 'Attestation de service fait'),
(77, 'Budget-Programme'),
(78, 'Circulaires budgetaires'),
(79, 'Questionnaires budgetaires'),
(80, 'Réponses budgetaires'),
(81, 'Rapports budgetaires'),
(82, 'Plan de déblocage des fonds'),
(83, 'Plan comptable'),
(84, 'Bons d''entrée'),
(85, 'Bons de sortie'),
(86, 'Rapports financiers'),
(87, 'Comptes rendus d''audience Ministre/SG'),
(88, 'Compte rendus des ceremonies officielles'),
(89, 'Protocol d''accord'),
(90, 'Accords'),
(91, 'Conventions'),
(92, 'Traités'),
(93, 'CD'),
(94, 'DVD'),
(95, 'Disques'),
(96, 'USB'),
(97, 'Bandes magnétiques'),
(98, 'Cartes'),
(99, 'Plans'),
(100, 'Photos'),
(101, 'Quotidiens'),
(102, 'Hebdomadaires'),
(103, 'Mensuels'),
(104, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `rayons`
--

CREATE TABLE `rayons` (
  `id` int(11) NOT NULL,
  `rayon` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `travee_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `rayons`
--

INSERT INTO `rayons` (`id`, `rayon`, `travee_id`) VALUES
(1, 'A', 1),
(2, 'A', 2),
(3, 'A', 3),
(4, 'A', 4),
(5, 'A', 5),
(6, 'A', 6),
(7, 'B', 1),
(8, 'B', 2),
(9, 'B', 3),
(10, 'B', 4),
(11, 'B', 5),
(12, 'B', 6),
(13, 'C', 1),
(14, 'C', 2),
(15, 'C', 3),
(16, 'C', 4),
(17, 'C', 5),
(18, 'C', 6),
(19, 'D', 1),
(20, 'D', 2),
(21, 'D', 3),
(22, 'D', 4),
(23, 'D', 5),
(24, 'D', 6),
(25, 'E', 2),
(26, 'E', 3),
(27, 'E', 4),
(28, 'E', 5),
(29, 'E', 6);

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

CREATE TABLE `salles` (
  `id` int(11) NOT NULL,
  `salle` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `codesal` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `salles`
--

INSERT INTO `salles` (`id`, `salle`, `codesal`, `site_id`) VALUES
(1, 'Archives MCRP', 'S1AMCRP', 1);

-- --------------------------------------------------------

--
-- Structure de la table `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `code_serie` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `serie` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `series`
--

INSERT INTO `series` (`id`, `code_serie`, `serie`) VALUES
(1, 'A', 'Textes officiels'),
(2, 'B', 'Travaux de l''assemblée nationale'),
(3, 'C', 'Textes contentieux'),
(4, 'D', 'Administration générale'),
(5, 'E', 'RESSOURCES HUMAINES'),
(6, 'F', 'COMMUNICATION'),
(7, 'G', 'RESSOURCES FINANCIERES'),
(8, 'H', 'GESTION DES RESSOURCES MATEIELLES ET LOGISTQIUES'),
(9, 'I', 'REATIONS PUBLIQUES/COOPERATION'),
(10, 'J', 'DOCUMENTS AUDIOVISUELS ET ELECTRONIQUES'),
(11, 'K', 'DOCUMENTS ICONOGRAPHIQUES'),
(12, 'L', 'DOCUMENTATION');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `sigle` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `nom_service` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `direction_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `services`
--

INSERT INTO `services` (`id`, `sigle`, `nom_service`, `direction_id`) VALUES
(1, 'SPB', 'Service de la Programmation Budgétaire', 2),
(2, 'SEBC', 'Service de l''Exécution Budgétaire et de la Comptabilité', 2),
(3, 'SCP', 'Service de la Commande Public', 2),
(4, 'SAIE', 'Service des Affaires Immobilières et de l’Equipement', 2),
(5, 'SSPB', 'Service de la sécurité des personnes et des Biens', 2),
(6, 'SMT/PI', 'Service des Marchés de Travaux et de Prestations Intellectuelles', 4),
(7, 'SMF/PC', 'Services des Marchés de Fournitures et de Prestations Courantes', 4),
(8, 'SSE/MP', 'Service de Suivi de l''Exécution des Marchés Publics', 4),
(9, 'SCRP', 'Service Communication et Relation Public', 5),
(10, 'SPA', 'Service Presse et Archive', 5),
(11, 'SA', 'Service des Archives', 19),
(12, 'SI', 'Service d''information', 18),
(13, 'DGAN', 'Service courrier', 19),
(14, 'SS', 'Servce sport', 21),
(15, 'DEP', 'Service des Etudes ', 23),
(17, 'SR', 'Service des routes', 24);

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `site` varchar(500) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id`, `site`) VALUES
(1, 'Pyramide');

-- --------------------------------------------------------

--
-- Structure de la table `souseries`
--

CREATE TABLE `souseries` (
  `id` int(11) NOT NULL,
  `code_sous_serie` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `sous_serie` text COLLATE utf8_bin,
  `code_serie` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `delai_cons` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sort_final` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `souseries`
--

INSERT INTO `souseries` (`id`, `code_sous_serie`, `sous_serie`, `code_serie`, `delai_cons`, `sort_final`, `created`, `modified`) VALUES
(17, '8A', 'Le Journal Officiel', 'A', '', '', '2019-10-02', '2019-10-02'),
(16, '7A', 'Circulaires/Koega', 'A', '', '', '2019-10-02', '2019-10-02'),
(15, '6A', 'Décisions', 'A', '', '', '2019-10-02', '2019-10-02'),
(14, '5A', 'Arrêtés/Raabo', 'A', '', '', '2019-10-02', '2019-10-02'),
(13, '4A', 'Décrets/Kiti', 'A', '', '', '2019-10-02', '2019-10-02'),
(12, '3A', 'Ordonnances', 'A', '', '', '2019-10-02', '2019-10-02'),
(11, '2A', 'Lois/Resolutions', 'A', '', '', '2019-10-02', '2019-10-02'),
(10, '1A', 'Constitutions', 'A', '', '', '2019-10-02', '2019-10-02'),
(18, '1B', 'Travaux de Commision', 'B', '', '', '2019-10-02', '2019-10-02'),
(19, '2B', 'Questions/Réponses parlementaires', 'B', '', '', '2019-10-02', '2019-10-02'),
(20, '3B', 'Travaux de Groupes parlementaires', 'B', '', '', '2019-10-02', '2019-10-02'),
(21, '4B', 'Rapports de sessions', 'B', '', '', '2019-10-02', '2019-10-02'),
(22, '5B', 'Travaux de Commisions AD HOC', 'B', '', '', '2019-10-02', '2019-10-02'),
(23, '1C', 'Conseils de discipline', 'C', '', '', '2019-10-02', '2019-10-02'),
(24, '2C', 'Avis juridiques', 'C', '', '', '2019-10-02', '2019-10-02'),
(25, '3C', 'Poursuites judiciaires', 'C', '', '', '2019-10-02', '2019-10-02'),
(26, '4C', 'Plaintes/Requêtes', 'C', '', '', '2019-10-02', '2019-10-02'),
(27, '5C', 'Jugements/Sentences', 'C', '', '', '2019-10-02', '2019-10-02'),
(28, '1D', 'Correspondances', 'D', '', '', '2019-10-02', '2019-10-02'),
(29, '2D', 'Notes', 'D', '', '', '2019-10-02', '2019-10-02'),
(30, '3D', 'Registres', 'D', '', '', '2019-10-02', '2019-10-02'),
(31, '4D', 'Rencontres statutaires', 'D', '', '', '2019-10-02', '2019-10-02'),
(32, '5D', 'Rencontres non statutaires', 'D', '', '', '2019-10-02', '2019-10-02'),
(33, '6D', 'Planification administrative', 'D', '', '', '2019-10-02', '2019-10-02'),
(34, 'E1', 'Dossiers individuels', 'E', '', '', '2019-10-02', '2019-10-02'),
(35, '1F1', 'Discours/Allocutions/Déclarations', 'F', '', '', '2019-10-02', '2019-10-02'),
(36, '1F2', 'Communiqués', 'F', '', '', '2019-10-02', '2019-10-02'),
(37, '1F3', 'Communications', 'F', '', '', '2019-10-02', '2019-10-02'),
(38, '1F4', 'Conferences de presse', 'F', '', '', '2019-10-02', '2019-10-02'),
(39, '1F5', 'Points/Revues de presse', 'F', '', '', '2019-10-02', '2019-10-02'),
(40, '1F6', 'Plan de Communication', 'F', '', '', '2019-10-02', '2019-10-02'),
(41, '1F7', 'Bulletiins d''information', 'F', '', '', '2019-10-02', '2019-10-02'),
(42, '1F8', 'Autorisations de prise de vue', 'F', '', '', '2019-10-02', '2019-10-02'),
(43, '1G', 'Marchés publics', 'G', '', '', '2019-10-02', '2019-10-02'),
(44, '2G', 'Gestion budgétaire', 'G', '', '', '2019-10-02', '2019-10-02'),
(45, '3G', 'Comptabilité', 'G', '', '', '2019-10-02', '2019-10-02'),
(46, '1H', 'Bons', 'H', '', '', '2019-10-02', '2019-10-02'),
(47, '2H', 'PV de reception', 'H', '', '', '2019-10-02', '2019-10-02'),
(48, '3H', 'Rapport d''inventaire', 'H', '', '', '2019-10-02', '2019-10-02'),
(49, '1I', 'Relations internes du MCRP', 'I', '', '', '2019-10-02', '2019-10-02'),
(50, '2I', 'Relations nationales', 'I', '', '', '2019-10-02', '2019-10-02'),
(51, '3I', 'Coopération bilatérale', 'I', '', '', '2019-10-02', '2019-10-02'),
(52, '4I', 'Coopération multilatérale', 'I', '', '', '2019-10-02', '2019-10-02'),
(53, '5I', 'Organisations régionales/sous régionales', 'I', '', '', '2019-10-02', '2019-10-02'),
(54, '1J1', 'CD/DVD', 'J', '', '', '2019-10-02', '2019-10-02'),
(55, '1J2', 'Disques', 'J', '', '', '2019-10-02', '2019-10-02'),
(56, '1J3', 'USB', 'J', '', '', '2019-10-02', '2019-10-02'),
(57, '1J4', 'Bandes magnétiques', 'J', '', '', '2019-10-02', '2019-10-02'),
(58, 'K1', 'Cartes', 'K', '', '', '2019-10-02', '2019-10-02'),
(59, 'K2', 'Plans', 'K', '', '', '2019-10-02', '2019-10-02'),
(60, 'K3', 'Photos', 'K', '', '', '2019-10-02', '2019-10-02'),
(61, '1L', 'Périodiques', 'L', '', '', '2019-10-02', '2019-10-02');

-- --------------------------------------------------------

--
-- Structure de la table `sousouseries`
--

CREATE TABLE `sousouseries` (
  `id` int(11) NOT NULL,
  `code_sous_sous_serie` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `sous_sous_serie` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `code_sous_serie` int(11) DEFAULT NULL,
  `delai_cons` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `sort_final` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `sousouseries`
--

INSERT INTO `sousouseries` (`id`, `code_sous_sous_serie`, `sous_sous_serie`, `code_sous_serie`, `delai_cons`, `sort_final`, `created`, `modified`) VALUES
(1, '1D1', 'Correspondances départ', 1, '8', 'TC', '2019-09-28', '2019-09-28'),
(2, '1D2', 'Correspondances arrivée', 1, '8', 'TC', '2019-09-28', '2019-09-28'),
(3, '1D3', 'Bordereaux d''envoi', 1, '8', 'TC', '2019-09-28', '2019-09-28'),
(4, '1D1 ', 'Correspondances départ', 1, '', '', '2019-10-02', '2019-10-02'),
(5, '1D2', 'Correspondances arrivée', 1, '', '', '2019-10-02', '2019-10-02'),
(6, '1D3', 'Bordereaux d''envoi', 1, '', '', '2019-10-02', '2019-10-02'),
(7, '2D1', 'Notes à l''intention du ministre', 2, '', '', '2019-10-02', '2019-10-02'),
(8, '2D2', 'Notes circonstanciées', 2, '', '', '2019-10-02', '2019-10-02'),
(9, '2D3', 'Notes de service', 2, '', '', '2019-10-02', '2019-10-02'),
(10, '2D4', 'Instructions', 2, '', '', '2019-10-02', '2019-10-02'),
(11, '3D1', 'Registres départ', 3, '', '', '2019-10-02', '2019-10-02'),
(12, '3D2', 'Registres arrivée', 3, '', '', '2019-10-02', '2019-10-02'),
(13, '4D1', 'Conseils des ministres', 4, '', '', '2019-10-02', '2019-10-02'),
(14, '4D2', 'CASEM', 4, '', '', '2019-10-02', '2019-10-02'),
(15, '4D3', 'Conseils de cabinet', 4, '', '', '2019-10-02', '2019-10-02'),
(16, '4D4', 'Cadres Permanents de concertations', 4, '', '', '2019-10-02', '2019-10-02'),
(17, '4D5', 'COTEVAL', 4, '', '', '2019-10-02', '2019-10-02'),
(18, '4D6', 'Structures de missions/cellule Genre 1/CMLS/IST2/cellule Environnemtal3', 4, '', '', '2019-10-02', '2019-10-02'),
(19, '4D7', 'cadre sectoriel de dialogue', 4, '', '', '2019-10-02', '2019-10-02'),
(20, '4D8', 'Conférences Annuelles', 4, '', '', '2019-10-02', '2019-10-02'),
(21, '5D1', 'Séminaires', 5, '', '', '2019-10-02', '2019-10-02'),
(22, '5D2', 'Ateliers', 5, '', '', '2019-10-02', '2019-10-02'),
(23, '5D3', 'Etudes/Stages/formations', 5, '', '', '2019-10-02', '2019-10-02'),
(24, '5D4', 'Colloques/conferences', 5, '', '', '2019-10-02', '2019-10-02'),
(25, '5D5', 'Reformes politiques', 5, '', '', '2019-10-02', '2019-10-02'),
(26, '6D1', 'Lettre de mission', 6, '', '', '2019-10-02', '2019-10-02'),
(27, '6D2', 'Contrat d''objetif', 6, '', '', '2019-10-02', '2019-10-02'),
(28, '6D3', 'Strategies/Politiques', 6, '', '', '2019-10-02', '2019-10-02'),
(29, '6D4', 'Plans d''action', 6, '', '', '2019-10-02', '2019-10-02'),
(30, '6D5', 'Programmes d''activités', 6, '', '', '2019-10-02', '2019-10-02'),
(31, '6D6', 'Termes de références', 6, '', '', '2019-10-02', '2019-10-02'),
(32, '6D7', 'Rapports d''activités', 6, '', '', '2019-10-02', '2019-10-02'),
(33, '6D8', 'Odre de mission', 6, '', '', '2019-10-02', '2019-10-02'),
(34, '6D9', 'Rapports/Comptes rendus de mission', 6, '', '', '2019-10-02', '2019-10-02'),
(35, '6D10', 'Rapport détudes', 6, '', '', '2019-10-02', '2019-10-02'),
(36, '6D11', 'Rapports d''audit/d''inspection', 6, '', '', '2019-10-02', '2019-10-02'),
(37, '6D12', 'PV de passation de service', 6, '', '', '2019-10-02', '2019-10-02'),
(38, '6D13', 'rapports, PV, compte rendus de reunion', 6, '', '', '2019-10-02', '2019-10-02'),
(39, '6D14', 'Statistiques', 6, '', '', '2019-10-02', '2019-10-02'),
(40, '1G1', 'Plan de passation des marchés', 1, '', '', '2019-10-02', '2019-10-02'),
(41, '1G2', 'Dossier d''appel d''offres/Cotation/demande de prix', 1, '', '', '2019-10-02', '2019-10-02'),
(42, '1G3', 'Procès-verbaux', 1, '', '', '2019-10-02', '2019-10-02'),
(43, '1G4', 'Contrats de prestation', 1, '', '', '2019-10-02', '2019-10-02'),
(44, '1G5', 'Rapport(de vérifcation, de fin d''exécution, de fin d''étude)', 1, '', '', '2019-10-02', '2019-10-02'),
(45, '1G6', 'Factures/reçus/quitances', 1, '', '', '2019-10-02', '2019-10-02'),
(46, '1G7', 'Décharges/Etats de paiement', 1, '', '', '2019-10-02', '2019-10-02'),
(47, '1G8', 'Revues des marchés publics', 1, '', '', '2019-10-02', '2019-10-02'),
(48, '1G9', 'Bons/lettres de Commandes/Bordereaux de livraison', 1, '', '', '2019-10-02', '2019-10-02'),
(49, '1G10', 'Attestation de servcie fait', 1, '', '', '2019-10-02', '2019-10-02'),
(50, '2G1', 'Budget-Programme', 2, '', '', '2019-10-02', '2019-10-02'),
(51, '2G2', 'Circulaires budgétaires', 2, '', '', '2019-10-02', '2019-10-02'),
(52, '2G3', 'Questionnaires/Réponses Budgétaires', 2, '', '', '2019-10-02', '2019-10-02'),
(53, '2G4', 'Rapport budgétaires', 2, '', '', '2019-10-02', '2019-10-02'),
(54, '2G5', 'Plan de déblocage des fonds', 2, '', '', '2019-10-02', '2019-10-02'),
(55, '3G1', 'Plan comptable', 3, '', '', '2019-10-02', '2019-10-02'),
(56, '3G2', 'Recettes', 3, '', '', '2019-10-02', '2019-10-02'),
(57, '3G3', 'Dépenses', 3, '', '', '2019-10-02', '2019-10-02'),
(58, '3G4', 'rapports financiers(contrôle de gestion)', 3, '', '', '2019-10-02', '2019-10-02'),
(59, '1H1', 'bons d''entrées', 1, '', '', '2019-10-02', '2019-10-02'),
(60, '1H2', 'Bons de sorties', 1, '', '', '2019-10-02', '2019-10-02'),
(61, '1I1', 'Compte Rendus d''audience ministre/SG', 1, '', '', '2019-10-02', '2019-10-02'),
(62, '1I2', 'Compte Rendus des cérémonies officielles', 1, '', '', '2019-10-02', '2019-10-02'),
(63, '2I1', 'Institutions/établissements publics/sociétés d''Etat/privées', 2, '', '', '2019-10-02', '2019-10-02'),
(64, '2I2', 'ONG/associations/syndicats', 2, '', '', '2019-10-02', '2019-10-02'),
(65, '2I3', 'Evènements Nationaux', 2, '', '', '2019-10-02', '2019-10-02'),
(66, '3I1', 'Protocole d''accord', 3, '', '', '2019-10-02', '2019-10-02'),
(67, '3I2', 'Accords', 3, '', '', '2019-10-02', '2019-10-02'),
(68, '3I3', 'Conventions', 3, '', '', '2019-10-02', '2019-10-02'),
(69, '3I4', 'Traités', 3, '', '', '2019-10-02', '2019-10-02'),
(70, '4I1', 'Accords', 4, '', '', '2019-10-02', '2019-10-02'),
(71, '4I2', 'Conventions', 4, '', '', '2019-10-02', '2019-10-02'),
(72, '4I3', 'Traités', 4, '', '', '2019-10-02', '2019-10-02'),
(73, '5I1', 'Organisations sous régionales(UEMOA,CILSS..)', 5, '', '', '2019-10-02', '2019-10-02'),
(74, '5I2', 'Organisations régionales(CEDEAO, ...)', 5, '', '', '2019-10-02', '2019-10-02'),
(75, '5I3', 'Organisations internationales(ONU, OMS, ...)', 5, '', '', '2019-10-02', '2019-10-02'),
(76, '1L1', 'quotidiens', 1, '', '', '2019-10-02', '2019-10-02'),
(77, '1L2', 'hebdomadaires', 1, '', '', '2019-10-02', '2019-10-02'),
(78, '1L3', 'mensuels', 1, '', '', '2019-10-02', '2019-10-02'),
(79, '1L4', 'autres', 1, '', '', '2019-10-02', '2019-10-02');

-- --------------------------------------------------------

--
-- Structure de la table `statuts`
--

CREATE TABLE `statuts` (
  `id` int(11) NOT NULL,
  `statut` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `statuts`
--

INSERT INTO `statuts` (`id`, `statut`, `created`, `modified`) VALUES
(1, 'Confidentiel', '2019-09-29', '2019-09-29'),
(2, 'Public', '2019-09-29', '2019-09-29');

-- --------------------------------------------------------

--
-- Structure de la table `travees`
--

CREATE TABLE `travees` (
  `id` int(11) NOT NULL,
  `travee` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `travees`
--

INSERT INTO `travees` (`id`, `travee`, `salle_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `type`, `created`, `modified`) VALUES
(1, 'Courante', '2019-09-29', '2019-09-29'),
(2, 'Intermediaire', '2019-09-29', '2019-09-29'),
(3, 'Historique', '2019-09-29', '2019-09-29');

-- --------------------------------------------------------

--
-- Structure de la table `usergroups`
--

CREATE TABLE `usergroups` (
  `id` int(11) NOT NULL,
  `name` varchar(38) COLLATE utf8_bin NOT NULL,
  `accessLevel` varchar(110) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `usergroups`
--

INSERT INTO `usergroups` (`id`, `name`, `accessLevel`) VALUES
(1, 'Super Administrateur', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111'),
(2, 'Administrateur', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111'),
(3, 'Manager', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111110000000'),
(4, 'Public', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111110000000'),
(5, 'DSI', '11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usergroup_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_bin NOT NULL,
  `username` varchar(45) COLLATE utf8_bin NOT NULL,
  `password` varchar(45) COLLATE utf8_bin NOT NULL,
  `hPassword` varchar(45) COLLATE utf8_bin NOT NULL,
  `token` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `beneficiaire_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `usergroup_id`, `name`, `username`, `password`, `hPassword`, `token`, `email`, `beneficiaire_id`) VALUES
(1, 1, 'Rodrigue MIDEBEL', 'U201901', 'admin123', 'f865b53623b121fd34ee5426c792e5c33af8c227', '13096032c9d5b126e636bc653129fb65c1d9c2dd', 'rodrigue.midbel@gmail.com', NULL),
(2, 1, 'BATORO Babou', 'U201902', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', 'dd117989a4e2c0a5680ef09f3ad055b835fefd68', '', 1),
(3, 5, 'TRAORE Ibrahim', 'U201903', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '0ab29d9302358112264fa323aa3143476bc338bf', '', 2),
(4, 1, 'BOUSSA Tobouré', 'U201904', 'mcrpgjo', '1b2b364d8bc80e692fce8c78f11271e70f7c75f0', '1df52e29ada292060c6b7f7dfb70ca149bbc839e', '', 3),
(5, 1, 'TRAORE Ibrahim', 'U201905', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '0be4599145199337980f6853a51f8af9f217764c', '', 2),
(6, 1, 'BADO Joseph', 'U201906', 'mcrpgjo', '1b2b364d8bc80e692fce8c78f11271e70f7c75f0', '5848c623a7b5fbb824e04d5a751e5234047ce859', '', 4),
(7, 1, 'BOUSSA Tobouré', 'U201907', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', 'f8a409c3c6510fd3cf64f752f9d1fa18b9cfc67b', '', 3),
(8, 1, 'GUIBO Toni', 'U201908', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', 'b6b3ef2bbc718a4b586ff91d9d6f274bafc65ee5', '', 5),
(9, 1, 'NIKIEMA Olga', 'U201909', 'flo21na', 'd905f598de0c5f9ce230e81fd08e20a801ea75fd', '271aff067a5a417d651b7b775722b1340fa6afdb', '', 6),
(10, 1, 'KARAMBIRI N. Haoua', 'U201910', 'KARAMBGEORGIA2019', 'ecef050ed4038486d6aae45570c4e50365116f7b', 'ee9321a780242713b5b0140453b319a7f52daf0e', '', 7),
(11, 1, 'OUEDRAOGO Moussa', 'U201911', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', 'f396d01783cf93d728aab83f8f5d111647856641', '', 8),
(12, 1, 'WOUROUGOU K. Nina', 'U201912', 'KENZA2011', '5294cf7f52382c439e6c62fa4d64e190797090d1', 'fd9bc733a7f3b141848362cef3ca0eb60f925838', '', 9),
(13, 1, 'TIEMTORE Alphonsine', 'U201913', 'TALPHO2015', '321559352151d62986464927e661e4636f236cb9', 'fde7af808c1a6d5c6e3039ebc4020a5d9ffe6b67', '', 10),
(14, 1, 'TRAORE Ibrahim', 'U201914', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', 'ec7061192fe692db30ec12ef9bcf55cf935674c8', '', 2),
(15, 1, 'OUEDRAOGO Moussa', 'U201915', 'Moussa2019', 'f447f92e978e2fb05bc610ae188852777f0ca8e2', '16450919ead9d85f4fde7884a95b52c38cd459c7', '', 8),
(16, 1, 'KONATE Dramane', 'U201916', 'Konate2019', 'c06ba59ff01bb38194c13ddea4410db7a451e7f0', '2bc257439c9f486f5ec7004805311dd177126b02', '', 11),
(17, 1, 'OUEDRAOGO Ousseni', 'U201917', 'DGRP12', '01ce3c174e1624bfde701b0bf0bf6f5395b931df', 'b43f6d4e0b89cd3a6b2b7f78b6f02313500dbc04', '', 12),
(24, 1, 'SAWADOGO Moussa', 'U201920', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '614791bbfb8d147b53186f9ceaa0ab90bc9337f5', 'sawlee11@yahoo.fr', 8),
(23, 1, 'SAWADOGO Moussa', 'U201919', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '42abe751e618e046545598888f36c955f3df0683', '', 8),
(22, 1, 'KONATE Dramane', 'U201918', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '81326d0af0893c4a350bef77797a4f506b1b3a85', 'konadra85@yahoo.fr', 11),
(25, 1, 'BOUSSIM Toboure', 'U201921', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '1a4e285f595d1c7b6cd1838449a005e9a2843f93', '', 17),
(26, 1, 'KARAMBIRI N Aoua', 'U201922', 'MCRPDAD', 'a00fd5df2b5ab23f130148e73a7832dfb57764d6', '82438faacddd6fde730655260d1275220e51f018', 'batoma1234@gmail.com', 18);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beneficiaires`
--
ALTER TABLE `beneficiaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boites`
--
ALTER TABLE `boites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `btranselts`
--
ALTER TABLE `btranselts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `btransferts`
--
ALTER TABLE `btransferts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `descripteurs`
--
ALTER TABLE `descripteurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `directiongens`
--
ALTER TABLE `directiongens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `documentnumeriques`
--
ALTER TABLE `documentnumeriques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emprunts`
--
ALTER TABLE `emprunts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `naturedocs`
--
ALTER TABLE `naturedocs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rayons`
--
ALTER TABLE `rayons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salles`
--
ALTER TABLE `salles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `souseries`
--
ALTER TABLE `souseries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sousouseries`
--
ALTER TABLE `sousouseries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `statuts`
--
ALTER TABLE `statuts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travees`
--
ALTER TABLE `travees`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT pour la table `beneficiaires`
--
ALTER TABLE `beneficiaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `boites`
--
ALTER TABLE `boites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT pour la table `btranselts`
--
ALTER TABLE `btranselts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `btransferts`
--
ALTER TABLE `btransferts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `descripteurs`
--
ALTER TABLE `descripteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT pour la table `directiongens`
--
ALTER TABLE `directiongens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `documentnumeriques`
--
ALTER TABLE `documentnumeriques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=560;
--
-- AUTO_INCREMENT pour la table `emprunts`
--
ALTER TABLE `emprunts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;
--
-- AUTO_INCREMENT pour la table `naturedocs`
--
ALTER TABLE `naturedocs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT pour la table `rayons`
--
ALTER TABLE `rayons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `salles`
--
ALTER TABLE `salles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `souseries`
--
ALTER TABLE `souseries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT pour la table `sousouseries`
--
ALTER TABLE `sousouseries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT pour la table `statuts`
--
ALTER TABLE `statuts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `travees`
--
ALTER TABLE `travees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `usergroups`
--
ALTER TABLE `usergroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
