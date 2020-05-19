-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2017 at 07:58 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abstract`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `news_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `user_name`, `user_image`, `news_id`, `comment`, `parent_id`, `date`, `time`) VALUES
(340, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, 'sava\r\n ', 0, '2017-03-30', '19:03:09'),
(341, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, 'sava2\r\n', 340, '0000-00-00', '00:00:00'),
(342, 38, 'jack', '1.jpg', 54, 'melov', 340, '0000-00-00', '00:00:00'),
(343, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, 'zellow', 340, '0000-00-00', '00:00:00'),
(344, 37, '', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, '00 ', 0, '2017-03-30', '19:03:35'),
(345, 37, '', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, '11', 344, '0000-00-00', '00:00:00'),
(346, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'ad ', 0, '2017-03-30', '19:03:21'),
(347, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'qwdqfd ', 0, '2017-03-30', '19:03:24'),
(348, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'qwdqwd ', 0, '2017-03-30', '19:03:26'),
(349, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'qwdqw', 346, '0000-00-00', '00:00:00'),
(350, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, 'rdcftvgb ', 0, '2017-03-31', '11:03:12'),
(351, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 54, 'hhu', 350, '0000-00-00', '00:00:00'),
(352, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'gghghgh', 346, '0000-00-00', '00:00:00'),
(353, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, 'mmm', 346, '0000-00-00', '00:00:00'),
(354, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 52, '";drop table tmp;/**', 346, '0000-00-00', '00:00:00'),
(355, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 53, 'Nagap ', 0, '2017-04-08', '02:04:20'),
(356, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 53, 'gap yoq', 355, '0000-00-00', '00:00:00'),
(357, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 55, 'Nagap ', 0, '2017-04-27', '17:04:18'),
(358, 37, 'Arslonbek', '03cc5ce316ac0f1666aa2e8fae840d54.jpg', 55, 'aerqer', 357, '0000-00-00', '00:00:00'),
(359, 39, 'osdf', '', 55, 'hgfyg ', 0, '2017-05-03', '05:05:02'),
(360, 39, 'osdf', '', 55, 'sdfsdf', 357, '0000-00-00', '00:00:00'),
(361, 39, 'osdf', '', 55, 'jyug ', 0, '2017-05-06', '02:05:20'),
(362, 39, 'osdf', '', 55, 'ping  ', 0, '2017-05-06', '02:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `darslar`
--

CREATE TABLE `darslar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darslar`
--

INSERT INTO `darslar` (`id`, `nomi`) VALUES
(9, '1-darslar'),
(10, '2-dars'),
(11, '3-dars');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `image` varchar(250) NOT NULL,
  `author` varchar(100) NOT NULL,
  `short_info` text NOT NULL,
  `full_info` text NOT NULL,
  `rubrika_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `number`, `theme`, `date`, `image`, `author`, `short_info`, `full_info`, `rubrika_id`) VALUES
(55, 1, 'Nagapsdsds', '2017-04-27 17:04:46', '', 'arslon', 'naga', 'sdfsfsf', 1),
(57, 23, 'safaw', '0000-00-00 00:00:00', '1ewd_1920 â€” ÐºÐ¾Ð¿Ð¸Ñ.jpg', 'wed', 'sef', 'sdfsdf', 1),
(58, 1, 'edq', '2017-06-07 00:00:00', '', 'ad', 'qwdqwd', 'efefw', 1),
(59, 0, 'ad', '2017-06-07 00:00:00', '', 'sf', 'qwd', 'rwgwf', 0),
(60, 0, 'sln', '2017-06-03 08:01:00', '', 'rfgi', 'erpoji', 'rpwhofbi', 0),
(61, 0, 'tfrd', '0000-00-00 00:00:00', '', 'ijhuygu', 'iuiyufcy', 'ygihji', 0),
(62, 0, ';kdsfh', '2017-06-03 08:01:00', '', 'woufhqoh', 'srbg', 'ouwhgq', 0);

-- --------------------------------------------------------

--
-- Table structure for table `savollar`
--

CREATE TABLE `savollar` (
  `id` int(11) NOT NULL,
  `savol` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `t_j` varchar(2) NOT NULL,
  `dars_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savollar`
--

INSERT INTO `savollar` (`id`, `savol`, `a`, `b`, `c`, `d`, `t_j`, `dars_id`) VALUES
(10, 'html nima', 'a', 'b', 'c', 'd', 'a', 9),
(11, 'Array', 'Array', 'Array', 'Array', 'Array', 'Ar', 0),
(12, 'java nima', 'a', 'b', 'c', 'd', 'd', 9);

-- --------------------------------------------------------

--
-- Table structure for table `shop_fruit`
--

CREATE TABLE `shop_fruit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `prise` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_fruit`
--

INSERT INTO `shop_fruit` (`id`, `name`, `start_date`, `finish_date`, `prise`) VALUES
(1, 'sasiska', '2017-04-26', '2017-04-30', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `tel` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `surname`, `date`, `tel`, `mail`, `birthday`, `image`, `password`, `role`) VALUES
(75, 'arslon', 'Arslonbek', 'Saidov', '0000-00-00', '+998919149636', '', '1996-09-19', '', 'fe53a8864b41b8a5236137915fb37608abd785cc', 4),
(76, 'kjegf', 'gig', 'uigi', '0000-00-00', 'uigiugsjd', '', '0000-00-00', '', 'fe53a8864b41b8a5236137915fb37608abd785cc', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtablenews`
--
CREATE TABLE `viewtablenews` (
`id` int(11)
,`number` int(11)
,`theme` varchar(50)
,`date` datetime
,`image` varchar(250)
,`author` varchar(100)
,`short_info` text
,`full_info` text
,`rubrika_id` int(100)
);

-- --------------------------------------------------------

--
-- Structure for view `viewtablenews`
--
DROP TABLE IF EXISTS `viewtablenews`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtablenews`  AS  select `news`.`id` AS `id`,`news`.`number` AS `number`,`news`.`theme` AS `theme`,`news`.`date` AS `date`,`news`.`image` AS `image`,`news`.`author` AS `author`,`news`.`short_info` AS `short_info`,`news`.`full_info` AS `full_info`,`news`.`rubrika_id` AS `rubrika_id` from `news` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darslar`
--
ALTER TABLE `darslar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savollar`
--
ALTER TABLE `savollar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_fruit`
--
ALTER TABLE `shop_fruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=363;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `darslar`
--
ALTER TABLE `darslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `savollar`
--
ALTER TABLE `savollar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shop_fruit`
--
ALTER TABLE `shop_fruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
