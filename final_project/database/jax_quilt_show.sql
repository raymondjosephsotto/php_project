-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 11:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jax_quilt_show`
--
DROP DATABASE IF EXISTS `jax_quilt_show`;
CREATE DATABASE IF NOT EXISTS `jax_quilt_show` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jax_quilt_show`;

-- --------------------------------------------------------

--
-- Table structure for table `quilter_account_setup`
--

CREATE TABLE `quilter_account_setup` (
  `quilter_id` int(15) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_preference` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quilt_entry`
--

CREATE TABLE `quilt_entry` (
  `quilt_id` int(15) NOT NULL,
  `description` text NOT NULL,
  `length` decimal(4,2) NOT NULL,
  `width` decimal(4,2) NOT NULL,
  `quilter_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quilt_selection`
--

CREATE TABLE `quilt_selection` (
  `quilter_id` int(15) NOT NULL,
  `quilt_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quilter_account_setup`
--
ALTER TABLE `quilter_account_setup`
  ADD PRIMARY KEY (`quilter_id`);

--
-- Indexes for table `quilt_entry`
--
ALTER TABLE `quilt_entry`
  ADD PRIMARY KEY (`quilt_id`),
  ADD KEY `quilter_id` (`quilter_id`);

--
-- Indexes for table `quilt_selection`
--
ALTER TABLE `quilt_selection`
  ADD KEY `quilter_id` (`quilter_id`),
  ADD KEY `quilt_id` (`quilt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
