<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: registro_ok.php                         
 Version del Sistema..: 1.0.0          
 Autor:...............: FGMA          
 Fecha de Creacion....: 01/09/21
 Fecha de Modificacion: 01/11/21
 Objetivo.............: Confirmacion de alta de registro de usuarios
 Modificacion.........: 
 Version del archivo..: 1.0.0 - version Local 
 referencias..........: este archivo fue creado para la DEMO, este mensaje sera integrado dentro de
                        otro archivo a definir.
 
 **************************************************************************************************
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once ".\common\header.php";  ?>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">
					SGD - Sistema de Gestion Documental
				</a>
            </div>
            <!-- /container -->
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->

    <!-- Libreria mensaje de confirmacion -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        swal("¡Registro Confirmado!", "Bienvenido! ya puede ingresar y completar el formulario de afiliacion", "success");
        // Se puede colocar warning, error, success y por último info.
        
    </script>    
    
    <!-- Ejecuta alta del registro (No disponible en la DEMO) -->

    <!-- Redirige al login -->
    <div class="login-extra">
      <p>Ud ya tiene creada una cuenta</p>  <a href="http://localhost/zz_PHP/proyecto-sf/login-user/index-user.php"> Ingrese desde este link </a>
    </div>
    
    <!-- Scripts JS -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/signin.js"></script>

</body>
</html>