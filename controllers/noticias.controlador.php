<?php

class ControladorNoticias {

    // Función para mostrar todas las noticias
    public function mostrarNoticias() {
        $noticias = ModeloNoticias::mostrarNoticias();
        return $noticias;
    }

    // Función para crear una nueva noticia
    public function crearNoticia($datos) {
        $respuesta = ModeloNoticias::crearNoticia($datos);
        return $respuesta;
    }

    // Función para eliminar una noticia
    public function eliminarNoticia($id) {
        $respuesta = ModeloNoticias::eliminarNoticia($id);
        return $respuesta;
    }

    // Función para editar una noticia
    public function editarNoticia($datos) {
        $respuesta = ModeloNoticias::editarNoticia($datos);
        return $respuesta;
    }

}

?>
