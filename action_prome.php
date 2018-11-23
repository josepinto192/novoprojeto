<?php
	session_start();
	ob_start();
	if (empty($_SESSION['painel']['Id'])){
		header("Location: admin.php");
	}
	$IdUserLogado = isset($_SESSION['painel']['Id']);
	require_once 'Conn/conexao.php';
	include('header.php');
 	include 'pages/action_prome.php';
	include('footer.php');