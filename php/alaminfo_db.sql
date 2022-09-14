-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 02:07 PM
-- Server version: 5.7.26-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alaminfo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admn`
--

INSERT INTO `admn` (`username`, `password`) VALUES
('agczadmn', 'agczpssd'),
('admin', 'admin'),
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `post_id` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `title` varchar(120) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`post_id`, `username`, `title`, `message`) VALUES
(1, 'dddddd', 'ddddd', 'ddddddd'),
(2, 'ssdddd', 'fffffffff', 'ffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `g_audios`
--

CREATE TABLE `g_audios` (
  `id` int(14) NOT NULL,
  `album` varchar(100) NOT NULL,
  `audio` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_picture`
--

CREATE TABLE `g_picture` (
  `id` int(14) NOT NULL,
  `AlbamName` varchar(100) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Date_uploided` date NOT NULL,
  `Maelezo` text NOT NULL,
  `Jina` varchar(600) NOT NULL,
  `Aina` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_picture`
--

INSERT INTO `g_picture` (`id`, `AlbamName`, `Image`, `Date_uploided`, `Maelezo`, `Jina`, `Aina`) VALUES
(2, 'Community Service', 'frontslide.jpeg', '2021-03-25', 'We Distribute Food', 'We Distribute Food', 'Slider'),
(3, 'Masjid and Madrasa', 'miss.jpeg', '2021-03-25', 'We provided Qur-an Books', 'We provided Qur-an Books', 'Slider'),
(4, 'Community Service', 'frontslide2.jpeg', '2021-03-25', '', 'We Distribute Food', 'Slider'),
(5, 'Community Service', 'cause.jpeg', '2021-03-25', '', 'We help orphan', 'Slider'),
(6, 'Community Service', 'frontslide3.jpeg', '2021-03-25', '', 'We Distribute Food', 'Slider'),
(7, 'Community Service', 'WhatsApp Image 2021-03-21 at 6.37.02 PM.jpeg', '2021-03-25', '', '', 'Gallery'),
(8, 'Community Service', 'WhatsApp Image 2021-03-21 at 6.37.08 PM.jpeg', '2021-03-25', '', 'We Distribute Food', 'Gallery'),
(9, 'Community Service', 'frontslide3.jpeg', '2021-03-25', '', '', 'Gallery'),
(10, 'Community Service', 'WhatsApp Image 2021-03-21 at 6.38.41 PM(1).jpeg', '0000-00-00', '', '', 'Gallery'),
(11, 'Water Pump', 'mkuu.jpeg', '2021-03-25', '', 'Maungani Primary School', 'Slider'),
(12, 'Water Pump', 'mkuu2.jpeg', '2021-03-25', '', 'Maungani Primary School', 'Slider');

-- --------------------------------------------------------

--
-- Table structure for table `g_videos`
--

CREATE TABLE `g_videos` (
  `id` int(14) NOT NULL,
  `album` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keyindicator`
--

CREATE TABLE `keyindicator` (
  `id` int(14) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` mediumblob NOT NULL,
  `Date_uploided` date NOT NULL,
  `Year_Published` varchar(200) NOT NULL,
  `FileName` varchar(200) NOT NULL,
  `Date_Published` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `g_picture`
--
ALTER TABLE `g_picture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `g_picture`
--
ALTER TABLE `g_picture`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
