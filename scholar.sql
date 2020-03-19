-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2020 at 11:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'albus', '$2y$10$dzgmDCSyUHYnISjzuNNYae5Jc0DVGfASpKvlzF60GAqelGTzMo2vq', 'Albus', 'Dumbledore'),
(2, 'severus', '$2y$10$5vys2KEm8eBOYOIg/gBxi.tAdXimAZznUH/of5JqPR8ilUkuTdaP2', 'Severus', 'Snape'),
(3, 'hagrid', '$2y$10$AReKOSqysd60ffw8PBKtXeDh9r66g2wOOJO7/nAqLdNIUJ5WnszU.', 'Rubeus', 'Hagrid');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `password`, `firstname`, `lastname`) VALUES
(5, 'hermi', '$2y$10$e/Qww1ei97zPARzms2BMJ.1DFLsys9CPvoRE9GTRGw.lEq53v.WlO', 'Hermione', 'Grenger'),
(8, 'ron', '$2y$10$0bje/2Kb5j03s7wzaosqIOqWoqont/WXN4nY5ulpPLPjfdvJReWL6', 'Ron', 'Wisely'),
(9, 'harry', '$2y$10$evHnrrtMGP8KjJq2k3cdq.YpLAO5oKqqhgQ8ZA.oR6JvH6rgpcJay', 'Harry', 'Potter'),
(10, 'apple', '$2y$10$iH4Hof1W75er/hp6/Ekb7urrcvM9wGMNTtg.8duhTlGWqMdvZNk0m', 'Steve', 'Job'),
(11, 'nitis', '$2y$10$YDc9Tg7Yt9ySjrz5nxx.o./GQMo3ubNJs7VzAG08ob1sYyxegZAlS', 'nitis', 'monburinon');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(30) NOT NULL,
  `task_date` date NOT NULL,
  `task_hour` int(2) NOT NULL,
  `task_status` tinyint(1) NOT NULL DEFAULT 0,
  `student_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_date`, `task_hour`, `task_status`, `student_id`, `admin_id`) VALUES
(1, 'TA mte-435', '2020-03-20', 5, 1, 9, 1),
(3, 'TA INT-435', '2020-03-17', 5, 0, 9, 1),
(4, 'Help with graduation ceremony', '2020-03-20', 4, 1, 9, 1),
(5, 'TA BIS-407', '2020-03-15', 3, 0, 9, 1),
(6, 'Grading homeworks', '2020-03-24', 6, 0, 9, 1),
(7, 'Help grading homework INT-302', '2020-03-18', 4, 0, 9, 1),
(8, 'Clean D404', '2020-03-19', 8, 1, 9, 2),
(9, 'Clean professor rooms', '2020-03-16', 12, 1, 9, 2),
(11, 'Help grading homework MIT-601', '2020-02-28', 12, 1, 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `admid_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `admin_task` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `student_task` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
