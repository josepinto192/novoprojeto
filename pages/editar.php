<?php
require_once 'Conn/conexao.php';

// Recebe o id do cliente do cliente via GET
$id_cliente = (isset($_GET['id'])) ? $_GET['id'] : '';

// Valida se existe um id e se ele é numérico
if (!empty($id_cliente) && is_numeric($id_cliente)):

	// Captura os dados do cliente solicitado
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, tipopromessa, nomepolitico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas WHERE id = :id';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':id', $id_cliente);
	$stm->execute();
	$cliente = $stm->fetch(PDO::FETCH_OBJ);

	if(!empty($cliente)):


	endif;

endif;

?>

<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Formulário - Edição de Cliente</h1></legend>
			
			<?php if(empty($cliente)):?>
				<h3 class="text-center text-danger">Cliente não encontrado!</h3>
			<?php else: ?>
				<form action="action_prome.php" method="post" id='form-contato' enctype='multipart/form-data'>
					<div class="row">
						<label for="nome">Alterar Foto</label>
				      	<div class="col-md-2">
						    <a href="#" class="thumbnail">
						      <img src="fotos/<?=$cliente->foto?>" height="190" width="150" id="foto-cliente">
						    </a>
					  	</div>
					  	<input type="file" name="foto" id="foto" value="foto" >
				  	</div>
                    <div class="row">
                    <div class="form-group col-lg-4">
			      <label for="nomepolitico">Politico</label>
			      <input type="text" class="form-control" id="nomepolitico" name="nomepolitico" value="<?=$cliente->nomepolitico?>" placeholder="Infome o politico">
			      <span class='msg-erro msg-nome'></span>
			    </div>


				    <div class="form-group col-lg-4">
			      <label for="nomepromessa">Promessa</label>
			      <input type="text" size="25"class="form-control" id="nomepromessa" name="nomepromessa" value="<?=$cliente->nomepromessa?>"  placeholder="Infome o nome da promessa">
			      <span class='msg-erro msg-nome'></span>
			    </div>
						
						
                <div class="form-group col-lg-4">
			      <label for="anopromessa">Ano da promessa</label>
			      <input type="text" class="form-control" id="anopromessa" name="anopromessa" value="<?=$cliente->anopromessa?>" placeholder="Infome o ano da campanha">
			      <span class='msg-erro msg-nome'></span>
			    </div>
                
                <div class="form-group col-lg-4">
			      <label for="estadopromessa">Estado</label>
											<select class="form-control" name="estadopromessa" >
											 <option value="BR">Brasil</option>
											  <option value="AC">Acre</option>
										      <option value="AL">Alagoas</option>
										      <option value="AP">Amapá</option>
										      <option value="AM">Amazonas</option>
										      <option value="BA">Bahia</option>
										      <option value="CE">Ceará</option>
										      <option value="DF">Distrito Federal</option>
										      <option value="ES">Espirito Santo</option>
										      <option value="GO">Goiás</option>
										      <option value="MA">Maranhão</option>
										      <option value="MS">Mato Grosso do Sul</option>
										      <option value="MT">Mato Grosso</option>
										      <option value="MG">Minas Gerais</option>
										      <option value="PA">Pará</option>
										      <option value="PB">Paraíba</option>
										      <option value="PR">Paraná</option>
										      <option value="PE">Pernambuco</option>
										      <option value="PI">Piauí</option>
										      <option value="RJ">Rio de Janeiro</option>
										      <option value="RN">Rio Grande do Norte</option>
										      <option value="RS">>Rio Grande do Sul</option>
										      <option value="RO">Rondônia</option>
										      <option value="RR">Roraima</option>
										      <option value="SC">Santa Catarina</option>
										      <option value="SP">São Paulo</option>
										      <option value="SE">Sergipe</option>
										      <option value="TO">Tocantins</option>
											</select>
			      <span class='msg-erro msg-nome'></span>
			    </div>
                
                <div class="form-group col-lg-4">
			      <label for="cidadepromessa">Cidade</label>
			      <input type="text" class="form-control" id="cidadepromessa" name="cidadepromessa" value="<?=$cliente->cidadepromessa?>" placeholder="Infome a cidade">
			      <span class='msg-erro msg-nome'></span>
			    </div>

			    
                <div class="form-group col-lg-4">
			      <label for="tipopromessa">Tipo de Promessa</label>
			      <select class="form-control" name="tipopromessa" id="tipopromessa">
				    <option value="<?=$cliente->tipopromessa?>"><?=$cliente->tipopromessa?></option>
				    <option value="Presidencial">Presidencial</option>
				    <option value="Estadual">Estadual</option>
                    <option value="Municipal">Municipal</option>
				  </select>
				  <span class='msg-erro msg-tipopromessa'></span>
			    </div>
				    <div class="form-group clo-lg-8">
				      <label for="status">Status</label>
				      <select class="form-control" name="status" id="status">
					    <option value="<?=$cliente->status?>"><?=$cliente->status?></option>
					    <option value="Não Cumprido">Não Cumprido</option>
                        <option value="Em Andamento">Em Andamento</option>
                        <option value="Cumprido">Cumprido</option>
					  </select>
					  <span class='msg-erro msg-status'></span>
				    </div>
						
						<div class="form-group col-lg-10">
					<label for="detalhepromessa">Descreva a promessa</label>
					<input type="placeholder" class="form-control" id="detalhepromessa" name="detalhepromessa" value="<?=$cliente->detalhepromessa?>"></input>
					<span class='msg-erro msg-nome'></span>
				  </div>
						
						 <div class="form-group col-lg-4">
				    <input type="hidden" name="acao" value="editar">
				    <input type="hidden" name="id" value="<?=$cliente->id?>">
				    <input type="hidden" name="foto_atual" value="<?=$cliente->foto?>">
				    <button type="submit" class="btn btn-warning" id='botao'> 
				      Gravar
				    </button>
				    <a href='index.php' class="btn btn-danger">Cancelar</a>
						</div>
					</div>
				</form>
			<?php endif; ?>
					
		</fieldset>

	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>