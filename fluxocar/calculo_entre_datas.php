      <?php
      // Pega a data do banco
      $data = "2005-05-25";
      // Pega o ano da variavel $data
      $ano_banco = substr($data,0,4);
      // Pega o m�s da variavel $data
      $mes_banco = substr($data,5,2);
      // Pega o dia da variavel $data
      $dia_banco = substr($data,8,2);
      // Concatena as partes da data no formato dd-mm-aaaa
      $data = $dia_banco."-".$mes_banco."-".$ano_banco;
      ?>
	  
      <?php
      // Pega a data atual
      $data_atual = date("Y-m-d");
      // Pega o ano da variavel $data_atual
      $ano_atual = substr($data_atual,0,4);
      // Pega o m�s da variavel $data_atual
      $mes_atual = substr($data_atual,5,2);
      // Pega o dia da variavel $data_atual
      $dia_atual = substr($data_atual,8,2);
      // Concatena as partes da data atual no formato dd-mm-aaaa
      $data_atual = $dia_atual."-".$mes_atual."-".$ano_atual;
      ?>
	  
      <?php
      // Obt�m um timestamp Unix para a data do banco onde o 0
      // ( zero ) s�o respectivamente horas , minutos , segundos
      $data = mktime(0,0,0,$mes_banco,$dia_banco,$ano_banco);
      // Obt�m um timestamp Unix para a data atual onde os 0
      // ( zeros ) s�o respectivamente horas , minutos , segundos
      $data_atual = mktime(0,0,0,$mes_atual,$dia_atual,$ano_atual);
      ?>
	  
      <?php
      // Faz o calculo da diferen�a em dias entre as duas datas
      //24 horas * 60 Min * 60 seg = 86400
      $dias = ($data_atual - $data)/86400;
      // Pega a parte inteira da variavel $dias
      $dias = ceil($dias);
      ?>
	  
      <?php
      // Destacar com imagem algo que � publicado de novo
      // pode ser exibido uma imagem para cada faixa de dia.
      if ( $dias <= '5')
      {
      // mostra imagem com alguma publica��o que tenha
      // no m�ximo 5 dias ap�s publicado
      echo "Imagem at� 5 dias";
      }
      if (( $dias > '5') && ($dias < '11'))
      {
      // mostra imagem com alguma publica��o que tenha
      // mais de 5 dias ap�s publicado e menos que 11
      echo "Imagem at� 10 dias";
      }
      if ( $dias > '10')
      {
      // mostra imagem com alguma publica��o que tenha
      // mais de 10 dias ap�s publicado.
      echo "Imagem padr�o para mais de 10 dias";
      }
      ?>
	  