-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2017 at 10:54 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmessage`
--

CREATE TABLE IF NOT EXISTS `tblmessage` (
  `recID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `PostBy` text NOT NULL,
  `PostDate` text NOT NULL,
  `Posts` text NOT NULL,
  PRIMARY KEY (`recID`),
  UNIQUE KEY `recID` (`recID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `recID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `NickName` text NOT NULL,
  `Password` text NOT NULL,
  `DateRegistered` text NOT NULL,
  PRIMARY KEY (`recID`),
  UNIQUE KEY `recID` (`recID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
