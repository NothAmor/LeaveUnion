SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE `information1`;
DROP TABLE `information3`;
DROP TABLE `information5`;

CREATE TABLE `information1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `chamber` int(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fri_yn` varchar(255) DEFAULT NULL,
  `sat_yn` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `information3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `chamber` int(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fri_yn` varchar(255) DEFAULT NULL,
  `sat_yn` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `information5` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `building` int(11) DEFAULT NULL,
  `chamber` int(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fri_yn` varchar(255) DEFAULT NULL,
  `sat_yn` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

ALTER TABLE `information1`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `information3`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `information5`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `information1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `information3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `information5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;