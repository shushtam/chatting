-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2017 at 07:16 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatusers`
--

CREATE TABLE `chatusers` (
  `chatusers_id` int(11) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatusers`
--

INSERT INTO `chatusers` (`chatusers_id`, `nickname`, `email`, `password`, `image`) VALUES
(45, 'user3', 'user3@gmail.com', 'user3', 'user3.jpg'),
(43, 'user1', 'user1@gmail.com', 'user1', 'user1.jpg'),
(44, 'user2', 'user2@gmail.com', 'user2', 'user2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `room_name` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `body`, `room_name`, `nickname`, `updated_at`, `created_at`) VALUES
(37, 'hi', 'room2', 'user3', '2016-12-08 18:51:19', '2016-12-08 18:51:19'),
(36, 'hey', 'room5', 'user3', '2016-12-08 18:43:34', '2016-12-08 18:43:34'),
(35, 'new one', 'room5', 'user1', '2016-09-06 18:08:55', '2016-09-06 18:08:55'),
(34, 'who?', 'room3', 'user1', '2016-09-06 18:08:30', '2016-09-06 18:08:30'),
(33, 'you', 'room3', 'user2', '2016-09-06 22:07:47', '2016-09-06 22:07:47'),
(32, 'hey', 'room1', 'user2', '2016-09-06 22:07:47', '2016-09-06 22:07:47'),
(31, 'hello', 'room3', 'user2', '2016-09-06 22:07:14', '2016-09-06 22:07:14'),
(30, 'hi', 'room1', 'user1', '2016-09-06 22:07:14', '2016-09-06 22:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `rooms_id` int(11) NOT NULL,
  `room_name` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rooms_id`, `room_name`, `nickname`, `updated_at`, `created_at`) VALUES
(66, 'room5', 'user1', '2016-09-06 18:08:47', '2016-09-06 18:08:47'),
(65, 'room4', 'user2', '2016-09-06 22:06:44', '2016-09-06 22:06:44'),
(64, 'room3', 'user2', '2016-09-06 22:06:44', '2016-09-06 22:06:44'),
(63, 'room2', 'user1', '2016-09-06 22:06:26', '2016-09-06 22:06:26'),
(62, 'room1', 'user1', '2016-09-06 22:06:26', '2016-09-06 22:06:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatusers`
--
ALTER TABLE `chatusers`
  ADD PRIMARY KEY (`chatusers_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`rooms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatusers`
--
ALTER TABLE `chatusers`
  MODIFY `chatusers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `rooms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
