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
$codigo = $_POST['codigo'];
$de = $_POST['de'];
$ate = $_POST['ate'];
$aliquota = $_POST['aliquota'];
$de2 = $_POST['de2'];
$ate2 = $_POST['ate2'];
$aliquota2 = $_POST['aliquota2'];
$de3 = $_POST['de3'];
$ate3 = $_POST['ate3'];
$aliquota3 = $_POST['aliquota3'];
$de4 = $_POST['de4'];
$ate4 = $_POST['ate4'];
$aliquota4 = $_POST['aliquota4'];

?>

<?

if($comando=="Gravar para novo periodo"){


$sql = "SELECT * FROM tabela_inss where mes = '$mes' and ano = '$ano' order by ano,mes desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);


}

if($registros>="1"){

echo "TABELA DO INSS REFERENTE A $mes-$ano JÁ CONSTA NO SISTEMA!!!... IMPOSSIVEL GRAVAR NOVAMENTE!!!... UTILIZE A OPÇÃO ATUALIZAR!!!...";

}
else{

$date = date('Y-m-d');
$hora = date('H:i:s');

$comando = "insert into tabela_inss(mes,ano,de,ate,aliquota,de2,ate2,aliquota2,de3,ate3,aliquota3,de4,ate4,aliquota4,date,hora)

values('$mes','$ano','$de','$ate','$aliquota','$de2','$ate2','$aliquota2','$de3','$ate3','$aliquota3','$de4','$ate4','$aliquota4','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar registro de TAVELA DO INSS no sistema!");

echo "Registro de TABELA DO INSS do mes $mes-$ano gravado com sucesso!<br><br>";

}

}

?>


<?

if($comando=="Atualizar"){

$date = date('Y-m-d');
$hora = date('H:i:s');


$comando = "insert into tabela_inss_alteracoes(mes,ano,de,ate,aliquota,de2,ate2,aliquota2,de3,ate3,aliquota3,de4,ate4,aliquota4,date,hora)

values('$mes','$ano','$de','$ate','$aliquota','$de2','$ate2','$aliquota2','$de3','$ate3','$aliquota3','$de4','$ate4','$aliquota4','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar ALTERAÇÃO de TAVELA DO INSS no sistema!");




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`tabela_inss` set `mes` = '$mes',`ano` = '$ano',`de` = '$de',`ate` = '$ate',`aliquota` = '$aliquota',`de2` = '$de2',`ate2` = '$ate2',`aliquota2` = '$aliquota2',`de3` = '$de3',`ate3` = '$ate3',`aliquota3` = '$aliquota3',`de4` = '$de4',`ate4` = '$ate4',`aliquota4` = '$aliquota4',`date` = '$date',`hora` = '$hora' where `tabela_inss`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar tabela do inss no sistema!");

echo "Novos valores da tebela do inss referente a $mes-$ano alterados com sucesso!";




}

?>


</p>
<p class="style2">Aten&ccedil;&atilde;o na atualiza&ccedil;&atilde;o da tabela de inss &eacute; fundamental!</p>
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
      <tr>
<?

$sql = "SELECT * FROM tabela_inss order by ano,mes desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$mes = $linha[1];
$ano = $linha[2];

$de = $linha[3];
$ate = $linha[4];
$aliquota = $linha[5];

$de2 = $linha[6];
$ate2 = $linha[7];
$aliquota2 = $linha[8];

$de3 = $linha[9];
$ate3 = $linha[10];
$aliquota3 = $linha[11];

$de4 = $linha[12];
$ate4 = $linha[13];
$aliquota4 = $linha[14];


?>
        <td width="19%">&nbsp;</td>
        <td colspan="3"><div align="center">
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
          TABELA INSS DO &Uacute;LTIMO PERIODO GRAVADO NO SISTEMA 
          <select name="mes" id="mes">
            <option><? echo $mes; ?></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
          <select name="ano" id="ano">
            <option><? echo $ano; ?></option>
          </select>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="14%"><div align="center">De</div></td>
        <td width="12%"><div align="center">At&eacute;</div></td>
        <td width="10%"><div align="center">Aliquota</div></td>
        <td width="28%">&nbsp;</td>
      </tr>

      <tr>
        <td><div align="center"></div></td>
        <td><div align="center">
          <input name="de" type="text" id="de" value="<? echo $de; ?>">
        </div></td>
        <td><div align="center">
          <input name="ate" type="text" id="ate" value="<? echo $ate; ?>">
        </div></td>
        <td><div align="center">
          <input name="aliquota" type="text" id="aliquota" value="<? echo $aliquota; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <input name="de2" type="text" id="de2" value="<? echo $de2; ?>">
        </div></td>
        <td><div align="center">
            <input name="ate2" type="text" id="ate2" value="<? echo $ate2; ?>">
        </div></td>
        <td><div align="center">
            <input name="aliquota2" type="text" id="aliquota2" value="<? echo $aliquota2; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <input name="de3" type="text" id="de3" value="<? echo $de3; ?>">
        </div></td>
        <td><div align="center">
            <input name="ate3" type="text" id="ate3" value="<? echo $ate3; ?>">
        </div></td>
        <td><div align="center">
            <input name="aliquota3" type="text" id="aliquota3" value="<? echo $aliquota3; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="center">
            <input name="de4" type="text" id="de4" value="<? echo $de4; ?>">
        </div></td>
        <td><div align="center">
            <input name="ate4" type="text" id="ate4" value="<? echo $ate4; ?>">
        </div></td>
        <td><div align="center">
            <input name="aliquota4" type="text" id="aliquota4" value="<? echo $aliquota4; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center">
          <select name="comando" id="comando">
            <option>Atualizar</option>
            <option selected>Gravar para novo periodo</option>
          </select>
          </div></td>
        <td><input type="submit" name="button" id="button" value="Gravar"></td>
        <td>&nbsp;</td>
      </tr>
      <? } ?>
    </table>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</body>
</html>
