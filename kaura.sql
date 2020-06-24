-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 08:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `firstname`, `surname`, `date`) VALUES
('malachi', 'maeg1987', '', '', '0000-00-00'),
('christian@gmail.com', 'christian', '', '', '0000-00-00'),
('ansy.egbugha@yahoo.com', 'ansy', 'malachi', 'Egbugha', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `ahndone`
--

CREATE TABLE IF NOT EXISTS `ahndone` (
  `announce` text NOT NULL,
  `date` date NOT NULL,
  `announcer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahndone`
--

INSERT INTO `ahndone` (`announce`, `date`, `announcer`) VALUES
('		\r\n		SAxdasdasdasda', '2017-08-18', 'malachi malachi'),
('		\r\n		sdcfsfsfsfsf', '2017-08-19', 'malachi malachi');

-- --------------------------------------------------------

--
-- Table structure for table `ahndtwo`
--

CREATE TABLE IF NOT EXISTS `ahndtwo` (
  `announce` text NOT NULL,
  `date` date NOT NULL,
  `announcer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahndtwo`
--

INSERT INTO `ahndtwo` (`announce`, `date`, `announcer`) VALUES
('		\r\n		htjegthjgtjhatt', '2017-08-18', 'malachi malachi'),
('		\r\n		 i am coming to class today. Please be sitted', '2017-08-18', 'malachi malachi'),
('		\r\n		lectures hold tmorrow y 7', '2017-08-18', 'malachi malachi');

-- --------------------------------------------------------

--
-- Table structure for table `andone`
--

CREATE TABLE IF NOT EXISTS `andone` (
  `announce` text NOT NULL,
  `date` date NOT NULL,
  `announcer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `andone`
--

INSERT INTO `andone` (`announce`, `date`, `announcer`) VALUES
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n	zz	', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n		', '0000-00-00', ''),
('		\r\n	', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `andtwo`
--

CREATE TABLE IF NOT EXISTS `andtwo` (
  `announce` text NOT NULL,
  `date` date NOT NULL,
  `announcer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dhndone`
--

CREATE TABLE IF NOT EXISTS `dhndone` (
  `coursetittle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `lastday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhndone`
--

INSERT INTO `dhndone` (`coursetittle`, `date`, `lecturername`, `coursecode`, `lastday`, `email`, `pdf`) VALUES
('asdas', '2017-08-18', 'malachi malachi', 'WDQD', 'SDASD', 'ansy@yahoo.com', 'cover_letter_template_2.pdf'),
('sxax', '2017-08-18', 'malachi malachi', 'asxax', 'asxa12', 'dfsafaf@yahoo.com', 'sample cover letter.pdf'),
('sadasd', '2017-08-19', 'malachi malachi', 'sdad', 'SDASD', 'dfsafaf@yahoo.com', 'MALACHI.pdf'),
('vdgdgd', '2017-08-19', 'malachi malachi', 'gfdgdg', 'zsada', 'dfsafaf@yahoo.com', 'asuquo Resume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dhndtwo`
--

CREATE TABLE IF NOT EXISTS `dhndtwo` (
  `coursetittle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `lastday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhndtwo`
--

INSERT INTO `dhndtwo` (`coursetittle`, `date`, `lecturername`, `coursecode`, `lastday`, `email`, `pdf`) VALUES
('microcontroller', '2017-06-19', 'ander', '6hggffa', '23 june 2017', 'malachi.egbugha3@gmail.com', 'im'),
('nbwfwj', '2017-07-02', 'efm fjnbf', 'eff j f', 'ef', 'kb@yahoo.com', 'application letter.pdf'),
('nbwfwj', '2017-07-02', 'efm fjnbf', 'eff j f', 'ef', 'kb@yahoo.com', 'application letter.pdf'),
('AZszs', '2017-07-02', 'asASA', 'asA', 'Sss', 'sS@yahoo.com', 'application letter.pdf'),
('xzcX', '2017-07-02', 'cxcCC', 'cC', 'cC', 'cc@yahoo.com', 'application letter.pdf'),
('anselm', '2017-07-20', 'anselm', 'anselem', 'an', 'ansy@yahoo.com', 'cv.pdf'),
('calab', '2017-07-20', 'calab', 'calab', 'calab', 'calab@yahoo.com', 'Flyingdove application letter.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dndone`
--

CREATE TABLE IF NOT EXISTS `dndone` (
  `coursetittle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `lastday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dndtwo`
--

CREATE TABLE IF NOT EXISTS `dndtwo` (
  `coursetittle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `lecturername` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `lastday` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hndone`
--

CREATE TABLE IF NOT EXISTS `hndone` (
  `email` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hndone`
--

INSERT INTO `hndone` (`email`, `surname`, `firstname`, `othername`, `class`, `image`, `password`) VALUES
('gerald.egbugha@gmail.com', 'Egbugha', 'gerald', 'okechukwu', 'HND1', '', 'gera;d'),
('aalone@yahoo.com', 'aalone', 'aalone', 'aalone', 'HND1', 'aalone.jpg', 'aalone'),
('malachi.egbugha13@gmail.com', 'Egbugha', 'malachi', 'chidiebere', 'HND1', '78804_409.jpg', 'chidi'),
('admin@yahoo.com', 'admin', 'admin', 'admin', 'HND1', 'a+.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hndtwo`
--

CREATE TABLE IF NOT EXISTS `hndtwo` (
  `email` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hndtwo`
--

INSERT INTO `hndtwo` (`email`, `surname`, `firstname`, `othername`, `class`, `image`, `password`) VALUES
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', '', 'caleb'),
('vincent@yahoo.com', 'Vicent', 'titus', 'jereniah', 'hnd2', '', 'vin'),
('vincent@yahoo.com', 'Vicent', 'titus', 'jereniah', 'hnd2', '', 'vin'),
('grace@gmail.com', 'egbugha', 'grace', 'ada', 'hnd2', '', 'ada'),
('caleb@gmail.com', 'egbugha', 'caleb', 'chijioke', 'hnd2', '', 'cal'),
('caleb@gmail.com', 'egbugha', 'caleb', 'chijioke', 'hnd2', '', 'cal'),
('emma@gmail.com', 'gabriel', 'emma', 'emme', 'hnd2', '', 'emma'),
('emma@gmail.com', 'gabriel', 'emma', 'emme', 'hnd2', '', 'emma'),
('anselem.egbugha3@gmail.com', 'Egbugha', 'chidubem', 'emeka', 'HND2', '', 'ansy'),
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', '', 'cali'),
('al@yahoo.com', 'al', 'al', 'al', 'HND2', 'al.jpg', 'al');

-- --------------------------------------------------------

--
-- Table structure for table `mhndone`
--

CREATE TABLE IF NOT EXISTS `mhndone` (
  `booktittle` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `nameofLecturer` text NOT NULL,
  `coursetittle` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhndone`
--

INSERT INTO `mhndone` (`booktittle`, `date`, `author`, `publisher`, `nameofLecturer`, `coursetittle`, `class`) VALUES
('ASs', '2017-08-18', 'sAS', 'saA', 'malachi malachi', 'SA', 'sample cover letter.pdf'),
('dsad', '2017-08-19', 'sDAda', 'sdads', 'malachi malachi', 'sadad', 'Elect-nd.pdf'),
('scf', '2017-08-19', 'sdsdf', 'fsfsf', 'malachi malachi', 'ht', 'nigerian_air_force_2017_dssc_zonal_screening.pdf'),
('sca', '2017-08-19', 'sad', 'sdad', 'malachi malachi', 'sdfsf', 'MALACHI.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mhndtwo`
--

CREATE TABLE IF NOT EXISTS `mhndtwo` (
  `booktittle` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `nameofLecturer` text NOT NULL,
  `coursetittle` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhndtwo`
--

INSERT INTO `mhndtwo` (`booktittle`, `date`, `author`, `publisher`, `nameofLecturer`, `coursetittle`, `class`) VALUES
('sasa', '2017-07-20', 'sDASD', 'DSADS', 'SDASD', 'DADa', 'application letter.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mndone`
--

CREATE TABLE IF NOT EXISTS `mndone` (
  `booktittle` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `nameofLecturer` text NOT NULL,
  `coursetittle` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mndtwo`
--

CREATE TABLE IF NOT EXISTS `mndtwo` (
  `booktittle` text NOT NULL,
  `date` date NOT NULL,
  `author` text NOT NULL,
  `publisher` text NOT NULL,
  `nameofLecturer` text NOT NULL,
  `coursetittle` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ndone`
--

CREATE TABLE IF NOT EXISTS `ndone` (
  `email` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndone`
--

INSERT INTO `ndone` (`email`, `surname`, `firstname`, `othername`, `class`, `image`, `password`) VALUES
('anone@yahoo.com', 'anone', 'anone', 'anone', 'ND1', 'anone.jpg', 'anone');

-- --------------------------------------------------------

--
-- Table structure for table `ndtwo`
--

CREATE TABLE IF NOT EXISTS `ndtwo` (
  `email` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffid` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `othername` varchar(60) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `department`, `firstname`, `surname`, `othername`, `image`) VALUES
('bam2', 'businessadmin', 'malachi', 'malachi', 'malachi', 'lecturer1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `email` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `surname`, `firstname`, `othername`, `class`, `image`, `password`) VALUES
('xcvxvcx', 'cvxvx', 'vxvxcvxv', 'vcvcxvx', 'ND1', '', ''),
('kaura001', 'egbugha', 'malachi', 'chidiebere', 'HND2', '', ''),
('ansy113', 'Egbugha', 'Anselem', 'Chidubem', 'HND2', '', ''),
('malachi.egbugha3@gmail.com', 'Egbugha', 'malachi', 'chidiebere', 'HND2', '', 'maeg1987'),
('anselem.egbugha3@gmail.com', 'Egbugha', 'anselem', 'chidubem', 'HND2', '', 'anselem'),
('gerald.egbugha@gmail.com', 'Egbugha', 'gerald', 'okechukwu', 'HND1', '', 'gera;d'),
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', '', 'caleb'),
('anselem.egbugha3@gmail.com', 'Egbugha', 'chidubem', 'emeka', 'HND2', '', 'ansy'),
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', 'caleb.jpg', 'cali'),
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', 'caleb.jpg', 'cali'),
('caleb.egbugha@gmail.com', 'Egbugha', 'caleb', 'chijioke', 'HND2', 'caleb.jpg', 'cali'),
('asuquo@gmail.com', 'itoro', 'itoro', 'asuquo', 'HND1', 'asuquo photo.jpg', 'asu'),
('anselemegbugha@yahoo.com', 'Egbugha', 'Anselem', 'Chidubem', 'HND1', 'anselem.jpg', 'anselem'),
('junior@yahoo.com', 'Egbugha', 'okechukwu', 'caleb', 'HND1', 'ansy.jpg', 'junior'),
('ansy@yahoo.com', 'ansy', 'ansy', 'ansy', 'HND2', 'ansa.jpg', 'ansy'),
('ansy1@yahoo.com', 'ansy', 'ansy', 'ansy', 'HND1', 'ans.jpg', 'ans'),
('a@yahoo.com', 'ansy', 'Anselem', 'ansy', 'HND2', 'an.jpg', 'a'),
('ay@yahoo.com', 'ay', 'ay', 'ay', 'HND2', 'ay.jpg', 'ay'),
('ay@yahoo.com', 'ay', 'ay', 'ay', 'HND2', 'ay.jpg', 'ay'),
('as@yahoo.com', 'as', 'as', 'as', 'HND2', 'as.jpg', 'as'),
('as@yahoo.com', 'as', 'as', 'as', 'HND2', 'as.jpg', 'as'),
('al@yahoo.com', 'al', 'al', 'al', 'HND2', 'al.jpg', 'al'),
('alone@yahoo.com', 'alone', 'alone', 'alone', 'HND1', 'alone.jpg', 'alone'),
('aalone@yahoo.com', 'aalone', 'aalone', 'aalone', 'HND1', 'aalone.jpg', 'aalone'),
('anone@yahoo.com', 'anone', 'anone', 'anone', 'ND1', 'anone.jpg', 'anone'),
('malachi.egbugha13@gmail.com', 'Egbugha', 'malachi', 'chidiebere', 'HND1', '78804_409.jpg', 'chidi'),
('admin@yahoo.com', 'admin', 'admin', 'admin', 'HND1', 'a+.jpg', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
