-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2017 at 12:24 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `miniprojectusers`
--

CREATE TABLE `miniprojectusers` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(5) NOT NULL,
  `address` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miniprojectusers`
--

INSERT INTO `miniprojectusers` (`id`, `name`, `password`, `email`, `type`, `address`, `gender`, `note`) VALUES
('14-26269-1', 'imran khan', '1234', 'khan_imran619@outlook.com', 'admin', '', '', 'zszdf'),
('14-26269-3', 'nana patekar', '5678', 'amir_khan@outlook.com', 'user', '', '', ''),
('15-69565-1', 'rafat rashid', '1278', 'rafatx003@outlook.com', 'admin', '', '', ''),
('14-14141-1', 'ghghgh', '2345', 'xvbx@gmail.com', 'USER', '', '', ''),
('14-41411-1', 'hawekka', '6969', 'jkhdd@gmail.com', 'USER', '', '', ''),
('14-85858-1', 'zdfdd', '3663', 'asdfa@gmail.com', 'USER', '', '', ''),
('14-69699-1', 'hakka', '1212', 'qwerq@gmail.com', 'USER', '', '', ''),
('14-36363-1', 'hakkazdfa', '7878', 'lhfhgf@gmail.com', 'USER', '', '', ''),
('14-74512-1', 'hakhnf', '1245', 'qwerqw@gmail.com', 'USER', '', '', ''),
('14-23232-1', 'hakkaaefa', '1212', 'ghjkgh@gmail.com', 'USER', '', '', ''),
('14-12121-1', 'asdfasdf', '4444', 'dfgsdf@gmail.com', 'USER', '', '', ''),
('14-77878-1', 'qwerasd', '4545', 'cvbncvb@gmail.com', 'USER', '', '', ''),
('14-78789-1', 'hakka', '6546', 'hakka@gmail.com', 'USER', '', '', ''),
('14-25252-1', 'sdfgsdf', '5678', 'tyty@gmail.com', 'USER', '', '', ''),
('14-78211-1', 'sdfgse', '7890', 'asdfzx@gmail.com', 'USER', '', '', ''),
('14-23568-1', 'lkljk', '0978', 'bxcvbx@gmail.com', 'USER', '', '', ''),
('14-78445-1', 'hghgh', '2121', 'dhjfghj@gmail.com', 'USER', '', '', ''),
('16-62263-1', 'xxx xxx', 'xxx', ' ', 'user', 'xxx', 'Male', ''),
('11-26269-1', 'eleven khan', '1111', ' eleven@gmail.com ', 'user', 'road-12', 'Male', ''),
('11-26269-1', 'eleven two', '2222', ' eleven_two@gmail.com ', 'user', 'road-13', 'Male', ''),
('11-1111-11', 'qw qw', '0000', ' khan_imran619@outlook.com ', 'user', 'road-12', 'Male', ''),
('00-0000-00', 'zero hero', '0000', ' zero@gmail.com ', 'Admin', 'zero road', 'Female', '');

-- --------------------------------------------------------

--
-- Table structure for table `profileinfo`
--

CREATE TABLE `profileinfo` (
  `profileid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileinfo`
--

INSERT INTO `profileinfo` (`profileid`, `name`, `phone`, `email`, `address`, `companyname`, `id`) VALUES
(1, 'mak mashuk', '12323472134', 'zero@gmail.com', 'mirpur', 'aiub', '14-26269-1'),
(2, 'himi', '123', 'himi@gmail', 'banani', 'aiub', '14-26269-1'),
(3, 'imran khan', '1236463165', 'khan_imran619@outlook.com', 'nikunja', 'aiub', '14-26269-1'),
(4, 'asib', '015555', 'adad@gmail.com', 'asd', 'asd', ''),
(5, 'asib', '015555', 'adad@gmail.com', 'asd', 'asd', ''),
(6, 'asib', '015555', 'adad@gmail.com', 'asd', 'asd', ''),
(7, 'asib', '01521107920', 'adad@gmail.com', 'asd', 'asd', ''),
(8, 'asib', '01521107920', 'adad@gmail.com', 'asd', 'asd', ''),
(9, 'asib', '8801521107920', 'adad@gmail.com', 'asd', 'asd', ''),
(10, 'asib', '8801521107920', 'adad@gmail.com', 'asd', 'asd', ''),
(14, 'asdd', ' ', ' ', ' ', ' ', ''),
(15, 'asdd', ' ', ' ', ' ', ' ', ''),
(16, 'asdd', ' ', ' ', ' ', ' ', ''),
(17, 'asdd', ' ', ' ', ' ', ' ', ''),
(18, 'asdd', ' ', ' ', ' ', ' ', ''),
(19, 'asdd', ' ', ' ', ' ', ' ', ''),
(20, 'asdd', ' ', ' ', ' ', ' ', ''),
(21, 'asdd', ' ', ' ', ' ', ' ', ''),
(22, 'asdd', ' ', ' ', ' ', ' ', ''),
(23, 'asdd', ' ', ' ', ' ', ' ', ''),
(24, 'asdd', ' ', ' ', ' ', ' ', ''),
(25, 'xyz', '01511111111', 'someone@gmail.com', 'zero road', 'gg', '14-26269-1'),
(26, 'mak', '64648646', 'someone@gmail.com', 'xcasda', 'asdfasdf', '14-26269-1'),
(27, 'asdfasdf', '01511111111', 'asdf@gmail.com', 'asdfsdf', 'zzzzzzzzzz', '14-26269-1');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `date` date NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `at` time NOT NULL,
  `location` varchar(50) NOT NULL,
  `with` varchar(50) NOT NULL,
  `shortnote` varchar(100) NOT NULL,
  `id` varchar(10) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`date`, `eventname`, `at`, `location`, `with`, `shortnote`, `id`, `comment`) VALUES
('2016-12-28', 'hungama', '09:00:00', 'dhaka', 'mashuk', 'hehe', '14-26269-1', ''),
('2017-01-01', 'aa', '00:00:06', 'dhaka', 'xx', 'akkabakka', '14-26269-3', ''),
('2016-12-30', 'ww', '00:00:04', 'qw', 'qw', 'd', '14-26269-1', ''),
('2016-12-23', 'nn', '00:00:07', 'hgh', 'adfg', 'adfg', '14-26269-1', ''),
('2017-01-02', 'xyz', '05:12:12', 'dhaka', 'aaaa', 'qwertyuiop', '14-26269-1', ''),
('2017-01-05', 'asdf', '05:00:00', 'sdfg', 'dfgj', 'dfa', '14-26269-1', ''),
('2017-01-05', 'aaaaa', '01:00:00', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaacvcc', '14-26269-1', ''),
('2017-01-03', 'movie time ', '07:30:00', 'jammuna', 'rafat', 'avenger', '14-26269-1', ''),
('2017-01-03', 'adfa', '05:00:00', 'asdfad', 'fghdfh', 'mjvmgf', '14-26269-1', ''),
('2017-01-03', 'sdgqwe', '13:00:00', 'wtyrety', 'tyurtye', 'qwerqwea', '14-26269-1', ''),
('2017-01-15', 'qqqqq', '01:00:00', 'eee', 'ee', 'ee', '14-26269-1', ''),
('2017-02-01', 'flight', '04:45:00', 'airport', 'alone', 'saudi Arabia', '14-26269-1', ''),
('2017-01-04', 'project submission', '02:00:00', 'aiub', 'shovro das', ' SAd', '14-26269-1', ''),
('2017-01-07', 'sasda', '02:00:00', 'fsf', 'sdafs', 'asdfasd', '14-26269-1', ''),
('2017-01-04', 'return', '03:00:00', 'kakoli', 'alone', ':(', '14-26269-1', 'zzzz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profileinfo`
--
ALTER TABLE `profileinfo`
  ADD PRIMARY KEY (`profileid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
