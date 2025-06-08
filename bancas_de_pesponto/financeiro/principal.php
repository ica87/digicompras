<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");



?>





<html>

<head>

<title>Menu principal do Administrador</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<?



require '../../conect/conect.php';



			

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "SELECT * FROM fundo_navegacao";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#ffffff<? //printf("$linha[1]"); ?>"



background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>>

  

<? } ?>

<form name="form4" method="post" action="">
</form>
<form name="form3" method="post" action="../principal.php">

  <input type="submit" name="Submit3" value="Voltar ao manu principal">

</form>

<form name="form1" method="post" action="../principal.php">

<?



$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];





$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);

$reg = 0;

echo "<tr>";

while($linha=mysql_fetch_row($res)) {

$reg++;





$nome_operador = $linha[1];

?>

  <table width="100%" border="0" cellspacing="4">

    <tr> 

      <td colspan="2"><strong>Ol&aacute;! Seja bem vindo<br> </strong><strong><font color="#0000FF"><? echo $linha[1]; ?> 

            <input name="nome" type="hidden" id="razaosocial2" value="<? echo $linha[1]; ?>">

</font></strong><strong><font color="#0000FF">      </font></strong></td>

      <td width="41%"><strong>Estabelecimento:</strong> <br><strong><font color="#0000FF"><? echo $linha[24]; ?>

            <input name="estabelecimento" type="hidden" id="nfantasia5" value="<? echo $linha[24]; ?>">

      </font></strong><strong><font color="#0000FF">      </font></strong></td>

      <td width="14%"><strong>Celular:<font color="#0000FF"><br> <? echo $linha[19]; ?>

            <input name="celular" type="hidden" id="nfantasia32" value="<? echo $linha[19]; ?>">

      </font><font color="#0000FF">

      </font></strong></td>

      <td width="1%">&nbsp;</td>

    </tr>

    <tr>

      <td width="18%"><strong>Cidade: <br><font color="#0000FF"><? echo $linha[25]; ?>

            <input name="cidade_estabelecimento" type="hidden" id="nfantasia43" value="<? echo $linha[25]; ?>">

      </font><font color="#0000FF">      </font></strong></td>

      <td width="26%"><strong><font color="#000000">Tel do estabelecimento: </font><font color="#0000FF"><br>

        <? echo $linha[26]; ?>

            <input name="tel_estabelecimento" type="hidden" id="nfantasia23" value="<? echo $linha[26]; ?>">

      </font></strong></td>

      <td><strong><font color="#000000">E-Mail do estabelecimento: </font><font color="#0000FF"><br>

            <? echo $linha[27]; ?>

            <input name="email_estabelecimento" type="hidden" id="nfantasia24" value="<? echo $linha[27]; ?>">

      </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td><strong><font color="#0000FF">      </font></strong></td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

<?

if($reg==3){

echo "</tr><tr>";

$reg=0;

}

?>



<? } ?>

  </table>

  

  <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

</form>

<table width="100%"  border="0">

  <tr>

    <td><form name="form2" method="post" action="categorias_receitas/menu.php">

      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

      <input type="submit" name="Submit222" value="Categoria Receitas">

    </form></td>

    <td><form name="form2" method="post" action="categorias_despesas/menu.php">

      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

      <input type="submit" name="Submit2222" value="Categoria Despesas">

    </form></td>

    <td>&nbsp;</td>
    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td colspan="5"><div align="center"><strong>Lan&ccedil;amentos</strong></div></td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td width="20%"><form name="form2" method="post" action="contas_a_receber/selecione_cliente_contas_a_receber.php">

      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>

      <input type="submit" name="Submit2" value="Contas a Receber">

    </form></td>

    <td width="20%"><form name="form2" method="post" action="contas_a_pagar/selecione_fornecedor_contas_a_pagar.php">
      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>
      <input type="submit" name="Submit" value="Contas a Pagar">
    </form></td>

    <td width="20%"><form name="form2" method="post" action="desconto_de_duplicatas/bordero.php">
      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>
<?
	
$sql = "SELECT * FROM bordero where status = 'Aberto' order by num_bordero desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$num_bordero = $linha[0];

}
	
	
?>
      <input name="num_bordero_add" type="hidden" id="num_bordero_add" value="<? echo $num_bordero; ?>">
      <input type="submit" name="Submit5" value="Antecipa&ccedil;&atilde;o de Receb&iacute;veis">
    </form></td>
    <td width="20%"><form name="form2" method="post" action="caixa/menu.php">
      <?

  	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	?>
      <input type="submit" name="Submit4" value="Caixa">
    </form></td>
    <td width="20%">&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>

  <tr>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>
  </tr>
</table>

</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>