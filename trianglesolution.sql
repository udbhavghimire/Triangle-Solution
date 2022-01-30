-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 10:01 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trianglesolution`
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
(5, 'Detailed Sanitation Assessment in Changunarayan Municipality', 'Changunarayan Municipality', 'Completed', ' '),
(6, 'Development of Faecal Sludge Management (FSM) Act in Changunarayan Municipality', 'Changunarayan Municipality', 'Completed', ' '),
(7, 'Appraisal and Translation (Nepali to English and Vice Versa) of Various WASH Documents City ', 'SNV Nepal', 'Completed', '•	Sanitation Plan of Jumla, Birendranagar, Nepalgunj and Khadak Municipality (Draft) <br>\r\n•	Operation and Maintenance manual for integrated Solid Waste and Faecal Sludge Treatment Plant <br>\r\n•	Faecal Sludge Management Policy of Municipality (Draft) <br>\r\n•	Occupational Health and Safety Guideline <br>\r\n\r\n'),
(8, 'Design of Wastewater Treatment System in Madan Bhandari University of Science and Technology, Chitlang', 'Madan Bhandari University of Science and Technology', 'Completed', ' '),
(9, 'Design of Faecal Sludge Treatment System in Lamkichuha municipality, Kailali', 'Water Supply and Sanitation Division Office Dhangadhi, Kailali', 'Completed', ' '),
(10, 'Design of Faecal Sludge Treatment System in Gauriganga municipality, Kailali ', 'Water Supply and Sanitation Division Office Dhangadhi, Kailali', 'Completed', ' '),
(11, 'Customer Satisfaction Survey of KUKL water services', 'JICA/KUKL', 'Ongoing', ' '),
(12, 'Design of Wastewater Treatment System in the Western Regional Hospital, Pokhara', 'National Health Sector Support Program, UK Aid', 'Ongoing', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
