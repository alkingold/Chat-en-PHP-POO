-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 13 Mars 2017 à 22:54
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre1` (
  `id` int(3) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre1` (`id`, `pseudo`, `mot_de_passe`) VALUES
(1, 'test1', 'test1'),
(2, 'pseudo', 'motdepasse'),
(3, 'tratata', 'cococo'),
(4, 'nouveau', 'nouveau'),
(5, 'nouveaumembre', 'nouveau'),
(6, 'nouveautest', 'nouveau'),
(7, 'alexandra', 'thalia'),
(8, 'thalia', 'chloe'),
(9, 'inscription_1', 'inscriptio');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(3) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateAjout` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `idMembre`, `titre`, `message`, `dateAjout`) VALUES
(15, 1, 'c''est un message test', 'Et voici le premier message de mon chat en PHP POO', '2017-03-13 14:19:17'),
(16, 2, 'Bonjour, félicitations !', 'Oui, félicitation pour ton exercice. Bravo !', '2017-03-13 14:22:53'),
(17, 3, 'Mon titre test', '<strong>Et on teste la sécurité</strong>', '2017-03-13 14:24:23'),
(18, 4, 'Ok', 'Ça a l''air de fonctionner', '2017-03-13 14:25:26'),
(19, 9, 'Inscription ', 'Je viens de m''inscrire <br>\r\nHourra !', '2017-03-13 14:52:53');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMembre` (`idMembre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre1`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;