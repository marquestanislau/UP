-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 10:09 AM
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
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carreiras`
--

INSERT INTO `carreiras` (`id`, `nome`, `tipo`) VALUES
(1, 'Agente de ServiÃ§o', 0),
(2, 'TÃ©cnico Superior de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o N1', 0),
(3, 'Assistente UniversitÃ¡rio', 1),
(4, 'TÃ©cnico superior N1', 0),
(5, 'Docente UniversitÃ¡rio', 1),
(6, 'TÃ©cnico Profissional de AdministraÃ§Ã£o PÃºblica', 0),
(7, 'TÃ©cnico', 0),
(8, 'Assistente TÃ©cnico', 0),
(9, 'Auxiliar', 0),
(10, 'TÃ©cnico Profissional', 0),
(11, 'Agente TÃ©cnico', 0),
(12, 'Auxiliar Administrativo', 0),
(13, 'OperÃ¡rio', 0),
(14, 'TÃ©cnico Superior de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o N2', 0),
(15, 'TÃ©cnico Profissional de Tecnologias de InformaÃ§Ã£o e ComunicaÃ§Ã£o', 0),
(16, 'TÃ©cnico Superior N2', 0),
(17, 'TÃ©cnico Superior  de AdministraÃ§Ã£o PÃºblica N1', 0),
(18, 'Carreira de testes', 1);

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
(10, 12, 6, NULL),
(11, 2, 6, NULL);

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
(7, 'MMA', 12),
(8, 'Futebol', 14),
(9, 'FUTEBOL', 15),
(10, 'sdfasdfasd', 16),
(11, 'sdfgfsdgsdfgs', 17),
(12, 'dgsgsdfgsd', 18),
(13, '85fhfjsdhfjkasdfsgsdfggsgsdfasfasf', 19),
(14, 'asdfgdsfgdfgsd', 20),
(15, 'dgsdhhtyjfhdfgh', 21);

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
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `concursos`
--

INSERT INTO `concursos` (`id`, `data_aprovacao`, `data_registo`, `nome`, `created`, `modified`, `delegacao_id`, `tipo`) VALUES
(5, '2017-07-01', NULL, 'Recrutamento de Docentes para cursos de ensino a distÃ¢ncia', '2017-07-31 22:49:52', '1501659126', NULL, 1),
(6, '2017-07-04', '2017-07-31 00:00:00', 'RECRUTAMENTO DE FORMADORES PARA O PROJECTO UM PAIS CAPAZ', '2017-07-31 22:50:12', '1501535660', 4, 0);

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
(56, 11),
(57, 13);

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
(1, 'Escalao 1', 1, 1),
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
  `created` datetime NOT NULL,
  `despacho` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `posicao`, `apelido`, `data_nascimento`, `sexo`, `nuit`, `bi`, `data_emissao`, `local_emissao`, `contacto_pessoal`, `contacto_trabalho`, `contacto_alternativo`, `email_pessoal`, `email_corporativo`, `curso`, `especialidade`, `ano_conclusao`, `carreira_id`, `categoria_id`, `clazze_id`, `escalao_id`, `delegacao_id`, `sector_id`, `departamento_id`, `tipo_ingresso_id`, `concurso_id`, `created`, `despacho`) VALUES
(11, 'Floyd ', 49, 'Mayweather', '1977-08-15', 'M', 1, NULL, NULL, NULL, 2147483647, NULL, 2147483647, NULL, NULL, NULL, NULL, NULL, 2, NULL, 31, 1, 4, NULL, NULL, NULL, 6, '2017-08-01 13:03:40', NULL),
(12, 'Connor', 15, 'Macgreggor', '1991-08-08', 'M', 1, NULL, NULL, NULL, 11312131, NULL, 2147483647, 'connor@gmail.com', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 13:04:59', NULL),
(13, 'Yolanda Joana Tomas', 45, 'Boaventura', '2017-08-02', 'F', 345345435, NULL, NULL, '', 34234234, NULL, 4234234, '', '', NULL, NULL, NULL, 12, NULL, 27, 1, 4, NULL, NULL, NULL, 6, '2017-08-01 13:21:34', '2017-08-01'),
(14, 'Leonel', 9, 'Messi', '2017-08-31', 'M', 1, NULL, NULL, NULL, 2147483647, NULL, 454545454, 'messi@gmail.com', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 14:24:57', NULL),
(15, 'Cristiano', 9, 'Ronaldo', '2017-08-29', 'M', 123456, NULL, NULL, NULL, 23434234, NULL, 23423423, 'cristiano@mail.com', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 16:22:23', '2017-08-01'),
(16, 'sdfsdf', 3443, 'asdfasdf', '2017-08-23', 'M', 1, NULL, NULL, NULL, 4234234, NULL, 2423423, 'sdfas@fgsdfasd.dfgasf', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 16:27:11', NULL),
(17, 'fasfasfasdf', 567567, 'sadfasfasdf', '2017-08-29', 'M', 1, NULL, NULL, NULL, 234234, NULL, 234234, 'sdfsadf@dfgsdfh.dgdsfg', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 16:29:44', NULL),
(18, 'asfasfas', 565, 'sadfasdfasdf', '2017-08-29', 'F', 1, NULL, NULL, NULL, 467547547, NULL, 34776457, 'sdfas@ghsdgd.gfhsdfg', NULL, NULL, NULL, NULL, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 16:31:15', NULL),
(19, 'fjsfjaskjfaskfj', 909, '48437fjsaj', '2017-08-01', 'M', 456456546, NULL, NULL, NULL, 2147483647, NULL, 98983948, 'sfjask@jkdjsfdslj.com', NULL, NULL, NULL, NULL, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2017-08-01 16:32:39', '2017-08-01'),
(20, 'Safsdfasd', 3434, 'asdfasdfas', '2007-08-07', 'M', 2147483647, NULL, NULL, '', 2342342, NULL, 234524234, 'dfgsdf@dfgdfg.dgdfg', '', NULL, NULL, NULL, 3, 2, 1, NULL, 1, NULL, NULL, NULL, 5, '2017-08-01 18:08:41', '2017-08-01'),
(21, 'Estanislau Marques ', 34534, 'ertwetertewr', '2017-08-22', 'F', 2147483647, NULL, NULL, '', 2147483647, NULL, 5345345, 'estanislau@live.com', 'estanislau@live.com', NULL, NULL, NULL, 5, 4, 1, 1, 1, NULL, NULL, NULL, 5, '2017-08-01 18:10:48', '2017-08-01');

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
(1, 'fsfsadfa', 'asdfsfa', 'dfsdf@gfgdf.gfdg', '2017-08-02', '4535345435', 'perfil_default.png', '2017-08-02 09:08:58', '2017-08-02 09:08:58'),
(2, 'aflsdlfjasjf', 'fjskfjaskfj', 'kjkflsj@fladfjsdl.cojfasf', '2017-08-02', 'jfskfjsakjfksajfkasfjas', 'perfil_default.png', '2017-08-02 09:12:12', '2017-08-02 09:12:12'),
(6, 'fsggsdgdsfg', 'sdfgsdg', 'dsfgsdfgds@dgdfgdfg.hfghfgh', '2017-08-02', '234234234', 'perfil_default.png', '2017-08-02 09:12:49', '2017-08-02 09:12:49');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `clazzes`
--
ALTER TABLE `clazzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ctas`
--
ALTER TABLE `ctas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
