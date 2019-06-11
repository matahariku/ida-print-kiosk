-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 11 juin 2019 à 23:36
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.3.6-1+0~20190531112546.39+jessie~1.gbp6131b7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ida`
--

-- --------------------------------------------------------

--
-- Structure de la table `page_log`
--

CREATE TABLE `page_log` (
  `printer` varchar(64) NOT NULL,
  `user` varchar(32) NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `date_time` date NOT NULL,
  `page_number` int(11) NOT NULL,
  `num_copies` int(11) NOT NULL,
  `job_billing` varchar(32) NOT NULL,
  `job_originating_hostname` varchar(64) NOT NULL,
  `job_name` varchar(64) NOT NULL,
  `media` varchar(32) NOT NULL,
  `sides` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
