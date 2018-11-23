       <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Denúncia</h5>
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                    <div class="col-md-12">
                            Preencha as informações o contribua com a plataforma. Todas as informações<br/> são sigilosas e as informações de contato são opcionais. <br /><br />
                    </div>
                    <div class="col-md-6">
                        <span>Nome(Opcional)</span><br /><input type="text" name="nome" />
                    </div>
                    <div class="col-md-6">
                        <span>Email(Opcional)</span><br /><input type="text" name="email" />
                    </div>
                    <div class="col-md-8">
                        <span>Nome do Candidato</span><br /><input type="text" name="nomedocandidato" />
                    </div>
                    <div class="col-md-4">
                        <span>Estado</span><br />
                        <select >
                            <option selected>Escolha um Estado</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option><br />
                        </select>
                    </div>
                    <div class="col-md-12">
                        <span>Denúncia</span><br /><textarea type="text" name="denuncia"></textarea>
                    </div>
                
            </div>   
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btncancelar" data-dismiss="modal">Cancelar e sair</button>
        <button type="button" class="btn btn-primary btnenviar">Enviar denúncia</button>
    </div>
              </div>
            </div>
          </div>
                <!-- JQuery -->
                <script src="js/jquery.js"></script>