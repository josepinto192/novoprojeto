<?php 
	require_once 'conection.php';
	class  Query extends Conn{
		/*
		 * METODO DE CADASTRO
		 **/
		public static function Create($Tabela, array $Dados){
			foreach ($Dados as $Key => $ValuesKey){
				if (!is_array($ValuesKey)) {
					$Dados[$Key] = addslashes($ValuesKey);
				}
			}
			$Campos = implode(',', array_keys($Dados));
			$Valores = "'" .implode("','", array_Values($Dados))."'";
			$SqlCreate ="INSERT INTO {$Tabela}({$Campos})VALUES({$Valores})";
			$SqlCreateExe = mysqli_query(Conn::Conexao(), $SqlCreate);
			if ($SqlCreateExe) {
				;
				return $SqlCreateExe;
			}
			
			}
			/*
			 * METODO DE LISTAGEM NO BANCO
			 **/
	public static function Read($Tabela, $Condicao = NULL){
		$SqlRead = "SELECT * FROM {$Tabela} {$Condicao}" ;
		$SqlReadExe = mysqli_query(self::Conexao(),$SqlRead );
		$CountSqlRead = mysqli_num_rows($SqlReadExe);
		if($CountSqlRead >0){
			return $SqlReadExe;
		}else{
			return false;
		}
	}
	
			/*
			 * METODO DE ATUALIZAÇÃO NO BANCO
			 */
			public static  function Update($Tabela, array $Campos, $Condicao = NULL){
				foreach ($Campos as $KeyDados => $ValuesKeysDados){
					if(!is_array($ValuesKeysDados)){
					$Campos[$KeyDados] = addslashes($ValuesKeysDados);
				}
				}
				foreach ($Campos as $Keys => $ValuesKeys){
					$Dados[] = "$Keys = '$ValuesKeys'" ;
				}
				$Dados = implode(", ", $Dados);
				$SqlUpdate = "UPDATE {$Tabela} SET {$Dados} {$Condicao}";
				$SqlUpdateExe = mysqli_query(Conn::Conexao(), $SqlUpdate);
				if ($SqlUpdateExe){
					return $SqlUpdateExe;
					}
				}
				/*
				 * METODO DE EXCLUSÃO NO BANCO
				 */
				public static function Delete($Tabela, $Condicao = NULL){
					$SqlDelete = "DELETE FROM {$Tabela} {$Condicao}";
					$SqlDeleteExe = mysqli_query(Conn::Conexao(), $SqlDelete);
					if ($SqlDeleteExe) {
						return $SqlDeleteExe;
					}
				}	
			}
?>