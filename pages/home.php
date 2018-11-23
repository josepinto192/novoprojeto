<?php
require_once'Conn/conexao.php';
require_once'Conn/conection.php';


// Recebe o termo de pesquisa se existir
$termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';


 
// Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):

	$conexao = conexao::getInstance();
	$sql = 'SELECT id, tipopromessa, nomepolitico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas';
	$stm = $conexao->prepare($sql);
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

else:

	// Executa uma consulta baseada no termo de pesquisa passado como parâmetro
	$conexao = conexao::getInstance();
	$sql = 'SELECT id, tipopromessa, nomepolitico, nomepromessa, detalhepromessa, anopromessa, estadopromessa, cidadepromessa, status, foto FROM tab_promessas WHERE nomepolitico LIKE :nomepolitico OR anopromessa LIKE :anopromessa';
	$stm = $conexao->prepare($sql);
	$stm->bindValue(':nomepolitico', $termo.'%');
	$stm->bindValue(':anopromessa', $termo.'%');
	$stm->execute();
	$clientes = $stm->fetchAll(PDO::FETCH_OBJ);

endif;


?>


    <div class="mr-10 pt-5 mt-5" style="">
    <div class="container">
      <div class="row">
        <div class="px-4 pr-2 col-md-8" style="">
          <h2 class="text-left ml-5 text-dark px-4" style="">Por que Prometer e não Cumprir, é pior do que mentir<br></h2>
          <p class="lead ml-5 pl-4">Acompnhe e fiscalize se as promessas dos candidatos&nbsp; eleitos estão sendo cumpridas. Digite um nome/ou um ano para começar.</p>
        </div>
      </div>
    </div>
  </div>
   <div class="ml-5 pl-5" style="">
    <div class="container">
      <div class="row ml-4" >
        <div class="col-md-4" style="">
          <form class="form">
            <div class="input-group">
              <input type="text" class="form-control border-warning w-100 form-control-lg" id="termo" name="termo" placeholder="Nome do Politico" style="">
            </div>
          </form>
        </div>
        <div class="col-md-2" style="">
          <form class="form-inline">
            <div class="input-group">
              <input type="search" class="form-control form-control-lg border-warning" id="termo" name="termo1" placeholder="Ano">
            </div>
          </form>
        </div>
        <div class="col-md-3" style=""><button class="btn btn-warning btn-lg border" type="submit" contenteditable="true"><img src="images/lupa.gif" class="img-fluid" width="25"><i class="fa fa-user fa-fw"></i><i class="fa fa-search"></i>
          </button></div>
      </div>
    </div>
  </div>
  <div class="pl-5 ml-5 mt-5" style="">
    <div class="container">
      <div class="row ml-4" style="">
        <div class="form-group col-lg-6 text-dark bg-white mr-1 border border-warning" style="">
          <h4 contenteditable="true">Acesso rápido</h4>
          <h6 class="w-75">Clique e acompanhe as propostas dos atuais&nbsp; governantes</h6>
          <a class="btn btn-outline-warning mx-1 btn-lg" href="#">Presidente</a>
          <a class="btn btn-outline-warning btn-lg" href="#">Governado</a>
          <a class="btn btn-outline-warning mx-1 btn-lg" href="#">Prefeitos</a>
          <a class="btn btn-outline-warning btn-lg" href="#">Todos</a>
          <span class="msg-erro msg-nome"></span>
        </div>
        <div class="form-group col-lg-3 text-dark bg-white mx-1 border border-warning" style="">
          <h4 contenteditable="true">Acesso rápido</h4>
          <h6 class="mr-5 w-75">Sabe de alguma proposta que não foi cumprida?</h6><a class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal" href="#exampleModal" #exampleModal>Colabore aqui</a>
          <span class="msg-erro msg-nome"></span>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h3 class="display-4 text-center" style="">Estatísticas</h3>
          <h3 class="text-center mx-5 px-5">Veja os niveis de satisfação de nosso publico com as promessas feitas nas ultimas campanhas</h3>
        </div>
      </div>
    </div>
  </div><br><br>
  <div class="text-center py-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="images/grafico_65_.svg" width="100" alt="Card image cap">
          <h5> <b class="">Das promesssas não foram cumpridas</b></h5>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="images/grafico_90_.svg" width="100" alt="Card image cap">
          <h5> <b class="">Dos entrevistados sentiram-se enganado</b></h5>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="images/grafico_62_.svg" width="100">
          <h5> <b>Das promessas não foram cumpridas</b></h5>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="images/grafico_93_.svg" width="100">
          <h5> <b>Dos entrevistados desejam acompanhar as promessas</b></h5>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-5" style="">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  <div class="text-center bg-info" style="">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12">
          <h1 class="mb-3">Simplicidade e tansparência</h1>
          <div class="col-md-12">
            <h5 contenteditable="true" class="text-center mx-5 px-5">O promessômetro funciona em dois passos muito simples para que você possa fiscalizar seus candidatos sem dificuldades!</h5>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-lg-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto" src="images/ilustra01_como_usar.svg" width="200" alt="Card image cap">
          <h4 class="mx-4"> <b>Encontre o candidato que você deseja acompanhar</b></h4>
          <p class="mx-5 mb-0">Você pode encontrar o candidato pelo nome, ano de eleição, estado e cargo ocupado</p>
        </div>
        <div class="col-6 col-lg-6 p-4"> <img class="img-fluid d-block mx-auto mt-4 mb-4 img-thumbnail" src="images/Símbolo - Não Cumprido.svg" width="200" alt="Card image cap">
          <h4> <b>Abra a pagina e acompanhe!</b></h4>
          <p class="mt-4 mb-0 text-center px-5">Veja a lista das promessas e confira o promessômetro para ficar por dentro do seu andamento</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3 mt-5">PPA, LDO e LOA</h1>
          <h5 class="text-center mx-5 px-5">Você sabe como funciona a gestão do dinheiro publico? Assista esse três videos que separamos para você e saiba mais como fiscalizar seus governantes.</h5>
        </div>
      </div>
    </div>
  </div><br>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/hG1Vd_SsgCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-4">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/Q66ZSkBLKr0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
        <div class="col-md-4">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/CWUNV7wOwYo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
	<contato id="contato">
  <div class="py-3 text-center">
    <div class="container">
      <div class="row text-center" style="">
        <div class="mx-auto p-4 col-lg-7">
          <h2 class="mb-2">Entre em contato conosco</h2>
          <h5 class="text-center">Você tem duvidas ou sugetões ou gostaria de nos dizer alguma coisa? entre em contado para conversarmos<br></h5>
          <form>
            <div class="form-row">
              <div class="form-group col-md-12" style=""> <input type="text" class="form-control" id="form27" placeholder="Name"> </div>
              <div class="form-group col-md-6" style=""> </div>
            </div>
            <div class="form-group"><input type="email" class="form-control" id="form28" placeholder="Email"></div>
            <div class="form-group"> <textarea class="form-control" id="form30" rows="3" placeholder="mensagem"></textarea> </div> <button type="submit" class="btn btn-warning">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
		</contato>
  <div class="pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-2 offset-md-4"><img class="d-block img-fluid" src="images/logo-login.png" width="200%"></div>
        <div class="col-md-6">
          <h2 class="mr-5 mb-1 pr-5">Confira também nosso aplicativo</h2><button type="submit" class="btn btn-warning btn-lg">ir para loja</button>
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
        <button type="button" class="btn btn-danger btncancelar" rows="3" data-dismiss="modal">Cancelar e sair</button>
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