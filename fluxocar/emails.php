<?
require 'conect/conect.php';

LOAD DATA
INFILE 'emails_alvescar.txt'
INTO TABLE clientes
TRUNCATE
FIELDS TERMINATED BY ''
TRAILING NULLCOLS
(email)

//Detalhes sobre o a configura��o acima

//INFILE 'UC.TXT' // aqui voc� colocar o localiza��o do seu arquivo txt ou csv...
//INTO TABLE UC // aqui o nome da tabela que recebera os dados
//TRUNCATE //esta linha � opcional, significa que ele deve apagar as linhas da tabela(ela n�o usa rollback)
//FIELDS TERMINATED BY ';' // aqui voc� coloca o demlitador do seu arquivo. para campos separado por tabulula��o use '\t'
//TRAILING NULLCOLS //aqui voc� diz para ele ignora linhas em branco, isto evita linhas em branco,caso sua tabela nao tenha chave primaria.
//(UC,Cod_Local,Nro_CLI,Cod_Etapa,Cod_Livro) // finalmente o nome dos campos que receberao os dados, na mesma ordem que estiverem no arquiv txt.

?>