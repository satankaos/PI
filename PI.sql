/*
 Navicat MySQL Data Transfer

 Source Server         : Pi
 Source Server Type    : MySQL
 Source Server Version : 100427 (10.4.27-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : libros_bd

 Target Server Type    : MySQL
 Target Server Version : 100427 (10.4.27-MariaDB)
 File Encoding         : 65001

 Date: 15/03/2023 19:32:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carrito
-- ----------------------------
DROP TABLE IF EXISTS `carrito`;
CREATE TABLE `carrito`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carrito
-- ----------------------------
INSERT INTO `carrito` VALUES (17, 'pueblaenred10@gmail.com', '2023-03-15 19:26:27');

-- ----------------------------
-- Table structure for carrito_libros
-- ----------------------------
DROP TABLE IF EXISTS `carrito_libros`;
CREATE TABLE `carrito_libros`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `q` float NULL DEFAULT NULL,
  `cart_id` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carrito_libros
-- ----------------------------
INSERT INTO `carrito_libros` VALUES (37, 1, 1, 17);
INSERT INTO `carrito_libros` VALUES (38, 2, 4, 17);
INSERT INTO `carrito_libros` VALUES (39, 3, 1, 17);

-- ----------------------------
-- Table structure for libros
-- ----------------------------
DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Autor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Editorial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha_publicacion` date NOT NULL,
  `Genero` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Precio` decimal(10, 2) NOT NULL,
  `Imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Descripción` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of libros
-- ----------------------------
INSERT INTO `libros` VALUES (1, 'la casa del libro ', 'yo', 'paque ', '0000-00-00', 'suspennse', 15.50, 'loquweaea', 'libro maravilloso');
INSERT INTO `libros` VALUES (2, 'harry poter 1', 'la terfa', 'el libro de vapor', '2023-02-08', 'ficcion', 25.50, 'harry', 'wedfwefwefwefwefwefwe');
INSERT INTO `libros` VALUES (3, 'harry poter 2', 'la terfa', 'el libro de vapor', '2023-02-08', 'ficcion', 25.50, 'harry', 'wedfwefwefwefwefwefwe');
INSERT INTO `libros` VALUES (4, 'Titulo', 'Autor', 'Editorial', '2023-02-07', 'Fecha_publicacion,Genero', 7.00, '', 'precio');
INSERT INTO `libros` VALUES (5, 'orgullo prejuicio', 'no se', 'la que d¡sea', '0000-00-00', 'amor', 14.00, 'img', 'precioso');
INSERT INTO `libros` VALUES (6, 'wef', 'erf', 'erf', '2023-02-09', 'erf', 1.00, 'img', 'erf');
INSERT INTO `libros` VALUES (7, 'la placita', 'delaosa', 'spotify', '2019-02-20', 'musical', 12.00, 'img', 'cancion chula');
INSERT INTO `libros` VALUES (8, 'la placita', 'delaosa', 'spotify', '2019-02-20', 'musical', 12.00, 'img', 'cancion chula');
INSERT INTO `libros` VALUES (9, 'la placita', 'delaosa', 'spotify', '2019-02-20', 'musical', 12.00, 'img', 'cancion chula');
INSERT INTO `libros` VALUES (10, 'le fant terrible', 'ayax', 'rap', '2023-02-03', 'musical', 12.00, 'img', 'e');
INSERT INTO `libros` VALUES (11, 'le fant terrible', 'ayax', 'rap', '2023-02-03', 'musical', 12.00, 'img', 'e');
INSERT INTO `libros` VALUES (12, 'le fant terrible', 'ayax', 'rap', '2023-02-03', 'musical', 12.00, 'img', 'e');
INSERT INTO `libros` VALUES (13, 'le fant terrible', 'ayax', 'rap', '2023-02-03', 'musical', 12.00, 'img', 'e');

-- ----------------------------
-- Table structure for pago
-- ----------------------------
DROP TABLE IF EXISTS `pago`;
CREATE TABLE `pago`  (
  `Monto` float(10, 2) NOT NULL,
  `Id_pago` int NOT NULL,
  `Fecha` date NOT NULL,
  `Usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Metodo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Id_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Id_pedido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Id_pago`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pago
-- ----------------------------

-- ----------------------------
-- Table structure for pedido
-- ----------------------------
DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido`  (
  `Id_pedido` bigint NOT NULL AUTO_INCREMENT,
  `Libros` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Precio` decimal(10, 2) NOT NULL,
  `Total` int NOT NULL,
  `Usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Direccion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` date NOT NULL,
  `Id_usuario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `Id_carrito` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id_pedido`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pedido
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `Id_admin` int NULL DEFAULT NULL,
  `Id_usuario` bigint NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_libro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (0, 1, 'administrador', 'administrador@correo.com', '21232f297a57a5a743894a0e4a801fc3', '');
INSERT INTO `usuario` VALUES (NULL, 29, 'gamiz', 'gamiz@a1.es', 'b59c67bf196a4758191e42f76670ceba', NULL);

SET FOREIGN_KEY_CHECKS = 1;
