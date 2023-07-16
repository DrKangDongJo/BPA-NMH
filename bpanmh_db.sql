-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 11:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpanmh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` varchar(36) NOT NULL,
  `type` enum('applicant','project','','') NOT NULL,
  `no` varchar(3) NOT NULL,
  `street` varchar(99) NOT NULL,
  `barangay` varchar(99) NOT NULL,
  `municipality` varchar(99) NOT NULL,
  `lot_no` varchar(3) NOT NULL,
  `block_no` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `type`, `no`, `street`, `barangay`, `municipality`, `lot_no`, `block_no`) VALUES
('f2dfe35a-fad1-4760-b24c-faeadb210bf1', 'project', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` varchar(36) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `middlename` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `tin` varchar(15) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `address` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `tin`, `contact_no`, `address`) VALUES
('5d3e4e48-17ee-11ee-a01d-f47b09532450', 'Reignoel', 'Daria', 'Rodriguez', 'astra_14', '$2y$10$islkM.COcR1wlYpmWz/Tru00dTzcUM4ZICRGRX.N9f3wQDVfgcN5q', '', '09550591149', NULL),
('6c73cfb4-1889-11ee-a01d-f47b09532450', 'Jake Sebastian', 'Sena', 'Forbes', 'jakieeess', '$2y$10$1AFqtNSrhwd4dlKtdnjgqObq0hbFdKy.dsw76QXUBYMY5pBz0Jd7a', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` varchar(36) NOT NULL,
  `type` enum('tct','locational plan','specifications','structural design analysis','soil boring test','ECC/CNC','DPWH Clearance','bills of materials') NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `type`, `file`) VALUES
('017252ca-14cc-444c-95b3-378b4822f6f1', 'tct', ''),
('7679a5f6-f280-44f2-89ef-9f92db3450d8', 'tct', ''),
('82349e50-4019-4b96-a078-61dbc7d172c7', 'tct', ''),
('c01fb311-2552-49bc-af71-12904d7c0c65', 'tct', '');

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` varchar(36) NOT NULL,
  `sanitary_form` varchar(36) NOT NULL,
  `quantity` int(11) NOT NULL,
  `state` enum('NEW','EXISTING','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` varchar(36) NOT NULL,
  `architectural` varchar(36) DEFAULT NULL,
  `structural` varchar(36) DEFAULT NULL,
  `sanitary_plumbing` varchar(36) DEFAULT NULL,
  `electrical` varchar(36) DEFAULT NULL,
  `mechanical` varchar(36) DEFAULT NULL,
  `locational` varchar(36) DEFAULT NULL,
  `fsec` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `architectural`, `structural`, `sanitary_plumbing`, `electrical`, `mechanical`, `locational`, `fsec`) VALUES
('929727a0-5c0f-405a-9381-a167fcaa2629', 'f8124200-1e8d-11ee-a647-0a0027000015', NULL, NULL, 'fc6e4a88-1e8d-11ee-a647-0a0027000015', '230be65a-1e8e-11ee-a647-0a0027000015', '1cb0cab9-1e8e-11ee-a647-0a0027000015', '17c49a89-1e8e-11ee-a647-0a0027000015');

-- --------------------------------------------------------

--
-- Table structure for table `form_try`
--

CREATE TABLE `form_try` (
  `id` varchar(36) NOT NULL DEFAULT uuid(),
  `form_type` enum('sanitary','fire','electrical','') DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `form_data` varchar(123) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_architectural`
--

CREATE TABLE `f_architectural` (
  `id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_architectural`
--

INSERT INTO `f_architectural` (`id`) VALUES
('f8124200-1e8d-11ee-a647-0a0027000015');

-- --------------------------------------------------------

--
-- Table structure for table `f_electrical`
--

CREATE TABLE `f_electrical` (
  `id` varchar(36) NOT NULL,
  `scope` varchar(99) DEFAULT NULL,
  `ttl_conn_load` double DEFAULT NULL,
  `ttl_transformer_cap` double DEFAULT NULL,
  `ttl_generator_cap` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_electrical`
--

INSERT INTO `f_electrical` (`id`, `scope`, `ttl_conn_load`, `ttl_transformer_cap`, `ttl_generator_cap`) VALUES
('fc6e4a88-1e8d-11ee-a647-0a0027000015', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_fsec`
--

CREATE TABLE `f_fsec` (
  `id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_fsec`
--

INSERT INTO `f_fsec` (`id`) VALUES
('17c49a89-1e8e-11ee-a647-0a0027000015');

-- --------------------------------------------------------

--
-- Table structure for table `f_locational`
--

CREATE TABLE `f_locational` (
  `id` varchar(36) NOT NULL,
  `right_over_land` varchar(99) NOT NULL,
  `project_nature` varchar(99) NOT NULL,
  `project_tenure` varchar(99) NOT NULL,
  `project_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_locational`
--

INSERT INTO `f_locational` (`id`, `right_over_land`, `project_nature`, `project_tenure`, `project_cost`) VALUES
('1cb0cab9-1e8e-11ee-a647-0a0027000015', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_mechanical`
--

CREATE TABLE `f_mechanical` (
  `id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `f_mechanical`
--

INSERT INTO `f_mechanical` (`id`) VALUES
('230be65a-1e8e-11ee-a647-0a0027000015');

-- --------------------------------------------------------

--
-- Table structure for table `f_sanitary`
--

CREATE TABLE `f_sanitary` (
  `id` varchar(36) NOT NULL,
  `scope` varchar(99) NOT NULL,
  `water_supply` varchar(99) NOT NULL,
  `water_disposal` varchar(99) NOT NULL,
  `total_cost` varchar(99) NOT NULL,
  `prp_date_start` date NOT NULL,
  `exp_date_completion` date NOT NULL,
  `prepared_by` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_sanitary_fixtures`
--

CREATE TABLE `f_sanitary_fixtures` (
  `id` varchar(36) NOT NULL,
  `sanitary_form` varchar(36) NOT NULL,
  `description` varchar(99) NOT NULL,
  `quantity` int(11) NOT NULL,
  `state` enum('NEW','EXISTING','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_structural`
--

CREATE TABLE `f_structural` (
  `id` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_property`
--

CREATE TABLE `land_property` (
  `id` varchar(36) NOT NULL,
  `owner` varchar(36) NOT NULL,
  `tax_receipt` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `land_property`
--

INSERT INTO `land_property` (`id`, `owner`, `tax_receipt`) VALUES
('2551bcdd-3ef5-45c6-8f83-60d6f23ec24f', '', ''),
('63dc105a-ce46-43ba-82c0-5c8a11c224c6', '', ''),
('b028ef73-5088-42da-97b5-feaf377f3f55', '', ''),
('ff36e125-d20b-4757-9661-6c28b90902ae', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `plans_details`
--

CREATE TABLE `plans_details` (
  `id` varchar(36) NOT NULL,
  `form` varchar(36) DEFAULT NULL,
  `documents` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans_details`
--

INSERT INTO `plans_details` (`id`, `form`, `documents`) VALUES
('b301b5ac-9659-4408-8324-69cf6567c950', '929727a0-5c0f-405a-9381-a167fcaa2629', 'c01fb311-2552-49bc-af71-12904d7c0c65');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` varchar(36) NOT NULL,
  `title` varchar(99) NOT NULL DEFAULT 'UNTITLED',
  `owner_id` varchar(36) NOT NULL,
  `land_property` varchar(36) DEFAULT NULL,
  `plans_details` varchar(36) DEFAULT NULL,
  `address` varchar(36) DEFAULT NULL,
  `scope` varchar(99) NOT NULL,
  `char_of_occupancy` varchar(99) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `dateModified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `owner_id`, `land_property`, `plans_details`, `address`, `scope`, `char_of_occupancy`, `dateCreated`, `dateModified`) VALUES
('7e1c7005-6249-4ada-bcaf-c5ff1f96114b', 'bahay ni astraa', '5d3e4e48-17ee-11ee-a01d-f47b09532450', '63dc105a-ce46-43ba-82c0-5c8a11c224c6', 'b301b5ac-9659-4408-8324-69cf6567c950', 'f2dfe35a-fad1-4760-b24c-faeadb210bf1', '', '', '2023-07-04 09:23:59', '2023-07-04 09:23:59');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_project_forms`
-- (See below for the actual view)
--
CREATE TABLE `vw_project_forms` (
`user_id` varchar(36)
,`username` varchar(99)
,`project_id` varchar(36)
,`title` varchar(99)
,`form_id` varchar(36)
,`architectural` varchar(36)
,`structural` varchar(36)
,`sanitary_plumbing` varchar(36)
,`electrical` varchar(36)
,`mechanical` varchar(36)
,`locational` varchar(36)
,`fsec` varchar(36)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_project_forms_created`
-- (See below for the actual view)
--
CREATE TABLE `vw_project_forms_created` (
`project_id` varchar(36)
,`notNull` varchar(86)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_project_owners`
-- (See below for the actual view)
--
CREATE TABLE `vw_project_owners` (
`username` varchar(99)
,`id` varchar(36)
,`title` varchar(99)
,`owner_id` varchar(36)
,`land_property` varchar(36)
,`plans_details` varchar(36)
,`address` varchar(36)
,`scope` varchar(99)
,`char_of_occupancy` varchar(99)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_project_forms`
--
DROP TABLE IF EXISTS `vw_project_forms`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_project_forms`  AS SELECT `applicant`.`id` AS `user_id`, `applicant`.`username` AS `username`, `project`.`id` AS `project_id`, `project`.`title` AS `title`, `plans_details`.`form` AS `form_id`, `forms`.`architectural` AS `architectural`, `forms`.`structural` AS `structural`, `forms`.`sanitary_plumbing` AS `sanitary_plumbing`, `forms`.`electrical` AS `electrical`, `forms`.`mechanical` AS `mechanical`, `forms`.`locational` AS `locational`, `forms`.`fsec` AS `fsec` FROM (((`applicant` join `project` on(`applicant`.`id` = `project`.`owner_id`)) join `plans_details` on(`project`.`plans_details` = `plans_details`.`id`)) join `forms` on(`plans_details`.`form` = `forms`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_project_forms_created`
--
DROP TABLE IF EXISTS `vw_project_forms_created`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_project_forms_created`  AS SELECT `vw_project_forms`.`project_id` AS `project_id`, concat_ws(', ',case when `vw_project_forms`.`architectural` is not null then 'architectural' end,case when `vw_project_forms`.`structural` is not null then 'structural' end,case when `vw_project_forms`.`sanitary_plumbing` is not null then 'sanitary_plumbing' end,case when `vw_project_forms`.`electrical` is not null then 'electrical' end,case when `vw_project_forms`.`mechanical` is not null then 'mechanical' end,case when `vw_project_forms`.`locational` is not null then 'locational' end,case when `vw_project_forms`.`fsec` is not null then 'fsec' end) AS `notNull` FROM `vw_project_forms` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_project_owners`
--
DROP TABLE IF EXISTS `vw_project_owners`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_project_owners`  AS SELECT `applicant`.`username` AS `username`, `project`.`id` AS `id`, `project`.`title` AS `title`, `project`.`owner_id` AS `owner_id`, `project`.`land_property` AS `land_property`, `project`.`plans_details` AS `plans_details`, `project`.`address` AS `address`, `project`.`scope` AS `scope`, `project`.`char_of_occupancy` AS `char_of_occupancy` FROM (`project` join `applicant` on(`applicant`.`id` = `project`.`owner_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `address` (`address`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `architectural` (`architectural`),
  ADD KEY `structural` (`structural`),
  ADD KEY `sanitary_plumbing` (`sanitary_plumbing`),
  ADD KEY `electrical` (`electrical`),
  ADD KEY `mechanical` (`mechanical`),
  ADD KEY `locational` (`locational`),
  ADD KEY `fsec` (`fsec`);

--
-- Indexes for table `form_try`
--
ALTER TABLE `form_try`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_architectural`
--
ALTER TABLE `f_architectural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_electrical`
--
ALTER TABLE `f_electrical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_fsec`
--
ALTER TABLE `f_fsec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_locational`
--
ALTER TABLE `f_locational`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_mechanical`
--
ALTER TABLE `f_mechanical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_sanitary`
--
ALTER TABLE `f_sanitary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_sanitary_fixtures`
--
ALTER TABLE `f_sanitary_fixtures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanitary_form` (`sanitary_form`);

--
-- Indexes for table `f_structural`
--
ALTER TABLE `f_structural`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_property`
--
ALTER TABLE `land_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans_details`
--
ALTER TABLE `plans_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form` (`form`),
  ADD KEY `documents` (`documents`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`) USING BTREE,
  ADD KEY `address` (`address`) USING BTREE,
  ADD KEY `plans_details` (`plans_details`) USING BTREE,
  ADD KEY `land_property` (`land_property`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`address`) REFERENCES `address` (`id`);

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `forms_ibfk_2` FOREIGN KEY (`architectural`) REFERENCES `f_architectural` (`id`),
  ADD CONSTRAINT `forms_ibfk_3` FOREIGN KEY (`electrical`) REFERENCES `f_electrical` (`id`),
  ADD CONSTRAINT `forms_ibfk_4` FOREIGN KEY (`fsec`) REFERENCES `f_fsec` (`id`),
  ADD CONSTRAINT `forms_ibfk_5` FOREIGN KEY (`locational`) REFERENCES `f_locational` (`id`),
  ADD CONSTRAINT `forms_ibfk_6` FOREIGN KEY (`mechanical`) REFERENCES `f_mechanical` (`id`),
  ADD CONSTRAINT `forms_ibfk_7` FOREIGN KEY (`sanitary_plumbing`) REFERENCES `f_sanitary` (`id`),
  ADD CONSTRAINT `forms_ibfk_8` FOREIGN KEY (`structural`) REFERENCES `f_structural` (`id`);

--
-- Constraints for table `f_sanitary_fixtures`
--
ALTER TABLE `f_sanitary_fixtures`
  ADD CONSTRAINT `f_sanitary_fixtures_ibfk_1` FOREIGN KEY (`sanitary_form`) REFERENCES `f_sanitary` (`id`);

--
-- Constraints for table `plans_details`
--
ALTER TABLE `plans_details`
  ADD CONSTRAINT `plans_details_ibfk_1` FOREIGN KEY (`form`) REFERENCES `forms` (`id`),
  ADD CONSTRAINT `plans_details_ibfk_2` FOREIGN KEY (`documents`) REFERENCES `documents` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`address`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`owner_id`) REFERENCES `applicant` (`id`),
  ADD CONSTRAINT `project_ibfk_3` FOREIGN KEY (`land_property`) REFERENCES `land_property` (`id`),
  ADD CONSTRAINT `project_ibfk_4` FOREIGN KEY (`plans_details`) REFERENCES `plans_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
