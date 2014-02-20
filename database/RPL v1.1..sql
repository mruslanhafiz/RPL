-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2014 at 04:18 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `RPL`
--
CREATE DATABASE IF NOT EXISTS `RPL` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `RPL`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_pc`
--

CREATE TABLE IF NOT EXISTS `data_pc` (
  `id_pc` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pc` varchar(32) DEFAULT NULL,
  `spek` varchar(1000) DEFAULT NULL,
  `owner` varchar(32) DEFAULT NULL,
  `booked` tinyint(1) DEFAULT NULL,
  `booked_by` varchar(32) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_pc`),
  KEY `booked_by` (`booked_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_pc`
--

INSERT INTO `data_pc` (`id_pc`, `nama_pc`, `spek`, `owner`, `booked`, `booked_by`, `state`) VALUES
(2, 'Ganteng', 'windows 8', 'Ganteng', 1, 'Toto', 0),
(3, 'Michael', 'windows 8', 'Michael', 0, NULL, 0),
(4, 'Michael', 'windows 8', 'Michael', 0, NULL, 0),
(5, 'Jake', 'windows 8', 'Jake', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `hp_user` varchar(100) DEFAULT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `nama_user` (`nama_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `hp_user`, `email_user`, `tanggal_pinjam`) VALUES
(1, 'Rahman', '09387487384', 'ondemande@gmail.com', '2014-02-20'),
(2, 'Toto', '09353384', 'toto@gmail.com', '2014-02-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
