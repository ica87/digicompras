<?

session_start(); //inicia sessão...
if ($_SESSION["usuario"] == true) //verifica se a variável "usuario" é verdadeira...
echo ""; //se for emite mensagem positiva.
if ($_SESSION["senha"] == true) //verifica se a variável "senha" é verdadeira...
echo ""; //se for emite mensagem positiva.
else //se não for...
header("Location: alerta.php");
?>

<?

$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];

require '../../conect/conect.php';

$hoje = date('d-m-Y');


$sql = "SELECT * FROM fundo_navegacao";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {
?>



<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {font-weight: bold}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #000000}
.style9 {color: #000000; font-weight: bold; }
-->
</style>
<body bgcolor="#<? printf("ffffff"); ?>"

background="../background/<? printf("$linha[1]"); ?>" leftmargin="0" topmargin="0" bgproperties="fixed" marginwidth="0" marginheight="0" 
  
<? } ?>
<?
$sql = "SELECT * FROM background";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
?>>
  
<? } ?>




<?
$sql = "SELECT * FROM operadores where usuario = '$usuario' and senha = '$senha'";
$res = mysql_query($sql);
$reg = 0;
echo "<tr>";
while($linha=mysql_fetch_row($res)) {


$nome_op = $linha[1];
$celular_op = $linha[19];
$email_op = $linha[20];
$estabelecimento_op = $linha[24];
$cidade_estabelecimento_op = $linha[25];
$tel_estabelecimento_op = $linha[26];
$email_estabelecimento_op = $linha[27];
$estab_pertence_op = $linha[44];
$cidade_estab_pertence_op = $linha[45];
$tel_estab_pertence_op = $linha[46];
$email_estab_pertence_op = $linha[47];
}


?>

  <?
$sql = "SELECT * FROM fundo_intermediaria";
$res = mysql_query($sql);

while($linha=mysql_fetch_row($res)) {

$cor = $linha[1];	

}
?>
  <table width="100%"  border="0">
    <tr>
      <td><form name="form1" method="post" action="menu.php">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit22" value="Voltar">
      </form></td>
      <td><form action="imprimir_caixa_hoje.php" method="post" name="form1" target="_blank">
          <?
$usuario = $_SESSION['usuario'];
$senha = $_SESSION['senha'];
?>
          <input type="submit" name="Submit222" value="Tela de Impress&atilde;o">
      </form></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div align="center">


       <table width="100%"  border="0">
         <tr>
           <td width="13%">&nbsp;</td>
           <td width="13%"><div align="center">C&oacute;digo do Aluno </div></td>
           <td width="12%"><div align="center">Mensalidade N&ordm; </div></td>
           <td width="16%"><div align="center">Valor Mensalidade </div></td>
           <td width="24%"><div align="center">Hist&oacute;rico</div></td>
           <td width="17%"><div align="center">Pr&oacute;x Mens. </div></td>
         </tr>
<?
$sql = "select * from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Mensalidade' order by codigo_aluno asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo = $linha[0];
$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];

?>

         <tr>

           <td><div align="center">
             <?
echo $codigo;
?>
           </div></td>
           <td><div align="center">
               <?
echo $codigo_aluno;
?>
           </div></td>
           <td><div align="center"><? echo $num_mensalidade; ?> / <? echo $quant_parc; ?> </div></td>
           <td><div align="center">
               <?
echo $valor_recebido;
?>
           </div></td>
           <td><div align="center">
               <?
echo $historico;
?>
           </div></td>
		   <? } ?>         

           <td><div align="center">
<?
$sql = "SELECT * FROM contas_a_receber where codigo_aluno = '$codigo_aluno' and quitacao = 'Em aberto' order by codigo asc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$vencto = $linha[12];

}
?>
<?
echo $vencto;
?>
           </div></td>
         </tr>
       </table>
	   
     </div>
  <table width="100%"  border="0">
    <tr>
      <td valign="top"><div align="center">
        </div></td>
    </tr>
    <tr>
          <td valign="top"><div align="center">
			  			  

            <p>Total 
                <?
$sql = "select sum(valor_recebido) as total_mensalidades from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Mensalidade'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_mensalidades = $linha['total_mensalidades'];

echo "R$ ".$valor_total_mensalidades;
?>
            </p>
          </div></td>
        </tr>
      </table> 
        <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><div align="center">
        </div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
      <td valign="top"><div align="center"></div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center">
        </div></td>
      <td valign="top"><div align="center">
        </div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
      <td valign="top"><div align="center">
      </div></td>
    </tr>
  </table>
<br><br>
<p>&nbsp;</p>
