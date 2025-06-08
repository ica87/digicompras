-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 22/06/2012 às 07h01min
-- Versão do Servidor: 5.1.63
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
-- Estrutura da tabela `categorias_despesas`
--

CREATE TABLE IF NOT EXISTS `categorias_despesas` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

--
-- Extraindo dados da tabela `categorias_despesas`
--

INSERT INTO `categorias_despesas` (`codigo`, `categoria`) VALUES
(260, 'COMISSOES S VENDAS'),
(259, 'MARKETING E PROPAGANDA'),
(258, 'DESPESAS ADMINISTRATIVAS'),
(257, 'DESPESAS FOLHA E ENCARGOS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
