
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require_once'Conn/conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nomepolitico'])) ? $_POST['nomepolitico'] : '';
        $nomepromessa  = (isset($_POST['nomepromessa'])) ? $_POST['nomepromessa'] : '';
        $detalhepromessa  = (isset($_POST['detalhepromessa'])) ? $_POST['detalhepromessa'] : '';
        $anopromessa  = (isset($_POST['anopromessa'])) ? $_POST['anopromessa'] : '';
        $estadopromessa  = (isset($_POST['estadopromessa'])) ? $_POST['estadopromessa'] : '';
        $cidadepromessa  = (isset($_POST['cidadepromessa'])) ? $_POST['cidadepromessa'] : '';
		$foto_atual		  = (isset($_POST['foto_atual'])) ? $_POST['foto_atual'] : '';
        $tipopromessa     = (isset($_POST['tipopromessa'])) ? $_POST['tipopromessa'] : '';
		$status    		  = (isset($_POST['status'])) ? $_POST['status'] : '';


		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>ID do registros desconhecido.</li>';
	    endif;

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if ($nome == '' || strlen($nome) < 3):
				$mensagem .= '<li>Favor preencher o Nome do politico.</li>';
		    endif;

			if ($nomepromessa == ''):
			   $mensagem .= '<li>Favor preencher o Nome da promessa.</li>';
		    elseif(strlen($nomepromessa) < 5):
				  $mensagem .= '<li>Formato do nome invalido.</li>';
		    endif;
        
            if ($detalhepromessa == ''):
			   $mensagem .= '<li>Favor preencher detalhes da promessa.</li>';
		    elseif(strlen($detalhepromessa) < 15):
				  $mensagem .= '<li>Formato detalhes muito curto.</li>';
		    endif;

			if ($anopromessa == ''): 
				$mensagem .= '<li>Favor preencher o Ano.</li>';
			elseif(strlen($anopromessa) < 4):
				  $mensagem .= '<li>Formato ano inválido.</li>';
		    endif;
            
            if ($estadopromessa == ''): 
				$mensagem .= '<li>Favor preencher o Ano.</li>';
			elseif(strlen($estadopromessa) < 2):
				  $mensagem .= '<li>Formato estado inválido.</li>';
		    endif;
        
            if ($cidadepromessa == ''): 
				$mensagem .= '<li>Favor preencher o Ano.</li>';
			elseif(strlen($cidadepromessa) < 2):
				  $mensagem .= '<li>Formato cidade inválido.</li>';
		    endif;
        
            if ($tipopromessa == ''):
			   $mensagem .= '<li>Favor carregar foto.</li>';
			endif;
        
			if ($status == ''):
			   $mensagem .= '<li>Favor preencher o Status.</li>';
			endif;

			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

			// Constrói a data no formato ANSI yyyy/mm/dd
			//$data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];
		endif;



		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$nome_foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0):  

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = @strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			endif;

			$sql = 'INSERT INTO tab_promessas (nomepolitico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, tipopromessa, status, foto)
										VALUES(:nomepolitico, :nomepromessa, :detalhepromessa, :anopromessa, :estadopromessa, :cidadepromessa, :tipopromessa, :status, :foto)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nomepolitico', $nome);
            $stm->bindValue(':nomepromessa', $nomepromessa);
            $stm->bindValue(':detalhepromessa', $detalhepromessa);
            $stm->bindValue(':anopromessa', $anopromessa);
            $stm->bindValue(':estadopromessa', $estadopromessa);
            $stm->bindValue(':cidadepromessa', $cidadepromessa);
            $stm->bindValue(':tipopromessa', $tipopromessa);
			$stm->bindValue(':status', $status);
			$stm->bindValue(':foto', $nome_foto);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=painel.php'>";
		endif;


		// Verifica se foi solicitada a edição de dados
		if ($acao == 'editar'):

			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0): 

				// Verifica se a foto é diferente da padrão, se verdadeiro exclui a foto antiga da pasta
				if ($foto_atual <> 'padrao.jpg'):
					unlink("fotos/" . $foto_atual);
				endif;

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;
			else:

			 	$nome_foto = $foto_atual;

			endif;

			$sql = 'UPDATE tab_promessas SET nomepolitico=:nomepolitico, nomepromessa=:nomepromessa, detalhepromessa=:detalhepromessa, anopromessa=:anopromessa, estadopromessa=:estadopromessa, cidadepromessa=:cidadepromessa, tipopromessa=:tipopromessa, status=:status, foto=:foto ';
			$sql .= 'WHERE id = :id';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nomepolitico', $nome);
            $stm->bindValue(':nomepromessa', $nomepromessa);
            $stm->bindValue(':detalhepromessa', $detalhepromessa);
            $stm->bindValue(':anopromessa', $anopromessa);
            $stm->bindValue(':estadopromessa', $estadopromessa);
            $stm->bindValue(':cidadepromessa', $cidadepromessa);
            $stm->bindValue(':tipopromessa', $tipopromessa);
			$stm->bindValue(':status', $status);
			$stm->bindValue(':foto', $nome_foto);
			$stm->bindValue(':id', $id);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=painel.php'>";
		endif;


		// Verifica se foi solicitada a exclusão dos dados
		if ($acao == 'excluir'):

			// Captura o nome da foto para excluir da pasta
			$sql = "SELECT foto FROM tab_promessas WHERE id = :id AND foto <> 'padrao.jpg'";
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$stm->execute();
			$cliente = $stm->fetch(PDO::FETCH_OBJ);

			if (!empty($cliente) && file_exists('fotos/'.$cliente->foto)):
				unlink("fotos/" . $cliente->foto);
			endif;

			// Exclui o registro do banco de dados
			$sql = 'DELETE FROM tab_promessas WHERE id = :id';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=painel.php'>";
		endif;
		?>

	</div>
</body>
</html>