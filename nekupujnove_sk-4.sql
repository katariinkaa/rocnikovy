-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Sob 25. dub 2020, 12:46
-- Verze serveru: 10.1.38-MariaDB
-- Verze PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `nekupujnove.sk`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_street` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `contact`
--

CREATE TABLE `contact` (
  `phone_number` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `items`
--

CREATE TABLE `items` (
  `product_id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_slovak_ci NOT NULL,
  `credits` int(11) NOT NULL,
  `image_title` varchar(50) COLLATE utf8mb4_slovak_ci NOT NULL,
  `image_text` text COLLATE utf8mb4_slovak_ci NOT NULL,
  `brand` varchar(25) COLLATE utf8mb4_slovak_ci NOT NULL,
  `size` varchar(4) COLLATE utf8mb4_slovak_ci DEFAULT NULL,
  `sex` varchar(6) COLLATE utf8mb4_slovak_ci DEFAULT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `category` varchar(25) COLLATE utf8mb4_slovak_ci NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;

--
-- Vypisuji data pro tabulku `items`
--

INSERT INTO `items` (`product_id`, `image`, `credits`, `image_title`, `image_text`, `brand`, `size`, `sex`, `uploaded_on`, `user_id`, `category`, `order_status`) VALUES
(1, 'fashion-918446_1920.jpg', 20, 'panske basic tricko', 'Obycajne, ale aj tak krasne tricko', 'adidas', 'S', 'MUZ', '2020-04-24 19:44:26', 21, 'oblecenie', 1),
(2, 'fashion-1283863_1920.jpg', 6, 'cierne tricko', 'Sportove tricko ', 'nike', 'S', 'ZENA', '2020-04-24 19:54:41', 21, 'oblecenie', 1),
(5, 'person-918986_1920.jpg', 5, 'super vec', 'Vyborny kusok oblecenia', 'puma', 'XXL', 'ZENA', '2020-04-24 19:55:15', 22, 'oblecenie', 1),
(10, 'tie-690084_1920.jpg', 10, 'notas riadny', 'Notebook v najlepsej moznej kvalite', 'lenovo ', NULL, NULL, '2020-04-24 19:55:55', 22, 'elektronika', 1),
(11, 'winter-1209119_1920.jpg', 2, 'nevyhnutnost', 'Super nova multifunkcna zehlicka', 'philips', NULL, NULL, '2020-04-24 19:56:30', 20, 'domacnost', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `orders`
--

CREATE TABLE `orders` (
  `order_id` int(30) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_street` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_zip` int(11) NOT NULL,
  `user_email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `credits` int(10) NOT NULL,
  `order_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `user_id`, `name`, `user_street`, `user_city`, `user_zip`, `user_email`, `phone_number`, `credits`, `order_status`) VALUES
(56, 1, 21, 'aa', 'aa', 'aa', 374672, 'user@user.sk', 28326, 20, 'OdoslanÃ©'),
(57, 0, 20, 'Menicko', 'mmm', 'mmm', 83728, 'admin@admin.sk', 93827382, 2, ''),
(58, 15, 20, 'Menicko', 'mmm', 'mmm', 83728, 'admin@admin.sk', 93827382, 2, ''),
(59, 15, 20, 'meno', 'aa', 'mansm', 0, 'admin@admin.sk', 0, 2, 'caka na vybavenie'),
(60, 1, 23, 'mm', 'mm', 'mm', 37263, 'dd@dd.sk', 93728372, 20, 'caka na vybavenie');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_street` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_zip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tokens` int(11) NOT NULL,
  `user_roles` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_desc`, `image`, `created_at`, `user_street`, `user_city`, `user_zip`, `user_tokens`, `user_roles`) VALUES
(0, 'userik', 'user@user.sk', 'ee11cbb19052e40b07aac0ca060c23ee', 'popisujem co sa da', '', '2020-04-24 20:37:12', '', '', '', 57, 'user'),
(15, 'admincek', 'admincek@admincek.sk', '08a714f5b6bc554afba86261abb9d606', '', '', '2020-02-11 20:18:37', '', '', '', 0, 'admin'),
(18, 'bb', 'bb@bb.sk', '21ad0bd836b90d08f4cf640b4c298e7c', '', '', '2020-03-31 14:25:32', '', '', '', 0, 'user'),
(19, 'cc', 'cc@cc.sk', 'e0323a9039add2978bf5b49550572c7c', '', '', '2020-02-13 13:32:22', '', '', '', 120, 'user'),
(20, 'admin', 'admin@admin.sk', '21232f297a57a5a743894a0e4a801fc3', '', '', '2020-04-24 19:26:49', '', '', '', -2, 'admin'),
(22, 'aa', 'aa@aa.co', '4124bc0a9335c27f086f24ba207a4912', 'kkkkk', '', '2020-04-24 20:39:15', '', '', '', 10, 'user'),
(23, 'dd', 'dd@dd.sk', '1aabac6d068eef6a7bad3fdf50a05cc8', 'mmm', '', '2020-04-24 20:14:15', '', '', '', 0, 'user'),
(24, 'meno', 'meno@meno.sk', 'b075559d96925fe3c69a36e188a78b69', '', '', '2020-04-15 10:46:48', '', '', '', 0, 'user');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`phone_number`);

--
-- Klíče pro tabulku `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`product_id`);

--
-- Klíče pro tabulku `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `items`
--
ALTER TABLE `items`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pro tabulku `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
