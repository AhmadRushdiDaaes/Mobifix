-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 08:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobifix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_fullname`) VALUES
(1, 'ahmad.daaes14@gmail.com', 'ahmad123456', 'ahmad rushdi daaes'),
(4, 'abd.abd11@gmail.com', 'abd11', 'abd'),
(6, 'abdullah@hotmail.com', '1234', 'abd');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Nokia'),
(3, 'Apple Iphone'),
(4, 'samsuing');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_status` enum('processed','not processed') NOT NULL DEFAULT 'not processed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_status`) VALUES
(1, 'ahmad daaes', 'ahmad.daaes14@gmail.com', 'hello', 'wwwwwwww', 'processed'),
(2, 'ahmad daaes', 'ahmad.daaes14@gmail.com', 'hello', 'wwwwwwww', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(14) NOT NULL,
  `customer_address` text NOT NULL,
  `service_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `mobile_id` int(255) NOT NULL,
  `customer_date` text NOT NULL,
  `customer_time` text NOT NULL,
  `price_id` int(255) NOT NULL,
  `customer_problem` text NOT NULL,
  `fixer_id` int(255) DEFAULT NULL,
  `status` enum('processed','not processed') NOT NULL DEFAULT 'not processed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `service_id`, `category_id`, `mobile_id`, `customer_date`, `customer_time`, `price_id`, `customer_problem`, `fixer_id`, `status`) VALUES
(31, 'ahmad daaes', 'lames@gmail.com', '0795251212', 'tlaa al ali', 12, 1, 17, '05/19/2020', '12:30am', 9, 'aaaaaa', NULL, 'not processed'),
(33, 'ahmad daaes', 'ahmad.daaes14@gmail.com', '0795251212', 'tlaa al ali', 12, 1, 17, '05/12/2020', '10:00 AM', 9, 'its ok', NULL, 'not processed');

-- --------------------------------------------------------

--
-- Table structure for table `fixer`
--

CREATE TABLE `fixer` (
  `fixer_id` int(255) NOT NULL,
  `fixer_name` varchar(255) NOT NULL,
  `fixer_phone` varchar(255) NOT NULL,
  `fixer_email` varchar(255) NOT NULL,
  `fixer_address` varchar(255) NOT NULL,
  `fixer_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixer`
--

INSERT INTO `fixer` (`fixer_id`, `fixer_name`, `fixer_phone`, `fixer_email`, `fixer_address`, `fixer_password`) VALUES
(1, 'ahmad rushdi daaes', '0788344472', 'ahmad.daaes14@gmail.com', 'amman tlaa al ali', 'ahmad123456'),
(3, 'jodat albasher', '0799123456', 'jojo@gmail.com', 'amman tlaa al ali', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `free_consultation`
--

CREATE TABLE `free_consultation` (
  `consultation_id` int(255) NOT NULL,
  `consultation_name` varchar(255) NOT NULL,
  `consultation_phone` varchar(14) NOT NULL,
  `consultation_email` varchar(255) NOT NULL,
  `consultation_subject` varchar(255) NOT NULL,
  `consultation_image` text NOT NULL,
  `consultation_problem` text NOT NULL,
  `consultation_status` enum('processed','not processed') DEFAULT 'not processed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `free_consultation`
--

INSERT INTO `free_consultation` (`consultation_id`, `consultation_name`, `consultation_phone`, `consultation_email`, `consultation_subject`, `consultation_image`, `consultation_problem`, `consultation_status`) VALUES
(21, 'ahmad daaes', '0788344472', 'ahmad.daaes14@gmail.com', 'screen good', 'IMG_2719-1.jpg', 'hello man i want tell u i love  u ', 'processed'),
(22, 'jojo', '0771234567', 'jodat12@gmail.com', 'help', 'MG_2915.jpg', 'hello ', 'not processed'),
(23, 'ahmad daaes', '0771234567', 'ahmad.daaes14@gmail.com', 'lock', 'IMG_2719-1.jpg', 'hhhhhhhhhhhhhhhhhhhhhhhhhh', 'processed'),
(24, 'ahmad daaes', '0785857304', 'ahmad.daaes14@gmail.com', 'its ok', 'MG_2915.jpg', 'kkkkk', 'processed');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_type`
--

CREATE TABLE `mobile_type` (
  `mobile_id` int(255) NOT NULL,
  `mobile_name` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobile_type`
--

INSERT INTO `mobile_type` (`mobile_id`, `mobile_name`, `category_id`) VALUES
(15, ' nokia 6 ', 1),
(16, ' iphone 8', 3),
(17, ' nokia 5', 1),
(18, '  nokia 5.1', 1),
(19, ' iphone 11 pro', 3),
(20, ' samsuing s5', 4);

-- --------------------------------------------------------

--
-- Table structure for table `our_experts`
--

CREATE TABLE `our_experts` (
  `expert_id` int(11) NOT NULL,
  `expert_name` varchar(255) NOT NULL,
  `expert_position` varchar(255) NOT NULL,
  `expert_photo` text NOT NULL,
  `expert_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_experts`
--

INSERT INTO `our_experts` (`expert_id`, `expert_name`, `expert_position`, `expert_photo`, `expert_description`) VALUES
(1, 'Ashod Khanoian ', 'Android phone Expert', '94261534_3573363456012845_6486682089172238336_n.jpg', 'Hello ! I am ashod . i am expert in all android mobiles '),
(3, 'Abdullah Mohanned', 'Apple phone Expert', 'My Post (8).png', 'Hello ! I am Abdullah . i am expert in all Apple mobiles'),
(4, 'Hakam Salman', 'Maintenance technician', '94720965_1082405698810436_1157195134505320448_n.jpg', 'Hello ! i am Hakam. and i am have experience in all mobile maintenance'),
(5, 'Ahmad Daaes', 'Maintenance technician', '55554525_2315512525361768_4590872353507901440_o.jpg', 'Hello ! i am Ahmad. and i am have experience in all mobile maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `price_id` int(11) NOT NULL,
  `mobile_id` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `price` double(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`price_id`, `mobile_id`, `category_id`, `service_id`, `price`) VALUES
(7, ' 15', 1, 12, 22.0),
(9, ' 17', 1, 12, 22.0),
(10, ' 16', 3, 14, 55.0),
(11, ' 20', 4, 13, 12.0);

-- --------------------------------------------------------

--
-- Table structure for table `rate_us`
--

CREATE TABLE `rate_us` (
  `rate_id` int(11) NOT NULL,
  `rate_firstName` varchar(255) NOT NULL,
  `rate_secondName` varchar(255) NOT NULL,
  `rate_email` varchar(255) NOT NULL,
  `rate_fixer` int(255) NOT NULL,
  `rate_phone` varchar(14) NOT NULL,
  `rate_city` varchar(255) NOT NULL,
  `rate_stars` int(10) NOT NULL,
  `rate_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_us`
--

INSERT INTO `rate_us` (`rate_id`, `rate_firstName`, `rate_secondName`, `rate_email`, `rate_fixer`, `rate_phone`, `rate_city`, `rate_stars`, `rate_review`) VALUES
(1, 'ahmad', 'daaes', 'ahmad.daaes14@gmail.com', 3, '0788344472', 'bn', 5, 'its very nice '),
(2, 'jodat', 'albasher', 'abd.abd11@gmail.com', 3, '0799921231', 'Zarqa', 1, 'very bad ');

-- --------------------------------------------------------

--
-- Table structure for table `register_fixer`
--

CREATE TABLE `register_fixer` (
  `request_id` int(255) NOT NULL,
  `request_name` varchar(255) NOT NULL,
  `request_phone` varchar(14) NOT NULL,
  `request_email` varchar(255) NOT NULL,
  `request_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_fixer`
--

INSERT INTO `register_fixer` (`request_id`, `request_name`, `request_phone`, `request_email`, `request_address`) VALUES
(1, 'ahmad daaes ', '0788344472', 'ahmad.daaes14@gmail.com', 'amman tlaa al ali'),
(3, 'obada daaes', '07909366164', 'obada@gmail.com', 'amman tlaa al ali');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `service_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_description`, `service_image`) VALUES
(12, 'water damage', 'water', 'IMG_2719-1.jpg'),
(13, 'screen damage', 'abassssssssss', 'pexels-photo-196653.jpeg'),
(14, 'locking up', 'abd', 'MG_2915.jpg'),
(15, 'charging', 'if your mobile have any problem in charging such as to much until full charge or not charging ', '96377970_236895787409051_1982299364709629952_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `offer_description1` varchar(255) NOT NULL,
  `offer_description2` varchar(255) NOT NULL,
  `offer_description3` varchar(255) NOT NULL,
  `offer_description4` varchar(255) NOT NULL,
  `offer_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special_offers`
--

INSERT INTO `special_offers` (`offer_id`, `offer_name`, `offer_description1`, `offer_description2`, `offer_description3`, `offer_description4`, `offer_price`) VALUES
(8, 'screen iphone 7 ', 'until 15/5/2020', 'just one weak', 'the best', 'all jordan', 45),
(9, 'screen Nokia   6', 'until 15 /8/2020', 'in amman only', 'and zarqa', 'best in jordan', 12),
(10, 'camera samsung s5', 'in all jordan', 'one gift free', 'until 12/9/2020', 'it best price in jordan', 60),
(11, 'mich iphone7', 'in all jordan', 'avaliavle until 15/4/2020', 'its best price in jordan', 'now ', 12);

-- --------------------------------------------------------

--
-- Table structure for table `view_rating`
--

CREATE TABLE `view_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `view_rating`
--

INSERT INTO `view_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(1, 1, 33, 152, '2020-05-23 00:42:09', '2020-05-27 17:33:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `fixer`
--
ALTER TABLE `fixer`
  ADD PRIMARY KEY (`fixer_id`);

--
-- Indexes for table `free_consultation`
--
ALTER TABLE `free_consultation`
  ADD PRIMARY KEY (`consultation_id`);

--
-- Indexes for table `mobile_type`
--
ALTER TABLE `mobile_type`
  ADD PRIMARY KEY (`mobile_id`);

--
-- Indexes for table `our_experts`
--
ALTER TABLE `our_experts`
  ADD PRIMARY KEY (`expert_id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `rate_us`
--
ALTER TABLE `rate_us`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `register_fixer`
--
ALTER TABLE `register_fixer`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `view_rating`
--
ALTER TABLE `view_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `fixer`
--
ALTER TABLE `fixer`
  MODIFY `fixer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `free_consultation`
--
ALTER TABLE `free_consultation`
  MODIFY `consultation_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mobile_type`
--
ALTER TABLE `mobile_type`
  MODIFY `mobile_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `our_experts`
--
ALTER TABLE `our_experts`
  MODIFY `expert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rate_us`
--
ALTER TABLE `rate_us`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_fixer`
--
ALTER TABLE `register_fixer`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `special_offers`
--
ALTER TABLE `special_offers`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `view_rating`
--
ALTER TABLE `view_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
