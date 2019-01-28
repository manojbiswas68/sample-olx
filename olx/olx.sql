-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 09:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olx`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `product_id` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `cond` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fname` varchar(40) NOT NULL,
  `nitc_email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `product_id` int(11) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `manf` varchar(40) NOT NULL,
  `cond` varchar(40) NOT NULL,
  `yop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`product_id`, `mname`, `manf`, `cond`, `yop`) VALUES
(29, 'dell434', 'dell', 'average', '2018-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `txt` varchar(100) NOT NULL,
  `email_from` varchar(40) NOT NULL,
  `email_to` varchar(40) NOT NULL,
  `a_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`txt`, `email_from`, `email_to`, `a_id`) VALUES
('dcdcdc', 'manoj@gmail.com', 'manishkartiks@gmail.com', 0),
('gfhgj', 'manoj@gmail.com', 'manishkartiks@gmail.com', 0),
('asxsxs', 'manoj@gmail.com', 'manishkartiks@gmail.com', 0),
('kcndkcndkc', 'manishkartiks@gmail.com', 'manoj@gmail.com', 0),
('sdcdsc', 'manoj@gmail.com', 'manishkartiks@gmail.com', 0),
('sxsxsx', 'manoj@gmail.com', 'manishkartiks@gmail.com', 25),
('sxscmdl,cmdl', 'manoj@gmail.com', 'manishkartiks@gmail.com', 25),
('sdcd', 'manoj@gmail.com', 'manishkartiks@gmail.com', 25),
('sdcdsc', 'manoj@gmail.com', 'manishkartiks@gmail.com', 25),
('dvcdfvfdv', 'manoj@gmail.com', 'manishkartiks@gmail.com  ', 0),
('sdcdc', 'manoj@gmail.com', 'manishkartiks@gmail.com  ', 0),
('xsxsxs', 'manishkartiks@gmail.com  ', 'manoj@gmail.com  ', 0),
('hii manish kartik i want to buy', 'maniya@gmail.com', 'manishkartiks@gmail.com', 25),
('okk i aggredd', 'manishkartiks@gmail.com', 'maniya@gmail.com  ', 25);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `product_id` int(11) NOT NULL,
  `mname` varchar(40) NOT NULL,
  `manf` varchar(40) NOT NULL,
  `yop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `of_product`
--

CREATE TABLE `of_product` (
  `product_id` int(11) NOT NULL,
  `item_name` varchar(40) NOT NULL,
  `doi` date NOT NULL,
  `file` varchar(40) NOT NULL,
  `cost` int(11) NOT NULL,
  `user_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `of_product`
--

INSERT INTO `of_product` (`product_id`, `item_name`, `doi`, `file`, `cost`, `user_email`) VALUES
(29, 'laptops', '2018-10-11', 'lap4.jpg', 200, 'maniya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(40) NOT NULL,
  `nitc_email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `mobile` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `nitc_email`, `pass`, `type`, `mobile`) VALUES
('manish', 'manishkar@gmail.com', '123456789', 'Faculty', '9430191979'),
('manish', 'manishkartiks@gmail.com', '123456789', 'Student', ''),
('maniya', 'maniya@gmail.com', '123456789', 'Student', ''),
('manoj', 'manoj@gmail.com', '123456789', 'Faculty', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nitc_email`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `of_product`
--
ALTER TABLE `of_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nitc_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `of_product`
--
ALTER TABLE `of_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
