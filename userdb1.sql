-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 12:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pin_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pin_no`) VALUES
(1, 'admin', 5680288);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `comment`, `id`, `date`) VALUES
(1, 'chamika', 'How are you..?', 3, '2019-09-15 09:47:52'),
(2, 'SUPUN', 'Fine.....', 3, '2019-09-15 09:48:33'),
(3, 'chamika', 'hi...', 16, '2019-09-15 09:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `district` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `info` varchar(1000) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `pic1` varchar(70) NOT NULL,
  `pic2` varchar(200) NOT NULL,
  `pic3` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `date_released` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `product_name`, `district`, `phone_number`, `owner_name`, `info`, `pic`, `pic1`, `pic2`, `pic3`, `price`, `date_released`) VALUES
(3, 'Land and Houses', 'houses', 'Anuradhapura', '0255682555', 'Chamika sandaruwan', 'à¶¶à·œà·„à· à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶šà¶ºà·’à¶±à·Š à¶œà·š à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶…à·ƒà·à¶»à·Šà¶®à¶š à·€à·“à¶¸à¶§ à·„à·šà¶­à·”à·€ à·€à¶±à·Šà¶±à·š à·€à·™à·…à·™à¶³ à¶´à·œà·… à·ƒà¶¸à·“à¶šà·Šà·‚à¶«à¶ºà¶šà·Š à·ƒà·’à¶¯à·” à¶±à·œà¶šà¶» à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶†à¶»à¶¸à·Šà¶· à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶­à¶¸à·à¶œà·š à¶šà·à¶¸à·à¶­à·Šà¶­, à¶¯à¶šà·Šà·‚à¶­à·à·€à¶º, à¶´à¶¸à¶«à¶šà·Š à¶¸ à¶±à·œà·€ à·€à·™à·…à·™à¶³ à¶´à·œà·… à¶­à·”à·… à¶…à¶´à¶§ à¶­à·’à¶¶à·™à¶± à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶š à¶…à·€à·ƒà·Šà¶®à· à¶¸à·œà¶±à·€à·à¶¯ à¶ºà¶±à·Šà¶± à¶´à·’à·…à·’à¶¶à¶³à·€à¶¯ à¶”à¶¶à¶§ à¶¸à¶±à· à¶…à·€à¶¶à·à¶°à¶ºà¶šà·Š à¶­à·’à¶¶à·’à¶º à¶ºà·”à¶­à·” à¶º. à¶’ à·ƒà¶³à·„à· à¶”à¶¶ à¶šà·… à¶ºà·”à¶­à·Šà¶­à·š à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶´à·à¶»à·’à¶·à·à¶œà·’à¶šà¶ºà·à¶œà·š à·„à·à·ƒà·’à¶»à·“à¶¸ à¶±à·’à¶»à·“à¶šà·Šà·‚à¶«à¶º à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶‘à¶±à¶¸à·Š à¶”à·€à·”à¶±à·Š à¶¸à·’à¶½à¶¯à·“ à¶œà·à¶±à·“à¶¸à¶§ à¶…à¶´à·šà¶šà·Šà·‚à· à¶šà¶»à¶± à¶·à·à¶«à·Šà¶©à¶º à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶±à·œï', 'images/FB_IMG_1565421129813.jpg', 'images1/FB_IMG_1565421125357.jpg', 'images2/FB_IMG_1565421120737.jpg', 'images3/FB_IMG_1565421115519.jpg', '7500000', '2019-08-16'),
(4, 'Fish Trade', 'Goldfish', 'Jaffna', '0245680288', 'Sandaruwan;', 'à¶¶à·œà·„à· à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶šà¶ºà·’à¶±à·Š à¶œà·š à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶…à·ƒà·à¶»à·Šà¶®à¶š à·€à·“à¶¸à¶§ à·„à·šà¶­à·”à·€ à·€à¶±à·Šà¶±à·š à·€à·™à·…à·™à¶³ à¶´à·œà·… à·ƒà¶¸à·“à¶šà·Šà·‚à¶«à¶ºà¶šà·Š à·ƒà·’à¶¯à·” à¶±à·œà¶šà¶» à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶†à¶»à¶¸à·Šà¶· à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶­à¶¸à·à¶œà·š à¶šà·à¶¸à·à¶­à·Šà¶­, à¶¯à¶šà·Šà·‚à¶­à·à·€à¶º, à¶´à¶¸à¶«à¶šà·Š à¶¸ à¶±à·œà·€ à·€à·™à·…à·™à¶³ à¶´à·œà·… à¶­à·”à·… à¶…à¶´à¶§ à¶­à·’à¶¶à·™à¶± à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶š à¶…à·€à·ƒà·Šà¶®à· à¶¸à·œà¶±à·€à·à¶¯ à¶ºà¶±à·Šà¶± à¶´à·’à·…à·’à¶¶à¶³à·€à¶¯ à¶”à¶¶à¶§ à¶¸à¶±à· à¶…à·€à¶¶à·à¶°à¶ºà¶šà·Š à¶­à·’à¶¶à·’à¶º à¶ºà·”à¶­à·” à¶º. à¶’ à·ƒà¶³à·„à· à¶”à¶¶ à¶šà·… à¶ºà·”à¶­à·Šà¶­à·š à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶´à·à¶»à·’à¶·à·à¶œà·’à¶šà¶ºà·à¶œà·š à·„à·à·ƒà·’à¶»à·“à¶¸ à¶±à·’à¶»à·“à¶šà·Šà·‚à¶«à¶º à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶‘à¶±à¶¸à·Š à¶”à·€à·”à¶±à·Š à¶¸à·’à¶½à¶¯à·“ à¶œà·à¶±à·“à¶¸à¶§ à¶…à¶´à·šà¶šà·Šà·‚à· à¶šà¶»à¶± à¶·à·à¶«à·Šà¶©à¶º à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶±à·œï', 'images/FB_IMG_1565421421542.jpg', 'images1/FB_IMG_1565421412177.jpg', 'images2/FB_IMG_1565421841440.jpg', 'images3/FB_IMG_1565421869747.jpg', '400', '2019-08-17'),
(16, 'Aqua Culture', 'vehicle', 'Hambantota', '0255682555', 'supun', ' à¶¶à·œà·„à· à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶šà¶ºà·’à¶±à·Š à¶œà·š à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶…à·ƒà·à¶»à·Šà¶®à¶š à·€à·“à¶¸à¶§ à·„à·šà¶­à·”à·€ à·€à¶±à·Šà¶±à·š à·€à·™à·…à·™à¶³ à¶´à·œà·… à·ƒà¶¸à·“à¶šà·Šà·‚à¶«à¶ºà¶šà·Š à·ƒà·’à¶¯à·” à¶±à·œà¶šà¶» à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶†à¶»à¶¸à·Šà¶· à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶­à¶¸à·à¶œà·š à¶šà·à¶¸à·à¶­à·Šà¶­, à¶¯à¶šà·Šà·‚à¶­à·à·€à¶º, à¶´à¶¸à¶«à¶šà·Š à¶¸ à¶±à·œà·€ à·€à·™à·…à·™à¶³ à¶´à·œà·… à¶­à·”à·… à¶…à¶´à¶§ à¶­à·’à¶¶à·™à¶± à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶š à¶…à·€à·ƒà·Šà¶®à· à¶¸à·œà¶±à·€à·à¶¯ à¶ºà¶±à·Šà¶± à¶´à·’à·…à·’à¶¶à¶³à·€à¶¯ à¶”à¶¶à¶§ à¶¸à¶±à· à¶…à·€à¶¶à·à¶°à¶ºà¶šà·Š à¶­à·’à¶¶à·’à¶º à¶ºà·”à¶­à·” à¶º. à¶’ à·ƒà¶³à·„à· à¶”à¶¶ à¶šà·… à¶ºà·”à¶­à·Šà¶­à·š à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶´à·à¶»à·’à¶·à·à¶œà·’à¶šà¶ºà·à¶œà·š à·„à·à·ƒà·’à¶»à·“à¶¸ à¶±à·’à¶»à·“à¶šà·Šà·‚à¶«à¶º à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶‘à¶±à¶¸à·Š à¶”à·€à·”à¶±à·Š à¶¸à·’à¶½à¶¯à·“ à¶œà·à¶±à·“à¶¸à¶§ à¶…à¶´à·šà¶šà·Šà·‚à· à¶šà¶»à¶± à¶·à·à¶«à·Šà¶©à¶º à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶±à·œ', 'images/FB_IMG_1561816547116.jpg', 'images1/FB_IMG_1561519991057.jpg', 'images2/FB_IMG_1558533008095.jpg', 'images3/FB_IMG_1560564282585.jpg', '5000000', '2019-09-21'),
(17, 'Fish Trade', 'chamika', 'District', '0255680288', 'supun', ' à¶¶à·œà·„à· à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶šà¶ºà·’à¶±à·Š à¶œà·š à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶…à·ƒà·à¶»à·Šà¶®à¶š à·€à·“à¶¸à¶§ à·„à·šà¶­à·”à·€ à·€à¶±à·Šà¶±à·š à·€à·™à·…à·™à¶³ à¶´à·œà·… à·ƒà¶¸à·“à¶šà·Šà·‚à¶«à¶ºà¶šà·Š à·ƒà·’à¶¯à·” à¶±à·œà¶šà¶» à·€à·Šâ€à¶ºà·à¶´à·à¶» à¶†à¶»à¶¸à·Šà¶· à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶­à¶¸à·à¶œà·š à¶šà·à¶¸à·à¶­à·Šà¶­, à¶¯à¶šà·Šà·‚à¶­à·à·€à¶º, à¶´à¶¸à¶«à¶šà·Š à¶¸ à¶±à·œà·€ à·€à·™à·…à·™à¶³ à¶´à·œà·… à¶­à·”à·… à¶…à¶´à¶§ à¶­à·’à¶¶à·™à¶± à·€à·Šâ€à¶ºà·à¶´à·à¶»à·’à¶š à¶…à·€à·ƒà·Šà¶®à· à¶¸à·œà¶±à·€à·à¶¯ à¶ºà¶±à·Šà¶± à¶´à·’à·…à·’à¶¶à¶³à·€à¶¯ à¶”à¶¶à¶§ à¶¸à¶±à· à¶…à·€à¶¶à·à¶°à¶ºà¶šà·Š à¶­à·’à¶¶à·’à¶º à¶ºà·”à¶­à·” à¶º. à¶’ à·ƒà¶³à·„à· à¶”à¶¶ à¶šà·… à¶ºà·”à¶­à·Šà¶­à·š à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶´à·à¶»à·’à¶·à·à¶œà·’à¶šà¶ºà·à¶œà·š à·„à·à·ƒà·’à¶»à·“à¶¸ à¶±à·’à¶»à·“à¶šà·Šà·‚à¶«à¶º à¶šà·’à¶»à·“à¶¸à¶ºà·’. à¶‘à¶±à¶¸à·Š à¶”à·€à·”à¶±à·Š à¶¸à·’à¶½à¶¯à·“ à¶œà·à¶±à·“à¶¸à¶§ à¶…à¶´à·šà¶šà·Šà·‚à· à¶šà¶»à¶± à¶·à·à¶«à·Šà¶©à¶º à·€à·™à·…à·™à¶³à¶´à·œà·… à¶­à·”à·… à¶±à·œ', 'images/FB_IMG_1565421875753.jpg', 'images1/FB_IMG_1565421881842.jpg', 'images2/FB_IMG_1565421902274.jpg', 'images3/FB_IMG_1565421905055.jpg', '450', '2019-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0000-00-00 00:00:00', 0),
(2, 'admin1', 'admin1', 'admin1@gmail.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', '0000-00-00 00:00:00', 0),
(3, 'supun', 'wije', 'supun@gmail.com', '315f166c5aca63a157f7d41007675cb44a948b33', '0000-00-00 00:00:00', 0),
(4, 'chamika', 'wijesun', 'chamika123@gmail.com', 'admin3', '0000-00-00 00:00:00', 0),
(5, 'suranga', 'lasantha', 'saranga@gmail.com', 'saranga', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
