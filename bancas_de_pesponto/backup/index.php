<?php

	//set_time_limit(0);

require '../../conect/conect.php';

?>

<!DOCTYPE HTML>

<html lang="en-US">

	<head>

		<meta charset="UTF-8">

		<title>Back-up Banco de Dados</title>		

<style type="text/css">

* {margin: 0; padding: 0;}



#geral {background: #dedede; margin: 20px auto; padding: 10px; width: 1024px;}



form {margin: 0 auto; width: 1000px;}

fieldset {border: 1px solid #666; margin: 0 0 30px 0;}

legend {background: #ad2424; color: #fff; font: 20px Arial, Helvetica, sans-serif; margin: 0 15px; padding: 5px;}

select {border: 1px solid #666; font: 13px Arial, Helvetica, sans-serif; margin: 25px 14px 25px 15px; padding: 4px 3px;}

input {background: #ad2424; border: 1px solid #ad0000; color: #fff; cursor: pointer; font: bold 11px Arial, Helvetica, sans-serif; padding: 6px 5px;}

textarea {border: 1px solid #666; height: 500px; margin: 15px auto; padding: 5px; resize: vertical; width: 990px;}



h1 {color: #333; font: 18px "Trebuchet ms", Verdana, sans-serif; margin: 10px 0;}

p {color: #222; font: 12px "Trebuchet ms", Verdana, sans-serif;}

</style>

	</head>

	<body>

		<section id="geral">			

			<form method="post" action="" name="form">

				<fieldset>

					<legend>Sistema de Back-up Dinâmico</legend>

					<select name="banco">

						<option value="n">Escolha o Banco de Dados</option>

						<?php				

							$qrBancos = mysql_query('SHOW DATABASES') or die (mysql_error());

							$contaBancos = mysql_num_rows($qrBancos);

							

							if($contaBancos > 0){

								while($linhaBancos = mysql_fetch_array($qrBancos)){

									$nomeBancos = $linhaBancos[0];						

									echo '<option value="'.$nomeBancos.'">'.$nomeBancos.'</option>';						

									echo $nomeBancos.'<br/>';

								}

							} else {

								echo '<option value="">Sem banco de dados!</option>';														

							}

						?>

						<input type="submit" name="gerar" value="Gerar SQL" />

					</select>

				</fieldset>			

			<?php

				if(isset($_POST['gerar'])){

					if($_POST['banco'] == 'n'){

						echo 'Selecione um banco de dados!';

					} else {				

						$bd = $_POST['banco'];

						$qrTabelas = @mysql_list_tables($bd);

						$contaTabelas = mysql_num_rows($qrTabelas);



						echo '<h1>SQL Gerado com sucesso!</h1>';

						echo "<p>Banco selecionado: $bd</p>";

						echo "<p>Número de tabelas: $contaTabelas</p>";					



						mysql_select_db($bd);



						$tabelas = mysql_query('SHOW TABLE STATUS');



						while($l = mysql_fetch_assoc($tabelas)){

							$tabela[$l["Name"]] = $l["Auto_increment"];

						}



						$backup  = "";

						$tabelas = @mysql_list_tables($bd);

						

						while($tab = mysql_fetch_row($tabelas)){

							$backup .= "--\n-- Estrutura da Tabela `$tab[0]` \n--\n\nDROP TABLE IF EXISTS `$tab[0]`;\n";

							$res = mysql_query("SHOW CREATE TABLE $tab[0]");

							

							while($all = mysql_fetch_assoc($res)){

								$str = $all['Create Table'];

								$str = str_replace('  ', "\t", $str);



								if(!empty($tabela[$tab[0]])){

									$backup .= $str.";\n\n";

								} else {

									$backup .= $str.";\n\n";

								}

							}



							$data = mysql_query("SELECT * FROM $tab[0]");

							

							if(mysql_num_rows($data)){

								$backup .= "--\n-- Extraindo dados da tabela `$tab[0]` \n--\n\n";

							}



							while($dt = mysql_fetch_row($data)){

								$backup .= "INSERT INTO `$tab[0]` VALUES ($dt[0]";

								

								for($i = 1; $i < sizeof($dt); $i++){

									$backup .= ", '$dt[$i]'";

								}

								$backup .= ");\n";

							}

							$backup .= "\n\n--\n\n";

						}

						echo '<textarea>';

						echo $backup;

						echo '</textarea>';						

					}

				}

			?>			

			</form>

		</section>

	</body>

</html>