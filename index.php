<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <title>Sistema Portafolio</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<div>
<header>
<div>
<?php include_once 'includes/nav.php'; ?>
<br>
</div>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/electricidad.jpg" alt="Electricidad" width="1200" height="700">
        <div class="carousel-caption">
         <!-- <h3>Proyectos Electricos</h3>
          <p>Certificacion de Instalaciones.</p>-->
        </div>      
      </div>

     <div class="item">
        <img src="img/redes.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
           <!-- <h3>Proyectos Electricos</h3>
          <p>Certificacion de Instalaciones.</p>-->
        </div>      
      </div>
    
      <div class="item">
        <img src="img/soporte.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
            <!-- <h3>Proyectos Electricos</h3>
          <p>Certificacion de Instalaciones.</p>-->
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div>
</header>
</div>




<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="30" background="img/bg1.jpg">

<!-- Container  -->

<div id="presentacion" class="container text-center" >
  
<div background="img/background.jpg">

  <h1>Hola!</h1>
  <IMG SRC="img/yo.png" align="center" width="200"> </IMG>
  <br>
  
Mi nombre es Hugo Alejandro pero me dicen jano soy Analista de Sistemas, Técnico en Electricidad 
y cuento con estudios en electrónica.

Me cosidero un apasionado por las tecnologías me encantan los nuevos desafíos, 
crear , innovar y dar soluciones aplicando la  tecnología .

Vivo en Chile, Actualmente me encuentro desarrollando 
libremente todo lo que me pidan, soy “Freelance”, 


afortunadamente tengo hartos clientes que confían en mi, ya sea 
por la calidad y responsabilidad que doy en cada trabajo,

es por eso que durante los años siguen enviándome proyectos.
 

</div>
 <br>
 

<h2>DESARROLLO WEB</h2>

Me encanta el desarrollo web, especificamente PHP, complementando con Base de Datos MySql, Frameworks, etc, se pueden crear tantas cosas como tu mente quiera.

me caracterizo por crear sitios web adaptables a distintos dispocitivos es decir "responcibos"

Diseño Personalizado, Accesible, Diferente y Autogestionable.



<div align="center" >

<IMG class="img-responsive" SRC="img/diseñoWeb.png" > </IMG>

</div>

<br>
<br>
<h2>DESARROLLO DE ESCRITORIO</h2>



También e creado aplicaciones de escritorio usando tecnologías JAVA y Visua.net, complementándolas con plataformas web resulta muy practico para empresas que requieren sistemas multiplatforma. 



<IMG SRC="img/vbnd.png"  width="90%"   > </IMG>
  


<h2>ESPECIALIDADES</h3>
<br>
<br>
Las principales


Desarrollo Web:Php,html5, javascrip, Java, Visual.NET.


BBDD: Sql y Mysql
 

CMS: Joomla, WordPress.

Frameworks : Larabel, Bootstrap, Jquery.

 

<h2>ELECTRIDAD Y ELECTRONICA</h2>

Estudios en electricidad y electronica, cuento con la sertificacion SEC clase D la cual me permite Certificar y realizar instalaciones electricas en  generar, Certificacion TE1, TE4.

 

<div id="certificaciones" background="img/background.jpg">

  <br>
  

<h2>ESTUDIOS Y CERTIFICACIONES </h2>
 

 <br><br>
<strong>Egresado de la carrera de analisis de sistemas cursado en centro de formación técnica ICEL Chile.
</strong>

<br><br><br><br>
<strong>Certificado Internacional SFIA como programador web php, javascript, ajax, base de datos MySql. CSS, html5.
</strong>


<br><br>
<div align="center">
<IMG class="img-responsive" SRC="img/certificado_desarrollador_web.jpg"    > </IMG>
</div>

<br><br><br>
Licencia SEC CALSE D Como Electricista SEC .
Nº de Registro: 
<br><br><br>


Certificación GOOGLE como desarrollador web, framework y  metodologías de programación  (en curso).
           

</div>

 </P>
 
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">PORTAFOLIO</h3>
    <p class="text-center">Mis trabajos realizados<br> </p>
    <!--<ul class="list-group">
      <li class="list-group-item">Mayo <span class="label label-danger">Agenda Llena!</span></li>
      <li class="list-group-item">Junio <span class="badge">Agendar visita </span></li> 
      <li class="list-group-item">Julio <span class="badge">3</span></li> 
    </ul>-->
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/eltulipan.jpg" alt="El Tulipan" width="400" height="300">
          <p><strong>EL TULIPAN</strong><br>hotel de mascotas</p>
          <p> Noviembre 2015</p>
         <a href="http://www.eltulipan.cl"> <button class="btn" data-toggle="modal" data-target="http://www.eltulipan.cl">VER SITIO</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/seguridad.jpg" alt="Beholder Security" width="400" height="300">
          <p><strong>Beholder Security</strong><br>Empresa de Seguridad</p>
          <p> Enero 2016</p>
          <a href="https://www.rhseguridad.cl"> <button class="btn" data-toggle="modal" data-target="https://www.rhseguridad.cl/">VER SITIO</button></a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/bodega.jpg" alt="Sistema de Bodega en PHP y MySQL" width="400" height="300">
          <p><strong>Sistema de Bodega </strong><br>php , mySQL, Jquery, Bootstrap</p>
          <p> 15 de Diciembre 2017</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">VER APLICACION</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <img src="img/bodega.jpg">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Solicite Cotizacion</h4>



        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Agenda Ahora</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Te llamamos</label>
              <input type="text" class="form-control" id="usrname" placeholder="Ingrese tu numero de telefono">
            </div>
              <button type="submit" class="btn btn-block">ENVIAR 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Nesecitas <a href="#contact">Ayuda?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contacto!</h3>
  <p class="text-center"><em>te contactamos a la brevedad!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>contactanos? envia un mensaje.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Badajoz 100, Vitacura, Santiago de Chile</p>
      <p><span class="glyphicon glyphicon-phone"></span> Telefono: +56 978433594</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Email: janolara.h@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario o consultas" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">Desde Nuestro BLOG</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Electricidad</a></li>
    <li><a data-toggle="tab" href="#menu1">Informatica</a></li>
    <li><a data-toggle="tab" href="#menu2">Redes</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Electricidad</h2>
      <p>Servicios Electricos, Proyectos, TE1, solicite visita de un profecional Certificado!  </p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Informatica</h2>
      <p>Blog de informatica, computacion , Seguridad, tips, etc</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Redes</h2>
      <p>Servicios de Instalacion de Redes de datos y corrientes deviles.</p>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>

<div background="img/background.jpg">



     <a href="" data-toggle="tooltip" title="">www.electricosec.cl</a></p> 
   </div>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</div>
<?php require_once 'includes/footer.php'; ?>

</body>
</html>