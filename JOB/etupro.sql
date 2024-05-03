-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mai 2024 à 21:54
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
-- Base de données : `etupro`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etu` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `school_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etu`, `firstname`, `name`, `email`, `school_level`) VALUES
(1, 'Saine', 'tarik', 'tarik@gmail.com', '2bac'),
(2, 'Saind', 'blouli', 'blouli@gmail.com', '2bac'),
(3, 'Mohamed', 'Idattaleb', 'idattaleb@gmail.com', '1bac'),
(4, 'Ismail', 'Ouabderrazak', 'Ismail@gmail.com', '2bac'),
(5, 'Mohamed', 'Mabdoul', 'Mabdoul@gmail.com', '1bac'),
(6, 'mjid', 'Moumni', 'mjid@gmail.com', '2bac'),
(7, 'Sami', 'jaidi', 'jaidi@gmail.com', '2bac'),
(8, 'khalid', 'john', 'john@gmail.com', '2bac'),
(9, 'amin', 'dada', 'dada@gmail.com', '2bac'),
(10, 'rihana', 'moka', 'moka@gmail.com', '2bac'),
(11, 'jihan', 'farouki', 'farouki@gmail.com', '2bac'),
(14, 'laila', 'hamaid', 'laila@gmail.com', '2bac'),
(15, 'ross', 'geller', 'geller@gmail.com', '1bac'),
(16, 'dadar', 'moji', 'moji@gmail.com', '2bac');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
