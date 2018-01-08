-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 09 2018 г., 01:29
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `idpost` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `abstract` varchar(250) NOT NULL,
  `autors` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  `posouzeni` int(11) DEFAULT NULL,
  `done` tinyint(1) DEFAULT NULL,
  `doneAdm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`idpost`, `name`, `abstract`, `autors`, `file`, `date`, `users_idusers`, `posouzeni`, `done`, `doneAdm`) VALUES
(5, 'Prispevek 1', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Fusce tellus odio, dapibus id ferm', 'Autor1, Autor2', 'upload/files/1515441453Relacni_Model.pdf', '2018-01-08', 4, 5, 1, 1),
(6, 'Prispevek 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque ipsum. Ut tempus purus at lorem. Curabitur bibendum justo non orci. Praesent dapibus. Etiam posuere lacus quis dolor. Nam libero tempore, cum soluta nobis est eligendi optio cumqu', 'Autor1, Autor2, Autor3', 'upload/files/1515441484Relacni_Model.pdf', '2018-01-08', 3, 3, 1, 1),
(7, 'Prispevek 3', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Fusce tellus odio, dapibus id ferm', 'Autor1, Autor2, Autor3', 'upload/files/1515441512Relacni_Model.pdf', '2018-01-08', 7, 10, NULL, 1),
(9, 'Prispevek 5', 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Integer vulputate sem a nibh rutrum consequat. Mauris elementum mauris vitae tortor. Temporibu', 'Autors', 'upload/files/1515448810dokWeb.pdf', '2018-01-09', 3, NULL, NULL, NULL),
(11, 'Prispevek 7', 'Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur vitae diam non enim vestibulum interdum. Donec iaculis gravida nulla. Sed ut perspiciat', 'Autors', 'upload/files/1515448983dokWeb.pdf', '2018-01-09', 3, NULL, NULL, NULL),
(12, 'Prispevek 8', 'Fusce dui leo, imperdiet in, aliquam sit amet, feugiat eu, orci. Duis risus. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias cons', 'Тест русского', 'upload/files/1515449023dokWeb.pdf', '2018-01-09', 3, NULL, NULL, NULL),
(13, 'Příspěvek 9', 'Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. In enim a arcu imperdiet malesuada. Nunc auctor. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione volupta', 'Autoři', 'upload/files/1515449202dokWeb.pdf', '2018-01-09', 3, NULL, NULL, NULL),
(14, 'Příspěvek 10', 'Duis pulvinar. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna. Donec vitae arcu. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore', 'test test test ', 'upload/files/1515449347dokWeb.pdf', '2018-01-09', 3, 3, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jmeno` varchar(255) DEFAULT NULL,
  `organizace` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `isBan` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`, `email`, `jmeno`, `organizace`, `isAdmin`, `isBan`) VALUES
(3, 'Tester1', 'e10adc3949ba59abbe56e057f20f883e', 'test1@test.cz', NULL, NULL, 0, 0),
(4, 'Tester 2 (změna)', 'd41d8cd98f00b204e9800998ecf8427e', 'test2@test.cz', 'Tester Test', 'ZCU', 0, 1),
(5, 'Tester 3', 'e10adc3949ba59abbe56e057f20f883e', 'test3@test.cz', NULL, NULL, 0, 0),
(6, 'Tester 4', '11ebfaa31b94d8e24f1a30b407b969b6', 'tester4@test.cz', NULL, NULL, 0, 0),
(7, 'Administrator', 'a45fdb1e4ac646c9e65a1769663e5704', 'admin@admin.cz', NULL, NULL, 1, 0),
(8, 'Tester 5', '57d0d369d3aa0358cef1deb519d0eb69', 'test5@test.cz', NULL, NULL, 0, 0),
(9, 'Tester 6', '02c8c90da0c6d82d407b9f59c6d72ce8', 'tester6@test.cz', NULL, NULL, 0, 0),
(10, 'Tester 7', '63057848dc77ff2c658560a950c7efa1', 'test7@test.cz', NULL, NULL, 0, 0),
(11, 'Tester 8 ', '12b7c8179a2978e496901e68a25dae97', 'test8@test.cz', NULL, NULL, 0, 0),
(12, 'Tester 9', '052294e88a4c424cb5a8481032727ba6', 'test9@test.cz', NULL, NULL, 0, 0),
(13, 'Tester 10', '4054e4fdf28a5ae1d0bcef13bb1f210f', 'test10@test.cz', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `votes`
--

CREATE TABLE `votes` (
  `idvotes` int(11) NOT NULL,
  `uzivatel` int(6) DEFAULT NULL,
  `originalita` int(6) NOT NULL,
  `tema` int(6) NOT NULL,
  `tech_kval` int(6) NOT NULL,
  `jaz_kval` int(6) NOT NULL,
  `doporuceni` int(6) NOT NULL,
  `poznamka` varchar(1500) NOT NULL,
  `celkem` int(16) DEFAULT NULL,
  `post_idpost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `votes`
--

INSERT INTO `votes` (`idvotes`, `uzivatel`, `originalita`, `tema`, `tech_kval`, `jaz_kval`, `doporuceni`, `poznamka`, `celkem`, `post_idpost`) VALUES
(14, 3, 4, 4, 2, 3, 3, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,', 3, 6),
(15, 5, 2, 1, 4, 1, 4, 'Pellentesque pretium lectus id turpis. Integer imperdiet lectus quis justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 2, 5),
(16, 3, 3, 1, 2, 1, 3, 'Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Donec ipsum massa, ullamcorper in, auctor et, scelerisque sed, est.', 2, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`),
  ADD KEY `fk_post_users_idx` (`users_idusers`),
  ADD KEY `fk_post_users1_idx` (`posouzeni`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Индексы таблицы `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`idvotes`,`post_idpost`),
  ADD KEY `fk_votes_post1_idx` (`post_idpost`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `votes`
--
ALTER TABLE `votes`
  MODIFY `idvotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_post_users` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_post_users1` FOREIGN KEY (`posouzeni`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `fk_votes_post1` FOREIGN KEY (`post_idpost`) REFERENCES `post` (`idpost`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
