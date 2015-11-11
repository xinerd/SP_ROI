--
-- Author: Xin Ming
-- Generation Time: Nov 10, 2015 at 02:17 PM
--

--
-- Table structure for table `user`
--
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT 'user name',
  `password` varchar(32) NOT NULL COMMENT 'password',
  `email` varchar(30) NOT NULL COMMENT 'email',
  `token` varchar(50) NOT NULL COMMENT 'account activate token',
  `token_exptime` int(10) NOT NULL COMMENT 'token expire time',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status,0-not activated,1-activated',
  `regtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'register time',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UK_T_EMAIL` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--
CREATE TABLE IF NOT EXISTS `weather` (
  `Date` date NOT NULL,
  `LowTemp` int(3) NOT NULL,
  `HignTemp` int(3) NOT NULL,
  `AveTemp` int(3) NOT NULL,
  `SunLight` int(6) NOT NULL,
  `WeatherType` varchar(20) NOT NULL,
  PRIMARY KEY (`Date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phistory`
--
CREATE TABLE IF NOT EXISTS `phistory` (
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `generated_power` int(11) NOT NULL,
  `consumed_power` int(11) NOT NULL,
  `price` double NOT NULL,
  `income` double NOT NULL,
  PRIMARY KEY (`date`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;