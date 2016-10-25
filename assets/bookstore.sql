-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2016 at 06:58 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bk_appointment`
--

CREATE TABLE IF NOT EXISTS `bk_appointment` (
  `bk_appointment_id` int(30) NOT NULL AUTO_INCREMENT,
  `bk_name` varchar(100) NOT NULL,
  `bk_company_name` varchar(250) NOT NULL,
  `bk_phone_no` int(100) NOT NULL,
  `bk_email` varchar(100) NOT NULL,
  `bk_appoint_date` datetime NOT NULL,
  `bk_time_zone` varchar(250) NOT NULL,
  `bk_ip_addr` varchar(250) NOT NULL,
  `bk_info` varchar(500) NOT NULL,
  PRIMARY KEY (`bk_appointment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `bk_appointment`
--

INSERT INTO `bk_appointment` (`bk_appointment_id`, `bk_name`, `bk_company_name`, `bk_phone_no`, `bk_email`, `bk_appoint_date`, `bk_time_zone`, `bk_ip_addr`, `bk_info`) VALUES
(1, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-22 08:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(2, 'ajith', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-22 00:00:00', 'Central', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(3, 'test', 'test', 2147483647, 'test@gmail.com', '2016-09-21 01:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(4, 'home', 'thayu', 2147483647, 'test@gmail.com', '2016-09-30 03:00:00', 'Hawaii-Aleutian', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(5, 'home', 'thayu', 2147483647, 'test@gmail.com', '2016-09-27 10:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(6, 'sara', 'sara', 1234567890, 'sara@velaninfo.com', '2016-09-19 00:00:00', 'Pacific', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(7, 'Ram', 'velan', 2147483647, 'ram.dev@velaninfo.com', '2016-09-22 09:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(8, 'Kingsly', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-30 00:00:00', 'Kolkata', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(9, 'ajith', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-27 09:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(10, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-27 23:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(11, 'ajith supramani', 'bala test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-30 04:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(12, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-11 08:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(13, 'ajith supramani', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-12 04:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(14, 'ajith supramani', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-12 04:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(15, 'Ram Kumar', 'Velan', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-11 06:00:00', 'Central', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(16, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-11 07:00:00', 'Central', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(17, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-31 15:00:00', 'Hawaii-Aleutian', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(18, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-10-31 15:00:00', 'Hawaii-Aleutian', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(19, 'ajith supramani', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-11-01 04:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(20, 'sathish', 'tresting', 2147483647, 'sathishkumar.testing@velaninfo.com', '2016-09-20 06:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(21, '           ', '     ', 2147483647, 'testingvelan@gmail.com', '2016-09-28 08:00:00', 'Central', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(22, 'SADSDS', '%!^@^&*&!', 2147483647, 'jockeyj100@yahoo.com', '2016-09-19 08:00:00', 'Pacific', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(23, 'dasda', '^&#', 2147483647, 'velan4tester@outlook.com', '2021-10-14 16:00:00', 'Hawaii-Aleutian', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(24, 'aasddsad', 'jkbsdjkfjkdsdfsdffsdfsf', 2147483647, 'adasdsadsadsadsadsadsasadbhsafjkkjfbsajkfjksafsajkfdskdfjsdlfjsdfsdfjsdlfsjadfjksdfjkafkjh@gmail.com', '2016-09-19 05:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(25, 'vino   kumar', 'VelanZ', 1234567899, 'testingvelan@gmail.com', '2018-01-20 04:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(26, 'vino     kumar', 'VelanZ', 2147483647, 'testingvelan@gmail.com', '2018-01-20 05:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(27, 'vidd', 'velan', 2147483647, 'testingvelan@gmail.com', '2016-09-19 07:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(28, 'fdfdfdf', 'velan', 2147483647, 'balaalab789@gmail.com', '2016-09-19 07:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(29, 'sdfsdf', 'fsdf', 2147483647, 'sslknsklkn@mail.com', '2016-09-19 08:00:00', 'Mountain', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(30, 'ssbjb', 'add', 2147483647, 'jsabjkaj@h.co', '2017-04-12 07:00:00', 'Central', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(31, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-20 05:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(32, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-29 12:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(33, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-22 07:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}'),
(34, 'test name', 'test company', 2147483647, 'ajith33supramani26595@gmail.com', '2016-09-22 07:00:00', 'Eastern', '115.112.71.222', 'a:14:{s:2:"as";s:55:"AS4755 TATA Communications formerly VSNL is Leading ISP";s:4:"city";s:7:"Chennai";s:7:"country";s:5:"India";s:11:"countryCode";s:2:"IN";s:3:"isp";s:19:"Tata Communications";s:3:"lat";d:13.083299999999999;s:3:"lon";d:80.283299999999997;s:3:"org";s:19:"Tata Communications";s:5:"query";s:14:"115.112.71.222";s:6:"region";s:2:"TN";s:10:"regionName";s:10:"Tamil Nadu";s:6:"status";s:7:"success";s:8:"timezone";s:12:"Asia/Kolkata";s:3:"zip";s:6:"600049";}');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `book_isbn` int(30) NOT NULL,
  `book_title` varchar(30) NOT NULL,
  `book_catagory` varchar(30) NOT NULL,
  `book_language` varchar(30) NOT NULL,
  `book_mrp` int(30) NOT NULL,
  `book_publisher_name` varchar(50) NOT NULL,
  `book_published_date` datetime NOT NULL,
  `book_posted_on` datetime NOT NULL,
  `book_modified_on` datetime NOT NULL,
  `book_logo` varchar(100) NOT NULL,
  `book_content_description` varchar(500) NOT NULL,
  `number_of_pages` int(30) NOT NULL,
  `number_of_copies` int(30) NOT NULL,
  `book_status` int(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `user_id`, `book_isbn`, `book_title`, `book_catagory`, `book_language`, `book_mrp`, `book_publisher_name`, `book_published_date`, `book_posted_on`, `book_modified_on`, `book_logo`, `book_content_description`, `number_of_pages`, `number_of_copies`, `book_status`) VALUES
(1, 3, 12345, 'Celinsha', 'romantic', 'korean', 1000, 'kseries', '2016-02-14 00:00:00', '2016-07-14 11:59:46', '0000-00-00 00:00:00', 'A-Cute-Leukemia-front-cover-boA-Cute-Leukemia-front-cover-book-page.jpg', 'love is  beautiful', 812, 2, 1),
(2, 2, 9876, 'Roshan', 'love ', 'malayalam', 1000, 'anarkali', '2016-04-01 00:00:00', '2016-07-14 12:02:28', '0000-00-00 00:00:00', 'Big-Hearted People Front Cover_Revised_JPEG.jpg', 'waiting for someone longtime', 2016, 3, 1),
(3, 5, 987654, 'anjali', 'comedy', 'malayalam', 1500, 'ennu ninta moitheen', '2016-07-14 00:00:00', '2016-07-14 02:59:40', '0000-00-00 00:00:00', 'book-of-love-cover-1.jpg', 'be happy ...', 267, 5, 0),
(4, 5, 987654, 'cutty', 'comedy', 'tamil', 1500, 'kseries', '2016-07-15 00:00:00', '2016-07-14 05:01:15', '0000-00-00 00:00:00', 'color_me_love____book_cover_by_moonxriver-d8wmi48.png.jpg', 'sdf trym', 812, 3, 1),
(5, 2, 32346, 'sweety', 'love ', 'malayalam', 1500, 'premam', '2016-07-15 00:00:00', '2016-07-14 05:18:19', '0000-00-00 00:00:00', 'cvr9781451609882_9781451609882_hr.jpg', 'love u...', 812, 2, 1),
(6, 2, 12345, 'Celinsha', 'crazy', 'malayalam', 1500, 'kseries', '2016-07-23 00:00:00', '2016-07-15 09:26:21', '0000-00-00 00:00:00', 'Sharpe''s_Siege_front_book_cover.jpg', 'bx hg', 812, 3, 1),
(7, 3, 2356, 'rajarani', 'comedy', 'tamil', 1250, 'aslin', '0000-00-00 00:00:00', '2016-07-20 12:58:44', '0000-00-00 00:00:00', 'Love_Does_book_cover.jpg', 'ery', 35, 5, 1),
(8, 1, 2356, 'rajarani', 'comedy', 'tamil', 1250, 'aslin', '0000-00-00 00:00:00', '2016-07-23 12:07:01', '0000-00-00 00:00:00', 'Front_Cover-682x1024.jpg', 'dh', 45, 2, 1),
(9, 3, 6543, 'love is god', 'horror', 'telugu', 500, 'bala enterprises', '2016-07-30 00:00:00', '2016-07-28 06:46:07', '0000-00-00 00:00:00', 'the-things-we-do-for-love-book-cover.jpg', 'World will change ...', 500, 5, 1),
(10, 3, 8123, 'The Sky', 'Children Fiction', 'English', 250, 'bala enterprises', '2016-07-30 00:00:00', '2016-07-28 07:03:38', '0000-00-00 00:00:00', 'front-cover.jpg', 'Good Manners..', 50, 10, 1),
(11, 2, 53467, 'Life is Gone', 'Feelings', 'malayalam', 1500, 'premam', '2016-08-13 00:00:00', '2016-08-20 09:45:55', '0000-00-00 00:00:00', 'life_s_gone_by_toxiccrack-d62c5ek.jpg', ' Its as if the world is continuing ', 50, 10, 1),
(12, 2, 2376811, 'cutyRash ', 'romantic', 'malayalam', 1500, 'premam', '2016-08-27 00:00:00', '2016-08-20 10:09:39', '0000-00-00 00:00:00', '10b83026975edf3c21edc64637e86f59.jpg', 'PHP is a server-side language', 150, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

CREATE TABLE IF NOT EXISTS `book_order` (
  `order_id` int(30) NOT NULL AUTO_INCREMENT,
  `trans_id` int(30) NOT NULL,
  `buyer_order_confirmation` int(10) NOT NULL,
  `seller_approval_status` int(10) NOT NULL,
  `packing_time` datetime NOT NULL,
  `dispatching_time` datetime NOT NULL,
  `order_status` int(30) NOT NULL,
  `estimated_delivery_time` date NOT NULL,
  `book_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `no_of_copies_buy` int(30) NOT NULL,
  `shipment_city_id` int(30) NOT NULL,
  `shipment_address` varchar(100) NOT NULL,
  `shipment_pin` int(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`order_id`, `trans_id`, `buyer_order_confirmation`, `seller_approval_status`, `packing_time`, `dispatching_time`, `order_status`, `estimated_delivery_time`, `book_id`, `user_id`, `no_of_copies_buy`, `shipment_city_id`, `shipment_address`, `shipment_pin`) VALUES
(1, 1, 1, 1, '2016-07-18 10:00:00', '0000-00-00 00:00:00', 4, '2016-07-24', 2, 1, 1, 2, '23,ghj city', 629125),
(2, 2, 1, 1, '2016-07-20 12:38:19', '0000-00-00 00:00:00', 4, '2016-08-01', 3, 4, 1, 3, '28,lovly park', 645970),
(3, 4, 1, 1, '2016-07-29 14:16:31', '0000-00-00 00:00:00', 4, '2016-08-19', 0, 0, 0, 1, '2,mezha theru', 620124),
(4, 5, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(5, 6, 1, 1, '2016-08-02 19:58:51', '2016-08-02 19:58:55', 4, '2016-08-31', 0, 0, 0, 1, '2,mezha theru', 620124),
(6, 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(7, 8, 1, 1, '2016-08-03 19:20:59', '2016-08-03 19:21:06', 4, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(8, 9, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(9, 10, 1, 1, '2016-08-03 18:47:52', '2016-08-03 18:49:02', 3, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(10, 11, 1, 1, '2016-08-25 16:20:15', '2016-08-25 16:20:20', 3, '0000-00-00', 0, 0, 0, 1, '2,mezha theru', 620124),
(11, 12, 1, 1, '2016-08-04 08:55:19', '2016-08-04 08:55:23', 4, '2016-08-25', 0, 0, 0, 1, 'clalen city,new south corner', 651201),
(12, 13, 1, 1, '2016-08-03 19:15:40', '2016-08-03 19:15:45', 4, '0000-00-00', 0, 0, 0, 1, 'clalen city,new south corner', 651201),
(13, 14, 1, 1, '2016-08-25 16:02:07', '0000-00-00 00:00:00', 2, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(14, 15, 1, 1, '2016-08-01 10:32:15', '2016-08-01 10:32:20', 4, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(15, 16, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(16, 17, 1, 1, '2016-08-04 14:28:55', '2016-08-04 14:29:00', 4, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(17, 18, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(18, 19, 1, 1, '2016-08-04 14:27:40', '2016-08-09 11:14:35', 4, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(19, 20, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(20, 21, 1, 1, '2016-08-09 11:20:18', '0000-00-00 00:00:00', 2, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(21, 22, 1, 1, '2016-08-24 18:46:16', '0000-00-00 00:00:00', 2, '2016-08-22', 0, 0, 0, 19, '5th,melvi street', 624405),
(22, 23, 1, 1, '0000-00-00 00:00:00', '2016-08-18 19:40:55', 4, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(23, 24, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(24, 25, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(25, 26, 1, 1, '2016-08-19 10:17:32', '0000-00-00 00:00:00', 2, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(26, 27, 1, 1, '2016-08-19 10:24:44', '0000-00-00 00:00:00', 2, '2016-08-11', 0, 0, 0, 19, '5th,melvi street', 624405),
(27, 28, 1, 1, '0000-00-00 00:00:00', '2016-08-18 17:12:58', 4, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(28, 29, 1, 1, '2016-08-24 18:49:40', '2016-08-24 18:49:44', 3, '2016-08-27', 0, 0, 0, 19, '5th,melvi street', 624405),
(29, 30, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(30, 31, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(31, 32, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(32, 33, 1, 1, '2016-08-25 16:00:46', '2016-08-25 16:01:01', 3, '2016-08-18', 0, 0, 0, 19, '5th,melvi street', 624405),
(33, 34, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(34, 35, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(35, 36, 1, 1, '0000-00-00 00:00:00', '2016-08-18 18:06:16', 3, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(36, 37, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(37, 38, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(38, 39, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(39, 40, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(40, 41, 1, 1, '2016-08-24 18:48:09', '0000-00-00 00:00:00', 2, '2016-08-17', 0, 0, 0, 19, '5th,melvi street', 624405),
(41, 42, 1, 1, '0000-00-00 00:00:00', '2016-08-24 18:47:02', 3, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(42, 43, 1, 1, '2016-08-24 18:49:05', '0000-00-00 00:00:00', 2, '2016-08-19', 0, 0, 0, 19, '5th,melvi street', 624405),
(43, 44, 1, 1, '2016-08-24 18:46:20', '0000-00-00 00:00:00', 2, '2016-08-19', 0, 0, 0, 19, '5th,melvi street', 624405),
(44, 45, 1, 1, '2016-08-25 16:00:53', '0000-00-00 00:00:00', 2, '2016-08-12', 0, 0, 0, 3, '21,south poul', 629201),
(45, 46, 1, 1, '2016-08-24 18:46:25', '0000-00-00 00:00:00', 2, '0000-00-00', 0, 0, 0, 3, '21,south poul', 629201),
(46, 47, 1, 1, '2016-08-24 18:46:09', '0000-00-00 00:00:00', 2, '2016-08-20', 0, 0, 0, 19, '5th,melvi street', 624405),
(47, 48, 1, 1, '2016-08-25 16:00:57', '2016-08-25 16:02:57', 4, '2016-08-31', 0, 0, 0, 19, '5th,melvi street', 624405),
(48, 49, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(49, 50, 1, 1, '2016-08-25 16:21:13', '2016-08-25 16:21:18', 4, '2016-08-26', 0, 0, 0, 19, '5th,melvi street', 624405),
(50, 51, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '0000-00-00', 0, 0, 0, 11, '22,tripol city', 651201),
(51, 52, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(52, 53, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(53, 54, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 2, '22,tripol city', 629201),
(54, 55, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 2, '22,tripol city', 629201),
(55, 56, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 2, '22,tripol city', 629201),
(56, 57, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 2, '22,tripol city', 629201),
(57, 58, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 3, '22,tripol city', 629201),
(58, 59, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 3, '22,tripol city', 629201),
(59, 60, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 12, '22,tripol city', 629201),
(60, 61, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(61, 62, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(62, 63, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(63, 64, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(64, 65, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(65, 66, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 1, '22,tripol city', 629201),
(66, 67, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(67, 68, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(68, 69, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(69, 70, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 3, '22,tripol city', 629201),
(70, 71, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405),
(71, 72, 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0000-00-00', 0, 0, 0, 19, '5th,melvi street', 624405);

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE IF NOT EXISTS `book_review` (
  `review_id` int(50) NOT NULL AUTO_INCREMENT,
  `book_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `review_title` varchar(100) NOT NULL,
  `review_message` varchar(500) NOT NULL,
  `book_rating` int(50) NOT NULL,
  `review_date` datetime NOT NULL,
  `review_status` int(50) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `book_review`
--

INSERT INTO `book_review` (`review_id`, `book_id`, `user_id`, `review_title`, `review_message`, `book_rating`, `review_date`, `review_status`) VALUES
(1, 7, 4, 'inform -inquiry', 'good', 4, '2016-08-20 06:52:55', 1),
(2, 4, 4, 'inform -inquiry', 'lovely', 3, '2016-08-20 06:56:39', 1),
(3, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 06:57:13', 1),
(4, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 06:59:33', 1),
(5, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 07:06:29', 1),
(6, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 07:09:24', 1),
(7, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 07:09:29', 1),
(8, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 07:09:30', 1),
(9, 4, 4, 'inform -inquiry', 'bad', 2, '2016-08-20 07:09:31', 1),
(10, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:09:56', 1),
(11, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:11:55', 1),
(12, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:12:36', 1),
(13, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:13:14', 1),
(14, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:13:56', 1),
(15, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:14:24', 1),
(16, 12, 4, 'inform -inquiry', 'good', 3, '2016-08-20 07:15:26', 1),
(17, 4, 4, 'inform -inquiry', 'very nice', 4, '2016-08-20 07:20:46', 0),
(18, 4, 4, 'inform -inquiry', 'very good', 4, '2016-08-20 07:21:10', 1),
(19, 12, 4, 'werwr', 'werwerwer', 4, '2016-08-20 07:26:06', 1),
(20, 3, 4, 'sdfsdfsd', 'sdfsdfdf', 3, '2016-08-20 07:26:30', 1),
(21, 5, 4, 'test ', 'good book', 4, '2016-08-22 05:09:19', 1),
(22, 10, 4, 'Boring', 'waste of money', 2, '2016-08-22 05:12:01', 1),
(23, 8, 4, 'Test Review', 'sdfsdf sdfsd fsdfsdf ', 4, '2016-08-22 06:06:03', 1),
(24, 2, 4, 'i disagree in some point of view', 'i disagree in some point of view', 3, '2016-08-24 06:24:41', 1),
(25, 4, 7, 'Test Review', 'test', 4, '2016-08-24 06:51:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE IF NOT EXISTS `city_master` (
  `city_id` int(30) NOT NULL AUTO_INCREMENT,
  `state_id` int(30) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `city_status` int(10) NOT NULL,
  `city_created_on` datetime NOT NULL,
  `city_modified_on` datetime NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `state_id`, `city_name`, `city_status`, `city_created_on`, `city_modified_on`) VALUES
(1, 1, 'wasington DC', 1, '2016-06-29 14:24:30', '0000-00-00 00:00:00'),
(2, 1, 'New york', 1, '2016-06-29 14:25:21', '0000-00-00 00:00:00'),
(3, 2, 'sydney', 1, '2016-07-06 15:04:03', '0000-00-00 00:00:00'),
(4, 1, 'nagercoil', 1, '2016-07-09 11:05:15', '0000-00-00 00:00:00'),
(5, 1, 'marthandam', 1, '2016-07-09 11:08:42', '0000-00-00 00:00:00'),
(6, 1, 'thiruvanathapuram', 1, '2016-07-09 11:21:36', '0000-00-00 00:00:00'),
(7, 2, 'elishabeth', 1, '2016-07-09 11:23:19', '0000-00-00 00:00:00'),
(11, 3, 'rajkot', 1, '2016-07-09 11:36:24', '0000-00-00 00:00:00'),
(12, 4, 'mysuru', 1, '2016-07-09 11:37:50', '0000-00-00 00:00:00'),
(13, 5, 'kochi', 1, '2016-07-09 11:38:34', '0000-00-00 00:00:00'),
(16, 3, 'laroten', 1, '2016-07-09 12:46:58', '0000-00-00 00:00:00'),
(17, 3, 'laroten1', 1, '2016-07-09 12:47:19', '0000-00-00 00:00:00'),
(18, 3, 'varanasi', 1, '2016-07-11 10:14:02', '0000-00-00 00:00:00'),
(19, 11, 'santfrancis', 1, '2016-07-11 10:51:19', '0000-00-00 00:00:00'),
(20, 12, 'samptest', 1, '2016-07-11 03:39:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE IF NOT EXISTS `country_master` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) NOT NULL,
  `country_status` int(10) NOT NULL,
  `country_created_on` datetime NOT NULL,
  `country_modified_on` datetime NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`country_id`, `country_name`, `country_status`, `country_created_on`, `country_modified_on`) VALUES
(1, 'america', 1, '2016-06-29 14:23:32', '0000-00-00 00:00:00'),
(2, 'australia', 1, '2016-07-04 15:40:28', '0000-00-00 00:00:00'),
(3, 'brazil', 1, '2016-07-04 15:44:34', '0000-00-00 00:00:00'),
(4, 'china', 0, '2016-07-04 15:42:21', '0000-00-00 00:00:00'),
(5, 'colombia', 1, '2016-07-04 11:21:00', '0000-00-00 00:00:00'),
(6, 'india', 0, '2016-07-08 02:18:50', '0000-00-00 00:00:00'),
(7, 'africa', 0, '2016-07-08 02:37:16', '0000-00-00 00:00:00'),
(8, 'test', 0, '2016-07-08 02:40:16', '0000-00-00 00:00:00'),
(9, 'korea', 1, '2016-07-08 02:46:03', '0000-00-00 00:00:00'),
(10, 'japan', 1, '2016-07-08 02:47:11', '0000-00-00 00:00:00'),
(11, 'maleysia', 0, '2016-07-08 02:51:57', '0000-00-00 00:00:00'),
(12, 'pakistan', 1, '2016-07-08 02:54:29', '0000-00-00 00:00:00'),
(13, 'afhanistan', 1, '2016-07-08 02:55:13', '0000-00-00 00:00:00'),
(14, 'sri lanka', 1, '2016-07-08 03:35:23', '0000-00-00 00:00:00'),
(15, 'zimbabey', 0, '2016-07-08 04:02:29', '0000-00-00 00:00:00'),
(16, 'zombia', 0, '2016-07-08 04:05:45', '0000-00-00 00:00:00'),
(17, 'zohosia', 1, '2016-07-08 04:07:09', '0000-00-00 00:00:00'),
(18, 'vatalin', 1, '2016-07-09 12:02:57', '0000-00-00 00:00:00'),
(19, 'vatalin1', 1, '2016-07-09 12:03:12', '0000-00-00 00:00:00'),
(20, 'chilli', 1, '2016-07-11 09:27:13', '0000-00-00 00:00:00'),
(21, 'mali', 1, '2016-07-11 09:29:17', '0000-00-00 00:00:00'),
(30, 'Lx', 1, '2016-07-11 02:07:28', '0000-00-00 00:00:00'),
(31, 'samp', 1, '2016-07-11 03:37:17', '0000-00-00 00:00:00'),
(32, 'United States of America', 1, '2016-07-11 03:41:07', '0000-00-00 00:00:00'),
(33, 'costarica', 1, '2016-08-29 03:32:52', '0000-00-00 00:00:00'),
(34, 'rajjkooot', 1, '2016-08-29 03:35:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_parent_id` int(30) NOT NULL DEFAULT '0',
  `menu_label` varchar(30) NOT NULL,
  `menu_url` varchar(30) NOT NULL DEFAULT '#',
  `menu_order` int(30) NOT NULL,
  `menu_status` int(10) NOT NULL,
  `menu_created_on` datetime NOT NULL,
  `menu_modified_on` datetime NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_parent_id`, `menu_label`, `menu_url`, `menu_order`, `menu_status`, `menu_created_on`, `menu_modified_on`) VALUES
(24, 0, 'Home', '', 0, 1, '2016-07-13 04:20:08', '2016-07-13 05:34:15'),
(25, 0, 'Catagories', 'catagories.html', 0, 1, '2016-07-13 04:20:35', '0000-00-00 00:00:00'),
(26, 0, 'Purchase', 'purchase.html', 0, 1, '2016-07-13 04:20:46', '0000-00-00 00:00:00'),
(27, 26, 'Transaction', 'transaction.html', 0, 0, '2016-07-13 04:21:06', '0000-00-00 00:00:00'),
(28, 0, 'About Us', 'about_us.html', 0, 1, '2016-07-13 04:21:17', '0000-00-00 00:00:00'),
(29, 24, 'New Books', '', 0, 1, '2016-07-13 04:21:39', '2016-07-13 05:34:35'),
(30, 29, 'aaa', '', 0, 1, '2016-07-13 04:22:04', '2016-07-13 05:34:47'),
(31, 29, 'bbb', 'aaa.php', 0, 1, '2016-07-13 04:22:20', '2016-07-13 05:40:45'),
(32, 30, 'ccc', 'ccc', 0, 1, '2016-07-13 04:22:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(50) NOT NULL AUTO_INCREMENT,
  `order_id` int(50) NOT NULL,
  `notification_msg` varchar(500) NOT NULL,
  `notification_status` int(30) NOT NULL,
  `notification_time` datetime NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `order_id`, `notification_msg`, `notification_status`, `notification_time`) VALUES
(1, 12, 'order confirmed by seler', 0, '2016-08-18 16:39:29'),
(44, 35, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-18 06:02:18'),
(45, 35, 'Your Order for the book Roshan( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:03:50'),
(46, 35, 'Your Order for the book Roshan( Quantity :2 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-18 18:06:16'),
(47, 26, 'Your Order for the book Ramayan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:10:16'),
(48, 26, 'Your Order for the book Ramayan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:11:00'),
(49, 26, 'Your Order for the book Ramayan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:12:36'),
(50, 22, 'Your Order for the book Ramayan( Quantity :3 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:16:12'),
(51, 21, 'Your Order for the book Roshan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:16:45'),
(52, 25, 'Your Order for the book sweety( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-18 18:17:55'),
(53, 36, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-18 07:14:07'),
(54, 37, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-18 07:34:05'),
(55, 38, 'Your Order for the book love is god is sent successfully', 1, '2016-08-18 07:34:05'),
(56, 22, 'Your Order for the book Ramayan( Quantity :3 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-18 19:40:55'),
(57, 39, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-19 10:21:11'),
(58, 40, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-19 10:21:11'),
(59, 41, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-19 10:22:29'),
(60, 41, 'Your Order for the book Roshan( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 10:22:55'),
(61, 40, 'Your Order for the book Roshan( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 13:29:03'),
(62, 37, 'Your Order for the book Celinsha( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 13:35:53'),
(63, 42, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-19 01:41:17'),
(64, 42, 'Your Order for the book Roshan( Quantity :6 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:25:16'),
(65, 38, 'Your Order for the book love is god( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:25:35'),
(66, 39, 'Your Order for the book Celinsha( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:26:08'),
(67, 36, 'Your Order for the book Celinsha( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:26:15'),
(68, 32, 'Your Order for the book anjali( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:26:27'),
(69, 30, 'Your Order for the book rajarani( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 14:26:39'),
(70, 11, 'Your Order for the book Celinsha( Quantity :1 ) is deliverd to your desired address and Thank you for selecting books of us', 0, '2016-08-19 14:28:22'),
(71, 7, 'Your Order for the book Celinsha( Quantity :1 ) is deliverd to your desired address and Thank you for selecting books of us', 0, '2016-08-19 14:28:52'),
(72, 43, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-19 03:01:42'),
(73, 43, 'Your Order for the book Roshan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 15:06:19'),
(74, 31, 'Your Order for the book rajarani( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-19 16:55:37'),
(75, 44, 'Your Order for the book anjali is sent successfully', 1, '2016-08-20 09:33:34'),
(76, 45, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-20 09:33:34'),
(77, 45, 'Your Order for the book Roshan( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-20 09:35:21'),
(78, 22, 'Your Order for the book Life is Gone( Quantity :3 ) is deliverd to your desired address and Thank you for selecting books of us', 1, '2016-08-20 09:56:42'),
(79, 46, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-24 05:37:42'),
(80, 47, 'Your Order for the book cutty is sent successfully', 1, '2016-08-24 06:00:01'),
(81, 48, 'Your Order for the book rajarani is sent successfully', 1, '2016-08-24 06:15:02'),
(82, 49, 'Your Order for the book cutty is sent successfully', 1, '2016-08-24 06:15:02'),
(83, 49, 'Your Order for the book cutty( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:43:40'),
(84, 48, 'Your Order for the book rajarani( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:44:18'),
(85, 47, 'Your Order for the book cutty( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:44:29'),
(86, 46, 'Your Order for the book Celinsha( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:44:35'),
(87, 44, 'Your Order for the book anjali( Quantity :1 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:44:45'),
(88, 29, 'Your Order for the book rajarani( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-24 18:44:52'),
(89, 41, 'Your Order for the book Roshan( Quantity :2 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-24 18:47:02'),
(90, 28, 'Your Order for the book Celinsha( Quantity :1 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-24 18:49:44'),
(91, 50, 'Your Order for the book love is god is sent successfully', 1, '2016-08-24 06:53:51'),
(92, 50, 'Your Order for the book love is god( Quantity :1 ) is Approved by seller and you will receive your order as soon', 0, '2016-08-25 15:51:12'),
(93, 17, 'Your Order for the book cutty( Quantity :2 ) is Approved by seller and you will receive your order as soon', 1, '2016-08-25 15:55:47'),
(94, 10, 'Your Order for the book cutty( Quantity :2 ) is Approved by seller and you will receive your order as soon', 0, '2016-08-25 15:55:54'),
(95, 32, 'Your Order for the book anjali( Quantity :1 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-25 16:01:01'),
(96, 12, 'Your Order for the book anjali( Quantity :1 ) is deliverd to your desired address and Thank you for selecting books of us', 0, '2016-08-25 16:01:58'),
(97, 47, 'Your Order for the book cutty( Quantity :1 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-25 16:02:57'),
(98, 47, 'Your Order for the book cutty( Quantity :1 ) is deliverd to your desired address and Thank you for selecting books of us', 1, '2016-08-25 16:03:32'),
(99, 10, 'Your Order for the book cutty( Quantity :2 ) is dispatched by seller and you will receive your order soon', 0, '2016-08-25 16:20:20'),
(100, 49, 'Your Order for the book cutty( Quantity :1 ) is dispatched by seller and you will receive your order soon', 1, '2016-08-25 16:21:18'),
(101, 49, 'Your Order for the book cutty( Quantity :1 ) is deliverd to your desired address and Thank you for selecting books of us', 1, '2016-08-25 16:21:33'),
(102, 51, 'Your Order for the book rajarani is sent successfully', 1, '2016-08-26 12:46:35'),
(103, 52, 'Your Order for the book Life is Gone is sent successfully', 1, '2016-08-26 12:46:35'),
(104, 39, 'Your Order for the book ( Quantity : ) is Approved by seller and you will receive your order as soon', 1, '2016-08-29 15:45:00'),
(105, 27, 'Your Order for the book Life is Gone( Quantity :1 ) is reached your nearer city and you will receive your order soon', 1, '0000-00-00 00:00:00'),
(106, 1, 'Your Order for the book Roshan( Quantity :2 ) is reached your nearer city and you will receive your order soon', 0, '0000-00-00 00:00:00'),
(107, 55, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-29 05:17:57'),
(108, 56, 'Your Order for the book Roshan is sent successfully', 1, '2016-08-29 05:17:57'),
(109, 57, 'Your Order for the book The Sky is sent successfully', 1, '2016-08-29 05:26:14'),
(110, 58, 'Your Order for the book cutty is sent successfully', 1, '2016-08-29 05:26:14'),
(111, 59, 'Your Order for the book The Sky is sent successfully', 1, '2016-08-29 05:26:43'),
(112, 64, 'Your Order for the book rajarani is sent successfully', 1, '2016-08-29 05:46:30'),
(113, 65, 'Your Order for the book Celinsha is sent successfully', 1, '2016-08-29 05:48:49'),
(114, 66, 'Your Order for the book rajarani is sent successfully', 1, '2016-08-29 05:53:09'),
(115, 67, 'Your Order for the book The Sky is sent successfully', 1, '2016-08-29 05:53:43'),
(116, 68, 'Your Order for the book The Sky is sent successfully', 1, '2016-08-29 05:55:29'),
(117, 69, 'Your Order for the book cutty is sent successfully', 1, '2016-08-29 05:57:34'),
(118, 70, 'Your Order for the book rajarani is sent successfully', 1, '2016-08-29 06:03:08'),
(119, 1, 'Your Order for the book Roshan( Quantity :2 ) is deliverd to your desired address and Thank you for selecting books of us', 0, '2016-09-17 11:47:17'),
(120, 71, 'Your Order for the book Life is Gone is sent successfully', 1, '2016-10-15 10:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `order_status_id` int(30) NOT NULL AUTO_INCREMENT,
  `order_status` varchar(30) NOT NULL,
  PRIMARY KEY (`order_status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_status_id`, `order_status`) VALUES
(1, 'Pending'),
(2, 'In Progress'),
(3, 'Dispatched'),
(4, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE IF NOT EXISTS `payment_master` (
  `payment_id` int(30) NOT NULL AUTO_INCREMENT,
  `payment_status` varchar(30) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment_master`
--

INSERT INTO `payment_master` (`payment_id`, `payment_status`) VALUES
(1, 'Cash on Deleivery'),
(2, 'Credit/Debit Card'),
(3, 'Online Banking'),
(4, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `process_record`
--

CREATE TABLE IF NOT EXISTS `process_record` (
  `process_rec_id` int(30) NOT NULL AUTO_INCREMENT,
  `shipment_id` int(30) NOT NULL,
  `buyer_review` varchar(100) NOT NULL,
  `buyer_star_staus` int(30) NOT NULL,
  `seller_review` varchar(100) NOT NULL,
  PRIMARY KEY (`process_rec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `process_record`
--

INSERT INTO `process_record` (`process_rec_id`, `shipment_id`, `buyer_review`, `buyer_star_staus`, `seller_review`) VALUES
(1, 1, 'quality of product is good and quick delivery ....', 4, 'good customer seller support');

-- --------------------------------------------------------

--
-- Table structure for table `seller_buyer_record`
--

CREATE TABLE IF NOT EXISTS `seller_buyer_record` (
  `sb_rec_id` int(30) NOT NULL AUTO_INCREMENT,
  `process_rec_id` int(30) NOT NULL,
  `total_no_book_bought` int(30) NOT NULL,
  `total_amount_paid` int(30) NOT NULL,
  `total_book_sold` int(30) NOT NULL,
  `total_amount_got` int(30) NOT NULL,
  PRIMARY KEY (`sb_rec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE IF NOT EXISTS `shipment` (
  `shipment_id` int(30) NOT NULL AUTO_INCREMENT,
  `order_id` int(30) NOT NULL,
  `shipping_company_name` varchar(50) NOT NULL,
  `shipping_company_cno` int(100) NOT NULL,
  `on_hand_time` datetime NOT NULL,
  `city_reach_status` int(30) NOT NULL,
  `city_reach_time` datetime NOT NULL,
  `on_delivery_time` datetime NOT NULL,
  `delivery_status` int(30) NOT NULL,
  PRIMARY KEY (`shipment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `order_id`, `shipping_company_name`, `shipping_company_cno`, `on_hand_time`, `city_reach_status`, `city_reach_time`, `on_delivery_time`, `delivery_status`) VALUES
(1, 1, 'Non stop couriers', 2147483647, '2016-07-20 10:20:46', 1, '2016-07-19 17:38:08', '2016-09-17 11:47:17', 1),
(2, 2, 'chenni''s amirta', 899768684, '2016-07-19 15:24:34', 1, '2016-08-03 19:38:53', '2016-08-03 19:38:58', 1),
(3, 11, 'aq', 76456, '2016-08-03 19:04:30', 0, '0000-00-00 00:00:00', '2016-08-19 14:28:22', 1),
(4, 11, 'siva corears', 2147483647, '2016-08-03 19:06:52', 0, '0000-00-00 00:00:00', '2016-08-19 14:28:22', 1),
(5, 11, 'rtttx', 43386, '2016-08-03 19:16:03', 0, '0000-00-00 00:00:00', '2016-08-19 14:28:22', 1),
(6, 11, 'www', 36547658, '2016-08-03 19:21:19', 0, '0000-00-00 00:00:00', '2016-08-19 14:28:22', 1),
(7, 11, 'redbus', 56789054, '2016-08-04 08:55:36', 0, '0000-00-00 00:00:00', '2016-08-19 14:28:22', 1),
(8, 18, 'eert', 2536, '2016-08-04 14:27:27', 1, '2016-08-09 11:04:17', '2016-08-09 11:15:07', 1),
(9, 18, 'rert', 346547, '2016-08-04 14:28:03', 1, '2016-08-09 11:04:22', '2016-08-09 11:15:07', 1),
(10, 16, 'gh8', 76959, '2016-08-04 14:29:10', 1, '2016-08-18 17:39:45', '2016-08-18 17:54:57', 1),
(11, 18, 'red', 321423, '2016-08-04 14:30:49', 1, '2016-08-18 17:58:58', '2016-08-09 11:15:07', 1),
(12, 27, 'red bus', 497580, '2016-08-18 17:13:15', 1, '2016-08-29 15:48:40', '2016-08-18 17:18:52', 1),
(13, 1, 'reer', 984765, '2016-08-18 18:06:29', 1, '2016-08-29 15:49:18', '0000-00-00 00:00:00', 0),
(14, 26, 'red', 23446, '2016-08-18 19:41:07', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 40, 'ram shipping', 5409486, '2016-08-24 18:47:25', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 28, 'raj', 2345647, '2016-08-24 18:49:52', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 32, 'red bus', 8764956, '2016-08-25 16:01:15', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 12, 'red bus', 5476658, '2016-08-25 16:03:10', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 49, 'red bus', 968467, '2016-08-25 16:20:31', 0, '0000-00-00 00:00:00', '2016-08-25 16:21:33', 1),
(20, 12, 'Red Bus', 53667, '2016-08-25 16:21:29', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE IF NOT EXISTS `state_master` (
  `state_id` int(30) NOT NULL AUTO_INCREMENT,
  `country_id` int(30) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `state_status` int(10) NOT NULL,
  `state_created_on` datetime NOT NULL,
  `state_modified_on` datetime NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `country_id`, `state_name`, `state_status`, `state_created_on`, `state_modified_on`) VALUES
(1, 1, 'vivekanader theru', 1, '2016-06-29 14:28:20', '0000-00-00 00:00:00'),
(2, 2, 'queens_land', 1, '2016-07-06 15:04:05', '0000-00-00 00:00:00'),
(3, 1, 'texas', 1, '2016-07-09 09:42:58', '0000-00-00 00:00:00'),
(4, 1, 'celensia', 1, '2016-07-09 09:44:48', '0000-00-00 00:00:00'),
(5, 1, 'ronaldbourg', 0, '2016-07-09 09:45:41', '0000-00-00 00:00:00'),
(6, 2, 'manchester', 1, '2016-07-09 09:49:27', '0000-00-00 00:00:00'),
(7, 1, 'texas', 1, '2016-07-09 12:22:28', '0000-00-00 00:00:00'),
(8, 1, 'texas', 1, '2016-07-09 12:24:13', '0000-00-00 00:00:00'),
(9, 1, 'vivekanader theru', 1, '2016-07-09 12:29:01', '0000-00-00 00:00:00'),
(10, 3, 'reo', 1, '2016-07-09 03:40:34', '0000-00-00 00:00:00'),
(11, 3, 'rio', 1, '2016-07-09 03:44:35', '0000-00-00 00:00:00'),
(12, 31, 'sapmcity', 1, '2016-07-11 03:38:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, '3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'External Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `trans_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `book_id` int(30) NOT NULL,
  `no_of_copies_buy` int(30) NOT NULL,
  `cc_type` varchar(50) NOT NULL,
  `cc_no` int(50) NOT NULL,
  `date_of_buy` datetime NOT NULL,
  `payment_id` int(30) NOT NULL,
  `trans_status` int(30) NOT NULL,
  `sec_code` int(10) NOT NULL,
  `exp_date` date NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `user_id`, `book_id`, `no_of_copies_buy`, `cc_type`, `cc_no`, `date_of_buy`, `payment_id`, `trans_status`, `sec_code`, `exp_date`) VALUES
(1, 1, 2, 2, 'visa', 12345, '2016-07-15 15:20:16', 1, 1, 0, '0000-00-00'),
(2, 4, 3, 2, 'mastercard', 23676, '2016-07-15 18:12:33', 4, 1, 0, '0000-00-00'),
(3, 2, 1, 1, 'visa', 2345, '2016-07-27 12:47:05', 2, 1, 1234, '2016-07-14'),
(4, 2, 1, 1, '', 0, '2016-07-28 08:34:18', 1, 1, 0, '0000-00-00'),
(5, 2, 4, 2, '', 0, '2016-07-28 08:34:18', 4, 1, 0, '0000-00-00'),
(6, 2, 1, 1, '', 0, '2016-07-28 08:39:30', 4, 1, 0, '0000-00-00'),
(7, 2, 4, 2, '', 0, '2016-07-28 08:39:30', 4, 1, 0, '0000-00-00'),
(8, 2, 1, 1, '', 0, '2016-07-28 09:20:58', 1, 1, 0, '0000-00-00'),
(9, 2, 4, 2, '', 0, '2016-07-28 09:20:58', 1, 1, 0, '0000-00-00'),
(10, 2, 1, 1, '', 0, '2016-07-28 09:28:07', 1, 1, 0, '0000-00-00'),
(11, 2, 4, 2, '', 0, '2016-07-28 09:28:07', 1, 1, 0, '0000-00-00'),
(12, 14, 1, 1, '', 0, '2016-07-28 03:46:21', 1, 1, 0, '0000-00-00'),
(13, 14, 3, 1, '', 0, '2016-07-28 03:46:21', 1, 1, 0, '0000-00-00'),
(14, 4, 3, 1, '', 0, '2016-07-28 05:22:20', 1, 1, 0, '0000-00-00'),
(15, 4, 1, 1, '', 0, '2016-07-29 06:54:44', 1, 1, 0, '0000-00-00'),
(16, 4, 4, 2, '', 0, '2016-07-29 06:54:44', 1, 1, 0, '0000-00-00'),
(17, 4, 11, 5, '', 0, '2016-08-04 02:25:19', 1, 1, 0, '0000-00-00'),
(18, 4, 4, 2, '', 0, '2016-08-04 02:25:19', 1, 1, 0, '0000-00-00'),
(19, 4, 6, 5, '', 0, '2016-08-04 02:25:19', 1, 1, 0, '0000-00-00'),
(20, 4, 9, 3, '', 0, '2016-08-04 02:25:19', 1, 1, 0, '0000-00-00'),
(21, 4, 2, 3, '', 0, '2016-08-04 02:25:19', 1, 1, 0, '0000-00-00'),
(22, 4, 2, 1, '', 0, '2016-08-18 02:03:12', 1, 1, 0, '0000-00-00'),
(23, 4, 11, 3, '', 0, '2016-08-18 02:10:35', 1, 1, 0, '0000-00-00'),
(24, 4, 9, 1, '', 0, '2016-08-18 02:10:35', 1, 1, 0, '0000-00-00'),
(25, 4, 7, 1, '', 0, '2016-08-18 02:44:27', 1, 1, 0, '0000-00-00'),
(26, 4, 5, 1, '', 0, '2016-08-18 02:44:27', 1, 1, 0, '0000-00-00'),
(27, 4, 11, 1, '', 0, '2016-08-18 02:47:22', 1, 1, 0, '0000-00-00'),
(28, 4, 11, 1, '', 0, '2016-08-18 02:48:22', 1, 1, 0, '0000-00-00'),
(29, 4, 6, 1, '', 0, '2016-08-18 02:57:31', 1, 1, 0, '0000-00-00'),
(30, 4, 7, 2, '', 0, '2016-08-18 02:59:36', 1, 1, 0, '0000-00-00'),
(31, 4, 7, 2, '', 0, '2016-08-18 02:59:54', 1, 1, 0, '0000-00-00'),
(32, 4, 7, 2, '', 0, '2016-08-18 03:00:43', 1, 1, 0, '0000-00-00'),
(33, 4, 3, 1, '', 0, '2016-08-18 03:01:30', 1, 1, 0, '0000-00-00'),
(34, 4, 2, 1, '', 0, '2016-08-18 03:01:30', 1, 1, 0, '0000-00-00'),
(35, 4, 2, 1, '', 0, '2016-08-18 04:16:55', 1, 1, 0, '0000-00-00'),
(36, 4, 2, 2, '', 0, '2016-08-18 06:02:18', 1, 0, 0, '0000-00-00'),
(37, 4, 1, 1, '', 0, '2016-08-18 07:14:07', 1, 1, 0, '0000-00-00'),
(38, 4, 1, 1, '', 0, '2016-08-18 07:34:05', 1, 1, 0, '0000-00-00'),
(39, 4, 9, 1, '', 0, '2016-08-18 07:34:05', 1, 1, 0, '0000-00-00'),
(40, 4, 1, 2, '', 0, '2016-08-19 10:21:11', 1, 1, 0, '0000-00-00'),
(41, 4, 2, 2, '', 0, '2016-08-19 10:21:11', 1, 1, 0, '0000-00-00'),
(42, 4, 2, 2, '', 0, '2016-08-19 10:22:29', 1, 1, 0, '0000-00-00'),
(43, 4, 2, 6, '', 0, '2016-08-19 01:41:17', 1, 1, 0, '0000-00-00'),
(44, 4, 2, 1, '', 0, '2016-08-19 03:01:42', 1, 1, 0, '0000-00-00'),
(45, 7, 3, 1, '', 0, '2016-08-20 09:33:34', 1, 1, 0, '0000-00-00'),
(46, 7, 2, 1, '', 0, '2016-08-20 09:33:34', 1, 1, 0, '0000-00-00'),
(47, 4, 6, 1, '', 0, '2016-08-24 05:37:42', 1, 1, 0, '0000-00-00'),
(48, 4, 4, 1, '', 0, '2016-08-24 06:00:01', 1, 1, 0, '0000-00-00'),
(49, 4, 7, 2, '', 0, '2016-08-24 06:15:02', 1, 1, 0, '0000-00-00'),
(50, 4, 4, 1, '', 0, '2016-08-24 06:15:02', 1, 1, 0, '0000-00-00'),
(51, 6, 9, 1, '', 0, '2016-08-24 06:53:51', 1, 1, 0, '0000-00-00'),
(52, 4, 8, 1, '', 0, '2016-08-26 12:46:35', 1, 1, 0, '0000-00-00'),
(53, 4, 11, 1, '', 0, '2016-08-26 12:46:35', 1, 1, 0, '0000-00-00'),
(54, 4, 1, 1, 'visa', 4235636, '2016-08-29 05:16:07', 2, 1, 6477, '2016-08-13'),
(55, 4, 2, 1, 'visa', 4235636, '2016-08-29 05:16:07', 2, 1, 6477, '2016-08-13'),
(56, 4, 1, 1, '', 0, '2016-08-29 05:17:57', 1, 1, 0, '0000-00-00'),
(57, 4, 2, 1, '', 0, '2016-08-29 05:17:57', 1, 1, 0, '0000-00-00'),
(58, 4, 10, 1, '', 0, '2016-08-29 05:26:14', 1, 1, 0, '0000-00-00'),
(59, 4, 4, 1, '', 0, '2016-08-29 05:26:14', 1, 1, 0, '0000-00-00'),
(60, 4, 10, 1, '', 0, '2016-08-29 05:26:43', 1, 1, 0, '0000-00-00'),
(61, 4, 7, 1, 'visa', 76987, '2016-08-29 05:27:17', 2, 1, 789070, '2016-08-27'),
(62, 4, 7, 1, 'visa', 234546, '2016-08-29 05:39:02', 2, 1, 56756, '2016-08-13'),
(63, 4, 7, 1, 'visa', 2435, '2016-08-29 05:40:56', 2, 1, 5547, '2016-08-04'),
(64, 4, 7, 1, 'visa', 346534, '2016-08-29 05:41:48', 2, 1, 3465, '2016-08-27'),
(65, 4, 7, 1, 'visa', 465356, '2016-08-29 05:46:30', 2, 1, 3646, '2016-08-27'),
(66, 4, 1, 1, 'visa', 4356, '2016-08-29 05:48:49', 2, 1, 457, '2016-08-26'),
(67, 4, 8, 1, 'visa', 54547, '2016-08-29 05:53:09', 2, 1, 4776, '2016-08-19'),
(68, 4, 10, 1, 'visa', 657, '2016-08-29 05:53:43', 2, 1, 5657, '2016-08-19'),
(69, 4, 10, 1, 'visa', 4547, '2016-08-29 05:55:29', 2, 1, 567587, '2016-08-26'),
(70, 4, 4, 1, 'visa', 5677, '2016-08-29 05:57:34', 2, 1, 56887, '2016-08-26'),
(71, 4, 7, 1, 'visa', 3656, '2016-08-29 06:03:08', 2, 1, 4567, '2016-08-21'),
(72, 4, 11, 1, '', 0, '2016-10-15 10:37:46', 1, 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_role_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobno` int(11) NOT NULL,
  `city_id` int(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pin` int(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_status` int(10) NOT NULL,
  `user_created_on` datetime NOT NULL,
  `user_modified_on` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_role_id`, `name`, `email`, `mobno`, `city_id`, `address`, `pin`, `password`, `user_status`, `user_created_on`, `user_modified_on`) VALUES
(1, 1, 'bala', 'aaa15646@gmail.com', 2147483647, 3, '2/61,karuparai', 629204, 'bala', 1, '2016-06-29 03:56:44', '2016-08-29 03:03:56'),
(2, 3, 'ajith', 'ajith1323@gmail.com', 1234567890, 1, '2,mezha theru', 620124, '1234', 1, '2016-07-07 07:21:13', '2016-07-09 06:38:27'),
(3, 3, 'raja', 'ajith11323@gmail.com', 1234567890, 19, 'retro colony', 632321, 'raja', 1, '2016-07-11 10:52:55', '0000-00-00 00:00:00'),
(4, 2, 'robin', 'robin1323@gmail.com', 2147483647, 19, '5th,melvi street', 624405, 'robin', 1, '2016-07-11 04:16:57', '0000-00-00 00:00:00'),
(5, 3, 'brabin', 'brabin323@gmail.com', 2147483647, 3, 'cape road jn', 621443, 'brabin', 1, '2016-07-11 05:46:26', '0000-00-00 00:00:00'),
(6, 2, 'Ajit', 'aaa15646@gmail.com', 2147483647, 11, '22,tripol city', 651201, 'sathy', 1, '2016-07-21 03:43:33', '0000-00-00 00:00:00'),
(7, 2, 'siva', 'siva123@gmail.com', 2147483647, 3, '21,south poul', 629201, 'siva', 1, '2016-07-22 06:42:45', '0000-00-00 00:00:00'),
(8, 2, 'kumar', 'kumar345@gmail.com', 2147483647, 3, '21,trt street', 620211, 'kumar', 1, '2016-07-22 07:01:34', '0000-00-00 00:00:00'),
(9, 2, 'aaa', 'aaaa123@gmail.com', 2147483647, 1, '22,tripol city', 651201, '1234', 1, '2016-07-23 09:02:26', '0000-00-00 00:00:00'),
(10, 2, 'aaa', 'ajithsupramani26595@gmail.com', 1234567890, 5, '22,tripol city', 629201, 'qww', 1, '2016-07-23 09:19:10', '2016-08-29 03:32:23'),
(11, 2, 'rema', 'rema121@gmail.com', 2147483647, 1, '22,tripol city', 651201, 'rema', 0, '2016-07-23 10:17:05', '0000-00-00 00:00:00'),
(12, 2, 'aaa', 're432@gmail.com', 2147483647, 1, '22,tripol city', 651201, '12', 1, '2016-07-23 10:26:55', '0000-00-00 00:00:00'),
(13, 2, 'siva', 'siva99@gmail.com', 1234567890, 1, '22,tripol city', 651201, 'siva', 1, '2016-07-23 10:40:20', '0000-00-00 00:00:00'),
(14, 2, 'aaa', 'ajith33454supramani26595@gmail.com', 2147483647, 1, '22,tripol city', 629201, '123', 1, '2016-08-04 11:46:15', '0000-00-00 00:00:00'),
(15, 3, 'aaa', 'ajith330supramani26595@gmail.com', 2147483647, 1, '123', 629201, '1', 1, '2016-08-04 12:07:41', '0000-00-00 00:00:00'),
(16, 3, 'aaa', 'ajith353supramani26595@gmail.com', 2147483647, 1, '1', 629201, '1', 1, '2016-08-04 12:09:53', '0000-00-00 00:00:00'),
(17, 3, 'aaa', 'ajiths33supramani26595@gmail.com', 2147483647, 1, '22,tripol city', 629201, '1', 1, '2016-08-04 12:12:40', '0000-00-00 00:00:00'),
(18, 3, 'fsdf', 'sdfs@fsdf.dfg', 54645654, 1, 'sdfsdfsdf', 345345, '12345', 1, '2016-08-04 12:33:31', '0000-00-00 00:00:00'),
(19, 3, 'sdf', 'sdfsdfsdf@dg.hj', 2147483647, 1, 'asdasd', 345435, '12345', 1, '2016-08-04 12:41:09', '0000-00-00 00:00:00'),
(20, 3, 'aaa', 'ajith33468supramani26595@gmail.com', 2147483647, 1, '22,tripol city', 629201, '12', 1, '2016-08-04 12:49:31', '0000-00-00 00:00:00'),
(21, 2, 'aaa', 'ajith33surrpramani26595@gmail.com', 2147483647, 2, '22,tripol city', 629201, '12', 1, '2016-08-04 12:55:51', '0000-00-00 00:00:00'),
(22, 2, 'MADHAN', 'madhan1234@gmail.com', 2147483647, 1, '', 0, 'madhan', 1, '2016-08-29 03:12:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_role_name` varchar(50) NOT NULL,
  `user_role_status` int(3) NOT NULL,
  `user_role_created_on` datetime NOT NULL,
  `user_role_modified_on` datetime NOT NULL,
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`user_role_id`, `user_role_name`, `user_role_status`, `user_role_created_on`, `user_role_modified_on`) VALUES
(1, 'Admin', 1, '2016-06-28 07:33:35', '2016-07-01 05:27:11'),
(2, 'Buyer', 1, '2016-06-28 07:33:48', '0000-00-00 00:00:00'),
(3, 'Seller', 1, '2016-06-28 09:36:09', '0000-00-00 00:00:00'),
(4, 'company', 0, '2016-06-28 11:02:35', '2016-06-28 11:03:10'),
(5, 'super admin', 1, '2016-07-21 11:34:50', '2016-08-29 03:20:36');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
