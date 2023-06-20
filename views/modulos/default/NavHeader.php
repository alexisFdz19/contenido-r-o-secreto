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

      <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>

      </a>

      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>

      </a>-->

    </div>

    <!-- Nav con titulo -->
    <nav class="navbar navbar-light container navMenuColor navMenuMargin1" id="navMenu">

      <a class="navbar-brand" href="">

          <i class="fas fa-images"></i>
        
        <span class="tituloPrincipal" style="margin-left: 8px;">¡Descubre y descarga nuestro contenido!</span>
        
      </a>

      <div class="banderas">

        <a href="" class="linkBanderas"><img src="<?php echo $url?>views/img/default/mexico.jpg" width="20%"></a>
      
          <span class="tituloPrincipal" style="margin-left: 8px; margin-right: 8px;"> | </span>

        <a href="eng/" class="linkBanderas"><img src="<?php echo $url?>views/img/default/usa.jpg" width="20%"></a>

      </div>

    </nav>

  </div>


  <div class="container">

    <div class="row">

      <div class="col-12 col-lg-6">

        <img src="<?php echo $url?>views/img/default/bienvenido-esp.png" class="imgBienvenidos">

      </div>

      <div class="col-12 col-lg-6">

        <p style="text-align: justify;">Río Secreto es un sistema kárstico e hidrogeológico, de cuevas semi inundadas ubicado en la Riviera Maya, a solo 10 minutos de Playa del Carmen. Nuestra misión es transformar a nuestros visitantes a través de un viaje único hacia las entrañas de la Tierra.</p>
        <br>

      </div>

    <div>

  </div>


  <div class="container containerAlbum">

    <!-- Grid row -->
    <div class="container">

      <div class="row">
        

          <!-- Grid column -->
          <!--<div class="col-12 d-flex justify-content-center mb-5 divMenuLarge">
        
            <button type="button" class="btn btn-light filter btnAlbum" data-rel="all">Todo</button>

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="1">Río Secreto Clásico</button>

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="2">Río Secreto Plus</button>

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="3">Río Secreto Wild</button>

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="4">Río Secreto - Tulum</button>

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Privilege</button>
            
            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Video</button> 

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Materiales</button> 

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Centinelas del Agua A.C.</button> 

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Facturación</button> 

            <button type="button" class="btn btn-light filter btnAlbum" data-rel="5">Privilege</button> 
        
          </div>-->


          <!-- Menú para dispositivos móviles -->

          <div class="col-md-12 divMenuXS" id="divMenuXS">

            <div class="dropdown">

              <button class="btn btn-info dropdown-toggle botonFiltro" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%">
                Selecciona el álbum de fotos
              </button>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                <ul class="gallery_filter list">

                  <li data-filter=".ap"><a class="botonFiltroCL dropdown-item" href="#">Clásico</a></li>

                  <li data-filter=".ap1"><a class="botonFiltroPL dropdown-item" href="#">Plus</a></li>

                  <li data-filter=".ap2"><a class="botonFiltroWL dropdown-item" href="#">Wild</a></li>

                  <li data-filter=".ap3"><a class="botonFiltroTU dropdown-item" href="#">RS Tulum</a></li>

                  <li data-filter=".ap9"><a class="botonFiltroTUP dropdown-item" href="#">RS Tulum Plus</a></li>

                  <li data-filter=".ap10"><a class="botonFiltroCOB dropdown-item" href="#">RS Cobá</a></li>

                  <li data-filter=".ap4"><a class="botonFiltroPR dropdown-item" href="#">Privilege</a></li>

                  <li data-filter=".ap5"><a class="botonFiltroGB dropdown-item" href="#">Grupos y bodas</a></li>

                  <li data-filter=".ap6"><a class="botonFiltroMA dropdown-item" href="#">Materiales generales</a></li>

                  <!--<li data-filter=".ap7"><a class="botonFiltro dropdown-item" href="#">Asociaciones</a></li>-->

                  <li data-filter=".ap8"><a class="botonFiltroWA dropdown-item" href="#">Wallpapers</a></li>

                </ul>
                
              </div>

            </div>

          </div>

          <!-- Termina el menú de dispositivos móviles -->
        
        </div>

      </div>
      
      <section class="home_gallery_area seccionAlbum">

        <!-- Menú para escritorio -->

        <div class="container divMenuLarge">

          <div class="isotope_fillter">

            <ul class="gallery_filter list">

              <li class="active" data-filter=".ap" class="botonFiltro"><a class="botonFiltroCL" href="#">Clásico</a></li>

              <li data-filter=".ap1" class="botonFiltro"><a class="botonFiltroPL" href="#">Plus</a></li>

              <li data-filter=".ap2" class="botonFiltro"><a class="botonFiltroWL" href="#">Wild</a></li>

              <li data-filter=".ap3" class="botonFiltro"><a class="botonFiltroTU" href="#">RS Tulum</a></li>

              <li data-filter=".ap9" class="botonFiltro"><a class="botonFiltroTUP" href="#">RS Tulum Plus</a></li>

              <li data-filter=".ap10" class="botonFiltro"><a class="botonFiltroCOB" href="#">RS Cobá</a></li>

              <li data-filter=".ap4" class="botonFiltro"><a class="botonFiltroPR" href="#">Privilege</a></li>

              <li data-filter=".ap5" class="botonFiltro"><a class="botonFiltroGB" href="#">Grupos</a></li>

              <li data-filter=".ap6" class="botonFiltro"><a class="botonFiltroMA" href="#">Materiales generales</a></li>

              <!--<li data-filter=".ap7"><a class="botonFiltro" href="#">Jaguar Wildlife Center</a></li>-->

              <li data-filter=".ap8" class="botonFiltro"><a class="botonFiltroWA" href="#">Wallpapers</a></li>

            </ul>

          </div>

        </div>