-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2025 at 06:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket-club-managementdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `gender`, `email`, `password`) VALUES
(1, 'Sudipto Roy', 'M', 'sudipto@gmail.com', 1234),
(2, 'Aqib', 'M', 'aqib@gmail.com', 2345);

-- --------------------------------------------------------

--
-- Table structure for table `all_rounder`
--

CREATE TABLE `all_rounder` (
  `player_id` int(11) NOT NULL,
  `batting_style` varchar(50) DEFAULT NULL,
  `bowling_style` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batsman`
--

CREATE TABLE `batsman` (
  `player_id` int(11) NOT NULL,
  `order_no` int(11) DEFAULT NULL,
  `batting_style` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `batsman`
--

INSERT INTO `batsman` (`player_id`, `order_no`, `batting_style`) VALUES
(9, 1, 'Openar'),
(11, 1, 'Right Handed'),
(501, 4, 'right handed'),
(502, 2, 'Left-handed');

-- --------------------------------------------------------

--
-- Table structure for table `bowler`
--

CREATE TABLE `bowler` (
  `player_id` int(11) NOT NULL,
  `bowling_style` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bowler`
--

INSERT INTO `bowler` (`player_id`, `bowling_style`) VALUES
(9, '');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `history` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `location`, `history`) VALUES
(1, 'Cricket Warriors', 'New York', 'Founded in 2001 as a community team'),
(2, 'Batting Legends', 'Los Angeles', 'A top-level club with a rich history'),
(5, 'Rangpur Riders', 'Rangpur', 'Established in 2008'),
(6, 'Abahoni', 'Dhaka', ''),
(7, 'Mohamedan', 'Dhaka', 'One of the oldest club of bangladesh'),
(8, 'Dhaka Gladiators', 'Dhaka', ''),
(10, 'Rangpur Riders', 'Rangpur', ''),
(11, 'Sylhet Sixers', 'Sylhet', 'Have one of the beautiful ground of Bangleadesh'),
(12, 'Fortune Barishal', 'Barishal', 'Established in 2008'),
(13, 'Khulna Titans', 'Khulna', '4 times champion');

-- --------------------------------------------------------

--
-- Table structure for table `club_achievements`
--

CREATE TABLE `club_achievements` (
  `achievement_name` varchar(255) NOT NULL,
  `club_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club_achievements`
--

INSERT INTO `club_achievements` (`achievement_name`, `club_id`, `date`, `description`) VALUES
('Best All-Rounder of the Year', 7, '2023-11-25', 'The player excelled in both batting and bowling throughout the season, earning the title of the year’s best all-rounder.'),
('Best Batting Performance', 6, '2024-06-15', 'The player scored 150 runs in a single match during the regional championship.'),
('Best Bowling Performance', 6, '2024-07-01', 'Player took 8 wickets in a match, setting a new record for the club.'),
('Best Fielding Team', 8, '2023-09-05', 'The team had the highest number of catches and run outs during the inter-club series.'),
('Championship Winner', 7, '2023-12-20', 'The club won the national championship by defeating the reigning champions.'),
('Club of the Year', 6, '2024-02-15', 'The club was awarded the title of “Club of the Year” for its consistent performance and growth.'),
('Fastest Century', 7, '2024-08-18', 'A player scored a century in just 45 balls during a domestic match, breaking records in the process.'),
('Most Runs in a Season', 7, '2024-05-30', 'The club’s top batsman scored a total of 800 runs in a single season.'),
('Most Valuable Player', 8, '2024-03-12', 'Player of the season, awarded for their contribution in all formats of the game, both batting and bowling.'),
('Outstanding Leadership', 8, '2024-04-10', 'The captain led the team to victory in the inter-club tournament with remarkable strategy and leadership.'),
('sdfsd', 12, '2024-12-03', 'qwerdfsdd');

-- --------------------------------------------------------

--
-- Table structure for table `club_captain`
--

CREATE TABLE `club_captain` (
  `club_id` int(11) NOT NULL,
  `captain_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club_captain`
--

INSERT INTO `club_captain` (`club_id`, `captain_id`, `start_date`, `end_date`) VALUES
(5, 9, '2024-10-27', '2026-11-19'),
(12, 101, '2024-12-02', '2024-12-26'),
(12, 501, '2024-12-03', '2026-07-12'),
(13, 102, '2024-12-02', '2024-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `club_coach`
--

CREATE TABLE `club_coach` (
  `club_id` int(11) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `coach_name` varchar(35) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club_coach`
--

INSERT INTO `club_coach` (`club_id`, `coach_id`, `coach_name`, `start_date`, `end_date`) VALUES
(12, 11, 'Mursalin', '2024-12-02', '2026-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `club_email`
--

CREATE TABLE `club_email` (
  `club_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club_email`
--

INSERT INTO `club_email` (`club_id`, `email`) VALUES
(1, 'contact@cricketwarriors.com'),
(2, 'info@battinglegends.com'),
(5, 'rang@example.com'),
(7, 'mohamedan@example.com'),
(10, 'rangpurriders@gmail.com'),
(11, 'sylhetsixers2@demo.com'),
(11, 'sylhetsixers@example.com'),
(12, 'fortunebarishal@gmail.com'),
(13, 'khulnatitans@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `club_phone_number`
--

CREATE TABLE `club_phone_number` (
  `club_id` int(11) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `club_phone_number`
--

INSERT INTO `club_phone_number` (`club_id`, `phone_number`) VALUES
(1, '555-101-2020'),
(2, '555-202-3030'),
(5, '018323322532'),
(5, '01943244344'),
(7, '01745637373'),
(10, '01723698712'),
(10, '01932364551'),
(11, '01723456432'),
(12, '01923454244'),
(13, '01923533233');

-- --------------------------------------------------------

--
-- Table structure for table `management_committee`
--

CREATE TABLE `management_committee` (
  `committee_id` int(11) UNSIGNED NOT NULL,
  `member_name` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `contact_info` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `management_committee`
--

INSERT INTO `management_committee` (`committee_id`, `member_name`, `role`, `contact_info`, `start_date`, `end_date`, `club_id`) VALUES
(8, 'Macken shaw', 'Sub Electroal Body', '019********', '1990-10-10', '2024-10-10', 8);

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE `manages` (
  `club_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `transfer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`club_id`, `player_id`, `transfer_id`) VALUES
(5, 9, 4),
(11, 9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `match_id` int(11) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `vanue_id` int(11) DEFAULT NULL,
  `scorecard_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`match_id`, `date`, `time`, `result`, `vanue_id`, `scorecard_id`) VALUES
(1, '2001-10-10', '07:47:00', 'India lose by 200 runs', NULL, NULL),
(3, '2024-10-22', '07:05:00', 'India Lost to Bangladesh by 400 runs margin..', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `date_of_birth`, `nationality`) VALUES
(9, 'David Warner', '1990-10-10', 'Australian'),
(11, 'Kumar Sangakara', '1990-10-10', 'Sri Lankan'),
(501, 'David Miller', '1990-05-10', 'USA'),
(502, 'Emma Brown', '1992-07-15', 'Canada'),
(503, 'Aqib', '2024-12-04', 'Bangladeshi');

-- --------------------------------------------------------

--
-- Table structure for table `playerstatistics`
--

CREATE TABLE `playerstatistics` (
  `player_stats_id` int(11) UNSIGNED NOT NULL,
  `runs_scored` int(11) DEFAULT NULL,
  `wickets_taken` int(11) DEFAULT NULL,
  `balls_faced` int(11) DEFAULT NULL,
  `fours_hit` int(11) DEFAULT NULL,
  `sixes_hit` int(11) DEFAULT NULL,
  `overs_bowled` decimal(4,1) DEFAULT NULL,
  `stumpings` int(11) DEFAULT NULL,
  `run_outs` int(11) DEFAULT NULL,
  `catches` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `playerstatistics`
--

INSERT INTO `playerstatistics` (`player_stats_id`, `runs_scored`, `wickets_taken`, `balls_faced`, `fours_hit`, `sixes_hit`, `overs_bowled`, `stumpings`, `run_outs`, `catches`, `player_id`) VALUES
(6, 2501, 35, 45, 15, 4, 323.0, 35, 25, 35, 9);

-- --------------------------------------------------------

--
-- Table structure for table `scorecard`
--

CREATE TABLE `scorecard` (
  `scorecard_id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `first_inning` varchar(11) DEFAULT NULL,
  `second_inning` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transfer_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `transfer_value` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`transfer_id`, `start_date`, `end_date`, `transfer_value`) VALUES
(1, '2024-10-27', '2024-11-16', 100000.00),
(2, '2024-10-27', '2024-11-16', 100000.00),
(3, '2024-10-27', '2024-11-16', 100000.00),
(4, '2024-10-27', '2024-11-16', 100000.00),
(5, '2024-10-01', '2028-10-01', 500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `number` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `gender`, `number`, `email`, `password`) VALUES
(1, 'Arpo Roy', 'M', '1723456789', 'arpo@gmail.com', 78633),
(2, 'Soumen', 'M', '01932394150', 'soumen@gmail.com', 54012),
(3, 'Zasim', 'M', '01723647737', 'zasim@gmail.com', 34554),
(101, 'John Doe', 'Male', '1234567890', 'john.doe@example.com', 0),
(102, 'Jane Doe', 'Female', '0987654321', 'jane.doe@example.com', 0),
(103, 'Shakil Ahmed', 'M', '0199999999', 'shakil@example.com', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL,
  `venue_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `location`, `capacity`) VALUES
(1, 'Mirpur', 'Dhaka', 100000),
(4, 'Bashundhara Kings Arena', 'Bashundhara', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `wicketkeeper`
--

CREATE TABLE `wicketkeeper` (
  `player_id` int(11) NOT NULL,
  `order_no` int(11) DEFAULT NULL,
  `batting_style` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_rounder`
--
ALTER TABLE `all_rounder`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `batsman`
--
ALTER TABLE `batsman`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `bowler`
--
ALTER TABLE `bowler`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `club_achievements`
--
ALTER TABLE `club_achievements`
  ADD PRIMARY KEY (`achievement_name`,`club_id`,`date`,`description`(255)),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `club_captain`
--
ALTER TABLE `club_captain`
  ADD PRIMARY KEY (`club_id`,`captain_id`);

--
-- Indexes for table `club_coach`
--
ALTER TABLE `club_coach`
  ADD PRIMARY KEY (`club_id`,`coach_id`);

--
-- Indexes for table `club_email`
--
ALTER TABLE `club_email`
  ADD PRIMARY KEY (`club_id`,`email`);

--
-- Indexes for table `club_phone_number`
--
ALTER TABLE `club_phone_number`
  ADD PRIMARY KEY (`club_id`,`phone_number`);

--
-- Indexes for table `management_committee`
--
ALTER TABLE `management_committee`
  ADD PRIMARY KEY (`committee_id`),
  ADD KEY `club_id` (`club_id`);

--
-- Indexes for table `manages`
--
ALTER TABLE `manages`
  ADD PRIMARY KEY (`club_id`,`player_id`,`transfer_id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `transfer_id` (`transfer_id`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `vanue_id` (`vanue_id`),
  ADD KEY `scorecard_id` (`scorecard_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `playerstatistics`
--
ALTER TABLE `playerstatistics`
  ADD PRIMARY KEY (`player_stats_id`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `scorecard`
--
ALTER TABLE `scorecard`
  ADD PRIMARY KEY (`scorecard_id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `wicketkeeper`
--
ALTER TABLE `wicketkeeper`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `management_committee`
--
ALTER TABLE `management_committee`
  MODIFY `committee_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manages`
--
ALTER TABLE `manages`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `match_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `playerstatistics`
--
ALTER TABLE `playerstatistics`
  MODIFY `player_stats_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `scorecard`
--
ALTER TABLE `scorecard`
  MODIFY `scorecard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_rounder`
--
ALTER TABLE `all_rounder`
  ADD CONSTRAINT `all_rounder_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);

--
-- Constraints for table `batsman`
--
ALTER TABLE `batsman`
  ADD CONSTRAINT `batsman_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);

--
-- Constraints for table `bowler`
--
ALTER TABLE `bowler`
  ADD CONSTRAINT `bowler_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);

--
-- Constraints for table `club_achievements`
--
ALTER TABLE `club_achievements`
  ADD CONSTRAINT `club_achievements_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `club_captain`
--
ALTER TABLE `club_captain`
  ADD CONSTRAINT `club_captain_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `club_coach`
--
ALTER TABLE `club_coach`
  ADD CONSTRAINT `club_coach_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `club_email`
--
ALTER TABLE `club_email`
  ADD CONSTRAINT `club_email_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `club_phone_number`
--
ALTER TABLE `club_phone_number`
  ADD CONSTRAINT `club_phone_number_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `management_committee`
--
ALTER TABLE `management_committee`
  ADD CONSTRAINT `management_committee_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`);

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`),
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  ADD CONSTRAINT `manages_ibfk_3` FOREIGN KEY (`transfer_id`) REFERENCES `transfer` (`transfer_id`);

--
-- Constraints for table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `match_ibfk_1` FOREIGN KEY (`vanue_id`) REFERENCES `venue` (`venue_id`),
  ADD CONSTRAINT `match_ibfk_2` FOREIGN KEY (`scorecard_id`) REFERENCES `scorecard` (`scorecard_id`);

--
-- Constraints for table `playerstatistics`
--
ALTER TABLE `playerstatistics`
  ADD CONSTRAINT `playerstatistics_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);

--
-- Constraints for table `wicketkeeper`
--
ALTER TABLE `wicketkeeper`
  ADD CONSTRAINT `wicketkeeper_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
