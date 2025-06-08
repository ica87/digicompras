<?

session_start(); //inicia sessão...

if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...

echo ""; //se for emite mensagem positiva.

if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

echo ""; //se for emite mensagem positiva.

else //se não for...

header("Location: alerta.php");


require '../../../conect/conect.php';

//$ano = date('Y');

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIÇÃO DE HORAS EXTRAS</title>
</head>

<body>
<?
$nome = $_POST['nome'];
$valor_bonus = $_POST['valor_bonus'];
$obs = $_POST['obs'];

$dia_inicial = $_POST['dia_inicial'];

$mes_inicial = $_POST['mes_inicial'];

$ano_inicial = $_POST['ano_inicial'];

$dia_final = $_POST['dia_final'];

$mes_final = $_POST['mes_final'];

$ano_final = $_POST['ano_final'];



$sql = "SELECT * FROM operadores where nome = '$nome' limit 1";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {




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



//$salario = $linha[48];

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



?>

<?

$codigo = $_POST['codigo'];

$sql = "select * from db";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {





$comando = "update `$linha[1]`.`bonus` set `codigo` = '$codigo',`data` = '$data',`dia` = '$dia',`mes` = '$mes',`ano` = '$ano',`valor_bonus` = '$valor_bonus',`nome` = '$nome',`obs` = '$obs' where `bonus`. `codigo` = '$codigo' limit 1 ";

}



mysql_query($comando,$conexao) or die("Erro ao alterar informações do registro de bonus do funcionário $nome");


?>
<form name="form3" method="post" action="editar.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><input type="submit" name="button3" id="button3" value="Voltar">
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
        <input name="ano_final" type="hidden" id="ano_final" value="<? echo $ano_final; ?>"></td>
      <td width="40%">&nbsp;</td>
      <td width="9%">&nbsp;</td>
    </tr>
  </table>
</form>
<p>
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
      <td width="53%"><div align="center">Bonus conquistado em</div></td>
    </tr>
    <tr>
      <td><div align="center"><? echo "R$ $valor_bonus"; ?></div></td>
      <td><div align="center"> <? echo "$dia-$mes-$ano"; ?> </div></td>
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
if ($valor_vale == "000")$z++; elseif ($z > 0) $z--;
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
        <div align="center"></div>
        <div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">Assinatura</div></td>
      <td><div align="center"> _________________________________ </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"></div>
          <div align="center"></div></td>
    </tr>
  </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
