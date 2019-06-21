<?php

header('Access-Control-Allow-Origin: *');

include('../../../conexiones/conexion.php');
    $con=conectar();
	$query1="SELECT * FROM denuncias";
	$busccarEmpresa=$con->query($query1);
		
	$tabla = "";
require('../../../acciones/consultas.php');
	
while($fila= $busccarEmpresa->fetch_assoc()){		

		$denunciaId = $fila['denuncia_id'];	
		$liderSocialId = $fila['lider_social_id'];
		$denuncia = $fila['denuncia'];	
		
       
		$liderSocial=consultarLiderSocial($liderSocialId);
		
            
       // $fechaNacimientoAlumno= date('d-m-Y',strtotime($fechaNacimientoAlumno));
    
       
		$ver = '<a href=\"verPerfilAlumno.php?p=alumnos&&alumnoId='.$liderSocialId.'&&codigo='.$codigo.'\" ><i class=\"fas fa-search\"></i></a>';
		
		$tabla.='{
				  "liderSocialId":"'."<center>".$codigo."</center>".'",
				  "nDocumento":"'."<center>".$nDocumento."</center>".'",
				  "nombres":"'."<center>".trim($liderSocial['nombres'])."</center>".'",
				  "apellidos":"'."<center>".trim($liderSocial['apellidos'])."</center>".'",		
				  "denuncia":"'."<center>".trim($denuncia)."</center>".'",				
				  "acciones":"'."<center>".$ver."</center>".'"
				},';
	
}	

	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	


?>