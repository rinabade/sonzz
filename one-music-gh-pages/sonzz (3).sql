-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 08:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(3, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(50) NOT NULL,
  `genre_id` int(50) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `first_name`, `last_name`, `email`, `password`, `address`, `bio`, `picture`) VALUES
(3, 'Shashwot', ' Khadka', 'Shashwot@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'kathmandu', 'hello', 'images/a1.jpg'),
(4, 'Sajjan Raj', 'Vaidya', 'sajjanraj@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'kathmandu', '', 'images/b6.jpg'),
(5, 'Sushant', 'KC', 'sushant@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'kathmandu', '', 'images/a11.jpg'),
(6, 'Selena ', 'Gomez', 'selena.gomez@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'USA', '', 'images/a8.jpg'),
(7, 'Bruno ', 'Mars', 'bruno@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'USA', '', 'images/pa1.jpg'),
(8, 'Atif', 'Aslam', 'atif@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Pakistan', '', 'images/breadcumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist_album`
--

CREATE TABLE `artist_album` (
  `artist_album_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artist_payment`
--

CREATE TABLE `artist_payment` (
  `a_payment_id` int(50) NOT NULL,
  `view_id` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  `account_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(50) NOT NULL,
  `genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(50) NOT NULL,
  `a_payment_id` int(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `card_number` int(50) NOT NULL,
  `expiration` date NOT NULL,
  `security_number` int(50) NOT NULL,
  `amount` int(10) NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `premium_id` int(50) NOT NULL,
  `payment_id` int(50) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `search_id` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  `genre_id` int(50) NOT NULL,
  `song_id` int(50) NOT NULL,
  `album_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(100) NOT NULL,
  `artist_id` int(100) DEFAULT NULL,
  `album_id` int(50) NOT NULL,
  `genre_id` int(50) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `duration` int(50) NOT NULL,
  `song` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `view_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `artist_id`, `album_id`, `genre_id`, `song_title`, `duration`, `song`, `image`, `view_count`) VALUES
(2, 4, 3, 3, 'Batash', 45, 'uploads/BATASH Shashwot Khadka Prod by Sanjv Official Lyric Video.mp3', 'simages/a2.jpg', 0),
(4, 4, 3, 3, 'Chitthi Vitra', 45, 'uploads/Sajjan Raj Vaidya Chitthi Bhitra Official Release.mp3', 'simages/b6.jpg', 0),
(5, 5, 3, 3, 'Hattarindai Bataasindai', 45, 'uploads/Sajjan Raj Vaidya Hataarindai Bataasindai Official Release.mp3', 'simages/b6.jpg', 0),
(6, 5, 3, 3, 'Mooskaan', 45, 'uploads/Sajjan Raj Vaidya Mooskaan Official Lyrical Video.mp3', 'simages/b6.jpg', 0),
(7, 5, 3, 3, 'Nagaanya Maya', 45, 'uploads/Sajjan Raj Vaidya Naganya Maya Official Release.mp3', 'simages/b6.jpg', 0),
(8, 6, 3, 3, 'Parkhaii', 45, 'uploads/Sajjan Raj Vaidya Parkhaai Official Release.mp3', 'simages/b6.jpg', 0),
(9, 6, 3, 3, 'Risaune Bhaye', 45, 'uploads/Sushant KC Risaune Bhaye.mp3', 'simages/a6.jpg', 0),
(10, 6, 3, 3, 'we dont talk anymore', 45, 'uploads/we_dont_talk_anymore.mp3', 'simages/bg-2.jpg', 0),
(11, 4, 3, 3, 'Feel Me', 45, 'uploads/Selena Gomez Feel Me Lyrics.mp3', 'simages/bg-2.jpg', 0),
(12, 7, 3, 3, 'Marshmellow Wolves', 45, 'uploads/Selena Gomez Marshmello Wolves.mp3', 'simages/b5.jpg', 0),
(13, 7, 3, 3, 'The Heart Wants What It Wants', 45, 'uploads/Selena Gomez The Heart Wants What It Wants Official Video.mp3', 'simages/e4.jpg', 0),
(14, 8, 3, 3, 'Same Old Love', 45, 'uploads/Selena Gomez Same Old Love.mp3', 'simages/e8.jpg', 0),
(15, 8, 3, 3, 'Who Says', 45, 'uploads/Selena Gomez The Scene Who Says Lyrics.mp3', 'simages/breadcumb2.jpg', 0),
(16, 8, 3, 3, 'Love The Way You Are', 45, 'uploads/Bruno Mars Just The Way You Are Official Music Video.mp3', 'simages/a3.jpg', 0),
(22, 3, 3, 3, 'asda', 45, 'uploads/Bruno Mars Just The Way You Are Official Music Video.mp3', 'simages/a2.jpg', 0),
(24, 3, 3, 3, 'apple', 45, 'uploads/parkhai.mp3', 'simages/dashboard.png', 0),
(28, 3, 3, 3, 'Monday Hate', 45, 'uploads/Sajjan Raj Vaidya Chitthi Bhitra Official Release.mp3', 'simages/forgot-password-office-dark.jpeg', 2),
(29, 3, 3, 3, 'Tuesday Futsal', 45, 'uploads/Selena Gomez Feel Me Lyrics.mp3', 'simages/262793609_630748191399325_4447333547351738556_n.jpg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `confirm_password`, `address`, `image`) VALUES
(12, 'nirdesh', 'Pradhan', 'pradhan@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'fcea920f7412b5da7be0cf42b8c93759', 'Tahachal', 'images/263285340_588582849108618_2009844090197958938_n.jpg'),
(18, 'Reena', 'Bade', 'badereena8811@gmail.com', '25f9e794323b453885f5181f1b624d0b', '25f9e794323b453885f5181f1b624d0b', 'Thimi', 'images/IMG_2904.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `view_id` int(100) NOT NULL,
  `song_id` int(50) NOT NULL,
  `count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`view_id`, `song_id`, `count`) VALUES
(5, 5, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 22, 1),
(18, 24, 1),
(19, 28, 1),
(20, 29, 1),
(21, 2, 1),
(22, 4, 1),
(23, 5, 1),
(24, 6, 1),
(25, 7, 1),
(26, 8, 1),
(27, 9, 1),
(28, 10, 1),
(29, 11, 1),
(30, 12, 1),
(31, 13, 1),
(32, 14, 1),
(33, 15, 1),
(34, 16, 1),
(35, 22, 1),
(36, 24, 1),
(37, 28, 1),
(38, 29, 1),
(39, 2, 1),
(40, 4, 1),
(41, 5, 1),
(42, 6, 1),
(43, 7, 1),
(44, 8, 1),
(45, 9, 1),
(46, 10, 1),
(47, 11, 1),
(48, 12, 1),
(49, 13, 1),
(50, 14, 1),
(51, 15, 1),
(52, 16, 1),
(53, 22, 1),
(54, 24, 1),
(55, 28, 1),
(56, 29, 1),
(57, 2, 0),
(58, 4, 0),
(59, 5, 0),
(60, 6, 0),
(61, 7, 0),
(62, 8, 0),
(63, 9, 0),
(64, 10, 0),
(65, 11, 0),
(66, 12, 0),
(67, 13, 0),
(68, 14, 0),
(69, 15, 0),
(70, 16, 0),
(71, 22, 0),
(72, 24, 0),
(73, 28, 0),
(74, 29, 0),
(75, 2, 0),
(76, 4, 0),
(77, 5, 0),
(78, 6, 0),
(79, 7, 0),
(80, 8, 0),
(81, 9, 0),
(82, 10, 0),
(83, 11, 0),
(84, 12, 0),
(85, 13, 0),
(86, 14, 0),
(87, 15, 0),
(88, 16, 0),
(89, 22, 0),
(90, 24, 0),
(91, 28, 0),
(92, 29, 0),
(93, 2, 0),
(94, 4, 0),
(95, 5, 0),
(96, 6, 0),
(97, 7, 0),
(98, 8, 0),
(99, 9, 0),
(100, 10, 0),
(101, 11, 0),
(102, 12, 0),
(103, 13, 0),
(104, 14, 0),
(105, 15, 0),
(106, 16, 0),
(107, 22, 0),
(108, 24, 0),
(109, 28, 0),
(110, 29, 0),
(111, 2, 0),
(112, 4, 0),
(113, 5, 0),
(114, 6, 0),
(115, 7, 0),
(116, 8, 0),
(117, 9, 0),
(118, 10, 0),
(119, 11, 0),
(120, 12, 0),
(121, 13, 0),
(122, 14, 0),
(123, 15, 0),
(124, 16, 0),
(125, 22, 0),
(126, 24, 0),
(127, 28, 0),
(128, 29, 0),
(129, 2, 0),
(130, 4, 0),
(131, 5, 0),
(132, 6, 0),
(133, 7, 0),
(134, 8, 0),
(135, 9, 0),
(136, 10, 0),
(137, 11, 0),
(138, 12, 0),
(139, 13, 0),
(140, 14, 0),
(141, 15, 0),
(142, 16, 0),
(143, 22, 0),
(144, 24, 0),
(145, 28, 0),
(146, 29, 0),
(147, 2, 0),
(148, 4, 0),
(149, 5, 0),
(150, 6, 0),
(151, 7, 0),
(152, 8, 0),
(153, 9, 0),
(154, 10, 0),
(155, 11, 0),
(156, 12, 0),
(157, 13, 0),
(158, 14, 0),
(159, 15, 0),
(160, 16, 0),
(161, 22, 0),
(162, 24, 0),
(163, 28, 0),
(164, 29, 0),
(165, 2, 0),
(166, 4, 0),
(167, 5, 0),
(168, 6, 0),
(169, 7, 0),
(170, 8, 0),
(171, 9, 0),
(172, 10, 0),
(173, 11, 0),
(174, 12, 0),
(175, 13, 0),
(176, 14, 0),
(177, 15, 0),
(178, 16, 0),
(179, 22, 0),
(180, 24, 0),
(181, 28, 0),
(182, 29, 0),
(183, 2, 0),
(184, 4, 0),
(185, 5, 0),
(186, 6, 0),
(187, 7, 0),
(188, 8, 0),
(189, 9, 0),
(190, 10, 0),
(191, 11, 0),
(192, 12, 0),
(193, 13, 0),
(194, 14, 0),
(195, 15, 0),
(196, 16, 0),
(197, 22, 0),
(198, 24, 0),
(199, 28, 0),
(200, 29, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `artist_album`
--
ALTER TABLE `artist_album`
  ADD PRIMARY KEY (`artist_album_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `artist_payment`
--
ALTER TABLE `artist_payment`
  ADD PRIMARY KEY (`a_payment_id`),
  ADD KEY `view_id` (`view_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `a_payment_id` (`a_payment_id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`premium_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`view_id`),
  ADD KEY `song_id` (`song_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artist_album`
--
ALTER TABLE `artist_album`
  MODIFY `artist_album_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `view_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `artist_album`
--
ALTER TABLE `artist_album`
  ADD CONSTRAINT `artist_album_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `artist_album_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `artist_payment`
--
ALTER TABLE `artist_payment`
  ADD CONSTRAINT `artist_payment_ibfk_3` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`a_payment_id`) REFERENCES `artist_payment` (`a_payment_id`);

--
-- Constraints for table `premium`
--
ALTER TABLE `premium`
  ADD CONSTRAINT `premium_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`),
  ADD CONSTRAINT `search_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `search_ibfk_4` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `view_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
