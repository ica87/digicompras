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

<title>Edi&ccedil;&atilde;o de produtos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

.style1 {font-weight: bold}

.style2 {

	color: #0000FF;

	font-weight: bold;

	font-size: 24px;

}

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

-->

</style>

</head>



<body>

<p>        <?

require '../../conect/conect.php';

?>



</p>

<p class="style2">Altera&ccedil;&atilde;o de modelos. </p>

<form name="form1" method="post" action="selecione_codigo_edicao.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit22" value="Voltar">

</form>

<p>&nbsp;</p>

<form action="autalizar.php" method="post" name="form2">

<table width="100%"  border="0">

        <tr>

          <td width="36%" colspan="3">

<?



$codigo = $_POST['codigo'];



$sql = "select * from modelos where codigo = '$codigo'";

//$sql = "SELECT fabricante FROM veiculos where='Diversos'";

//EXECUTA O COMANDO ACIMA

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

//$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];


//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...

//if($res) {

//EXIBE PARA O USUARIO

echo "<tr>";

//while($linha=mysql_fetch_row($res)) {

$reg++;

?>		  </td>

          <td width="39%" colspan="2"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>

          <td width="25%">&nbsp;</td>
        </tr>

        <tr>
          <td><font color="#0000FF"><strong>Modelo</strong></font></td>
          <td><input name="modelo" type="text" id="modelo" value="<? echo $modelo; ?>"></td>
          <td><strong><font color="#0000FF">Pre&ccedil;o Empresa</font></strong></td>
          <td><input name="preco_empresa" type="text" id="preco_empresa" value="<? echo $preco_empresa; ?>"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><strong><font color="#0000FF">Pre&ccedil;o Pespontador</font></strong></td>
          <td><input name="preco_pespontador" type="text" id="preco_pespontador" value="<? echo $preco_pespontador; ?>"></td>
          <td><strong><font color="#0000FF">Pre&ccedil;o Coladeira 1 </font></strong></td>
          <td><input name="preco_coladeira1" type="text" id="preco_coladeira1" value="<? echo $preco_coladeira1; ?>"></td>
          <td><strong><font color="#0000FF">Pre&ccedil;o Coladeira 2 </font></strong></td>
          <td><input name="preco_coladeira2" type="text" id="preco_coladeira2" value="<? echo $preco_coladeira2; ?>"></td>
        </tr>
        
        <tr>

          <td height="40" colspan="3"><input type="submit" name="Submit2" value="Atualizar Modelo"></td>

          <td colspan="2">&nbsp;</td>

          <td>&nbsp;</td>
        </tr>

		          <?

if($reg==1){

echo "</tr>";

$reg=0;

}

?>



          <? } ?>
  </table>

</form>

<td width="25%">&nbsp;</td>

        </tr>

        <tr>

        </tr>

  </table>


<p>&nbsp;</p>

</body>

</html>

