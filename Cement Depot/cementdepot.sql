-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2015 at 05:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cementdepot`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `UId` int(10) NOT NULL,
  `PId` int(10) NOT NULL,
  `CId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`CId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE IF NOT EXISTS `login_admin` (
  `admin_Id` varchar(20) DEFAULT NULL,
  `admin_pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`admin_Id`, `admin_pass`) VALUES
('crpatel13@gmail.com', 'bapasitaram7');

-- --------------------------------------------------------

--
-- Table structure for table `login_client`
--

CREATE TABLE IF NOT EXISTS `login_client` (
  `U_Id` int(10) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `User_Id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  PRIMARY KEY (`U_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login_client`
--

INSERT INTO `login_client` (`U_Id`, `First_name`, `Last_name`, `User_Id`, `Password`, `Contact_No`) VALUES
(9, 'rohit', 'Lname', 'rohit44u@gmail.com', 'rohit', '2147483647'),
(10, 'mohit', 'Lname', 'mohit44u@gmail.com', 'mohit', '9825562608'),
(11, 'urvish', 'patel', 'urvish@gmail.com', 'urvish', '9876544567'),
(12, 'abc', 'def', 'hello@gmail.com', 'hello', '1234556789'),
(13, 'abc', 'dsda', 'ok@gmail.com', 'hello', '7573759321'),
(14, 'gfd', 'hf', 'fjgf@gmail.com', 'gjfg', '658658687'),
(15, 'dsd', 'fvx', 'df@gmail.com', 'dfsf', '4533213'),
(16, 'hello', 'ds', 'hello@ok.com', 'chirag', '83479327'),
(17, 'ashh', 'nadb', 'cr@patel.com', 'ok', '8920989'),
(18, 'hkg', 'gjc', 'ghghf@hello.com', 'abcd', '7856845'),
(19, 'hzj', 'jxzk', 'sdjhs@ok.com', 'abcde', '3243223'),
(20, 'dcds', 'fgfds', 'sdf@szfd.com', 'asdf', '544353'),
(21, 'fsdf', '', '', '', ''),
(22, 'hello', 'hasjh', 'hello@hello.com', 'abcd', '3829372'),
(23, 'chirag', 'patel', 'hello@jhdjs.com', 'asdf', '3989829'),
(24, 'dsfds', 'fsf', 'dfsf@aa.com', 'asdf', '3423423'),
(25, 'dzz', 'dcs', 'dasf@ad.com', 'asdfg', '321234'),
(26, 'sfs', 'sdf', 'asdsa@sfd.com', 'asdf', 'zad'),
(27, 'sfds', 'dsas', 'dsfds@ada.com', 'asdf', '32432'),
(28, 'chirag', 'patel', 'chirag@chirag.com', 'chirag', '1234567890'),
(29, 'ok', 'ok', 'ok@hello.com', 'hello', '9876543210'),
(30, 'priyanka', 'hirpara', 'priyanka@gmail.com', 'priyanka', '1234567890'),
(31, 'vishwesh', 'kasodariya', 'kasodariyavishwesh2@', 'vishwesh', '9998949581'),
(32, 'vishwesh', 'kasodariya', 'vishwesh@gmail.com', 'vishwesh', '9998949581'),
(33, 'urvish', 'panchotiya', 'urvishpanchotiya@gma', 'urvish', '9999999999'),
(34, 'urvish', 'panchotiya', 'urvishpanchotiya@gma', 'urvish', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `UId` int(10) NOT NULL,
  `PId` int(10) NOT NULL,
  `OId` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`OId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`UId`, `PId`, `OId`, `name`, `price`) VALUES
(0, 0, 1, 'ambuja', 300),
(0, 0, 2, 'ambuja', 300),
(0, 0, 3, 'lime', 500),
(0, 0, 4, 'chirag', 500),
(0, 0, 5, 'ultra tech', 500),
(0, 0, 6, 'abc', 600),
(0, 0, 7, 'edc', 345),
(0, 0, 8, 'ambuja', 350),
(0, 45, 9, 'ambuja', 350),
(0, 45, 10, 'ambuja', 350),
(0, 45, 11, 'ambuja', 350),
(0, 45, 12, 'ambuja', 350),
(0, 45, 13, 'ambuja', 350),
(0, 45, 14, '', 0),
(0, 45, 15, '', 0),
(0, 45, 16, 'ambuja', 350),
(0, 45, 17, 'ambuja', 350),
(0, 45, 18, 'ambuja', 350),
(0, 45, 19, 'ambuja', 350),
(0, 45, 20, 'ambuja', 350),
(0, 45, 21, 'ambuja', 350),
(0, 45, 22, 'ambuja', 350),
(0, 45, 23, 'ambuja', 350),
(0, 45, 24, 'ambuja', 350),
(9, 45, 25, 'ambuja', 350),
(9, 45, 26, 'ambuja', 350),
(9, 45, 27, 'ambuja', 350),
(9, 45, 28, 'ambuja', 350),
(9, 45, 29, 'ambuja', 350),
(9, 45, 30, 'ambuja', 350),
(9, 45, 31, 'ambuja', 350),
(9, 45, 32, 'ambuja', 350),
(9, 45, 33, 'ambuja', 350),
(9, 45, 34, 'ambuja', 350),
(9, 45, 35, 'ambuja', 350),
(9, 45, 36, 'ambuja', 350),
(9, 45, 37, 'ambuja', 350),
(9, 45, 38, 'ambuja', 350),
(9, 45, 39, 'ambuja', 350),
(9, 45, 40, 'ambuja', 350),
(9, 45, 41, 'ambuja', 350),
(9, 45, 42, 'ambuja', 350),
(9, 45, 43, 'ambuja', 350),
(9, 45, 44, 'ambuja', 350),
(9, 45, 45, 'ambuja', 350),
(9, 45, 46, 'ambuja', 350),
(9, 46, 47, 'ultra tech', 250),
(9, 45, 48, 'ambuja cement', 360),
(10, 45, 49, 'ambuja cement', 360),
(10, 46, 50, 'jaypee', 400),
(10, 45, 51, 'ambuja cement', 360),
(32, 46, 52, 'jaypee', 400),
(32, 46, 53, 'jaypee', 400),
(32, 46, 54, 'jaypee', 400),
(32, 47, 55, 'vishwesh', 0),
(9, 46, 56, 'jaypee', 400),
(9, 47, 57, 'vishwesh', 0),
(9, 46, 58, 'jaypee', 400);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PId` int(10) NOT NULL AUTO_INCREMENT,
  `PName` varchar(25) NOT NULL,
  `PPrice` int(5) NOT NULL,
  `PImage` varchar(100) NOT NULL,
  PRIMARY KEY (`PId`),
  UNIQUE KEY `PId` (`PId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `PName`, `PPrice`, `PImage`) VALUES
(46, 'jaypee', 400, 'upload/jaypee.jpg'),
(47, 'vishwesh', 0, 'upload/Koala.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
