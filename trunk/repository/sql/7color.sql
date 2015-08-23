-- phpMyAdmin SQL Dump
-- version 3.3.0
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 05 月 16 日 13:49
-- 服务器版本: 5.1.35
-- PHP 版本: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `7color`
--

-- --------------------------------------------------------

--
-- 表的结构 `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0',
  `filepath` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `filesize` int(10) NOT NULL,
  `filetype` varchar(50) NOT NULL,
  `fileext` char(10) NOT NULL,
  `create_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `attachments`
--

INSERT INTO `attachments` (`id`, `pid`, `filepath`, `thumb`, `filesize`, `filetype`, `fileext`, `create_at`) VALUES
(1, 1, 'upload/201005/2010051523354652.jpg', 'upload/201005/2010051523354652_thumb.jpg', 2702, 'image/pjpeg', 'jpg', 1273937914);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) NOT NULL DEFAULT '0',
  `rid` int(10) NOT NULL DEFAULT '0' COMMENT 'reply comment id',
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `homepage` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `ip_address` char(15) NOT NULL DEFAULT '0.0.0.0',
  `ischeck` tinyint(1) NOT NULL DEFAULT '0',
  `ishide` tinyint(1) NOT NULL DEFAULT '0',
  `create_at` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aid` (`pid`),
  KEY `comments_posts` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`id`, `pid`, `rid`, `uid`, `username`, `email`, `homepage`, `content`, `ip_address`, `ischeck`, `ishide`, `create_at`) VALUES
(1, 1, 0, 1, 'xixer', 'xixer@126.com', 'http://www.myvow.cn', '这个评论用与测试使用,可以删除.', '127.0.0.1', 1, 0, 1273937249);

-- --------------------------------------------------------

--
-- 表的结构 `configmeta`
--

CREATE TABLE IF NOT EXISTS `configmeta` (
  `meta_id` int(10) NOT NULL AUTO_INCREMENT,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `configmeta`
--

INSERT INTO `configmeta` (`meta_id`, `meta_key`, `meta_value`) VALUES
(1, 'keywords', '7color,七彩,七彩映像,Zend Framework,Zend Framework教程'),
(2, 'description', '7color是一个基于Zend Framework的开源博客程序。');

-- --------------------------------------------------------

--
-- 表的结构 `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `url` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL DEFAULT '',
  `ishide` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` smallint(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `description`, `ishide`, `sort_order`) VALUES
(1, '七彩映像丶', 'http://www.7color.org', '博客网站', 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `urlname` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `sort_order` smallint(3) NOT NULL DEFAULT '0',
  `ishide` tinyint(1) NOT NULL DEFAULT '0',
  `craete_at` int(10) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `pages`
--


-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` smallint(5) NOT NULL DEFAULT '0',
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `urlname` varchar(255) NOT NULL DEFAULT '',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `iscommend` tinyint(1) NOT NULL DEFAULT '0',
  `istop` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `from` varchar(20) NOT NULL DEFAULT '',
  `fromurl` varchar(200) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comments` mediumint(8) NOT NULL DEFAULT '0',
  `hits` mediumint(8) NOT NULL DEFAULT '0',
  `create_at` int(10) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `cid` (`cid`),
  KEY `uid` (`uid`),
  KEY `create_at` (`create_at`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `posts`
--

INSERT INTO `posts` (`pid`, `cid`, `uid`, `title`, `urlname`, `tags`, `iscommend`, `istop`, `status`, `from`, `fromurl`, `content`, `comments`, `hits`, `create_at`) VALUES
(1, 2, 1, '这是本博客第一篇日志,用与测试.', 'this is a article for this blog only test', '1,2', 0, 0, 1, '本站原创', 'http://www.7color.org', '这是本博客第一篇日志,该处为日志内容,用与测试.', 0, 0, 1273936580);

-- --------------------------------------------------------

--
-- 表的结构 `post_cat`
--

CREATE TABLE IF NOT EXISTS `post_cat` (
  `cid` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `lft` smallint(5) NOT NULL,
  `rgt` smallint(5) NOT NULL,
  `depth` tinyint(3) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `post_cat`
--

INSERT INTO `post_cat` (`cid`, `name`, `lft`, `rgt`, `depth`) VALUES
(1, '顶级分类', 1, 4, 1),
(2, '默认分类', 2, 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `rid` smallint(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `lft` smallint(5) NOT NULL,
  `rgt` smallint(5) NOT NULL,
  `depth` tinyint(3) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `role`
--

INSERT INTO `role` (`rid`, `name`, `remark`, `lft`, `rgt`, `depth`) VALUES
(1, '超级管理员', '超级管理员', 1, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(20) NOT NULL,
  `count` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tags`
--

INSERT INTO `tags` (`id`, `tagname`, `count`) VALUES
(1, '博客', 1),
(2, '测试', 1);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `role_id` tinyint(2) NOT NULL DEFAULT '0',
  `lastlogin` int(10) NOT NULL,
  `regtime` int(10) NOT NULL,
  `logincount` int(10) NOT NULL DEFAULT '0',
  `ip_address` char(15) NOT NULL DEFAULT '0.0.0.0',
  `email` varchar(100) NOT NULL DEFAULT '',
  `web_url` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `username`, `realname`, `password`, `role_id`, `lastlogin`, `regtime`, `logincount`, `ip_address`, `email`, `web_url`, `status`) VALUES
(1, 'admin', '超级管理员', '21232f297a57a5a743894a0e4a801fc3', 1, 1273936092, 1273936092, 0, '0.0.0.0', 'xixer@126.com', 'http://www.7color.org', 1);

--
-- 限制导出的表
--

--
-- 限制表 `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts` FOREIGN KEY (`id`) REFERENCES `posts` (`pid`) ON DELETE CASCADE ON UPDATE NO ACTION;
