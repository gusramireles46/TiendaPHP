<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap-material-design.css">
    <link rel="stylesheet" href="style/estilos_principal.css">
    <link rel="stylesheet" href="style/w3.css">
    <script src="js/bootstrap-material-design.js"></script>
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <title>Inicio | TiendaPHP</title>

    <style>
      .sliders {
        display: none;
      }
    </style>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap-material-design.js"></script>

    <script>
      $(document).ready(
        function() { 
          $('body').bootstrapMaterialDesign(); 
        }
      );
    </script>

    

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
          <a class="navbar-brand">Bienvenido</a>
        </header>
        <ul class="list-group">
          <p align="center"><img style="border-radius: 50%; filter: drop-shadow(2px 2px 2px #444);" src="images/logo_cut.png" alt="Logo" width="170px" height="170px"></p>
          <a class="list-group-item" href="./views/login.html" style="font-size: 18px;"><i class="fas fa-sign-in-alt"></i>Iniciar Sesión</a>
          <a class="list-group-item" href="#" style="font-size: 18px;"><i class="fas fa-store"></i>Productos</a>
          <a class="list-group-item" href="#" style="font-size: 18px;"><i class="fas fa-shopping-cart"></i>Carrito</a>
          <a class="list-group-item" href="#" style="font-size: 12px;">Acerca de este proyecto</a>
        </ul>
      </div>
      <main class="bmd-layout-content">
        <div class="container" style="margin-top: 15px;">
          <div class="carrito" style="width: 1080px; height: 500px; align-content: center; filter: drop-shadow(4px 4px 5px #444);">
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

          <div class="contenedor2" style="margin-left: auto; margin-right: auto; margin-top: 3%;" align="center">
            <h3>Productos destacados</h3><hr>
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