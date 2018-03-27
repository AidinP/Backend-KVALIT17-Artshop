-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2018 at 12:12 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordernumber` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordernumber`, `article`, `customer_name`, `email`, `phonenumber`, `adress`, `text`) VALUES
(13, 1, 'Mahmud Al', 'mahmud@gmail.com', 808008088, 'Nackademin', 'Ni får VG!'),
(17, 1, 'Mahmud Al', 'mahmud@gmail.com', 124235, 'asdff', 'Vg för er'),
(18, 4, 'Kim Y', 'kimy@gmail.com', 2147483647, 'Hejgatan', 'Tack för er sida!'),
(19, 2, 'Aidin P', 'aidinp@gmail.com', 75757575, 'Bästagatan 1', 'testar'),
(20, 1, 'Mahmud Al', 'mahmud@gmail.com', 2147483647, 'Nackademin', 'lgjjugkjgv'),
(21, 1, 'Test10', 'test@mail.com', 2147483647, 'testgatan', 'Testing testing'),
(22, 1, 'test40', 'test@mail.com', 4563573, 'Nackademin', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordernumber`),
  ADD KEY `aa` (`article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordernumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `aa` FOREIGN KEY (`article`) REFERENCES `product` (`article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
