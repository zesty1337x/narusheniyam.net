-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2024 г., 11:13
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydbb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `application_id` int NOT NULL,
  `user_id` int NOT NULL,
  `number` char(17) NOT NULL,
  `status` text NOT NULL,
  `number_car` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`application_id`, `user_id`, `number`, `status`, `number_car`, `message`) VALUES
(1, 1, '49205', 'Отменен', 'а333аа33', ' 123'),
(2, 3, '81590', 'Подтвержден', 'Н446ВТ55', ' Хулиганит на парковке окея'),
(3, 3, '42510', 'Подтвержден', 'о111оо01', ' Негодяй'),
(4, 4, '56049', 'Отменен', 'а063мг05', ' 12333');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `surname` varchar(100) NOT NULL,
  `name` varchar(123) NOT NULL,
  `patronymic` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` char(17) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `surname`, `name`, `patronymic`, `login`, `email`, `phone`, `password`, `role`) VALUES
(1, 'zesty', 'Dmitry', 'Викторович', 'valyaABOBA', 'kyrbidima7771@gmail.com', 'valyaABOBA', '123456', 'Пользователь'),
(2, 'Admin', 'Admin', 'Admin', 'Admin', 'Admin@Admin.ru', '+77777777777', '123456', 'Администратор'),
(3, 'Зубенко', 'Михаил', 'Петрович', 'mafioznik777', 'zmp@mail.ru', '+79998887766', '123456789', 'Пользователь'),
(4, 'Педручо', 'Антонио', 'Гангстер', 'antoniopedrucho', 'antoniopedrucho@tt.mb', '+7 123 456 78 90', '123456', 'Пользователь');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
