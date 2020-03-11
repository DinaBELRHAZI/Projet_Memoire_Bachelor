-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 14:14
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre_cours_matiere`
--

DROP TABLE IF EXISTS `chapitre_cours_matiere`;
CREATE TABLE IF NOT EXISTS `chapitre_cours_matiere` (
  `ID_CHAP` int(11) NOT NULL,
  `ID_COURS` int(11) NOT NULL,
  `ID_PROF` int(11) DEFAULT NULL,
  `CHAPITRE` text,
  `DESCRIPTION` text,
  `FICHIER` text,
  PRIMARY KEY (`ID_CHAP`),
  KEY `ID_PROF` (`ID_PROF`),
  KEY `ID_COURS` (`ID_COURS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `ID_CLASSE` int(11) NOT NULL,
  `ID_ETUDIANT` int(11) DEFAULT NULL,
  `NOM_CLASSE` text,
  PRIMARY KEY (`ID_CLASSE`),
  KEY `ID_ETUDIANT` (`ID_ETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cours_matiere`
--

DROP TABLE IF EXISTS `cours_matiere`;
CREATE TABLE IF NOT EXISTS `cours_matiere` (
  `ID_COURS` int(11) NOT NULL,
  `ID_CLASSE` int(11) DEFAULT NULL,
  `ID_PROF` int(11) DEFAULT NULL,
  `COURS` text,
  `DESCRIPTION_COURS` text,
  PRIMARY KEY (`ID_COURS`),
  KEY `ID_CLASSE` (`ID_CLASSE`),
  KEY `ID_PROF` (`ID_PROF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `est_compose`
--

DROP TABLE IF EXISTS `est_compose`;
CREATE TABLE IF NOT EXISTS `est_compose` (
  `ID_TEST` int(11) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL,
  KEY `ID_QUESTION` (`ID_QUESTION`),
  KEY `ID_TEST` (`ID_TEST`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID_ETUDIANT` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_ETUDIANT` text,
  `PRENOM_ETUDIANT` text,
  `MAIL` text,
  `MDP_E` text,
  PRIMARY KEY (`ID_ETUDIANT`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_ETUDIANT`, `NOM_ETUDIANT`, `PRENOM_ETUDIANT`, `MAIL`, `MDP_E`) VALUES
(1, 'belrhazi', 'dinatest', 'dina@gmail.com', 'ed6e2ba79981a2b7a2bfe64abc4ba40b6586e391');

-- --------------------------------------------------------

--
-- Structure de la table `historique_detaille`
--

DROP TABLE IF EXISTS `historique_detaille`;
CREATE TABLE IF NOT EXISTS `historique_detaille` (
  `ID_ETUDIANT` int(11) NOT NULL,
  `ID_QUESTION` int(11) NOT NULL,
  `ID_REPONSE` int(11) NOT NULL,
  `ID_TEST` int(11) NOT NULL,
  `NB_POINT_OBTENU` int(11) DEFAULT NULL,
  `OBSERVATION_PAR_REPONSE` text,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID_QUESTION`,`ID_ETUDIANT`,`ID_REPONSE`,`ID_TEST`),
  KEY `ID_REPONSE` (`ID_REPONSE`),
  KEY `ID_ETUDIANT` (`ID_ETUDIANT`) USING BTREE,
  KEY `ID_QUESTION` (`ID_QUESTION`) USING BTREE,
  KEY `ID_TEST` (`ID_TEST`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `ID_COURS` int(11) NOT NULL,
  `ID_MATIERE` int(11) NOT NULL,
  `NOM_MATIERE` text,
  `DESCRIPTION_MATIERE` text,
  PRIMARY KEY (`ID_MATIERE`),
  KEY `ID_COURS` (`ID_COURS`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passe_test`
--

DROP TABLE IF EXISTS `passe_test`;
CREATE TABLE IF NOT EXISTS `passe_test` (
  `ID_ETUDIANT` int(11) NOT NULL,
  `ID_TEST` int(11) NOT NULL,
  `NOTE_OBTENU` int(11) DEFAULT NULL,
  `OBSERVATIONS` text,
  `TEST_ADMISSION` text,
  `NB_POINT_OBTENU` int(11) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`ID_TEST`) USING BTREE,
  KEY `ID_ETUDIANT` (`ID_ETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `ID_PROF` int(11) NOT NULL,
  `NOM_PROF` text,
  `PRENOM_PROF` text,
  `MAIL` text,
  `MDP` text,
  PRIMARY KEY (`ID_PROF`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `ID_QUESTION` int(11) NOT NULL,
  `ID_PROF` int(11) DEFAULT NULL,
  `ID_CLASSE` int(11) DEFAULT NULL,
  `ID_COURS` int(11) DEFAULT NULL,
  `ID_CHAP` int(11) DEFAULT NULL,
  `DESCRIPTION_QUESTION` text,
  `FICHIER_QUESTION` text,
  `TEXTE_QUESTION` text,
  `NB_POINT_QUESTION` int(11) DEFAULT NULL,
  `NB_REPONSES` int(11) DEFAULT NULL,
  `DATE_CREATION` date DEFAULT NULL,
  `TEMPS_QUESTION` time DEFAULT NULL,
  PRIMARY KEY (`ID_QUESTION`),
  KEY `ID_PROF` (`ID_PROF`) USING BTREE,
  KEY `ID_CLASSE` (`ID_CLASSE`) USING BTREE,
  KEY `ID_CHAP` (`ID_CHAP`) USING BTREE,
  KEY `ID_COURS` (`ID_COURS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `ID_QUESTION` int(11) NOT NULL,
  `ID_REPONSE` int(11) NOT NULL,
  `DESCRIPTION_REPONSE` text,
  `FICHIER_REPONSE` text,
  `TEXTE_REPONSE` text,
  `NB_POINT_REPONSE` int(11) DEFAULT NULL,
  `FLAG_BONNE_REPONSE` text,
  `FLAG_MAUVAISE_REPONSE` text,
  PRIMARY KEY (`ID_REPONSE`) USING BTREE,
  KEY `ID_QUESTION` (`ID_QUESTION`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `ID_TEST` int(11) NOT NULL,
  `ID_CLASSE` int(11) DEFAULT NULL,
  `ID_COURS` int(11) NOT NULL,
  `ID_MATIERE` int(11) NOT NULL,
  `ID_PROF` int(11) DEFAULT NULL,
  `DESCRIPTION_TEST_MATIERE` text,
  `NOM_CREATEUR_TEST` text,
  `DATE_CREATION` date DEFAULT NULL,
  `NB_QUESTION` int(11) DEFAULT NULL,
  `NB_POINT` int(11) DEFAULT NULL,
  `TEMPS_ESTIME` time DEFAULT NULL,
  `FLAG_GENERATION_ALEATOIR` text,
  `FLAG_CONTROLE` text,
  `FLAG_TEST_ADMISSION` text,
  `NIVEAU` text,
  `TEST_ADMISSION_REGROUPE` text,
  `TEST_PREREQUIS` text,
  `TEST_VALIDATION_ACQUIS` text,
  PRIMARY KEY (`ID_TEST`),
  KEY `ID_COURS` (`ID_COURS`) USING BTREE,
  KEY `ID_PROF` (`ID_PROF`) USING BTREE,
  KEY `ID_CLASSE` (`ID_CLASSE`) USING BTREE,
  KEY `ID_MATIERE` (`ID_MATIERE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
