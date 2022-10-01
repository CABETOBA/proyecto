<?php 

class Conexion {

	# Metodo Para Conectar a la BD
	static public function conectar() {

		// Nos conectamos a la base de datos 
		$link = new PDO("mysql:host=localhost;dbname=simapp","root","");

		// Evaluar los Caracteres latinos ñ Ú
		$link -> exec("set names utf8");

		// Devuelve la Fecha en Español
		$link->query("SET lc_time_names = 'es_ES'");

		return $link;
	}

}


