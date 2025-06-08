<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style8 {

	font-size: 18px;

	font-weight: bold;

	color: #000000;

}

.style9 {

	color: #FFFFFF;

	font-weight: bold;

}

.style10 {color: #000000}

.style11 {color: #000000; font-weight: bold; }

-->

</style>

<base target="meio">

</head>



<?



require 'conect/conect.php';









$sql = "SELECT * FROM fundo_topo limit 1";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor_fundo_cabecalho = $linha[1];



}

?>





<body bgcolor="#<? echo $cor_fundo_cabecalho; ?>" 

  

<?

$sql = "SELECT * FROM background_topo";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$background_cabecalho = $linha[1];

}

?>



background="background/<? echo $background_cabecalho; ?>" bgproperties="fixed">

<table width="100%"  border="0">

  <tr>

    <td width="46%"><?

$sql = "SELECT * FROM logo";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



printf("<a href='index.php' target='_top'><img src='logo/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); 



} ?></td>

    <td width="54%">

      <form action="admgeral/verifica.php" method="post" name="form1" target="_top">

        <div align="center">

        <table width="100%" border="0" align="center">

		<?

		setlocale(LC_TIME, 'pt_BR');



		$data_completa = strftime("%A, %d de %B de %Y<br><br>");



$hoje = strftime("%A");



//echo $hoje;





$sql = "select * from hora_encerramento where dia = '$hoje' limit 1";

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



}



$hora_atual = date('H:i:s');



$hora_iniciar = "$horas_inicio".":"."$minutos_inicio".":"."$segundos_inicio";

$hora_terminar = "$horas_termino".":"."$minutos_termino".":"."$segundos_termino";

?>

          <tr>

            <td colspan="4"><div align="center" class="style8">

                <? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){ echo "Operador"; } ?>

</div></td>

          </tr>

          <tr>

            <td width="17%"><div align="right" class="style9 style10"><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"Usu&aacute;rio"; } ?>

              </div></td>

            <td width="17%"><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"<input class='class02' name='usuario' type='text' id='usuario'>";} ?></td>

            <td width="9%"><div align="right" class="style11"><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"Senha"; } ?>

              </div></td>

            <td width="57%"><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"<input class='class02' name='senha' type='password' id='senha'>"; } ?>

              <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo date('d-m-Y'); ?>">

              <? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"<input class='class01' type='submit' name='Submit' value='Conectar'>"; } ?>              </td>

          </tr>

        </table>

    </div></form>    </td>

  </tr>

</table>

<?

$sql = "SELECT * FROM b_sup";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$cor_sup = $linha[1];

}

?>

  

<table bgcolor="#<? echo $cor_sup; ?>" width="100%" border="0">

<tr valign="top">

              <td width="12%" height="23">&nbsp;</td>

              <td width="12%">&nbsp;</td>

              <td height="23" colspan="4">                                    <div align="right">

<marquee scrollamount="6">			  <? 

$sql = "SELECT * FROM faixa_de_texto";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$texto = $linha[1];



echo $texto;



}

?></marquee>

  </div></td>

  </tr>

</table>



          



<p>&nbsp;</p>

</body>

</html>

<? 

mysql_free_result($res);

mysql_close($conexao);

?>