<?php 
	require_once 'Query.php';
	class Ferramenta extends Query{
		public static function Formatdate($Data){
			$DataForm = explode("/", $Data);
			$Ano = $DataForm['2'];
			$Mes = $DataForm['1'];
			$Dia = $DataForm['0'];
			
			$getData = $Ano.'-'.$Mes.'-'.$Dia;
			return $getData;
		}
		public static function FormatData($Data){
			$DataForm = date('d/m/Y',strtotime($Data));
			return $DataForm;
		}
		public  static function getDados($Tabela, $Id, $CampoPegar =NULL, $CampoBuscar = NULL){
			$GetId = addslashes($Id);
			$Query = new Query();
			$readGetDados = $Query->Read($Tabela,"WHERE {$CampoPegar} = '".$GetId."'");
			if ($readGetDados){
				foreach ($readGetDados as $readGetDadosView){
					return $readGetDadosView[$CampoBuscar];
				}
			}
		}
		public static function MoneyFormat($Money){
			$RetornoMoney = number_format($Money,2,",",".");
			return $RetornoMoney;
		}
		public  static  function StrMoney($Money){
			$RetornoMoney = str_replace('.', '', $Money);
			$RetornoMoney = str_replace(',', '.', $RetornoMoney);
			return $RetornoMoney;
		}
		
		function formata_dinheiro($valor) {
			$valor = number_format($valor,2,",",".");
			return "R$ " . $valor;
		}
	
	
	}
?>