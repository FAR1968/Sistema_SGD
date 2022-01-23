<?php
/*
 * **************************************************************************************************** 
  Nombre archivo:......: cupones_pdf.php
  Version del Sistema..: 1.0.0
  Autor:...............: FGMA
  Fecha de Creacion....: 01/09/21
  Fecha de Modificacion: 02/09/21
  Objetivo.............: Generar cupones de pago de cuota sindical por empresa
  Modificacion.........:
  Version del archivo..: 1.0.0 - version Local
  referencias..........: en esta DEMO no estan desarrollados los procesos de BackEnd
 * ****************************************************************************************************
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Cupones de pago de Cuota Sindical</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<br />
	<img src="img/cuota1.jpg" width="588" height="365" alt="" />
	<br />
	<img src="img/cuota2.jpg" width="588" height="365" alt="" />
	<br />
	<img src="img/cuota3.jpg" width="588" height="365" alt="" />
	<br />
	<br />

	<!-- Boton de generacion de PDF -->
	<div class="form-actions">
	  <a href=""><input type="submit" class="btn btn-primary" value="Descargar PDF"></a>
	  <button class="btn">Cerrar</button>
	</div> <!-- /form-actions -->

	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/bootstrap.js"></script>

</body>

</html>