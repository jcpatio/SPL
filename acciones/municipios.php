<?php
include '../conexiones/conexion.php';
$con = conectar();

$departamentoId = $_POST['departamentoId'];

$query = $con->query( "SELECT * FROM municipios where departamento_id='$departamentoId'" );
echo '<option value="">Seleccione</option>';
while ( $valores = mysqli_fetch_array( $query ) ) {
	echo '<option value="' . $valores[ 'municipio_id' ] . '"> ' . $valores[ 'nombre_municipio' ] . '</option>';
}
	
?>