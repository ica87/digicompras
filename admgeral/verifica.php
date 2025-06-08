<?

require '../conect/conect.php';

session_start();


$usuario=$_POST['usuario'];
$senha=$_POST['senha'];


//$user= "select * from admgeral where usuario='$usuario' and senha='$senha'";
//$result=mysql_query($user,$conexao) or die("Falha ao selecionar a tabela user");


$sql = "SELECT * FROM admgeral where usuario = '$usuario' and senha = '$senha'";

$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {


$nome = $linha[1];
}

echo $nome;

if(empty($nome)){

	$_SESSION['nome'] = $nome;


	Header("Location: alerta.php");

}else{

	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	Header("Location: principal.php");

}

?> 
