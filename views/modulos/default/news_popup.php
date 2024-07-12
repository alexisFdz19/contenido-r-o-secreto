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
            <div class="news-item">
                <h4>Noticia 1</h4>
                <p>Promoción de verano Río Secreto</p>
                <img src="<?php echo $url?>views/img/default/promo-summer.jpg" alt="Noticia 1">
            </div>
            <div class="news-item">
                <h4>Noticia 2</h4>
                <p>Próximamente: Torneo de lasertag</p>
                <img src="<?php echo $url?>views/img/default/torneo-lasertag.jpg" alt="Noticia 2">
            </div>
        </div>
        <div class="news-navigation">
            <span class="prev">&lt;</span>
            <span class="next">&gt;</span>
        </div>
    </div>
</div>

