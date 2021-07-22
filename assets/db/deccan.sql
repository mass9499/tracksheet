-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 07:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deccan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master_tbl`
--

CREATE TABLE `admin_master_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_master_tbl`
--

INSERT INTO `admin_master_tbl` (`id`, `username`, `password`, `status`, `first_name`, `last_name`, `email`, `role`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', 1, 'Administrator', '', 'admin@gmail.com', 5, '2017-12-01 11:47:19', '', '2017-12-01 17:36:11', '1'),
(2, 'user1', 'e6e061838856bf47e1de730719fb2609', 1, NULL, NULL, NULL, 0, '2017-12-01 11:47:19', '', NULL, NULL),
(3, 'user2', 'e6e061838856bf47e1de730719fb2609', 1, NULL, NULL, NULL, 0, '2017-12-01 11:47:19', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile_tbl`
--

CREATE TABLE `admin_profile_tbl` (
  `id` int(11) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_description` text NOT NULL,
  `site_subtitle` varchar(100) DEFAULT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_copyright_name` varchar(50) DEFAULT NULL,
  `site_copyright_year` int(11) DEFAULT NULL,
  `background_color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_profile_tbl`
--

INSERT INTO `admin_profile_tbl` (`id`, `site_title`, `site_description`, `site_subtitle`, `admin_email`, `site_logo`, `site_copyright_name`, `site_copyright_year`, `background_color`) VALUES
(1, 'Deccan', 'Pumps', 'Mobile app', 'admin@gmail.com', 'logo/Img_59273204ad182icon_30932_light_blue.png', 'Marketing', 2017, '#fff00');

-- --------------------------------------------------------

--
-- Table structure for table `app_user_tbl`
--

CREATE TABLE `app_user_tbl` (
  `app_user_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_name` varchar(75) DEFAULT NULL,
  `role` varchar(40) DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(40) DEFAULT NULL,
  `modified_by` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `app_user_tbl`
--

INSERT INTO `app_user_tbl` (`app_user_id`, `employee_id`, `employee_name`, `role`, `last_login_time`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, 1, 'Dinesh', NULL, NULL, '2017-07-22 20:16:23', '2017-07-22 14:46:23', NULL, NULL),
(2, 2, 'User', NULL, NULL, '2017-08-06 02:03:17', '2017-08-05 20:33:17', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `battery_level_tbl`
--

CREATE TABLE `battery_level_tbl` (
  `battery_id` int(11) NOT NULL,
  `battery_level` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budget_location_tbl`
--

CREATE TABLE `budget_location_tbl` (
  `budget_location_id` int(11) NOT NULL,
  `budget_id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `purpose` text,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_location_tbl`
--

INSERT INTO `budget_location_tbl` (`budget_location_id`, `budget_id`, `district`, `place`, `location`, `purpose`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(3, 2, '1', '5', 'tnagar', 'sdfsdfds', '2017-11-29 17:43:38', '1', '2017-11-30 00:18:49', '1'),
(4, 3, '75', '3', 'Ganapathy', 'Test 1', '2017-12-01 06:41:28', 'user', '2017-12-16 16:29:48', '1'),
(5, 3, '75', '4', 'Ram Nagar', 'Test 2', '2017-12-01 06:41:28', 'user', '2017-12-16 16:29:48', '1'),
(6, 4, '1', '1', 'fc', '', '2017-12-01 06:49:43', 'user', NULL, NULL),
(7, 5, '1', '1', 'fc', '', '2017-12-01 06:54:46', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `budget_tbl`
--

CREATE TABLE `budget_tbl` (
  `budget_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `customers` varchar(100) DEFAULT NULL,
  `budget_date` date NOT NULL,
  `budget_da` decimal(19,2) DEFAULT NULL,
  `budget_ta` decimal(19,2) DEFAULT NULL,
  `budget_accomodation` decimal(19,2) DEFAULT NULL,
  `budget_misc` decimal(19,2) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget_tbl`
--

INSERT INTO `budget_tbl` (`budget_id`, `employee_id`, `customers`, `budget_date`, `budget_da`, `budget_ta`, `budget_accomodation`, `budget_misc`, `approved`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(2, 1, '1,2', '2017-11-29', '10000.00', '10000.00', '15000.00', '1000.00', 1, '2017-11-29 17:43:38', '1', '2017-11-30 00:18:49', '1'),
(3, 1, '1,2', '2017-11-14', '7000.00', '5000.00', '15000.00', '1000.00', 0, '2017-12-01 06:41:27', 'user', '2017-12-16 16:29:48', '1'),
(4, 28, NULL, '2017-11-30', '0.00', '0.00', '0.00', '0.00', 0, '2017-12-01 06:49:43', 'user', NULL, NULL),
(5, 28, NULL, '2017-11-30', '0.00', '0.00', '0.00', '0.00', 0, '2017-12-01 06:54:46', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cash_payment_tbl`
--

CREATE TABLE `cash_payment_tbl` (
  `cash_payment_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `total_order_amount` decimal(19,2) DEFAULT NULL,
  `amount_paid` decimal(19,2) DEFAULT NULL,
  `balance_amount` decimal(19,2) DEFAULT NULL,
  `cash_2000` int(11) DEFAULT NULL,
  `cash_1000` int(11) DEFAULT NULL,
  `cash_500` int(11) DEFAULT NULL,
  `cash_200` int(11) DEFAULT NULL,
  `cash_100` int(11) DEFAULT NULL,
  `cash_50` int(11) DEFAULT NULL,
  `cash_20` int(11) DEFAULT NULL,
  `cash_10` int(11) DEFAULT NULL,
  `cash_5` int(11) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cheque_payment_tbl`
--

CREATE TABLE `cheque_payment_tbl` (
  `cheque_payment_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `cheque_number` varchar(10) DEFAULT NULL,
  `cheque_date` datetime DEFAULT NULL,
  `total_order_amount` decimal(19,2) DEFAULT NULL,
  `amount_paid` decimal(19,2) DEFAULT NULL,
  `balance_amount` decimal(19,2) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_tbl`
--

CREATE TABLE `city_tbl` (
  `city_id` int(11) NOT NULL,
  `stateCode` int(11) DEFAULT NULL,
  `city_desc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tbl`
--

INSERT INTO `city_tbl` (`city_id`, `stateCode`, `city_desc`) VALUES
(1, 79, 'Mumbai'),
(2, 68, ' Delhi'),
(3, 75, 'Bangalore'),
(4, 60, 'Hyderabad'),
(5, 1, 'Chennai'),
(6, 92, 'Kolkata'),
(7, 79, 'Pune'),
(8, 87, ' Jaipur'),
(9, 90, ' Varanasi'),
(10, 73, ' Srinagar'),
(11, 74, 'Ranchi'),
(12, 1, 'Coimbatore'),
(13, 1, ' Madurai'),
(14, 75, 'Mysore'),
(15, 1, 'Tiruchirappalli'),
(16, 84, 'Bhubaneswar'),
(17, 1, ' Salem'),
(18, 60, ' Guntur'),
(19, 1, 'Thiruvananthapuram'),
(20, 76, 'Kochi'),
(21, 1, 'Tirunelveli'),
(22, 1, ' Ambattur'),
(23, 75, ' Mangalore'),
(24, 1, ' Tiruppur'),
(25, 1, ' Avadi'),
(26, 76, 'Kollam'),
(27, 1, 'Tiruvottiyur'),
(28, 1, ' Thoothukkudi'),
(29, 1, 'Nagercoil'),
(30, 1, 'Pallavaram'),
(31, 1, 'Thanjavur'),
(32, 1, ' Vellore'),
(33, 1, 'Tambaram'),
(34, 1, 'Cuddalore'),
(35, 1, 'Kancheepuram'),
(36, 1, 'Alandur'),
(37, 1, 'Erode'),
(38, 1, ' Tiruvannamalai'),
(39, 1, 'Kumbakonam'),
(40, 1, ' Rajapalayam'),
(41, 1, 'Kurichi'),
(42, 1, 'Madavaram'),
(43, 1, 'Hosur'),
(44, 1, ' Ambur'),
(45, 1, 'Karaikkudi'),
(46, 1, 'Neyveli'),
(47, 1, 'Ooty');

-- --------------------------------------------------------

--
-- Table structure for table `company_images_tbl`
--

CREATE TABLE `company_images_tbl` (
  `image_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `survey_id` int(11) NOT NULL,
  `planned_customer_id` int(11) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `imagename` varchar(255) DEFAULT NULL,
  `imageuniquename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_images_tbl`
--

INSERT INTO `company_images_tbl` (`image_id`, `emp_id`, `customer_id`, `survey_id`, `planned_customer_id`, `imagepath`, `imagename`, `imageuniquename`) VALUES
(1, 1, 5, 0, NULL, '/assets/uploads/1/images/', '59c69893017a5.png', '59c69893017a5.png'),
(2, 1, 6, 2, NULL, '/assets/uploads/1/images/', 'Img_59273204ad182icon_30932_light_blue.png', '59c69d848fe97.png'),
(3, 1, 7, 0, NULL, '/assets/uploads/1/images/', '59c6b7df53f06.png', '59c6b7df53f06.png'),
(4, 1, 8, 0, NULL, '/assets/uploads/1/images/', '59c6bea84a216.png', '59c6bea84a216.png'),
(5, 1, 6, 2, NULL, '/assets/uploads/1/images/', 'Img_59273204ad182icon_30932_light_blue.png', '59c69d848fe97.png'),
(6, 1, 2, 6, NULL, '/assets/uploads/1/images/', 'logoo.png', NULL),
(7, 1, 2, 6, NULL, '/assets/uploads/1/images/', 'Afluence Softech Icon.png', NULL),
(8, 2, 2, 7, NULL, '/assets/uploads/2/images/', 'icon_30932_light_blue.png', NULL),
(9, 2, 4, 8, NULL, '/assets/uploads/2/images/', '08-10-2017-23-56-16-Afluence Softech Icon.png', NULL),
(10, 2, 4, 8, NULL, '/assets/uploads/2/images/', '08-10-2017-23-56-16-logoo.png', NULL),
(11, 1, 2, 29, NULL, '/assets/uploads/1/images/', '59ea1d99b05e2.png', '59ea1d99b05e2.png'),
(12, 1, 2, 30, NULL, '/assets/uploads/1/images/', '59ea1da98d53a.png', '59ea1da98d53a.png'),
(13, 1, 1, 0, NULL, '/assets/uploads/1/images/', '5a0d3341b6b85.png', '5a0d3341b6b85.png'),
(14, 1, 1, 0, 2, '/assets/uploads/1/images/', '5a1fc0c53814f.png', '5a1fc0c53814f.png'),
(15, 1, 1, 0, 3, '/assets/uploads/1/images/', '5a225945f224c.png', '5a225945f224c.png'),
(16, 1, 1, 0, 4, '/assets/uploads/1/images/', '5a225a7a3820f.png', '5a225a7a3820f.png'),
(17, 1, 1, 0, 5, '/assets/uploads/1/images/', '5a225af453cb9.png', '5a225af453cb9.png'),
(18, 1, 1, 0, 7, '/assets/uploads/1/images/', '5a2291c4095e4.png', '5a2291c4095e4.png'),
(19, 1, 1, 0, 8, '/assets/uploads/1/images/', '5a22925fba089.png', '5a22925fba089.png');

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `countryCode` int(4) NOT NULL,
  `countryName` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`countryCode`, `countryName`) VALUES
(1, 'Canada'),
(2, 'India'),
(3, 'UAE'),
(4, 'USA'),
(5, 'Australia'),
(6, 'England'),
(7, 'Northern Ireland'),
(8, 'Scotland'),
(9, 'Wales');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address_street` varchar(100) DEFAULT NULL,
  `address_street1` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `pincode` varchar(8) NOT NULL,
  `contact_phone1` varchar(15) NOT NULL,
  `contact_phone2` varchar(15) DEFAULT NULL,
  `c_type` varchar(50) DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`customer_id`, `company_name`, `person_name`, `dob`, `age`, `address_street`, `address_street1`, `city`, `state`, `country`, `pincode`, `contact_phone1`, `contact_phone2`, `c_type`, `created_by`, `created_date`, `modified_date`, `modified_by`) VALUES
(1, 'Mukesh Enterprise', 'Raj', NULL, 28, 'D B Rd', 'R S Puram', 'Coimbatore', 1, 2, '643010', '9374648474', '9565646346', NULL, NULL, '2017-10-10 06:04:54', '2017-12-17 15:23:06', '1'),
(2, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(3, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(4, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(5, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(6, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(7, 'Mukesh Enterprise1', 'Raj', NULL, 28, 'D B Road', 'R S Puram', 'Coimbatore', NULL, NULL, '643010', '9374648474', '9473647745', NULL, NULL, '2017-10-10 06:04:54', NULL, NULL),
(8, 'test customer', 'New cust', NULL, NULL, 'Rm puram', 'Cbe 1', 'Coimbatore', NULL, NULL, '6534233', '97648367383', '04233233334', NULL, '1', '2017-11-20 09:03:55', NULL, NULL),
(9, 'test customer', 'New cust', NULL, NULL, 'Rm puram', 'Cbe 1', 'Coimbatore', NULL, NULL, '6534233', '97648367383', '04233233334', NULL, '1', '2017-11-20 09:04:29', NULL, NULL),
(10, 'test customer', 'New cust', NULL, NULL, 'Rm puram', 'Cbe 1', 'Coimbatore', NULL, NULL, '6534233', '97648367383', '04233233334', NULL, '1', '2017-11-20 09:05:49', NULL, NULL),
(11, 'test customer', 'New cust', NULL, NULL, 'Rm puram', 'Cbe 1', 'Coimbatore', NULL, NULL, '6534233', '97648367383', '04233233334', NULL, '1', '2017-11-20 09:06:38', NULL, NULL),
(12, 'Final 1', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, '1', '2017-12-05 15:49:47', NULL, NULL),
(13, 'Final 123', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, '1', '2017-12-05 15:55:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type_tbl`
--

CREATE TABLE `customer_type_tbl` (
  `type_id` int(11) NOT NULL,
  `cutomer_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_type_tbl`
--

INSERT INTO `customer_type_tbl` (`type_id`, `cutomer_type`) VALUES
(1, 'Dealer with stock');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_gps_tbl`
--

CREATE TABLE `delivery_gps_tbl` (
  `delivery_gps_id` int(11) NOT NULL,
  `delivery_id` int(11) NOT NULL,
  `delivery_latitude` decimal(10,8) NOT NULL,
  `delivery_longitude` decimal(10,8) NOT NULL,
  `delivery_gps_address` varchar(500) DEFAULT NULL,
  `delivery_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_tbl`
--

CREATE TABLE `delivery_tbl` (
  `delivery_id` int(11) NOT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `delivery_type` varchar(30) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `order_details` text,
  `driver_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `priority` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_tbl`
--

INSERT INTO `delivery_tbl` (`delivery_id`, `order_id`, `delivery_type`, `delivery_date`, `status`, `employee_id`, `customer_id`, `budget_id`, `sub_task_id`, `order_details`, `driver_id`, `vehicle_id`, `priority`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, '1', 'delivery', '2017-12-08 00:00:00', 'processing', 1, 13, NULL, NULL, 'hugugugug', 2, 1, 'H', '2017-12-05 15:55:06', NULL, '2017-12-08 00:59:46', '1');

-- --------------------------------------------------------

--
-- Table structure for table `drivers_tbl`
--

CREATE TABLE `drivers_tbl` (
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(100) DEFAULT NULL,
  `license_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers_tbl`
--

INSERT INTO `drivers_tbl` (`driver_id`, `driver_name`, `license_number`, `address`, `contact_number`, `dob`, `city`, `state`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(2, 'Balaji', 'OD9324748', 'Ram Nagar, Coimbatore', '9679344454', NULL, NULL, NULL, '2017-11-19 11:44:12', '1', '2017-11-19 17:14:32', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee_tbl`
--

CREATE TABLE `employee_tbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `pincode` varchar(8) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(11) NOT NULL,
  `deviceid` varchar(255) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_tbl`
--

INSERT INTO `employee_tbl` (`id`, `first_name`, `last_name`, `username`, `email`, `mobile`, `address`, `city`, `state`, `country`, `pincode`, `category`, `created_date`, `created_by`, `deviceid`, `modified_date`, `modified_by`) VALUES
(1, 'Dinesh', 'Dinu', 'Dine', 'dinesh19@gmail.com', '97383938949', 'Saibaba Colony', 'Coimbatore', 1, 2, '641038', 1, '2017-07-22 20:16:23', 'user', 'ABDCCDJVSfsfsfDKDJ', '2017-12-17 10:02:00', 1),
(2, 'User', 'Test', 'testing', 'test@gmail.com', '97453873733', '17B', 'Cbe', 1, 2, '642222', NULL, '2017-08-06 02:03:16', '1', 'GHDVHJVSHdshfdjasgfjsa', '2017-11-29 15:31:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `followup_gps_tbl`
--

CREATE TABLE `followup_gps_tbl` (
  `followup_gps_id` int(11) NOT NULL,
  `followup_id` int(11) NOT NULL,
  `followup_latitude` decimal(10,8) NOT NULL,
  `followup_longitude` decimal(10,8) NOT NULL,
  `followup_gps_address` varchar(500) DEFAULT NULL,
  `followup_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followup_gps_tbl`
--

INSERT INTO `followup_gps_tbl` (`followup_gps_id`, `followup_id`, `followup_latitude`, `followup_longitude`, `followup_gps_address`, `followup_created_date`) VALUES
(1, 1, '11.02086130', '76.93587970', 'Saibaba Colony, Coimbatore, Tamil Nadu', '2017-12-18 07:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_permissions`
--

CREATE TABLE `group_permissions` (
  `pid` int(10) NOT NULL,
  `permission_name` varchar(100) NOT NULL,
  `permission_type` int(1) DEFAULT NULL,
  `group_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_gps_tbl`
--

CREATE TABLE `invoice_gps_tbl` (
  `invoice_gps_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `invoice_latitude` decimal(10,8) NOT NULL,
  `invoice_longitude` decimal(10,8) NOT NULL,
  `invoice_gps_address` varchar(500) DEFAULT NULL,
  `invoice_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tbl`
--

CREATE TABLE `invoice_tbl` (
  `invoice_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `invoice_number` varchar(50) NOT NULL,
  `invoice_type` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_tbl`
--

INSERT INTO `invoice_tbl` (`invoice_id`, `employee_id`, `customer_id`, `order_id`, `delivery_id`, `payment_id`, `invoice_number`, `invoice_type`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 1, 1, 1, NULL, 1, '73673', 1, '2017-12-09 06:04:07', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(500) DEFAULT NULL,
  `location_address` varchar(500) DEFAULT NULL,
  `location_city` varchar(50) DEFAULT NULL,
  `location_state` varchar(50) DEFAULT NULL,
  `location_zip` varchar(8) DEFAULT NULL,
  `location_phone` varchar(10) DEFAULT NULL,
  `location_email` varchar(100) DEFAULT NULL,
  `location_lat` decimal(10,7) DEFAULT NULL,
  `location_lon` decimal(10,7) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `taskid` int(11) DEFAULT NULL,
  `cust_name` varchar(255) DEFAULT NULL,
  `start_task` tinyint(1) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `location_name`, `location_address`, `location_city`, `location_state`, `location_zip`, `location_phone`, `location_email`, `location_lat`, `location_lon`, `userid`, `taskid`, `cust_name`, `start_task`, `created_date`) VALUES
(2, 'Customer 2', 'Tiruppur, Tamil Nadu, India', NULL, NULL, NULL, NULL, NULL, '11.1085742', '77.2937719', 1, 27, 'Customer 2', 1, '2017-10-11 07:36:23'),
(3, 'Customer 3', 'Saibaba colony,coimbatore,Tamil Nadu 641654, India', NULL, NULL, NULL, NULL, NULL, '11.1733137', '77.2042076', 1, 28, 'Customer 3', 1, '2017-10-11 07:36:23'),
(4, 'Customer 3', 'Ramanathapuram', NULL, NULL, NULL, NULL, NULL, '11.1733137', '77.2042076', 4, 29, 'Customer 3', 1, '2017-11-21 04:14:19'),
(6, 'Tiruppur', 'Sedarpalayam, Tamil Nadu, India', NULL, NULL, NULL, NULL, NULL, '11.1619819', '77.3931885', 1, 27, 'Tiruppur', 1, '2017-10-11 07:36:24'),
(7, 'Saibaba Colony', 'Tamil Nadu Agricultural University, PN Pudur, Coim', NULL, NULL, NULL, NULL, NULL, '11.0208613', '76.9358797', 1, 28, 'Saibaba Colony', 1, '2017-10-11 07:36:25'),
(8, 'Vadavalli', '641046, India', NULL, NULL, NULL, NULL, NULL, '11.0271785', '76.8641034', 1, 27, 'Vadavalli', 1, '2017-10-11 07:36:25'),
(11, 'Saibaba Colony', 'Madathur, Tamil Nadu, India', 'Coimbatore', 'Tamilnadu', '641038', NULL, NULL, '11.0797000', '76.8815195', 1, NULL, NULL, NULL, '2017-11-21 03:30:27'),
(12, 'Saibaba Colony', 'Madathur, Tamil Nadu, India', 'Coimbatore', 'Tamilnadu', '641038', NULL, NULL, '11.0797000', '76.8815195', 1, NULL, NULL, NULL, '2017-11-21 03:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `login_id` int(11) NOT NULL,
  `app_user_id` varchar(40) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_by` varchar(20) NOT NULL,
  `guid` varchar(100) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`login_id`, `app_user_id`, `employee_id`, `email`, `password`, `status`, `role`, `created_by`, `guid`, `login_time`, `logout_time`) VALUES
(1, '1', 1, 'dinesh19@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 5, 'user', NULL, '2017-08-03 18:46:26', NULL),
(2, '2', 2, 'test@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', 1, NULL, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications_tbl`
--

CREATE TABLE `notifications_tbl` (
  `id` int(11) UNSIGNED NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `unread` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(255) NOT NULL DEFAULT '',
  `parameters` text NOT NULL,
  `reference_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online_payment_tbl`
--

CREATE TABLE `online_payment_tbl` (
  `online_payment_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `total_order_amount` decimal(19,2) DEFAULT NULL,
  `amount_paid` decimal(19,2) DEFAULT NULL,
  `balance_amount` decimal(19,2) DEFAULT NULL,
  `invoice_type` int(11) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_followup_tbl`
--

CREATE TABLE `order_followup_tbl` (
  `followup_id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `number_of_followup` int(20) DEFAULT NULL,
  `priority` varchar(10) DEFAULT NULL,
  `followup_date1` datetime DEFAULT NULL,
  `followup_date2` datetime DEFAULT NULL,
  `followup_date3` datetime DEFAULT NULL,
  `followup_date4` datetime DEFAULT NULL,
  `followup_date5` datetime DEFAULT NULL,
  `delete_sts` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_followup_tbl`
--

INSERT INTO `order_followup_tbl` (`followup_id`, `task_id`, `sub_task_id`, `employee_id`, `customer_id`, `number_of_followup`, `priority`, `followup_date1`, `followup_date2`, `followup_date3`, `followup_date4`, `followup_date5`, `delete_sts`) VALUES
(1, NULL, NULL, 1, 1, 2, 'H', '2017-12-02 12:00:00', '2017-12-16 11:00:00', NULL, NULL, NULL, 0),
(2, NULL, NULL, 1, 1, 1, 'H', '2017-12-02 16:25:00', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_gps_tbl`
--

CREATE TABLE `order_gps_tbl` (
  `order_gps_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_latitude` decimal(10,8) NOT NULL,
  `order_longitude` decimal(10,8) NOT NULL,
  `order_gps_address` varchar(500) DEFAULT NULL,
  `order_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_products_tbl`
--

CREATE TABLE `order_products_tbl` (
  `order_product_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `order_qty` int(11) DEFAULT NULL,
  `price` decimal(19,2) DEFAULT NULL,
  `discount` decimal(19,2) DEFAULT NULL,
  `tax` decimal(19,2) DEFAULT NULL,
  `gst` decimal(19,2) DEFAULT NULL,
  `total` decimal(19,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products_tbl`
--

INSERT INTO `order_products_tbl` (`order_product_id`, `order_id`, `product_id`, `item_name`, `order_qty`, `price`, `discount`, `tax`, `gst`, `total`) VALUES
(1, 1, 1, 'iPhone 4', 2, '10000.00', '10.00', NULL, '5.00', '7500.00'),
(2, 0, 2, 'iPhone 6', 2, '10000.00', '10.00', NULL, '5.00', '7500.00'),
(3, 1, 2, 'iPhone 6', 2, '10000.00', '10.00', NULL, '5.00', '7500.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `employee_id` varchar(20) DEFAULT NULL,
  `order_status` varchar(20) DEFAULT NULL,
  `priority` varchar(20) DEFAULT NULL,
  `delivery_time` time DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `credit_limit` decimal(19,2) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(40) DEFAULT NULL,
  `modified_by` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `task_id`, `sub_task_id`, `customer_id`, `employee_id`, `order_status`, `priority`, `delivery_time`, `delivery_date`, `credit_limit`, `assigned_by`, `created_date`, `modified_date`, `created_by`, `modified_by`) VALUES
(1, NULL, NULL, '1', '1', 'new', 'H', '12:00:00', '2017-08-05', '22.00', 1, '2017-12-05 21:25:06', '2017-12-09 17:31:27', '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `payments_tbl`
--

CREATE TABLE `payments_tbl` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(20) DEFAULT NULL,
  `credit_limit` decimal(10,2) DEFAULT NULL,
  `last_bill_paid_status` varchar(50) DEFAULT NULL,
  `received_date` datetime DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments_tbl`
--

INSERT INTO `payments_tbl` (`payment_id`, `order_id`, `customer_id`, `budget_id`, `sub_task_id`, `employee_id`, `payment_mode`, `credit_limit`, `last_bill_paid_status`, `received_date`, `created_date`) VALUES
(1, 1, '1', NULL, NULL, NULL, NULL, NULL, 'unpaid', NULL, '2017-12-08 10:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_gps_tbl`
--

CREATE TABLE `payment_gps_tbl` (
  `payment_gps_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `payment_latitude` decimal(10,8) NOT NULL,
  `payment_longitude` decimal(10,8) NOT NULL,
  `payment_gps_address` varchar(500) DEFAULT NULL,
  `payment_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `planned_customer_task_tbl`
--

CREATE TABLE `planned_customer_task_tbl` (
  `planned_task_id` int(11) NOT NULL,
  `task_date` date DEFAULT NULL,
  `assign_budget_id` int(11) DEFAULT NULL,
  `budget_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(10,8) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `task_type` varchar(20) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planned_customer_task_tbl`
--

INSERT INTO `planned_customer_task_tbl` (`planned_task_id`, `task_date`, `assign_budget_id`, `budget_id`, `customer_id`, `employee_id`, `contact_person`, `contact_number`, `purpose`, `status`, `latitude`, `longitude`, `location`, `task_type`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, '2017-11-19', NULL, 1, 1, 1, 'Guru', '9734663333', 'The First Task', NULL, NULL, NULL, NULL, NULL, '2017-11-19 07:49:25', NULL, NULL, NULL),
(2, '2017-11-19', 1, 1, 1, 1, 'Guru', '9734663333', 'The First Task', NULL, NULL, NULL, NULL, NULL, '2017-11-19 07:49:25', NULL, NULL, NULL),
(3, '2017-11-19', 1, 1, 1, 1, 'Guru', '9734663333', 'The First Task', NULL, NULL, NULL, NULL, NULL, '2017-11-19 07:49:25', NULL, NULL, NULL),
(4, '2017-11-19', 1, 1, 1, 1, 'Guru', '9734663333', 'The First Task', 'followup', '73.43553400', '73.43553400', 'Coimbatore,Tamilnadu', NULL, '2017-11-19 07:53:17', 'user', NULL, NULL),
(5, '2017-11-19', 1, 1, 1, 1, 'Guru', '9734663333', 'The First Task', 'followup', '0.00000000', '0.00000000', '0', '1', '2017-11-26 08:55:28', 'user', NULL, NULL),
(6, '2017-11-19', 1, 1, 1, 1, 'Guru', '9734663333', 'The First Task', 'followup', '0.00000000', '0.00000000', '0', '1', '2017-11-26 08:57:40', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `planned_customer_tbl`
--

CREATE TABLE `planned_customer_tbl` (
  `planned_id` int(11) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `dealer` varchar(100) NOT NULL,
  `contact_person_name` varchar(50) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `gst_number` varchar(20) DEFAULT NULL,
  `credit_limit` int(11) DEFAULT NULL,
  `outstanding_amount` decimal(19,2) DEFAULT NULL,
  `comments` text,
  `approved` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planned_customer_tbl`
--

INSERT INTO `planned_customer_tbl` (`planned_id`, `company_address`, `dealer`, `contact_person_name`, `customer_id`, `employee_id`, `contact_number`, `gst_number`, `credit_limit`, `outstanding_amount`, `comments`, `approved`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, '10000.00', 'Test my app', '0', '2017-11-16 06:42:08', '', '2017-12-05 18:56:32', '1'),
(2, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-11-30 08:26:44', 'user', '2017-12-05 18:56:32', '1'),
(3, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-12-02 07:41:57', 'user', '2017-12-05 18:56:32', '1'),
(4, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-12-02 07:47:06', 'user', '2017-12-05 18:56:32', '1'),
(5, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-12-02 07:49:07', 'user', '2017-12-05 18:56:32', '1'),
(6, 'Cbe', '2', 'Dinesh ', 0, 1, '947483344', 'GDU34424', 12, NULL, 'Testt ', NULL, '2017-12-02 10:56:43', '1', NULL, NULL),
(7, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-12-02 11:42:59', 'user', '2017-12-05 18:56:32', '1'),
(8, 'D B Road', '1', 'Raj', 1, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', '0', '2017-12-02 11:45:35', 'user', '2017-12-05 18:56:32', '1'),
(9, 'Colony', '1', 'Dinesh ', 0, 1, '9647353734', 'GDU34424', 12, NULL, 'yfyfyhfyfyf', NULL, '2017-12-02 16:45:22', '1', NULL, NULL),
(10, 'D B Road', '1', 'Raj', 0, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', NULL, '2017-12-05 10:04:01', '1', NULL, NULL),
(11, 'D B Road', '1', 'Raj', 0, 1, '9374648474', 'FAFFSFF', 10, NULL, 'Test my app', NULL, '2017-12-05 10:08:07', '1', NULL, NULL),
(12, 'Colony', '2', 'Dinesh ', 0, 1, '9647353734', 'GDU34424', 12, NULL, 'hhughgjhufbvgvjbjhvuv', NULL, '2017-12-05 10:31:08', '1', NULL, NULL),
(13, 'test address', '2', 'Test', 0, 1, '9755757567', 'INBJG5676', 12, NULL, 'uighjggdhghgcgcghfghcg', NULL, '2017-12-05 15:49:47', '1', NULL, NULL),
(14, 'Cbe', '4', 'Dinu', 0, 1, '9656756668', 'UGGF6777', 22, NULL, 'rrty', NULL, '2017-12-05 15:55:06', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` text,
  `product_category` varchar(20) DEFAULT NULL,
  `product_subcategory` varchar(20) DEFAULT NULL,
  `qty_available` int(11) DEFAULT NULL,
  `product_price` decimal(10,2) DEFAULT NULL,
  `gst` decimal(19,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`product_id`, `product_name`, `product_description`, `product_category`, `product_subcategory`, `qty_available`, `product_price`, `gst`, `status`) VALUES
(1, 'iPhone 8', 'Various apple mobiles', 'Mobile', 'iphone', 3, '50000.00', '0.00', 1),
(2, 'iPhone 6', 'Apple Phone', 'Mobile', 'iphone', 43, '40000.00', NULL, 1),
(3, 'iPhone 7', 'Apple Phone', 'Mobile', 'iphone', 11, '45000.00', NULL, 1),
(437, 'test', 'test', 'test1', 'test2', 10, '20000.00', '3.00', 1),
(439, 'test 2', 'tkfkk k', 'dfgdfg', 'jdgjdj', 22, '39999.00', '28.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pumps_type_tbl`
--

CREATE TABLE `pumps_type_tbl` (
  `pumps_id` int(11) NOT NULL,
  `pumps_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pumps_type_tbl`
--

INSERT INTO `pumps_type_tbl` (`pumps_id`, `pumps_name`) VALUES
(1, 'ANGEL'),
(2, 'TEXMO'),
(3, 'BEST'),
(4, 'CROMPTON'),
(5, 'CRI PUMPS'),
(6, 'DECCAN INDUSTRIES'),
(7, 'EKKI'),
(8, 'DUKE'),
(9, 'FALCON'),
(10, 'GRUNDFOS'),
(11, 'KIRLOSKAR'),
(12, 'KSB'),
(13, 'VARUNA'),
(14, 'MBH'),
(15, 'PLUGA'),
(16, 'SABAR'),
(17, 'SHARP'),
(18, 'TECHNO'),
(19, 'UNNATI'),
(20, 'V-GUARD'),
(21, 'WATERMAN'),
(22, 'WILO'),
(23, 'YATHI'),
(24, 'LADA'),
(25, 'TORMAC'),
(26, 'AQUATEX'),
(27, 'AQUA-TARO'),
(28, 'SUGUNA'),
(29, 'MAHENDRA'),
(30, 'LUBI'),
(31, 'JAI JHANSI'),
(32, 'HAVELLS'),
(33, 'FINOLEX'),
(34, 'OTHER BRANDED'),
(35, 'OTHER LOCAL');

-- --------------------------------------------------------

--
-- Table structure for table `roles_tbl`
--

CREATE TABLE `roles_tbl` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `permission` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles_tbl`
--

INSERT INTO `roles_tbl` (`role_id`, `role_name`, `status`, `permission`) VALUES
(5, 'Super Admin', 1, 'form_add,form_edit,form_delete,form_view,form_pdf,form_excel,form_delete_all,form_print'),
(6, 'Admin', 1, 'form_view'),
(7, 'Manager', 1, NULL),
(8, 'Assistant Manager', 1, NULL),
(9, 'Supervisor', 1, NULL),
(10, 'System Admin', 1, NULL),
(11, 'Employee', 1, NULL),
(12, 'Driver', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state_tbl`
--

CREATE TABLE `state_tbl` (
  `stateCode` int(4) NOT NULL,
  `countryCode` int(4) NOT NULL,
  `stateName` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `state_tbl`
--

INSERT INTO `state_tbl` (`stateCode`, `countryCode`, `stateName`) VALUES
(1, 2, 'TamilNadu'),
(60, 2, 'Andhra Pradesh'),
(61, 2, 'Arunachal Pradesh'),
(62, 2, 'Assam'),
(63, 2, 'Bihar'),
(64, 2, 'Chandigarh'),
(65, 2, 'Chhattisgarh'),
(66, 2, 'Dadra and Nagar Haveli'),
(67, 2, 'Daman and Diu'),
(68, 2, 'Delhi'),
(69, 2, 'Goa'),
(70, 2, 'Gujarat'),
(71, 2, 'Haryana'),
(72, 2, 'Himachal Pradesh'),
(73, 2, 'Jammu and Kashmir'),
(74, 2, 'Jharkhand'),
(75, 2, 'Karnataka'),
(76, 2, 'Kerala'),
(77, 2, 'Lakshadweep'),
(78, 2, 'Madhya Pradesh'),
(79, 2, 'Maharashtra'),
(80, 2, 'Manipur'),
(81, 2, 'Meghalaya'),
(82, 2, 'Mizoram'),
(83, 2, 'Nagaland'),
(84, 2, 'Orissa'),
(85, 2, 'Puducherry'),
(86, 2, 'Punjab'),
(87, 2, 'Rajasthan'),
(88, 2, 'Sikkim'),
(89, 2, 'Tripura'),
(90, 2, 'Uttar Pradesh'),
(91, 2, 'Uttarakhand'),
(92, 2, 'West Bengal'),
(93, 1, 'Alberta'),
(94, 1, 'British Columbia'),
(95, 1, 'Manitoba'),
(96, 1, 'New Brunswick'),
(97, 1, 'Newfoundland and Labrador'),
(98, 1, 'Northwest Territories'),
(99, 1, 'Nova Scotia'),
(100, 1, 'Nunavut'),
(101, 1, 'Ontario'),
(102, 1, 'Prince Edward Island'),
(103, 1, 'Quebec'),
(104, 1, 'Saskatchewan'),
(105, 1, 'Yukon Territory'),
(106, 5, 'Australian Capital Territory'),
(107, 5, 'New South Wales'),
(108, 5, 'Northern Territory'),
(109, 5, 'Queensland'),
(110, 5, 'South Australia'),
(111, 5, 'Tasmania'),
(112, 5, 'Victoria'),
(113, 5, 'Western Australia '),
(114, 3, 'Abu Dhabi'),
(115, 3, 'Ajman'),
(116, 3, 'Dubai'),
(117, 3, 'Fujairah'),
(118, 3, 'Ras al-Khaimah'),
(119, 3, 'Sharjah'),
(120, 3, 'Umm al-Quwain'),
(121, 7, 'Antrim'),
(122, 7, 'Ards'),
(123, 7, 'Armagh'),
(124, 7, 'Ballymena'),
(125, 7, 'Ballymoney'),
(126, 7, 'Banbridge'),
(127, 7, 'Belfast'),
(128, 7, 'Carrickfergus'),
(129, 9, 'Blaenau Gwent'),
(130, 9, 'Bridgend'),
(131, 9, 'Bridgend'),
(132, 9, 'Caerphilly'),
(133, 9, 'Cardiff'),
(134, 9, 'Carmarthenshire'),
(135, 9, 'Ceredigion'),
(136, 9, 'Conwy'),
(137, 9, 'Denbighshire'),
(138, 9, 'Flintshire'),
(139, 9, 'Gwynedd'),
(140, 9, 'Isle of Anglesey'),
(141, 9, 'Merthyr Tydfil'),
(142, 9, 'Monmouthshire'),
(143, 9, 'Neath Port Talbot'),
(144, 9, 'Newport'),
(145, 9, 'Pembrokeshire'),
(146, 9, 'Powys'),
(147, 9, 'Rhondda'),
(148, 9, 'Cynon'),
(149, 9, 'Taff'),
(150, 9, 'Swansea'),
(151, 9, 'The Vale of Glamorgan'),
(152, 9, 'Torfaen'),
(153, 9, 'Wrexham'),
(154, 8, 'Aberdeen City'),
(155, 8, 'Aberdeenshire'),
(156, 8, 'Angus'),
(157, 8, 'Argyll and Bute'),
(158, 8, 'Clackmannanshire'),
(159, 8, 'Dumfries and Galloway'),
(160, 8, 'Dundee City'),
(161, 8, 'East Ayrshire'),
(162, 8, 'East Dunbartonshire'),
(163, 8, 'East Lothian'),
(164, 8, 'East Renfrewshire'),
(165, 8, 'City of Edinburgh'),
(166, 8, 'Eilean Siar (Western Isles)'),
(167, 8, 'Falkirk'),
(168, 8, 'Fife'),
(169, 8, 'Glasgow City'),
(170, 8, 'Highland'),
(171, 8, 'Inverclyde'),
(172, 8, 'Midlothian'),
(173, 8, 'Moray'),
(174, 8, 'North Ayrshire'),
(175, 8, 'North Lanarkshire'),
(176, 8, 'Orkney Islands'),
(177, 8, 'Perth and Kinross'),
(178, 8, 'Renfrewshire'),
(179, 8, 'Shetland Islands'),
(180, 8, 'South Ayrshire'),
(181, 8, 'South Lanarkshire'),
(182, 8, 'Stirling'),
(183, 8, 'The Scottish Borders'),
(184, 8, 'West Dunbartonshire'),
(185, 8, 'West Lothian '),
(186, 6, 'Bedfordshire'),
(187, 6, 'Buckinghamshire'),
(188, 6, 'Cambridgeshire'),
(189, 6, 'Cheshire'),
(190, 6, 'Cornwall and Isles of Scilly'),
(191, 6, 'Cumbria'),
(192, 6, 'Derbyshire'),
(193, 6, 'Devon'),
(194, 6, 'Dorset'),
(195, 6, 'Durham'),
(196, 6, 'East Sussex'),
(197, 6, 'Essex'),
(198, 6, 'Gloucestershire'),
(199, 6, 'Hampshire'),
(200, 6, 'Hertfordshire'),
(201, 6, 'Kent'),
(202, 6, 'Lancashire'),
(203, 6, 'Leicestershire'),
(204, 6, 'Lincolnshire'),
(205, 6, 'Norfolk'),
(206, 6, 'North Yorkshire'),
(207, 6, 'Northamptonshire'),
(208, 6, 'Northumberland'),
(209, 6, 'Nottinghamshire'),
(210, 6, 'Oxfordshire'),
(211, 6, 'Shropshire'),
(212, 6, 'Somerset'),
(213, 6, 'Staffordshire'),
(214, 6, 'Suffolk'),
(215, 6, 'Surrey'),
(216, 6, 'Warwickshire'),
(217, 6, 'West Sussex'),
(218, 6, 'Wiltshire'),
(219, 6, 'Worcestershire '),
(220, 6, 'Barking and Dagenham'),
(221, 6, 'Barnet'),
(222, 6, 'Bexley'),
(223, 6, 'Brent'),
(224, 6, 'Bromley'),
(225, 6, 'Camden'),
(226, 6, 'Croydon'),
(227, 6, 'Ealing'),
(228, 6, 'Enfield'),
(229, 6, 'Greenwich'),
(230, 6, 'Hackney'),
(231, 6, 'Hammersmith and Fulham'),
(232, 6, 'Haringey'),
(233, 6, 'Harrow'),
(234, 6, 'Havering'),
(235, 6, 'Hillingdon'),
(236, 6, 'Hounslow'),
(237, 6, 'Islington'),
(238, 6, 'Kensington and Chelsea'),
(239, 6, 'Kingston upon Thames'),
(240, 6, 'Lambeth'),
(241, 6, 'Lewisham'),
(242, 6, 'City of London'),
(243, 6, 'City of London'),
(244, 6, 'Merton'),
(245, 6, 'Newham'),
(246, 6, 'Redbridge'),
(247, 6, 'Richmond upon Thames'),
(248, 6, 'Southwark'),
(249, 6, 'Sutton'),
(250, 6, 'Tower Hamlets'),
(251, 6, 'Waltham Forest'),
(252, 6, 'Wandsworth'),
(253, 6, 'Westminster'),
(254, 6, 'Barnsley'),
(255, 6, 'Birmingham'),
(256, 6, 'Bolton'),
(257, 6, 'Bradford'),
(258, 6, 'Bury'),
(259, 6, 'Calderdale'),
(260, 6, 'Coventry'),
(261, 6, 'Doncaster'),
(262, 6, 'Dudley'),
(263, 6, 'Gateshead'),
(264, 6, 'Kirklees'),
(265, 6, 'Knowlsey'),
(266, 6, 'Leeds'),
(267, 6, 'Liverpool'),
(268, 6, 'Manchester'),
(269, 6, 'Newcastle upon Tyne'),
(270, 6, 'North Tyneside'),
(271, 6, 'Oldham'),
(272, 6, 'Rochdale'),
(273, 6, 'Rotherham'),
(274, 6, 'Salford'),
(275, 6, 'Sandwell'),
(276, 6, 'Sefton'),
(277, 6, 'Knowlsey'),
(278, 6, 'Sheffield'),
(279, 6, 'Solihull'),
(280, 6, 'South Tyneside'),
(281, 6, 'St. Helens'),
(282, 6, 'Stockport'),
(283, 6, 'Sunderland'),
(284, 6, 'Tameside'),
(285, 6, 'Trafford'),
(286, 6, 'Wakefield'),
(287, 6, 'Walsall'),
(288, 6, 'Kirklees'),
(289, 6, 'Knowlsey'),
(290, 6, 'Leeds'),
(291, 6, 'Liverpool'),
(292, 6, 'Wigan'),
(293, 6, 'Wirral'),
(294, 6, 'Wolverhampton'),
(295, 6, 'Bath and North East Somerset'),
(296, 6, 'Blackburn with Darwen'),
(297, 6, 'Blackpool'),
(298, 6, 'Bournemouth'),
(299, 6, 'Bracknell Forest'),
(300, 6, 'Brighton and Hove'),
(301, 6, 'City of Bristol'),
(302, 6, 'Darlington'),
(303, 6, 'Derby'),
(304, 6, 'East Riding of Yorkshire'),
(305, 6, 'Halton'),
(306, 6, 'Hartlepool'),
(307, 6, 'County of Herefordshire'),
(308, 6, 'Ile of Wight'),
(309, 6, 'City of Kingston upon Hull'),
(310, 6, 'Leicester'),
(311, 6, 'Luton'),
(312, 6, 'Medway'),
(313, 6, 'Middlesbrough'),
(314, 6, 'Milton Keynes'),
(315, 6, 'North East Lincolnshire'),
(316, 6, 'North Lincolnshire'),
(317, 6, 'North Somerset'),
(318, 6, 'Nottingham'),
(319, 6, 'Peterborough'),
(320, 6, 'Plymouth'),
(321, 6, 'Poole'),
(322, 6, 'Portsmouth'),
(323, 6, 'Reading'),
(324, 6, 'Redcar and Cleveland'),
(325, 6, 'Rutland'),
(326, 6, 'Slough'),
(327, 6, 'South Gloucestershire'),
(328, 6, 'Southampton'),
(329, 6, 'Southend-on-Sea'),
(330, 6, 'Stockton-on-Tees'),
(331, 6, 'Stoke-on-Trent'),
(332, 6, 'Swindon'),
(333, 6, 'Telford and Wrekin'),
(334, 6, 'Thurrock'),
(335, 6, 'Torbay'),
(336, 6, 'Warrington'),
(337, 6, 'West Berkshire'),
(338, 6, 'Windsor and Maidenhead'),
(339, 6, 'Wokingham'),
(340, 6, 'York');

-- --------------------------------------------------------

--
-- Table structure for table `sub_task_tbl`
--

CREATE TABLE `sub_task_tbl` (
  `sub_task_id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `customer_id` varchar(20) DEFAULT NULL,
  `employee_id` varchar(20) DEFAULT NULL,
  `contact_time` time DEFAULT NULL,
  `contact_purpose` varchar(500) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(40) DEFAULT NULL,
  `modified_by` varchar(40) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `task_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_task_tbl`
--

INSERT INTO `sub_task_tbl` (`sub_task_id`, `task_id`, `customer_id`, `employee_id`, `contact_time`, `contact_purpose`, `created_date`, `modified_date`, `created_by`, `modified_by`, `status`, `task_type`) VALUES
(5, 2, '1', '1', NULL, NULL, '2017-11-30 00:18:49', '2017-11-29 18:48:49', '1', NULL, NULL, NULL),
(6, 2, '2', '1', NULL, NULL, '2017-11-30 00:18:50', '2017-11-29 18:48:50', '1', NULL, NULL, NULL),
(7, 1, '1,2,3', '1', NULL, NULL, '2017-12-01 09:53:39', '2017-12-01 04:23:39', 'user', NULL, NULL, NULL),
(8, 3, '1', '1', NULL, NULL, '2017-12-16 16:29:48', '2017-12-16 10:59:48', '1', NULL, NULL, NULL),
(9, 3, '2', '1', NULL, NULL, '2017-12-16 16:29:49', '2017-12-16 10:59:49', '1', NULL, NULL, NULL),
(10, 1, '1', '1', '09:00:00', 'Meeting', '2017-12-22 11:53:46', '2017-12-22 06:23:46', 'user', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `survey_location_tbl`
--

CREATE TABLE `survey_location_tbl` (
  `survey_image_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `imagepath` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imagename` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imageuniquename` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_location_tbl`
--

INSERT INTO `survey_location_tbl` (`survey_image_id`, `emp_id`, `customer_id`, `survey_id`, `imagepath`, `imagename`, `imageuniquename`, `latitude`, `longitude`, `address`, `created_date`) VALUES
(1, 1, NULL, NULL, '/assets/uploads/1/images/', '59c531dba9278.png', '59c531dba9278.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-09-22 16:49:06'),
(2, 2, NULL, NULL, '/assets/uploads/1/images/', '59c531dba9278.png', '59c531dba9278.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-09-22 16:49:06'),
(3, 1, 4, NULL, '/assets/uploads/1/images/', '59dc706766e14.png', '59dc706766e14.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-10-10 07:02:01'),
(4, 1, 4, NULL, '/assets/uploads/1/images/', '59dc72b78b5b5.png', '59dc72b78b5b5.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-10-10 07:11:54'),
(5, 1, 4, 8, '/assets/uploads/1/images/', '59dc72edad1d0.png', '59dc72edad1d0.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-10-10 07:12:46'),
(6, 1, 4, 8, '/assets/uploads/1/images/', '59dc72edad1d1.png', '59dc72edad1d0.png', '11.0261711', '77.0186319', 'Hope College, periyar nagar, Masakalipalayam, Hope College, Peelamedu, Coimbatore, Tamil Nadu 641004, India', '2017-10-16 07:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `survey_tbl`
--

CREATE TABLE `survey_tbl` (
  `survey_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `person_name` varchar(100) DEFAULT NULL,
  `person_age` int(11) DEFAULT NULL,
  `customer_address1` varchar(255) DEFAULT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `customer_city` varchar(50) DEFAULT NULL,
  `customer_pincode` varchar(10) DEFAULT NULL,
  `customer_phone1` varchar(15) DEFAULT NULL,
  `customer_phone2` varchar(15) DEFAULT NULL,
  `pumps_type` varchar(255) NOT NULL,
  `other_product_type` varchar(100) DEFAULT NULL,
  `customer_type` int(11) DEFAULT NULL,
  `vendor_type` varchar(20) DEFAULT NULL,
  `level_of_company` varchar(50) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey_tbl`
--

INSERT INTO `survey_tbl` (`survey_id`, `employee_id`, `customer_id`, `person_name`, `person_age`, `customer_address1`, `customer_address2`, `customer_city`, `customer_pincode`, `customer_phone1`, `customer_phone2`, `pumps_type`, `other_product_type`, `customer_type`, `vendor_type`, `level_of_company`, `comments`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(2, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1,2,3', 'New Company', 1, NULL, 'High', 'This is a new company', '0', '2017-09-23 17:44:36', NULL, NULL),
(3, 2, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3,1', 'New Company', 1, '2', 'High', 'This is a new company', '0', '2017-09-23 17:44:36', NULL, NULL),
(7, 2, 2, 'Ragu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7,8', 'Others', 1, NULL, 'medium', 'thafsgsg', '0', '2017-10-08 18:15:46', NULL, NULL),
(8, 2, 4, 'Ram Gopal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2,9', 'Others', 1, NULL, 'high', 'xcvxcvbxcvxcbcxbxhgchchgcchghgvchg', '0', '2017-10-08 18:26:16', '1', '2017-10-13 16:51:05'),
(29, 1, 2, 'Raj', 28, 'D B Road', 'R S Puram', 'Coimbatore', '643010', '9374648474', '9473647745', '1,2', 'New Company', 1, NULL, 'High', 'This is a new company', '0', '2017-10-20 16:00:25', NULL, NULL),
(30, 1, 2, 'Raj', 28, 'D B Road', 'R S Puram', 'Coimbatore', '643010', '9374648474', '9473647745', '1,2', 'New Company', 1, '3', 'high', 'This is a new company', '0', '2017-10-20 16:00:41', '1', '2017-11-14 00:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `task_images`
--

CREATE TABLE `task_images` (
  `image_id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `imagename` varchar(255) DEFAULT NULL,
  `imageuniquename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task_tbl`
--

CREATE TABLE `task_tbl` (
  `task_id` int(11) NOT NULL,
  `task_description` varchar(255) DEFAULT NULL,
  `assigned_to` varchar(20) DEFAULT NULL,
  `assigned_date` datetime DEFAULT NULL,
  `owner_id` varchar(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_by` varchar(40) DEFAULT NULL,
  `modified_by` varchar(40) DEFAULT NULL,
  `target_count` varchar(20) DEFAULT NULL,
  `target_completion_date` date DEFAULT NULL,
  `delay_reason` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task_tbl`
--

INSERT INTO `task_tbl` (`task_id`, `task_description`, `assigned_to`, `assigned_date`, `owner_id`, `created_date`, `modified_date`, `created_by`, `modified_by`, `target_count`, `target_completion_date`, `delay_reason`, `status`) VALUES
(1, 'Follow Up', '1', '2017-07-16 12:14:00', '1', '2017-07-16 12:15:04', '2017-07-16 16:36:33', '1', '1', '20', '2017-07-23', 'Closed, Not available', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `user_category_tbl`
--

CREATE TABLE `user_category_tbl` (
  `user_category_id` int(11) NOT NULL,
  `user_category_name` varchar(255) NOT NULL,
  `budget_da` decimal(19,2) DEFAULT NULL,
  `budget_ta` decimal(19,2) DEFAULT NULL,
  `budget_accomodation` decimal(19,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_category_tbl`
--

INSERT INTO `user_category_tbl` (`user_category_id`, `user_category_name`, `budget_da`, `budget_ta`, `budget_accomodation`, `status`) VALUES
(1, 'Type A', '10000.00', '10000.00', '15000.00', 1),
(2, 'Type B', '8000.00', '8000.00', '10000.00', 1),
(3, 'Type C', '7000.00', '7000.00', '8000.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `pid` int(10) NOT NULL,
  `permission_name` varchar(100) NOT NULL,
  `permission_type` int(1) DEFAULT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_signature_tbl`
--

CREATE TABLE `user_signature_tbl` (
  `id` int(11) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `imagepath` varchar(255) DEFAULT NULL,
  `imagename` varchar(255) DEFAULT NULL,
  `imageuniquename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_signature_tbl`
--

INSERT INTO `user_signature_tbl` (`id`, `task_id`, `emp_id`, `customer_id`, `imagepath`, `imagename`, `imageuniquename`) VALUES
(1, 1, 1, 14, 'C:\\wamp\\www\\salezpush\\assets/uploads/1/images/', '597e255dae301.png', '597e255dae301.png'),
(2, 1, 1, 15, 'C:\\wamp\\www\\salezpush\\assets/uploads/1/images/', '5982ca215b517.png', '5982ca215b517.png'),
(3, 3, 1, 1, 'D:\\xampp\\htdocs\\salezpush_v3\\assets/uploads/1/images/', '5a114338a1e28.png', '5a114338a1e28.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_tbl`
--

CREATE TABLE `vehicles_tbl` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(50) DEFAULT NULL,
  `vehicle_number` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles_tbl`
--

INSERT INTO `vehicles_tbl` (`vehicle_id`, `vehicle_name`, `vehicle_number`, `type`, `contact_number`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'Auto', 'TN 38 AJ 7353', '2', '97849344454', '2017-11-19 12:28:39', '1', '2017-11-19 18:01:50', '1'),
(2, 'Sri Velan', 'TN 02 A 5453', '2', '984434546466', '2017-11-19 18:08:45', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_type_tbl`
--

CREATE TABLE `vendor_type_tbl` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_type_tbl`
--

INSERT INTO `vendor_type_tbl` (`vendor_id`, `vendor_name`) VALUES
(1, 'Dealer'),
(2, 'Retainer'),
(3, 'Refinder'),
(4, 'Contractor'),
(5, 'Mechanic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master_tbl`
--
ALTER TABLE `admin_master_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile_tbl`
--
ALTER TABLE `admin_profile_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_user_tbl`
--
ALTER TABLE `app_user_tbl`
  ADD PRIMARY KEY (`app_user_id`);

--
-- Indexes for table `battery_level_tbl`
--
ALTER TABLE `battery_level_tbl`
  ADD PRIMARY KEY (`battery_id`);

--
-- Indexes for table `budget_location_tbl`
--
ALTER TABLE `budget_location_tbl`
  ADD PRIMARY KEY (`budget_location_id`);

--
-- Indexes for table `budget_tbl`
--
ALTER TABLE `budget_tbl`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `cash_payment_tbl`
--
ALTER TABLE `cash_payment_tbl`
  ADD PRIMARY KEY (`cash_payment_id`);

--
-- Indexes for table `cheque_payment_tbl`
--
ALTER TABLE `cheque_payment_tbl`
  ADD PRIMARY KEY (`cheque_payment_id`);

--
-- Indexes for table `city_tbl`
--
ALTER TABLE `city_tbl`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `company_images_tbl`
--
ALTER TABLE `company_images_tbl`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`countryCode`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_type_tbl`
--
ALTER TABLE `customer_type_tbl`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `delivery_gps_tbl`
--
ALTER TABLE `delivery_gps_tbl`
  ADD PRIMARY KEY (`delivery_gps_id`);

--
-- Indexes for table `delivery_tbl`
--
ALTER TABLE `delivery_tbl`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `drivers_tbl`
--
ALTER TABLE `drivers_tbl`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followup_gps_tbl`
--
ALTER TABLE `followup_gps_tbl`
  ADD PRIMARY KEY (`followup_gps_id`);

--
-- Indexes for table `group_permissions`
--
ALTER TABLE `group_permissions`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `invoice_gps_tbl`
--
ALTER TABLE `invoice_gps_tbl`
  ADD PRIMARY KEY (`invoice_gps_id`);

--
-- Indexes for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `locations_locationid` (`location_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `notifications_tbl`
--
ALTER TABLE `notifications_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_payment_tbl`
--
ALTER TABLE `online_payment_tbl`
  ADD PRIMARY KEY (`online_payment_id`);

--
-- Indexes for table `order_followup_tbl`
--
ALTER TABLE `order_followup_tbl`
  ADD PRIMARY KEY (`followup_id`);

--
-- Indexes for table `order_gps_tbl`
--
ALTER TABLE `order_gps_tbl`
  ADD PRIMARY KEY (`order_gps_id`);

--
-- Indexes for table `order_products_tbl`
--
ALTER TABLE `order_products_tbl`
  ADD PRIMARY KEY (`order_product_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payment_gps_tbl`
--
ALTER TABLE `payment_gps_tbl`
  ADD PRIMARY KEY (`payment_gps_id`);

--
-- Indexes for table `planned_customer_task_tbl`
--
ALTER TABLE `planned_customer_task_tbl`
  ADD PRIMARY KEY (`planned_task_id`);

--
-- Indexes for table `planned_customer_tbl`
--
ALTER TABLE `planned_customer_tbl`
  ADD PRIMARY KEY (`planned_id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `pumps_type_tbl`
--
ALTER TABLE `pumps_type_tbl`
  ADD PRIMARY KEY (`pumps_id`);

--
-- Indexes for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD PRIMARY KEY (`stateCode`),
  ADD KEY `countryCode` (`countryCode`);

--
-- Indexes for table `sub_task_tbl`
--
ALTER TABLE `sub_task_tbl`
  ADD PRIMARY KEY (`sub_task_id`);

--
-- Indexes for table `survey_location_tbl`
--
ALTER TABLE `survey_location_tbl`
  ADD PRIMARY KEY (`survey_image_id`);

--
-- Indexes for table `survey_tbl`
--
ALTER TABLE `survey_tbl`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `task_images`
--
ALTER TABLE `task_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `task_tbl`
--
ALTER TABLE `task_tbl`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `user_category_tbl`
--
ALTER TABLE `user_category_tbl`
  ADD PRIMARY KEY (`user_category_id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_signature_tbl`
--
ALTER TABLE `user_signature_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `vendor_type_tbl`
--
ALTER TABLE `vendor_type_tbl`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master_tbl`
--
ALTER TABLE `admin_master_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_profile_tbl`
--
ALTER TABLE `admin_profile_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `app_user_tbl`
--
ALTER TABLE `app_user_tbl`
  MODIFY `app_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `battery_level_tbl`
--
ALTER TABLE `battery_level_tbl`
  MODIFY `battery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `budget_location_tbl`
--
ALTER TABLE `budget_location_tbl`
  MODIFY `budget_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `budget_tbl`
--
ALTER TABLE `budget_tbl`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cash_payment_tbl`
--
ALTER TABLE `cash_payment_tbl`
  MODIFY `cash_payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cheque_payment_tbl`
--
ALTER TABLE `cheque_payment_tbl`
  MODIFY `cheque_payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_tbl`
--
ALTER TABLE `city_tbl`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `company_images_tbl`
--
ALTER TABLE `company_images_tbl`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `country_tbl`
--
ALTER TABLE `country_tbl`
  MODIFY `countryCode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customer_type_tbl`
--
ALTER TABLE `customer_type_tbl`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `delivery_gps_tbl`
--
ALTER TABLE `delivery_gps_tbl`
  MODIFY `delivery_gps_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_tbl`
--
ALTER TABLE `delivery_tbl`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drivers_tbl`
--
ALTER TABLE `drivers_tbl`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee_tbl`
--
ALTER TABLE `employee_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `followup_gps_tbl`
--
ALTER TABLE `followup_gps_tbl`
  MODIFY `followup_gps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `group_permissions`
--
ALTER TABLE `group_permissions`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_gps_tbl`
--
ALTER TABLE `invoice_gps_tbl`
  MODIFY `invoice_gps_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications_tbl`
--
ALTER TABLE `notifications_tbl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online_payment_tbl`
--
ALTER TABLE `online_payment_tbl`
  MODIFY `online_payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_followup_tbl`
--
ALTER TABLE `order_followup_tbl`
  MODIFY `followup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_gps_tbl`
--
ALTER TABLE `order_gps_tbl`
  MODIFY `order_gps_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_products_tbl`
--
ALTER TABLE `order_products_tbl`
  MODIFY `order_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment_gps_tbl`
--
ALTER TABLE `payment_gps_tbl`
  MODIFY `payment_gps_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `planned_customer_task_tbl`
--
ALTER TABLE `planned_customer_task_tbl`
  MODIFY `planned_task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `planned_customer_tbl`
--
ALTER TABLE `planned_customer_tbl`
  MODIFY `planned_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;
--
-- AUTO_INCREMENT for table `pumps_type_tbl`
--
ALTER TABLE `pumps_type_tbl`
  MODIFY `pumps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `roles_tbl`
--
ALTER TABLE `roles_tbl`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `state_tbl`
--
ALTER TABLE `state_tbl`
  MODIFY `stateCode` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;
--
-- AUTO_INCREMENT for table `sub_task_tbl`
--
ALTER TABLE `sub_task_tbl`
  MODIFY `sub_task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `survey_location_tbl`
--
ALTER TABLE `survey_location_tbl`
  MODIFY `survey_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `survey_tbl`
--
ALTER TABLE `survey_tbl`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `task_images`
--
ALTER TABLE `task_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `task_tbl`
--
ALTER TABLE `task_tbl`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_category_tbl`
--
ALTER TABLE `user_category_tbl`
  MODIFY `user_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_signature_tbl`
--
ALTER TABLE `user_signature_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicles_tbl`
--
ALTER TABLE `vehicles_tbl`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendor_type_tbl`
--
ALTER TABLE `vendor_type_tbl`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `state_tbl`
--
ALTER TABLE `state_tbl`
  ADD CONSTRAINT `state_tbl_ibfk_1` FOREIGN KEY (`countryCode`) REFERENCES `country_tbl` (`countryCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
