-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2015 at 01:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `snapshot`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ctn` bigint(10) NOT NULL,
  `birthday` date NOT NULL,
  `account_no` int(12) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `online` enum('yes','no','','') NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `billing_type` varchar(100) NOT NULL,
  `installment_plans` varchar(100) DEFAULT NULL,
  `last_bill_amount` decimal(10,2) NOT NULL,
  `bill_due_date` date NOT NULL,
  `last_adjustment` date NOT NULL,
  `bill_cycle` int(2) NOT NULL,
  `minutes_left` int(5) NOT NULL,
  `minutes_total` int(5) NOT NULL,
  `messaging` int(5) NOT NULL,
  `data_left` int(5) NOT NULL,
  `data_total` int(5) NOT NULL,
  `contract` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `ctn`, `birthday`, `account_no`, `account_type`, `online`, `payment_type`, `billing_type`, `installment_plans`, `last_bill_amount`, `bill_due_date`, `last_adjustment`, `bill_cycle`, `minutes_left`, `minutes_total`, `messaging`, `data_left`, `data_total`, `contract`) VALUES
(1, 'Jennifer Ash', 2147483647, '2013-08-01', 2147483647, 'IRU', 'yes', 'AutoPay DIRECT DEBIT', 'Paper', '', '0.00', '2015-03-22', '1970-01-01', 3, 4712, 10000, 99999, 2, 5, '2015-08-27'),
(2, 'Jen Dunham', 1325468462, '2014-06-01', 2147483647, 'IRU', 'yes', 'AutoPay DIRECT DEBIT', 'Paperless', '', '1.42', '2015-03-23', '1970-01-01', 3, 4712, 10000, 99999, 2, 5, '2015-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
`id` int(5) NOT NULL,
  `account_id` int(5) NOT NULL,
  `device_id` varchar(20) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `ctn` bigint(12) NOT NULL,
  `imei` bigint(20) NOT NULL,
  `contract_end` date NOT NULL,
  `os` varchar(20) NOT NULL,
  `standard` enum('yes','no','','') NOT NULL,
  `standard_date` date DEFAULT NULL,
  `early` enum('yes','no','','') NOT NULL,
  `early_date` date DEFAULT NULL,
  `installment` enum('yes','no','','') NOT NULL,
  `installment_date` date DEFAULT NULL,
  `shared` enum('yes','no','','') NOT NULL,
  `shared_date` date DEFAULT NULL,
  `warranty_date` date NOT NULL,
  `insurance` enum('yes','no','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `account_id`, `device_id`, `device_name`, `ctn`, `imei`, `contract_end`, `os`, `standard`, `standard_date`, `early`, `early_date`, `installment`, `installment_date`, `shared`, `shared_date`, `warranty_date`, `insurance`) VALUES
(1, 1, 'Samsung SGH-i337', 'Samsung Galaxy S4', 2316200919, 356567056814732, '2015-08-27', 'Android', 'yes', NULL, 'no', '2015-08-28', 'yes', NULL, 'yes', NULL, '2014-09-09', 'yes'),
(2, 1, 'iPhone 6', 'iPhone 6', 2316200917, 123467056814732, '2015-08-27', 'iOS', 'no', '2015-09-28', 'no', '2015-12-28', 'yes', NULL, 'yes', NULL, '2014-10-09', 'yes'),
(3, 2, 'iPhone 6', 'iPhone 6', 2316200917, 123467056814732, '2015-08-27', 'iOS', 'no', '2015-09-28', 'no', '2015-12-28', 'yes', NULL, 'yes', NULL, '2014-10-09', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
