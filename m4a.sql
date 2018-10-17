-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 04:53 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m4a`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_name` varchar(50) NOT NULL,
  `bill_price` int(5) NOT NULL,
  `bill_quantity` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `bill_name`, `bill_price`, `bill_quantity`) VALUES
(55, 'ammore6_bill', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'قصص', 'none'),
(2, 'ساعات', 'non'),
(3, 'نباتات', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `cont_name` varchar(50) NOT NULL,
  `cont_subject` varchar(50) NOT NULL,
  `cont_message` text NOT NULL,
  `cont_email` varchar(255) NOT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_subject`, `cont_message`, `cont_email`) VALUES
(1, 'aymen', 'aymen', 'ksdhgkajshkf', 'aymen@a.com'),
(2, 'aymen', '123', '123\r\n', 'ay@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_user_name` varchar(50) NOT NULL,
  `order_city` varchar(50) NOT NULL,
  `order_street` varchar(50) NOT NULL,
  `order_home_number` varchar(50) NOT NULL,
  `order_amount` float NOT NULL,
  `order_id_bill` int(11) NOT NULL,
  `order_id_user` int(11) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `ord_bill_ref` (`order_id_bill`),
  KEY `id_user_ref` (`order_id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_path` text NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_detials` text NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_price` float NOT NULL,
  `id_cat` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `id_cat_ref` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_path`, `pro_name`, `pro_detials`, `pro_quantity`, `pro_price`, `id_cat`) VALUES
(1, 'products\\watches\\W1.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 30, 200, 2),
(2, 'products\\watches\\W2.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 2),
(3, 'products\\watches\\W3.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 2),
(4, 'products\\watches\\W4.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 600, 2),
(5, 'products\\watches\\W5.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 20, 2),
(6, 'products\\watches\\W6.jpg', 'الاسم', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 20, 2),
(7, 'products\\stories\\S1.jpg', 'اسم المنتج', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 1),
(8, 'products\\stories\\S2.jpg', 'اسم المنتج', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 1),
(9, 'products\\stories\\S3.jpg', 'اسم المنتج', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 1),
(10, 'products\\stories\\S4.jpg', 'اسم المنتج', 'من المهم أن تعرف صفاتك الشخصية والتي توضح لك نقاط ضعفك ونقاط قوتك ', 20, 300, 1),
(11, 'products\\stories\\S5.jpg', 'اسم المنتج', 'وصف المنتج', 20, 300, 1),
(12, 'products\\stories\\S6.jpg', 'اسم المنتج', 'وصف المنتج', 20, 300, 1),
(13, 'products\\plants\\V1.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3),
(14, 'products\\plants\\V2.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3),
(15, 'products\\plants\\V3.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3),
(16, 'products\\plants\\V4.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3),
(17, 'products\\plants\\V5.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3),
(18, 'products\\plants\\V6.jpg', 'اسم المنتج', 'وصف المنتج', 20, 250, 3);

-- --------------------------------------------------------

--
-- Table structure for table `products_img`
--

DROP TABLE IF EXISTS `products_img`;
CREATE TABLE IF NOT EXISTS `products_img` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `id_pro` int(11) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `img_pro_ref` (`id_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_img`
--

INSERT INTO `products_img` (`img_id`, `img_path`, `id_pro`) VALUES
(4, 'products\\watches\\add-on\\1.jpg', 1),
(5, 'products\\watches\\add-on\\2.jpg', 1),
(6, 'products\\watches\\add-on\\3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchesed_product`
--

DROP TABLE IF EXISTS `purchesed_product`;
CREATE TABLE IF NOT EXISTS `purchesed_product` (
  `purchased_bill_id` int(5) NOT NULL,
  `purchased_pro_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchesed_product`
--

INSERT INTO `purchesed_product` (`purchased_bill_id`, `purchased_pro_id`, `quantity`) VALUES
(55, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `home_number` varchar(50) NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `user_image` text,
  `secret_quastion` int(1) DEFAULT NULL,
  `answre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `fname`, `lname`, `pass`, `email`, `phone`, `city`, `street`, `home_number`, `user_type`, `user_image`, `secret_quastion`, `answre`) VALUES
(36, 'ايمن', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'ay@a.com', '123', 'صنعاء', '123', '123', 0, NULL, NULL, NULL),
(37, 'على', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'ay@a.com', '123', 'صنعاء', '123', '123', 0, NULL, NULL, NULL),
(38, 'محمد', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'ay@a.com', '123', 'صنعاء', '123', '132', 0, NULL, NULL, NULL),
(39, 'dfg1', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'f@Q.c', '', 'صنعاء', '', '', 0, NULL, NULL, NULL),
(40, 'asd', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '', 'صنعاء', '', '', 0, NULL, NULL, NULL),
(41, 'jone', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '123', '132', 0, NULL, NULL, NULL),
(42, 'jone', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '123', '132', 0, NULL, NULL, NULL),
(43, 'jone', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '123', '132', 0, NULL, NULL, NULL),
(44, 'ماجد', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '132', '132', 0, NULL, NULL, NULL),
(45, 'سام', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 's@d.c', '123', 'صنعاء', '123', '123', 0, NULL, NULL, NULL),
(46, 'al', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '133', '132', 0, NULL, NULL, NULL),
(47, 'al', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '133', '132', 0, NULL, NULL, NULL),
(48, 'al', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '133', '132', 0, NULL, NULL, NULL),
(49, 'al', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '133', '132', 0, NULL, NULL, NULL),
(50, 'abcdef', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '132', '123', 0, NULL, NULL, NULL),
(51, 'abcdef', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@c.s', '123', 'صنعاء', '132', '123', 0, NULL, NULL, NULL),
(52, 'xyz', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'z@a.c', '123', 'صنعاء', '123', '123', 0, NULL, NULL, NULL),
(53, '123', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 's@gmail.com', '', 'صنعاء', '', '', 0, NULL, NULL, NULL),
(54, 'ammar', NULL, NULL, 'd9b1d7db4cd6e70935368a1efb10e377', 'a@gmail.com', '123', 'صنعاء', '123', '123', 0, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `id_user_ref` FOREIGN KEY (`order_id_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ord_bill_ref` FOREIGN KEY (`order_id_bill`) REFERENCES `bill` (`bill_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `id_cat_ref` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products_img`
--
ALTER TABLE `products_img`
  ADD CONSTRAINT `img_pro_ref` FOREIGN KEY (`id_pro`) REFERENCES `products` (`pro_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
