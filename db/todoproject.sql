-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 sep. 2022 à 22:22
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todoproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `todolists`
--

CREATE TABLE `todolists` (
  `id` int(11) NOT NULL,
  `task` text DEFAULT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated-at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `todolists`
--

INSERT INTO `todolists` (`id`, `task`, `created-at`, `updated-at`) VALUES
(1, 'kiujikguji', '2022-09-14 13:54:18', '2022-09-20 13:54:18'),
(14, 'wdfdsfsd', '2022-09-29 18:43:57', '2022-09-29 18:43:57'),
(15, 'dfdsfdsfsd', '2022-09-29 18:43:59', '2022-09-29 18:43:59'),
(16, 'dfqsfqdf', '2022-09-29 18:44:01', '2022-09-29 18:44:01'),
(17, 'dfqsfqsf', '2022-09-29 18:44:03', '2022-09-29 18:44:03'),
(18, 'dfsfqtqztqzrt', '2022-09-29 18:44:05', '2022-09-29 18:44:05');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `todolists`
--
ALTER TABLE `todolists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `todolists`
--
ALTER TABLE `todolists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
