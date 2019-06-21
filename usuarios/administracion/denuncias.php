<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="../../css/datetable/dataTables.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="../../css/datetable/buttons.bootstrap4.min.css"/>

<script  src="../../js/dateTable/jquery.dataTables.js"></script>
<script  src="../../js/dateTable/dataTables.bootstrap4.js"></script>

<script  src="../../js/dateTable/dataTables.buttons.min.js"></script>
<script  src="../../js/dateTable/buttons.bootstrap4.min.js"></script>
<script  src="../../js/dateTable/jszip.min.js"></script>
<script  src="../../js/dateTable/pdfmake.min.js"></script>
<script  src="../../js/dateTable/vfs_fonts.js"></script>
<script  src="../../js/dateTable/buttons.html5.min.js"></script>
<script  src="../../js/dateTable/buttons.print.min.js"></script>
<script  src="../../js/dateTable/buttons.colVis.min.js"></script>
<script  src="denuncias/consultaDenuncias.js"></script>

<script>
    
		
	$(document).ready(function() {
		
	   $('[data-toggle="tooltip"]').tooltip(); 
		
	   var table = $('#tablaBusqueda').DataTable();
		
		table.buttons().container()
        .appendTo( '#tablaBusqueda_wrapper .col-md-6:eq(0)' );

		
		$('#codigo').on( 'keyup', function () {
			table
				.columns( 0 )
				.search( this.value )
				.draw();
		} );
		
		
		$('#nDocumento').on( 'keyup', function () {
			table
				.columns( 1 )
				.search( this.value )
				.draw();
		} );
		
		
		$('#nombres').on( 'keyup', function () {
			table
				.columns( 2 )
				.search( this.value )
				.draw();
		} );
		
        
		$('#apellidos').on( 'keyup', function () {
			table
				.columns( 3 )
				.search( this.value )
				.draw();
		} );
		
	   $('#departamento').on( 'change', function () {
			table
				.columns( 4 )
				.search( this.value )
				.draw();
		} );
		
	   $('#municipio').on( 'change', function () {
			table
				.columns( 5 )
				.search( this.value )
				.draw();
		} );
		
	
		
		
	} );	
    </script> 	
			
<!-- CARD PRINCIPAL-->
<div class="card ">
	<!-- CARD encabezado-->
		<div class="card-header bg-dark text-light"><i class="far fa-address-card"></i> <b>Denuncias</b> <a href="agregarLiderSocial.php"><button type="button" class="btn btn-light btn-sm"><i class="far fa-address-card"></i> Agregar Denuncia</button></a>
			
		</div>
		<!-- fin CARD encabezado-->
		
			<div class="card-body bg-light">
					<form method='POST' id='myform' name='form_agorden' class='cssform' target="frame_rejilla">
						<div class="form-row">

							<div class='form-group col-sm-1'>
								<b>Número:</b> <input class='form-control' id='numero' type='text' name='numero' value='' autocomplete='off' placeholder='' autofocus/>
							</div>

							<div class='form-group col-sm-2'>
								<b>N° Documento:</b> <input class='form-control' id='nDocumento' type='text' name='nDocumento' value='' autocomplete='off' placeholder='' autofocus/>
							</div>

							<div class='form-group col-sm-3'>
								<b>Nombres:</b> <input class='form-control' id='nombres' type='text' name='nombres' value='' autocomplete='off' placeholder=''/>
							</div>
							
							<div class='form-group col-sm-3'>
								<b>Apellidos:</b> <input class='form-control' id='apellidos' type='text' name='apellidos' value='' autocomplete='off' placeholder=''/>
							</div>
                            
						</div>

					</form>

			</div>
</div>
<!--Fin CARD PRINCIPAL-->
		
<p></p>
 <table id="tablaBusqueda" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 12px;" >
        <thead class="thead-dark">
        <tr>
            <th>N°</th>
            <th>N° Documento</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Denuncias</th>   
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        
 </table> 		
		
		
			<p></p>
			<br></br>

<?php include('footer.php'); ?>

