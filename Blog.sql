-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2017 at 08:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `un` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`un`, `pwd`) VALUES
('lidwin', 'lidwin');

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `Content` text NOT NULL,
  `No` int(11) NOT NULL,
  `visited` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`Content`, `No`, `visited`) VALUES
('this is post number-1', 1, 1),
('this is post number-2', 2, 1),
('this is post number-3', 3, 1),
('this is post number-4', 4, 1),
('this is post number-5', 5, 1),
('this is post number-6', 6, 0),
('this is post number-7', 7, 0),
('this is post number-8', 8, 0),
('this is post number-9', 9, 0),
('this is post number-10', 10, 0),
('this is post number-11', 11, 0),
('this is post number-12', 12, 0),
('this is post number-13', 13, 0),
('this is post number-14', 14, 0),
('this is post number-15', 15, 0),
('this is post number-16', 16, 0),
('this is post number-17', 17, 0),
('this is post number-18', 18, 0),
('this is post number-19', 19, 0),
('this is post number-20', 20, 0),
('this is post number-21', 21, 0),
('this is post number-22', 22, 0),
('this is post number-23', 23, 0),
('this is post number-24', 24, 0),
('this is post number-25', 25, 0),
('this is post number-26', 26, 0),
('this is post number-27', 27, 0),
('this is post number-28', 28, 0),
('this is post number-29', 29, 0),
('this is post number-30', 30, 0),
('this is post number-31', 31, 0),
('this is post number-32', 32, 0),
('this is post number-33', 33, 0),
('this is post number-34', 34, 0),
('this is post number-35', 35, 0),
('this is post number-36', 36, 0),
('this is post number-37', 37, 0),
('this is post number-38', 38, 0),
('this is post number-39', 39, 0),
('this is post number-40', 40, 0),
('this is post number-41', 41, 0),
('this is post number-42', 42, 0),
('this is post number-43', 43, 0),
('this is post number-44', 44, 0),
('this is post number-45', 45, 0),
('this is post number-46', 46, 0),
('this is post number-47', 47, 0),
('this is post number-48', 48, 0),
('this is post number-49', 49, 0),
('this is post number-50', 50, 0),
('this is post number-51', 51, 0),
('this is post number-52', 52, 0),
('this is post number-53', 53, 0),
('this is post number-54', 54, 0),
('this is post number-55', 55, 0),
('this is post number-56', 56, 0),
('this is post number-57', 57, 0),
('this is post number-58', 58, 0),
('this is post number-59', 59, 0),
('this is post number-60', 60, 0),
('this is post number-61', 61, 0),
('this is post number-62', 62, 0),
('this is post number-63', 63, 0),
('this is post number-64', 64, 0),
('this is post number-65', 65, 0),
('this is post number-66', 66, 0),
('this is post number-67', 67, 0),
('this is post number-68', 68, 0),
('this is post number-69', 69, 0),
('this is post number-70', 70, 0),
('this is post number-71', 71, 0),
('this is post number-72', 72, 0),
('this is post number-73', 73, 0),
('this is post number-74', 74, 0),
('this is post number-75', 75, 0),
('this is post number-76', 76, 0),
('this is post number-77', 77, 0),
('this is post number-78', 78, 0),
('this is post number-79', 79, 0),
('this is post number-80', 80, 0),
('this is post number-81', 81, 0),
('this is post number-82', 82, 0),
('this is post number-83', 83, 0),
('this is post number-84', 84, 0),
('this is post number-85', 85, 0),
('this is post number-86', 86, 0),
('this is post number-87', 87, 0),
('this is post number-88', 88, 0),
('this is post number-89', 89, 0),
('this is post number-90', 90, 0),
('this is post number-91', 91, 0),
('this is post number-92', 92, 0),
('this is post number-93', 93, 0),
('this is post number-94', 94, 0),
('this is post number-95', 95, 0),
('this is post number-96', 96, 0),
('this is post number-97', 97, 0),
('this is post number-98', 98, 0),
('this is post number-99', 99, 0),
('this is post number-100', 100, 0),
('this is post number-101', 101, 0),
('this is post number-102', 102, 0),
('this is post number-103', 103, 0),
('this is post number-104', 104, 0),
('this is post number-105', 105, 0),
('this is post number-106', 106, 0),
('this is post number-107', 107, 0),
('this is post number-108', 108, 0),
('this is post number-109', 109, 0),
('this is post number-110', 110, 0),
('this is post number-111', 111, 0),
('this is post number-112', 112, 0),
('this is post number-113', 113, 0),
('this is post number-114', 114, 0),
('this is post number-115', 115, 0),
('this is post number-116', 116, 0),
('this is post number-117', 117, 0),
('this is post number-118', 118, 0),
('this is post number-119', 119, 0),
('this is post number-120', 120, 0),
('this is post number-121', 121, 0),
('this is post number-122', 122, 0),
('this is post number-123', 123, 0),
('this is post number-124', 124, 0),
('this is post number-125', 125, 0),
('this is post number-126', 126, 0),
('this is post number-127', 127, 0),
('this is post number-128', 128, 0),
('this is post number-129', 129, 0),
('this is post number-130', 130, 0),
('this is post number-131', 131, 0),
('this is post number-132', 132, 0),
('this is post number-133', 133, 0),
('this is post number-134', 134, 0),
('this is post number-135', 135, 0),
('this is post number-136', 136, 0),
('this is post number-137', 137, 0),
('this is post number-138', 138, 0),
('this is post number-139', 139, 0),
('this is post number-140', 140, 0),
('this is post number-141', 141, 0),
('this is post number-142', 142, 0),
('this is post number-143', 143, 0),
('this is post number-144', 144, 0),
('this is post number-145', 145, 0),
('this is post number-146', 146, 0),
('this is post number-147', 147, 0),
('this is post number-148', 148, 0),
('this is post number-149', 149, 0),
('this is post number-150', 150, 0),
('this is post number-151', 151, 0),
('this is post number-152', 152, 0),
('this is post number-153', 153, 0),
('this is post number-154', 154, 0),
('this is post number-155', 155, 0),
('this is post number-156', 156, 0),
('this is post number-157', 157, 0),
('this is post number-158', 158, 0),
('this is post number-159', 159, 0),
('this is post number-160', 160, 0),
('this is post number-161', 161, 0),
('this is post number-162', 162, 0),
('this is post number-163', 163, 0),
('this is post number-164', 164, 0),
('this is post number-165', 165, 0),
('this is post number-166', 166, 0),
('this is post number-167', 167, 0),
('this is post number-168', 168, 0),
('this is post number-169', 169, 0),
('this is post number-170', 170, 0),
('this is post number-171', 171, 0),
('this is post number-172', 172, 0),
('this is post number-173', 173, 0),
('this is post number-174', 174, 0),
('this is post number-175', 175, 0),
('this is post number-176', 176, 0),
('this is post number-177', 177, 0),
('this is post number-178', 178, 0),
('this is post number-179', 179, 0),
('this is post number-180', 180, 0),
('this is post number-181', 181, 0),
('this is post number-182', 182, 0),
('this is post number-183', 183, 0),
('this is post number-184', 184, 0),
('this is post number-185', 185, 0),
('this is post number-186', 186, 0),
('this is post number-187', 187, 0),
('this is post number-188', 188, 0),
('this is post number-189', 189, 0),
('this is post number-190', 190, 0),
('this is post number-191', 191, 0),
('this is post number-192', 192, 0),
('this is post number-193', 193, 0),
('this is post number-194', 194, 0),
('this is post number-195', 195, 0),
('this is post number-196', 196, 0),
('this is post number-197', 197, 0),
('this is post number-198', 198, 0),
('this is post number-199', 199, 0),
('this is post number-200', 200, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`un`(767));

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
