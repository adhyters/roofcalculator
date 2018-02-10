<!DOCTYPE html>
<html>
<head>
	<title>KALKULATOR GENTENG TREVIZO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'genteng':
				$hasil = ($bil1+2)*($bil2+2)/0.819*1.62;
			break;
			case 'besi':
				$hasil = $bil1+$bil2;
			break;
			case 'canal':
				$hasil = $bil1-$bil2;
			break;
			case 'reng':
				$hasil = $bil1*$bil2;
			break;
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR GENTENG METAL</h2>
		<a class="brand" href="https://www.trevizo.co.id">Trevizo Indonesia</a>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Panjang Ruangan / Meter">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Lebar Ruangan / Meter">
			<select class="opt" name="operasi">
				<option value="genteng">Genteng</option>
				<option value="besi">Besi Ulir</option>
				<option value="canal">Canal</option>
				<option value="reng">Reng</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">							
		</form>
		
		Total Kebutuhan Genteng :
		
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>	
		 
		LEMBAR 
		 
	</div>
	
<p style="text-align:center"> All Right Reserved &copy; | Trevizo Indonesia | Dev. 
<a href="https://www.facebook.com/adhyters" target="_blank">Tomi Aditia</a>&trade;</p>
	
</body>
</html>