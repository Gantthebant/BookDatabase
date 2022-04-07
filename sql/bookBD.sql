//Database name is - booksDB

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

INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (1, 1, 'The Last Empire', 1, 'The Final Empire, the first book in a trilogy by Brandon Sanderson, is a tale of a subjugated people known as the Skaa, and their fight for freedom against a seemingly invincible God known as the Lord Ruler. The Lord Ruler has ruled this world for a thous', 'images/lastempire.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (2, 1, 'Words of Radiance', 2, 'Expected by his enemies to die the miserable death of a military slave, Kaladin survived to be given command of the royal bodyguards, a controversial first for a low-status "darkeyes." Now he must protect the king and Dalinar from every common peril as we', 'images/wordsofradiance.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (3, 1, 'The Way Of Kings', 2, 'According to mythology mankind used to live in The Tranquiline Halls. Heaven. But then the Voidbringers assaulted and captured heaven, casting out God and men. Men took root on Roshar, the world of storms. And the Voidbringers followed...', 'images/thewayofkings.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (4, 2, 'The Painted Man', 3, 'As dusk falls upon Arlens world, a strange mist rises from the ground; a mist that promises a violent death to any foolish enough to brave the coming darkness, for hungry corelings - demons that cannot be harmed by mortal weapons - materialize from the v', 'images/thepaintedman.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (5, 3, 'The Martian', 4, 'Im stranded on Mars. I have no way to communicate with Earth. Im in a Habitat designed to last 31 days.If the Oxygenator breaks down, Ill suffocate. If the Water Reclaimer breaks down, Ill die of thirst. If the Hab breaches, Ill just kind of explode.', 'images/themartian.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (6, 4, 'The Name Of The Wind', 5, 'So begins the tale of Kvothe - currently known as Kote, the unassuming innkeeper - from his childhood in a troupe of traveling players, through his years spent as a near-feral orphan in a crime-riddled city, to his daringly brazen yet successful bid to en', 'images/nameofthewind.jpeg');
INSERT INTO `books` (`id`, `auther`, `title`, `chapter`, `description`, `image`)VALUES (7, 5, 'The Last Wish', 6, 'Geralt of Rivia is a Witcher, a man whose magic powers and lifelong training have made him a brilliant fighter and a merciless assassin.Yet he is no ordinary killer: he hunts the vile fiends that ravage the land and attack the innocent.But not everyth', 'images/thelastwish.jpeg');
