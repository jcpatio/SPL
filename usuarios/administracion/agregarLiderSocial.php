<?php include('header.php'); ?>
<script>
	$( document ).ready(function() {
        $('#departamento').change( function () {

					$.ajax( {

						type: 'POST',
						url: '../../acciones/municipios.php',
						data: {
							departamentoId: +$( "select[id=departamento]" ).val()
						},
						success: function ( resultado ) {
							$( '#municipio' ).html( resultado ).fadeIn();
						}
					} );

        });
    })
</script>
<div class="card">
    <div class="card-header bg-dark text-light">
        <a href="lideresSociales.php"><button type="button" class="btn btn-light btn-sm"><i class="fas fa-chevron-circle-left"></i> Volver</button></a> <i class="far fa-address-card"></i> Agregar Lider
    </div>
    <div class="card-body">
        <form action="guardarLiderSocial.php" name="formLider" id="formLider" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputEmail4">N° Documento</label>
                    <input type="number" class="form-control" id="nDocumento" name="nDocumento">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Nombres</label>
                    <input type="text" class="form-control" id="nombres" name="nombres">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" >
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Celular</label>
                    <input type="number" class="form-control" id="celular" name="celular" >
                </div>
                
                <div class="form-group col-md-5">
                    <label for="inputPassword4">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" >
                </div>
                
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" >
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Departamento</label>
                    <div class="form-group">
								<select id="departamento" name="departamento" class="form-control">
									<?php      

										$mysqli=conectar();

											$query = $mysqli -> query ("SELECT * FROM departamentos");
												echo '<option value="">Seleccione</option>';
												while ($valores = mysqli_fetch_array($query)) {                       
													echo '<option value="'.$valores['departamento_id'].'"> '.$valores['nombre_departamento'].'</option>';                          
												}
									  ?>
							    </select>   
				    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="inputPassword4">Municipio</label>
                    <div class="form-group">
								<select id="municipio" name="municipio" class="form-control">
									
							    </select>   
				    </div>
                </div>
                
                <div class="form-group col-md-3">
                    <label for="inputPassword4">Celular Adicional</label>
                    <input type="number" class="form-control" id="celularAdicional" name="celularAdicional" >
                </div>
                
                <div class="form-group col-md-5">
                    <label for="inputPassword4">Direccion Frecuente</label>
                    <input type="text" class="form-control" id="direccionFrecuente" name="direccionFrecuente" >
                </div>
                
            </div>
           
           <center> <button type="submit" class="btn btn-success">Guardar</button></center>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>