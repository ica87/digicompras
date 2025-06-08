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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>


</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77%"><strong><font color="#0000FF" size="4">SELECIONE O  LAN&Ccedil;AMENTO A SER EXCLUIDO</font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="menu.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar">
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="excluir_confirma.php">
        <strong>
        <select name="operador" id="select6">
		<option>Selecione o lançamento</option>
          <?
$operador = $_POST['operador'];
$mes_pagto = $_POST['mes_pagto'];
$ano_pagto = $_POST['ano_pagto'];

    $sql = "select * from fechamento_mes where operador = '$operador' and mes_pagto = '$mes_pagto' and ano_pagto = '$ano_pagto' order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['codigo']." - ".$x['nome']." - ".$x['cpf']." - ".$x['dia_pagto']." - ".$x['mes_pagto']." - ".$x['ano_pagto']."</option>";
    }
?>
        </select>
        <input type="submit" name="Submit" value="Excluir">
</strong>      
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
