<?php include('header.php'); ?>
<script>
$( document ) . ready( function () {
    $( '#agresion' ) . click( function () {
        document.location = 'denunciarAgresion.php?tipo=1';
		return true;

    } );
    
    $( '#amenaza' ) . click( function () {
        document.location = 'denunciarAmenaza.php?tipo=2';
		return true;
    } );
} );
</script>
<div class="row">
    <div class="col-sm-3">
    
</div>
  <div class="col-sm-3" id="agresion">
    <div class="card mb-3 bg-warning text-light">
      <div class="card-body">
        <center> <h1><i class="fas fa-angry"></i></h1>
        <h5 class="card-title">Denunciar Agresión</h5>
      </div>
    </div>
  </div>
    
  <div class="col-sm-3" id="amenaza">
    <div class="card mb-3 bg-danger text-light">
      <div class="card-body">
        <center> <h1> <i class="fas fa-skull-crossbones"></i></h1></center>
        <center><h5 class="card-title">Denunciar Amenzas</h5>
      </div>
    </div>
  </div>
    
<div class="col-sm-3">
    
</div>
</div>

<?php include('footer.php'); ?>

