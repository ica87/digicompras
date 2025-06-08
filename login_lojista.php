<html>

<head>

<title>Documento sem t&iacute;tulo</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style></head>

			<?

			

require 'conect/conect.php';

include 'css/botoes.css';



$data_hoje=$_POST['data_hoje'];

$dia=$_POST['dia'];

$mes=$_POST['mes'];

$ano=$_POST['ano'];

$mes_ano=$_POST['mes_ano'];

			

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>



<table width="100%" border="0" cellspacing="4" background="logo/cabecalho_.jpg" no-repeat>

  <tr>

    <td width="8%">&nbsp;</td>

    <td width="82%"><div align="center">

      <input type="image" name="imageField" id="imageField" src="logo/logo2021.jpg" width="1100" height="200">

    </div></td>

    <td width="10%">&nbsp;</td>

  </tr>

</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0">
  <tr background='imagens_sistema/fundocelulas2.png'>
    <td width="10%"><div align="center">
      <form action="index.php" method="post" name="form1" target="_top">
        <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Home'>";

		

		?>
      </form>
    </div></td>
    <td width="10%"><form action="index.php" method="post" name="form1" target="_top">
      <div align="center">
        <input name="solicitacao" type="hidden" id="solicitacao" value="empregos">
        <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Empregos'>";

		

		?>
      </div>
    </form></td>
    <td width="10%"><div align="center">
      <form action="trabalhe_conosco.php" method="post" name="form1" target="_top">
        <input name="solicitacao" type="hidden" id="solicitacao" value="curriculos">
        <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Curr&iacute;culo gr&aacute;tis'>";

		

		?>
      </form>
    </div></td>
    <td width="10%"><div align="center">
      <form action="index.php?instrucao=contato" method="post" name="form1" target="_top">
        <input name="solicitacao" type="hidden" id="solicitacao" value="contato">
        <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Fale Conosco'>";

		

		?>
      </form>
    </div></td>
    <td width="10%"><div align="center">
      <form action="login.php" method="post" name="form1">
        <div align="center">
          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Area Restrita'>";

		

		?>
          <input name="data_hoje2" type="hidden" id="data_hoje2" value="<? echo $data_hoje; ?>">
          <input name="dia2" type="hidden" id="dia2" value="<? echo $dia_atual; ?>">
          <input name="mes2" type="hidden" id="mes2" value="<? echo $mes; ?>">
          <input name="ano2" type="hidden" id="ano2" value="<? echo $ano; ?>">
          <input name="mes_ano2" type="hidden" id="mes_ano2" value="<? echo $mes_ano; ?>">
        </div>
      </form>
    </div></td>
    <td width="10%"><div align="center">
      <form action="login_lojista.php" method="post" name="form1">
        <div align="center">
          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Area do Lojista'>";

		

		?>
          <input name="data_hoje2" type="hidden" id="data_hoje2" value="<? echo $data_hoje; ?>">
          <input name="dia2" type="hidden" id="dia2" value="<? echo $dia_atual; ?>">
          <input name="mes2" type="hidden" id="mes2" value="<? echo $mes; ?>">
          <input name="ano2" type="hidden" id="ano2" value="<? echo $ano; ?>">
          <input name="mes_ano2" type="hidden" id="mes_ano2" value="<? echo $mes_ano; ?>">
        </div>
      </form>
    </div></td>
    <td width="10%"><div align="center">
      <form action="login_usuario.php" method="post" name="form3" target="_top">
        <div align="center">
          <?

		

		echo "<input class='class01' type='submit' name='button' id='button' value='Usu&aacute;rio Consumidor'>";

		

		?>
          <input name="data_hoje2" type="hidden" id="data_hoje2" value="<? echo $data_hoje; ?>">
          <input name="dia2" type="hidden" id="dia2" value="<? echo $dia_atual; ?>">
          <input name="mes2" type="hidden" id="mes2" value="<? echo $mes; ?>">
          <input name="ano2" type="hidden" id="ano2" value="<? echo $ano; ?>">
          <input name="mes_ano2" type="hidden" id="mes_ano2" value="<? echo $mes_ano; ?>">
        </div>
      </form>
    </div></td>
  </tr>
  <tr background='imagens_sistema/fundocelulas2.png'>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">
      <form action="index.php" method="post" name="form2">
        <input name="solicitacao" type="hidden" id="solicitacao" value="buscarestabelecimentos">
        <select name="categoria" class="class02" id="categoria">
          <option selected>
            <? if(empty($categoria)){ echo "Escolha o segmento que deseja pesquisar"; }else{ echo "$categoria"; } ?>
            </option>
          <?





    $sql = "select * from categorias order by categoria asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['categoria']."</option>";

    }

?>
        </select>
        <input type="submit" class="class01" name="Submit3" value="Buscar">
      </form>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tbody>
	    <tr>
	      <td width="37%" align="center">Acesse</td>
	      <td width="33%" align="center">Informa&ccedil;&otilde;es Gerais</td>
	      <td width="30%" align="center">Cadastrar meu estabelecimento</td>
        </tr>
	    <tr>
	      <td><form name="form1" method="post" action="verifica_lojista.php">
	        <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr background='imagens_sistema/fundocelulas2.png'>
	            <td><div align="center"><strong>CNPJ</strong></div></td>
              </tr>
	          <tr background='imagens_sistema/fundocelulas2.png'>
	            <td><div align="center">
	              <input name="usuario" class='class02' type="text" id="usuario">
	              </div></td>
              </tr>
	          <tr background='imagens_sistema/fundocelulas2.png'>
	            <td width="63%"><div align="center"><strong>Senha</strong></div></td>
              </tr>
	          <tr background='imagens_sistema/fundocelulas2.png'>
	            <td><div align="center">
	              <input name="senha" class='class02' type="password" id="senha2">
	              </div></td>
              </tr>
	          <tr background='imagens_sistema/fundocelulas2.png'>
	            <td><div align="center">
	              <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">
	              <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">
	              <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
	              <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
	              <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">
	              <input type="submit" class='class01' name="Submit" value="Conectar">
	            </div></td>
              </tr>
            </table>
          </form></td>
	      <td rowspan="2" align="center" valign="top"><p>* Os clientes sempre preferem os estabelecimentos que oferecem os melhores brindes.</p>
          <p>* Defina uma pontua&ccedil;&atilde;o justa nem alta demais e nem baixa demais</p>
          <p>*N&atilde;o cobramos %(percentual) sobre as compras, apenas um valor fixo mensal(acess&iacute;vel) conforme o plano para manuten&ccedil;&atilde;o do sistema.</p></td>
	      <td align="center" valign="top"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
	        <tr background='imagens_sistema/fundocelulas2.png'>
	          <td><div align="center"></div></td>
            </tr>
	        <tr background='imagens_sistema/fundocelulas2.png'>
	          <td><div align="center">
	            <form action="auto_cadastro/menu.php" method="post" name="form3">
	              <div align="center">
	                <?

         echo "<input type='submit' class='class01' name='Submit33' value='Cadastrar-me'>"; 

		?>
	                <span class="style12">
	                  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>
                    </span></div>
                </form>
	          </div></td>
            </tr>
	        <tr background='imagens_sistema/fundocelulas2.png'>
	          <td width="63%"><div align="center"></div></td>
            </tr>
	        <tr background='imagens_sistema/fundocelulas2.png'>
	          <td><div align="center"></div></td>
            </tr>
	        <tr background='imagens_sistema/fundocelulas2.png'>
	          <td><div align="center"></div></td>
            </tr>
          </table></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
  </tbody>
</table>
	<table width="100%" border="1" cellspacing="5">
	  <tr background='imagens_sistema/fundocelulas2.png'>
	    <td width="8%" align="center" valign="top"><strong>Planos</strong></td>
	    <td width="8%" align="center" valign="top"><strong>Foto Fachada</strong></td>
	    <td width="10%" valign="top"><strong>Foto fachada com link para site</strong></td>
	    <td width="9%" align="center" valign="top"><strong>Endere&ccedil;o</strong></td>
	    <td width="6%" align="center" valign="top"><strong>Telefone </strong></td>
	    <td width="9%" align="center" valign="top"><strong>E-Mail com link ativo</strong></td>
	    <td width="12%" align="center" valign="top"><strong>E-Mail(estatico)</strong></td>
	    <td width="12%" align="center" valign="top"><strong>Link na foto para site da empresa (caso tenha)</strong></td>
	    <td width="11%" align="center" valign="top"><strong>Letreiro animado</strong></td>
	    <td width="11%" align="center" valign="top"><strong>Ades&atilde;o</strong></td>
	    <td width="16%" align="center" valign="top"><strong>R$ / M&ecirc;s</strong></td>
      </tr>
	  <tr background='imagens_sistema/fundocelulas2.png'>
	    <td><strong>Basico</strong></td>
	    <td align="center"><img src="imagens/símbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center">&nbsp;</td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top">&nbsp;</td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top">&nbsp;</td>
	    <td align="center" valign="top">&nbsp;</td>
	    <td align="center" valign="middle"><strong>
	      <?
		  $sql = "SELECT * FROM planos where plano = 'BASICO' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$adesaobasico = $linha[4];
}
		  echo "R$ $adesaobasico"
		  ?>
	    </strong></td>
	    <td align="center" valign="middle"><strong>
        <?
		  $sql = "SELECT * FROM planos where plano = 'BASICO' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$valorbasico = $linha[2];
}
		  echo "R$ $valorbasico"
		  ?>
	    </strong></td>
      </tr>
	  <tr background='imagens_sistema/fundocelulas2.png'>
	    <td><strong>Master</strong></td>
	    <td align="center"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top">&nbsp;</td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="top"><img src="imagens/s&iacute;mbolo-visto-verde.png" width="58" height="51" alt=""/></td>
	    <td align="center" valign="middle"><strong>
	      <?
		  $sql = "SELECT * FROM planos where plano = 'MASTER' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$adesaobasico = $linha[4];
}
		  echo "R$ $adesaobasico"
		  ?>
	    </strong></td>
	    <td align="center" valign="middle"><strong>
        <?
		  $sql = "SELECT * FROM planos where plano = 'MASTER' limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
	
$valormaster = $linha[2];
}
		  echo "R$ $valormaster"
		  ?>
	    </strong></td>
      </tr>
</table>
	<p>&nbsp;</p>
	<p></p>
	<p></p>
	<p></p>
	<p></p>

</body>

</html>

<?

mysql_close($conexao);

?>