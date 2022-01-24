<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: index-user.php                         
 Version del Sistema..: 1.0.0          
 Autor:...............: FGMA          
 Fecha de Creacion....: 11/09/21
 Fecha de Modificacion: 02/11/21
 Objetivo.............: Login de usuarios
 Modificacion.........: archivo inicial
 Version del archivo..: 1.0.0 - version Local 
 referencias..........: 
 (1) Inicia llamado a conexion con BD
 (2) llamado a clases
 (3) Variables de sesion para ingresar al modulo correspondiente
 (4) Verifica usuario y clave
 (5) Segun el rol carga el panel correspondiente  
 (6) Llamada a librerias JS           
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
          $url = BASE_URL . '../proyecto-sf/menu-empleado/tablero_empleado.php';
          header("Location: $url");
          break;

        case "Empresa Afiliada":
          // carga panel empleado				
          $url = BASE_URL . '../proyecto-sf/menu-asociada/tablero_empresa_asociada.php';
          header("Location: $url");
          break;

        case "Afiliado":
          // carga panel empleado				
          $url = BASE_URL . '../proyecto-sf/menu-afiliado/tablero_afiliado.php';
          header("Location: $url");
          break;

          case "Administrativo":
            // carga panel empleado				
            $url = BASE_URL . '../proyecto-sf/menu-administra/tablero_administra.php';
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
<!-- cuerpo principal -->
<body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/foto-login.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <br>
            <img style="display:block;
                 margin:0 auto 0 auto;" src="images/logo-plataforma.jpg" width="50" height="50" alt="logo" />
            <br>
            <p class="centrado">Ingreso al Sistema</p>

            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input autofocus type="text" class="form-control" name="username" placeholder="Ingrese Usuario" id="usernameEmail">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Ingrese Contraseña" id="password">
              </div>
              <!-- Seleccionar Rol -->
              <div class="form-group first">
                <label for="username">Rol</label>
                <input autofocus type="text" class="form-control" name="userRol" placeholder="Ingrese Rol" id="userRol">
              </div>
                            
              <br>
              <input type="submit" name="loginSubmit" value="Log In" class="boton-login btn-block">
              <br>
              <a href="#" class="forgot-pass"> ¿Desea registrarse? </a></span>
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
  <?php /*require_once ".\common\librerias-js.php"; (6) */ ?>
</body>
</html>