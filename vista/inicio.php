<?php
  include_once 'layouts/header.php';   
?>

  <header>

<?php
  include_once 'layouts/nav.php';   
?>
    
<?php
  include_once 'layouts/head2.php';   
?>
    
  </header>
   
     <center>
    <section>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
  
    </ol>
    
    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imagen/1.png" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <img src="../imagen/2.png" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="../imagen/3.png" alt="Imagen 3">
      </div>
    
    </div>
    
    <!-- Controles -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

    </section>  
    
  </center> 
  <br>
  <br>
  <br>
 
  <main> 
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            
            <article>
              <h2 class="text-center">Nuestros Servicios</h2>
              <br>
              <h5 class="text-justify"><span style="font-weight: normal;">
              Capacitaciones dirigidas a personal de las micros, pequeñas, medianas y grandes empresas, en las diversas familias formativas como lo son:</h5>
              <h5 class="text-left"><span style="font-weight: normal;">Habilidades Interpersonales</span></h5> 
              <h5 class="text-left"><span style="font-weight: normal;">Servicio de Ventas</span></h5>  
              <h5 class="text-left"><span style="font-weight: normal;">Calidad</span></h5>  
              <h5 class="text-left"><span style="font-weight: normal;">Procesamiento de Alimentos y Bebidas</span></h5>  
              <h5 class="text-left"><span style="font-weight: normal;">Recursos Humanos</span></h5>   
                
              <br>                    
                  <a href="./cursos.php" class="btn btn-outline-info">Más Información</a>
            </article>
          </div>
          <div class="col-md-4">
            <aside>              
              <img src="../imagen/7.jpg" class="card-img-top float-right" alt="..."> 
            </aside>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    
     
<?php
  include_once 'layouts/redes.php';   
?>
   
  </main>
  <br>
  <br>
  <br>
<?php
  include_once 'layouts/footer.php';   
?>