<?php
// dados de conexão com o banco de dados a ser backupeado
$usuario = "user";
$senha = "pass";
$dbname = "nomedoseubanco";
// conectando ao banco
	mysql_connect("localhost",$usuario,$senha) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());

// gerando um arquivo sql. Como?
// a função fopen, abre um arquivo, que no meu caso, será chamado como: nomedobanco.sql
// note que eu estou concatenando dinamicamente o nome do banco com a extensão .sql.
	$back = fopen($dbname.".sql","w");

// aqui, listo todas as tabelas daquele banco selecionado acima
	$res = mysql_list_tables($dbname) or die(mysql_error());

Em seguida, vamos, verificar quais são as tabelas daquela base, lista-las, e em um laço for, vamos mostrar cada uma delas, e resgatar as funções de criação da tabela, para serem gravadas no arquivo sql mais adiante.

// resgato cada uma das tabelas, num loop
		while ($row = mysql_fetch_row($res)) {
	$table = $row[0]; 
// usando a função SHOW CREATE TABLE do mysql, exibo as funções de criação da tabela, 
// exportando também isso, para nosso arquivo de backup
	$res2 = mysql_query("SHOW CREATE TABLE $table");
// digo que o comando acima deve ser feito em cada uma das tabelas

while ( $lin = mysql_fetch_row($res2)){ 
// instruções que serão gravadas no arquivo de backup
		fwrite($back,"\n#\n# Criação da Tabela : $table\n#\n\n");
		fwrite($back,"$lin[1] ;\n\n#\n# Dados a serem incluídos na tabela\n#\n\n");

Teremos então de pegar os dados que estão dentro de cada campo de cada tabela, e abri-los também para serem gravados no nosso arquivo de backup.

// seleciono todos os dados de cada tabela pega no while acima
// e depois gravo no arquivo .sql, usando comandos de insert
	$res3 = mysql_query("SELECT * FROM $table");
		while($r=mysql_fetch_row($res3)){ 
	$sql="INSERT INTO $table VALUES (";

Agora vamos pegar cada dado do campo de cada tabela, e executar tarefas como, quebra de linha, substituição de aspas, espaços em branco, etc. Deixando o arquivo confiável para ser importado em outro banco de dados.

// este laço irá executar os comandos acima, gerando o arquivo ao final, 
// na função fwrite (gravar um arquivo)
// este laço também irá substituir as aspas duplas, simples e campos vazios
// por aspas simples, colocando espaços e quebras de linha ao final de cada registro, etc
// deixando o arquivo pronto para ser importado em outro banco
   
 for($j=0; $j<mysql_num_fields($res3);$j++)
		        {
		            if(!isset($r[$j]))
		                $sql .= " '',";
		            elseif($r[$j] != "")
                        $sql .= " '".addslashes($r[$j])."',";
		            else
		                $sql .= " '',";
		        }
                        $sql = ereg_replace(",$", "", $sql);
		                $sql .= ");\n";

		fwrite($back,$sql);
		}
	}
}

E finalmente, vamos fechar (internamente, no servidor) o arquivo que geramos, dando um nome para o mesmo, e gerando o arquivo que será então disponibilizado para download.

// fechar o arquivo que foi gravado
fclose($back);
// gerando o arquivo para download, com o nome do banco e extensão sql.
	$arquivo = $dbname.".sql";
	Header("Content-type: application/sql");
 	Header("Content-Disposition: attachment; filename=$arquivo");
// lê e exibe o conteúdo do arquivo gerado
 	readfile($arquivo);
?>