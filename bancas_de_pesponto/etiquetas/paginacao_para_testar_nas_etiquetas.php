<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>


Sempre usar um Search Engine? I'm sure you have, lots of time. Tenho certeza que você tem, muito tempo. When Search Engines found thousands of results for a keyword do they spit out all the result in one page? Quando os motores de busca encontrar milhares de resultados para a palavra-chave que eles cospem para fora todos os resultados em uma página? Nope, they use paging to show the result little by little. Não, eles usam paginação para mostrar o resultado aos poucos. 

Paging means showing your query result in multiple pages instead of just put them all in one long page. Paging significa mostrar o resultado da consulta em várias páginas ao invés de apenas colocá-los todos em uma página. Imagine waiting for five minutes just to load a search page that shows 1000 result. Imagine esperar por cinco minutos só para carregar uma página de pesquisa de 1000 que mostra resultados. By splitting the result in multiple pages you can save download time plus you don't have much scrolling to do. Ao dividir o resultado em várias páginas você pode economizar tempo de download e você não tem muito para fazer a rolagem. 

To show the result of a query in several pages first you need to know how many rows you have and how many rows per page you want to show. Para mostrar o resultado de uma consulta em várias páginas, primeiro você precisa saber quantas linhas tem e quantas linhas por página que deseja mostrar. For example if I have 295 rows and I show 30 rows per page that mean I'll have ten pages (rounded up). Por exemplo, se eu tenho 295 linhas e me mostrar 30 linhas por página que significa que eu vou ter dez páginas (arredondado para cima). 


For the example I created a table named randoms that store 295 random numbers. Para o exemplo eu criei uma tabela chamada randoms que armazenar 295 números aleatórios. Each page shows 20 numbers. Cada página apresenta 20 números. 

Example: paging.php Exemplo: paging.php 
Source code : paging.phps O código-fonte: paging.phps 

<?php <? Php 
include 'library/config.php'; include 'biblioteca / config.php'; 
include 'library/opendb.php'; include 'biblioteca opendb.php /'; 

// how many rows to show per page / / Quantas linhas a mostrar por página 
$rowsPerPage = 20; rowsPerPage $ = 20; 

// by default we show first page / / Por padrão, vamos mostrar a primeira página 
$pageNum = 1; pagenum $ = 1; 

// if $_GET['page'] defined, use it as page number / / Página] se $ _GET ['definido, usá-lo como número de página 
if(isset($_GET['page'])) if (isset ($ page _GET ['])) 
{ ( 
$pageNum = $_GET['page']; pagenum page = $ _GET [']; 
} ) 

// counting the offset / / Contando o deslocamento 
$offset = ($pageNum - 1) * $rowsPerPage; $ Offset = ($ pagenum - 1) * $ rowsPerPage; 

$query = " SELECT val FROM randoms " . $ query = "SELECT randoms de Val". 
" LIMIT $offset, $rowsPerPage"; "LIMIT $ offset, $ rowsPerPage"; 
$result = mysql_query($query) or die('Error, query failed'); $ resultado = mysql_query ($ query) or die ('Erro, consulta falhou'); 

// print the random numbers / / Imprimir os números aleatórios 
while($row = mysql_fetch_array($result)) while ($ linha = mysql_fetch_array ($ resultado)) 
{ ( 
echo $row['val'] . ] Val echo $ linha ['. '<br>'; '<br>; 
} ) 

// ... / / ... more code here mais código aqui 
?> ?> 

Paging is implemented in MySQL using LIMIT that take two arguments. Paginação é implementado no MySQL usando o LIMIT que tomam dois argumentos. The first argument specifies the offset of the first row to return, the second specifies the maximum number of rows to return. O primeiro argumento especifica o deslocamento da primeira linha de retorno, o segundo especifica o número máximo de linhas a retornar. The offset of the first row is 0 ( not 1 ). O deslocamento da primeira linha é 0 (não 1). 

When paging.php is called for the first time the value of $_GET['page'] is not set. Quando paging.php é chamado pela primeira vez o valor de R $ ['page _GET'] não está definido. This caused $pageNum value to remain 1 and the query is : Isso causou pagenum valor de US $ 1 e manter-se a consulta é: 

SELECT val FROM randoms LIMIT 0, 20 SELECT FROM val randoms LIMIT 0, 20 

which returns the first 20 values from the table. que retorna os 20 primeiros valores da tabela. But when paging.php is called like this http://www.php-mysql-tutorial.com/examples/paging/paging.php?page=4 Mas quando paging.php é chamado assim http://www.php-mysql-tutorial.com/examples/paging/paging.php?page=4 
the value of $pageNum becomes 4 and the query will be : o valor de R $ 4 e pagenum torna a consulta será: 

SELECT val FROM randoms LIMIT 60, 20 SELECT FROM val randoms LIMIT 60, 20 

this query returns rows 60 to 79. esta consulta retorna linhas 60-79. 

After showing the values we need to print the links to show any pages we like. But first we have to count the number of pages. Depois de mostrar os valores que precisamos para imprimir os links para mostrar todas as páginas que nós gostamos. Mas primeiro temos que contar o número de páginas. This is achieved by dividing the number of total rows by the number of rows to show per page : Isso é obtido dividindo o número total de linhas pelo número de linhas a mostrar por página: 

$maxPage = ceil($numrows/$rowsPerPage); $ MaxPage = ceil ($ numrows / $ rowsPerPage); 
 
<?php <? Php 
// ... / / ... the previous code o código anterior 

// how many rows we have in database / / Quantas linhas nós temos no banco de dados 
$query   = "SELECT COUNT(val) AS numrows FROM randoms"; $ consulta = COUNT "SELECT (val) AS numrows randoms de"; 
$result  = mysql_query($query) or die('Error, query failed'); $ resultado = mysql_query ($ query) or die ('Erro, consulta falhou'); 
$row     = mysql_fetch_array($result, MYSQL_ASSOC); $ linha = mysql_fetch_array ($ resultado, MYSQL_ASSOC); 
$numrows = $row['numrows']; [Linha numrows = $ 'numrows']; 

// how many pages we have when using paging? / / Quantas páginas temos quando se utiliza paginação? 
$maxPage = ceil($numrows/$rowsPerPage); $ MaxPage = ceil ($ numrows / $ rowsPerPage); 

// print the link to access each page / / Imprimir o link de acesso a cada página 
$self = $_SERVER['PHP_SELF']; $ Self = $ _SERVER ['PHP_SELF']; 
$nav  = ''; ''Nav = $; 

for($page = 1; $page <= $maxPage; $page++) for ($ page = 1; <$ page = $ maxPage; $ page + +) 
{ ( 
if ($page == $pageNum) if ($ page == $ pagenum) 
{ ( 
$nav .= " $page "; // no need to create a link to current page nav $ .= "$ page"; / / não há necessidade de criar um link para página corrente 
} ) 
else outro 
{ ( 
$nav .= " <a href=\"$self?page=$page\">$page</a> "; nav $ .= "$ page href=\"$self?page=$page\"> <a / a>"; 
} ) 
} ) 

// ... / / ... still more code coming ainda mais vindo de código 
?> ?> 

The mathematical function ceil() is used to round up the value of $numrows/$rowsPerPage. A função matemática ceil () é usado para arredondar o valor de R $ numrows / $ rowsPerPage. 

In this case the value of total rows $numrows is 295 and $rowsPerPage is 20 so the result of the division is 14.75 and by using ceil() we get $maxPage = 15 Neste caso, o valor total das linhas é de 295 $ numrows e US $ 20 rowsPerPage é assim o resultado da divisão é 14,75 e usando ceil (), obtemos $ maxPage = 15 

Now that we know how many pages we have we make a loop to print the link. Each link will look something like this: Agora que sabemos quantas páginas temos que fazer um loop para imprimir o link. Cada link será parecido com este: 

<a href="paging.php?page=5">5</a> <a href="paging.php?page=5"> 5 </ a> 

You see that we use $_SERVER['PHP_SELF'] instead of paging.php when creating the link to point to the paging file. Você vê que nós usamos $ ['PHP_SELF'] em vez de _SERVER paging.php ao criar o link para apontar para o arquivo de paginação. This is done to avoid the trouble of modifying the code in case we want to change the filename. Isso é feito para evitar o problema de modificar o código em caso queremos mudar o nome do arquivo. 

We are almost complete. Estamos quase completo. Just need to add a little code to create a 'Previous' and 'Next' link. Só precisa adicionar um pouco de código para criar um precedente 'e' link 'Next. With these links we can navigate to the previous and next page easily. Com estas informações podemos navegar para a anterior e próxima página facilmente. And while we at it let's also create a 'First page' and 'Last page' link so we can jump straight to the first and last page when we want to. E quando nós vamos a ele também criar uma "primeira página" e "Última página" link para que possamos ir diretamente para a primeira e última página quando queremos. 


<?php <? Php 
// ... / / ... the previous code o código anterior 

// creating previous and next link / / Criar link anterior e seguinte 
// plus the link to go straight to / / Mais o link para ir direto para 
// the first and last page / / A primeira e última página 

if ($pageNum > 1) if ($ pagenum> 1) 
{ ( 
$page  = $pageNum - 1; $ Page = $ pagenum - 1; 
$prev  = " <a href=\"$self?page=$page\">[Prev]</a> "; prev $ = "<a href=\"$self?page=$page\"> [Prev] </ a>"; 

$first = " <a href=\" $self?page=1 \">[First Page]</a> "; $ Primeiro = "href=\" <a $self?page=1 \"> [Primeira página] </ a>"; 
} ) 
else outro 
{ ( 
$prev  = '&nbsp;'; // we're on page one, don't print previous link prev $ = '/ / nós estamos em uma página, não imprime link anterior 
$first = '&nbsp;'; // nor the first page link $ Primeiro = '/ / nem link da primeira página 
} ) 

if ($pageNum < $maxPage) if ($ pagenum <$ maxPage) 
{ ( 
$page = $pageNum + 1; $ Page = $ pagenum + 1; 
$next = " <a href=\"$self?page=$page\">[Next]</a> "; $ Next = "<a href=\"$self?page=$page\"> [Next] </ a>"; 

$last = " <a href=\" $self?page=$maxPage \">[Last Page]</a> "; $ Sobrenome = "<a href=\" $self?page=$maxPage \"> [Última Página] </ a>"; 
} ) 
else outro 
{ ( 
$next = '&nbsp;'; // we're on the last page, don't print next link $ Next = '/ / nós estamos na última página, não imprime próximo link 
$last = '&nbsp;'; // nor the last page link $ Passado = '/ / link nem a última página 
} ) 

// print the navigation link / / Imprimir o link de navegação 
echo $first . echo $ primeiro. $prev . prev $. $nav . nav $. $next . $ Next. $last; $ Passado; 

// and close the database connection / / E fechar a conexão do banco de dados 
include '../library/closedb.php'; include '.. / library / closedb.php; 

// ... / / ... and we're done! e estamos a fazer! 
?> ?> 

Making these navigation link is actually easier than you may think. Tornar estas link navegação é realmente mais fácil do que você pode pensar. When we're on the fifth page we just make the 'Previous' link point to the fourth. Quando estamos na quinta página que acabamos de fazer o link 'ponto' para o quarto anterior. The same principle also apply for the 'Next' link, we just need to add one to the page number. Este mesmo princípio também se aplica para o seguinte 'link, só precisamos adicionar um para o número da página. 

One thing to remember is that we don't need to print the 'Previous' and 'First Page' link when we're already on the first page. Uma coisa a lembrar é que não precisamos imprimir o anterior 'e' Página 'link Primeiro, quando já estamos na primeira página. Same thing for the 'Next' and 'Last' link. Mesma coisa para o próximo 'e' Última 'link. If we do print them that would only confuse the one who click on it. Se fizermos imprimi-los que apenas confundem a pessoa que clicar sobre ela. Because we'll be giving them the exact same page. Porque nós vamos dar-lhes a página exatamente o mesmo. 

 

We got a problem here... Temos um problema aqui ... 
Take a look at this slightly modified version of paging.php . Dê uma olhada esta versão ligeiramente modificada de paging.php. Instead of showing 20 numbers in a page, I decided to show just three. Em vez de mostrar 20 números em uma página, resolvi mostrar apenas três. 

See the problem already? Veja o problema já? 

Those page numbers are running across the screen! Esses números de página estão executando em toda a tela! Yuck! Eca! 

This call for a little modification to the code. Este convite à apresentação de uma pequena modificação no código. Instead of printing the link to each and every page we will just saying something like "Viewing page 4 of 99 pages". Em vez de imprimir o link para cada página, vamos simplesmente dizer algo como "Visualizando página 4 de 99 páginas". 

Than means we havel remove these code : Que significa que havel remover esses código: 

<?php <? Php 
// ... / / ... the previous code o código anterior 

$nav  = ''; ''Nav = $; 

for($page = 1; $page <= $maxPage; $page++) for ($ page = 1; <$ page = $ maxPage; $ page + +) 
{ ( 
if ($page == $pageNum) if ($ page == $ pagenum) 
{ ( 
$nav .= " $page "; // no need to create a link to current page nav $ .= "$ page"; / / não há necessidade de criar um link para página corrente 
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

// print the navigation link / / Imprimir o link de navegação 
echo $first . echo $ primeiro. $prev . prev $. $nav . nav $. $next . $ Next. $last; $ Passado; 

// ... / / ... 
?> ?> 


Into this Nessa 

<?php <? Php 
// ... / / ... 

// print the navigation link / / Imprimir o link de navegação 
echo $first . echo $ primeiro. $prev . prev $. 
" Showing page $pageNum of $maxPage pages " . "Mostrando página $ pagenum de páginas maxPage $". $next . $ Next. $last; $ Passado; 

// ... / / ... 
?> ?> 


</body>
</html>
