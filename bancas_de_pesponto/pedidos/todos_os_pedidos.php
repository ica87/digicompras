<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
require '../../conect/conect.php';

?>




<?
$sql = "select * from pedidos where status <> 'Aguardando_Ativação' order by num_pedido desc";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {
$reg = 0;
echo "<tr>";
$reg++;
?>
<td>
<br>
<span class="style1">Cliente:</span> <? printf("   $linha[3] - "); ?>

</td>
<td>
<span class="style1">Pedido Nº:</span> <? printf("   $linha[0]<br>"); ?>
</td>
<td>
<span class="style1">STATUS DO PEDIDO:</span> <? printf("   $linha[347]<br>"); ?>
</td>

<?
if($reg==1){
echo "</tr><tr>";
$reg=0;
}
?>

<? } ?>


</body>
</html>
