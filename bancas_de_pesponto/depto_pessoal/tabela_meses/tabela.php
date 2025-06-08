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
require '../../../conect/conect.php';
?>



<?

$comando = $_POST['comando'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$codigo = $_POST['codigo'];
$codigo_atualizar = $_POST['codigo_atualizar'];


?>

<?

$mes01 = $_POST['mes01'];
$dias01 = $_POST['dias01'];
$dias_trabalhados01 = $_POST['dias_trabalhados01'];
$dsr01 = $_POST['dsr01'];

$mes02 = $_POST['mes02'];
$dias02 = $_POST['dias02'];
$dias_trabalhados02 = $_POST['dias_trabalhados02'];
$dsr02 = $_POST['dsr02'];

$mes03 = $_POST['mes03'];
$dias03 = $_POST['dias03'];
$dias_trabalhados03 = $_POST['dias_trabalhados03'];
$dsr03 = $_POST['dsr03'];

$mes04 = $_POST['mes04'];
$dias04 = $_POST['dias04'];
$dias_trabalhados04 = $_POST['dias_trabalhados04'];
$dsr05 = $_POST['dsr05'];

$mes05 = $_POST['mes05'];
$dias05 = $_POST['dias05'];
$dias_trabalhados05 = $_POST['dias_trabalhados05'];
$dsr05 = $_POST['dsr05'];

$mes06 = $_POST['mes06'];
$dias06 = $_POST['dias06'];
$dias_trabalhados06 = $_POST['dias_trabalhados06'];
$dsr6 = $_POST['dsr6'];

$mes07 = $_POST['mes07'];
$dias07 = $_POST['dias07'];
$dias_trabalhados07 = $_POST['dias_trabalhados07'];
$dsr07 = $_POST['dsr07'];

$mes08 = $_POST['mes08'];
$dias08 = $_POST['dias08'];
$dias_trabalhados08 = $_POST['dias_trabalhados08'];
$dsr08 = $_POST['dsr08'];

$mes09 = $_POST['mes09'];
$dias09 = $_POST['dias09'];
$dias_trabalhados09 = $_POST['dias_trabalhados09'];
$dsr09 = $_POST['dsr09'];

$mes10 = $_POST['mes10'];
$dias10 = $_POST['dias10'];
$dias_trabalhados10 = $_POST['dias_trabalhados10'];
$dsr10 = $_POST['dsr10'];

$mes11 = $_POST['mes11'];
$dias11 = $_POST['dias11'];
$dias_trabalhados11 = $_POST['dias_trabalhados11'];
$dsr11 = $_POST['dsr11'];

$mes12 = $_POST['mes12'];
$dias12 = $_POST['dias12'];
$dias_trabalhados12 = $_POST['dias_trabalhados12'];
$dsr12 = $_POST['dsr12'];



$mes_comercial = "30";
$proximo_ano = bcadd($ano,1);


if($comando=="Gravar para novo periodo"){




$sql = "SELECT * FROM tabela_meses where ano = '$proximo_ano' order by ano desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);


}

if($registros>="1"){

echo "TABELA MESES REFERENTE A $proximo_ano JÁ CONSTA NO SISTEMA!!!... IMPOSSIVEL GRAVAR NOVAMENTE!!!... UTILIZE A OPÇÃO ATUALIZAR!!!...";

}
else{

$date = date('Y-m-d');
$hora = date('H:i:s');


$comando = "insert into tabela_meses(mes01,ano,dias01,dias_trabalhados01,dsr01,mes02,dias02,dias_trabalhados02,dsr02,mes03,dias03,dias_trabalhados03,dsr03,mes04,dias04,dias_trabalhados04,dsr04,mes05,dias05,dias_trabalhados05,dsr05,mes06,dias06,dias_trabalhados06,dsr06,mes07,dias07,dias_trabalhados07,dsr07,mes08,dias08,dias_trabalhados08,dsr08,mes09,dias09,dias_trabalhados09,dsr09,mes10,dias10,dias_trabalhados10,dsr10,mes11,dias11,dias_trabalhados11,dsr11,mes12,dias12,dias_trabalhados12,dsr12,mes_comercial,date,hora)

values('$mes01','$proximo_ano','$dias01','$dias_trabalhados01','$dsr01','$mes02','$dias02','$dias_trabalhados02','$dsr02','$mes03','$dias03','$dias_trabalhados03','$dsr03','$mes04','$dias04','$dias_trabalhados04','$dsr04','$mes05','$dias05','$dias_trabalhados05','$dsr05','$mes06','$dias06','$dias_trabalhados06','$dsr06','$mes07','$dias07','$dias_trabalhados07','$dsr07','$mes08','$dias08','$dias_trabalhados08','$dsr08','$mes09','$dias09','$dias_trabalhados09','$dsr09','$mes10','$dias10','$dias_trabalhados10','$dsr10','$mes11','$dias11','$dias_trabalhados11','$dsr11','$mes12','$dias12','$dias_trabalhados12','$dsr12','$mes_comercial','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao inserir registro de TABELA MESES do ano $proximo_ano no sistema!");

echo "Registro de TABELA MESES do ano $proximo_ano gravado com sucesso!<br><br>";

}

}

?>


<?

if($comando=="Atualizar"){



$mes01 = $_POST['mes01'];
$dias01 = $_POST['dias01'];
$dias_trabalhados01 = $_POST['dias_trabalhados01'];
$dsr01 = $_POST['dsr01'];

$mes02 = $_POST['mes02'];
$dias02 = $_POST['dias02'];
$dias_trabalhados02 = $_POST['dias_trabalhados02'];
$dsr02 = $_POST['dsr02'];

$mes03 = $_POST['mes03'];
$dias03 = $_POST['dias03'];
$dias_trabalhados03 = $_POST['dias_trabalhados03'];
$dsr03 = $_POST['dsr03'];

$mes04 = $_POST['mes04'];
$dias04 = $_POST['dias04'];
$dias_trabalhados04 = $_POST['dias_trabalhados04'];
$dsr05 = $_POST['dsr05'];

$mes05 = $_POST['mes05'];
$dias05 = $_POST['dias05'];
$dias_trabalhados05 = $_POST['dias_trabalhados05'];
$dsr05 = $_POST['dsr05'];

$mes06 = $_POST['mes06'];
$dias06 = $_POST['dias06'];
$dias_trabalhados06 = $_POST['dias_trabalhados06'];
$dsr6 = $_POST['dsr6'];

$mes07 = $_POST['mes07'];
$dias07 = $_POST['dias07'];
$dias_trabalhados07 = $_POST['dias_trabalhados07'];
$dsr07 = $_POST['dsr07'];

$mes08 = $_POST['mes08'];
$dias08 = $_POST['dias08'];
$dias_trabalhados08 = $_POST['dias_trabalhados08'];
$dsr08 = $_POST['dsr08'];

$mes09 = $_POST['mes09'];
$dias09 = $_POST['dias09'];
$dias_trabalhados09 = $_POST['dias_trabalhados09'];
$dsr09 = $_POST['dsr09'];

$mes10 = $_POST['mes10'];
$dias10 = $_POST['dias10'];
$dias_trabalhados10 = $_POST['dias_trabalhados10'];
$dsr10 = $_POST['dsr10'];

$mes11 = $_POST['mes11'];
$dias11 = $_POST['dias11'];
$dias_trabalhados11 = $_POST['dias_trabalhados11'];
$dsr11 = $_POST['dsr11'];

$mes12 = $_POST['mes12'];
$dias12 = $_POST['dias12'];
$dias_trabalhados12 = $_POST['dias_trabalhados12'];
$dsr12 = $_POST['dsr12'];


$date = date('Y-m-d');
$hora = date('H:i:s');


$comando = "insert into tabela_meses_alteracoes(mes01,ano,dias01,dias_trabalhados01,dsr01,mes02,dias02,dias_trabalhados02,dsr02,mes03,dias03,dias_trabalhados03,dsr03,mes04,dias04,dias_trabalhados04,dsr04,mes05,dias05,dias_trabalhados05,dsr05,mes06,dias06,dias_trabalhados06,dsr06,mes07,dias07,dias_trabalhados07,dsr07,mes08,dias08,dias_trabalhados08,dsr08,mes09,dias09,dias_trabalhados09,dsr09,mes10,dias10,dias_trabalhados10,dsr10,mes11,dias11,dias_trabalhados11,dsr11,mes12,dias12,dias_trabalhados12,dsr12,mes_comercial,date,hora)

values('$mes01','$ano','$dias01','$dias_trabalhados01','$dsr01','$mes02','$dias02','$dias_trabalhados02','$dsr02','$mes03','$dias03','$dias_trabalhados03','$dsr03','$mes04','$dias04','$dias_trabalhados04','$dsr04','$mes05','$dias05','$dias_trabalhados05','$dsr05','$mes06','$dias06','$dias_trabalhados06','$dsr06','$mes07','$dias07','$dias_trabalhados07','$dsr07','$mes08','$dias08','$dias_trabalhados08','$dsr08','$mes09','$dias09','$dias_trabalhados09','$dsr09','$mes10','$dias10','$dias_trabalhados10','$dsr10','$mes11','$dias11','$dias_trabalhados11','$dsr11','$mes12','$dias12','$dias_trabalhados12','$dsr12','$mes_comercial','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar alteracao no registro de TABELA MESES no sistema!");




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`tabela_meses` set `ano` = '$ano',`dias01` = '$dias01',`dias_trabalhados01` = '$dias_trabalhados01',`dsr01` = '$dsr01',`dias02` = '$dias02',`dias_trabalhados02` = '$dias_trabalhados02',`dsr02` = '$dsr02',`dias03` = '$dias03',`dias_trabalhados03` = '$dias_trabalhados03',`dsr03` = '$dsr03',`dias04` = '$dias04',`dias_trabalhados04` = '$dias_trabalhados04',`dsr04` = '$dsr04',`dias05` = '$dias05',`dias_trabalhados05` = '$dias_trabalhados05',`dsr05` = '$dsr05',`dias06` = '$dias06',`dias_trabalhados06` = '$dias_trabalhados06',`dsr06` = '$dsr06',`dias07` = '$dias07',`dias_trabalhados07` = '$dias_trabalhados07',`dsr07` = '$dsr07',`dias08` = '$dias08',`dias_trabalhados08` = '$dias_trabalhados08',`dsr08` = '$dsr08',`dias09` = '$dias09',`dias_trabalhados09` = '$dias_trabalhados09',`dsr09` = '$dsr09',`dias10` = '$dias10',`dias_trabalhados10` = '$dias_trabalhados10',`dsr10` = '$dsr10',`dias11` = '$dias11',`dias_trabalhados11` = '$dias_trabalhados11',`dsr11` = '$dsr11',`dias12` = '$dias12',`dias_trabalhados12` = '$dias_trabalhados12',`dsr12` = '$dsr12',`date` = '$date',`hora` = '$hora' where `tabela_meses`. `codigo` = '$codigo_atualizar' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar TABELA MESES no sistema!");

echo "Novos valores da TABELA MESES referente a $ano alterados com sucesso!";




}

?>


</p>
<p class="style2">Aten&ccedil;&atilde;o na atualiza&ccedil;&atilde;o da tabela MESES &eacute; fundamental!</p>
<form name="form1" method="post" action="../principal.php">
  <input type="submit" name="Submit3" value="Voltar ao menu principal">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
</form>
  <p>&nbsp;</p>
  <form name="form2" method="post" action="tabela.php">
    <table width="100%" border="0">
<?

$sql = "SELECT * FROM tabela_meses order by ano desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$mes01 = $linha[1];
$ano = $linha[2];

$dias01 = $linha[3];
$dias_trabalhados01 = $linha[4];
$dsr01 = $linha[5];

$mes02 = $linha[6];
$dias02 = $linha[7];
$dias_trabalhados02 = $linha[8];
$dsr02 = $linha[9];

$mes03 = $linha[10];
$dias03 = $linha[11];
$dias_trabalhados03 = $linha[12];
$dsr03 = $linha[13];

$mes04 = $linha[14];
$dias04 = $linha[15];
$dias_trabalhados04 = $linha[16];
$dsr04 = $linha[17];

$mes05 = $linha[18];
$dias05 = $linha[19];
$dias_trabalhados05 = $linha[20];
$dsr05 = $linha[21];

$mes06 = $linha[22];
$dias06 = $linha[23];
$dias_trabalhados06 = $linha[24];
$dsr06 = $linha[25];

$mes07 = $linha[26];
$dias07 = $linha[27];
$dias_trabalhados07 = $linha[28];
$dsr07 = $linha[29];

$mes08 = $linha[30];
$dias08 = $linha[31];
$dias_trabalhados08 = $linha[32];
$dsr08 = $linha[33];

$mes09 = $linha[34];
$dias09 = $linha[35];
$dias_trabalhados09 = $linha[36];
$dsr09 = $linha[37];

$mes10 = $linha[38];
$dias10 = $linha[39];
$dias_trabalhados10 = $linha[40];
$dsr10 = $linha[41];

$mes11 = $linha[42];
$dias11 = $linha[43];
$dias_trabalhados11 = $linha[44];
$dsr11 = $linha[45];

$mes12 = $linha[46];
$dias12 = $linha[47];
$dias_trabalhados12 = $linha[48];
$dsr12 = $linha[49];

$mes_comercial = $linha[50];
$date = $linha[51];
$hora = $linha[52];


?>

      <tr>
        <td width="22%">&nbsp;</td>
        <td colspan="3"><div align="center">
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
          TABELA MESES DO &Uacute;LTIMO ANO GRAVADO NO SISTEMA 
          
          <select name="ano" id="ano">
            <option><? echo $ano; ?></option>
          </select>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Mes</div></td>
        <td width="17%"><div align="center">Dias</div></td>
        <td width="17%"><div align="center">Dias Trabalhados</div></td>
        <td width="17%"><div align="center">DSR</div></td>
        <td width="23%">&nbsp;</td>
      </tr>

      <tr>
        <td><div align="center"><? echo "$mes01"; ?>
          <input name="mes01" type="hidden" id="mes01" value="<? echo $mes01; ?>">
        </div></td>
        <td><input name="dias01" type="text" id="dias01" value="<? echo $dias01; ?>"></td>
        <td><input name="dias_trabalhados01" type="text" id="dias_trabalhados01" value="<? echo $dias_trabalhados01; ?>"></td>
        <td><div align="center">
          <input name="dsr01" type="text" id="dsr01" value="<? echo $dsr01; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes02"; ?>
          <input name="mes02" type="hidden" id="mes02" value="<? echo $mes02; ?>">
        </div></td>
        <td><input name="dias02" type="text" id="dias02" value="<? echo $dias02; ?>"></td>
        <td><input name="dias_trabalhados02" type="text" id="dias_trabalhados02" value="<? echo $dias_trabalhados02; ?>"></td>
        <td><div align="center">
          <input name="dsr02" type="text" id="dsr02" value="<? echo $dsr02; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes03"; ?>
          <input name="mes03" type="hidden" id="mes03" value="<? echo $mes03; ?>">
        </div></td>
        <td><input name="dias03" type="text" id="dias03" value="<? echo $dias03; ?>"></td>
        <td><input name="dias_trabalhados03" type="text" id="dias_trabalhados03" value="<? echo $dias_trabalhados03; ?>"></td>
        <td><div align="center">
          <input name="dsr03" type="text" id="dsr03" value="<? echo $dsr03; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes04"; ?>
          <input name="mes04" type="hidden" id="mes04" value="<? echo $mes04; ?>">
        </div></td>
        <td><input name="dias04" type="text" id="dias04" value="<? echo $dias04; ?>"></td>
        <td><input name="dias_trabalhados04" type="text" id="dias_trabalhados04" value="<? echo $dias_trabalhados04; ?>"></td>
        <td><div align="center">
          <input name="dsr04" type="text" id="dsr04" value="<? echo $dsr04; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes05"; ?>
          <input name="mes05" type="hidden" id="mes05" value="<? echo $mes05; ?>">
        </div></td>
        <td><input name="dias05" type="text" id="dias05" value="<? echo $dias05; ?>"></td>
        <td><input name="dias_trabalhados05" type="text" id="dias_trabalhados05" value="<? echo $dias_trabalhados05; ?>"></td>
        <td><div align="center">
          <input name="dsr05" type="text" id="dsr05" value="<? echo $dsr05; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes06"; ?>
          <input name="mes06" type="hidden" id="mes06" value="<? echo $mes06; ?>">
        </div></td>
        <td><input name="dias06" type="text" id="dias06" value="<? echo $dias06; ?>"></td>
        <td><input name="dias_trabalhados06" type="text" id="dias_trabalhados06" value="<? echo $dias_trabalhados06; ?>"></td>
        <td><div align="center">
          <input name="dsr06" type="text" id="dsr06" value="<? echo $dsr06; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes07"; ?>
          <input name="mes07" type="hidden" id="mes07" value="<? echo $mes07; ?>">
        </div></td>
        <td><input name="dias07" type="text" id="dias07" value="<? echo $dias07; ?>"></td>
        <td><input name="dias_trabalhados07" type="text" id="dias_trabalhados07" value="<? echo $dias_trabalhados07; ?>"></td>
        <td><div align="center">
          <input name="ds0r7" type="text" id="ds0r7" value="<? echo $dsr07; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes08"; ?>
          <input name="mes08" type="hidden" id="mes08" value="<? echo $mes08; ?>">
        </div></td>
        <td><input name="dias08" type="text" id="dias08" value="<? echo $dias08; ?>"></td>
        <td><input name="dias_trabalhados08" type="text" id="dias_trabalhados08" value="<? echo $dias_trabalhados08; ?>"></td>
        <td><div align="center">
          <input name="dsr08" type="text" id="dsr08" value="<? echo $dsr08; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes09"; ?>
          <input name="mes09" type="hidden" id="mes09" value="<? echo $mes09; ?>">
        </div></td>
        <td><input name="dias09" type="text" id="dias09" value="<? echo $dias09; ?>"></td>
        <td><input name="dias_trabalhados09" type="text" id="dias_trabalhados09" value="<? echo $dias_trabalhados09; ?>"></td>
        <td><div align="center">
          <input name="dsr09" type="text" id="dsr09" value="<? echo $dsr09; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes10"; ?>
          <input name="mes10" type="hidden" id="mes10" value="<? echo $mes10; ?>">
        </div></td>
        <td><input name="dias10" type="text" id="dias10" value="<? echo $dias10; ?>"></td>
        <td><input name="dias_trabalhados10" type="text" id="dias_trabalhados10" value="<? echo $dias_trabalhados10; ?>"></td>
        <td><div align="center">
          <input name="dsr10" type="text" id="dsr10" value="<? echo $dsr10; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes11"; ?>
          <input name="mes11" type="hidden" id="mes11" value="<? echo $mes11; ?>">
        </div></td>
        <td><input name="dias11" type="text" id="dias11" value="<? echo $dias11; ?>"></td>
        <td><input name="dias_trabalhados11" type="text" id="dias_trabalhados11" value="<? echo $dias_trabalhados11; ?>"></td>
        <td><div align="center">
          <input name="dsr11" type="text" id="dsr11" value="<? echo $dsr11; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"><? echo "$mes12"; ?>
          <input name="mes12" type="hidden" id="mes12" value="<? echo $mes12; ?>">
        </div></td>
        <td><input name="dias12" type="text" id="dias12" value="<? echo $dias12; ?>"></td>
        <td><input name="dias_trabalhados12" type="text" id="dias_trabalhados12" value="<? echo $dias_trabalhados12; ?>"></td>
        <td><div align="center">
          <input name="dsr12" type="text" id="dsr12" value="<? echo $dsr12; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input name="comando" type="hidden" id="comando" value="Gravar para novo periodo"></td>
        <td><div align="center">
          <input type="submit" name="button" id="button" value="Gravar para novo periodo">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <? } ?>
    </table>
</form>
  <p align="center">&nbsp;</p>
  <p align="center">&Uacute;LTIMO ANO DA TABELA MESES</p>

  <table width="100%" border="0">


<?

$sql = "SELECT * FROM tabela_meses_alteracoes order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$mes01 = $linha[1];
$ano = $linha[2];

$dias01 = $linha[3];
$dias_trabalhados01 = $linha[4];
$dsr01 = $linha[5];

$mes02 = $linha[6];
$dias02 = $linha[7];
$dias_trabalhados02 = $linha[8];
$dsr02 = $linha[9];

$mes03 = $linha[10];
$dias03 = $linha[11];
$dias_trabalhados03 = $linha[12];
$dsr03 = $linha[13];

$mes04 = $linha[14];
$dias04 = $linha[15];
$dias_trabalhados04 = $linha[16];
$dsr04 = $linha[17];

$mes05 = $linha[18];
$dias05 = $linha[19];
$dias_trabalhados05 = $linha[20];
$dsr05 = $linha[21];

$mes06 = $linha[22];
$dias06 = $linha[23];
$dias_trabalhados06 = $linha[24];
$dsr06 = $linha[25];

$mes07 = $linha[26];
$dias07 = $linha[27];
$dias_trabalhados07 = $linha[28];
$dsr07 = $linha[29];

$mes08 = $linha[30];
$dias08 = $linha[31];
$dias_trabalhados08 = $linha[32];
$dsr08 = $linha[33];

$mes09 = $linha[34];
$dias09 = $linha[35];
$dias_trabalhados09 = $linha[36];
$dsr09 = $linha[37];

$mes10 = $linha[38];
$dias10 = $linha[39];
$dias_trabalhados10 = $linha[40];
$dsr10 = $linha[41];

$mes11 = $linha[42];
$dias11 = $linha[43];
$dias_trabalhados11 = $linha[44];
$dsr11 = $linha[45];

$mes12 = $linha[46];
$dias12 = $linha[47];
$dias_trabalhados12 = $linha[48];
$dsr12 = $linha[49];

$mes_comercial = $linha[50];
$date = $linha[51];
$hora = $linha[52];


?>
    <form name="form2" method="post" action="tabela.php">

    <tr>

      <td width="22%">&nbsp;</td>
      <td width="17%"><div align="center">
        <input name="codigo_atualizar" type="hidden" id="codigo_atualizar" value="<? echo $codigo; ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
      </div></td>
      <td width="18%"><div align="center">ANO <? echo "$ano"; ?></div></td>
      <td><div align="center"><? echo "$date - $hora"; ?></div>        <div align="center"></div></td>
      <td width="23%">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">Mes</div></td>
      <td><div align="center">Dias</div></td>
      <td><div align="center">Dias Trabalhados</div></td>
      <td width="20%"><div align="center">DSR</div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes01"; ?>
              <input name="mes01" type="hidden" id="mes01" value="<? echo $mes01; ?>">
      </div></td>
      <td><input name="dias01" type="text" id="dias01" value="<? echo $dias01; ?>"></td>
      <td><input name="dias_trabalhados01" type="text" id="dias_trabalhados01" value="<? echo $dias_trabalhados01; ?>"></td>
      <td><div align="center">
          <input name="dsr01" type="text" id="dsr01" value="<? echo $dsr01; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes02"; ?>
              <input name="mes02" type="hidden" id="mes02" value="<? echo $mes02; ?>">
      </div></td>
      <td><input name="dias02" type="text" id="dias02" value="<? echo $dias02; ?>"></td>
      <td><input name="dias_trabalhados02" type="text" id="dias_trabalhados02" value="<? echo $dias_trabalhados02; ?>"></td>
      <td><div align="center">
          <input name="dsr02" type="text" id="dsr02" value="<? echo $dsr02; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes03"; ?>
              <input name="mes03" type="hidden" id="mes03" value="<? echo $mes03; ?>">
      </div></td>
      <td><input name="dias03" type="text" id="dias03" value="<? echo $dias03; ?>"></td>
      <td><input name="dias_trabalhados03" type="text" id="dias_trabalhados03" value="<? echo $dias_trabalhados03; ?>"></td>
      <td><div align="center">
          <input name="dsr03" type="text" id="dsr03" value="<? echo $dsr03; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes04"; ?>
              <input name="mes04" type="hidden" id="mes04" value="<? echo $mes04; ?>">
      </div></td>
      <td><input name="dias04" type="text" id="dias04" value="<? echo $dias04; ?>"></td>
      <td><input name="dias_trabalhados04" type="text" id="dias_trabalhados04" value="<? echo $dias_trabalhados04; ?>"></td>
      <td><div align="center">
          <input name="dsr04" type="text" id="dsr04" value="<? echo $dsr04; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes05"; ?>
              <input name="mes05" type="hidden" id="mes05" value="<? echo $mes05; ?>">
      </div></td>
      <td><input name="dias05" type="text" id="dias05" value="<? echo $dias05; ?>"></td>
      <td><input name="dias_trabalhados05" type="text" id="dias_trabalhados05" value="<? echo $dias_trabalhados05; ?>"></td>
      <td><div align="center">
          <input name="dsr05" type="text" id="dsr05" value="<? echo $dsr05; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes06"; ?>
              <input name="mes06" type="hidden" id="mes06" value="<? echo $mes06; ?>">
      </div></td>
      <td><input name="dias06" type="text" id="dias06" value="<? echo $dias06; ?>"></td>
      <td><input name="dias_trabalhados06" type="text" id="dias_trabalhados06" value="<? echo $dias_trabalhados06; ?>"></td>
      <td><div align="center">
          <input name="dsr06" type="text" id="dsr06" value="<? echo $dsr06; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes07"; ?>
              <input name="mes07" type="hidden" id="mes07" value="<? echo $mes07; ?>">
      </div></td>
      <td><input name="dias07" type="text" id="dias07" value="<? echo $dias07; ?>"></td>
      <td><input name="dias_trabalhados07" type="text" id="dias_trabalhados07" value="<? echo $dias_trabalhados07; ?>"></td>
      <td><div align="center">
          <input name="ds0r7" type="text" id="ds0r7" value="<? echo $dsr07; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes08"; ?>
              <input name="mes08" type="hidden" id="mes08" value="<? echo $mes08; ?>">
      </div></td>
      <td><input name="dias08" type="text" id="dias08" value="<? echo $dias08; ?>"></td>
      <td><input name="dias_trabalhados08" type="text" id="dias_trabalhados08" value="<? echo $dias_trabalhados08; ?>"></td>
      <td><div align="center">
          <input name="dsr08" type="text" id="dsr08" value="<? echo $dsr08; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes09"; ?>
              <input name="mes09" type="hidden" id="mes09" value="<? echo $mes09; ?>">
      </div></td>
      <td><input name="dias09" type="text" id="dias09" value="<? echo $dias09; ?>"></td>
      <td><input name="dias_trabalhados09" type="text" id="dias_trabalhados09" value="<? echo $dias_trabalhados09; ?>"></td>
      <td><div align="center">
          <input name="dsr09" type="text" id="dsr09" value="<? echo $dsr09; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes10"; ?>
              <input name="mes10" type="hidden" id="mes10" value="<? echo $mes10; ?>">
      </div></td>
      <td><input name="dias10" type="text" id="dias10" value="<? echo $dias10; ?>"></td>
      <td><input name="dias_trabalhados10" type="text" id="dias_trabalhados10" value="<? echo $dias_trabalhados10; ?>"></td>
      <td><div align="center">
          <input name="dsr10" type="text" id="dsr10" value="<? echo $dsr10; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes11"; ?>
              <input name="mes11" type="hidden" id="mes11" value="<? echo $mes11; ?>">
      </div></td>
      <td><input name="dias11" type="text" id="dias11" value="<? echo $dias11; ?>"></td>
      <td><input name="dias_trabalhados11" type="text" id="dias_trabalhados11" value="<? echo $dias_trabalhados11; ?>"></td>
      <td><div align="center">
          <input name="dsr11" type="text" id="dsr11" value="<? echo $dsr11; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><? echo "$mes12"; ?>
              <input name="mes12" type="hidden" id="mes12" value="<? echo $mes12; ?>">
      </div></td>
      <td><input name="dias12" type="text" id="dias12" value="<? echo $dias12; ?>"></td>
      <td><input name="dias_trabalhados12" type="text" id="dias_trabalhados12" value="<? echo $dias_trabalhados12; ?>"></td>
      <td><div align="center">
          <input name="dsr12" type="text" id="dsr12" value="<? echo $dsr12; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><div align="center">
        <input name="comando" type="hidden" id="comando" value="Atualizar">
      </div></td>
      <td><div align="center">
        <input type="submit" name="button2" id="button2" value="Atualizar">
      </div></td>
      <td>&nbsp;</td>
    </tr>
      </form>
    
    <?  }  ?>
  </table>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
