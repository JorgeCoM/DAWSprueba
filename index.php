<!DOCTYPE html>
<html lang="es">
<head>
    <title>DAWS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Css -->
    <link rel="stylesheet" href="DAWS/css/styles.css">

    <link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap" rel="stylesheet">

</head>
<body>

  <!-- Ir Arriba -->
  <div class="go-top">
    <span class="fas fa-angle-up"></span>
  </div>

    <!-- Menu de Navegacion -->
    <header id="header">
    <nav class="menu">
     <div class="logo-box">
       <h1><a href="#">Bienvenido</a></h1>
       <span class="btn-menu"><i class="fas fa-bars"></i></span>
     </div>
     
     <div class="list-container">
        <ul class="lists">
            <li><a href="#inicio" class="active">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#proyectos">Proyectos</a></li>
            <li><a href="#Fundadores">Fundadores</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
     </div>
    </nav>
 
    <!-- Imagen Header -->
    <div class="img-header">
     <div class="welcome" id="inicio">
       <h1>Bienvenidos A DAWS</h1>
       <hr>
       <p>Agencia de desarrollo web y app web</p>
       <button id="abajo">Ver abajo</button>
     </div>       
    </div>
    
    <div class="skew-abajo"></div>

    </header>

 <main>

    <!-- Acerca de nosotros -->
    <section class="acerca-de" id="nosotros">
    <div class="info-container">
      <h1>Acerca de Nosotros</h1>
      <p>Nuestro proyecto trata de ofrecer un servicio para desarrollar web y app  de una forma más rápida, eficiente ecocomica y cómoda en el manejo de todas las empresas que estén comenzando o buscan actualizar sus sistemas.</p>
      <p>Tambien nos dedicamos al desarrollo de implementaciones de red y otros servicios</p>
      <div class="about-gallery">
        <img src="DAWS/img/logo2_DAWS.jpg" alt="">
        <img src="DAWS/img/logo2_DAWS.jpg" alt="">
        <img src="DAWS/img/logo2_DAWS.jpg" alt="">
      </div>

      <div class="about-more"><button>Leer mas</button></div>

    </div>
    </section>

   <!-- Nuestros proyectos -->
   <section class="our-projects" id="proyectos">
      <div class="skew-arriba"></div>
   <div class="deg-background"></div>
   
   <div class="ejeZproject">
      <div class="container-project">
        <div class="project-title">
          <h2>Nuestros Proyectos</h2>
          <hr>
        </div>
          <div class="project-img">
            <img src="DAWS/img/logo.jpg" alt="">
            <p class="text-content"></p>
            <img src="DAWS/img/Logo Nuevo.jpg" alt="">
            <p class="text-content"></p>
            <img src="DAWS/img/logo2_DAWS.jpg" alt="">
            <p class="text-content"></p>
         </div>
   <div class="skew-abajo"></div>
   </section>

   <!-- Fundadores -->
   <section class="Fundadores" id="Fundadores">
    <div class="Fundadores-title">
     <h2>Fundadores</h2>
     <hr>
    </div>

     <div class="box-testimonio">
      <div class="card-testimonio">
        <div class="card-img"><img src="DAWS/img/" alt=""></div>
        <div class="testimonio-text">
        <h4>Jorge Luis Muñiz Coca</h4>
        <p>developing manager</p>
        </div>
      </div>

      <div class="card-testimonio">
          <div class="card-img"><img src="DAWS/img/" alt=""></div>
          <div class="testimonio-text">
          <h4>Félix Andrés Almonte P.</h4>
          <p>database development manager</p>
          </div>
        </div>

        <div class="card-testimonio">
            <div class="card-img"><img src="DAWS/img/" alt=""></div>
            <div class="testimonio-text">
            <h4>Christofer Laurencio felíz</h4>
            <p>marketing manager</p>
            </div>
          </div>

          <div class="card-testimonio">
              <div class="card-img"><img src="DAWS/img/" alt=""></div>
              <div class="testimonio-text">
              <h4>Eudy F. Perez</h4>
              <p>graphic design </p>
              </div>
            </div>

     </div>
   </section>

 </main> 

 <!-- Footer -->
 <footer class="footer">
   <div class="footer-text">
     <p>&copy; DAWS - 2021 | Todos los derechos reservados.</p>
   </div>
  </div>
 </footer>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/35db202371.js"></script>
<script src="js/app.js"></script>

</body>
</html>
