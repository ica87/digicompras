-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mar 09, 2010 as 08:49 PM
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
-- Estrutura da tabela `propostas`
--

CREATE TABLE IF NOT EXISTS `propostas` (
  `num_proposta` int(11) NOT NULL auto_increment,
  `nome_operador` varchar(50) default NULL,
  `tipo` varchar(50) default NULL,
  `estabelecimento_proposta` varchar(50) default NULL,
  `nome` varchar(50) default NULL,
  `sexo` varchar(50) default NULL,
  `estadocivil` varchar(50) default NULL,
  `cpf` varchar(50) default NULL,
  `rg` varchar(50) default NULL,
  `orgao` varchar(50) default NULL,
  `emissao` varchar(50) default NULL,
  `data_nasc` varchar(50) default NULL,
  `pai` varchar(50) default NULL,
  `mae` varchar(50) default NULL,
  `endereco` varchar(50) default NULL,
  `numero` varchar(50) default NULL,
  `bairro` varchar(50) default NULL,
  `complemento` varchar(50) default NULL,
  `cidade` varchar(50) default NULL,
  `estado` varchar(50) default NULL,
  `cep` varchar(50) default NULL,
  `telefone` varchar(50) default NULL,
  `celular` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `num_beneficio` varchar(50) default NULL,
  `valor_credito` varchar(50) default NULL,
  `quant_parc` varchar(50) default NULL,
  `parcela` varchar(50) default NULL,
  `banco_pagto` varchar(50) default NULL,
  `num_banco` varchar(50) default NULL,
  `agencia` varchar(50) default NULL,
  `conta` varchar(50) default NULL,
  `operador` varchar(50) default NULL,
  `cel_operador` varchar(50) default NULL,
  `email_operador` varchar(50) default NULL,
  `estabelecimento` varchar(50) default NULL,
  `cidade_estabelecimento` varchar(50) default NULL,
  `tel_estabelecimento` varchar(50) default NULL,
  `email_estabelecimento` varchar(50) default NULL,
  `obs` text,
  `dataproposta` varchar(50) default NULL,
  `horaproposta` varchar(50) default NULL,
  `dataalteracao` varchar(50) default NULL,
  `horaalteracao` varchar(50) default NULL,
  `operador_alterou` varchar(50) default NULL,
  `cel_operador_alterou` varchar(50) default NULL,
  `email_operador_alterou` varchar(50) default NULL,
  `estabelecimento_alterou` varchar(50) default NULL,
  `cidade_estabelecimento_alterou` varchar(50) default NULL,
  `tel_estabelecimento_alterou` varchar(50) default NULL,
  `email_estabelecimento_alterou` varchar(50) default NULL,
  `status` varchar(50) default NULL,
  `parc1` varchar(50) default NULL,
  `banco1` varchar(50) default NULL,
  `vencto1` varchar(50) default NULL,
  `compra1` varchar(50) default NULL,
  `parc2` varchar(50) default NULL,
  `banco2` varchar(50) default NULL,
  `vencto2` varchar(50) default NULL,
  `compra2` varchar(50) default NULL,
  `parc3` varchar(50) default NULL,
  `banco3` varchar(50) default NULL,
  `vencto3` varchar(50) default NULL,
  `compra3` varchar(50) default NULL,
  `parc4` varchar(50) default NULL,
  `banco4` varchar(50) default NULL,
  `vencto4` varchar(50) default NULL,
  `compra4` varchar(50) default NULL,
  `parc5` varchar(50) default NULL,
  `banco5` varchar(50) default NULL,
  `vencto5` varchar(50) default NULL,
  `compra5` varchar(50) default NULL,
  `parc6` varchar(50) default NULL,
  `banco6` varchar(50) default NULL,
  `vencto6` varchar(50) default NULL,
  `compra6` varchar(50) default NULL,
  `parc7` varchar(50) default NULL,
  `banco7` varchar(50) default NULL,
  `vencto7` varchar(50) default NULL,
  `compra7` varchar(50) default NULL,
  `num_beneficio2` varchar(50) default NULL,
  `num_beneficio3` varchar(50) default NULL,
  `num_beneficio4` varchar(50) default NULL,
  `tipo_proposta` varchar(50) default NULL,
  `mes_ano` varchar(50) default NULL,
  `retorno` varchar(50) default NULL,
  `bco_operacao` varchar(50) default NULL,
  `valor_a_receber` varchar(50) default NULL,
  `recebido` varchar(50) default NULL,
  `data_recebimento` varchar(50) default NULL,
  `quoeficiente` text,
  `hora_baixa` varchar(50) default NULL,
  `valor_comissao_corres` varchar(50) default NULL,
  `pago_comissao_corres` varchar(50) default NULL,
  `data_pagto_comissao_corres` varchar(50) default NULL,
  `quoeficiente_corres` varchar(50) default NULL,
  `hora_baixa_comissao_corres` varchar(50) default NULL,
  `valor_liberado` varchar(50) default NULL,
  `tipo_capital` varchar(50) default NULL,
  `mes_ano_status` varchar(50) default NULL,
  `percentual_op` varchar(50) default NULL,
  `comissao_op` varchar(50) default NULL,
  `obs2` text NOT NULL,
  PRIMARY KEY  (`num_proposta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3528 ;
