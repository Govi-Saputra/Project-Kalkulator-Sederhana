<!DOCTYPE html>
<html>
<head>
<div class="kalkulator">
	<title>Kalkulator Sederhana</title>
	<h2 class="judul">KALKULATOR SEDERHANA</h2>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="index.php">		
<table>
			<input type="text" name="a" class="bil" autocomplete="off" placeholder="Masukkan Angka Pertama">
			<br>
			<input type="text" name="b" class="bil" autocomplete="off" placeholder="Masukkan Angka Kedua">
			<br><br>
			<input type="submit" name="Hitung" value="Hitung" class="tombol">	
<br><br>
<input type="text" name = "gov" value= "<?php echo "Hasil Penjumlahan " ?>" class="gov">
			<input type="text" value= 
			"<?php if (isset($_POST['Hitung'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
			echo $hasil = $a+$b; }?> "class="Nilai">
				
<br>
<input type="text" name = "gov" value= "<?php echo "Hasil Pengurangan " ?>" class="gov">
			<input type="text" value= 
			"<?php if (isset($_POST['Hitung'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
			echo $hasil = $a-$b; }?> "class="Nilai">
<br>
<input type="text" name = "gov" value= "<?php echo "Hasil Perkalian " ?>" class="gov">
			<input type="text" value= 
			"<?php if (isset($_POST['Hitung'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
			echo $hasil = $a*$b; }?> "class="Nilai">
<br>
<input type="text" name = "gov" value= "<?php echo "Hasil Pembagian " ?>" class="gov">
			<input type="text" value= 
			"<?php if (isset($_POST['Hitung'])){
				$a = $_POST['a'];
				$b = $_POST['b'];
			echo $hasil = $a/$b; }?> "class="Nilai">
<br>
			</form>
	</div>
</body>
</html>