-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 02:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sender_id` int(6) NOT NULL,
  `receiver_id` int(6) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sender_id`, `receiver_id`, `amount`) VALUES
(123456, 7204, 30000),
(123456, 720400, 3000),
(123456, 123123, 963000),
(123456, 111555, 5000),
(123123, 123456, 73500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `accno` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `timestamp` varchar(50) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`accno`, `name`, `phone`, `email`, `password`, `timestamp`, `balance`) VALUES
(111555, 'Munna', '9999955555', 'munna@mirzapur.com', '123', 'January 02,2021 02:24:32 PM', 55000),
(123123, 'Niveditha', '8345927123', 'niviniveditha@gmail.com', '123', 'January 01,2021 11:51:33 PM', 900000),
(123456, 'Karun Karthik', '9381569054', 'karunkarthik.t@gmail.com', '123', 'January 01,2021 11:50:27 PM', 4068500),
(332211, 'Sir', '123456789', 'test@gmail.com', '123', 'January 02,2021 03:24:53 PM', 10050),
(654321, 'vandana', '7897644456', 'vandana@gmail.com', 'vandy@123', 'January 02,2021 01:01:54 PM', 500),
(720400, 'Rishita', '9121728310', 'rishita@gmail.com', 'rishita', 'January 02,2021 01:17:36 PM', 4987100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`accno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
