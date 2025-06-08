-- Estrutura da tabela `a_empresa`
--

CREATE TABLE IF NOT EXISTS `a_empresa` (
  `codigo` int(11) NOT NULL,
  `texto` text,
  UNIQUE KEY `codigo` (`codigo`),
  FULLTEXT KEY `texto` (`texto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `a_empresa`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `background`
--

CREATE TABLE IF NOT EXISTS `background` (
  `codigo` int(11) NOT NULL,
  `imagem` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `background`
--

INSERT INTO `background` (`codigo`, `imagem`) VALUES
(0, 'nuvens.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `background_topo`
--

CREATE TABLE IF NOT EXISTS `background_topo` (
  `codigo` int(11) NOT NULL,
  `imagem` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `background_topo`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `b_lat_esq`
--

CREATE TABLE IF NOT EXISTS `b_lat_esq` (
  `codigo` int(11) NOT NULL,
  `barra_lat_esq` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `b_lat_esq`
--

INSERT INTO `b_lat_esq` (`codigo`, `barra_lat_esq`) VALUES
(0, 'FFFFFF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `b_sup`
--

CREATE TABLE IF NOT EXISTS `b_sup` (
  `codigo` int(11) NOT NULL,
  `barra_superior` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `b_sup`
--

INSERT INTO `b_sup` (`codigo`, `barra_superior`) VALUES
(0, '000080');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `codigo` int(11) NOT NULL auto_increment,
  `categoria` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Extraindo dados da tabela `categorias`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo` int(11) NOT NULL auto_increment,
  `razaosocial` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `nfantasia` varchar(50) NOT NULL,
  `inscr_est` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comprador` varchar(50) NOT NULL,
  `fone` varchar(50) NOT NULL,
  `fax` varchar(50) default NULL,
  `celular` varchar(50) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `condpagto` varchar(50) NOT NULL,
  `modopagto` varchar(50) NOT NULL,
  `transportadora` varchar(50) default NULL,
  `redespacho` varchar(50) default NULL,
  `endereco_cob` varchar(50) default NULL,
  `numero_cob` varchar(50) default NULL,
  `bairro_cob` varchar(50) default NULL,
  `cidade_cob` varchar(50) default NULL,
  `estado_cob` varchar(50) default NULL,
  `cep_cob` varchar(50) default NULL,
  `email_cob` varchar(50) default NULL,
  `endereco_ent` varchar(50) default NULL,
  `numero_ent` varchar(50) default NULL,
  `bairro_ent` varchar(50) default NULL,
  `cidade_ent` varchar(50) default NULL,
  `estado_ent` varchar(50) default NULL,
  `cep_ent` varchar(50) default NULL,
  `email_ent` varchar(50) default NULL,
  `obs` text,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `datacadastro` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `clientes`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `codigo` int(11) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `comentario` text NOT NULL,
  `aprovado` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `comentarios`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cond_pagto`
--

CREATE TABLE IF NOT EXISTS `cond_pagto` (
  `codigo` int(11) NOT NULL auto_increment,
  `condpagto` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `cond_pagto`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE IF NOT EXISTS `cor` (
  `codigo` int(11) NOT NULL auto_increment,
  `cor` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `cor`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `cor_prod`
--

CREATE TABLE IF NOT EXISTS `cor_prod` (
  `codigo` int(11) NOT NULL auto_increment,
  `cor` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cor_prod`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `db`
--

CREATE TABLE IF NOT EXISTS `db` (
  `codigo` int(11) NOT NULL,
  `db` varchar(50) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `db`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `estados_do_brasil`
--

CREATE TABLE IF NOT EXISTS `estados_do_brasil` (
  `codigo` int(11) NOT NULL auto_increment,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `estados_do_brasil`
--

INSERT INTO `estados_do_brasil` (`codigo`, `estado`) VALUES
(1, 'Acre'),
(2, 'Amapa'),
(3, 'Alagoas'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceara'),
(7, 'Distrito_Federal'),
(8, 'Espirito_Santo'),
(9, 'Goias'),
(10, 'Maranhao'),
(11, 'Mato_Grosso'),
(12, 'Mato_Grosso_do_Sul'),
(13, 'Minas_Gerais'),
(14, 'Para'),
(15, 'Paraiba'),
(16, 'Parana'),
(17, 'Pernambuco'),
(18, 'Piaui'),
(19, 'Rio_de_Janeiro'),
(20, 'Rio_Grande_do_Norte'),
(21, 'Rio_Grande_do_Sul'),
(22, 'Rondonia'),
(23, 'Roraima'),
(24, 'Santa_Catarina'),
(25, 'Sao_Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundo_intermediaria`
--

CREATE TABLE IF NOT EXISTS `fundo_intermediaria` (
  `codigo` int(11) NOT NULL,
  `cor_fundo_intermediaria` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fundo_intermediaria`
--

INSERT INTO `fundo_intermediaria` (`codigo`, `cor_fundo_intermediaria`) VALUES
(0, '800000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundo_navegacao`
--

CREATE TABLE IF NOT EXISTS `fundo_navegacao` (
  `codigo` int(11) NOT NULL,
  `cor_fundo_navegacao` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fundo_navegacao`
--

INSERT INTO `fundo_navegacao` (`codigo`, `cor_fundo_navegacao`) VALUES
(0, 'ffffff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fundo_topo`
--

CREATE TABLE IF NOT EXISTS `fundo_topo` (
  `codigo` int(11) NOT NULL,
  `cor_fundo_topo` varchar(50) default NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fundo_topo`
--

INSERT INTO `fundo_topo` (`codigo`, `cor_fundo_topo`) VALUES
(0, 'ffffff');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `codigo` int(11) NOT NULL,
  `largura_imagem` varchar(50) NOT NULL,
  `altura_imagem` varchar(50) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`codigo`, `largura_imagem`, `altura_imagem`) VALUES
(0, '80', '96');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `codigo` int(11) NOT NULL,
  `logo` varchar(50) default NULL,
  `largura_logo` varchar(50) NOT NULL,
  `altura_logo` varchar(50) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logo`
--

INSERT INTO `logo` (`codigo`, `logo`, `largura_logo`, `altura_logo`) VALUES
(0, 'logo-transp.png', '500', '65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais`
--

CREATE TABLE IF NOT EXISTS `materiais` (
  `codigo` int(11) NOT NULL auto_increment,
  `material` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `materiais`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `codigo` int(11) NOT NULL auto_increment,
  `material` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `material`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `modo_pagto`
--

CREATE TABLE IF NOT EXISTS `modo_pagto` (
  `codigo` int(11) NOT NULL auto_increment,
  `modopagto` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `modo_pagto`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `mostrar_preco`
--

CREATE TABLE IF NOT EXISTS `mostrar_preco` (
  `codigo` int(11) NOT NULL,
  `sim_nao` varchar(50) NOT NULL,
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mostrar_preco`
--

INSERT INTO `mostrar_preco` (`codigo`, `sim_nao`) VALUES
(0, 'N');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pag_inicial`
--

CREATE TABLE IF NOT EXISTS `pag_inicial` (
  `codigo` int(11) NOT NULL,
  `texto` text,
  PRIMARY KEY  (`codigo`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pag_inicial`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `num_pedido` int(11) NOT NULL auto_increment,
  `datapedido` varchar(50) NOT NULL,
  `dataentrega` varchar(50) NOT NULL,
  `razaosocial` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `nfantasia` varchar(50) NOT NULL,
  `inscr_est` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comprador` varchar(50) NOT NULL,
  `fone` varchar(50) NOT NULL,
  `fax` varchar(50) default NULL,
  `celular` varchar(50) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `condpagto` varchar(50) NOT NULL,
  `modopagto` varchar(50) NOT NULL,
  `transportadora` varchar(50) default NULL,
  `redespacho` varchar(50) default NULL,
  `referencia_1` varchar(50) default NULL,
  `material_1` varchar(50) default NULL,
  `cor_1` varchar(50) default NULL,
  `solado_1` varchar(50) default NULL,
  `n22_1` varchar(50) default NULL,
  `n23_1` varchar(50) default NULL,
  `n24_1` varchar(50) default NULL,
  `n25_1` varchar(50) default NULL,
  `n26_1` varchar(50) default NULL,
  `n27_1` varchar(50) default NULL,
  `n28_1` varchar(50) default NULL,
  `n29_1` varchar(50) default NULL,
  `n30_1` varchar(50) default NULL,
  `n31_1` varchar(50) default NULL,
  `n32_1` varchar(50) default NULL,
  `n33_1` varchar(50) default NULL,
  `n34_1` varchar(50) default NULL,
  `n35_1` varchar(50) default NULL,
  `n36_1` varchar(50) default NULL,
  `n37_1` varchar(50) default NULL,
  `n38_1` varchar(50) default NULL,
  `n39_1` varchar(50) default NULL,
  `n40_1` varchar(50) default NULL,
  `n41_1` varchar(50) default NULL,
  `n42_1` varchar(50) default NULL,
  `n43_1` varchar(50) default NULL,
  `n44_1` varchar(50) default NULL,
  `n45_1` varchar(50) default NULL,
  `n46_1` varchar(50) default NULL,
  `preco_1` varchar(50) default NULL,
  `total_pares_1` varchar(50) default NULL,
  `total_reais_1` varchar(50) default NULL,
  `referencia_2` varchar(50) default NULL,
  `material_2` varchar(50) default NULL,
  `cor_2` varchar(50) default NULL,
  `solado_2` varchar(50) default NULL,
  `n22_2` varchar(50) default NULL,
  `n23_2` varchar(50) default NULL,
  `n24_2` varchar(50) default NULL,
  `n25_2` varchar(50) default NULL,
  `n26_2` varchar(50) default NULL,
  `n27_2` varchar(50) default NULL,
  `n28_2` varchar(50) default NULL,
  `n29_2` varchar(50) default NULL,
  `n30_2` varchar(50) default NULL,
  `n31_2` varchar(50) default NULL,
  `n32_2` varchar(50) default NULL,
  `n33_2` varchar(50) default NULL,
  `n34_2` varchar(50) default NULL,
  `n35_2` varchar(50) default NULL,
  `n36_2` varchar(50) default NULL,
  `n37_2` varchar(50) default NULL,
  `n38_2` varchar(50) default NULL,
  `n39_2` varchar(50) default NULL,
  `n40_2` varchar(50) default NULL,
  `n41_2` varchar(50) default NULL,
  `n42_2` varchar(50) default NULL,
  `n43_2` varchar(50) default NULL,
  `n44_2` varchar(50) default NULL,
  `n45_2` varchar(50) default NULL,
  `n46_2` varchar(50) default NULL,
  `preco_2` varchar(50) default NULL,
  `total_pares_2` varchar(50) default NULL,
  `total_reais_2` varchar(50) default NULL,
  `referencia_3` varchar(50) default NULL,
  `material_3` varchar(50) default NULL,
  `cor_3` varchar(50) default NULL,
  `solado_3` varchar(50) default NULL,
  `n22_3` varchar(50) default NULL,
  `n23_3` varchar(50) default NULL,
  `n24_3` varchar(50) default NULL,
  `n25_3` varchar(50) default NULL,
  `n26_3` varchar(50) default NULL,
  `n27_3` varchar(50) default NULL,
  `n28_3` varchar(50) default NULL,
  `n29_3` varchar(50) default NULL,
  `n30_3` varchar(50) default NULL,
  `n31_3` varchar(50) default NULL,
  `n32_3` varchar(50) default NULL,
  `n33_3` varchar(50) default NULL,
  `n34_3` varchar(50) default NULL,
  `n35_3` varchar(50) default NULL,
  `n36_3` varchar(50) default NULL,
  `n37_3` varchar(50) default NULL,
  `n38_3` varchar(50) default NULL,
  `n39_3` varchar(50) default NULL,
  `n40_3` varchar(50) default NULL,
  `n41_3` varchar(50) default NULL,
  `n42_3` varchar(50) default NULL,
  `n43_3` varchar(50) default NULL,
  `n44_3` varchar(50) default NULL,
  `n45_3` varchar(50) default NULL,
  `n46_3` varchar(50) default NULL,
  `preco_3` varchar(50) default NULL,
  `total_pares_3` varchar(50) default NULL,
  `total_reais_3` varchar(50) default NULL,
  `referencia_4` varchar(50) default NULL,
  `material_4` varchar(50) default NULL,
  `cor_4` varchar(50) default NULL,
  `solado_4` varchar(50) default NULL,
  `n22_4` varchar(50) default NULL,
  `n23_4` varchar(50) default NULL,
  `n24_4` varchar(50) default NULL,
  `n25_4` varchar(50) default NULL,
  `n26_4` varchar(50) default NULL,
  `n27_4` varchar(50) default NULL,
  `n28_4` varchar(50) default NULL,
  `n29_4` varchar(50) default NULL,
  `n30_4` varchar(50) default NULL,
  `n31_4` varchar(50) default NULL,
  `n32_4` varchar(50) default NULL,
  `n33_4` varchar(50) default NULL,
  `n34_4` varchar(50) default NULL,
  `n35_4` varchar(50) default NULL,
  `n36_4` varchar(50) default NULL,
  `n37_4` varchar(50) default NULL,
  `n38_4` varchar(50) default NULL,
  `n39_4` varchar(50) default NULL,
  `n40_4` varchar(50) default NULL,
  `n41_4` varchar(50) default NULL,
  `n42_4` varchar(50) default NULL,
  `n43_4` varchar(50) default NULL,
  `n44_4` varchar(50) default NULL,
  `n45_4` varchar(50) default NULL,
  `n46_4` varchar(50) default NULL,
  `preco_4` varchar(50) default NULL,
  `total_pares_4` varchar(50) default NULL,
  `total_reais_4` varchar(50) default NULL,
  `referencia_5` varchar(50) default NULL,
  `material_5` varchar(50) default NULL,
  `cor_5` varchar(50) default NULL,
  `solado_5` varchar(50) default NULL,
  `n22_5` varchar(50) default NULL,
  `n23_5` varchar(50) default NULL,
  `n24_5` varchar(50) default NULL,
  `n25_5` varchar(50) default NULL,
  `n26_5` varchar(50) default NULL,
  `n27_5` varchar(50) default NULL,
  `n28_5` varchar(50) default NULL,
  `n29_5` varchar(50) default NULL,
  `n30_5` varchar(50) default NULL,
  `n31_5` varchar(50) default NULL,
  `n32_5` varchar(50) default NULL,
  `n33_5` varchar(50) default NULL,
  `n34_5` varchar(50) default NULL,
  `n35_5` varchar(50) default NULL,
  `n36_5` varchar(50) default NULL,
  `n37_5` varchar(50) default NULL,
  `n38_5` varchar(50) default NULL,
  `n39_5` varchar(50) default NULL,
  `n40_5` varchar(50) default NULL,
  `n41_5` varchar(50) default NULL,
  `n42_5` varchar(50) default NULL,
  `n43_5` varchar(50) default NULL,
  `n44_5` varchar(50) default NULL,
  `n45_5` varchar(50) default NULL,
  `n46_5` varchar(50) default NULL,
  `preco_5` varchar(50) default NULL,
  `total_pares_5` varchar(50) default NULL,
  `total_reais_5` varchar(50) default NULL,
  `referencia_6` varchar(50) default NULL,
  `material_6` varchar(50) default NULL,
  `cor_6` varchar(50) default NULL,
  `solado_6` varchar(50) default NULL,
  `n22_6` varchar(50) default NULL,
  `n23_6` varchar(50) default NULL,
  `n24_6` varchar(50) default NULL,
  `n25_6` varchar(50) default NULL,
  `n26_6` varchar(50) default NULL,
  `n27_6` varchar(50) default NULL,
  `n28_6` varchar(50) default NULL,
  `n29_6` varchar(50) default NULL,
  `n30_6` varchar(50) default NULL,
  `n31_6` varchar(50) default NULL,
  `n32_6` varchar(50) default NULL,
  `n33_6` varchar(50) default NULL,
  `n34_6` varchar(50) default NULL,
  `n35_6` varchar(50) default NULL,
  `n36_6` varchar(50) default NULL,
  `n37_6` varchar(50) default NULL,
  `n38_6` varchar(50) default NULL,
  `n39_6` varchar(50) default NULL,
  `n40_6` varchar(50) default NULL,
  `n41_6` varchar(50) default NULL,
  `n42_6` varchar(50) default NULL,
  `n43_6` varchar(50) default NULL,
  `n44_6` varchar(50) default NULL,
  `n45_6` varchar(50) default NULL,
  `n46_6` varchar(50) default NULL,
  `preco_6` varchar(50) default NULL,
  `total_pares_6` varchar(50) default NULL,
  `total_reais_6` varchar(50) default NULL,
  `referencia_7` varchar(50) default NULL,
  `material_7` varchar(50) default NULL,
  `cor_7` varchar(50) default NULL,
  `solado_7` varchar(50) default NULL,
  `n22_7` varchar(50) default NULL,
  `n23_7` varchar(50) default NULL,
  `n24_7` varchar(50) default NULL,
  `n25_7` varchar(50) default NULL,
  `n26_7` varchar(50) default NULL,
  `n27_7` varchar(50) default NULL,
  `n28_7` varchar(50) default NULL,
  `n29_7` varchar(50) default NULL,
  `n30_7` varchar(50) default NULL,
  `n31_7` varchar(50) default NULL,
  `n32_7` varchar(50) default NULL,
  `n33_7` varchar(50) default NULL,
  `n34_7` varchar(50) default NULL,
  `n35_7` varchar(50) default NULL,
  `n36_7` varchar(50) default NULL,
  `n37_7` varchar(50) default NULL,
  `n38_7` varchar(50) default NULL,
  `n39_7` varchar(50) default NULL,
  `n40_7` varchar(50) default NULL,
  `n41_7` varchar(50) default NULL,
  `n42_7` varchar(50) default NULL,
  `n43_7` varchar(50) default NULL,
  `n44_7` varchar(50) default NULL,
  `n45_7` varchar(50) default NULL,
  `n46_7` varchar(50) default NULL,
  `preco_7` varchar(50) default NULL,
  `total_pares_7` varchar(50) default NULL,
  `total_reais_7` varchar(50) default NULL,
  `referencia_8` varchar(50) default NULL,
  `material_8` varchar(50) default NULL,
  `cor_8` varchar(50) default NULL,
  `solado_8` varchar(50) default NULL,
  `n22_8` varchar(50) default NULL,
  `n23_8` varchar(50) default NULL,
  `n24_8` varchar(50) default NULL,
  `n25_8` varchar(50) default NULL,
  `n26_8` varchar(50) default NULL,
  `n27_8` varchar(50) default NULL,
  `n28_8` varchar(50) default NULL,
  `n29_8` varchar(50) default NULL,
  `n30_8` varchar(50) default NULL,
  `n31_8` varchar(50) default NULL,
  `n32_8` varchar(50) default NULL,
  `n33_8` varchar(50) default NULL,
  `n34_8` varchar(50) default NULL,
  `n35_8` varchar(50) default NULL,
  `n36_8` varchar(50) default NULL,
  `n37_8` varchar(50) default NULL,
  `n38_8` varchar(50) default NULL,
  `n39_8` varchar(50) default NULL,
  `n40_8` varchar(50) default NULL,
  `n41_8` varchar(50) default NULL,
  `n42_8` varchar(50) default NULL,
  `n43_8` varchar(50) default NULL,
  `n44_8` varchar(50) default NULL,
  `n45_8` varchar(50) default NULL,
  `n46_8` varchar(50) default NULL,
  `preco_8` varchar(50) default NULL,
  `total_pares_8` varchar(50) default NULL,
  `total_reais_8` varchar(50) default NULL,
  `referencia_9` varchar(50) default NULL,
  `material_9` varchar(50) default NULL,
  `cor_9` varchar(50) default NULL,
  `solado_9` varchar(50) default NULL,
  `n22_9` varchar(50) default NULL,
  `n23_9` varchar(50) default NULL,
  `n24_9` varchar(50) default NULL,
  `n25_9` varchar(50) default NULL,
  `n26_9` varchar(50) default NULL,
  `n27_9` varchar(50) default NULL,
  `n28_9` varchar(50) default NULL,
  `n29_9` varchar(50) default NULL,
  `n30_9` varchar(50) default NULL,
  `n31_9` varchar(50) default NULL,
  `n32_9` varchar(50) default NULL,
  `n33_9` varchar(50) default NULL,
  `n34_9` varchar(50) default NULL,
  `n35_9` varchar(50) default NULL,
  `n36_9` varchar(50) default NULL,
  `n37_9` varchar(50) default NULL,
  `n38_9` varchar(50) default NULL,
  `n39_9` varchar(50) default NULL,
  `n40_9` varchar(50) default NULL,
  `n41_9` varchar(50) default NULL,
  `n42_9` varchar(50) default NULL,
  `n43_9` varchar(50) default NULL,
  `n44_9` varchar(50) default NULL,
  `n45_9` varchar(50) default NULL,
  `n46_9` varchar(50) default NULL,
  `preco_9` varchar(50) default NULL,
  `total_pares_9` varchar(50) default NULL,
  `total_reais_9` varchar(50) default NULL,
  `referencia_10` varchar(50) default NULL,
  `material_10` varchar(50) default NULL,
  `cor_10` varchar(50) default NULL,
  `solado_10` varchar(50) default NULL,
  `n22_10` varchar(50) default NULL,
  `n23_10` varchar(50) default NULL,
  `n24_10` varchar(50) default NULL,
  `n25_10` varchar(50) default NULL,
  `n26_10` varchar(50) default NULL,
  `n27_10` varchar(50) default NULL,
  `n28_10` varchar(50) default NULL,
  `n29_10` varchar(50) default NULL,
  `n30_10` varchar(50) default NULL,
  `n31_10` varchar(50) default NULL,
  `n32_10` varchar(50) default NULL,
  `n33_10` varchar(50) default NULL,
  `n34_10` varchar(50) default NULL,
  `n35_10` varchar(50) default NULL,
  `n36_10` varchar(50) default NULL,
  `n37_10` varchar(50) default NULL,
  `n38_10` varchar(50) default NULL,
  `n39_10` varchar(50) default NULL,
  `n40_10` varchar(50) default NULL,
  `n41_10` varchar(50) default NULL,
  `n42_10` varchar(50) default NULL,
  `n43_10` varchar(50) default NULL,
  `n44_10` varchar(50) default NULL,
  `n45_10` varchar(50) default NULL,
  `n46_10` varchar(50) default NULL,
  `preco_10` varchar(50) default NULL,
  `total_pares_10` varchar(50) default NULL,
  `total_reais_10` varchar(50) default NULL,
  `total_geral_pares` varchar(50) default NULL,
  `total_geral_reais` varchar(50) default NULL,
  `obs` text,
  `cod_cli` varchar(50) default NULL,
  `status` varchar(50) default NULL,
  PRIMARY KEY  (`num_pedido`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2081 ;

--
-- Extraindo dados da tabela `pedidos`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `referencia` varchar(50) NOT NULL,
  `foto` varchar(100) default NULL,
  `material` varchar(50) default NULL,
  `cor` varchar(50) default NULL,
  `sola` varchar(50) default NULL,
  `forro` varchar(255) default NULL,
  `numeracao` varchar(50) default NULL,
  `categoria` varchar(50) default NULL,
  `sub_categoria` varchar(50) default NULL,
  `descricao` varchar(255) default NULL,
  `preco` varchar(50) default NULL,
  `oferta` varchar(50) default NULL,
  `preco_oferta` varchar(50) default NULL,
  `data_hora` varchar(50) default NULL,
  PRIMARY KEY  (`referencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `representantes`
--

CREATE TABLE IF NOT EXISTS `representantes` (
  `codigo` int(11) NOT NULL auto_increment,
  `nome` varchar(50) NOT NULL default '',
  `endereco` varchar(50) NOT NULL default '',
  `numero` varchar(50) NOT NULL default '',
  `bairro` varchar(50) NOT NULL default '',
  `cidade` varchar(50) NOT NULL default '',
  `estado` text NOT NULL,
  `cep` varchar(50) default NULL,
  `cpf` varchar(50) default NULL,
  `rg` varchar(50) default NULL,
  `fone` varchar(50) default NULL,
  `fax` varchar(50) default NULL,
  `celular` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `usuario` varchar(50) default NULL,
  `senha` varchar(50) default NULL,
  `obs` varchar(255) default NULL,
  `foto` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `representantes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `codigo` int(11) NOT NULL auto_increment,
  `servico` varchar(100) default NULL,
  `descricao` varchar(255) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `servicos`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `solado`
--

CREATE TABLE IF NOT EXISTS `solado` (
  `codigo` int(11) NOT NULL auto_increment,
  `solado` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `solado`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `solados`
--

CREATE TABLE IF NOT EXISTS `solados` (
  `codigo` int(11) NOT NULL auto_increment,
  `solado` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `solados`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `codigo` int(11) NOT NULL auto_increment,
  `status` varchar(50) default NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `status`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categorias`
--

CREATE TABLE IF NOT EXISTS `sub_categorias` (
  `codigo` int(11) NOT NULL auto_increment,
  `sub_categoria` varchar(50) default NULL,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY  (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Extraindo dados da tabela `sub_categorias`
--


