-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 16 fév. 2020 à 20:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reservationsalles`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `tempsegonde` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `titre`, `description`, `debut`, `fin`, `id_utilisateur`, `tempsegonde`) VALUES
(37, 'titre', 'description', '2020-02-13 10:00:00', '2020-02-13 11:00:00', 19, 1581552000),
(36, 'titre', 'description', '2020-02-11 17:00:00', '2020-02-11 18:00:00', 19, 1581379200),
(35, 'titre', 'description', '2020-02-11 09:00:00', '2020-02-11 10:00:00', 19, 1581379200),
(34, 'mama', 'mama', '2020-02-05 15:00:00', '2020-02-05 16:00:00', 19, 1580860800),
(33, 'tit', 'DSSF', '2020-02-05 10:00:00', '2020-02-05 11:00:00', 19, 1580860800),
(31, 'titre', 'description', '2020-02-04 11:00:00', '2020-02-04 12:00:00', 19, 1580774400),
(32, 'vivi', 'dodo', '2020-02-06 11:00:00', '2020-02-06 12:00:00', 19, 1580947200),
(38, 'bobo', 'ption', '2020-02-13 12:00:00', '2020-02-13 13:00:00', 19, 1581552000),
(39, 'titi', 'ion', '2020-02-14 13:00:00', '2020-02-14 14:00:00', 19, 1581638400),
(40, 'roro', 'ed', '2020-02-14 09:00:00', '2020-02-14 10:00:00', 19, 1581638400),
(41, 'titre', 'description', '2020-02-17 10:00:00', '2020-02-17 13:00:00', 19, 1581897600),
(42, 'titre', 'description', '2020-02-17 16:00:00', '2020-02-17 17:00:00', 19, 1581897600),
(43, 'foot', 'pot', '2020-02-18 11:00:00', '2020-02-18 12:00:00', 19, 1581984000),
(44, 'gui', 'mauvais', '2020-02-19 10:00:00', '2020-02-19 11:00:00', 19, 1582070400),
(45, 'anniversaire', 'blabla', '2020-02-19 17:00:00', '2020-02-19 18:00:00', 20, 1582070400),
(46, 'titre', 'description', '2020-02-21 09:00:00', '2020-02-21 10:00:00', 21, 1582243200);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(1, 'olive', '$2y$12$IvBkYsl7CJ.ay1ExCfRFvuEqqk0KpKaaJRpOeoKsZa/sqi7MeGQqy'),
(21, 'logo', '$2y$12$9C5Z.86lmankaMleSlhbs.G1vrJ0jVEXtF9JlpxgSTlWMsqWadD6W'),
(20, 'eric', '$2y$12$KQTS5Qib.vLF5s3O2QprMO8avc/pOwvrrEeSqnF1nesjpjSUbXNKO'),
(19, 'toto ', '$2y$12$ax4FbsgDkFE36wkXe61eZeOdf/VkEjiE5FJW8xjRQGFQ8blZqQGOu'),
(18, 'olivier', '$2y$12$kcE4D8Yn3g9Lq8iMW7x0TOZQLiz8RFrcM8qQnP4pqxHvHs2h0DNwK'),
(17, 'mama', '$2y$12$fwsjlKlqGznM/lmqVwJbDuP0Tofov1/ujKjhPFE0L1.xdW.f6/CIy'),
(15, 'riri', '$2y$12$z48G1X5oi/dnZR7PaXHVJe79nf/YRPgoTwQfNq5EtZf0ufrmTojs2'),
(16, 'coco', '$2y$12$vfJg2L85q70XEtQZJm538eLKEKq3uc5V2DoS5bnolmidiKAreJ7cK'),
(13, 'momo', '$2y$12$yuSaIVtNDDoZ6iCsCONdTejdt7eVygBXjO9pu8rPvRBmfOsJBpfk6'),
(11, 'titi', '$2y$12$QZU263T78.BF.Yj6pWi5TukU9QPC2rjU8TPKc0NOze5.e3s0WLJ0i'),
(12, 'remi', '$2y$12$Qu1iAe2lATcQzaX3MZZth.XjJsDePJ/7K1v2pTorq64Ic5XgI3Nz2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
