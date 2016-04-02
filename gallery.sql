-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2016 at 08:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `alt` text NOT NULL,
  `initiative` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `src`, `alt`, `initiative`, `category`, `date`) VALUES
(1, 'graphics/dummy/a.jpg', 'Image A goes here.', 'crafting-future', 'slider', '2016-01-08 09:35:24'),
(2, 'graphics/dummy/b.jpg', 'Image B;', 'crafting-future', 'slider', '2016-01-08 10:04:25'),
(3, 'graphics/dummy/c.jpg', 'Image B;', 'crafting-future', 'slider', '2016-01-08 10:41:01'),
(4, 'graphics/dummy/d.jpg', 'Image A goes here.', 'crafting-future', 'slider', '2016-01-08 10:41:12'),
(5, 'graphics/dummy/e.jpg', 'Image B;', 'crafting-future', 'slider', '2016-01-08 10:41:01'),
(6, 'graphics/dummy/f.jpg', 'Image B;', 'yed', 'slider', '2016-01-08 10:41:01'),
(7, 'graphics/dummy/g.jpg', 'Image B;', 'yed', 'slider', '2016-01-08 10:41:01'),
(8, 'graphics/dummy/h.jpg', 'Image B;', 'yed', 'slider', '2016-01-08 10:41:01'),
(9, 'graphics/dummy/i.jpg', 'Image B;', 'yed', 'slider', '2016-01-08 10:41:01'),
(10, 'graphics/dummy/j.jpg', 'Image B;', 'yed', 'slider', '2016-01-08 10:41:01'),
(11, 'graphics/dummy/k.jpg', 'Image B;', 'srijan', 'slider', '2016-01-08 10:41:01'),
(12, 'graphics/dummy/l.jpg', 'Image B;', 'srijan', 'slider', '2016-01-08 10:41:01'),
(13, 'graphics/dummy/m.jpg', 'Image B;', 'srijan', 'slider', '2016-01-08 10:41:01'),
(14, 'graphics/dummy/n.jpg', 'Image B;', 'srijan', 'slider', '2016-01-08 10:41:01'),
(15, 'graphics/dummy/o.jpg', 'Image B;', 'srijan', 'slider', '2016-01-08 10:41:01'),
(16, 'graphics/dummy/p.jpg', 'Image B;', 'sanchit', 'slider', '2016-01-08 10:41:01'),
(17, 'graphics/dummy/q.jpg', 'Image B;', 'sanchit', 'slider', '2016-01-08 10:41:01'),
(18, 'graphics/dummy/r.jpg', 'Image B;', 'sanchit', 'slider', '2016-01-08 10:41:01'),
(19, 'graphics/dummy/s.jpg', 'Image B;', 'sanchit', 'slider', '2016-01-08 10:41:01'),
(20, 'graphics/dummy/t.jpg', 'Image B;', 'sanchit', 'slider', '2016-01-08 10:41:01'),
(21, 'graphics/dummy/u.jpg', 'Image B;', 'gram-swaraj', 'slider', '2016-01-08 10:41:01'),
(22, 'graphics/dummy/v.jpg', 'Image B;', 'gram-swaraj', 'slider', '2016-01-08 10:41:01'),
(23, 'graphics/dummy/w.jpg', 'Image B;', 'gram-swaraj', 'slider', '2016-01-08 10:41:01'),
(24, 'graphics/dummy/x.jpg', 'Image B;', 'gram-swaraj', 'slider', '2016-01-08 10:41:01'),
(25, 'graphics/dummy/y.jpg', 'Image B;', 'gram-swaraj', 'slider', '2016-01-08 10:41:01'),
(26, 'graphics/dummy/z.jpg', 'Image B;', 'youth-icon', 'slider', '2016-01-08 10:41:01'),
(27, 'graphics/dummy/a.jpg', 'Image B;', 'youth-icon', 'slider', '2016-01-08 10:41:01'),
(28, 'graphics/dummy/b.jpg', 'Image B;', 'youth-icon', 'slider', '2016-01-08 10:41:01'),
(29, 'graphics/dummy/c.jpg', 'Image B;', 'youth-icon', 'slider', '2016-01-08 10:41:01'),
(30, 'graphics/dummy/d.jpg', 'Image B;', 'youth-icon', 'slider', '2016-01-08 10:41:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
