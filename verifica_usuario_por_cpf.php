<?

session_start();





$cpf=$_POST['cpf'];

$data_hoje=$_POST['data_hoje'];

$dia=$_POST['dia'];

$mes=$_POST['mes'];

$ano=$_POST['ano'];

$mes_ano=$_POST['mes_ano'];





require 'conect/conect.php';



$user= "select * from usuarios where cpf='$cpf'";

$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");

if(mysql_num_rows($result)==0){



	Header("Location: alerta_usuario.php");



}else{

	

$sql = "SELECT * FROM usuarios where cpf = '$cpf'";

$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {



$usuario = $linha[0];

$senha = $linha[40];



}



	$_SESSION['usuario'] = $usuario;

	$_SESSION['senha'] = $senha;

	$_SESSION['data_hoje'] = $data_hoje;

	$_SESSION['dia'] = $dia;

	$_SESSION['mes'] = $mes;

	$_SESSION['ano'] = $ano;

	$_SESSION['mes_ano'] = $mes_ano;

	Header("Location: usuarios/index.php");



}



?> 

