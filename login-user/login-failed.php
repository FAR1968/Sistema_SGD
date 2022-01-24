<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: login-user.php                         
 Version del Sistema..: 1.0.0          
 Autor:...............: FGMA          
 Fecha de Creacion....: 11/09/21
 Fecha de Modificacion: 00/00/21
 Objetivo.............: Login de usuarios
 Modificacion.........: 
 Version del archivo..: 1.1.0 - version Local                  
 **************************************************************************************************
 */
include 'config/config.php';           // (1)
include 'clases/usuarioClass.php';     // (2)
$userClass = new usuarioClass();

$errorMsgReg = '';
$errorMsgLogin = '';

if (!empty($_POST['loginSubmit'])) {
  // (3)
  $usernameEmail = $_POST['username'];
  $password = $_POST['password'];
  $userRol = $_POST['userRol'];
  // (4)
  $_SESSION['usuario'] = $usernameEmail;
  if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {

    $uid = $userClass->userLoginRol($usernameEmail, $password, $userRol);

    // (5)
    if ($uid) {

      switch ($userRol) {
        case "Administrador":
          // carga panel administrador
          $url = BASE_URL . '../proyecto-sf/menu-admin/tablero_admin.php';
          header("Location: $url");
          break;

        case "Empresa";
          // carga panel empresa
          $url = BASE_URL . '../proyecto-sf/menu-empresa/tablero_empresa.php';
          header("Location: $url");
          break;

        case "Empleado":
          // carga panel empleado       
          $url = BASE_URL . '../proyecto-sf/menu-user/tablero_user.php';
          header("Location: $url");
          break;
        
        case "Empresa afiliada":
            // carga panel empleado       
            $url = BASE_URL . '../proyecto-sf/menu-asociada/tablero_user.php';
            header("Location: $url");
            break;
        
        case "Afiliado":
            // carga panel empleado       
            $url = BASE_URL . '../proyecto-sf/menu-afiliado/tablero_user.php';
            header("Location: $url");
            break;    

        default:

          header('Location: login-failed.php');
      }
    } else {
      header('Location: login-failed.php');
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once ".\common\header.php";  ?>
</head>

<body>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/foto-login.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <img style="display:block;
                 margin:0 auto 0 auto;" src="images/logo-plataforma.jpg" width="50" height="50" alt="logo" />
            <br>
            <p class="centrado">PLATAFORMA UNO</p>

            <label class="titulo">Ingreso al Sistema</label>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input autofocus type="text" class="form-control" name="username" placeholder="Ingrese Usuario" id="usernameEmail">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" id="password">
              </div>
              
              <div class="form-group first">
                <label for="username">Rol</label>
                <input autofocus type="text" class="form-control" name="userRol" placeholder="Ingrese Rol" id="userRol">
              </div>
              
              <span class="ml-auto"><a href="#" class="forgot-pass">¿Olvido su clave?</a></span>
              <br><br>

              <input type="submit" name="loginSubmit" value="Log In" class="boton-login btn-block">
              
              <p class="copyright">
                version 1.0.0 <a href="https://ithinformatica.000webhostapp.com/"> | Diseño by ITH </a>| 2021
              </p>
            </form>
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- fin cuerpo -->
  <?php /*require_once ".\common\librerias-js.php"; */ ?>

</body>

</html>