
<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Formulário - Cadastro de promessas</h1></legend>
			
			<form action="action_prome.php" method="post" id='form-contato' enctype='multipart/form-data'>
				<div class="row">
					<label for="nome">Selecionar Foto do politico</label>
			      	<div class="col-lg-2">
					    <a href="#" class="thumbnail">
					      <img src="fotos/padrao.jpg" height="190" width="150" id="foto-cliente">
					    </a>
				  	</div>
				  	<input type="file" name="foto" id="foto" value="foto" >
			  	</div>
				<div class="row">
			    <div class="form-group col-lg-4">
			      <label for="nomepolitico">Politico</label>
			      <input type="text" class="form-control" id="nomepolitico" name="nomepolitico" placeholder="Infome o politico">
			      <span class='msg-erro msg-nome'></span>
			    </div>
                
                <div class="form-group col-lg-4">
			      <label for="nomepromessa">Promessa</label>
			      <input type="text"  size="25" class="form-control" id="nomepromessa" name="nomepromessa" placeholder="Infome o nome da promessa">
			      <span class='msg-erro msg-nome'></span>
			    </div>                
                
                <div class="form-group col-lg-4">
			      <label for="anopromessa">Ano da promessa</label>
			      <input type="text" class="form-control" id="anopromessa" name="anopromessa" placeholder="Infome o ano da campanha">
			      <span class='msg-erro msg-nome'></span>
			    </div>
                
                <div class="form-group col-lg-4">
			      <label for="estadopromessa">Estado</label>
											<select class="form-control" name="estadopromessa">
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
			      <input type="text" class="form-control" id="cidadepromessa" name="cidadepromessa" placeholder="Infome a cidade">
			      <span class='msg-erro msg-nome'></span>
			    </div>
					
              			    
                <div class="form-group col-lg-4">
			      <label for="tipopromessa">Tipo de Promessa</label>
			      <select class="form-control" name="tipopromessa" id="tipopromessa">
				    <option value="">Selecione o Status</option>
				    <option value="Presidencial">Presidencial</option>
				    <option value="Estadual">Estadual</option>
                    <option value="Municipal">Municipal</option>
				  </select>
				  <span class='msg-erro msg-tipopromessa'></span>
			    </div>
                
			    <div class="form-group col-lg-4">
			      <label for="status">Status</label>
			      <select class="form-control" name="status" id="status">
				    <option value="">Selecione o Status</option>
				    <option value="Não Cumprido">Não Cumprido</option>
				    <option value="Em Andamento">Em Andamento</option>
                    <option value="Cumprido">Cumprido</option>
				  </select>
				  <span class='msg-erro msg-status'></span>
			    </div>
					
					<div class="form-group col-lg-8">
					<label for="detalhepromessa">Descreva a promessa</label>
					<textarea type="text" class="form-control" id="detalhepromessa" rows="2" name="detalhepromessa" placeholder="Infome detalhes da promessa"></textarea>
					<span class='msg-erro msg-nome'></span>
				  </div>
					</div>
				
				<div class="form-group col-lg-4">
			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-warning" id='botao'> 
			      Gravar
			    </button>
			    <a href='painel.php' class="btn btn-danger">Cancelar</a>
                         </div>
			</form>
			
		</fieldset>
	</div>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>