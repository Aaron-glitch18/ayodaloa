-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 06 oct. 2026 à 10:28
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
-- Structure de la table `actualitedata`
--

CREATE TABLE `actualitedata` (
  `id` int(11) NOT NULL,
  `date` varchar(10) DEFAULT NULL,
  `image` varchar(114) DEFAULT NULL,
  `titreActu` varchar(105) DEFAULT NULL,
  `descripActu` varchar(3024) DEFAULT NULL,
  `secteur` varchar(50) NOT NULL,
  `localite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `actualitedata`
--

INSERT INTO `actualitedata` (`id`, `date`, `image`, `titreActu`, `descripActu`, `secteur`, `localite`) VALUES
(1, '2021-11-23', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlK2qb7Yu56Nf_4SWR5t5hhvO3tWyImbqaXGP_0xKOtaWUZnE13tr-X-JW&s', 'Un point focal WANEP à Daloa pour le projet d’appui aux victimes de VBG', 'Daloa– Le projet « Bâtir une approche inclusive de relance post-covid 19 de sortie de crise et de réformes de la gouvernance au Sahel », exécuté par le Réseau ouest africain pour l’Edification de la paix (WANEP), a identifié son point focal à Daloa, en la personne Dou Castus, lundi 22 novembre 2021.\n\n\n\nM. Dou a été désigné à l’issue d’une séance de travail entre le chargé de programme Alerte précoce et prévention de conflits de WANEP - Côte d’Ivoire, Kangah Richmond, des membres de groupements de femmes intervenant dans la prise en charge des victimes de violences basées sur le genre (VBG) et le centre social de Daloa, choisi comme centre de référencement et de prise en charge psychosociale des victimes survivantes.\n\n\n\nLe point focal sera coaché par un psychologue pour apporter l’appui psychologique nécessaire aux victimes survivantes de VBG à Daloa et à Soubré dans le cadre du projet, a souligné M. Kangah.\n\n\n\nLe centre social est chargé de rechercher ces dernières, en vue de leur accompagnement, à savoir l’écoute, le rétablissement psychosocial des victimes et l’aide à la création d’activités génératrices de revenus.\n\n\n\nLe projet « Bâtir une approche inclusive de relance post-covid 19 de sortie de crise et de réformes de la gouvernance au Sahel » est exécuté au Mali, au Burkina Faso, au Niger et en Côte d’Ivoire. Il est en sa deuxième phase, celle du renforcement des systèmes de soutien au rétablissement psychosocial et économique des femmes victimes de VBG, qui va durer trois mois.\n\n\n\nLa première phase s’est déroulée en 2020 sur trois mois. Elle était consacrée à la formation et au renforcement des capacités des victimes, a rappelé M. Kangah.M. Dou a été désigné à l’issue d’une séance de travail entre le chargé de programme Alerte précoce et prévention de conflits de WANEP - Côte d’Ivoire, Kangah Richmond, des membres de groupements de femmes intervenant dans la prise en charge des victimes de violences basées sur le genre (VBG) et le centre social de Daloa, choisi comme centre de référencement et de prise en charge psychosociale des victimes survivantes.Le point focal sera coaché par un psychologue pour apporter l’appui psychologique nécessaire aux victimes survivantes de VBG à Daloa et à Soubré dans le cadre du projet, a souligné M. Kangah.Le centre social est chargé de rechercher ces dernières, en vue de leur accompagnement, à savoir l’écoute, le rétablissement psychosocial des victimes et l’aide à la création d’activités génératrices de revenus.Le projet « Bâtir une approche inclusive de relance post-covid 19 de sortie de crise et de réformes de la gouvernance au Sahel » est exécuté au Mali, au Burkina Faso, au Niger et en Côte d’Ivoire. Il est en sa deuxième phase, celle du renforcement des systèmes de soutien au rétablissement psychosocial et économique des femmes victimes de VBG, qui va durer trois mois.La première phase s’est déroulée en 2020 sur trois mois. Elle était consacrée à la formation et au renforcement des capacités des victimes, a rappelé M. Kangah.', 'Droits humains', 'Daloa'),
(2, '2024-06-21', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjym7ztVP4SFTCBxd0Zhd3i5-YQzsA-K9lf_ZTX19LkpzavXMKNKfK8aE&s', 'Daloa : le maire Gbeuly Stéphane offre un match de gala aux populations', 'À l\'initiative du maire de la commune de Daloa, Stéphane Gbeuly en collaboration avec l\'international Wilfried Singo, un match de gala opposant une sélection des Pro et une sélection locale a été organisé le mardi 18 juin 2024 au stade de Daloa.\n\n\n\nCette rencontre sportive, qui a réuni des milliers de passionnés de football venus de tout horizon, a débuté avec une première mi-temps équilibrée. Cependant, c\'est à la 16e minute que les Pros ont réussi à prendre l’avantage grâce à un but de Franck Kessié.\n\n\n\nCe but a marqué l’unique réalisation de la rencontre, permettant aux Pros de remporter le match.\n\n\n\nAvant le coup d\'envoi du match, Wilfried Singo qui avait à ses côtés son géniteur et son épouse, a indiqué que... suite de l\'article sur L’intelligent d’AbidjanCette rencontre sportive, qui a réuni des milliers de passionnés de football venus de tout horizon, a débuté avec une première mi-temps équilibrée. Cependant, c\'est à la 16e minute que les Pros ont réussi à prendre l’avantage grâce à un but de Franck Kessié.Ce but a marqué l’unique réalisation de la rencontre, permettant aux Pros de remporter le match.Avant le coup d\'envoi du match, Wilfried Singo qui avait à ses côtés son géniteur et son épouse, a indiqué que... suite de l\'article sur L’intelligent d’Abidjan', 'Sport', 'Daloa'),
(3, '2022-12-13', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7-ph4O1r8DFPZxCra8tZTQVhmWeO20-fZi4zAZyru4dTNtAE1A6IJRbIt&s', 'Les forces de défense et de sécurité de Daloa sensibilisées sur les violences basées sur le genre', 'Daloa – La commission régionale des droits de l’homme du Haut Sassandra a animé mardi 13 décembre 2022, à Daloa, une séance de sensibilisation à l’endroit des Forces de défense et de sécurité (FDS) sur les violences basées sur le genre (VBG).\n\n\n\nL’objectif de la séance, qui intervenait dans le cadre de la Journée de sensibilisation éclatée initiée par le Conseil national des droits de l’Homme (CNDH), est de rappeler les dispositions à prendre ainsi que les mesures à adopter pour éviter de commettre les violences sur des personnes qui en sont déjà victimes.\n\n\n\nLe président de la commission régionale des droits de l’homme du Haut Sassandra, Touré Katina, dit déplorer des cas de violation des droits de l’homme imputées à des agents des forces de sécurité dans l’exercice de leurs fonctions.\n\n\n\n« Il était donc bon pour nous de les appeler pour leur rappeler certaines notions sur les VBG. Ils ont répondu nombreux à notre appel. Nous pensons avoir réussi notre pari d’échanger avec eux », a déclaré M. Touré, à la fin de la séance.\n\n\n\nLe CNDH est une autorité administrative indépendante créé en novembre 2018 par le gouvernement pour défendre et promouvoir les droits de l’homme en Côte d’Ivoire.\n\n\n\nkaem/askL’objectif de la séance, qui intervenait dans le cadre de la Journée de sensibilisation éclatée initiée par le Conseil national des droits de l’Homme (CNDH), est de rappeler les dispositions à prendre ainsi que les mesures à adopter pour éviter de commettre les violences sur des personnes qui en sont déjà victimes.Le président de la commission régionale des droits de l’homme du Haut Sassandra, Touré Katina, dit déplorer des cas de violation des droits de l’homme imputées à des agents des forces de sécurité dans l’exercice de leurs fonctions.« Il était donc bon pour nous de les appeler pour leur rappeler certaines notions sur les VBG. Ils ont répondu nombreux à notre appel. Nous pensons avoir réussi notre pari d’échanger avec eux », a déclaré M. Touré, à la fin de la séance.Le CNDH est une autorité administrative indépendante créé en novembre 2018 par le gouvernement pour défendre et promouvoir les droits de l’homme en Côte d’Ivoire.kaem/ask', 'Droits de humains', 'Daloa'),
(4, '2022-03-22', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQINUTVRFVUK6kZG21r8ZBLp9vT0UzZ87mOs_NoeolLbIaMs_xBTQwMhy0&s', 'Fluidité routière: l\'OFT et la DR des Transports de Daloa en tournée dans le Haut-Sassandra', 'L’Observatoire de la Fluidité des Transports (OFT) poursuit ses actions en vue de favoriser la libre circulation des personnes et des biens sur l’ensemble du territoire ivoirien. C’est dans ce cadre que les acteurs du secteur des Transports du Haut-Sassandra ont accueilli une tournée de sensibilisation de l’OFT conduite par M. Kacou John. C’était du 16 au 18 mars 2022 dans plusieurs localités de la région du Haut-Sassandra. Il s’agit notamment des localités de Zaibo, Guessabo, Issia, Saïoua et de Vavoua.    Au cours de cette tournée d’information et de sensibilisation, la délégation du Ministère des Transports, composée des émissaires de l’OFT et des agents de la Direction régionale des Transports de Daloa, a échangé avec les transporteurs de la région, notamment les délégués du Haut Conseil du Patronat des Entreprises de Transport Routier, les gérants des sociétés de Transport et les chauffeurs.    A cet effet, les transporteurs ont exprimé les difficultés rencontrées dans l’exercice de leur activité, notamment les nombreux barrages routiers qui occasionnent des arrêts fréquents. Ils ont en outre plaidé pour un retour à une plus grande fluidité sur les différents axes routiers de la région du Haut Sassandra.    A.NAu cours de cette tournée d’information et de sensibilisation, la délégation du Ministère des Transports, composée des émissaires de l’OFT et des agents de la Direction régionale des Transports de Daloa, a échangé avec les transporteurs de la région, notamment les délégués du Haut Conseil du Patronat des Entreprises de Transport Routier, les gérants des sociétés de Transport et les chauffeurs.A cet effet, les transporteurs ont exprimé les difficultés rencontrées dans l’exercice de leur activité, notamment les nombreux barrages routiers qui occasionnent des arrêts fréquents. Ils ont en outre plaidé pour un retour à une plus grande fluidité sur les différents axes routiers de la région du Haut Sassandra.A.N.', 'Transport', 'Daloa'),
(5, '2021-10-7', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ--Uet8odY1S8Qwq7tF0ioKasBpuVY18cQM5DUIRgEqB2ZIqPQsH-QeX5K&s', 'Daloa : Une grande école offre des prises en charge aux populations', 'Une centaine de prises en charge ont été offertes par le responsable d\'une grande école de Daloa à la mairie de ladite localité. C\'était le lundi 04 octobre 2021 au cours d\'une cérémonie.\n\n\n\nCes prises en charge sont destinées aux étudiants non-affectés ainsi qu\'aux étudiants affectés. Ces derniers pourront bénéficier des prises en charge scolaire mises à leur disposition pour poursuivre leur cursus scolaire dans une école de référence et à moindre coût.\n\n\n\nPour le président de ladite grande école, Kouadio Alex, cette action vise tout simplement à permettre aux démunis d\'avoir accès à la formation. « Nous sommes une structure d\'encadrement, nous sommes en majorité des enseignants et nous connaissons les difficultés que... suite de l\'article sur L’intelligent d’AbidjanCes prises en charge sont destinées aux étudiants non-affectés ainsi qu\'aux étudiants affectés. Ces derniers pourront bénéficier des prises en charge scolaire mises à leur disposition pour poursuivre leur cursus scolaire dans une école de référence et à moindre coût.Pour le président de ladite grande école, Kouadio Alex, cette action vise tout simplement à permettre aux démunis d\'avoir accès à la formation. « Nous sommes une structure d\'encadrement, nous sommes en majorité des enseignants et nous connaissons les difficultés que... suite de l\'article sur L’intelligent d’Abidjan', 'Éducation', 'Daloa'),
(6, '2021-11-24', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRusKZx2sXYU4P8gxTMPha-NCKInClw33LolzMIHmyoQdQTKpXbQCV9I3w&s', 'Le centre social de Daloa à la recherche de moyens pour une meilleure prise en charge d’un bébé abandonné', 'Le centre social de Daloa peine à réunir des moyens notamment financier pour transférer un bébé abandonné et retrouvé il y a un peu plus d\'un mois, en vue de sa prise en charge adaptée à la pouponnière de Bouaké, a appris l’AIP.\n\n\n\nL’enfant, de sexe masculin, a été retrouvé trois jours environ après sa naissance, dans la broussaille sur la route reliant Daloa et Gonaté. Il attend d’être transféré dans un centre d’accueil adapté à son âge.\n\n\n\nSelon une assistance sociale, les ressources financières du centre social sont de plus en plus insuffisantes pour faire face au nombre élevé de cas sociaux qui lui est soumis. « Nous sommes souvent obligés de tendre la main », a-t-elle affirmé, tout en soulignant que les dons en nature, notamment en habits usagers, sont plus fréquents que les dons en espèces.\n\n\n\n(AIP)\n\n\n\nKaem/kpL’enfant, de sexe masculin, a été retrouvé trois jours environ après sa naissance, dans la broussaille sur la route reliant Daloa et Gonaté. Il attend d’être transféré dans un centre d’accueil adapté à son âge.Selon une assistance sociale, les ressources financières du centre social sont de plus en plus insuffisantes pour faire face au nombre élevé de cas sociaux qui lui est soumis. « Nous sommes souvent obligés de tendre la main », a-t-elle affirmé, tout en soulignant que les dons en nature, notamment en habits usagers, sont plus fréquents que les dons en espèces.(AIP)Kaem/kp', 'Social', 'Daloa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualitedata`
--
ALTER TABLE `actualitedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualitedata`
--
ALTER TABLE `actualitedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
