<?php

class ControladorPlantilla{

	public function plantilla(){

		// Plantilla dinámica principal del sitio web
		include "views/plantilla.php";

	}

}


// Código condicional para que no se ejecuté la plantilla en el hosting y resolver la página tarjeta beneficios

/* class ControladorPlantilla{

    public function plantilla(){

        // Verificar si la página actual es 'tarjeta-beneficios'
        if (isset($_GET["ruta"]) && $_GET["ruta"] === "tarjeta-beneficios") {
            // No incluir la plantilla si la página es 'tarjeta-beneficios'
            return;
        }

        // Incluir la plantilla solo si no es la página 'tarjeta-beneficios'
        include "views/plantilla.php";

    }

}*/