<?php

require_once "conexion.php";

class ModeloNoticias {

    // Función para obtener todas las noticias
    public static function mostrarNoticias() {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM noticias");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Función para crear una nueva noticia
    public static function crearNoticia($datos) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO noticias (titulo, descripcion, imagen, fecha_publicacion) VALUES (:titulo, :descripcion, :imagen, :fecha)");
        $stmt->bindParam(":titulo", $datos['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos['fecha_publicacion'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    // Función para eliminar una noticia
    public static function eliminarNoticia($id) {
        $stmt = Conexion::conectar()->prepare("DELETE FROM noticias WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    // Función para editar una noticia
    public static function editarNoticia($datos) {
        $stmt = Conexion::conectar()->prepare("UPDATE noticias SET titulo = :titulo, descripcion = :descripcion, imagen = :imagen, fecha_publicacion = :fecha WHERE id = :id");
        $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
        $stmt->bindParam(":titulo", $datos['titulo'], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datos['descripcion'], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datos['fecha_publicacion'], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
    }

    // Función para obtener una noticia por su ID
    public static function obtenerNoticiaPorId($id) {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM noticias WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>
