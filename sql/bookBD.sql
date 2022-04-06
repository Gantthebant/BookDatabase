DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `authors` (`id`, `name`) VALUES (1, 'Brandon Sanderson');
INSERT INTO `authors` (`id`, `name`) VALUES (2, 'Peter Brett');
INSERT INTO `authors` (`id`, `name`) VALUES (3, 'Andy Weir');
INSERT INTO `authors` (`id`, `name`) VALUES (4, 'Patrick Rothfuss');
INSERT INTO `authors` (`id`, `name`) VALUES (5, 'Andrzej Sapkowski');

DROP TABLE IF EXISTS `series`;

CREATE TABLE `series` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `series` (`id`, `name`)VALUES (1, 'Mistborn');
INSERT INTO `series` (`id`, `name`)VALUES (2, 'The Stormlight Archive');
INSERT INTO `series` (`id`, `name`)VALUES (3, 'Demon Cycle');
INSERT INTO `series` (`id`, `name`)VALUES (4, 'One Shot');
INSERT INTO `series` (`id`, `name`)VALUES (5, 'The Kingkiller Chronicle');
INSERT INTO `series` (`id`, `name`)VALUES (6, 'Witcher Saga');

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `auther` int(255) unsigned DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `chapter` int(11) unsigned DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_auther` FOREIGN KEY (`auther`) REFERENCES `authors`(`id`),
  CONSTRAINT `FK_chapter` FOREIGN KEY (`chapter`) REFERENCES `series`(`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (1, 1, 'The Last Empire', 1, 'stuff', 'images/lastempire.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (2, 1, 'Words of Radiance', 2, 'stuff', 'images/wordsofradiance.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (3, 1, 'The Way Of Kings', 2, 'stuff', 'images/thewayofkings.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (4, 2, 'The Painted Man', 3, 'stuff', 'images/thepaintedman.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (5, 3, 'The Martian', 4, 'stuff', 'images/themartian.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (6, 4, 'The Name Of The Wind', 5, 'stuff', 'images/nameofthewind.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (7, 5, 'The Last Wish', 6, 'stuff', 'images/thelastwish.jpeg');
