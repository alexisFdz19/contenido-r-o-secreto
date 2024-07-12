<!-- Burbuja flotante pequeña -->
<div id="newsBubble" class="news-bubble">

    <i class="fas fa-newspaper"></i>

    <span class="bubble-text">Noticias</span>

    <div class="bubble-tooltip">Checa las últimas noticias y promociones</div>

</div>

<!-- Pop-up de noticias completo -->
<div id="newsPopup" class="news-popup">

    <div class="news-popup-content">

        <span class="close">&times;</span>

        <div id="newsContent" class="news-content">

            <!-- Contenido dinámico de las noticias -->

            <?php

            // Aquí se incluirá el código PHP para mostrar las noticias dinámicamente
            $controlador = new ControladorNoticias();
            $noticias = $controlador->mostrarNoticias();

            foreach ($noticias as $noticia) {
                echo '<div class="news-item">';
                echo '<h4>' . $noticia['titulo'] . '</h4>';
                echo '<p>' . $noticia['descripcion'] . '</p>';
                echo '<img src="' . $noticia['imagen'] . '" alt="' . $noticia['titulo'] . '">';
                echo '</div>';
            }
            
            ?>

        </div>
        <hr>

        <div class="news-navigation">

            <span class="prev">&lt;</span>

            <span class="next">&gt;</span>

        </div>

    </div>

</div>


