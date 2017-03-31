/*
Navicat MySQL Data Transfer

Source Server         : michel_bd
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : proyectocrud_bd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-11 01:02:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `perfil`
-- ----------------------------
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id_per` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_per` varchar(30) NOT NULL,
  PRIMARY KEY (`id_per`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perfil
-- ----------------------------
INSERT INTO `perfil` VALUES ('1', 'Administrador');
INSERT INTO `perfil` VALUES ('2', 'Vendedor');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(30) NOT NULL,
  `apellido_usu` varchar(30) NOT NULL,
  `correo_usu` varchar(50) NOT NULL,
  `telefono_usu` varchar(20) NOT NULL,
  `id_per` int(11) NOT NULL,
  PRIMARY KEY (`id_usu`),
  KEY `fk_id_per` (`id_per`),
  CONSTRAINT `fk_id_per` FOREIGN KEY (`id_per`) REFERENCES `perfil` (`id_per`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'Michel', 'Charnay', 'michel@gmail.com', '+56986921028', '1');
INSERT INTO `usuario` VALUES ('3', 'Karín', 'Peludín', 'karín@karín.cl', '12345678', '1');
INSERT INTO `usuario` VALUES ('4', 'tuki', 'tuki', 'tuki', '123456789', '2');
INSERT INTO `usuario` VALUES ('5', 'q', 'q', 'q', '2', '1');
INSERT INTO `usuario` VALUES ('6', 'w', 'w', 'w', '8', '2');
INSERT INTO `usuario` VALUES ('7', 'we', 'e', 'e', '6', '2');
INSERT INTO `usuario` VALUES ('8', 'a', 'a', 'a', '8', '1');
INSERT INTO `usuario` VALUES ('9', 'Pustilio', 'tuki', 'tuki', '123456789', '2');
INSERT INTO `usuario` VALUES ('10', 'Michelín', 'Peludín', 'sablerín', '666', '1');
