-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 04:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `firstname`, `lastname`, `contact`) VALUES
(1, 2022946, 'Razz', 'Nakarmi', '9863476658'),
(3, 2023014, 'ads', 'asdfd', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendance_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `date`, `attendance_id`) VALUES
(1, 2022947, '2022-05-25', 'absent'),
(2, 2022948, '2022-05-25', 'present'),
(3, 2022949, '2022-05-25', 'absent'),
(4, 2022950, '2022-05-25', 'present'),
(5, 2022951, '2022-05-25', 'present'),
(6, 2022952, '2022-05-25', 'absent'),
(7, 2022947, '2022-05-26', 'present'),
(8, 2022948, '2022-05-26', 'absent'),
(9, 2022949, '2022-05-26', 'present'),
(10, 2022950, '2022-05-26', 'present'),
(11, 2022951, '2022-05-26', 'present'),
(12, 2022952, '2022-05-26', 'present'),
(13, 2022947, '2022-05-28', 'present'),
(14, 2022948, '2022-05-28', 'absent'),
(15, 2022949, '2022-05-28', 'present'),
(16, 2022950, '2022-05-28', 'absent'),
(17, 2022951, '2022-05-28', 'absent'),
(18, 2022952, '2022-05-28', 'present'),
(19, 2022947, '2022-05-30', 'present'),
(20, 2022948, '2022-05-30', 'present'),
(21, 2022949, '2022-05-30', 'present'),
(22, 2022950, '2022-05-30', 'present'),
(23, 2022951, '2022-05-30', 'present'),
(24, 2022952, '2022-05-30', 'present'),
(25, 2022947, '2022-06-01', 'present'),
(26, 2022948, '2022-06-01', 'present'),
(27, 2022949, '2022-06-01', 'present'),
(28, 2022950, '2022-06-01', 'present'),
(29, 2022951, '2022-06-01', 'absent'),
(30, 2022952, '2022-06-01', 'absent'),
(31, 2023003, '2022-06-01', 'absent'),
(132, 2022947, '2022-06-02', 'absent'),
(133, 2022948, '2022-06-02', 'absent'),
(134, 2022949, '2022-06-02', 'absent'),
(135, 2022950, '2022-06-02', 'absent'),
(136, 2022951, '2022-06-02', 'absent'),
(137, 2022952, '2022-06-02', 'absent'),
(138, 2023010, '2022-06-02', 'absent'),
(139, 2022946, '2022-06-04', 'present'),
(140, 2022947, '2022-06-04', 'absent'),
(141, 2022947, '2022-06-16', 'present'),
(142, 2022948, '2022-06-16', 'absent'),
(143, 2022949, '2022-06-16', 'absent'),
(144, 2022950, '2022-06-16', 'absent'),
(145, 2022951, '2022-06-16', 'present'),
(146, 2022952, '2022-06-16', 'present'),
(147, 2022953, '2022-06-16', 'present'),
(148, 2023015, '2022-06-16', 'present'),
(149, 2023016, '2022-06-16', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `department_id`, `course_id`, `level`) VALUES
(465, 1, 1010, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `course_id`) VALUES
(1, 'BCA', 1010),
(2, 'BSW', 1011),
(3, 'BBS', 1012);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department`, `course_id`, `description`) VALUES
(2, 'BCA', 1010, 'Bachelor in Computer Application'),
(3, 'BSW', 1011, 'Bachelor in Social Work'),
(4, 'BBS', 1012, 'Bachelor in Business Studies');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_id`, `firstname`, `lastname`, `course_id`, `contact`) VALUES
(3, 2023012, 'Instructor', 'DS', 1010, ''),
(4, 2023013, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `date_sent` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sent_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `date_sent`, `message`, `sent_by`) VALUES
(18, '28-06-2022 10:13:26pm', 'IS THIS REAL', 'admin'),
(19, '28-06-2022 10:14:54pm', 'Hello', 'admin'),
(20, '28-06-2022 10:27:15pm', 'sefg', 'admin'),
(21, '28-06-2022 10:27:34pm', 'kik[[', 'admin'),
(22, '28-06-2022 10:28:01pm', 'ooo', 'admin'),
(23, '28-06-2022 10:28:53pm', 'uuu', 'admin'),
(24, '03-07-2022 01:41:00am', 'what is ti', 'faculty'),
(25, '03-07-2022 01:41:05am', 'dfsdferg', 'faculty'),
(26, '03-07-2022 04:29:04pm', 'what is ti', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `user_id`, `location`) VALUES
(1, 2022946, 'uploads/avatar/profile-2022946.jpg'),
(18, 2022947, ''),
(19, 2022948, ''),
(20, 2022949, ''),
(21, 2022951, ''),
(22, 2022952, ''),
(23, 2022953, 'uploads/avatar/profile-2023010.jpg'),
(32, 2023012, 'uploads/avatar/profile-2023012.png'),
(39, 2023013, ''),
(40, 2023014, 'uploads/avatar/profile-2023014.png'),
(42, 2023016, ''),
(43, 2023017, ''),
(44, 2023018, ''),
(45, 2023019, ''),
(46, 2023020, ''),
(47, 2023021, ''),
(48, 2023022, 'uploads/avatar/profile-2023022.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `firstname`, `lastname`, `course_id`, `contact`) VALUES
(1, 2022947, 'bibek', '', '0', ''),
(2, 2022948, 'prabesh', '', '0', ''),
(3, 2022949, 'milan', '', '0', ''),
(4, 2022950, 'samrat', '', '0', ''),
(5, 2022951, 'raj', '', '0', ''),
(6, 2022952, 'ishwori', '', '0', ''),
(7, 2022953, 'asd', '', '0', ''),
(18, 2023016, '', '', '1010', ''),
(19, 2023018, '', '', '1010', ''),
(20, 2023019, '', '', '', ''),
(21, 2023020, '12', '12', '00', '42'),
(22, 2023021, '', '', '1010', ''),
(23, 2023022, 'teata', 'tttaaa', '1010', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment`
--

CREATE TABLE `student_assignment` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `floc` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `datein` varchar(50) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assignment`
--

INSERT INTO `student_assignment` (`id`, `assignment_id`, `floc`, `fname`, `datein`, `fdesc`, `subject_code`, `student_id`) VALUES
(22, 1231, 'uploads/CACS1012022946123122-05-2022 12:08:26am.png', 'CACS1012022946123122-05-2022 12:08:26am.png', '22-05-2022 12:08:26am', 'Hello', 'CACS101', 2022946),
(23, 1231, 'uploads/CACS1012022946123122-05-2022 12:08:56am.png', 'CACS1012022946123122-05-2022 12:08:56am.png', '22-05-2022 12:08:56am', 'Hello', 'CACS101', 2022946),
(24, 1231, 'uploads/CACS10120229951231sd22-05-2022 03:29:02am.png', 'CACS10120229951231sd22-05-2022 03:29:02am.png', '22-05-2022 03:29:02am', 'asd', 'CACS101', 2022995),
(25, 1231, 'uploads/CACS1012022946123116-06-2022 01:33:22am.jpg', 'CACS1012022946123116-06-2022 01:33:22am.jpg', '16-06-2022 01:33:22am', 'Hello', 'CACS101', 2022946),
(27, 0, 'uploads/CACS1012023012klk03-07-2022 01:43:12am.jpg', 'CACS1012023012klk03-07-2022 01:43:12am.jpg', '03-07-2022 01:43:12am', 'klkl', 'CACS101', 2023012),
(28, 1231, 'uploads/CACS10120230121231s03-07-2022 01:44:16am.png', 'CACS10120230121231s03-07-2022 01:44:16am.png', '03-07-2022 01:44:16am', 'Hello', 'CACS101', 2023012),
(29, 1231, 'uploads/CACS1012023012123103-07-2022 01:44:25am.jpg', 'CACS1012023012123103-07-2022 01:44:25am.jpg', '03-07-2022 01:44:25am', 'Hello2', 'CACS101', 2023012),
(30, 1231, 'uploads/CACS10120230121231s03-07-2022 01:45:35am.jpg', 'CACS10120230121231s03-07-2022 01:45:35am.jpg', '03-07-2022 01:45:35am', 'wser', 'CACS101', 2023012),
(31, 0, 'uploads/CACS1012023012werf03-07-2022 01:45:52am.jpg', 'CACS1012023012werf03-07-2022 01:45:52am.jpg', '03-07-2022 01:45:52am', 'werf', 'CACS101', 2023012),
(32, 45, 'uploads/CACS10120230224503-07-2022 02:25:20am.png', 'CACS10120230224503-07-2022 02:25:20am.png', '03-07-2022 02:25:20am', '45t', 'CACS101', 2023022);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `module` mediumtext NOT NULL,
  `materials_loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_code`, `course_id`, `level`, `description`, `module`, `materials_loc`) VALUES
(1, 'CACS101', 1010, 'First', 'Computer Fundamentals And Applications', '<h4>Course Description</h4>\n    <p>\n      This course offers fundamental concepts of computer and computing which includes introduction to computer system, computer software & database management system, operating system, data communication & computer network and contemporary technologies. It also aims at helping students convert theoretical concept into practical skill through the use of different application packages including word processor, spreadsheet package, presentation package and photo editing graphical package.\n    </p>\n\n\n    <h4>Course Objectives</h4>\n    <p>\n      The general objectives of this course are to provide fundamental concepts of information and communication technology and to make students capable of using different application packages in their personal as well as professional life.\n    </p>\n\n\n    <h4>Units and Unit Content </h4>\n    <h5>1. Introduction to Computer System</h5>\n    <p>\n      teaching hours: 16 hrs\n      Introduction to Computer, Characteristics of Computer, Applications of Computer, Classifications of Computer, Mobile Computing, Anatomy of Digital Computer, Computer Architecture, Memory and its Classifications, Input devices, Output devices, Interfaces.\n    </p>\n    <h5>2. Computer Software</h5>\n    <p>\n      teaching hours: 3 hrs\n      Introduction to Software, Types of Software, Program vs Software, Computer Virus and antivirus.\n    </p>\n    <h5>3. Operating System</h5>\n    <p>\n      teaching hours: 4 hrs\n      Introduction to Operating System, Function of Operating System, Types of Operating System, Open Source Operating System.\n    </p>\n    <h5>4. Database Management System</h5>\n    <p>\n      teaching hours: 8 hrs\n      Introduction to DBMS, Database Models, SQL, Database Design and Data Security, Data Warehouse, Data Mining, Database Administrator\n    </p>\n    <h5>5. Data Communication and computer Network</h5>\n    <p>\n      teaching hours: 10 hrs\n      Introduction to Communication system, Mode of Communication, Introduction to Computer Networks,Types of Computer Networks, LAN Topologies,Transmission Media, Network Devices, OSI References Model, Communication Protocols, Centralized vs Distributed System.\n    </p>\n    <h5>6. Internet and WWW</h5>\n    <p>\n      teaching hours: 6 hrs\n      Internet: Introduction to internet and its applications, Connecting to the Internet , Client/Server Technology, Internet as a Client/Server Technology, Email, Video-Conferencing, Internet Service Providers, Domain, Name Server, Internet Address, Internet Protocols, (IP, TCP, HTTP, FIP, SMTP, POP, Telnet, Gopher, WAIS), Introduction to Intranet, Internet vs Intranet vs Extranet, Advantages and Disadvantages of Intranet\n\n      World Wide Web(WWW): World Wide Web and its Evolution, Architecture of Web and its Evolution, , Architecture of Web, Uniform Resource Locator(URL), Browsers: Internet Explorer, Netscape Navigator, Opera, Firefox, Chrome, Mozilla; Search Engine, Web Servers: Apache, IIS, Proxy Server, HTTP Protocol, FTP protocol\n    </p>\n\n\n    <h5>7. Contemporary Technologies</h5>\n    <p>\n      teaching hours: 13 hrs\n      Multimedia, e-Commerce, e-Learning,e-Governance,e-Banking, Hypermedia, Geographical Information System, Virtual Reality, Augmented Realty, Artificial Intelligence, Ambient Intelligence, Robotics, Bit Coin.\n    </p>', ''),
(2, 'CASO102', 1010, 'First', 'Society And Technology', '', ''),
(3, 'CAEN103', 1010, 'First', 'English I', '', ''),
(4, 'CAMT104', 1010, 'First', 'Mathematics I', '', ''),
(5, 'CACS105', 1010, 'First', 'Digital Logic', '', ''),
(26, 'cacs', 1011, '1', 'Hello', '', ''),
(27, 'tesa', 1012, 'first', 'Test2', '', ''),
(28, '123', 123, '123', '123', '', ''),
(29, 'sada', 1011, 'first', 'ghee', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject_materials`
--

CREATE TABLE `subject_materials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `file_location` varchar(50) NOT NULL,
  `subject_code` varchar(11) NOT NULL,
  `uploaded_by` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_materials`
--

INSERT INTO `subject_materials` (`id`, `name`, `description`, `file_location`, `subject_code`, `uploaded_by`, `date`) VALUES
(6, 'aa.jpg', 'Hello', 'files/aa.jpg', 'CACS101', 'admin', '21-06-2022'),
(7, 'aaa.jpg', 'Hello', 'files/aaa.jpg', 'CACS101', 'admin', '21-06-2022'),
(8, 'sdfsd.png', 'fsdfdsf', 'files/sdfsd.png', 'CACS101', 'admin', '21-06-2022'),
(9, 'sdfsdf.png', 'ghjghjgh', 'files/sdfsdf.png', 'CASO102', 'admin', '21-06-2022');

-- --------------------------------------------------------

--
-- Table structure for table `sys_info`
--

CREATE TABLE `sys_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_info`
--

INSERT INTO `sys_info` (`id`, `title`, `content`) VALUES
(1, 'heading', '<h1>Start Learning<span class=\"d-sm-flex text-warning\">What You Find Interesting</span></h1>'),
(2, 'hparagraph', '<p class=\"lead my-4\">Expand your opportunities with courses of your own choice. We provide the tools and skills to teach what you love.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `person`) VALUES
(2022946, 'admin', 'darkrazznakarmi@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(2022947, 'bibek', 'bibek@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'student'),
(2022948, 'prabesh', 'prabesh@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'student'),
(2022949, 'milan', 'milan@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'student'),
(2022950, 'smarat', 'samrat@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'student'),
(2022951, 'razz', 'razz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'student'),
(2022952, 'ishwori', 'ishwori@gmail.com', '0192023a7bbd73250516f069df18b500', 'student'),
(2022953, 'student', 'student@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'student'),
(2023012, 'faculty', 'faculty@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'faculty'),
(2023013, 'asba', 'asba@gmail.com', '154ea795fb744639489d46ed04c137a4', 'faculty'),
(2023014, 'admin2', 'admin2@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(2023016, 'test1', 'test1@gmail.com', '2475c20d9e9a1aaee80dcbc4e6316157', 'student'),
(2023017, 'tea', 'test3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
(2023018, 'asd', 'asd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'student'),
(2023019, 'asdasd', 'assd@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'student'),
(2023020, 'qwe', 'asdsad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'student'),
(2023021, 'ter', 'ter@gmail.com', '322650e1328739dbca646008305dd95e', 'student'),
(2023022, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `log_id` int(11) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_assignment`
--
ALTER TABLE `student_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_materials`
--
ALTER TABLE `subject_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_info`
--
ALTER TABLE `sys_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student_assignment`
--
ALTER TABLE `student_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subject_materials`
--
ALTER TABLE `subject_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sys_info`
--
ALTER TABLE `sys_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023023;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
