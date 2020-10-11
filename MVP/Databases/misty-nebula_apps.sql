-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.130:3306
-- Время создания: Окт 11 2020 г., 09:25
-- Версия сервера: 10.3.25-MariaDB-log
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `misty-nebula_apps`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `card_id` int(11) NOT NULL,
  `card_connect` int(11) NOT NULL,
  `card_number` text NOT NULL,
  `card_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`card_id`, `card_connect`, `card_number`, `card_title`) VALUES
(1, 1, '1234567899876543', 'Дебетовая карта'),
(2, 2, '1234567899876543', 'Дебетовая карта');

-- --------------------------------------------------------

--
-- Структура таблицы `cinema`
--

CREATE TABLE `cinema` (
  `c_id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_image` text NOT NULL,
  `c_price` int(11) NOT NULL,
  `c_type` text NOT NULL,
  `c_time` text NOT NULL,
  `c_age` text NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cinema`
--

INSERT INTO `cinema` (`c_id`, `c_title`, `c_image`, `c_price`, `c_type`, `c_time`, `c_age`, `c_desc`) VALUES
(1, 'Стрельцов', 'https://s3.kinoteatr.ru/preview/upload/movies/5905/cover.jpg', 530, '2D', '15:30, 16:40, 18:50', '6+', 'К 20 годам у него есть все, о чем только можно мечтать: талант, деньги, слава, любовь. Он — Эдуард Стрельцов, восходящая звезда советского футбола и кумир миллионов. Вся страна с замиранием сердца ждет побед советской сборной на предстоящем Чемпионате мира в Швеции и дуэли Стрельцова с Пеле. Но за два дня до отъезда команды недоброжелатели ломают судьбу спортсмена... Когда дорога в футбол, казалось бы, навсегда отрезана, Стрельцов должен совершить невозможное, чтобы вернуться и доказать всем, что он — чемпион. Великий спортсмен, заслуживший настоящую народную любовь.'),
(2, 'Гудбай, Америка', 'https://s3.kinoteatr.ru/preview/upload/movies/6065/cover.jpg', 490, '2D', '15:30, 16:40, 18:50', '12+', 'Виктор Сергеевич едет в Америку в гости к дочери и с ужасом обнаруживает, что его внук Пол хоть и говорит по-русски, но не понимает простых вещей, знакомых и понятных каждому мальчишке в России. Неунывающий Армен пытается закрепиться в США, постепенно постигая все прелести фиктивного брака. Для давно обосновавшейся в Штатах Юли неожиданной проблемой становится невозможность найти правильно приготовленную гефилте фиш. Не так давно переехавший в Америку Игорь всячески старается откреститься от своего русского прошлого, называя себя Джейсоном. Казалось бы, совершенно разные люди с совершенно непохожими проблемами, но способный решить любую проблему авантюрист Георгий доказывает, что это не так, все герои страдают от одного недуга – пытаются забыть о своих корнях, упуская нехитрую истину: можно уехать из России, но нельзя перестать быть русским.'),
(3, 'Честный вор', 'https://s3.kinoteatr.ru/preview/upload/movies/6067/cover.jpg', 230, '2D', '15:30, 16:40, 18:50', '16+', 'Он – профессиональный грабитель банков, который решил отойти от дел. Но стать честным, будучи вором – не так просто: ему придется дать отпор продажным копам, чтобы спасти своё имя и любимую.'),
(4, 'Довод', 'https://s3.kinoteatr.ru/preview/upload/movies/5864/cover.jpg', 230, '2D', '15:30, 16:40, 18:50', '16+', 'Новым главным героем оригинального научно-фантастического экшна Кристофера Нолана «Довод» становится Джон Дэвид Вашингтон. Он вооружен лишь словом – Довод – и сражается за выживание всего мира. Главный герой погружается в сумеречный мир международного шпионажа, выполняя миссию, которая перерастает в нечто, выходящее за пределы реального времени. Нет, это не путешествие во времени, это – инверсия.'),
(5, 'Мулан', 'https://s3.kinoteatr.ru/preview/upload/movies/4806/cover.jpg', 230, '3D', '15:30, 16:40, 18:50', '12+', 'Изданный императором Китая указ о призыве на службу в Имперской армии одного мужчины из каждой семьи для защиты страны от северных захватчиков вдохновляет Мулан, старшую дочь почетного воина, занять в войсках место своего больного отца. Маскируясь под мужчину, девушка подвергается испытаниям на каждом шагу, проявляя свои внутреннюю силу и истинный потенциал. Мулан ждет эпичное путешествие, которое превратит её в доблестного воина, позволит заслужить уважение благодарного народа и стать гордостью отца.'),
(6, 'Семейка бигфутов', 'https://s3.kinoteatr.ru/preview/upload/movies/5781/cover.jpg', 230, '3D', '15:30, 16:40, 18:50', '6+', 'Все семьи разные, но эта – самая разношерстная. Папа когда-то превратился в Бигфута, сын унаследовал его суперспособности и умение понимать язык животных, так еще и в доме вместе с ними и мамой живет целый зоопарк – огромный медведь, неутомимая белка и беспокойный енот со множеством очаровательных детенышей. Когда же уникальному заповеднику на Аляске понадобится помощь, вся семейка Бигфутов отправится в большое путешествие и покажет всему миру, на что способна их команда…'),
(7, 'Кто не спрятался', 'https://s1.kinoteatr.ru/preview/upload/a1/00/00/53/16/Kto-ne-spriatalsia-poster-70x100-rus-FINAL.jpg', 450, '3D', '15:30, 16:40, 18:50', '18+', 'Гномы секретно припеваючи живут в кондитерской и лакомятся десертами, которые готовит хозяин заведения — пекарь Олаф. У Олафа есть старший брат Генри, который считает, что во всех его бедах виноват Олаф. Генри решает отомстить Олафу, разрушив его кондитерскую. Гномы приходят на помощь Олафу, спасая его в безнадёжной ситуации.'),
(8, 'Гномы летом', 'https://s3.kinoteatr.ru/preview/upload/movies/6064/cover.jpg', 350, '3D', '15:30, 16:40, 18:50', '6+', 'Вы снимали жилье через интернет? Смотрели красивые картинки на сайте и представляли идеальный отпуск? Две молодые пары решили провести выходные на берегу океана и арендовали роскошную виллу. Они не знали, что в каждой комнате установлены камеры, и за ними пристально следят. Их маленькие секреты, а вместе с ними и тайна всего дома станут явью, но это лишь начало игры. Кто не спрятался...'),
(9, 'Kitoboy', 'https://s3.kinoteatr.ru/preview/upload/movies/6063/cover.jpg', 350, '3D', '15:30, 16:40, 18:50', '16+', 'Все меняется в жизни юного чукотского охотника Лёшки с появлением в поселке интернета. Он влюбляется - впервые и сильно - в молчаливую девушку из видеочата. Узнав, что она живет в Детройте, Лешка решается на самый отчаянный поступок в своей жизни.'),
(10, 'Заклятье. Дом 32', 'https://s3.kinoteatr.ru/preview/upload/movies/5914/cover.jpg', 350, '3D', '15:30, 16:40, 18:50', '16+', 'Основано на реальных событиях. Начало 70-х. До эпизода Амитивилля. Мечтая начать новую жизнь в большом городе, семья въезжает в просторную квартиру, где сохранилась вся обстановка от старых жильцов. Очень скоро семья понимает, что кроме них в квартире находится нечто жуткое. Оно общается с ними через парализованного деда, оставляет записки, запрещая покидать квартиру и прибегать к помощи специалистов. Чтобы выжить, семье нужно разгадать тайну дома 32…'),
(11, 'После. Глава 2', 'https://s3.kinoteatr.ru/preview/upload/movies/5892/cover.jpg', 350, '2D', '15:30, 16:40, 18:50', '16+', 'Основан на серии романов-бестселлеров Анны Тодд «После», состоящей из пяти книг. Встреча с Хардином (Хиро Файнс) разделила её жизнь на до и после. Молодые и такие разные – от их страсти буквально разлетаются искры. Однако внезапно в жизни девушки появляется новый знакомый (Дилан Спраус), который готов положить к её ногам весь мир…');

-- --------------------------------------------------------

--
-- Структура таблицы `data`
--

CREATE TABLE `data` (
  `d_id` int(11) NOT NULL,
  `d_connect` int(11) NOT NULL,
  `globalTimeStamp` text NOT NULL,
  `keyMediumCount` text NOT NULL,
  `keyMediumTime` text NOT NULL,
  `clicksCount` text NOT NULL,
  `middleSpeed` text NOT NULL,
  `screenWidth` text NOT NULL,
  `screenHeight` text NOT NULL,
  `screenDiagonal` text NOT NULL,
  `screenOrientation` text NOT NULL,
  `colorDepth` text NOT NULL,
  `windowHistoryLength` text NOT NULL,
  `userAgentBrowser` text NOT NULL,
  `userAgentVersion` text NOT NULL,
  `userAgentName` text NOT NULL,
  `userAgentCodeName` text NOT NULL,
  `userAgentPlatform` text NOT NULL,
  `userAgentCoresCount` text NOT NULL,
  `userAgentConnectionData` text NOT NULL,
  `userAgentVideoCardAndDirectX` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `merchant`
--

CREATE TABLE `merchant` (
  `m_id` int(11) NOT NULL,
  `m_title` text NOT NULL,
  `m_icon` text NOT NULL,
  `m_url` text NOT NULL,
  `m_desc` text NOT NULL,
  `m_connect` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `merchant`
--

INSERT INTO `merchant` (`m_id`, `m_title`, `m_icon`, `m_url`, `m_desc`, `m_connect`) VALUES
(1, 'Кино', 'assets/img/apps_icons/films.png', 'apps/cinema/index', 'Тестовое приложение', 2),
(2, 'Рестораны', 'assets/img/apps_icons/food.png', 'apps/dev/index', 'Тестовое приложение', 2),
(3, 'Концерты', 'assets/img/apps_icons/music.png', 'apps/dev/index', 'Тестовое приложение', 2),
(4, 'Путешествия', 'assets/img/apps_icons/travel.png', 'apps/dev/index', 'Тестовое приложение', 2),
(5, 'Топливо', 'assets/img/apps_icons/gas.png', 'apps/dev/index', 'Тестовое приложение', 2),
(6, 'Спорт', 'assets/img/apps_icons/sport.png', 'apps/dev/index', 'Тестовое приложение', 2),
(7, 'Страхование', 'assets/img/apps_icons/sequrity.png', 'apps/dev/index', 'Тестовое приложение', 2),
(8, 'Шопинг', 'assets/img/apps_icons/shopping.png', 'apps/dev/index', 'Тестовое приложение', 2),
(9, 'Здоровье', 'assets/img/apps_icons/health.png', 'apps/dev/index', 'Тестовое приложение', 2),
(10, 'Красота', 'assets/img/apps_icons/beauty.png', 'apps/dev/index', 'Тестовое приложение', 2),
(12, 'Книги', 'assets/img/apps_icons/books.png', 'apps/dev/index', 'Тестовое приложение', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `t_id` int(11) NOT NULL,
  `t_from` int(11) NOT NULL,
  `t_to` int(11) NOT NULL,
  `t_merchant_id` int(11) NOT NULL,
  `t_amount` int(11) NOT NULL,
  `t_timestamp` text NOT NULL DEFAULT current_timestamp(),
  `t_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`t_id`, `t_from`, `t_to`, `t_merchant_id`, `t_amount`, `t_timestamp`, `t_status`) VALUES
(1, 1, 2, 1, 530, '2020-10-11 11:04:09', 'wait'),
(2, 1, 2, 1, 530, '2020-10-11 11:06:14', 'wait'),
(3, 1, 2, 1, 530, '2020-10-11 11:09:58', 'wait'),
(4, 1, 2, 1, 530, '2020-10-11 11:10:35', 'wait'),
(5, 1, 2, 1, 530, '2020-10-11 11:12:08', 'wait'),
(6, 1, 2, 1, 530, '2020-10-11 11:14:02', 'wait'),
(7, 1, 2, 1, 530, '2020-10-11 11:16:14', 'wait'),
(8, 1, 2, 1, 530, '2020-10-11 11:30:38', 'wait'),
(9, 1, 2, 1, 530, '2020-10-11 11:31:07', 'wait'),
(10, 1, 2, 1, 530, '2020-10-11 11:31:47', 'wait'),
(11, 1, 2, 1, 530, '2020-10-11 11:32:42', 'wait'),
(12, 1, 2, 1, 530, '2020-10-11 11:32:56', 'wait'),
(13, 1, 2, 1, 530, '2020-10-11 11:34:28', 'wait'),
(14, 1, 2, 1, 530, '2020-10-11 11:34:46', 'wait'),
(15, 1, 2, 1, 530, '2020-10-11 11:35:00', 'wait'),
(16, 1, 2, 1, 530, '2020-10-11 11:36:06', 'wait'),
(17, 1, 2, 1, 530, '2020-10-11 11:36:21', 'wait'),
(18, 1, 2, 1, 530, '2020-10-11 11:37:34', 'wait'),
(19, 1, 2, 1, 530, '2020-10-11 11:37:53', 'wait'),
(20, 1, 2, 1, 530, '2020-10-11 11:38:30', 'wait'),
(21, 1, 2, 1, 530, '2020-10-11 11:39:52', 'wait'),
(22, 1, 2, 1, 530, '2020-10-11 11:40:14', 'wait'),
(23, 1, 2, 1, 530, '2020-10-11 11:40:30', 'wait'),
(24, 1, 2, 1, 530, '2020-10-11 11:40:50', 'wait'),
(25, 1, 2, 1, 230, '2020-10-11 11:41:05', 'wait'),
(26, 1, 2, 1, 530, '2020-10-11 11:42:27', 'wait'),
(27, 1, 2, 1, 530, '2020-10-11 11:43:35', 'wait'),
(28, 1, 2, 1, 530, '2020-10-11 11:44:14', 'wait'),
(29, 1, 2, 1, 530, '2020-10-11 11:46:16', 'wait'),
(30, 1, 2, 1, 530, '2020-10-11 11:46:49', 'wait'),
(31, 1, 2, 1, 530, '2020-10-11 11:49:25', 'wait'),
(32, 1, 2, 1, 530, '2020-10-11 11:51:27', 'wait'),
(33, 1, 2, 1, 530, '2020-10-11 11:52:23', 'wait'),
(34, 1, 2, 1, 530, '2020-10-11 11:52:41', 'wait'),
(35, 1, 2, 1, 530, '2020-10-11 11:54:48', 'wait'),
(36, 1, 2, 1, 530, '2020-10-11 11:55:06', 'wait'),
(37, 1, 2, 1, 530, '2020-10-11 11:55:35', 'wait'),
(38, 1, 2, 1, 530, '2020-10-11 11:55:55', 'wait'),
(39, 1, 2, 1, 530, '2020-10-11 11:59:17', 'wait'),
(40, 1, 2, 1, 530, '2020-10-11 11:59:33', 'wait'),
(41, 1, 2, 1, 530, '2020-10-11 12:00:37', 'wait'),
(42, 1, 2, 1, 530, '2020-10-11 12:01:01', 'wait'),
(43, 1, 2, 1, 530, '2020-10-11 12:01:21', 'wait'),
(44, 1, 2, 1, 530, '2020-10-11 12:01:38', 'wait'),
(45, 1, 2, 1, 530, '2020-10-11 12:02:44', 'wait'),
(46, 1, 2, 1, 530, '2020-10-11 12:04:09', 'wait'),
(47, 1, 2, 1, 230, '2020-10-11 12:04:45', 'wait'),
(48, 1, 2, 1, 230, '2020-10-11 12:06:23', 'wait'),
(49, 1, 2, 1, 530, '2020-10-11 12:07:56', 'wait');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_login` text NOT NULL,
  `u_name` text NOT NULL,
  `u_middle_name` text NOT NULL,
  `u_surname` text NOT NULL,
  `u_password` varchar(32) NOT NULL,
  `u_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`u_id`, `u_login`, `u_name`, `u_middle_name`, `u_surname`, `u_password`, `u_category`) VALUES
(1, 'misty_nebula', 'Александр', 'Дмитриевич', 'Янкин', '6a1b803e8df3765599223fadc20bdafa', 'users'),
(2, 'lambo', 'Малышев', 'Андреевич', 'Малышев ', '6a1b803e8df3765599223fadc20bdafa', 'users');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`card_id`);

--
-- Индексы таблицы `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`c_id`);

--
-- Индексы таблицы `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- Индексы таблицы `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`m_id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`t_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cinema`
--
ALTER TABLE `cinema`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `merchant`
--
ALTER TABLE `merchant`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
