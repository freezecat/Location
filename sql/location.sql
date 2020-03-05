-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2019 at 04:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `proprietaire` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mise_en_ligne` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `image`, `author`, `link`, `description`, `categorie`, `prix`, `proprietaire`, `mise_en_ligne`) VALUES
(1, 'Sherlock Holmes', 'livres.jpg', 'Pexels', 'https://pixabay.com/fr/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1283865', 'Personnage de fiction ,jouant le rôle de détective privé et doté d\'une mémoire remarquable.\r\nIl est accompagné du Docteur Watson.', 'livre', 5, '', '2019-09-10 00:00:00'),
(2, 'Le loup de Wall Street', 'livres.jpg', 'Pexels', 'https://pixabay.com/fr/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1283865', 'Inspiré d\'une histoire réelle,ce livre raconte comment un courtier en bourse , et parvenu à la gloire et à la fortune et la malversation.', 'livre', 5, '', '2019-10-16 00:00:00'),
(3, 'Piano Yamaha occasion', 'cello.jpg', 'PIRO4D', 'https://pixabay.com/fr/users/PIRO4D-2707530/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2830670', 'Piano en parfait état , livré avec casque fermée et une banquette.', 'instrument', 30, '', '2019-09-01 00:00:00'),
(4, 'Guitare classique', 'cello.jpg', 'PIRO4D', 'https://pixabay.com/fr/users/PIRO4D-2707530/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2830670', 'Guitare Cuenca ,qualité de fabrication exceptionnelle tant esthétique que sonore.\r\n', 'instrument', 40, '', '2019-08-12 00:00:00'),
(5, 'Le silence des agneaux', 'dvd.png', 'Clker-Free-Vector-Images', 'https://pixabay.com/fr/users/Clker-Free-Vector-Images-3736/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=27792', 'Thriller policier américain mettant en scène un personnage fictif Hannibal Lecter,emprisonné pour avoir pratiqué le cannibalisme.', 'film', 5, '', '2019-08-06 00:00:00'),
(6, 'Minority report', 'dvd.png', 'Clker-Free-Vector-Images', 'https://pixabay.com/fr/users/Clker-Free-Vector-Images-3736/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=27792', 'Film de fiction réalisé par Steven Spielberg.Nous sommes en 2054, tous les criminels ont été arreté pour des crimes qu\'ils vont commettre ,mais qu\'ils n\'ont pas encore commis grâce à une technologie de prévention.', 'film', 5, '', '2019-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(100) NOT NULL,
  `pays` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `password`, `adresse`, `ville`, `zip`, `pays`) VALUES
(2, 'S', 'S', 'S@gmail.com', '02aa629c8b16cd17a44f3a0efec2feed43937642', '8 Rue Toto', 'Paris', 78947, 'France');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
