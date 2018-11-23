
<?php
	require_once 'Conn/Query.php';
	require_once 'Conn/conection.php';
	$Query = new Query();
	
?>

<main class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-12 content" role="main">
						<h1 class="title-1 title-content">Alterar Senha</h1>
						<hr/>
						<?php 
							if(isset($_POST['sendPerfil'])){
								$SenhaAtual            = $_POST['SenhaAtual'];
								$NovaSenha             = $_POST['NovaSenha'];
								$ConfirmNovaSenha     = $_POST['ConfirmNovaSenha'];
								
								if ($NovaSenha != $ConfirmNovaSenha){
									echo "<script>alert('SENHAS NÃO CORRESPONDEM')</script>";
								}elseif($SenhaAtual == '' || $NovaSenha == ''|| $ConfirmNovaSenha == ''){
									echo "<script>alert('TODOS OS CAMPOS SÃO OBRIGÁTORIOS')</script>";
								}else{
									$readSenhaAtual = $Query->Read('tab_login',"WHERE id = '".$IdUserLogado."'AND senha = '".$SenhaAtual."'");
									if (!readSenhaAtual){
										echo "<script>alert('SENHA ATUAL INVALIDA.')</script>";
									}else{
										$FSenha['senha'] = $NovaSenha;
										$Query->Update('tab_login', $FSenha, "WHERE id = '".$IdUserLogado."'");
										echo "<script>alert('SENHA ALTERADA COM SUCESSO.')</script>";
										echo "<script>window.location = 'Sair.php'</script>";
									}
								}
							}
						?>
						<form action="" method="post">
							<fieldset>
								<div class="row">
									<div class="form-group col-lg-4">
										<label >Senha Atual</label>
										<input type="Password" class="form-control" name="SenhaAtual"/>
										</div>
										<div class="form-group col-lg-4">
										<label >Nova Senha</label>
										<input type="Password" class="form-control" name="NovaSenha"/>
										</div>
										<div class="form-group col-lg-4">
										<label >Confirme Nova Senha</label>
										<input type="Password" class="form-control" name="ConfirmNovaSenha"/>
										</div>
									</div>
											<div class="box-actions">
											<button type="submit" class="btn btn-primary" name="sendPerfil">Salvar</button>
										</div>
							</fieldset>
						</form>
					</div>
					
				</div>
			</div>
		</main>