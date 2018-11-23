<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require_once'Conn/conexao.php';
		require_once'Conn/conection.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$id  = $_POST['id'] ;

			$sql = 'DELETE FROM tab_denuncias WHERE id = id';
			$stm = $conexao->prepare($sql);
			$stm->bindParam(':id', $id);
			$stm->execute();

			if ($stm):
				echo "<div class='alert alert-success' role='alert'>Denuncia envia com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao enviar denuncia!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=painel.php'>";
		
?>