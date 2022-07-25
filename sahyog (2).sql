-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 11:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahyog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'alkdshaks', 'ria@gmail.com', 'alkdhlkasjd');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `category` varchar(400) NOT NULL,
  `pick_up_location` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `mode` int(20) NOT NULL,
  `donor_id` int(100) NOT NULL,
  `donation_date` date NOT NULL,
  `request_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `amount`, `quantity`, `category`, `pick_up_location`, `contact`, `mode`, `donor_id`, `donation_date`, `request_id`) VALUES
(13, 0, '400', 'biscuits', 'damak', '284398203', 3, 29, '2021-07-09', 7);

-- --------------------------------------------------------

--
-- Table structure for table `donation_mode`
--

CREATE TABLE `donation_mode` (
  `id` int(10) NOT NULL,
  `modes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_mode`
--

INSERT INTO `donation_mode` (`id`, `modes`) VALUES
(1, 'Cash'),
(2, 'Clothes'),
(3, 'Food'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Comments` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `full_name`, `email`, `Comments`) VALUES
(5, 'amisha shah', 'amisha@gmail.com', 'this website has been helpful for making donations easily.'),
(6, 'rahul bhattrai', 'rahul@gmail.com', ' best domestic donation website ever came acrossed with.'),
(7, 'mausam sinha', 'mau@gmail.com', ' online donation seem easy due to this website'),
(8, 'aditi shrestha', 'adi@gmail.com', ' wish we could review donation done without login'),
(10, 'kiran mt', 'k@gmail.com', ' i liked it'),
(11, 'reeya agrawal', 'reeya@gmail.com', ' thankyou');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(100) NOT NULL,
  `donee_id` int(100) NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `help` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL,
  `mode` int(10) NOT NULL,
  `request_status` varchar(20) NOT NULL,
  `requested_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `donee_id`, `agenda`, `help`, `image`, `mode`, `request_status`, `requested_date`) VALUES
(7, 24, 'help in food', 'food for infant', '1625798599-hi.jpg', 3, 'Accepted', '2021-07-09'),
(8, 36, 'cash', 'cash', '1625948899-11_11 on Twitter.jpg', 1, 'pending', '2021-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `new_password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` int(5) NOT NULL,
  `token` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `new_password`, `confirm_password`, `phone`, `address`, `role`, `token`, `status`) VALUES
(21, 'aditi', 'shrestha', 'adi@gmail.com', 'c46335eb267e2e1cde5b017acb4cd799', '4b43b0aee35624cd95b910189b3dc231', '93024907', 'nuwakot', 1, 0, 'In-active'),
(22, 'mr', 'k', 'k@gmail.com', '8ce4b16b22b58894aa86c421e8759df3', '8ce4b16b22b58894aa86c421e8759df3', '3982648236', 'dharan', 2, 0, ''),
(25, 'ria', 'agrawal', 'r@gmail.com', 'd42a9ad09e9778b177d409f5716ac621', 'd42a9ad09e9778b177d409f5716ac621', '2304894931', 'damak', 1, 0, 'In-active'),
(29, 'samikxya', 'dhakal', 's@gmail.com', '03c7c0ace395d80182db07ae2c30f034', '03c7c0ace395d80182db07ae2c30f034', '32-480234', 'butwal', 1, 0, 'In-active'),
(36, 'reeya', 'agrawal', 'reeya.agrawal@apexcollege.edu.np', '1285482aa73c6aef3fb991fcd06f8660', '1285482aa73c6aef3fb991fcd06f8660', '9806079371', 'damak', 1, 2, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `donation_mode`
--
ALTER TABLE `donation_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donation_mode`
--
ALTER TABLE `donation_mode`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
