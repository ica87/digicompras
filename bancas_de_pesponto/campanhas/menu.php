<?php
session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");


$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

?>

<html>
<head>
<title>CAMPANHAS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">        <?
require '../../conect/conect.php';


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>
</td>
    </tr>
    <tr>
      <td width="24%">&nbsp;</td>
      <td width="76%"><strong><font color="#0000FF" size="4">O que deseja fazer com as Campanhas?</font></strong></td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../principal.php">
        <input type="submit" name="Submit" value="Voltar ao menu principal">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form2" method="post" action="inserir.php">
        <input type="submit" name="Submit2" value="Criar Campanha">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="selecione_codigo_campanha_edicao.php">
        <input type="submit" name="Submit3" value="Editar Campanha">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      </form></td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
