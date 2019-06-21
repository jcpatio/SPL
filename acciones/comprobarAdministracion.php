<?php 

if (!isset($_SESSION)) 
{  
    session_start();
}  
$autorizacion=2;
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  $isValid = False; 
  
if (!empty($UserName)) { 

  $arrUsers = Explode(",", $strUsers); 
  $arrGroups = Explode(",", $strGroups); 


    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 


    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 


    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 

  } 
  return $isValid; 
}
if (!((isset($_SESSION['usuario'])) && (isAuthorized("",$autorizacion, $_SESSION['usuario'], $_SESSION['tipoUsuario']))))
{  
 header("Location: ../../index.php?msg=4");  
 exit;  
} 
else{
    
    include('../../conexiones/conexion.php');
    $con=conectar();
    
    $token=$_SESSION['token'];
    $qTipoUsuario = "SELECT * FROM sesiones WHERE token = '$token'";
    $rTipoUsuario = $con->query( $qTipoUsuario );
    $rowTipoUsuario = $rTipoUsuario->fetch_assoc();
    
    $activo= $rowTipoUsuario[ 'activo' ];
    
   if($_SESSION['tipoUsuario']!=2 ){
     header("Location: ../../index.php?msg=2");   
   }
    
   if($activo==0 ){
     header("Location: ../../index.php?msg=2");   
   }
    
} 


?>