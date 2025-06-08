<?

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");


require '../../../conect/conect.php';


?>
<?
$nome = $_POST['nome'];

$sql = "SELECT * FROM operadores where nome = '$nome' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];

$sexo = $linha[2];

$estadocivil = $linha[3];

$cpf = $linha[4];

$rg = $linha[5];

$orgao = $linha[6];

$emissao = $linha[7];

$data_nasc = $linha[8];

$pai = $linha[9];

$mae = $linha[10];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$cep = $linha[17];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$operador = $linha[21];

$cel_operador = $linha[22];

$email_operador = $linha[23];

$estabelecimento = $linha[24];

$cidade_estabelecimento = $linha[25];

$tel_estabelecimento = $linha[26];

$email_estabelecimento = $linha[27];

$obs = $linha[28];

$datacadastro = $linha[29];

$horacadastro = $linha[30];

$dataalteracao = $linha[31];

$horaalteracao = $linha[32];

$operador_alterou = $linha[33];

$cel_operador_alterou = $linha[34];

$email_operador_alterou = $linha[35];

$estabelecimento_alterou = $linha[36];

$cidade_estabelecimento_alterou = $linha[37];

$tel_estabelecimento_alterou = $linha[38];

$email_estabelecimento_alterou = $linha[39];

$usuario_op = $linha[40];

$senha_op = $linha[41];

$grupo = $linha[42];

$funcao = $linha[43];

$estab_pertence = $linha[44];

$cidade_estab_pertence = $linha[45];

$tel_estab_pertence = $linha[46];

$email_estab_pertence = $linha[47];



$salario = $linha[48];

$vale_alimentacao = $linha[49];

$gratificacao = $linha[50];

$comissao = $linha[51];

$emprestimo = $linha[52];

$admissao = $linha[53];

$demissao = $linha[54];

$meta = $linha[55];

$status = $linha[56];

$bloqueio_parcial = $linha[57];

$tempo_almoco = $linha[58];

$cbo = $linha[59];

$secao = $linha[60];

$classificacao = $linha[61];


}





$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$data = "$ano-$mes-$dia";

$hi = $_POST['hi'];
$mi = $_POST['mi'];

$hora_inicio = "$hi:$mi";

$convert_hi_minutos = bcmul($hi,60);
$totaliza_minutos_i = bcadd($convert_hi_minutos,$mi);



$ht = $_POST['ht'];
$mt = $_POST['mt'];

$hora_termino = "$ht:$mt";


$convert_ht_minutos = bcmul($ht,60);
$totaliza_minutos_t = bcadd($convert_ht_minutos,$mt);


$subtrai_minutos = bcsub($totaliza_minutos_t,$totaliza_minutos_i);


//converte resultado em horas novamente

$encontra_horas_decimais = bcdiv($subtrai_minutos,60,2);



$encontra_horas_decimais2 = explode(".", $encontra_horas_decimais);



$total_horas = $encontra_horas_decimais2[0];

$encontra_decimal_minutos = $encontra_horas_decimais2[1];

if($encontra_decimal_minutos<=00){

$total_decimal_minutos = "0";
}
else{
$total_decimal_minutos = $encontra_horas_decimais2[1];
}

//ACHA O DECIMAL DO PERCENTUAL DECIMAL DAS HORAS = decimal de hora / 100

$decimal_dos_minutos = bcdiv($total_decimal_minutos,100,2);

$total_minutos_real = bcmul(60,$decimal_dos_minutos);

//aqui termina a formula para encontrar o decimal do decimal dos minutos


$percentual_minutos = $total_decimal_minutos;

$explode_decimal = explode(".", $total_minutos_real);

$total_minutos_real2 = $explode_decimal[0];



$quant_horas_decimais = "$total_horas.$total_decimal_minutos";
$quant_horas_reais = "$total_horas.$total_minutos_real";

$valor_hora_normal = bcdiv($salario,220,5);
$acrecimo_hora_extra = bcmul($valor_hora_normal,0.5,5);
$valor_hora_extra = bcadd($valor_hora_normal,$acrecimo_hora_extra,5);
//$total = bcmul($quant_horas_decimais,$valor_hora_extra,2);

$subtotal = bcmul($quant_horas_decimais,$valor_hora_normal,5);
$subtotal2 = bcmul($subtotal,0.5,5);
$total = bcadd($subtotal,$subtotal2,2);


$comando = "insert into horas_extras(data,dia,mes,ano,hora_inicio,hora_termino,hi,mi,si,ht,mt,st,nome,quant_horas_reais,quant_horas,valor_hora_normal,valor_hora_extra,total,acrescimo,salario)

values('$data','$dia','$mes','$ano','$hora_inicio','$hora_termino','$hi','$mi','$si','$ht','$mt','$st','$nome','$quant_horas_reais','$quant_horas_decimais','$valor_hora_normal','$valor_hora_extra','$total','$acrecimo_hora_extra','$salario')";

mysql_query($comando,$conexao) or die("Erro ao gravar registro de hora extra do funcionario no sistema!");

echo "Registro de Hora extra do funcionario $nome gravado com sucesso!<br><br>";


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONFIRMAÇÃO DE REGISTRO DE HORA EXTRA</title>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="21%"><div align="center">Hora Inicio</div></td>
    <td width="22%"><div align="center">Hora Termino</div></td>
    <td width="51%"><div align="center"></div></td>
    <td width="2%"><div align="center"></div></td>
    <td width="2%"><div align="center"></div></td>
    <td width="2%"><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><? echo "$hora_inicio"; ?></div></td>
    <td><div align="center">
      <? echo "$hora_termino"; ?>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">Hora Inicio convertida em minutos</div></td>
    <td><div align="center">Hora Termino convertida em minutos</div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <? echo "$totaliza_minutos_i"; ?>
    </div></td>
    <td><div align="center">
      <? echo "$totaliza_minutos_t"; ?>
    </div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Subtração dos minutos</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <? echo "$subtrai_minutos"; ?>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Total de horas naturais extras trabalhadas</div></td>
    <td><div align="center">
      <? echo "$total_horas:$total_minutos_real2"; ?>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Total de horas decimais extras trabalhadas</div></td>
    <td><div align="center">
      <? echo "$quant_horas_decimais% ou seja ($total_horas horas + $total_decimal_minutos% de hora)"; ?>
    </div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<form name="form2" method="post" action="inserir.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
  <input name="nome" type="hidden" id="nome" value="<? echo $nome; ?>">
  <input type="submit" name="button" id="button" value="Voltar">
</form>
</body>
</html>
