<?php

class ControladorPaginas{

	/*=============================================
	=            Paginas          =
	=============================================*/

	static public function ctrMostrarPaginas($item, $valor){

		$tabla = "paginas";

		$respuesta = ModeloCategorias::mdlMostrarPaginas($tabla, $item, $valor);

		return $respuesta;

	}

}