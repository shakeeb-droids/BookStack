-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 18, 2021 at 06:20 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstack`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_id` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Password`) VALUES
('ADMIN123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `Book_id` int(11) NOT NULL AUTO_INCREMENT,
  `Book_name` varchar(30) NOT NULL,
  `ISBN_no` varchar(15) NOT NULL,
  `Author` char(30) NOT NULL,
  `Category` enum('Academic','Story','Recipe','Autobiography') NOT NULL,
  `Publisher` char(30) NOT NULL,
  `Price` float NOT NULL,
  `Stock` int(10) NOT NULL,
  PRIMARY KEY (`Book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_id`, `Book_name`, `ISBN_no`, `Author`, `Category`, `Publisher`, `Price`, `Stock`) VALUES
(1, 'Wings Of Fire', '1345678901', 'A P J Abdul Kalam', 'Autobiography', 'Jaico Publishing House', 499, 17),
(2, 'Paleo Baking at Home', '1345678902', 'Michele Rosen', 'Recipe', 'Westland Publications', 250, 39),
(3, 'Pythone For Beginners', '1345678903', 'Denny Novikov', 'Academic', 'Jaico Publishing House', 799, 13),
(4, 'The Story Of Cinderella', '1345678904', 'Leo Tolstoy', 'Story', 'Westland Publications.', 599, 19),
(5, 'The AudaCity Of Hope', '1234321567', 'Barack Obama', 'Autobiography', 'Hachette India', 499, 25),
(6, 'C Programming', '1234565432', 'Dr. N.B.V.', 'Academic', 'Roli Books', 759, 38),
(7, 'Italian Cooking', '1123212321', 'H. P. Lovecraft', 'Recipe', 'Rupa Publications', 299, 35),
(8, 'Java', '1212123456', 'James Patterson', 'Academic', 'Rupa Publications', 899, 15),
(9, 'Michelle Obama', '1123456789', 'Michelle Obama', 'Autobiography', 'Jaico Publishing House', 999, 42),
(10, 'Baking Basics', '1232123432', 'Dorie Greenspan', 'Recipe', 'Jaico Publishing House', 599, 10),
(11, 'Harry Potter', '1345678907', 'J.K.R.', 'Story', 'Westland Publications', 499, 20),
(12, 'Barack Obama', '1234321566', 'Barack Obama', 'Autobiography', 'Hachette India', 659, 30),
(13, 'Advanced C++', '1234565439', 'Dr. N.B.V.', 'Academic', 'Roli Books', 399, 55),
(14, 'The Soup Book', '1123212320', 'H. P. Lovecraft', 'Recipe', 'Rupa Publications', 149, 22),
(15, 'Charles Chaplin', '1212123458', 'Charles Chaplin', 'Autobiography', 'Jaico Publishing House', 299, 25),
(16, 'The Everyday Vegan', '1123456784', 'H. P. Lovecraft.', 'Recipe', 'Jaico Publishing House', 198, 15),
(17, 'Data Structures and Algorithms', '1232123433', 'Pearson', 'Academic', 'Hachette India', 899, 7),
(18, 'Over The Deep', '1212121234', 'S. Wilcoxson', 'Story', 'Westland Publications', 345, 3),
(19, 'The Ultimate Vegan Cookbook', '2111345678', 'H. P. Lovecraft.', 'Recipe', 'Westland Publications', 99, 26),
(20, 'Web Technology', '1121213456', 'Atul Kahate', 'Academic', 'Westland Publications', 499, 15);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `Cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_Price` int(10) NOT NULL,
  `status` enum('Added to Cart','Purchased') NOT NULL,
  PRIMARY KEY (`Cart_id`),
  KEY `User_id` (`User_id`,`Book_id`),
  KEY `Book_id` (`Book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `User_id` int(11) NOT NULL AUTO_INCREMENT,
  `First_name` char(20) NOT NULL,
  `Last_name` char(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Phone_number` varchar(10) NOT NULL,
  `Address` varchar(30) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`User_id`, `First_name`, `Last_name`, `Email`, `Password`, `Phone_number`, `Address`) VALUES
(3, 'Shakeeb', 'Shahid', 'shakeeb@gmail.com', 'shakeeb123', '1234567890', 'Kolkata'),
(4, 'Ayasha', 'Zaman', 'ayasha@gmail.com', 'ayasha123', '1123456789', 'Kolkata'),
(5, 'Afreena', 'Yeasmin', 'afreena@gmail.com', 'afreena123', '1112345678', 'Birbhum'),
(6, 'Asif', 'Hasan', 'asif@gmail.com', 'asif123', '1212345678', 'Birbhum'),
(7, 'Khairul', 'Islam', 'khairul@gmail.com', 'khairul123', '1234543212', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `publisher` (
  `Publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `Publisher_name` char(30) NOT NULL,
  `Publisher_contact` varchar(10) NOT NULL,
  `Publisher_address` varchar(30) NOT NULL,
  PRIMARY KEY (`Publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`Publisher_id`, `Publisher_name`, `Publisher_contact`, `Publisher_address`) VALUES
(1, 'Jaico Publishing House', '1230000000', 'Kolkata'),
(2, 'Westland Publications', '1230000009', 'Kolkata'),
(3, 'Hachette India', '1230000007', 'Delhi'),
(4, 'Rupa Publications', '1230000008', 'Bangalore'),
(5, 'Roli Books', '1230000006', 'Lucknow'),
(6, 'Aleph Book Company', '1234657829', 'Goa'),
(7, 'HarperCollins Publishers', '1234657829', 'kolkata'),
(8, 'Penguin Random House', '7893657829', 'Goa');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `Purchase_id` varchar(20) NOT NULL,
  `Book_id` int(20) NOT NULL,
  `User_id` int(20) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Total_Price` int(20) NOT NULL,
  PRIMARY KEY (`Purchase_id`,`Book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Purchase_id`, `Book_id`, `User_id`, `Quantity`, `Total_Price`) VALUES
('PID61184b7a93902', 6, 5, 2, 1518),
('PID61184b7a93902', 20, 5, 5, 2495),
('PID61184bd0beb92', 14, 3, 2, 298),
('PID61184bd0beb92', 17, 3, 3, 2697),
('PID61184c3b13a1c', 4, 4, 1, 599),
('PID61184c3b13a1c', 9, 4, 3, 2997),
('PID61184c3b13a1c', 14, 4, 1, 149),
('PID61184c3b13a1c', 18, 4, 5, 1725),
('PID6118b17c90272', 1, 5, 3, 1497),
('PID6118b17c90272', 3, 5, 5, 3995),
('PID6118b35b1b6e5', 20, 3, 5, 2495),
('PID611a95db7e9e3', 18, 6, 2, 690);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `Transaction_id` varchar(20) NOT NULL,
  `Purchase_id` varchar(20) NOT NULL,
  `Card_number` varchar(30) NOT NULL,
  `Pay_method` char(30) NOT NULL,
  `Total_Price` varchar(10) NOT NULL,
  `Billing_address` varchar(20) NOT NULL,
  `Transaction_timestamp` timestamp NOT NULL,
  PRIMARY KEY (`Transaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Transaction_id`, `Purchase_id`, `Card_number`, `Pay_method`, `Total_Price`, `Billing_address`, `Transaction_timestamp`) VALUES
('BSTK61184b7b2a4e1', 'PID61184b7a93902', '0000000000000000', 'Pay-On-Delivery', '4013', 'Goa', '2021-08-14 23:02:19'),
('BSTK61184bd191f46', 'PID61184bd0beb92', '8768546312345432', 'Debit Card/Credit Card', '2995', 'Chennai', '2021-08-14 23:03:45'),
('BSTK61184c3bcdd64', 'PID61184c3b13a1c', '0000000000000000', 'Pay-On-Delivery', '5470', 'Mumbai', '2021-08-14 23:05:31'),
('BSTK6118b17da8598', 'PID6118b17c90272', '0000000000000000', 'Pay-On-Delivery', '5492', 'Delhi', '2021-08-15 06:17:33'),
('BSTK6118b35b94a99', 'PID6118b35b1b6e5', '8768546312345432', 'Debit Card/Credit Card', '2495', 'Kolkata', '2021-08-15 06:25:31'),
('BSTK611a95dc4045b', 'PID611a95db7e9e3', '0000000000000000', 'Pay-On-Delivery', '690', 'Jaipur', '2021-08-16 16:44:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `customer` (`User_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Book_id`) REFERENCES `book` (`Book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
