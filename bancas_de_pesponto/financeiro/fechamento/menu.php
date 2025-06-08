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
.style1 {	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
</head>

<?
require '../../../conect/conect.php';
error_reporting(E_ALL);
?>
<?
$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?> 
<body bgcolor="#<? printf("$linha[1]"); ?>" 
<? } ?>
leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="10">
    <tr>
      <td colspan="2">


</td>
    </tr>
    <tr>
      <td width="19%">&nbsp;</td>
      <td><p><strong><font color="#0000FF" size="4">Fechamento</font></strong></p>      </td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../principal.php">
        <input type="submit" name="Submit" value="Voltar ao menu principal">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>      </form></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form action="inserir.php" method="post" name="form2">
        <input type="submit" name="Submit2" value="Fechamento">
        <span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form name="form3" method="post" action="listagem_para_editar_lancamentos_de_fechamento.php">
  Informe o m&ecirc;s
  <input name="mes" type="text" id="mes" size="4" maxlength="2">
  e o ano
  <input name="ano" type="text" id="ano" size="6" maxlength="4">
  do lan&ccedil;amento 
  <input type="submit" name="Submit32" value="Ediar lan&ccedil;amentos">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>      </form></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td><form name="form3" method="post" action="relatorio_mes_e_ano_fechamento.php">
Informe o m&ecirc;s 
    <input name="mes" type="text" id="mes" size="4" maxlength="2">
    e o ano 
    <input name="ano" type="text" id="ano" size="6" maxlength="4">
    do lan&ccedil;amento 
    <input type="submit" name="Submit3" value="Gerar Relat&oacute;rio de Fechamento">
    <span class="style1">
    <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
    </span>      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="style2">RELAT&Oacute;RIO POR PERIODO REFERENCIAL </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><form action="relatorio_periodo_referencial.php" method="post" name="form5">
        <div align="left"><?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          De
            <strong><font color="#0000FF">
            <select name="dia_ref_inicial" id="select2">
              <?


    $sql = "select * from fechamento group by dia_ref order by dia_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dia_ref']."</option>";
    }
?>
                        </select>
            </font></strong>            <strong><font color="#0000FF"> </font></strong>
          <strong><font color="#0000FF">
            <select name="mes_ref_inicial" id="mes_ref_inicial">
              <?


    $sql = "select * from fechamento group by mes_ref order by mes_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_ref']."</option>";
    }
?>
                        </select>
          </font></strong>            <strong><font color="#0000FF">
            <select name="ano_ref_inicial" id="select33">
              <?


    $sql = "select * from fechamento group by ano_ref order by ano_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['ano_ref']."</option>";
    }
?>
                      </select>
            </font></strong> at&eacute;<strong><font color="#0000FF"> <strong><font color="#0000FF">
            <select name="dia_ref_final" id="select5">
              <?


    $sql = "select * from fechamento group by dia_ref order by dia_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['dia_ref']."</option>";
    }
?>
                        </select>
            </font></strong> <strong><font color="#0000FF"> </font></strong> <strong><font color="#0000FF">
            <select name="mes_ref_final" id="select6">
              <?


    $sql = "select * from fechamento group by mes_ref order by mes_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['mes_ref']."</option>";
    }
?>
                        </select>
            </font></strong> <strong><font color="#0000FF">
            <select name="ano_ref_final" id="select7">
              <?


    $sql = "select * from fechamento group by ano_ref order by ano_ref desc";
    $result = mysql_query($sql);
    while($x=mysql_fetch_array($result)){
  echo "<option>".$x['ano_ref']."</option>";
    }
?>
                        </select>
            </font></strong>
            </font></strong>
            <input type="submit" name="Submit523" value="Relat&oacute;rio por periodo">
          </div>
      </form></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
</body>
</html>
