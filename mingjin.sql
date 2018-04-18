/*
Navicat MySQL Data Transfer

Source Server         : xampp
Source Server Version : 100119
Source Host           : localhost:3306
Source Database       : mingjin

Target Server Type    : MYSQL
Target Server Version : 100119
File Encoding         : 65001

Date: 2018-04-08 22:29:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('3', 'asd', '123', 'asd', '0', '13123', '1233123');

-- ----------------------------
-- Table structure for anjian
-- ----------------------------
DROP TABLE IF EXISTS `anjian`;
CREATE TABLE `anjian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `statu` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of anjian
-- ----------------------------
INSERT INTO `anjian` VALUES ('1', '2', '抓小偷', '1');
INSERT INTO `anjian` VALUES ('2', '3', '抓色狼', '0');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pid` int(10) DEFAULT '0',
  `desc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '奔驰', '0', '奔驰奔驰');
INSERT INTO `category` VALUES ('2', '奥迪', '0', '奥迪奥迪');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT '0',
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of image
-- ----------------------------

-- ----------------------------
-- Table structure for pingjia
-- ----------------------------
DROP TABLE IF EXISTS `pingjia`;
CREATE TABLE `pingjia` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `uid` int(100) DEFAULT NULL,
  `statu` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pingjia
-- ----------------------------
INSERT INTO `pingjia` VALUES ('1', '这个民警很不错', '2', '0');
INSERT INTO `pingjia` VALUES ('2', '这个民警非常优秀', '3', '0');
INSERT INTO `pingjia` VALUES ('3', '我同事很不错', '2', '1');

-- ----------------------------
-- Table structure for qiandao
-- ----------------------------
DROP TABLE IF EXISTS `qiandao`;
CREATE TABLE `qiandao` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(100) DEFAULT NULL,
  `addtime` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of qiandao
-- ----------------------------
INSERT INTO `qiandao` VALUES ('1', '2', '1523193451');
INSERT INTO `qiandao` VALUES ('2', '2', '1523193511');
INSERT INTO `qiandao` VALUES ('3', '3', '1523194857');

-- ----------------------------
-- Table structure for toushu
-- ----------------------------
DROP TABLE IF EXISTS `toushu`;
CREATE TABLE `toushu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `addtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of toushu
-- ----------------------------
INSERT INTO `toushu` VALUES ('1', '2', '1523193451');
INSERT INTO `toushu` VALUES ('2', '2', '1523193822');
INSERT INTO `toushu` VALUES ('3', '3', '1523194868');
INSERT INTO `toushu` VALUES ('4', '3', '1523194874');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'asd', 'asd', '民警1号', '0', '132', 'qw231');
INSERT INTO `user` VALUES ('3', 'qwe', 'qwe', '民警2号', '0', '123456', '浙江宁波');
