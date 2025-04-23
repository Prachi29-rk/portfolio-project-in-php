-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 04:42 AM
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
-- Database: `a2zportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_title` text DEFAULT NULL,
  `about_content` text DEFAULT NULL,
  `linkedin_link` text DEFAULT NULL,
  `github_link` text NOT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `whatsapp_no` varchar(30) DEFAULT NULL,
  `about_image` text DEFAULT NULL,
  `cv_resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_title`, `about_content`, `linkedin_link`, `github_link`, `twitter_link`, `youtube_link`, `whatsapp_no`, `about_image`, `cv_resume`) VALUES
(4, 'Full Stack Web Developer', 'Hi! I am Prachi Ghodechor .<br> Full Stack PHP Web Developer <br>\r\n<p>PHP is an open-source, interpreted, and object-oriented scripting language mainly used for backend development. It runs on a web server and is widely used for building dynamic and interactive websites.</p>', 'www.linkednin.com', 'www.github.com', 'www.twitter.com', 'www.youtube.com', '8767576420', 'uploads/3.jpg', 'uploads/PRACHI GHODECHOR RESUME.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'rk@gmail.com', 'radheradhe');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `contact_name` text DEFAULT NULL,
  `contact_email` text DEFAULT NULL,
  `contact_message` text DEFAULT NULL,
  `contact_mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `contact_name`, `contact_email`, `contact_message`, `contact_mobile`) VALUES
(1, 'Vaishnavi G.', 'v@gmail.com', 'Help me with front end technology....', '8767876765'),
(2, 'Mohini T.', 'm@gmail.com', 'Can you help me with Technologies like HTML, CSS , JS Frameworks.........', '8767654543'),
(3, 'Vaishnavi T.', 'v@gmail.com', 'Help with full stack development.........', '76567687');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `e_id` int(11) NOT NULL,
  `company_name` text DEFAULT NULL,
  `c_location` text DEFAULT NULL,
  `technologies` text DEFAULT NULL,
  `working_details` text DEFAULT NULL,
  `company_image` text DEFAULT NULL,
  `j_date` date DEFAULT NULL,
  `l_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`e_id`, `company_name`, `c_location`, `technologies`, `working_details`, `company_image`, `j_date`, `l_date`) VALUES
(2, 'A2Z IT HUB', 'Ahmednagar', 'HTML', 'At A2Z IT HUB PVT. LTD., we prioritize quality and user satisfaction. Our custom solutions are designed to meet your specific needs, ensuring a perfect fit for your business.\r\n\r\n', 'uploads/aa.png', '2025-03-03', '0000-00-00'),
(3, 'C TECH', 'Address: Shakambhari Complex, Newasa Shevgaon Road, Kukana, Ahmednagar - 414604, Near Kukana Highschool ; Phone: +912427211686, +918975911431, +919762677806.', 'MSCIT', 'The registered office of C-Tech Computers Kukana is located at Ward No 5, Shakambhari Comlex, Tal Newasa, Shevgaon Road, Kukana, Maharashtra. ', 'uploads/14041.png', '2024-07-04', '2025-01-10'),
(4, 'Orange Itech', 'Orange Business Slovakia s.r.o.. Metodova 8. 82108Bratislava. .', 'FRONT END', 'Monday to Friday, 9:30 AM to 6:00 PM with most locations closed on weekends; however, specific timings may vary depending on the location and role within the company. ', 'uploads/20246.png', '2025-03-28', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_title` text DEFAULT NULL,
  `project_details` text DEFAULT NULL,
  `project_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_title`, `project_details`, `project_image`) VALUES
(6, 'Event Management..', 'This includes features for adding, editing, and deleting event details like dates, times, locations, and descriptions.', 'uploads.154070.png'),
(7, 'Construction Website', 'SCON Construction Website.<br> This is website using Front End Technology.', 'uploads.11827.png'),
(8, 'Hospital Website', 'Saiideep Hospital Website using HTML And CSS Only', 'uploads.183647.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `r_id` int(11) NOT NULL,
  `r_title` text DEFAULT NULL,
  `rs_title` text DEFAULT NULL,
  `r_details` text DEFAULT NULL,
  `r_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`r_id`, `r_title`, `rs_title`, `r_details`, `r_image`) VALUES
(1, 'Prachi', 'Web Developer', 'A web developer plays a crucial role in building, maintaining, and optimizing websites and web applications. They possess a strong understanding of coding languages such as HTML, CSS, JavaScript, and backend technologies like PHP, Python, or Node.js.', 'uploads.137456.png'),
(2, 'Dada S.G.', 'Front End Developer', 'A web developer plays a crucial role in building, maintaining, and optimizing websites and web applications. They possess a strong understanding of coding languages such as HTML, CSS, JavaScript, and backend technologies like PHP, Python, or Node.js.', 'uploads.199559.png');

-- --------------------------------------------------------

--
-- Table structure for table `servicedown`
--

CREATE TABLE `servicedown` (
  `service_id` int(11) NOT NULL,
  `service_title` text DEFAULT NULL,
  `service_content` text DEFAULT NULL,
  `service_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicedown`
--

INSERT INTO `servicedown` (`service_id`, `service_title`, `service_content`, `service_image`) VALUES
(1, 'Happy Clients', '220', 'uploads/6305.png'),
(2, 'Projects Completed', '700', 'uploads/4153.png'),
(3, 'Lines Of Code', '1100', 'uploads/3183.png'),
(4, 'Awards Achieved', '160', 'uploads/23346.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` text DEFAULT NULL,
  `service_content` text DEFAULT NULL,
  `service_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_content`, `service_image`) VALUES
(1, 'Software Development', 'Software development is the process of designing, coding, testing, and maintaining applications, frameworks, and other software components. ', 'uploads/7117.png'),
(4, 'Web Development', 'Web development is the process of designing, building, and maintaining websites or web applications.', 'uploads/8165.png'),
(5, 'Responsive Design', 'Responsive Web Design (RWD) is an approach that ensures websites look and function optimally on all devices, from desktops to tablets and smartphones. ', 'uploads/10761.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(100) DEFAULT NULL,
  `slider_content` text DEFAULT NULL,
  `slider_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_content`, `slider_image`) VALUES
(27, 'Hi! I am Prachi G.', 'Web Developer and designer', 'uploads/bg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `servicedown`
--
ALTER TABLE `servicedown`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicedown`
--
ALTER TABLE `servicedown`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
