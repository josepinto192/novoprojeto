<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require_once'Conn/conexao.php';
		require_once'Conn/conection.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nomedenuncia  = (isset($_POST['nomedenuncia'])) ? $_POST['nomedenuncia'] : '';
        $emaildenuncia  = (isset($_POST['emaildenuncia'])) ? $_POST['emaildenuncia'] : '';
        $politicodenuncia  = (isset($_POST['politicodenuncia'])) ? $_POST['politicodenuncia'] : '';
        $estadodenuncia  = (isset($_POST['estadodenuncia'])) ? $_POST['estadodenuncia'] : '';
        $descricaodenuncia  = (isset($_POST['descricaodenuncia'])) ? $_POST['descricaodenuncia'] : '';


			$sql = 'INSERT INTO tab_denuncias (nomedenuncia, emaildenuncia, politicodenuncia, estadodenuncia, descricaodenuncia)
										VALUES(:nomedenuncia, :emaildenuncia, :politicodenuncia, :estadodenuncia, :descricaodenuncia)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nomedenuncia', $nomedenuncia);
            $stm->bindValue(':emaildenuncia', $emaildenuncia);
            $stm->bindValue(':politicodenuncia', $politicodenuncia);
            $stm->bindValue(':estadodenuncia', $estadodenuncia);
            $stm->bindValue(':descricaodenuncia', $descricaodenuncia);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Denuncia envia com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao enviar denuncia!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=index.php'>";
		
?>
