-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 10-Dez-2021 às 20:34
-- Versão do servidor: 10.4.13-MariaDB
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
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `nome_adm`, `email_adm`, `senha_adm`) VALUES
(1, 'Milena Soares', 'soares@gmail.com', '1b52a583020088fad8cc06fd0e67910e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bebe`
--

DROP TABLE IF EXISTS `bebe`;
CREATE TABLE IF NOT EXISTS `bebe` (
  `id_bebe` int(6) NOT NULL AUTO_INCREMENT,
  `nome_bebe` varchar(100) DEFAULT NULL,
  `id_mae` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_bebe`),
  KEY `id_mae` (`id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_profissional`
--

DROP TABLE IF EXISTS `endereco_profissional`;
CREATE TABLE IF NOT EXISTS `endereco_profissional` (
  `cep` varchar(8) DEFAULT NULL,
  `id_tipo_logradouro` varchar(15) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `cidade` varchar(250) NOT NULL,
  `id_estado` char(2) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `numero_endereco` varchar(6) DEFAULT NULL,
  `descricao_endereco` varchar(250) DEFAULT NULL,
  `id_endereco` int(6) NOT NULL AUTO_INCREMENT,
  `id_profissional` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `id_tipo_logradouro` (`id_tipo_logradouro`),
  KEY `id_estado` (`id_estado`),
  KEY `id_profissional` (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco_profissional`
--

INSERT INTO `endereco_profissional` (`cep`, `id_tipo_logradouro`, `logradouro`, `cidade`, `id_estado`, `bairro`, `numero_endereco`, `descricao_endereco`, `id_endereco`, `id_profissional`) VALUES
('07500000', '7', 'Manuel Fernadno Sales', '', '1', 'Jardim Eldorado', '20', '', 1, 0),
('07500000', '10', 'Professora Ana Maria', '', '20', 'Vila Amelia', '30', '', 2, 0),
('04582115', '9', 'Manuel Fernadno Sales', '', '7', 'Jardim Eldorado', '820', '', 3, 0),
('14578965', '8', 'Damasco Ferreira', '', '1', 'Vila Guilherme', '5045', '', 4, 0),
('07500000', '17', 'rua maestro avelino', 'santa isabel', '26', '13 de maio', '330', 'consultoria roxo', 5, 3),
('07500000', '17', 'rua maestro avelino', 'santa isabel', '26', '13 de maio', '330', 'consultoria roxo', 6, 3),
('', '', '', '', '', '', '', '', 7, 3),
('07500000', '14', 'da colina', 'santa isabel', '17', 'recanto do ceu', '125', 'consultoria roxo', 8, 3),
('07500000', '14', 'da colina', 'santa isabel', '17', 'recanto do ceu', '125', 'consultoria roxo', 9, 3),
('', '', '', '', '', '', '', '', 10, 3);

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
-- Estrutura da tabela `especialidade_profissional`
--

DROP TABLE IF EXISTS `especialidade_profissional`;
CREATE TABLE IF NOT EXISTS `especialidade_profissional` (
  `id_especialidade_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `numero_registro_profissional` varchar(20) NOT NULL,
  `id_especialidade` int(11) NOT NULL,
  `id_profissional` int(11) NOT NULL,
  PRIMARY KEY (`id_especialidade_profissional`),
  KEY `id_especialidade` (`id_especialidade`),
  KEY `id_profissional` (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade_profissional`
--

INSERT INTO `especialidade_profissional` (`id_especialidade_profissional`, `numero_registro_profissional`, `id_especialidade`, `id_profissional`) VALUES
(1, '1856-7', 5, 2),
(2, '4598-5', 6, 3),
(3, '1257-9', 1, 1),
(4, '45879-6', 1, 4),
(5, '45678-9', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(75) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`, `uf`) VALUES
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
  PRIMARY KEY (`id_mae`),
  KEY `id_bebe` (`id_bebe`),
  KEY `id_diario_gestacao` (`id_diario_gestacao`),
  KEY `id_diario_crianca` (`id_diario_crianca`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mae`
--

INSERT INTO `mae` (`id_mae`, `nome_mae`, `email_mae`, `senha_mae`, `foto_perfil_mae`, `id_bebe`, `id_diario_gestacao`, `id_diario_crianca`) VALUES
(1, 'Agatha Amaral', 'agatha.amaral@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(2, 'Vanessa Ramario', 'vanessa.ramario@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(3, 'Jessica Santos', 'jessica.santos@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(4, 'Gloria Damasco', 'gloria.damasco@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(5, 'Domingas Osvaldo', 'domingas.osvaldo@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(8, 'Rosemeire Soares', 'rosemeire@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL),
(9, 'ola', 'ola@ola.com', 'c4efd5020cb49b9d3257ffa0fbccc0ae', NULL, NULL, NULL, NULL);

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
  `id_profissional` int(6) NOT NULL AUTO_INCREMENT,
  `documentacao_validacao_profissional` varchar(32) DEFAULT NULL,
  `status_validacao_profissional` int(1) NOT NULL,
  PRIMARY KEY (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`nome_profissional`, `email_profissional`, `senha_profissional`, `foto_perfil_profissional`, `id_profissional`, `documentacao_validacao_profissional`, `status_validacao_profissional`) VALUES
('Carlos Alberto', 'carlos.alberto@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 1, '', 1),
('Amanda Barbosa', 'amanda.barbosa@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 2, '', 1),
('Derick Domingues', 'derick.domingues@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'a3191a2370ef1c116436dd77c5efddfd', 3, '', 1),
('Sophia Ribeiro', 'sophia.ribeiro@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 4, '', 1),
('Roberto Santana', 'roberto.santana@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, 5, '', 1),
('lolo', 'lolo@gmail.com', 'd6581d542c7eaf801284f084478b5fcc', NULL, 10, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rede_social_profissional`
--

DROP TABLE IF EXISTS `rede_social_profissional`;
CREATE TABLE IF NOT EXISTS `rede_social_profissional` (
  `id_rede_social` int(6) NOT NULL AUTO_INCREMENT,
  `youtube_profissional` varchar(255) DEFAULT NULL,
  `whatsapp_profissional` varchar(255) DEFAULT NULL,
  `instagram_profissional` varchar(255) DEFAULT NULL,
  `linkedin_profissional` varchar(100) DEFAULT NULL,
  `facebook_profissional` varchar(255) DEFAULT NULL,
  `telegram_profissional` varchar(255) DEFAULT NULL,
  `id_profissional` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_rede_social`),
  KEY `id_profissional` (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rede_social_profissional`
--

INSERT INTO `rede_social_profissional` (`id_rede_social`, `youtube_profissional`, `whatsapp_profissional`, `instagram_profissional`, `linkedin_profissional`, `facebook_profissional`, `telegram_profissional`, `id_profissional`) VALUES
(1, 'dr. derick', '11943217889', '@drderick', 'dr. derick', 'dr. derick', 'dr.derick', 3),
(2, 'dr. derick', '11943217889', '@drderick', 'dr. derick', 'dr. derick', 'dr.derick', 3),
(3, '', '', '', '', '', '', 3),
(4, 'dr. derick', '11943217889', '@drderick', 'dr. derick', 'dr. derick', 'dr.derick', 3),
(5, 'dr. derick', '11943217889', '@drderick', 'dr. derick', 'dr. derick', 'dr.derick', 3),
(6, '', '', '', '', '', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_diario`
--

DROP TABLE IF EXISTS `registro_diario`;
CREATE TABLE IF NOT EXISTS `registro_diario` (
  `id_registro_diario_gestacao` int(6) NOT NULL AUTO_INCREMENT,
  `titulo_diario_gestacao` varchar(250) NOT NULL,
  `texto_diario_gestacao` text DEFAULT NULL,
  `data_hora_diario_gestacao` datetime NOT NULL,
  `id_mae` int(11) NOT NULL,
  PRIMARY KEY (`id_registro_diario_gestacao`),
  KEY `id_mae` (`id_mae`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registro_diario`
--

INSERT INTO `registro_diario` (`id_registro_diario_gestacao`, `titulo_diario_gestacao`, `texto_diario_gestacao`, `data_hora_diario_gestacao`, `id_mae`) VALUES
(1, '', '<p>Meu filho&nbsp;</p>', '2021-12-07 14:23:06', 0),
(2, '', '<p>Meu filho&nbsp;</p>', '2021-12-07 14:24:25', 0),
(3, '', '<p>Meu filho&nbsp;</p>', '2021-12-07 14:25:03', 0),
(4, '', '<p>Meu filho&nbsp;</p>', '2021-12-07 14:26:06', 0),
(5, '', '<p>hoje eu chorei</p>', '2021-12-07 14:27:59', 0),
(6, '', '<p>dasdnasdnajdsa</p>', '2021-12-07 14:50:05', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone_profissional`
--

DROP TABLE IF EXISTS `telefone_profissional`;
CREATE TABLE IF NOT EXISTS `telefone_profissional` (
  `id_telefone` int(6) NOT NULL AUTO_INCREMENT,
  `ddd_telefone_profissional` char(2) DEFAULT NULL,
  `numero_telefone_profissional` char(9) DEFAULT NULL,
  `id_profissional` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `id_profissional` (`id_profissional`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone_profissional`
--

INSERT INTO `telefone_profissional` (`id_telefone`, `ddd_telefone_profissional`, `numero_telefone_profissional`, `id_profissional`) VALUES
(1, '11', '3125-6584', 0),
(2, '12', '4568-6589', 0),
(3, '11', '46578909', 3),
(4, '11', '46578909', 3),
(5, '', '', 3),
(6, '11', '46578909', 3),
(7, '11', '46578909', 3),
(8, '', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_logradouro`
--

DROP TABLE IF EXISTS `tipo_logradouro`;
CREATE TABLE IF NOT EXISTS `tipo_logradouro` (
  `id_tipo_logradouro` int(11) NOT NULL,
  `tipo_logradouro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_logradouro`
--

INSERT INTO `tipo_logradouro` (`id_tipo_logradouro`, `tipo_logradouro`) VALUES
(1, 'aeroporto'),
(2, 'alameda'),
(3, 'área'),
(4, 'avenida'),
(5, 'campo'),
(6, 'chácara'),
(7, 'colônia'),
(8, 'condomínio'),
(9, 'conjunto'),
(10, 'distrito'),
(11, 'esplanada'),
(12, 'estação'),
(13, 'estrada'),
(14, 'favela'),
(15, 'fazenda'),
(16, 'feira'),
(17, 'jardim'),
(18, 'ladeira'),
(19, 'lago'),
(20, 'lagoa'),
(21, 'largo'),
(22, 'loteamento'),
(23, 'morro'),
(24, 'núcleo'),
(25, 'parque'),
(26, 'passarela'),
(27, 'pátio'),
(28, 'praça'),
(29, 'quadra'),
(30, 'recanto'),
(31, 'residencial'),
(32, 'rodovia'),
(33, 'rua'),
(34, 'setor'),
(35, 'sítio'),
(36, 'travessa'),
(37, 'trecho'),
(38, 'trevo'),
(39, 'vale'),
(40, 'vereda'),
(41, 'via'),
(42, 'viaduto'),
(43, 'viela'),
(44, 'vila');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
