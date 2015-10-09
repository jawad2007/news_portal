-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2015 at 01:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `title` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `curr_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`id` bigint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`title`, `photo`, `text`, `user_name`, `curr_time`, `id`) VALUES
('New Thai constitution rejected', 'Desert.jpg', 'A new committee must now be appointed to write another draft, further setting back elections.\r\nThe draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis".\r\nThe army ousted the elected government last year after months of unrest.\r\nThe 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-06 12:45:02', 1),
('New Thai constitution rejected', 'image_2015-09-07-20-35-38_55edd8face244.jpg', 'A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:35:38', 8),
('New Thai constitution rejected', 'image_2015-09-07-20-52-32_55eddcf0a5e2f.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:52:32', 9),
('New Thai constitution rejected', 'image_2015-09-07-20-53-24_55eddd24435e0.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:53:24', 10),
('New Thai constitution rejected', 'image_2015-09-07-20-53-34_55eddd2ecdd67.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:53:34', 11),
('New Thai constitution rejected', 'image_2015-09-07-20-53-49_55eddd3d5b466.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:53:49', 12),
('New Thai constitution rejected', 'image_2015-09-07-20-53-57_55eddd45b5a58.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:53:57', 13),
('New Thai constitution rejected', 'image_2015-09-07-20-54-05_55eddd4dbc458.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:54:05', 14),
('New Thai constitution rejected', 'image_2015-09-07-20-54-27_55eddd6307331.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:54:27', 15),
('New Thai constitution rejected', 'image_2015-09-07-20-54-57_55eddd81d77cd.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2007', '2015-09-07 18:54:57', 16),
('New Thai constitution rejected', 'image_2015-09-08-00-26-14_55ee0f066f665.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2008', '2015-09-07 22:26:14', 18),
('New Thai constitution rejected', 'image_2015-09-08-00-28-39_55ee0f97badd2.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2008', '2015-09-07 22:28:39', 19),
('New Thai constitution rejected', 'image_2015-09-08-01-46-01_55ee21b982cbb.jpg', ' A new committee must now be appointed to write another draft, further setting back elections. The draft has been widely criticised, in particular a clause which enables a 23-member panel to take over government during a "national crisis". The army ousted the elected government last year after months of unrest. The 247-member National Reform Council on Sunday rejected the draft charter by 135 votes to 105, with seven abstentions.', 'jawad2009', '2015-09-07 23:46:01', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_name`, `user_email`, `user_password`) VALUES
('jawad2007', 'jawadsmail@gmail.com', 'test123'),
('jawad2008', 'sheikhmaltooni@yahoo.com', 'test123'),
('jawad2009', 'jawad.rehman08@gmail.com', 'test123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
