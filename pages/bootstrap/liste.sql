-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 jan. 2021 à 17:25
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `liste`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `mail` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `formation` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`mail`, `nom`, `prenom`, `naissance`, `sexe`, `formation`) VALUES
('bamd@gmail.com', 'Bamouni', 'Alexia', '2020-12-29', 'Femme', 'DEV'),
('celina@gmial.com', 'celil', 'cecila', '2020-12-31', 'Femme', 'REF'),
('decfjdi@gmial.com', 'zou', 'feli', '2021-01-05', '', 'Ref Dig'),
('defgh@gmial.com', 'ba', 'madou', '2020-12-29', 'Homme', 'REF'),
('dsfqfq@jfsfbs.sidfhsf', 'blab', 'bla', '2021-01-06', 'Femme', 'Référencement Digital'),
('ghjiuk', 'hjlmol', 'ghjiol', '2021-01-04', 'Homme', 'DEV'),
('nassm45@gmail.com', 'nassa', 'martin', '2021-02-02', 'Femme', 'DEV'),
('nom@gmail.com', 'nom', 'prenom', '2021-01-12', 'Femme', 'Dev Web'),
('ssdfgtf@gmail.com', 'zoum', 'prenom', '2020-12-30', '', 'Dev Web');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
