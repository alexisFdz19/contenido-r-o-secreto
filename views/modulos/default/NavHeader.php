<?php
// Detectar si estamos en la versión en inglés
$isEnglish = strpos($_SERVER['REQUEST_URI'], '/eng') !== false;
?>

<nav class="navbar navbar-light barraArriba" style="background-color: #0C6295;">
  <a class="navbar-brand" href="#">
  </a>
</nav>

<!-- Slide principal -->
<div class="container containerBanners">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <!-- Banners -->
    <div class="carousel-inner bannerXS">
      <div class="carousel-item active">
        <img loading="lazy" class="d-block w-100 img-fluid" src="<?php echo $url?>views/img/default/xs2.jpg" alt="First slide">   
      </div>
    </div>
    <div class="carousel-inner bannerS">
      <div class="carousel-item active">
        <img loading="lazy" class="d-block w-100 img-fluid" src="<?php echo $url?>views/img/default/s2.jpg" alt="First slide">   
      </div>
    </div>
    <div class="carousel-inner bannerM">
      <div class="carousel-item active">
        <img loading="lazy" class="d-block w-100 img-fluid" src="<?php echo $url?>views/img/default/m2.jpg" alt="First slide">   
      </div>
    </div>
    <div class="carousel-inner bannerLG">
      <div class="carousel-item active">
        <img loading="lazy" class="d-block w-100 img-fluid" src="<?php echo $url?>views/img/default/lg2.jpg" alt="First slide">   
      </div>
    </div>
    <div class="carousel-inner bannerXL">
      <div class="carousel-item active">
        <img loading="lazy" class="d-block w-100 img-fluid" src="<?php echo $url?>views/img/default/xl2.jpg" alt="First slide">   
      </div>
    </div>
  </div>

  <!-- Nav con titulo -->
  <nav class="navbar navbar-light container navMenuColor navMenuMargin1" id="navMenu">
    <a class="navbar-brand" href="">
      <i class="fas fa-images"></i>
      <?php if ($isEnglish): ?>
        <span class="tituloPrincipal" style="margin-left: 8px;">Discover and download our content!</span>
      <?php else: ?>
        <span class="tituloPrincipal" style="margin-left: 8px;">¡Descubre y descarga nuestro contenido!</span>
      <?php endif; ?>
    </a>
    <div class="banderas">
      <a href="<?php echo $url?>" class="linkBanderas"><img src="<?php echo $url?>views/img/default/mexico.jpg" width="20%"></a>
      <span class="tituloPrincipal" style="margin-left: 8px; margin-right: 8px;"> | </span>
      <a href="<?php echo $url?>eng" class="linkBanderas"><img src="<?php echo $url?>views/img/default/usa.jpg" width="20%"></a>
    </div>
  </nav>
</div>

<div class="container">
  <div class="row">
    <?php if ($isEnglish): ?>
      <div class="col-12 col-lg-6">
        <img src="<?php echo $url ?>views/img/default/bienvenido-ing.png" class="imgBienvenidos">
      </div>
      <div class="col-12 col-lg-6">
        <p style="text-align: justify;">
          Rio Secreto is a karstic and hydrogeological system of semi-flooded caves located in the Riviera Maya, just 10 minutes from Playa del Carmen. Our mission is to transform our visitors through a unique journey into the bowels of the Earth.
        </p>
        <br>
      </div>
    <?php else: ?>
      <div class="col-12 col-lg-6">
        <img src="<?php echo $url ?>views/img/default/bienvenido-esp.png" class="imgBienvenidos">
      </div>
      <div class="col-12 col-lg-6">
        <p style="text-align: justify;">
          Río Secreto es un sistema kárstico e hidrogeológico, de cuevas semi inundadas ubicado en la Riviera Maya, a solo 10 minutos de Playa del Carmen. Nuestra misión es transformar a nuestros visitantes a través de un viaje único hacia las entrañas de la Tierra.
        </p>
        <br>
      </div>
    <?php endif; ?>
  </div>
</div>





  