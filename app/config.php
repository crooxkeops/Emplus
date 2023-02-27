<?php //Archivo de Configuracion de la aplicacion.

//Inicio de Session En el Servidor.
session_start();

//Variables Pricipales
define('APP_NAME', 'EMPLUS');
define('APP_VERSION', 'BETA');
define('APP_TOKEN', '');
define('APP_AUTOR', '');
define('APP_ADMIN', '');
define('APP_KEY', '');
define('APP_COUNTRIE', 'COLOMBIA');
define('APP_IDIOMA', 'ES');
//Otras Variables Segundarias Post-Declaradas.

//Variables de Configuracion de Conexion con el Servidor.
define('DB_SERVER', 'localhost');
<<<<<<< Updated upstream
define('DB_USERNAME', 'id20367169_user');
define('DB_PASSWORD', '$1045713393Softcroox');
define('DB_DATABASE', 'id20367169_Emplus');
=======
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'emplus');
>>>>>>> Stashed changes

//Variable de Mysql de conexion de base de datos.

global $db;
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//Finciones de Acceso global.
function HashCreate($data,$key)
{
  return  hash('sha512',$key.$data);
}

?>