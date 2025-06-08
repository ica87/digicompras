<?
session_start();
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

$num_cartao=$_POST['num_cartao'];
$calculo=$_POST['calculo'];
$valor_compra=$_POST['valor_compra'];
$senha_usuario=$_POST['senha_usuario'];
$data_hoje=$_POST['data_hoje'];
$dia=$_POST['dia'];
$mes=$_POST['mes'];
$ano=$_POST['ano'];
$mes_ano=$_POST['mes_ano'];
$categoria=$_POST['categoria'];
$estab_pertence_com=$_POST['estab_pertence_com'];


$alerta="ATENÇÃO!!!... A SENHA ESTÁ INCORRETA!!!... TENTE NOVAMENTE";


require '../conect/conect.php';

if($categoria<>(FARMACIAS) && $categoria<>(GÁS)){
$user= "select * from usuarios where codigo = '$num_cartao' and senha = '$senha_usuario'";
}
else{
$user= "select * from usuarios where codigo = '$num_cartao'";
}
$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");
if(mysql_num_rows($result)==0){

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	$_SESSION['dia'] = $dia;
	$_SESSION['mes'] = $mes;
	$_SESSION['ano'] = $ano;
	$_SESSION['mes_ano'] = $mes_ano;
	$_SESSION['codigo'] = $num_cartao;
	//$_SESSION['estab_pertence_com'] = $estab_pertence_com;
	
	Header("Location: index.php?mensagem=ATENÇÃO!!!... A SENHA ESTÁ INCORRETA!!!... TENTE NOVAMENTE!");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['data_hoje'] = $data_hoje;
	$_SESSION['dia'] = $dia;
	$_SESSION['mes'] = $mes;
	$_SESSION['ano'] = $ano;
	$_SESSION['mes_ano'] = $mes_ano;
	$_SESSION['num_cartao'] = $num_cartao;
	$_SESSION['calculo'] = $calculo;
	$_SESSION['valor_compra'] = $valor_compra;
	//$_SESSION['estab_pertence_com'] = $estab_pertence_com;

	Header("Location: grava_compra.php");

}

?> 
