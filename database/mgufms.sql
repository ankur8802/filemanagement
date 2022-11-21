-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgufms`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fremark` longtext NOT NULL,
  `filemark` varchar(500) NOT NULL,
  `ftype` varchar(255) NOT NULL,
  `docfile` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `fname`, `fremark`, `filemark`, `ftype`, `docfile`, `date`) VALUES
(16, '8', 'Database Password ', 'Google Console Database Password File.', 'Important File,Urgent File', 'admin', '6ab5eb626873a6aebd82a02624f35a02.xlsx', '2022-07-15 12:10:35'),
(17, '8', 'All Domain And Server Password Details', 'This File Shared by Shubhi mam ', 'Important File,Urgent File', 'admin', '755604dedef7552f75e56fafb3dd81c7.xlsx', '2022-07-15 12:11:48'),
(18, '8', 'New Server Account Password', 'All Password Created my me ', 'Important File,Urgent File', 'admin', '4ad655fcb1c1581aa343547efed42b6b.txt', '2022-07-15 12:13:08'),
(19, '10', 'EA', 'SS', 'Urgent File', 'admin', '8be4aa12f2fa0ab13e023799b8983392.docx', '2022-07-15 13:17:23'),
(21, '2', 'Ankur', 'wde', 'Urgent File', 'sadmin', 'fb292d8934ea8da13b54a84ddadad2a3.xlsx', '2022-07-25 10:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gremark` longtext NOT NULL,
  `groupmember` longtext NOT NULL,
  `status` enum('1','2','','') NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `gname`, `gremark`, `groupmember`, `status`, `date`, `last_date`) VALUES
(4, 'IT', 'Manage IT Team Files', 'shubhi.gupta@excelgroup.org.in,dba@mgu.edu.in', '1', '2022-07-15 12:32:25', '2022-07-15 12:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `group_more_files`
--

CREATE TABLE `group_more_files` (
  `id` int(11) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `file_id` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_more_files`
--

INSERT INTO `group_more_files` (`id`, `group_id`, `file_id`, `date`) VALUES
(3, '4', '18', '2022-07-15 12:35:50'),
(4, '4', '17', '2022-07-15 12:35:54'),
(5, '4', '16', '2022-07-15 12:35:59'),
(6, '5', '18', '2022-07-15 13:13:03'),
(7, '4', '21', '2022-07-25 10:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` enum('sadmin','admin','staff','client') NOT NULL,
  `profileimg` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('0','1','2','3') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `profileimg`, `email`, `name`, `password`, `date`, `status`) VALUES
(2, 'sadmin', 'default.jpg', 'info@mgu.edu.in', 'Super Admin', 'c43bf0326624d3b41cce070f24bdeda6', '2022-07-14 05:44:10', '1'),
(8, 'admin', 'default.jpg', 'dba@mgu.edu.in', 'Ankur Chauhan', 'c43bf0326624d3b41cce070f24bdeda6', '2022-07-15 12:08:53', '1'),
(9, 'admin', 'default.jpg', 'shubhi.gupta@excelgroup.org.in', 'Shubhi Gupta', 'db670000cb294cd5e22af71a1714fbc0', '2022-07-15 12:28:30', '1'),
(10, 'admin', 'default.jpg', 'anchal.d@excelgroup.org.in', 'Anchal HR', 'c43bf0326624d3b41cce070f24bdeda6', '2022-07-15 13:15:30', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_more_files`
--
ALTER TABLE `group_more_files`
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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_more_files`
--
ALTER TABLE `group_more_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
