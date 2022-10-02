-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 03:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid_minar`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_categories`
--

CREATE TABLE `add_categories` (
  `category_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `add_category` varchar(50) NOT NULL,
  `image_category` varchar(50) NOT NULL,
  `editor1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_categories`
--

INSERT INTO `add_categories` (`category_id`, `username`, `add_category`, `image_category`, `editor1`) VALUES
(1, 'Husenahmad', '1', '', '<p><strong>Nice <em>Website <s>Mr</s> <span style=\"color:#1abc9c\">Husenahmad</span></em></strong></p>\r\n'),
(2, 'Nandoliya Rayyan', '3', '', '<p>Wow Amazing</p>\r\n'),
(3, 'Jagarala Affan', '3', '', '<p><span style=\"color:#e74c3c\">Ohhh! We are Lucky</span></p>\r\n'),
(4, 'Marediya Salman', '2', '', '<p><strong><em><u>Ohhh!</u></em></strong> B<span style=\"color:#2ecc71\">eautify</span>l <span style=\"background-color:#e67e22\">Amazing</span></p>\r\n'),
(5, 'Sunasara Samir', '3', '', '<ul>\r\n	<li>gf lfsf sls<strong>glka fssdl sfl</strong></li>\r\n</ul>\r\n'),
(7, 'Nandoliya Usman', '3', '', '<p><span style=\"font-family:Comic Sans MS,cursive\">&nbsp;gdfgdkl aklsflksf klsfksl </span></p>\r\n'),
(8, 'Rajput Manish', '3', '', '<blockquote>\r\n<p>dfklsfalsd ff sadf sjfsls</p>\r\n</blockquote>\r\n'),
(9, 'Jagarala Fahim', '3', 'background18.jpg', '<p><strong><em>Wow Husen</em></strong> <span style=\"color:#000000\">Nice Bro<sup>2</sup></span></p>\r\n'),
(10, 'Jagarala Mustufa', '3', 'background16.jpg', '<p><em><strong><u>ohh no wow</u></strong></em> <span style=\"color:#27ae60\">Lucky</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('admin@yahoo.in', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`category_id`, `category_name`) VALUES
(1, 'Minar'),
(2, 'Gumbad'),
(3, 'Parapet Jali'),
(4, 'Wuzu Stand'),
(6, 'Cement int');

-- --------------------------------------------------------

--
-- Table structure for table `item_masters`
--

CREATE TABLE `item_masters` (
  `item_id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `editor1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_masters`
--

INSERT INTO `item_masters` (`item_id`, `category_id`, `item_name`, `item_image`, `editor1`) VALUES
(8, 2, 'Masjid Gumbad', 'masjid-gumbad.png', '<ul>\r\n	<li>Harmain Precast Industries is largest RCC Minar Products, RCC Jali For Masjids, Masjids Boundary wall Manufacturer, <span class=\"marker\">Supplier and Stockiest in India.</span></li>\r\n</ul>\r\n'),
(9, 4, 'Black color Wuzu Stand', 'vuzu_stand1.png', '<p><span style=\"color:#2ecc71\"><strong>A Marble Mimber &amp; Wuzu <em>Stand</em></strong> </span><span style=\"color:#95a5a6\">is made available by us that is a pulpit in a </span><span style=\"color:#2ecc71\"><em>mosque</em> where the imam (leader of prayers'),
(10, 1, 'All Size Minar', 'minar.png', '<p>This <em><strong>Minar</strong></em> is a <samp><span style=\"color:#3498db\">Beautifull.</span></samp></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_categories`
--
ALTER TABLE `add_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `item_masters`
--
ALTER TABLE `item_masters`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_categories`
--
ALTER TABLE `add_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_masters`
--
ALTER TABLE `item_masters`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
