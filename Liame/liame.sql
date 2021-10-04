-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Out-2021 às 21:22
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `liame`
--
CREATE DATABASE IF NOT EXISTS `liame` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `liame`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(40) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `valor_avaliacao` int(1) NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  `id_mae` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `fk_AvaliacaoMae` (`id_mae`),
  KEY `fk_AvaliacaoProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebe`
--

DROP TABLE IF EXISTS `bebe`;
CREATE TABLE IF NOT EXISTS `bebe` (
  `id_bebe` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bebe` varchar(30) NOT NULL,
  `sexo_bebe` varchar(12) NOT NULL,
  `idade_bebe` int(11) NOT NULL,
  `id_mae` int(11) DEFAULT NULL,
  `id_diario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `fk_BebeMae` (`id_mae`),
  KEY `fk_BebeDiario` (`id_diario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_profissional` int(11) NOT NULL,
  `id_mae` int(11) NOT NULL,
  `data_comentario` date NOT NULL,
  `comentario` varchar(500) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `fk_MaeComentario` (`id_mae`),
  KEY `fk_ProfissionalComentario` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario_bordo`
--

DROP TABLE IF EXISTS `diario_bordo`;
CREATE TABLE IF NOT EXISTS `diario_bordo` (
  `id_diario` int(11) NOT NULL,
  `id_mae` int(11) NOT NULL,
  `texto_diario` varchar(500) NOT NULL,
  `video_diario` varchar(200) NOT NULL,
  `imagem_diario` varchar(200) NOT NULL,
  `data_diario` date NOT NULL,
  `id_bebe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_diario`),
  KEY `fk_MaeDiario` (`id_mae`),
  KEY `fk_DiarioBebe` (`id_bebe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doencas_profissional`
--

DROP TABLE IF EXISTS `doencas_profissional`;
CREATE TABLE IF NOT EXISTS `doencas_profissional` (
  `id_doencas` int(11) NOT NULL AUTO_INCREMENT,
  `doencas_tratadas` varchar(30) NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_doencas`),
  KEY `fk_DoencasProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `cep` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_logradouro` varchar(10) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade_profissional`
--

DROP TABLE IF EXISTS `especialidade_profissional`;
CREATE TABLE IF NOT EXISTS `especialidade_profissional` (
  `id_especialidade` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade_profissional` varchar(30) NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_especialidade`),
  KEY `fk_EspecialidadeProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia_profissional`
--

DROP TABLE IF EXISTS `experiencia_profissional`;
CREATE TABLE IF NOT EXISTS `experiencia_profissional` (
  `id_experiencia` int(11) NOT NULL AUTO_INCREMENT,
  `experiencia` varchar(30) NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_experiencia`),
  KEY `fk_ExperienciaProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_profissional`
--

DROP TABLE IF EXISTS `formacao_profissional`;
CREATE TABLE IF NOT EXISTS `formacao_profissional` (
  `id_formacao` int(11) NOT NULL AUTO_INCREMENT,
  `formacao` varchar(40) NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_formacao`),
  KEY `fk_FormacaoProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mae`
--

DROP TABLE IF EXISTS `mae`;
CREATE TABLE IF NOT EXISTS `mae` (
  `id_mae` int(11) NOT NULL AUTO_INCREMENT,
  `nome_mae` varchar(40) NOT NULL,
  `apelido_mae` varchar(40) DEFAULT NULL,
  `email_mae` varchar(100) NOT NULL,
  `senha_mae` varchar(100) NOT NULL,
  `foto_perfil_mae` varchar(100) DEFAULT NULL,
  `id_bebe` int(11) DEFAULT NULL,
  `id_diario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mae`),
  KEY `fk_MaeBebe` (`id_bebe`),
  KEY `fk_MaeDiario` (`id_diario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mae`
--

INSERT INTO `mae` (`id_mae`, `nome_mae`, `apelido_mae`, `email_mae`, `senha_mae`, `foto_perfil_mae`, `id_bebe`, `id_diario`) VALUES
(1, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, NULL),
(3, 'Milena Soares', 'mlnsoares', 'milena@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

DROP TABLE IF EXISTS `plano`;
CREATE TABLE IF NOT EXISTS `plano` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `valor_plano` decimal(6,2) NOT NULL,
  `descricao_plano` varchar(30) DEFAULT NULL,
  `tempo_duracao_plano` int(2) NOT NULL,
  `nome_plano` varchar(20) NOT NULL,
  PRIMARY KEY (`id_plano`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano_profissional`
--

DROP TABLE IF EXISTS `plano_profissional`;
CREATE TABLE IF NOT EXISTS `plano_profissional` (
  `data_pagamento` date NOT NULL,
  `forma_pagamento` varchar(10) NOT NULL,
  `data_contratacao` datetime NOT NULL,
  `id_profissional` int(11) DEFAULT NULL,
  `id_plano` int(11) DEFAULT NULL,
  KEY `fk_PlanoProfissional` (`id_profissional`),
  KEY `fk_PlanoprofPlano` (`id_plano`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `id_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `nome_profissional` varchar(40) NOT NULL,
  `email_profissional` varchar(100) NOT NULL,
  `senha_profissional` varchar(100) NOT NULL,
  `foto_perfil_profissional` varchar(100) DEFAULT NULL,
  `numero_registro_profissional` varchar(20) NOT NULL,
  `numero_endereco_profissional` int(10) NOT NULL,
  `descricao_endereco_profissional` varchar(50) NOT NULL,
  `cep_profissional` int(8) NOT NULL,
  `imagens_profissional` varchar(100) DEFAULT NULL,
  `telefone_profissional` int(20) DEFAULT NULL,
  `instagram_profissional` varchar(2083) DEFAULT NULL,
  `whatsapp_profissional` varchar(2083) DEFAULT NULL,
  `telegram_profissional` varchar(2083) DEFAULT NULL,
  `facebook_profissional` varchar(2083) DEFAULT NULL,
  `youtube_profissional` varchar(2083) DEFAULT NULL,
  `linkdin_profissional` varchar(2083) DEFAULT NULL,
  `sobre_mim_profissional` varchar(500) DEFAULT NULL,
  `status_profissional` int(1) NOT NULL,
  `id_experiencia` int(11) DEFAULT NULL,
  `id_formacao` int(11) DEFAULT NULL,
  `id_doencas` int(11) DEFAULT NULL,
  `id_especialidade` int(11) DEFAULT NULL,
  `id_plano_profissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_profissional`),
  KEY `fk_ProfissionalExperiencia` (`id_experiencia`),
  KEY `fk_ProfissionalFormacao` (`id_formacao`),
  KEY `fk_ProfissionalDoencas` (`id_doencas`),
  KEY `fk_ProfissionalEspecialidade` (`id_especialidade`),
  KEY `fk_ProfissionalPlano` (`id_plano_profissional`),
  KEY `fk_ProfissionalEndereco` (`cep_profissional`),
  KEY `fk_ProfissionalSatus` (`status_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_profissional`
--

DROP TABLE IF EXISTS `status_profissional`;
CREATE TABLE IF NOT EXISTS `status_profissional` (
  `status_profissional` int(1) NOT NULL,
  `id_profissional` int(11) NOT NULL,
  KEY `fk_StatusProfissional` (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
