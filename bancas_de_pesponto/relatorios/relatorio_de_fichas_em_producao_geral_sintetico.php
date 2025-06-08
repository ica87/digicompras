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
<title>Relat&oacute;rio Geral de Fichas em Produ&ccedil;&atilde;o</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {font-size: 9px}
.style6 {font-size: 9px; font-weight: bold; }
.style7 {	font-size: 9px;
	color: #0000FF;
	font-weight: bold;
}
.style8 {font-size: 9px; color: #0000FF; }
.style9 {color: #0000FF}
.style11 {font-size: 18px}
-->
</style></head>

<body>
<p>        
<?



require '../../conect/conect.php';

$hora = date('H:i:s');


$nfantasia = $_POST['nfantasia'];

//$grupo = $_POST['grupo'];
		
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];



$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];

$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";



?>
</p>
<form name="form1" method="post" action="menu.php">
  <input type="submit" name="Submit2" value="Voltar">
  <span class="style1">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  </span>
</form>


<table width="90%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><div align="right" class="style11"><?
$data_atual = date('d-m-Y');
$hora = date('H:i:s');


echo "    Data/Hora:    $data_atual      $hora";
?>
    </div></td>
  </tr>
  <tr>
    <td width="52%"><p class="style11">Relat&oacute;rio de Acompanhamento de Planos em Produ&ccedil;&atilde;o</p>
    <p class="style11">Per&iacute;odo: <? echo $data_inicial;  ?> à <? echo $data_final;  ?></p>
    <form action="relatorio_de_fichas_em_producao_geral_sintetico_listagem.php" method="post" name="form4" target="_blank">
      <strong><strong><strong>
      <?

if($nfantasia=="TODOS"){

$sql = "select sum(quant_pares) as totaldepares from fichas where status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}
else{

$sql = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}

$resultado=mysql_query($sql, $conexao);

$linha=mysql_fetch_array($resultado);



$total_producao = $linha['totaldepares'];


echo "Total de pares em produção na empresa -->>> ";
?>
      <input name="nfantasia" type="hidden" id="nfantasia" value="<? echo $nfantasia; ?>">
      <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
      <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
      <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
      <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
      <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
      <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
      <input type="submit" name="button" id="button" value="<? echo $total_producao;  ?>">
    </form>    </td>
    <td width="48%" valign="top"><strong><strong><strong><strong><strong><span class="style11">Cliente: <? echo $nfantasia; ?></span></strong></strong></strong></strong></strong></td>
  </tr>
</table>
<br>
<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="21%"><div align="center">
      <table width="100%" border="1" cellspacing="0">
        <tr>
          <td width="11%" height="15"><div align="center"><strong><span class="style4">Grupo</span></strong></div></td>
          <td width="39%"><div align="center" class="style6">Quant Pares em produ&ccedil;&atilde;o</div></td>
          <td width="50%"><div align="center" class="style6">Planos e Pares</div>
            <div align="center" class="style4"></div></td>
        </tr>
        <?
  
$sql1 = "select * from grupos order by grupo asc";
$res1 = mysql_query($sql1);
$reg = 0;
while($linha=mysql_fetch_row($res1)) {


$grupo = $linha[1];





?>
        <tr>
          <td><div align="center" class="style7"><span class="style9"><? echo $grupo; ?></span></div></td>
          <td><div align="center" class="style6"><font color="#0000FF">
              <?
			  
			  if($nfantasia=="TODOS"){
			  
$sql2 = "select sum(quant_pares) as totaldepares from fichas where grupo = '$grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";
			  
			  }
			  else{

$sql2 = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao = $linha['totaldepares'];


echo $total_producao;

?></font></div></td>
          <td><div align="center" class="style7">
            <?


echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";


//echo"<tr><td>Planos</td><td>Pares</td></tr>";

if($nfantasia=="TODOS"){

$sql3 = "select * from fichas where grupo = '$grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by num_plano order by num_plano desc";

}
else{

$sql3 = "select * from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by num_plano order by num_plano desc";

}

$res3 = mysql_query($sql3);
$reg = 0;
while($linha=mysql_fetch_row($res3)) {


$num_plano_do_grupo = $linha[6];

if($nfantasia=="TODOS"){

 $sql4 = "select sum(quant_pares) as total_de_pares_por_plano from fichas where grupo = '$grupo' and num_plano = '$num_plano_do_grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by num_plano order by num_plano desc";

}
else{

 $sql4 = "select sum(quant_pares) as total_de_pares_por_plano from fichas where nfantasia = '$nfantasia' and grupo = '$grupo' and num_plano = '$num_plano_do_grupo' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by num_plano order by num_plano desc";

}

$resultado4=mysql_query($sql4, $conexao);

$linha=mysql_fetch_array($resultado4);



$total_producao_por_plano = $linha['total_de_pares_por_plano'];


echo "<tr>
<td><div align='left'><span class='style2 style2 style4'><strong><font color='#0000FF'><strong>$num_plano_do_grupo</strong></font></strong></span></div></td>
<td><div align='right'><span class='style2 style2 style4'><strong><font color='#0000FF'><strong>$total_producao_por_plano</strong></font></strong></span></div></td>
</tr>";
}

echo "</table>";



?></div>
            <div align="center"></div></td>
        </tr>
        <? } ?>
      </table>
    </div></td>
    <td width="41%">&nbsp;</td>
    <td width="38%" valign="top"><div align="center">
      <table width="100%" border="1" cellspacing="0">
        <tr>
          <td width="14%" height="15"><div align="center"><strong><span class="style4">Plano</span></strong></div></td>
          <td width="28%"><div align="center" class="style6">Quant Pares em produ&ccedil;&atilde;o</div></td>
          <td width="58%"><div align="center"><strong><span class="style4">Modelos</span></strong></div></td>
        </tr>
        <?
  
//$dia_inicial = $_POST['dia_inicial'];

//$mes_inicial = $_POST['mes_inicial'];

//$ano_inicial = $_POST['ano_inicial'];



//$dia_final = $_POST['dia_final'];

//$mes_final = $_POST['mes_final'];

//$ano_final = $_POST['ano_final'];

  
if($nfantasia=="TODOS"){

$sql = "select * from fichas where status <> 'Enviado' group by num_plano order by num_plano asc";

}
else{

$sql = "select * from fichas where nfantasia = '$nfantasia' and status <> 'Enviado' group by num_plano order by num_plano asc";

}

$res = mysql_query($sql);
$reg = 0;
while($linha=mysql_fetch_row($res)) {

$num_plano = $linha[6];

?>
        <tr>
          <td><div align="center" class="style8"><strong><span class="style2"><? echo $num_plano; ?></span></strong></div></td>
          <td><div align="center" class="style8"><strong><?
		  
		  if($nfantasia=="TODOS"){
		  
$sql2 = "select sum(quant_pares) as totaldepares from fichas where num_plano = '$num_plano' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";
		  
		  }
		  else{

$sql2 = "select sum(quant_pares) as totaldepares from fichas where nfantasia = '$nfantasia' and num_plano = '$num_plano' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final'";

}

$resultado2=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado2);



$total_producao = $linha['totaldepares'];


echo $total_producao;

?>
          </strong></div></td>
          <td><div align="center" class="style7"><?
		  
		  if($nfantasia=="TODOS"){
		  
$sql3 = "select * from fichas where num_plano = '$num_plano' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by modelo order by modelo asc";
		  
		  }
		  else{

$sql3 = "select * from fichas where nfantasia = '$nfantasia' and num_plano = '$num_plano' and status <> 'Enviado' and datacadastro between '$data_inicial' and '$data_final' group by modelo order by modelo asc";

}

$res3 = mysql_query($sql3);
$reg3 = 0;
while($linha=mysql_fetch_row($res3)) {

$modelo = $linha[20];


echo "$modelo - ";
}
?>
          </div></td>
        </tr>
        <?
}
?>
      </table>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
