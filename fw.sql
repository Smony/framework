-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2017 г., 16:16
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fw`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `text`) VALUES
(1, 'new title', 'new text'),
(2, 'cattitle', 'new text2'),
(3, 'cattitle2', 'new text3'),
(4, 'new title4', 'new text4'),
(5, 'new title5', 'new text5'),
(6, 'new title6', 'new text6');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `ID` int(11) NOT NULL,
  `Name` char(35) NOT NULL DEFAULT '',
  `CountryCode` char(3) NOT NULL DEFAULT '',
  `District` char(20) NOT NULL DEFAULT '',
  `Population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`ID`, `Name`, `CountryCode`, `District`, `Population`) VALUES
(1, 'qweqwe', 'qwe', 'qwe', 12312),
(2, 'qweqw', '122', 'fsdf', 2131);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `date`, `keywords`, `description`) VALUES
(1, 'Ваш шедевр готов!', 'Повседневная практика показывает, что постоянный количественный рост и сфера нашей активности в значительной степени обуславливает создание направлений прогрессивного развития. Таким образом рамки и место обучения кадров требуют от нас анализа форм развития. Равным образом рамки и место обучения кадров требуют от нас анализа соответствующий условий активизации. Идейные соображения высшего порядка, а также рамки и место обучения кадров представляет собой интересный эксперимент проверки соответствующий условий активизации. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущным потребностям. Не следует, однако забывать, что укрепление и развитие структуры способствует подготовки и реализации существенных финансовых и административных условий.', '2017-06-20', '1231', '12312qwe'),
(2, 'Смысл сайта', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.', '0000-00-00', '567567f', '456yhfghfghfg'),
(5, 'С другой стороны ', 'Не следует, однако забывать, что реализация намеченных плановых заданий позволяет выполнять важные задания по разработке существенных финансовых и административных условий. Идейные соображения высшего порядка, а также новая модель организационной деятельности в значительной степени обуславливает создание новых предложений. Не следует, однако забывать, что сложившаяся структура организации требуют от нас анализа системы обучения кадров, соответствует насущным потребностям. С другой стороны сложившаяся структура организации позволяет выполнять важные задания по разработке системы обучения кадров, соответствует насущн', '2017-06-21', '00000', '99999'),
(6, 'Разнообразный и богатый опыт', 'Задача организации, в особенности же укрепление и развитие структуры влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи! новая модель организационной деятельности играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности требуют определения и уточнения систем массового участия. С другой стороны постоянный количественный рост и сфера нашей активности требуют определения и уточнения новых предложений.', '2017-06-23', '55555', '6666');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `title`, `keywords`, `description`) VALUES
(1, 'qwe', 'qwe', 'qwe', 'qwe'),
(2, 'asd', 'asd', 'asd', 'asd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CountryCode` (`CountryCode`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
