-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2014 at 07:16 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `kary_id` varchar(10) NOT NULL,
  `kode_kar` varchar(10) NOT NULL,
  `nama_kar` varchar(30) NOT NULL,
  `alamat_kar` varchar(80) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `gaji_utama` decimal(10,0) NOT NULL,
  `gol_kar` varchar(10) NOT NULL,
  PRIMARY KEY  (`kary_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE IF NOT EXISTS `tb_gaji` (
  `gaji_id` int(11) NOT NULL auto_increment,
  `kary_id` int(11) NOT NULL,
  `kode_gaji` varchar(5) NOT NULL,
  `jam_lembur` int(11) NOT NULL,
  `uang_lembur` double NOT NULL,
  `total_gaji` double NOT NULL,
  `bulan_transfer` varchar(20) NOT NULL,
  `tgl_transfer` varchar(20) NOT NULL,
  `jam_transfer` varchar(10) NOT NULL,
  PRIMARY KEY  (`gaji_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`gaji_id`, `kary_id`, `kode_gaji`, `jam_lembur`, `uang_lembur`, `total_gaji`, `bulan_transfer`, `tgl_transfer`, `jam_transfer`) VALUES
(1, 1, 'GJ001', 58, 583367, 2333367, 'January 2014', '12/01/2014', '02:14:35'),
(2, 4, 'GJ002', 66, 820326, 2970576, 'January 2014', '12/01/2014', '02:14:42'),
(3, 6, 'GJ003', 24, 256999, 2109539, 'January 2014', '12/01/2014', '03:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `password`, `fullname`) VALUES
(1, 'yuli', '4a01a05a350e1c7710c989f1211245a8', 'Yuliatin'),
(2, 'hakko', 'd3d1cf96197c803f1b5331d3a236fc55', 'hakko bio richard'),
(3, 'hakko', 'hakko', 'hakko bio richard');
