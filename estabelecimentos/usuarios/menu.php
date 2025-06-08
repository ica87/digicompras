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
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.style2 {	color: #0000FF;
	font-weight: bold;
}
.style1 {font-size: 35px;
	font-weight: bold;
	color: #0000FF;
}
</style>
</head>

<?

require '../../conect/conect.php';
include '../../css/botoes.css';

$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$background = $linha[1];

}
?>

<body background="../../background/<? echo "$background"; ?>" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td colspan="5"><?

$solicitacao = $_POST['solicitacao'];
$codigo_atualizar = $_POST['codigo_atualizar'];
$status = $_POST['status'];
$nome = $_POST['nome'];
$cpfbuscar = $_POST['cpfbuscar'];


if($solicitacao=="ativar_desativar"){
	
$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$db = $linha[1];

}

$comando = "update `$db`.`usuarios` set `status` = '$status' where `usuarios`. `codigo` = '$codigo_atualizar' limit 1 ";
mysql_query($comando,$conexao) or die("Erro ao alterar informações desse usuario");

}

?>
<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];


$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {

//$codigo = $linha[0];
$nome_op = $linha[1];
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
$tipo_op = $linha[42];
$funcao_op = $linha[43];
$estab_pertence = $linha[44];
$cidade_estab_pertence = $linha[45];
$tel_estab_pertence = $linha[46];
$email_estab_pertence = $linha[47];

?>
<? } ?>
<?

error_reporting(E_ALL);
?>


</td>
    </tr>
    <tr>
      <td width="23%">&nbsp;</td>
      <td width="77" colspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td><form name="form1" method="post" action="../index.php">
        <div align="center">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" class='class01' name="Submit22" value="Voltar ao menu principal">
        </div>
      </form></td>
      <td><div align="center">
        <form action="inserir.php" method="post" name="form2">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" class='class01' name="Submit2" value="Inserir Usu&aacute;rio">
        </form>
      </div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
      <td><div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td> 
      <td colspan="4">&nbsp;</td>
    </tr>
  </table>
<p>&nbsp; </p>
<table width="100%"  border="0">
  <tr>
    <td colspan="3"><div align="center"><strong>Nome</strong></div></td>
    <td><div align="center"><strong>CPF</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><form action="menu.php" method="post" enctype="multipart/form-data" name="form1">
      <div align="center"><span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>
        <input name="nome" class='class02' type="text" id="nome" value="<? echo $nome; ?>" size="40">
        <input type="submit" class='class01' name="Submit5" value="Buscar">
      </div>
    </form>    </td>
    <td><form action="menu.php" method="post" enctype="multipart/form-data" name="form1">
      <div align="center"><span class="style1">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        </span>
        <input name="cpfbuscar" class='class02' type="text" id="cpfbuscar" value="<? echo $cpfbuscar; ?>">
        <input type="submit" class='class01' name="Submit" value="Buscar">
      </div>
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center" class="style2">Nome</div></td>
    <td><div align="center" class="style2">Cart&atilde;o</div></td>
    <td><div align="center" class="style2">Email</div></td>
    <td><div align="center">#</div></td>
    <td><div align="center" class="style2">Status</div></td>
    <td><div align="center" class="style2">#</div></td>
  </tr>
  <?
if(empty($nome)){
$sql = "select * from usuarios where cpf = '$cpfbuscar'";

}else{	  
$sql = "select * from usuarios where nome like '%$nome%' order by nome asc";
}
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$codigo = $linha[0];

$nome = $linha[1];

$endereco = $linha[11];

$numero = $linha[12];

$bairro = $linha[13];

$complemento = $linha[14];

$cidade = $linha[15];

$estado = $linha[16];

$telefone = $linha[18];

$celular = $linha[19];

$email = $linha[20];

$status_usuario = $linha[46];

?>
  <tr>
    <td width="13%"><div align="center"><? echo $nome
; ?></div></td>
    <td width="15%"><div align="center"><? echo $codigo; ?></div></td>
    <td width="9%"><div align="center"><? echo $email_cliente; ?></div></td>
    <td width="24%"><div align="center">
      <form action="impressao.php" method="post" name="form5" target="_blank">
        <strong>
          <?
$sql2 = "select sum(quant_impressao) as total_impressoes from impressao_de_cartao where num_cartao = '$codigo'";
$resultado2=mysql_query($sql2, $conexao);
$linha=mysql_fetch_array($resultado2);

$quant_impressao = bcadd($linha['total_impressoes'],1,0);

?>
          </strong>
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="codigo" type="hidden" id="codigo3" value="<?  echo "$codigo"; ?>">
        <input type="submit" class='class01' name="button3" id="button3" value="<? if($quant_impressao<=0){
echo "Imprimir 1º Via";
}else{
echo "Imprimir Via $quant_impressao";
} ?>"">
        </form>
    </div></td>
    <td width="24%"><div align="center"><? echo $status_usuario; ?></div></td>
    <td width="15%"><div align="center">
      <form name="form5" method="post" action="editar.php">
        <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        <input name="codigo" type="hidden" id="codigo" value="<?  echo "$codigo"; ?>">
        <input type="submit" class='class01' name="button" id="button" value="Editar">
        </form>
    </div></td>
  </tr>
  <? } ?>
</table>
</body>
</html>
