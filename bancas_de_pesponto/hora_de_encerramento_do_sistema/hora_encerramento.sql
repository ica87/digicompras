-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Mai 28, 2010 as 03:24 PM
-- Versão do Servidor: 5.0.90
-- Versão do PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `dc_demo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_encerramento`
--

CREATE TABLE IF NOT EXISTS `hora_encerramento` (
  `codigo` int(11) NOT NULL auto_increment,
  `dia` varchar(50) NOT NULL,
  `horas_inicio` varchar(2) NOT NULL,
  `minutos_inicio` varchar(2) NOT NULL,
  `segundos_inicio` varchar(2) NOT NULL,
  `horas_termino` varchar(2) NOT NULL,
  `minutos_termino` varchar(2) NOT NULL,
  `segundos_termino` varchar(2) NOT NULL,
  PRIMARY KEY  (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `hora_encerramento`
--

INSERT INTO `hora_encerramento` (`codigo`, `dia`, `horas_inicio`, `minutos_inicio`, `segundos_inicio`, `horas_termino`, `minutos_termino`, `segundos_termino`) VALUES
(8, 'Sabado', '08', '00', '00', '12', '30', '00'),
(2, 'Domingo', '00', '00', '00', '00', '00', '01'),
(3, 'Segunda', '06', '50', '00', '18', '00', '00'),
(4, 'Terça', '06', '50', '00', '18', '00', '00'),
(5, 'Quarta', '06', '50', '00', '18', '00', '00'),
(6, 'Quinta', '06', '50', '00', '18', '00', '00'),
(7, 'Sexta', '06', '50', '00', '18', '00', '00');
