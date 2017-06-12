-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2017 at 09:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cipher`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `id` int(11) NOT NULL,
  `qname` int(11) NOT NULL,
  `a1` text NOT NULL,
  `a2` text NOT NULL,
  `a3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`id`, `qname`, `a1`, `a2`, `a3`) VALUES
(1, 1, 'greatjobistolearnwithfun', '1100111', ''),
(2, 2, '32degreefahrenheitatwhichwaterfreezes', 'liquidcrystaldisplay', ''),
(3, 3, 'itwasmywife', '61', ''),
(4, 4, 'iamsurroundedbyenemies', 'virus', 'adac'),
(5, 5, 'youcannotshakehandswithaclenchedfist', 'indiragandhi', ''),
(6, 6, 'thesecretliesintheendofsourcecode', 'congrats', '');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `q11` text NOT NULL,
  `q12` text NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `user`, `q11`, `q12`, `q21`, `q22`, `q31`, `q32`, `q41`, `q42`, `q51`, `q52`, `q61`, `q62`, `score`, `timestamp`, `time`) VALUES
(1, 'rockstar', '5', '12', 0, 0, 5, 12, 0, 0, 0, 0, 5, 12, 51, -1492254594, '2017-04-15 11:10:26'),
(2, 'A TEAM', '5', '12', 5, 12, 5, 0, 5, 12, 5, 12, 5, 12, 90, -1492254490, '2017-04-15 11:08:21'),
(3, 'TeamName', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(4, 'BaishaliRitu', '5', '12', 5, 12, 0, 0, 5, 12, 5, 12, 5, 12, 85, -1492254784, '2017-04-15 11:13:05'),
(5, 'ISIS', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(6, 'BlankSpace', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(7, 'AN', '5', '12', 5, 0, 5, 0, 5, 12, 5, 12, 5, 12, 78, -1492253434, '2017-04-15 10:50:47'),
(8, 'techgeeks', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(9, 'Jyotsna Sharma', '5', '12', 5, 12, 5, 12, 5, 12, 5, 0, 5, 0, 78, -1492254883, '2017-04-15 11:15:11'),
(10, 'sudhanshu shivam', '5', '', 5, 12, 5, 12, 5, 12, 0, 0, 5, 12, 73, -1492254899, '2017-04-15 11:15:11'),
(11, 'Srishti Yadav', '5', '12', 5, 12, 0, 0, 5, 0, 0, 0, 5, 12, 56, -1492254764, '2017-04-15 11:13:04'),
(12, 'Sparsh & Ayush', '5', '12', 5, 12, 5, 12, 5, 12, 0, 0, 5, 12, 85, -1492254411, '2017-04-15 11:06:56'),
(13, 'Ali&Utkarsh', '5', '12', 5, 12, 5, 12, 5, 12, 0, 0, 5, 12, 85, -1492253744, '2017-04-15 10:55:52'),
(14, 'nikhilnaman', '5', '12', 5, 0, 5, 12, 5, 12, 0, 0, 5, 0, 61, -1492254085, '2017-04-15 11:02:17'),
(15, 'specialA', '5', '12', 5, 12, 0, 0, 0, 0, 0, 0, 0, 0, 34, -1492254726, '2017-04-15 11:12:12'),
(16, 'lakshmi', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(17, 'SanjanaPranav', '5', '12', 5, 12, 5, 12, 5, 12, 0, 0, 5, 12, 85, -1492254474, '2017-04-15 11:07:55'),
(18, 'sonam-lakshmi', '5', '12', 5, 12, 5, 0, 0, 0, 0, 0, 0, 0, 39, -1492254597, '2017-04-15 11:10:26'),
(19, 'ps', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(20, 'Jagriti ', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(21, 'sp', '5', '12', 5, 0, 5, 0, 0, 0, 0, 0, 0, 0, 27, -1492253564, '2017-04-15 10:53:09'),
(22, 'Jagriti/Monika', '5', '12', 5, 12, 0, 0, 5, 12, 5, 12, 5, 12, 85, -1492254856, '2017-04-15 11:15:11'),
(23, 'Lakshya Gaurav', '5', '12', 5, 0, 5, 0, 0, 0, 5, 12, 5, 12, 61, -1492254231, '2017-04-15 11:03:59'),
(24, 'AAA', '5', '12', 0, 0, 5, 0, 0, 0, 0, 0, 5, 0, 27, -1492252213, '2017-04-15 10:30:17'),
(25, 'siddharth_shivam', '5', '12', 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 22, -1492254174, '2017-04-15 11:03:44'),
(26, 'siddharthsingh', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00'),
(27, 'testuser2', '5', '12', 5, 12, 5, 12, 5, 12, 5, 12, 5, 12, 102, -1492254815, '2017-04-15 11:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'rockstar', 'keshav'),
(2, 'A TEAM', 'mayank05'),
(3, 'TeamName', 'gotohell07'),
(4, 'BaishaliRitu', 'baishali123'),
(5, 'ISIS', 'qwerty123'),
(6, 'BlankSpace', 'gotohell07'),
(7, 'AN', 'anunam'),
(8, 'techgeeks', 'ietparakaram'),
(9, 'Jyotsna Sharma', 'malikaa'),
(10, 'sudhanshu shivam', 'subhangi'),
(11, 'Srishti Yadav', 'vigilante'),
(12, 'Sparsh & Ayush', '123456'),
(13, 'Ali&Utkarsh', 'aliuchiha'),
(14, 'nikhilnaman', 'ietparakaram'),
(15, 'specialA', 'ciphertech'),
(16, 'lakshmi', 'lax23hacker'),
(17, 'SanjanaPranav', 'pranavsanjana'),
(18, 'sonam-lakshmi', 'sonam98'),
(19, 'ps', 'piyush'),
(20, 'Jagriti ', ''),
(21, 'sp', 'piyush'),
(22, 'Jagriti/Monika', 'gotohell07'),
(23, 'Lakshya Gaurav', '123456'),
(24, 'AAA', '12345678'),
(25, 'siddharth_shivam', '8005477085'),
(26, 'siddharthsingh', '8005477085'),
(27, 'testuser2', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans`
--
ALTER TABLE `ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
