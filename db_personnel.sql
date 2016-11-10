-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2011 at 08:02 AM
-- Server version: 5.1.37
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_personnel'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_employees'
--

CREATE TABLE tbl_employees (
  emp_id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  emp_fname varchar(50) NOT NULL,
  emp_lname varchar(75) NOT NULL,
  emp_job varchar(25) NOT NULL,
  emp_image varchar(50) NOT NULL,
  emp_thumb varchar(50) NOT NULL,
  PRIMARY KEY (emp_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_employees'
--

INSERT INTO tbl_employees VALUES(1, 'Mary', 'Smith', 'Accounting', 'person1.jpg', 'person1th.jpg');
INSERT INTO tbl_employees VALUES(2, 'Bob', 'Delgado', 'Sales', 'person2.jpg', 'person2th.jpg');
INSERT INTO tbl_employees VALUES(3, 'Emily', 'Strange', 'Sales', 'person3.jpg', 'person3th.jpg');
INSERT INTO tbl_employees VALUES(4, 'Greg', 'Murphy', 'CEO', 'person4.jpg', 'person4th.jpg');
INSERT INTO tbl_employees VALUES(5, 'Wanda', 'Zymote', 'Accounting', 'person5.jpg', 'person5th.jpg');
