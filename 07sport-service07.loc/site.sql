-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 15 2017 г., 21:10
-- Версия сервера: 5.5.52-38.3
-- Версия PHP: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateandtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `first_name` varchar(42) NOT NULL,
  `email` varchar(64) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `dateandtime`, `first_name`, `email`, `message`) VALUES
(1, '2016-12-15 22:57:45', 'formacjyv', 'joi_starich37@rambler.ru', 'Здравствуйте! \r\n \r\nРазошлём ваши коммерческие предложения по контакт-формам сайтов предприятий РФ.  \r\nРассылка ваших сообщений через контакт-формы сайтов фирм по любым странам и доменным зонам мира на всех языках.  \r\nПисьмо приходит на контактный электронный ящик предприятия сто процентов в папку инбокс! \r\nhttp://contacts-forma.ml \r\n \r\nТест: \r\n20000 сообщений по Российской Федерации на ваш электронный ящик - тысяча рублей. \r\n20000 сообщений по зарубежным зонам на ваш почтовый ящик - двадцать $. \r\nОт вас требуется E-mail, заголовок и текст письма. \r\nВы можете заказать неограниченное количество тестов исходя из выше приведённого расчёта. \r\n \r\nПрайс-лист: \r\nХит продаж! Организации и Предприятия Российской Федерации - 2030078 контактных-форм - 5000 руб за 1 миллион. \r\nХит продаж! База 15 русскоязычных стран-СНГ+Прибалтика+Израиль 811247доменных имён - 5000 руб. \r\nХит продаж! 55089093 сайтов 28 стран Европейского союза — 78000 руб \r\nХит продаж! Доменная зона .com 124228147  sites commercial - 125000 руб \r\nTop: 1355847 лучших сайтов из всех стран мира - 5000 рублей. \r\nТоп: 16821856 самых посещаемых сайтов мира - 10000 рублей. \r\nРассылки по зарубежным формам обратной связи всех доменов мира/стран. \r\n \r\nP.S. \r\nПожалуйста не отвечайте на это сообщение со своего ящика электронной почты, так как оно создано в автоматическом режиме и никуда не дойдёт! \r\nИспользуйте для связи почту: kontakty-forma@seznam.cz или контакт-форму:http://www.contacts-forma.ml/chto-takoe-rassylka-po-formam-obratnoj-svjazi/obratnaja-svjaz-2/ \r\nЕсли сайт не работает, пишите пжл. на эту почту. \r\n \r\nНаши базы: \r\nОрганизации из сервисов Яндекс и Гугл карт собранные по Общероссийскому классификатору объектов административно-территориального деления: 966 гор., 42187/108072 крупных/мелких населённых пунктов РФ. \r\nПредприятия России из: YP, Дубль Гис, Рос-биз, Актинфо, Allinform, Btk-online,Бигфоунбук, MBTG, Gdetomesto, Гдебиз, Евро-адрес, B2B-russia, Zakazrf, Сам5, Фолиант, Ярмэп, Topplan, Tel09, Справочник-09, ЕГТС, SPR, Interweb.spb, Moscowfirma, ЕГРЮЛ, Дата.мос, Mosgid, Мск.справкер и другие. \r\nБазы ВОЙС доменов всех стран мира. \r\nВы можете приобрести базы WHOIS отдельно от рассылки по запросу. \r\n \r\nPprice-list 351  domains: \r\nhttp://www.contacts-forma.ml/chto-takoe-rassylka-po-formam-obratnoj-svjazi/ceny-2/'),
(2, '2016-12-19 15:15:16', 'АнтонсCoows', 'antonsferdt@mail.ru', 'Базы данных фирм городов России. план найти клиентов\r\n \r\nСобираем сразу после заказа из открытых источников Интернета, БЕЗ ПРЕДОПЛАТЫ! \r\n \r\nБазы данных только что собранные - всегда в наличии.\r\n \r\nЦены с Праздничными скидками от 500 р.\r\n \r\nПримем сюда все вопросы по базам: bazy-gorodow(собачка)yandex.ru\r\n \r\nБазы данных фирм городов России. найти клиентов журнала'),
(3, '2016-12-30 16:32:35', 'shopttvfew', 'eneida_raes27@rambler.ru', 'Hey. today I want to introduce you to CLENBUTEROL This is the best drug for weight loss. It is used in professional body. \r\n \r\nhttp://doping-shop.com/item/46 \r\n \r\nHey. today I want to introduce you to CLENBUTEROL. \r\nThis is the best drug for weight loss. \r\nIt is used in professional bodybuilding when you need to drive away the weight. \r\nWhen using CLENBUTEROL considered normal weight loss of 11 pounds per week. This muscle mass remains the same and it does not lead to sagging skin. \r\n \r\nAnd so full features CLENBUTEROL: \r\n \r\nPrice is - $20 - 60 tabs. \r\nShipping cost to your counry plus. \r\n \r\nCLENBUTEROL 0,4 mg - Balkan Pharmaceuticals. \r\n \r\nThe best fat burner in the world from the best manufacturer. \r\n \r\nCLENBUTEROL Profile: What Is CLENBUTEROL? \r\nCLENBUTEROL hydrochloride is primarily a bronchodilator. Physicians in many parts of the world prescribe it to patients to help treat asthma and other conditions because it helps open the airways, making it easier for patients to breathe. However, more people around the world buy CLENBUTEROL for its thermogenic and weight loss properties than its intended medical benefits. People who use anabolic steroids often benefit from the amazing CLENBUTEROL results during their cutting cycles, when they want to shed unwanted body fat and improve muscle tone and definition. \r\nScientifically speaking, CLENBUTEROL for sale is in a class of drugs known as sympathomimetics. These drugs work on special receptors known as beta-2 receptors to improve the obstruction of airways and improve breathing. In the course of doing this, it also improves the individual\'s metabolism, which is the rate at which he or she turns stored calories (fat) into energy. It does not directly affect fat cells within the body; rather, it increases the core body temperature, which boosts the metabolism. As it stimulates the beta-2 receptors, the mitochondria inside each individual cell produce more heat. At these slightly higher body temperatures, and with a slightly faster metabolism, these fat stores burn more easily. \r\nAlthough people in forums and elsewhere claim that they should be able to obtain bulking CLENBUTEROL results in theory thanks to the compound\'s anabolic nature, this is not at all the case. Studies show that while rats injected with CLENBUTEROL may gain some lean muscle tissue, there is no effect on humans. As such, CLENBUTEROL pills only have two purposes - they act as a bronchodilator, and they burn fat. There is no other effect on human beings. \r\n \r\nPrice is - $20 - 60 tabs. \r\nShipping cost to your country plus. \r\n \r\nMy email is: sale@doping-shop.com');

-- --------------------------------------------------------

--
-- Структура таблицы `name`
--

CREATE TABLE IF NOT EXISTS `name` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `name`
--

INSERT INTO `name` (`user_id`) VALUES
(123);

-- --------------------------------------------------------

--
-- Структура таблицы `run_trainers`
--

CREATE TABLE IF NOT EXISTS `run_trainers` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `background` varchar(20) NOT NULL,
  `heft` varchar(20) NOT NULL,
  `power` varchar(20) NOT NULL,
  `screenshot` varchar(64) NOT NULL,
  `price` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `run_trainers`
--

INSERT INTO `run_trainers` (`id`, `first_name`, `speed`, `background`, `heft`, `power`, `screenshot`, `price`) VALUES
(1, 'MAXFIT 10', '1-16 км/ч', '132 х 46 см', ' 110 кг', ' 1,5 - 3 л.с', 'maxfit10_big.jpg', '43 600'),
(2, 'MAXFIT 12', '1,0-16 км/ч', '132 x 44 см', '125 кг', '1.5-3.0л.с. ', 'maxfit_12.jpg', '48 500'),
(3, 'MAXFIT 16', '1-16 км/ч', '140 х 50 см', '135кг', ' 2,0 -4 л.с', 'maxfit16_1.jpg', '64 000'),
(4, 'MaxFit 16W', '1-16 км/ч', '140 х 50 см', '135кг', '2,0 -4 л.с', 'maxfit-16w.jpg', '65 000'),
(5, 'MaxFit 18', '1-18 км/ч', '140 х 50 см', '145 кг', '2,25- 4,25 л.с', 'maxfit18_1.jpg', '70 000'),
(6, 'MaxFit 20', '1-18 км/ч', '153 х 50 см', '130кг', '3-5 л.с.', 'maxfit20_big.jpg', '72 500'),
(7, 'MaxFit 22 ', '1-20 км/ч.', '150 х 50 см', '160кг', '2,5-4,5 л.с.', 'maxfit22_1.jpg', '76 000'),
(8, 'MaxFit 22w', '1-20 км/ч.', '150 х 50 см', '160кг', '2,5-4,5 л.с.', 'maxfit-22w.jpg', '77 000'),
(9, 'MaxFit 26', ' 0,8-20 км/ч', '150 х 50 см', '160кг', '3-5 л.с.', 'maxfit-26.jpg', '93 000'),
(10, 'MaxFit 26W', '1-20 км/ч.', '150 х 50 см', '160кг', '3-5 л.с.', 'maxfit-26w.jpg', '95 000'),
(11, 'MaxFit 5000', '0,8-20 км/ч', '140 х 50 см', '170кг', '3-5 л.с.', 'maxfit5000.jpg', '106 500'),
(12, 'MaxFit 5000W', '0,8-20 км/ч', '150 х 50 см', '180кг', '3-5 л.с.', 'maxfit-5000w.jpg', '108 500'),
(13, 'MaxFit 5000 Plus', '0,8-20 км/ч', '150 х 50 см', '180кг', '3.5 - 5.5 л.с.', 'maxfit5000plus_1.jpg', '117 500'),
(14, 'MaxFit 5000 PlusW', '0,8-20 км/ч', '150 х 50 см', '180кг', '3.5 - 5.5 л.с.', 'maxfit-5000wplus.jpg', '119 500'),
(15, 'MaxFit 13-10"TV ', '0,8-20 км/ч', '145 х 50 см', '150кг', '1.5-3.0л.с.', 'maxfit-13-10tv.jpg', '152 500');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
