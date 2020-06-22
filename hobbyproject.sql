-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 03:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hobbyproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `services` set('Oil and oil filter service','Cooling system service','Air conditioning services','Fuel or air induction cleanup') NOT NULL,
  `technicians` set('Zaki','Ronky','kalu','Rona Dana') NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `time`, `services`, `technicians`, `name`, `contact`, `email`) VALUES
(1, '2020-06-14', '12:30:00.000000', 'Oil and oil filter service', 'Zaki,Ronky', 'bhargavi', 9876543210, 'bhargavi@gmail.com'),
(2, '2020-06-14', '12:30:00.000000', 'Oil and oil filter service', 'Zaki,Ronky', 'bhargavi', 9876543210, 'bhargavi@gmail.com'),
(3, '2020-06-14', '12:30:00.000000', 'Oil and oil filter service', 'Zaki,Ronky', 'bhargavi', 9876543210, 'bhargavi@gmail.com'),
(4, '2020-06-14', '12:30:00.000000', 'Oil and oil filter service', 'Zaki,Ronky', 'bhargavi', 9876543210, 'bhargavi@gmail.com'),
(5, '0000-00-00', '00:00:00.000000', 'Air conditioning services', 'kalu', 'jani', 9876532104, 'jan@ga.co'),
(6, '0000-00-00', '00:00:00.000000', 'Air conditioning services', 'kalu', 'jani', 9876532104, 'jan@ga.co'),
(7, '0000-00-00', '01:30:00.000000', 'Oil and oil filter service', 'kalu', 'chinnodu', 9876543210, 'chinna@hb.com'),
(8, '2020-01-05', '01:30:00.000000', 'Cooling system service', 'Zaki,Ronky', 'bhargavi', 123456789, 'bhargavi@gmail.com'),
(9, '2020-06-14', '15:02:00.000000', 'Air conditioning services', 'Zaki,Ronky', 'srividya', 9876543210, 'srividya@gmail.com'),
(10, '0001-02-03', '01:30:00.000000', 'Air conditioning services', 'Zaki,Ronky', 'srividyaenugurthi', 7894561230, 'sri@gmail.com'),
(11, '0000-00-00', '00:00:00.000000', 'Air conditioning services', 'Zaki,Ronky', 'appu', 7894561230, 'appu@gmail.com'),
(12, '2020-06-14', '01:30:00.000000', 'Oil and oil filter service,Cooling system service', 'Zaki,Ronky', 'shivani', 9876543210, 'shivani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `subject`, `message`) VALUES
(1, 'bhagi@gmail.com', 'bhargavi', 'cars and its issue', 'this is a nice website'),
(2, '', '', '', ''),
(3, 'sreeja@gmail.com', 'sreeja', 'cars and its repair', 'this website is very nice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
