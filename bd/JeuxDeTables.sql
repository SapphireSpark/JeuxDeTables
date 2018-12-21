-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2018 at 04:51 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JeuxDeTables`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Aston Martin', '2016-10-08 13:31:57', NULL),
(2, 'Acura', '2016-10-08 13:31:57', NULL),
(3, 'Audi', '2016-10-08 13:31:57', NULL),
(4, 'Bentley', '2016-10-08 13:31:57', NULL),
(5, 'Bmw', '2016-10-08 13:31:57', NULL),
(6, 'Bugatti', '2016-10-08 13:31:57', NULL),
(7, 'Buick', '2016-10-08 13:31:57', NULL),
(8, 'Cadillac', '2016-10-08 13:31:57', NULL),
(9, 'Chevrolet', '2016-10-08 13:31:57', NULL),
(10, 'Chrysler', '2016-10-08 13:31:57', NULL),
(11, 'Dodge', '2016-10-08 13:31:57', NULL),
(12, 'Ferrari', '2016-10-08 13:31:57', NULL),
(13, 'Ford', '2016-10-08 13:31:57', NULL),
(14, 'Gmc', '2016-10-08 13:31:57', NULL),
(15, 'Honda', '2016-10-08 13:31:57', NULL),
(16, 'Hyundai', '2016-10-08 13:31:57', NULL),
(17, 'Infiniti', '2016-10-08 13:31:57', NULL),
(18, 'Jaguar', '2016-10-08 13:31:57', NULL),
(19, 'Jeep', '2016-10-08 13:31:57', NULL),
(20, 'Lamborghini', '2016-10-08 13:31:57', NULL),
(21, 'Lexus', '2016-10-08 13:31:57', NULL),
(22, 'Lincoln', '2016-10-08 13:31:57', NULL),
(23, 'Maserati', '2016-10-08 13:31:57', NULL),
(24, 'Mazda', '2016-10-08 13:31:57', NULL),
(25, 'Mercedes-Benz', '2016-10-08 13:31:57', NULL),
(26, 'Mini', '2016-10-08 13:31:57', NULL),
(27, 'Mitsubishi', '2016-10-08 13:31:57', NULL),
(28, 'Nissan', '2016-10-08 13:31:57', NULL),
(29, 'Porsche', '2016-10-08 13:31:57', NULL),
(30, 'Rolls Royce', '2016-10-08 13:31:57', NULL),
(31, 'Subaru', '2016-10-08 13:31:57', NULL),
(32, 'Tesla', '2016-10-08 13:31:57', NULL),
(33, 'Toyota', '2016-10-08 13:31:57', NULL),
(34, 'Volkswagen', '2016-10-08 13:31:57', NULL),
(35, 'Volvo', '2016-10-08 13:31:57', NULL),
(38, 'Skoda', '2016-10-08 13:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Tokens'),
(2, 'Graphics'),
(3, 'Scripts');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Active, 0 = Inactive'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(2, 'WelcomeScan.jpg', 'Files/', '2018-09-07 13:20:11', '2018-09-07 13:20:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'fr_CA', 'Resources', 1, 'title', 'Premier article'),
(2, 'fr_CA', 'Resources', 1, 'body', 'Voici le texte du Premier article'),
(3, 'fr_CA', 'Tags', 1, 'title', 'Éducation');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text,
  `published` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `subcategory_id` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `user_id`, `name`, `slug`, `description`, `published`, `created`, `modified`, `subcategory_id`) VALUES
(1, 1, 'First Post', 'first-post', 'This is the first post.', 1, '2018-08-24 08:50:04', '2018-09-05 15:58:30', 0),
(2, 1, 'Nouvel article modifié', 'nouvel-article', 'Corps du nouvel article modifié', 0, '2018-08-24 14:15:11', '2018-08-31 12:48:13', 0),
(3, 3, 'Article avec un slug', 'Article-avec-un-slug', 'Coprs de l''Article avec un slug', 0, '2018-08-24 14:21:03', '2018-08-24 14:21:03', 0),
(4, 3, 'test de validation', 'test-de-validation', 'test du corps de l''article', 0, '2018-08-24 14:33:22', '2018-08-24 14:33:22', 0),
(5, 3, 'Un article de André modifié', 'Un-article-de-Andre', 'Le corps de l''article de André modifié', 0, '2018-08-24 20:49:37', '2018-08-24 20:50:17', 0),
(6, 4, 'Un article d''admin mod.', 'un-article-d-admin', 'Voici le corps de l''article d''admin modifié', 0, '2018-08-31 14:14:44', '2018-08-31 14:17:05', 0),
(7, 4, 'Un autre de l''admin', 'un-autre', 'Voici le corps de l''autre article de l''admin', 0, '2018-08-31 14:22:16', '2018-09-07 13:30:55', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resources_files`
--

CREATE TABLE IF NOT EXISTS `resources_files` (
  `id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resources_files`
--

INSERT INTO `resources_files` (`id`, `resource_id`, `file_id`) VALUES
(2, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resources_tags`
--

CREATE TABLE IF NOT EXISTS `resources_tags` (
  `resource_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resources_tags`
--

INSERT INTO `resources_tags` (`resource_id`, `tag_id`) VALUES
(1, 1),
(7, 1),
(1, 2),
(2, 2),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `resource_types`
--

CREATE TABLE IF NOT EXISTS `resource_types` (
  `id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resource_types`
--

INSERT INTO `resource_types` (`id`, `resource_id`, `description`, `created`, `modified`) VALUES
(2, 7, 'Bravo', '2018-08-31 14:38:24', '2018-08-31 14:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`) VALUES
(1, 1, 'Card Token'),
(2, 1, 'Miniature'),
(3, 1, 'Paper Token'),
(4, 1, 'Hidden Token'),
(5, 2, 'High Res 4k'),
(6, 2, 'HD Graphics'),
(7, 2, 'Minimal textures'),
(8, 3, 'Game Rules'),
(9, 3, 'Preset Stories'),
(10, 3, 'Lore');

-- --------------------------------------------------------

--
-- Table structure for table `tabletopTypes`
--

CREATE TABLE IF NOT EXISTS `tabletopTypes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tabletopTypes`
--

INSERT INTO `tabletopTypes` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Aston Martin', '2016-10-08 13:31:57', NULL),
(2, 'Acura', '2016-10-08 13:31:57', NULL),
(3, 'Audi', '2016-10-08 13:31:57', NULL),
(4, 'Bentley', '2016-10-08 13:31:57', NULL),
(5, 'Bmw', '2016-10-08 13:31:57', NULL),
(6, 'Bugatti', '2016-10-08 13:31:57', NULL),
(7, 'Buick', '2016-10-08 13:31:57', NULL),
(8, 'Cadillac', '2016-10-08 13:31:57', NULL),
(9, 'Chevrolet', '2016-10-08 13:31:57', NULL),
(10, 'Chrysler', '2016-10-08 13:31:57', NULL),
(11, 'Dodge', '2016-10-08 13:31:57', NULL),
(12, 'Ferrari', '2016-10-08 13:31:57', NULL),
(13, 'Ford', '2016-10-08 13:31:57', NULL),
(14, 'Gmc', '2016-10-08 13:31:57', NULL),
(15, 'Honda', '2016-10-08 13:31:57', NULL),
(16, 'Hyundai', '2016-10-08 13:31:57', NULL),
(17, 'Infiniti', '2016-10-08 13:31:57', NULL),
(18, 'Jaguar', '2016-10-08 13:31:57', NULL),
(19, 'Jeep', '2016-10-08 13:31:57', NULL),
(20, 'Lamborghini', '2016-10-08 13:31:57', NULL),
(21, 'Lexus', '2016-10-08 13:31:57', NULL),
(22, 'Lincoln', '2016-10-08 13:31:57', NULL),
(23, 'Maserati', '2016-10-08 13:31:57', NULL),
(24, 'Mazda', '2016-10-08 13:31:57', NULL),
(25, 'Mercedes-Benz', '2016-10-08 13:31:57', NULL),
(26, 'Mini', '2016-10-08 13:31:57', NULL),
(27, 'Mitsubishi', '2016-10-08 13:31:57', NULL),
(28, 'Nissan', '2016-10-08 13:31:57', NULL),
(29, 'Porsche', '2016-10-08 13:31:57', NULL),
(30, 'Rolls Royce', '2016-10-08 13:31:57', NULL),
(31, 'Subaru', '2016-10-08 13:31:57', NULL),
(32, 'Tesla', '2016-10-08 13:31:57', NULL),
(33, 'Toyota', '2016-10-08 13:31:57', NULL),
(34, 'Volkswagen', '2016-10-08 13:31:57', NULL),
(35, 'Volvo', '2016-10-08 13:31:57', NULL),
(38, 'Skoda', '2016-10-08 13:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `created`, `modified`) VALUES
(1, 'Learning', '2018-08-31 12:46:44', '2018-09-05 16:03:24'),
(2, 'Mondial', '2018-08-31 12:46:56', '2018-08-31 12:46:56'),
(3, 'Santé', '2018-08-31 12:47:04', '2018-08-31 12:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`) VALUES
(1, '', 'cakephp@example.com', '$2y$10$CRlW.GTjpRJBUGJpX4jyI.yJl3Y5lhEyUc6LG489MQ6GdI2D7hPFe', 0, '2018-08-24 08:50:04', '2018-08-24 20:45:10'),
(3, '', 'andre@cmontmo.ca', '$2y$10$ko2dAxucY/sgP2J6fzR3desjFmqKPJDRrre63JoWyPKUNYbukH7O2', 2, '2018-08-24 20:14:47', '2018-08-24 20:45:44'),
(4, '', 'admin@admin.com', 'lol2', 2, '2018-08-31 13:57:52', '2018-08-31 13:57:52'),
(7, '', 'psasu@videotron.ca', '$2y$10$k45KOmkVohnsoM.2jyWlX.QT0mdKa7tsLaLLIBGefdBXKq.cOrlQ6', 2, '2018-10-11 18:53:04', '2018-10-11 18:53:04'),
(8, '', 'banane@banane.com', '$2y$10$jEJMc6w7ogfyn4.Os204ZebAahZoAkN.75hpAw8BNXUB5BSbFqFxq', 0, '2018-10-11 19:14:36', '2018-10-11 19:14:36'),
(9, '', 'Manager@gmail.com', '$2y$10$/2qRBni1aH.Nf8oC4VyGmOPXLiPkmcd5/ZSL9TQwwDCxM0xRml.0W', 1, '2018-10-11 19:54:13', '2018-10-11 19:54:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_key` (`user_id`);

--
-- Indexes for table `resources_files`
--
ALTER TABLE `resources_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`resource_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Indexes for table `resources_tags`
--
ALTER TABLE `resources_tags`
  ADD PRIMARY KEY (`resource_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Indexes for table `resource_types`
--
ALTER TABLE `resource_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`resource_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabletopTypes`
--
ALTER TABLE `tabletopTypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `resources_files`
--
ALTER TABLE `resources_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resource_types`
--
ALTER TABLE `resource_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tabletopTypes`
--
ALTER TABLE `tabletopTypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `resources_files`
--
ALTER TABLE `resources_files`
  ADD CONSTRAINT `resources_files_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_files_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_tags`
--
ALTER TABLE `resources_tags`
  ADD CONSTRAINT `resources_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `resources_tags_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`);

--
-- Constraints for table `resource_types`
--
ALTER TABLE `resource_types`
  ADD CONSTRAINT `resource_types_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
