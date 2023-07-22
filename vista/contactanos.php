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
  <br>
  <br>
  
  <br>
  <center>
  <main> 
  <section class="text-left">
  <div class="container">
        <div class="row">
          <div class="col-md-6">
            <article>


  <form action="https://formspree.io/f/mwkjjrzj" method="POST">
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
  <label  for="email" class="form-label">Correo Electronico</label>
  <input type="email" class="form-control" name="email">
  </div>  
  <div class="mb-3">
  <label  for="comments">Mensaje</label>
  <textarea type="comments" name="comments" class="form-control" cols="50" row="10"></textarea>
  </div>

  
  <input type="submit" class="btn btn-info" value="Enviar" >
          
 
  
</form>


<!--

      <div id="wrapper">
        <h2>Información</h2>
        <form action="https://formsubmit.co/47146112362b9b8e33c3db5a4ecd91f1" method="POST">
          <label  for="Nombre">Nombre</label>
          <input type="text" name="name">

          <label  for="email">Correo Electronico</label>
          <input type="email" name="email">

          <label  for="subject">Asunto</label>
          <input type="text" name="subject">

          <label  for="comments">Mensaje</label>
          <textarea type="comments" cols="100" row="5"></textarea>

          <input type="submit" value="Enviar" >

          
          <input type="hidden" name="_next" values="https://sysconsultoresonline.com/contactanos/">
          <input type="hidden" name="_captcha" value="false">
        </form>
        

      </div>
      -->
      </article>
      </div>
          <div class="col-md-6">
            <aside>   
              <br>
              <br>
              <br>
              <tr>           
              <img src="../imagen/logo1.png"   class="card-img-top float-right" alt="..."> 
            </aside>
          </div>
        </div>
      </div>
  </section>

    
    
    <br>
    <br>
    <br>
    
  </main>
  </center>
  <br>
  <br>
  
 
<?php
  include_once 'layouts/footer.php';   
?>