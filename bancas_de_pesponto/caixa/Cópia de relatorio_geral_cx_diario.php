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
  <table width="100%"  border="0">
        <tr>
          <td bgcolor="#CCCCCC"><div align="center"><span class="style2">
</span> <span class="style1"><? echo $nome_op; ?></span><span class="style2"> verificando os lan&ccedil;amentos do caixa em <? echo $hoje; ?><BR>
	      </span></div></td>
        </tr>
</table>
          
     <div align="center">     
       <table width="100%"  border="0">
         <tr>
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
        <table width="100%"  border="0">
          <tr bgcolor="#CCCCCC">
            <td colspan="5"><div align="center"><strong>Outros Recebimentos </strong></div></td>
          </tr>
          <tr bgcolor="ffffff">
            <td width="20%"><div align="center"><strong>Trabalhos</strong></div></td>
            <td width="19%"><div align="center"><strong>C&oacute;pias</strong></div></td>
            <td width="20%"><div align="center"><strong>Internet</strong></div></td>
            <td width="19%"><div align="center" class="style9">Xerox</div></td>
            <td><div align="center" class="style9">Vendas</div></td>
          </tr>
          <tr>
            <td valign="top"><div align="center">
<?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Trabalhos' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];


?>
              <table width="100%"  border="0">
                <tr>
                  <td valign="top"><div align="center">
                    <?
echo $valor_recebido;
?>
                    
</div></td>
                </tr>
              </table><? } ?>
            </div></td>
            <td valign="top"><div align="center">
<?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Cópias' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];


?>
              <table width="100%"  border="0">
                <tr>
                  <td valign="top"><div align="center">
                    <?
echo $valor_recebido;
?>
                  </div></td>
                </tr>
              </table>
              <? } ?>
            </div></td>
            <td valign="top"><div align="center">
              <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Internet' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];


?>
              <table width="100%"  border="0">
                <tr>
                  <td valign="top"><div align="center">
                    <?
echo $valor_recebido;
?>
                  </div></td>
                </tr>
              </table>
              <? } ?>
            </div></td>
            <td valign="top"><div align="center">
              <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Xerox' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];


?>
              <table width="100%"  border="0">
                <tr>
                  <td valign="top"><div align="center">
                    <?
echo $valor_recebido;
?>
                  </div></td>
                </tr>
              </table>
              <? } ?>
            </div></td>
            <td valign="top"><div align="center">
              <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Vendas' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];


?>
              <table width="100%"  border="0">
                <tr>
                  <td valign="top"><div align="center">
                    <?
echo $valor_recebido;
?>
                  </div></td>
                </tr>
              </table>
              <? } ?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center">
			</div></td>
            <td><div align="center">
			</div></td>
            <td><div align="center">
			</div></td>
            <td><div align="center">
			</div></td>
            <td width="22%">
              <div align="center">
			  </div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_trabalhos from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Trabalhos'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_trabalhos = $linha['total_trabalhos'];

echo "R$ ".$valor_total_trabalhos;
?>
            </div></td>
            <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_copias from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Cópias'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_copias = $linha['total_copias'];

echo "R$ ".$valor_total_copias;
?>
            </div></td>
            <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_internet from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Internet'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_internet = $linha['total_internet'];

echo "R$ ".$valor_total_internet;
?>
            </div></td>
            <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_xerox from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Xerox'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_xerox = $linha['total_xerox'];

echo "R$ ".$valor_total_xerox;
?>
</div></td>
            <td><div align="center">
              <?
$sql = "select sum(valor_recebido) as total_vendas from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Vendas'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_vendas = $linha['total_vendas'];

echo "R$ ".$valor_total_vendas;
?>
            </div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
            <td><div align="center"></div></td>
            <td><div align="center">Total outros recebimentos</div></td>
            <td><div align="center">
              <?
$soma_trabalhos_copias = bcadd($valor_total_trabalhos,$valor_total_copias,2);
$soma_internet_xerox = bcadd($valor_total_internet,$valor_total_xerox,2);
$soma_vendas = bcadd($valor_total_vendas,0,2);
$sub_total_outros_recebimentos = bcadd($soma_trabalhos_copias,$soma_internet_xerox,2);
$total_outros_recebimentos = bcadd($soma_vendas,$sub_total_outros_recebimentos,2);

echo "R$ ".$total_outros_recebimentos;
?>
            </div></td>
            <td><div align="center"></div></td>
            <td><div align="center"></div></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center">
        <table width="100%"  border="0">
          <tr>
            <td><div align="center">
              <table width="97%"  border="0">
                <tr bgcolor="#CCCCCC">
                  <td colspan="2"><div align="center"><strong>Sa&iacute;das</strong></div></td>
                </tr>
                <tr bgcolor="ffffff">
                  <td width="49%"><div align="center" class="style3 style8">Valor Sa&iacute;da </div></td>
                  <td><div align="center" class="style9">Hist&oacute;rico</div></td>
                </tr>
                <tr>
                  <?
			


$sql = "SELECT * FROM cx_saidas where datacadastro = '$hoje'  order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$datacadastro = $linha[3];
$valor_recebido = $linha[17];
$historico_saida = $linha[35];


?>
                  <td><div align="center"><? echo "R$ ". $valor_recebido; ?> </div></td>
                  <td width="51%">
                    <div align="center"><? echo $historico_saida; ?></div></td>
                </tr>
                <? } ?>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="center">
                      <?
$sql = "select sum(valor_saida) as total_saidas from cx_saidas where datacadastro = '$hoje'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_saidas = $linha['total_saidas'];

echo "R$ ".$valor_total_saidas;
?>
                  </div></td>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </div></td>
            <td>&nbsp;</td>
            <td><div align="center">
              <table width="97%"  border="0">
                <tr bgcolor="#CCCCCC">
                  <td colspan="2"><div align="center"><strong>Fechamento de Caixa </strong></div></td>
                </tr>
                <tr bgcolor="ffffff">
                  <td width="49%"><div align="center" class="style8 style3"><strong>Abertura de caixa </strong></div></td>
                  <td><div align="center" class="style9">
                      <?
			


$sql = "SELECT * FROM cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Abertura de Caixa' order by codigo asc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg++;

$codigo_aluno = $linha[2];
$datacadastro = $linha[3];
$quant_parc = $linha[14];

$valor_recebido_cx = $linha[17];
$historico = $linha[35];
$num_mensalidade = $linha[40];

}
?>
                      <? echo "R$ ".$valor_recebido_cx; ?></div></td>
                </tr>
                <tr>
                  <td><div align="center"><strong>Mensalidades </strong></div></td>
                  <td width="51%">
                    <div align="center">
                      <?
$sql = "select sum(valor_recebido) as total_mensalidades from cx_entradas where datacadastro = '$hoje' and categoria_conta = 'Mensalidade'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_mensalidades = $linha['total_mensalidades'];

echo "R$ ".$valor_total_mensalidades;
?>
</div></td>
                </tr>
                
                <tr>
                  <td><div align="center"><strong>Outros recebimentos</strong></div></td>
                  <td><div align="center">
                      <?
$soma_trabalhos_copias = bcadd($valor_total_trabalhos,$valor_total_copias,2);
$soma_internet_xerox = bcadd($valor_total_internet,$valor_total_xerox,2);
$soma_vendas = bcadd($valor_total_vendas,0,2);
$sub_total_outros_recebimentos = bcadd($soma_trabalhos_copias,$soma_internet_xerox,2);
$total_o_r = bcadd($soma_vendas,$sub_total_outros_recebimentos,2);

echo "R$ ".$total_o_r;
?>
                  </div></td>
                </tr>
                <tr>
                  <td><div align="center"><strong>Retiradas</strong></div></td>
                  <td><div align="center">
                      <?
$sql = "select sum(valor_saida) as total_saidas from cx_saidas where datacadastro = '$hoje'";
$resultado=mysql_query($sql, $conexao);
$linha=mysql_fetch_array($resultado);

$valor_total_saidas = $linha['total_saidas'];

echo "R$ ".$valor_total_saidas;
?>
                  </div></td>
                </tr>
              </table>
            </div></td>
          </tr>
        </table>
      </div></td>
      <td valign="top"><div align="center"></div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
      <td valign="top"><div align="center">
        </div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"></div></td>
      <td valign="top"><div align="center">
      </div></td>
    </tr>
    <br>
<table width="100%"  border="0">
  <tr>
    <td width="33%"><div align="right"></div></td>
    <td width="34%" bgcolor="#CCCCCC"><div align="left"></div>      
    <div align="center" class="style2">Saldo 
      <?
$soma_abertura_cx_mensalidades = bcadd($valor_recebido_cx,$valor_total_mensalidades,2);
$s_t_o_r = bcadd($total_o_r,0,2);
$sub_total = bcadd($soma_abertura_cx_mensalidades,$s_t_o_r,2);
$saldo = bcsub($sub_total,$valor_total_saidas,2);

echo "R$ ".$saldo;
?>
    </div></td>
    <td width="33%">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
