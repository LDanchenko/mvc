-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2017 г., 21:01
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mvcweb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `username`, `age`, `description`, `photo`) VALUES
(36, 'dddddd', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eppSWwfpu.GoeVMQ3nKHFW1Ubk4uscxK', 'dwd', 19, 'dwdw', './uploads/36.jpeg'),
(37, 'r4r', '5454', 'aaa', 2, NULL, NULL),
(39, 'wdqwdqw', 'dwwdwd', 'wwdw', 2, 'dfqdf', NULL),
(40, 'tytyty', '$2a$10$1qAz2wSx3eDc4rFv5tGb5exO9JkjM9Om2zTgEgNcAP9eQbOfv/hzu', NULL, NULL, NULL, NULL),
(41, 'tytytytytyt', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e6qM2AYGDe9I.TapNfybhISj0LI6OQmS', NULL, NULL, NULL, './uploads/41.jpeg'),
(42, 'lubov', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e4Fs0ofwdT2fNMjz43JMgExrSidEI6F6', 'qdwqdqwdqwdd', 33, 'dwdq', './uploads/42.jpeg'),
(43, 'admin', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e9iQEe5iZgcxNyuSsSTrpQkGSHJf.lvG', NULL, NULL, NULL, NULL),
(44, 'lubpvh', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e5GBr9nrnuzNciH994swvakN3VQ5F7mS', NULL, NULL, NULL, NULL),
(45, 'w\'flf\'', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eSGdlFAPpyLMOJfzd3Bio.F..GsbXqFy', NULL, NULL, NULL, NULL),
(46, 'rerere', '$2a$10$1qAz2wSx3eDc4rFv5tGb5e/RTNGwH7G/8pAT0CobIlyUDLSUnEp7q', NULL, NULL, NULL, NULL),
(47, 'uiuiuiui', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eanPafCCr/cngw0uM7./AB5IwhR0EWtK', NULL, NULL, NULL, NULL),
(48, 'wofjfo', '$2a$10$1qAz2wSx3eDc4rFv5tGb5eOQQhDfW989Amw4xbu706ZUUfqCJnlm.', NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_uindex` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
