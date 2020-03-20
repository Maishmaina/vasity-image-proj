-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karuauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `u_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reg` text NOT NULL,
  `course` text NOT NULL,
  `year` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birth` text NOT NULL,
  `phone` text NOT NULL,
  `pass` text NOT NULL,
  `fingerprint` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`u_id`, `name`, `email`, `reg`, `course`, `year`, `image`, `gender`, `birth`, `phone`, `pass`, `fingerprint`, `status`) VALUES
(9, 'Vancy kebutz', 'vancy@kebut.com', '', '', '', 'vancy_Image.jpg', 'female', '02/01/1972', '0720405030', '1234', '', 'lecturer'),
(10, 'Mutai fitster', 'fit@gmail.com', 'p100/1206g/16', 'Information Technology', '4', 'avatar3.jpg', 'male', '02/01/1999', '0790605943', '1234', '', 'student'),
(11, 'veronica Aoko ', 'veronica@gmail.com', 'p100/1207g/16', 'Information Technology', '4', 'avatar.jpg', 'female', '02/01/1999', '0791455943', '1234', '', 'student'),
(12, 'john muyui', 'muyui@gmail.com', 'p101/1247g/16', 'Computer Science', '4', 'user1.png', 'male', '02/01/1998', '0720567943', '1234', '', 'student'),
(15, 'Gilbert Mutaia', 'gili@gmail.com', '', '', '', 'IMG-20200108-WA0032.jpg', 'male', '01/20/1971', '0799456783', '1234', '', 'admin'),
(16, 'john Jamesz', 'tom@gmail.com', '', '', '', 'IMG-20200109-WA0000.jpg', 'male', '01/20/1999', '0799456783', '1234', '', 'lecturer'),
(18, 'Jane joy', 'jane@gmail.com', 'p100/1232g/17', 'Information Technology', '3', 'avatar4.jpg', 'female', '01/07/1997', '0793463729', '1234', '', 'student'),
(20, 'meme', 'meme@gmail.com', '', '', '', 'IMG-20200108-WA0035.jpg', '', '', '333 333 333 333 ', '1234', '', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `school` text NOT NULL,
  `department` text NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `school`, `department`, `course`) VALUES
(1, 'SPAS', 'Computer Science and Informatics', 'Information Technology'),
(2, 'SoB', 'Human Resource Development', 'Human Resource'),
(3, 'SE&SS', ' Humanities & Languages', 'Kiswahili History'),
(4, 'SPAS', 'Mathematics, statistics and Actuarial sciences', 'Actuarial science'),
(6, 'SPAS', 'Computer Science & Informatics', 'Computer Science'),
(7, 'SPAS', 'Mathematics, statistics and Actuarial sciences', 'pure mathematics'),
(8, 'SPAS', 'Computer Science & Informatics', 'Information Sciencez');

-- --------------------------------------------------------

--
-- Table structure for table `current`
--

CREATE TABLE `current` (
  `current_id` int(11) NOT NULL,
  `academic_yr` text NOT NULL,
  `sem` int(11) NOT NULL,
  `status` text NOT NULL,
  `unit_deadline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current`
--

INSERT INTO `current` (`current_id`, `academic_yr`, `sem`, `status`, `unit_deadline`) VALUES
(1, '19/20', 1, 'ON', 'OFF'),
(2, '19/20', 2, 'OFF', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `student_id` int(100) NOT NULL,
  `amount_year` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `amount_balance` varchar(100) NOT NULL,
  `date_paid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `student_id`, `amount_year`, `amount_paid`, `amount_balance`, `date_paid`) VALUES
(2, 10, '35200', '20000', '15200', 'December 07, 2019'),
(4, 11, '35200', '35200', '0', 'December 07, 2019'),
(6, 12, '35200', '35200', '0', 'December 08, 2019'),
(10, 18, '35200', '35200', '0', 'January 07, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `registered_unit`
--

CREATE TABLE `registered_unit` (
  `registered_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `selected_status` text NOT NULL,
  `uint_code` text NOT NULL,
  `unit_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_unit`
--

INSERT INTO `registered_unit` (`registered_id`, `unit_id`, `student_id`, `selected_status`, `uint_code`, `unit_desc`) VALUES
(1, 8, 2, 'ON', 'bit 430', 'cloud computing');

-- --------------------------------------------------------

--
-- Table structure for table `selected`
--

CREATE TABLE `selected` (
  `uselected_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `ustudent_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected`
--

INSERT INTO `selected` (`uselected_id`, `unit_id`, `ustudent_id`, `status`) VALUES
(38, 1, 11, 'ON'),
(39, 2, 11, 'ON'),
(40, 3, 11, 'ON'),
(41, 4, 11, 'ON'),
(42, 5, 11, 'ON'),
(43, 6, 11, 'ON'),
(48, 9, 19, 'ON'),
(49, 15, 19, 'ON'),
(50, 16, 19, 'ON'),
(51, 17, 19, 'ON'),
(60, 7, 11, 'ON'),
(61, 12, 18, 'ON'),
(62, 11, 18, 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `reg` text NOT NULL,
  `course` text NOT NULL,
  `year` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birth` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `pass` text NOT NULL,
  `fingerprint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `name`, `reg`, `course`, `year`, `image`, `gender`, `birth`, `email`, `phone`, `pass`, `fingerprint`) VALUES
(1, 'Gilbert Mutai', 'p100/1206g/16', 'Information Technology', '4', 'admin.png', 'male', '09/25/1999', 'gil@gil.gil', '0792134098', '1234', ''),
(2, 'John mark', 'p101/1202g/18', 'Acturial Science', '2', 'avatar2.jpg', 'male', '09/15/2000', 'john@john.com', '0791560001', '1234', ''),
(3, 'njuguna James', 'p100/1203g/16', 'Information Sceince', '3', 'avatar3.jpg', 'male', '12/25/1998', 'njugu@njugu.njugu', '0791282123', '1234', ''),
(4, 'Mercy Njohn', 'p103/0385g/17', 'Statistics', '3', 'avatar.jpg', 'female', '12/25/1998', 'mercy@mercy.mercy', '0719123321', '1234', ''),
(6, 'steve sten', 'p103/1203g/19', 'Information Sceince', '1', 'avater.jpg', 'male', '19/03/2010', 'steve@steve.com', '+254 721 234 345', '1234', ''),
(7, 'Kelvin Celvin', 'p100/1206g/16', 'Information Technology', '4', 'user1.png', 'male', '12/25/1998', 'kelvin@kelvin.com', '0791282124', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `unit_prefix` varchar(100) NOT NULL,
  `unit_year` varchar(100) NOT NULL,
  `unit_semester` varchar(100) NOT NULL,
  `unit_code` varchar(100) NOT NULL,
  `unit_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_prefix`, `unit_year`, `unit_semester`, `unit_code`, `unit_desc`) VALUES
(1, 'p100', '4', '1', 'bit 410', 'information resource management'),
(2, 'p100', '4', '1', 'bit 411', 'human computer interface'),
(3, 'p100', '4', '1', 'bit 412', 'Client Server'),
(4, 'p100', '4', '1', 'bit 413', 'it project'),
(5, 'p100', '4', '1', 'bit 414', 'data mining & warehouse'),
(6, 'p100', '4', '1', 'bit 415', 'signal processing'),
(7, 'p100', '4', '1', 'bit 440', 'software quality management'),
(8, 'p100', '4', '1', 'bit 430', 'cloud computing'),
(9, 'p101', '4', '1', 'com 420', 'computer graphics'),
(11, 'p100', '3', '1', 'bit 320', 'computer graphics'),
(12, 'p100', '3', '1', 'bit 321', 'simulation and modeling'),
(13, 'p100', '3', '2', 'bit 344e', 'OOAD'),
(14, 'p100', '4', '2', 'bit 425', 'Metrics'),
(15, 'p101', '4', '1', 'com 409e', 'Distributed systems'),
(16, 'p101', '4', '1', 'com 410', 'User interface design'),
(17, 'p101', '4', '1', 'com 413', 'Object oriented programming II');

-- --------------------------------------------------------

--
-- Table structure for table `verified`
--

CREATE TABLE `verified` (
  `verified_id` int(11) NOT NULL,
  `student_reg` text NOT NULL,
  `student_img` text NOT NULL,
  `student_unit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified`
--

INSERT INTO `verified` (`verified_id`, `student_reg`, `student_img`, `student_unit`) VALUES
(16, 'p100/1207g/16', 'avatar.jpg', 'bit 410'),
(17, 'p100/1207g/16', 'avatar.jpg', 'bit 411'),
(18, 'p100/1207g/16', 'avatar.jpg', 'bit 412'),
(20, 'p100/1207g/16', 'avatar.jpg', 'bit 413'),
(21, 'p100/1207g/16', 'avatar.jpg', 'bit 414'),
(22, 'p100/1207g/16', 'avatar.jpg', 'bit 415'),
(23, 'p100/1207g/16', 'avatar.jpg', 'bit 440e');

-- --------------------------------------------------------

--
-- Table structure for table `verified_helper`
--

CREATE TABLE `verified_helper` (
  `id` int(11) NOT NULL,
  `student_reg` text NOT NULL,
  `unit_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified_helper`
--

INSERT INTO `verified_helper` (`id`, `student_reg`, `unit_count`) VALUES
(1, 'p100/1207g/16', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `current`
--
ALTER TABLE `current`
  ADD PRIMARY KEY (`current_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `registered_unit`
--
ALTER TABLE `registered_unit`
  ADD PRIMARY KEY (`registered_id`);

--
-- Indexes for table `selected`
--
ALTER TABLE `selected`
  ADD PRIMARY KEY (`uselected_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `verified`
--
ALTER TABLE `verified`
  ADD PRIMARY KEY (`verified_id`);

--
-- Indexes for table `verified_helper`
--
ALTER TABLE `verified_helper`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `current`
--
ALTER TABLE `current`
  MODIFY `current_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registered_unit`
--
ALTER TABLE `registered_unit`
  MODIFY `registered_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selected`
--
ALTER TABLE `selected`
  MODIFY `uselected_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `verified`
--
ALTER TABLE `verified`
  MODIFY `verified_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `verified_helper`
--
ALTER TABLE `verified_helper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
