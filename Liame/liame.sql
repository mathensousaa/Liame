-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Nov-2021 às 15:03
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
  `id_adm` int(6) NOT NULL AUTO_INCREMENT,
  `nome_adm` varchar(100) DEFAULT NULL,
  `email_adm` varchar(100) DEFAULT NULL,
  `senha_adm` varchar(32) DEFAULT NULL,
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
  `id_avaliacao` int(6) NOT NULL AUTO_INCREMENT,
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
  `id_bebe` int(6) NOT NULL AUTO_INCREMENT,
  `nome_bebe` varchar(100) DEFAULT NULL,
  `sexo_bebe` varchar(15) DEFAULT NULL,
  `idade_bebe` varchar(15) DEFAULT NULL,
  `id_mae` int(6) DEFAULT NULL,
  `id_diario_crianca` int(6) DEFAULT NULL,
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
-- Estrutura da tabela `diario_bordo_crianca`
--

DROP TABLE IF EXISTS `diario_bordo_crianca`;
CREATE TABLE IF NOT EXISTS `diario_bordo_crianca` (
  `id_diario_crianca` int(6) NOT NULL AUTO_INCREMENT,
  `id_mae` int(6) DEFAULT NULL,
  `id_bebe` int(6) DEFAULT NULL,
  `fk_mae_id_mae` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_diario_crianca`),
  KEY `FK_diarioi_bordo_crianca_2` (`fk_mae_id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diario_brodo_gestacao`
--

DROP TABLE IF EXISTS `diario_brodo_gestacao`;
CREATE TABLE IF NOT EXISTS `diario_brodo_gestacao` (
  `id_diario_gestacao` int(6) NOT NULL AUTO_INCREMENT,
  `id_mae` int(6) DEFAULT NULL,
  `id_bebe` int(6) DEFAULT NULL,
  `fk_mae_id_mae` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_diario_gestacao`),
  KEY `FK_diario_brodo_gestacao_2` (`fk_mae_id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_profissional`
--

DROP TABLE IF EXISTS `endereco_profissional`;
CREATE TABLE IF NOT EXISTS `endereco_profissional` (
  `cep` varchar(8) DEFAULT NULL,
  `tipo_logradouro` varchar(15) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `numero_endereco` varchar(6) DEFAULT NULL,
  `descricao_endereco` varchar(250) DEFAULT NULL,
  `id_endereco` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_endereco`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

DROP TABLE IF EXISTS `especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade` (
  `id_especialidade` int(6) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(20) NOT NULL,
  PRIMARY KEY (`id_especialidade`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`id_especialidade`, `especialidade`) VALUES
(1, 'Anestesista'),
(2, 'Dermatologista'),
(3, 'Doula'),
(4, 'Enfermeira obstetra\r'),
(5, 'Fisioterapeuta'),
(6, 'Ginecologista'),
(7, 'Imunologista'),
(8, 'Mastologista'),
(9, 'Medicina fetal'),
(10, 'Nutricionista'),
(11, 'Obstetra'),
(12, 'Pediatra'),
(13, 'Psicólogo'),
(14, 'Psiquiatra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade_profissional_especialidade`
--

DROP TABLE IF EXISTS `especialidade_profissional_especialidade`;
CREATE TABLE IF NOT EXISTS `especialidade_profissional_especialidade` (
  `id_especialidade_profissional` int(6) NOT NULL AUTO_INCREMENT,
  `numero_registro_profissional` varchar(20) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `id_especialidade` int(6) NOT NULL,
  `especialidade` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_especialidade_profissional`,`id_especialidade`),
  KEY `fk_especialidade_profissional_especialidade` (`id_profissional`),
  KEY `fk_especialidade_profissional` (`id_especialidade`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especializa`
--

DROP TABLE IF EXISTS `especializa`;
CREATE TABLE IF NOT EXISTS `especializa` (
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  `fk_especialidade_profissional_especialidade_profissional` int(6) DEFAULT NULL,
  KEY `FK_especializa_1` (`fk_profissional_id_profissional`),
  KEY `FK_especializa_2` (`fk_especialidade_profissional_especialidade_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL,
  `estado` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `estado`, `uf`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amazonas', 'AM'),
(4, 'Amapá', 'AP'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Minas Gerais', 'MG'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Mato Grosso', 'MT'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Pernambuco', 'PE'),
(17, 'Piauí', 'PI'),
(18, 'Paraná', 'PR'),
(19, 'Rio de Janeiro', 'RJ'),
(20, 'Rio Grande do Norte', 'RN'),
(21, 'Rondônia', 'RO'),
(22, 'Roraima', 'RR'),
(23, 'Rio Grande do Sul', 'RS'),
(24, 'Santa Catarina', 'SC'),
(25, 'Sergipe', 'SE'),
(26, 'São Paulo', 'SP'),
(27, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `experiencia_profissional`
--

DROP TABLE IF EXISTS `experiencia_profissional`;
CREATE TABLE IF NOT EXISTS `experiencia_profissional` (
  `id_experiencia` int(6) NOT NULL AUTO_INCREMENT,
  `experiencia_profissional` varchar(250) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_experiencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao_profissional`
--

DROP TABLE IF EXISTS `formacao_profissional`;
CREATE TABLE IF NOT EXISTS `formacao_profissional` (
  `id_formacao` int(6) NOT NULL AUTO_INCREMENT,
  `formacao_profissional` varchar(250) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_formacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria_imagem_profissional`
--

DROP TABLE IF EXISTS `galeria_imagem_profissional`;
CREATE TABLE IF NOT EXISTS `galeria_imagem_profissional` (
  `id_imagem_galeria` int(6) NOT NULL AUTO_INCREMENT,
  `imagem_galeria_profissional` varchar(32) DEFAULT NULL,
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
  `id_mae` int(6) NOT NULL AUTO_INCREMENT,
  `nome_mae` varchar(100) DEFAULT NULL,
  `email_mae` varchar(100) DEFAULT NULL,
  `senha_mae` varchar(32) DEFAULT NULL,
  `foto_perfil_mae` varchar(32) DEFAULT NULL,
  `id_bebe` int(6) DEFAULT NULL,
  `id_diario_gestacao` int(6) DEFAULT NULL,
  `id_diario_crianca` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_mae`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mae`
--

INSERT INTO `mae` (`id_mae`, `nome_mae`, `email_mae`, `senha_mae`, `foto_perfil_mae`, `id_bebe`, `id_diario_gestacao`, `id_diario_crianca`) VALUES
(1, 'Agatha Amaral', 'agatha.amaral@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(2, 'Vanessa Ramario', 'vanessa.ramario@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(3, 'Jessica Santos', 'jessica.santos@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(4, 'Gloria Damasco', 'gloria.damasco@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(5, 'Domingas Osvaldo', 'domingas.osvaldo@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL);

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
  `nome_profissional` varchar(100) DEFAULT NULL,
  `email_profissional` varchar(100) DEFAULT NULL,
  `senha_profissional` varchar(32) DEFAULT NULL,
  `foto_perfil_profissional` varchar(32) DEFAULT NULL,
  `sobre_mim_profissional` varchar(255) DEFAULT NULL,
  `status_profissional` char(1) DEFAULT NULL,
  `id_experiencia` int(6) DEFAULT NULL,
  `id_formacao` int(6) DEFAULT NULL,
  `id_especialidade_profissional` int(6) DEFAULT NULL,
  `id_profissional` int(6) NOT NULL AUTO_INCREMENT,
  `id_rede_social` int(6) DEFAULT NULL,
  `id_telefone` int(6) DEFAULT NULL,
  `id_imagem_galeria` int(6) DEFAULT NULL,
  `id_endereco` int(6) DEFAULT NULL,
  `fk_endereco_profissional_id_endereco` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_profissional`),
  KEY `FK_profissional_2` (`fk_endereco_profissional_id_endereco`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`nome_profissional`, `email_profissional`, `senha_profissional`, `foto_perfil_profissional`, `sobre_mim_profissional`, `status_profissional`, `id_experiencia`, `id_formacao`, `id_especialidade_profissional`, `id_profissional`, `id_rede_social`, `id_telefone`, `id_imagem_galeria`, `id_endereco`, `fk_endereco_profissional_id_endereco`) VALUES
('Carlos Alberto', 'carlos.alberto@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL),
('Amanda Barbosa', 'amanda.barbosa@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL),
('Derick Domingues', 'derick.domingues@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL),
('Sophia Ribeiro', 'sophia.ribeiro@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL),
('Roberto Santana', 'roberto.santana@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede_social_profissional`
--

DROP TABLE IF EXISTS `rede_social_profissional`;
CREATE TABLE IF NOT EXISTS `rede_social_profissional` (
  `id_rede_social` int(6) NOT NULL AUTO_INCREMENT,
  `youtube_profissional` varchar(11) DEFAULT NULL,
  `whatsapp_profissional` varchar(255) DEFAULT NULL,
  `instagram_profissional` varchar(20) DEFAULT NULL,
  `linkedin_profissional` varchar(100) DEFAULT NULL,
  `facebook_profissional` varchar(255) DEFAULT NULL,
  `telegram_profissional` varchar(11) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_rede_social`),
  KEY `FK_rede_social_profissional_2` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_diario_crianca`
--

DROP TABLE IF EXISTS `registro_diario_crianca`;
CREATE TABLE IF NOT EXISTS `registro_diario_crianca` (
  `id_registro_diario_crianca` int(6) NOT NULL AUTO_INCREMENT,
  `texto_diario_crianca` text,
  `imagem_diario_crianca` varchar(32) DEFAULT NULL,
  `video_diario_crianca` varchar(32) DEFAULT NULL,
  `data_hora_diario_crianca` datetime DEFAULT NULL,
  `id_diario_crianca` int(6) DEFAULT NULL,
  `fk_diarioi_bordo_crianca_id_diario_crianca` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_registro_diario_crianca`),
  KEY `FK_registro_diario_crianca_2` (`fk_diarioi_bordo_crianca_id_diario_crianca`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_diario_gestacao`
--

DROP TABLE IF EXISTS `registro_diario_gestacao`;
CREATE TABLE IF NOT EXISTS `registro_diario_gestacao` (
  `id_registro_diario_gestcao` int(6) NOT NULL AUTO_INCREMENT,
  `texto_diario_gestacao` text,
  `imagem_diario_gestacao` varchar(32) DEFAULT NULL,
  `video_diario_gestacao` varchar(32) DEFAULT NULL,
  `data_hora_registro_diario_gestacao` datetime DEFAULT NULL,
  `id_diario_gestacao` int(6) DEFAULT NULL,
  `fk_diario_brodo_gestacao_id_diario_gestacao` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_registro_diario_gestcao`),
  KEY `FK_registro_diario_gestacao_2` (`fk_diario_brodo_gestacao_id_diario_gestacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_profissional`
--

DROP TABLE IF EXISTS `telefone_profissional`;
CREATE TABLE IF NOT EXISTS `telefone_profissional` (
  `id_telefone` int(6) NOT NULL AUTO_INCREMENT,
  `ddd_telefone_profissional` char(2) DEFAULT NULL,
  `numero_telefone_profissional` char(9) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  `fk_profissional_id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `FK_telefone_profissional_2` (`fk_profissional_id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
