-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 16 2019 г., 03:37
-- Версия сервера: 5.6.41
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
-- База данных: `4648store`
--
CREATE DATABASE IF NOT EXISTS `4648store` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `4648store`;

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `title` varchar(355) NOT NULL,
  `cost` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`title`, `cost`, `img`, `id`) VALUES
('Far Cry: New Dawn', '1849', 'images/2.jpg', 2),
('Just Cause 4', '3000', 'images/1.jpg', 3),
('Hyperdevotion Noire: Goddess Black Heart', '1055', 'images/3.jpg', 13),
('Hellblade Senuas Sacrifice ', '2670', 'images/4.jpg', 16),
('Red Dead Redemption 2', '6999', 'images/5.jpg', 17),
('Assassin s Creed Odyssey', '2599', 'images/6.jpg', 18),
('FIFA 19', '2450', 'images/7.jpg', 19),
('Fallout 76', '1196', 'images/8.jpg', 20),
('Call Of Cthulhu ', '3990', 'images/9.jpg', 21),
('Just Dance 2019', '2276', 'images/10.jpg', 22),
('Spider-Man', '1990', 'images/11.jpg ', 23),
('Call Of Duty Black Ops 4', '4499', 'images/12.jpg', 24),
('Battlefield 5', '1899', 'images/13.jpg', 25),
('Fallout 76', '5000', 'images/14.jpg', 26),
('Rage 2', '4890', 'images/15.jpg', 27),
('Jump Force', '4560', 'images/16.jpg', 28),
('Jagged Alliance: Rage!', '4500', 'images/17.jpg ', 29);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
