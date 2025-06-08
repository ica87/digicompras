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


$valor_bonus = $_POST['valor_bonus'];

$obs = $_POST['obs'];

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$data = "$ano-$mes-$dia";





$comando = "insert into bonus(data,dia,mes,ano,valor_bonus,nome,obs)

values('$data','$dia','$mes','$ano','$valor_bonus','$nome','$obs')";

mysql_query($comando,$conexao) or die("Erro ao gravar registro de Bonus do funcionario no sistema!");

echo "Registro de Bonus do funcionario $nome gravado com sucesso!<br><br>";


?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONFIRMAÇÃO DE REGISTRO DE VALES</title>
</head>

<body>
<table width="40%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Funcionário</td>
    <td><? echo "$nome"; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="47%"><div align="center">Valor do Bonus</div></td>
    <td width="53%"><div align="center">Bonus Conquistado em</div></td>
  </tr>
  <tr>
    <td><div align="center"><? echo "R$ $valor_bonus"; ?></div></td>
    <td><div align="center">
      <? echo "$dia-$mes-$ano"; ?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Valor por extenso</div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="left"><strong>
      <? 
//inicio valor por extenso

if($valor_bonus<>""){

function extenso($valor_bonus = 0, $maiusculas = false) {

$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
"quatrilhões");

$c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
"quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
"sessenta", "setenta", "oitenta", "noventa");
$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
"dezesseis", "dezesete", "dezoito", "dezenove");
$u = array("", "um", "dois", "tr&ecirc;s", "quatro", "cinco", "seis",
"sete", "oito", "nove");

$z = 0;
$rt = "";

$valor_bonus = number_format($valor_bonus, 2, ".", ".");
$inteiro = explode(".", $valor_bonus);
for($i=0;$i<count($inteiro);$i++)
for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
$inteiro[$i] = "0".$inteiro[$i];

$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
for ($i=0;$i<count($inteiro);$i++) {
$valor_bonus = $inteiro[$i];
$rc = (($valor_bonus > 100) && ($valor_bonus < 200)) ? "cento" : $c[$valor_bonus[0]];
$rd = ($valor_bonus[1] < 2) ? "" : $d[$valor_bonus[1]];
$ru = ($valor_bonus > 0) ? (($valor_bonus[1] == 1) ? $d10[$valor_bonus[2]] : $u[$valor_bonus[2]]) : "";

$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd &&
$ru) ? " e " : "").$ru;
$t = count($inteiro)-1-$i;
$r .= $r ? " ".($valor_bonus > 1 ? $plural[$t] : $singular[$t]) : "";
if ($valor_bonus == "000")$z++; elseif ($z > 0) $z--;
if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t];
if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) &&
($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
}

if(!$maiusculas){
return($rt ? $rt : "zero");
} else {

if ($rt) $rt=ereg_replace(" E "," e ",ucwords($rt));
return (($rt) ? ($rt) : "Zero");
}

}

$valor_bonus = $valor_bonus;
$dim = extenso($valor_bonus);
$dim = ereg_replace(" E "," e ",ucwords($dim));

$valor_bonus = number_format($valor_bonus, 2, ",", ".");

echo "$dim";

}
//fim valor por extenso


 ?>
    </strong></div>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="2">Observações</td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="left"><? echo "$obs"; ?></div>
    <div align="center"></div>      <div align="center"></div></td>
  </tr>
  
  <tr>
    <td><div align="center">Assinatura</div></td>
    <td><div align="center">
      _________________________________
    </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"></div>      <div align="center"></div></td>
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
