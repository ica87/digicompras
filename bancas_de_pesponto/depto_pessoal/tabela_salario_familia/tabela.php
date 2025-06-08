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
$de = $_POST['de'];
$ate = $_POST['ate'];
$valor = $_POST['valor'];

$de2 = $_POST['de2'];
$ate2 = $_POST['ate2'];
$valor2 = $_POST['valor2'];


?>

<?

if($comando=="Gravar para novo periodo"){

if($mes>=12){

$proximo_mes = "01";

}
else{

$proximo_mes_prepara = bcadd($mes,1);

if($proximo_mes_prepara <=9){

$proximo_mes = "0$proximo_mes_prepara";
}
else{

$proximo_mes = $proximo_mes_prepara;

}

}

if($mes>=12){

$proximo_ano = bcadd($ano,1);

}
else{

$proximo_ano = $ano;

}

$sql = "SELECT * FROM tabela_salario_familia where mes = '$proximo_mes' and ano = '$proximo_ano' order by ano,mes desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$registros = mysql_num_rows($res);


}

if($registros>="1"){

echo "TABELA DO SALARIO FAMILIA REFERENTE A $proximo_mes-$proximo_ano JÁ CONSTA NO SISTEMA!!!... IMPOSSIVEL GRAVAR NOVAMENTE!!!... UTILIZE A OPÇÃO ATUALIZAR!!!...";

}
else{

$date = date('Y-m-d');
$hora = date('H:i:s');

$comando = "insert into tabela_salario_familia(mes,ano,de,ate,valor,de2,ate2,valor2,date,hora)

values('$proximo_mes','$proximo_ano','$de','$ate','$valor','$de2','$ate2','$valor2','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar registro de TAVELA DO SALARIO FAMILIA no sistema!");

echo "Registro de TABELA DO SALARIO FAMILIA do mes $proximo_mes-$proximo_ano gravado com sucesso!<br><br>";

}

}

?>


<?

if($comando=="Atualizar"){

$date = date('Y-m-d');
$hora = date('H:i:s');


$comando = "insert into tabela_salario_familia_alteracoes(mes,ano,de,ate,valor,de2,ate2,valor2,date,hora)

values('$mes','$ano','$de','$ate','$valor','$de2','$ate2','$valor2','$date','$hora')";

mysql_query($comando,$conexao) or die("Erro ao gravar ALTERAÇÃO de TAVELA DO SALARIO FAMILIA no sistema!");




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`tabela_salario_familia` set `mes` = '$mes',`ano` = '$ano',`de` = '$de',`ate` = '$ate',`valor` = '$valor',`de2` = '$de2',`ate2` = '$ate2',`valor2` = '$valor2',`date` = '$date',`hora` = '$hora' where `tabela_salario_familia`. `codigo` = '$codigo' limit 1 ";
}
mysql_query($comando,$conexao) or die("Erro ao alterar TABELA DO SALARIO FAMILIA no sistema!");

echo "Novos valores da TABELA DO SALARIO FAMILIA referente a $mes-$ano alterados com sucesso!";




}

?>


</p>
<p class="style2">Aten&ccedil;&atilde;o na atualiza&ccedil;&atilde;o da tabela de salario familia &eacute; fundamental!</p>
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

$sql = "SELECT * FROM tabela_salario_familia order by codigo desc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$mes = $linha[7];
$ano = $linha[8];

$de = $linha[1];
$ate = $linha[2];
$valor = $linha[3];

$de2 = $linha[4];
$ate2 = $linha[5];
$valor2 = $linha[6];


?>
        <td width="22%">&nbsp;</td>
        <td colspan="3"><div align="center">
          <input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
          <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
          <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>">
          TABELA SALARIO FAMILIA DO &Uacute;LTIMO PERIODO GRAVADO NO SISTEMA 
          <select name="mes" id="mes">
            <option><? echo $mes; ?></option>
          </select>
          <select name="ano" id="ano">
            <option><? echo $ano; ?></option>
          </select>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="17%"><div align="center">De</div></td>
        <td width="17%"><div align="center">At&eacute;</div></td>
        <td width="21%"><div align="center">Valor</div></td>
        <td width="23%">&nbsp;</td>
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
          <input name="valor" type="text" id="valor" value="<? echo $valor; ?>">
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
            <input name="valor2" type="text" id="valor2" value="<? echo $valor2; ?>">
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div align="center">
          <input name="comando" type="hidden" id="comando" value="Gravar para novo periodo">
        </div></td>
        <td><input type="submit" name="button" id="button" value="Gravar para novo periodo"></td>
        <td>&nbsp;</td>
      </tr>
      <? } ?>
    </table>
</form>
  <p align="center">&nbsp;</p>
  <p align="center">&Uacute;LTIMOS 3 PERIODOS DA TABELA SALARIO FAMILIA</p>

  <table width="100%" border="0">


<?

$sql = "SELECT * FROM tabela_salario_familia order by codigo desc limit 3";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];
$mes = $linha[7];
$ano = $linha[8];

$de = $linha[1];
$ate = $linha[2];
$valor = $linha[3];

$de2 = $linha[4];
$ate2 = $linha[5];
$valor2 = $linha[6];


?>
    <form name="form2" method="post" action="tabela.php">

    <tr>

      <td width="22%">&nbsp;</td>
      <td width="17%"><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>">
        <input name="mes" type="hidden" id="mes" value="<? echo $mes; ?>">
        <input name="ano" type="hidden" id="ano" value="<? echo $ano; ?>"></td>
      <td width="18%"><div align="center">PERIODO <? echo "$mes-$ano"; ?></div></td>
      <td width="20%">&nbsp;</td>
      <td width="23%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="17%"><div align="center">De</div></td>
      <td width="17%"><div align="center">At&eacute;</div></td>
      <td width="21%"><div align="center">Valor</div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center">
          <input name="de" type="text" id="de" value="<? echo $de; ?>">
      </div></td>
      <td><div align="center">
          <input name="ate" type="text" id="ate" value="<? echo $ate; ?>">
      </div></td>
      <td><div align="center">
          <input name="valor" type="text" id="valor" value="<? echo $valor; ?>">
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
          <input name="valor2" type="text" id="valor2" value="<? echo $valor2; ?>">
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">
        <input name="comando" type="hidden" id="comando" value="Atualizar">
      </div></td>
      <td><input type="submit" name="button" id="button" value="Atualizar"></td>
      <td>&nbsp;</td>
    </tr>
      </form>
    
    <?  }  ?>

  </table>

  <p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
