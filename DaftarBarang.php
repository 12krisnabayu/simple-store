<!DOCTYPE html>
<html>
<head>
	<title>Daftar Makanan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark position">
	  <ul class="navbar-nav">
	      <a class="navbar-brand text-white" href="DaftarBarang.php">Daftar Makanan Ringan</a>
	   </ul>
</nav>
<div class="container" style="margin-top: 100px;">
<div class="row">
	<div class="col-sm-4">
		<div class="card" style="width:300px">
		    <img class="card-img-top" src="img/gmbr1.jpg" alt="Card image" style="width:100%">
		    <div class="card-body">
		      <form action="FormBelanja.php" method="post">
			      <h4 class="card-title">Jamus Crispy</h4>
			      <p class="card-text">Kemasan 180 gram</p>
			      <h5>Rp 10.000</h5>
			      <button class="btn btn-primary" type="submit" name="barang" value="1">Beli Barang</button>
			  </form>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
	<div class="card" style="width:300px">
	    <img class="card-img-top" src="img/gmbr2.jpg" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <form action="FormBelanja.php" method="post">
		      <h4 class="card-title">Usus Crispy</h4>
		      <p class="card-text">Kemasan 180 gram</p>
		      <h5>Rp 8.000</h5>
		      <button class="btn btn-primary" type="submit" name="barang" value="2">Beli Barang</button>
		  </form>
		  </div>
		</div>
	</div>
	<div class="col-sm-4">
	<div class="card" style="width:300px">
	    <img class="card-img-top" src="img/gmbr3.jpg" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <form action="FormBelanja.php" method="post">
		      <h4 class="card-title">Kentang Crispy</h4>
		      <p class="card-text">Kemasan 180 gram</p>
		      <h5>Rp 7.000</h5>
		      <button class="btn btn-primary" type="submit" name="barang" value="3">Beli Barang</button>
		</form>
	    </div>
	</div>	
	</div>
</div>		

</body>
</html>