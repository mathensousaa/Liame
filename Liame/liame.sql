-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Ago-2021 às 20:01
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
  `sobrenome_adm` varchar(40) NOT NULL,
  `email_adm` varchar(100) NOT NULL,
  `senha_adm` varchar(100) NOT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mae`
--

DROP TABLE IF EXISTS `mae`;
CREATE TABLE IF NOT EXISTS `mae` (
  `id_mae` int(11) NOT NULL AUTO_INCREMENT,
  `nome_mae` varchar(40) NOT NULL,
  `sobrenome_mae` varchar(40) NOT NULL,
  `apelido_mae` varchar(40) DEFAULT NULL,
  `email_mae` varchar(100) NOT NULL,
  `senha_mae` varchar(100) NOT NULL,
  `foto_perfil_mae` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_mae`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `plano`
--

DROP TABLE IF EXISTS `plano`;
CREATE TABLE IF NOT EXISTS `plano` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `valor_plano` decimal(6,2) NOT NULL,
  `tipo_plano` varchar(40) NOT NULL,
  `data_venciamento_plano` datetime NOT NULL,
  `data_pagamento_plano` date NOT NULL,
  `forma_pagamento` varchar(40) NOT NULL,
  PRIMARY KEY (`id_plano`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

DROP TABLE IF EXISTS `profissional`;
CREATE TABLE IF NOT EXISTS `profissional` (
  `id_profissional` int(11) NOT NULL AUTO_INCREMENT,
  `nome_profissional` varchar(40) NOT NULL,
  `sobrenome_profissional` varchar(40) NOT NULL,
  `email_profissional` varchar(100) NOT NULL,
  `senha_profissional` varchar(100) NOT NULL,
  `foto_perfil_profissional` varchar(100) DEFAULT NULL,
  `numero_registro_profissional` varchar(20) NOT NULL,
  `servico_profissional` varchar(100) NOT NULL,
  `logradouro_profissional` varchar(100) NOT NULL,
  `numero_endereco_profissional` int(10) NOT NULL,
  `bairro_profissional` varchar(50) NOT NULL,
  `cidade_profissional` varchar(50) NOT NULL,
  `estado_profissional` varchar(50) NOT NULL,
  `cep_profissional` int(8) NOT NULL,
  `imagens_profissional` varchar(100) DEFAULT NULL,
  `videos_profissional` varchar(100) DEFAULT NULL,
  `experiencia_profissional` varchar(500) DEFAULT NULL,
  `telefone_profissional` int(20) DEFAULT NULL,
  `instagram_profissional` varchar(2083) DEFAULT NULL,
  `whatsapp_profissional` varchar(2083) DEFAULT NULL,
  `telegram_profissional` varchar(2083) DEFAULT NULL,
  `facebook_profissional` varchar(2083) DEFAULT NULL,
  `youtube_profissional` varchar(2083) DEFAULT NULL,
  `linkdin_profissional` varchar(2083) DEFAULT NULL,
  `sobre_mim_profissional` varchar(500) DEFAULT NULL,
  `doencas_profissional` varchar(500) DEFAULT NULL,
  `formacao_profissional` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_profissional`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
