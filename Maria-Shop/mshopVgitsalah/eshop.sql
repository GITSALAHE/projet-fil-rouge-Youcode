-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 11 août 2020 à 18:50
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idU` int(11) NOT NULL,
  `qte` varchar(255) NOT NULL,
  `idSize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`idCart`, `idP`, `idU`, `qte`, `idSize`) VALUES
(12, 9, 20, '1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idC` int(11) NOT NULL,
  `nameCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idC`, `nameCategory`) VALUES
(10, 'women'),
(12, 'men');

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_data`
--

CREATE TABLE `mirrormx_customer_chat_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_department`
--

CREATE TABLE `mirrormx_customer_chat_department` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_department`
--

INSERT INTO `mirrormx_customer_chat_department` (`id`, `name`, `description`) VALUES
(1, 'Admins', 'Admins of websites');

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_message`
--

CREATE TABLE `mirrormx_customer_chat_message` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `talk_id` int(10) UNSIGNED NOT NULL,
  `extra` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_message`
--

INSERT INTO `mirrormx_customer_chat_message` (`id`, `from_id`, `to_id`, `body`, `datetime`, `talk_id`, `extra`) VALUES
(1, 2, -1, '', '2020-07-19 22:08:39', 1, '{\"type\":\"talk_start\"}'),
(2, 2, -1, 'hi', '2020-07-19 22:08:51', 1, NULL),
(3, 1, -1, 'hi mr bochaib', '2020-07-19 22:09:26', 1, NULL),
(4, -2, -1, '', '2020-07-19 22:09:26', 1, '{\"type\":\"talk_owner\",\"id\":1,\"user\":\"gitsalah\"}'),
(5, 2, -1, '&lt;3', '2020-07-19 22:09:41', 1, NULL),
(6, 1, -1, 'download.jpg', '2020-07-19 22:10:51', 1, '{\"type\":\"files\",\"files\":[{\"name\":\"download.jpg\",\"size\":11946,\"type\":\"image\\/jpeg\"}]}'),
(7, 1, -1, 'hahahahaha', '2020-07-19 22:11:16', 1, NULL),
(8, -2, -1, '', '2020-07-19 22:11:45', 1, '{\"type\":\"talk_close\"}'),
(9, 3, -1, '', '2020-07-19 22:18:07', 2, '{\"type\":\"talk_start\"}'),
(10, 3, -1, 'HELLO', '2020-07-19 22:26:52', 2, NULL),
(11, -2, -1, '', '2020-07-19 22:48:27', 2, '{\"type\":\"talk_close\"}'),
(12, 5, -1, '', '2020-07-19 22:49:13', 3, '{\"type\":\"talk_start\"}'),
(13, 5, -1, 'yeah', '2020-07-19 22:49:20', 3, NULL),
(14, 1, 4, 'HELLO ', '2020-07-19 23:00:20', 4, NULL),
(15, -2, -1, '', '2020-07-19 23:02:41', 3, '{\"type\":\"talk_close\"}'),
(16, 6, -1, '', '2020-07-20 16:29:13', 5, '{\"type\":\"talk_start\"}'),
(17, 6, -1, 'hi', '2020-07-20 16:29:20', 5, NULL),
(18, 1, -1, 'test', '2020-07-20 16:29:51', 5, NULL),
(19, -2, -1, '', '2020-07-20 16:29:51', 5, '{\"type\":\"talk_owner\",\"id\":1,\"user\":\"gitsalah\"}'),
(20, 7, -1, '', '2020-07-23 02:20:57', 6, '{\"type\":\"talk_start\"}'),
(21, 8, -1, '', '2020-07-29 10:01:52', 7, '{\"type\":\"talk_start\"}'),
(22, 8, -1, 'HELLO', '2020-07-29 10:02:23', 7, NULL),
(23, -2, -1, '', '2020-07-29 10:02:50', 7, '{\"type\":\"talk_close\"}'),
(24, 9, -1, '', '2020-07-29 10:03:10', 8, '{\"type\":\"talk_start\"}'),
(25, 9, -1, 'hi how u doing', '2020-07-29 10:03:18', 8, NULL),
(26, 10, -1, '', '2020-07-29 12:04:38', 9, '{\"type\":\"talk_start\"}'),
(27, 10, -1, 'hi', '2020-07-29 12:04:43', 9, NULL),
(28, 11, -1, '', '2020-08-06 14:11:36', 10, '{\"type\":\"talk_start\"}'),
(29, 11, -1, 'hi', '2020-08-06 14:11:41', 10, NULL),
(30, 4, -1, 'hi', '2020-08-06 14:11:55', 10, NULL),
(31, -2, -1, '', '2020-08-06 14:11:55', 10, '{\"type\":\"talk_owner\",\"id\":4,\"user\":\"mariem\"}'),
(32, 11, -1, 'hi', '2020-08-07 15:49:59', 10, NULL),
(33, 4, 11, 'hello', '2020-08-07 15:50:12', 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_shared_file`
--

CREATE TABLE `mirrormx_customer_chat_shared_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` int(10) UNSIGNED DEFAULT NULL,
  `upload_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_shared_file`
--

INSERT INTO `mirrormx_customer_chat_shared_file` (`id`, `original_name`, `name`, `type`, `size`, `upload_id`, `password`) VALUES
(1, 'download.jpg', '5tyeL9cfJGRdJbhhdY8sXA7midmDdMy', 'image/jpeg', 11946, 1, 'zhKROO8QWajsnN6240J6bSzD5EF1PK3');

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_talk`
--

CREATE TABLE `mirrormx_customer_chat_talk` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(32) DEFAULT NULL,
  `department_id` smallint(5) UNSIGNED DEFAULT NULL,
  `owner` int(11) DEFAULT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `extra` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_talk`
--

INSERT INTO `mirrormx_customer_chat_talk` (`id`, `state`, `department_id`, `owner`, `last_activity`, `extra`) VALUES
(1, 'closed', NULL, 1, '2020-07-19 22:11:16', NULL),
(2, 'closed', NULL, NULL, '2020-07-19 22:18:07', NULL),
(3, 'closed', 1, NULL, '2020-07-19 22:49:13', NULL),
(4, 'closed', NULL, 1, '2020-07-21 18:11:27', NULL),
(5, 'closed', 1, 1, '2020-07-21 18:11:27', NULL),
(6, 'closed', 1, NULL, '2020-07-23 12:44:05', NULL),
(7, 'closed', 1, NULL, '2020-07-29 10:01:52', NULL),
(8, 'closed', 1, NULL, '2020-07-29 11:03:38', NULL),
(9, 'closed', 1, NULL, '2020-07-30 12:22:07', NULL),
(10, 'closed', 1, 4, '2020-08-07 15:50:12', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_upload`
--

CREATE TABLE `mirrormx_customer_chat_upload` (
  `id` int(10) UNSIGNED NOT NULL,
  `message_id` int(10) UNSIGNED NOT NULL,
  `state` varchar(16) NOT NULL,
  `files_info` text,
  `size` int(10) UNSIGNED DEFAULT NULL,
  `progress` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_upload`
--

INSERT INTO `mirrormx_customer_chat_upload` (`id`, `message_id`, `state`, `files_info`, `size`, `progress`) VALUES
(1, 6, 'uploaded', '[{\"name\":\"download.jpg\",\"type\":\"image\\/jpeg\",\"size\":11946}]', 11946, 11946);

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_user`
--

CREATE TABLE `mirrormx_customer_chat_user` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `info` text,
  `roles` varchar(128) DEFAULT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_user`
--

INSERT INTO `mirrormx_customer_chat_user` (`id`, `name`, `mail`, `password`, `image`, `info`, `roles`, `last_activity`) VALUES
(1, 'gitsalah', 'gitsalah@eshop.com', 'c66790b8d5087bdc85681ae7e2127b7b7f106179', NULL, '{\"ip\":\"::1\"}', 'ADMIN,OPERATOR', '2020-07-30 14:51:02'),
(2, 'BOCHAIB-1595192919', 'bochaib@gmail.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/c.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.40\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"en\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"regionCode\":\"11\",\"regionName\":\"Marrakech-Tensift-Al Haouz\",\"city\":\"Marrakesh\",\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":31.6315,\"longitude\":-8.0083,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '0000-00-00 00:00:00'),
(3, 'visitor.95204-1595193487', 'no@e.mail.provided', 'x', '/eshop/backoffice/livechat/img/avatar.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.40\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"en\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"regionCode\":\"11\",\"regionName\":\"Marrakech-Tensift-Al Haouz\",\"city\":\"Marrakesh\",\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":31.6315,\"longitude\":-8.0083,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '0000-00-00 00:00:00'),
(4, 'mariem', 'test@gmail.com', 'c66790b8d5087bdc85681ae7e2127b7b7f106179', '/eshop/backoffice/livechat/upload/default-avatars/b.png', '{\"ip\":\"::1\"}', 'OPERATOR', '2020-08-08 22:15:23'),
(5, 'Mick-1595195353', 'kaops@gmail.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/f.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.40\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"en\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"regionCode\":\"11\",\"regionName\":\"Marrakech-Tensift-Al Haouz\",\"city\":\"Marrakesh\",\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":31.6315,\"longitude\":-8.0083,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '0000-00-00 00:00:00'),
(6, 'zniti-1595258953', 'zniti@gmail.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.40\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"en\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"city\":null,\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":32,\"longitude\":-5,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '2020-07-20 16:30:27'),
(7, '&lt;script&gt;alert(\'heello\')&lt', 'mariem@eshop.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/g.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.40\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"fr\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"city\":null,\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":32,\"longitude\":-5,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '2020-07-23 02:21:02'),
(8, 'USERGEST-1596013312', 'salah.bouanba3@gmail.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.48\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"fr\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"regionCode\":\"13\",\"regionName\":\"Region de Souss-Massa-Draa\",\"city\":\"Agadir\",\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":30.4207,\"longitude\":-9.5932,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '0000-00-00 00:00:00'),
(9, 'TEST-1596013390', 'test@gmzil.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.48\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"fr\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"regionCode\":\"13\",\"regionName\":\"Region de Souss-Massa-Draa\",\"city\":\"Agadir\",\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":30.4207,\"longitude\":-9.5932,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '2020-07-29 10:03:26'),
(10, 'test-1596020678', 'test@gmzil.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/a.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/index.php\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/84.0.4147.89 Safari\\/537.36 Edg\\/84.0.522.48\",\"browserName\":\"chrome\",\"browserVersion\":\"84.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"fr\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"city\":null,\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":32,\"longitude\":-5,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '2020-07-29 12:17:48'),
(11, 'okmk k-1596719496', 'mariem@gmail.com', 'x', '/eshop/backoffice/livechat/upload/default-avatars/c.png', '{\"ip\":\"::1\",\"referer\":\"http:\\/\\/localhost\\/eshop\\/views\\/index.php\",\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/81.0.4044.113 Safari\\/537.36\",\"browserName\":\"chrome\",\"browserVersion\":\"81.0\",\"os\":\"windows\",\"engine\":\"webkit\",\"language\":\"fr\",\"geoloc\":{\"countryCode\":\"MA\",\"countryName\":\"Morocco\",\"city\":null,\"zipCode\":null,\"timeZone\":\"Africa\\/Casablanca\",\"latitude\":32,\"longitude\":-5,\"metroCode\":null,\"utcOffset\":-60}}', 'GUEST', '2020-08-07 15:53:47');

-- --------------------------------------------------------

--
-- Structure de la table `mirrormx_customer_chat_user_department`
--

CREATE TABLE `mirrormx_customer_chat_user_department` (
  `user_id` int(11) NOT NULL,
  `department_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mirrormx_customer_chat_user_department`
--

INSERT INTO `mirrormx_customer_chat_user_department` (`user_id`, `department_id`) VALUES
(1, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `idOrder` int(11) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `idU` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `qte` varchar(255) NOT NULL,
  `calculated` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `idP` int(11) NOT NULL,
  `nameProduct` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Qte` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `idC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`idP`, `nameProduct`, `Price`, `Qte`, `Image`, `Image2`, `description`, `idC`) VALUES
(9, 'T-SHIRT ORGANIC COTTON', '15.00', '80', '1597079329_product1.jpg', '1597079329_product1hover.jpg', '<p>T-shirt slim fit de m&eacute;lange de coton bio &agrave; col rond et manches courtes.</p>', 12),
(10, 'T-Shirt Ã€ Col En V Homme', '12.99', '108', '1597081174_product2.jpg', '1597081174_product2hover.jpg', '<p>T-shirt slim fit de m&eacute;lange de coton bio &agrave; col en V et manches courtes.</p>', 12),
(32, 'T-shirt Ã  motif feuilles homme', '15.99', '100', '1597082308_95550282_0953_2.jpg', '1597082308_95550282_0953_1.jpg', '<p>T-shirt regular fit de m&eacute;lange de coton &agrave; col rond et manches courtes.</p>', 12),
(33, 'Bermuda regular fit chino homme', '34,99', '100', '1597083027_94403909_0783_4.jpg', '1597083027_94403909_0783_1.jpg', '<p>Short de coton regular fit &agrave; fermeture &eacute;clair</p>\r\n<ul class=\"tox-checklist\">\r\n<li>deux poches fendues devant</li>\r\n<li>deux poches passepoil&eacute;es derri&egrave;re</li>\r\n</ul>', 12),
(34, 'Long short chino homme', '34,99', '100', '1597083395_95248875_0857_4.jpg', '1597083395_95248875_0857_1.jpg', '<p>Long short de m&eacute;lange de coton stretch.</p>\r\n<p>Mod&egrave;le &agrave;</p>\r\n<ul class=\"tox-checklist\">\r\n<li>deux poches devant</li>\r\n<li>une poche ticket</li>\r\n<li>deux poches&nbsp;derri&egrave;re</li>\r\n</ul>', 12),
(35, 'T-shirt de coton bio femme', '11.00', '100', '1597085328_95320151_0665_2.jpg', '1597085328_95320151_0665_1.jpg', '<p>T-shirt regular fit, 100% coton bio, &amp;agrave; col rond.</p>', 10),
(36, 'T-shirt Ã  application imprimÃ©e femme', '22.99', '100', '1597085450_95415345_0144_2.jpg', '1597085450_95415345_0144_1.jpg', '<p>T-shirt regular fit de m&eacute;lange de coton doux &agrave; col rond et manches courtes.</p>\r\n<p>Texte appliqu&eacute; et application imprim&eacute;e devant.</p>', 10),
(37, 'DÃ©bardeur avec boutons femme', '22.99', '100', '1597085794_95555423_0104_2.jpg', '1597085794_95555423_0104_1.jpg', '<p>Top de m&eacute;lange de coton sans manches, &agrave; col en V et boutons devant.</p>', 10),
(38, 'Robe dos-nu Ã  motif femme', '39,99', '100', '1597085959_95456508_0299_2.jpg', '1597085959_95456508_0299_1.jpg', '<p>Robe maxi regular fit agrave,motif feuilles sur toute la surface, col rond et ceinture amovible.</p>', 10),
(39, 'Robe Ã  dÃ©tails smockÃ©s femme', '36.00', '100', '1597086077_95327334_0576_2.jpg', '1597086077_95327334_0576_1.jpg', '<p>Robe &eacute;vas&eacute;e de qualit&eacute; tiss&eacute;e &agrave; motif, bretelles &eacute;troites et smocks &eacute;lastiques dans le haut.</p>', 10),
(40, 'Jupe tricotÃ©e femme', '39.99', '100', '1597086464_94993981_0060_2.jpg', '1597086464_94993981_0060_1.jpg', '<p>Jupe tricot&eacute;e de m&eacute;lange de laine stretch,</p>\r\n<p>&agrave; ceinture &eacute;lastique dans le haut et fermeture boutonn&eacute;e d&eacute;corative.</p>\r\n<p>La robe tombe sur le genou.</p>', 10),
(41, 'Jupe plissÃ©e femme', '35.00', '100', '1597086647_95253138_0047_2.jpg', '1597086647_95253138_0047_1.jpg', '<p>Jupe pliss&eacute;e de qualit&eacute; tiss&eacute;e avec un bord &agrave; la taille.</p>\r\n<p>Mod&egrave;le &agrave; fermeture &eacute;clair invisible sur le c&ocirc;t&eacute; et devant &agrave; portefeuille plus court que le dos.</p>', 10),
(42, 'Chemisier Ã  structure femme', '35.99', '100', '1597089469_95296616_0110_2.jpg', '1597089469_95296616_0110_1.jpg', '<p>Chemisier regular fit, 100% viscose, &agrave; col chemisier, fermeture boutonn&eacute;e invisible et manches courtes.</p>', 10),
(43, 'Top Ã  poches poitrine femme', '40.00', '100', '1597089698_95449074_0075_2.jpg', '1597089698_95449074_0075_1.jpg', '<p>Chemisier regular fit de qualit&eacute; finement tiss&eacute;e &agrave; col en V, deux poches poitrine &agrave; rabat et manches courtes.</p>', 10),
(44, 'Pantalon slim fit femme', '50.99', '100', '1597089919_91219169_0060_2.jpg', '1597090076_91219169_0060_4.jpg', '<p>Pantalon slim fit de qualit&eacute; finement tiss&eacute;e &agrave;</p>\r\n<ul class=\"tox-checklist\">\r\n<li>double fermeture &eacute;clair.</li>\r\n<li>deuxpochesfendues.</li>\r\n<li>une poche fendue &agrave; l&rsquo;arri&egrave;re et jambes en fuseau.</li>\r\n', 10),
(45, 'Chino slim fit femme', '50.99', '100', '1597090408_95019093_0047_2.jpg', '1597090408_95019093_0047_4.jpg', '<p>Pantalon slim fit de m&eacute;lange de coton &agrave; fermeture &eacute;clair et &agrave; agrafe</p>', 10);

-- --------------------------------------------------------

--
-- Structure de la table `size`
--

CREATE TABLE `size` (
  `idSize` int(11) NOT NULL,
  `nameSize` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `size`
--

INSERT INTO `size` (`idSize`, `nameSize`) VALUES
(1, 'S'),
(3, 'M'),
(4, 'L'),
(7, 'XL'),
(8, 'XXXL');

-- --------------------------------------------------------

--
-- Structure de la table `size_product`
--

CREATE TABLE `size_product` (
  `idPS` int(11) NOT NULL,
  `idP` int(11) NOT NULL,
  `idSize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `size_product`
--

INSERT INTO `size_product` (`idPS`, `idP`, `idSize`) VALUES
(40, 10, 1),
(41, 10, 3),
(42, 10, 4),
(68, 9, 1),
(69, 9, 3),
(70, 9, 4),
(71, 32, 1),
(72, 32, 3),
(73, 32, 4),
(74, 32, 7),
(75, 33, 1),
(76, 33, 4),
(77, 33, 7),
(78, 33, 8),
(79, 34, 1),
(80, 34, 3),
(81, 34, 4),
(82, 39, 1),
(83, 39, 3),
(84, 39, 4),
(85, 38, 1),
(86, 38, 3),
(87, 38, 4),
(88, 37, 1),
(89, 37, 3),
(90, 37, 4),
(91, 36, 1),
(92, 36, 3),
(93, 36, 4),
(94, 35, 1),
(95, 35, 3),
(96, 35, 4),
(97, 35, 7),
(98, 41, 1),
(99, 41, 3),
(100, 41, 4),
(101, 40, 1),
(102, 40, 3),
(103, 40, 4),
(104, 42, 1),
(105, 42, 3),
(106, 42, 4),
(107, 43, 1),
(108, 43, 3),
(109, 43, 4),
(110, 45, 1),
(111, 45, 3),
(112, 45, 4),
(113, 44, 1),
(114, 44, 3),
(115, 44, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idU` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `superAdmin` tinyint(4) NOT NULL,
  `ban` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idU`, `fullname`, `email`, `password`, `phone_number`, `admin`, `superAdmin`, `ban`) VALUES
(5, 'gitsalah', 'test', '0646274243', '064664872', 1, 1, 0),
(6, 'SALAHEDDINE ', 'salah.bouanba2@gmail.com', '$2y$10$mNK3IMFoEiN5zzrxSLBd4.07pV82uxtKSavDTsRZSnFfJ4.gE9m8W', '0661263709', 0, 0, 1),
(7, 'test', 'hello@hello.com', '$2y$10$03XQMZrLQCfXMY6yia312.336DEjWm8NwSl32nucbQSDEkhGVLgfu', '0636382012', 0, 0, 0),
(11, 'mariem', 'mariem@eshop.com', '0646274243', '0646274243', 1, 0, 0),
(12, 'Hamza', 'hamza@gmail.com', '$2y$10$03XQMZrLQCfXMY6yia312.336DEjWm8NwSl32nucbQSDEkhGVLgfu', '0646275253', 0, 0, 0),
(13, 'mohamed', 'simo@gmail.com', '$2y$10$LiUhl5mr5x9jVS7YCLaUDe./tV33Y8S1WmT3LiGvEBfZhpr0igEnu', '0649118803', 0, 0, 0),
(14, 'simoo', 'simoo@gmail.com', '$2y$10$NG.cNPGxERT58pS/iQngTe4x0E0s4SqCE/fx9zU.GYKJzEj1LOowa', '0646274243', 0, 0, 0),
(15, 'yousef', 'youssef@gmail.com', '$2y$10$trA8VlRBGND9xFPEHn4xLOOYQ1h7KYgu/P1xWD6PwuKiqlQht9mJa', '0646274243', 0, 0, 0),
(16, 'SALAHEDDINE ', 'salah@salah.me', '$2y$10$m4AKaw9qhEG8v9d43DuxWeSFnKGSV9ti5hcE35THfxTX8vKwfa3WG', '0646274243', 0, 0, 0),
(17, 'salaheddine', 'gh@gh.com', '$2y$10$MJRFQiY0aL5nlrngFqSdh.IJVGwEHpPilOpZFLf2XHqOKOhbgjB/.', '0646274243', 0, 0, 0),
(18, 'imane', 'imane@gmail.com', '$2y$10$Cj5saRh2cuir1ClcsqqsOOa2DnuTNm/N.FG2QcMrfnHYJmOnGuBu.', '12356', 0, 0, 0),
(19, 'test', 'test@gmail.com', '$2y$10$4VJ74oOx4uNpoUva/y7Ky.kexVNJLgwppYmFef27mowlVzEdVS5OO', '12356', 0, 0, 0),
(20, 'Mariemff', 'mariem@gmail.com', '$2y$10$Xq6J5AWrStSjPBmolA7QruO3dNc2l/V9zg2UwmuUrRQeUlyPm1nta', '12356', 0, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `fk_products` (`idP`),
  ADD KEY `fk_users` (`idU`),
  ADD KEY `fk_idSizeCart` (`idSize`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idC`);

--
-- Index pour la table `mirrormx_customer_chat_data`
--
ALTER TABLE `mirrormx_customer_chat_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_type_ix` (`type`);

--
-- Index pour la table `mirrormx_customer_chat_department`
--
ALTER TABLE `mirrormx_customer_chat_department`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mirrormx_customer_chat_message`
--
ALTER TABLE `mirrormx_customer_chat_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_fk_talk` (`talk_id`),
  ADD KEY `message_from_id_ix` (`from_id`),
  ADD KEY `message_to_id_ix` (`to_id`),
  ADD KEY `message_datetime_ix` (`datetime`);

--
-- Index pour la table `mirrormx_customer_chat_shared_file`
--
ALTER TABLE `mirrormx_customer_chat_shared_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shared_file_fk_upload` (`upload_id`);

--
-- Index pour la table `mirrormx_customer_chat_talk`
--
ALTER TABLE `mirrormx_customer_chat_talk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talk_fk_department` (`department_id`),
  ADD KEY `talk_owner_ix` (`owner`),
  ADD KEY `talk_last_activity_ix` (`last_activity`);

--
-- Index pour la table `mirrormx_customer_chat_upload`
--
ALTER TABLE `mirrormx_customer_chat_upload`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upload_fk_message` (`message_id`);

--
-- Index pour la table `mirrormx_customer_chat_user`
--
ALTER TABLE `mirrormx_customer_chat_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_mail_ix` (`mail`),
  ADD KEY `user_last_activity_ix` (`last_activity`);

--
-- Index pour la table `mirrormx_customer_chat_user_department`
--
ALTER TABLE `mirrormx_customer_chat_user_department`
  ADD UNIQUE KEY `user_department_uq` (`user_id`,`department_id`),
  ADD KEY `user_department_fk_department` (`department_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `fk_user_order` (`idU`),
  ADD KEY `fk_product_order` (`idP`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idP`),
  ADD KEY `FK_Categorie` (`idC`);

--
-- Index pour la table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idSize`);

--
-- Index pour la table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`idPS`),
  ADD KEY `fk_sizeproduct` (`idP`),
  ADD KEY `fk_addSizeproduct` (`idSize`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_data`
--
ALTER TABLE `mirrormx_customer_chat_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_department`
--
ALTER TABLE `mirrormx_customer_chat_department`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_message`
--
ALTER TABLE `mirrormx_customer_chat_message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_shared_file`
--
ALTER TABLE `mirrormx_customer_chat_shared_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_talk`
--
ALTER TABLE `mirrormx_customer_chat_talk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_upload`
--
ALTER TABLE `mirrormx_customer_chat_upload`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mirrormx_customer_chat_user`
--
ALTER TABLE `mirrormx_customer_chat_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `idP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `size`
--
ALTER TABLE `size`
  MODIFY `idSize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `size_product`
--
ALTER TABLE `size_product`
  MODIFY `idPS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_idSizeCart` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`),
  ADD CONSTRAINT `fk_products` FOREIGN KEY (`idP`) REFERENCES `product` (`idP`),
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`idU`) REFERENCES `users` (`idU`);

--
-- Contraintes pour la table `mirrormx_customer_chat_message`
--
ALTER TABLE `mirrormx_customer_chat_message`
  ADD CONSTRAINT `message_fk_talk` FOREIGN KEY (`talk_id`) REFERENCES `mirrormx_customer_chat_talk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mirrormx_customer_chat_shared_file`
--
ALTER TABLE `mirrormx_customer_chat_shared_file`
  ADD CONSTRAINT `shared_file_fk_upload` FOREIGN KEY (`upload_id`) REFERENCES `mirrormx_customer_chat_upload` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mirrormx_customer_chat_talk`
--
ALTER TABLE `mirrormx_customer_chat_talk`
  ADD CONSTRAINT `talk_fk_department` FOREIGN KEY (`department_id`) REFERENCES `mirrormx_customer_chat_department` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `mirrormx_customer_chat_upload`
--
ALTER TABLE `mirrormx_customer_chat_upload`
  ADD CONSTRAINT `upload_fk_message` FOREIGN KEY (`message_id`) REFERENCES `mirrormx_customer_chat_message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mirrormx_customer_chat_user_department`
--
ALTER TABLE `mirrormx_customer_chat_user_department`
  ADD CONSTRAINT `user_department_fk_department` FOREIGN KEY (`department_id`) REFERENCES `mirrormx_customer_chat_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_department_fk_user` FOREIGN KEY (`user_id`) REFERENCES `mirrormx_customer_chat_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_product_order` FOREIGN KEY (`idP`) REFERENCES `product` (`idP`),
  ADD CONSTRAINT `fk_user_order` FOREIGN KEY (`idU`) REFERENCES `users` (`idU`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Categorie` FOREIGN KEY (`idC`) REFERENCES `category` (`idC`);

--
-- Contraintes pour la table `size_product`
--
ALTER TABLE `size_product`
  ADD CONSTRAINT `fk_addSizeproduct` FOREIGN KEY (`idSize`) REFERENCES `size` (`idSize`),
  ADD CONSTRAINT `fk_sizeproduct` FOREIGN KEY (`idP`) REFERENCES `product` (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
