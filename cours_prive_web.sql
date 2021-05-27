-- Host: https://deploywebgroup9.herokuapp.com/

-- Base de données: `cours_prive_web`
-- Base de données externe: heroku_f5585a0a335f715

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id_user` int(11) NOT NULL AUTO_INCREMENT,
    `email` varchar(100) NOT NULL,
    `passe` varchar(25) NOT NULL,
    `hash` varchar(100) DEFAULT 'hash',
    `nom` varchar(50) NOT NULL,
    `prenom` varchar(50) NOT NULL,
    `data_naissance` date NOT NULL,
    `telefone` varchar(15) DEFAULT NULL,
    PRIMARY KEY (`id_user`),
    CONSTRAINT `email` UNIQUE (`email`),
    CONSTRAINT `telefone` UNIQUE (`telefone`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
    `id_status` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(50) NOT NULL,
    PRIMARY KEY (`id_status`)
    ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `langues`;
CREATE TABLE IF NOT EXISTS `langues` (
    `id_langue` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(50) NOT NULL,
    PRIMARY KEY (`id_langue`)
    ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `domaines`;
CREATE TABLE IF NOT EXISTS `domaines` (
    `id_domaine` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(50) NOT NULL,
    PRIMARY KEY (`id_domaine`)
    ) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
    `id_cour` int(11) NOT NULL AUTO_INCREMENT,
    `id_userProf` int(11) NOT NULL,
    `titre` varchar(100) NOT NULL,
    `id_domaine` int(11) NOT NULL,
    `descriptions` varchar(250) DEFAULT NULL,
    `cout` int(11) NOT NULL,
    `id_langue` int(11) NOT NULL,
    `id_status` int default 5 null,
    PRIMARY KEY (`id_cour`),
    KEY `fk_cours_1_idx` (`id_userProf`),
    KEY `fk_cours_2_idx` (`id_domaine`),
    KEY `fk_cours_3_idx` (`id_langue`),
    KEY `fk_cours_4_idx` (`id_status`),
    CONSTRAINT `fk_cours_1` FOREIGN KEY (`id_userProf`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_cours_2` FOREIGN KEY (`id_domaine`) REFERENCES `domaines` (`id_domaine`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_cours_3` FOREIGN KEY (`id_langue`) REFERENCES `langues` (`id_langue`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_cours_4` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
    ) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `disponibilites`;
CREATE TABLE IF NOT EXISTS `disponibilites` (
    `id_disponibilite` int(11) NOT NULL AUTO_INCREMENT,
    `id_cour` int(11) NOT NULL,
    `horaire` time NOT NULL,
    `semaine` tinyint(4) NOT NULL,
    PRIMARY KEY (`id_disponibilite`),
    KEY `fk_disponibilites_1_idx` (`id_cour`),
    CONSTRAINT `fk_disponibilites_1_idx` FOREIGN KEY (`id_cour`) REFERENCES `cours` (`id_cour`) ON DELETE NO ACTION ON UPDATE NO ACTION
    ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
    `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
    `id_userEleve` int(11) NOT NULL,
    `id_disponibilite` int(11) NOT NULL,
    `date` date NOT NULL,
    `id_status` int(11) NOT NULL DEFAULT '1',
    PRIMARY KEY (`id_reservation`),
    KEY `fk_reservations_1_idx` (`id_userEleve`),
    KEY `fk_reservations_2_idx` (`id_disponibilite`),
    KEY `fk_reservations_3_idx` (`id_status`),
    CONSTRAINT `fk_reservations_1_idx` FOREIGN KEY (`id_userEleve`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_reservations_2_idx` FOREIGN KEY (`id_disponibilite`) REFERENCES `disponibilites` (`id_disponibilite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT `fk_reservations_3_idx` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
    ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
