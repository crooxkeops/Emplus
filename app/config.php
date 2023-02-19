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
define('DB_SERVER', 'us-east.connect.psdb.cloud');
define('DB_USERNAME', 'lpn9be5hy61gs1olu2sl');
define('DB_PASSWORD', 'pscale_pw_Um4pqze063dOoOhP4RAwTvBny6i3WcEv0mgeTmNU1eS');
define('DB_DATABASE', 'prometeo');

//Variable de Mysql de conexion de base de datos.
global $db;
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//Finciones de Acceso global.
function HashCreate($data,$key)
{
  return  hash('sha512',$key.$data);
}

?>