-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2025 at 06:30 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'TÉLÉPHONE & TABLETTE'),
(2, 'TV & Hi Tech');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_name` varchar(30) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Meknes'),
(2, 'Fes');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int NOT NULL AUTO_INCREMENT,
  `location_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city_id` int NOT NULL,
  PRIMARY KEY (`location_id`),
  KEY `fk_location_city` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `city_id`) VALUES
(1, 'Marjane 02', 1),
(2, 'Acima', 1),
(3, 'Madina', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_`
--

DROP TABLE IF EXISTS `order_`;
CREATE TABLE IF NOT EXISTS `order_` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `location_id` int NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `fk_user_order` (`user_id`),
  KEY `fk_location_order` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `date` date NOT NULL,
  KEY `fk_product_order` (`product_id`),
  KEY `fk_order_order` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Product_id` int NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `discount` int DEFAULT NULL,
  `product_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_product_quantity` int NOT NULL,
  `remaining_product_quantity` int NOT NULL,
  `brand` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `taill` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Sub_Category_Title_id` int NOT NULL,
  PRIMARY KEY (`Product_id`),
  KEY `fk_product_Sub_Category_Title` (`Sub_Category_Title_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `product_price`, `discount`, `product_image`, `total_product_quantity`, `remaining_product_quantity`, `brand`, `taill`, `Sub_Category_Title_id`) VALUES
(22, 'Sion Softside Expandable Roller Luggage, Black, Ch', '140', 46, 'https://m.media-amazon.com/images/I/815dLQKYIYL._AC_UL320_.jpg', 31, 31, NULL, NULL, 5),
(23, 'Luggage Sets Expandable PC+ABS Durable Suitcase Do', '170', 58, 'https://m.media-amazon.com/images/I/81bQlm7vf6L._AC_UL320_.jpg', 101, 101, NULL, NULL, 20),
(24, 'Platinum Elite Softside Expandable Checked Luggage', '365', 47, 'https://m.media-amazon.com/images/I/71EA35zvJBL._AC_UL320_.jpg', 162, 162, NULL, NULL, 25),
(25, 'Freeform Hardside Expandable with Double Spinner W', '292', 30, 'https://m.media-amazon.com/images/I/91k6NYLQyIL._AC_UL320_.jpg', 97, 97, NULL, NULL, 26),
(26, 'Winfield 2 Hardside Expandable Luggage with Spinne', '175', 28, 'https://m.media-amazon.com/images/I/61NJoaZcP9L._AC_UL320_.jpg', 11, 11, NULL, NULL, 16),
(27, 'Maxlite 5 Softside Expandable Luggage with 4 Spinn', '144', 37, 'https://m.media-amazon.com/images/I/61LnBNsSBSL._AC_UL320_.jpg', 264, 264, NULL, NULL, 15),
(28, 'Hard Shell Carry on Luggage Airline Approved, Carr', '170', 43, 'https://m.media-amazon.com/images/I/71CghLYrnAL._AC_UL320_.jpg', 66, 66, NULL, NULL, 16),
(29, 'Maxporter II 30\" Hardside Spinner Trunk Luggage, E', '300', 21, 'https://m.media-amazon.com/images/I/81f3h+YHOXL._AC_UL320_.jpg', 195, 195, NULL, NULL, 15),
(30, 'Omni 2 Hardside Expandable Luggage with Spinner Wh', '113', 68, 'https://m.media-amazon.com/images/I/91eOWP4mySL._AC_UL320_.jpg', 300, 299, NULL, NULL, 2),
(31, 'Luggage Sets Expandable Lightweight Suitcases with', '210', 94, 'https://m.media-amazon.com/images/I/81dsv5GrCLL._AC_UL320_.jpg', 55, 55, NULL, NULL, 20),
(32, 'Crew Versapack Softside Expandable 8 Spinner Wheel', '272', 73, 'https://m.media-amazon.com/images/I/71py6bRiEwL._AC_UL320_.jpg', 148, 148, NULL, NULL, 17),
(33, 'Chatelet Hard+ Hardside Luggage with Spinner Wheel', '260', 1, 'https://m.media-amazon.com/images/I/81W+B3pWiQL._AC_UL320_.jpg', 19, 19, NULL, NULL, 7),
(34, 'Crew Versapack Softside Expandable 8 Spinner Wheel', '324', 0, 'https://m.media-amazon.com/images/I/71tFi58LKwL._AC_UL320_.jpg', 196, 196, NULL, NULL, 16),
(35, 'Centric 2 Hardside Expandable Luggage with Spinner', '400', 64, 'https://m.media-amazon.com/images/I/81UXQZdNZzL._AC_UL320_.jpg', 170, 170, NULL, NULL, 4),
(36, 'Xpedition 30 Inch Multi-Pocket Upright Rolling Duf', '42', 65, 'https://m.media-amazon.com/images/I/81QKjgbsq4L._AC_UL320_.jpg', 164, 164, NULL, NULL, 4),
(37, 'Stratum 2.0 Expandable Hardside Luggage with Spinn', '90', 75, 'https://m.media-amazon.com/images/I/91qkFv-txyL._AC_UL320_.jpg', 84, 84, NULL, NULL, 21),
(38, 'Women\'s Spinner Mobile Office, Black, One Size', '165', 60, 'https://m.media-amazon.com/images/I/91qdE638dxL._AC_UL320_.jpg', 14, 14, NULL, NULL, 17),
(39, 'Ascella X Softside Expandable Luggage with Spinner', '198', 52, 'https://m.media-amazon.com/images/I/910PxQKAThL._AC_UL320_.jpg', 217, 217, NULL, NULL, 16),
(40, 'Boren Polycarbonate Hardside Rugged Travel Suitcas', '100', 48, 'https://m.media-amazon.com/images/I/611EC7sEWMS._AC_UL320_.jpg', 160, 160, NULL, NULL, 20),
(41, 'Clear PVC Suitcase Cover Protectors 28 Inch Luggag', '18', 55, 'https://m.media-amazon.com/images/I/71TXWZwZ1+L._AC_UL320_.jpg', 26, 26, NULL, NULL, 21),
(42, 'Ratchet Belts for Men with Automatic Buckle 30mm –', '25', 35, 'https://m.media-amazon.com/images/I/71S6ttADzyL._AC_UL320_.jpg', 263, 263, NULL, NULL, 4),
(43, 'Reversible Ratchet Belt, Nylon Web Tactical Work B', '21', 62, 'https://m.media-amazon.com/images/I/81qF-HAPXrL._AC_UL320_.jpg', 149, 149, NULL, NULL, 16),
(44, 'Alpha Zip Card Case - Black', '110', 11, 'https://m.media-amazon.com/images/I/81jtSBqQ61L._AC_UL320_.jpg', 22, 22, NULL, NULL, 19),
(45, 'Square Polarized Sunglasses for Men Women Large Fl', '35', 26, 'https://m.media-amazon.com/images/I/515WnnFUlWL._AC_UL320_.jpg', 230, 230, NULL, NULL, 13),
(46, 'Men\'s Drac Rectangular Sunglasses', '41', 15, 'https://m.media-amazon.com/images/I/61u4cRShykL._AC_UL320_.jpg', 17, 17, NULL, NULL, 2),
(47, 'mens 3 Pack Satin Solid Striped Dots With Pocket S', '26', 15, 'https://m.media-amazon.com/images/I/815wEWGysDL._AC_UL320_.jpg', 291, 291, NULL, NULL, 11),
(48, 'Pure 100% Cashmere Bi-Color Beanie for Men, Warm S', '50', 10, 'https://m.media-amazon.com/images/I/81XlW5wDQXL._AC_UL320_.jpg', 105, 105, NULL, NULL, 9),
(49, 'Sleeve Garter (2 Pack) Handmade from Full Grain Le', '17', 13, 'https://m.media-amazon.com/images/I/81c18ybs14L._AC_UL320_.jpg', 121, 121, NULL, NULL, 15),
(50, 'Men\'s Ea3210u Universal Fit Square Sunglasses', '83', 56, 'https://m.media-amazon.com/images/I/41NKhUTTz-L._AC_UL320_.jpg', 143, 143, NULL, NULL, 24),
(51, 'Western Cowboy Hat with String for Women Men Folda', '26', 44, 'https://m.media-amazon.com/images/I/71kfv8N4x+L._AC_UL320_.jpg', 85, 85, NULL, NULL, 10),
(52, 'Shirt Stays Adjustable Elastic Straps: Y- Style No', '13', 8, 'https://m.media-amazon.com/images/I/41q2NeSMbzL._AC_UL320_.jpg', 111, 111, NULL, NULL, 4),
(53, 'Men\'s Storm Fleece Gaiter', '28', 6, 'https://m.media-amazon.com/images/I/61ho92EVnxL._AC_UL320_.jpg', 167, 167, NULL, NULL, 15),
(54, 'Men\'s Casual Jeans Belt', '26', 49, 'https://m.media-amazon.com/images/I/71PEziM+rML._AC_UL320_.jpg', 237, 237, NULL, NULL, 8),
(55, 'Silver Black Enamel Shirt Studs Set for Tuxedo Wed', '30', 41, 'https://m.media-amazon.com/images/I/611JW1sAouL._AC_UL320_.jpg', 37, 37, NULL, NULL, 21),
(56, 'Mens Zipper Pre-tied Clip-On Tie Business Wedding ', '12', 38, 'https://m.media-amazon.com/images/I/91Lr7gT7dJL._AC_UL320_.jpg', 29, 29, NULL, NULL, 12),
(57, 'Tie Clips for Men, Black Gold Silver 2.1inch Initi', '12', 91, 'https://m.media-amazon.com/images/I/61rk0AHLChL._AC_UL320_.jpg', 274, 274, NULL, NULL, 6),
(58, 'Roan Mountain Titanium Belt - Brown | USA-Made Gen', '150', 80, 'https://m.media-amazon.com/images/I/611EgJI2iyL._AC_UL320_.jpg', 198, 198, NULL, NULL, 15),
(59, 'Radar EV Pitch Sport Replacement Sunglass Lenses, ', '113', 67, 'https://m.media-amazon.com/images/I/61VlvlgYBZL._AC_UL320_.jpg', 111, 111, NULL, NULL, 21),
(60, 'Mesh Trucker Dad Hat 5 Panel Baseball Cap Quick Dr', '16', 2, 'https://m.media-amazon.com/images/I/51jsQK66v6L._AC_UL320_.jpg', 105, 105, NULL, NULL, 21),
(61, 'Balaclava Neck Gaiter with Ear Loops Scarf Bandana', '10', 56, 'https://m.media-amazon.com/images/I/71NqmCaDvmL._AC_UL320_.jpg', 51, 51, NULL, NULL, 10),
(62, 'Wesley Fedora', '69', 14, 'https://m.media-amazon.com/images/I/71hdn2WsutL._AC_UL320_.jpg', 5, 5, NULL, NULL, 6),
(63, 'Men\'s Delio Square Sunglasses', '284', 22, 'https://m.media-amazon.com/images/I/41+vgBMgC-L._AC_UL320_.jpg', 140, 140, NULL, NULL, 14),
(64, 'Cufflinks for Men Classic Wedding Business Shirt C', '9', 50, 'https://m.media-amazon.com/images/I/51GS7esFL5L._AC_UL320_.jpg', 185, 185, NULL, NULL, 10),
(65, 'Trump 2024 Hat,Adult Embroidered MAGA Hat Donald T', '15', 50, 'https://m.media-amazon.com/images/I/61u49PU+WHL._AC_UL320_.jpg', 300, 300, NULL, NULL, 12),
(66, 'Men\'s Contemporary', '0', 88, 'https://m.media-amazon.com/images/I/71SwZd3JFaL._AC_UL320_.jpg', 35, 35, NULL, NULL, 26),
(67, 'Men\'s Merino Rugged Shearling Sheepskin Leather Gl', '48', 67, 'https://m.media-amazon.com/images/I/91QE9qY5RKL._AC_UL320_.jpg', 102, 102, NULL, NULL, 20),
(68, 'Unisex Winter Ski Mask Outdoor Protect Face Cover ', '7', 53, 'https://m.media-amazon.com/images/I/71EY3Utb+ZL._AC_UL320_.jpg', 132, 132, NULL, NULL, 26),
(69, 'Rb4286 Square Sunglasses', '67', 4, 'https://m.media-amazon.com/images/I/613ouJSKepL._AC_UL320_.jpg', 287, 287, NULL, NULL, 19),
(70, 'Men\'s Insect Shield Flap Boonie Hat', '41', 46, 'https://m.media-amazon.com/images/I/91DQosRywgL._AC_UL320_.jpg', 187, 187, NULL, NULL, 24),
(71, 'Men\'s Five Panel', '10', 53, 'https://m.media-amazon.com/images/I/91gjoOdFYSL._AC_UL320_.jpg', 73, 73, NULL, NULL, 7),
(72, 'Mesh Dry-Fit Helmet Liner for Men Women,Cooling Sk', '9', 71, 'https://m.media-amazon.com/images/I/712PpMwK6XL._AC_UL320_.jpg', 81, 81, NULL, NULL, 9),
(73, 'TNF Logo Box Cuffed Beanie', '32', 49, 'https://m.media-amazon.com/images/I/81pcM8T31fL._AC_UL320_.jpg', 97, 97, NULL, NULL, 16),
(74, 'Rx5398f Hawkeye Low Bridge Fit Square Prescription', '188', 30, 'https://m.media-amazon.com/images/I/51n0iJjumVL._AC_UL320_.jpg', 49, 49, NULL, NULL, 11),
(75, 'Mens Zipper Pre-tied Clip-On Tie Business Wedding ', '12', 80, 'https://m.media-amazon.com/images/I/71vwxmdqnZL._AC_UL320_.jpg', 23, 23, NULL, NULL, 16),
(76, 'Windward Original Series | Fishing Sunglasses | Po', '28', 52, 'https://m.media-amazon.com/images/I/51ismSMpfcS._AC_UL320_.jpg', 191, 191, NULL, NULL, 8),
(77, 'Beanie Hats for Men Winter Hats Fisherman Beanie S', '7', 19, 'https://m.media-amazon.com/images/I/617MP88E+nL._AC_UL320_.jpg', 20, 20, NULL, NULL, 20),
(78, 'Anchor Embroidered Cotton Washed Dad Hat Distresse', '15', 61, 'https://m.media-amazon.com/images/I/61vTP-WCL8L._AC_UL320_.jpg', 185, 185, NULL, NULL, 14),
(79, 'Tie Clips Set for Men Regular Classic Tie Bar Clip', '19', 22, 'https://m.media-amazon.com/images/I/81WlSOpCEPL._AC_UL320_.jpg', 290, 290, NULL, NULL, 3),
(80, '4 Pair Replacement Polarized Lenses for Oakley Fla', '47', 26, 'https://m.media-amazon.com/images/I/61ah9MkDqzL._AC_UL320_.jpg', 51, 51, NULL, NULL, 15),
(81, 'Men\'s Ox3173 Barrelhouse Rectangular Prescription ', '198', 6, 'https://m.media-amazon.com/images/I/51QfLDJnabL._AC_UL320_.jpg', 233, 233, NULL, NULL, 21),
(82, 'Multifunctional Sports Stretchable Seamless Casual', '17', 47, 'https://m.media-amazon.com/images/I/71UTVl9vRVL._AC_UL320_.jpg', 262, 262, NULL, NULL, 19),
(83, 'Manana sera Bonito hat Cotton Soft top Embroidered', '17', 94, 'https://m.media-amazon.com/images/I/71DHh3FFGZL._AC_UL320_.jpg', 140, 140, NULL, NULL, 16),
(84, '2 Pairs Butterfly Sunglasses Butterfly Rimless Sun', '9', 43, 'https://m.media-amazon.com/images/I/61x0W4iLoRL._AC_UL320_.jpg', 148, 148, NULL, NULL, 5),
(85, 'Leather Ratchet Belts for Men Automatic Buckle wit', '36', 39, 'https://m.media-amazon.com/images/I/51uT9XjDgAL._AC_UL320_.jpg', 193, 193, NULL, NULL, 24),
(86, '1178 Genuine Leather Mens Slim Key Case Wallet/Key', '20', 17, 'https://m.media-amazon.com/images/I/51VARC6euLL._AC_UL320_.jpg', 222, 222, NULL, NULL, 15),
(87, 'American Flag Patriotic USA Classic 5 Panel Mesh S', '15', 61, 'https://m.media-amazon.com/images/I/71PDJFz6AAL._AC_UL320_.jpg', 64, 64, NULL, NULL, 2),
(88, 'Men\'s Baseball Cap - H2O-DRI Line Up Curved Brim F', '34', 44, 'https://m.media-amazon.com/images/I/812Tycexs4L._AC_UL320_.jpg', 147, 147, NULL, NULL, 20),
(89, '[4 Pack] Adjustable Eyeglasses and Sunglasses Hold', '9', 12, 'https://m.media-amazon.com/images/I/61vvYW1S9JL._AC_UL320_.jpg', 28, 28, NULL, NULL, 24),
(90, 'Ax2002 Aviator Sunglasses', '54', 15, 'https://m.media-amazon.com/images/I/51+yjD4F1xL._AC_UL320_.jpg', 60, 60, NULL, NULL, 12),
(91, 'in Hoc Signo Vinces Knights Templar Masonic Embroi', '19', 19, 'https://m.media-amazon.com/images/I/91Kt2KQf0EL._AC_UL320_.jpg', 70, 70, NULL, NULL, 18);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Product_name` text,
  `product_image` text,
  `product_price` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_name`, `product_image`, `product_price`) VALUES
('Sion Softside Expandable Roller Luggage, Black, Checked-Large 29-Inch', 'https://m.media-amazon.com/images/I/815dLQKYIYL._AC_UL320_.jpg', 139.99),
('Luggage Sets Expandable PC+ABS Durable Suitcase Double Wheels TSA Lock Blue', 'https://m.media-amazon.com/images/I/81bQlm7vf6L._AC_UL320_.jpg', 169.99),
('Platinum Elite Softside Expandable Checked Luggage, 8 Wheel Spinner Suitcase, TSA Lock, Men and Women, True Navy Blue, Checked Medium 25-Inch', 'https://m.media-amazon.com/images/I/71EA35zvJBL._AC_UL320_.jpg', 365.49),
('Freeform Hardside Expandable with Double Spinner Wheels, Navy, 2-Piece Set (21/28)', 'https://m.media-amazon.com/images/I/91k6NYLQyIL._AC_UL320_.jpg', 291.59),
('Winfield 2 Hardside Expandable Luggage with Spinner Wheels, Checked-Large 28-Inch, Deep Blue', 'https://m.media-amazon.com/images/I/61NJoaZcP9L._AC_UL320_.jpg', 174.99),
('Maxlite 5 Softside Expandable Luggage with 4 Spinner Wheels, Lightweight Suitcase, Men and Women, Sapphire Blue, Carry-On 21-Inch', 'https://m.media-amazon.com/images/I/61LnBNsSBSL._AC_UL320_.jpg', 144.49),
('Hard Shell Carry on Luggage Airline Approved, Carry on Suitcases with Wheels, Lightweight PC Luminous Textured Travel Luggage, TSA Approved, 20 Inch Small Carry-On, Black', 'https://m.media-amazon.com/images/I/71CghLYrnAL._AC_UL320_.jpg', 169.99),
('Maxporter II 30\" Hardside Spinner Trunk Luggage, Expandable, Navy', 'https://m.media-amazon.com/images/I/81f3h+YHOXL._AC_UL320_.jpg', 299.99),
('Omni 2 Hardside Expandable Luggage with Spinner Wheels, Checked-Large 28-Inch, Arctic Silver', 'https://m.media-amazon.com/images/I/91eOWP4mySL._AC_UL320_.jpg', 112.63),
('Luggage Sets Expandable Lightweight Suitcases with Wheels PC+ABS Durable Travel Luggage TSA Lock Navy Blue 4pcs', 'https://m.media-amazon.com/images/I/81dsv5GrCLL._AC_UL320_.jpg', 209.99),
('Crew Versapack Softside Expandable 8 Spinner Wheel Luggage, USB Port, Men and Women, Patriot Blue, Checked Medium 25-Inch', 'https://m.media-amazon.com/images/I/71py6bRiEwL._AC_UL320_.jpg', 271.99),
('Chatelet Hard+ Hardside Luggage with Spinner Wheels, Champagne White, Checked-Large 28 Inch, with Brake', 'https://m.media-amazon.com/images/I/81W+B3pWiQL._AC_UL320_.jpg', 259.6),
('Crew Versapack Softside Expandable 8 Spinner Wheel Luggage, USB Port, Men and Women, Jet Black, Carry on 20-Inch', 'https://m.media-amazon.com/images/I/71tFi58LKwL._AC_UL320_.jpg', 323.99),
('Centric 2 Hardside Expandable Luggage with Spinners, True Navy, 3-Piece Set (20/24/28)', 'https://m.media-amazon.com/images/I/81UXQZdNZzL._AC_UL320_.jpg', 399.92),
('Xpedition 30 Inch Multi-Pocket Upright Rolling Duffel Bag', 'https://m.media-amazon.com/images/I/81QKjgbsq4L._AC_UL320_.jpg', 42),
('Stratum 2.0 Expandable Hardside Luggage with Spinner Wheels, 28\" SPINNER, Slate Blue', 'https://m.media-amazon.com/images/I/91qkFv-txyL._AC_UL320_.jpg', 89.95),
('Women\'s Spinner Mobile Office, Black, One Size', 'https://m.media-amazon.com/images/I/91qdE638dxL._AC_UL320_.jpg', 164.99),
('Ascella X Softside Expandable Luggage with Spinners, Black, Checked-Large 29-Inch', 'https://m.media-amazon.com/images/I/910PxQKAThL._AC_UL320_.jpg', 198.41),
('Boren Polycarbonate Hardside Rugged Travel Suitcase Luggage with 8 Spinner Wheels, Aluminum Handle, Black, Checked-Large 30-Inch', 'https://m.media-amazon.com/images/I/611EC7sEWMS._AC_UL320_.jpg', 99.99),
('Clear PVC Suitcase Cover Protectors 28 Inch Luggage Cover for Wheeled Suitcase (28\'\'(24.80\'\'H x 19.90\'\'L x 12.40\'\'W))', 'https://m.media-amazon.com/images/I/71TXWZwZ1+L._AC_UL320_.jpg', 17.99),
('Sion Softside Expandable Roller Luggage, Black, Checked-Large 29-Inch', 'https://m.media-amazon.com/images/I/815dLQKYIYL._AC_UL320_.jpg', 139.99),
('Luggage Sets Expandable PC+ABS Durable Suitcase Double Wheels TSA Lock Blue', 'https://m.media-amazon.com/images/I/81bQlm7vf6L._AC_UL320_.jpg', 169.99),
('Platinum Elite Softside Expandable Checked Luggage, 8 Wheel Spinner Suitcase, TSA Lock, Men and Women, True Navy Blue, Checked Medium 25-Inch', 'https://m.media-amazon.com/images/I/71EA35zvJBL._AC_UL320_.jpg', 365.49),
('Freeform Hardside Expandable with Double Spinner Wheels, Navy, 2-Piece Set (21/28)', 'https://m.media-amazon.com/images/I/91k6NYLQyIL._AC_UL320_.jpg', 291.59),
('Winfield 2 Hardside Expandable Luggage with Spinner Wheels, Checked-Large 28-Inch, Deep Blue', 'https://m.media-amazon.com/images/I/61NJoaZcP9L._AC_UL320_.jpg', 174.99),
('Maxlite 5 Softside Expandable Luggage with 4 Spinner Wheels, Lightweight Suitcase, Men and Women, Sapphire Blue, Carry-On 21-Inch', 'https://m.media-amazon.com/images/I/61LnBNsSBSL._AC_UL320_.jpg', 144.49),
('Hard Shell Carry on Luggage Airline Approved, Carry on Suitcases with Wheels, Lightweight PC Luminous Textured Travel Luggage, TSA Approved, 20 Inch Small Carry-On, Black', 'https://m.media-amazon.com/images/I/71CghLYrnAL._AC_UL320_.jpg', 169.99),
('Maxporter II 30\" Hardside Spinner Trunk Luggage, Expandable, Navy', 'https://m.media-amazon.com/images/I/81f3h+YHOXL._AC_UL320_.jpg', 299.99),
('Omni 2 Hardside Expandable Luggage with Spinner Wheels, Checked-Large 28-Inch, Arctic Silver', 'https://m.media-amazon.com/images/I/91eOWP4mySL._AC_UL320_.jpg', 112.63),
('Luggage Sets Expandable Lightweight Suitcases with Wheels PC+ABS Durable Travel Luggage TSA Lock Navy Blue 4pcs', 'https://m.media-amazon.com/images/I/81dsv5GrCLL._AC_UL320_.jpg', 209.99),
('Crew Versapack Softside Expandable 8 Spinner Wheel Luggage, USB Port, Men and Women, Patriot Blue, Checked Medium 25-Inch', 'https://m.media-amazon.com/images/I/71py6bRiEwL._AC_UL320_.jpg', 271.99),
('Chatelet Hard+ Hardside Luggage with Spinner Wheels, Champagne White, Checked-Large 28 Inch, with Brake', 'https://m.media-amazon.com/images/I/81W+B3pWiQL._AC_UL320_.jpg', 259.6),
('Crew Versapack Softside Expandable 8 Spinner Wheel Luggage, USB Port, Men and Women, Jet Black, Carry on 20-Inch', 'https://m.media-amazon.com/images/I/71tFi58LKwL._AC_UL320_.jpg', 323.99),
('Centric 2 Hardside Expandable Luggage with Spinners, True Navy, 3-Piece Set (20/24/28)', 'https://m.media-amazon.com/images/I/81UXQZdNZzL._AC_UL320_.jpg', 399.92),
('Xpedition 30 Inch Multi-Pocket Upright Rolling Duffel Bag', 'https://m.media-amazon.com/images/I/81QKjgbsq4L._AC_UL320_.jpg', 42),
('Stratum 2.0 Expandable Hardside Luggage with Spinner Wheels, 28\" SPINNER, Slate Blue', 'https://m.media-amazon.com/images/I/91qkFv-txyL._AC_UL320_.jpg', 89.95),
('Women\'s Spinner Mobile Office, Black, One Size', 'https://m.media-amazon.com/images/I/91qdE638dxL._AC_UL320_.jpg', 164.99),
('Ascella X Softside Expandable Luggage with Spinners, Black, Checked-Large 29-Inch', 'https://m.media-amazon.com/images/I/910PxQKAThL._AC_UL320_.jpg', 198.41),
('Boren Polycarbonate Hardside Rugged Travel Suitcase Luggage with 8 Spinner Wheels, Aluminum Handle, Black, Checked-Large 30-Inch', 'https://m.media-amazon.com/images/I/611EC7sEWMS._AC_UL320_.jpg', 99.99),
('Clear PVC Suitcase Cover Protectors 28 Inch Luggage Cover for Wheeled Suitcase (28\'\'(24.80\'\'H x 19.90\'\'L x 12.40\'\'W))', 'https://m.media-amazon.com/images/I/71TXWZwZ1+L._AC_UL320_.jpg', 17.99);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `Sub_Category_id` int NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(50) NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`Sub_Category_id`),
  KEY `fk_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`Sub_Category_id`, `sub_category_name`, `category_id`) VALUES
(1, 'TÉLÉPHONE PORTABLE', 1),
(2, 'TABLETTES', 1),
(3, 'ACCÉSSOIRES TÉLÉPHONE', 1),
(4, 'TÉLÉPHONES FIXES', 1),
(25, 'TV, VIDÉO & HOME CINÉMA', 2),
(26, 'AUDIO & HIFI', 2),
(27, 'ACCESSOIRES HIGH TECH', 2),
(28, 'CAMÉRAS ET VIDÉO', 2),
(29, 'APPAREILS PHOTO', 2),
(30, 'EQUIPEMENT PRO', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_title`
--

DROP TABLE IF EXISTS `sub_category_title`;
CREATE TABLE IF NOT EXISTS `sub_category_title` (
  `Sub_Category_Title_id` int NOT NULL AUTO_INCREMENT,
  `Sub_Category_Title_name` varchar(50) NOT NULL,
  `Sub_Category_id` int NOT NULL,
  PRIMARY KEY (`Sub_Category_Title_id`),
  KEY `fk_sub_category` (`Sub_Category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_category_title`
--

INSERT INTO `sub_category_title` (`Sub_Category_Title_id`, `Sub_Category_Title_name`, `Sub_Category_id`) VALUES
(2, 'iPhones', 1),
(3, 'Téléphones Basiques', 1),
(4, 'iPad', 2),
(5, 'Tablettes Android', 2),
(6, 'Accessoires de tablette', 2),
(7, 'Écouteurs Bluetooth', 3),
(8, 'Montres connectées', 3),
(9, 'Enceintes portables', 3),
(10, 'Chargeurs', 3),
(11, 'Câbles', 3),
(12, 'Powerbanks', 3),
(13, 'Accessoires photo et vidéo', 3),
(14, 'Accessoires automobiles', 3),
(15, 'Protections d\'écran', 3),
(16, 'Coques, housses et étuis', 3),
(17, 'Cartes mémoire', 3),
(18, 'Téléphones sans fil', 4),
(19, 'Téléphones filaires', 4),
(20, 'VoIP', 4),
(21, 'Télévisions', 25),
(22, 'Supports muraux', 25),
(23, 'Box & récepteurs', 25),
(24, 'Connectiques TV', 25),
(25, 'Antennes & paraboles', 25),
(26, 'Écrans de projection', 25),
(27, 'Convertisseurs', 25),
(28, 'Casques Audio & écouteurs', 26),
(29, 'Audio portable', 26),
(30, 'Haut-parleurs', 26),
(31, 'Radios', 26),
(32, 'Composants', 26),
(33, 'Accessoires TV', 27),
(34, 'Câbles', 27),
(35, 'Accessoires Image & Son', 27),
(36, 'Protection électrique', 27),
(37, 'Microphones', 27),
(38, 'Accessoires système GPS', 27),
(39, 'Accessoires Photo', 27),
(40, 'Batteries & chargeurs', 27),
(41, 'Gadgets divers', 27),
(42, 'Caméras', 28),
(43, 'Projecteurs', 28),
(44, 'Jumelles & lunettes', 28),
(45, 'Vidéosurveillance', 28),
(46, 'Appareils photo numériques', 29),
(47, 'Imprimante photo', 29),
(48, 'Trépieds & Monopodes', 29),
(49, 'Flashs & Stroboscopes', 29),
(50, 'Équipements de studio', 29),
(51, 'Albums & cadres', 29),
(52, 'Scanners de codes à barres', 30),
(53, 'Imprimantes de caisses', 30),
(54, 'Surveillance', 30),
(55, 'Sécurité', 30),
(56, 'Radios & Talkie Walkie', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `last_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` text NOT NULL,
  `phone` bigint NOT NULL,
  `password` text NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `Email`, `phone`, `password`, `birth_date`, `gender`) VALUES
(6, 'test', 'test', 'test@gmail.com', 611212121, '$argon2i$v=19$m=65536,t=4,p=1$SE9pbDg1dkZST1F1cXBWVg$Pjtx0T0M5MF9rxXl2nFbFi5VN/hJwpYoJOT7C+kiGSM', '2025-02-04', 'Male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `fk_location_city` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `fk_location_order` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_user_order` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `fk_order_order` FOREIGN KEY (`order_id`) REFERENCES `order_` (`order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_product_order` FOREIGN KEY (`product_id`) REFERENCES `product` (`Product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_Sub_Category_Title` FOREIGN KEY (`Sub_Category_Title_id`) REFERENCES `sub_category_title` (`Sub_Category_Title_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sub_category_title`
--
ALTER TABLE `sub_category_title`
  ADD CONSTRAINT `fk_sub_category` FOREIGN KEY (`Sub_Category_id`) REFERENCES `sub_category` (`Sub_Category_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
