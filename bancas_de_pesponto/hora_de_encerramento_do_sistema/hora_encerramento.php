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
<title>Altera&ccedil;&atilde;o de horario de encerramento do sistema</title>
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
<p class="style2">Altera&ccedil;&atilde;o de hor&aacute;rio de encerramento do sistema! </p>
<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit3" value="Voltar ao menu principal">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
  <table width="100%"  border="0">

        <tr>
          <td><div align="center">Informe os valores com 2 digitos ex: 
          </div></td>
          <td><div align="center">
            <input name="segundos2" type="text" disabled="true" id="segundos24" value="06" size="2" maxlength="2" readonly="true">
          </div></td>
          <td>
            <div align="center">
              <input name="segundos22" type="text" disabled="true" id="segundos25" value="50" size="2" maxlength="2" readonly="true">
            </div></td>
          <td><div align="center">
            <input name="segundos23" type="text" disabled="true" id="segundos26" value="00" size="2" maxlength="2" readonly="true">
          </div></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="3"><div align="center">Hora de INICIAR o sistema </div></td>
          <td>&nbsp;</td>
          <td colspan="3"><div align="center">Hora de ENCERRAR o sistema </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="26%">&nbsp;</td>
          <td><div align="center">Horas</div></td>
          <td><div align="center">Minutos</div></td>
          <td><div align="center">Segundos</div></td>
          <td width="12%">&nbsp;</td>
          <td><div align="center">Horas</div></td>
          <td><div align="center">Minutos</div></td>
          <td><div align="center">Segundos</div></td>
          <td width="13%">&nbsp;</td>
    </tr>
  <?


$sql = "select * from hora_encerramento order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$codigo = $linha[0];
$dia = $linha[1];
$horas_inicio = $linha[2];
$minutos_inicio = $linha[3];
$segundos_inicio = $linha[4];
$horas_termino = $linha[5];
$minutos_termino = $linha[6];
$segundos_termino = $linha[7];

?>

        <tr>
<form action="autalizar_horario.php" method="post" name="form2">
          <td height="40"><div align="center"><? echo $dia; ?>
              <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
</div></td>
          <td width="7%"><div align="center">
            <input name="horas_inicio" type="text" id="horas_inicio" value="<? echo $horas_inicio; ?>" size="2" maxlength="2">
          </div></td>
          <td width="9%"><div align="center">
            <input name="minutos_inicio" type="text" id="minutos_inicio" value="<? echo $minutos_inicio; ?>" size="2" maxlength="2">
          </div></td>
          <td width="8%"><div align="center">
            <input name="segundos_inicio" type="text" id="horas3" value="<? echo $segundos_inicio; ?>" size="2" maxlength="2">
          </div></td>
          <td>&nbsp;</td>
          <td width="8%"><div align="center">
              <input name="horas_termino" type="text" id="horas_termino" value="<? echo $horas_termino; ?>" size="2" maxlength="2">
          </div></td>
          <td width="9%"><div align="center">
              <input name="minutos_termino" type="text" id="minutos_termino" value="<? echo $minutos_termino; ?>" size="2" maxlength="2">
          </div></td>
          <td width="8%"><div align="center">
              <input name="segundos_termino" type="text" id="horas3" value="<? echo $segundos_termino; ?>" size="2" maxlength="2">
          </div></td>
          <td><input type="submit" name="Submit2" value="Atualizar"></td>
		  </form>

        </tr>
          <? } ?>

  </table>

<p>&nbsp;</p>
</body>
</html>
