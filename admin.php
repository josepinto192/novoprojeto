

<?php 
	session_start();
	ob_start();
	require_once 'Conn/query.php';
	require_once 'Conn/conection.php';
	$Query = new Query();
	$Description= 'Promessometro';
   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">

    <title><?php echo $Description ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
      
  </head>

  <body class= "text-center">
      
      <?php 
		if(isset($_POST['sendLogin'])){
			$readLoginView['login']  = addslashes($_POST['login']);
			$readLoginView['senha']  =  md5 (trim($_POST['senha']));
			$Login = filter_input_array(trim(INPUT_POST, FILTER_DEFAULT));
			unset($Login['sendLogin']);
			foreach ($Login as $Key => $ValuesKey){
				if (!is_array($ValuesKey)) {
					$Login[$Key] = addslashes($ValuesKey);
				}
			}
			if (in_array('', $Login)){
				echo "<script>alert('LOGIN OU SENHA NÃO PODEM SER NULOS')</script>";
			}else {
				$readLogin = $Query->Read('tab_login',"WHERE login = '".$Login['login']."'AND senha= '".$Login['senha']."'");
				if($readLogin){
					foreach($readLogin as $readLoginView);
					if($readLoginView['login'] == $Login['login'] && $readLoginView['senha'] == $Login['senha']){
						$_SESSION['painel']['Id'] = $readLoginView;
						header("Location: painel.php");
					}else{
						echo "<script>alert('SENHA ESTA INCORRETA')</script>";
					}
				}else {
					echo "<script>alert('USUÁRIO NÃO EXISTENTE EM NOSSO BANCO DE DADOS.')</script>";
				}
			}
		}
	?>
           
    <body class="text-center">
    <form role="form" action="" method="post">
    <div class="   col-md-6 offset-md-3">
      <img class="mb-4" src="images/logo-login.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail" class="sr-only">Usuario</label>
        <div class="   col-md-6 offset-md-3">
      <input class="form-control ls-login-bg-user input-lg" type="text" aria-label="Usuário" placeholder="Usuário" name="login">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input class="form-control ls-login-bg-password input-lg" type="password" aria-label="Senha" placeholder="Senha" name="senha">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Gravar senha
        </label>
      </div>
      <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block" name="sendLogin">
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    
