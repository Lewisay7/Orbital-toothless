-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2022 at 09:12 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calstrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

DROP TABLE IF EXISTS `exercise`;
CREATE TABLE IF NOT EXISTS `exercise` (
  `exercise_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `exercisetype` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `n_min` double DEFAULT NULL,
  PRIMARY KEY (`exercise_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`exercise_id`, `user_id`, `date`, `exercisetype`, `n_min`) VALUES
(1, 8, '2022-07-14', 'Basketball', 2),
(2, 8, '2022-07-14', 'Basketball', 2),
(3, 8, '2022-07-14', 'Basketball', 2),
(4, 8, '2022-07-14', 'Basketball', 2),
(5, 8, '2022-07-14', 'Basketball', 2),
(6, 8, '2022-07-14', 'Basketball', 2),
(7, 8, '2022-07-14', 'Basketball', 2),
(8, 8, '2022-07-14', 'Basketball', 2),
(9, 8, '2022-07-15', 'Lazy BumBum', 100);

-- --------------------------------------------------------

--
-- Table structure for table `exer_list`
--

DROP TABLE IF EXISTS `exer_list`;
CREATE TABLE IF NOT EXISTS `exer_list` (
  `exercisetype` varchar(20) COLLATE utf8_bin NOT NULL,
  `cals_per_min` double DEFAULT NULL,
  PRIMARY KEY (`exercisetype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `exer_list`
--

INSERT INTO `exer_list` (`exercisetype`, `cals_per_min`) VALUES
('Running', 10),
('Basketball', 8),
('Football', 6),
('Sit Up', 4),
('Lazy BumBum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `foodtype` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `n_grams` double DEFAULT NULL,
  PRIMARY KEY (`food_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `user_id`, `date`, `foodtype`, `n_grams`) VALUES
(1, 8, '2022-07-14', 'Rice', 1),
(2, 8, '2022-07-14', 'Chicken', 11),
(3, 8, '2022-07-14', 'Chicken', 11),
(4, 8, '2022-07-14', 'Chicken', 11),
(5, 8, '2022-07-14', 'Chicken', 11),
(6, 8, '2022-07-14', 'Chicken', 11),
(10, 8, '2022-07-14', 'Rice', 4),
(11, 8, '2022-07-14', 'Rice', 4),
(12, 8, '1970-01-01', 'Chicken', 1),
(13, 8, '2022-07-15', 'Rice', 6);

-- --------------------------------------------------------

--
-- Table structure for table `food_list`
--

DROP TABLE IF EXISTS `food_list`;
CREATE TABLE IF NOT EXISTS `food_list` (
  `foodtype` varchar(20) COLLATE utf8_bin NOT NULL,
  `cals_per_gram` double DEFAULT NULL,
  PRIMARY KEY (`foodtype`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `food_list`
--

INSERT INTO `food_list` (`foodtype`, `cals_per_gram`) VALUES
('Rice', 1),
('Chicken', 1.5),
('Peanut', 0.9),
('Salad', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'shabi', '123'),
(3, 'hello', '123'),
(8, 'eee', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
