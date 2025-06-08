<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>


<?php
function GeraColunas($pNumColunas, $pQuery) {
	// Executa a instrução SQL
	$resultado = mysql_query($pQuery);
 
	// Inicia a tabela
	echo ("<table width='100%' border='1' style='border-collapse:collapse; border-color: #999'>\n");
 
	// Loops para gerar as colunas
	for($i = 0; $i <= mysql_num_rows($resultado); ++$i) {
	for ($intCont = 0; $intCont < $pNumColunas; $intCont++) {
		$linha = mysql_fetch_array($resultado);
		if ($i > $linha) {
			if ( $intCont < $pNumColunas-1) echo "</tr>\n";
				break;
			}
 
		// Coloca cada valor do banco de dados em uma variável
		$codigo = $linha[0];
		$produto = $linha[1];
		$valor = $linha[2];
 
			if ($intCont == 0) {
				echo "<tr>\n";
			}
 
			// Aqui vai o conteudo, ou seja, exibimos o nome do produto e seu respectivo valor
			echo "<td align='center' height='50'><b>". $produto ."</b> <br /> R$ ". $valor ."</td>\n";
 
			if ($intCont == $pNumColunas-1 ) {
				echo "</tr>\n";
			} else {
				$i++;
			}
		}
	}
	// Fim da tabela
	echo ('</table>');
}
?>


</body>
</html>
