-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2022 at 08:51 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u295830655_triangle`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL,
  `p_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `c_name`, `p_status`, `p_details`) VALUES
(5, 'Detailed Sanitation Assessment in Changunarayan Municipality', 'Changunarayan Municipality', 'Completed', ''),
(6, 'Development of Faecal Sludge Management (FSM) Act in Changunarayan Municipality', 'Changunarayan Municipality', 'Completed', ''),
(7, 'Appraisal and Translation (Nepali to English and Vice Versa) of Various WASH Documents City ', 'SNV Nepal', 'Completed', '<ul>\r\n	<li>Sanitation Plan of Jumla, Birendranagar, Nepalgunj and Khadak Municipality (Draft)</li>\r\n	<li>Operation and Maintenance manual for integrated Solid Waste and Faecal Sludge Treatment Plant</li>\r\n	<li>Faecal Sludge Management Policy of Municipality (Draft)</li>\r\n	<li>Occupational Health and Safety Guideline</li>\r\n</ul>\r\n'),
(8, 'Design of Wastewater Treatment System in Madan Bhandari University of Science and Technology, Chitlang', 'Madan Bhandari University of Science and Technology', 'Completed', ' '),
(9, 'Design of Faecal Sludge Treatment System in Lamkichuha municipality, Kailali', 'Water Supply and Sanitation Division Office Dhangadhi, Kailali', 'Completed', ' '),
(10, 'Design of Faecal Sludge Treatment System in Gauriganga municipality, Kailali ', 'Water Supply and Sanitation Division Office Dhangadhi, Kailali', 'Completed', ' '),
(11, 'Customer Satisfaction Survey of KUKL water services', 'JICA/KUKL', 'Ongoing', ' '),
(12, 'Design of Wastewater Treatment System in the Western Regional Hospital, Pokhara', 'National Health Sector Support Program, UK Aid', 'Ongoing', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `admin_status`) VALUES
(3, 'Vishal', 'Dhakal', 'vishaldhakal96@gmail.com', 'vishal', '$2y$10$GR2pdbqMyYwyKJ7toMiWa.1rHdai.ts6VpcMmkHuk8/ahfLF6H2uK', 1),
(4, 'Triangle', 'Solution', 'trianglesolution@gmail.com', 'triangleadmin', '$2y$10$T97hIfOWCg5v8ZKKZBHqG.1YAxQvvCF2WXf4lqcI2ygYj.ZNhJxOq', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
