-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 oct. 2026 à 04:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ayodaloa_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `buservicedata`
--

CREATE TABLE `buservicedata` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `titreActu` varchar(255) NOT NULL,
  `titreActu1` varchar(255) NOT NULL,
  `descripActu` text NOT NULL,
  `secteur` enum('Gastronomie','Divertissement','Informatique','Économie','Education','Autre') NOT NULL,
  `localite` varchar(255) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `buservicedata`
--

INSERT INTO `buservicedata` (`id`, `date`, `image`, `telephone`, `titreActu`, `titreActu1`, `descripActu`, `secteur`, `localite`, `addresse`, `longitude`, `latitude`) VALUES
(2, '2026-10-08', '../image/Service_1791423836.webp', '0555444141', 'Restaurant du &quot;Grand Hôtel&quot;', 'Venez savourez les meilleurs mets dans nos loacaux', 'Le restaurant du Grand Hôtel de Daloa vous accueille dans un cadre élégant et convivial, idéal pour vos repas en famille, entre amis ou pour vos rendez‑vous professionnels. Vous y trouverez une cuisine variée mêlant spécialités ivoiriennes et plats internationaux, préparés avec des ingrédients frais et servis avec soin. L’ambiance chaleureuse et le service attentionné en font un lieu incontournable pour bien manger et se détendre au cœur de la ville.', 'Gastronomie', 'Daloa', 'Quartier Kirmann Daloa BP154', -6.45000000, 6.88330000),
(3, '2026-10-08', '../image/Service_1791426258.jpg', '+225 05 74', 'DAAF DESIGN ( services informatiques DALOA)', 'Service Informatique et Réparation Informatique dans Baluzon, Sassandra', 'DAAF DESIGN est une entreprise de services informatiques basée à Daloa, spécialisée dans le graphisme, la création digitale et la gestion des réseaux sociaux. Elle accompagne particuliers et professionnels dans la conception visuelle, le montage vidéo et la communication en ligne, tout en proposant des solutions adaptées pour booster la visibilité sur Internet. Avec une équipe dynamique et créative, DAAF DESIGN se positionne comme un partenaire incontournable pour vos projets numériques et votre présence digitale', 'Informatique', 'Daloa', 'Rue de l\'Université, Baluzon, Sassandra-Marahoué', -6.44102460, 6.89692090);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `buservicedata`
--
ALTER TABLE `buservicedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `buservicedata`
--
ALTER TABLE `buservicedata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
