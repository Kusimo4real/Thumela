
-- Create the database
CREATE DATABASE thumela_db;

USE thumela_db;

-- Create the `users` table
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `phone` VARCHAR(15) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

LOCK TABLES `categories` WRITE;

INSERT INTO `categories` VALUES (12,'Art'),(11,'C++'),(5,'Coding'),(18,'Data Structures'),(6,'Git'),(16,'Interview'),(8,'Linux'),(9,'PHP'),(7,'Responsive Design'),(1,'Uncategorized');

UNLOCK TABLES;

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `cat_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;

INSERT INTO `posts` VALUES (32,9,'This Blog is coded with PHP','This is a simple blog with not much to it. It can be extended... the sky is the limit!','2019-04-17 16:05:51'),
(31,8,'Linux','Linus Torvlads startes Linux as university project!','2019-02-23 18:20:03'),
(6,2,'Hello World','Hello World!!','2019-02-01 10:54:52'),
(33,5,'What was used to make this Blog','This blog is put together with:\r\n\r\nPHP, CSS3, HTML5 and of course MySQL','2019-03-18 23:39:45'),
(36,11,'Java vs C++','Java is very slow compared to C++.\r\nUltimately C++ is the best language ever!\r\nC++ wins here doubtlessly.','2019-04-17 16:37:02'),
(37,11,'Java','Java is very slow compared to C++.\r\nUltimately C++ is the best language ever!','2019-04-17 16:39:32'),
(38,8,'Competitive Programming','kmvkf vf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf vdlf dlf','2019-04-17 16:42:25'),
(39,7,'Latest','In publishing, art, and communication, content is the information and experiences that are directed towards an end-user or audience. Content is \"something that is to be expressed through some medium, as speech, writing or any of various arts\".','2019-04-17 18:54:01'),
(40,6,'What is Git?','Git is a distributed version-control system for tracking changes in source code during software development. It is designed for coordinating work among programmers, but it can be used to track changes in any set of files. Its goals include speed, data integrity, and support for distributed, non-linear workflows.','2019-04-17 18:54:31'),
(41,12,'Blog','A blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries. Posts are typically displayed in reverse chronological order, so that the most recent post appears first, at the top of the web page.','2019-04-18 22:39:56');

UNLOCK TABLES;

