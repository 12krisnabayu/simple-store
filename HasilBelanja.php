<!DOCTYPE html>
<html>
<head>
	<title>Struk Belanja</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<?php 
	session_start();
	$kode = $_POST['kodebrg'];
	$nama = $_POST['namabrg'];
	$rasa = $_POST['rasamkn'];
	$jumlah = $_POST['jumlahbrg'];
	$harga = $_POST['harga'];

	$status = (isset($_POST['status'])) ? true : false;
	switch ($jumlah) {
		case $jumlah>=1 && $jumlah<=10 :
			$pot=0.05;
			break;
		case $jumlah>=11 && $jumlah<=20 :
			$pot=0.07;
			break;
		case $jumlah>=21 && $jumlah<=30 :
			$pot=0.15;
			break;
		case $jumlah>=31 :
			$pot=0.5;
			break;
	}
	if($status==true){
		$pot=$pot+0.05;
	}
	$rpot=$pot*$harga;
	$potot=$rpot*$jumlah;
	$hartot=($jumlah*$harga)-$potot; 
	?>
</head>
<body style="background-color: #d1d1d1;">
<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark position">
	  <ul class="navbar-nav">
	      <a class="navbar-brand text-white">Hasil Belanja</a>
	   </ul>
</nav>
<div style=" margin: 100px; background-color: #ffffff; padding-bottom: 30px; border: 2px solid grey; border-radius: 10px;">
	<h1 style="padding: 20px 40px 15px;">Struk Belanja</h1>
	<hr style="background-color: grey;">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-2">
			<h5>Kode Makanan</h5>
			<h5>Nama Makanan</h5>
			<h5>Rasa</h5>
			<h5>Jumlah</h5>
			<h5>Harga Makanan</h5>
			<h5>Diskon</h5>
			<h5>Potongan Harga</h5>
			<h5>Total</h5>
		</div>
		<div class="col-sm-8">
			<?php echo'
			<h5>: '.$kode.'</h5>
			<h5>: '.$nama.'</h5>			
			<h5>: '.$rasa.'</h5>
			<h5>: '.$jumlah.'</h5>
			<h5>: Rp. '.$harga.',00</h5>
			<h5>: '.($pot*100).'%</h5>
			<h5>: Rp. '.$potot.',00</h5>
			<h5>: Rp. '.$hartot.',00</h5>';
			?>
		</div>
		<div class="col-sm-1"></div>
			 
			
	</div>
</div>
</body>
</html>
