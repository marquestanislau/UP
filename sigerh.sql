-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2017 at 09:11 AM
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
(8, 3, 5, NULL),
(9, 5, 5, NULL),
(12, 3, 7, NULL),
(13, 5, 7, NULL),
(14, 18, 7, NULL),
(15, 1, 8, NULL),
(17, 4, 8, NULL),
(18, 6, 8, NULL),
(19, 7, 8, NULL),
(20, 8, 8, NULL),
(21, 9, 8, NULL),
(22, 10, 8, NULL),
(23, 11, 8, NULL),
(24, 12, 8, NULL),
(25, 13, 8, NULL),
(26, 14, 8, NULL),
(27, 15, 8, NULL),
(28, 16, 8, NULL),
(29, 17, 8, NULL),
(30, 6, 9, NULL),
(31, 7, 9, NULL),
(32, 4, 10, NULL),
(33, 6, 10, NULL),
(34, 12, 10, NULL),
(35, 13, 10, NULL),
(36, 14, 10, NULL),
(37, 17, 10, NULL),
(40, 6, 6, NULL),
(41, 1, 6, NULL),
(42, 2, 6, NULL),
(43, 4, 6, NULL),
(44, 7, 6, NULL),
(45, 8, 6, NULL),
(46, 9, 6, NULL),
(47, 10, 6, NULL),
(48, 11, 6, NULL),
(49, 12, 6, NULL),
(50, 14, 6, NULL),
(51, 18, 5, NULL),
(52, 2, 9, NULL),
(53, 13, 9, NULL),
(54, 10, 9, NULL),
(55, 17, 9, NULL);

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

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`id`, `cadeira`, `funcionario_id`) VALUES
(16, 'Programacao Web', 22),
(17, 'Psicologia infantil II', 23),
(18, 'Ed. Fisica', 44);

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
(5, '2017-07-01', NULL, 'Recrutamento de Docentes para cursos de ensino a distÃ¢ncia', '2017-07-31 22:49:52', '1503046788', 1, 1, 1),
(6, '2017-07-04', NULL, 'RECRUTAMENTO DE FORMADORES PARA O PROJECTO UM PAIS CAPAZ', '2017-07-31 22:50:12', '1503044305', 4, 0, 0),
(7, '2017-08-05', '2017-08-03 00:00:00', 'Json test for graph', '2017-08-03 13:34:08', '1501761575', 5, 1, 1),
(8, '1997-08-04', '2017-08-03 00:00:00', 'Maior numero de carreiras', '2017-08-03 14:04:41', '1501781672', 3, 0, 1),
(9, '2017-08-05', NULL, 'Capacitacao de docentes Licenciados', '2017-08-04 17:09:43', '1502743259', 1, 0, 1),
(10, '2017-08-05', NULL, 'Apenas para ver se o grafico se reajusta automaticamente', '2017-08-08 16:15:11', '1503043818', 4, 0, 0);

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
(58, 24),
(59, 25),
(60, 26),
(61, 27),
(62, 28),
(63, 29),
(64, 30),
(65, 31),
(66, 32),
(67, 33),
(68, 34),
(69, 35),
(70, 36),
(71, 37),
(72, 38),
(73, 39),
(74, 40),
(75, 41),
(76, 42),
(77, 43),
(78, 45),
(79, 46),
(80, 47),
(81, 48),
(82, 49),
(83, 50),
(84, 51),
(85, 52),
(86, 53),
(87, 54),
(88, 55),
(89, 56);

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
(5, 'www');

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
(22, 'Estanislau Samussone', 9, 'Marques', '2007-08-01', 'M', 2147483647, 484848484, '2017-08-30', 'Xai-Xai', 2147483647, NULL, 829771061, 'estanislau@live.com', '', NULL, NULL, NULL, 5, 4, NULL, 1, 2, NULL, NULL, NULL, 5, 'arrayProcessor.png', 'perfil_default.png', '2017-08-02 22:52:22', '2017-08-16'),
(23, 'Elena Joao Tembe', 26, 'Mulungo', '2017-08-29', 'F', 2147483647, NULL, NULL, '', 840778371, NULL, 848484848, 'elena@gmail.com', '', NULL, NULL, NULL, 3, 2, NULL, 1, 3, NULL, NULL, NULL, 5, 'cisco_ccna_2.pdf', 'perfil_default.png', '2017-08-02 22:53:32', '2017-08-16'),
(24, 'Faira Aires', 3, 'Cossa', '2017-08-28', 'F', 575675754, 2147483647, '2017-08-05', 'Maputo', 845910735, NULL, 824564566, 'faira.aires@gmail.com', '', NULL, NULL, NULL, 2, NULL, 31, 1, 4, NULL, NULL, NULL, 6, 'CiscoCertificate.pdf', 'perfil_default.png', '2017-08-02 22:54:29', NULL),
(25, 'Felipe Elias', 34, 'Chitofo', '2008-08-06', 'M', 2147483647, NULL, NULL, NULL, 2147483647, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 6, NULL, NULL, '2017-08-03 11:00:49', '2017-08-16'),
(26, 'Deny edgar', 89, 'Cumaio', '2017-08-10', 'M', 1, NULL, NULL, NULL, 23423423, NULL, 24234234, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 6, NULL, NULL, '2017-08-03 11:01:20', NULL),
(27, 'Leticia Elias', 32, 'Chitofo', '2017-08-26', 'F', 2147483647, NULL, NULL, NULL, 2344234, NULL, 8968768, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 6, 'cisco_ccna_2.pdf', NULL, '2017-08-03 11:02:09', NULL),
(28, 'Nome do participante', 45, 'Apelido dele', '1989-01-10', 'M', 51515151, NULL, NULL, NULL, 7645634, NULL, 45345223, NULL, NULL, NULL, NULL, NULL, 14, NULL, 38, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-04 08:54:52', NULL),
(29, 'HHHH oj', 78, 'OOOO oj', '1977-12-20', 'F', 1, NULL, NULL, NULL, 6786756, NULL, 6546456, NULL, NULL, NULL, NULL, NULL, 14, NULL, 38, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-04 08:55:44', NULL),
(30, 'tytytytyieiei', 90, 'Tyyysafskfkjfasf', '1992-05-11', 'M', 1, NULL, NULL, NULL, 13123123, NULL, 12321312, NULL, NULL, NULL, NULL, NULL, 13, NULL, 28, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-04 08:56:23', NULL),
(31, 'asdfkjaskfjaskfj', 78, 'kajfkasjfakjf', '2017-08-29', 'M', 1, NULL, NULL, NULL, 324234324, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:07:57', NULL),
(32, 'asdfasfasdfsdaf', 34, 'fasdfasfasf', '2017-08-21', 'M', 1, NULL, NULL, NULL, 233456456, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:08:12', NULL),
(33, 'asfdasfsdfsdfasd', 45, 'asfsdfdfgfgf', '2017-08-28', 'F', 1, NULL, NULL, NULL, 567567567, NULL, 567567657, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:08:24', NULL),
(34, 'ipopiopiop', 23, 'qewqeqw', '2017-08-10', 'F', 1, NULL, NULL, NULL, 2147483647, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 1, NULL, 2, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:08:45', NULL),
(35, 'jkkasjdfkasjfkj', 899, 'jkasfksjafkjaskfj', '2017-08-02', 'M', 1, NULL, NULL, NULL, 34435, NULL, 93495809, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:10:29', NULL),
(36, 'jkkasjdfkasjfkj', 899, 'jkasfksjafkjaskfj', '2017-08-02', 'M', 1, NULL, NULL, NULL, 34435, NULL, 93495809, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:10:44', NULL),
(37, 'jkkasjdfkasjfkj', 899, 'jkasfksjafkjaskfj', '2017-08-02', 'M', 1, NULL, NULL, NULL, 34435, NULL, 93495809, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:10:48', NULL),
(38, 'asdfasfasf', 3, 'sdfsdf', '2017-08-22', 'M', 1, NULL, NULL, NULL, 23432234, NULL, 234234, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:11:08', NULL),
(39, 'sdfasfasf', 33, 'asfasdfasf', '2017-08-01', 'M', 1, NULL, NULL, NULL, 567657, NULL, 5676576, NULL, NULL, NULL, NULL, NULL, 13, NULL, 28, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:11:29', NULL),
(40, 'popop', 9, 'opopop', '2009-08-04', 'F', 1, NULL, NULL, NULL, 234234, NULL, 23424, NULL, NULL, NULL, NULL, NULL, 13, NULL, 28, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-05 13:11:50', NULL),
(41, 'Amelia Samussone', 59, 'Juvane', '1958-01-16', 'F', 1, NULL, NULL, NULL, 2147483647, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 6, NULL, 14, 1, 1, NULL, NULL, NULL, 9, NULL, NULL, '2017-08-07 19:33:46', NULL),
(42, 'Deolinda Samussone Juvane', 65, 'Nhumaio', '1945-01-01', 'F', 1, NULL, NULL, NULL, 231321321, NULL, 454654564, NULL, NULL, NULL, NULL, NULL, 6, NULL, 14, 1, 1, NULL, NULL, NULL, 9, NULL, NULL, '2017-08-07 19:34:42', NULL),
(43, 'Dirty Situation', 78, 'Mohambe', '2017-08-01', 'M', 2147483647, NULL, NULL, '', 234234, NULL, 42424, '', '', NULL, NULL, NULL, 7, NULL, 22, 1, 1, NULL, NULL, NULL, 9, 'Pre_projecto-rh0002.pdf', NULL, '2017-08-07 19:35:49', '2017-08-07'),
(44, 'Marques', 3, 'Samussone', '2017-08-29', 'M', 2147483647, NULL, NULL, NULL, 423423423, NULL, 23423423, 'exemplo@exem.com', NULL, NULL, NULL, NULL, 18, 0, NULL, 1, 5, NULL, NULL, NULL, 7, NULL, NULL, '2017-08-07 21:25:55', NULL),
(45, 'Joao ', 34, 'Paulo', '2017-08-27', 'M', 1, NULL, NULL, NULL, 234234234, NULL, 342342323, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 10, NULL, NULL, '2017-08-11 09:05:01', NULL),
(46, 'Artur', 67, 'Macamo', '2017-08-02', 'M', 1, NULL, NULL, NULL, 353453, NULL, 345345, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 10, NULL, NULL, '2017-08-11 09:05:30', NULL),
(47, 'Maria', 56, 'Madalena', '2008-08-01', 'F', 1, NULL, NULL, NULL, 7857657, NULL, 5675675, NULL, NULL, NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 10, NULL, NULL, '2017-08-11 09:06:01', NULL),
(48, 'Uraneo', 90, 'Manhjane', '2011-08-03', 'M', 1, NULL, NULL, NULL, 4564564, NULL, 456456, NULL, NULL, NULL, NULL, NULL, 8, NULL, 26, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:07:14', NULL),
(49, 'Felix ', 67, 'Singo', '1987-02-10', 'M', 1, NULL, NULL, NULL, 45645, NULL, 456456, NULL, NULL, NULL, NULL, NULL, 8, NULL, 26, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:07:40', NULL),
(50, 'gsdfasfsa', 445, 'fsdfasf', '2017-08-28', 'M', 1, NULL, NULL, NULL, 34534545, NULL, 345345435, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:08:50', NULL),
(51, 'Estanislau', 4, '3454353', '2017-08-21', 'M', 1, NULL, NULL, NULL, 2147483647, NULL, 43534534, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:09:11', NULL),
(52, 'erwerwerwe', 24234, 'rwerwer', '2017-08-09', 'F', 1, NULL, NULL, NULL, 23423423, NULL, 234234234, NULL, NULL, NULL, NULL, NULL, 13, NULL, 28, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:09:37', NULL),
(53, 'qeqeqwewq', 45, 'vxcvcxvxc', '2017-08-09', 'M', 1, NULL, NULL, NULL, 7567567, NULL, 567567, NULL, NULL, NULL, NULL, NULL, 13, NULL, 28, 1, 3, NULL, NULL, NULL, 8, NULL, NULL, '2017-08-11 09:09:56', NULL),
(54, 'gfgdsdfsdfsda', 34534, 'fsafsdfsdf', '2017-08-17', 'M', 1, NULL, NULL, NULL, 34534543, NULL, 43534534, NULL, NULL, NULL, NULL, NULL, 6, NULL, 14, 1, 4, NULL, NULL, NULL, 6, NULL, NULL, '2017-08-11 09:11:02', NULL),
(55, 'WTWERTEWRT', 5, 'ETERTRTRT', '2017-08-15', 'M', 1, NULL, NULL, NULL, 2147483647, NULL, 345345435, NULL, NULL, NULL, NULL, NULL, 6, NULL, 14, 1, 4, NULL, NULL, NULL, 6, NULL, NULL, '2017-08-11 09:11:22', NULL),
(56, 'PUOPIOPI', 4564, 'IOPIOP', '2017-08-09', 'M', 1, NULL, NULL, NULL, 645645645, NULL, 456456456, NULL, NULL, NULL, NULL, NULL, 6, NULL, 14, 1, 4, NULL, NULL, NULL, 6, NULL, NULL, '2017-08-11 09:11:35', NULL);

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
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_registo` date DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'perfil_default.png',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `email`, `data_de_registo`, `contacto`, `foto_perfil`, `created`, `modified`) VALUES
(1, 'User1', 'Surname1', 'dfsdf@gfgdf.gfdg', '2017-08-02', '4535345435', 'perfil_default.png', '2017-08-02 09:08:58', '2017-08-02 22:48:23'),
(2, 'aflsdlfjasjf', 'fjskfjaskfj', 'kjkflsj@fladfjsdl.cojfasf', '2017-08-02', 'jfskfjsakjfksajfkasfjas', 'perfil_default.png', '2017-08-02 09:12:12', '2017-08-08 10:34:13'),
(6, 'Messias', 'sdfgsdg', 'langa@messias.com', '2017-08-02', '234234234', 'perfil_default.png', '2017-08-02 09:12:49', '2017-08-10 20:58:13'),
(7, 'Lalau', 'Konvict', 'estanislau@live.com', '2017-08-03', '4878475837', 'perfil_default.png', '2017-08-03 08:50:16', '2017-08-14 22:44:25');

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
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `carreiras`
--
ALTER TABLE `carreiras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `carreiras_concursos`
--
ALTER TABLE `carreiras_concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `clazzes`
--
ALTER TABLE `clazzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ctas`
--
ALTER TABLE `ctas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
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
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
