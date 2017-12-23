
DROP TABLE IF EXISTS `meetings`;
CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `meetings` (`id`, `titre`, `description`, `date_debut`, `date_fin`) VALUES
(1,	'Meeting PHP POO',	'Conférence sur la programmation orienté objets',	'2017-12-20',	'2018-01-01'),
(2,	'Meeting Front-End',	'Les bonnes pratique de HTML-CSS-Javascript',	'2017-12-21',	'2018-02-12'),
(3,	'Synfony',	'Base de Synfony',	'2017-12-24',	'2018-01-12'),
(4,	'Java',	'L Heritage en Java',	'2018-01-12',	'2018-01-14'),
(5,	'JavaScript',	'Base de la  programmation en Javascript',	'2018-01-11',	'2018-01-14'),
(6,	'Veille Technologique',	'Initialisation à la veille ',	'2018-01-13',	'2018-01-14');

DROP TABLE IF EXISTS `organisateur`;
CREATE TABLE `organisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `organisateur_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  CONSTRAINT `organisateur_ibfk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meetings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `organisateur` (`id_utilisateur`, `id_meeting`) VALUES
(1,	1),
(1,	2),
(2,	4),
(2,	2),
(9,	6),
(8,	4),
(8,	5);

DROP TABLE IF EXISTS `participant`;
CREATE TABLE `participant` (
  `id_utilisateur` int(11) NOT NULL,
  `id_meeting` int(11) NOT NULL,
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_meeting` (`id_meeting`),
  CONSTRAINT `participant_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  CONSTRAINT `participant_ibfk_2` FOREIGN KEY (`id_meeting`) REFERENCES `meetings` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `participant` (`id_utilisateur`, `id_meeting`) VALUES
(3,	1),
(3,	2),
(3,	3),
(4,	2),
(4,	1),
(1,	4),
(6,	3),
(6,	6),
(5,	3),
(5,	4),
(5,	3);

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`) VALUES
(1,	'Mahamat',	'Nasser'),
(2,	'Junior',	'Martin'),
(3,	'NKala',	'Gabriel'),
(4,	'Sangare',	'Ely'),
(5,	'Kollo',	'Jean Noe'),
(6,	'Piron',	'Pierre'),
(7,	'Truchot',	'Pierre'),
(8,	'Verrati',	'Marco'),
(9,	'Pastore',	'Javier');
