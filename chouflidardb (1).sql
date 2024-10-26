-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 oct. 2024 à 23:05
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chouflidardb`
--

-- --------------------------------------------------------

--
-- Structure de la table `binome`
--

CREATE TABLE `binome` (
  `cin` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tel` int(8) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `gender` enum('F','M') NOT NULL,
  `description` varchar(500) NOT NULL,
  `pic` text NOT NULL,
  `datepost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `binome`
--

INSERT INTO `binome` (`cin`, `name`, `tel`, `mail`, `gender`, `description`, `pic`, `datepost`) VALUES
(14045820, 'meryem fekih', 93691695, 'meriamfekihsep@gmail.com', 'F', 'non fumeuse ', '', '2024-10-26');

-- --------------------------------------------------------

--
-- Structure de la table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `lng` float NOT NULL,
  `lat` float NOT NULL,
  `surface` float NOT NULL,
  `region` varchar(20) NOT NULL,
  `prix` float NOT NULL,
  `nbchambre` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `datepost` date NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `houses`
--

INSERT INTO `houses` (`id`, `lng`, `lat`, `surface`, `region`, `prix`, `nbchambre`, `pic`, `datepost`, `iduser`, `description`) VALUES
(1, 30.2176, 12.8628, 200, 'hammam sousse', 500, 3, '', '2024-04-10', 14044444, 'meublé'),
(2, 10.9877, 33.8046, 200, 'sahloul', 600, 2, '', '2024-10-26', 14044444, 'haute standing'),
(3, 46.7386, 24.7743, 300, 'cité erriadh', 400, 3, '', '2024-10-26', 14785236, 'chambre a2 et 2 indi');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `cin` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phnumber` int(11) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('F','M') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`cin`, `fname`, `phnumber`, `mail`, `password`, `birthdate`, `gender`) VALUES
(14044444, 'flen lfouleni', 22111333, 'flen_lfoulefni@gmail.com', 'flenlfouleni', '1999-01-04', 'M'),
(14045820, 'meryem fekih', 93691695, 'meriamfekihsep@gmail.com', 'mouma123-', '2003-09-14', 'F'),
(14785236, 'tayssir j', 12457896, 'tayssirjalloul@gmail.com', 'taytay', '2003-09-24', 'F');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `cin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14785237;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
