<?php
/*
 * **************************************************************************************************** 
  Nombre archivo:......: historial_abonos.php
  Version del Sistema..: 1.0.0
  Autor:...............: FGMA
  Fecha de Creacion....: 01/09/21
  Fecha de Modificacion: 02/09/21
  Objetivo.............: Historial de abonos de cuota sindical
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
  <title>Sistema SGD - Historial de Abonos</title>
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
  include '../headers/menu_ops_empresa_asoc_histo.php';  // menu opciones de Panel Empresa asociada
  ?>

  <div class="main-inner">

    <div class="container">

      <div class="row">

        <div class="span12">

          <div class="widget ">

            <div class="span12">
              <div class="widget-header"> <i class="icon-th-list"></i>
                <h3>Listado de Abonos de Cuota Sindical</h3>
              </div>
              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> Empresa</th>
                      <th> Fecha de Pago</th>
                      <th> Estado</th>
                      <th> Cupones PDF</th>
                      <th> Año</th>
                      <th> Accion</th>
                      <!-- <th class="td-actions"> </th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> Microtech SRL </td>
                      <td> 09/06/2021 </td>
                      <td> Pagado </td>
                      <td> <a href="javascript:;">No Disponible</a></td>
                      <td> 2021 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Microtech SRL </td>
                      <td> 10/06/2021 </td>
                      <td> Pagado </td>
                      <td> <a href="javascript:;">No Disponible</a></td>
                      <td> 2021 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Microtech SRL </td>
                      <td> 11/06/2021 </td>
                      <td> Pagado </td>
                      <td> <a href="javascript:;">No Disponible</a></td>
                      <td> 2021 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Microtech SRL </td>
                      <td> 12/06/2021 </td>
                      <td> Pendiente de Pago </td>
                      <td> <a href="javascript: mostrarFomulario('')">
                          Ver Cupones de abono
                        </a>
                      </td>
                      <td> 2021 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /widget-content -->
            </div>
            <!-- /widget -->
            <!-- /widget -->
          </div>
          <!-- /span6 -->
        </div>


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
  <script>
    function mostrarFomulario(parametros) {
      var url = 'http://localhost/zz_PHP/proyecto-sf/menu-asociada/cupones_pdf.php?';
      url += 'variable=' + parametros;
      // 
      var nuevaVentana = (window.open(url, 'Cupones de pago de Abono Cuota'));
      if (nuevaVentana) {
        nuevaVentana.focus();
      }
    }
  </script>
  <!-- Se colocan al final del documento para que la pagina cargue mas rapido -->
  <script src="js/excanvas.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/base.js"></script>
</body>

</html>