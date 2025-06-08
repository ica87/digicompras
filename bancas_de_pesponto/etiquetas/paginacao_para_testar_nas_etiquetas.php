<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>


Sempre usar um Search Engine? I'm sure you have, lots of time. Tenho certeza que voc� tem, muito tempo. When Search Engines found thousands of results for a keyword do they spit out all the result in one page? Quando os motores de busca encontrar milhares de resultados para a palavra-chave que eles cospem para fora todos os resultados em uma p�gina? Nope, they use paging to show the result little by little. N�o, eles usam pagina��o para mostrar o resultado aos poucos. 

Paging means showing your query result in multiple pages instead of just put them all in one long page. Paging significa mostrar o resultado da consulta em v�rias p�ginas ao inv�s de apenas coloc�-los todos em uma p�gina. Imagine waiting for five minutes just to load a search page that shows 1000 result. Imagine esperar por cinco minutos s� para carregar uma p�gina de pesquisa de 1000 que mostra resultados. By splitting the result in multiple pages you can save download time plus you don't have much scrolling to do. Ao dividir o resultado em v�rias p�ginas voc� pode economizar tempo de download e voc� n�o tem muito para fazer a rolagem. 

To show the result of a query in several pages first you need to know how many rows you have and how many rows per page you want to show. Para mostrar o resultado de uma consulta em v�rias p�ginas, primeiro voc� precisa saber quantas linhas tem e quantas linhas por p�gina que deseja mostrar. For example if I have 295 rows and I show 30 rows per page that mean I'll have ten pages (rounded up). Por exemplo, se eu tenho 295 linhas e me mostrar 30 linhas por p�gina que significa que eu vou ter dez p�ginas (arredondado para cima). 


For the example I created a table named randoms that store 295 random numbers. Para o exemplo eu criei uma tabela chamada randoms que armazenar 295 n�meros aleat�rios. Each page shows 20 numbers. Cada p�gina apresenta 20 n�meros. 

Example: paging.php Exemplo: paging.php 
Source code : paging.phps O c�digo-fonte: paging.phps 

<?php <? Php 
include 'library/config.php'; include 'biblioteca / config.php'; 
include 'library/opendb.php'; include 'biblioteca opendb.php /'; 

// how many rows to show per page / / Quantas linhas a mostrar por p�gina 
$rowsPerPage = 20; rowsPerPage $ = 20; 

// by default we show first page / / Por padr�o, vamos mostrar a primeira p�gina 
$pageNum = 1; pagenum $ = 1; 

// if $_GET['page'] defined, use it as page number / / P�gina] se $ _GET ['definido, us�-lo como n�mero de p�gina 
if(isset($_GET['page'])) if (isset ($ page _GET ['])) 
{ ( 
$pageNum = $_GET['page']; pagenum page = $ _GET [']; 
} ) 

// counting the offset / / Contando o deslocamento 
$offset = ($pageNum - 1) * $rowsPerPage; $ Offset = ($ pagenum - 1) * $ rowsPerPage; 

$query = " SELECT val FROM randoms " . $ query = "SELECT randoms de Val". 
" LIMIT $offset, $rowsPerPage"; "LIMIT $ offset, $ rowsPerPage"; 
$result = mysql_query($query) or die('Error, query failed'); $ resultado = mysql_query ($ query) or die ('Erro, consulta falhou'); 

// print the random numbers / / Imprimir os n�meros aleat�rios 
while($row = mysql_fetch_array($result)) while ($ linha = mysql_fetch_array ($ resultado)) 
{ ( 
echo $row['val'] . ] Val echo $ linha ['. '<br>'; '<br>; 
} ) 

// ... / / ... more code here mais c�digo aqui 
?> ?> 

Paging is implemented in MySQL using LIMIT that take two arguments. Pagina��o � implementado no MySQL usando o LIMIT que tomam dois argumentos. The first argument specifies the offset of the first row to return, the second specifies the maximum number of rows to return. O primeiro argumento especifica o deslocamento da primeira linha de retorno, o segundo especifica o n�mero m�ximo de linhas a retornar. The offset of the first row is 0 ( not 1 ). O deslocamento da primeira linha � 0 (n�o 1). 

When paging.php is called for the first time the value of $_GET['page'] is not set. Quando paging.php � chamado pela primeira vez o valor de R $ ['page _GET'] n�o est� definido. This caused $pageNum value to remain 1 and the query is : Isso causou pagenum valor de US $ 1 e manter-se a consulta �: 

SELECT val FROM randoms LIMIT 0, 20 SELECT FROM val randoms LIMIT 0, 20 

which returns the first 20 values from the table. que retorna os 20 primeiros valores da tabela. But when paging.php is called like this http://www.php-mysql-tutorial.com/examples/paging/paging.php?page=4 Mas quando paging.php � chamado assim http://www.php-mysql-tutorial.com/examples/paging/paging.php?page=4 
the value of $pageNum becomes 4 and the query will be : o valor de R $ 4 e pagenum torna a consulta ser�: 

SELECT val FROM randoms LIMIT 60, 20 SELECT FROM val randoms LIMIT 60, 20 

this query returns rows 60 to 79. esta consulta retorna linhas 60-79. 

After showing the values we need to print the links to show any pages we like. But first we have to count the number of pages. Depois de mostrar os valores que precisamos para imprimir os links para mostrar todas as p�ginas que n�s gostamos. Mas primeiro temos que contar o n�mero de p�ginas. This is achieved by dividing the number of total rows by the number of rows to show per page : Isso � obtido dividindo o n�mero total de linhas pelo n�mero de linhas a mostrar por p�gina: 

$maxPage = ceil($numrows/$rowsPerPage); $ MaxPage = ceil ($ numrows / $ rowsPerPage); 
 
<?php <? Php 
// ... / / ... the previous code o c�digo anterior 

// how many rows we have in database / / Quantas linhas n�s temos no banco de dados 
$query   = "SELECT COUNT(val) AS numrows FROM randoms"; $ consulta = COUNT "SELECT (val) AS numrows randoms de"; 
$result  = mysql_query($query) or die('Error, query failed'); $ resultado = mysql_query ($ query) or die ('Erro, consulta falhou'); 
$row     = mysql_fetch_array($result, MYSQL_ASSOC); $ linha = mysql_fetch_array ($ resultado, MYSQL_ASSOC); 
$numrows = $row['numrows']; [Linha numrows = $ 'numrows']; 

// how many pages we have when using paging? / / Quantas p�ginas temos quando se utiliza pagina��o? 
$maxPage = ceil($numrows/$rowsPerPage); $ MaxPage = ceil ($ numrows / $ rowsPerPage); 

// print the link to access each page / / Imprimir o link de acesso a cada p�gina 
$self = $_SERVER['PHP_SELF']; $ Self = $ _SERVER ['PHP_SELF']; 
$nav  = ''; ''Nav = $; 

for($page = 1; $page <= $maxPage; $page++) for ($ page = 1; <$ page = $ maxPage; $ page + +) 
{ ( 
if ($page == $pageNum) if ($ page == $ pagenum) 
{ ( 
$nav .= " $page "; // no need to create a link to current page nav $ .= "$ page"; / / n�o h� necessidade de criar um link para p�gina corrente 
} ) 
else outro 
{ ( 
$nav .= " <a href=\"$self?page=$page\">$page</a> "; nav $ .= "$ page href=\"$self?page=$page\"> <a / a>"; 
} ) 
} ) 

// ... / / ... still more code coming ainda mais vindo de c�digo 
?> ?> 

The mathematical function ceil() is used to round up the value of $numrows/$rowsPerPage. A fun��o matem�tica ceil () � usado para arredondar o valor de R $ numrows / $ rowsPerPage. 

In this case the value of total rows $numrows is 295 and $rowsPerPage is 20 so the result of the division is 14.75 and by using ceil() we get $maxPage = 15 Neste caso, o valor total das linhas � de 295 $ numrows e US $ 20 rowsPerPage � assim o resultado da divis�o � 14,75 e usando ceil (), obtemos $ maxPage = 15 

Now that we know how many pages we have we make a loop to print the link. Each link will look something like this: Agora que sabemos quantas p�ginas temos que fazer um loop para imprimir o link. Cada link ser� parecido com este: 

<a href="paging.php?page=5">5</a> <a href="paging.php?page=5"> 5 </ a> 

You see that we use $_SERVER['PHP_SELF'] instead of paging.php when creating the link to point to the paging file. Voc� v� que n�s usamos $ ['PHP_SELF'] em vez de _SERVER paging.php ao criar o link para apontar para o arquivo de pagina��o. This is done to avoid the trouble of modifying the code in case we want to change the filename. Isso � feito para evitar o problema de modificar o c�digo em caso queremos mudar o nome do arquivo. 

We are almost complete. Estamos quase completo. Just need to add a little code to create a 'Previous' and 'Next' link. S� precisa adicionar um pouco de c�digo para criar um precedente 'e' link 'Next. With these links we can navigate to the previous and next page easily. Com estas informa��es podemos navegar para a anterior e pr�xima p�gina facilmente. And while we at it let's also create a 'First page' and 'Last page' link so we can jump straight to the first and last page when we want to. E quando n�s vamos a ele tamb�m criar uma "primeira p�gina" e "�ltima p�gina" link para que possamos ir diretamente para a primeira e �ltima p�gina quando queremos. 


<?php <? Php 
// ... / / ... the previous code o c�digo anterior 

// creating previous and next link / / Criar link anterior e seguinte 
// plus the link to go straight to / / Mais o link para ir direto para 
// the first and last page / / A primeira e �ltima p�gina 

if ($pageNum > 1) if ($ pagenum> 1) 
{ ( 
$page  = $pageNum - 1; $ Page = $ pagenum - 1; 
$prev  = " <a href=\"$self?page=$page\">[Prev]</a> "; prev $ = "<a href=\"$self?page=$page\"> [Prev] </ a>"; 

$first = " <a href=\" $self?page=1 \">[First Page]</a> "; $ Primeiro = "href=\" <a $self?page=1 \"> [Primeira p�gina] </ a>"; 
} ) 
else outro 
{ ( 
$prev  = '&nbsp;'; // we're on page one, don't print previous link prev $ = '/ / n�s estamos em uma p�gina, n�o imprime link anterior 
$first = '&nbsp;'; // nor the first page link $ Primeiro = '/ / nem link da primeira p�gina 
} ) 

if ($pageNum < $maxPage) if ($ pagenum <$ maxPage) 
{ ( 
$page = $pageNum + 1; $ Page = $ pagenum + 1; 
$next = " <a href=\"$self?page=$page\">[Next]</a> "; $ Next = "<a href=\"$self?page=$page\"> [Next] </ a>"; 

$last = " <a href=\" $self?page=$maxPage \">[Last Page]</a> "; $ Sobrenome = "<a href=\" $self?page=$maxPage \"> [�ltima P�gina] </ a>"; 
} ) 
else outro 
{ ( 
$next = '&nbsp;'; // we're on the last page, don't print next link $ Next = '/ / n�s estamos na �ltima p�gina, n�o imprime pr�ximo link 
$last = '&nbsp;'; // nor the last page link $ Passado = '/ / link nem a �ltima p�gina 
} ) 

// print the navigation link / / Imprimir o link de navega��o 
echo $first . echo $ primeiro. $prev . prev $. $nav . nav $. $next . $ Next. $last; $ Passado; 

// and close the database connection / / E fechar a conex�o do banco de dados 
include '../library/closedb.php'; include '.. / library / closedb.php; 

// ... / / ... and we're done! e estamos a fazer! 
?> ?> 

Making these navigation link is actually easier than you may think. Tornar estas link navega��o � realmente mais f�cil do que voc� pode pensar. When we're on the fifth page we just make the 'Previous' link point to the fourth. Quando estamos na quinta p�gina que acabamos de fazer o link 'ponto' para o quarto anterior. The same principle also apply for the 'Next' link, we just need to add one to the page number. Este mesmo princ�pio tamb�m se aplica para o seguinte 'link, s� precisamos adicionar um para o n�mero da p�gina. 

One thing to remember is that we don't need to print the 'Previous' and 'First Page' link when we're already on the first page. Uma coisa a lembrar � que n�o precisamos imprimir o anterior 'e' P�gina 'link Primeiro, quando j� estamos na primeira p�gina. Same thing for the 'Next' and 'Last' link. Mesma coisa para o pr�ximo 'e' �ltima 'link. If we do print them that would only confuse the one who click on it. Se fizermos imprimi-los que apenas confundem a pessoa que clicar sobre ela. Because we'll be giving them the exact same page. Porque n�s vamos dar-lhes a p�gina exatamente o mesmo. 

 

We got a problem here... Temos um problema aqui ... 
Take a look at this slightly modified version of paging.php . D� uma olhada esta vers�o ligeiramente modificada de paging.php. Instead of showing 20 numbers in a page, I decided to show just three. Em vez de mostrar 20 n�meros em uma p�gina, resolvi mostrar apenas tr�s. 

See the problem already? Veja o problema j�? 

Those page numbers are running across the screen! Esses n�meros de p�gina est�o executando em toda a tela! Yuck! Eca! 

This call for a little modification to the code. Este convite � apresenta��o de uma pequena modifica��o no c�digo. Instead of printing the link to each and every page we will just saying something like "Viewing page 4 of 99 pages". Em vez de imprimir o link para cada p�gina, vamos simplesmente dizer algo como "Visualizando p�gina 4 de 99 p�ginas". 

Than means we havel remove these code : Que significa que havel remover esses c�digo: 

<?php <? Php 
// ... / / ... the previous code o c�digo anterior 

$nav  = ''; ''Nav = $; 

for($page = 1; $page <= $maxPage; $page++) for ($ page = 1; <$ page = $ maxPage; $ page + +) 
{ ( 
if ($page == $pageNum) if ($ page == $ pagenum) 
{ ( 
$nav .= " $page "; // no need to create a link to current page nav $ .= "$ page"; / / n�o h� necessidade de criar um link para p�gina corrente 
} ) 
else outro 
{ ( 
$nav .= " <a href=\"$self?page=$page\">$page</a> "; nav $ .= "$ page href=\"$self?page=$page\"> <a / a>"; 
} ) 
} ) 

// ... / / ... the rest here o resto aqui 
?> ?> 

And then modify this one E em seguida, modificar este 

<?php <? Php 
// ... / / ... 

// print the navigation link / / Imprimir o link de navega��o 
echo $first . echo $ primeiro. $prev . prev $. $nav . nav $. $next . $ Next. $last; $ Passado; 

// ... / / ... 
?> ?> 


Into this Nessa 

<?php <? Php 
// ... / / ... 

// print the navigation link / / Imprimir o link de navega��o 
echo $first . echo $ primeiro. $prev . prev $. 
" Showing page $pageNum of $maxPage pages " . "Mostrando p�gina $ pagenum de p�ginas maxPage $". $next . $ Next. $last; $ Passado; 

// ... / / ... 
?> ?> 


</body>
</html>
