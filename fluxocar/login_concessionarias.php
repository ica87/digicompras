<?
ini_set('default_charset','UTF8_general_mysql500_ci');
?>

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

.style1 {

	color: #000000;

	font-weight: bold;

}

.style8 {

	font-size: 18px;

	font-weight: bold;

}

-->

</style>

</head>

<?



require 'conect/conect.php';





$sql = "SELECT * FROM fundo_navegacao";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor_fundo_navegacao = $linha[1];



}
	
$sql = "SELECT * FROM b_sup";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$cor_barra_superior = $linha[1];

}

?>





<body bgcolor="#<? echo $cor_fundo_navegacao; ?>" 

  

<?

$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$background = $linha[1];

}





?>



background="imagens_sistema/<? echo $background; ?>" bgproperties="fixed">

  

        <?

$sql = "SELECT * FROM fundo_intermediaria";

$res = mysql_query($sql);



while($linha=mysql_fetch_row($res)) {



$cor = $linha[1];	

?>

<? } ?>

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

<br>

<table width="100%"  border="0">

              <tr>

                <td colspan="3"><div align="center"> <strong>

                  <?

if($hora_atual<="$hora_iniciar"){echo "<br>Prezados parceiros! O dia de trabalho ainda não teve inicio!<br>O sistema abrirá as $hora_iniciar e terá seu encerramento as $hora_terminar";

}



if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){ echo "<br>Prezados parceiros!<br>Faça seu login e tenha um ótimo dia de trabalho!<br>O sistema abriu as $hora_iniciar e terá seu encerramento as $hora_terminar ";

} 





if($hora_atual>="$hora_terminar"){echo "Prezados parceiros! o dia de trabalho já terminou! Portanto, não é possível acessar o sistema agora!<br>O sistema abriu as $hora_iniciar e encerrou as $hora_terminar<br>Já são $hora_atual, caso não tenha dado tempo de realizar uma operação que deveria ter sido feita hoje, não se preocupe amanhã o ajudaremos no que você pretendia fazer hoje! "; 

}





?>

                </strong>                 </div></td>

              </tr>

              <tr>

                <td width="25%" valign="top"><div align="center">

                  </div></td>

                <td width="50%"><div align="center">                  

                  <form name="form1" method="post" action="verifica_concessionarias.php">

                    <table width="100%" border="0" align="center">

                      <tr>

                        <td><div align="center" class="style8">                        </div></td>

                        <td><span class="style8">

                          <? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){ ?>Parceiros<? } ?>

                        </span></td>

                      </tr>

                      <tr>
                        <td colspan="2"><table  width="100%" border="0">
                          <tr valign="top">
                            <td width="12%" height="23">&nbsp;</td>
                            <td height="23" colspan="4"><div align="right">
                              <?
$sql = "SELECT * FROM faixa_de_texto";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$texto_de_aviso = $linha[2];

}
			?>
                              <marquee scrollamount="6">
                                <?


echo "$texto_de_aviso";
?>
                              </marquee>
                            </div></td>
                            <td width="15%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>

                        <td><div align="right">                          

                          <? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"Senha"; } ?>                          

                        </div></td>

                        <td><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"<input class='class02' name='senha' type='password' id='senha'>"; } ?>

                          <input name="data_hoje" type="hidden" id="data_hoje" value="<? echo date('d-m-Y'); ?>"></td>

                      </tr>

                      <tr>

                        <td width="28%">&nbsp;</td>

                        <td><? if($hora_atual>"$hora_iniciar")if($hora_atual<"$hora_terminar"){echo"<input class='class01' type=image src='imagens/botoes/conectar.png' width='100' height='100' name='Submit' value='Conectar'>"; } ?></td>

                      </tr>

                    </table>

                  </form>

                  <p>&nbsp;</p>

                </div></td>

                <td width="25%" valign="top"><div align="center">

                  <form name="form1" method="post" action="verifica.php">

                  </form>

                  </div></td>

              </tr>

</table>            



</body>

</html>

