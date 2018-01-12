/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : loan

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2017-11-25 21:38:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for buliangjichoubiaozhun
-- ----------------------------
DROP TABLE IF EXISTS `buliangjichoubiaozhun`;
CREATE TABLE `buliangjichoubiaozhun` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `daikuandaoqiqiri` varchar(15) DEFAULT NULL COMMENT '到期起日',
  `daikuandaoqiqiri_intr` int(15) DEFAULT NULL COMMENT '到期起日',
  `daikuandaoqizhiri` varchar(15) DEFAULT NULL COMMENT '到期止日',
  `daikuandaoqizhiri_intr` int(15) DEFAULT NULL COMMENT '到期止日',
  `benjinjichoulv` int(3) DEFAULT NULL COMMENT '本金计酬率',
  `lxijichoulv` int(3) DEFAULT NULL COMMENT '利息计酬率',
  `biaozhunshezhishijian` varchar(15) DEFAULT NULL COMMENT '计酬标准设置时间',
  `biaozhunshezhishijian_intr` int(15) DEFAULT NULL COMMENT '计酬标准设置时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='不良计酬标准';

-- ----------------------------
-- Records of buliangjichoubiaozhun
-- ----------------------------

-- ----------------------------
-- Table structure for buliangjichoutongjibiao
-- ----------------------------
DROP TABLE IF EXISTS `buliangjichoutongjibiao`;
CREATE TABLE `buliangjichoutongjibiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `kehuxingming` varchar(10) DEFAULT NULL COMMENT '客户姓名',
  `daikuanqiri` varchar(15) DEFAULT NULL COMMENT '贷款起日',
  `daikuanqiri_intr` int(11) DEFAULT NULL COMMENT '贷款起日',
  `daikuanzhiri` varchar(15) DEFAULT NULL COMMENT '贷款止日',
  `daikuanzhiri _intr` int(11) DEFAULT NULL COMMENT '贷款止日',
  `daikuanyue` decimal(15,2) DEFAULT NULL COMMENT '贷款余额',
  `shouhuiriqi` varchar(15) DEFAULT NULL COMMENT '收回日期',
  `shouhuiriqi_intr` int(11) DEFAULT NULL COMMENT '收回日期',
  `shouhuibenjin` decimal(15,2) DEFAULT NULL COMMENT '收回本金',
  `shouhuilixi` decimal(15,2) DEFAULT NULL COMMENT '收回利息',
  `shouhuibenjinjichou` decimal(15,2) DEFAULT NULL COMMENT '收回本金计酬',
  `shouhuilixijichou` decimal(15,2) DEFAULT NULL COMMENT '收回利息计酬',
  `shouhuikehujingli` varchar(15) DEFAULT NULL COMMENT '收回客户经理',
  `kehujinglizhanghao` varchar(20) DEFAULT NULL COMMENT '客户经理银行账号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='不良贷款清收计酬奖励--统计表';

-- ----------------------------
-- Records of buliangjichoutongjibiao
-- ----------------------------
INSERT INTO `buliangjichoutongjibiao` VALUES ('1', '', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `buliangjichoutongjibiao` VALUES ('2', '', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `buliangjichoutongjibiao` VALUES ('3', 'ss', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `buliangjichoutongjibiao` VALUES ('4', 'aa', null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `buliangjichoutongjibiao` VALUES ('5', 'ff', null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for honor_rate
-- ----------------------------
DROP TABLE IF EXISTS `honor_rate`;
CREATE TABLE `honor_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '数据号',
  `years` varchar(15) DEFAULT NULL COMMENT '贷款到期日年份',
  `years_start` int(11) DEFAULT NULL COMMENT '到期日起时间戳',
  `years_end` int(11) DEFAULT NULL COMMENT '到期日终时间戳',
  `qs_benjin_rate` varchar(16) DEFAULT NULL COMMENT '清收本金计酬百分比',
  `qs_lixi_rate` decimal(16,2) DEFAULT NULL COMMENT '清收利息计酬百分比',
  `addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `edittime` int(11) DEFAULT NULL COMMENT '编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='不良资产查控-计酬-设置表';

-- ----------------------------
-- Records of honor_rate
-- ----------------------------

-- ----------------------------
-- Table structure for loan_honor
-- ----------------------------
DROP TABLE IF EXISTS `loan_honor`;
CREATE TABLE `loan_honor` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '数据号',
  `business_number` varchar(30) DEFAULT NULL COMMENT '业务号',
  `provide_loan_money` decimal(16,2) DEFAULT NULL COMMENT '贷款金额-发放金额',
  `arrive_time` varchar(30) DEFAULT NULL COMMENT '到期日',
  `arrive_time_int` int(11) DEFAULT NULL COMMENT '到期日时间戳',
  `outdate_benji` decimal(16,2) DEFAULT NULL COMMENT '逾期本金',
  `debt_money` decimal(16,2) DEFAULT NULL COMMENT '欠息金额',
  `qs_manager` varchar(30) DEFAULT NULL COMMENT '客户经理',
  `qs_benji_money` decimal(16,2) DEFAULT NULL COMMENT '清收本金金额',
  `qs_lixi_money` decimal(16,2) DEFAULT NULL COMMENT '清收利息金额',
  `qs_jl_benji_rate` decimal(16,2) DEFAULT NULL COMMENT '清收本金奖励百分比',
  `qs_jl_benji_money` decimal(16,2) DEFAULT NULL COMMENT '清收本金奖励金额',
  `qs_jl_lixi_rate` decimal(16,2) DEFAULT NULL COMMENT '清收利息奖励 百分比',
  `qs_jl_lixi_money` decimal(16,2) DEFAULT NULL COMMENT '清收利息奖励金额',
  `qs_time` varchar(15) DEFAULT NULL COMMENT '清收时间',
  `qs_time_int` int(11) DEFAULT NULL COMMENT '清收时间戳',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='不良资产查控-计酬-记录表';

-- ----------------------------
-- Records of loan_honor
-- ----------------------------
