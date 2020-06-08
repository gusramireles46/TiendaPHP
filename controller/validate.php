<?php
  session_start();
  require_once "conexion.php";

  $usr = $_REQUEST['username'];
  $pwd = $_REQUEST['pwd'];

  $usr = strtolower($usr);

  //echo "El usuario es: ".$usr;
  //echo "La contraseña es: ".$pwd;

  $query = "SELECT * FROM Usuarios WHERE username = '$usr' OR mailUser = '$usr';";
  $res = $con->query($query);

  $row = $res->fetch_array(MYSQLI_ASSOC);

  if($usr == $row['mailUser'] || $usr == $row['username']){
    if($row['pwdUsuario'] == $pwd){

      $_SESSION['nombre'] = $row['nombre'];
      $_SESSION['apellidoP'] = $row['apellidoP'];
      $_SESSION['apellidoM'] = $row['apellidoM'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['correo'] = $row['mailUser'];
      $_SESSION['direccion'] = $row['dirUsuario'];
      $_SESSION['telefono'] = $row['telUsuario'];
      $_SESSION['nivel'] = $row['nivelUsuario'];

      sleep(5);

      if($row['nivelUsuario'] != 1){
        header("Location: ../views/inicio_usr.php");
      } else {
        header("Location: ../views/inicio_adm.php");
      }
      /*echo "Nombre: ".$row['nombre']."<br>";
      echo "Apellidos: ".$row['apellidoP']." ".$row['apellidoM']."<br>";
      echo "El nombre de usuario es: ".$row['username']."<br>";
      echo "El correo es: ".$row['mailUser']."<br>";
      echo "La contraseña es: ".$row['pwdUsuario']."<br>";
      echo "La dirección es: ".$row['dirUsuario'].", ".$row['cpUsuario']."<br>";
      echo "El telefono del usuario es: ".$row['telUsuario']."<br>";*/
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