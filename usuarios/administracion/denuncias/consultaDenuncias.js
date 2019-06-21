$(document).ready(function() {			   
	$('#tablaBusqueda').DataTable({
		"locale": {
			"format": "YYYY-MM-DD",
		},
		"order": [[ 0, 'desc' ]],
		
		"aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [3], }
        ],
		
        searching: true,
        dom: 'l-B'   ,
        buttons: [  {
                extend: 'print',
				text: '<i class="fas fa-print"></i>',
                title:'Denuncias',
                titleAttr: 'Imprimir',
                className: 'btn btn-sm export imprimir',
                exportOptions: {					
                    columns: ':visible'
                }
            }, {
                extend: 'pdf',
                title:'Denuncias',
                titleAttr: 'Pdf',
                className: 'btn btn-sm export pdf',
                exportOptions: {
                    columns: ':visible'
                }
            },{
                extend: 'excel',
                title:'Denuncias',
                titleAttr: 'Excel',
                className: 'btn btn-sm export excel',
                exportOptions: {
                    columns: ':visible'
                }
            }, {
                extend: 'colvis',
                titleAttr: 'colvis',
                className: 'btn btn-sm',
                
            }],
		responsive: true, 
		"bDeferRender": true,	
		"sPaginationType": "full_numbers",
		"ajax": {
			"url": "denuncias/consultaDenuncias.php",
        	"type": "POST"
		},					
		"columns": [
			{ "data": "denunciaId" },
			{ "data": "nDocumento" },
			{ "data": "nombres" },
			{ "data": "apellidos" },
			{ "data": "denuncia" },
			{ "data": "acciones"}
			],
		"oLanguage": {
            "sProcessing":     "Procesando...",
		    "sLengthMenu": 'Mostrar <select class="form-control">'+
		        '<option value="10">10</option>'+
		        '<option value="30">30</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">All</option>'+
		        '</select> registros',    
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Filtrar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Por favor espere - cargando datos...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
        }
	});
});