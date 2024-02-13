-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 11:18 AM
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
-- Database: `freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `numberOfJobs` int(11) NOT NULL,
  `imageRUL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`, `numberOfJobs`, `imageRUL`) VALUES
(1, 'Software Development', 0, 'http://localhost/freelancer/imgs/software%20dev.webp'),
(2, 'Content Creator', 0, 'http://localhost/freelancer/imgs/contentCreaor.webp'),
(3, 'Music & Audio', 0, 'http://localhost/freelancer/imgs/Music%20&%20Audio.jpg'),
(4, 'YouTuber', 0, 'http://localhost/freelancer/imgs/youutube.webp'),
(5, 'Business', 0, 'http://localhost/freelancer/imgs/business.jpeg'),
(6, 'Video & Animation', 0, 'http://localhost/freelancer/imgs/Video%20&%20Animation.png'),
(7, 'Writing & Translation', 0, 'http://localhost/freelancer/imgs/Writing%20&%20Translation.jpg'),
(8, 'Digital Marketing', 0, 'http://localhost/freelancer/imgs/Digital%20Marketing.png'),
(9, 'Graphics & Design', 0, 'http://localhost/freelancer/imgs/Graphics%20&%20Design.png'),
(10, 'Web Development', 0, 'http://localhost/freelancer/imgs/webdev.png'),
(11, 'WordPress', 6, 'http://localhost/freelancer/imgs/wordpress.png'),
(12, 'Voice Over', 5, 'http://localhost/freelancer/imgs/vover.webp'),
(13, 'AI', 5, 'http://localhost/freelancer/imgs/1.jpeg'),
(14, 'Video Explainer', 5, 'http://localhost/freelancer/imgs/vexplainer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `category` int(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `start_time` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `short_description`, `long_description`, `category`, `price`, `start_time`, `user_id`) VALUES
(4, 'Line Height', 'This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element', 'This is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.\r\n\r\nThis is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.\r\n\r\nThis is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.\r\n\r\nThis is a long paragraph written to show how the line-height of an element is affected by our utilities. Classes are applied to the element itself or sometimes the parent element. These classes can be customized as needed with our utility API.', 7, 20000000.00, '2024-03-07 15:02:00', 1),
(5, 'MindStudio AI Workflow Tool', 'We are seeking a skilled professional to utilize MindStudio to develop a comprehensive workflow/AI tool specifically designed for instructional designers. The tool should encompass each phase of the ADDIE Model and provide step-by-step guidance and suggestions throughout the instructional design process.', 'We are seeking a skilled professional to utilize MindStudio to develop a comprehensive workflow/AI tool specifically designed for instructional designers. The tool should encompass each phase of the ADDIE Model and provide step-by-step guidance and suggestions throughout the instructional design process. This will be a multiple workflow AI with each workflow covering a step of the ADDIE process (analyse, design, develop, implement, evaluate). The main goal is to streamline and enhance the efficiency of instructional design by leveraging MindStudio\'s capabilities.\r\n\r\nRelevant skills:\r\n- Proficiency in using MindStudio or understanding of similar AI tools.\r\n-Basic understanding of basic syntax/coding.\r\n- Ability to create user-friendly and intuitive interfaces\r\n- Experience in developing AI tools and workflows\r\n-Able to extract relevant information from our learning resources related to the ADDIE Model/Instructional Design process and determine how best leverage MindStudio to streamline the instructional design process.\r\n\r\nMindstudio is advertised as \'a powerful new tool that makes it possible for anyone to build and launch AI apps and businesses without needing any specialized knowledge in programming or machine learning\'. Despite being user friendly and intuitive, we had difficulty dealing with the complexities of the tool when trying to build this ourselves. We wanted to use MindStudio as opposed to GPTs due to its ability to', 13, 2000000.00, '2024-03-01 15:06:00', 1),
(6, 'Educational Deepfake Experience', 'I am seeking a talented professional to create an educational deepfake video project with the following focus:', 'I am seeking a talented professional to create an educational deepfake video project with the following focus:\r\n\r\n- **Purpose:** Utilize deepfake technology for educational purposes to engage the general public at live events.\r\n- **Audience:** Crafted specifically for the general public, aiming to educate through an immersive and innovative experience.\r\n- **Duration:** Expected to complete the project within a 1-3 month timeframe.\r\n\r\n**Skills and Experience Required:**\r\n\r\n- Proven expertise in deepfake technology and tools.\r\n- Ability to create realistic audio and video deepfakes in real-time.\r\n- Experience in delivering presentations or performances in public settings.\r\n- Strong portfolio with relevant work in video creation and AI-driven effects.\r\n- Creativity in storytelling and educational content delivery.\r\n- Excellent collaboration and communication skills.\r\n\r\nIf you have the expertise in AI, video editing, and public presentations, please bid on this project for the opportunity to contribute to a groundbreaking educational experience.\r\nSkills Required\r\nMachine Learning (ML)\r\nAI Development\r\nAI Model Development\r\nAI Mobile App Development\r\nAI Model Integration', 13, 10000000.00, '2024-02-20 15:36:00', 1),
(7, 'How to build a WordPress website for your small business', 'Learn the steps required to build a professional WordPress site for your business. Anyone can build a WordPress site. And we show you how!', 'Is it possible to build a website without any programming knowledge whatsoever? Duh, of course it is! WordPress has made it so that anyone can build a website without being a professional web developer. \r\n\r\nWordPress is a highly flexible system with an enormous community surrounding it. In 2022, nearly 2,500 people contributed code to the core WordPress system. Wow!\r\n\r\nLet\'s take a deep dive into how to:\r\n\r\nSet up your own WordPress site, including registering a domain and purchasing web hosting. \r\n\r\nDownload and install WordPress. \r\n\r\nCustomizE a beautiful theme to make your WordPress site look professional. \r\n\r\nAdd content to your \r\n\r\nWordPress site\r\n\r\n, such as pages and blog posts. \r\n\r\nEnhance your WordPress installation with extra plugins from WordPress.org\'s vast library of plugins. \r\n\r\nOptimizE your WordPress website so that it has better chances of ranking well on search engines. ', 12, 100000.00, '2024-02-15 12:01:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messgaeid` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `message` text NOT NULL,
  `message_stutus` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messgaeid`, `senderid`, `receiverid`, `message`, `message_stutus`, `time`) VALUES
(1, 1, 0, 'vv', 'unseen', '2024-02-13 11:42:54'),
(2, 1, 1, 'vv', 'unseen', '2024-02-13 11:53:07'),
(3, 4, 4, 'hola', 'unseen', '2024-02-13 12:05:42'),
(4, 1, 1, 'oi', 'unseen', '2024-02-13 12:15:42'),
(5, 4, 1, 'Hola turbin', 'unseen', '2024-02-13 12:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `username`, `email`, `phonenumber`, `location`, `password`) VALUES
(1, 'Turbin Masawe', 'kiki', 'turbinalphonce@gmail.com', '0753070867', 'Kimara Mwisho', '$2y$10$YTHBQ7Imq7dkfEpqtD4.LeVEdQmnB2RJg992tE1tUMBKEG8XT64vq'),
(3, 'Turbin Masawe', 'kikij', 'turbinalphonce@gmail.com', '0753070867', 'Kimara Mwisho', '$2y$10$4YWudZkw12Msy7/hpQ5v5.GmCS6OYPXW9nj4aef6.KvDL2B6ysiGa'),
(4, 'leuyax', 'leu', 'leuyaxt@gmail.com', '0753070867', 'bunju', '$2y$10$4E9kGVmHpW4/PllMUPxvH.x/GkIOnuzfsZTxHqQehwQFSUB7vdE5.'),
(5, 'jobo', 'jobo', 'turbinalphonce@gmail.com', '0753070867', 'jobo', '$2y$10$Ot83gtz/i51aw2uB07E/7.xlxI0C0M1WUD6djlHNGaIIJ2FwV8nX.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messgaeid`),
  ADD KEY `senderid` (`senderid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messgaeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`category`) REFERENCES `categories` (`categoryid`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_foreign_key_senderid` FOREIGN KEY (`senderid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
