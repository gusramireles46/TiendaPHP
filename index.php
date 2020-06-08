<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/material-icons.css">
    <link rel="stylesheet" href="style/bootstrap-material-design.css">
    <link rel="stylesheet" href="style/estilos_principal.css">
    <link rel="stylesheet" href="style/w3.css">
    <script src="js/bootstrap-material-design.js"></script>
    <title>Inicio | TiendaPHP</title>

    <style>
      .sliders {display: none;}
    </style>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap-material-design.js"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

    

  </head>
  <body>
    <div class="bmd-layout-container bmd-drawer-f-l bmd-drawer-overlay">
      <header class="bmd-layout-header">
        <div class="navbar navbar-light bg-faded" style="background-color: rgba(0,0,0,0.8);">
          <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s2" style="border: 1px transparent;">
            <span class="sr-only">Toggle drawer</span>
            <i class="material-icons"><img src="images/icon.jpg" alt="" width="36px" height="36px"></i>
          </button>
          <ul class="nav navbar-nav" style="margin-right: auto; margin-left: auto;">
            <li class="nav-item titulo" style="color: #FFFFFF;">TecnoVentas</li>
          </ul>
        </div>
      </header>
      <div id="dw-s2" class="bmd-layout-drawer bg-faded">
        <header>
          <a class="navbar-brand">BIENVENIDO</a>
        </header>
        <ul class="list-group">
          <p align="center"><img src="images/circle_login.png" alt="Imagen de perfil" width="125" height="125"></p>
          <a class="list-group-item" href="./views/login.html" style="color: black;">Iniciar Sesión</a>
          <a class="list-group-item" href="#">Productos</a>
          <a class="list-group-item" href="#">Carrito</a>
        </ul>
      </div>
      <main class="bmd-layout-content">
        <div class="container" style="margin-top: 15px;">
          <div class="carrito" style="width: 1080px; height: 500px; border: 1px solid rgba(0, 0, 0, 0.1); align-content: center; ">
            <!-- display: table-cell; vertical-align: middle; -->
            <div class="w3-display-container sliders w3-animate-right">
              <img src="images/tecnologia.jpg" width="1080px" height="500px">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                Tecnología
              </div>
            </div>
            <div class="w3-display-container sliders w3-animate-right">
              <img src="images/ropa.jpg" width="1080px" height="500px">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                Ropa
              </div>
            </div>
            <div class="w3-display-container sliders w3-animate-right">
              <img src="images/supermercado.png" width="1080px" height="500px">
              <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
                Abarrotes
              </div>
            </div>
          </div>

          <script>
            var indice = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("sliders");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              indice++;
              if (indice > x.length) {indice = 1}    
              x[indice-1].style.display = "block";  
              setTimeout(carousel, 5000);    
            }
          </script>

          <div class="contenedor2" style="margin-left: auto; margin-right: auto;" align="center">
            <h3>Productos destacados</h3>
            <?php
              for ($i=0; $i < 5; $i++) {
                ?>
                <div class="card" style="width: 180px; display: inline-block; margin: 10px;">
                  <img class="card-img-top" src="images/icon.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Producto N</h5>
                    <p class="card-text">Descripción del producto.</p>
                    <a href="#" class="btn btn-primary">Ir al producto</a>
                  </div>
                </div>
                <?php
              }
            ?>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam exercitationem voluptas natus esse, perferendis deserunt officiis pariatur fugit nam eveniet, quibusdam laudantium consectetur omnis quo, dolore odit ex aut.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ipsum quaerat cum eaque doloribus praesentium inventore esse corporis numquam, id assumenda aliquid vel maiores at suscipit ipsam distinctio quisquam. Ex.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam exercitationem voluptas natus esse, perferendis deserunt officiis pariatur fugit nam eveniet, quibusdam laudantium consectetur omnis quo, dolore odit ex aut.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ipsum quaerat cum eaque doloribus praesentium inventore esse corporis numquam, id assumenda aliquid vel maiores at suscipit ipsam distinctio quisquam. Ex.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam exercitationem voluptas natus esse, perferendis deserunt officiis pariatur fugit nam eveniet, quibusdam laudantium consectetur omnis quo, dolore odit ex aut.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ipsum quaerat cum eaque doloribus praesentium inventore esse corporis numquam, id assumenda aliquid vel maiores at suscipit ipsam distinctio quisquam. Ex.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta ipsam exercitationem voluptas natus esse, perferendis deserunt officiis pariatur fugit nam eveniet, quibusdam laudantium consectetur omnis quo, dolore odit ex aut.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ipsum quaerat cum eaque doloribus praesentium inventore esse corporis numquam, id assumenda aliquid vel maiores at suscipit ipsam distinctio quisquam. Ex.</p>
        </div>
      </main>
    </div>
  </body>
</html>