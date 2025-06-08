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

<title>MAPA DE PRODU&Ccedil;&Atilde;O - GRUPO BANCRED</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style4 {font-size: 18px}

.style5 {font-size: 24px}

.style7 {

	font-size: 9px;

	font-weight: bold;

}
.style2 {color: #0000FF;

	font-weight: bold;
}

-->

</style>
</head>

<?



require '../../conect/conect.php';



$dia_abertura = $_POST['dia_abertura'];

$mes_abertura = $_POST['mes_abertura'];

$ano_abertura = $_POST['ano_abertura'];




$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {

?>





<body bgcolor="#<? printf("$linha[1]"); ?>" 

  

<? } ?>

<?

$sql = "SELECT * FROM background";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

?>



background="background/<? printf("$linha[1]"); ?>" bgproperties="fixed">

  

<? } ?>











      <p>

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

</p>

      <form name="form1" method="post" action="menu.php">

        <?

$usuario = $_SESSION['usuario'];

$senha = $_SESSION['senha'];

?>

        <input type="submit" name="Submit2" value="Voltar">

</form>

<p class="style4"><span class="style4"><strong>Total de contatos realizados em <? echo " $dia_abertura/$mes_abertura/$ano_abertura  - " ?> 

            <span class="style5">

            <strong>

            <?

$sql = "select * from telemarketing where dia_abertura = '$dia_abertura' and mes_abertura = '$mes_abertura' and ano_abertura = '$ano_abertura'";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>

            </strong></span> </strong></span><br>
</p>

<table width="50%"  border="1">

        <tr bgcolor="#<? echo $cor ?>">

          <td><div align="center" class="style7">Nome</div></td>

          <td><div align="center" class="style7">Quant Contatos</div></td>
        </tr>


		      <?



			

$sql = "SELECT * FROM operadores where funcao <> 'Adm Suporte' and funcao <> 'Adm Captura' and funcao <> 'PROPRIETARIO' and status = 'Ativo' order by nome asc";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nome_operador = $linha[1];

$funcao = $linha[43];

$meta = $linha[49];

$meta_formatada = number_format($meta, 2, ",", ".");

$meta_inss = $linha[50];

$meta_inss_formatada = number_format($meta_inss, 2, ",", ".");

$funcao2 = $linha[51];



$meta_total = bcadd($meta,$meta_inss,2);





?>            

        <tr>

          <td width="15%"><div align="center" class="style7">
            <form name="form2" method="post" action="mapa_producao.php">
              <input name="nome_operador2" type="hidden" id="nome_operador2" value="<? echo $nome_operador; ?>">
              <input name="dia_abertura" type="hidden" id="dia_abertura" value="<? echo $dia_abertura; ?>">
              <input name="mes_abertura" type="hidden" id="mes_abertura" value="<? echo $mes_abertura; ?>">
              <input name="ano_abertura" type="hidden" id="ano_abertura" value="<? echo $ano_abertura; ?>">
              <input type="submit" name="button" id="button" value="<? echo $nome_operador; ?>">
            </form>
            </div></td>

          <td width="6%"><div align="center" class="style7">

            <?

$sql = "select * from telemarketing where operador = '$nome_operador' and dia_abertura = '$dia_abertura' and mes_abertura = '$mes_abertura' and ano_abertura = '$ano_abertura' ";

$resultado=mysql_query($sql);

$registros = mysql_num_rows($resultado);



echo $registros;

?>

           </div></td>
  </tr>

<? } ?>
</table>



<p>&nbsp;</p>
<table width="100%"  border="1">
  <tr>
    <td><div align="center" class="style2">Nome do Cliente </div></td>
    <td><div align="center" class="style2">Operador</div></td>
    <td><div align="center" class="style2">Cidade</div></td>
    <td><div align="center" class="style2">Hora de Abertura</div></td>
    <td><div align="center" class="style2">Hora Fechamento</div></td>
  </tr>
  <?

$nome_operador2 = $_POST['nome_operador2'];



$sql = "select * from telemarketing where operador = '$nome_operador2' and dia_abertura = '$dia_abertura' and mes_abertura = '$mes_abertura' and ano_abertura = '$ano_abertura' order by hora_abertura asc";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$cod_cliente = $linha[10];
$hora_abertura = $linha[4];
$hora_fechamento = $linha[5];
$operador = $linha[7];
$cidade_estab_pertence = $linha[9];
$nome = $linha[12];


?>
  <tr>
    <td width="24%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>"><? echo "$cod_cliente - "; ?><? echo $nome; ?></span></div></td>
    <td width="29%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>"><? echo $operador; ?></span></div></td>
    <td width="21%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>">
      <?  echo $cidade_estab_pertence; ?>
    </span></div></td>
    <td width="15%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>">
      <?  echo $hora_abertura; ?>
    </span></div></td>
    <td width="11%" valign="top"><div align="center"><span class="<? if($telemarketing=="Em Manuten&ccedil;&atilde;o"){echo"style3"; } else{ echo "style1"; } ?>">
      <?  echo $hora_fechamento; ?>
    </span></div></td>
  </tr>
  <tr>
    <td colspan="5" valign="top"><div align="center">
      <textarea name="obs_cli" cols="100" rows="5" readonly="readonly" id="textarea"><?  

$obs_tele = "SELECT * FROM obs_telemarketing where cod_cliente = '$cod_cliente' order by codigo desc";

$res_tele = mysql_query($obs_tele);

$reg = 0;

//echo "<tr>";

while($linha=mysql_fetch_row($res_tele)) {



$codigo = $linha[0];

$cod_cliente = $linha[1];

$dia = $linha[2];

$mes = $linha[3];

$ano = $linha[4];

$hora = $linha[5];

$operador = $linha[6];

$estab_pertence = $linha[7];

$cidade_estab_pertence = $linha[8];

$obs = $linha[9];



echo "$dia/$mes/$ano - $hora - "."$operador - $estab_pertence - $cidade_estab_pertence - "."$obs";

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
  <? } ?>
</table>
<p>&nbsp;</p>
<p align="center">

<?

$sql = "SELECT * FROM cad_empresa limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$nfantasia = $linha[2];

$endereco = $linha[5];

$numero = $linha[6];

$bairro = $linha[7];

$cep = $linha[9];

$cidade = $linha[10];

$estado = $linha[11];

$telefone = $linha[12];

$fax = $linha[13];

$email_empresa = $linha[14];

$site = $linha[15];



}



?>

<br>

<span class="style4"><strong><? echo $site; ?></strong></span>

<br>

<? echo $endereco; ?>

,

<? echo $numero; ?> - <? echo $bairro; ?> - <? echo $cidade; ?> - <? echo $estado; ?> - <? echo $cep; ?>

<br>

<? echo "Telefone / Fax: ". $telefone." "; ?>

/ <? echo $fax; ?>

<br>

<? echo "E-Mail: ". $email_empresa; ?>

</p>

<p align="center"><span class="style7">

  <? echo $meta_inss; ?>

</span><span class="style4"><strong><span class="style5"><strong>

</strong></span></strong></span> </p>

</body>

</html>

