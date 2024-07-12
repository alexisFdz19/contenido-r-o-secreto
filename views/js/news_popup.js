document.addEventListener('DOMContentLoaded', function() {
    var newsBubble = document.getElementById('newsBubble');
    var newsPopup = document.getElementById('newsPopup');
    var closeBtn = document.querySelector('.news-popup-content .close');
    var bubbleTooltip = document.querySelector('.news-bubble .bubble-tooltip');
    var newsItems = document.querySelectorAll('.news-item');
    var currentIndex = 0; // Índice inicial de la noticia mostrada

    // Función para mostrar la noticia en el pop-up
    function showNews(index) {
        newsItems.forEach((item, i) => {
            item.style.display = (i === index) ? 'block' : 'none';
        });
    }

    // Mostrar el mensaje inicial al cargar la página
    bubbleTooltip.style.display = 'block';
    bubbleTooltip.style.opacity = 1;
    setTimeout(function() {
        bubbleTooltip.style.opacity = 0;
        setTimeout(function() {
            bubbleTooltip.style.display = 'none';
        }, 300); // Esperar a que la transición termine antes de ocultar el elemento
    }, 3000); // Ocultar después de 3 segundos

    // Mostrar pop-up completo al hacer clic en la burbuja
    newsBubble.addEventListener('click', function() {
        showNews(currentIndex); // Mostrar primera noticia al abrir el pop-up
        newsPopup.style.display = 'block';
        newsBubble.style.display = 'none';
    });

    // Navegación a la siguiente noticia
    document.querySelector('.news-navigation .next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % newsItems.length;
        showNews(currentIndex);
    });

    // Navegación a la noticia anterior
    document.querySelector('.news-navigation .prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + newsItems.length) % newsItems.length;
        showNews(currentIndex);
    });

    // Cerrar pop-up al hacer clic en el botón de cerrar
    closeBtn.addEventListener('click', function() {
        newsPopup.style.display = 'none';
        newsBubble.style.display = 'flex';
    });

    // Cerrar pop-up al hacer clic fuera del contenido del pop-up
    window.addEventListener('click', function(event) {
        if (!newsPopup.contains(event.target) && !newsBubble.contains(event.target)) {
            newsPopup.style.display = 'none';
            newsBubble.style.display = 'flex';
        }
    });

});
