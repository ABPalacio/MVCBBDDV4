<?php 

	/**
	* Conexion a bbdd usando mysqli
	*/
	class Connect 
	{
		
		public static function connection(){
			$cnx = new mysqli('localhost', 'aspasia02', 'Aspasia20', 'mb87310_aspasia02');
			$cnx->set_charset("utf8");
			return $cnx;
		}
	}
?>