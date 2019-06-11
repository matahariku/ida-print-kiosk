-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 11 juin 2019 à 23:35
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
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `row_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `id_user` int(4) DEFAULT NULL,
  `C_N` varchar(1) DEFAULT NULL,
  `Quantite_copier` int(3) DEFAULT NULL,
  `Quantite_actuel` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`row_id`, `date`, `id_user`, `C_N`, `Quantite_copier`, `Quantite_actuel`) VALUES
(1, '2019-05-01', 1, 'C', 10, 90),
(2, '2019-05-02', 1, 'N', 20, 70),
(3, '2019-05-03', 1, 'C', 15, 55),
(4, '2019-05-04', 1, 'N', 5, 40),
(6, '2019-05-05', 2, 'C', 10, 90),
(7, '2019-05-06', 2, 'C', 20, 70),
(8, '2019-05-07', 2, 'N', 5, 65),
(9, '2019-05-08', 2, 'C', 5, 60),
(10, '2019-05-08', 2, 'N', 30, 30),
(11, '2019-05-10', 2, 'C', 20, 10),
(12, '2019-05-09', 3, 'N', 30, 70),
(13, '2019-05-31', 3, 'C', 25, 45),
(14, '2019-05-13', 4, 'C', 15, 85),
(15, '2019-05-09', 4, 'N', 25, 60),
(16, '2019-05-30', 4, 'C', 35, 25),
(17, '2019-05-31', 4, 'C', 5, 20),
(18, '2019-05-24', 8, 'N', 10, 90),
(19, '2019-05-25', 3, 'N', 30, 15),
(20, '2019-05-27', 5, 'N', 20, 80),
(21, '2019-05-31', 6, 'C', 15, 85),
(22, '2019-05-22', 7, 'N', 10, 90),
(23, '2019-05-17', 6, 'C', 30, 70),
(24, '2019-05-07', 8, 'N', 10, 80),
(25, '2019-05-06', 6, 'C', 20, 65),
(26, '2019-05-06', 5, 'N', 30, 20),
(27, '2019-05-06', 8, 'N', 10, 60);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`row_id`),
  ADD KEY `FK_historique_id_user` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `row_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `FK_historique_id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
