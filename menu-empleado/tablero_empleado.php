<?php
/*
 * **************************************************************************************************** 
  Nombre archivo:......: tablero_empleado.php
  Version del Sistema..: 1.0.0
  Autor:...............: FGMA
  Fecha de Creacion....: 01/09/21
  Fecha de Modificacion: 02/09/21
  Objetivo.............: Panel de control de Empleado
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
  <title>Sistema SGD - Panel de Control Empleado</title>
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
  <script src="js/jquery-1.7.2.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script>

  </script>
</head>

<body>
  <?php
  include '../headers/menu_mod_usuario.php';  // menu modulo de Empleado
  include '../headers/menu_ops_empleado.php';  // menu opciones de Panel Empleado

  ?>

  <div class="main-inner">

    <div class="container">

      <div class="row">

        <div class="span12">

          <div class="widget ">

            <div class="widget-header">
              <i class="icon-list"></i>
              <h3>Estado del Usuario</h3>
            </div> <!-- /widget-header -->

            <div class="widget-content">
              
              <div class="alert alert-success">                
                <strong>ATENCION:</strong> No hay solicitudes realizadas. Para poder iniciar el proceso de afiliacion
                debera completar un formulario digital ingresando en la opcion "Solicitudes".
              </div>

            </div> <!-- /widget-content -->


          </div> <!-- /widget -->

        </div> <!-- /span8 -->

      </div> <!-- /row -->

    </div> <!-- /container -->

  </div> <!-- /main-inner -->

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