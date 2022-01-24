<?php
/*
 * **************************************************************************************************** 
  Nombre archivo:......: solicitud_empleado.php
  Version del Sistema..: 1.0.0
  Autor:...............: FGMA
  Fecha de Creacion....: 01/09/21
  Fecha de Modificacion: 01/11/21
  Objetivo.............: Panel de control de Empleado - opcion "solicitudes"
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
  <script src="_js/jquery-1.7.2.min.js"></script>
  <script src="_js/jquery.validate.min.js"></script>
  <script>

  </script>
</head>

<body>
  <?php
  include '../headers/menu_mod_usuario.php';  // menu modulo de Empleado
  include '../headers/menu_ops_emplea_formulario.php';  // menu opciones de Panel Empleado - opcion solicitudes activa

  ?>
  <!-- Formulario de solicitud de afiliacion -->
  <div class="span12">

    <div class="widget ">

      <div class="widget-header">
        <i class="icon-user"></i>
        <h3>Formulario de Afiliación</h3>
      </div> <!-- /widget-header -->

      <div class="widget-content">

        <div class="tabbable">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#datospersonales" data-toggle="tab">Datos Personales</a></li>
            <li><a href="#datoslaborales" data-toggle="tab">Datos Laborales</a></li>
            <li><a href="#grupofamiliar" data-toggle="tab">Grupo Familiar</a></li>
          </ul>

          <br>

          <div class="tab-content">

            <div class="tab-pane active" id="datospersonales">
              <!-- Tab de Datos Personales -->
              <form id="edit-profile" class="form-horizontal">
                <fieldset>

                  <div class="control-group">
                    <label class="control-label" for="username">Apellido y Nombre:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Ingrese apellido">
                      <input type="text" class="span4" id="firstname" value="Ingrese nombre">
                    </div> <!-- /controls -->

                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="firstname">Nacionalidad y DNI:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Ingrese nacionalidad">
                      <input type="text" class="span4" id="firstname" value="Ingrese DNI">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label">Sexo:</label>
                    <div class="controls">
                      <label class="radio inline">
                        <input type="radio" name="radiobtns"> Masculino
                      </label>

                      <label class="radio inline">
                        <input type="radio" name="radiobtns"> Femenino
                      </label>
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Estado Civil:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese Estado Civil">
                      <input type="text" class="span4" id="firstname" value="Ingrese Fecha de Nacimiento">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">CUIL Nro:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese CUIL">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Domicilio:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese Calle y altura">
                      <input type="text" class="span4" id="firstname" value="Ingrese Piso/Dpto">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Localidad y Provincia:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese localidad">
                      <input type="text" class="span4" id="firstname" value="Ingrese provincia">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Cod Pos y Telefono:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese cod pos">
                      <input type="text" class="span4" id="firstname" value="Ingrese telefono">
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
            </div> <!-- Fin Tab de Datos Personales -->

            <!-- Tab de Datos Laborales -->
            <div class="tab-pane" id="datoslaborales">

              <form id="edit-profile" class="form-horizontal">
                <fieldset>

                  <div class="control-group">
                    <label class="control-label" for="username">Razon social del Empleador:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Ingrese razon social">                      
                    </div> <!-- /controls -->

                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="firstname">Puesto y area:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="firstname" value="Ingrese puesto">
                      <input type="text" class="span4" id="firstname" value="Ingrese area">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Domicilio:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese Domicilio donde trabaja">
                      <input type="text" class="span4" id="firstname" value="Ingrese Piso/Dpto">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Localidad y provincia:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese localidad">
                      <input type="text" class="span4" id="firstname" value="Ingrese provincia">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                  <div class="control-group">
                    <label class="control-label" for="email">Cod Postal y Telefono:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese Cod Postal">
                      <input type="text" class="span4" id="firstname" value="Ingrese telefono">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->                  

                  <div class="control-group">
                    <label class="control-label" for="email">Email laboral:</label>
                    <div class="controls">
                      <input type="text" class="span4" id="email" value="Ingrese email laboral">
                    </div> <!-- /controls -->
                  </div> <!-- /control-group -->

                </fieldset>
              </form>

            </div> <!-- Fin Tab de Datos Laborales -->

            <!-- Tab de Grupo Familiar -->
            <div class="tab-pane" id="grupofamiliar">

              <div class="control-group">
                <label class="control-label" for="email">Parentesco:</label>
                <div class="controls">
                  <input type="text" class="span4" id="email" value="Ingrese parentesco">
                </div> <!-- /controls -->

                <label class="control-label" for="email">Apellido y Nombres:</label>
                <div class="controls">
                  <input type="text" class="span4" id="email" value="Ingrese parentesco">
                </div> <!-- /controls -->
                
                <label class="control-label" for="email">Sexo:</label>
                <div class="controls">
                  <input type="text" class="span4" id="email" value="Ingrese sexo">
                </div> <!-- /controls -->

                <label class="control-label" for="email">DNI:</label>
                <div class="controls">
                  <input type="text" class="span4" id="email" value="Ingrese DNI">
                </div> <!-- /controls -->

                <label class="control-label" for="email">Fecha Nacimiento</label>
                <div class="controls">
                  <input type="text" class="span4" id="email" value="Ingrese fecha nacimiento">
                </div> <!-- /controls -->

                <div class="controls">
                  <!-- Boton modal de grabacion -->
                  <a href="#myModal" role="button" class="btn" data-toggle="modal">Agregar</a>

                  <!-- Modal -->
                  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h3 id="myModalLabel">ATENCION!</h3>
                    </div>
                    <div class="modal-body">
                      <p>¿Confirma que quiere agregar un pariente?</p>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Confirmar</button>
                      <!-- <button class="btn btn-primary">Confirmar</button> -->
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                    </div>
                  </div>
                </div> <!-- /controls -->

              </div> <!-- /control-group -->

              <!-- /widget-header -->
              <div class="widget-content">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th> Parentesco</th>
                      <th> Apellido y Nombre</th>
                      <th> Sexo</th>
                      <th> DNI nro</th>
                      <th> Fecha de Nacimiento</th>
                      <th> Accion</th>
                      <!-- <th class="td-actions"> </th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Listado de Grupo Familiar -->
                    <tr>
                      <td> Padre </td>
                      <td> Gonzalez Pedro </td>
                      <td> Masculino </td>
                      <td> 3452188 </td>
                      <td> 05/05/1940 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>
                    <tr>
                      <td> Madre </td>
                      <td> Perez Ines </td>
                      <td> Femenino</td>
                      <td> 4778414 </td>
                      <td> 05/05/1945 </td>
                      <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /widget-content -->

            </div>

          </div>

        </div>

      </div> <!-- /widget-content -->

      <!-- Botones para grabar el registro -->
      <div class="form-actions">        
        <a href="solicitud_empleado.php"><input type="submit" class="btn btn-primary" value="Grabar"></a>        
        <button class="btn">limpiar</button>
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