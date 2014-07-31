-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2014 at 10:09 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oar`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `Title` mediumtext NOT NULL,
  `Date` date NOT NULL,
  `News` longtext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `Date`, `News`) VALUES
(3, 'PM Russia TOI', '2014-03-16', 'NEW DELHI/MOSCOW: Russian President Vladimir Putin called up Prime Minister Manmohan Singh on Tuesday and thanked him for India''s support to Russia on Crimea. During the conversation, the Prime Minister emphasized on territorial integrity and expressed hoped that a solution would be found diplomatically to the issue. \r\n\r\nPutin signs treaty, adds Crimea to map of Russia \r\n\r\nEarlier on Tuesday, with a sweep of his pen, the Russian president added Crimea to the map of Russia today, describing the move as correcting past injustice and responding to what he called Western encroachment upon Russia''s vital interests. '),
(6, 'Come on boys', '1995-11-05', 'I am njiudh bfdiu, dihoilkmm,snjwukjbn mxnc MN MNdbbkj    jndlndlkndqlkndkdlqdk qkldm oqpodj poqjdp qodj pqoqp ooq pqoqpojdp oqjdp nz  <mad lcsNx <nbzkHBAW Djacj jwdbjw jsbdHuhDWJSNL JBDUSAhuxjbkjC NLDNlkwndlkn,m ,n kxbkbqKJ,X j qKJbkqJbxk, KJBKBDSKajdbK , xnbJKsbdKjbd,m '),
(7, 'Inferno Acknowledgements', '2014-01-03', 'My most humble and sincere thanks to:\r\nAs always, first and foremost, my editor and close friend, Jason Kaufman, for his\r\ndedication and talent ... but mainly for his endless good humor.\r\nMy extraordinary wife, Blythe, for her love and patience with the writing process, and\r\nalso for her superb instincts and candor as a front-line editor.\r\nMy tireless agent and trusted friend Heide Lange, for expertly navigating more\r\nconversations, in more countries, on more topics than I will ever know. For her skills\r\nand energy, I am eternally grateful.\r\nThe entire team at Doubleday for its enthusiasm, creativity, and efforts on behalf of\r\nmy books, with very special thanks to Suzanne Herz (for wearing so many hats ... and\r\nwearing them so well), Bill Thomas, Michael Windsor, Judy Jacoby, Joe Gallagher, Rob\r\nBloom, Nora Reichard, Beth Meister, Maria Carella, Lorraine Hyland, and also to the\r\nunending support of Sonny Mehta, Tony Chirico, Kathy Trager, Anne Messitte, and\r\nMarkus Dohle. To the incredible people of the Random House sales department ... you\r\nare unrivaled.\r\nMy sage counsel Michael Rudell, for his pitch-perfect instincts on all matters, large\r\nand small, as well as for his friendship. '),
(8, 'Most interesting chapter 1!!!', '2014-03-15', 'They rush forward in disbelief, wanting to grab at my feet, but fearing they will upset\r\nmy balance and knock me off. They beg now, in quiet desperation, but I have turned\r\nmy back. I know what I must do.\r\nBeneath me, dizzyingly far beneath me, the red tile roofs spread out like a sea of fire\r\non the countryside, illuminating the fair land upon which giants once roamed ... Giotto,\r\nDonatello, Brunelleschi, Michelangelo, Botticelli.\r\nI inch my toes to the edge.\r\nâ€œCome down!â€ they shout. â€œItâ€™s not too late!â€\r\nO, willful ignorants! Do you not see the future? Do you not grasp the splendor of my\r\ncreation? The necessity?\r\nI will gladly make this ultimate sacrifice ... and with it I will extinguish your final hope\r\nof finding what you seek. '),
(9, 'Director''s message', '2014-02-28', 'Tortor est ultricies\r\n\r\n\r\nPhasellus tempus mi id mauris accumsan dapibus. Vestibulum luctus porta nisi, a blandit quam volutpat at. Praesent in sapien arcu, ut malesuada dui. Morbi sed felis eget lectus semper tincidunt eget at nisl. Integer eget eros ligula. Curabitur a leo tellus, quis elementum turpis. Curabitur est nibh, ullamcorper eu viverra ultricies, aliquet nec lectus. Vestibulum elementum, purus a tempus fringilla, tortor est ultricies nibh, id feugiat nunc lectus in massa. Vivamus iaculis purus at tortor lacinia pharetra.\r\n\r\nPraesent in sapien\r\n\r\nInteger eget eros ligula. Curabitur a leo tellus, quis elementum turpis. Curabitur est nibh, ullamcorper eu viverra ultricies, aliquet nec lectus. Vestibulum elementum, purus a tempus fringilla, tortor est ultricies nibh, id feugiat nunc lectus in massa. Vivamus iaculis purus at tortor lacinia pharetra.\r\n\r\nDonec augue turpis, tempor id pulvinar eget\r\n\r\nFusce ac vestibulum quam. Etiam accumsan ligula ut justo gravida eget accumsan arcu rhoncus. Etiam urna justo, viverra non laoreet gravida, rhoncus in arcu. Proin eget enim quam. Donec tempor urna id purus dignissim et euismod mi mattis. Praesent tincidunt ornare urna at euismod.'),
(10, 'Foundation for Beginners: Getting Started', '2014-03-22', 'For many web folk, developing a project from scratch every time is part of the job; it''s often tricky to build up a reusable codebase when each project is different. More experienced developers may have taken the time to build up some form of front-end framework, but doing this properly can be a serious undertaking, not to mention the need to keep things upâ€“to-date and inline with best practices.\r\n\r\nLooking at the wants and needs of the every-coder it''s clear that developers want something that''s open source, stable, flexible and (most importantly) well documented. Depending on the size of the project a CSS grid system maybe enough, but wouldn''t it be great if you had the option to add and remove functionality as you saw fit? Well, in this session weâ€™ll be looking at a customisable front-end framework called Foundation.\r\n\r\nCovering a framework like Foundation needs to be done properly and in detail, so over the next few weeks Iâ€™ll be covering everything from getting started, custom builds, through to the ins-and-outs of the cogs which power this particular framework. Most importantly I''ll illustrate how it could benefit you in your future web endeavours. '),
(11, 'Blast in Golan Heights wounds Israeli soldiers, report says', '2014-03-18', 'JERUSALEM: A blast along the Syria-Israel frontier in the occupied Golan Heights on Tuesday wounded several Israeli soldiers, security sources told AFP. \r\n\r\nThe explosion damaged an army jeep as it drove near the ceasefire line with Syria, outside the town of Majdal Shams, the sources said, without giving further details. fine ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `sex` char(1) NOT NULL,
  `degree` varchar(5) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `place` varchar(25) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
