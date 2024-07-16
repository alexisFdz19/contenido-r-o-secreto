<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    // Procesar la subida de la imagen
    $rutaImagen = subirImagen(); // Implementa la función subirImagen() adecuadamente

    if ($rutaImagen !== null) {
        // Preparar datos para insertar
        $datos = [
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'imagen' => $rutaImagen,
            'fecha_publicacion' => $fecha
        ];

        // Llamar a la función para agregar la noticia en el modelo
        $resultado = ModeloNoticias::agregarNoticia($datos);

        if ($resultado === "ok") {
            // Redireccionar a la página de administración de noticias
            header("Location: {$url}agregar-noticia");
            exit();
        } else {
            echo "Error al agregar la noticia.";
        }
    } else {
        echo "Error al subir la imagen.";
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
    if ($check !== false) {
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

    // Verificar el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo siento, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk es 0 por un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
        return null;
    // Si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
            return null;
        }
    }
}
?>

