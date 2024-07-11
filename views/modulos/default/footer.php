<?php

    // Detectar si estamos en la versión en inglés
    $isEnglish = strpos($_SERVER['REQUEST_URI'], '/eng') !== false;

?>

<br>

<hr class="hrFinal">

  <div class="container">

    <div class="row">

    <?php if ($isEnglish): ?>

      <span class="tituloPreFooter">Visit our other web sites:</span>
    
    <?php else: ?>

      <span class="tituloPreFooter">Visita nuestros otros sitios:</span>

    <?php endif; ?>

    </div>
      
    <div class="row">

      <div class="col-xs-12 col-md-6 col-lg-6">

        <ul class="list-inline listaSitios">

          <!--<li class="list-inline-item sitiosWeb"><a href="http://www.riosecretomexico.com.mx/" target="_blank" style="color: grey;">Río Secreto | Sitio Oficial</a></li>/-->

          <?php if ($isEnglish): ?>

            <li class="list-inline-item sitiosWeb"><a href="http://blog.riosecreto.com/" target="_blank" style="color: grey;">Río Secreto Blog</a></li>

          <?php else: ?>

            <li class="list-inline-item sitiosWeb"><a href="http://blog.riosecreto.com/" target="_blank" style="color: grey;">Blog Río Secreto</a></li>

          <?php endif; ?>

        </ul>

      </div>

    <div class="col-xs-12 col-md-6 col-lg-6">

      <ul class="list-inline ulRedes">

          <li class="list-inline-item">
            
            <a href="https://www.facebook.com/riosecretomexico/" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/facebook.png" width="8%">                    
            
            </a>

            <a href="https://www.instagram.com/riosecreto/" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/Instagram.png" width="8%">                    
            
            </a>

            <a href="https://www.tiktok.com/@riosecreto" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/tik-tok.png" width="8%">                    
            
            </a>

            <a href="https://twitter.com/riosecreto" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/twitter.png" width="8%">                    
            
            </a>

            <a href="https://www.youtube.com/user/RSecretoMexico" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/youtube.png" width="8%">                    
            
            </a>

            <a href="https://www.linkedin.com/company/444286/" target="_blank">
            
              <img loading="lazy" src="<?php echo $url?>views/img/default/linkedin.png" width="8%">                    
            
            </a>
          
          </li>

        </ul>

    </div>

  </div>

</div>

<br>

<div class="container">

  <div class="row">

    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinal" src="<?php echo $url?>views/img/contenido/RS Clasico/Logo/logo-rio-secreto-low.png" alt="Card image cap">
        
    </div>


    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinalP2" src="<?php echo $url?>views/img/contenido/RS Plus/Logos/logo-rio-secreto-plus-low.png" alt="Card image cap">

    </div>


    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinal" src="<?php echo $url?>views/img/contenido/RS Wild/Logo/logo-rio-secreto-wild-low.png" alt="Card image cap">

    </div>


    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinalT" src="<?php echo $url?>views/img/contenido/RS Tulum/Logo/logo-rio-secreto-tulum-low.png" alt="Card image cap">

    </div>

  </div>

  <div class="row">

    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinalT" src="<?php echo $url?>views/img/contenido/SaltySweet/Logo/S&S-logo-azul-fuerte-low.png" alt="Card image cap">

    </div>

    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinalT" src="<?php echo $url?>views/img/contenido/RS Coba/Logo/coba-rio-secreto-logo-low.png" alt="Card image cap">

    </div>

    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

        <img loading="lazy" class="img-fluid logosFinalP" src="<?php echo $url?>views/img/contenido/Privilege/Logo/logo-rio-secreto-privilege-low.png" alt="Card image cap">

    </div>

    <div class="col-6 col-xs-6 col-md-3 col-lg-3">

      <img loading="lazy" class="img-fluid logosFinalG" src="<?php echo $url?>views/img/contenido/Grupos/logo-romance-by-rio-secreto-low.png" alt="Card image cap">

    </div>

  </div>

</div>

<br>
<hr>

<div class="container">

  <div class="row">

    <div class="col-12">

      <img loading="lazy" class="img-fluid logosFinal" src="<?php echo $url?>views/img/default/footer-certificaciones.jpg" alt="Card image cap">
      
    </div>

  </div>

</div>

        </div>

    </div>

</div>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<footer class="footer">

    <div class="container">

      <span class="tituloFooter">© Copyright 2024 | Río Secreto </span>

    </div>

</footer>