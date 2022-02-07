-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 07 fév. 2022 à 17:12
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
  `date_updated` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
