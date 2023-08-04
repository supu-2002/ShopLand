-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 09:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart_t`
--

CREATE TABLE `add_to_cart_t` (
  `u_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart_t`
--

INSERT INTO `add_to_cart_t` (`u_id`, `p_id`) VALUES
(2, 3),
(1, 1),
(1, 4),
(1, 17),
(1, 23),
(1, 28),
(1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catagory_id` int(100) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catagory_id`, `catagory_name`) VALUES
(1, 'Fashion\r\n'),
(2, 'Headphones'),
(3, 'Shoe'),
(4, 'Phone'),
(5, 'Bags'),
(7, 'Watch');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `i_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`i_id`) VALUES
(1),
(3),
(4),
(11),
(26),
(19),
(20),
(18),
(31);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `item_quantity` int(100) NOT NULL,
  `wishlist` int(100) NOT NULL,
  `star` int(100) NOT NULL,
  `c_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_desc`, `image`, `price`, `item_quantity`, `wishlist`, `star`, `c_id`) VALUES
(1, 'BOAT HEADPHONE', 'BOAT ROCKERZ 450 PRO WITH UPTO 70 HOURS PLAYBACK BLUETOOTH HEADSET', 'http://localhost/shopping_website/image_folder/product_image/headphone2.png', '500', 1, 0, 4, 2),
(3, 'REGULAR SHIRT', 'MEN REGULAR FIT SOLID  COLLAR CASUAL SHIRT', 'http://localhost/shopping_website/image_folder/product_image/shirt4.png', '300', 1, 0, 4, 1),
(4, 'GIRL\'S HEEL', 'HIGH HEELS IS A TYPE OF SHOE WITH AN UPWARD-ANGLED SOLE', 'http://localhost/shopping_website/image_folder/product_image/p1.png', '600', 1, 0, 4, 3),
(5, 'T-shirts', 'MEN REGULAR FIT PRINTED JACKET ', 'http://localhost/shopping_website/image_folder/product_image/jacket3.png', '700', 1, 0, 4, 1),
(6, 'Shirts', 'MEN REGULAR FIT SOLID COLLAR CASUAL SHIRT', 'http://localhost/shopping_website/image_folder/product_image/shirt3.png', '700', 1, 0, 4, 1),
(7, 'MAN JACKET', 'MEN SOLID BIKER/RIDING JACKET', 'http://localhost/shopping_website/image_folder/product_image/jacket2.png', '700', 1, 0, 4, 1),
(8, 'Shoe', 'JUNIOR ZERO1 SPORTS, GYM TRAINING WALKING RUNNING SHOES ', 'http://localhost/shopping_website/image_folder/product_image/shoe1.png', '400', 1, 0, 4, 3),
(9, 'LADIES BAGS', ' SOFT LIGHTWEIGHT HANDHELD BAGS', 'http://localhost/shopping_website/image_folder/product_image/bag2.png', '700', 1, 0, 4, 5),
(11, 'Apple watch', 'HEART RATE SENSOR, GPS, GYROSCOPE, AND ACCELEROMETER', 'http://localhost/shopping_website/image_folder/product_image/watch5.png', '8000', 1, 0, 4, 7),
(12, 'mi digital watch', 'WATER-RESISTANT ALARM BACKLIGHT CALENDAR STOPWATCH', 'http://localhost/shopping_website/image_folder/product_image/watch4.png', '2000', 1, 0, 4, 7),
(15, 'Digital watch', 'LED DIAL WHITE COLOR MEN\'S & BOY\'S WATCH DIGITAL WATCH', 'http://localhost/shopping_website/image_folder/product_image/watch6.png', '1000', 1, 0, 4, 7),
(16, 'Acnos digital watch', 'HL-1260-BLACK TRENDING NEW FRESH ARRIVAL ELEGANT LOOKS', 'http://localhost/shopping_website/image_folder/product_image/watch3.png', '999', 1, 0, 4, 7),
(17, 'NOISE BUDS', 'NOISE BUDS WITH 50 HRS PLAYTIME IPX5 AND UNIQUE FLYBIRD DESIGN BLUETOOTH HEADSET', 'http://localhost/shopping_website/image_folder/product_image/headph2.png', '2000', 1, 0, 4, 2),
(18, 'GAMING HEADSET', 'DEEP BASS WIRED GAMING HEADSET  (BLUE, ON THE EAR)WITH ADJUSTABLE MIC', 'http://localhost/shopping_website/image_folder/product_image/headph3.png', '1500', 1, 0, 4, 2),
(19, 'APPLE I-PHONE', 'APPLE iPhone 14 (Midnight, 128 GB)', 'http://localhost/shopping_website/image_folder/product_image/phone1.png', '70000', 1, 0, 4, 4),
(20, 'STYLISH SHOE\r\n\r\n\r\n\r\n\r\n\r\n', 'LIGHT WEIGHT DAILY WEAR RENDING WHITE SHOE ', 'http://localhost/shopping_website/image_folder/product_image/s3.png', '800', 1, 0, 4, 3),
(21, 'LACE UP LIGHTWEIGHT SHOE', 'LACE UP LIGHTWEIGHT SHOES FOR TREKKING, HIKING', 'http://localhost/shopping_website/image_folder/product_image/s2.png', '1000', 1, 0, 4, 3),
(22, 'WOMEN HEELS', 'WOMEN LIGHTWEIGHT HEELS SANDAL WITH ANGLED SOLE', 'http://localhost/shopping_website/image_folder/product_image/shoe2.png', '350', 1, 0, 4, 3),
(23, 'AMERICAN TOURISTER', '32.5 L BACKPACK FIZZ SCH BAG(WHITE, BLUE)', 'http://localhost/shopping_website/image_folder/product_image/bag3.png', '1200', 1, 0, 4, 5),
(24, 'MI 10', 'MI 10 (CORAL GREEN, 256 GB)(8 GB RAM)', 'http://localhost/shopping_website/image_folder/product_image/mob2.png', '20000', 1, 0, 4, 4),
(25, 'SHOES', 'SPORTS RUNNING SHOES RUNNING SHOES FOR MEN', 'http://localhost/shopping_website/image_folder/product_image/shoe4.png\r\n\r\n', '700', 1, 0, 4, 3),
(26, 'SHIRT', 'MEN REGULAR FIT SOLID COLLAR CASUAL SHIRT', 'http://localhost/shopping_website/image_folder/product_image/shirt8.png\r\n\r\n', '750', 1, 0, 4, 1),
(27, 'APPLE WATCH', 'APPLE WATCH ULTRA GPS TEMP SENSOR DIGITAL WATCH', 'http://localhost/shopping_website/image_folder/product_image/watch7.jpeg\r\n\r\n', '12000', 1, 0, 4, 7),
(28, 'GAMING HEADSET', 'WINGS VADER 100 WIRED GAMING HEADSET  ', 'http://localhost/shopping_website/image_folder/product_image/headphone.png\r\n\r\n', '1100', 1, 0, 4, 2),
(29, 'WOMEN BAG', 'WOMEN BLACK HAND-HELD BAG  ', 'http://localhost/shopping_website/image_folder/product_image/bag9.jpg\r\n\r\n', '990', 1, 0, 4, 5),
(31, 'LAPTOP BAG', 'ARCTIC HUNTER BACKPACK FOR MEN PREMIUM BUSINESS BACKPACK OFFICE TRAVEL', 'http://localhost/shopping_website/image_folder/product_image/bag4.jpg', '2000', 1, 0, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ph_no` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `fname`, `lname`, `email`, `ph_no`, `password`, `gender`) VALUES
(1, 'supu', 'das', 'supu@2002', '9051987618', '$2y$10$5DY2J/93zqY/hykK5.HQpe5ptRwIVu8bHB1jFRLzEzu4nfF/xN1.e', ' female'),
(2, 'suparna', 'das', 'suparna@gmail.com', '13124142525', '$2y$10$lSZ23CKXirD7B77ZFNISmuVkYnSzls9NDKDAJi1A.IJz4n6OC80za', ' female'),
(3, 'suparna', 'das', 'supa@gmail.com', '2271236178', '$2y$10$8KpYWH88PkQcgsIc.XOe6OKrYwRljNBz5DFsGaiNYIIDP6j.ZswZy', ' female'),
(4, 'supa', 'das', 'supa@2000', '2322523523532', '$2y$10$FJvvV.DsHYNaMax8U.9WI.aVT4E4sWXOLfxfXtla7IrTY0hrCezQC', ' female'),
(5, 'sa', 'ds', 'sa@gmail.com', '12141412412', '$2y$10$fffVaTY4XUeTAE5xGJa.zu7gPddijlXxPKrz6lZhE3UM5HOaRV1ua', ' female'),
(6, 'ssa', 'ds', 'ssa@gmail.com', '12414141', '$2y$10$/t9YTmL/4LmHYaFrwcWolepo4T9NNrk.VbR7LCubC2haCGolBNzii', ' female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `id_no` (`c_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catagory_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `id_no` FOREIGN KEY (`c_id`) REFERENCES `catagory` (`catagory_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
