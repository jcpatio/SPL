<?php
header('Access-Control-Allow-Origin: *');
include ("../conexiones/conexion.php");
$con=conectar();
$fechar = date( "Y-m-d H:i:s" );

$remitente = $_GET['phone'];
$mensaje = $_GET['text'];


if($mensaje==1){
    
    $qLider = "SELECT * FROM  lideres_sociales where telefono_celular='$remitente'";	
    $rLider = mysqli_query($con,$qLider) or die(mysqli_error());		
    $rowLider = mysqli_fetch_assoc($rLider);

	$liderSocialId = $rowLider['lider_social_id'];
	$nombres = $rowLider['nombres'];
    
    ////insetamos la informacion del mensaje
    $qMensaje = "INSERT INTO  mensajes_recibidos (telefono_celular, mensaje_texto, lider_social_id,fechar) VALUES('$remitente','$mensaje','$liderSocialId','$fechar')";
    mysqli_query( $con, $qMensaje )or die( mysqli_error() );	

    $mensajeId = mysqli_insert_id($con);
    
    ////insetamos la informacion del mensaje
    $qDenuncias = "INSERT INTO  denuncias (lider_social_id, denuncia) VALUES('$liderSocialId','$mensaje','$fechar')";
    mysqli_query( $con, $qDenuncias )or die( mysqli_error() );
    
    $mensajeTXT= 'Describa la agresión';
    $nombreLider= $nombres.' '.$mensajeTXT;
	$textFormat = rawurlencode($nombreLider);
	$telefonoCelular= $rowLider['telefono_celular'];
    
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "http://192.168.137.177:9090/sendsms?phone=$telefonoCelular&text=$textFormat&password="); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch); 
	curl_close($ch);  
    
}

if($mensaje!=1 or $mensaje!=2){

$qLider = "SELECT * FROM  lideres_sociales where codigo='$mensaje'";	
$rLider = mysqli_query($con,$qLider) or die(mysqli_error());		
$rowLider = mysqli_fetch_assoc($rLider);

	$liderSocialId = $rowLider['lider_social_id'];
	$nombres = $rowLider['nombres'];


////insetamos la informacion del mensaje
$qMensaje = "INSERT INTO  mensajes_recibidos (telefono_celular, mensaje_texto, lider_social_id,fechar) VALUES('$remitente','$mensaje','$liderSocialId','$fechar')";
mysqli_query( $con, $qMensaje )or die( mysqli_error() );	

$mensajeId = mysqli_insert_id($con);


/// enviamos respuesta
    
    $mensajeTXT= '-Bienvenido al Sistema de Protección a Líderes selecciona una opcion: 1-Denuncias; 2-Amenazas ';    
    $nombreLider= $nombres.' '.$mensajeTXT;
	$textFormat = rawurlencode($nombreLider);
	$telefonoCelular= $rowLider['telefono_celular'];
    //http://10.0.56.83:9090/sendsms?phone=$telefonoCelular&text=$textFormat&password=
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "http://192.168.137.177:9090/sendsms?phone=$telefonoCelular&text=$textFormat&password="); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch); 
	curl_close($ch);  

}
?>