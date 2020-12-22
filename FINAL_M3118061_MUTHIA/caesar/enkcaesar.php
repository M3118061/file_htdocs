<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<?php 
	$kalimat = $_GET["kata"]; 
	$key = $_GET["key"]; 
	for ($i = 0; $i < strlen($kalimat); $i++){     
	$kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal     
	$b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi     
	$c[$i] = chr($b[$i]); //rubah desimal ke ASCII 
	}
	for ($i = 0; $i < strlen($kalimat); $i++)
	{     
		$kalimat[$i]; } ; 
		$hsl = ''; 
		for ($i = 0; $i < strlen($kalimat); $i++) 
		{     
			$c[$i];     
			$hsl = $hsl . $c[$i]; 
		} 
		echo "<br>"; //simpan data di file 
		$fp = fopen("enkripsi.txt", "w"); 
		fputs($fp, $hsl); fclose($fp);
?>

<body>
<div class="container"style="font-family:verdana">
	<div class="row" style="margin-top:20px">
		<div class="col-xs-12 col-sm-12 col-md-12 col-sm-offset-2 col-md-offset-3">
		<?php echo "<h2><center> Tabel Enkripsi dan Dekripsi Caesar Cipher </center></h2><br>"; ?>
		<table class="table table-striped table-dark">
			<tr>
				<td><center>Kalimat Asli</center></td>
				<td><center>Hasil Enkripsi</center></td>
			</tr>
		
		<tr>
			<td><center><?php echo $kalimat ?></center></td>
			<td><center><?php echo $hsl ?></center></td>
		</tr>
		</tbody>
	</table>
</div>
</div>

</body>
<a class="btn btn-primary" href="../index.php" role="button">Logout</a>

</html>