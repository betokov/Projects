-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 13 2017 г., 22:55
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `guitarwars`
--

-- --------------------------------------------------------

--
-- Структура таблицы `guitarwars`
--

CREATE TABLE IF NOT EXISTS `guitarwars` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(64) NOT NULL,
  `score` int(7) NOT NULL,
  `screenshot` varchar(64) DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `guitarwars`
--

INSERT INTO `guitarwars` (`id`, `date`, `name`, `score`, `screenshot`, `approved`) VALUES
(9, '2017-10-04 00:07:38', 'BELITAC', 282470, 'belitasscore.gif', 1),
(10, '2017-10-04 10:16:28', 'Jacobownsu', 389740, 'jacobsscore.gif', 1),
(12, '2017-10-04 10:39:00', 'Jeanpaulj', 243260, 'jeanpaulsscore.gif', 1),
(16, '2017-10-04 10:39:06', 'Kennylav', 64930, 'kennysscore.gif', 1),
(20, '2017-10-04 10:38:55', 'Belitac', 282470, 'belitasscore.gif', 1),
(21, '2017-10-04 10:49:07', 'Pacoj', 127650, 'pacosscore.gif', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
