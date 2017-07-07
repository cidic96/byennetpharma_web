-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2017 at 07:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byennetpharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `userEmail` varchar(80) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT 'Seller',
  `place` varchar(100) NOT NULL,
  `phoneNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `firstName`, `lastName`, `userEmail`, `userPassword`, `type`, `place`, `phoneNo`) VALUES
(8, 'Aksahy', 'saini', 'laskjf@gmail.com', '667ba10a2edbc6982301958970794c16', 'Seller', 'ROokre', '7894561230'),
(9, 'Lakshay ', 'saini', 'lakshysai@gmail.com', '667ba10a2edbc6982301958970794c16', '85', 'plasaf', '9639996506'),
(10, 'Shivam', 'saini', 'shivam@gmail.com', '667ba10a2edbc6982301958970794c16', 'Health Care Provider', 'roorkee', '9639996506'),
(11, 'Akshay', 'saini', 'akshay@gmail.com', '667ba10a2edbc6982301958970794c16', 'Health Care Provider', 'Roorkee', '9639996506'),
(12, 'Sharad ', 'saini', 'sharad@gmail.com', '667ba10a2edbc6982301958970794c16', 'Health Care Provider', 'roorkee', '9639996506');

-- --------------------------------------------------------

--
-- Table structure for table `user_request_details`
--

CREATE TABLE `user_request_details` (
  `userRequestName` varchar(100) NOT NULL,
  `userRequestSubject` text NOT NULL,
  `userRequestDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request_details`
--

INSERT INTO `user_request_details` (`userRequestName`, `userRequestSubject`, `userRequestDescription`) VALUES
('Lakshay saini', 'sdajflk', 'faklsjdfaskljflkasfd'),
('Lakshay saini', 'My Resume', 'Hello My Self Lakshay saini'),
('Akshay saini', 'Hello MY ', 'Hi here is akshay saini'),
('Akshay saini', 'asdfgh', 'sdfghjkl'),
('Akshay saini', 'asdfgh', 'sdfghjkl'),
('Akshay saini', 'Hasdf', 'asdfafasdf'),
('Sharad saini', 'Hello my self ', 'Sharad saini '),
('Sharad  saini', 'Here I am in after Login', 'Hellop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
