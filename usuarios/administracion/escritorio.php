<?php include('header.php'); ?>
<script>
$( document ) . ready( function () {
    $( '#lideresSociales' ) . click( function () {
        document.location = 'lideresSociales.php';
		return true;

    } );
    
    $( '#denuncias' ) . click( function () {
        document.location = 'denunciarAmenaza.php?tipo=2';
		return true;
    } );
} );
</script>
<div class="row">
    <div class="col-sm-2">
    
</div>
  <div class="col-sm-3" id="lideresSociales">
    <div class="card mb-3 bg-success text-light">
      <div class="card-body">
        <center> <h1><i class="far fa-address-card"></i></h1>
        <h5 class="card-title">Lideres Sociales</h5>
      </div>
    </div>
  </div>
    
  <div class="col-sm-3" id="denuncias">
    <div class="card mb-3 bg-danger text-light">
      <div class="card-body">
        <center> <h1> <i class="fas fa-book"></i></h1></center>
        <center><h5 class="card-title">Denuncias</h5>
      </div>
    </div>
  </div>
      
  <div class="col-sm-3" id="Amenazas">
    <div class="card mb-3 bg-danger text-light">
      <div class="card-body">
        <center> <h1> <i class="fas fa-book-dead"></i></h1></center>
        <center><h5 class="card-title">Amenazas</h5>
      </div>
    </div>
  </div>  
<div class="col-sm-2">
    
</div>
      
  
    
</div>

<?php include('footer.php'); ?>

