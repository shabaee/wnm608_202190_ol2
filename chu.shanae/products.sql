-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2024 at 04:31 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shanae_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` date NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`) VALUES
(1, 'Robot Lace Baby Tee', 95.00, 'tops', '2024-04-14 15:33:51', '2024-04-14', 'A shrunken baby tee with a delicate lace trim, featuring artwork by Nam Mac.\r\n', 'robot_lace_tee_front.png', 'robot_lace_tee_full.png,robot_lace_tee_only.png'),
(2, 'Don\'t Think Princess Dress', 250.00, 'dresses', '2024-04-14 15:34:02', '2024-04-14', 'Featuring artwork by Michele Bry- this satin mini dress has elasticized puff sleeves, with a lace trim, seam details, shirring and a bow at bust. There is a stretch smocking panel at the back and a hidden side seam zipped.', 'dont_think_princess_dress_full.png', 'dont_think_princess_dress_back.png,dont_think_princess_dress_only.png'),
(3, 'Heart Button Cardigan', 100.00, 'tops', '2024-04-14 15:29:57', '2024-04-14', 'A fitted loose gauge knit cardigan with contrast charms and buttons.', 'heart_button_cardigan_front.png', 'heart_button_cardigan_full.png,heart_button_cardigan_back.png'),
(5, 'Poem Sweater', 190.00, 'tops', '2024-04-14 15:38:03', '2024-04-14', 'A shrunken cropped knit sweater with a v-neckline and an all-over jacquard text pattern.', 'poem_sweater_front.png', 'poem_sweater_full.png,poem_sweater_back.png'),
(6, 'I Feel Angry Zip-up', 195.00, 'tops', '2024-04-14 15:42:00', '2024-04-14', 'A boxy fit zip hoodie with a double headed teddy zipper pull, featuring artwork by Elliot Shields.', 'i_feel_angry_zip_front.png', 'i_feel_angry_zip_full.png,i_feel_angry_zip_side.png'),
(7, 'Heavy Heart Spots Satin Tank', 120.00, 'tops', '2024-04-14 15:45:47', '2024-04-14', 'A fitted satin camisole with bustier details, a lace trim and bow  details. Featuring artwork by Michele Bry, the all over polka dot print tank has a hidden zipper on the side.', 'heavy_heart_tank_front.png', 'heavy_heart_tank_full.png,heavy_heart_tank_back.png'),
(8, 'Tailored Bow Corset', 195.00, 'tops', '2024-04-14 15:55:25', '2024-04-14', 'A fitted top with bustier details and seams. Featuring a custom lace trim at the hem, the straps drape perfectly off the shoulder.', 'bow_corset_front.png', 'bow_corset_full.png,bow_corset_back.png'),
(9, 'Babiez Ringer Tee', 95.00, 'tops', '2024-04-14 15:58:45', '2024-04-14', 'A classic fitting ringer tee, with artwork by Keegan Dakkar.', 'babiez_ringer_front.png', 'babiez_ringer_full.png,babiez_ringer_only.png'),
(10, 'Robot Earrings', 75.00, 'jewelry', '2024-04-14 16:16:03', '2024-04-14', 'Silver plated mismatched robot earrings, designed by Nam Mac. ', 'robot_earrings_front.png', 'robot_earrings_full.png,robot_earrings_side.png'),
(11, 'Satin Kiki Boot', 550.00, 'shoes', '2024-04-14 16:19:12', '2024-04-14', 'Pink satin chunky boots with silver metal clasps and a hidden side zipper.', 'satin_kiki_boots_front.png', 'satin_kiki_boots_full.png,satin_kiki_boots_side.png'),
(12, 'Friendship Ring Set', 80.00, 'jewelry', '2024-04-14 16:21:53', '2024-04-14', 'A double headed teddy friendship ring set, perfect for you and your BFF. The set comes with two rings in the same size.', 'BFF_ring_front.png', 'BFF_ring_full.png,BFF_ring_only.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
