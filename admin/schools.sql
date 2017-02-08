 -- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 10:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `now`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
`acc_type` varchar(30) NOT NULL,
  `cause` varchar(30) NOT NULL,
  `car_type` varchar(30) NOT NULL,
`car_name` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
`location_description` text NOT NULL,
  
  `season` varchar(30) NOT NULL,
  `day_time` varchar(30) NOT NULL,
    `acc_date` date NOT NULL,
`Total_Death` int(11) NOT NULL,
  `Below_12` int(11) NOT NULL,
  `Twelve_To_19` int(11) NOT NULL,
  `Above_19` int(11) NOT NULL,  
`driver_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,

  `age` int(11) NOT NULL,
  
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `acc_type`, `cause`,`car_type`,`car_name`, `location`, `location_description`, `season`, `day_time`, `acc_date`, `Total_Death`, `Below_12`, `Twelve_To_19`, `Above_19`, `driver_name`, `gender`,`age`) VALUES
(1, 'Fatal', 'drunk driver', 'Private', 'Honda CRV', 'Beight Bridge RD', '2KM FROM LANACK', 'WINTER', 'MID NIGHT', '2017-01-03', '4', '2', '1', '1', 'Andrew Muteiwa', 'Male', '26'),
(2, 'Minor', 'Head on', 'Public', 'Bus', 'Mutare RD', '3KM FROM RUWA', 'WINTER', 'MID AFTERNOON', '2017-01-13', '40', '20', '13', '7', 'Nyasha Mashwapurani', 'Female', '28'),
(3, 'Critical', 'Heavy Rains', 'Private', 'Nissan Xtrail', 'Mutare RD', '3KM FROM RUWA', 'SUMMER', 'EARLY MORNING', '2017-01-13', '6', '4', '1', '1', 'Tone Gokomere', 'Female', '19');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `filename`, `type`, `size`, `caption`) VALUES
(4, 'High-school-students-in-classroom-Shutterstock-800x430.jpg', 'image/jpeg', 121967, 'Students in class'),
(5, 'www.usnewsqq.com.jpg', 'image/jpeg', 69981, 'Students during class break'),
(6, '_DSC1191.jpg', 'image/jpeg', 120221, 'Our graduates for the year 2014'),
(8, 'www.usnewsxx.com.jpg', 'image/jpeg', 59170, 'school children');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news` text NOT NULL,
  `visible` int(11) NOT NULL,
  `news_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news`, `visible`, `news_date`) VALUES
(3, 'Start of the Term', 'The term has started', 1, '2015-10-03'),
(5, 'Term has started', 'sakkfldsfhjdlksaf;ajdf', 0, '2015-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(15) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `content`) VALUES
(1, 'Home', 'Welcome home our School A, we are here to ensure that the best education is made available to the entire nation.........'),
(2, 'About Us', 'Welcome to about us '),
(3, 'School Tour', 'Welcome to our '),
(4, 'Gallery', 'Welcome to Gall'),
(5, 'School Events', 'Welcome to Miss'),
(6, 'Latest News', 'Welcome to Late'),
(7, 'Contact Us', 'Welcome to cont');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacherID` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `contact_details` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacherID`, `password`, `description`, `name`, `surname`, `Email`, `contact_details`) VALUES
(1, 'T00', '199419191', 'Has been working at this for years', 'Prince', 'Ncube', 'princencu@yahoo.com', '0712344308');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`) VALUES
(1, 'Prince', 'Ncube', 'user1', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
