-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2016 at 03:37 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bakeshop`
--
CREATE DATABASE IF NOT EXISTS `bakeshop`;

USE `bakeshop`;

CREATE TABLE IF NOT EXISTS `items` (
  `code` varchar(5) NOT NULL,
  `descr` varchar(45) NOT NULL,
  `cost` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `um` varchar(45) DEFAULT NULL,
  `suppcode` varchar(5) DEFAULT NULL,
  `stqty` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `code_UNIQUE` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`code`, `descr`, `cost`, `qty`, `um`, `suppcode`, `stqty`) VALUES
('123', 'Brownie', '12.00', 231, 'pc', 'ABC', 213),
('321', 'Cake', '99.25', 31, 'pc', '231', 0),
('412', 'Cookie', '12.00', 23, 'pc', '123', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
