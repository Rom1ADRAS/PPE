-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 08 Juin 2020 à 20:09
-- Version du serveur :  5.7.11
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `slcompetition1`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `codepostal` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`Id`, `Nom`, `Prenom`, `age`, `email`, `login`, `motdepasse`, `codepostal`, `Pays`) VALUES
(4, 'MAHON', 'Thomasko', 19, 'thomasmahon@gmail.com', 'toto', 'b3c5351c0b856cef6b188b290c7ec940a774dad3', '97450', 'l\'étang');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `Date_Commande` date NOT NULL,
  `Mode_paiement` varchar(255) NOT NULL,
  `Date_echeance_paiement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `Id_piece` int(11) NOT NULL,
  `Nom_piece` varchar(255) NOT NULL,
  `Description_piece` text NOT NULL,
  `Image_pieces` varchar(255) NOT NULL,
  `Prix_piece` float NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pieces`
--

INSERT INTO `pieces` (`Id_piece`, `Nom_piece`, `Description_piece`, `Image_pieces`, `Prix_piece`, `categorie`) VALUES
(1, 'Combiné Seat Cupra', 'Kit combiné fileté Bilstein B14 pour SEAT Ibiza (6L) Cupra R, moteur 1.9 TDI 160cv de Mars 2004 à Février 2008.', '<img src="image/Produit/cupra.jpg" width="50%" >\n', 995.9, 'combine'),
(3, 'Combiné Golf mk4 R32', '\r\nKit combiné fileté Bilstein B16 PSS9 pour VOLKSWAGEN Golf 4 R32 3.2 4 Motion 09/2002-06/2005.\r\n', '<img src="image/Produit/combinégolf4r32.jpg" width="50%" >\n', 1010.82, 'combine'),
(5, 'Ligne Golf 7 R', '\r\nECHAPPEMENT VALVETRONIC\r\nInclus :\r\n- X-Pipe\r\n- Kit Telecommande des Valves.\r\n', '<img src="image/Produit/lignegolf.jpg" width="70%" >\n', 3090, 'ligne'),
(8, 'Échangeur 208 1.6 THP  ', '\r\nIntercooler / échangeur FORGE pour PEUGEOT 208 GTI 1.6 THP 200cv 208cv 08/2012-  , montage en façade.\r\n', '<img src="image/Produit/echangeur208gti.jpg" width="50%" >\n', 846.9, 'echangeur'),
(11, 'Echangeur Subaru STI', '\r\nIntercooler MISHIMOTO en remplacement de l\'origine pour SUBARU IMPREZA STI WRX 2.0 \r\n', '<img src="image/Produit/echangeursubaru.jpg" width="50%" >\n', 684.7, 'echangeur'),
(12, 'Turbo Garrett GT3076R', 'Turbo Garrett GT3076R sur roulements\r\nWastegate externe\r\nFlanges T3 (entrée) et 4 vis ou V-Band (sortie)\r\nRapport A/R de 0.63, 0.82 ou 1.06 au choix\r\n', '<img src="image/Produit/turbovf22.jpg" width="70%" >', 1200, 'turbo'),
(13, 'TURBO TD04', '\r\nTurbo des Subaru WRX STi USDM 06-07\r\nTurbo à Pallier\r\nTurbine P18\r\nPlus grosse Wastegate, permettant de limiter le Boost creep des anciens turbo (VF 34/35/39)\r\nFull Boost vers 3000-3500 tr/min\r\n', '<img src="image/Produit/turbovf.jpg" width="70%" >', 1495, 'turbo'),
(14, 'Ligne Audi RS3', 'DEMI-LIGNE / CAT-BACK Ligne d\'échappement MILLTEK SPORT après catalyseur d\'origine avec ou sans silencieux intermédiaire et avec valves sur silencieux arrière pour Audi RS3 Berline 8V MQB 400cv;', '<img src="image/Produit/ligneaudirs3.jpg" width="70%" >', 2180, 'ligne'),
(15, 'Ligne GOLF 7 GTI', '- Modèle: Golf MK7 GTi (Et Modeles GTi Performance Pack)- Année: 2013 -- Tube: 76.20 mm- Sorties Dual 100mm GT-100\r\n', '<img src="image/Produit/lignegolf.jpg" width="70%" >', 1206, 'ligne'),
(16, 'Turbo GARETT 1.9 TDI', 'Ce turbo est compatible avec les motorisations 1.9 TDI 100 CV et 1.9 TDI 110 CV', '<img src="image/Produit/turbogarettdi.jpg" width="50%" >', 360, 'turbo'),
(17, 'Turbo Garett D\'Origine S3', 'Ce  turbo est compatible avec les motorisations 1.8 TFSI 170 CV, 1.8 TSI 230 CV, 2.0 TSI 210 CV, 2.0 TSI 211 CV, 2.0 TSI 230 CV, 2.0 TSI 280 CV, 2.0 TSI 286 CV et 2.0 TSI 300 CV', '<img src="image/Produit/turbogarettaudis3.jpg" width="50%" >', 990, 'turbo');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_membre`
--

CREATE TABLE `tbl_membre` (
  `id_mbr` int(8) NOT NULL,
  `pseudo_mbr` varchar(255) NOT NULL,
  `nom_mbr` varchar(255) NOT NULL,
  `afficher_mbr` varchar(255) NOT NULL,
  `mdp_mbr` varchar(255) NOT NULL,
  `email_mbr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tbl_membre`
--

INSERT INTO `tbl_membre` (`id_mbr`, `pseudo_mbr`, `nom_mbr`, `afficher_mbr`, `mdp_mbr`, `email_mbr`) VALUES
(2, 'bts', 'Admin@SL-COMPETITION', 'Administrateur', '017fe3a523712ceba7cde169653316e9', 'btssio@lpp.re');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`Id_piece`);

--
-- Index pour la table `tbl_membre`
--
ALTER TABLE `tbl_membre`
  ADD PRIMARY KEY (`id_mbr`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `Id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `tbl_membre`
--
ALTER TABLE `tbl_membre`
  MODIFY `id_mbr` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
