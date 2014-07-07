-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2014 at 11:54 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'Kyle', 'Kyle@gmail.com', 'kylie', ''),
(3, 'Jenny Wagner', 'Jenny@Wagner.com', 'jenwag', ''),
(4, 'Tom', 'tom@tom.com', 'tommyboy', ''),
(5, 'Jeff', 'jeffs@gmail.com', 'passboy', ''),
(6, 'Mary', 'mary@gmail.com', 'pass', ''),
(7, 'Scott', 'scott@gmail.com', 'scotty', ''),
(8, 'Barry Sanders', 'barrysanders@gmail.com', 'boss', ''),
(9, 'Joey', 'joey@friends.com', 'joessss', ''),
(10, 'Michelle Quan', 'Quan@gmail.com', 'jeffs', ''),
(11, 'Munching', 'munches@gmail.com', 'food', ''),
(12, 'Dan', 'dannyboy@gmail.com', 'wordy', ''),
(13, 'Nell', 'nell@dale.com', 'nelly', ''),
(14, 'Lewis', 'cs@lewis.com', 'password', ''),
(15, 'June', 'june@gmail.com', 'passing1', ''),
(16, 'Mark Wahlberg', 'mark@wahlberg.com', '1234', ''),
(17, 'Ella', 'ella@gmail.com', '12345', ''),
(18, 'Arnold', 'arnold@gmail.com', 'terminator', ''),
(19, 'Ronald', 'ronald@reagan.com', 'pass', ''),
(20, 'jimmy carter', 'jimmy@carter.com', 'jimm', ''),
(21, 'Richard Sherman', 'richard@sherman.com', 'bigrich', ''),
(22, 'Isaiah', 'timm', 'timm', ''),
(23, 'gideon', 'gideon@gmail.com', 'jeffy', ''),
(24, 'Jorge', 'jorge@gmail.com', 'passing', ''),
(25, 'Michaelangelo', 'turtles@gmail.com', '1234', ''),
(26, 'rockybalboa', 'rocky@gmail.com', '84e0991a380d2a451e9a7787e56e2b53', ''),
(27, 'terminator', 'terminator@gmail.com', 'b4dad0fe5fbef2c0e24d9db1cc69e5a2', ''),
(28, 'Me', 'me@me.com', '1a1dc91c907325c69271ddf0c944bc72', ''),
(29, 'Mee', 'mee@me.com', '8ba3ce9c508590c8ccc3bb3968825456', ''),
(30, 'Arnie', 'arnie@gmail.com', 'c0abce97ba910a48236ef05171231d71', ''),
(31, 'Arnie1', 'arnie1@gmail.com', 'fd673b286795bb266624792c0ddbefb7', ''),
(32, 'Arnie2', 'arnie2@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', ''),
(33, 'ty', 'ty@gmail.com', '962012d09b8170d912f0669f6d7d9d07', ''),
(34, 'Russell Wilson', 'russ@gmail.com', '77953d83ae17905030ecf91790509ae7', ''),
(35, 'RussArnie', 'russarnie@russ.com', '1a1dc91c907325c69271ddf0c944bc72', ''),
(36, 'russ3', 'russ3@gmail.com', 'bc6efd5cf60bdcf1eda5b2148b671902', ''),
(37, 'Joseph', 'joseph@gmail.com', 'ecdeda2d8f9d71adf19897e5a8c4602d', ''),
(38, 'timmy3', 'timmy3@gmail.com', 'dc8827cda9d5e7beaac554f05edfe7bb', ''),
(39, 'timmy7', 'timmy7@gmail.com', '3f3bb601c51bb4df03f1d4c3a0ab6a5b', ''),
(40, 'timmy9', 'timmy9@gmail.com', '776804d6a3e9e8bfa3cfb8d51666b572', ''),
(41, 'jeff1', 'jeff1@gmail.com', '2ad08a206bc2142b400397b36360d188', ''),
(42, 'mikey1', 'mikey1@gmail.com', 'cea35144cd3b2105d7155531dfa29726', ''),
(43, 'mikey2', 'mikey2@gmail.com', 'bcb3cc6382b71272af0a39498c6408ce', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
