-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-13 13:36:11
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `nbateam`
--

CREATE TABLE `nbateam` (
  `Id` char(32) NOT NULL COMMENT '键值,唯一',
  `Name` varchar(255) NOT NULL COMMENT '球队中文名',
  `Logo` varchar(255) NOT NULL COMMENT '球队队徽URL',
  `Win` int(8) NOT NULL COMMENT '胜利场数',
  `Lose` int(8) NOT NULL COMMENT '输球场数',
  `Rank` int(8) NOT NULL COMMENT '在各自联盟的排名',
  `Alliance` enum('East','West') NOT NULL COMMENT '属于哪个联盟',
  `Playoffs` enum('Yes','No') DEFAULT 'Yes' COMMENT '是否参加季后赛',
  `Partition` varchar(255) NOT NULL COMMENT '属于哪个分区'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `nbateam`
--

INSERT INTO `nbateam` (`Id`, `Name`, `Logo`, `Win`, `Lose`, `Rank`, `Alliance`, `Playoffs`, `Partition`) VALUES
('03f41eb5656c333a3207d1162a6f216a', '火箭', 'http://www.xum.com/nbateam/火箭.png', 41, 41, 8, 'West', 'Yes', '西南分区'),
('0f9012e9b12c0fff624cc91f1b865a92', '开拓者', 'http://www.xum.com/nbateam/开拓者.png', 44, 38, 5, 'West', 'Yes', '西北分区'),
('1105d832ff07b9fa3c3c07029dc7e5dd', '老鹰', 'http://www.xum.com/nbateam/老鹰.png', 48, 34, 4, 'East', 'Yes', '东南赛区'),
('14198c44a4c0ae65cb23a544615d9418', '太阳', 'http://www.xum.com/nbateam/太阳.png', 23, 59, 14, 'West', 'No', '太平洋分区'),
('15fa659be1665f686f2392e01df2cb5d', '步行者', 'http://www.xum.com/nbateam/步行者.png', 45, 37, 7, 'East', 'Yes', '中央分区'),
('1f9622d54781f79da17bbd9ab829bbf0', '骑士', 'http://www.xum.com/nbateam/骑士.png', 57, 25, 1, 'East', 'Yes', '中央分区'),
('2a16e44488057252586bee891dd60a6c', '鹈鹕', 'http://www.xum.com/nbateam/鹈鹕.png', 30, 52, 12, 'West', 'No', '西南分区'),
('39c8525ef9950e3d31311ead05b2196a', '湖人', 'http://www.xum.com/nbateam/湖人.png', 17, 65, 15, 'West', 'No', '太平洋分区'),
('438aa85c262d5ed16aeebf55a3b49574', '马刺', 'http://www.xum.com/nbateam/马刺.png', 67, 15, 2, 'West', 'Yes', '西南分区'),
('5ece5d1703dd23e46b9ba1a1a6fb7edf', '小牛', 'http://www.xum.com/nbateam/小牛.png', 42, 40, 6, 'West', 'Yes', '西南分区'),
('63660380f76cba4bef9f08fdb68445fe', '凯尔特人', 'http://www.xum.com/nbateam/凯尔特人.png', 48, 34, 5, 'East', 'Yes', '大西洋分区'),
('7889e2e347cba5dbfb5b8f615e8b7209', '活塞', 'http://www.xum.com/nbateam/活塞.png', 44, 38, 8, 'East', 'Yes', '中央分区'),
('7b0e0e46cd203d8043174e97b3336681', '爵士', 'http://www.xum.com/nbateam/爵士.png', 40, 42, 9, 'West', 'No', '西北分区'),
('7e262289673080882f92bfb4a4f8c309', '篮网', 'http://www.xum.com/nbateam/篮网.png', 21, 61, 14, 'East', 'No', '大西洋分区'),
('963fcdce80501dd1be79dee4d83d23b7', '快船', 'http://www.xum.com/nbateam/快船.png', 53, 29, 4, 'West', 'Yes', '太平洋分区'),
('a3d282dd57a637d2b292e08fde3b8cea', '雷霆', 'http://www.xum.com/nbateam/雷霆.png', 55, 27, 3, 'West', 'Yes', '西北分区'),
('a5d6c0e5943b6c409f038e73d3df595e', '热火', 'http://www.xum.com/nbateam/热火.png', 48, 34, 3, 'East', 'Yes', '东南赛区'),
('a7474523e11a1ee64c0c808048e61bfd', '掘金', 'http://www.xum.com/nbateam/掘金.png', 33, 49, 11, 'West', 'No', '西北分区'),
('a771dd1003f325fa80dbac21f518e438', '猛龙', 'http://www.xum.com/nbateam/猛龙.png', 56, 26, 2, 'East', 'Yes', '大西洋分区'),
('acf31c6d43451da2a753bf550d4e125e', '76人', 'http://www.xum.com/nbateam/76人.png', 10, 72, 15, 'East', 'No', '大西洋分区'),
('b20621f8a81b35d33701ab634709481a', '雄鹿', 'http://www.xum.com/nbateam/雄鹿.png', 33, 49, 12, 'East', 'No', '中央分区'),
('b795a48212464260fd94138174d749a0', '森林狼', 'http://www.xum.com/nbateam/森林狼.png', 29, 53, 13, 'West', 'No', '西北分区'),
('c784472058f3f0b8c0ffc9385fc247fe', '魔术', 'http://www.xum.com/nbateam/魔术.png', 35, 47, 11, 'East', 'No', '东南赛区'),
('c90ef405c1e540d213999af012127f8f', '灰熊', 'http://www.xum.com/nbateam/灰熊.png', 42, 40, 7, 'West', 'Yes', '西南分区'),
('d02a28337be26724db783f4cb66ca23d', '尼克斯', 'http://www.xum.com/nbateam/尼克斯.png', 32, 50, 13, 'East', 'No', '大西洋分区'),
('d59e834193bbb634b2c5d32f5205dba0', '国王', 'http://www.xum.com/nbateam/国王.png', 33, 49, 10, 'West', 'No', '太平洋分区'),
('f2af3e9ec9df65a7fbfae0f876bc67a6', '公牛', 'http://www.xum.com/nbateam/公牛.png', 42, 40, 9, 'East', 'No', '中央分区'),
('fb8016c73ccf4d34d6286f4e59769733', '奇才', 'http://www.xum.com/nbateam/奇才.png', 41, 41, 10, 'East', 'No', '东南赛区'),
('fc6cff760a43730060c1601ef1fb41c8', '勇士', 'http://www.xum.com/nbateam/勇士.png', 73, 9, 1, 'West', 'Yes', '太平洋分区'),
('fd07a063b7dca5be1e0b2efb4a839c3b', '黄蜂', 'http://www.xum.com/nbateam/黄蜂.png', 48, 34, 6, 'East', 'Yes', '东南赛区');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` char(32) CHARACTER SET utf8 NOT NULL COMMENT '主键',
  `title` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `content` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT '内容'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`) VALUES
('caf53fadaac619674cf4f847fc619864', 'kkkkkk', 'kkkkkkk'),
('2d31d03817a963052eb0fd0dfc8ed54b', 'oo', 'kkkkkkkkkkk'),
('f0fac72a9b396e27006c074d81bcdb3a', '2xabc', '22xxabc'),
('03673a771e7da3ea51b1fafa46253ca3', '123', '456789'),
('ca606aa6b2be0f32857f7d321c703790', '1', '11'),
('f1ef0cf3c2d8bc715df46f6c3cbf68cd', 'mytitlexum', 'mycontentxum'),
('3a93845c4e6ccafdb37d22eefd5fafe7', '66', '6666');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` char(32) NOT NULL,
  `newsid` char(32) NOT NULL,
  `nbateamid` char(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` enum('boy','girl') NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `newsid`, `nbateamid`, `name`, `sex`, `country`) VALUES
('26537dc3077ee4fd47e67e39b5b5ba3d', 'caf53fadaac619674cf4f847fc619864', '14198c44a4c0ae65cb23a544615d9418', 'kkkkk', 'girl', 'China'),
('f1debf5b8d76c046dd4f632747f22a31', '2d31d03817a963052eb0fd0dfc8ed54b', '963fcdce80501dd1be79dee4d83d23b7', 'cvy', 'girl', 'China'),
('f38f814b4d3a496d3fd9a76ca626f570', 'f0fac72a9b396e27006c074d81bcdb3a', '03f41eb5656c333a3207d1162a6f216a', '222', 'girl', 'America'),
('13c856a5a89791d66e8e1cfceb310ed0', '03673a771e7da3ea51b1fafa46253ca3', 'a5d6c0e5943b6c409f038e73d3df595e', 'nnn', 'boy', 'China'),
('6788baa1d641aade66d6c8f18e773d54', 'ca606aa6b2be0f32857f7d321c703790', '1105d832ff07b9fa3c3c07029dc7e5dd', '111', 'boy', 'China'),
('c328a6610c6fc2719a4d5b3523e743f0', 'f1ef0cf3c2d8bc715df46f6c3cbf68cd', '1f9622d54781f79da17bbd9ab829bbf0', 'xumxum123', 'boy', 'German'),
('0978c391b441a7f20884c120e7a7b135', '3a93845c4e6ccafdb37d22eefd5fafe7', 'a771dd1003f325fa80dbac21f518e438', '666666', 'boy', 'America');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nbateam`
--
ALTER TABLE `nbateam`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
