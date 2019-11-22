-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных graphics
CREATE DATABASE IF NOT EXISTS `graphics` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `graphics`;

-- Дамп структуры для таблица graphics.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `city` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `salesman_id` smallint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы graphics.customer: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id`, `name`, `city`, `salesman_id`) VALUES
	(3001, 'Brad Guzan', 'London', 5005),
	(3002, 'Nick Rimando', 'New York', 5001),
	(3004, 'Fabian Johns', 'Paris', 5006),
	(3005, 'Graham Zusi', 'California', 5002),
	(3007, 'Brad Davis', 'New York', 5001),
	(3008, 'Julian Green', 'London', 5002),
	(3009, 'Geoff Camero', 'Berlin', 5003);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;


-- Дамп структуры для таблица graphics.salesman
CREATE TABLE IF NOT EXISTS `salesman` (
  `id` smallint(6) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `city` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comission` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы graphics.salesman: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `salesman` DISABLE KEYS */;
INSERT INTO `salesman` (`id`, `name`, `city`, `comission`) VALUES
	(5001, 'James Hoog', 'New York', 0.15),
	(5002, 'Nail Knite', 'Paris', 0.13),
	(5003, 'Lauson Hen', 'Berlin', 0.12),
	(5005, 'Pit Alex', 'London', 0.11),
	(5006, 'Mc Lyon', 'Paris', 0.14),
	(5007, 'Paul Adam', 'Rome', 0.13);
/*!40000 ALTER TABLE `salesman` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
