<?php
//////////////////////////////////////||
//  Informació del sistema            ||
//  JUAN CARLOS PATIÑO                ||
//  @jcpatio                          ||
//  https://github.com/jcpatio        ||
//////////////////////////////////////||




if (!isset($_SESSION)) {
  session_start();
}

require('../conexiones/conexion.php');
$con = conectar();
include('consultas.php');

date_default_timezone_set( 'America/Bogota' );
$usuarioId = $_SESSION[ 'usuarioId' ];
$ip = $_SERVER[ 'REMOTE_ADDR' ];
$fechar = date( "Y-m-d H:i:s" );

///insertar sesiones
$qSesionUpdate = "UPDATE sesiones SET activo='0'  WHERE usuario_id='$usuarioId'";
mysqli_query($con,$qSesionUpdate) or die(mysqli_error());

registrarSalirSesion($usuarioId, $ip);

  $_SESSION['usuarioId'] = NULL;
  $_SESSION['usuario'] = NULL;
  $_SESSION['tipoUsuario'] = NULL;

  unset($_SESSION['usuarioId']);
  unset($_SESSION['usuario']);
  unset($_SESSION['tipoUsuario']);
  
  unset($_COOKIE['usuarioId']);
  unset($_COOKIE['usuario']);
  unset($_COOKIE['tipoUsuario']);

 session_destroy(); 
if ($logoutGoTo != "../index.php") {header("Location: $logoutGoTo");
header("Location: ../index.php");
exit;

}

?>