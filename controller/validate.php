<?php
  session_start();
  require_once "conexion.php";

  $usr = $_REQUEST['username'];
  $pwd = $_REQUEST['pwd'];

  //echo "El usuario es: ".$usr;
  //echo "La contraseña es: ".$pwd;

  $query = "SELECT * FROM Usuarios WHERE username = '$usr' OR mailUser = '$usr';";
  $res = $con->query($query);

  $row = $res->fetch_array(MYSQLI_ASSOC);

  if($usr == $row['mailUser'] || $usr == $row['username']){
    echo "<h2>Bienvenido ".$row['nombre']."</h2><hr>";
    if($row['pwdUsuario'] == $pwd){
      echo "Nombre: ".$row['nombre']."<br>";
      echo "Apellidos: ".$row['apellidoP']." ".$row['apellidoM']."<br>";
      echo "El nombre de usuario es: ".$row['username']."<br>";
      echo "El correo es: ".$row['mailUser']."<br>";
      echo "La contraseña es: ".$row['pwdUsuario']."<br>";
      echo "La dirección es: ".$row['dirUsuario'].", ".$row['cpUsuario']."<br>";
      echo "El telefono del usuario es: ".$row['telUsuario']."<br>";
      if($row['nivelUsuario'] == 1)
        echo "El usuario es administrador";
      else
        echo "El usuario es cliente";
    } else { ?>
      <script>
        alert("La contraseña es incorrecta");
        window.location.replace("../views/login.html");
      </script>
    <?php
    }
  } else {
    echo "<script> alert('El usuario es incorrecto'); window.location.replace('../views/login.html')</script>";
  }
?>