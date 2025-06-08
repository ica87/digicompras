<?php

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");

ini_set('default_charset','UTF8_general_mysql500_ci');

?>

<html>

<head>

<title>Edi&ccedil;&atilde;o de modelos</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

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
.style3 {
	color: #0000FF;
	font-weight: bold;
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
<?


$nfantasia = $_POST['nfantasia'];

$modelo = $_POST['modelo'];



$sql = "select * from modelos where nfantasia = '$nfantasia' and modelo = '$modelo'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$reg = 0;

//$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];
$percentual = $linha[11];
$historico = $linha[12];
$nivel_dificuldade = $linha[13];

$preco_empresa_old = $linha[15];
$preco_pespontador_old = $linha[16];
$preco_coladeira1_old = $linha[17];
$preco_coladeira2_old = $linha[18];
$costura_manual = $linha[19];
$trice = $linha[20];

$nfantasia = $linha[23];
$travar = $linha[24];

}
?>

<form action="autalizar.php" method="post" name="form2">

<table width="100%"  border="0">

        <tr>
          <td colspan="6" bgcolor="#CCCCCC"><div align="center"><strong>ATUALIZA&Ccedil;&Atilde;O DE PRE&Ccedil;OS DE MODELO E FICHAS POR PRE&Ccedil;O UNIT&Aacute;RIO INDIVIDUAL</strong></div></td>
        </tr>
        <tr>

          <td colspan="3">		  <div align="center"><? echo "Cliente: ".$nfantasia;  ?>
              <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
          </div></td>

          <td colspan="2"><? echo "Código: ".$codigo;  ?><input name="codigo" type="hidden" id="codigo" value="<? echo $codigo; ?>"></td>

          <td width="32%">&nbsp;</td>
    </tr>

        <tr>
          <td width="11%">&nbsp;</td>
          <td colspan="3"><div align="center">
            Atualizar fichas cadastradas De
              <? require '../../conect/conect.php'; ?>
                <select name="dia_inicial" id="dia_inicial">
              <?





    $sql = "select * from fichas where dia_envio <> '' group by dia_envio order by dia_envio asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
            </select>
            <select name="mes_inicial" id="mes_inicial">
              <?





    $sql = "select * from fichas where mes_envio <> '' group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
            </select>
            <select name="ano_inicial" id="ano_inicial">
              <?





    $sql = "select * from fichas where ano_envio <> '' group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
            </select>
at&eacute;
<select name="dia_final" id="dia_final">
  <?





    $sql = "select * from fichas group by dia_envio order by dia_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['dia_envio']."</option>";

    }

?>
</select>
<select name="mes_final" id="mes_final">
  <?





    $sql = "select * from fichas group by mes_envio order by mes_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['mes_envio']."</option>";

    }

?>
</select>
<select name="ano_final" id="ano_final">
  <?





    $sql = "select * from fichas group by ano_envio order by ano_envio desc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['ano_envio']."</option>";

    }

?>
</select>
</div></td>
          <td width="16%">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><? require '../../../conect/conect.php'; ?></td>
          <td>&nbsp;</td>
          <td width="11%">&nbsp;</td>
          <td width="17%">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Modelo Antigo</td>
          <td width="13%"><input type="text" name="modelo_old" id="modelo_old"></td>
          <td colspan="2"><span class="style3">Travar em final de periodo?
                <select name="travar" id="travar">
                  <option selected><? if(empty($travar)) { echo "Não"; } else{ echo $travar; } ?></option>
                  <option>Sim</option>
                  <option>Não</option>
                </select>
          </span></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><font color="#0000FF"><strong>Modelo</strong></font></td>
          <td><input name="modelo" type="text" id="modelo" value="<? echo $modelo; ?>"></td>
          <td><div align="right" class="style3">N&iacute;vel de Dificuldade</div></td>
          <td><select name="nivel_dificuldade" id="select4">
            <option selected><? echo $nivel_dificuldade;  ?>
            
            <?

require '../../conect/conect.php';



    $sql = "select * from nivel_dificuldade order by nivel_dificuldade asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['nivel_dificuldade']."</option>";

    }

?>
            </option>
          </select></td>
          <td><div align="right"><strong><font color="#0000FF">Pre&ccedil;o Empresa</font></strong></div></td>
          <td><input name="preco_empresa" type="text" id="preco_empresa" value="<? echo $preco_empresa; ?>">
          <input name="preco_empresa_old" type="hidden" id="preco_empresa_old" value="<? echo $preco_empresa_old; ?>"></td>
        </tr>
        <tr>
          <td><strong><font color="#0000FF">Pre&ccedil;o Pespontador</font></strong></td>
          <td><input name="preco_pespontador" type="text" id="preco_pespontador" value="<? echo $preco_pespontador; ?>">
          <input name="preco_pespontador_old" type="hidden" id="preco_pespontador_old" value="<? echo $preco_pespontador_old; ?>"></td>
          <td><div align="right"><strong><font color="#0000FF">Pre&ccedil;o Coladeira 1 </font></strong></div></td>
          <td><input name="preco_coladeira1" type="text" id="preco_coladeira1" value="<? echo $preco_coladeira1; ?>">
          <input name="preco_coladeira1_old" type="hidden" id="preco_coladeira1_old" value="<? echo $preco_coladeira1_old; ?>"></td>
          <td><div align="right"><strong><font color="#0000FF">Pre&ccedil;o Coladeira 2 </font></strong></div></td>
          <td><input name="preco_coladeira2" type="text" id="preco_coladeira2" value="<? echo $preco_coladeira2; ?>">
          <input name="preco_coladeira2_old" type="hidden" id="preco_coladeira2_old" value="<? echo $preco_coladeira2_old; ?>"></td>
        </tr>
        
        <tr>
          <td height="25">Costura Manual</td>
          <td height="25"><input name="costura_manual" type="text" id="costura_manual" value="<? echo $costura_manual; ?>">
          <input name="costura_manual_old" type="hidden" id="costura_manual_old" value="<? echo $costura_manual_old; ?>"></td>
          <td height="25">Tric&ecirc;</td>
          <td height="25"><input name="trice" type="text" id="trice" value="<? echo $trice; ?>">
          <input name="trice_old" type="hidden" id="trice_old" value="<? echo $trice_old; ?>"></td>
          <td height="25">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="25" colspan="5"><div align="center"><strong>Hist&oacute;rico</strong></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="25" colspan="5"><div align="center">
            <textarea name="historico" id="historico" cols="70" rows="5"><? echo $historico;  ?></textarea>
</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>

          <td height="25" colspan="3">&nbsp;</td>
          <td colspan="2"><input type="submit" name="Submit2" value="Atualizar Modelo"></td>

          <td>&nbsp;</td>
    </tr>
  </table>

</form>

<p align="center">------------------------------------------//--------------------------------------------------------//----------------------------------------------------------//----------------------------------------------</p>
<p align="center"><strong>HIST&Oacute;RICO DE ALTERA&Ccedil;&Otilde;ES DO MODELO <? echo $modelo; ?></strong></p>
<table width="100%" border="1">
<tr>
  <td width="5%"><div align="center"><span class="style1">Código</span></div></td>
  <td width="6%"><div align="center"><span class="style1">Modelo</span></div></td>
  <td width="9%"><div align="center">N&iacute;vel Dificuldade</div></td>
  <td width="8%"><div align="center"><span class="style1">Preço Empresa</span></div></td>
  <td width="10%"><div align="center"><span class="style1">Preço Pespontador</span></div></td>
  <td width="9%"><div align="center"><span class="style1">Preço Coladeira 1</span></div></td>
  <td width="9%"><div align="center"><span class="style1">Preço Coladeira 2</span></div></td>
  <td width="8%"><div align="center">Costura Manual</div></td>
  <td width="5%"><div align="center">Tric&ecirc;</div></td>
  <td width="8%"><div align="center">Data Altera&ccedil;&atilde;o</div></td>
  <td width="8%"><div align="center">Hora Altera&ccedil;&atilde;o</div></td>
  <td width="15%"><div align="center">Hist&oacute;rico</div></td>
</tr>
<?
require '../../conect/conect.php';

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from historico_de_alteracoes_modelos where nfantasia = '$nfantaisa' and modelo = '$modelo' group by data_alteracao,hora_alteracao order by codigo_alteracao desc limit 20";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[1];
$modelo = $linha[2];
$preco_empresa = $linha[3];
$preco_pespontador = $linha[4];
$preco_coladeira1 = $linha[5];
$preco_coladeira2 = $linha[6];
$dia_alteracao = $linha[12];
$mes_alteracao = $linha[13];
$ano_alteracao = $linha[14];
$hora_alteracao = $linha[16];
$percentual = $linha[17];
$historico = $linha[18];
$nivel_dificuldade = $linha[19];
$costura_manual = $linha[19];
$trice = $linha[20];

$nfantasia = $linha[23];


?>

<tr>
<td><div align="center"><? echo $codigo; ?></div></td>
<td><div align="center"><? echo $modelo; ?></div></td>
<td><div align="center"><? echo $nivel_dificuldade; ?></div></td>
<td><div align="center"><? echo "R$ ".$preco_empresa; ?></div></td>
<td><div align="center"><? echo "R$ ".$preco_pespontador; ?></div></td>
<td><div align="center"><? echo "R$ ".$preco_coladeira1; ?></div></td>
<td><div align="center"><? echo "R$ ".$preco_coladeira2; ?></div></td>
<td><div align="center"><font color="#0000FF"><strong><? echo $costura_manual; ?></strong></font></div></td>
<td><div align="center"><font color="#0000FF"><strong><? echo $trice; ?></strong></font></div></td>
<td><div align="center"><? echo "$dia_alteracao-$mes_alteracao-$ano_alteracao"; ?></div></td>
<td><div align="center"><? echo "$hora_alteracao"; ?></div></td>
<td><div align="center"><? echo "$historico"; ?></div></td>
</tr>
<?

if($reg==1){

echo "</tr><br><tr>";

$reg=0;

}
}
?>
</table>


<p><p>






</body>

</html>

