-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 18 2017 г., 21:26
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `infa`
--

CREATE TABLE IF NOT EXISTS `infa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textt` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `infa`
--

INSERT INTO `infa` (`id`, `textt`) VALUES
(1, 'Здравствуйте!'),
(2, 'Мы занимаемся отправкой Посылок в Украину и Молдову из Израиля. У нас лучшее обслуживание и приемлемые цены.'),
(3, 'В Украину позволено отправлять на одного получателя в одой отправке, без оплаты таможенных\nпошлин предметы личностного характера для собственного использования, которые не являются коммерцией, а также их\nсуммарная цена должна быть не выше суммы, эквивалентной 150 (знак евро) (или 170$).\nТаможенный сбор будет автоматически накладываться на посылку, если стоимость содержимого в \nпосылке выше данной суммы.');

-- --------------------------------------------------------

--
-- Структура таблицы `slaid`
--

CREATE TABLE IF NOT EXISTS `slaid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textt` varchar(500) NOT NULL,
  `textt1` varchar(30) NOT NULL,
  `textt2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `slaid`
--

INSERT INTO `slaid` (`id`, `textt`, `textt1`, `textt2`) VALUES
(1, 'Это сама лучшая компания', 'Петя Пяточкин', 'Директор'),
(2, 'Все очень быстро', 'Иван Хлебушкин', 'лентяй');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `pas` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pas`) VALUES
(1, '0', '0'),
(2, 'nata', 'c741288a400121d47f776915ce5e7394');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
