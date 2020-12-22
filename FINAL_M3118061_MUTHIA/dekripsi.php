<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<body>

<?php
error_reporting(E_ALL);
include 'koneksi.php';

echo "<br><h2><center> Tabel Dekripsi </center></h2><br>"
?>
<div class="container"style="font-family:verdana">
	<div class="row" style="margin-top:20px">
		<div class="col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3">

		<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th>ID</th>
				<th>FULLNAME</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>KOTA LAHIR</th>
				<th>TANGGAL LAHIR</th>
			</tr>
		</thead>
		<tbody>
		<?php 
	    if(isset($_GET['id_admin'])){
			$id_admin    =$_GET['id_admin'];
		}
		else{
			die ("Error. No ID Selected!");    
		}
		
		$data = mysqli_query($conn, "SELECT * FROM admin WHERE id_admin = '$id_admin'");
		
		while($row= mysqli_fetch_array($data)){
			include "vigenere/lib/lib.php";
			$hasil_ciper = str_replace(" ", "", $row['fullname']);
			$kunci = str_replace(" ", "", "data");
			$panjang_kunci = strlen($kunci);
			$panjang_ciper = strlen($hasil_ciper);
			$index_x = 0;
			$index_y = 0;
			$hasil_konversi = array();
			$hasil_akhir = "";
			while ($index_x < $panjang_ciper) {
				$x = substr($hasil_ciper, $index_x, 1);
				$y = substr($kunci, $index_y, 1);
				$konversi_x = huruf_ke_angka($x);
				$konversi_y = huruf_ke_angka($y);
				if ($konversi_x >= $konversi_y) {
					$hasil = $konversi_x - $konversi_y;
				}else 
				{
					$hasil = $konversi_x + (26 - $konversi_y);
				}
				$hasil_konversi[$index_x] = angka_ke_huruf($hasil);
				$index_x++;
				$index_y++;
				if ($index_y == $panjang_kunci) {
					$index_y = 0;
				}
			}
			$i = 0;
			$hasil_akhir = "";
			while ($i < $index_x) {
				$hasil_akhir =$hasil_akhir . $hasil_konversi[$i];
				$i++;
			}

		?>
			<tr>
				<td><?php echo $row['id_admin'] ?></td>
				<td><?php echo $hasil_akhir ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['password'] ?></td>
				<td><?php $key = 2;
						  $isi = $row['kota_lahir'];
						  for($i=0;$i<strlen($isi);$i++){
							  $kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
							  $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
							  $c[$i]=chr($b[$i]); //rubah desimal ke ASCII
							  echo $c[$i];
							}
					?>
				</td>
				<td><?php echo $row['tgl_lahir'] ?></td>
			</tr>
		<?php } ?>
	</tbody>
	</table>
</div>
</div>
</body>

<a class="btn btn-primary" href="index.php" role="button">Logout</a>

</html>