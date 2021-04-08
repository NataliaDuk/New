-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 08 2021 г., 16:35
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `factory`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otdels`
--

CREATE TABLE `otdels` (
  `id` int NOT NULL,
  ` name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otdels`
--

INSERT INTO `otdels` (`id`, ` name`) VALUES
(1, 'ASU'),
(2, 'SBYT');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `otdels_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `name`, `salary`, `otdels_id`) VALUES
(2, 'Ira', 800, 1),
(4, 'LENA', 600, 2),
(5, 'OLIA', 650, 2),
(6, 'Ira', 600, 2),
(7, 'Yra', 1000, 2),
(8, 'Lena', 800, 2),
(9, 'macha', 1000, 2),
(10, 'Yra', 800, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otdels`
--
ALTER TABLE `otdels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_workers_otdels_idx` (`otdels_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otdels`
--
ALTER TABLE `otdels`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `fk_workers_otdels` FOREIGN KEY (`otdels_id`) REFERENCES `otdels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
