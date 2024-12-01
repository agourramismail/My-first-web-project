-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 01 déc. 2024 à 15:51
-- Version du serveur : 5.7.24
-- Version de PHP : 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boottuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `pwd`, `created_at`) VALUES
(1, 'simo', 'pinitonft60@gmail.com', '$2y$10$dCgR12pe53yr7ZvTiuFvqOdLW9N.PI2imcLBtFRxnwZLwEDTQNfey', '2024-11-28 22:55:51'),
(2, 'ismail', 'pinitosocial60@gmail.com', '$2y$10$3XLGxqQY8I.0TCH7IyEY5eY5IRaweqp6ItttveVR3kHy8ztEYt8lO', '2024-11-28 22:58:27'),
(3, 'younes', 'younesagourram12@gmail.com', '$2y$10$Kr88PlnCyMUDYMnII73Zru3HJFxFD.poBDmKUtkAvEwaxPBGzXts6', '2024-11-28 23:04:26'),
(4, 'younesgg', 'younesagourram13@gmail.com', '$2y$10$7mkykq6doSRbTCtDgXuDTOC2OK0sxYesYb2euCKe3ZRSdWqOeEndu', '2024-11-28 23:05:11'),
(5, 'ana', 'dqdqdqljdjqidj@gmail.com', '$2y$10$cI5eQT8ouLQx6wC/jlCDwuLBsZp3pa7xO7xCLWL4CoZ1z4eO9QUky', '2024-12-01 15:41:46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
