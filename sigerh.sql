-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 20, 2017 at 09:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigerh`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 294),
(2, 1, NULL, NULL, 'CarreirasConcursos', 2, 13),
(3, 2, NULL, NULL, 'index', 3, 4),
(4, 2, NULL, NULL, 'view', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'delete', 11, 12),
(8, 1, NULL, NULL, 'Carreiras', 14, 31),
(9, 8, NULL, NULL, 'index', 15, 16),
(10, 8, NULL, NULL, 'relatorio_carreira', 17, 18),
(11, 8, NULL, NULL, 'view', 19, 20),
(12, 8, NULL, NULL, 'add', 21, 22),
(13, 8, NULL, NULL, 'edit', 23, 24),
(14, 8, NULL, NULL, 'delete', 25, 26),
(15, 8, NULL, NULL, 'adicionarCarreira', 27, 28),
(16, 8, NULL, NULL, 'configurarCarreiras', 29, 30),
(17, 1, NULL, NULL, 'Categorias', 32, 45),
(18, 17, NULL, NULL, 'index', 33, 34),
(19, 17, NULL, NULL, 'listaEmPdf', 35, 36),
(20, 17, NULL, NULL, 'view', 37, 38),
(21, 17, NULL, NULL, 'add', 39, 40),
(22, 17, NULL, NULL, 'edit', 41, 42),
(23, 17, NULL, NULL, 'delete', 43, 44),
(24, 1, NULL, NULL, 'Cds', 46, 61),
(25, 24, NULL, NULL, 'index', 47, 48),
(26, 24, NULL, NULL, 'view', 49, 50),
(27, 24, NULL, NULL, 'add', 51, 52),
(28, 24, NULL, NULL, 'edit', 53, 54),
(29, 24, NULL, NULL, 'delete', 55, 56),
(30, 24, NULL, NULL, 'excepcao', 57, 58),
(31, 24, NULL, NULL, 'getkeys', 59, 60),
(32, 1, NULL, NULL, 'Clazzes', 62, 75),
(33, 32, NULL, NULL, 'index', 63, 64),
(34, 32, NULL, NULL, 'pdf_classes', 65, 66),
(35, 32, NULL, NULL, 'view', 67, 68),
(36, 32, NULL, NULL, 'add', 69, 70),
(37, 32, NULL, NULL, 'edit', 71, 72),
(38, 32, NULL, NULL, 'delete', 73, 74),
(39, 1, NULL, NULL, 'Concursos', 76, 97),
(40, 39, NULL, NULL, 'index', 77, 78),
(41, 39, NULL, NULL, 'lista_concursos', 79, 80),
(42, 39, NULL, NULL, 'view', 81, 82),
(43, 39, NULL, NULL, 'add', 83, 84),
(44, 39, NULL, NULL, 'edit', 85, 86),
(45, 39, NULL, NULL, 'delete', 87, 88),
(46, 39, NULL, NULL, 'incluirCarreira', 89, 90),
(47, 39, NULL, NULL, 'nova_pagina', 91, 92),
(48, 39, NULL, NULL, 'editarModal', 93, 94),
(49, 39, NULL, NULL, 'adicionarModal', 95, 96),
(50, 1, NULL, NULL, 'Ctas', 98, 113),
(51, 50, NULL, NULL, 'index', 99, 100),
(52, 50, NULL, NULL, 'view', 101, 102),
(53, 50, NULL, NULL, 'add', 103, 104),
(54, 50, NULL, NULL, 'edit', 105, 106),
(55, 50, NULL, NULL, 'delete', 107, 108),
(56, 50, NULL, NULL, 'excepcao', 109, 110),
(57, 50, NULL, NULL, 'getkeys', 111, 112),
(58, 1, NULL, NULL, 'Delegacaos', 114, 125),
(59, 58, NULL, NULL, 'index', 115, 116),
(60, 58, NULL, NULL, 'view', 117, 118),
(61, 58, NULL, NULL, 'add', 119, 120),
(62, 58, NULL, NULL, 'edit', 121, 122),
(63, 58, NULL, NULL, 'delete', 123, 124),
(64, 1, NULL, NULL, 'Documentacaos', 126, 137),
(65, 64, NULL, NULL, 'index', 127, 128),
(66, 64, NULL, NULL, 'view', 129, 130),
(67, 64, NULL, NULL, 'add', 131, 132),
(68, 64, NULL, NULL, 'edit', 133, 134),
(69, 64, NULL, NULL, 'delete', 135, 136),
(70, 1, NULL, NULL, 'Escalaos', 138, 149),
(71, 70, NULL, NULL, 'index', 139, 140),
(72, 70, NULL, NULL, 'view', 141, 142),
(73, 70, NULL, NULL, 'add', 143, 144),
(74, 70, NULL, NULL, 'edit', 145, 146),
(75, 70, NULL, NULL, 'delete', 147, 148),
(76, 1, NULL, NULL, 'Funcionarios', 150, 191),
(77, 76, NULL, NULL, 'participantes', 151, 152),
(78, 76, NULL, NULL, 'getkeys', 153, 154),
(79, 76, NULL, NULL, 'calendario', 155, 156),
(80, 76, NULL, NULL, 'index', 157, 158),
(81, 76, NULL, NULL, 'todos', 159, 160),
(82, 76, NULL, NULL, 'detalhes', 161, 162),
(83, 76, NULL, NULL, 'preparaRelatorio', 163, 164),
(84, 76, NULL, NULL, 'alterar', 165, 166),
(85, 76, NULL, NULL, 'novoNome', 167, 168),
(86, 76, NULL, NULL, 'alterarDados', 169, 170),
(87, 76, NULL, NULL, 'listaDeParticipantesAjax', 171, 172),
(88, 76, NULL, NULL, 'aceitarDespacho', 173, 174),
(89, 76, NULL, NULL, 'transferencia', 175, 176),
(90, 76, NULL, NULL, 'entrevista', 177, 178),
(91, 76, NULL, NULL, 'imprimeFuncionario', 179, 180),
(92, 76, NULL, NULL, 'nomeacao', 181, 182),
(93, 76, NULL, NULL, 'excepcao', 183, 184),
(94, 76, NULL, NULL, 'busca', 185, 186),
(95, 76, NULL, NULL, 'findAll', 187, 188),
(96, 76, NULL, NULL, 'cancelDespacho', 189, 190),
(97, 1, NULL, NULL, 'Groups', 192, 201),
(98, 97, NULL, NULL, 'add', 193, 194),
(99, 97, NULL, NULL, 'edit', 195, 196),
(100, 97, NULL, NULL, 'index', 197, 198),
(101, 97, NULL, NULL, 'delete', 199, 200),
(102, 1, NULL, NULL, 'Pages', 202, 205),
(103, 102, NULL, NULL, 'display', 203, 204),
(104, 1, NULL, NULL, 'Sectores', 206, 219),
(105, 104, NULL, NULL, 'index', 207, 208),
(106, 104, NULL, NULL, 'view', 209, 210),
(107, 104, NULL, NULL, 'add', 211, 212),
(108, 104, NULL, NULL, 'edit', 213, 214),
(109, 104, NULL, NULL, 'modificar', 215, 216),
(110, 104, NULL, NULL, 'delete', 217, 218),
(111, 1, NULL, NULL, 'TipoIngressos', 220, 231),
(112, 111, NULL, NULL, 'index', 221, 222),
(113, 111, NULL, NULL, 'view', 223, 224),
(114, 111, NULL, NULL, 'add', 225, 226),
(115, 111, NULL, NULL, 'edit', 227, 228),
(116, 111, NULL, NULL, 'delete', 229, 230),
(117, 1, NULL, NULL, 'Users', 232, 259),
(118, 117, NULL, NULL, 'index', 233, 234),
(119, 117, NULL, NULL, 'print_users', 235, 236),
(120, 117, NULL, NULL, 'view', 237, 238),
(121, 117, NULL, NULL, 'add', 239, 240),
(122, 117, NULL, NULL, 'ultimo_user', 241, 242),
(123, 117, NULL, NULL, 'edit', 243, 244),
(124, 117, NULL, NULL, 'delete', 245, 246),
(125, 117, NULL, NULL, 'validate_form', 247, 248),
(126, 117, NULL, NULL, 'login', 249, 250),
(127, 117, NULL, NULL, 'logout', 251, 252),
(128, 117, NULL, NULL, 'recuperar', 253, 254),
(129, 117, NULL, NULL, 'initDB', 255, 256),
(130, 1, NULL, NULL, 'Vagas', 260, 271),
(131, 130, NULL, NULL, 'index', 261, 262),
(132, 130, NULL, NULL, 'view', 263, 264),
(133, 130, NULL, NULL, 'add', 265, 266),
(134, 130, NULL, NULL, 'edit', 267, 268),
(135, 130, NULL, NULL, 'delete', 269, 270),
(136, 1, NULL, NULL, 'AclExtras', 272, 273),
(137, 1, NULL, NULL, 'AjaxMultiUpload', 274, 285),
(138, 137, NULL, NULL, 'Uploads', 275, 284),
(139, 138, NULL, NULL, 'isAuthorized', 276, 277),
(140, 138, NULL, NULL, 'upload', 278, 279),
(141, 138, NULL, NULL, 'delete', 280, 281),
(142, 138, NULL, NULL, 'endsWith', 282, 283),
(143, 1, NULL, NULL, 'DebugKit', 286, 293),
(144, 143, NULL, NULL, 'ToolbarAccess', 287, 292),
(145, 144, NULL, NULL, 'history_state', 288, 289),
(146, 144, NULL, NULL, 'sql_explain', 290, 291),
(147, NULL, NULL, NULL, 'controllers', 295, 296),
(148, 117, NULL, NULL, 'perfil', 257, 258);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 6),
(2, NULL, 'Group', 2, NULL, 7, 12),
(3, 1, 'User', 1, NULL, 2, 3),
(4, 2, 'User', 2, NULL, 8, 9),
(16, 1, 'User', 19, NULL, 4, 5),
(17, 2, 'User', 20, NULL, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 76, '1', '1', '1', '1'),
(4, 2, 39, '1', '1', '1', '1'),
(5, 2, 127, '1', '1', '1', '1'),
(6, 1, 147, '1', '1', '1', '1'),
(7, 2, 147, '-1', '-1', '-1', '-1'),
(8, 2, 102, '1', '1', '1', '1'),
(9, 2, 97, '1', '1', '1', '1'),
(10, 2, 148, '1', '1', '1', '1'),
(11, 2, 30, '1', '1', '1', '1'),
(12, 2, 56, '1', '1', '1', '1'),
(13, 2, 50, '1', '1', '1', '1'),
(14, 2, 24, '1', '1', '1', '1'),
(15, 2, 123, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `carreiras`
--

CREATE TABLE `carreiras` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0',
  `codigo` int(11) DEFAULT NULL,
  `resolucao` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `primeiro_numero` int(11) DEFAULT NULL,
  `primeiro_artigo` int(11) DEFAULT NULL,
  `segundo_numero` int(11) DEFAULT NULL,
  `segundo_artigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carreiras`
--

INSERT INTO `carreiras` (`id`, `nome`, `tipo`, `codigo`, `resolucao`, `data`, `primeiro_numero`, `primeiro_artigo`, `segundo_numero`, `segundo_artigo`) VALUES
(1, 'Agente de ServiÃ§o', 0, 27, '12/99', '2017-12-09', 1, 34, 4, 13),
(2, 'TÃ©cnico Superior de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o N1', 0, NULL, '2/2006', '2017-07-13', 1, 34, 4, 13),
(3, 'Assistente UniversitÃ¡rio', 1, 1094, '2/92', '2017-07-15', 1, 34, 4, 13),
(4, 'TÃ©cnico superior N1', 0, 3, '12/99', NULL, 1, 4, 34, 13),
(5, 'Docente UniversitÃ¡rio', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'TÃ©cnico Profissional de AdministraÃ§Ã£o PÃºblica', 0, 12, '12/99', '2017-12-09', 3, 34, 4, 13),
(7, 'TÃ©cnico', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Assistente TÃ©cnico', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Auxiliar', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'TÃ©cnico Profissional', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Agente TÃ©cnico', 0, 16, '12/99', '2017-12-09', 1, 34, 4, 13),
(12, 'Auxiliar Administrativo', 0, 23, '12/99', '2017-12-12', 1, 34, 4, 13),
(13, 'OperÃ¡rio', 0, 16, '12/99', '2017-12-09', 1, 34, 2, 13),
(14, 'TÃ©cnico Superior de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o N2', 0, NULL, '2/2006', '2017-07-13', 1, 34, 4, 13),
(15, 'TÃ©cnico Profissional de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'TÃ©cnico Superior N2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'TÃ©cnico Superior  de AdministraÃ§Ã£o PÃºblica N1', 0, 2, '12/99', '2017-12-09', 1, 34, 4, 13),
(18, 'Carreira de testes', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carreiras_concursos`
--

CREATE TABLE `carreiras_concursos` (
  `id` int(11) NOT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  `numero_vaga` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carreiras_concursos`
--

INSERT INTO `carreiras_concursos` (`id`, `carreira_id`, `concurso_id`, `numero_vaga`) VALUES
(1, 4, 1, NULL),
(2, 8, 1, NULL),
(3, 12, 1, NULL),
(4, 17, 1, NULL),
(5, 3, 2, NULL),
(6, 5, 2, NULL),
(8, 11, 3, NULL),
(10, 2, 3, NULL),
(12, 8, 3, NULL),
(18, 17, 3, NULL),
(19, 5, 4, NULL),
(20, 3, 4, NULL),
(21, 18, 2, NULL),
(22, 18, 4, NULL),
(23, 7, 1, NULL),
(24, 9, 1, NULL),
(25, 11, 1, NULL),
(26, 13, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `carreira_id`) VALUES
(1, 'Professor Associado', 5),
(2, 'Assistente EstagiÃ¡rio', 3),
(4, 'Professor Auxiliar', 5),
(5, 'Professor CatedrÃ¡tico', 5),
(6, 'Assistente', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE `cds` (
  `id` int(11) NOT NULL,
  `cadeira` varchar(100) DEFAULT NULL,
  `funcionario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clazzes`
--

CREATE TABLE `clazzes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clazzes`
--

INSERT INTO `clazzes` (`id`, `nome`, `carreira_id`) VALUES
(1, 'A', 1),
(2, 'E', 1),
(3, 'A', 17),
(4, 'E', 17),
(5, 'B', 17),
(6, 'C', 17),
(7, 'A', 4),
(8, 'E', 4),
(9, 'B', 4),
(10, 'C', 4),
(11, 'A', 6),
(12, 'B', 6),
(13, 'C', 6),
(14, 'E', 6),
(15, 'E', 10),
(16, 'A', 10),
(17, 'B', 10),
(18, 'C', 10),
(19, 'A', 7),
(20, 'B', 7),
(21, 'C', 7),
(22, 'E', 7),
(23, 'A', 8),
(24, 'B', 8),
(25, 'C', 8),
(26, 'E', 8),
(27, 'U', 12),
(28, 'U', 13),
(29, 'U', 1),
(30, 'Ãšnica', 9),
(31, 'E', 2),
(32, 'A', 2),
(33, 'B', 2),
(34, 'C', 2),
(35, 'A', 14),
(36, 'B', 14),
(37, 'C', 14),
(38, 'E', 14),
(39, 'E', 15),
(40, 'A', 15),
(41, 'B', 15),
(42, 'C', 15),
(43, 'SDFSADF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `concursos`
--

CREATE TABLE `concursos` (
  `id` int(11) NOT NULL,
  `data_aprovacao` date DEFAULT NULL,
  `data_registo` datetime DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `delegacao_id` int(11) DEFAULT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concursos`
--

INSERT INTO `concursos` (`id`, `data_aprovacao`, `data_registo`, `nome`, `created`, `modified`, `delegacao_id`, `tipo`, `status`) VALUES
(1, '2015-08-05', NULL, 'TÃ©cnicos de recursos humanos', '2017-09-17 19:46:38', '1505725190', 1, 0, 0),
(2, '2010-02-18', NULL, 'Recrutamento de docentes de portuguÃªs', '2017-09-17 20:19:45', '1505725170', 2, 1, 0),
(3, '2017-09-01', '2017-09-17 00:00:00', 'Contratacao de guardas noturnos', '2017-09-17 20:22:46', '1505686493', 5, 0, 1),
(4, '2017-09-02', '2017-09-18 00:00:00', 'Admissao de professores catedraticos', '2017-09-18 00:07:00', '1505686448', 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ctas`
--

CREATE TABLE `ctas` (
  `id` int(11) NOT NULL,
  `funcionario_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctas`
--

INSERT INTO `ctas` (`id`, `funcionario_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `delegacaos`
--

CREATE TABLE `delegacaos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delegacaos`
--

INSERT INTO `delegacaos` (`id`, `nome`) VALUES
(1, 'UP-Sede'),
(2, 'UP-Gaza'),
(3, 'UP-Niassa'),
(4, 'UP-Quelimane'),
(5, 'UP-Nampula');

-- --------------------------------------------------------

--
-- Table structure for table `documentacaos`
--

CREATE TABLE `documentacaos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `escalaos`
--

CREATE TABLE `escalaos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `clazze_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escalaos`
--

INSERT INTO `escalaos` (`id`, `nome`, `categoria_id`, `clazze_id`) VALUES
(1, 'EscalÃ£o 1', 1, 1),
(2, 'Escalao 2', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `posicao` int(11) DEFAULT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nuit` int(9) DEFAULT NULL,
  `bi` int(13) DEFAULT NULL,
  `data_emissao` date DEFAULT NULL,
  `local_emissao` varchar(50) DEFAULT NULL,
  `contacto_pessoal` int(9) DEFAULT NULL,
  `contacto_trabalho` int(9) DEFAULT NULL,
  `contacto_alternativo` int(9) DEFAULT NULL,
  `email_pessoal` varchar(100) DEFAULT NULL,
  `email_corporativo` varchar(100) DEFAULT NULL,
  `curso` varchar(120) DEFAULT NULL,
  `especialidade` varchar(80) DEFAULT NULL,
  `ano_conclusao` date DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `clazze_id` int(11) DEFAULT NULL,
  `escalao_id` int(11) DEFAULT NULL,
  `delegacao_id` int(11) DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  `departamento_id` int(11) DEFAULT NULL,
  `tipo_ingresso_id` int(11) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'perfil_default.png',
  `created` datetime NOT NULL,
  `despacho` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `posicao`, `apelido`, `data_nascimento`, `sexo`, `nuit`, `bi`, `data_emissao`, `local_emissao`, `contacto_pessoal`, `contacto_trabalho`, `contacto_alternativo`, `email_pessoal`, `email_corporativo`, `curso`, `especialidade`, `ano_conclusao`, `carreira_id`, `categoria_id`, `clazze_id`, `escalao_id`, `delegacao_id`, `sector_id`, `departamento_id`, `tipo_ingresso_id`, `concurso_id`, `fileName`, `foto_perfil`, `created`, `despacho`) VALUES
(1, 'Jonny ', 34, 'Travolta', '1987-02-16', 'M', 111111111, NULL, NULL, NULL, 879865152, NULL, 836598745, NULL, NULL, NULL, NULL, NULL, 4, NULL, 8, 1, 1, NULL, NULL, NULL, 1, NULL, 'perfil_default.png', '2017-09-17 19:51:38', '2017-09-18'),
(2, 'Faira', 19, 'Aires', '1998-01-28', 'F', 331231, NULL, NULL, '', 845910735, 666666, 829771061, 'Faira.aires@gmail.com', 'Cossa@up.ac.mz', NULL, NULL, NULL, 8, NULL, 26, 1, 1, NULL, NULL, NULL, 1, 'human_resources.pdf', 'perfil_default.png', '2017-09-17 19:53:12', '2017-09-06'),
(3, 'Elena', 18, 'Mulungo', '1996-01-07', 'F', 23423423, NULL, NULL, NULL, 840778371, NULL, 879798565, NULL, NULL, NULL, NULL, NULL, 8, NULL, 26, 1, 1, NULL, NULL, NULL, 1, NULL, 'perfil_default.png', '2017-09-17 19:54:05', '2017-09-20'),
(4, 'Sheila Amelia', 2, 'Marques', '1984-07-02', 'F', 123456, NULL, NULL, NULL, 82625965, NULL, 85466662, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 1, NULL, NULL, NULL, 1, NULL, 'perfil_default.png', '2017-09-17 19:55:30', '2017-09-01'),
(5, 'Imelda Adelaide', 50, 'Marques', '1986-03-22', 'F', 111111, NULL, NULL, NULL, 895645123, NULL, 896547135, NULL, NULL, NULL, NULL, NULL, 8, NULL, 26, 1, 1, NULL, NULL, NULL, 1, NULL, 'perfil_default.png', '2017-09-17 20:12:10', '2017-09-18'),
(6, 'Chadia ', 22, 'Hibraimo', '1993-03-17', 'F', 1, NULL, NULL, NULL, 844860245, NULL, 333232666, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, 1, 5, NULL, NULL, NULL, 3, NULL, 'perfil_default.png', '2017-09-18 01:07:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `descricao`) VALUES
(1, 'Administradores', 'Grupo com todos privilegios do sistema'),
(2, 'Tecnicos dos recursos humanos', 'Grupo com alguns previlegios no sistema');

-- --------------------------------------------------------

--
-- Table structure for table `sectores`
--

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL,
  `designacao` varchar(100) DEFAULT NULL,
  `delegacao_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectores`
--

INSERT INTO `sectores` (`id`, `designacao`, `delegacao_id`) VALUES
(1, 'REGISTO ACADEMICO', 4),
(2, 'PATRIMONIO', 1),
(3, 'TESORARIA', 1),
(4, 'PEDAGOGICA', 1),
(5, 'DRH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_ingressos`
--

CREATE TABLE `tipo_ingressos` (
  `id` int(11) NOT NULL,
  `designacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_registo` date DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'perfil_default.png',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `apelido`, `email`, `data_de_registo`, `contacto`, `foto_perfil`, `created`, `modified`, `password`, `group_id`) VALUES
(1, 'akon', 'Samussone Marques', 'akon@gmail.com', '2017-09-12', '2348732847', 'upload/perfil_default.png', '2017-09-12 14:18:33', '2017-09-18 15:30:18', '752e814767106de069c7b9ea4481d05972e3c6a4', 1),
(2, 'usher', 'Estanislau Samussone', 'estanislaumarqeus@gmail.com', '2017-09-12', '3894732847', 'upload/perfil_default.png', '2017-09-12 14:18:52', '2017-09-20 11:56:51', '752e814767106de069c7b9ea4481d05972e3c6a4', 2),
(19, 'Estanislau', 'Marques', 'estanislau@live.com', '2017-09-15', '844871791', 'upload/perfil_default.png', '2017-09-15 09:28:49', '2017-09-15 20:40:11', 'cdee536b62e7049195b2e15b631e15fe321ba097', 1),
(20, 'Faira Aires', 'Cossa', 'faira.aires@gmail.com', '2017-09-16', '845910735', 'upload/perfil_default.png', '2017-09-16 09:49:51', '2017-09-18 15:29:18', 'f3aed192ab424e207e155d54c15fba099e3a37e2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `designacao` varchar(100) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acos_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_acos_alias` (`alias`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aros_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_aros_alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  ADD KEY `idx_aco_id` (`aco_id`);

--
-- Indexes for table `carreiras`
--
ALTER TABLE `carreiras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `carreiras_concursos`
--
ALTER TABLE `carreiras_concursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carreiras_concursos_fk_carreiras_idx` (`carreira_id`),
  ADD KEY `carreiras_concursos_fk_concursos_idx` (`concurso_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_fk_carreiras_idx` (`carreira_id`);

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `funcionario_id_UNIQUE` (`funcionario_id`);

--
-- Indexes for table `clazzes`
--
ALTER TABLE `clazzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classes_fk_carreiras_idx` (`carreira_id`);

--
-- Indexes for table `concursos`
--
ALTER TABLE `concursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_concursos_delegacaos_idx` (`delegacao_id`);

--
-- Indexes for table `ctas`
--
ALTER TABLE `ctas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `funcionario_id_UNIQUE` (`funcionario_id`),
  ADD KEY `ctas_fk_funcionarios_idx` (`funcionario_id`);

--
-- Indexes for table `delegacaos`
--
ALTER TABLE `delegacaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentacaos`
--
ALTER TABLE `documentacaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documentacao_fk_carreira_idx` (`carreira_id`),
  ADD KEY `documentacao_fk_concurso_idx` (`concurso_id`);

--
-- Indexes for table `escalaos`
--
ALTER TABLE `escalaos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escalao_fk_categoria_idx` (`categoria_id`),
  ADD KEY `escalao_fk_classe_idx` (`clazze_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funcionarios_fk_categorias_idx` (`categoria_id`),
  ADD KEY `funcionarios_fk_clazzes_idx` (`clazze_id`),
  ADD KEY `funcionarios_fk_escalaos_idx` (`escalao_id`),
  ADD KEY `funcionarios_fk_delegacaos_idx` (`delegacao_id`),
  ADD KEY `funcionarios_fk_sectores_idx` (`sector_id`),
  ADD KEY `funcionarios_fk_tipo_ingressos_idx` (`tipo_ingresso_id`),
  ADD KEY `funcionarios_fk_concursos_idx` (`concurso_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sectores_fk_delegacao_idx` (`delegacao_id`);

--
-- Indexes for table `tipo_ingressos`
--
ALTER TABLE `tipo_ingressos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_usuarios_grupos_idx` (`group_id`);

--
-- Indexes for table `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vagas_fk_concursos_idx` (`concurso_id`),
  ADD KEY `vagas_fk_carreiras_idx` (`carreira_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `carreiras`
--
ALTER TABLE `carreiras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `carreiras_concursos`
--
ALTER TABLE `carreiras_concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clazzes`
--
ALTER TABLE `clazzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ctas`
--
ALTER TABLE `ctas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `delegacaos`
--
ALTER TABLE `delegacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `documentacaos`
--
ALTER TABLE `documentacaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `escalaos`
--
ALTER TABLE `escalaos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipo_ingressos`
--
ALTER TABLE `tipo_ingressos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carreiras_concursos`
--
ALTER TABLE `carreiras_concursos`
  ADD CONSTRAINT `carreiras_concursos_fk_carreiras` FOREIGN KEY (`carreira_id`) REFERENCES `carreiras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carreiras_concursos_fk_concursos` FOREIGN KEY (`concurso_id`) REFERENCES `concursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `concursos`
--
ALTER TABLE `concursos`
  ADD CONSTRAINT `fk_concursos_1` FOREIGN KEY (`delegacao_id`) REFERENCES `delegacaos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usuarios_grupos` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
