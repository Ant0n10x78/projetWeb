-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 19:03
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `article`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(4) NOT NULL,
  `id_profil` int(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `prix` int(6) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `lieux` varchar(100) NOT NULL,
  `statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `id_profil`, `photo`, `titre`, `prix`, `date`, `description`, `lieux`, `statut`) VALUES
(1, 3, 'https://media.paruvendu.fr/vide-grenier/media-pa/WB15/3/6/WB153678299_1.jpeg', 'GTA5 -PS4', 35, '2020-06-12', 'Bonjour je vend mon jeu pas cher et en bonne état .\r\nveuillez me concacter via mon mail .\r\nle payement s\'effectue en cash uniquement\r\nmerci!', 'Paris ', 'Disponible'),
(6, 0, 'https://i.ebayimg.com/images/g/sCEAAOSwRwpctwui/s-l640.jpg', 'skyrim -PS3', 10, '2020-12-07', 'Bonjour ,je vend mon jeu skyrim pas cher et bon état', 'Paris', 'disponible');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(100) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id_profil`, `pseudo`, `nom`, `prenom`, `mail`, `password`) VALUES
(3, 'mathieu78ZOO', 'pannetratfd', 'mathieufd', 'mathieupannetrat5fdf@gmail.com', '123fdf'),
(5, 'Ynov GANG', 'pannetrat', 'mathieu', 'mathieupannetrat5@gmail.com', '123'),
(6, 'test2', 'pannetrat', 'mathieu', 'mathieupannetrat5@gmail.com', '123'),
(7, 'MR', 'azze', 'tyyty', 'tyttyt', 'efexx'),
(8, 'projetTEST', 'projet', 'test', 'mathieupannetrat5@gmail.com', '123'),
(9, 'Mathieu', 'pannetrat', 'mathieu', 'mathieupannetrat5@gmail.com', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `index` (`id_profil`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
