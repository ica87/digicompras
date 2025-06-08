-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mar 16, 2010 as 09:27 AM
-- Versão do Servidor: 5.0.89
-- Versão do PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `allcred_loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cx_saidas`
--

CREATE TABLE IF NOT EXISTS `cx_saidas` (
  `codigo` int(11) NOT NULL auto_increment,
  `operador` varchar(50) default NULL,
  `cel_operador` varchar(50) default NULL,
  `email_operador` varchar(50) default NULL,
  `estabelecimento` varchar(50) default NULL,
  `cidade_estabelecimento` varchar(50) default NULL,
  `tel_estabelecimento` varchar(50) default NULL,
  `email_estabelecimento` varchar(50) default NULL,
  `dataalteracao` varchar(50) default NULL,
  `horaalteracao` varchar(50) default NULL,
  `operador_alterou` varchar(50) default NULL,
  `cel_operador_alterou` varchar(50) default NULL,
  `email_operador_alterou` varchar(50) default NULL,
  `estabelecimento_alterou` varchar(50) default NULL,
  `cidade_estabelecimento_alterou` varchar(50) default NULL,
  `tel_estabelecimento_alterou` varchar(50) default NULL,
  `email_estabelecimento_alterou` varchar(50) default NULL,
  `dia` varchar(50) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `ano` varchar(50) NOT NULL,
  `datacadastro` varchar(50) NOT NULL,
  `horacadastro` varchar(50) NOT NULL,
  `nfantasia` varchar(50) NOT NULL,
  `historico` text NOT NULL,
  `categoria_conta` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2286 ;
