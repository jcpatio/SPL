<?php
date_default_timezone_set('America/Bogota');
include("../../conexiones/conexion.php");
$con=conectar();

$nDocumento = $_POST['nDocumento'];
$nombres = strtoupper($_POST['nombres']);
$apellidos = strtoupper($_POST['apellidos']);
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$departamento = $_POST['departamento'];
$municipio = $_POST['municipio'];
$celularAdicional = $_POST['celularAdicional'];
$direccionFrecuente = $_POST['direccionFrecuente'];

echo $codigo= rand(1000, 99999);

$insLiderSocial= "INSERT INTO lideres_sociales (codigo, numero_documento, nombres, apellidos,  telefono_celular, direccion, correo, departamento_id, municipio_id, celular_adicional, direccion_frecuente)VALUES('$codigo', '$nDocumento', '$nombres', '$apellidos', '$celular', '$direccion', '$correo', '$departamento', '$municipio', '$celularAdicional', '$direccionFrecuente')";
mysqli_query($con,$insLiderSocial) or die(mysqli_error());

echo "<script language='Javascript'> window.location='registroExistoso.php';
      </script>";

?>