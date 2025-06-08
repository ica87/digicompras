<?

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");


require '../../../conect/conect.php';

$ano = date('Y');

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RELATORIO PERIODICO DE HORAS EXTRAS</title>
</head>

<body>
<form name="form2" method="post" action="../principal.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input type="submit" name="button" id="button" value="Voltar">
</form>





<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="17%"><div align="center">Funcionário</div></td>
      <td width="7%"><div align="center"></div></td>
      <td width="15%"><div align="center"></div></td>
      <td width="11%"><div align="center">Total H trab decimais</div></td>
      <td width="11%"><div align="center">Total</div></td>
    </tr>
    <?
$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];
	
$data_inicial = "$ano_inicial-$mes_inicial-$dia_inicial";
$data_final = "$ano_final-$mes_final-$dia_final";

	
$sql = "SELECT * FROM horas_extras where data between '$data_inicial' and '$data_final' group by nome";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];

$data = $linha[1];

$dia = $linha[2];

$mes = $linha[3];

$ano = $linha[4];

$hora_inicio = $linha[5];

$hora_termino = $linha[6];

$hi = $linha[7];

$mi = $linha[8];

$si = $linha[9];

$ht = $linha[10];

$mt = $linha[11];

$st = $linha[12];

$nome = $linha[13];

$quant_horas_reais = $linha[14];

$quant_horas = $linha[15];

$total = $linha[19];

$salario = $linha[25];

?>
           <form name="form1" method="post" action="../horasextras/encerramento_individual_horas_extras.php" target="_blank">
 <tr>
      <td><div align="center"><? echo $nome; ?></div></td>
      <td colspan="2">        <div align="center">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
          <input name="dia_inicial" type="hidden" id="dia_inicial" value="<? echo $dia_inicial; ?>">
          <input name="mes_inicial" type="hidden" id="mes_inicial" value="<? echo $mes_inicial; ?>">
          <input name="ano_inicial" type="hidden" id="ano_inicial" value="<? echo $ano_inicial; ?>">
          <input name="dia_final" type="hidden" id="dia_final" value="<? echo $dia_final; ?>">
          <input name="mes_final" type="hidden" id="mes_final" value="<? echo $mes_final; ?>">
          <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>">
          <input type="submit" name="button2" id="button2" value="HORAS EXTRAS - ENCERRAMENTO">
               
      </div></td>
      <td><div align="center">
        <?


$sql2 = "select sum(quant_horas) as total_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado=mysql_query($sql2, $conexao);

$linha=mysql_fetch_array($resultado);



$total_de_horas_extras_realizadas = $linha['total_horas_extras'];
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo $total_de_horas_extras_realizadas;
?>
      </div></td>
      <td><div align="center">
        <?


$sql3 = "select sum(total) as total_monetario_horas_extras from horas_extras where data between '$data_inicial' and '$data_final' and nome = '$nome'";


$resultado=mysql_query($sql3, $conexao);

$linha=mysql_fetch_array($resultado);



$vencimentos = bcadd($linha['total_monetario_horas_extras'],0,2);
//$valor_total_pespontador_formatado = number_format($valor_total_pespontador, 2, ",", ".");


echo "R$ ".$vencimentos;
?>
      </div></td>
      </tr>
     </form>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <? } ?>
  </table>
<p>
  <p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
