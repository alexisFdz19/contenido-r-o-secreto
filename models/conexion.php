<?php

// Código para conectarse a la base de datos en localhost

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

// Código para conectarse a la base de datos en localhost del servicio de hosting GoDaddy

/* class Conexion {
    
    public static function conectar() {
        
        try {
            // Datos de conexi車n a la base de datos
            $host = "localhost";
            $dbname = "imagenriosecreto";
            $usuario = "RSSocialMedia";
            $password = "RSSocialMediaDBimagenrio2023";
            $puerto = "3306";

            // Intenta establecer la conexi車n a la base de datos
            $dsn = "mysql:host=$host;port=$puerto;dbname=$dbname";
            $link = new PDO($dsn, $usuario, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                             PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

            // Si llegamos hasta aqu赤, la conexi車n se ha establecido correctamente
            // echo "Conexi車n exitosa a la base de datos";

            return $link;
            
        } catch (PDOException $e) {
            // Si se produce una excepci車n, capt迆rala y muestra un mensaje de error
            // echo "Error al conectar a la base de datos: " . $e->getMessage();
            return null;
        }
        
    }
    
} */

