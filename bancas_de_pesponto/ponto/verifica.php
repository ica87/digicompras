<?

session_start(); //inicia sess�o...
if ($_SESSION["usuario"] == true) //verifica se a vari�vel "usuario" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["nome"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["data"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["codigo_ponto"] == true) //verifica se a vari�vel "senha" � verdadeira...
echo ""; //se for emite mensagem positiva.

else //se n�o for...
header("Location: alerta.php");
?>

<?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
$codigo_ponto = $_SESSION['codigo_ponto'];
$nome = $_SESSION['nome'];
$data = $_SESSION['data'];


require '../../conect/conect.php';

$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$funcionario = $linha[42];
}
?>
  <?
if($funcionario=="Sim"){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
	$_SESSION['nome'] = $nome;
	$_SESSION['codigo_ponto'] = $codigo_ponto;
	$_SESSION['data'] = $data;
	Header("Location: marcarponto.php");
}
else
{
echo "Essa sess�o � somente para funcion�rios!<br><br> Clique Voltar!";
}

?>
  <form name="form1" method="post" action="menu.php">
  <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
        