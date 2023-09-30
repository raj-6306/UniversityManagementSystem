-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 23, 2023 at 07:14 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL auto_increment,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'GENERAL'),
(2, 'OBC'),
(3, 'SC'),
(4, 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(20) NOT NULL auto_increment,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'America');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(20) NOT NULL auto_increment,
  `course_name` varchar(255) NOT NULL,
  `course_total_fees` int(50) NOT NULL,
  `course_about` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `course_eli` varchar(255) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_total_fees`, `course_about`, `course_duration`, `course_eli`) VALUES
(1, 'BCA', 60000, 'Bachelor Of Computer Application', '3year ', 'You must Pass 50%+ in 10th 1nd 12th in any stream or any borad'),
(2, 'MCA', 100000, 'Master in Computer Application ', '2year', 'You must graduate any stream and marks 60%minimum'),
(3, 'PGDCA', 20000, 'Post Diploma in Computer Application', '1 year', 'Student must have completed a bachelor''s degree with minimum of 40% aggregate from a recognized university '),
(4, 'BBA', 50000, 'Bachelor of Business Administration ', '3year', 'Student Must have complete inter in any recognized board with 50% minimuum marks');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `desi_id` int(50) NOT NULL auto_increment,
  `desi_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`desi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desi_id`, `desi_name`) VALUES
(1, 'Plz Select'),
(2, 'Lecturer'),
(3, 'Assi.Profecer'),
(4, 'Profecer'),
(5, 'Registar'),
(6, 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int(255) NOT NULL auto_increment,
  `exam_title` varchar(255) NOT NULL,
  `exam_course` varchar(255) NOT NULL,
  `exam_subject` varchar(255) NOT NULL,
  `exam_date` varchar(255) NOT NULL,
  `exam_shift` varchar(255) NOT NULL,
  `exam_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`exam_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_title`, `exam_course`, `exam_subject`, `exam_date`, `exam_shift`, `exam_desc`) VALUES
(1, 'year', '1', '2', '2024-05-31', 'Evening(2pm-5pm)', 'shuakla'),
(15, 'unit1', '1', '1', '2023-08-11', 'Morning(10am-1pm)', ''),
(4, 'unit', '2', '4', '2023-08-07', 'Morning(10am-1pm)', 'desamkm'),
(8, 'unit1', '1', '1', '2023-02-08', 'Evening(2pm-5pm)', 'shuakskssnj'),
(14, 'year', '2', '6', '2023-08-02', 'Evening(2pm-5pm)', 'jij'),
(16, 'year', '1', '7', '2023-08-22', 'Morning(10am-1pm)', 'weer');

-- --------------------------------------------------------

--
-- Table structure for table `facality`
--

CREATE TABLE IF NOT EXISTS `facality` (
  `f_id` int(20) NOT NULL auto_increment,
  `f_name` varchar(255) NOT NULL,
  `f_dob` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_phone` varchar(255) NOT NULL,
  `f_gen` varchar(255) NOT NULL,
  `f_cat` varchar(255) NOT NULL,
  `f_qual` varchar(255) NOT NULL,
  `f_ex` varchar(255) NOT NULL,
  `f_Aoi` varchar(255) NOT NULL,
  `f_desi` varchar(255) NOT NULL,
  `f_net` varchar(255) NOT NULL,
  `f_phd` varchar(255) NOT NULL,
  `f_status` varchar(255) NOT NULL,
  `f_image` varchar(255) NOT NULL,
  `f_que` varchar(255) NOT NULL,
  `f_ans` varchar(255) NOT NULL,
  `f_pass` varchar(255) NOT NULL,
  `f_cpass` varchar(255) NOT NULL,
  PRIMARY KEY  (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `facality`
--

INSERT INTO `facality` (`f_id`, `f_name`, `f_dob`, `f_email`, `f_phone`, `f_gen`, `f_cat`, `f_qual`, `f_ex`, `f_Aoi`, `f_desi`, `f_net`, `f_phd`, `f_status`, `f_image`, `f_que`, `f_ans`, `f_pass`, `f_cpass`) VALUES
(40, 'jacky', '2023-09-22', 'njknjnjn', 'n484848484', 'Male', '1', 'juuh', 'jnjjjj', 'nkjnjnjk', '2', 'No', 'No', 'true', 'images/login.png', '1', 'himanshu', 'b9136187ea5b3ce4552a76748ba5a6a4', 'b9136187ea5b3ce4552a76748ba5a6a4'),
(39, 'Pawan', '2023-09-22', 'uihbhbhb', '4848541512', 'Male', '2', 'jngujnjn', 'jnjn', '54884', '1', 'Yes', 'Yes', 'false', 'fac_image.png', '1', 'jack', '8ef52ee98286f9a0f3b0dc7da646abe9', '8ef52ee98286f9a0f3b0dc7da646abe9'),
(38, 'raj', '2023-09-22', 'jiojonjnj', '5\\87484848', 'Male', '2', 'njnnjnn', '5', 'njnnn', '2', 'Yes', 'Yes', 'false', 'fac_image.png', '1', 'mack', 'af9d9b46884c4c405e2be2787424ae00', 'af9d9b46884c4c405e2be2787424ae00'),
(36, 'Anshii', '2023-09-21', 'qwujnjewfbjsb', '5156254184', 'Male', '1', 'nwuw', '5', 'ndnns', '3', 'Yes', 'Yes', 'true', 'map1695275419.png', '1', 'harsh', '53bead3305f753f714d74ff0b4f80e2b', '53bead3305f753f714d74ff0b4f80e2b'),
(37, 'jack', '2023-09-22', 'bhbbhb', 'b546559555', 'Male', '1', 'ujuu', 'unhjun', 'bhbhb', '2', 'Yes', 'Yes', 'true', 'fac_image.png', '1', 'mack', '21a24a0ba6e52a1a38980208842e100f', '21a24a0ba6e52a1a38980208842e100f'),
(35, 'Pawan', '2023-08-29', 'bhbyhbh', '5484845151', 'Male', '2', 'BCA,MCA', '4', 'php', '3', 'Yes', 'No', 'false', 'fac_image.png', '1', 'jack', 'Paw2023-08-29', 'Paw2023-08-29'),
(41, 'jack', '2023-09-22', 'uhiyibb', '8895454984', 'Male', '1', 'ijuijuj', '5', 'yhbhbbh', '2', 'Yes', 'Yes', 'true', 'upload_fac/login.png', '1', 'jack', '0c42b7ad633cace8b312dd04fb6b4c23', '0c42b7ad633cace8b312dd04fb6b4c23');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` int(20) NOT NULL auto_increment,
  `fees_st_id` int(20) NOT NULL,
  `fees_st_name` varchar(255) NOT NULL,
  `fees_st_father` varchar(255) NOT NULL,
  `fees_course` varchar(255) NOT NULL,
  `fees_total` varchar(255) NOT NULL,
  `fees_amount` varchar(255) NOT NULL,
  `fees_balance` varchar(255) NOT NULL,
  `fees_date` varchar(255) NOT NULL,
  `fees_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`fees_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `fees_st_id`, `fees_st_name`, `fees_st_father`, `fees_course`, `fees_total`, `fees_amount`, `fees_balance`, `fees_date`, `fees_desc`) VALUES
(1, 27, 'Pawan', 'Denesh', '1', '60000', '40000,20000', 'null', '07-08-23,07-08-23', '1st,2nd'),
(4, 26, 'Pratik', 'prem shaw', '2', '100000', '50000,50000', 'null', '09-08-23,09-08-23', '1st,2nd'),
(5, 29, 'Amit', 'saiia', '2', '100000', '50000,50000', 'null', '11-08-23,11-08-23', '1st,2nd'),
(7, 31, 'Anita', 'gtt45ref', '2', '100000', '100000', 'null', '12-08-23', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(50) NOT NULL auto_increment,
  `g_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_name`) VALUES
(16, 'astro.jpeg,camp.png,face.png'),
(15, 'camp.png,cant.jpg,comp.jpg'),
(14, '968537.png,alluni.jpg,aluni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(20) NOT NULL auto_increment,
  `login_user` varchar(255) NOT NULL,
  `login_pass` varchar(255) NOT NULL,
  `login_cpass` varchar(255) NOT NULL,
  `seq_id` varchar(255) NOT NULL,
  `seq_ans` varchar(255) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_pass`, `login_cpass`, `seq_id`, `seq_ans`) VALUES
(1, '21232f297a57a5a743894a0e4a801fc3', 'e6e061838856bf47e1de730719fb2609', 'e6e061838856bf47e1de730719fb2609', 'c4ca4238a0b923820dcc509a6f75849b', '4ff9fc6e4e5d5f590c4f2134a8cc96d1');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `m_id` int(50) NOT NULL auto_increment,
  `m_st_id` varchar(255) NOT NULL,
  `m_sub` varchar(255) NOT NULL,
  `m_theory` varchar(255) NOT NULL,
  `m_practical` varchar(255) NOT NULL,
  `m_total` varchar(255) NOT NULL,
  PRIMARY KEY  (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `m_st_id`, `m_sub`, `m_theory`, `m_practical`, `m_total`) VALUES
(5, '29', '2', '60', '0', '60'),
(4, '26', '4', '40', '30', '70'),
(6, '30', '1', '50', '25', '75'),
(7, '29', '1', '50', '28', '78');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qual_id` int(20) NOT NULL auto_increment,
  `qual_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`qual_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qual_id`, `qual_name`) VALUES
(1, '10th'),
(2, '12th'),
(3, 'Graduate'),
(4, 'Post Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `sequrity_question`
--

CREATE TABLE IF NOT EXISTS `sequrity_question` (
  `seq_id` int(20) NOT NULL auto_increment,
  `seq_que` varchar(255) NOT NULL,
  PRIMARY KEY  (`seq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sequrity_question`
--

INSERT INTO `sequrity_question` (`seq_id`, `seq_que`) VALUES
(1, 'what is your pet name?'),
(2, 'what is your father name?'),
(3, 'what is your first school name?'),
(4, 'what is your father middle name?'),
(5, 'what is your fevorite teacher name?');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(20) NOT NULL auto_increment,
  `state_name` varchar(255) NOT NULL,
  `state_country_id` varchar(255) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_country_id`) VALUES
(1, 'UP', '1'),
(2, 'MP', '1'),
(3, 'HP', '1'),
(4, 'UK', '1'),
(5, 'Caloifornia', '2'),
(6, 'Texas', '2');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(10) NOT NULL auto_increment,
  `st_name` varchar(255) NOT NULL,
  `st_father` varchar(255) NOT NULL,
  `st_phone` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_gen` varchar(255) NOT NULL,
  `st_qual` varchar(255) NOT NULL,
  `st_dob` varchar(255) NOT NULL,
  `st_doa` varchar(255) NOT NULL,
  `st_course` varchar(255) NOT NULL,
  `st_cat` varchar(255) NOT NULL,
  `st_country` varchar(255) NOT NULL,
  `st_state` varchar(255) NOT NULL,
  `st_pincode` varchar(255) NOT NULL,
  `st_image` varchar(255) NOT NULL,
  `st_address1` varchar(255) NOT NULL,
  `st_address2` varchar(255) NOT NULL,
  PRIMARY KEY  (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_father`, `st_phone`, `st_email`, `st_gen`, `st_qual`, `st_dob`, `st_doa`, `st_course`, `st_cat`, `st_country`, `st_state`, `st_pincode`, `st_image`, `st_address1`, `st_address2`) VALUES
(32, 'sumit', 'hbhghb', '4488454548', 'nhuhh@vvbhj', 'male', '1,2,3', '08/01/2023', '08/27/2023', '3', '1', '1', '1', '548484', 'lion1691728297.jpg', 'bjhuihu', 'uhuhuhiu'),
(31, 'Anita', 'gtt45ref', '2158484848', 'ijjj@ijijf', 'female', '1,2,3', '08/04/2023', '08/05/2023', '2', '1', '1', '3', '544848', 'hockey1691728196.jpg', 'juihuhuyhy', 'yyuy'),
(33, 'pawan', 'sumit', '5489548945', 'jiuhui@fcfc', 'male', '1,2,3', '03/01/2023', '06/12/2023', '4', '1', '1', '1', '544845', 'groot1691728389.jpg', 'knjub', 'jbhbhjbh'),
(26, 'Pratik', 'prem shaw', '8845226594', 'gygygy@gygg', 'male', '1,4', '2023-08-02', '2023-08-02', '2', '2', '2', '2', '144784', 'hacker1690984953.jpg', 'emkrmfdkrfdkm', 'mmmkmrkemme'),
(30, 'suraj', 'kdopk', '4564545454', 'jbbb@cvvg', 'male', '1,2', '08/01/2023', '08/06/2023', '1', '1', '1', '2', '154848', 'virat1691728119.jpg', 'huyhsd', 'hbhbyhb'),
(29, 'Amit', 'saiia', '1515151444', 'njbhb@vgv', 'male', '1,2', '08/08/2023', '08/06/2023', '1', '1', '2', '6', '154849', 'ironman1691728042.jpg', 'jhuhu', 'huyhiuhh');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL auto_increment,
  `subject_name` varchar(255) NOT NULL,
  `subject_course_id` varchar(255) NOT NULL,
  `sub_total_marks` varchar(255) NOT NULL,
  `sub_practical_marks` varchar(255) NOT NULL,
  PRIMARY KEY  (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_course_id`, `sub_total_marks`, `sub_practical_marks`) VALUES
(1, 'java', '1', '70', '30'),
(2, 'Math', '1', '100', '0'),
(3, 'DBMS', '1', '70', '30'),
(4, 'Advance DBMS', '2', '70', '30'),
(5, 'Advance Java', '2', '70', '30'),
(6, 'Advance Math', '2', '100', '0'),
(7, 'C++', '1', '70', '30');
