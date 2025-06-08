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

<title>Edi&ccedil;&atilde;o de produtos</title>

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

<p class="style2">Edi&ccedil;&atilde;o de Modelos </p>

<form name="form1" method="post" action="menu.php">

  <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

  <input type="submit" name="Submit2" value="Voltar">

</form>

<form action="autalizar_por_percentual.php" method="post" name="form2">
  <table width="100%"  border="0">
    <tr>
      <td colspan="6" bgcolor="#CCCCCC"><div align="center"><strong>ATUALIZA&Ccedil;&Atilde;O DE PRE&Ccedil;OS DE TODOS OS MODELOS E FICHAS POR PERCENTUAL</strong></div></td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td colspan="2">&nbsp;</td>
      <td width="33%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="3"><div align="center">
        Cliente 
        <select name="nfantasia" id="nivel_dificuldade">
          
          <?





    $sql = "select * from clientes where nfantasia = 'Calcirey Calcados' order by nfantasia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option selected>".$x['nfantasia']."</option>";

    }

?>
          
        </select>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td colspan="3"><div align="center"> Atualizar fichas cadastradas De
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
      <td width="12%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td width="13%">&nbsp;</td>
      <td width="18%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right"><strong><font color="#0000FF">Percentual</font></strong></div></td>
      <td><input name="percentual" type="text" id="percentual" value="<?echo $percentual;  ?>" size="5" maxlength="5"> 
      00.00%</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="center"><strong>Hist&oacute;rico</strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2"><div align="center">
        <textarea name="historico" id="historico" cols="70" rows="5"><? echo $historico;  ?></textarea>
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right"></div></td>
      <td><input type="submit" name="Submit3" value="Atualizar todos os Modelos"></td>
      <td><div align="right"></div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>

<form action="modelos.php" method="post" enctype="multipart/form-data" name="form1">

  <table width="100%"  border="0">

    <tr>
      <td colspan="5" bgcolor="#CCCCCC"><div align="center"><strong>ATUALIZA&Ccedil;&Atilde;O DAS INFORMA&Ccedil;&Otilde;ES GERAIS DE MODELOS E FICHAS  INDIVIDUAL</strong></div></td>
    </tr>
    <tr>

      <td width="19%">Selecione o c&oacute;digo a ser editado<br></td>

      <td width="14%"><select name="modelo" id="select4">


        <option value="null" selected><? echo "Selecione";  ?>

        <?





    $sql = "select * from modelos order by modelo asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option>".$x['modelo']."</option>";

    }

?>
        </option>

      </select></td>

      <td width="6%">Cliente</td>
      <td width="21%"><select name="nfantasia" id="nfantasia">
        
        <?





    $sql = "select * from clientes where nfantasia = 'Calcirey Calcados' order by nfantasia asc";

    $result = mysql_query($sql);

    while($x=mysql_fetch_array($result)){

  echo "<option selected>".$x['nfantasia']."</option>";

    }

?>
        
      </select></td>
      <td width="40%"><input type="submit" name="Submit" value="Editar Modelo"></td>
    </tr>
  </table>

</form>

<?

//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 

$sql = "select * from modelos order by nfantasia,modelo";


$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$reg = 0;

$codigo = $linha[0];
$modelo = $linha[1];
$preco_empresa = $linha[2];
$preco_pespontador = $linha[3];
$preco_coladeira1 = $linha[4];
$preco_coladeira2 = $linha[5];

$preco_empresa_old = $linha[15];
$preco_pespontador_old = $linha[16];
$preco_coladeira1_old = $linha[17];
$preco_coladeira2_old = $linha[18];
$costura_manual = $linha[19];
$trice = $linha[20];

$nfantasia = $linha[23];


echo "<tr>";


$reg++;

?>

<td>

<br>

<span class="style1">Cliente:</span> <? echo $nfantasia; ?>

<span class="style1">Código:</span> <? echo $codigo; ?>

<span class="style1">Modelo:</span> <? echo $modelo; ?>

<span class="style1">Preço Empresa:</span> <? echo "R$ ".$preco_empresa; ?>

<span class="style1">Preço Pespontador :</span> <? echo "R$ ".$preco_pespontador; ?>

<span class="style1">Preço Coladeira 1:</span> <? echo "R$ ".$preco_coladeira1; ?>

<span class="style1">Preço Coladeira 2 :</span> <? echo "R$ ".$preco_coladeira2; ?>

<span class="style1">Costura Manual :</span> <? echo "R$ ".$costura_manual; ?>
 
<span class="style1">Tric&ecirc;:</span> <? echo "R$ ".$trice; ?> 

</td>

<?

if($reg==1){

echo "</tr><br><tr>";

$reg=0;

}

?>



<? } ?>



<p>&nbsp;</p>

</body>

</html>

