-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 09 2024 г., 19:08
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Exclusivo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `announcement_type`
--

CREATE TABLE `announcement_type` (
  `id_announcement_type` int NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `announcement_type`
--

INSERT INTO `announcement_type` (`id_announcement_type`, `type`) VALUES
(2, 'Горячее предложение'),
(3, 'Новинка'),
(4, 'Обычное');

-- --------------------------------------------------------

--
-- Структура таблицы `deal`
--

CREATE TABLE `deal` (
  `id_deal` int NOT NULL,
  `id_house` int NOT NULL,
  `id_user` int NOT NULL,
  `id_user_agent` int NOT NULL,
  `date` date NOT NULL,
  `number_of_deal` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `deal`
--

INSERT INTO `deal` (`id_deal`, `id_house`, `id_user`, `id_user_agent`, `date`, `number_of_deal`) VALUES
(3, 10, 2, 1, '2023-06-30', 4),
(4, 6, 3, 2, '2023-06-25', 3),
(5, 12, 8, 5, '2023-06-26', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id_favorites` int NOT NULL,
  `id_house` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id_favorites`, `id_house`, `id_user`) VALUES
(3, 7, 4),
(4, 1, 5),
(5, 13, 4),
(6, 8, 3),
(7, 9, 6),
(8, 11, 6),
(9, 11, 5),
(10, 1, 2),
(12, 11, 17),
(13, 13, 49),
(15, 8, 64);

-- --------------------------------------------------------

--
-- Структура таблицы `house`
--

CREATE TABLE `house` (
  `id_house` int NOT NULL,
  `id_house_type` int NOT NULL,
  `id_announcement_type` int NOT NULL,
  `id_sale_status` int NOT NULL,
  `id_house_agent` int NOT NULL,
  `id_neighborhood` int NOT NULL,
  `price` int NOT NULL,
  `number_of_rooms` int NOT NULL,
  `square` int NOT NULL,
  `ceiling_height` float NOT NULL,
  `kitchen_square` int NOT NULL,
  `address` varchar(100) NOT NULL,
  `announcement_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `house`
--

INSERT INTO `house` (`id_house`, `id_house_type`, `id_announcement_type`, `id_sale_status`, `id_house_agent`, `id_neighborhood`, `price`, `number_of_rooms`, `square`, `ceiling_height`, `kitchen_square`, `address`, `announcement_date`) VALUES
(1, 1, 4, 2, 1, 1, 50000000, 5, 900, 5, 150, 'ул. Пушкина, д.30', '2023-06-23'),
(5, 2, 2, 1, 3, 9, 8000000, 8, 900, 5, 100, 'ул. Кунцевская, д.20', '2023-06-23'),
(6, 3, 3, 1, 4, 9, 8000000, 2, 200, 3, 10, 'Ул. Каховская, д.4', '2023-06-26'),
(7, 1, 2, 2, 5, 10, 10000000, 4, 400, 5, 60, 'Херсонская ул, д.5', '2023-06-08'),
(8, 2, 4, 2, 6, 8, 6790000, 5, 100, 3, 10, 'ул. Космонавтиков, д.9', '2023-06-09'),
(9, 3, 4, 2, 1, 7, 80000000, 10, 800, 5, 100, 'Кантемировская ул, д.45', '2023-06-15'),
(10, 2, 2, 1, 3, 6, 8900000, 7, 345, 4, 30, 'ул. Пушкина, д.7', '2023-06-22'),
(11, 3, 4, 2, 4, 2, 70000000, 6, 700, 4, 70, 'ул. Академика Янгеля, д.9', '2023-05-26'),
(12, 1, 3, 1, 5, 1, 10000000, 10, 170, 5, 17, 'ул. Академика Анохина, д.5', '2023-06-05'),
(13, 2, 2, 2, 6, 10, 400000, 1, 100, 3, 10, 'Нежинская ул, д.9', '2023-06-23');

-- --------------------------------------------------------

--
-- Структура таблицы `house_agent`
--

CREATE TABLE `house_agent` (
  `id_house_agent` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `patronymic` varchar(32) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `house_agent`
--

INSERT INTO `house_agent` (`id_house_agent`, `name`, `surname`, `patronymic`, `telephone`, `email`) VALUES
(1, 'Андрей', 'Филькин', 'Сергеевич', '89764569679', 'filkin@mail.ru'),
(3, 'Иван', 'Максим', 'Алексеевич', '89678762345', 'fokin@mail.ru'),
(4, 'Иван', 'Яшкин', 'Иванович', '89766786556', 'yashkin@mail.ru'),
(5, 'Иосиф', 'Путин', 'Константинович', '89767685678', 'putin@bk.ru'),
(6, 'Илья', 'Енин', 'Иосифич', '89765678764', 'enin@bk.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `house_type`
--

CREATE TABLE `house_type` (
  `id_house_type` int NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `house_type`
--

INSERT INTO `house_type` (`id_house_type`, `type`) VALUES
(1, '1-этаж.'),
(2, '2-этаж.'),
(3, '3-этаж.');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int NOT NULL,
  `text` text NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `fio` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id_message`, `text`, `telephone`, `fio`, `email`) VALUES
(6, 'Арина', '+79263161716', 'Арина Лопухова', 'arburdock@gmail.com'),
(7, 'Хочу пожаловаться на...', '+7(926)316-17-16', 'Арина Лопухова', 'arburdock@gmail.com'),
(8, 'Хочу забронировать дом...', '+79263161716', 'Арина Олеговна Лопухова', 'arburdock@gmail.com'),
(13, 'Хочу посмотреть дом под номером 1', '8904567767', 'Арина Л', 'arburdock@gmail.com'),
(14, 'Хочу дом', '8904567767', 'Арина Л', 'arburdock@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `metro`
--

CREATE TABLE `metro` (
  `id_metro` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `id_neighborhood` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `metro`
--

INSERT INTO `metro` (`id_metro`, `name`, `id_neighborhood`) VALUES
(1, 'Арбатская', 1),
(2, 'Бибирево', 6),
(5, 'Севастопольская', 10),
(6, 'Каховская', 10),
(7, 'Зюзино', 10),
(8, 'Библиотека им. Ленина', 1),
(9, 'Боровицкая', 1),
(10, 'Лубянка', 2),
(11, 'Чистые пруды', 2),
(12, 'Жулебино', 7),
(13, 'Выхино', 7),
(14, 'Кантемировская', 8),
(15, 'Царицыно', 8),
(16, 'Молодежная', 9),
(17, 'Кунцевская', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `neighborhood`
--

CREATE TABLE `neighborhood` (
  `id_neighborhood` int NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `neighborhood`
--

INSERT INTO `neighborhood` (`id_neighborhood`, `name`) VALUES
(1, 'Арбат'),
(2, 'Басманный'),
(6, 'Бибирево'),
(7, 'Выхино-Жулебино'),
(8, 'Царицыно'),
(9, 'Кунцево'),
(10, 'Зюзино');

-- --------------------------------------------------------

--
-- Структура таблицы `sale_status`
--

CREATE TABLE `sale_status` (
  `id_sale_status` int NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sale_status`
--

INSERT INTO `sale_status` (`id_sale_status`, `status`) VALUES
(1, 'Продан'),
(2, 'В продаже');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `patronymic` varchar(32) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `budget` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `email_verification_link` varchar(255) NOT NULL,
  `email_verified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `secret_key` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `surname`, `patronymic`, `telephone`, `email`, `password`, `budget`, `status`, `email_verification_link`, `email_verified_at`, `secret_key`) VALUES
(1, '', '', '', '', 'exclusivo@home.com', 'exclusivo1', 0, 0, '', '2023-08-30 04:06:50', NULL),
(2, 'Иван', 'Иванов', 'Иванович', '+7(800)345-23-56', 'ivanov@mail.ru', 'ivanov', 100000000, 0, '', '2023-08-30 04:06:50', NULL),
(3, 'Екатерина', 'Дьячкова', 'Анатольевна', '+7(456)324-13-43', 'dyachkova@mail.ru', 'dyachkova', 200000000, 1, '', '2023-08-30 04:06:50', NULL),
(4, 'Сергей', 'Яковлев', 'Иванович', '+7(234)432-65-12', 'yakovlev@mail.ru', 'yakovlev', 12000000, 1, '', '2023-08-30 04:06:50', NULL),
(5, 'Анастасия', 'Сергеева', 'Сергеевна', '+7(241)245-23-15', 'sergeeva@mail.ru', 'sergeeva', 150000000, 0, '', '2023-08-30 04:06:50', NULL),
(6, 'Мария', 'Петрова', 'Олеговна', '+7(424)553-24-43', 'petrova@mail.ru', 'petrova', 560000000, 0, '', '2023-08-30 04:06:50', NULL),
(8, 'Ульяна', 'Ульянова', 'Павловна', '+7(865)453-23-75', 'ulyanova@mail.ru', 'ulyanova', 850000000, 0, '', '2023-08-30 04:06:50', NULL),
(17, 'Альмира', 'Андрюшина', 'Алекссева', '89056753456', 'andrushina@bk.ru', 'andrushina', 10000000, 1, '', '2023-08-30 04:06:50', NULL),
(18, 'Кира', 'Филькина', 'Павловна', '86574567634', 'filkina@bk.ru', 'filkina', 20000000, 0, '', '2023-08-30 04:06:50', NULL),
(20, 'Петр', 'Петров', 'Петрович', '898767876556', 'fallout1@mail.ru', 'fallout1', 1000000, 0, '', '2023-08-30 04:06:50', NULL),
(49, 'Арина', 'Лопухова', 'Олеговна', '89263161716', 'isip_a.o.lopuhova@mpt.ru', '11111111', 5000000, 1, '06f350a9a3c88abe3208a2b8f47515346430', '2023-09-24 22:30:29', '3ACZC4V2PQWLECUZ'),
(51, 'Татьяна', 'Булкина', 'Анатольевна', '+78939562345', 'sheynqueen@gmail.com', '11111111', 2000000, 1, 'f9e8ae9212747bbd69d8474e45bfa3543073', '2023-10-01 19:51:21', NULL),
(64, 'Арина', 'Лопухова', 'Олеговна', '', 'arburdock@gmail.com', '12345678', 1000000, 1, 'fb30b7366c80230075dd4ca531bfb23b352', '2024-03-04 08:57:32', NULL),
(65, 'Мария', 'Пупкина', 'Александровна', '78905677898', 'ouo@mail.ru', '12345678', 1000000, 0, '', '2024-03-04 08:59:14', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_agent`
--

CREATE TABLE `user_agent` (
  `id_user_agent` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `patronymic` varchar(32) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user_agent`
--

INSERT INTO `user_agent` (`id_user_agent`, `name`, `surname`, `patronymic`, `telephone`, `email`) VALUES
(1, 'Василий', 'Кашин', 'Константинович', '+75435452354', 'konstantinovich@mail.ru'),
(2, 'Андрей', 'Кириешко', 'Андреевич', '82345678789', 'kirieshko@bk.ru'),
(4, 'Максим', 'Кузнецов', 'Анатольевич', '89075674587', 'kuznetsov@mail.ru'),
(5, 'Аркадий', 'Инюшин', 'Иннокентьевич', '87654567645', 'inushin@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `announcement_type`
--
ALTER TABLE `announcement_type`
  ADD PRIMARY KEY (`id_announcement_type`);

--
-- Индексы таблицы `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`id_deal`),
  ADD KEY `id_house` (`id_house`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_agent` (`id_user_agent`);

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id_favorites`),
  ADD KEY `id_house` (`id_house`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id_house`),
  ADD KEY `id_announcement_type` (`id_announcement_type`),
  ADD KEY `id_house_agent` (`id_house_agent`),
  ADD KEY `id_house_type` (`id_house_type`),
  ADD KEY `id_neighborhood` (`id_neighborhood`),
  ADD KEY `id_sale_status` (`id_sale_status`);

--
-- Индексы таблицы `house_agent`
--
ALTER TABLE `house_agent`
  ADD PRIMARY KEY (`id_house_agent`);

--
-- Индексы таблицы `house_type`
--
ALTER TABLE `house_type`
  ADD PRIMARY KEY (`id_house_type`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Индексы таблицы `metro`
--
ALTER TABLE `metro`
  ADD PRIMARY KEY (`id_metro`),
  ADD KEY `id_neighborhood` (`id_neighborhood`);

--
-- Индексы таблицы `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD PRIMARY KEY (`id_neighborhood`);

--
-- Индексы таблицы `sale_status`
--
ALTER TABLE `sale_status`
  ADD PRIMARY KEY (`id_sale_status`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `user_agent`
--
ALTER TABLE `user_agent`
  ADD PRIMARY KEY (`id_user_agent`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `announcement_type`
--
ALTER TABLE `announcement_type`
  MODIFY `id_announcement_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `deal`
--
ALTER TABLE `deal`
  MODIFY `id_deal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id_favorites` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `house`
--
ALTER TABLE `house`
  MODIFY `id_house` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `house_agent`
--
ALTER TABLE `house_agent`
  MODIFY `id_house_agent` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `house_type`
--
ALTER TABLE `house_type`
  MODIFY `id_house_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `metro`
--
ALTER TABLE `metro`
  MODIFY `id_metro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `neighborhood`
--
ALTER TABLE `neighborhood`
  MODIFY `id_neighborhood` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `sale_status`
--
ALTER TABLE `sale_status`
  MODIFY `id_sale_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `user_agent`
--
ALTER TABLE `user_agent`
  MODIFY `id_user_agent` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `deal`
--
ALTER TABLE `deal`
  ADD CONSTRAINT `deal_ibfk_1` FOREIGN KEY (`id_house`) REFERENCES `house` (`id_house`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `deal_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `deal_ibfk_3` FOREIGN KEY (`id_user_agent`) REFERENCES `user_agent` (`id_user_agent`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`id_house`) REFERENCES `house` (`id_house`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `house`
--
ALTER TABLE `house`
  ADD CONSTRAINT `house_ibfk_1` FOREIGN KEY (`id_announcement_type`) REFERENCES `announcement_type` (`id_announcement_type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `house_ibfk_2` FOREIGN KEY (`id_house_agent`) REFERENCES `house_agent` (`id_house_agent`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `house_ibfk_3` FOREIGN KEY (`id_house_type`) REFERENCES `house_type` (`id_house_type`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `house_ibfk_4` FOREIGN KEY (`id_neighborhood`) REFERENCES `neighborhood` (`id_neighborhood`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `house_ibfk_5` FOREIGN KEY (`id_sale_status`) REFERENCES `sale_status` (`id_sale_status`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `metro`
--
ALTER TABLE `metro`
  ADD CONSTRAINT `metro_ibfk_1` FOREIGN KEY (`id_neighborhood`) REFERENCES `neighborhood` (`id_neighborhood`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
