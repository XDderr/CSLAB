-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 11, 2026 at 12:54 AM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `address`, `phone_number`, `active`) VALUES
(2, 'john123', 'password', '', '', 0),
(7, 'japhet', '$2y$10$wlcF9.Uii/q4YG2.kIfRCucX6LJM9zJ8ecsJWsjkLvLRr1luKnxDu', 'Bata, Bacolod City', '', 0),
(11, 'jino2028', '$2y$10$4nTd6sKEKHltLP1X8cTHDuPzufENbdvXeJzN2HCYf4EKKDZdyQ4VO', NULL, '', 0),
(12, 'ynzon salas', '$2y$10$Y.Dh9jRzZZXAOj6EXkYSsuvMQCTVO.9IKlUsq0qyYWaZ2VtYjPTb.', NULL, '', 0),
(13, 'testing123', '$2y$10$hOlmiBfo.NGD8Zy25KF4FONeESPd.M4s4yM7QpteUN9niRmEfkn.m', '', '', 0),
(14, 'testing26', '$2y$10$Qm025scR95OeAxXLgoppweQeg8ri4wT/na6BhEZHAd2h.d/S0PUuu', 'testing', '', 0),
(15, 'testing28', '$2y$10$7fhGcJWwx9mGEDoUVVklQ.G4Zkt9iRlJ6636PFi/2ZjLWf1LoDJaW', NULL, '', 0),
(16, 'testing2021', '$2y$10$4lUUWQ0FMAmy2FA8sbzNU.v6/sXsATthObM3SkWnISgfe22u5R.Vm', 'Brgy. Mandalagan, Bacolod City', '', 0),
(17, 'register26', '$2y$10$bzUhrlDvzv0JMBg3XqFCmeBkKYbskoW9RWpgNUU2vmi6V3OxH.8Cq', 'This is my new address', '', 0),
(18, 'testingtoday26', '$2y$10$cWNEGnB7cZ.uk8FtcwpvTecmAJOoi3RKnHRhN6HxAFiJbDtC30h6K', NULL, '', 0),
(19, 'testing27', 'T3st!ng26', NULL, '', 0),
(20, 'testing29', '$2y$10$M8HNyGLOGykTwNSbuceHDOG5lqvrSDU00/w3s6tnHGkIgmZkeWvmO', 'sadfsadfasdf', '', 0),
(21, 'testing2029', '$2y$10$UQIgfQXYSRfcSQlMCCHWqOjWVUdx3MVACoiD1Ndr0pJ8zXgvctZ4C', 'Another address', '12345678901', 0),
(22, 'sioson2026', '$2y$10$ZBsQYX5hwUS/IBthvpBwAOurYtSLMGRk74rVV2k5pOK6X.MhkLydK', NULL, NULL, 0),
(23, 'johnny26', '$2y$10$5Jy8KGZ9o7eQ6Q.lEUu/WulEwukDheGiyNCdExpspWMKXvVyLIUKy', 'Bacolod City', NULL, 0),
(27, 'johnny2028', '$2y$10$5YAXURdnydUX78h7BMNDCuxG/RsIgKG8CwtVukuZPJt9Yy.tdg03G', NULL, NULL, 0),
(28, 'johnny2029', '$2y$10$Rio57nGOcfNqBLtnWNmx1eMnASUqONwZ.vTFCJiFkLsYuqo.RGTEq', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
