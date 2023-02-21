-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 fév. 2023 à 14:10
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd217`
--

-- --------------------------------------------------------

--
-- Structure de la table `champ`
--

CREATE TABLE `champ` (
  `id_champ` int(11) NOT NULL,
  `valeur` varchar(20) NOT NULL,
  `taille` int(11) NOT NULL,
  `indication` varchar(30) NOT NULL,
  `id_template` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `champ`
--

INSERT INTO `champ` (`id_champ`, `valeur`, `taille`, `indication`, `id_template`) VALUES
(4, '.saxsxasdsacdcsdc.', 4, '.qscxadsdc.', 7),
(5, '.saxsxasdsacdcsdc.', 4, '.qscxadsdc.', 7),
(6, '.sewfef3.', 3, '.defde.', 9),
(7, '.sasaaxad.', 3, '.eweww.', 10),
(8, '.sasaaxad.', 4, '.rien de bon.', 14),
(9, '.sadkdnk.', 10, '.rien de bon.', 14),
(10, '.sewfef3.', 5, '.defde.', 23),
(11, '.sewfef3.', 4, '.defde.', 23),
(12, '.sewfef3.', 9, '.defde.', 23),
(13, '.sewfef3.', 3, '.eweww.', 26),
(14, '.sasaaxad.', 4, '.eweww.', 27),
(15, '.sasaaxad.', 4, '.eweww.', 27),
(16, '.saxsxasdsacdcsdc.', 5, '..', 28),
(17, '.saxsxasdsacdcsdc.', 4, '..', 28),
(18, '.saxsxasdsacdcsdc.', 6, '..', 28),
(19, '.saxsxasdsacdcsdc.', 6, '.ijbfewj.', 28),
(20, '..', 0, '..', 29),
(21, '..', 0, '..', 29),
(22, '..', 0, '..', 29),
(23, '..', 0, '..', 29),
(24, '.premiere tranche.', 12, '..', 29),
(25, '.deuxieme tranche.', 12, '..', 29),
(26, '.nom.', 6, '..', 30),
(27, '.prenom.', 6, '..', 30),
(28, '.prix loye.', 6, '..', 30),
(29, '.avance.', 5, '..', 30),
(30, '.avance.', 5, '..', 30);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `id_template` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `date_creation`, `id_template`) VALUES
(1, '2023-02-03', 23),
(2, '2023-02-03', 23),
(3, '2023-02-03', 23),
(4, '2023-02-03', 23),
(5, '2023-02-03', 23),
(6, '2023-02-03', 23),
(7, '2023-02-03', 23),
(8, '2023-02-03', 20),
(9, '2023-02-03', 29),
(10, '2023-02-03', 29),
(11, '2023-02-03', 29),
(12, '2023-02-03', 29),
(13, '2023-02-03', 30);

-- --------------------------------------------------------

--
-- Structure de la table `template`
--

CREATE TABLE `template` (
  `id_template` int(11) NOT NULL,
  `nom_template` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(43) NOT NULL,
  `position_label` varchar(20) NOT NULL,
  `couleur_text` varchar(20) NOT NULL,
  `bg_couleur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `template`
--

INSERT INTO `template` (`id_template`, `nom_template`, `telephone`, `email`, `position_label`, `couleur_text`, `bg_couleur`) VALUES
(5, 'DONALD', 'A3', 'Paysage', 'left', 'Green', ''),
(6, 'DONALD', 'A3', 'Portrait', 'left', 'Green', ''),
(7, 'DONALD', 'A3', 'Portrait', 'left', 'Green', ''),
(9, '', 'A2', 'Portrait', 'left', 'Pink', ''),
(10, 'prestation de servic', 'A4', 'Paysage', 'left', 'Grey', ''),
(11, 'ergr', 'A2', 'Portrait', 'left', 'white', 'Grey'),
(12, 'donald', 'A4', 'Portrait', 'left', 'Green', 'Pink'),
(13, 'donald', 'A5', 'Paysage', 'left', 'Black', 'Black'),
(14, 'vente de banane', 'A3', 'Portrait', 'left', 'Black', 'white'),
(15, 'btbtrbtb', 'A2', 'Portrait', 'top', 'Black', 'Grey'),
(16, 'btbtrbtb', 'A4', 'Paysage', 'left', 'Black', 'Black'),
(17, 'DONALD', '', '', '', '', ''),
(19, 'DONALD', '', '', '', '', ''),
(20, 'DONALD', '', '', '', '', ''),
(21, 'ergr', 'A2', 'Paysage', 'top', 'Green', ''),
(22, 'VEnte de voiture', '6959656654', 'tientcheudonald237@g', 'left', 'Black', 'white'),
(23, 'site de vente', '959656654', 'tientcheudonald@gmai', 'left', 'Black', 'Grey'),
(24, 'btbtrbtb', '6959656654', 'tientcheudonald237@g', 'include', 'Black', 'Black'),
(25, 'donald237', '959656654', 'tientcheudonald237@g', 'left', 'Black', 'Black'),
(26, 'DONALD', '6959656654', 'admin@gmail.com', 'include', 'white', 'Black'),
(27, 'ergr', '6959656654', 'tientcheudonald237@g', 'include', 'Black', 'Black'),
(28, 'donald237', '6959656654', 'tientcheudonald@gmail.com', 'left', 'Black', 'Black'),
(29, 'paiement', '+237656138785 ', 'tientcheudonald@gmail.com', 'top', 'Black', 'blue'),
(30, 'naison', '+237656138785 ', 'tientcheudonald@gmail.com', 'top', 'Pink', 'white');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `champ`
--
ALTER TABLE `champ`
  ADD PRIMARY KEY (`id_champ`),
  ADD KEY `id_template` (`id_template`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD KEY `idtemplate` (`id_template`);

--
-- Index pour la table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id_template`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `champ`
--
ALTER TABLE `champ`
  MODIFY `id_champ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `template`
--
ALTER TABLE `template`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `champ`
--
ALTER TABLE `champ`
  ADD CONSTRAINT `champ_ibfk_1` FOREIGN KEY (`id_template`) REFERENCES `template` (`id_template`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_template`) REFERENCES `template` (`id_template`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
