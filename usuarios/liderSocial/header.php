<?php include('../../acciones/comprobarLiderSocial.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SPL - Sistema de Proteccion a Lideres</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="author" content="JUAN CARLOS PATIÑO">
<link rel="icon" href="../../img/icono/favicon.ico">
    
<!-- estilos css-->
<link href="../../css/4/bootstrap.min.css" rel="stylesheet">
<link href="../../css/all.css" rel="stylesheet">

<script src="../../js/jquery-3.2.1.slim.min.js" ></script>
<script src="../../js/popper.min.js" ></script>



<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.js"></script>
<script src="../../js/vNombre.js"></script>
<script>
	function mayus(e) {
    e.value = e.value.toUpperCase();
	}
</script>	
<body>
 <?php 
 	switch ($_SESSION['tipoUsuario']) {
 		
		case 1:
		include '../../menus/menuLiderSocial.html';
		break;
 	}
 	
 ?>
<div class="container">  
<p></p>
<br>
<br>
<br>