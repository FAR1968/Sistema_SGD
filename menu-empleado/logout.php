<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: logout.php                         
 Version del Sistema..: 6.13.12         
 Autor:...............: FGMA          
 Fecha de Creacion....: 04/10/17           
 Fecha de Modificacion: 27/08/21
 Objetivo.............: Cierra sesion de admin
 Modificacion.........: Se adapta para pruebas con nuevo hosting: www.towebs.com                            
 Version del archivo..: 1.0.0 - version Local                
 **************************************************************************************************
*/
include('config.php');
$session_uid = '';
$_SESSION['uid'] = '';
if (empty($session_uid) && empty($_SESSION['uid'])) {
    
    $url = 'http://localhost/zz_PHP/proyecto-sf/login-user/index-user.php';
    header("Location: $url");
//echo "<script>window.location='$url'</script>";
session_destroy();  // destruye la sesion
}
?>