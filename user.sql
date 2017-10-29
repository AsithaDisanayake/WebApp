-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 29, 2017 at 05:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `15001441`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `indexno` int(20) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `tno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`indexno`, `fname`, `lname`, `tno`) VALUES
(1500221, 'Krishan', 'Chamaraa', '0715877455'),
(15000212, 'Ravindu', 'Amarakoon', '0778855412'),
(15000663, 'Pramod', 'Bhanaka', '0714554478'),
(15001106, 'Gushankpk', 'Hasitha', '072565454'),
(15001216, 'Asitha', 'Imalaa', '0717845ds'),
(15001223, 'Krishan', 'Viduranga', '0712245896'),
(15001235, 'Supun', 'Navod', '0765654412'),
(15001441, 'Pasinduwee', 'Weerasinghe', '0712840545'),
(15001546, 'Eranga', 'Jayasekara', '0715441452');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`indexno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
