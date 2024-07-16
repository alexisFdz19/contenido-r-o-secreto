<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $resultado = ModeloNoticias::eliminarNoticia($id);

    if ($resultado === "ok") {
        header("Location: {$url}agregar-noticia");
        exit();
    } else {
        echo "Error al eliminar la noticia.";
    }
} else {
    echo "No se ha recibido el ID de la noticia.";
}
?>