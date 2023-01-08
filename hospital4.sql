-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 05:27 AM
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
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseas`
--

CREATE TABLE `diseas` (
  `id` int(11) NOT NULL,
  `disease_name` varchar(200) NOT NULL,
  `disease_symptoms` varchar(300) NOT NULL,
  `disid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseas`
--

INSERT INTO `diseas` (`id`, `disease_name`, `disease_symptoms`, `disid`) VALUES
(18, 'Cancer', 'Fatigue, Lump or area of thickening that can be felt under the skin.\r\nWeight changes, including unintended loss or gain.', '1'),
(19, 'Eye Care', 'red eye', '2'),
(20, 'Dengue', 'Fever', '3');

-- --------------------------------------------------------

--
-- Table structure for table `hospi`
--

CREATE TABLE `hospi` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `hosid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospi`
--

INSERT INTO `hospi` (`id`, `hospital_name`, `department`, `email`, `mobile`, `address`, `file`, `hosid`) VALUES
(30, 'Kmc hospital', 'Cancer', 'kmc@1234.com', '76789054322', 'maharajganj', '1653879208821.jpg', '1'),
(31, 'Ivy hospital', 'eye care', 'ivy@123gmail.com', '75756554545', 'mohali', '20220529180932_IMG_8294.JPG', '2'),
(32, 'Rahul hospital', 'Dengue', 'rahul@123.com', '65645454644', 'delhi', '20220529181234_IMG_8305.JPG', '3'),
(33, 'Fatima hospital', 'Cancer ', 'fatima@123gmail.com', '6464646467', 'mau', 'IMG20220528193142.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address`, `user_type`) VALUES
(2, 'Sampark', 'Jaiswal', 's@123.com', '12345', '6392254020', 'Dubari Madhuban Mau', 1),
(3, 'Rohit', 'Maurya', 'ro@1234', '123123', '8081224669', 'Chauri Chaura Gorakhpur', 1),
(5, 'Admin', 'Detail', 'r@1234.com', '12345', '8765894438', 'Maharajganj', 2),
(6, 'Rajiv', 'Gupta', 'r@123gmail.com', '11111', '557575757876', 'moholi', 1),
(13, 'Rahul', 'Singh', 's@123', '12345', '8081224669', 'Dubari', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseas`
--
ALTER TABLE `diseas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospi`
--
ALTER TABLE `hospi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseas`
--
ALTER TABLE `diseas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hospi`
--
ALTER TABLE `hospi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
