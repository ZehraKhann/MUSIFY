-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 09:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adm_name` varchar(200) NOT NULL,
  `adm_email` varchar(200) NOT NULL,
  `adm_pass` varchar(200) NOT NULL,
  `adm_image` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adm_name`, `adm_email`, `adm_pass`, `adm_image`, `role_id`) VALUES
(1, 'Humza Khan', 'humza@mail.com', 'abc', 'my.jpg', 1),
(2, 'Zehra Khan', 'zehra@mail.com', 'abc', 'goat.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(255) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `album_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_image`) VALUES
(15, '4', 'alizafar.jpg'),
(17, '4', 'ASALAMU ALEKUN.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(255) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `cat_id`, `image`) VALUES
(3, 'Atif Aslam', 1, 'atif aslam.jpg'),
(4, 'Selena Gomez', 2, 'Selena Gomez.jpg'),
(5, 'Arjit Singh', 1, 'arjit singh.jpg'),
(10, 'Neha Kakkar', 1, 'Neha Kakkar.jpg'),
(11, 'Zayn Malik', 2, 'zaynmalik.jpg\r\n'),
(12, 'Taylor Swift', 2, 'Taylor Swift.jpg'),
(13, 'Ali Zafar', 3, 'ali zafar.jpg\r\n'),
(14, 'Aima Baig', 3, 'aima baig.jpeg\n'),
(15, 'Asim Azhar', 3, 'asim azhar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `image`) VALUES
(1, 'Bollywood', 'bollywood.jpg'),
(2, 'Hollywood', 'hollywood.jpg'),
(3, 'Lollywood', 'lollywood2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `cont_id` int(100) NOT NULL,
  `cont_name` varchar(100) NOT NULL,
  `cont_email` varchar(100) NOT NULL,
  `cont_phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact us`
--

INSERT INTO `contact us` (`cont_id`, `cont_name`, `cont_email`, `cont_phone`, `message`) VALUES
(7, 'Humza', 'humza@mail.com', '03352929828', 'Best Site for Musics!!'),
(8, 'Ali', 'Ali@mail.com', '03352929828', 'UPLOAD MORE!!!!!'),
(9, 'Zehra Khan', 'zehra@mail.com', '03153271301', 'Good Music!!!!'),
(10, 'Usama', 'usama@mail.com', '03341250797', 'Musifyy is Best!!!!!!!'),
(12, 'Zehra Khan', 'zehra@mail.com', '03330214961', 'BEST SITE!!!');

-- --------------------------------------------------------

--
-- Table structure for table `featured_song`
--

CREATE TABLE `featured_song` (
  `song_id` int(100) NOT NULL,
  `audio_url` varchar(250) NOT NULL,
  `song_name` varchar(250) NOT NULL,
  `genres` varchar(200) NOT NULL,
  `singer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_song`
--

INSERT INTO `featured_song` (`song_id`, `audio_url`, `song_name`, `genres`, `singer`) VALUES
(2, 'Akhiyan.mp3', 'Akhiyan', 'Pop Music', 'MITRAZ'),
(3, 'Tajdar e Haram - Atif Aslam.mp3', 'Tajdar e Haram', 'Naat', ' Atif Aslam'),
(5, 'Excuses.mp3', 'Excuses', 'Hip Hop', 'AP Dillion'),
(6, 'Calm Down.mp3', 'Calm Down', 'Pop', 'Selena Gomez'),
(9, 'Anti Hero.mp3', 'Anti Hero', 'Hip Hop', 'Taylor Swift');

-- --------------------------------------------------------

--
-- Table structure for table `featured_video`
--

CREATE TABLE `featured_video` (
  `video_id` int(100) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `singer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured_video`
--

INSERT INTO `featured_video` (`video_id`, `video_url`, `video_name`, `singer`) VALUES
(1, 'Better Together.mp4', 'Better Together', 'Selena Gomez'),
(2, 'Night Changes.mp4', 'Night  Changes', 'Zayn Malik'),
(3, 'Akhiyann.mp4', 'Akhiyan', 'MITRAZ'),
(4, 'Habibi.mp4', 'Habibi', 'Asim Azhar'),
(7, 'Kesariya.mp4', 'Kesariya Tera', 'Arjit Singh');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `song_id_get` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `name`, `rating`, `review`, `song_id_get`) VALUES
(1, '[Humza]', '[3.5]', '[Best Song!!!]', 23),
(4, '[Usama]', '[5]', '[Zayn is best and night Changes song Is my favourite!!]', 27),
(7, '[Osman]', '[4]', '[Love This Song  >>>>!!]', 39);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(255) NOT NULL,
  `singer_name` varchar(200) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `audio_song` varchar(255) NOT NULL,
  `realesed_date` date NOT NULL,
  `genre` varchar(255) NOT NULL,
  `video_song` varchar(800) NOT NULL,
  `artist_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `singer_name`, `song_name`, `audio_song`, `realesed_date`, `genre`, `video_song`, `artist_id`) VALUES
(7, 'Atif Aslam', 'Jal  Pari', 'Jal_Pari.mp3', '2001-09-04', 'slow', 'videoplayback.mp4', 3),
(10, 'Atif Aslam', 'Dil Diyan Gallan', 'Dil Diyan Gallan.mp3', '2018-06-12', 'Filmi', 'Dil Diyan Gallan.mp4', 3),
(11, 'Atif Aslam', 'Tajdar e Haram', 'Tajdar e Haram.mp3', '2015-04-13', 'Naat', 'Tajdar-e-Haram.mp4', 3),
(14, ' Atif Aslam', 'Main Rang Sharbaton Ka', 'Main Rang Sharbaton.mp3', '2016-02-11', '‎Filmi‎', 'Main Rang Sharbaton Ka.mp4', 3),
(15, 'Arjit Singh', 'Tera Yaar Hoon Main', 'Tera Yaar Hoon Main.mp3', '2018-06-15', 'Filmi', 'Tera Yaar Hoon Main.mp4', 5),
(16, 'Arjit Singh', 'Kesariya Tera', 'Kesariya.mp3', '2020-04-12', '‎Filmi‎', 'Kesariya.mp4', 5),
(17, 'Arjit Singh', 'Bandeya Rey Bandeya', 'Bandeya Rey Bandeya.mp3', '2021-02-12', 'Filmi', 'Bandeya Rey Bandeya.mp4', 5),
(18, 'Arjit Singh', 'Ve Maahi ', 'Ve Mahii.mp3', '2019-05-22', 'Hip Hop', 'Ve Maahi.mp4', 5),
(19, 'Neha Kakkar', 'Kaala Chasma', 'Kaaala Chasma.mp3', '2014-04-05', 'Hip Hop', 'Kaala Chasma.mp4', 10),
(20, 'Neha Kakkar', 'Dil Ko Karaar Aaya', 'Dil Ko Karaar Aaya.mp3', '2021-04-15', 'Hip Hop', 'Dil ko Karar Aya.mp4', 10),
(21, 'Neha Kakkar', 'Barish Mein Tum', 'Baarish Mein Tum.mp3', '0022-04-15', '‎Filmi‎', 'Barish Mein Tum.mp4', 10),
(22, 'Neha Kakkar', 'Coca Cola Tu ', 'Coca Cola tu.mp3', '2021-04-19', 'Hip Hop', 'Coca Cola tu.mp4', 10),
(23, 'Selena Gomez', 'Calm Down', 'Calm Down.mp3', '2022-10-15', 'Pop', 'Calm Down.mp4', 4),
(24, 'Selena Gomez', 'Wolves', 'Wolves.mp3', '2002-04-13', 'Pop', 'Wolves.mp4', 4),
(25, 'Selena Gomez', 'Love You Like A Love Song', 'Love You Like A Love Song.mp3', '2016-01-15', 'Romantic', 'Love You Like A Love Song.mp4', 4),
(26, 'Selena Gomez', 'Better Together', 'Better Together.mp3', '2019-11-06', 'Pop', 'Better Together.mp4', 4),
(27, 'Zayn Malik', 'Night Changes', 'Night Changes.mp3', '2014-02-16', 'Pop', 'Night Changes.mp4', 11),
(29, 'Zayn Malik', 'Dusk Till Dawn ', 'Dusk Till Dawn.mp3', '2018-12-15', 'Hip Hop', 'Dusk Till Dawn.mp4', 11),
(30, 'Zayn Malik', 'Story of My Life', 'Story of My Life.mp3', '0213-02-16', 'Hip Hop', 'Story of My Life.mp4', 11),
(31, 'Zayn Malik', 'What Makes You Beautiful', 'What Makes You Beautiful.mp3', '2013-01-15', 'Pop', 'What Makes You Beautiful.mp4', 11),
(32, 'Taylor Swift', 'Anti Hero', 'Anti Hero.mp3', '2017-12-13', 'Pop', 'Anti Hero.mp4', 12),
(33, 'Taylor Swift', 'Red', 'Red.mp3', '2014-05-22', 'Hip Hop', 'Red.mp4', 12),
(34, 'Taylor Swift', 'We Are Never Ever Getting Back Together', 'We Are Never Ever Getting Back Together.mp3', '2020-11-28', 'Sad', 'We Are Never Ever Getting Back Together.mp4', 12),
(35, 'Taylor Swift', 'The Best Day', 'The Best Day.mp3', '2015-07-05', 'Pop', 'The Best Day.mp4', 12),
(36, 'Ali Zafar', 'Jhoom', 'Jhoom.mp3', '2018-05-11', 'slow', 'Jhoom.mp4', 13),
(37, 'Ali Zafar', 'Larsha Pekhawar', 'Larsha Pekhawar.mp3', '2019-08-16', 'Pop', 'Larsha Pekhawar.mp4', 13),
(38, 'Ali Zafar', 'Akhiyaan', 'Akhiyaan.mp3', '2022-04-15', 'Filmi', 'Akhiyaan.mp4', 13),
(39, 'Ali Zafar', 'Maula', 'Maula.mp3', '2022-02-17', '‎Filmi‎', 'Maula.mp4', 13),
(40, 'Aima Baig', 'Bazzi', 'Bazzi.mp3', '2021-04-16', 'Hip Hop', 'Bazzi.mp4', 14),
(41, 'Aima Baig', 'Aey Zindagi', 'Aey Zindagi.mp3', '2019-05-13', '‎Filmi‎', 'Aey Zindagi.mp4', 14),
(42, 'Aima Baig', 'Ballay Ballay', 'Ballay Ballay.mp3', '2020-05-12', 'Pop', 'Ballay Ballay.mp4', 14),
(43, 'Aima Baig', 'Do Bol', 'Do Bol.mp3', '2018-07-16', 'Sad', 'Do Bol.mp4', 14),
(44, 'Asim Azhar', 'Habibi', 'Habibi.mp3', '2022-05-12', 'Pop', 'Habibi.mp4', 15),
(45, 'Asim Azhar', 'Tum Tum', 'Tum Tum.mp3', '2021-05-12', 'Pop', 'Tum Tum.mp4', 15),
(46, 'Asim Azhar', 'Ghalat Fehmi', 'Ghalat Fehmi.mp3', '2022-11-20', 'Hip Hop', 'Ghalat Fehmi.mp4', 15),
(48, 'Asim Azhar', 'Yaad', 'Yaad.mp3', '2018-02-22', 'Hip Hop', 'Yaad.mp4', 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `phone_no`, `address`, `password`, `image`) VALUES
(11, 'Humza', 'humza@mail.com', 2147483647, 'r225 Karachi', '900150983cd24fb0d6963f7d28e17f72', 'pic.jpg'),
(12, 'Zehra Khan', 'zehra@mail.com', 2147483647, 'r486', '202cb962ac59075b964b07152d234b70', '3.jpg'),
(13, 'Usama', 'usama@mail.com', 2147483647, 'R75', '900150983cd24fb0d6963f7d28e17f72', 'testimonial-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`),
  ADD KEY `category` (`cat_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact us`
--
ALTER TABLE `contact us`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `featured_song`
--
ALTER TABLE `featured_song`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `featured_video`
--
ALTER TABLE `featured_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `song_id` (`song_id_get`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `foreign key` (`artist_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `album_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact us`
--
ALTER TABLE `contact us`
  MODIFY `cont_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `featured_song`
--
ALTER TABLE `featured_song`
  MODIFY `song_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `featured_video`
--
ALTER TABLE `featured_video`
  MODIFY `video_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artist`
--
ALTER TABLE `artist`
  ADD CONSTRAINT `theid` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `review_table`
--
ALTER TABLE `review_table`
  ADD CONSTRAINT `song_id` FOREIGN KEY (`song_id_get`) REFERENCES `song` (`song_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
