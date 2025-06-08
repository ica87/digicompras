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
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?
//require("conect/conect.php"); or die("erro na requisição");
require '../../conect/conect.php';
error_reporting(E_ALL);

?>

<?

$codigo_aluno = $_POST['codigo_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$codigo = $_POST['codigo'];
$curso = $_POST['curso'];

$obs = $_POST['obs'];

//dados do operador que alterou
$dataalteracao = $_POST['dataalteracao'];
$horaalteracao = $_POST['horaalteracao'];
$operador_alterou = $_POST['operador_alterou'];
$cel_operador_alterou = $_POST['cel_operador_alterou'];
$email_operador_alterou = $_POST['email_operador_alterou'];
//dados do establecimento que alterou
$estabelecimento_alterou = $_POST['estabelecimento_alterou'];
$cidade_estabelecimento_alterou = $_POST['cidade_estabelecimento_alterou'];
$tel_estabelecimento_alterou = $_POST['tel_estabelecimento_alterou'];
$email_estabelecimento_alterou = $_POST['email_estabelecimento_alterou'];




$sql = "select * from db";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$comando = "update `$linha[1]`.`cursos` set `codigo` = '$codigo',`obs` = '$obs',`obs` = '$obs',`status` = 'Cancelado',`dataalteracao` = '$dataalteracao',`horaalteracao` = '$horaalteracao',`operador_alterou` = '$operador_alterou',`cel_operador_alterou` = '$cel_operador_alterou',`email_operador_alterou` = '$email_operador_alterou',`estabelecimento_alterou` = '$estabelecimento_alterou',`cidade_estabelecimento_alterou` = '$cidade_estabelecimento_alterou',`tel_estabelecimento_alterou` = '$tel_estabelecimento_alterou',`email_estabelecimento_alterou` = '$email_estabelecimento_alterou' where `cursos`. `codigo` = '$codigo' limit 1 ";
}

mysql_query($comando,$conexao) or die("Erro ao alterar informações aluno matriculado");


echo "Matricula cancelada com sucesso<br>";
?>



<?
$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$nfantasia = $linha[2];
$email_empresa = $linha[14];
$site = $linha[15];

}
	
	//EMAIL DO ADMINISTRADOR QUE VAI RECEBER O PEDIDO
	$email_dest   =   $email_empresa;
	
	//PREPARA O PEDIDO
	$mens   =  "Olá! O aluno abaixo cancelou a matrícula na $nfantasia!   \n\n";
	
	$mens  .=  "Nome do Aluno: ".$nome_aluno."                                                       \n";
	$mens  .=  "Data do cancelamento: ".$dataalteracao."                                                    \n";
	$mens  .=  "Hora do cancelamento: ".$horaalteracao."                                                    \n";
	$mens  .=  "Operador que efetuou o cancelamento: ".$operador_alterou."                                                    \n";
	$mens  .=  "Celular: ".$cel_operador_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_operador_alterou."                                                    \n";
	$mens  .=  "Estabelecimento: ".$estabelecimento_alterou."                                                    \n";
	$mens  .=  "Cidade: ".$cidade_estabelecimento_alterou."                                                    \n";
	$mens  .=  "Telefone: ".$tel_estabelecimento_alterou."                                                    \n";
	$mens  .=  "E-Mail: ".$email_estabelecimento_alterou."                                                    \n";

	
	//DISPARA O EMAIL
	$envia  =  mail($email_dest, "Matrícula cancelada no sistema em ".$dataalteracao, $mens,"From:".$email_dest);
	$envia  =  mail($email_operador_alterou, "Matrícula cancelada no sistema em ".$dataalteracao, $mens,"From:".$email_dest);

?>



<body>

<table width="100%"  border="0">
  <tr>
    <td width="28%"><form name="form1" method="post" action="informe_codigo_para_cancelamento.php">
      <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
      <input type="submit" name="Submit2" value="Voltar">
    </form></td>
    <td width="34%">&nbsp;</td>
    <td width="38%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
