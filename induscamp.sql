-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 10:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `induscamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE `camp` (
  `id` int(11) NOT NULL,
  `camp_name` text NOT NULL,
  `status` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`id`, `camp_name`, `status`, `date_time`) VALUES
(1, 'Testing Data ', 'N', '2018-05-29 06:46:03'),
(2, 'Testing 2    ', 'Y', '2018-05-30 03:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `pat_id` text NOT NULL,
  `name` text,
  `age` text,
  `diag` text NOT NULL,
  `m1` text,
  `d1` text,
  `m2` text,
  `d2` text,
  `m3` text,
  `d3` text,
  `m4` text,
  `d4` text,
  `inv` text NOT NULL,
  `date_time` date DEFAULT NULL,
  `camp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`pat_id`, `name`, `age`, `diag`, `m1`, `d1`, `m2`, `d2`, `m3`, `d3`, `m4`, `d4`, `inv`, `date_time`, `camp`) VALUES
('52 ', 'khalid ', '33 ', 'abc    ', 'Panadol Syrup', '4   ', 'Glucophage   ', '5   ', '-  ', '    ', '-  ', '    ', 'YES  ', NULL, '1'),
('53 ', 'Usama Bin Ishaq ', '26 ', 'nothing ', 'panadol ', '2 ', 'disprin ', '4 ', 'Panadol Syrup', '3 ', 'Glucophage ', '3', 'YES', NULL, '1'),
('54 ', 'testing ', '25 ', 'testing 2', 'Glucophage ', ' 3', ' ', ' ', ' ', ' ', ' ', ' ', 'NO', NULL, '1'),
('56 ', 'Maheen Mazhar ', '22 ', 'testing', '{Panadol Syrup}', '3', '', '', '', '', '', '', '-', NULL, ''),
('57 ', 'Maheen Mazhar ', '22 ', 'testing 2', 'Panadol Syrup', '2', '', '', '', '', '', '', '-', NULL, ''),
('63 ', 'khalid  ', '33  ', 'testing', '-', '', '-', '', 'Panadol Syrup', '3', '-', '', 'YES', NULL, ''),
('2 ', 'tony stark ', '38 ', 'testing 2', 'Panadol Syrup', '3', 'Panadol Syrup', '4', 'Glucophage ', '56', 'Panadol Syrup', '6', 'YES', NULL, ''),
('64 ', 'tony stark ', '38 ', 'testing 2', '-', '', '-', '', 'Panadol Syrup', '3', '-', '', 'BABY', NULL, '2 '),
('67  ', 'pakistan  ', '65  ', 'abcdef', 'Panadol Syrup', 'safaf', 'Glucophage ', 'dsafsae', '-', '', '-', '', 'ADULT', NULL, '2  ');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `med` text NOT NULL,
  `status` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `camp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `med`, `status`, `datetime`, `camp`) VALUES
(1, 'Panadol Syrup', 'Y', '2018-05-25 03:59:02', '1'),
(2, 'disprin', '', '2018-05-25 06:16:49', '1'),
(3, 'Glucophage ', 'Y', '2018-05-25 06:27:16', '2'),
(4, 'ORS', 'Y', '2018-05-25 07:31:57', '2'),
(6, 'PERACETAMOLE', 'Y', '2018-09-06 08:44:50', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `pat_id` text NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `inv` text NOT NULL,
  `glu` text NOT NULL,
  `hepb` text NOT NULL,
  `hepc` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `camp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`pat_id`, `name`, `age`, `inv`, `glu`, `hepb`, `hepc`, `date_time`, `camp`) VALUES
('53  ', 'Usama Bin Ishaq  ', '', 'yes ', '50', 'Negative', 'Negative', '2018-05-21 06:34:33', '1'),
('52  ', 'khalid  ', '33  ', 'yes ', '50 ', 'Negative', 'Negative ', '2018-05-21 06:38:34', '1'),
('64  ', 'tony stark  ', '38  ', 'YES ', '45', 'Negative', 'Positive', '2018-05-30 07:16:25', '2  '),
('67 ', 'pakistan ', '65 ', '', '454', 'Negative', 'Positive', '2018-08-08 06:01:30', '2 ');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `pat_id` text NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `m1` text NOT NULL,
  `q1` text NOT NULL,
  `m2` text NOT NULL,
  `q2` text NOT NULL,
  `m3` text NOT NULL,
  `q3` text NOT NULL,
  `m4` text NOT NULL,
  `q4` text NOT NULL,
  `ext1` text NOT NULL,
  `ext2` text NOT NULL,
  `camp` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`pat_id`, `name`, `age`, `m1`, `q1`, `m2`, `q2`, `m3`, `q3`, `m4`, `q4`, `ext1`, `ext2`, `camp`, `date_time`) VALUES
('53  ', 'Usama Bin Ishaq  ', '26  ', 'panadol', '4', 'disprin', '6', 'ponstan', '3', 'nill', '0', '', '', '1', '0000-00-00 00:00:00'),
('52  ', 'khalid  ', '33  ', 'panadol', '4', 'disprin', '2 ', '', ' ', '', ' ', '', '', '1', '2018-05-19 05:48:39'),
('64  ', 'tony stark  ', '38  ', '-', '', '-', '', 'Panadol Syrup', '1', '-', '', '', '', '2  ', '2018-05-30 06:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `pat_id` int(11) NOT NULL,
  `pat_mr` text NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `camp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`pat_id`, `pat_mr`, `cnic`, `name`, `fname`, `age`, `address`, `gender`, `contact`, `date_time`, `camp`) VALUES
(52, '73150000365', '0000000000000', 'khalid ', 'faiq ', '33 ', 'ryk ', 'male', '0333333000 ', '2018-05-19 05:53:11', '1'),
(53, '', '3130357740979', 'Usama Bin Ishaq', 'Muhammad Ishaq', '26', 'Israr Medicise - Hospital Road - Rahim yar khan', 'male', '03228904425', '2018-05-19 05:53:11', '1'),
(54, '7318006104', '1234345654', 'testing', 'master testing', '25', 'internet', 'male', '1991991191', '2018-05-19 06:03:53', '1'),
(55, ' ', ' ', 'Maheen Mazhar ', ' ', ' ', ' ', 'female', ' ', '2018-05-23 04:26:01', '1'),
(56, '', '23145334', 'Maheen Mazhar', 'Mazher', '22', 'ryk', 'female', '0023457643', '2018-05-23 04:26:30', ''),
(57, '', '23145334', 'Maheen Mazhar', 'Mazher', '22', 'ryk', 'female', '0023457643', '2018-05-23 04:27:15', ''),
(58, '', '3130398734578', 'syed kazim ali', 'ali', '33', 'ryk', 'male', '03228904426', '2018-05-23 06:03:16', ''),
(59, '', '3130398734578', 'syed kazim ali', 'ali', '33', 'ryk', 'male', '03228904426', '2018-05-23 06:07:56', ''),
(60, '', '3130398734578', 'syed kazim ali', 'ali', '33', 'ryk', 'male', '03228904426', '2018-05-23 06:11:33', ''),
(61, '', '3130398734578', 'syed kazim ali', 'ali', '33', 'ryk', 'male', '03228904426', '2018-05-23 06:16:20', ''),
(62, '', '3130398734578', 'syed kazim ali', 'ali', '33', 'ryk', 'male', '03228904426', '2018-05-23 06:17:12', ''),
(63, '73150000365', '0000000000000', 'khalid ', 'faiq ', '33 ', 'ryk ', 'male', '0333333000 ', '2018-05-26 03:47:16', ''),
(64, '73169890876', '5456454565443', 'tony stark', 'haward stark', '38', 'Avengers', 'male', '98673423456', '2018-05-30 04:32:57', '2'),
(65, '', '1234556659253', 'Testing Registration', 'Mazher', '30', 'fakjgfie', 'male', '56785285965', '2018-05-30 04:46:59', ''),
(66, '', '1234556659321', 'Testing Registration', 'Mazher', '30', 'fakjgfie', 'male', '567ds', '2018-05-30 04:50:07', ''),
(67, '', '8889999887889', 'pakistan', 'qaid-e-azam', '65', 'asia', 'male', '00998778939', '2018-08-08 06:00:05', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `rights` text NOT NULL,
  `status` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user`, `pass`, `rights`, `status`, `date_time`) VALUES
(1, 'Usama Ishaq ', 'usamaishaq ', '001', 'Admin ', 'Y ', '2018-05-21 09:51:00'),
(2, 'Khalid Hamid Faiq ', 'khalid9892 ', '9892 ', 'rep', 'Y', '2018-05-22 08:53:14'),
(3, 'Hafiz Usman', 'usman9946', '9946', 'rep', 'Y', '2018-05-22 10:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `pat_id` text NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `camp` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bp_sys` text NOT NULL,
  `dia` text NOT NULL,
  `temp` text NOT NULL,
  `pulse` text NOT NULL,
  `resp_rate` text NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `pain_scale` text NOT NULL,
  `o2sat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD UNIQUE KEY `UC_doc` (`pat_id`(20));

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD UNIQUE KEY `UC_lab` (`pat_id`(20));

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD UNIQUE KEY `UC_opd` (`pat_id`(20));

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD UNIQUE KEY `id` (`pat_id`(10));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
