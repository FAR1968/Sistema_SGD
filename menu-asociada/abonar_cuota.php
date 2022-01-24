<?php
/*
 * **************************************************************************************************** 
  Nombre archivo:......: abonar_cuota.php
  Version del Sistema..: 1.0.0
  Autor:...............: FGMA
  Fecha de Creacion....: 01/09/21
  Fecha de Modificacion: 01/11/21
  Objetivo.............: Abonar cuota sindical por empresa
  Modificacion.........:
  Version del archivo..: 1.0.0 - version Local
  referencias..........: en esta DEMO no estan desarrollados los procesos de BackEnd
 * ****************************************************************************************************
 */
include('config.php');   // carga la conexion a BD
include('session.php');  // al cargar session.php llama a userClass.php
$userDetails = $userClass->userDetails($session_uid);
$usuario = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="es">
<!-- Encabezado -->

<head>
  <meta charset="utf-8">
  <title>Sistema SGD - Panel de Control Empresa asociada</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- setea icono de pagina favicon (1) -->
  <link rel="Shortcut Icon" href="img/favicon.ico" type="image/x-icon" />
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <!-- Tipografia -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
  <!-- Estilos -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pages/dashboard.css" rel="stylesheet">
  <!-- Librerias JQuery -->
  <script src="_js/jquery-1.7.2.min.js"></script>
  <script src="_js/jquery.validate.min.js"></script>
  <script>

  </script>
</head>

<body>
  <?php
  include '../headers/menu_mod_empresa_asociada.php';  // menu modulo de Empresa asociada
  include '../headers/menu_ops_empresa_asoc_abono.php';  // menu opciones de Panel Empresa asociada
  ?>
  <!-- Formulario de solicitud de afiliacion -->
  <div class="span12">

    <div class="widget ">

      <div class="widget-header">
        <i class="icon-user"></i>
        <h3>Formulario de Abono de Cuota Sindical</h3>
      </div> <!-- /widget-header -->

      <div class="widget-content">

        <div class="tabbable">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#datospersonales" data-toggle="tab">Datos del Abono</a></li>
            <li><a href="#datoslaborales" data-toggle="tab">Datos de Empresa y Contacto</a></li>
          </ul>
          <br>
          <div class="tab-content">

            <div class="tab-pane active" id="datospersonales">
              <!-- Tab de Datos del Abono de la Empresa -->
              <form id="edit-profile" class="form-horizontal">
                <fieldset>

                  <div class="control-group">
                    <label class="control-label" for="username">Empresa:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Microtech SRL" disabled>
                    </div> <!-- /controls -->

                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="firstname">CUIT y Periodo:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Ingrese CUIT">
                      <input type="text" class="span4" id="firstname" value="Ingrese Periodo">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Empleados y Sueldos:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese cant de empleados">
                      <input type="text" class="span4" id="firstname" value="Ingrese sueldos">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Aporte Cuota 2%:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese aporte cuota sindical">
                      <input type="text" class="span4" id="email" value="Ingrese aporte en letras">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label">Medios de Pago</label>

                    <div class="controls">
                      <label class="radio inline">
                        <input type="radio" name="radiobtns"> Efectivo
                      </label>

                      <label class="radio inline">
                        <input type="radio" name="radiobtns"> Cheque
                      </label>

                      <label class="radio inline">
                        <input type="radio" name="radiobtns"> Transferencia
                      </label>
                    </div> <!-- /controls -->

                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Nro de Cheque:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese nro de cheque">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Email y celular:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese email">
                      <input type="text" class="span4" id="firstname" value="Ingrese celular">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                </fieldset>
              </form>
            </div> <!-- Fin Tab de Datos del Abono de la Empresa -->

            <!-- Tab de Datos de la Empresa y Contacto -->
            <div class="tab-pane" id="datoslaborales">

              <form id="edit-profile" class="form-horizontal">
                <fieldset>

                  <div class="control-group">
                    <label class="control-label" for="username">Contacto:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Maria Raquel Dorian" disabled>
                    </div> <!-- /controls -->

                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="firstname">Puesto y area:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Jefe de RRHH" disabled>
                      <input type="text" class="span4" id="firstname" value="RRHH" disabled>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Domicilio:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Arias 1925" disabled>
                      <input type="text" class="span4" id="firstname" value="PB" disabled>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Localidad y provincia:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="CABA" disabled>
                      <input type="text" class="span4" id="firstname" value="Buenos Aires" disabled>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Cod Postal y Telefono:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="1524" disabled>
                      <input type="text" class="span4" id="firstname" value="157732890" disabled>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Email Corporativo:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="dorian@microtech.com" disabled>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                </fieldset>
              </form>

            </div> <!-- Fin Tab de Datos de la Empresa y Contacto -->

          </div>

        </div>

      </div> <!-- /widget-content -->

      <!-- Botones para grabar el registro -->
      <div class="form-actions">
        <a href="solicitud_empleado.php"><input type="submit" class="btn btn-primary" value="Generar"></a>
        <button class="btn">Cancelar</button>
      </div> <!-- /form-actions -->

    </div> <!-- /widget -->
    <br />
  </div> <!-- /span8 -->

  <?php
  // footer
  include 'footer_configurar.php';
  ?>

  <!-- Archivos javascript -->
  <!-- Se colocan al final del documento para que la pagina cargue mas rapido -->
  <script src="js/excanvas.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/base.js"></script>
</body>

</html>