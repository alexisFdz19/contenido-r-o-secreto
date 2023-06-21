<?php

class ControladorPaginas{

	/*=============================================
	=            Paginas          =
	=============================================*/

	// Hay que actualizar a public static y no static public

	public static function ctrMostrarPaginas($item, $valor){

		$tabla = "paginas";

		$respuesta = ModeloCategorias::mdlMostrarPaginas($tabla, $item, $valor);

		return $respuesta;

	}

}