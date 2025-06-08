-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 31/05/2012 às 05h53min
-- Versão do Servidor: 5.1.62
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `nipoflex_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `borderos`
--

CREATE TABLE IF NOT EXISTS `borderos` (
  `num_bordero` int(11) NOT NULL AUTO_INCREMENT,
  `loja` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `operador` varchar(50) DEFAULT NULL,
  `dataabertura` varchar(50) DEFAULT NULL,
  `horaabertura` varchar(50) DEFAULT NULL,
  `diaabertura` varchar(50) DEFAULT NULL,
  `mesabertura` varchar(50) DEFAULT NULL,
  `anoabertura` varchar(50) DEFAULT NULL,
  `datafechamento` varchar(50) DEFAULT NULL,
  `horafechamento` varchar(50) DEFAULT NULL,
  `diafechamento` varchar(50) DEFAULT NULL,
  `mesfechamento` varchar(50) DEFAULT NULL,
  `anofechamento` varchar(50) DEFAULT NULL,
  `recebimento` varchar(50) DEFAULT NULL,
  `datarecebimento` varchar(50) DEFAULT NULL,
  `horarecebimento` varchar(50) DEFAULT NULL,
  `diarecebimento` varchar(50) DEFAULT NULL,
  `mesrecebimento` varchar(50) DEFAULT NULL,
  `anorecebimento` varchar(50) DEFAULT NULL,
  `obs` text,
  `operador_recebeu` varchar(50) DEFAULT NULL,
  `cel_operador_recebeu` varchar(50) DEFAULT NULL,
  `email_operador_recebeu` varchar(50) DEFAULT NULL,
  `estabelecimento_recebeu` varchar(50) DEFAULT NULL,
  `cidade_estabelecimento_recebeu` varchar(50) DEFAULT NULL,
  `tel_estabelecimento_recebeu` varchar(50) DEFAULT NULL,
  `email_estabelecimento_recebeu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`num_bordero`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
