<?php
/* 
 ************************************************************************************************** 
 Nombre archivo:......: config.php                         
 Version del Sistema..: 6.13.12         
 Autor:...............: FGMA          
 Fecha de Creacion....: 16/09/18           
 Fecha de Modificacion: 27/08/21
 Objetivo.............: Conexion con BD
 Modificacion.........: Se agrega conexion a diferentes ambientes                             
 Version del archivo..: 1.4.0 - version Produccion                 
 **************************************************************************************************
 */
session_start();

//************** Conexion PRODUCCION www.towebs.com ***********************************************
// 
/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'fgmaguna_admin');
define('DB_PASSWORD', 'CardonRural2021$');
define('DB_DATABASE', 'fgmaguna_cardon_reservas');
define("BASE_URL", "https://cardontorrerural.com/sistema/"); 
// 
*/


//************** Conexion PRODUCCION *************************************************************
// 
/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cardon_admin');
define('DB_PASSWORD', 'Far20172017$');
define('DB_DATABASE', 'cardon_reservas');
define("BASE_URL", "https://www.torrecardonpalermo.com/web/sistema/configurar");
*/
//


//************** Conexion Local ********************************************************************

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'gestion_sgd');
define("BASE_URL", "http://localhost/zz_PHP/proyecto-sf/"); // Eg. http://yourwebsite.com

function getDB() {
    $dbhost = DB_SERVER;
    $dbuser = DB_USERNAME;
    $dbpass = DB_PASSWORD;
    $dbname = DB_DATABASE;
    try {
        $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $dbConnection->exec("set names utf8");
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConnection;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}
?>