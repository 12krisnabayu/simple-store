<!DOCTYPE html>
<html>
<head>
	<title>Form Belanja</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<?php 
		session_start();
		if (isset($_POST['barang'])) {
			$barang = $_POST['barang'];
		}
		switch ($barang) {
			case 1:
				$kdbrg="JC1";$nmbrg="Jamur Crispy";$hrgbrg=10000;
				break;
			case 2:
				$kdbrg="UC2";$nmbrg="Usus Crispy";$hrgbrg=8000;
				break;
			case 3:
				$kdbrg="KC3";$nmbrg="Kentang Crispy";$hrgbrg=7000;
				break;
			default:
				break;
		}
	?>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark position">
	  <ul class="navbar-nav">
	      <a class="navbar-brand text-white">Form Belanja Makanan Ringan</a>
	   </ul>
</nav>
<div class="row" style="margin: 100px 0px 100px; ">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  	<form action="HasilBelanja.php" method="post">
	  <?php echo 
	  '<div class="form-group">
	    <label for="kdbrg">Kode Barang</label>
	    <input type="text" class="form-control" id="kdbrg" readonly value="'.$kdbrg.'" name="kodebrg">
	  </div>
	  <div class="form-group">
	    <label for="nmbrg">Nama Barang</label>
	    <input type="text" class="form-control" id="nmbrg" readonly value="'.$nmbrg.'" name="namabrg">
	  </div>'
	  ; ?>
	  <div class="form-group">
		  <label for="rasa">Rasa</label>
		  <select class="form-control" id="rasa" name="rasamkn">
		    <option>Balado</option>
		    <option>Sapi Panggang</option>
		    <option>Ayam Panggang</option>
		    <option>Super Pedas</option>
		    <option>Original</option>
		  </select>
		</div>
	  <div class="form-group was-validated">
	    <label for="jmlbrg">Jumlah Barang</label>
	    <input type="number" class="form-control" name="jumlahbrg" placeholder="Enter jumlah" onkeypress="return hanyaAngka(event)" value="" min="1" max="100" required>
      	<div class="valid-feedback">Valid.</div>
		<div class="invalid-feedback">Please fill out this field.</div>
	  </div>
	  <?php 
	  echo '
	  <div class="form-group">
		<label for="hrg">Harga</label>
		<div class="input-group mb-3">
			<div class="input-group-prepend">
		      <span class="input-group-text">Rp. </span>
		    </div>
		    <input type="text" class="form-control" id="hrg" readonly value="'.$hrgbrg.'" name="harga">
		</div>
	  </div>';
	   ?>
	  <div class="form-group">
		    <label><input type="checkbox" class="form-check-input" name="status">Member/Bukan ?</label>
		</div>
		<br>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
  <div class="col-sm-2"></div>
</div>

</body>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>
<script>
// Disable form submissions if there are invalid fields
/*(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();*/
</script>
</html>