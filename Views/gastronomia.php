<?php include 'meta.php' ?>
<?php include 'style-frontend.php' ?>
  <title>Gastronomia</title>
 </head>
<body class="font-text" >

    <header style="background-image: url(img/Skewed.jpg);">
        <div class="textos">
            <h1 class="titulo fon-header">Gastronomia De Castilla</h1>
            <h3 class="subtitulo lead text-center">Capital Gastronomico del Distrito de Castilla - Piura</h3>     
        </div>
        <div class="sesgoabajo"></div>
    </header>

    <main>
        <section class="acerca-de">
                  <div class="container text-center mt-4">
              <h1 class="fon-restaurante sobre-nosotros">Restaurante </h1>
              <hr>
              <p class="fon-parrafo parrafo">
            La variada gastronomía de nuestro Perú nos brinda un abanico de posibilidades en cuanto a diversos tipos de restaurantes, pero ¿Sabes cuáles son los restaurantes registrados por la munipalidad de Castilla?
            Aquí te brindamos una lista , para que no te pierdas de darte un buen gusto de sabores....!!! </p>
            <br>  
        </section>

        <section class="galeria">
            <div class="sesgoarriba"></div>
            <div class="imagenes none">
                <img src="img/1.jpg">
            </div>
            <div class="imagenes">
                <img src="img/3.jpg">
            </div>
            <div class="imagenes">
                <img src="img/2.jpg">
                <div class="encima">
                    <h2>Platos</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="img/4.jpeg">

            </div>
            <div class="imagenes none">
                <img src="img/5.jpeg">
            </div>
            <div class="sesgoabajo"></div>


<div id="contenedor" style="display:none" >


<div id="flotante" class=" col-10 col-sm-10 col-md-12  col-lg-12  col-xl-12 bg-white">  
         <button type="button" class="close" data-dismiss="modal" onClick="cerrarventana();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
         <br>
        <div class="container">
        <div class="row">
            <div class="col-4"><img src="img/icon.png" class="img-fluid"></div>

 <div class="col-6 text-black" ><p class="font-text">Sí deseas ser parte de nuestro portal acercate a la oficina 
de Sub-Gerencia de comercialización para que tù negocio seá
incluido en nuestro portal</p>
      <a style="cursor:pointer" class="btn btn-dark" data-url="/maps/dir//direcci%C3%B3n+de+la+municipalidad+de+castilla+piura/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x904a10863658d725:0x54bfb48828e37c06?sa=X" href="https://www.google.com/maps/dir/-5.1349785,-80.6987433/dirección+de+la+municipalidad+de+castilla+piura/" jsaction="jsa.logVedAndGo" tabindex="0" class="ab_button" role="button" data-ved="2ahUKEwiQ-4SemffnAhXKF7kGHVF8BmAQ9RcwDHoECA8QEw">Cómo llegar <img src="img/address.png" width="20" height="20"></span></a>
            </div>
</div>

</div>

</div>


<div id="fondo"></div>

</div>
        </section>

        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Nuestros Restaurante Registrados</h2>

                <form accept-charset="utf-8" action=""  method="post">
            <button id="buscar" class=" btn btn-dark sloga ">
            <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" style="background-color:#343a40; border-color:#343a40;">
                        <img src="img/search.png" width="20" height="20"></span>
                        </div>
                        <input class="form-control mr-sm-2 font-text" type="text" placeholder="Buscar Restaurant" 
                        name="busca" id="busca"  onkeyup="buscar_ajax(this.value);" required>
                        <div class="invalid-feedback" style="width: 100%;">
                               </div>
                      </div>
            </button>
            </form>
                

<div id="pagina"></div>

<div id="div_buscar" ></div>
              
            </div>
        </section>
    </main>

<footer class="page-footer font-small " style="background-color: #212121;">

  <div class="container text-center text-md-left mt-2 text-light">

    <div class="row mt-3">

      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <h6 class="text-uppercase font-weight-bold font-footer text-center">
            <img src="img/icon.png" width="40" height="40" class="fas fa-home mr-3"> Municipalidad de Castilla</h6>
        <p class="font-footer">Le Recomendamos que venga a registarse parte de este <strong>gran top</strong>!</p>

      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-light">

        <h6 class="text-uppercase font-weight-bold font-footer">Contáctanos</h6>
        <p class="font-footer text-center">
          <img src="img/home.png" width="30" height="30" class="fas fa-home mr-3 ">Jr. Ayacucho 414 Castilla - Piura</p>
        <p class="font-footer">
          <img src="img/envelope.png" width="30" height="30" class="fas fa-envelope mr-3">municastilla.gob.pe</p>
        <p class="font-footer">
          <img src="img/phone.png" width="30" height="30" class="fas fa-phone mr-3 "> + (073) 347080</p>
      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3 text-light font-footer">Copyright © 2020 Municipalidad de Castilla - Piura Todos Los Derechos reservados
  </div>

</footer>


<a id="back2Top" title="Subir" href="#">&#10148;</a>

      <?php include 'script-frontend.php' ?>
      
</body>
</html>
