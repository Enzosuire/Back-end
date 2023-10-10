-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 10 oct. 2023 à 16:33
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbbootic`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_categorie`
--

CREATE TABLE `t_categorie` (
  `id_categorie` int(3) NOT NULL COMMENT 'Ce champ correspond au\r\nnuméro de catégorie qui sera\r\nauto-généré et incrémenté',
  `Nom_categorie` varchar(30) NOT NULL COMMENT 'Ce champ correspond au nom\r\nde la catégorie'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_categorie`
--

INSERT INTO `t_categorie` (`id_categorie`, `Nom_categorie`) VALUES
(1, 'sacs'),
(2, 't_shirt'),
(3, 'sweats'),
(4, 'casquettes');

-- --------------------------------------------------------

--
-- Structure de la table `t_commande`
--

CREATE TABLE `t_commande` (
  `id_commande` int(3) NOT NULL COMMENT 'Ce champ\r\ncorrespond au\r\nnuméro de\r\ncommande qui\r\nsera auto-généré\r\net incrémenté.',
  `id_membre` int(3) NOT NULL COMMENT 'Ce champ\r\ncorrespond à\r\nl''id_membre qui\r\naura commandé.',
  `montant` int(3) NOT NULL COMMENT 'Ce champ\r\ncorrespond au\r\nmontant total (en\r\neuros) de la\r\ncommande.',
  `date_enregistrement` datetime NOT NULL COMMENT 'Ce champ\r\ncorrespond à la\r\ndate et heure\r\nd''enregistrement\r\nde la commande.',
  `etat` enum('''en cours de traitement''','''envoyée''','''livré''','') NOT NULL DEFAULT '''en cours de traitement''' COMMENT 'Ce champ\r\ncorrespond a la\r\ndescription du\r\nproduit.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_details_commande`
--

CREATE TABLE `t_details_commande` (
  `id_commande` int(3) NOT NULL,
  `id_produit` int(3) NOT NULL,
  `quantite` int(3) NOT NULL COMMENT 'Ce champ correspond à la\r\nquantité demandée par produit.',
  `prix` int(3) NOT NULL COMMENT 'Ce champ correspond au prix du\r\nproduit.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_membre`
--

CREATE TABLE `t_membre` (
  `id_membre` int(3) NOT NULL COMMENT 'Ce champ correspond au\r\nnuméro du membre qui sera\r\nauto-généré et incrémenté',
  `pseudo` varchar(20) NOT NULL COMMENT 'Ce champ correspond au\r\npseudo du membre. Il sera\r\nunique et par conséquent 2\r\nmembres ne pourront pas avoir\r\nle même pseudo.',
  `mdp` varchar(32) NOT NULL COMMENT 'Ce champ correspond au mot\r\nde passe du membre. La taille\r\nfait 32 caractères car il sera\r\ncrypté par la suite.',
  `nom` varchar(20) NOT NULL COMMENT 'Ce champ correspond au nom\r\nde famille du membre.',
  `prenom` varchar(20) NOT NULL COMMENT 'Ce champ correspond au\r\nprénom du membre.',
  `email` varchar(50) NOT NULL COMMENT 'Ce champ correspond à l''email.\r\ndu membre.',
  `civilite` enum('''m''','''f''') NOT NULL COMMENT 'Ce champ correspond à la\r\ncivilité du membre. Le membre\r\nsera soit Homme (M) soit\r\nFemme (F).',
  `ville` varchar(20) NOT NULL COMMENT 'Ce champ correspond à la ville\r\ndu membre.',
  `cp` int(5) UNSIGNED ZEROFILL NOT NULL COMMENT 'Ce champ correspond au code\r\npostal du membre.',
  `adresse` varchar(50) NOT NULL COMMENT 'Ce champ correspond à\r\nl''adresse du membre.',
  `statut` int(1) NOT NULL DEFAULT 0 COMMENT 'Ce champ correspond au statut\r\ndu membre. Par défaut il sera à\r\nzéro (ce qui correspondra à 1\r\nmembre). Nous pourrons\r\nmettre le chiffre 1 pour donner\r\ndes droits d''administration à\r\ncertains membres (1 admin est\r\naussi 1 membre).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t_produit`
--

CREATE TABLE `t_produit` (
  `id_produit` int(3) NOT NULL COMMENT 'Ce champ correspond au\r\nnuméro du produit qui sera\r\nauto-généré et incrémenté.',
  `reference` varchar(20) NOT NULL COMMENT 'Ce champ correspond à la\r\nréférence du produit. Il sera\r\nunique et par conséquent 2\r\nproduits ne pourront pas avoir\r\nla même référence.',
  `id_categorie` int(3) NOT NULL COMMENT 'Ce champ correspond a la\r\ncatégorie du produit.',
  `titre` varchar(100) NOT NULL COMMENT 'Ce champ correspond au titre\r\ndu produit.',
  `description` text NOT NULL COMMENT 'Ce champ correspond a la\r\ndescription du produit.',
  `couleur` varchar(20) NOT NULL COMMENT 'Ce champ correspond à la\r\ncouleur du produit.',
  `taille` varchar(5) NOT NULL COMMENT 'Ce champ correspond à la taille\r\ndu produit.',
  `public` enum('''f''','''m''','''mixte''') NOT NULL COMMENT 'Ce champ permettra de\r\ndéterminer à quel public est\r\ndestiné ce produit. Les choix\r\npossibles sont Homme (M), soit\r\nFemme (F) ou mixte (mixte).',
  `photo` varchar(250) NOT NULL COMMENT 'Ce champ correspond au\r\nchemin de la photo qui sera\r\nenregistré pour représenter le\r\nproduit. Ce ne sera pas le fichier\r\nimage directement mais bien\r\nson chemin qui sera enregistré.',
  `prix` int(3) NOT NULL COMMENT 'Ce champ correspond au prix du\r\nproduit.',
  `stock` int(3) NOT NULL COMMENT 'Ce champ correspond au stock\r\nrestant du produit.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `t_produit`
--

INSERT INTO `t_produit` (`id_produit`, `reference`, `id_categorie`, `titre`, `description`, `couleur`, `taille`, `public`, `photo`, `prix`, `stock`) VALUES
(1, '11-d-23', 2, 'T-shirt Col rond', 'Tee-shirt en coton flammé liseré contrastant', 'bleu', 'M', '\'f\'', 't_shirt/ts_azur.webp', 20, 53),
(2, '66-f-15', 2, 'Tshirt Col rond', 'c\'est vraiment un super tshirt en soirée ,\r\n\r\n\r\n', 'rouge', 'L', '\'m\'', 't_shirt/ts_rouge.webp', 15, 230),
(3, '11-c-23', 4, 'Casquettes', '100 % polyester', 'azur', 'TU', '\'mixte\'', 'casquettes/casquette_azur.webp', 10, 50),
(4, '66-c-15', 4, 'Casquettes', '100 % polyester', 'Blanche', 'TU', '\'mixte\'', 'casquettes/casquette_blanche.webp', 10, 12),
(5, '11-s-23', 3, 'Sweats', 'Fabriqués à partir de coton biologique 100% filé et peigné.\r\n                                        Épaisseur de 200g/m2 pour un confort optimal.\r\n                                        Lavage : Le lavage est à réaliser à la machine, produit retourné à 30° ou bien lavage à la main.            ', 'noir', 'TU', '\'mixte\'', 'sweats/sw_noir.webp', 50, 50),
(6, '66-s-15', 3, 'Sweats', 'Fabriqués à partir de coton biologique 100% filé et peigné.\r\n                                        Épaisseur de 500g/m2 pour un confort optimal.\r\n                                        Lavage : Le lavage est à réaliser à la machine, produit retourné à 30° ou bien lavage à la main.', 'rose', 'TU', '\'mixte\'', 'sweats/sw_rose.webp', 50, 124),
(7, '11-sa-23', 1, 'Sacs ', 'Sac en coton.\r\n\r\nSac porté main, épaule ou croisé.', 'liedevin', 'TU', '\'mixte\'', 'sacs/sac_liedevin.webp', 30, 500),
(8, '66-sa-15', 1, 'Sacs ', 'Sac en coton.\r\nSac porté main, épaule ou croisé.', 'rouge', 'TU', '\'mixte\'', 'sacs/sac_rouge.webp', 30, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_categorie`
--
ALTER TABLE `t_categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `t_commande`
--
ALTER TABLE `t_commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `FK_id_membre` (`id_membre`);

--
-- Index pour la table `t_details_commande`
--
ALTER TABLE `t_details_commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `FK_produit` (`id_produit`);

--
-- Index pour la table `t_membre`
--
ALTER TABLE `t_membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `t_produit`
--
ALTER TABLE `t_produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `FK_id_categorie` (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_categorie`
--
ALTER TABLE `t_categorie`
  MODIFY `id_categorie` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Ce champ correspond au\r\nnuméro de catégorie qui sera\r\nauto-généré et incrémenté', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `t_commande`
--
ALTER TABLE `t_commande`
  MODIFY `id_commande` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Ce champ\r\ncorrespond au\r\nnuméro de\r\ncommande qui\r\nsera auto-généré\r\net incrémenté.';

--
-- AUTO_INCREMENT pour la table `t_membre`
--
ALTER TABLE `t_membre`
  MODIFY `id_membre` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Ce champ correspond au\r\nnuméro du membre qui sera\r\nauto-généré et incrémenté';

--
-- AUTO_INCREMENT pour la table `t_produit`
--
ALTER TABLE `t_produit`
  MODIFY `id_produit` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Ce champ correspond au\r\nnuméro du produit qui sera\r\nauto-généré et incrémenté.', AUTO_INCREMENT=47;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commande`
--
ALTER TABLE `t_commande`
  ADD CONSTRAINT `FK_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `t_membre` (`id_membre`);

--
-- Contraintes pour la table `t_details_commande`
--
ALTER TABLE `t_details_commande`
  ADD CONSTRAINT `FK_commande` FOREIGN KEY (`id_commande`) REFERENCES `t_commande` (`id_commande`),
  ADD CONSTRAINT `FK_produit` FOREIGN KEY (`id_produit`) REFERENCES `t_produit` (`id_produit`);

--
-- Contraintes pour la table `t_produit`
--
ALTER TABLE `t_produit`
  ADD CONSTRAINT `FK_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `t_categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
