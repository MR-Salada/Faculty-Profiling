-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 10:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facultyprof`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(5) NOT NULL,
  `school` varchar(50) NOT NULL,
  `datefrom` int(4) NOT NULL,
  `dateto` int(4) NOT NULL,
  `degree` varchar(25) NOT NULL,
  `areaofstudy` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `datefrom`, `dateto`, `degree`, `areaofstudy`) VALUES
(2, 'Andres Soriano Colleges of Bislig', 2020, 2022, 'Bachelor', 'Computer\r\n               ');

-- --------------------------------------------------------

--
-- Table structure for table `eligibilities`
--

CREATE TABLE `eligibilities` (
  `id` int(5) NOT NULL,
  `license` varchar(25) NOT NULL,
  `rate` decimal(5,0) NOT NULL,
  `date` date NOT NULL,
  `placeofexam` varchar(30) NOT NULL,
  `licensenumber` varchar(25) NOT NULL,
  `validity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eligibilities`
--

INSERT INTO `eligibilities` (`id`, `license`, `rate`, `date`, `placeofexam`, `licensenumber`, `validity`) VALUES
(2, 'eligibility 1', '91', '0000-00-00', 'place of exam', '123456789', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'hr_head', 'HR Head'),
(4, 'quality_assurance_head', 'Quality Assurance Head');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(8, '::1', ' user2@admin.com', 1651648209),
(9, '::1', 'user2@gmail.com', 1651648218),
(10, '::1', 'user2@gmail.com', 1651648226);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `user_id` int(5) NOT NULL,
  `title` varchar(25) NOT NULL,
  `dateofmembership` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`user_id`, `title`, `dateofmembership`) VALUES
(2, 'Title', '2022-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_and_trainings`
--

CREATE TABLE `seminar_and_trainings` (
  `user_id` int(5) NOT NULL,
  `title` varchar(25) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `numhours` int(5) NOT NULL,
  `sponsor` varchar(25) NOT NULL,
  `venue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar_and_trainings`
--

INSERT INTO `seminar_and_trainings` (`user_id`, `title`, `datefrom`, `dateto`, `numhours`, `sponsor`, `venue`) VALUES
(2, 'Seminar and Training Titl', '2019-01-01', '2020-01-01', 10, 'Sponsor Name', 'Venue of Seminar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthplace` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstat` varchar(15) NOT NULL,
  `height` int(4) NOT NULL,
  `weight` int(3) NOT NULL,
  `bloodtype` varchar(5) NOT NULL,
  `gsis` varchar(15) NOT NULL,
  `philhealth` varchar(15) NOT NULL,
  `sss` varchar(15) NOT NULL,
  `pagibig` varchar(15) NOT NULL,
  `tin` varchar(15) NOT NULL,
  `citizenship` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `college` varchar(25) NOT NULL,
  `program` varchar(25) NOT NULL,
  `fieldofdiscipline` varchar(25) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `academicrank` varchar(25) NOT NULL,
  `yearsofteaching` int(3) NOT NULL,
  `overview` varchar(1000) NOT NULL,
  `title` varchar(25) NOT NULL,
  `membership_date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `name`, `birthday`, `birthplace`, `age`, `phone`, `gender`, `civilstat`, `height`, `weight`, `bloodtype`, `gsis`, `philhealth`, `sss`, `pagibig`, `tin`, `citizenship`, `address`, `college`, `program`, `fieldofdiscipline`, `designation`, `academicrank`, `yearsofteaching`, `overview`, `title`, `membership_date`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$10$7q4C/f9M1rq5b7zIC4vlTOhCppjwBIM079.4Brqk1.OEkkft6fHhe', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1651648026, 1, 'Super', NULL, '', 0, '0', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
(2, '::1', NULL, '$2y$10$kdIZlanQ0fRnGKsaPexioOEs5yKGS5RwG8pFlIMmNkCDfaxDnRFPO', 'user@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1650349016, 1651648287, 1, 'General User  Name', NULL, 'Birthplace', 25, '09123456789', 'Male', 'Single', 160, 50, 'O+', '123-456-789', '123-456-789', '123-456-789', '123-456-789', '123-456-789', 'Filipino', 'Temporary Address', 'College', 'Program', 'Field of Discipline', 'Designation', 'Academic Rank', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', ''),
(3, '::1', NULL, '$2y$10$nGSrtQQufm3fC5MYn3FHIei4DFIri4TuwjvnQMl2yBYhURAJiFoLy', 'hr_head@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1650419938, 1651648007, 1, 'HR', NULL, '', 0, '09123456789', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
(4, '::1', NULL, '$2y$10$zuSO2KNhciY/Q/.pssZNLO5lQ8fDP1jiQDNt39ExpZ33tQYEhzGhO', 'qah@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1650422704, 1650599404, 1, 'Quality', NULL, '', 0, '09123456789', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', ''),
(5, '::1', NULL, '$2y$10$QJO60DZxD.VqNZ.Hrl3vZO9f.FcWWjrkEkXAjwyf/1ZQIwdkLq7OO', 'user2@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1651648098, 1651648243, 1, NULL, NULL, '', 0, '09123456789', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(8, 1, 1),
(5, 2, 2),
(7, 3, 3),
(10, 4, 4),
(11, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE `workexp` (
  `user_id` int(5) NOT NULL,
  `company` varchar(25) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date NOT NULL,
  `salary` int(10) NOT NULL,
  `position` varchar(25) NOT NULL,
  `statusofemployment` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`user_id`, `company`, `datefrom`, `dateto`, `salary`, `position`, `statusofemployment`) VALUES
(2, 'Company 1', '2019-01-01', '2020-01-01', 13000, 'Manager', 'Permanent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
