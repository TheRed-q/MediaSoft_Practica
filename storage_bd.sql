-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 20 2020 г., 23:23
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `storage_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `name`, `user_name`) VALUES
(5, '2020_10_17_08_12_23_441100.jpg', 'nadrshin_n');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `imagename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_namep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_ofproduct` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`Name`, `Weight`, `Price`, `ID`, `quantity`, `imagename`, `user_namep`, `info`, `type_ofproduct`) VALUES
('Мышь проводная Logitech Gaming Mouse G403 HERO ', 88, 4499, 11, 20, '2020_10_20_19_23_29_381000.jpg', 'admin', 'Мышь проводная Logitech Gaming Mouse G403 HERO отличается эргономичной формой корпуса и оптимальным весом (87.3 г), благодаря чему она станет главным атрибутом любого геймера, который поможет одержать сокрушительные победы в любых виртуальных баталиях. Модель облачена в прочный корпус из износостойкого пластика. За счет матового покрытия отпечатки пальцев остаются незаметными на поверхности манипулятора и обеспечивается его аккуратный внешний вид. За счет системы регулировки веса вы сможете отрегулировать вес мыши для максимального удобства использования.\r\nПроводная мышь Logitech Gaming Mouse G403 HERO укомплектована декоративной наклейкой и грузиком весом 10 г. Благодаря кабелю USB длиной 2.1 м, при помощи которого осуществляется подключение манипулятора к компьютеру, вам будет предоставлена полная свобода действий в процессе гейминга или повседневной работы за ПК. За счет особой формы корпуса мышь подходит для использования правой рукой. В данной модели используется оптический светодиодный датчик HERO с максимальным разрешением 25600 dpi.', 'Техника'),
('Мышь проводная Logitech G102 LIGHTSYNC', 89, 2299, 12, 50, '2020_10_20_19_25_26_181700.jpg', 'admin', 'Мышь проводная Logitech G102 LIGHTSYNC позволяет играть с максимальной эффективностью. В мышке применяется датчик игрового уровня с чувствительностью 8000 dpi, регулируемой в широком диапазоне отдельной кнопкой. Logitech G102 LIGHTSYNC оснащена 6 программируемыми кнопками. В левой и правой кнопках используется металлический пружинный механизм для исключительно точного срабатывания.\r\nКонструкция корпуса обтекаемой формы гарантирует комфорт и точность движений. Система подсветки RGB с фирменной технологией LIGHTSYNC позволяет создать собственный игровой стиль с помощью 16.8 млн оттенков и анимированных эффектов. В программном обеспечении Logitech G HUB можно назначать внутриигровые команды, осуществлять контроль над процессом управления системой и настраивать функциональность клавиш.', 'Техника'),
('Мышь проводная Logitech G402 Hyperion Fury', 113, 3250, 13, 22, '2020_10_20_19_27_19_073600.webp', 'admin', 'Проводная мышь Logitech Gaming Mouse G402 Hyperion Fury с 32-битным ARM-процессором — игровая модель, обеспечивающая прицельную стрельбу и позволяющая уклоняться от шквального огня. Мышь мгновенно отслеживает движения и определяет цель с высокой точностью. Это обеспечивает светодиодный датчик Delta Zero с максимальным разрешением 4000 dpi, которое можно настраивать и регулировать. Сенсор выполнен по технологии Fusion Engine, благодаря которой скорость отслеживания составляет 500 дюймов в секунду.\r\nУправление осуществляется при помощи 7 программируемых кнопок и колеса прокрутки с регулируемым режимом работы. Встроенная память позволяет сохранить настроенные профили.\r\nЭргономичный черный корпус с подсветкой сконструирован под управление правой рукой. Поверхность имеет приятное на ощупь SoftTouch-покрытие, обеспечивающее более надежный захват. Мышь Logitech Gaming Mouse G402 Hyperion Fury легко подключается к персональному компьютеру через двухметровый эластичный кабель с USB-разъемом.', 'Техника');

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`ID`, `Login`, `Password`, `full_name`, `email`) VALUES
(8, 'admin', 'admin', 'Александр Сергеевич Надршин', 'nadrshin.n@gmail.com'),
(49, 'nadrshin_n', '123123', 'Надршин Никита Сергевич', 'nadrshin.n@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
