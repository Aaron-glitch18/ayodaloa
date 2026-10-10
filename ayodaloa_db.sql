-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 10 oct. 2026 à 00:39
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
  `date` date DEFAULT NULL,
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
(5, '2021-10-07', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ--Uet8odY1S8Qwq7tF0ioKasBpuVY18cQM5DUIRgEqB2ZIqPQsH-QeX5K&s', 'Daloa : Une grande école offre des prises en charge aux populations', 'Une centaine de prises en charge ont été offertes par le responsable d\'une grande école de Daloa à la mairie de ladite localité. C\'était le lundi 04 octobre 2021 au cours d\'une cérémonie.\n\n\n\nCes prises en charge sont destinées aux étudiants non-affectés ainsi qu\'aux étudiants affectés. Ces derniers pourront bénéficier des prises en charge scolaire mises à leur disposition pour poursuivre leur cursus scolaire dans une école de référence et à moindre coût.\n\n\n\nPour le président de ladite grande école, Kouadio Alex, cette action vise tout simplement à permettre aux démunis d\'avoir accès à la formation. « Nous sommes une structure d\'encadrement, nous sommes en majorité des enseignants et nous connaissons les difficultés que... suite de l\'article sur L’intelligent d’AbidjanCes prises en charge sont destinées aux étudiants non-affectés ainsi qu\'aux étudiants affectés. Ces derniers pourront bénéficier des prises en charge scolaire mises à leur disposition pour poursuivre leur cursus scolaire dans une école de référence et à moindre coût.Pour le président de ladite grande école, Kouadio Alex, cette action vise tout simplement à permettre aux démunis d\'avoir accès à la formation. « Nous sommes une structure d\'encadrement, nous sommes en majorité des enseignants et nous connaissons les difficultés que... suite de l\'article sur L’intelligent d’Abidjan', 'Éducation', 'Daloa'),
(6, '2021-11-24', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRusKZx2sXYU4P8gxTMPha-NCKInClw33LolzMIHmyoQdQTKpXbQCV9I3w&s', 'Le centre social de Daloa à la recherche de moyens pour une meilleure prise en charge d’un bébé abandonné', 'Le centre social de Daloa peine à réunir des moyens notamment financier pour transférer un bébé abandonné et retrouvé il y a un peu plus d\'un mois, en vue de sa prise en charge adaptée à la pouponnière de Bouaké, a appris l’AIP.\n\n\n\nL’enfant, de sexe masculin, a été retrouvé trois jours environ après sa naissance, dans la broussaille sur la route reliant Daloa et Gonaté. Il attend d’être transféré dans un centre d’accueil adapté à son âge.\n\n\n\nSelon une assistance sociale, les ressources financières du centre social sont de plus en plus insuffisantes pour faire face au nombre élevé de cas sociaux qui lui est soumis. « Nous sommes souvent obligés de tendre la main », a-t-elle affirmé, tout en soulignant que les dons en nature, notamment en habits usagers, sont plus fréquents que les dons en espèces.\n\n\n\n(AIP)\n\n\n\nKaem/kpL’enfant, de sexe masculin, a été retrouvé trois jours environ après sa naissance, dans la broussaille sur la route reliant Daloa et Gonaté. Il attend d’être transféré dans un centre d’accueil adapté à son âge.Selon une assistance sociale, les ressources financières du centre social sont de plus en plus insuffisantes pour faire face au nombre élevé de cas sociaux qui lui est soumis. « Nous sommes souvent obligés de tendre la main », a-t-elle affirmé, tout en soulignant que les dons en nature, notamment en habits usagers, sont plus fréquents que les dons en espèces.(AIP)Kaem/kp', 'Social', 'Daloa'),
(7, '2026-06-23', '../image/Journees-internationales-du-livre-de-Gbeke.jpg', 'Les officiels et invités prenant part à la 6e édition des JILG à Bouaké, AIP, avril 2026', 'Bouaké, 26 avr 2026 (AIP)- La 6e édition des Journées internationales du Livre de Gbêkê (JILG), initiée par les Etablissements Henri Poincaré en collaboration avec l’écrivain Kouakou Marcellin, s’est tenue du jeudi 23 au samedi 25 avril 2026 au complexe sportif de l’établissement, en présence d’acteurs du monde littéraire et éducatif, dont les écrivains Tiburce Jules Koffi et François d’Assise N’Dah.\r\n\r\nPlacée sous le thème « Le livre, levier de transformation sociale et éducative », cette édition a réuni des auteurs, des élèves, des enseignants, des responsables d’institutions et des passionnés de lecture autour d’activités axées sur la promotion du livre et de la lecture.\r\n\r\nLa cérémonie d’ouverture a été marquée par une conférence inaugurale consacrée au rôle du livre dans la construction de la citoyenneté. Des communications ont porté sur l’accès au livre, la place de la lecture dans les systèmes éducatifs et les politiques publiques en faveur de la promotion du livre. Des panels ont réuni des écrivains, des universitaires et des responsables institutionnels autour de ces thématiques.\r\n\r\nLa deuxième journée a enregistré la participation d’élèves issus d’établissements primaires et secondaires de la région. Ces derniers ont pris part à un parcours pédagogique comprenant la visite de stands d’exposition, la découverte d’ouvrages de divers genres ainsi que des échanges avec des auteurs. Des expositions thématiques ont été organisées autour de la littérature africaine, des œuvres scolaires et des publications scientifiques.\r\n\r\nDes ateliers d’écriture et de lecture ont permis aux élèves de s’exercer à la rédaction de textes narratifs, à la lecture expressive et à l’analyse de contenus littéraires. Ces sessions ont été encadrées par des écrivains et des enseignants, avec des exercices pratiques portant sur la construction d’un récit, la structuration d’un texte et les techniques de prise de parole.\r\n\r\nLa journée de clôture a été marquée par un concours de lecture publique remporté par Aka Anne Axelle, élève en classe de 6e aux Établissements Henri Poincaré. Ouattara Noah, élève en classe de 4e, s’est classée deuxième. Des prestations en théâtre, en slam et en poésie ont été présentées par des élèves et des invités.\r\n\r\nLa cérémonie a également enregistré la remise de distinctions à des élèves, à des auteurs locaux et à des partenaires. Un don d’ouvrages a été effectué au profit de la bibliothèque du collège Henri Poincaré en vue de renforcer les ressources documentaires de l’établissement.\r\n\r\nLe commissaire général des JILG, Dr Kouakou Marcellin, a exprimé sa reconnaissance aux participants et aux partenaires. Il a relevé la participation de Erick Monjour et de Hélène Lobé, indiquant que cette initiative vise à promouvoir la lecture et à valoriser la production littéraire.\r\n\r\nLes Journées Internationales du Livre de Gbêkê visent à encourager la pratique de la lecture, à favoriser les échanges entre auteurs et lecteurs et à soutenir le développement du secteur du livre dans', 'Média & Culture', 'Bouaké');

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
(3, '2026-10-08', '../image/Service_1791426258.jpg', '0574496407', 'DAAF DESIGN ( services informatiques DALOA)', 'Service Informatique et Réparation Informatique dans Baluzon, Sassandra', 'DAAF DESIGN est une entreprise de services informatiques basée à Daloa, spécialisée dans le graphisme, la création digitale et la gestion des réseaux sociaux. Elle accompagne particuliers et professionnels dans la conception visuelle, le montage vidéo et la communication en ligne, tout en proposant des solutions adaptées pour booster la visibilité sur Internet. Avec une équipe dynamique et créative, DAAF DESIGN se positionne comme un partenaire incontournable pour vos projets numériques et votre présence digitale', 'Informatique', 'Daloa', 'Rue de l\'Université, Baluzon, Sassandra-Marahoué', -6.44102460, 6.89692090);

-- --------------------------------------------------------

--
-- Structure de la table `educationdata`
--

CREATE TABLE `educationdata` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `titreActu` varchar(255) DEFAULT NULL,
  `titreActu1` varchar(255) DEFAULT NULL,
  `descripActu` text DEFAULT NULL,
  `secteur` varchar(100) DEFAULT NULL,
  `localite` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `educationdata`
--

INSERT INTO `educationdata` (`id`, `date`, `image`, `titreActu`, `titreActu1`, `descripActu`, `secteur`, `localite`) VALUES
(1, '2024-03-18', '../image/edu1.jpg', 'Côte d\'Ivoire – AIP/ Daloa : Le conseil régional offre 500 tables-bancs aux établissements primaires et secondaires de la région', 'Daloa : Le conseil régional offre 500 tables-bancs aux établissements primaires et secondaires de la région', 'Daloa, 18 mars 2024 (AIP) – Le conseil régional du Haut Sassandra a offert, 500 tables-bancs à la Direction régionale de l\'Education nationale et de l\'Alphabétisation (DRENA) et promis 500 autres à la rentrée scolaire prochaine, à l\'occasion d\'une cérémonie organisée vendredi 15 mars 2024 dans l\'enceinte du lycée Antoine Gauze de Daloa.<br>Le directeur régional de l\'Education nationale et de l\'Alphabétisation, Hien L. Georges, s\'est dit « soulagé » de recevoir ce don qui va permettre à un millier d\'élèves de s\'assoir décemment pour suivre les cours.<br>Le déficit de tables-bancs est une préoccupation pour la DRENA de Daloa, à côtés de celui de salles de classe, a-t-il rappelé, expliquant que la politique d\'école de qualité passe aussi par la disponibilité de salles de classe et leur équipement en tables-bancs.<br>Le conseil régional a, par ailleurs, ouvert des chantiers de construction de salles de classe dans plusieurs établissements d\'enseignement primaire et secondaire de la région, a annoncé, son président, Mamadou Touré.<br>(AIP)<br>kaem/zaar', 'Éducation', 'Daloa'),
(2, '2024-09-06', '../image/edu2.jpg', 'Côte d\'Ivoire – AIP/ Le DRENA de Daloa annonce la traque des « candidats libres officiels » et des établissements clandestins', 'Le DRENA de Daloa annonce la traque des « candidats libres officiels » et des établissements clandestins', 'Daloa, 06 sept 2024 (AIP) – Le directeur de l\'Education nationale et de l\'Alphabétisation de Daloa (DRENA), Hien L. George, a annoncé son intention d\'aller en guerre contre les « candidats libres officiels » et les établissements clandestins, lors de la réunion de rentrée qu\'il a animée jeudi 5 septembre 2024 au Centre d\'animation et de formation pédagogique (CAFOP) de la ville.<br>« C\'est la tolérance zéro cette année. Il n\'y aura pas de candidats libres officiels dans la direction régionale de Daloa. Nous allons les traquer, y compris les établissements clandestins », déclaré M. Hien.<br>Les candidats libres officiels sont des personnes non scolarisées que des établissements privés d\'enseignement inscrivent au nombre de leurs candidats officiels aux examens scolaires, explique-t-on.<br>Cette pratique, en plus d\'être irrégulière, contribue, avec les établissements clandestins, à tirer les résultats de la DRENA vers le bas du classement.<br>Les taux de réussite aux derniers examens officiels sont de 79,88 % au Certificat d\'études primaires élémentaires (CEPE) contre 83,36 % au niveau national, 24,48 % au Brevet d\'études du premier cycle (BEPC) contre 40,18 % au niveau national et 19,33 % au Baccalauréat contre 34,17 % au niveau national.<br>En 2023, la DRENA de Daloa a réalisé des taux de réussite de 66,92 % au CEPE, 23,92 % au BEPC et 18,91 % au baccalauréat.<br>Ces résultats demeurent « insatisfaisants » pour la communauté éducative de la DRENA en dépit de la légère amélioration.<br>(AIP)<br>kaem/fmo', 'Éducation', 'Daloa'),
(3, '2025-05-15', '../image/edu3.jpg', 'Côte d\'Ivoire – AIP/ Le Service de santé scolaire et universitaire de Daloa mène une campagne contre les addictions dans les établissements secondaires', 'Le Service de santé scolaire et universitaire de Daloa mène une campagne contre les addictions dans les établissements secondaires', 'Daloa, 15 mai 2025 (AIP) – Le Service de santé scolaire et universitaire – Santé adolescents et jeunes (SSSU-SAJ) Daloa 2 a conduit une campagne de sensibilisation sur les addictions dans plusieurs établissements secondaires de la ville du jeudi 08 au mardi 13 mai 2025.<br>Quatorze collèges et lycées ont été visités lors de cette campagne qui visait à informer les élèves sur les conséquences de la consommation de substances psychoactives.<br>Du lycée Khalil au lycée professionnel commercial, en passant par les collèges Antilope, Espérance, La Source, Principal, Elite, les lycées modernes 1, 2, 4, et 5, ainsi que le groupe Micromédia formation et les cours Orion, le médecin-chef du SSSU-SAJ Daloa 2, Dr Yao Aristide, a présenté les effets de ces substances sur le système nerveux.<br>Il a indiqué que la consommation de drogues ou de stupéfiants peut entraîner la dépendance, la dépression, des échecs scolaires, la délinquance, diverses maladies (dont les cancers) et parfois la mort.<br>Le médecin-chef a également rappelé que la consommation de drogue est interdite et réprimée par la loi, invitant les élèves à adopter des comportements responsables, notamment pendant les prochaines vacances scolaires.<br>Cette campagne de sensibilisation sur les addictions dans les établissements secondaires est une initiative du Programme national de lutte contre le tabagisme, la toxicomanie, l\'alcoolisme et les autres addictions (PNLTA), inscrite dans son plan d\'action opérationnel 2025.<br>Sa mise en œuvre à Daloa a bénéficié de l\'appui des services des directions régionales en charge de l\'éducation nationale, de la promotion de la jeunesse et de la santé.<br>(AIP)<br>Kaem/kp', 'Éducation', 'Daloa'),
(4, '2025-09-13', '../image/edu4.jpg', 'Côte d\'Ivoire – AIP/ Daloa : le directeur régional de l\'Éducation nationale dénonce l\'insécurité dans les établissements scolaires', 'Daloa : le directeur régional de l\'Éducation nationale dénonce l\'insécurité dans les établissements scolaires', 'Daloa, 13 sept 2025 (AIP) – Le Directeur régional de l\'Education nationale et de l\'Alphabétisation (DRENA) de Daloa, Hien L. Georges, a dénoncé un état d\'insécurité permanent dans les établissements scolaires de sa circonscription, lors de la traditionnelle réunion régionale de rentrée scolaire, mercredi 10 septembre 2025.<br>« L\'insécurité persiste dans nos établissements. Cette année encore, on en a connu », s\'est désolé M. Hien en rappelant l\'assassinat d\'un instituteur de l\'école primaire publique de Neounoufla, un village de la sous-préfecture de Séïtifla (département de Vavoua), le 14 août par des personnes sous l\'emprise de stupéfiants.<br>Cette insécurité se traduit, entres autres, par des vols de fils électriques dans les salles de classe en construction, des cambriolages de bureaux de directeurs d\'école, des menaces d\'enseignants, a poursuivi M. Hien,<br>Il a appelé à une plus grande prise en compte de la sécurité autour et à l\'intérieur des écoles, des collèges et des lycées.<br>Depuis quelques années, la police a multiplié les séances de sensibilisation des élèves au civisme et à la lutte contre la drogue dans les établissements situés en ville.<br>(AIP)<br>kaem/zaar', 'Éducation', 'Daloa'),
(5, '2026-04-19', '../image/edu5.jpg', 'Côte d\'Ivoire – AIP / L\'amicale des anciens élèves du lycée moderne 2 de Daloa s\'engage avec l\'établissement pour l\'excellence', 'L\'amicale des anciens élèves du lycée moderne 2 de Daloa s\'engage avec l\'établissement pour l\'excellence', 'Daloa, 19 avr 2026 (AIP) – L\'amicale des anciens élèves du lycée moderne 2 de Daloa a réaffirmé son engagement à accompagner l\'établissement dans sa volonté de renouer avec l\'excellence, samedi 18 avril 2026, à l\'occasion des festivités marquant les 80 ans de son existence.<br>La volonté des anciens élèves de renforcer leur soutien à l\'établissement a été exprimée tour à tour par la présidente de l\'amicale, Karine Dawson, et la marraine Patricia Yao, directrice de cabinet de la Première Dame et ancienne présidente de l\'amicale, représentée par la première vice-présidente, Pr Bosson Jocelyne, épouse Oné.<br>Ces déclarations ont été accompagnées de dons d\'une valeur de 12 millions de francs CFA, fait par l\'amicale après à une évaluation des besoins du moment réalisée par le proviseur du lycée 2 et son collègue du lycée 4, créé par scission intervenue en 2008.<br>Il s\'agit, entre autres, de fauteuils de bureau, de chaises, d\'ordinateurs et d\'imprimantes, d\'un photocopieur, de climatiseurs, de matériel d\'entretien et de fournitures scolaires.<br>« Nous avons reçu du lycée, aujourd\'hui nous pouvons donner », a déclaré Mme Bosson, soulignant la volonté des membres de l\'amicale de soutenir le lycée tant dans son fonctionnement administratif que dans sa volonté d\'améliorer le niveau des élèves.<br>L\'amicale entend poursuivre son appui aux lycée 2 et 4 promouvoir l\'excellence, en améliorant les conditions de travail du personnel et l\'encadrement des élèves.<br>À cet effet, d\'autres chantiers sont en cours ou ont été annoncés. On peut citer la clôture complète de l\'établissement, la construction de 12 latrines, d\'une bibliothèque moderne, d\'une infirmerie et d\'une salle d\'archives.<br>Des actions ont déjà été menées par l\'amicale, au nombre desquelles l\'adduction d\'eau potable et l\'installation d\'un cubitainer de stockage, l\'ouverture d\'une voie principale d\'accès au lycée, des travaux d\'assainissement ainsi que l\'institution de prix pour distinguer chaque fin d\'année les meilleurs élèves.<br>À l\'origine, le lycée moderne 2 de Daloa était un petit séminaire catholique (1944), transformé en collège catholique en 1946. L\'établissement est passé sous l\'autorité de l\'État de Côte d\'Ivoire au cours de l\'année scolaire 1972-1973. Il sera érigé en lycée en 2007, avant d\'être scindé pour donner les lycées 2 et 4 actuels.<br>Selon le classement des établissements publics et privés, les deux établissements ont enregistré respectivement 162 admis sur 345 candidats présents, soit un taux de réussite de 46,96 %, et 94 admis sur 262 présents, soit un taux de réussite de 35,88 %, au baccalauréat 2025.<br>(AIP)<br>kaem/fmo', 'Éducation', 'Daloa'),
(6, '2026-09-07', '../image/edu6.jpg', 'Côte d\'Ivoire-AIP/ Un établissement privé d\'enseignement supérieur de Daloa récompense les meilleurs élèves de la DRENAET', 'Un établissement privé d\'enseignement supérieur de Daloa récompense les meilleurs élèves de la DRENAET', 'Daloa, 07 sept 2026 (AIP) – L\'Institut national d\'intelligence économique, numérique et commerciale (INEC), établissement privé d\'enseignement supérieur implanté à Daloa, a récompensé, samedi 5 septembre 2026, les meilleurs élèves de la Direction régionale de l\'Éducation nationale et de l\'Enseignement technique (DRENAET) de Daloa au titre des derniers examens scolaires.<br>L\'établissement a offert aux trois premiers de chacun des examens du Certificat d\'études primaires élémentaires (CEPE), du Brevet d\'études du premier cycle (BEPC) et du baccalauréat des fournitures scolaires, des enveloppes, des trophées et des contributions aux frais de scolarité, à quelques jours de la rentrée scolaire 2026-2027.<br>« Chaque année, nous distinguons les meilleurs élèves de la DRENAET (Direction régionale de l\'Éducation nationale et de l\'Enseignement technique, ndlr) de Daloa », a déclaré le directeur général et fondateur de l\'INEC, Parfait Séri. Il a souligné que 65 élèves ont été récompensés depuis le lancement de cette initiative, qui en est à sa sixième édition.<br>Au-delà de la remise des récompenses, l\'INEC assure le suivi du parcours de ses lauréats. M. Séri a ainsi fait savoir que deux élèves récompensés il y a trois ans ont intégré l\'École polytechnique en France.<br>Le troisième adjoint au maire de Saïoua, Séri Zadi Désiré, représentant le député-maire Ibrahimi Loko, invité d\'honneur de la cérémonie, a salué la reconnaissance des efforts scolaires par la direction de l\'INEC, estimant qu\'elle constitue un facteur de motivation pour les élèves.<br>Parmi les récipiendaires figure Goua Franck-Élie, distingué comme meilleur élève au BEPC de la DRENAET de Daloa. Ancien élève du collège Kirman de Daloa, il est admis à poursuivre ses études au lycée scientifique de Yamoussoukro.<br>Le jeune lauréat, qui a notamment bénéficié d\'une prise en charge de ses fournitures scolaires pour l\'année 2026-2027, a attribué sa réussite au travail et à la concentration. Il a appelé ses camarades à éviter les distractions et à rester concentrés sur leurs études.<br>(AIP)<br>kaem/fmo', 'Éducation', 'Daloa');

-- --------------------------------------------------------

--
-- Structure de la table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `conf_password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualitedata`
--
ALTER TABLE `actualitedata`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `buservicedata`
--
ALTER TABLE `buservicedata`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `educationdata`
--
ALTER TABLE `educationdata`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualitedata`
--
ALTER TABLE `actualitedata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `buservicedata`
--
ALTER TABLE `buservicedata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `educationdata`
--
ALTER TABLE `educationdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
