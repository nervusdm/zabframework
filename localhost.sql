-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 19 avr. 2022 à 11:53
-- Version du serveur :  8.0.23
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monprojet`
--
CREATE DATABASE IF NOT EXISTS `monprojet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `monprojet`;

-- --------------------------------------------------------

--
-- Structure de la table `cc_group`
--

CREATE TABLE `cc_group` (
  `ccG_id` int NOT NULL,
  `ccG_nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cc_group`
--

INSERT INTO `cc_group` (`ccG_id`, `ccG_nom`) VALUES
(1, 'Super Administrateur'),
(2, 'Administrateur Global'),
(3, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `cc_intervenant`
--

CREATE TABLE `cc_intervenant` (
  `ccI_id` int NOT NULL,
  `ccI_raison_sociale` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccI_commune` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccI_code_postal` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccI_pays` varchar(21) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccI_adr1` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ccI_statut` int NOT NULL,
  `ccI_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cc_intervenant`
--

INSERT INTO `cc_intervenant` (`ccI_id`, `ccI_raison_sociale`, `ccI_commune`, `ccI_code_postal`, `ccI_pays`, `ccI_adr1`, `ccI_statut`, `ccI_type`) VALUES
(1, 'Centrale', 'Perpignan', '66100', 'France', '4 rue du chasselas', 0, 3),
(2, 'Magasin Test', 'Paris', '', '', '14', 0, 0),
(4, 'Tout le monde', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `cc_utilisateur`
--

CREATE TABLE `cc_utilisateur` (
  `ccU_id` int NOT NULL,
  `ccU_login` varchar(255) NOT NULL,
  `ccU_nom` varchar(255) NOT NULL,
  `ccU_prenom` varchar(255) NOT NULL,
  `ccU_id_intervenant` int NOT NULL,
  `ccU_statut` int NOT NULL,
  `ccU_password` varchar(255) NOT NULL,
  `ccU_group` int NOT NULL,
  `ccU_nom_orthop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cc_utilisateur`
--

INSERT INTO `cc_utilisateur` (`ccU_id`, `ccU_login`, `ccU_nom`, `ccU_prenom`, `ccU_id_intervenant`, `ccU_statut`, `ccU_password`, `ccU_group`, `ccU_nom_orthop`) VALUES
(1, 'zframework', 'ZNom', 'ZPrénom', 1, 0, 'mpA0UHHIcz9Og', 1, 'z'),
(46, 'test@test.fr', 'TestMe', 'TestMe', 1, 0, 'mpcQl0ba4Oz/6', 3, '');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `news_id` int NOT NULL,
  `news_titre` varchar(255) DEFAULT NULL,
  `news_date_debut` date NOT NULL,
  `news_date_fin` date NOT NULL,
  `news_statut` int NOT NULL,
  `news_contenu` text NOT NULL,
  `news_createur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`news_id`, `news_titre`, `news_date_debut`, `news_date_fin`, `news_statut`, `news_contenu`, `news_createur`) VALUES
(1, 'Ma première news', '2022-04-01', '2022-04-30', 0, '<p><strong>Ceci est un exemple &nbsp;2</strong></p>\r\n<p>&nbsp;</p>', ''),
(2, 'Deuxième news', '2022-04-02', '2022-04-29', 0, '<p>Test</p>', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cc_group`
--
ALTER TABLE `cc_group`
  ADD PRIMARY KEY (`ccG_id`);

--
-- Index pour la table `cc_intervenant`
--
ALTER TABLE `cc_intervenant`
  ADD PRIMARY KEY (`ccI_id`),
  ADD KEY `ccI_id` (`ccI_id`);

--
-- Index pour la table `cc_utilisateur`
--
ALTER TABLE `cc_utilisateur`
  ADD PRIMARY KEY (`ccU_id`),
  ADD KEY `ccU_login` (`ccU_login`,`ccU_id_intervenant`),
  ADD KEY `ccU_int_id` (`ccU_id_intervenant`),
  ADD KEY `ccU_statut` (`ccU_statut`),
  ADD KEY `ccU_group` (`ccU_group`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_statut` (`news_statut`),
  ADD KEY `news_statut_2` (`news_statut`),
  ADD KEY `news_date_debut` (`news_date_debut`),
  ADD KEY `news_date_fin` (`news_date_fin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cc_group`
--
ALTER TABLE `cc_group`
  MODIFY `ccG_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cc_intervenant`
--
ALTER TABLE `cc_intervenant`
  MODIFY `ccI_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `cc_utilisateur`
--
ALTER TABLE `cc_utilisateur`
  MODIFY `ccU_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
