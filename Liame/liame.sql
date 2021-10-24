-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Out-2021 às 23:42
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
  `id_adm` int(6) NOT NULL,
  `nome_adm` varchar(50) DEFAULT NULL,
  `email_adm` varchar(150) DEFAULT NULL,
  `senha_adm` varchar(40) DEFAULT NULL,
  `fk_avaliacao_id_avaliacao` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_adm`),
  KEY `FK_adm_2` (`fk_avaliacao_id_avaliacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ativacao`
--

DROP TABLE IF EXISTS `ativacao`;
CREATE TABLE IF NOT EXISTS `ativacao` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_adm_id_adm` int(6) DEFAULT NULL,
  KEY `FK_ativacao_1` (`fk_profissional_id_profissional`),
  KEY `FK_ativacao_2` (`fk_adm_id_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `id_avaliacao` int(6) NOT NULL,
  `valor_avaliacao` char(1) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `id_mae` int(6) DEFAULT NULL,
  `comentario_avaliacao` text,
  `data_comentario` datetime DEFAULT NULL,
  `fk_mae_id_mae` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_avaliacao`),
  KEY `FK_avaliacao_2` (`fk_mae_id_mae`),
  KEY `FK_avaliacao_3` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebe`
--

DROP TABLE IF EXISTS `bebe`;
CREATE TABLE IF NOT EXISTS `bebe` (
  `id_bebe` int(6) NOT NULL,
  `nome_bebe` varchar(50) DEFAULT NULL,
  `sexo_bebe` varchar(20) DEFAULT NULL,
  `idade_bebe` varchar(20) DEFAULT NULL,
  `id_mae` int(6) DEFAULT NULL,
  `id_diario` int(6) DEFAULT NULL,
  `fk_mae_id_mae` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `FK_bebe_2` (`fk_mae_id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contem`
--

DROP TABLE IF EXISTS `contem`;
CREATE TABLE IF NOT EXISTS `contem` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_experiencia_profissional_id_experiencia` int(6) DEFAULT NULL,
  KEY `FK_contem_1` (`fk_profissional_id_profissional`),
  KEY `FK_contem_2` (`fk_experiencia_profissional_id_experiencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario_brodo`
--

DROP TABLE IF EXISTS `diario_brodo`;
CREATE TABLE IF NOT EXISTS `diario_brodo` (
  `id_diario` int(6) NOT NULL,
  `id_mae` int(6) DEFAULT NULL,
  `id_bebe` int(6) DEFAULT NULL,
  `fk_mae_id_mae` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_diario`),
  KEY `FK_diario_brodo_2` (`fk_mae_id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doencas_profissional`
--

DROP TABLE IF EXISTS `doencas_profissional`;
CREATE TABLE IF NOT EXISTS `doencas_profissional` (
  `id_doencas` int(6) NOT NULL,
  `doencas_profissional` varchar(255) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_doencas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_profissional`
--

DROP TABLE IF EXISTS `endereco_profissional`;
CREATE TABLE IF NOT EXISTS `endereco_profissional` (
  `cep` char(8) NOT NULL,
  `tipo_logradouro` varchar(15) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade_profissional`
--

DROP TABLE IF EXISTS `especialidade_profissional`;
CREATE TABLE IF NOT EXISTS `especialidade_profissional` (
  `id_especialidade` int(6) NOT NULL,
  `especialidade_profissional` varchar(255) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especializa_`
--

DROP TABLE IF EXISTS `especializa_`;
CREATE TABLE IF NOT EXISTS `especializa_` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_especialidade_profissional_id_especialidade` int(6) DEFAULT NULL,
  KEY `FK_especializa__1` (`fk_profissional_id_profissional`),
  KEY `FK_especializa__2` (`fk_especialidade_profissional_id_especialidade`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia_profissional`
--

DROP TABLE IF EXISTS `experiencia_profissional`;
CREATE TABLE IF NOT EXISTS `experiencia_profissional` (
  `id_experiencia` int(6) NOT NULL,
  `experiencia_profissional` varchar(255) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_experiencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_profissional`
--

DROP TABLE IF EXISTS `formacao_profissional`;
CREATE TABLE IF NOT EXISTS `formacao_profissional` (
  `id_formacao` int(6) NOT NULL,
  `formacao_profissional` varchar(255) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_formacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria_imagem_profissional`
--

DROP TABLE IF EXISTS `galeria_imagem_profissional`;
CREATE TABLE IF NOT EXISTS `galeria_imagem_profissional` (
  `id_imagem_galeria` int(6) NOT NULL,
  `imagem_galeria_profissional` varchar(40) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_imagem_galeria`),
  KEY `FK_galeria_imagem_profissional_2` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mae`
--

DROP TABLE IF EXISTS `mae`;
CREATE TABLE IF NOT EXISTS `mae` (
  `id_mae` int(6) NOT NULL,
  `nome_mae` varchar(50) DEFAULT NULL,
  `apelido_mae` varchar(20) DEFAULT NULL,
  `email_mae` varchar(150) DEFAULT NULL,
  `senha_mae` varchar(40) DEFAULT NULL,
  `foto_perfil_mae` varchar(40) DEFAULT NULL,
  `id_bebe` int(6) DEFAULT NULL,
  `id_diario` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `possui`
--

DROP TABLE IF EXISTS `possui`;
CREATE TABLE IF NOT EXISTS `possui` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_formacao_profissional_id_formacao` int(6) DEFAULT NULL,
  KEY `FK_possui_1` (`fk_profissional_id_profissional`),
  KEY `FK_possui_2` (`fk_formacao_profissional_id_formacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `nome_profissional` varchar(50) DEFAULT NULL,
  `email_profissional` varchar(150) DEFAULT NULL,
  `senha_profissional` varchar(40) DEFAULT NULL,
  `foto_perfil_profissional` varchar(40) DEFAULT NULL,
  `numero_endereco_profissional` varchar(5) DEFAULT NULL,
  `descricao_endereco_profissional` varchar(100) DEFAULT NULL,
  `cep_profissional` char(8) DEFAULT NULL,
  `sobre_mim_profissional` varchar(255) DEFAULT NULL,
  `status_profissional` char(1) DEFAULT NULL,
  `id_experiencia` int(6) DEFAULT NULL,
  `id_formacao` int(6) DEFAULT NULL,
  `id_doencas` int(6) DEFAULT NULL,
  `id_especialidade` int(6) DEFAULT NULL,
  `id_profissional` int(6) NOT NULL,
  `numero_registro_profissional` varchar(10) DEFAULT NULL,
  `id_rede_social` int(6) DEFAULT NULL,
  `id_telefone` int(6) DEFAULT NULL,
  `id_imagem_galeria` int(6) DEFAULT NULL,
  `fk_endereco_profissional_cep` char(8) DEFAULT NULL,
  PRIMARY KEY (`id_profissional`),
  KEY `FK_profissional_2` (`fk_endereco_profissional_cep`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede_social_profissional`
--

DROP TABLE IF EXISTS `rede_social_profissional`;
CREATE TABLE IF NOT EXISTS `rede_social_profissional` (
  `id_rede_social` int(6) NOT NULL,
  `youtube_profissional` varchar(11) DEFAULT NULL,
  `whatsapp_profissional` varchar(255) DEFAULT NULL,
  `instagram_profissional` varchar(20) DEFAULT NULL,
  `linkedin_profissional` varchar(100) DEFAULT NULL,
  `facebook_profissional` varchar(255) DEFAULT NULL,
  `telegram_profissional` varchar(16) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_rede_social`),
  KEY `FK_rede_social_profissional_2` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_diario`
--

DROP TABLE IF EXISTS `registro_diario`;
CREATE TABLE IF NOT EXISTS `registro_diario` (
  `id_registro_diario` int(6) NOT NULL,
  `texto_diario` text,
  `imagem_diario` varchar(40) DEFAULT NULL,
  `video_diario` varchar(40) DEFAULT NULL,
  `data_hora_registro_diario` datetime DEFAULT NULL,
  `id_diario` int(6) DEFAULT NULL,
  `fk_diario_brodo_id_diario` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_registro_diario`),
  KEY `FK_registro_diario_2` (`fk_diario_brodo_id_diario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_profissional`
--

DROP TABLE IF EXISTS `telefone_profissional`;
CREATE TABLE IF NOT EXISTS `telefone_profissional` (
  `id_telefone` int(6) NOT NULL,
  `ddd_telefone_profissional` char(2) DEFAULT NULL,
  `numero_telefone_profissional` char(9) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `FK_telefone_profissional_2` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trata`
--

DROP TABLE IF EXISTS `trata`;
CREATE TABLE IF NOT EXISTS `trata` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_doencas_profissional_id_doencas` int(6) DEFAULT NULL,
  KEY `FK_trata_1` (`fk_profissional_id_profissional`),
  KEY `FK_trata_2` (`fk_doencas_profissional_id_doencas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
