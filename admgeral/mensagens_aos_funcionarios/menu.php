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
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="4"><?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);
?>

<?
$mensagem = $_POST['mensagem'];
$nome_operador = $_POST['nome_operador'];
$data = date('d-m-Y');
$hora = date('H:i:s');

if (empty($mensagem)) {
}
else{
$comando = "insert into mensagens_ao_funcionario(nome_operador,data_mensagem,hora_mensagem,mensagem,mensagem_lida) values('$nome_operador','$data','$hora','$mensagem','Não lida')";

mysql_query($comando,$conexao);
}



?>

</td>
    </tr>
    <tr>
      <td colspan="4"><div align="center" class="style1">Sess&atilde;o de envio de mensagens/comunicados aos operadores(funcion&aacute;rios) </div></td>
    </tr>
    <tr>
      <td width="23%"><form name="form1" method="post" action="../principal.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input type="submit" name="Submit22" value="Voltar ao menu principal">
      </form></td>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
  <form name="form2" method="post" action="menu.php">
    <table width="100%"  border="0">
      <tr>
        <td width="19%">Nome do operador(a) </td>
        <td colspan="2"><select name="nome_operador" id="select6">
          <option selected></option>
          <?


    $sql = "select * from operadores order by nome asc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['nome']."</option>";
    }
?>
        </select></td>
        <td width="26%"><input type="submit" name="Submit" value="Enviar"></td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">
          <textarea name="mensagem" cols="100" rows="7" id="mensagem"></textarea>
        </div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">Lista de mensagens do operador </div></td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">
          <textarea name="historico_mensagens" cols="100" rows="10" readonly="readonly" id="textarea"><?  
$sql = "SELECT * FROM mensagens_ao_funcionario where nome_operador = '$nome_operador' order by codigo desc";
$res = mysql_query($sql);
$reg = 0;
//echo "<tr>";
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$nome_operador = $linha[1];
$data_mensagem = $linha[2];
$hora_mensagem = $linha[3];
$mensagem = $linha[4];
$mensagem_lida = $linha[5];
$data_leitura = $linha[6];
$hora_leitura = $linha[7];


echo "$data_mensagem - "."$hora_mensagem - "."$mensagem - "."$mensagem_lida - "."$data_leitura - "."$hora_leitura ";
?>

<?

if($reg==1){
//echo "</tr>";
$reg=0;
}


}
	  
	  
	  
	  
	   ?>
          </textarea>
        </div></td>
      </tr>
    </table>
</form>
<p>&nbsp; </p>
</body>
</html>
