-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql209.infinityfree.com
-- Généré le :  lun. 28 juil. 2025 à 20:03
-- Version du serveur :  11.4.7-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `if0_39289255_resonia`
--

-- --------------------------------------------------------

--
-- Structure de la table `tb_affinite`
--

CREATE TABLE `tb_affinite` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(125) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Risque` varchar(2000) NOT NULL,
  `Type` int(11) NOT NULL,
  `Codex` varchar(20) DEFAULT 'Neant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_affinite`
--

INSERT INTO `tb_affinite` (`Id`, `Nom`, `Description`, `Risque`, `Type`, `Codex`) VALUES
(30, 'Double', 'Fusion immÃ©diate\r\n\r\nComprÃ©hension mutuelle\r\n\r\nAnticipation des actions et des pensÃ©es\r\n\r\nReconnaissance de soi dans lâ€™autre <strong>Double</strong>\r\n\r\nFacilitÃ© des Ã©changes\r\n\r\nMÃªme longueur dâ€™ondes\r\n\r\nDissensions rapidement rÃ©solues ou Ã©vitÃ©es', 'Risque de compÃ©tition car on se voit en mieux dans lâ€™autre <strong>Double</strong>\r\nâž¡ PrivilÃ©gier l`entraide et la coopÃ©ration \r\n\r\nRisque de se lasser que l`autre <strong>Double</strong> ne nous apporte rien\r\nâž¡ Porter attention et mÃ©rite aux diffÃ©rences\r\n\r\nRisque de passer Ã  cÃ´tÃ© de la relation si animositÃ© et mÃ©fiance initiales âž¡ CrÃ©er des occasions pour discuter seul Ã  seul Ã  cÅ“ur ouvert\r\n\r\nRisque de se sentir effacÃ© invisibilisÃ© par lâ€™autre <strong>Double </strong>âž¡ ManÅ“uvrer ensemble dans un but commun', 1, '1234'),
(31, 'MÃ©canique huilÃ©e', 'Apprivoisement rapide et Ã©vident\r\n\r\nPousse Ã  lâ€™action et Ã  la rÃ©flexion dans la mÃªme direction\r\n\r\nExcellent binÃ´me\r\n\r\nCommunication essentielle et simple\r\n\r\nComprÃ©hension quasi-parfaite\r\n\r\nActions et pensÃ©es inversÃ©es donc complÃ©mentaritÃ© dans lâ€™Ã©laboration de projets futurs\r\n', 'Risque de dÃ©pendance Ã  cause dâ€™une complÃ©mentaritÃ© qui finit par avoir besoin de la <strong>Projection </strong>pour fonctionner correctement âž¡ Favoriser une autonomie pour ne pas dÃ©pendre des actions et des pensÃ©es de la <strong>Projection</strong>\r\n\r\nRisque de trop se reposer sur la <strong>Projection</strong> dâ€™attendre quâ€™il agisse ou pense Ã  sa place âž¡ Communiquer et synthÃ©tiser ses idÃ©es et ses actions faire des compte-rendus ', 2, '1324'),
(32, 'Projection', 'MÃªme faÃ§on dâ€™agir \r\n\r\nMÃªme vision des choses essentielles \r\n\r\nAdmiration de la <strong>MÃ©canique huilÃ©e</strong> car il incarne ce que lâ€™on voudrait Ãªtre ou apporter Ã  sa vie', 'Risque de vouloir trop ressembler Ã  la <strong>MÃ©canique huilÃ©e</strong> Ã  cause dâ€™une fascination exagÃ©rÃ©e en diluant sa propre personnalitÃ© âž¡ Prendre du recul sur sa propre importance et valoriser son amour-propre\r\n\r\nRisque de romancer la vie de la <strong>MÃ©canique huilÃ©e</strong> et de ne pas le voir tel quâ€™il est âž¡ Prendre conscience des problÃ¨mes de chacun', 3, '3214'),
(33, 'Echo', 'Connexion naturelle et immÃ©diate\r\n\r\nImpression de se retrouver en lâ€™autre <strong>Ã‰cho</strong>\r\n\r\nPousse Ã  agir\r\n\r\nRelation rassurante car mÃªmes bases et valeurs\r\n\r\nComprÃ©hension profonde\r\n', 'Risque de frustration de voir lâ€™autre <strong>Ã‰cho </strong>avancer plus vite que soi âž¡ Ne pas se comparer Ã  lâ€™autre <strong>Ã‰cho</strong> avoir de lâ€™estime pour lâ€™autre <strong>Ã‰cho</strong>\r\n\r\nRisque de jugement des actions de lâ€™autre <strong>Ã‰cho</strong> ou de ce quâ€™il est âž¡ Accepter lâ€™autre <strong>Ã‰cho</strong> et communiquer\r\n\r\nRisque de nier la ressemblance et de vouloir Ã  tout prix se dÃ©marquer sans succÃ¨s âž¡ Mettre en valeur la proximitÃ© de faÃ§on dâ€™Ãªtre et de penser y voir une possibilitÃ© de mieux se comprendre et dâ€™Ã©voluer\r\n', 4, '2134'),
(34, 'Planificateur', 'Ressemblance dans la faÃ§on dâ€™Ãªtre et dâ€™agir\r\n\r\nImpression de dÃ©jÃ -vu\r\n\r\nAdmiration qui pousse Ã  lâ€™action\r\n\r\nPensÃ©es rÃ©alisÃ©es par le <strong>Premier de cordÃ©e</strong> Sensation dâ€™Ãªtre compris sans avoir Ã  lâ€™oraliser', 'Risque de sentiment dâ€™infÃ©rioritÃ© par rapport au <strong>Premier de cordÃ©e</strong> âž¡ ConnaÃ®tre les succÃ¨s et les Ã©checs du <strong>Premier de cordÃ©e</strong> pour se sentir Ã©gal\r\n\r\nRisque dâ€™incomprÃ©hension des actions du <strong>Premier de cordÃ©e</strong> qui semblent ne pas avoir Ã©tÃ© rÃ©flÃ©chies âž¡ Faire confiance au <strong>Premier de cordÃ©e</strong> et ne pas Ãªtre dans le jugement', 5, '2314'),
(35, 'Premier de cordÃ©e', 'ComprÃ©hension profonde du <strong>Planificateur</strong>\r\n\r\nSatisfait les attentes du <strong>Planificateur</strong> \r\n\r\nLe <strong>Planificateur</strong> montre au jour ce quâ€™on pense et nous permet dâ€™en prendre conscience \r\n\r\nPrise de recul sur ses actions qui sont analysÃ©es par le <strong>Planificateur</strong>', 'Risque de passer Ã  cÃ´tÃ© de la relation car on peut ne pas y voir dâ€™intÃ©rÃªt âž¡ Prendre du recul sur la relation pour y voir plus clair\r\n\r\nRisque dâ€™une illusion de jugement face Ã  nos actions PossibilitÃ© dâ€™Ã©loignement volontaire âž¡ Communiquer sur ses craintes possibles\r\n', 6, '3124'),
(36, 'ComplÃ©ment', 'Admiration face Ã  ce que lâ€™autre <strong>ComplÃ©ment </strong> pense\r\n\r\nComplicitÃ© Ã©vidente due au fait dâ€™une symbiose entre la pensÃ©e et la volontÃ©\r\n', 'Risque de dÃ©ception face aux diffÃ©rentes actions/pensÃ©es de lâ€™autre <strong>ComplÃ©ment</strong> car la ressemblance apparente se heurte Ã  la faÃ§on de penser diffÃ©rente qui influe sur les actions âž¡ Communiquer sur la maniÃ¨re de faire les actions futures\r\n\r\nRisque de ne pas se sentir compris âž¡ Communiquer sur sa faÃ§on de voir les choses\r\n', 7, '1243'),
(37, 'Couteau-suisseutils', 'MÃªme faÃ§on de voir la vie et de rÃ©flÃ©chir\r\n\r\nComprÃ©hension Ã©vidente\r\n\r\nPossibilitÃ© de dÃ©velopper un regard diffÃ©rent sur ses propres actions qui diffÃ¨rent de celles de lâ€™autre <strong>BoÃ®te Ã  outils</strong>\r\n\r\nDÃ©couverte dâ€™une part de lâ€™autre <strong>BoÃ®te Ã  outils</strong> inconnue qui nous remet en question', 'Risque de discorde sur la maniÃ¨re dont les actions doivent Ãªtre menÃ©es et donc ralentissement possible si le dÃ©saccord est trop grand âž¡ Planification des actions avec lâ€™autre <strong>BoÃ®te Ã  outils</strong> pour palier aux discordes futures possibles', 8, '1432'),
(38, 'Outil', 'MÃªme faÃ§on de voir la vie et de rÃ©flÃ©chir\r\n\r\nComprÃ©hension Ã©vidente\r\n\r\nPossibilitÃ© de dÃ©velopper un regard diffÃ©rent sur ses propres actions qui diffÃ¨rent de celles de lâ€™autre <strong>BoÃ®te Ã  outils</strong>\r\n\r\nDÃ©couverte dâ€™une part de lâ€™autre <strong>BoÃ®te Ã  outils</strong> inconnue qui nous remet en question', 'Risque dâ€™ennui dÃ» au manque dâ€™altÃ©ritÃ© dans la faÃ§on dâ€™agir possible incomprÃ©hension des actes de lâ€™autre <strong>BoÃ®te Ã  outils</strong> âž¡ Laisser de la place aux actions de lâ€™autre <strong>BoÃ®te Ã  outils</strong> sans interfÃ©rer', 9, '1432'),
(39, 'Cerveau', 'Bonne comprÃ©hension\r\n\r\nAide Ã  agir rapidement\r\n\r\nCoordination\r\n\r\nPoint de vue diffÃ©rent qui permet de porter un autre regard sur le monde\r\n\r\nIntÃ©rÃªt pour lâ€™<strong>Homme de main</strong>', 'Risque de laisser lâ€™autre toujours agir Ã  sa place et de lâ€™influencer sans avoir de recul sur la situation âž¡ Penser Ã  prendre du recul et analyser la situation\r\n\r\nRisque de se sentir effacÃ© face aux rÃ©ussites commune face Ã  lâ€™autre âž¡ Communiquer sur son besoin de reconnaissance\r\n\r\nRisque de vivre par procuration par apport Ã  lâ€™autre âž¡ Prendre ses propres dÃ©cisions\r\n', 10, '1342'),
(40, 'Homme de main', 'Bonne comprÃ©hension\r\n\r\nIntellectualisation de ses propres actions par le <strong>Cerveau</strong>\r\n\r\nPousse Ã  agir et aide Ã  mieux \r\nse comprendre soi-mÃªme\r\n', 'Risque de se laisser dÃ©border par la situation âž¡ Agir avec discernement\r\n\r\nRisque de sentiment dâ€™infÃ©rioritÃ© face aux idÃ©es de lâ€™autre âž¡ Imposer ses idÃ©es\r\n', 11, '1423'),
(41, 'DÃ©saccordÃ©', 'Excellente comprÃ©hension\r\n\r\nBonne complicitÃ© dans lâ€™Ã©laboration ou dans lâ€™exÃ©cution dâ€™une tÃ¢che\r\n', 'Risque de foncer dans une fausse bonne idÃ©e âž¡ Prendre du recul et demander des conseils Ã  un tiers\r\n\r\nRisque dâ€™ennui dÃ» Ã  la similaritÃ© des actions et des pensÃ©es âž¡ Multiplier les interactions avec dâ€™autres types\r\n', 12, '2143'),
(42, 'DÃ©saccordÃ©', 'Excellente comprÃ©hension\r\n\r\nBonne complicitÃ© dans lâ€™Ã©laboration ou dans lâ€™exÃ©cution dâ€™une tÃ¢che', 'Risque de foncer dans une fausse bonne idÃ©e âž¡ Prendre du recul et demander des conseils Ã  un tiers\r\n\r\nRisque dâ€™ennui dÃ» Ã  la similaritÃ© des actions et des pensÃ©es âž¡ Multiplier les interactions avec dâ€™autres types\r\n', 13, '2143'),
(43, 'Inspirant', 'Pousse Ã  lâ€™action en donnant une motivation profonde\r\n\r\nCrÃ©e un axe dâ€™amÃ©lioration pour les deux types\r\n', 'Risque de conforter le <strong>RÃ©vÃ©lateur</strong> dans une mauvaise dÃ©cision âž¡ Ne pas prendre en charge les actions du <strong>RÃ©vÃ©lateur</strong>\r\n\r\nRisque de vouloir tout contrÃ´ler âž¡ Laisser de lâ€™autonomie au <strong>RÃ©vÃ©lateur</strong>', 14, '2413'),
(44, 'RÃ©vÃ©lateur', 'Pousse Ã  la rÃ©flexion et Ã  la remise en question en donnant une image claire de lâ€™<strong>Inspirant</strong>\r\n\r\nCrÃ©e un axe dâ€™amÃ©lioration pour les deux types\r\n\r\n', 'Risque de faire perdre sa confiance en lui âž¡ Se focaliser sur les bons cÃ´tÃ©s de lâ€™<strong>Inspirant</strong> et pas sur ses dÃ©fauts', 15, '3142'),
(45, 'CompÃ©titeur', 'ProximitÃ© dans la faÃ§on dâ€™agir et de penser\r\n\r\nAdmiration de lâ€™autre <strong>CompÃ©titeur</strong> qui incarne ce que lâ€™on aspire Ã  Ãªtre', 'Risque de confrontation nÃ©e de la jalousie envers lâ€™autre <strong>CompÃ©titeur</strong> âž¡ Chercher Ã  s`amÃ©liorer soi-mÃªme et prendre lâ€™autre <strong>CompÃ©titeur</strong> comme une source dâ€™inspiration et pas comme un rival\r\n\r\nRisque de frustration due Ã  lâ€™incomprÃ©hension nÃ©e de lâ€™Ã©cart entre lâ€™autre <strong>CompÃ©titeur</strong> et soi-mÃªme âž¡ Apprendre Ã  connaÃ®tre lâ€™autre <strong>CompÃ©titeur</strong>', 16, '4231'),
(46, 'Admirateur', 'MÃªme faÃ§on de penser\r\n\r\nAdmiration certaine devant les actions de lâ€™autre car cela concorde avec ce quâ€™il tend Ã  Ãªtre', 'Risque dâ€™Ãªtre passif devant les actions brillantes du <strong>Renfort</strong> âž¡ Devenir plus autonome et moins compter sur le <strong>Renfort</strong>\r\n\r\nRisque de freiner les actions du <strong>Renfort</strong> Ãªtre un boulet âž¡ Laisser de lâ€™autonomie et de lâ€™espace au <strong>Renfort</strong>\r\n\r\nRisque dâ€™idÃ©aliser les actions du <strong>Renfort</strong> et de se dÃ©nigrer âž¡ Prendre confiance en ce que lâ€™on fait', 17, '2431'),
(47, 'Renfort', 'MÃªme faÃ§on de penser\r\n\r\nAide lâ€™<strong>Admirateur</strong> Ã  prendre du recul sur lui\r\n\r\nConcrÃ©tise la volontÃ© de lâ€™<strong>Admirateur</strong>', 'Risque de tout prendre en charge âž¡ Laisser de lâ€™autonomie Ã  lâ€™<strong>Admirateur</strong>\r\n\r\nRisque de juger les actions de lâ€™<strong>Admirateur</strong> âž¡ Baisser ses attentes\r\n\r\nRisque dâ€™attentes trop Ã©levÃ©es âž¡ Donner des tÃ¢ches prÃ©cises Ã  la hauteur des capacitÃ©s de lâ€™<strong>Admirateur</strong>', 18, '4132'),
(48, 'FidÃ¨le', 'Excellente connaissance de ce quâ€™est le <strong>Terrain dangereux</strong>\r\n\r\nDÃ©masque toutes les facettes du <strong>Terrain dangereux</strong> mÃªme celles cachÃ©es\r\n\r\nConfiance envers le <strong>Terrain dangereux</strong> Ã©vident', 'Risque de dÃ©sillusion dÃ» au fait dâ€™une mauvaise perception du <strong>Terrain dangereux</strong> âž¡ Communiquer sur ses attentes\r\n\r\nRisque de fascination qui pourrait bloquer un projet en omettant de communiquer certaines informations âž¡ Ne pas surestimer et avoir trop dâ€™attentes\r\n', 19, '2341'),
(49, 'Terrain dangereux', 'Voit la profondeur du <strong>FidÃ¨le</strong>\r\n\r\nAnticipation des actions des pensÃ©es et des volontÃ©s du <strong>FidÃ¨le</strong>\r\n\r\nDistance envers le <strong>FidÃ¨le</strong> malgrÃ© une confiance possible', 'Risque dâ€™idÃ©alisation du <strong>FidÃ¨le</strong> âž¡ Apprendre Ã  connaÃ®tre le <strong>FidÃ¨le</strong> en profondeur ne pas le catÃ©goriser\r\n\r\nRisque de passer Ã  cÃ´tÃ© de la relation de ne pas voir dâ€™intÃ©rÃªt dans le <strong>FidÃ¨le</strong> âž¡ Rester ouvert et ne pas avoir dâ€™a priori sur le <strong>FidÃ¨le</strong>', 20, '4123'),
(50, 'AccÃ©lÃ©rateur', 'MÃªme faÃ§on dâ€™agir\r\n\r\nRecul sur ce quâ€™est le <strong>Frein </strong>ce qui permet dâ€™analyser les bonnes ou mauvaises dÃ©cisions du <strong>Frein</strong>', 'Risque de surinterprÃ©ter les dÃ©cisions du <strong>Frein</strong> âž¡ Laisser agir le <strong>Frein</strong> avant de juger ses dÃ©cisions\r\n\r\nRisque de dÃ©pendre des dÃ©cisions du <strong>Frein</strong> âž¡ Prendre du recul sur ses actions', 21, '3241'),
(51, 'Frein', 'MÃªme faÃ§on dâ€™agir\r\n\r\nVolontÃ© de lâ€™<strong>AccÃ©lÃ©rateur</strong> mise en question par le Frein qui va dÃ©terminer la suite des actions\r\n\r\nAdmiration Ã©vidente envers lâ€™<strong>AccÃ©lÃ©rateur</strong>', 'MÃªme faÃ§on dâ€™agir\r\n\r\nVolontÃ© de lâ€™<strong>AccÃ©lÃ©rateur</strong> mise en question par le Frein qui va dÃ©terminer la suite des actions\r\n\r\nAdmiration Ã©vidente envers lâ€™<strong>AccÃ©lÃ©rateur</strong>', 22, '4213'),
(52, 'CollÃ¨gue', 'Excellente comprÃ©hension\r\n\r\nConfiance dans ce que fait lâ€™autre <strong>CollÃ¨gue</strong> car il rÃ©alise notre volontÃ©\r\n\r\nAmÃ©lioration continue avec lâ€™autre <strong>CollÃ¨gue</strong> parce qu`il reprÃ©sente ce que lâ€™on pense vouloir Ãªtre', 'Risque de se saboter en voulant sâ€™amÃ©liorer âž¡ Prendre un avis extÃ©rieur sur la situation\r\n\r\n\r\nRisque de sâ€™entraÃ®ner mutuellement dans de mauvaises dÃ©cisions âž¡ RÃ©flÃ©chir sans lâ€™autre MagnÃ©tique', 23, '3412'),
(53, 'MagnÃ©tique', 'Impression de connaÃ®tre la personne en profondeur\r\n\r\nFascination pour lâ€™autre <strong>MagnÃ©tique</strong> qui est tout ce que lâ€™on nâ€™est pas\r\n\r\nBonne complÃ©mentaritÃ© facilitÃ© dâ€™action\r\n', 'Risque de vouloir ressembler Ã  lâ€™autre <strong>MagnÃ©tique</strong> âž¡ DÃ©velopper son amour-propre avoir une vision optimiste de ses actions\r\n\r\nRisque de vouloir crÃ©er un lien avec lâ€™autre <strong>MagnÃ©tique</strong> mÃªme s`il est toxique âž¡ IntÃ©grer dâ€™autres types de personnes dans son cercle\r\n\r\nRisque dâ€™incomprÃ©hension et donc d`affrontement âž¡ Mettre de la distance dans la situation et communiquer pourquoi\r\n', 24, '4321'),
(54, 'Coach', 'Analyse les actions de la <strong>Boussole</strong> et lâ€™aide Ã  prendre des dÃ©cisions\r\n\r\nAdmiration de ce quâ€™est la <strong>Boussole</strong>', 'Risque de diriger la <strong>Boussole</strong> quitte Ã  lui faire prendre de mauvaises dÃ©cisions âž¡ Prendre en compte les volontÃ©s de la <strong>Boussole</strong>\r\n\r\nRisque de ne pas respecter lâ€™individualitÃ© de la <strong>Boussole</strong> âž¡ Prendre conscience de lâ€™autonomie de la <strong>Boussole</strong>', 25, '4312'),
(55, 'Boussole', 'Aide Ã  concrÃ©tiser les pensÃ©es du <strong>Coach</strong>\r\n\r\nAdmiration des actions du <strong>Coach</strong> tout en analysant ce quâ€™il est', 'Risque de dÃ©pendance au <strong>Coach</strong> âž¡ Ne pas systÃ©matiquement solliciter le <strong>Coach</strong> prendre ses propres dÃ©cisions\r\n\r\nRisque de refuser les bons conseils du <strong>Coach</strong> dÃ» au mauvais jugement de ce quâ€™est vraiment le <strong>Coach</strong> âž¡ Apprendre Ã  connaÃ®tre le <strong>Coach</strong>', 26, '3421');

-- --------------------------------------------------------

--
-- Structure de la table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `Id` int(11) NOT NULL,
  `Vie` varchar(20) NOT NULL,
  `Action` varchar(20) NOT NULL,
  `Pensee` varchar(20) NOT NULL,
  `Volonte` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_categories`
--

INSERT INTO `tb_categories` (`Id`, `Vie`, `Action`, `Pensee`, `Volonte`) VALUES
(1, 'G', 'S', 'SD', 'P'),
(2, 'G', 'S', 'P', 'SD'),
(3, 'G', 'SD', 'S', 'P'),
(4, 'G', 'SD', 'P', 'S'),
(5, 'G', 'P', 'S', 'SD'),
(6, 'G', 'P', 'SD', 'S'),
(7, 'S', 'G', 'SD', 'P'),
(8, 'S', 'G', 'P', 'SD'),
(9, 'S', 'SD', 'G', 'P'),
(10, 'S', 'SD', 'P', 'G'),
(11, 'S', 'P', 'G', 'SD'),
(12, 'S', 'P', 'SD', 'G'),
(13, 'SD', 'S', 'G', 'P'),
(14, 'SD', 'S', 'P', 'G'),
(15, 'SD', 'G', 'S', 'P'),
(16, 'SD', 'G', 'P', 'S'),
(17, 'SD', 'P', 'S', 'G'),
(18, 'SD', 'P', 'G', 'S'),
(19, 'P', 'S', 'SD', 'G'),
(20, 'P', 'S', 'G', 'SD'),
(21, 'P', 'SD', 'S', 'G'),
(22, 'P', 'SD', 'G', 'S'),
(23, 'P', 'G', 'S', 'SD'),
(24, 'P', 'G', 'SD', 'S');

-- --------------------------------------------------------

--
-- Structure de la table `tb_personne`
--

CREATE TABLE `tb_personne` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(125) NOT NULL,
  `Id_Categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tb_personne`
--

INSERT INTO `tb_personne` (`Id`, `Nom`, `Id_Categorie`) VALUES
(6, 'ZAOUI Adam', 23),
(7, 'FAIVRE Elena', 14),
(8, 'ONNI Mathias', 7),
(9, 'BELAÃD Myriam', 17),
(10, 'BELAÃD Adam', 1),
(11, 'HAMIDI Liesse', 7),
(12, 'HAMIDI Noria', 1),
(13, 'ZERMANI Bilel', 8),
(14, 'PINEAUT Audrey', 6),
(15, 'ELUSUE Samuel', 5),
(16, 'BOUBEZOULA Zinedine', 24),
(17, 'RETOUT OphÃ©lie', 2),
(18, 'BENAOUDA Habib', 9),
(21, 'RATEAU Pierre', 19),
(22, 'Anne Claire 1', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tb_affinite`
--
ALTER TABLE `tb_affinite`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tb_personne`
--
ALTER TABLE `tb_personne`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tb_affinite`
--
ALTER TABLE `tb_affinite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `tb_personne`
--
ALTER TABLE `tb_personne`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
