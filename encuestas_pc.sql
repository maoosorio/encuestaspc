/*
 Navicat Premium Data Transfer

 Source Server         : WAMP
 Source Server Type    : MySQL
 Source Server Version : 80021
 Source Host           : localhost:3306
 Source Schema         : encuestas_pc

 Target Server Type    : MySQL
 Target Server Version : 80021
 File Encoding         : 65001

 Date: 16/09/2021 15:04:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_aplicacionencuesta
-- ----------------------------
DROP TABLE IF EXISTS `tbl_aplicacionencuesta`;
CREATE TABLE `tbl_aplicacionencuesta`  (
  `id_aplicacionEncuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_detalleDistribucion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_localidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha` datetime NULL DEFAULT NULL,
  `folio` int NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_aplicacionEncuesta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_aplicacionencuesta
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_asignacion_enc_preg
-- ----------------------------
DROP TABLE IF EXISTS `tbl_asignacion_enc_preg`;
CREATE TABLE `tbl_asignacion_enc_preg`  (
  `id_asignacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_encuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_pregunta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_asignacion_enc_preg
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_detalleaplicacion
-- ----------------------------
DROP TABLE IF EXISTS `tbl_detalleaplicacion`;
CREATE TABLE `tbl_detalleaplicacion`  (
  `id_detalleAplicacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_aplicacionEncuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_pregunta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_respuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion_respuesta` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `valor` int NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detalleAplicacion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_detalleaplicacion
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_detalledistribucion
-- ----------------------------
DROP TABLE IF EXISTS `tbl_detalledistribucion`;
CREATE TABLE `tbl_detalledistribucion`  (
  `id_detalleDistribucion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_distribucion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_tipoPoblacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `cantidad_maxima` int NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_detalleDistribucion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_detalledistribucion
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_distribucionencuesta
-- ----------------------------
DROP TABLE IF EXISTS `tbl_distribucionencuesta`;
CREATE TABLE `tbl_distribucionencuesta`  (
  `id_distribucion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_encuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_encuestador` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha_inicio` datetime NULL DEFAULT NULL,
  `fecha_final` datetime NULL DEFAULT NULL,
  `alcance` int NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_distribucion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_distribucionencuesta
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_encuestadores
-- ----------------------------
DROP TABLE IF EXISTS `tbl_encuestadores`;
CREATE TABLE `tbl_encuestadores`  (
  `id_encuestador` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `paterno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `materno` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_encuestador`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_encuestadores
-- ----------------------------
INSERT INTO `tbl_encuestadores` VALUES ('32fa649b-b9c8-4d72-9b19-e2132aebc3b1', 'Andres', 'Santana', 'Lopez', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', '2021-09-16 18:59:42', '2021-09-16 18:59:47', NULL);
INSERT INTO `tbl_encuestadores` VALUES ('eeecc75b-0a92-4f2e-af38-fceeb4b1b744', 'Mario', 'Solorzano', 'Osorio', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', '2021-09-16 18:55:19', '2021-09-16 18:56:02', NULL);

-- ----------------------------
-- Table structure for tbl_encuestas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_encuestas`;
CREATE TABLE `tbl_encuestas`  (
  `id_encuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_encuesta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_encuestas
-- ----------------------------
INSERT INTO `tbl_encuestas` VALUES ('5efaaa54-b5bc-4dcf-82d8-2156a78f2cd5', 'Prueba de encuesta', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', '2021-09-10 18:51:16', '2021-09-14 19:39:47', '2021-09-14 19:39:47');
INSERT INTO `tbl_encuestas` VALUES ('9b9b2125-1ff2-484f-ad4b-9dc606dc5d2e', 'Encuesta PC 2020', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-10 19:22:12', '2021-09-11 04:45:01', NULL);
INSERT INTO `tbl_encuestas` VALUES ('fbaf6e01-2ce1-4b0c-be48-b545572a351e', 'Encuesta PC 2021', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', '2021-09-10 18:52:30', '2021-09-11 04:48:41', NULL);

-- ----------------------------
-- Table structure for tbl_listadoseldetalle
-- ----------------------------
DROP TABLE IF EXISTS `tbl_listadoseldetalle`;
CREATE TABLE `tbl_listadoseldetalle`  (
  `id_listSelDetalle` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_listadoSeleccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_listSelDetalle`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_listadoseldetalle
-- ----------------------------
INSERT INTO `tbl_listadoseldetalle` VALUES ('096f86d9-136f-11ec-9a5e-2cfda1234877', '43b19b8e-136e-11ec-9a5e-2cfda1234877', 'Abierta', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:13:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('097057e5-136f-11ec-9a5e-2cfda1234877', '43b19b8e-136e-11ec-9a5e-2cfda1234877', 'Cerrada', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:13:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('6b068e87-1371-11ec-9a5e-2cfda1234877', '43b1b1fe-136e-11ec-9a5e-2cfda1234877', 'Ranking', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:30:37', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b3f6c1-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Conocimiento y opinión de las campañas de Protección Civil', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b4c19e-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Percepción de situación de Riesgo', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b4c3c4-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Evaluación de las autoridades de Protección Civil', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b4c684-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Cultura de la Protección Civil', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b4c7e0-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Perfil Sociodemográfico', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('b6b4c88c-1370-11ec-9a5e-2cfda1234877', '003e57ae-1370-11ec-9a5e-2cfda1234877', 'Vivienda, oficina o escuela', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:25:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('bc559901-136f-11ec-9a5e-2cfda1234877', '43b1b1fe-136e-11ec-9a5e-2cfda1234877', 'Abierta', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:18:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('bc56573c-136f-11ec-9a5e-2cfda1234877', '43b1b1fe-136e-11ec-9a5e-2cfda1234877', 'Opción Múltiple', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:18:35', NULL, NULL);
INSERT INTO `tbl_listadoseldetalle` VALUES ('bc565961-136f-11ec-9a5e-2cfda1234877', '43b1b1fe-136e-11ec-9a5e-2cfda1234877', 'Selección Múltiple', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:18:35', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_listadoseleccion
-- ----------------------------
DROP TABLE IF EXISTS `tbl_listadoseleccion`;
CREATE TABLE `tbl_listadoseleccion`  (
  `id_listadoSeleccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_listadoSeleccion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_listadoseleccion
-- ----------------------------
INSERT INTO `tbl_listadoseleccion` VALUES ('003e57ae-1370-11ec-9a5e-2cfda1234877', 'Categorías Preguntas', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:20:42', NULL, NULL);
INSERT INTO `tbl_listadoseleccion` VALUES ('43b19b8e-136e-11ec-9a5e-2cfda1234877', 'Estatus Encuesta', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:08:03', NULL, NULL);
INSERT INTO `tbl_listadoseleccion` VALUES ('43b1b1fe-136e-11ec-9a5e-2cfda1234877', 'Tipo de Respuesta', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:08:03', NULL, NULL);
INSERT INTO `tbl_listadoseleccion` VALUES ('43b1b30a-136e-11ec-9a5e-2cfda1234877', 'Tipo de Población', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:08:03', NULL, NULL);
INSERT INTO `tbl_listadoseleccion` VALUES ('43b1b377-136e-11ec-9a5e-2cfda1234877', 'Modulos', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:08:03', NULL, NULL);
INSERT INTO `tbl_listadoseleccion` VALUES ('43b1b3b9-136e-11ec-9a5e-2cfda1234877', 'Permisos', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-11 21:08:03', NULL, NULL);

-- ----------------------------
-- Table structure for tbl_localidad
-- ----------------------------
DROP TABLE IF EXISTS `tbl_localidad`;
CREATE TABLE `tbl_localidad`  (
  `id_localidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_localidad`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_localidad
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_municipios
-- ----------------------------
DROP TABLE IF EXISTS `tbl_municipios`;
CREATE TABLE `tbl_municipios`  (
  `id_municipio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_municipio`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_municipios
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_permisosusuarios
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permisosusuarios`;
CREATE TABLE `tbl_permisosusuarios`  (
  `id_asignacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_modulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_permiso` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_permisosusuarios
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_preguntas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_preguntas`;
CREATE TABLE `tbl_preguntas`  (
  `id_pregunta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_categoriaPregunta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `id_tipoRespuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pregunta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_preguntas
-- ----------------------------
INSERT INTO `tbl_preguntas` VALUES ('b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'bc56573c-136f-11ec-9a5e-2cfda1234877', 'Ya había visto el logotipo de Protección Civil', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:14:35', '2021-09-13 05:14:35', NULL);
INSERT INTO `tbl_preguntas` VALUES ('bd815828-5b03-4a70-91a8-3f928f4e8bcd', 'b6b4c684-1370-11ec-9a5e-2cfda1234877', 'bc56573c-136f-11ec-9a5e-2cfda1234877', 'asdfdfgnnvc vxn', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-16 19:04:21', '2021-09-16 19:04:21', NULL);
INSERT INTO `tbl_preguntas` VALUES ('fd94b399-50e9-4b84-9710-6238f9735129', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'bc56573c-136f-11ec-9a5e-2cfda1234877', 'Ha visto o escuchado alguna campaña publicitaria de Protección Civil', 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:19:39', '2021-09-13 05:19:39', NULL);

-- ----------------------------
-- Table structure for tbl_respuestas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_respuestas`;
CREATE TABLE `tbl_respuestas`  (
  `id_respuesta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_pregunta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `valor` int NULL DEFAULT NULL,
  `crea_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `mod_usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_respuesta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_respuestas
-- ----------------------------
INSERT INTO `tbl_respuestas` VALUES ('419b86c5-1194-4921-b67f-080e28fbb92e', 'bd815828-5b03-4a70-91a8-3f928f4e8bcd', 'No', 2, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-16 19:04:21', '2021-09-16 19:04:21', NULL);
INSERT INTO `tbl_respuestas` VALUES ('4cc7a102-0027-4ebb-a4a2-02f95819d722', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'Nunca lo había visto antes', 4, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:14:35', '2021-09-13 05:14:35', NULL);
INSERT INTO `tbl_respuestas` VALUES ('563050dd-6f8c-482f-9d72-1398cfef7957', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'Lo conoce y lo identifica parcialmente', 2, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:14:35', '2021-09-13 05:14:35', NULL);
INSERT INTO `tbl_respuestas` VALUES ('68face1a-e5f7-478f-8563-5a0d204abc8d', 'fd94b399-50e9-4b84-9710-6238f9735129', 'No', 2, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:19:39', '2021-09-13 05:19:39', NULL);
INSERT INTO `tbl_respuestas` VALUES ('7bd66944-c0be-4a6b-b962-e088f0680fc0', 'bd815828-5b03-4a70-91a8-3f928f4e8bcd', 'dasfsd', 1, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-16 19:04:21', '2021-09-16 19:04:21', NULL);
INSERT INTO `tbl_respuestas` VALUES ('94202d5d-5cec-466c-bd86-ba6cebc79e2e', 'fd94b399-50e9-4b84-9710-6238f9735129', 'Si', 1, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:19:39', '2021-09-13 05:19:39', NULL);
INSERT INTO `tbl_respuestas` VALUES ('a67e6163-870f-49b6-b287-1ff4d47dbf52', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'Lo conoce pero no lo identifica', 3, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:14:35', '2021-09-13 05:14:35', NULL);
INSERT INTO `tbl_respuestas` VALUES ('c452f387-d60c-4ded-a62c-062ede0c0069', 'b6b3f6c1-1370-11ec-9a5e-2cfda1234877', 'Lo conoce y lo identifica plenamente', 1, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-13 05:14:35', '2021-09-13 05:14:35', NULL);
INSERT INTO `tbl_respuestas` VALUES ('c6309286-f010-43d9-bae5-6ca7d65129fc', 'bd815828-5b03-4a70-91a8-3f928f4e8bcd', 'Si', 1, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-16 19:04:21', '2021-09-16 19:04:21', NULL);
INSERT INTO `tbl_respuestas` VALUES ('e7197819-b4ca-4766-99a9-583780d646d8', 'bd815828-5b03-4a70-91a8-3f928f4e8bcd', 'asdfasdf', 2, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', NULL, '2021-09-16 19:04:21', '2021-09-16 19:04:21', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_encuestador` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` bit(1) NOT NULL DEFAULT b'0',
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'a8d15f1f-6d4f-4bfc-b7b1-ad07903b92e6', 'admin', 'admin@pcivilchiapas.mx', NULL, '$2y$10$KVh5/8ifP5FcTbwABPFCi.VKQSI68CGla9pXbC7tC2NYAZjce3/hC', b'1', NULL, NULL, NULL, '2021-09-06 17:43:07', '2021-09-06 17:43:07');

SET FOREIGN_KEY_CHECKS = 1;
