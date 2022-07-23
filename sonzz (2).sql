-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 11:14 AM
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
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `artist_id` int(50) NOT NULL,
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
(0, 'Rina', 'Bade', 'rina.bade@apexcollege.edu.np', '25d55ad283aa400af464c76d713c07ad', 'Thimi', '', 'images/IMG_2904.JPG'),
(1, 'Kurt Cobain', '', 'kurt@gmail.com', 'cobain@123', '', 'hello i am kurt cobain', '');

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
  `artist_id` int(50) NOT NULL,
  `album_id` int(50) NOT NULL,
  `genre_id` int(50) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `duration` int(50) NOT NULL,
  `song` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `artist_id`, `album_id`, `genre_id`, `song_title`, `duration`, `song`, `image`) VALUES
(23, 0, 3, 3, 'chitthi', 45, 'uploads/Sajjan Raj Vaidya Chitthi Bhitra Official Release.mp3', 'simages/rinkey.png');

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
(12, 'nirdesh', 'Pradhan', 'pradhan@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 'fcea920f7412b5da7be0cf42b8c93759', 'Tahachal', 'images/263285340_588582849108618_2009844090197958938_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `view_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `song_id` int(50) NOT NULL,
  `artist_id` int(50) NOT NULL,
  `count` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `view_id` (`view_id`);

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
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `genre_id` (`genre_id`);

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
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  ADD CONSTRAINT `artist_payment_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `artist_payment_ibfk_2` FOREIGN KEY (`view_id`) REFERENCES `view` (`view_id`);

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
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`),
  ADD CONSTRAINT `search_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);

--
-- Constraints for table `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `view_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
