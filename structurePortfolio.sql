-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 05 Novembre 2017 à 18:30
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `prenom`, `password`) VALUES
(5, 'baptiste', '$2y$10$hzhBk0GO6UK/OPJdQrVkZeEuTvumQRL0P2hz3eQ2c15ioMy6vUTBW');

-- --------------------------------------------------------

--
-- Structure de la table `travauxWeb`
--

CREATE TABLE `travauxWeb` (
  `webID` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `pImg` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `chemin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `travauxWeb`
--

INSERT INTO `travauxWeb` (`webID`, `titre`, `pImg`, `overview`, `resume`, `texte`, `chemin`) VALUES
(2, 'coach', 'img/travaux/web/imgGalerie/pImg/coachMobile.png', 'img/travaux/web/imgGalerie/gImg/coachOrdi.png', 'Ce site fut fait comme projet pour simplon. Le but était de créer un site qui pourrait être réellement un site pour un coach sportif.', 'Il est composé de 3 pages, une de présentation des différents produits, une pages pour les différents tarifs, et enfin la page de contact, avec un formulaire, un carte et un agenda intégrer montrant les disponibilité du coach.', 'https://github.com/geasseur/Coach'),
(4, 'Leboncoin', 'img/travaux/web/imgGalerie/pImg/boncoinMobile.png', 'img/travaux/web/imgGalerie/gImg/boncoinOrdi.png', 'Ce site fut fait comme projet pour simplon. Le but était de une copie du site Leboncoin', 'Il est seulement composé de la page de présentation du site', 'https://github.com/geasseur/Leboncoin'),
(5, 'Jeu de mémoire', 'img/travaux/web/imgGalerie/pImg/pjeumemoire.png', 'img/travaux/web/imgGalerie/gImg/gjeumemoire.png', 'Petit jeu de memoire fait en javascript et en DOM.', 'Le jeu a été conçut pour des partie à quinze essais, sans temps impartie, pour trouver sept pairs de couleurs. Le joueur s\'enregistre au début et peut recommencer la partie quand il le veut.', 'https://github.com/geasseur/jeuMemoire'),
(6, 'Calculatrice', 'img/travaux/web/imgGalerie/pImg/pcalculatrice.png', 'img/travaux/web/imgGalerie/gImg/gcalculatrice.png', 'Petite calculatrice réalisé en javascript.', 'Cette calculette est assez rudimentaire, elle ne fait que les opérations basiques. De plus, il faut nécessairement appuyer sur le bouton résultat pour que l\'opération se fasse, le bouton effacer efface le dernier nombre entrée(pas le résultat donné donc) et tout effacer permet de recommencer du début. ', 'https://github.com/geasseur/calculatrice'),
(7, 'Logiciel Chantier', 'img/travaux/web/imgGalerie/pImg/plogicielchantier.png', 'img/travaux/web/imgGalerie/gImg/glogicielchantier.png', 'Logiciel fait pour apprendre le mvc, étant créer pour un logiciel de gestion pour chantier', 'Il fut créer pour créer un logiciel de gestion pour chantier. Il permet de créer des projet de chantier, chacun ayant différentes catégories de travaux, ayant différentes taches chacune.', 'https://github.com/geasseur/Logiciel_chantier'),
(8, 'Liste de vehicule', 'img/travaux/web/imgGalerie/pImg/siteListeVehicule.png', 'img/travaux/web/imgGalerie/gImg/siteListeVehicule.png', 'C\'est un petit site simple où j\'ai crée une liste de véhicule en php orienté objet', 'C\'est un site simple qui m\'a servis d\'exercice pour apprendre l\'orienté objet en php, il permet de créer trois type de véhicule, voiture, moto et camion, on peut les modifier ou les supprimer, chacun ayant un attribut différents des autres.', 'https://github.com/geasseur/listeVehicule'),
(9, 'Quizz Japonais', 'img/travaux/web/imgGalerie/pImg/overviewQuizz.png', 'img/travaux/web/imgGalerie/gImg/overviewQuizz.png', 'Petit quizz fait pour m\'exercé au Js en orienté objet', 'Ce petit quizz (qui n\'est pas encore terminé, visuellement et sur le contenu, mais terminé sur le code lui même) en japonais est fait en orienté objet en JS, afin d\'apprendre à mieux l\'utilisé, il n\'est pas complétement responsive et n\'est correct qu\'en format mobile. Pour le contenu, vu qu\'il est censé permettre d\'apprendre les hiragana, il n\'est pas encore complet vu qu\'il n\'y en a que treize, stocké sur un fichier json', 'https://github.com/geasseur/quizz');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `travauxWeb`
--
ALTER TABLE `travauxWeb`
  ADD PRIMARY KEY (`webID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `travauxWeb`
--
ALTER TABLE `travauxWeb`
  MODIFY `webID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
