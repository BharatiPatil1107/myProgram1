-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 10:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullstack`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `department` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `department`, `age`, `salary`) VALUES
(1, 'pallavi', 'BCA- Bachelor of Computer Applications', 25, 12000),
(2, 'sukrut', 'MCA-Master Of Computer Application', 22, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '12345'),
('', ''),
('', ''),
('1726235', 'as');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name1` varchar(40) NOT NULL,
  `date1` date NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name1`, `date1`, `course`, `email`, `password`) VALUES
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(1, 'sukrut', '2021-04-08', 'CA- Chartered Accountancy', 'sukrut@gamil.com', '123654'),
(2, 'hiiiii', '2021-04-09', 'BCA- Bachelor of Computer Applications', 'ac@gmail.com', 'dfgvjh'),
(3, 'sukrut', '2021-04-17', 'B.Sc.- Information Technology', 'sukrut@gamil.com', 'yuijjjm,,,m');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
