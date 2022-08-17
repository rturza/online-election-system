-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 05:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', 'admin123', '2021-05-18 05:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `voterdb`
--

CREATE TABLE `voterdb` (
  `id` int(5) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterdb`
--

INSERT INTO `voterdb` (`id`, `full_name`, `email`, `voter_id`, `voted_for`) VALUES
(1, 'Ridwan', 'cse.turza@yahoo.com', 2017260137, 'BRP'),
(2, 'Shishir', 'shishir@live.com', 2017260141, 'BAL'),
(3, 'Ankon', 'ankon@gmail.com', 2017260032, 'BAL'),
(4, 'Reshad', 'reshad@gmail.com', 2017260049, 'BRP'),
(5, 'Troy', 'troy@live.com', 2017260666, 'BNP'),
(6, 'Rakib', 'rakib@gmail.com', 2017260999, 'BJP'),
(7, 'Tahmid', 'tahmid@live.com', 2017260969, 'BJP'),
(8, 'Asif', 'asif@live.com', 2017260800, 'BRP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `voterdb`
--
ALTER TABLE `voterdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voterdb`
--
ALTER TABLE `voterdb`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
