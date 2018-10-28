/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : flower

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-13 16:33:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for classfy
-- ----------------------------
DROP TABLE IF EXISTS `classfy`;
CREATE TABLE `classfy` (
  `classid` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(32) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classfy
-- ----------------------------
INSERT INTO `classfy` VALUES ('1', '草莓之夜');
INSERT INTO `classfy` VALUES ('2', '派对装饰');
INSERT INTO `classfy` VALUES ('3', '雪');
INSERT INTO `classfy` VALUES ('4', '美食');
INSERT INTO `classfy` VALUES ('5', '书架');

-- ----------------------------
-- Table structure for collection
-- ----------------------------
DROP TABLE IF EXISTS `collection`;
CREATE TABLE `collection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `imageid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collection
-- ----------------------------
INSERT INTO `collection` VALUES ('1', 'onlifes', '5');
INSERT INTO `collection` VALUES ('2', 'onlifes', '1');
INSERT INTO `collection` VALUES ('3', 'onlifes', '3');
INSERT INTO `collection` VALUES ('5', 'admin', '3');
INSERT INTO `collection` VALUES ('10', 'admin', '15');
INSERT INTO `collection` VALUES ('11', 'admin', '17');
INSERT INTO `collection` VALUES ('12', 'admin', '5');

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `brief` varchar(100) NOT NULL,
  `classid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `updatetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('1', 'images/cont/6.jpg', '漂亮男孩', '1', 'admin', '2017-10-02 10:36:53');
INSERT INTO `image` VALUES ('2', 'images/cont/77.png', '评论女孩', '2', 'admin', '2017-10-11 10:37:02');
INSERT INTO `image` VALUES ('3', 'images/cont/88.jpg', '漂亮男孩', '1', 'onlifes', '2017-09-14 10:37:09');
INSERT INTO `image` VALUES ('4', 'images/cont/89.png', '漂亮男孩', '2', 'onlifes', '2017-10-04 10:37:14');
INSERT INTO `image` VALUES ('5', 'images/cont/90.png', '漂亮男孩', '1', 'onlifes', '2017-10-03 10:37:19');
INSERT INTO `image` VALUES ('6', 'images/cont/234.png', '漂亮男孩', '1', 'onlifes', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('7', 'images/cont/245.png', '漂亮男孩', '3', 'onlifes', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('8', 'images/cont/246.png', '漂亮男孩', '3', 'wukong', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('9', 'images/cont/247.png', '漂亮男孩', '4', 'wukong', '2017-10-04 10:37:32');
INSERT INTO `image` VALUES ('10', 'images/cont/248.png', '漂亮男孩', '4', 'shazeng', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('11', 'images/cont/249.png', '漂亮男孩', '5', 'shazeng', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('12', 'images/cont/250.png', '漂亮男孩', '5', 'shazeng', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('13', 'images/cont/251.png', '漂亮男孩', '5', 'admin', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('15', 'images/cont/252.png', '漂亮男孩', '1', 'admin', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('16', 'images/cont/253.png', '漂亮男孩', '1', 'admin', '2017-10-16 10:37:22');
INSERT INTO `image` VALUES ('17', 'images/cont/254.png', '漂亮男孩', '1', 'shifu', '2017-10-16 10:37:22');

-- ----------------------------
-- Table structure for image_comment
-- ----------------------------
DROP TABLE IF EXISTS `image_comment`;
CREATE TABLE `image_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) NOT NULL,
  `comment_date` date NOT NULL,
  `username` varchar(32) NOT NULL,
  `imageid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image_comment
-- ----------------------------
INSERT INTO `image_comment` VALUES ('1', '你好漂亮啊', '2017-12-20', 'admin', '1');
INSERT INTO `image_comment` VALUES ('2', '你好漂亮啊', '2017-10-13', 'admin', '1');
INSERT INTO `image_comment` VALUES ('4', '好美的大自然啊！', '2017-10-13', 'admin', '5');
INSERT INTO `image_comment` VALUES ('5', '我是onlifess', '2017-10-13', 'onlifes', '5');
INSERT INTO `image_comment` VALUES ('6', '我是onlifess', '2017-10-13', 'onlifes', '5');
INSERT INTO `image_comment` VALUES ('7', '我是onlifess', '2017-10-13', 'onlifes', '5');
INSERT INTO `image_comment` VALUES ('9', '你的发行很酷', '2017-10-13', 'onlifes', '1');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(300) NOT NULL,
  `username` varchar(100) NOT NULL,
  `createdatetime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('17', '你好', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('18', '你好吗', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('19', '你好', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('20', '我不好', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('21', '我不好吗', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('22', '啊都发大水', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('23', '阿迪斯发多少', '::1', '2017-10-13');
INSERT INTO `message` VALUES ('24', '哈哈哈', '10.2.42.56', '2017-10-13');
INSERT INTO `message` VALUES ('25', 'HAODE \n', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('26', '老乡开门啊\n', '10.2.42.4', '2017-10-13');
INSERT INTO `message` VALUES ('27', 'aa', '10.2.42.20', '2017-10-13');
INSERT INTO `message` VALUES ('28', 'hello', '10.2.42.56', '2017-10-13');
INSERT INTO `message` VALUES ('29', '22222', '10.2.42.50', '2017-10-13');
INSERT INTO `message` VALUES ('30', '我在此', '10.2.42.10', '2017-10-13');
INSERT INTO `message` VALUES ('31', '我们八路军不拿群众一针一线，老乡开门 啊', '10.2.42.4', '2017-10-13');
INSERT INTO `message` VALUES ('32', '芝麻开门', '10.2.42.58', '2017-10-13');
INSERT INTO `message` VALUES ('33', '10.2.42.42\n', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('34', '灰姑娘', '10.2.42.38', '2017-10-13');
INSERT INTO `message` VALUES ('35', '马安回我是你爷\n', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('36', '张丽明我是你爸爸', '10.2.42.58', '2017-10-13');
INSERT INTO `message` VALUES ('37', 'ddddddd', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('38', 'ddddddd', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('39', 'ddddddd', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('40', 'ddddddd', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('41', 'ddddddd', '10.2.42.31', '2017-10-13');
INSERT INTO `message` VALUES ('42', '绿帽涛到此一游', '10.205.12.94', '2017-10-13');
INSERT INTO `message` VALUES ('43', '张津滔今天带他儿子去看电影', '10.2.42.25', '2017-10-13');
INSERT INTO `message` VALUES ('44', '王辉今天透你妈的要去', '10.2.42.4', '2017-10-13');
INSERT INTO `message` VALUES ('45', '他儿子叫贾儿子', '10.2.42.25', '2017-10-13');
INSERT INTO `message` VALUES ('46', '李小旭', '10.2.42.25', '2017-10-13');
INSERT INTO `message` VALUES ('47', '今晚9.15天映电影  秀秀的铁拳  目前已有咋班同学10人左右 谁还去 组队 let s go', '10.2.42.41', '2017-10-13');
INSERT INTO `message` VALUES ('48', '真受不了打错字的，文盲啊，是羞羞的铁拳，不是秀秀的铁拳，', '10.2.42.25', '2017-10-13');
INSERT INTO `message` VALUES ('49', '不去滚', '10.2.42.4', '2017-10-13');
INSERT INTO `message` VALUES ('50', '铁拳 走不走', '10.2.42.41', '2017-10-13');
INSERT INTO `message` VALUES ('51', '今晚9.15', '10.2.42.41', '2017-10-13');
INSERT INTO `message` VALUES ('52', '.。。', '10.2.42.41', '2017-10-13');
INSERT INTO `message` VALUES ('53', '秀秀的铁拳 走起', '10.2.42.41', '2017-10-13');
INSERT INTO `message` VALUES ('54', '', '10.2.42.41', '2017-10-13');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `gender` char(2) NOT NULL,
  `user_image` varchar(64) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `mark` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('admin', 'admin', '', 'images/list_icon1.jpg', null, null, null);
INSERT INTO `users` VALUES ('onlifes', '111111', '', 'images/list_icon2.jpg', null, null, null);
INSERT INTO `users` VALUES ('wukong', '111111', '', 'images/list_icon3.jpg', null, null, null);
INSERT INTO `users` VALUES ('bajie', '222222', '', 'images/list_icon4.jpg', null, null, null);
INSERT INTO `users` VALUES ('shazeng', '222222', '', 'images/list_icon5.jpg', null, null, null);
INSERT INTO `users` VALUES ('shifu', '333333', '', 'images/list_icon1.jpg', null, null, null);
INSERT INTO `users` VALUES ('asdfasdfa', 'sdfsdfdsf', '', 'images/list_icon1.jpg', null, null, null);
INSERT INTO `users` VALUES ('ddfdfd', 'sdfsdfdsf', '', 'images/list_icon1.jpg', null, null, null);
INSERT INTO `users` VALUES ('zhangsandege', '145668', '', 'images/list_icon1.jpg', null, null, null);
