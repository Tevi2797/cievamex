-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-10-2020 a las 20:41:20
-- Versión del servidor: 10.3.24-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cievamex_gaya_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_economicas`
--

CREATE TABLE `actividad_economicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_economicas`
--

INSERT INTO `actividad_economicas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Citricultor', 'Cultivo de diferentes tipos de cítricos', '2020-08-01 00:05:52', '2020-09-26 17:30:38'),
(2, 'Vainillero', 'Tiene a la Vainilla como primer fuente de ingreso', NULL, '2020-09-26 17:31:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_municipios`
--

CREATE TABLE `caracteristicas_municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `escuelas` tinyint(1) DEFAULT NULL,
  `salud` tinyint(1) DEFAULT NULL,
  `pavimento` tinyint(1) DEFAULT NULL,
  `alumbrado` tinyint(1) DEFAULT NULL,
  `transporte` tinyint(1) DEFAULT NULL,
  `red_movil` tinyint(1) DEFAULT NULL,
  `potable` tinyint(1) DEFAULT NULL,
  `alcantarillado` tinyint(1) DEFAULT NULL,
  `drenaje` tinyint(1) DEFAULT NULL,
  `electricidad` tinyint(1) DEFAULT NULL,
  `residuos` tinyint(1) DEFAULT NULL,
  `gas` tinyint(1) DEFAULT NULL,
  `seguridad` tinyint(1) DEFAULT NULL,
  `abastos` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas_municipios`
--

INSERT INTO `caracteristicas_municipios` (`id`, `escuelas`, `salud`, `pavimento`, `alumbrado`, `transporte`, `red_movil`, `potable`, `alcantarillado`, `drenaje`, `electricidad`, `residuos`, `gas`, `seguridad`, `abastos`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-08-01 00:22:39', '2020-08-01 00:34:43'),
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2020-08-02 23:53:47', '2020-08-02 23:53:47'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-14 00:06:56', '2020-08-14 00:06:56'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-23 21:41:33', '2020-09-23 21:41:33'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-24 06:16:49', '2020-09-24 06:16:49'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-24 06:17:08', '2020-09-24 06:17:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caractesticas_casas`
--

CREATE TABLE `caractesticas_casas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plantas` int(11) DEFAULT NULL,
  `sala` tinyint(1) DEFAULT NULL,
  `comedor` tinyint(1) DEFAULT NULL,
  `cocina` tinyint(1) DEFAULT NULL,
  `cuartos` int(11) DEFAULT NULL,
  `baños` int(11) DEFAULT NULL,
  `patio` tinyint(1) DEFAULT NULL,
  `cochera` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caractesticas_casas`
--

INSERT INTO `caractesticas_casas` (`id`, `plantas`, `sala`, `comedor`, `cocina`, `cuartos`, `baños`, `patio`, `cochera`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 22:50:54', '2020-08-06 22:50:54'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 22:51:32', '2020-08-06 22:51:32'),
(10, 1, 1, 1, 1, NULL, 1, 1, 2, '2020-08-06 23:54:44', '2020-10-20 08:41:20'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 23:55:21', '2020-08-06 23:55:21'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-26 00:25:59', '2020-09-26 00:25:59'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-26 00:26:15', '2020-09-26 00:26:15'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-09 02:17:55', '2020-10-09 02:17:55'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-20 08:36:15', '2020-10-20 08:36:15'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-22 02:15:17', '2020-10-22 02:15:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(2, 'Coordinador de campo', 'Supervisa y organiza las actividades de las areas bajo producción', '2020-08-02 02:55:19', '2020-09-24 05:13:18'),
(3, 'Laboratorio de micropropagación', 'Coordinación de actividades en Laboratorio', '2020-09-24 05:16:28', '2020-09-24 05:16:28'),
(4, 'Campo e Investigación', 'Coordinación y supervición de las subareas que competen a la investigación y desarrollo agrícola', '2020-09-24 05:18:37', '2020-09-24 05:18:37'),
(5, 'Asesor externo', 'Apoyo Tecnico Administrativo en Investigación y Desarrollo', '2020-09-24 05:21:49', '2020-09-24 05:21:49'),
(6, 'Técnico de Campo', 'Da seguimiento a las actividades que realizan los operativos en las áreas de Campo', '2020-09-24 06:16:11', '2020-09-24 06:16:11'),
(7, 'Dirección General', 'Máxima autoridad de gestión y dirección administrativa.', '2020-09-25 20:41:51', '2020-09-25 20:41:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE `casas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `techo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `combustible` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_servequip` bigint(20) UNSIGNED NOT NULL,
  `id_caractcasa` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `estado`, `material`, `piso`, `techo`, `combustible`, `id_servequip`, `id_caractcasa`, `created_at`, `updated_at`) VALUES
(7, 'Rentada', 'Block', 'Concreto', 'Concreto', 'Gas', 10, 10, '2020-08-06 23:54:44', '2020-10-22 02:24:13'),
(8, NULL, NULL, NULL, NULL, NULL, 11, 11, '2020-08-06 23:55:22', '2020-08-06 23:55:22'),
(12, NULL, NULL, NULL, NULL, NULL, 15, 15, '2020-09-26 00:25:59', '2020-09-26 00:25:59'),
(13, NULL, NULL, NULL, NULL, NULL, 16, 16, '2020-09-26 00:26:15', '2020-09-26 00:26:15'),
(15, NULL, NULL, NULL, NULL, NULL, 18, 18, '2020-10-09 02:17:55', '2020-10-09 02:17:55'),
(16, NULL, NULL, NULL, NULL, NULL, 19, 19, '2020-10-20 08:36:15', '2020-10-20 08:36:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_floracions`
--

CREATE TABLE `ciclo_floracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inicio_floracion` date NOT NULL,
  `fin_floracion` date NOT NULL,
  `dias_floracion` int(11) NOT NULL,
  `recomendada` date DEFAULT NULL,
  `daño` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caida_prematura` double NOT NULL,
  `fecha_cosecha` date DEFAULT NULL,
  `edad_fruto` double DEFAULT NULL,
  `produccion` double DEFAULT NULL,
  `perdida_estimada` double DEFAULT NULL,
  `rendimiento_estimado` double DEFAULT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciclo_floracions`
--

INSERT INTO `ciclo_floracions` (`id`, `inicio_floracion`, `fin_floracion`, `dias_floracion`, `recomendada`, `daño`, `caida_prematura`, `fecha_cosecha`, `edad_fruto`, `produccion`, `perdida_estimada`, `rendimiento_estimado`, `id_plantacion`, `created_at`, `updated_at`) VALUES
(6, '2019-03-13', '2019-05-07', 55, '2020-01-09', 'Medio', 70, '2019-11-06', 6.918032786885246, 127, 298, 181.42857142857144, 4, '2020-09-26 01:05:43', '2020-10-22 02:28:40'),
(8, '2018-03-07', '2018-05-19', 73, '2019-01-12', 'Medio', 35, '2018-11-25', 7.442622950819672, 957, 515, 2734.2857142857147, 4, '2020-09-26 01:19:48', '2020-09-26 02:25:11'),
(9, '2018-03-21', '2018-05-02', 42, '2019-01-11', 'Medio', 10, '2018-12-19', 8.262295081967213, 50, 35, 500, 4, '2020-10-08 22:23:02', '2020-10-22 02:28:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo_asociados`
--

CREATE TABLE `cultivo_asociados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cultivo_asociados`
--

INSERT INTO `cultivo_asociados` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Naranja', 'Sembradío de Naranjo', '2020-08-08 02:55:53', '2020-09-26 00:51:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccions`
--

CREATE TABLE `direccions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_municipio` bigint(20) UNSIGNED NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ejido` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referencias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `direccions`
--

INSERT INTO `direccions` (`id`, `calle`, `numero`, `colonia`, `id_municipio`, `localidad`, `ejido`, `referencias`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, NULL, 2, NULL, NULL, NULL, '2020-08-06 23:54:44', '2020-08-06 23:54:44'),
(7, NULL, NULL, NULL, 2, NULL, NULL, NULL, '2020-08-06 23:55:22', '2020-08-06 23:55:22'),
(8, NULL, NULL, NULL, 2, NULL, NULL, NULL, '2020-08-06 23:56:17', '2020-08-06 23:56:17'),
(11, NULL, NULL, NULL, 5, NULL, NULL, NULL, '2020-09-26 00:25:59', '2020-09-26 00:25:59'),
(12, NULL, NULL, NULL, 5, NULL, NULL, NULL, '2020-09-26 00:26:15', '2020-09-26 00:26:15'),
(14, NULL, NULL, NULL, 5, NULL, NULL, NULL, '2020-10-09 02:17:55', '2020-10-09 02:17:55'),
(15, NULL, NULL, NULL, 5, NULL, NULL, NULL, '2020-10-20 08:36:15', '2020-10-20 08:36:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades`
--

CREATE TABLE `enfermedades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `enfermedades`
--

INSERT INTO `enfermedades` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Enfermedades cardiovasculares', NULL, NULL),
(2, 'Cáncer', NULL, NULL),
(3, 'Enfermedad Pulmonar', NULL, NULL),
(4, 'Diabetes', NULL, NULL),
(5, 'Parkinson', NULL, NULL),
(6, 'Alzheimer', NULL, NULL),
(7, 'Esclerosis múltiple', NULL, NULL),
(8, 'Hipertensión', NULL, NULL),
(9, 'Lumbalgia', NULL, NULL),
(10, 'Colesterol', NULL, NULL),
(11, 'Depresión', NULL, NULL),
(12, 'Ansiedad', NULL, NULL),
(13, 'Tiroides', NULL, NULL),
(14, 'Osteoporosis', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades_familia`
--

CREATE TABLE `enfermedades_familia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enfermedades_id` bigint(20) UNSIGNED NOT NULL,
  `familia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades_plantaciones`
--

CREATE TABLE `enfermedades_plantaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_enfermedad` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `enfermedades_plantaciones`
--

INSERT INTO `enfermedades_plantaciones` (`id`, `id_plantacion`, `id_enfermedad`, `created_at`, `updated_at`) VALUES
(18, 4, 1, '2020-09-26 01:12:40', '2020-09-26 01:12:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfer_plantas`
--

CREATE TABLE `enfer_plantas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `enfer_plantas`
--

INSERT INTO `enfer_plantas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Hoja Negra', 'Hongo', '2020-08-07 22:46:29', '2020-08-08 00:32:39'),
(2, 'Peste', 'xd', '2020-08-12 03:28:25', '2020-08-12 03:28:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especies`
--

CREATE TABLE `especies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_comun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cientifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especies`
--

INSERT INTO `especies` (`id`, `nombre_comun`, `nombre_cientifico`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Vainilla planifolia', 'Mansa', 'Orquídea epifita de tamaño grande, trepadora con un tallo cilíndrico de color verde y carnoso, ramificado y llevando numerosas hojas, carnosas, elíptico- oblongas u ovado-elípticas, agudas a subacuminadas', '2020-08-08 03:24:42', '2020-10-02 17:26:52'),
(2, 'Vanilla pompona', 'Pompona', 'Esta especie es gigante de tamaño, epifita y trepadora, con raíces adventicias que surgen en los nodos y con hojas ampliamente oblongas.', '2020-09-26 00:37:36', '2020-10-02 17:28:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Aguascalientes', NULL, NULL),
(2, 'Baja California', NULL, NULL),
(3, 'Baja California Sur', NULL, NULL),
(4, 'Campeche', NULL, NULL),
(5, 'Chihuahua', NULL, NULL),
(6, 'Chiapas', NULL, NULL),
(7, 'Ciudad de México', NULL, NULL),
(8, 'Coahuila', NULL, NULL),
(9, 'Colima', NULL, NULL),
(10, 'Durango', NULL, NULL),
(11, 'Guanajuato', NULL, NULL),
(12, 'Guerrero', NULL, NULL),
(13, 'Hidalgo', NULL, NULL),
(14, 'Jalisco', NULL, NULL),
(15, 'México', NULL, NULL),
(16, 'Michoacán', NULL, NULL),
(17, 'Morelos', NULL, NULL),
(18, 'Nayarit', NULL, NULL),
(19, 'Nuevo León', NULL, NULL),
(20, 'Oaxaca', NULL, NULL),
(21, 'Puebla', NULL, NULL),
(22, 'Querétaro', NULL, NULL),
(23, 'Quintana Roo', NULL, NULL),
(24, 'San Luis Potosí', NULL, NULL),
(25, 'Sinaloa', NULL, NULL),
(26, 'Sonora', NULL, NULL),
(27, 'Tabasco', NULL, NULL),
(28, 'Tamaulipas', NULL, NULL),
(29, 'Tlaxcala', NULL, NULL),
(30, 'Veracruz', NULL, NULL),
(31, 'Yucatán', NULL, NULL),
(32, 'Zacatecas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_mat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `nacimiento` date NOT NULL,
  `parentesco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escolaridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingreso` double DEFAULT NULL,
  `gasto` double DEFAULT NULL,
  `id_productor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fertilizantes`
--

CREATE TABLE `fertilizantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fertilizantes`
--

INSERT INTO `fertilizantes` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Dragón', 'Quemante', '2020-08-08 01:37:52', '2020-08-08 01:39:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo_enfermedads`
--

CREATE TABLE `manejo_enfermedads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `manejo_enfermedads`
--

INSERT INTO `manejo_enfermedads` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'corte de la parte dañada', 'cortar el tallo o parte que esta infectado', '2020-08-08 01:12:52', '2020-08-08 01:13:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo_plagas`
--

CREATE TABLE `manejo_plagas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `manejo_plagas`
--

INSERT INTO `manejo_plagas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'metodo de cal', 'regar calsobre la plantacion', '2020-08-08 00:29:26', '2020-08-08 00:29:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_05_185026_create_cargos_table', 1),
(4, '2020_06_27_184141_create_productors_table', 1),
(6, '2020_06_28_204848_create_servicios_equipamientos_table', 1),
(7, '2020_06_28_205644_create_caractesticas_casas_table', 1),
(9, '2020_06_28_210334_create_estados_table', 1),
(11, '2020_06_28_210600_create_caracteristicas_municipios_table', 1),
(12, '2020_06_28_210924_create_actividad_economicas_table', 1),
(13, '2020_07_22_190933_create_familias_table', 1),
(14, '2020_07_23_180918_create_enfermedades_table', 1),
(15, '2020_07_24_030332_create_familia__enfermedads_table', 1),
(16, '2020_06_28_210428_create_municipios_table', 2),
(17, '2020_06_28_210220_create_direccions_table', 3),
(18, '2020_06_28_194716_create_casas_table', 4),
(20, '2014_10_12_000000_create_users_table', 5),
(21, '2020_08_03_180354_create_riegos_table', 6),
(22, '2020_08_03_180457_create_tipo_suelos_table', 6),
(23, '2020_08_03_180516_create_visitas_table', 7),
(24, '2020_08_03_180822_create_parcelas_table', 7),
(25, '2020_08_03_180903_create_especies_table', 7),
(26, '2020_08_03_180919_create_ciclo_floracions_table', 7),
(27, '2020_08_03_180957_create_enfer_plantas_table', 7),
(28, '2020_08_03_181052_create_enfermedades_plantaciones_table', 8),
(29, '2020_08_03_181115_create_manejo_plagas_table', 8),
(30, '2020_08_03_181132_create_plagas_table', 8),
(31, '2020_08_03_181202_create_plantaciones__plagas_table', 9),
(32, '2020_08_03_181248_create_manejo_enfermedads_table', 9),
(33, '2020_08_03_181304_create_fertilizantes_table', 9),
(34, '2020_08_03_181322_create_tutors_table', 9),
(35, '2020_08_03_181336_create_cultivo_asociados_table', 9),
(36, '2020_08_03_181352_create_plantacions_table', 10),
(38, '2020_08_03_195810_create_plantacion__manejo_enfermedads_table', 11),
(39, '2020_08_03_200320_create_plantacion__fertilizantes_table', 11),
(40, '2020_08_03_200537_create_plantacion__tutors_table', 11),
(41, '2020_08_03_200759_create_plantacion__asociados_table', 11),
(42, '2020_08_03_201729_create_tipo_plantacions_table', 11),
(43, '2020_08_03_195051_create_plantacion__manejo_plagas_table', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estado` bigint(20) UNSIGNED NOT NULL,
  `id_caracmunicipio` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `nombre`, `id_estado`, `id_caracmunicipio`, `created_at`, `updated_at`) VALUES
(2, 'Papantla', 30, 2, '2020-08-01 00:22:39', '2020-08-01 00:22:39'),
(3, 'Cazones de Herrera', 30, 5, '2020-08-14 00:06:56', '2020-09-23 21:47:46'),
(4, 'Gutierrez Zamora', 30, 5, '2020-09-23 21:41:33', '2020-09-23 21:41:33'),
(5, 'Tecolutla', 30, 7, '2020-09-24 06:17:08', '2020-09-24 06:17:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcelas`
--

CREATE TABLE `parcelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `latitud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altitud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ha` double NOT NULL,
  `pendiente` double NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tiposuelo` bigint(20) UNSIGNED NOT NULL,
  `id_riego` bigint(20) UNSIGNED NOT NULL,
  `id_municipio` bigint(20) UNSIGNED NOT NULL,
  `id_productor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `parcelas`
--

INSERT INTO `parcelas` (`id`, `latitud`, `longitud`, `altitud`, `ha`, `pendiente`, `localidad`, `id_tiposuelo`, `id_riego`, `id_municipio`, `id_productor`, `created_at`, `updated_at`) VALUES
(4, '20°19\'02.1\"N', '96°58\'06.8\"W', '20', 2, 1, 'Fuerte de Anaya', 7, 3, 5, 9, '2020-09-26 00:59:33', '2020-09-26 00:59:33'),
(5, '97° 31’ 17.4', '20° 41’ 55.7', '143', 1, 10, 'Chapolhuac', 5, 1, 5, 11, '2020-10-20 08:48:22', '2020-10-20 08:48:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plagas`
--

CREATE TABLE `plagas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plagas`
--

INSERT INTO `plagas` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'gusano', 'invasion de gusano', '2020-08-08 00:50:47', '2020-08-08 00:51:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantaciones__plagas`
--

CREATE TABLE `plantaciones__plagas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_plaga` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacions`
--

CREATE TABLE `plantacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `año` int(11) NOT NULL,
  `id_especie` bigint(20) UNSIGNED NOT NULL,
  `id_tipoplantacion` bigint(20) UNSIGNED NOT NULL,
  `id_parcela` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plantacions`
--

INSERT INTO `plantacions` (`id`, `cantidad`, `año`, `id_especie`, `id_tipoplantacion`, `id_parcela`, `created_at`, `updated_at`) VALUES
(4, 1200, 2013, 1, 3, 4, '2020-09-26 01:01:33', '2020-09-26 01:01:33'),
(5, 900, 2014, 1, 3, 5, '2020-10-20 08:52:25', '2020-10-20 08:52:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacion__asociados`
--

CREATE TABLE `plantacion__asociados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_asociado` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacion__fertilizantes`
--

CREATE TABLE `plantacion__fertilizantes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_fertilizante` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacion__manejo_enfermedads`
--

CREATE TABLE `plantacion__manejo_enfermedads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_manejoenfermedad` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacion__manejo_plagas`
--

CREATE TABLE `plantacion__manejo_plagas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_manejoplaga` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantacion__tutors`
--

CREATE TABLE `plantacion__tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_plantacion` bigint(20) UNSIGNED NOT NULL,
  `id_tutor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productors`
--

CREATE TABLE `productors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_pat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_mat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingreso` double DEFAULT NULL,
  `gasto` double DEFAULT NULL,
  `escolaridad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_direccion` bigint(20) UNSIGNED NOT NULL,
  `id_acteconomica` bigint(20) UNSIGNED NOT NULL,
  `seguro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_estatuscasa` bigint(20) UNSIGNED NOT NULL,
  `jefe_familia` tinyint(1) DEFAULT NULL,
  `estado_civil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productors`
--

INSERT INTO `productors` (`id`, `nombre`, `apellido_pat`, `apellido_mat`, `edad`, `sexo`, `ingreso`, `gasto`, `escolaridad`, `id_direccion`, `id_acteconomica`, `seguro`, `id_estatuscasa`, `jefe_familia`, `estado_civil`, `created_at`, `updated_at`) VALUES
(9, 'Pedro', 'Cruz', 'Hernandez', 72, 'Hombre', NULL, NULL, 'Nula', 12, 2, 'IMSS', 13, NULL, NULL, '2020-09-26 00:26:15', '2020-09-26 00:26:15'),
(11, 'ISIDORA', 'GARCIA', 'BARTOLO', 60, 'Mujer', NULL, NULL, 'Nula', 15, 1, 'Seguro Popular', 16, NULL, NULL, '2020-10-20 08:36:15', '2020-10-20 08:36:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riegos`
--

CREATE TABLE `riegos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `riegos`
--

INSERT INTO `riegos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Temporal', 'Es el área en la que el desarrollo completo de los cultivos depende exclusivamente de las lluvias o de la humedad residual del suelo.', '2020-08-05 01:38:09', '2020-08-05 01:38:09'),
(2, 'Manual', 'Se hace mediante la actividad humana regando mediante cubetas', '2020-08-05 01:39:38', '2020-08-05 01:48:39'),
(3, 'Semitecnificado', 'Se usa un sistema especial de Riego dependiendo de la necesidad', '2020-08-05 01:40:46', '2020-08-05 01:40:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_equipamientos`
--

CREATE TABLE `servicios_equipamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `electricidad` tinyint(1) DEFAULT NULL,
  `drenaje` tinyint(1) DEFAULT NULL,
  `potable` tinyint(1) DEFAULT NULL,
  `gas` tinyint(1) DEFAULT NULL,
  `lavadora` tinyint(1) DEFAULT NULL,
  `refrigerador` tinyint(1) DEFAULT NULL,
  `television` tinyint(1) DEFAULT NULL,
  `telefono` tinyint(1) DEFAULT NULL,
  `celular` tinyint(1) DEFAULT NULL,
  `microondas` tinyint(1) DEFAULT NULL,
  `radio` tinyint(1) DEFAULT NULL,
  `dvd` tinyint(1) DEFAULT NULL,
  `computadora` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `automovil` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios_equipamientos`
--

INSERT INTO `servicios_equipamientos` (`id`, `electricidad`, `drenaje`, `potable`, `gas`, `lavadora`, `refrigerador`, `television`, `telefono`, `celular`, `microondas`, `radio`, `dvd`, `computadora`, `internet`, `automovil`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 22:50:55', '2020-08-06 22:50:55'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 22:51:32', '2020-08-06 22:51:32'),
(10, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, '2020-08-06 23:54:44', '2020-10-20 08:41:20'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-06 23:55:22', '2020-08-06 23:55:22'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-26 00:25:59', '2020-09-26 00:25:59'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-26 00:26:15', '2020-09-26 00:26:15'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-09 02:17:55', '2020-10-09 02:17:55'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-20 08:36:15', '2020-10-20 08:36:15'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-22 02:15:17', '2020-10-22 02:15:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_plantacions`
--

CREATE TABLE `tipo_plantacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_plantacions`
--

INSERT INTO `tipo_plantacions` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Agroforestal', 'Diversas especies cultivables y silvestres en el mismo espacio', '2020-08-08 03:10:16', '2020-09-26 00:40:07'),
(2, 'Silvestre', 'Plantas en libre crecimiento, en área sin perturbar, y solo recolección de frutos', '2020-09-26 00:40:45', '2020-09-26 00:43:06'),
(3, 'Asociado', 'Cultivo de vainilla usando un tutor que es otro cultivo, naranjo usualmente', '2020-09-26 00:46:21', '2020-09-26 00:46:21'),
(4, 'Bajo Cubierta', 'Cultivo bajo estructuras de cubiertas, sombreaderos usualmente', '2020-09-26 00:47:52', '2020-09-26 00:47:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_suelos`
--

CREATE TABLE `tipo_suelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_suelos`
--

INSERT INTO `tipo_suelos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Suelos Arenosos', 'Incapaces de retener el agua, son escasos en materia orgánica y por lo tanto poco fértiles.', '2020-08-05 00:39:16', '2020-08-05 00:55:26'),
(2, 'Suelos Calizos', 'Abundan en minerales calcáreos y por lo tanto en sales, lo cual les confiere dureza, aridez y color blanquecino.', '2020-08-05 00:40:24', '2020-08-05 00:55:37'),
(3, 'Suelos Humíferos', 'De tierra negra, en ellos abunda la materia orgánica en descomposición y retienen muy bien el agua, siendo muy fértiles.', '2020-08-05 00:40:46', '2020-08-05 00:55:44'),
(4, 'Suelos Arcillosos', 'Compuestos por finos granos amarillentos que retienen muy bien el agua, por lo que suelen inundarse con facilidad.', '2020-08-05 00:41:07', '2020-08-05 00:55:51'),
(5, 'Suelos Pedregosos', 'Compuestos por rocas de distintos tamaños, son muy porosos y no retienen en nada el agua.', '2020-08-05 00:41:25', '2020-08-05 00:55:59'),
(7, 'Suelos Mixtos', 'Suelos mezclados, por lo general entre arenosos y arcillosos.', '2020-08-05 00:58:58', '2020-08-05 00:58:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutors`
--

CREATE TABLE `tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutors`
--

INSERT INTO `tutors` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Chaka', 'Árbol', '2020-08-08 02:34:14', '2020-08-08 02:35:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `id_cargo` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellidos`, `edad`, `email`, `password`, `tipo`, `telefono`, `id_cargo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pedro Antonio', 'Alegre Marcelino', 31, 'paamsv17@gmail.com', '$2y$10$ZyC8K0X4F7wOhOXFcbUeWum1zqSwrWLad1OpSYfhjjfcyVRHA1HB.', 'Administrador', 7821274339, 2, 'CXRmGnM3lvpHVLFdCFvrXHjEJt7xwcCRkX3ArVTOIQoSI4Pj14HD6vYhFZTB', '2020-08-02 03:01:02', '2020-09-25 20:12:23'),
(2, 'SASTI', 'Gestión e Innovación SC', 10, 'info@sastisc.com', '$2y$10$VUsPaDvmb/jhUIAyZtWaWuOZgzdAR5yE6POHetYsoZzCp/86TfRUy', 'Administrador', 7668450497, 4, 'xCblfqT7T5FODjnzBZextkXY3H4qj0xQswoe5zsF499db4gkbTH3iR1fNybQ', '2020-08-30 02:29:51', '2020-10-17 22:09:28'),
(3, 'Correo', 'Prueba', 10, 'correoprueba@gmail.com', '$2y$10$iw.9OPltE8KVTnhlkoYFoOsa2.MgmSAOeZFMoec7sroO39HGn2uUq', 'Administrador', 1234567890, 2, 'Uw0Ho3IHFxKRrQ8qeyMlyVVQUoU0EbTMWHAPiHwZCQKozuFxS5g9Oxn9ULFN', '2020-09-25 20:35:14', '2020-09-25 20:35:14'),
(4, 'Norma', 'Gaya', 49, 'ngaya@gayamexico.com', '$2y$10$TvLgOPlwsxCqTznQm1PP5.02KieaMP/bHjq6hjWrTbqlMQeTFGi0.', 'Administrador', 2102477364, 7, NULL, '2020-09-25 20:40:07', '2020-10-09 01:49:36'),
(5, 'Mireya', 'Olmedo López', 50, 'molmedo@gayamexico.com', '$2y$10$04BpyhueXr9A..ML6UziHuAdlUfDjFSfB.O9UuMnhJkKrWpmIZ3.m', 'tecnico', 7661100254, 4, NULL, '2020-09-25 20:49:22', '2020-09-25 20:55:41'),
(6, 'CEMIVAC', 'Investigación', 6, 'info@cemivac.com', '$2y$10$6KosjbYf6T6uCuwCBHb9oOCWIONfvRST41WSTsSpBLiz9ukNX9IzO', 'tecnico', 7668450497, 4, NULL, '2020-09-25 20:51:11', '2020-09-25 20:53:46'),
(7, 'David', 'Moreno Martinez', 37, 'dmoreno29@hotmail.com', '$2y$10$P8rM2MvQVXzXzibwfjqinOoLrSEvQVwl6TJpHrEZ1c..4PReFekQa', 'tecnico', 2281065774, 5, NULL, '2020-09-25 20:57:45', '2020-09-25 20:57:45'),
(8, 'Jesus', 'Colin Rivera', 37, 'macbeth.27383@gmail.com', '$2y$10$SH1s1VEGuQqPZrU/kccRTuAdJI2zj9rezdMp807USYQoHEyAOUzUe', 'tecnico', 7221857302, 2, NULL, '2020-09-25 23:22:08', '2020-09-25 23:22:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parcela` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `fecha`, `actividad`, `descripcion`, `id_parcela`, `created_at`, `updated_at`) VALUES
(4, '2018-07-26', 'Encuesta Fundación Waltmart', 'Encuesta socioeconómica a productor', 4, '2020-09-26 17:26:04', '2020-09-26 17:26:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_economicas`
--
ALTER TABLE `actividad_economicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caracteristicas_municipios`
--
ALTER TABLE `caracteristicas_municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caractesticas_casas`
--
ALTER TABLE `caractesticas_casas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casas_id_servequip_foreign` (`id_servequip`),
  ADD KEY `casas_id_caractcasa_foreign` (`id_caractcasa`);

--
-- Indices de la tabla `ciclo_floracions`
--
ALTER TABLE `ciclo_floracions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plantacion` (`id_plantacion`);

--
-- Indices de la tabla `cultivo_asociados`
--
ALTER TABLE `cultivo_asociados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccions`
--
ALTER TABLE `direccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `direccions_id_municipio_foreign` (`id_municipio`);

--
-- Indices de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enfermedades_familia`
--
ALTER TABLE `enfermedades_familia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enfermedades_familia_enfermedades_id_foreign` (`enfermedades_id`),
  ADD KEY `enfermedades_familia_familia_id_foreign` (`familia_id`);

--
-- Indices de la tabla `enfermedades_plantaciones`
--
ALTER TABLE `enfermedades_plantaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_enfermedad` (`id_enfermedad`),
  ADD KEY `id_plantacion` (`id_plantacion`);

--
-- Indices de la tabla `enfer_plantas`
--
ALTER TABLE `enfer_plantas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `familias_id_productor_foreign` (`id_productor`);

--
-- Indices de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manejo_enfermedads`
--
ALTER TABLE `manejo_enfermedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manejo_plagas`
--
ALTER TABLE `manejo_plagas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_id_estado_foreign` (`id_estado`),
  ADD KEY `municipios_id_caracmunicipio_foreign` (`id_caracmunicipio`);

--
-- Indices de la tabla `parcelas`
--
ALTER TABLE `parcelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcelas_id_tiposuelo_foreign` (`id_tiposuelo`),
  ADD KEY `parcelas_id_riego_foreign` (`id_riego`),
  ADD KEY `parcelas_id_municipio_foreign` (`id_municipio`),
  ADD KEY `parcelas_id_productor_foreign` (`id_productor`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `plagas`
--
ALTER TABLE `plagas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantaciones__plagas`
--
ALTER TABLE `plantaciones__plagas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_plaga` (`id_plaga`),
  ADD KEY `id_plantacion` (`id_plantacion`);

--
-- Indices de la tabla `plantacions`
--
ALTER TABLE `plantacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parcela` (`id_parcela`),
  ADD KEY `id_especie` (`id_especie`),
  ADD KEY `id_tipoplantacion` (`id_tipoplantacion`);

--
-- Indices de la tabla `plantacion__asociados`
--
ALTER TABLE `plantacion__asociados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plantacion__asociados_id_asociado_foreign` (`id_asociado`),
  ADD KEY `plantacion__asociados_id_plantacion_foreign` (`id_plantacion`);

--
-- Indices de la tabla `plantacion__fertilizantes`
--
ALTER TABLE `plantacion__fertilizantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plantacion__fertilizantes_id_fertilizante_foreign` (`id_fertilizante`),
  ADD KEY `plantacion__fertilizantes_id_plantacion_foreign` (`id_plantacion`);

--
-- Indices de la tabla `plantacion__manejo_enfermedads`
--
ALTER TABLE `plantacion__manejo_enfermedads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plantacion__manejo_enfermedads_id_manejoenfermedad_foreign` (`id_manejoenfermedad`),
  ADD KEY `plantacion__manejo_enfermedads_id_plantacion_foreign` (`id_plantacion`);

--
-- Indices de la tabla `plantacion__manejo_plagas`
--
ALTER TABLE `plantacion__manejo_plagas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plantacion__manejo_plagas_id_manejoplaga_foreign` (`id_manejoplaga`),
  ADD KEY `plantacion__manejo_plagas_id_plantacion_foreign` (`id_plantacion`);

--
-- Indices de la tabla `plantacion__tutors`
--
ALTER TABLE `plantacion__tutors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plantacion__tutors_id_tutor_foreign` (`id_tutor`),
  ADD KEY `plantacion__tutors_id_plantacion_foreign` (`id_plantacion`);

--
-- Indices de la tabla `productors`
--
ALTER TABLE `productors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `riegos`
--
ALTER TABLE `riegos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_equipamientos`
--
ALTER TABLE `servicios_equipamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_plantacions`
--
ALTER TABLE `tipo_plantacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_suelos`
--
ALTER TABLE `tipo_suelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_cargo_foreign` (`id_cargo`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parcela` (`id_parcela`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_economicas`
--
ALTER TABLE `actividad_economicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `caracteristicas_municipios`
--
ALTER TABLE `caracteristicas_municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `caractesticas_casas`
--
ALTER TABLE `caractesticas_casas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ciclo_floracions`
--
ALTER TABLE `ciclo_floracions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cultivo_asociados`
--
ALTER TABLE `cultivo_asociados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `direccions`
--
ALTER TABLE `direccions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `enfermedades_familia`
--
ALTER TABLE `enfermedades_familia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `enfermedades_plantaciones`
--
ALTER TABLE `enfermedades_plantaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `enfer_plantas`
--
ALTER TABLE `enfer_plantas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especies`
--
ALTER TABLE `especies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `manejo_enfermedads`
--
ALTER TABLE `manejo_enfermedads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `manejo_plagas`
--
ALTER TABLE `manejo_plagas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `parcelas`
--
ALTER TABLE `parcelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `plagas`
--
ALTER TABLE `plagas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plantaciones__plagas`
--
ALTER TABLE `plantaciones__plagas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plantacions`
--
ALTER TABLE `plantacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `plantacion__asociados`
--
ALTER TABLE `plantacion__asociados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `plantacion__fertilizantes`
--
ALTER TABLE `plantacion__fertilizantes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `plantacion__manejo_enfermedads`
--
ALTER TABLE `plantacion__manejo_enfermedads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plantacion__manejo_plagas`
--
ALTER TABLE `plantacion__manejo_plagas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `plantacion__tutors`
--
ALTER TABLE `plantacion__tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productors`
--
ALTER TABLE `productors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `riegos`
--
ALTER TABLE `riegos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios_equipamientos`
--
ALTER TABLE `servicios_equipamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipo_plantacions`
--
ALTER TABLE `tipo_plantacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_suelos`
--
ALTER TABLE `tipo_suelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casas`
--
ALTER TABLE `casas`
  ADD CONSTRAINT `casas_id_caractcasa_foreign` FOREIGN KEY (`id_caractcasa`) REFERENCES `caractesticas_casas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `casas_id_servequip_foreign` FOREIGN KEY (`id_servequip`) REFERENCES `servicios_equipamientos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ciclo_floracions`
--
ALTER TABLE `ciclo_floracions`
  ADD CONSTRAINT `ciclo_floracions_ibfk_1` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direccions`
--
ALTER TABLE `direccions`
  ADD CONSTRAINT `direccions_id_municipio_foreign` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `enfermedades_familia`
--
ALTER TABLE `enfermedades_familia`
  ADD CONSTRAINT `enfermedades_familia_enfermedades_id_foreign` FOREIGN KEY (`enfermedades_id`) REFERENCES `enfermedades` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enfermedades_familia_familia_id_foreign` FOREIGN KEY (`familia_id`) REFERENCES `familias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `enfermedades_plantaciones`
--
ALTER TABLE `enfermedades_plantaciones`
  ADD CONSTRAINT `enfermedades_plantaciones_ibfk_1` FOREIGN KEY (`id_enfermedad`) REFERENCES `enfer_plantas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enfermedades_plantaciones_ibfk_2` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `familias`
--
ALTER TABLE `familias`
  ADD CONSTRAINT `familias_id_productor_foreign` FOREIGN KEY (`id_productor`) REFERENCES `productors` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_id_caracmunicipio_foreign` FOREIGN KEY (`id_caracmunicipio`) REFERENCES `caracteristicas_municipios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `municipios_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`);

--
-- Filtros para la tabla `parcelas`
--
ALTER TABLE `parcelas`
  ADD CONSTRAINT `parcelas_id_municipio_foreign` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `parcelas_id_productor_foreign` FOREIGN KEY (`id_productor`) REFERENCES `productors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parcelas_id_riego_foreign` FOREIGN KEY (`id_riego`) REFERENCES `riegos` (`id`),
  ADD CONSTRAINT `parcelas_id_tiposuelo_foreign` FOREIGN KEY (`id_tiposuelo`) REFERENCES `tipo_suelos` (`id`);

--
-- Filtros para la tabla `plantaciones__plagas`
--
ALTER TABLE `plantaciones__plagas`
  ADD CONSTRAINT `plantaciones__plagas_ibfk_1` FOREIGN KEY (`id_plaga`) REFERENCES `plagas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plantaciones__plagas_ibfk_2` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plantacions`
--
ALTER TABLE `plantacions`
  ADD CONSTRAINT `plantacions_ibfk_1` FOREIGN KEY (`id_parcela`) REFERENCES `parcelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plantacions_ibfk_2` FOREIGN KEY (`id_especie`) REFERENCES `especies` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `plantacions_ibfk_3` FOREIGN KEY (`id_tipoplantacion`) REFERENCES `tipo_plantacions` (`id`) ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plantacion__asociados`
--
ALTER TABLE `plantacion__asociados`
  ADD CONSTRAINT `plantacion__asociados_id_asociado_foreign` FOREIGN KEY (`id_asociado`) REFERENCES `cultivo_asociados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantacion__asociados_id_plantacion_foreign` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plantacion__fertilizantes`
--
ALTER TABLE `plantacion__fertilizantes`
  ADD CONSTRAINT `plantacion__fertilizantes_id_fertilizante_foreign` FOREIGN KEY (`id_fertilizante`) REFERENCES `fertilizantes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantacion__fertilizantes_id_plantacion_foreign` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plantacion__manejo_enfermedads`
--
ALTER TABLE `plantacion__manejo_enfermedads`
  ADD CONSTRAINT `plantacion__manejo_enfermedads_id_manejoenfermedad_foreign` FOREIGN KEY (`id_manejoenfermedad`) REFERENCES `manejo_enfermedads` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantacion__manejo_enfermedads_id_plantacion_foreign` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plantacion__manejo_plagas`
--
ALTER TABLE `plantacion__manejo_plagas`
  ADD CONSTRAINT `plantacion__manejo_plagas_id_manejoplaga_foreign` FOREIGN KEY (`id_manejoplaga`) REFERENCES `manejo_plagas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantacion__manejo_plagas_id_plantacion_foreign` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plantacion__tutors`
--
ALTER TABLE `plantacion__tutors`
  ADD CONSTRAINT `plantacion__tutors_id_plantacion_foreign` FOREIGN KEY (`id_plantacion`) REFERENCES `plantacions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantacion__tutors_id_tutor_foreign` FOREIGN KEY (`id_tutor`) REFERENCES `tutors` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_cargo_foreign` FOREIGN KEY (`id_cargo`) REFERENCES `cargos` (`id`);

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`id_parcela`) REFERENCES `parcelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
