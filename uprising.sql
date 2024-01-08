-- phpMyAdmin SQL Dumpszz
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 10:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int(11) NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `track_artist` varchar(50) NOT NULL,
  `track_title` varchar(100) NOT NULL,
  `track_release` int(11) NOT NULL,
  `track_img` text NOT NULL,
  `track_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `uploader`, `track_artist`, `track_title`, `track_release`, `track_img`, `track_name`) VALUES
(14, 'Azmifxuzy', 'Tupac Shakur', 'Unconditional Love', 2147483647, '2pac.jpg', '2pac - Unconditional love.mp3'),
(15, 'Azmifxuzy', 'Avril Lavigne', 'Rock N Roll', 2147483647, '600.png', 'Avril Lavigne - Rock N Roll.mp3'),
(16, 'Azmifxuzy', 'Billie Eilish', 'All the good girls go to hell', 2147483647, '123.png', 'Billie Eilish - all the good girls go to hell (Lyrics).mp3'),
(31, 'Azmifxuzy', 'A$AP Rocky X Tyler the Creator', 'Potato Salad', 2147483647, 'maxresdefault.jpg', 'A$AP ROCKY X TYLER THE CREATOR - POTATO SALAD.mp3'),
(32, 'Azmifxuzy', '88rising', 'Midsummer Madness', 2147483647, 'mm.jpg', '88RISING - Midsummer Madness (Official Music Video).mp3'),
(33, 'Azmifxuzy', 'Dean Skyzx', 'Staywithme', 2147483647, 'dd.jpg', 'Dean Skyzx - staywithme.mp3'),
(34, 'Azmifxuzy', 'Alan Walker ft. Sabrina', 'On My Way', 2147483647, 'aw.jpg', 'Alan Walker Sabrina Carpenter  Farruko  - On My Way.mp3'),
(35, 'Azmifxuzy', 'Nella Kharisma', 'Ditinggal Rabi', 2147483647, 'asd.jpg', 'NELLA KHARISMA - DI TINGGAL RABI.mp3'),
(36, 'Azmifxuzy', 'Saykojigor', 'MELEMPEM', 2147483647, 'aaaa.jpg', 'saykojigor - MELEMPEM.mp3'),
(37, 'Azmifxuzy', 'Future James', 'Life Could Be a Dream', 2147483647, 'rsz_1_life_could_be_a_dream_notmm.jpg', 'Future James - Life Could Be A Dream.mp3'),
(38, 'Azmifxuzy', 'Stand Here Alone', 'Indah Tak Sempurna', 2147483647, 'download.jpg', 'STAND HERE ALONE - INDAH TAK SEMPURNA ( OFFICIAL MUSIC VIDEO ).mp3'),
(39, 'Azmifxuzy', 'Silent Please', 'Tersenyum dalam Tangis', 2147483647, 'zxc.jpg', 'Silent Please - Tersenyum dalam tangis.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `image`, `role`) VALUES
(4, 'Azmifxuzy', 'Azmifxuzy@gmail.com', '123', 2147483647, 'defaultfoto.png', 'admin'),
(6, 'Azmifauzy', 'Azmifauzy@gmail.com', '123', 2147483647, 'defaultfoto.png', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
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
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
