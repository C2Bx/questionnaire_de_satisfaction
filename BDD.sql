-- phpMyAdmin SQL Dump
-- version 5.2.1
-- Hôte : rds.relance.nc:3306
-- Version du serveur : 8.0.36
-- Version de PHP : 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Création de la base de données
CREATE DATABASE IF NOT EXISTS `satisfaction` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `satisfaction`;

-- Structure de la table `reponses`
CREATE TABLE `reponses` (
  `id` int UNSIGNED NOT NULL,
  `satisfaction` varchar(50) NOT NULL,
  `organisation` varchar(50) NOT NULL,
  `suggestions` text NOT NULL,
  `recommendation` varchar(10) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Index pour la table `reponses`
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT pour la table `reponses`
ALTER TABLE `reponses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

COMMIT;
