-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 16, 2011 as 07:54 PM
-- Versão do Servidor: 5.0.91
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `multipli_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_ao_funcionario`
--

CREATE TABLE IF NOT EXISTS `mensagens_ao_funcionario` (
  `codigo` int(11) NOT NULL auto_increment,
  `nome_operador` varchar(50) NOT NULL,
  `data_mensagem` varchar(50) NOT NULL,
  `hora_mensagem` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  `mensagem_lida` varchar(50) NOT NULL,
  `data_leitura` varchar(50) NOT NULL,
  `hora_leitura` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;
