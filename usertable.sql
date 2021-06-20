-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 06:19 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17092421_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(200) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(3, 'SRIRAM KODIPAKA ', 'srividyakodipaka@gmail.com', '$2y$10$aIuozjGPLXgBF983VD9K8e6jvAtOVn8pYzVQIDZ.tL9XnX898fj4y', 0, 'verified'),
(4, 'Vamshi Vicky', 'vamshivicky.ch@gmail.com', '$2y$10$gHZmH46IWAq/ivYuGpAWzOg93itsqJAVqVJ66JSLBvpnQgEkXHaMG', 0, 'verified'),
(5, 'Peddi Sai shashank', 'Shashank6764@gmail.com', '$2y$10$7lapJQ6ODDYooCtYbjhbtuCVKYnYs45HolSdDheaPUbpUUXtgsM8m', 278581, 'notverified'),
(6, 'sai shashank', 'pkanna996@gmail.com', '$2y$10$1ie8L1sS3wTL2.MPny9W5.58PqkaFbWf5mySTXyd6xey57FQYawQ6', 0, 'verified'),
(7, 'Nithin Kola', 'nithinkola98@gmail.com', '$2y$10$aRhxAMWcu9ugQFQIujFsLuCuTZ6zb9EAn6XRRxZi52Yq.V.5vFo6i', 0, 'verified'),
(8, 'Mohammed Ifthekhar', 'mohammedifthekhar230786@gmail.com', '$2y$10$zVa/g1hPvO0pr0E8zPlyk.rNzHk4gdtc7uX./eY.QkCfu.wVWecfa', 0, 'verified'),
(9, 'SAIRAM', 'chinchettisairam6130@gmail.com', '$2y$10$b.zmpQE3iQvzF2c1T.jebuiq3wJE9iqATixVbXfy4idYhXpm4io0a', 0, 'verified'),
(10, 'Pavuluri Greeshma Kalyani ', 'greeshmakalyani3@gmail.com', '$2y$10$DBF4Nh2cFrLk5x3AndrYZutXhk61GB6wIo7qcctH1LpdTcmtxTvsC', 0, 'verified'),
(11, 'Renuka ', 'kalidindirenuka123@gmail.com', '$2y$10$QE5EMRSxSfyb9/4KWi4Pz.JBjInKhWU6BaLw97IOF92w6E9JqvUo.', 0, 'verified'),
(12, 'Sandeep Mittapally', 'sandeepmittapally99@gmail.com', '$2y$10$p1loEvJy6Dxx18ywZ13v1.R6JDbX1.IVtohiye0BKcNtOqc5SVp2u', 0, 'verified'),
(13, 'Rishitha', 'rishipcs169@gmail.com', '$2y$10$QksmG8QfHjWM8VXienqWYe5aw.fRmYsaLGZJsZ0z01W3HYJ0toc06', 0, 'verified'),
(14, 'Sanath Kumar', 'siripuramsanathkumar444@gmail.com', '$2y$10$Zfs43vL2fuV/r5kyREguS.aGqNOYRn2IYD44wDnxTlCc/mJocEr9S', 0, 'verified'),
(15, 'Sai Teja', 'saitejamiyapuram14@gmail.com', '$2y$10$WUGBlVckjlU3WcQI.TFIKeqYlfQupEn4KjtcWHiniVXs6mqSahCBe', 0, 'verified'),
(16, 'Harshitha', 'harshithadb1415@gmail.com', '$2y$10$ogS/SJswkFRXHej6LiZIZOis21cB8zRZu7ohTB3UUEnWN6Iew08q2', 0, 'verified'),
(17, 'SRIRAM KODIPAKA', 'kodipakasriram@gmail.com', '$2y$10$BjLMi2aaaJibEf3sDsG3LOrTUIowCSr2QynTD7D/xVj277DngrVye', 0, 'verified'),
(20, 'ram', 'kodipaka123@gmail.com', '$2y$10$jS6i4oz0pnoQzsLGFxI/2uNeg3muA7sP3fl2xluvL5f7L41n0TJqy', 352961, 'notverified'),
(21, 'manam', 'kodi@gmail.com', '$2y$10$gjMQ.gZtco2jzT6QexT1DOI4PDy56ARQHCG68ANNyTQanrNITFp8a', 936052, 'notverified'),
(22, 'mama', 'ko@gmail.com', '$2y$10$uD6VqE6It9tvZg4r0oH8r.1ROu2JagLoIG4FnkmxJ/94eKBlyN9A2', 776021, 'notverified'),
(23, 'okok', 'todo@gmail.com', '$2y$10$nDHMIl9ZCn0qGUtp1KhSOu1ufjXIDL2P2x99XLm1tb/yXHhb3BCw.', 113795, 'notverified'),
(24, 'maro', 'kad@gmail.com', '$2y$10$qe6083ISyx0Fk7RyL3FpX.8O.cRpV4g8tNtVy6hxALJggVEcQwLEq', 955995, 'notverified'),
(25, 'mazan', 'kama@gmail', '$2y$10$qYmNfZ/lvvBpZvTNI3hOAOR2J7KRhaCk2VHLp.4HFWvH3poefUmCC', 217990, 'notverified'),
(26, 'mazan', 'kaa@gmail', '$2y$10$TtHvmPTXQXWpomaN0m2qAuGdwif1ppn.Pu0ALZYNKYKz4b/E3UpvK', 603354, 'notverified'),
(27, 'mazan', 'hma@gmail', '$2y$10$Q9YByAzwXyjptZEk7zkPA.978oI.i39zbtuEkwppyb696JL6ZFXP6', 560631, 'notverified'),
(28, 'mazan', 'hmaa@gmail', '$2y$10$21w115h4IVmaRpqroiMoDODzCwwXXG2lp23XWghXp5BOktuf0XhPe', 981718, 'notverified'),
(29, 'man', 'hh@gmail.com', '$2y$10$4ZtihUqGH02FqxadICRh5uvnYDmDpxMo7Sacw8chODUSEXZrgPn7e', 675819, 'notverified'),
(30, 'Sagar', 'sagarakuthota@gmail.com', '$2y$10$Il4r73/T2/Ng/zWdc.UFZeJ4BedOGP6I4WWAjIJ.XBHjsfiBsHKB.', 997912, 'notverified'),
(31, 'ram', 'ramkod@gmail.com', '$2y$10$.FHsLfMmvPNHqOjhMFMY5erh8KErSpT3lBcMrfKI2rtbDn0ayewmm', 882489, 'notverified'),
(32, 'ram', 'ramkodd@gmail.com', '$2y$10$saZo96SNd1WrvEKNYrTZJO92367/ER/sA/vIifiFovd66rv/gQWSG', 330808, 'notverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
