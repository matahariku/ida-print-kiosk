-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 08 mai 2019 à 16:19
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.3.5-1+0~20190503094000.38+jessie~1.gbp60a41b

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
  `description` varchar(20) DEFAULT NULL,
  `unites` int(5) DEFAULT NULL,
  `variation` varchar(5) DEFAULT NULL,
  `solde` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`row_id`, `date`, `id_user`, `description`, `unites`, `variation`, `solde`) VALUES
(1, '2019-05-01', 1, 'Credit', 100, '+10', '10'),
(2, '2019-05-02', 1, 'Debit', 10, '-1', '9'),
(3, '2019-05-03', 1, 'Debit', 50, '-5', '4'),
(4, '2019-05-04', 1, 'Debit', 30, '-3', '1'),
(6, '2019-05-05', 2, 'credit', 100, '+10', '10'),
(7, '2019-05-06', 2, 'debit', 40, '-4', '6'),
(8, '2019-05-07', 2, 'debit', 30, '-3', '3'),
(9, '2019-05-08', 3, 'credit', 50, '+5', '5'),
(10, '2019-05-08', 3, 'debit', 10, '-1', '4'),
(11, '2019-05-10', 3, 'debit', 5, '-0,5', '4,5');

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
  MODIFY `row_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
