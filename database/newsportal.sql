-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 29 avr. 2023 à 09:28
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newsportal`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `AdminUserName` (`AdminUserName`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `AdminUserName`, `AdminPassword`, `AdminEmailId`, `userType`, `CreationDate`, `UpdationDate`) VALUES
(1, 'admin', '88a49c3695747772777310af4038d420', 'VAWE.infospace@gmail.com', 1, '2022-12-12 18:30:00', '2023-04-29 08:02:09'),
(3, 'Vawe237', 'b7a9232a24773b4d679cd72542bc205f', 'vwomenempowerment@gmail.com', 0, '2023-04-29 07:52:05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
CREATE TABLE IF NOT EXISTS `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(1, 'ENTERTAINMENT', 'ENTERTAINMENT', '2022-12-13 17:26:13', '2023-04-29 07:56:18', 0),
(2, 'TECHNOLOGIE', 'TECHNOLOGIE', '2022-12-13 17:36:33', '2023-04-29 07:55:59', 1),
(3, 'ACTUALITE', 'ACTUALITE', '2022-12-13 17:36:50', '2023-04-29 07:57:19', 1),
(4, 'POLITIQUE', 'POLITIQUE', '2022-12-13 17:37:23', '2023-04-29 07:56:41', 1),
(5, 'SPORTS', 'SPORTS', '2022-12-13 17:37:48', NULL, 1),
(6, 'AUTRES', 'AUTRES', '2022-12-16 11:32:39', '2023-04-29 08:00:09', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tblcomments`
--

DROP TABLE IF EXISTS `tblcomments`;
CREATE TABLE IF NOT EXISTS `tblcomments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postId` int(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `postId` (`postId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tblpages`
--

DROP TABLE IF EXISTS `tblpages`;
CREATE TABLE IF NOT EXISTS `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `Description` longtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', 'INFOS SUR NOUS', 'VaWe', '2021-06-29 18:30:00', '2023-04-29 08:05:08'),
(2, 'contactus', 'Contact Details', '<p><br></p><p><b>Address :&nbsp; </b>Maharashtra</p><p><b>Phone Number : </b>+91 -9090909090</p><p><b>Email -id : </b>WAVE.infospace@gmail.com</p>', '2021-06-29 18:30:00', '2022-12-13 16:50:24');

-- --------------------------------------------------------

--
-- Structure de la table `tblposts`
--

DROP TABLE IF EXISTS `tblposts`;
CREATE TABLE IF NOT EXISTS `tblposts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PostTitle` longtext,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` varchar(55000) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int(11) DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `postcatid` (`CategoryId`),
  KEY `postsucatid` (`SubCategoryId`),
  KEY `subadmin` (`postedBy`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`, `viewCounter`, `postedBy`, `lastUpdatedBy`) VALUES
(4, 'Lionel Messi to Kylian Mbappe: Race to FIFA World Cup 2022 Golden Boot, in PICS', 5, 5, '<p>The FIFA World Cup 2022 final are set with Lionel Messis Argentina set to take on Kylian Mbappe France at the Lusail Stadium on Sunday (December 18). Messi and Mbappe, teammates at PSG, are also in the race to win the FIFA World Cup 2022 Golden Boot award as well. In these collection of pictures, we take a look at players in race to win Golden Boot award this year.</p><p>The FIFA World Cup 2022 final are set with Lionel Messis Argentina set to take on Kylian Mbappe France at the Lusail Stadium on Sunday (December 18). Messi and Mbappe, teammates at PSG, are also in the race to win the FIFA World Cup 2022 Golden Boot award as well. In these collection of pictures, we take a look at players in race to win Golden Boot award this year.</p><p>The FIFA World Cup 2022 final are set with Lionel Messis Argentina set to take on Kylian Mbappe France at the Lusail Stadium on Sunday (December 18). Messi and Mbappe, teammates at PSG, are also in the race to win the FIFA World Cup 2022 Golden Boot award as well. In these collection of pictures, we take a look at players in race to win Golden Boot award this year.</p><p>The FIFA World Cup 2022 final are set with Lionel Messis Argentina set to take on Kylian Mbappe France at the Lusail Stadium on Sunday (December 18). Messi and Mbappe, teammates at PSG, are also in the race to win the FIFA World Cup 2022 Golden Boot award as well. In these collection of pictures, we take a look at players in race to win Golden Boot award this year.</p><p><br></p>', '2022-12-15 18:22:51', '2023-04-29 08:03:17', 0, 'Lionel-Messi-to-Kylian-Mbappe:-Race-to-FIFA-World-Cup-2022-Golden-Boot,-in-PICS', 'cefb64713b6ae016047d3bcd8a38e1cc.jpg', 2, 'admin', NULL),
(9, 'Notre belle equipe', 3, 8, 'la grande famille Vawe', '2023-04-29 08:39:14', NULL, 1, 'Notre-belle-equipe', '00fb58cb9513ecc6460ef5bf4eff9727.png', NULL, 'vawe237', NULL),
(10, 'test1', 2, 11, 'test1........', '2023-04-29 08:42:57', NULL, 1, 'test1', 'bcc5667786d6bd1b25e7c4d8a42e8550.jpg', NULL, 'vawe237', NULL),
(11, 'test2', 4, 9, 'test2', '2023-04-29 08:43:32', NULL, 1, 'test2', 'afadf1ddb224aef8a213e08e5cd728c0.jpg', NULL, 'vawe237', NULL),
(12, 'test3', 5, 5, 'test3', '2023-04-29 08:44:01', NULL, 1, 'test3', '43bea0127ffe6d2739d712039c9bcab5.jpg', NULL, 'vawe237', NULL),
(13, 'test4', 5, 4, 'test4', '2023-04-29 08:44:34', '2023-04-29 09:04:03', 1, 'test4', 'fcfe971969c03dc2d5f143ba36874730.jpg', 1, 'vawe237', NULL),
(14, 'test5', 6, 10, 'test5', '2023-04-29 08:45:03', NULL, 1, 'test5', '42d38fdff39b0a3a1fa757ed574b2f68.jpg', NULL, 'vawe237', NULL),
(15, 'test6', 2, 11, 'test6', '2023-04-29 08:45:31', NULL, 1, 'test6', '9add5f4446bcaaed1f9e62ea6169b40a.jpg', NULL, 'vawe237', NULL),
(16, 'test7', 3, 8, 'tzest7', '2023-04-29 08:45:57', NULL, 1, 'test7', '2daf67952bdf6f4da479079e12d12812.jpg', NULL, 'vawe237', NULL),
(17, 'test8', 4, 9, 'test8', '2023-04-29 08:46:21', NULL, 1, 'test8', 'c622455b6c627a79dc65e44222cd60cd.jpg', NULL, 'vawe237', NULL),
(18, 'test9', 4, 9, 'test9', '2023-04-29 08:46:52', NULL, 1, 'test9', '115d9b3ebcc7db4830cbbc7afc211317.jpg', NULL, 'vawe237', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblsubcategory`
--

DROP TABLE IF EXISTS `tblsubcategory`;
CREATE TABLE IF NOT EXISTS `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryId` int(11) DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int(1) DEFAULT NULL,
  PRIMARY KEY (`SubCategoryId`),
  KEY `catid` (`CategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(4, 5, 'CRICKET', 'CRICKET', '2022-12-13 17:39:12', NULL, 1),
(5, 5, 'FOOTBALL', 'FOOTBALL', '2022-12-13 17:39:33', NULL, 1),
(6, 5, 'TENNIS', 'TENNIS', '2022-12-13 17:39:53', NULL, 1),
(7, 5, 'WWE', 'WWE', '2022-12-13 17:40:17', NULL, 1),
(8, 3, 'Culture', 'Culture', '2022-12-15 18:10:39', NULL, 1),
(9, 4, 'Economy', 'Economy', '2022-12-15 18:15:11', NULL, 1),
(10, 6, 'HINDUISM', 'HINDUISM', '2022-12-16 11:32:56', NULL, 1),
(11, 2, 'SOCIAL MEDIA', 'SOCIAL MEDIA', '2022-12-16 11:33:27', NULL, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD CONSTRAINT `pid` FOREIGN KEY (`postId`) REFERENCES `tblposts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tblposts`
--
ALTER TABLE `tblposts`
  ADD CONSTRAINT `postcatid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `postsucatid` FOREIGN KEY (`SubCategoryId`) REFERENCES `tblsubcategory` (`SubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subadmin` FOREIGN KEY (`postedBy`) REFERENCES `tbladmin` (`AdminUserName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD CONSTRAINT `catid` FOREIGN KEY (`CategoryId`) REFERENCES `tblcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
