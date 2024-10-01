-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 09:58 AM
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
-- Database: `ajhs_curd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(20) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_phone` bigint(10) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(200) NOT NULL,
  `a_address` varchar(200) NOT NULL,
  `total_amt` float NOT NULL,
  `a_date` date NOT NULL DEFAULT current_timestamp(),
  `a_img` varchar(200) NOT NULL,
  `a_holdername` varchar(20) NOT NULL,
  `a_accountno` int(30) NOT NULL,
  `a_bank` varchar(40) NOT NULL,
  `a_ifsc` int(20) NOT NULL,
  `a_scanner` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_password`, `a_address`, `total_amt`, `a_date`, `a_img`, `a_holdername`, `a_accountno`, `a_bank`, `a_ifsc`, `a_scanner`) VALUES
(1, 'Mayura Varma Jain', 8762784099, 'mayuravarmajainv@gmail.com', 'mayura@1234', 'shivamogga', 479, '2023-05-25', '', 'Mayura Varma Jain', 1244034523, 'Canera', 2147483647, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bo_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `bo_name` varchar(30) NOT NULL,
  `bo_email` varchar(30) NOT NULL,
  `bo_phone` bigint(10) NOT NULL,
  `bo_address` varchar(30) NOT NULL,
  `bo_bdate` date NOT NULL,
  `bo_time` time NOT NULL,
  `bo_amt` bigint(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `se_id` int(20) NOT NULL,
  `bo_date` date NOT NULL DEFAULT current_timestamp(),
  `bo_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bo_id`, `u_id`, `bo_name`, `bo_email`, `bo_phone`, `bo_address`, `bo_bdate`, `bo_time`, `bo_amt`, `s_id`, `se_id`, `bo_date`, `bo_status`) VALUES
(2, 10, 'Nagarjun', 'nagarjun@gmail.com', 4524546161, 'ujire', '2023-07-26', '13:44:00', 800, 16, 18, '2023-07-26', 'Paid'),
(3, 10, 'Nagarjun', 'nagarjun@gmail.com', 4524546161, 'manglore', '2023-07-27', '15:08:00', 500, 14, 16, '2023-07-26', 'Paid'),
(4, 10, 'Nagarjun', 'nagarjun@gmail.com', 4524546161, 'Manglore', '2023-07-27', '18:16:00', 600, 14, 16, '2023-07-26', 'Paid'),
(5, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'Guruvayinakere', '2023-07-29', '17:21:00', 550, 14, 16, '2023-07-26', 'Sent'),
(6, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'belthangadi', '2023-08-03', '15:39:00', 700, 14, 16, '2023-07-26', 'Paid'),
(7, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'ujire', '2023-07-27', '18:46:00', 1000, 15, 17, '2023-07-26', 'Paid'),
(8, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'sdfghj', '2023-07-29', '18:08:00', 1000, 15, 17, '2023-07-26', 'Paid'),
(9, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'Darmasthala', '2023-07-31', '09:45:00', 400, 15, 17, '2023-07-28', 'Paid'),
(10, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'ujire', '2023-09-01', '13:08:00', 500, 15, 17, '2023-07-28', 'completed'),
(11, 11, 'Gagan gowda', 'gagan@gmail.com', 7840994321, 'ujire', '2023-07-31', '15:17:00', 1000, 15, 21, '2023-07-28', 'Paid'),
(12, 11, 'Mayura', 'mayuravarmajainv@gmail.com', 8762784099, 'shivamogga', '2023-07-29', '14:31:00', 1000, 15, 22, '2023-07-28', 'Paid'),
(13, 11, 'Roshan Gowda', 'roshan1@gmail.com', 8726740881, 'sdm college', '2023-07-29', '13:11:00', 1000, 15, 19, '2023-07-28', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_date`) VALUES
(13, 'Mechanic', '2023-07-02'),
(14, 'Driver', '2023-07-02'),
(15, 'Painter', '2023-07-02'),
(17, 'Daily wager', '2023-07-02'),
(18, 'Catring', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `b_id` int(11) NOT NULL,
  `f_msg` varchar(200) NOT NULL,
  `f_date` date NOT NULL DEFAULT current_timestamp(),
  `f_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `s_id`, `b_id`, `f_msg`, `f_date`, `f_status`) VALUES
(1, 10, 16, 2, 'He is a well painting experiance ,beutifully painted all around the rooms and walls', '2023-07-26', ''),
(2, 10, 14, 3, 'he is a very skilled person, he fixed my machine before the time  expected.\r\n', '2023-07-26', ''),
(3, 11, 14, 5, 'he was good mechanic.\r\n ', '2023-07-26', ''),
(4, 11, 15, 7, 'he is a very good driver.', '2023-07-26', ''),
(5, 11, 15, 8, 'he was respect a every one, driving very safe.', '2023-07-26', 'view'),
(6, 11, 15, 11, 'well wager at all the time\r\n', '2023-07-28', 'view'),
(7, 11, 15, 12, 'good painter', '2023-07-28', 'view');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `l_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `l_name`, `l_date`) VALUES
(14, 'ujire', '2023-07-02'),
(15, 'Belthangaddi', '2023-07-02'),
(16, 'Putturu', '2023-07-02'),
(17, 'Mangloure', '2023-07-02'),
(18, 'Guruvayankere', '2023-07-02'),
(19, 'Venuru', '2023-07-02'),
(21, 'dharmasthala', '2023-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `s_id` int(20) NOT NULL,
  `bo_id` int(20) NOT NULL,
  `transactionid` bigint(20) NOT NULL,
  `p_type` varchar(200) NOT NULL,
  `p_amt` double NOT NULL,
  `p_date` date NOT NULL DEFAULT current_timestamp(),
  `p_status` varchar(200) NOT NULL,
  `ad_amt` float NOT NULL,
  `sp_amt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `u_id`, `s_id`, `bo_id`, `transactionid`, `p_type`, `p_amt`, `p_date`, `p_status`, `ad_amt`, `sp_amt`) VALUES
(2, 10, 16, 2, 12344563212, 'upi', 800, '2023-07-26', 'Paid', 40, 760),
(3, 10, 14, 3, 2543264356, 'upi', 500, '2023-07-26', 'Paid', 25, 475),
(4, 10, 14, 4, 0, 'upi', 600, '2023-07-26', 'Paid', 30, 570),
(5, 11, 14, 5, 12344563212, 'upi', 550, '2023-07-26', 'Paid', 27.5, 522.5),
(6, 11, 14, 6, 654565456765456, 'upi', 700, '2023-07-26', 'Paid', 35, 665),
(7, 11, 15, 7, 0, 'upi', 1000, '2023-07-26', 'Paid', 50, 950),
(8, 11, 15, 7, 0, 'upi', 1000, '2023-07-26', 'Paid', 50, 950),
(9, 11, 15, 8, 0, 'upi', 900, '2023-07-26', 'Paid', 45, 855),
(10, 11, 15, 9, 2543264356, 'upi', 380, '2023-07-28', 'Paid', 19, 361),
(11, 11, 15, 11, 0, 'upi', 950, '2023-07-28', 'Paid', 47.5, 902.5),
(12, 11, 15, 12, 0, 'upi', 950, '2023-07-28', 'Paid', 47.5, 902.5),
(13, 11, 15, 13, 0, 'card', 950, '2023-07-28', 'Paid', 47.5, 902.5);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `r_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `r_sub` longtext NOT NULL,
  `r_desc` longtext NOT NULL,
  `r_status` varchar(200) NOT NULL,
  `r_date` date NOT NULL DEFAULT current_timestamp(),
  `rs_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `u_id`, `s_id`, `r_sub`, `r_desc`, `r_status`, `r_date`, `rs_status`) VALUES
(1, 11, 15, 'please take action ', 'because his behavior is not good', '', '2023-07-26', ''),
(2, 11, 18, 'please take action ', 'he will not come to at a time.\r\n', '2', '2023-07-26', ''),
(3, 11, 15, 'report about his work', 'he is inexperienced, not worked as expected ', '', '2023-07-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `se_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `s_id` int(11) NOT NULL,
  `se_price` int(20) NOT NULL,
  `se_description` varchar(200) NOT NULL,
  `se_image` varchar(200) NOT NULL,
  `se_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`se_id`, `c_id`, `s_id`, `se_price`, `se_description`, `se_image`, `se_date`) VALUES
(14, 17, 18, 600, 'well in working', 'uploader/WhatsApp Image 2023-07-26 at 12.30.42 PM.jpeg', '2023-07-26'),
(15, 18, 19, 800, 'well cook experiance from last 5 years', 'uploader/WhatsApp Image 2023-07-26 at 1.10.59 PM (8).jpeg', '2023-07-26'),
(16, 13, 14, 700, 'good experiance  in mechanical engineer ', 'uploader/WhatsApp Image 2023-07-26 at 1.10.59 PM (4).jpeg', '2023-07-26'),
(17, 14, 15, 1000, 'iam good  in driving ', 'uploader/WhatsApp Image 2023-07-26 at 1.37.40 PM (1).jpeg', '2023-07-26'),
(18, 15, 16, 1000, 'paintings are showcased in exibution', 'uploader/WhatsApp Image 2023-07-26 at 1.10.58 PM.jpeg', '2023-07-26'),
(19, 14, 15, 500, 'well driver', 'uploader/WhatsApp Image 2023-07-26 at 1.37.40 PM.jpeg', '2023-07-28'),
(20, 17, 15, 1000, 'driver', 'uploader/WhatsApp Image 2023-07-26 at 1.37.40 PM (2).jpeg', '2023-07-28'),
(21, 17, 15, 1000, 'well wager', 'uploader/WhatsApp Image 2023-07-26 at 12.30.42 PM (1).jpeg', '2023-07-28'),
(22, 15, 15, 500, 'he has a good skill as a contractor and very good person with a good heart', 'uploader/IMG-20230703-WA0006.jpg', '2023-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `s_id` int(20) NOT NULL,
  `c_id` int(11) NOT NULL,
  `l_id` int(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_phone` bigint(10) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(200) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `s_image` varchar(200) NOT NULL,
  `s_date` datetime NOT NULL DEFAULT current_timestamp(),
  `s_status` varchar(30) NOT NULL,
  `s_holdername` varchar(30) NOT NULL,
  `s_accountno` bigint(20) NOT NULL,
  `s_bank` varchar(30) NOT NULL,
  `s_ifsc` bigint(20) NOT NULL,
  `s_scanner` varchar(300) NOT NULL,
  `sp_totalamt` float NOT NULL,
  `a_holdername` varchar(30) NOT NULL,
  `a_accountno` bigint(11) NOT NULL,
  `a_bank` varchar(20) NOT NULL,
  `a_ifsc` bigint(10) NOT NULL,
  `a_scanner` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sp`
--

INSERT INTO `sp` (`s_id`, `c_id`, `l_id`, `s_name`, `s_phone`, `s_email`, `s_password`, `s_address`, `s_image`, `s_date`, `s_status`, `s_holdername`, `s_accountno`, `s_bank`, `s_ifsc`, `s_scanner`, `sp_totalamt`, `a_holdername`, `a_accountno`, `a_bank`, `a_ifsc`, `a_scanner`) VALUES
(14, 13, 14, 'Gagan gowda', 7840994321, 'gagan@gmail.com', 'Gagan@123', 'ujire', 'uploader/IMG-20230703-WA0006.jpg', '2023-07-25 20:14:37', 'Accepted', 'Gagan', 87965467865, 'state bank ', 0, 'uploader/IMG-20230703-WA0004.jpg', 2232.5, '', 0, '', 0, ''),
(15, 14, 15, 'Gurudath', 4532516782, 'gurudath@gmail.com', 'Gurudath@123', 'Guruvayinakere', 'uploader/IMG-20230703-WA0005.jpg', '2023-07-26 10:53:44', 'Accepted', 'Gagan gowda', 12314152356, 'state bank ', 12454353, 'uploader/IMG-20230707-WA0004.jpg', 5823.5, '', 0, '', 0, ''),
(16, 15, 16, 'Navin', 4321563542, 'navin@gmail.com', 'Navin@123', 'putturu', 'uploader/Screenshot_2023-07-02-08-55-13-50_1c337646f29875672b5a61192b9010f9.jpg', '2023-07-26 10:55:17', 'Accepted', 'Navin', 765536277211, 'state bank ', 635783782, 'uploader/IMG-20230703-WA0004.jpg', 760, '', 0, '', 0, ''),
(18, 17, 17, 'Lathik', 6754637281, 'lathik1@gmail.com', 'Lathik@123', 'Manglore', 'uploader/WhatsApp Image 2023-07-26 at 12.30.42 PM.jpeg', '2023-07-26 13:21:28', 'Accepted', 'Lathik', 12345643252, 'bank of baroda', 0, 'uploader/IMG-20230707-WA0006.jpg', 0, '', 0, '', 0, ''),
(19, 18, 16, 'nivin', 9108207351, 'nivin@gmail.com', 'nA@12345', 'ujire nekkigudde', 'uploader/WhatsApp Image 2023-07-26 at 1.10.59 PM (8).jpeg', '2023-07-26 13:26:33', 'Accepted', 'nivin', 76854325678, 'state bank ', 0, 'uploader/IMG-20230707-WA0008.jpg', 0, '', 0, '', 0, ''),
(20, 13, 17, 'majappa', 9110670942, 'manja1@gmail.com', 'Manja12345', 'belthnagy street ', 'uploader/WhatsApp Image 2023-07-26 at 1.10.59 PM (2).jpeg', '2023-07-26 13:34:05', 'pending', '', 0, '', 0, '', 0, '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_phone` bigint(10) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_image` varchar(200) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_phone`, `u_email`, `u_password`, `u_image`, `u_address`, `u_date`) VALUES
(7, 'Ashwin jain', 7162534859, 'ashwin@gmail.com', 'ce7d378d8f609c38652eb5b2ab4d2917', 'uploader/DSC_0120.JPG', 'ujire', '2023-07-25'),
(8, 'Ashwin jain', 7162534859, 'ashwin1@gmail.com', 'ce7d378d8f609c38652eb5b2ab4d2917', 'uploader/DSC_0114.JPG', 'ujire', '2023-07-25'),
(9, 'Anush jain', 7362563452, 'anush1@gmail.com', 'fcdd0043184468aba38e99c23bc1cd94', 'uploader/Screenshot_2023-06-27-06-04-13-33_6012fa4d4ddec268fc5c7112cbb265e7.jpg', 'ujire', '2023-07-25'),
(10, 'Nagarjun', 4524546161, 'nagarjun@gmail.com', 'cd0c4bff33012ae697c2e0729e6cd155', 'uploader/Screenshot_2023-06-30-14-56-05-48_6012fa4d4ddec268fc5c7112cbb265e7.jpg', 'Guruvayinkere', '2023-07-25'),
(11, 'Roshan Gowda', 8726740881, 'roshan1@gmail.com', '865705f3d16ae6a06e4c8d9a8c473258', 'uploader/IMG-20230707-WA0005.jpg', 'belthangaddi', '2023-07-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bo_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`se_id`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `se_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
