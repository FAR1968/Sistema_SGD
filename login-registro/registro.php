<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: registro.php                         
 Version del Sistema..: 1.0.0          
 Autor:...............: FGMA          
 Fecha de Creacion....: 01/09/21
 Fecha de Modificacion: 01/11/21
 Objetivo.............: Registro de usuarios
 Modificacion.........: 
 Version del archivo..: 1.0.0 - version Local 
 referencias..........: en esta DEMO no estan desarrollados los procesos de BackEnd        
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

    <div class="account-container register">
        <div class="content clearfix">
           <!-- Formulario -->
           <form action="registro_ok.php" method="post">
                <h1>Ingrese sus Datos</h1>
                <div class="login-fields">
                    <p>Complete sus datos:</p>
                    <div class="field">
                        <label for="usuario">Usuario:</label>
                        <input autofocus type="text" id="usuario" name="usuario" value="" placeholder="Ingrese nombre de usuario" class="login" />
                    </div>
                    <div class="field">
                        <label for="contacto">Contacto:</label>
                        <input type="text" id="nombre" name="contacto" value="" placeholder="Ingrese nombre de contacto" class="login" />
                    </div>
                    <!-- /field -->
                    <div class="field">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" value="" placeholder="Email" class="login" />
                    </div>
                    <!-- /field -->
                    <div class="field">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" id="contraseña" name="contraseña" value="" placeholder="Ingrese contraseña" class="login" />
                    </div>
                    <!-- /field -->
                    <div class="field">
                        <label for="contraseña2">Reingrese contraseña: </label>
                        <input type="password" id="contraseña2" name="contraseña2" value="" placeholder="Reingrese contraseña" class="login" />
                    </div>
                    <!-- /field -->
                    <!-- Seleccionar -->
                    <div class="form-group">
                        <label class="col-sm-6 text-left">Seleccionar rol</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="txt_role">
								<option value="" selected="selected"> - Elija una opcion (Empresa o Empleado) - </option>								
								<option value="personal">Empresa</option>
								<option value="usuarios">Empleado</option>
							</select>
                        </div>
                    </div>
                </div>
                <!-- /login-fields -->
                <br>
                <div class="login-actions">

                    <span class="login-checkbox">
					  <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice"
						tabindex="4" />
					</span>
                    <button class="btn btn-success">Registrarse</button>

                </div>
                <!-- .actions -->

            </form>

        </div>
        <!-- /content -->

    </div>
    <!-- /account-container -->

    <!-- Redirige a login -->
    <div class="login-extra">
        ¿Tiene ya una cuenta? <a href="http://localhost/zz_PHP/proyecto-sf/login-user/index-user.php">Ingrese desde aqui</a>
    </div>
    <!-- /fin Redirige a login  -->
    
    <!-- Llamado a Scripts JS -->
    <?php require_once ".\common\librerias-js.php";  ?>

</body>
</html>