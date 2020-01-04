CREATE TABLE IF NOT EXISTS `lic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `remarks` text NOT NULL,
  `deleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updateby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO `lic` (`id`, `policy_name`, `company_name`, `contact_no`, `remarks`, `deleted`, `entrytime`, `updatetime`) 
VALUES (NULL, 'chumma', 'arcus', '1234567890', 'Remarks', '0', CURRENT_TIMESTAMP, NULL);

CREATE TABLE IF NOT EXISTS `health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `remarks` text NOT NULL,
  `deleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updateby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO `health` (`id`, `policy_name`, `company_name`, `contact_no`, `remarks`, `deleted`, `entrytime`, `updatetime`) 
VALUES (NULL, 'chumma', 'arcus', '1234567890', 'Remarks', '0', CURRENT_TIMESTAMP, NULL);

CREATE TABLE IF NOT EXISTS `general_policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `remarks` text NOT NULL,
  `deleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updateby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO `general_policy` (`id`, `policy_name`, `company_name`, `contact_no`, `remarks`, `deleted`, `entrytime`, `updatetime`) 
VALUES (NULL, 'chumma', 'arcus', '1234567890', 'Remarks', '0', CURRENT_TIMESTAMP, NULL);

CREATE TABLE IF NOT EXISTS `deposit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `remarks` text NOT NULL,
  `deleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updateby` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

INSERT INTO `deposit` (`id`, `policy_name`, `company_name`, `contact_no`, `remarks`, `deleted`, `entrytime`, `updatetime`) 
VALUES (NULL, 'chumma', 'arcus', '1234567890', 'Remarks', '0', CURRENT_TIMESTAMP, NULL);


--
-- Table structure for table `masterpolicycompany`
--

CREATE TABLE IF NOT EXISTS `masterpolicycompany` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` timestamp NULL DEFAULT NULL,
  `deleted` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `updateby` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterpolicycompany`
--

INSERT INTO `masterpolicycompany` (`id`, `name`, `entrytime`, `updatetime`, `deleted`, `updateby`) VALUES
(1, 'LIC', '2019-06-07 09:56:58', '2019-06-07 10:00:46', 0, 1);

-- --------------------------------------------------------