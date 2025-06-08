<?
error_reporting(E_ALL);

require '../../conect/conect.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$fone = $_POST['fone'];
$fax = $_POST['fax'];
$celular = $_POST['celular'];
$obs = $_POST['obs'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];


$comando = "insert into representantes(nome,endereco,numero,bairro,cidade,estado,cep,cpf,rg,fone,fax,celular,email,usuario,senha,obs) values('$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$cpf','$rg','$fone','$fax','$celular','$email','$usuario','$senha','$obs')";


mysql_query($comando,$conexao) or die("Erro ao gravar os dados no servidor!");


echo "Representante gravado com sucesso";

?>

<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
        <?


//QUERY PARA SELECIONAR TODOS DADOS NO BANCO DE DADOS 
$sql = "SELECT * FROM logo";
//EXECUTA O COMANDO ACIMA
$res = mysql_query($sql);

$reg = 0;
//VERIFICA SE O COMANDO FOI EXECUTADO COM SUCESSO...
//if($res) {
//EXIBE PARA O USUARIO
echo "<tr>";
while($linha=mysql_fetch_row($res)) {
$reg++;

printf("<a href='http://www.digicompras.com.br' target='_blank'><img src='http://www.digicompras.com.br/imagens/$linha[1]' border='0'  width='$linha[2]' height='$linha[3]'></a>"); ?>


          <?
if($reg==1){
echo "</tr>";
$reg=0;
}
?>

          <? } ?>

          <p>&nbsp;</p>
          <form name="form1" method="post" action="produtos_insert.php">
            <input type="submit" name="Submit" value="Voltar">
          </form>
</body>
</html>
<?
mysql_close($conexao);
?>