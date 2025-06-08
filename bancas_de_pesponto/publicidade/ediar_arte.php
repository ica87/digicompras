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
<title>Trocar foto n&ordm; 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?



require '../../conect/conect.php';

?>
<br>
<? 
$vg = $_GET['chamar'];


$codigo = $vg;




 ?></p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit3" value="Voltar">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
<form action="atualizar_arte.php" method="post" enctype="multipart/form-data" name="form1">
<?
//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM publicidade";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;
?>
  <table width="100%"  border="0">
        <tr>
          <td>Arte atual </td>
          <td>&nbsp;</td>
          <td width="18%"><div align="center">
          </div></td>
        </tr>
      <tr>
        <td colspan="3"><?
	  printf("<a href='../../publicidade/$linha[1]' target='_blank'><img src='../../publicidade/$linha[1]' border='0' width='500' height='75'></a>");
	  ?></td>
      </tr>
    <tr>
      <td width="35%">&nbsp;</td>
      <td width="47%">&nbsp;      </td>
      <td width="18%">&nbsp;</td>
    </tr>
    <tr>
      <td>Escolha a nova arte para publicar no site! </td>
      <td><input name="publicidade" type="file" id="publicidade"></td>
      <td width="18%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Atualizar"></td>
      <td width="18%">&nbsp;</td>
    </tr>

  </table>
      <?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>
    <? } ?>
</form>
</body>
</html>
