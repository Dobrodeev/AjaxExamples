-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 05 2014 г., 13:05
-- Версия сервера: 5.1.53
-- Версия PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pro_demo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `date_create`) VALUES
(1, 'Item 1', 0, '2014-11-05 14:15:34'),
(2, 'Item 2', 0, '2014-11-05 14:15:41'),
(3, 'Item 1-1', 1, '2014-11-05 14:16:00'),
(4, 'Item 1-1-1', 3, '2014-11-05 14:16:16'),
(5, 'Item 2-1', 2, '2014-11-05 14:16:32');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `summ` float NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `summ`, `status`, `date_create`) VALUES
(1, 1, 8, 1, '2014-09-25 00:00:00'),
(2, 1, 140, 1, '2014-11-01 00:00:00'),
(3, 2, 24, 1, '2014-09-28 00:00:00'),
(4, 3, 18, 1, '2014-10-29 00:00:00'),
(5, 4, 48, 1, '2014-10-29 00:00:00'),
(6, 4, 2, 0, '2014-11-01 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products_ref`
--

CREATE TABLE IF NOT EXISTS `orders_products_ref` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `orders_products_ref`
--

INSERT INTO `orders_products_ref` (`id`, `order_id`, `product_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 4),
(4, 2, 4),
(5, 2, 4),
(6, 2, 4),
(7, 3, 3),
(8, 3, 3),
(9, 4, 2),
(10, 4, 3),
(11, 5, 12),
(12, 5, 12),
(13, 5, 12),
(14, 5, 12),
(15, 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`) VALUES
(1, 'Basic', 2),
(2, 'Light', 6),
(3, 'Advanced', 12),
(4, 'Premium', 35);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(63) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `age`) VALUES
(1, 'Ivan', 'ivan@yandex.ru', '0', '(093)273-47-57', 23),
(2, 'Alex', 'alex@mail.ru', '0', '(096)275-47-58', 35),
(3, 'Dima', 'dima@gmIL.com', '0', '(096)373-47-89', 16),
(4, 'Sveta', 'sveta@nika.ua', '0', '(098)345-12-31', 20);
