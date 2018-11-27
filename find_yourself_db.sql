-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2018 г., 23:13
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `find_yourself_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fy_admins`
--

CREATE TABLE `fy_admins` (
  `fy_adm_id` int(11) NOT NULL,
  `fy_adm_login` text NOT NULL,
  `fy_adm_pass` text NOT NULL,
  `fy_adm_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fy_admins`
--

INSERT INTO `fy_admins` (`fy_adm_id`, `fy_adm_login`, `fy_adm_pass`, `fy_adm_token`) VALUES
(1, 'fy_admin', '8a9abf0a5f505f75827a00a134c0c8eb', 'D87917402494CB1A3366D3C1E7295F42');

-- --------------------------------------------------------

--
-- Структура таблицы `fy_news`
--

CREATE TABLE `fy_news` (
  `fy_news_id` int(11) NOT NULL,
  `fy_news_name` text NOT NULL,
  `fy_news_short_descr` text NOT NULL,
  `fy_news_text` text NOT NULL,
  `fy_news_pic` text NOT NULL,
  `fy_news_views` int(11) NOT NULL DEFAULT '0',
  `fy_news_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fy_news`
--

INSERT INTO `fy_news` (`fy_news_id`, `fy_news_name`, `fy_news_short_descr`, `fy_news_text`, `fy_news_pic`, `fy_news_views`, `fy_news_date`) VALUES
(1, 'Top-10 самых высокооплачиваемых профессий в РБ', 'Для поступающих, студентов и их родителей действительно важно знать, какие же профессии в нашей стране являются самыми высокооплачиваемыми. Ведь четыре года обучения пролетают очень быстро, и настает время выбирать, где и кем ты будешь работать, по специальности или нет.', 'Для поступающих, студентов и их родителей действительно важно знать, какие же профессии в нашей стране являются самыми высокооплачиваемыми. Ведь четыре года обучения пролетают очень быстро, и настает время выбирать, где и кем ты будешь работать, по специальности или нет.', 'top.jpg', 0, '2018-11-23'),
(2, 'Стереотипы о профессиях', 'Продавцы крадут. Журналисты обманывают. Врачи неразборчиво пишут. Актёры истеричны. \'<b>\'Программисты\'</b>\' не ухожены. Художники страдают алкоголизмом. Модели глупые. Дизайнеры вычурные. Певцы самолюбивые. Тренеры грубые. Библиотекари занудные. Милиционер, пилот, водитель, машинист — исключительно мужские профессии. Работать секретарём, кассиром, воспитателем под стать слабому полу, но не сильному — стыдно. Фотосъёмка, визаж, репетиторство — и вовсе занятия, которые легко освоит любой.', 'Продавцы крадут. Журналисты обманывают. Врачи неразборчиво пишут. Актёры истеричны. Программисты не ухожены. Художники страдают алкоголизмом. Модели глупые. Дизайнеры вычурные. Певцы самолюбивые. Тренеры грубые. Библиотекари занудные. Милиционер, пилот, водитель, машинист — исключительно мужские профессии. Работать секретарём, кассиром, воспитателем под стать слабому полу, но не сильному — стыдно. Фотосъёмка, визаж, репетиторство — и вовсе занятия, которые легко освоит любой.', 'Ster.jpg', 0, '2018-11-21'),
(3, 'Топ-10 самых востребованных профессий в Беларуси', 'Повторяя общмировые тенденции кадрового обеспечения, в деталях Беларусь следует своим путем. Среди \"наших\" топ-профессий есть такие, как повар, врач государственной клиники и продавец.', 'Повторяя общмировые тенденции кадрового обеспечения, в деталях Беларусь следует своим путем. Среди \"наших\" топ-профессий есть такие, как повар, врач государственной клиники и продавец.', 'top_2.jpg', 0, '2018-11-22'),
(4, 'Интервью с преподавателем «Самое сложное в профессии, среди всей бумажной работы оставить время на работу с детьми»', 'Сегодня мы беседуем с преподавателем учреждения образования «Гомельский государственный машиностроительный колледж» Завацкой Аленой Николаевной. -Расскажите подробнее о том, что вы преподаете? -Я преподаю спец. дисциплины для специальности «Программное обеспечение информационных технологий», а именно «Защиту компьютерной информации» и «Тестирование и отладку программного обеспечения». Это не полный список преподаваемых дисциплин, но эти мне нравятся больше всего, их я преподаю уже 4 года. -Нравится ли Вам ваша работа?', 'Сегодня мы беседуем с преподавателем учреждения образования «Гомельский государственный машиностроительный колледж» Завацкой Аленой Николаевной. -Расскажите подробнее о том, что вы преподаете? -Я преподаю спец. дисциплины для специальности «Программное обеспечение информационных технологий», а именно «Защиту компьютерной информации» и «Тестирование и отладку программного обеспечения». Это не полный список преподаваемых дисциплин, но эти мне нравятся больше всего, их я преподаю уже 4 года. -Нравится ли Вам ваша работа?', 'top.jpg', 0, '2018-11-21'),
(5, 'Новая песня группы \"Этажность\"', 'Ваганыч написал новую песню для своего проекта <i>\"этажность\"</i>, а так же клип для неё. ', 'Песня имеет название <i>\"intro\"</i>. Это значит, что скоро выходит новый альбом. <b>Ура!</b>', 'ваганыч отличный контент.png', 0, '2018-11-27');

-- --------------------------------------------------------

--
-- Структура таблицы `fy_professions`
--

CREATE TABLE `fy_professions` (
  `fy_prof_id` int(11) NOT NULL,
  `fy_prof_name` text NOT NULL,
  `fy_prof_desk` text NOT NULL,
  `fy_prof_univ` int(11) DEFAULT NULL,
  `fy_prof_colleges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `fy_teach`
--

CREATE TABLE `fy_teach` (
  `fy_teach_id` int(11) NOT NULL,
  `fy_teach_name` text NOT NULL,
  `fy_teach_descr` text NOT NULL,
  `fy_teach_prof` text,
  `fy_teach_geo` json DEFAULT NULL,
  `fy_teach_city` text,
  `fy_teach_addr` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fy_teach`
--

INSERT INTO `fy_teach` (`fy_teach_id`, `fy_teach_name`, `fy_teach_descr`, `fy_teach_prof`, `fy_teach_geo`, `fy_teach_city`, `fy_teach_addr`) VALUES
(1, 'Гомельский Государственный Машиностроительный Колледж', 'В данном колледже вы можете получить такое-то такое-то образвание', 'программист САПР\\n\r\nпрограммист офиса\\n\r\nлитейщик\\n\r\nтос\\n\r\nтом\\n\r\nЛЧС\\n\r\nэкономист\\n\r\n', '{\"bugs\": {\"url\": \"https://github.com/katzer/cordova-plugin-badge/issues\"}, \"name\": \"cordova-plugin-badge\", \"author\": \"Sebastián Katzer\", \"cordova\": {\"id\": \"cordova-plugin-badge\", \"platforms\": [\"ios\", \"osx\", \"android\", \"browser\", \"windows\"]}, \"engines\": [{\"name\": \"cordova\", \"version\": \">=6.0.0\"}, {\"name\": \"apple-ios\", \"version\": \">=10.0.0\"}, {\"name\": \"cordova-android\", \"version\": \">=4\"}, {\"name\": \"cordova-plugman\", \"version\": \">=4.2.0\"}], \"license\": \"Apache 2.0\", \"version\": \"0.8.7\", \"homepage\": \"https://github.com/katzer/cordova-plugin-badge#readme\", \"keywords\": [\"appplant\", \"badge\", \"shortcutbadger\", \"ecosystem:cordova\", \"cordova-ios\", \"cordova-osx\", \"cordova-android\", \"cordova-browser\", \"cordova-windows\"], \"repository\": {\"url\": \"git+https://github.com/katzer/cordova-plugin-badge.git\", \"type\": \"git\"}, \"description\": \"Shows the count of unread messages as a badge on the app icon.\"}', 'Гомель', 'Объездная, 4'),
(2, 'Белорусский Государственный Университет Информатики и Радиотехники', 'БГУИР - качество, проверенное временем\r\n\r\nболее 50-лет созидательного роста -  74 тыс. выпускников - сочетание традиций и инноваций в области высшего технического образования \r\nБГУИР является ведущим вузом в отрасли, базовой организацией государств-участников СНГ по высшему образованию в области информатики и радиоэлектроники\r\nИмеет сертификаты соответствия системы менеджмента качества требованиям международного стандарта ISО 9001 в Национальной системе подтверждения соответствия Республики Беларусь и в немецкой системе сертификации DAkkS\r\nАккредитован в Государственном комитете по науке и технологиям и Национальной академии наук Беларуси на статус научной организации\r\nУдостоен премии Правительства Республики Беларусь за достижения в области качества по итогам 2011, 2016 годов\r\nНеоднократно занесён на Республиканскую доску Почёта', 'Педагог-инженер\\n\r\nПедагог-программист\\n\r\nИнженер по радиоэлектронике\\n\r\nИнженер по радиоинформатике\\n\r\nИнженер электронной техники\\n\r\nИнженер по электронным системам\\n\r\nЭкономист-программист\\n\r\nМаркетолог-программист\\n\r\nИнженер-программист-экономист\\n\r\nСистемный программист-логистик\\n\r\nИнженер-электроник-программист\\n\r\nИнженер-проектировщик\\n\r\nИнженер-системотехник\\n\r\nПрограммист. Бизнес-аналитик\\n\r\nИнженер-программист\\n\r\nИнженер по инфокоммуникациям\\n\r\nИнженер по инфокоммуникационным системам\\n \r\nИнженер по стандартизации,\r\nсертификации и контролю параметров инфокоммуникационных систем\\n\r\nСпециалист по защите информации\\n\r\nИнженер по телекоммуникациям\\n\r\nИнженер по радиоэлектронике\\n\r\nИнженер по информационным технологиям\\n\r\nИнженер по информационным технологиям и управлению\\n\r\nИнженер-системный программист-геймдизайнер\\n\r\n', '{\"lat\": 53.9188117, \"wei\": 27.5937053}', 'Минск', 'ул. Петруся Бровки 6');

-- --------------------------------------------------------

--
-- Структура таблицы `fy_type_teach`
--

CREATE TABLE `fy_type_teach` (
  `fy_typeteach_id` int(11) NOT NULL,
  `fy_typeteach_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fy_type_teach`
--

INSERT INTO `fy_type_teach` (`fy_typeteach_id`, `fy_typeteach_type`) VALUES
(1, 'ССУЗ'),
(2, 'СУЗ'),
(3, 'ВУЗ');

-- --------------------------------------------------------

--
-- Структура таблицы `fy_university`
--

CREATE TABLE `fy_university` (
  `fy_univ_id` int(11) NOT NULL,
  `fy_univ_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fy_university`
--

INSERT INTO `fy_university` (`fy_univ_id`, `fy_univ_type`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `ty_college`
--

CREATE TABLE `ty_college` (
  `ty_college_id` int(11) NOT NULL,
  `ty_college_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ty_college`
--

INSERT INTO `ty_college` (`ty_college_id`, `ty_college_type`) VALUES
(1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fy_admins`
--
ALTER TABLE `fy_admins`
  ADD PRIMARY KEY (`fy_adm_id`);

--
-- Индексы таблицы `fy_news`
--
ALTER TABLE `fy_news`
  ADD PRIMARY KEY (`fy_news_id`);

--
-- Индексы таблицы `fy_professions`
--
ALTER TABLE `fy_professions`
  ADD PRIMARY KEY (`fy_prof_id`),
  ADD UNIQUE KEY `fy_prof_colleges` (`fy_prof_colleges`),
  ADD UNIQUE KEY `fy_prof_univ` (`fy_prof_univ`);

--
-- Индексы таблицы `fy_teach`
--
ALTER TABLE `fy_teach`
  ADD PRIMARY KEY (`fy_teach_id`),
  ADD KEY `fy_univ_id` (`fy_teach_id`);

--
-- Индексы таблицы `fy_type_teach`
--
ALTER TABLE `fy_type_teach`
  ADD PRIMARY KEY (`fy_typeteach_id`);

--
-- Индексы таблицы `fy_university`
--
ALTER TABLE `fy_university`
  ADD PRIMARY KEY (`fy_univ_id`),
  ADD KEY `fy_univ_type` (`fy_univ_type`);

--
-- Индексы таблицы `ty_college`
--
ALTER TABLE `ty_college`
  ADD PRIMARY KEY (`ty_college_id`),
  ADD KEY `ty_college_type` (`ty_college_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fy_admins`
--
ALTER TABLE `fy_admins`
  MODIFY `fy_adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `fy_news`
--
ALTER TABLE `fy_news`
  MODIFY `fy_news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `fy_professions`
--
ALTER TABLE `fy_professions`
  MODIFY `fy_prof_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `fy_teach`
--
ALTER TABLE `fy_teach`
  MODIFY `fy_teach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `fy_type_teach`
--
ALTER TABLE `fy_type_teach`
  MODIFY `fy_typeteach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `fy_university`
--
ALTER TABLE `fy_university`
  MODIFY `fy_univ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `ty_college`
--
ALTER TABLE `ty_college`
  MODIFY `ty_college_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `fy_professions`
--
ALTER TABLE `fy_professions`
  ADD CONSTRAINT `fy_professions_ibfk_1` FOREIGN KEY (`fy_prof_univ`) REFERENCES `fy_university` (`fy_univ_id`),
  ADD CONSTRAINT `fy_professions_ibfk_2` FOREIGN KEY (`fy_prof_colleges`) REFERENCES `ty_college` (`ty_college_id`);

--
-- Ограничения внешнего ключа таблицы `fy_university`
--
ALTER TABLE `fy_university`
  ADD CONSTRAINT `fy_university_ibfk_1` FOREIGN KEY (`fy_univ_id`) REFERENCES `fy_teach` (`fy_teach_id`),
  ADD CONSTRAINT `fy_university_ibfk_2` FOREIGN KEY (`fy_univ_type`) REFERENCES `fy_type_teach` (`fy_typeteach_id`);

--
-- Ограничения внешнего ключа таблицы `ty_college`
--
ALTER TABLE `ty_college`
  ADD CONSTRAINT `ty_college_ibfk_1` FOREIGN KEY (`ty_college_id`) REFERENCES `fy_teach` (`fy_teach_id`),
  ADD CONSTRAINT `ty_college_ibfk_2` FOREIGN KEY (`ty_college_type`) REFERENCES `fy_type_teach` (`fy_typeteach_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
