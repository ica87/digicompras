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



//$erro = $_GET['erro'];

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
        <input type="submit" class="class01" name="Submit4" value="Buscar">
      </form>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<p align="center"><strong>Prezado usu&aacute;rio! Fa&ccedil;a seu login e acompanhe seu saldo de pontos! </strong></p>

<form name="form1" method="post" action="verifica_usuario.php">

  <table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>N&ordm; do cart&atilde;o </strong></div></td>

    </tr>

    <tr> 

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>

        <input name="usuario" type="text" class='class02' id="usuario" value="<? echo "$num_cartao"; ?>">

      </strong></div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>Senha</strong></div></td>

    </tr>

    <tr> 

      <td width="54%" background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>

        <input name="senha" class='class02' type="password" id="senha">

      </strong></div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"></div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>

        <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">

        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

        <input type="submit" class='class01' name="Submit" value="Conectar">
      </strong></div></td>

    </tr>

  </table>

</form>



<div align="center"><strong>ou<br> </strong></div>

<form name="form1" method="post" action="verifica_usuario_por_cpf.php">

  <table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>CPF </strong></div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>

        <input name="cpf" class='class02' type="text" id="cpf">

      </strong></div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"><strong>Somente n&uacute;meros</strong></div></td>

    </tr>

    <tr>

      <td width="54%" background='imagens_sistema/fundocelulas2.png'><div align="center">

        <strong>

        <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo $data_hoje; ?>">

        <input name="dia" type="hidden" id="dia" value="<? echo $dia; ?>">

        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">

        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">

        <input name="mes_ano" type="hidden" id="mes_ano" value="<? echo $mes_ano; ?>">

        </strong>

        <input type="submit" class='class01' name="Submit3" value="Conectar">
      </div></td>

    </tr>

    <tr>

      <td background='imagens_sistema/fundocelulas2.png'><div align="center"></div></td>

    </tr>

  </table>

</form>

<p>&nbsp;</p>

</body>

</html>

<?

mysql_close($conexao);

?>