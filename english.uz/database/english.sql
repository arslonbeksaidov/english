-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2017 г., 03:45
-- Версия сервера: 10.1.10-MariaDB
-- Версия PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `english`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `comment`, `email`, `date`) VALUES
(1, 'uytr', 'jhugf', 'jhg@iygbu', '0000-00-00 00:00:00'),
(2, 'Arslon', '1.html\r\n2.css,style\r\n3.mysql\r\n4.javascrip\r\n4.php\r\n', 'arslonsaidov300@mail.com', '2017-06-12 03:01:00');

-- --------------------------------------------------------

--
-- Структура таблицы `darslar`
--

CREATE TABLE `darslar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `darslar`
--

INSERT INTO `darslar` (`id`, `nomi`) VALUES
(13, 'PRE-INTERMEDIATE');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
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
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `number`, `theme`, `date`, `image`, `author`, `short_info`, `full_info`, `rubrika_id`) VALUES
(78, 0, 'New courses add to our web site .', '2017-06-09 17:01:00', '272x272.jpg', 'admin', 'This course will learn English grammar.It has to be famillar with the basic rules of grammar in this courses .	', 'The book has been widely used by English language students, especially those from non-English-speaking countries, as a practice and reference book. The book has achieved a great reader acceptance because of its accuracy and simplicity. Though the book was titled as a self study reference, the publisher states that the book is also suitable for reinforcement work in the classroom. There are two versions of the book (with or without answer key).', 0),
(79, 0, 'New courses add to our web site ', '2017-06-10 03:01:00', 'English_Grammar_in_Use_With_Answers._A_selfstudy_reference_and_practice_book_for.jpg', 'admin', 'The book has been widely used by English language students, especially those from non-English-speaking countries, as a practice and reference book. The book has achieved a great reader acceptance because of its accuracy and simplicity. Though the book was titled as a self study reference, the publisher states that the book is also suitable for reinforcement work in the classroom. ', 'The book has been widely used by English language students, especially those from non-English-speaking countries, as a practice and reference book. The book has achieved a great reader acceptance because of its accuracy and simplicity. Though the book was titled as a self study reference, the publisher states that the book is also suitable for reinforcement work in the classroom. There are two versions of the book (with or without answer key).	', 0),
(80, 0, 'New courses add to our web site', '2017-06-10 03:01:00', '2017-06-10_06-52-22.png', 'admin', 'The book has been widely used by English language students, especially those from non-English-speaking countries, as a practice and reference book. The book has achieved a great reader acceptance because of its accuracy and simplicity. ', 'The book has been widely used by English language students, especially those from non-English-speaking countries, as a practice and reference book. The book has achieved a great reader acceptance because of its accuracy and simplicity. Though the book was titled as a self study reference, the publisher states that the book is also suitable for reinforcement work in the classroom. There are two versions of the book (with or without answer key).	', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` varchar(255) NOT NULL,
  `count_view` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `content` varchar(255) NOT NULL,
  `count_view` int(11) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `description`, `content`, `count_view`, `status`, `created_at`) VALUES
(2, 1, 'iosf', 'oij', 'oij', 65, 'active', '2017-05-26 18:11:09');

-- --------------------------------------------------------

--
-- Структура таблицы `savollar`
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
-- Дамп данных таблицы `savollar`
--

INSERT INTO `savollar` (`id`, `savol`, `a`, `b`, `c`, `d`, `t_j`, `dars_id`) VALUES
(19, '1.â€œ_____ did the first man walk on the moon?â€ â€œIn 1969.â€', 'When', 'Where', 'who', 'what', 'a', 12),
(20, '2. â€œ_____ did she marry?â€ â€œShe married to John.â€', ' What', 'who', 'which', 'Why', 'b', 12),
(21, '3. A _____ dog.  ', 'bigger than', ' big ', ' biggest', ' the biggest', 'b', 12),
(22, ' 4.A _____ driver.', 'care', 'careful', 'carefully', 'the careful', 'b', 12),
(23, '5. She ran _____.', 'quick', 'quicker', 'quickly', 'the quick', 'a', 12),
(24, '1. _____ three languages: French, Spanish, and English.', ' Iâ€™m speak', ' Iâ€™m speaking', ' I speaking', ' I speak', 'd', 13),
(25, '2.Where _____ from?', ' Hans come', ' does Hans come', 'does Hans coming', ' Hans came', 'b', 13),
(26, '3.What _____ tonight?', ' do you do', 'you do', 'are you doing', 'did you do', 'a', 13),
(27, '4.â€œWhere is Georgeâ€ â€œHe _____ a shower.â€', 'HAS', 'will have', 'is having', 'have', 'c', 13),
(28, '5.â€œWhat _____ ?â€ â€œI donâ€™t know. Look it up.â€', ' does this word mean', ' means this word', ' does mean this word', ' is meaning this word', 'c', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `tmp`
--

CREATE TABLE `tmp` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acces_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`, `status`, `role`, `created_at`, `acces_token`) VALUES
(1, 'misol', '$2y$13$pP0gmwB9Ne7rCclFFO5q9eUZFiulJxHuCMlIt4NTvl5gpxJ8Ixoc.', '', '', 'admin', '2017-05-26 19:39:52', '12316561'),
(2, 'Muqaddas', 'fe53a8864b41b8a5236137915fb37608abd785cc', 'Muqaddas', 'active', 'admin', '2017-06-09 01:40:02', ''),
(3, 'Muqaddas', 'fe53a8864b41b8a5236137915fb37608abd785cc', 'Muqaddas', 'active', 'admin', '2017-06-09 01:40:05', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `birthday` date NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `surname`, `tel`, `mail`, `birthday`, `image`, `password`, `role`) VALUES
(75, 'admin', 'Muqaddas', 'Karimova', '+998919144595', '', '1996-09-19', 'Image_029.jpg', 'fe53a8864b41b8a5236137915fb37608abd785cc', 4),
(87, 'artem', 'Arslon', 'Sadov', '+998919149636', 'arslonsaidov300@mail.ru', '0000-00-00', 'Image_029.jpg', '363d869de684603ef57411f9e7820cb5553a612f', 4),
(88, 'Bekmurod', 'Bekmurod', 'Xo''jamuratov', '+998977913883', 'beksoft3388@gmail.com', '1322-09-18', '', 'b015d086f22d82296d72a1eeebfa5d4d278bd662', 1);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `viewtablenews`
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
-- Структура для представления `viewtablenews`
--
DROP TABLE IF EXISTS `viewtablenews`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtablenews`  AS  select `news`.`id` AS `id`,`news`.`number` AS `number`,`news`.`theme` AS `theme`,`news`.`date` AS `date`,`news`.`image` AS `image`,`news`.`author` AS `author`,`news`.`short_info` AS `short_info`,`news`.`full_info` AS `full_info`,`news`.`rubrika_id` AS `rubrika_id` from `news` ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `darslar`
--
ALTER TABLE `darslar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_post_user_idx` (`user_id`);

--
-- Индексы таблицы `savollar`
--
ALTER TABLE `savollar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `darslar`
--
ALTER TABLE `darslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT для таблицы `savollar`
--
ALTER TABLE `savollar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
