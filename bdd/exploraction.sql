-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 13 Mars 2017 à 15:07
-- Version du serveur: 5.5.54-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `exploraction`
--

-- --------------------------------------------------------

--
-- Structure de la table `metier`
--

CREATE TABLE IF NOT EXISTS `metier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(128) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `theme` varchar(64) DEFAULT NULL,
  `place` varchar(240) DEFAULT NULL,
  `motivation_level` int(3) DEFAULT NULL,
  `media_link` text,
  `img` text,
  `tasks` varchar(500) DEFAULT NULL,
  `school_type` varchar(64) DEFAULT NULL,
  `subjects` varchar(140) DEFAULT NULL,
  `skills` varchar(500) DEFAULT NULL,
  `advantages` varchar(140) DEFAULT NULL,
  `disadvantages` varchar(140) DEFAULT NULL,
  `riasec` varchar(64) DEFAULT NULL,
  `access_diploma` varchar(64) DEFAULT NULL,
  `salary` int(6) DEFAULT NULL,
  `infography` varchar(500) DEFAULT NULL,
  `similar_jobs` varchar(140) DEFAULT NULL,
  `useful_links` text,
  `appeared` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `metier`
--

INSERT INTO `metier` (`id`, `job_title`, `keywords`, `description`, `theme`, `place`, `motivation_level`, `media_link`, `img`, `tasks`, `school_type`, `subjects`, `skills`, `advantages`, `disadvantages`, `riasec`, `access_diploma`, `salary`, `infography`, `similar_jobs`, `useful_links`, `appeared`) VALUES
(1, 'Laborantin(e) en biologie', 'Laboratoire;Expérimentation;Microscope;Analyses;Biochimie', 'On l''appelle aussi Technicien d’analyses biomédicales. Le laborantin est chargé de réaliser des analyses médicales, notamment afin de pouvoir diagnostiquer une maladie. Il effectue souvent, des prélèvements lui-même et est donc en contact aussi bien avec des patients qu''avec ... des animaux de laboratoire. Certains laboratoires sont spécialisés dans la recherche de virus, de parasites, dans l''analyse du sang ou de l''ADN mais bien souvent, la laborantin doit se montrer polyvalent !  Pour effectuer des analyses, il travaille avec des appareils de biochimie de pointe et du petit matériel de laboratoire dont il maîtrise l''utilisation. Les résultats de ses analyses sont ensuite interprétés par des médecins ou des chercheurs. \r\n', 'Sciences de la vie\r\n', 'Laboratoires d''analyses;Hôpital/clinique;Centre/Laboratoires de recherche\r\n', NULL, 'https://www.youtube.com/watch?v=s6YuoEeYZyA\r\n', NULL, 'Accueillir le patient; " Effectuer des prélèvements les nommer les classer " ;Réaliser des analyses de sang ou de sécrétions;Effectuer des analyses de tissus;Respecter des protocoles définis;Manipuler les outils informatiques;Entretenir le matériel/gérer son approvisionnement;"Effectuer des tâche de secrétariat (prise de rendez-vous mettre à jour les dossiers des patients etc. )"\r\n', '(à déterminer)\r\n', 'Biologie;Chimie;Informatique/nouvelles technologies;Mathématiques;Anglais\r\n', 'être habile & méticuleux (manipulation de matériel d''analyses, d''appareils électroniques)";capacités d''observation;capacité à travailler en équipe;être méthodique,être habile;créativité;capacité à travailler en équipe;ouverture & flexibilité,créativité;minutie & habilité;esthétique;technicité,endurance;adaptabilité;aisance avec les animaux,Gestion;Marketting;Flexibilité,Connaissance du droit;Savoir gérer des personnes en conflit;Savoir négocier;"Être discret\r\n', 'Peu de monotonie;Plaisir de la recherche;Travail d''équipe;Au coeur des nouvelles technologies\r\n', 'Résistance physique / travail debout;Manipulation de prélèvements contaminés;Travail de nuit/jours fériés\r\n', 'Investigateur\r\n', 'Bac +2 (à déterminer)\r\n', 1480, 'http://fr.freepik.com/vecteurs-libre/petit-scientifique-avec-des-elements-de-laboratoire_847097.htm#term=laboratory&page=1&position=16;https://www.shutterstock.com/fr/image-vector/mad-professor-grey-bushy-hair-lab-493060063?utm_medium=Affiliate&utm_campaign=Graphic%20resources%20SL&utm_source=39422&irgwc=1\r\n', 'Bio-informaticien;Technicien de Laboratoire médical;Ingénieur des laboratoires dans la police scientifique;Ingénieur en biologie\r\n', 'https://www.orientation.com/metiers/laborantin.html;http://www.regionsjob.com/observatoire-metiers/fiche/laborantin-danalyses-medicales;http://www.onisep.fr/Ressources/Univers-Metier/Metiers/technicien-technicienne-d-analyses-biomedicales\r\n', 0),
(2, 'Ingénieur(e) du son\r\n', 'Studio;Musique;Mixage;Bruitages & effets spéciaux;Enregistrement\r\n', 'À la fois artiste et technicien, l''ingénieur du son assure la qualité du son produit pour une réalisation audiovisuelle, un album de musique, une publicité, un concert ou un spectacle. Il allie pratique musicale et maîtrise de technologies complexes.\r\n', 'Métier artistique\r\n', 'Studio;Salle de spectacle;Plateau de cinéma/de télévision\r\n', 100, 'https://www.youtube.com/watch?v=S2hcBVQL3fE&index=107&list=PLOPuzSwEXDNpZG0X24rFQoQZ_nZhA8v4U\r\n', '', 'Choix et mise en place du matériel;Entretien du matériel;Prise et enregistrement du son;"Mixage montage réalisation d''effets spéciaux";"Manipulation du son (adapter le son au style musical améliorer la qualité du son enlever les bruits parasites etc.";Direction d''équipe/Communiquer avec les autres techniciens\r\n', '\r\n(à déterminer)\r\n', 'Musique;Technologie/Informatique;Physique', '', 'Peu de monotonie;Travail d''équipe;Rencontres/découvertes;Au coeur des nouvelles technologies\r\n', 'Grande variabilité des horaires/ Travail de nuit;Manipulation de matériel lourd/volumineux;Travail en extérieur\r\n', 'Artiste\r\n', 'Bac +2/+5 (à déterminer)\r\n', 2440, NULL, 'Directeur/trice technique spectacle;Régisseur/euse général/e;Régisseur son\r\n', 'http://www.onisep.fr/Ressources/Univers-Metier/Metiers/ingenieur-ingenieure-du-son;http://www.cidj.com/article-metier/ingenieur-du-son;http://www.lesmetiers.net/orientation/p1_194111/ingenieur-du-son\r\n', 0),
(3, 'Menuisier\r\n', 'Bois;Artisant;Meubles;Travail manuel;Artisanat;Création\r\n', 'Le menuisier est un artisant qui traditionnellement, travaille le bois, et ce essentiellement sur mesure. Il est souvent amené à concevoir des portes, des fenêtres ou bien encore des meubles. Aliant la créativité, l''esthétique et la technicité, il fait preuve d''une grande minutie afin de réaliser un travail soigné.\r\n', 'Artisan\r\n', 'Atelier;Chantier;Entreprise\r\n', 100, 'https://www.youtube.com/watch?v=m9OmZJxzGxw\r\n', 'http://www.menuiserie-soulier.fr/images/index/photo2_g.jpg;http://www.daugear-menuiserie.fr/ressources/images/661a7ca13b45.jpg;http://www.menuiserie-breton.fr/media/3906/big/artisan-menuisier-ebeniste-vaas-sarthe.jpg\r\n', 'Choix des matériaux;Fabrication sur mesure;"Préparation : mesure traçage";Decoupage;"Ajustement poncage rabotage";Vernissage;Pose de l''élément fini\r\n', 'Ecole ou apprentissage\r\n', 'Dessin technique;Connaissances du bois (Physique);Utilisation des machines (Technologie);Arts plastiques;Mathématiques\r\n', NULL, 'Peu de monotonie;Travail créatif et artistique;Autonomie;Relation client\r\n', 'Respect des délais;Travail physique;Manipulation d''outils dangereux\r\n', 'Réaliste\r\n', 'CAP/Bac Pro\r\n', 1480, NULL, 'Charpentier;Ebéniste\r\n', 'http://www.onisep.fr/Ressources/Univers-Metier/Metiers/menuisier-menuisiere;https://www.orientation.com/metiers/menuisier.html;http://www.cidj.com/article-metier/menuisier\r\n', 0),
(4, 'Maître-chien\r\n', 'Animaux;Chiens;Sécurité;Surveillance\r\n', 'Le maître-chien est chargé de former et d''éduquer des chiens. Des chiens qui peuvent par la suite se voir assigner des missions très variées telles que la détection d''explosifs, la recherche de stupéfiants ou encore l''interception d''individus dangereux.\r\n', 'Sécurité\r\n', 'Extérieur;Montagne;Société de gardiennage\r\n', 50, 'https://www.youtube.com/watch?v=m8-Fu29KoiU\r\n', 'http://cdn3.agentsdesecurite.fr/78-thickbox_default/agent-cynophile-maitre-chien.jpg;http://www.emanimo.fr/wp-content/uploads/2016/11/maitre-chien-de-l-armee-de-l-air.jpg;http://www.easypets.fr/actualites-chiens-chats-cheval/wp-content/uploads/2015/08/2948612769_1_3.jpg\r\n', 'Dressage des animaux;Détection de stupéfiants;Détection d''explosifs;Recherche de personnes disparus;Interpélations d''individus dangereux;Surveillance;Entraînement des chiens\r\n', '(très variable)\r\n', 'Education physique;Pédagogie;Psychologie;Biologie\r\n', NULL, 'Relation privilégiée avec les animaux;Travail gratifiant;Variété des situations;Aide à la personne\r\n', 'Horaires difficiles;Travail dangereux;Eprouvant physiquement\r\n', 'Réaliste\r\n', 'CAP\r\n', 1480, 'https://www.technidog.com/actualites/wp-content/uploads/2016/03/head-devenir-maitre-chien-412x300.jpg;https://www.technidog.com/actualites/wp-content/uploads/2016/03/devenir-maitre-chien-infographie.jpg\r\n', 'Eleveur de chien;Agent de sécurité;Policier/Gendarme\r\n', 'http://www.onisep.fr/Ressources/Univers-Metier/Metiers/maitre-chien;http://www.cidj.com/article-metier/maitre-chien\r\n', 0),
(5, 'Agriculteur\r\n', 'Végétaux;Animaux;Gestion\r\n', 'L''agriculteur dispose de diverses casquettes : à la fois chef d''entreprise et ouvrier agricole, il doit veiller au bon fonctionnement de sa ferme ou élevage et à la conduite de son entreprise, du point de vue administratif comme commercial. C''est en réfléchissant à une stratégie commerciale, en diversifiant ses produits (transformés ou non) et services, et en veillant au respect des normes en vigueur quant à la production qu''il assure le futur de son exploitation.\r\n', 'Sciences de la vie\r\n', 'Ferme privée;Terre en fermage (location)\r\n', 100, 'https://www.youtube.com/watch?v=y0ijntOejm4\r\n', 'https://cdn.pixabay.com/photo/2015/06/30/22/16/farmer-826912_960_720.jpg;https://cdn.pixabay.com/photo/2016/11/21/15/58/agriculture-1846116_960_720.jpg\r\n', 'Gestion de l''exploitation;Gestion d''équipe;Entretien de partenariats;"Effection des tâches liées à son type d''exploitation (élevage semis et récolte transformation des produits ...)"\r\n', '(très variable)\r\n', 'Sciences du vivant;Mathématiques;Chimie\r\n', NULL, 'Gestion de son exploitation;Proximité avec la nature;Faire partie de la vie de sa région;Variété des choix d''exploitation\r\n', 'Devoir rester à l''écoute des demandes alimentaires;Gérer une entreprise à tous les niveaux;S''adapter à son environnement\r\n', 'Entreprenant\r\n', 'CAP/Bac+5\r\n', NULL, NULL, 'Eleveur;Horticulteur;Ingénieur forestier;Conducteur de machines agricoles\r\n', 'http://www.deveniragriculteur.fr/\r\n', 0),
(6, 'Notaire\r\n', 'Droit;Médiation;Contrats;Justice;Commerce\r\n', 'Le notaire joue le rôle d''intermédiaire entre des personnes, et aussi entre des personnes et la justice, l''Etat. Il la représente dans ses signatures et les documents qu''il rédige, et ainsi ses écrits font office de jugement et sont légaux, officialisant des statuts.\r\n', 'Droit\r\n', 'Etude de notaire\r\n', 50, 'https://www.youtube.com/watch?v=UN5jW22FI2c\r\n', 'https://cdn.pixabay.com/photo/2016/05/25/19/51/stamp-1415731_960_720.jpg;https://cdn.pixabay.com/photo/2013/09/27/17/34/nasal-shield-187327_960_720.jpg\r\n', 'Régler des conflits légaux entre deux personnes;"Etablir des contrats (mariage cession de biens ...)";"Dresser des documents officiels (testament ...)"\r\n', 'Universitaire ou formation\r\n', 'Français\r\n', NULL, 'Travaille sans ou en petites équipes;"Gère son activité (horaires\r\n', 'Flexibilité de l''établissement du notaire\r\n', 'Social\r\n', 'Bac+5/+7\r\n', NULL, NULL, 'Clerc-rédacteur;Formaliste;Comptable-taxateur;Négociateur\r\n', 'http://www.notaires.fr/;http://www.fnsea.fr/\r\n', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
