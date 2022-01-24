<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: session.php                         
 Version del Sistema..: 6.13.12         
 Autor:...............: FGMA          
 Fecha de Creacion....: 20/08/18           
 Fecha de Modificacion: 27/08/21
 Objetivo.............: Controlar la sesion de usuario
 Modificacion.........: Se adapta para pruebas con nuevo hosting: www.towebs.com
 Version del archivo..: 1.0.0 - version Local
 **************************************************************************************************
 */
if (!empty($_SESSION['uid'])) {
    $session_uid = $_SESSION['uid'];
    include('clases/usuarioClass.php');
    $userClass = new usuarioClass();	
}

if (empty($session_uid)) {
    $url = BASE_URL . 'login-user.php';
    header("Location: $url");
}
?>