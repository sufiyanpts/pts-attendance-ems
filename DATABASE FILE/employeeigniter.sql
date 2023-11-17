-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2023 at 04:48 AM
-- Server version: 5.7.43-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `anniversary_tbl`
--

CREATE TABLE `anniversary_tbl` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(150) NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anniversary_tbl`
--

INSERT INTO `anniversary_tbl` (`id`, `staff_name`, `doj`) VALUES
(12, 'George J Barnes', '2023-10-27'),
(16, 'Steven Askew', '2023-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(14) NOT NULL,
  `ass_name` varchar(256) DEFAULT NULL,
  `ass_brand` varchar(128) DEFAULT NULL,
  `ass_model` varchar(256) DEFAULT NULL,
  `ass_code` varchar(256) DEFAULT NULL,
  `configuration` varchar(512) DEFAULT NULL,
  `purchasing_date` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `ass_name`, `ass_brand`, `ass_model`, `ass_code`, `configuration`, `purchasing_date`) VALUES
(0, 'HP Laptop', 'HP series', 'core i3 10 generation', 'PTS0001', 'Intel® Core™ i3 Processor N-series', '2023-11-17'),
(4, 'HP Laptop Note Book', 'HP series', 'core i7 10 generation', 'PTS0001', 'PTS Assets Details\r\nHP Laptop\r\nCore i7 10 generation', '2023-11-16'),
(6, 'Sony Laptop Note Book', 'Sony', 'core i3 10 generation', 'PTS0003', 'a. To check the configuration of your laptop, press the \"Windows\" key and type \"System\" in the search bar, then select \"System\" from the search results. b. Here, you can see information such as the processor, installed RAM (memory), system type (32-bit or 64-bit), and other specifications.', '2023-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `assets_category`
--

CREATE TABLE `assets_category` (
  `id` int(14) NOT NULL,
  `cat_status` enum('ASSETS','LOGISTIC') NOT NULL DEFAULT 'ASSETS',
  `cat_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assets_category`
--

INSERT INTO `assets_category` (`id`, `cat_status`, `cat_name`) VALUES
(0, 'ASSETS', 'Mobile'),
(2, 'ASSETS', 'Computer'),
(3, 'ASSETS', 'Laptop'),
(4, 'LOGISTIC', 'tab'),
(5, 'ASSETS', 'Computer'),
(8, 'ASSETS', 'iphone 15'),
(9, 'ASSETS', 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tbl`
--

CREATE TABLE `attendance_tbl` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staff_id` int(11) NOT NULL,
  `txtreason` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `check_in` time NOT NULL,
  `check_out` time NOT NULL,
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_tbl`
--

INSERT INTO `attendance_tbl` (`id`, `date`, `staff_id`, `txtreason`, `status`, `check_in`, `check_out`, `applied_on`) VALUES
(1, '2023-09-28 00:00:00', 2, 'Late', 1, '10:00:19', '18:30:00', '2023-09-27'),
(9, '2023-09-24 00:00:00', 2, 'no reason', 0, '16:28:00', '14:31:00', '2023-09-28'),
(10, '2023-09-10 00:00:00', 2, 'no reason', 0, '14:38:00', '17:35:00', '2023-09-28'),
(11, '2023-09-29 00:00:00', 2, 'no reason', 0, '12:48:00', '14:46:00', '2023-09-29'),
(14, '2023-10-02 00:00:00', 3, 'no reason', 0, '10:34:00', '18:35:00', '2023-10-25'),
(15, '2023-10-26 00:00:00', 3, '-', 0, '10:35:00', '18:35:00', '2023-10-25'),
(16, '2023-10-31 00:00:00', 3, 'late', 0, '10:35:00', '18:35:00', '2023-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `birthday_tbl`
--

CREATE TABLE `birthday_tbl` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(150) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthday_tbl`
--

INSERT INTO `birthday_tbl` (`id`, `staff_name`, `dob`) VALUES
(1, 'Samuel Huntsman', '2023-10-13'),
(24, 'Sufiyan Mohammed Yaseen', '1989-07-20'),
(25, 'Fauwaaz', '2023-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

CREATE TABLE `branch_tbl` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`id`, `branch_name`, `address`, `added_on`) VALUES
(0, 'Nashik', 'Dawarka Circle Nashik', '2023-11-17 11:46:33'),
(7, 'Mumbai Office', 'Unit 1, Building, no. 2, Millennium Business Park, MIDC Industrial Area, Sector 1, Mahape, Navi Mumbai, Maharashtra - 400710', '2023-11-02 05:43:23'),
(8, 'Pune Office', 'First Floor , Madhuvant, Plot #7, Rajyog, Near KFC, Opp FabIndia, Baner, Pune - 411045', '2023-11-02 05:43:12'),
(9, 'Bengaluru Office', 'Office no. 593, First floor, 6th Cross, 10th Main, Jeevan Bima Nagar, Main Road, Bengaluru - 560075', '2023-11-02 05:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `coff_tbl`
--

CREATE TABLE `coff_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `coff_from` date NOT NULL,
  `coff_to` date NOT NULL,
  `txtreason` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coff_tbl`
--

INSERT INTO `coff_tbl` (`id`, `staff_id`, `coff_from`, `coff_to`, `txtreason`, `description`, `status`, `applied_on`) VALUES
(3, 3, '2023-10-24', '2023-10-24', 'no reason', '-', 1, '2023-10-23'),
(4, 3, '2023-10-24', '2023-10-25', 'sick', '-', 2, '2023-10-23'),
(5, 3, '2023-10-28', '2023-10-28', 'no reason', '-', 1, '2023-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `country_tbl`
--

CREATE TABLE `country_tbl` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_tbl`
--

INSERT INTO `country_tbl` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `department_name`, `added_on`) VALUES
(0, 'Fiber Optical', '2023-11-17 11:34:49'),
(1, 'HR Department', '2023-09-14 11:31:35'),
(2, 'SAP Technical Department', '2023-09-14 11:31:56'),
(3, 'Graphic Designing', '2023-09-14 11:32:12'),
(4, 'Sales Department', '2023-09-14 11:32:50'),
(5, 'Digital Marketing', '2023-09-14 11:33:35'),
(6, 'Accountant Department', '2023-09-14 11:34:05'),
(7, 'Web Development Department', '2023-09-14 11:32:33'),
(8, 'SAP Functional', '2023-09-14 11:30:15'),
(13, 'SEO Department', '2023-10-30 10:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_tbl`
--

CREATE TABLE `holiday_tbl` (
  `id` int(11) NOT NULL,
  `holiday_name` varchar(256) DEFAULT NULL,
  `from_date` varchar(64) DEFAULT NULL,
  `to_date` varchar(64) DEFAULT NULL,
  `number_of_days` varchar(64) DEFAULT NULL,
  `year` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `holiday_tbl`
--

INSERT INTO `holiday_tbl` (`id`, `holiday_name`, `from_date`, `to_date`, `number_of_days`, `year`) VALUES
(8, 'Saint Patrick\'s Day', '2021-03-17', '2021-03-17', '0', '03-2021'),
(11, 'DIwali', '2023-11-12', '2023-11-15', '4', '2023-11'),
(13, 'Holi', '2023-03-07', '2023-03-07', '1', '2023-03'),
(14, 'Independence', '2023-08-15', '2023-08-15', '1', '2023-08'),
(15, 'Independence Day', '2023-08-15', '2023-08-15', '1', '2023-08'),
(16, 'Independence Day', '2023-08-15', '2023-08-15', '1', '2023-08');

-- --------------------------------------------------------

--
-- Table structure for table `leave_tbl`
--

CREATE TABLE `leave_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `leave-type` varchar(50) NOT NULL,
  `leave_reason` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `updated_on` date NOT NULL,
  `applied_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_tbl`
--

INSERT INTO `leave_tbl` (`id`, `staff_id`, `leave-type`, `leave_reason`, `description`, `status`, `leave_from`, `leave_to`, `updated_on`, `applied_on`) VALUES
(1, 2, '', 'Sick', 'Not feeling well enough to join', 1, '2021-01-15', '2021-01-17', '0000-00-00', '2021-01-15'),
(2, 5, '', 'Casual Leave', 'been working for full hours since last month, got to free my mind for few days', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(3, 6, '', 'Day Off', 'Requesting for a day off as I need to join my pal\'s wedding!', 1, '2021-05-28', '2021-05-29', '0000-00-00', '2021-05-27'),
(4, 3, '', 'Casual Leave', 'for vacation, rest, and family events', 1, '2021-05-30', '2021-06-06', '0000-00-00', '2021-05-27'),
(5, 9, '', 'Quarantine', 'i need to quarantine myself for few weeks as i got some symptoms of covid-19', 1, '2021-05-28', '2021-06-11', '0000-00-00', '2021-05-27'),
(6, 5, '', 'Personal Reason', 'Leave for my Openions', 1, '2023-09-18', '2023-09-18', '0000-00-00', '2023-09-07'),
(7, 5, '', 'Personal Reason', 'Personal reason', 2, '2023-09-19', '2023-09-20', '0000-00-00', '2023-09-12'),
(8, 5, '', 'Personal Reason', '', 2, '2023-09-23', '0000-00-00', '0000-00-00', '2023-09-23'),
(9, 3, '', 'sick', '-', 2, '2023-10-20', '2023-10-20', '0000-00-00', '2023-10-16'),
(10, 3, '', 'no reason', '-', 2, '2023-10-24', '2023-10-24', '0000-00-00', '2023-10-23'),
(11, 3, '', 'sick', '', 1, '2023-10-31', '2023-10-31', '0000-00-00', '2023-10-30'),
(12, 3, '', 'sick', '-', 1, '2023-10-31', '2023-10-31', '0000-00-00', '2023-10-30'),
(13, 5, 'pl', 'Personal Reason', 'Testing', 1, '2023-11-04', '2023-11-04', '0000-00-00', '2023-11-01'),
(14, 5, 'LWP (Leave With Pay)', 'Personal Reason', 'Testing For Leave Type', 1, '2023-11-06', '2023-11-06', '0000-00-00', '2023-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', '12345', 1, 1),
(3, 'tatiana@gmail.com', '7402222220', 2, 1),
(4, 'christine@gmail.com', '8888877777', 2, 1),
(5, 'liam@gmail.com', '7410233333', 2, 1),
(6, 'barnes@gmail.com', '1010101010', 2, 1),
(7, 'samuel@gmail.com', '7410000010', 2, 1),
(8, 'markh@gmail.com', '7070707069', 2, 1),
(9, 'angela@gmail.com', '7417417417', 2, 1),
(10, 'sufiyan.yaseen@ptssystems.co.in', '12345', 2, 1),
(13, 'fauwaaz@ptssystems.co.in', '8369910962', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice_tbl`
--

CREATE TABLE `notice_tbl` (
  `id` int(11) NOT NULL,
  `txtnotice` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noticedesc` text NOT NULL,
  `dop` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_tbl`
--

INSERT INTO `notice_tbl` (`id`, `txtnotice`, `noticedesc`, `dop`) VALUES
(16, 'PTS Annual Ceremoney', '1. Client should have appropriate test credentials.\r\n\r\n2. Client id ApiIntegrationNew should be passed in API authentication request.\r\n\r\n3. Client should have all Url’s and understanding of API methods.\r\n\r\n4. Startup Meeting with API team before integration after going through with the document.\r\n\r\n5. In between integration follow the sample verification process.', '2023-10-31'),
(17, 'Dear All Please submit the Data', 'As per recent updates in Mediclaim, we can add only one family member(Spouse or Children). \r\nIf employee is bachelor, he/she needs to be given self-details only.\r\n\r\nThe details as below,\r\nName\r\nRelation\r\nAge\r\nDate of Birth\r\nAadhar Card Number\r\nKindly share the above details by Tomorrow first half.', '2023-10-28'),
(19, 'Festival Diwali', 'Traditional day', '2023-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `salary_tbl`
--

CREATE TABLE `salary_tbl` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `basic_salary` bigint(20) NOT NULL,
  `allowance` bigint(20) NOT NULL,
  `hra` bigint(20) NOT NULL,
  `conveyance` bigint(20) NOT NULL,
  `medical` int(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `month_slip` varchar(20) NOT NULL,
  `year_slip` varchar(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_tbl`
--

INSERT INTO `salary_tbl` (`id`, `staff_id`, `basic_salary`, `allowance`, `hra`, `conveyance`, `medical`, `total`, `month_slip`, `year_slip`, `added_by`, `updated_on`, `added_on`) VALUES
(0, 2, 21000, 3500, 6300, 1000, 1200, 33000, 'October', '2023', 1, '0000-00-00', '2023-11-17 11:43:53'),
(12, 12, 15000, 5000, 0, 0, 0, 20000, '0000-00-00', '0', 1, '0000-00-00', '2023-10-13 10:35:02'),
(36, 10, 21000, 3500, 6300, 1000, 1200, 33000, 'January', '2023', 1, '0000-00-00', '2023-11-02 13:14:15'),
(38, 2, 21000, 3500, 6300, 1000, 1200, 33000, 'January', '2023', 1, '0000-00-00', '2023-11-03 07:30:26'),
(39, 5, 21000, 3500, 6300, 1000, 1200, 33000, 'November', '2021', 1, '0000-00-00', '2023-11-03 07:31:11'),
(40, 7, 21000, 170000, 6300, 1000, 1200, 20400, 'November', '2021', 1, '0000-00-00', '2023-11-03 07:32:16'),
(43, 10, 21000, 3500, 6300, 1000, 1200, 33000, 'February', '2023', 1, '0000-00-00', '2023-11-03 11:37:47'),
(44, 10, 21000, 3500, 6300, 1000, 1200, 33000, 'March', '2023', 1, '0000-00-00', '2023-11-03 11:38:05'),
(45, 3, 21000, 3500, 6300, 1000, 1200, 33000, '', '', 1, '0000-00-00', '2023-11-06 10:40:28'),
(46, 10, 21000, 3500, 6300, 1000, 1200, 33000, 'April', '2023', 1, '0000-00-00', '2023-11-06 10:54:39'),
(47, 1, 21000, 3500, 6300, 1000, 1200, 33000, 'November', '2023', 1, '0000-00-00', '2023-11-11 11:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(150) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `slcposition` varchar(255) NOT NULL,
  `slcbranch` varchar(255) NOT NULL,
  `txtmanager` varchar(255) NOT NULL,
  `empcode` int(11) NOT NULL,
  `slcemptype` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `txtstreet` varchar(255) NOT NULL,
  `streetno` int(10) NOT NULL,
  `txtblock` int(10) NOT NULL,
  `hzipcode` int(10) NOT NULL,
  `address` text,
  `locaddress` varchar(255) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `pic` varchar(150) NOT NULL DEFAULT 'default-pic.jpg',
  `added_by` int(11) NOT NULL,
  `updated_on` date NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `shift` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `terminate_date` date DEFAULT NULL,
  `terminate_reason` varchar(255) NOT NULL,
  `maritial_status` varchar(20) NOT NULL,
  `no_of_child` int(20) NOT NULL,
  `adhaar_no` int(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `citizen` varchar(20) NOT NULL,
  `nominee_name` varchar(255) NOT NULL,
  `nominee_relation` varchar(20) NOT NULL,
  `emergency_no` bigint(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` int(20) NOT NULL,
  `ifsc_code` int(20) NOT NULL,
  `pf_no` int(20) NOT NULL,
  `esic_no` int(20) NOT NULL,
  `adhaar_photo` int(15) DEFAULT NULL,
  `pan_photo` int(15) DEFAULT NULL,
  `passport_photo` int(15) DEFAULT NULL,
  `ssc_result_photo` int(15) DEFAULT NULL,
  `hsc_result_photo` int(15) DEFAULT NULL,
  `diploma_result_photo` int(15) DEFAULT NULL,
  `graduate_result_photo` int(15) DEFAULT NULL,
  `pgraduate_result_photo` int(15) DEFAULT NULL,
  `offer_letter` int(15) DEFAULT NULL,
  `relieving_letter` int(15) DEFAULT NULL,
  `experience_letter` int(15) DEFAULT NULL,
  `others` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id`, `staff_name`, `fname`, `mname`, `lname`, `gender`, `email`, `mobile`, `jobtitle`, `slcposition`, `slcbranch`, `txtmanager`, `empcode`, `slcemptype`, `dob`, `doj`, `txtstreet`, `streetno`, `txtblock`, `hzipcode`, `address`, `locaddress`, `city`, `state`, `country`, `department_id`, `pic`, `added_by`, `updated_on`, `added_on`, `shift`, `start_date`, `status`, `terminate_date`, `terminate_reason`, `maritial_status`, `no_of_child`, `adhaar_no`, `pan_no`, `father_name`, `citizen`, `nominee_name`, `nominee_relation`, `emergency_no`, `salary`, `bank_name`, `account_no`, `ifsc_code`, `pf_no`, `esic_no`, `adhaar_photo`, `pan_photo`, `passport_photo`, `ssc_result_photo`, `hsc_result_photo`, `diploma_result_photo`, `graduate_result_photo`, `pgraduate_result_photo`, `offer_letter`, `relieving_letter`, `experience_letter`, `others`) VALUES
(1, 'Tatiana Breit', 'Tatiana', 'Briet', '', 'Female', 'tatiana@gmail.com', 7402222220, 'Accounts', '', '', '', 0, '', '1994-10-11', '2021-02-28', '', 0, 0, 41009929, '3397  Happy Hollow Road', 'Mumbai', 'Jacksonville', 'NC', 'United States', 2, 'christen-freeimg.jpg', 1, '0000-00-00', '2023-11-03 10:21:53', 'General', '0000-00-00', 0, '0000-00-00', '', '', 0, 0, '', 'TEST', 'indian', 'TEST', 'Sister', 45678123, 0, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Fauwaaz Shaikh', 'Fauwaaz', 'Mohammed', 'Shaikh', 'Male', 'fauwaaz@ptssystems.co.in', 8369910965, 'Web Developer', '', '', '', 0, '', '1999-11-19', '0000-00-00', 'karan jaded ', 6, 16, 410206, NULL, 'Mumbai', '1', 'Maharashtra', 'India', 7, 'User1.png', 1, '0000-00-00', '2023-11-06 05:16:28', 'General', '2023-04-10', 0, '2023-12-31', '---', 'Single', 0, 0, '', 'Ashraf', 'Indian', 'Faiz', 'Brother', 12345677, 0, '', 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anniversary_tbl`
--
ALTER TABLE `anniversary_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets_category`
--
ALTER TABLE `assets_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birthday_tbl`
--
ALTER TABLE `birthday_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coff_tbl`
--
ALTER TABLE `coff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_tbl`
--
ALTER TABLE `country_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_tbl`
--
ALTER TABLE `leave_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_tbl`
--
ALTER TABLE `notice_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_tbl`
--
ALTER TABLE `attendance_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
