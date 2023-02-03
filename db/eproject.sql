-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 05:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `admin_created_date` date NOT NULL,
  `admin_del_ind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_category` varchar(200) NOT NULL,
  `category_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `phone_code` int(5) NOT NULL,
  `country_code` char(2) NOT NULL,
  `country_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `lastActive` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `dateRegister` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `projects` varchar(200) NOT NULL,
  `totalSpend` varchar(200) NOT NULL,
  `aov` varchar(200) NOT NULL,
  `country` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `region` varchar(120) NOT NULL,
  `postalCode` varchar(200) NOT NULL,
  `customer_created_date` date NOT NULL,
  `customer_del_ind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `milestone_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_name` varchar(255) NOT NULL,
  `milestone_weight` varchar(120) NOT NULL,
  `milestone_progress` varchar(125) NOT NULL,
  `milestone_description` varchar(255) NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `milestone_amount` varchar(200) NOT NULL,
  `milestone_del_ind` int(1) NOT NULL,
  `milestone_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `team` varchar(120) NOT NULL,
  `date` text NOT NULL,
  `created_by` varchar(120) NOT NULL,
  `flieds` varchar(250) NOT NULL,
  `description` varchar(255) NOT NULL,
  `currency` int(11) NOT NULL,
  `pduration` int(11) NOT NULL,
  `price` varchar(250) NOT NULL,
  `package_created_date` date NOT NULL,
  `package_del_ind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `requirement` varchar(260) NOT NULL,
  `estimated_budget` varchar(120) NOT NULL,
  `end_date` varchar(120) NOT NULL,
  `date` text NOT NULL,
  `type` varchar(120) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `required_skills` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `packages` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `project_status` int(11) NOT NULL,
  `project_progress` int(120) NOT NULL,
  `project_created_date` date NOT NULL,
  `project_del_ind` int(1) NOT NULL,
  `add_proposal` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `proposal_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_total_price` varchar(200) NOT NULL,
  `duration_no` int(100) NOT NULL,
  `duration_type` int(11) NOT NULL,
  `cover_letter` varchar(260) NOT NULL,
  `images` varchar(125) NOT NULL,
  `proposal_status` int(1) NOT NULL,
  `proposal_del_ind` int(1) NOT NULL,
  `proposal_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `created_by` varchar(120) NOT NULL,
  `service_name` varchar(120) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `currency` int(11) NOT NULL,
  `price` varchar(250) NOT NULL,
  `img` varchar(120) NOT NULL,
  `service_created_date` date NOT NULL,
  `service_del_ind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_category` varchar(200) NOT NULL,
  `category_created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE `user-login` (
  `client_id` int(11) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `no_of_emp` int(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `contact` int(14) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `role` varchar(200) NOT NULL,
  `client_created_date` date NOT NULL,
  `client_del_ind` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`milestone_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`proposal_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user-login`
--
ALTER TABLE `user-login`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-login`
--
ALTER TABLE `admin-login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `milestone`
--
ALTER TABLE `milestone`
  MODIFY `milestone_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `proposal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user-login`
--
ALTER TABLE `user-login`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
