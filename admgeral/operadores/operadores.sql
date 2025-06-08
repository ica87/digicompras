-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Fev 16, 2011 as 07:53 PM
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
-- Estrutura da tabela `operadores`
--

CREATE TABLE IF NOT EXISTS `operadores` (
  `codigo` int(11) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(50) default NULL,
  `estadocivil` varchar(50) default NULL,
  `cpf` varchar(50) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `orgao` varchar(50) NOT NULL,
  `emissao` varchar(50) NOT NULL,
  `data_nasc` varchar(50) NOT NULL,
  `pai` varchar(50) NOT NULL,
  `mae` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) default NULL,
  `cep` varchar(50) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `email` varchar(50) default NULL,
  `operador` varchar(50) default NULL,
  `cel_operador` varchar(50) default NULL,
  `email_operador` varchar(50) default NULL,
  `estabelecimento` varchar(50) default NULL,
  `cidade_estabelecimento` varchar(50) default NULL,
  `tel_estabelecimento` varchar(50) default NULL,
  `email_estabelecimento` varchar(50) default NULL,
  `obs` text,
  `datacadastro` varchar(50) default NULL,
  `horacadastro` varchar(50) default NULL,
  `dataalteracao` varchar(50) default NULL,
  `horaalteracao` varchar(50) default NULL,
  `operador_alterou` varchar(50) default NULL,
  `cel_operador_alterou` varchar(50) default NULL,
  `email_operador_alterou` varchar(50) default NULL,
  `estabelecimento_alterou` varchar(50) default NULL,
  `cidade_estabelecimento_alterou` varchar(50) default NULL,
  `tel_estabelecimento_alterou` varchar(50) default NULL,
  `email_estabelecimento_alterou` varchar(50) default NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `tipo_op` varchar(50) default NULL,
  `funcao` varchar(50) default NULL,
  `estab_pertence` varchar(100) default NULL,
  `cidade_estab_pertence` varchar(100) default NULL,
  `tel_estab_pertence` varchar(100) default NULL,
  `email_estab_pertence` varchar(100) default NULL,
  `classe` varchar(50) NOT NULL,
  `meta` varchar(50) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `banco` varchar(50) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `conta` varchar(50) NOT NULL,
  `meta_cp` varchar(50) default NULL,
  `meta_cpcdc` varchar(50) default NULL,
  `meta_veiculos` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;
