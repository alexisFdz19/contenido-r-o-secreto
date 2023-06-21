<?php

class Conexion{

	public static function conectar(){

		// Datos de conexión a la base de datos del sitio web. 1ro: host, 2do:  nombre base de datos, 3ro: usuario, 4to: password
		$link = new PDO("mysql:host=localhost;dbname=imagenriosecreto",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

}