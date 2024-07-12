<!-- guardarnoticia.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "models/noticias.modelo.php"; // Asegúrate de que el modelo de noticias esté incluido correctamente

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    // Subir imagen y obtener la ruta
    $rutaImagen = subirImagen();

    // Guardar noticia en la base de datos
    if (guardarNoticia($titulo, $descripcion, $rutaImagen, $fecha)) {
        // Redireccionar a la página de noticias o donde sea necesario
        header("Location: news_popup.php");
        exit();
    } else {
        echo "Error al guardar la noticia.";
    }
}

function subirImagen() {
    $target_dir = "img/noticias/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verificar si el archivo de imagen es una imagen real o un archivo falso
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["imagen"]["tmp_name"]);
        if($check !== false) {
            echo "El archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
    }

    // Verificar si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Verificar el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permitir ciertos formatos de archivo
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG & GIF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk está configurado en 0 por un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    // Si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            echo "El archivo ". basename( $_FILES["imagen"]["name"]). " ha sido subido.";
            return $target_file;
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}
?>
