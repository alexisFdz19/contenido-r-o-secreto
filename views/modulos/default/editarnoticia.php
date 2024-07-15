<?php

// Verificar si se está recibiendo un POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    // Inicializar la variable de ruta de imagen
    $rutaImagen = null;

    // Si se subió una nueva imagen, procesarla
    if ($_FILES['imagen']['size'] > 0) {
        $rutaImagen = subirImagen(); // Implementa la función subirImagen() adecuadamente
    } else {
        // Si no se subió una nueva imagen, mantener la imagen existente en la base de datos
        $noticia = ModeloNoticias::obtenerNoticiaPorId($id); // Implementa esta función en el modelo si no existe
        $rutaImagen = $noticia['imagen']; // Obtener la ruta de la imagen de la base de datos
    }

    // Verificar si la ruta de la imagen es null
    if ($rutaImagen === null) {
        echo "Error al subir la imagen.";
        exit();
    }

    // Preparar datos para actualizar
    $datos = [
        'id' => $id,
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'imagen' => $rutaImagen,
        'fecha_publicacion' => $fecha
    ];

    // Llamar a la función para editar la noticia en el modelo
    $resultado = ModeloNoticias::editarNoticia($datos);

    if ($resultado === "ok") {
        // Redireccionar a la página de administración de noticias, $url es la variable que contiene la ruta del servidor
        header("Location: {$url}agregar-noticia");
        exit();
    } else {
        echo "Error al editar la noticia.";
    }
}

// Función para subir una imagen
function subirImagen() {
    $target_dir = "views/img/noticias/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar si el archivo es una imagen real
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Verificar el tamaño del archivo (5MB máximo)
    if ($_FILES["imagen"]["size"] > 5000000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk está establecido en 0 por un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    // Si todo está bien, intentar subir el archivo
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            return $target_file; // Retorna la ruta de la imagen subida
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }

    return null; // En caso de fallo, retorna null
}

?>






