-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 01:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradewithmak`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdashboard`
--

CREATE TABLE `userdashboard` (
  `fname` varchar(30) NOT NULL,
  `usr_nm` varchar(30) NOT NULL,
  `adr` varchar(100) NOT NULL,
  `phn_no` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdashboard`
--

INSERT INTO `userdashboard` (`fname`, `usr_nm`, `adr`, `phn_no`, `email`, `dob`) VALUES
('Shreyash', 'Shreyashk123', 'Plot no 136, Nagarjun colony, Nara road, Nagpur', '9730017600', 'shreyashk2498@gmail.', '02/04/1998'),
('Abhinav', 'abhi007', 'Kapil nagar', '9970773284', 'a007@gmail.com', '23/071998');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
