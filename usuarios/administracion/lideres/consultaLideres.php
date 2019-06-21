<?php

header('Access-Control-Allow-Origin: *');

include('../../../conexiones/conexion.php');
    $con=conectar();
	$query1="SELECT * FROM lideres_sociales";
	$busccarEmpresa=$con->query($query1);
		
	$tabla = "";
require('../../../acciones/consultas.php');
	
while($fila= $busccarEmpresa->fetch_assoc()){		

		$liderSocialId = $fila['lider_social_id'];
        $codigo = $fila['codigo'];	
        $nDocumento = $fila['numero_documento'];	
		$nombres = $fila['nombres'];
		$apellidos = $fila['apellidos'];	
		$departamentoId = $fila['departamento_id'];	
		$municipioId = $fila['municipio_id'];	
		$estadoId = $fila['estado_id'];	
		
       
		$departamento=consultarDepartamento($departamentoId);
		$municipio=consultarMunicipio($municipioId);
		$estado=consultarEstado($estadoId);
            
        $descripcionEstado= $estado['estado'];
        $color=$estado['color'];
       // $fechaNacimientoAlumno= date('d-m-Y',strtotime($fechaNacimientoAlumno));
    
       
		$ver = '<a href=\"verPerfilAlumno.php?p=alumnos&&alumnoId='.$liderSocialId.'&&codigo='.$codigo.'\" ><i class=\"fas fa-search\"></i></a>';
		
		$tabla.='{
				  "liderSocialId":"'."<center>".$codigo."</center>".'",
				  "nDocumento":"'."<center>".$nDocumento."</center>".'",
				  "nombres":"'."<center>".trim($nombres)."</center>".'",
				  "apellidos":"'."<center>".trim($apellidos)."</center>".'",		
				  "departamento":"'."<center>".trim($departamento['nombreDepartamento'])."</center>".'",		
				  "municipio":"'."<center>".trim($municipio['nombreMunicipio'])."</center>".'",		
				  "estado":"'."<center><font color=$color><b>".$descripcionEstado."</b></font></center>".'",		
				  "acciones":"'."<center>".$ver."</center>".'"
				},';
	
}	

	//eliminamos la coma que sobra
	$tabla = substr($tabla,0, strlen($tabla) - 1);

	echo '{"data":['.$tabla.']}';	


?>