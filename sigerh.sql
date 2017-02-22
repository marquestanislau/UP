-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 11:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigerh`
--

-- --------------------------------------------------------

--
-- Table structure for table `carreiras`
--

CREATE TABLE IF NOT EXISTS `carreiras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `carreiras`
--

INSERT INTO `carreiras` (`id`, `nome`) VALUES
(1, 'Tecnico de Saude'),
(2, 'Electricista'),
(3, 'Tecnico superior N1');

-- --------------------------------------------------------

--
-- Table structure for table `carreiras_concursos`
--

CREATE TABLE IF NOT EXISTS `carreiras_concursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carreira_id` int(11) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  `numero_vaga` int(9) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carreiras_concursos_fk_carreiras_idx` (`carreira_id`),
  KEY `carreiras_concursos_fk_concursos_idx` (`concurso_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorias_fk_carreiras_idx` (`carreira_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `carreira_id`) VALUES
(1, 'Categoria 1', 2),
(2, 'Categoria 2', 2),
(3, 'Categoria 3', 1),
(4, 'Categoria 4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cadeira` varchar(100) DEFAULT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `funcionario_id_UNIQUE` (`funcionario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`id`, `cadeira`, `funcionario_id`) VALUES
(1, 'Geografia', 2),
(2, 'Fisica Nuclear', 9),
(3, 'Linguagens formais e automatos', 10);

-- --------------------------------------------------------

--
-- Table structure for table `clazzes`
--

CREATE TABLE IF NOT EXISTS `clazzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `classes_fk_carreiras_idx` (`carreira_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clazzes`
--

INSERT INTO `clazzes` (`id`, `nome`, `carreira_id`) VALUES
(1, 'Classe number one', 3),
(2, 'Classe E', 3);

-- --------------------------------------------------------

--
-- Table structure for table `concursos`
--

CREATE TABLE IF NOT EXISTS `concursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_aprovacao` date DEFAULT NULL,
  `data_registo` datetime DEFAULT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `concursos`
--

INSERT INTO `concursos` (`id`, `data_aprovacao`, `data_registo`, `nome`) VALUES
(1, '2016-10-29', '2016-10-29 10:41:00', 'Concurso de recrutamento de tecnicos'),
(2, '2016-10-29', '2016-10-29 10:42:00', 'Recrutamento de CD'),
(3, '2016-10-29', '2016-11-02 18:12:00', 'Recrutamento de ctas'),
(4, '2016-11-14', NULL, 'novo6'),
(5, '2016-11-17', NULL, 'Novo apos habtm');

-- --------------------------------------------------------

--
-- Table structure for table `ctas`
--

CREATE TABLE IF NOT EXISTS `ctas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcionario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `funcionario_id_UNIQUE` (`funcionario_id`),
  KEY `ctas_fk_funcionarios_idx` (`funcionario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ctas`
--

INSERT INTO `ctas` (`id`, `funcionario_id`) VALUES
(9, 13);

-- --------------------------------------------------------

--
-- Table structure for table `delegacaos`
--

CREATE TABLE IF NOT EXISTS `delegacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `delegacaos`
--

INSERT INTO `delegacaos` (`id`, `nome`) VALUES
(1, 'Gaza'),
(2, 'Niassa'),
(3, 'Sofala'),
(4, 'Sede'),
(5, 'Nampula'),
(6, 'Tete'),
(7, 'Zambezia');

-- --------------------------------------------------------

--
-- Table structure for table `documentacaos`
--

CREATE TABLE IF NOT EXISTS `documentacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documentacao_fk_carreira_idx` (`carreira_id`),
  KEY `documentacao_fk_concurso_idx` (`concurso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documentacaos`
--

INSERT INTO `documentacaos` (`id`, `nome`, `carreira_id`, `concurso_id`) VALUES
(1, 'Carta de Recomendacao', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `escalaos`
--

CREATE TABLE IF NOT EXISTS `escalaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `clazze_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `escalao_fk_categoria_idx` (`categoria_id`),
  KEY `escalao_fk_classe_idx` (`clazze_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `escalaos`
--

INSERT INTO `escalaos` (`id`, `nome`, `categoria_id`, `clazze_id`) VALUES
(1, 'Escalao 1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
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
  `ano_conclusao` datetime DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  KEY `funcionarios_fk_categorias_idx` (`categoria_id`),
  KEY `funcionarios_fk_clazzes_idx` (`clazze_id`),
  KEY `funcionarios_fk_escalaos_idx` (`escalao_id`),
  KEY `funcionarios_fk_delegacaos_idx` (`delegacao_id`),
  KEY `funcionarios_fk_sectores_idx` (`sector_id`),
  KEY `funcionarios_fk_tipo_ingressos_idx` (`tipo_ingresso_id`),
  KEY `funcionarios_fk_concursos_idx` (`concurso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `apelido`, `data_nascimento`, `sexo`, `nuit`, `bi`, `data_emissao`, `local_emissao`, `contacto_pessoal`, `contacto_trabalho`, `contacto_alternativo`, `email_pessoal`, `email_corporativo`, `curso`, `especialidade`, `ano_conclusao`, `carreira_id`, `categoria_id`, `clazze_id`, `escalao_id`, `delegacao_id`, `sector_id`, `departamento_id`, `tipo_ingresso_id`, `concurso_id`, `created`) VALUES
(13, 'Estanislau ', 'Marques', NULL, 'M', NULL, NULL, NULL, NULL, 844871791, NULL, 829771061, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-11-15 20:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(100) DEFAULT NULL,
  `delegacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sectores_fk_delegacao_idx` (`delegacao_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_ingressos`
--

CREATE TABLE IF NOT EXISTS `tipo_ingressos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `data_de_registo` date DEFAULT NULL,
  `contacto` varchar(255) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT 'perfil_default.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `apelido`, `email`, `data_de_registo`, `contacto`, `foto_perfil`) VALUES
(11, 'Estanislau', 'Marques', 'estanislau@live.com', '2016-11-15', '844871791', 'upload/WP_20151122_12_33_17_Selfie (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vagas`
--

CREATE TABLE IF NOT EXISTS `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacao` varchar(100) DEFAULT NULL,
  `concurso_id` int(11) DEFAULT NULL,
  `carreira_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vagas_fk_concursos_idx` (`concurso_id`),
  KEY `vagas_fk_carreiras_idx` (`carreira_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carreiras_concursos`
--
ALTER TABLE `carreiras_concursos`
  ADD CONSTRAINT `carreiras_concursos_fk_carreiras` FOREIGN KEY (`carreira_id`) REFERENCES `carreiras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `carreiras_concursos_fk_concursos` FOREIGN KEY (`concurso_id`) REFERENCES `concursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
