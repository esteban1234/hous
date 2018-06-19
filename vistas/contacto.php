<!DOCTYPE html>
<?php include 'encabezado2.php' ?>

<body>
 
 <div class="bannerc">
  <div class="fondoc">
    <div class="content">
      <nav class="pull-left animated bounceInLeft">
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">PRODUCTOS</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>
      
      <figure class="logo pull-right animated bounceInRight">
        <img src="../img/hous.png" class="img-responsive" alt="HOUS">
      </figure>
    </div>

    <h1 class="animated bounceInUp">Hemos renovado nuestro centro de Ayuda</h1>
    <p class="animated bounceInUp">Podrás encontrar todas tus respuestas aquí</p>

  </div>
</div>

<section id="contact" class="content-section text-center" style="padding: 5% 0%;">
        <div class="contact-section">
            <div class="container">
              <h2>Formulario de Contacto</h2>
              <p>No te preocupes, en caso de no conseguir tu respuesta todavía podrás contactarnos</p> <br><br>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Nombre</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu nombre">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName2">Teléfono</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Escribe tu teléfono">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Correo</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Escribe tu correo">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Comentario</label>
                     <textarea  class="form-control" placeholder="Escribe tu comentario"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Enviar mensaje</button>
                  </form>


                    
                </div>
              </div> <br><br>
              <div class="section">
                <h3>Datos de la empresa</h3>
        <div class="row">
          <div class="col-md-3">
            <h2 class="text-center">
              <i class="fas fa-map-marker-alt fa-fw"></i> Dirección</h2>
            <p class="text-center">C. Ixhuatan #292 MZ 4 LT.11. Col. Centenario Tuchtlan, Tuxtla Gutierrez, Chiapas. C.P. 29025.</p>
          </div>
          <div class="col-md-3">
            <h2 class="text-center">
              <i class="fas fa-phone fa-fw"></i> Teléfono</h2>
            <p class="text-center">PENDIENTE</p>
          </div>
          <div class="col-md-3">
            <h2 class="text-center">
              <i class="far fa-envelope fa-fw"></i> Correo</h2>
            <p class="text-center">info@comercializadorahous.com</p>
          </div>
          <div class="col-md-3">
            <h2 class="text-center">
              <i class="far fa-clock fa-fw"></i> Horario</h2>
            <p class="text-center">Lunes a Viernes de 9 am a 6 pm</p>
          </div>
        </div>
      </div>

            </div>
        </div>
      </section>

      <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.0886066316236!2d-93.16756422825244!3d16.767856657521293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd96842ae9aa7%3A0x52829a31c183b64e!2sIxhuat%C3%A1n+292%2C+Centenario+Tuchtl%C3%A1n%2C+29025+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1529357244763" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

  
  
	
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
</body>
</html>
