<?php
	abstract class Conn{
		private static $Host = 'localhost';
		private static $User = 'root';
		private static $Pass ='';
		private static $Base ='db_promessometro';
		
		private static $Conection = NULL;
		
		protected static function Conexao(){
			if(self::$Conection == NULL){
				self::$Conection = mysqli_connect(self::$Host, self::$User, self::$Pass, self::$Base);
			}
			return self::$Conection;
		}
		
	}
?>