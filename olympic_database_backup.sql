-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 02 2021 г., 17:17
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olympic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `competition`
--

CREATE TABLE `competition` (
  `competition_id` int(11) NOT NULL,
  `competition_date` date NOT NULL,
  `competition_time` time NOT NULL,
  `sport_type_id` int(11) NOT NULL,
  `sports_ground_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `competition`
--

INSERT INTO `competition` (`competition_id`, `competition_date`, `competition_time`, `sport_type_id`, `sports_ground_id`) VALUES
(1, '2019-06-12', '12:00:00', 1, 1),
(2, '2019-06-15', '14:00:00', 2, 2),
(3, '2019-06-18', '16:00:00', 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Россия'),
(2, 'Великобритания'),
(3, 'Соединенные Штаты Америки'),
(4, 'Казахстан');

-- --------------------------------------------------------

--
-- Структура таблицы `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `result` varchar(100) NOT NULL,
  `position` int(100) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `sportsmen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `result`
--

INSERT INTO `result` (`result_id`, `result`, `position`, `competition_id`, `sportsmen_id`) VALUES
(1, '13,1 c', 1, 1, 1),
(2, '14,1 c', 2, 1, 2),
(3, '14,4 c', 3, 1, 3),
(4, '290 см', 2, 2, 4),
(5, '320 см', 1, 2, 5),
(6, '270 см', 3, 2, 6),
(10, '1 м: 54 с: 36 мс', 1, 3, 10),
(11, '1 м: 54 с: 36 мс', 1, 3, 11),
(12, '1 м: 55 с: 04 мс', 2, 3, 12),
(13, '1 м: 55 с: 04 мс', 2, 3, 13),
(14, '1 м: 55 с: 31 мс', 3, 3, 14),
(15, '1 м: 55 с: 31 мс', 3, 3, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `sportsmen`
--

CREATE TABLE `sportsmen` (
  `sportsmen_id` int(11) NOT NULL,
  `sportsmen_name` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `sport_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sportsmen`
--

INSERT INTO `sportsmen` (`sportsmen_id`, `sportsmen_name`, `birthday`, `sex`, `country_id`, `sport_type_id`) VALUES
(1, 'Корчагин Даниил Иванович', '1989-08-15', 'Мужской', 1, 1),
(2, 'Джеффри Пол', '1991-02-04', 'Мужской', 2, 1),
(3, 'Остин Мартинес', '1993-04-18', 'Мужской', 3, 1),
(4, 'Зульфия Тимурова', '1985-09-18', 'Женский', 4, 2),
(5, 'Смирнова Вероника Даниловна', '1986-03-11', 'Женский', 1, 2),
(6, 'Лилиана Кинг', '1985-05-04', 'Женский', 2, 2),
(10, 'Бовдурец Алексей', '1993-02-12', 'Мужской', 1, 3),
(11, 'Алимов Рамиль', '1990-05-04', 'Мужской', 4, 3),
(12, 'Ишмухамедов Расул Ильдарович', '1991-07-28', 'Мужской', 4, 3),
(13, 'Шуринкин Олег', '1995-07-21', 'Мужской', 1, 3),
(14, 'Гладких Ярослав', '1986-09-25', 'Мужской', 1, 3),
(15, ' Бирюков Дмитрий', '1987-08-03', 'Мужской', 1, 3),
(16, 'Иванов Иван', '1994-09-20', 'Мужской', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sports_ground`
--

CREATE TABLE `sports_ground` (
  `sports_ground_id` int(11) NOT NULL,
  `sports_ground_name` varchar(100) DEFAULT NULL,
  `sports_ground_address` varchar(100) DEFAULT NULL,
  `sport_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sports_ground`
--

INSERT INTO `sports_ground` (`sports_ground_id`, `sports_ground_name`, `sports_ground_address`, `sport_type_id`) VALUES
(1, 'Стадион «Олимпиец»', 'Ул. Буммашевская, 30', 1),
(2, 'Стадион «Зенит»', 'Ул. Кирова, 20', 2),
(3, 'Водный стадион «Динамо»', 'Ул. Песочная, 100', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `sport_type`
--

CREATE TABLE `sport_type` (
  `sport_type_id` int(11) NOT NULL,
  `sport_name` varchar(100) DEFAULT NULL,
  `sport_category` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sport_type`
--

INSERT INTO `sport_type` (`sport_type_id`, `sport_name`, `sport_category`) VALUES
(1, 'Бег 100 м', 'Индивидуальный'),
(2, 'Метание снаряда 700 г', 'Индивидуальный'),
(3, 'Гребля 1500 м', 'Командный');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`competition_id`),
  ADD KEY `sport_type_id` (`sport_type_id`),
  ADD KEY `sports_ground_id` (`sports_ground_id`);

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Индексы таблицы `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `competition_id` (`competition_id`),
  ADD KEY `sportsmen_id` (`sportsmen_id`);

--
-- Индексы таблицы `sportsmen`
--
ALTER TABLE `sportsmen`
  ADD PRIMARY KEY (`sportsmen_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `sport_type_id` (`sport_type_id`);

--
-- Индексы таблицы `sports_ground`
--
ALTER TABLE `sports_ground`
  ADD PRIMARY KEY (`sports_ground_id`),
  ADD KEY `sport_type_id` (`sport_type_id`);

--
-- Индексы таблицы `sport_type`
--
ALTER TABLE `sport_type`
  ADD PRIMARY KEY (`sport_type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `competition`
--
ALTER TABLE `competition`
  MODIFY `competition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `sportsmen`
--
ALTER TABLE `sportsmen`
  MODIFY `sportsmen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `sports_ground`
--
ALTER TABLE `sports_ground`
  MODIFY `sports_ground_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `sport_type`
--
ALTER TABLE `sport_type`
  MODIFY `sport_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `competition`
--
ALTER TABLE `competition`
  ADD CONSTRAINT `competition_ibfk_2` FOREIGN KEY (`sports_ground_id`) REFERENCES `sports_ground` (`sports_ground_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `competition_ibfk_3` FOREIGN KEY (`sport_type_id`) REFERENCES `sport_type` (`sport_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`sportsmen_id`) REFERENCES `sportsmen` (`sportsmen_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`competition_id`) REFERENCES `competition` (`competition_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sportsmen`
--
ALTER TABLE `sportsmen`
  ADD CONSTRAINT `sportsmen_ibfk_2` FOREIGN KEY (`sport_type_id`) REFERENCES `sport_type` (`sport_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sportsmen_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sports_ground`
--
ALTER TABLE `sports_ground`
  ADD CONSTRAINT `sports_ground_ibfk_1` FOREIGN KEY (`sport_type_id`) REFERENCES `sport_type` (`sport_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
