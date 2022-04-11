-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 11 avr. 2022 à 10:41
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projetweb1A2`
--

-- --------------------------------------------------------

--
-- Structure de la table `iw_user`
--

CREATE TABLE `iw_user` (
  `id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `birthday` date NOT NULL,
  `pseudo` varchar(32) NOT NULL,
  `date_inserted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `token` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `iw_user`
--

INSERT INTO `iw_user` (`id`, `email`, `firstname`, `lastname`, `pwd`, `country`, `status`, `birthday`, `pseudo`, `date_inserted`, `date_updated`, `token`) VALUES
(6, 'y.skrzypczyk@gmail.com', 'Yves', 'YVES', '$2y$10$H8lj7exkWdfwtAgZtLHDae0gZSgje9KtXlQirS4StOXDIzTVpnhbS', 'fr', 0, '1986-11-29', 'Prof Php', '2022-02-21 17:26:11', '2022-04-11 08:40:04', '297d259dbbbda55ab0abb60249a04f03'),
(7, 'y.skrfdfdzypczyk@gmail.com', 'Test', 'TEST', '$2y$10$JDdoNkbTGBP73DFySoJoLOGy5c7CD1ZCYO7lUD7NFL6Th6nZhdZmy', 'fr', 0, '2000-12-01', 'Test3232', '2022-04-11 08:25:49', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `iw_user`
--
ALTER TABLE `iw_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `iw_user`
--
ALTER TABLE `iw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
