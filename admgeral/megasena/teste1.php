<form action="teste1.php" method="post"><input name="nome" type="text" id="nome">
  <input type="submit" name="submit" id="submit" value="Enviar">
</form>
<p>&nbsp;</p>


<?

$nome = $_POST['nome'];

if(empty($nome)){}else{
	echo " enviou para mesma pagina $nome";
	
}


?>