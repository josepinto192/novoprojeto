
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/notebook-Promessometro.png" width="500" />
                </div>
                <div class="col-md-6">
                    <h2>Sobre o Promessômetro</h2><br>
                    <h4>Plataforma idealizada durante o 1° AMAZON Hackfest evento voltando para a criação de soluções para combate à corrupção. Nosso objetivo é oferecer ao povo uma ferramenta leve que todos possam acompanhar seu candidatos eleitos e saber o andamento das promessas feitas durante a campanha. </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre Nós</h2><br>
                    <h4>Somos uma equipe multidisciplinar composta por estudantes e profissionais nas áreas de direito, programação, designer, contabildade e outras, unidos pelo objetivo de oferecer mais transparência para a população.  </h4>
                </div>
                <div class="col-md-6">
                    <img src="images/equipe@2x.png" width="500" />
                </div>
            </div>
        </div>
    </section>
        <section id="about">
            </section>

 <div class="py-5 text-center" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12">
          <h1 class="mb-3">Nossa Equipe</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6 p-4"> <img class="rounded-circle" src="images/jr.jpg" width="100" alt="Card image cap">
          <h4> <b>José Jr</b> </h4>
          <p>Programadro Back End</p>
          <p class="mb-0"> <i>"Bacharel em Ciência da Computação, especialsta em Auditoria e segrnaça de informatica"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg" width="100" alt="Card image cap">
          <h4> <b>Marcio</b> </h4>
          <p>CEO</p>
          <p class="mb-0"> <i>"As I lie close to the earth, a thousand unknown plants"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg" width="100">
          <h4> <b>Yure</b> </h4>
          <p>CFO</p>
          <p class="mb-0"> <i>"Then, my friend, when darkness overspreads my eyes"</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-4.svg" width="100">
          <h4> <b>Marilia</b> </h4>
          <p>CTO</p>
          <p class="mb-0"> <i>"Heaven and earth seem to dwell in my soul"</i> </p>
        </div>
		  <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-4.svg" width="100">
          <h4> <b>Victor</b> </h4>
          <p>CTO</p>
          <p class="mb-0"> <i>"Heaven and earth seem to dwell in my soul"</i> </p>
        </div>
		  <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-4.svg" width="100">
          <h4> <b>Cristiano</b> </h4>
          <p>CTO</p>
          <p class="mb-0"> <i>"Heaven and earth seem to dwell in my soul"</i> </p>
        </div>
		  <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-4.svg" width="100">
          <h4> <b>Amadeus</b> </h4>
          <p>CTO</p>
          <p class="mb-0"> <i>"Heaven and earth seem to dwell in my soul"</i> </p>
        </div>
		  <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-4.svg" width="100">
          <h4> <b>Amadeus</b> </h4>
          <p>CTO</p>
          <p class="mb-0"> <i>"Heaven and earth seem to dwell in my soul"</i> </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<form action="action_denuncia.php" method="post">
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
                    <div class="col-md-16">
                            Preencha as informações o contribua com a plataforma. Todas as informações são sigilosas e as informações de contato são opcionais. <br />
                    </div>
						
						
                    <div class="form col-lg-6">
                        <span>Nome(Opcional)</span><br /><input type="text" id="nomedenuncia" name="nomedenuncia" />
                    </div>
                    <div class="col-md-6">
                        <span>Email(Opcional)</span><br /><input type="text" id="emaildenuncia" name="emaildenuncia" />
                    </div>
                    <div class="col-md-6">
                        <span>Nome do Candidato</span><br /><input type="text" id="politicodenuncia" name="politicodenuncia" />
                    </div>
                    <div class="col-md-4">
                        <span for="estadodenuncia">Estado</span><br />
                        <select class="form-control" name="estadodenuncia">
                            <option selected>Estado</option>
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
                    </div>
                    <div class="col-md-50">
                        <span>Denúncia</span><br /><textarea type="text" id="descricaodenuncia" name="descricaodenuncia"></textarea>
                    </div>
                
            </div>   
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary btncancelar" rows="3" data-dismiss="modal">Cancelar e sair</button>
        <button type="submit" class="btn btn-warning btnenviar">Enviar denúncia</button>
    </div>
              </div>
            </div>
          </div>
</form>

 <!-- JQuery -->
                <script src="js/jquery.js"></script>
				<script src="js/script.js"></script>
				<script src="js/bootstrap.js"></script>
				<script src="js/bootstrap.bundle.js"></script>