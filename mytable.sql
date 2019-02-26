-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-i.hosting.stackcp.net
-- Generation Time: Mar 12, 2018 at 06:10 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alf123-3335961d`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `SNO` int(11) NOT NULL,
  `Time` varchar(14) NOT NULL,
  `Events` varchar(21) NOT NULL,
  `Venue` varchar(24) NOT NULL,
  `Department` varchar(7) NOT NULL,
  `FIELD6` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`SNO`, `Time`, `Events`, `Venue`, `Department`, `FIELD6`) VALUES
(1, '9:30-11:30', 'Inaugration Ceromony', 'Auditorium', 'Central', NULL),
(2, '11:30 - 14:30', 'Leadership Workshop', 'Block A Old Moot Court', 'Central', NULL),
(3, '11:30-13:00', 'Dress The Cake', 'SRC', 'ASH', NULL),
(4, '11:30-13:30', 'Nukkad Natak', 'ASET Circle', 'ASCO', NULL),
(5, '11:30 - 13:30', 'Politically Incorrect', 'Block A LT-12', 'ABS', NULL),
(6, '11:30 - 13:30', 'Hair Styling', 'Block E (fashion studio)', 'ASFT', NULL),
(7, '11:30-13:30', 'Movie-O-Mania', 'Block A LT-02', 'AIBAS', NULL),
(8, '11:30-15:30', 'Tech Wiz', 'Block B LT-03', 'ASET', NULL),
(9, '12:00-14:00', 'Beg Borrow Steal', 'Block D LT-22', 'AIB', NULL),
(10, '12:00-14:30', 'News quiz', 'Block A LT-03', 'ABS', NULL),
(11, '12:00 - 13:00', 'Essay Writing', 'ALS LT-32', 'ALS', NULL),
(12, 'FULL DAY', 'PIXELS', 'Block D student lounge', 'ASCO', NULL),
(13, 'FULL DAY', 'Hachathon', 'Block B LT-33', 'ASET', NULL),
(14, '12:00-13:30', 'Scientia patshala', 'Block B CR 23', 'ASAS', NULL),
(15, '12:00-15:00', 'Rostrum', 'Block D NEW moot court', 'ALS', NULL),
(16, '12:00-13:30', 'Language Skit', 'Block B Seminar Hall', 'ASL', NULL),
(17, '12:00 - 13:00', 'Prelims SOLO SINGING', 'Auditorium', 'Central', NULL),
(18, '12:30 - 15:30', 'Green Explorers', 'Block D LT-44', 'AIB', NULL),
(19, '12:30 - 15:00', 'Shoot out Add', 'Block D CR-24', 'AIB', NULL),
(20, '13:00 - 14:00', 'Art Graphite', 'Block E', 'ASFT', NULL),
(21, '13:00-14:30', 'Mocktail Competition', 'SRC', 'ASH', NULL),
(22, '13:00 - 15:00', 'Logo Designing', 'Block D ASCO Lab', 'ASCO', NULL),
(23, '13:00 - 15:30', 'Kavya Manch', 'Block B LT-11', 'ASET', NULL),
(24, '13:00-14:30', 'Treasure Hunt', 'Block C', 'AIIT', NULL),
(25, '13:00 - 16:30', 'Legal awareness quiz', 'Block D LT-31', 'ALS', NULL),
(26, '14:00 - 15:00', 'Collage Making', 'Block D', 'AIIT', NULL),
(27, '14:00-16:00', 'What if?', 'Block E Student lounge', 'ASLA', NULL),
(28, '14:00-16:00', 'Beat Boxing', 'Block B Seminar Hall', 'ASL', NULL),
(29, '14:00-15:30', 'Quilling', 'Block E (fashion studio)', 'ASFT', NULL),
(30, '14:00-15:00', 'Cards crapper', 'ASAP', 'ASAP', NULL),
(31, '14:00 - 15:00', 'Henna Tattoo', 'Block E (fashion studio)', 'ASFT', NULL),
(32, '15:30 - 17:30', 'SOLO SINGING', 'Auditorium', 'Central', NULL),
(33, '18:00 - 20:00', 'Fashion Show', 'Amphitheatre', 'Central', NULL),
(34, '20:00 -21:30', 'Group Dance', 'Amphitheatre', 'Central', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`SNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
