-- Adminer 3.3.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';




DROP TABLE IF EXISTS `im_ambiente_playlist`;
CREATE TABLE `im_ambiente_playlist` (
  `ambiente_id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  PRIMARY KEY (`ambiente_id`,`playlist_id`),
  KEY `IDX_5E21AB02112F3512` (`ambiente_id`),
  KEY `IDX_5E21AB026BBD148` (`playlist_id`),
  CONSTRAINT `FK_5E21AB02112F3512` FOREIGN KEY (`ambiente_id`) REFERENCES `Ambiente` (`id`),
  CONSTRAINT `FK_5E21AB026BBD148` FOREIGN KEY (`playlist_id`) REFERENCES `im_playlist` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `im_artista`;
CREATE TABLE `im_artista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombreCorto` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `im_fuente`;
CREATE TABLE `im_fuente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `portada` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lugarGrabacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soporte` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaRecorded` date NOT NULL,
  `fechaPublished` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `im_playlist`;
CREATE TABLE `im_playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantReproducciones` int(11) DEFAULT NULL,
  `cantTracks` int(11) DEFAULT NULL,
  `fechaLastPLay` datetime DEFAULT NULL,
  `duracion` time DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `im_track`;
CREATE TABLE `im_track` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artista_id` int(11) DEFAULT NULL,
  `fuente_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombreArchivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantReproducciones` int(11) DEFAULT NULL,
  `formato` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nroTrack` int(11) DEFAULT NULL,
  `duracion` time DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `quality_video` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quality_audio` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ADFEFC45AEB0CF13` (`artista_id`),
  KEY `IDX_ADFEFC455F1A2300` (`fuente_id`),
  CONSTRAINT `FK_ADFEFC455F1A2300` FOREIGN KEY (`fuente_id`) REFERENCES `im_fuente` (`id`),
  CONSTRAINT `FK_ADFEFC45AEB0CF13` FOREIGN KEY (`artista_id`) REFERENCES `im_artista` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- 2015-09-25 21:44:25