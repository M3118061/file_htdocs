<html>
<head>
<title>My Form</title>
</head>
<body>
<?php 
	// echo "Username : $username </br>";
	// echo "Email : $email</br>";
	// echo "Kota Asal : $kota_asal </br>";
	// echo "Jenis Kelamin : $jk </br>";
	// echo "Hobby : $hobby </br>";
	// echo "Image : $image </br>";
	// echo date(DATE_RFC822, time());
	// echo " </br>Alamat : $alamat </br>";
?>
<h3>Your form was successfully submitted!</h3>

<h3>Your file was successfully uploaded!</h3>

<ul>
	<?php foreach ($upload_data as $item => $value):?>
	<li><?php echo $item;?>: <?php echo $value;?></li>
	<?php endforeach; ?>
</ul>

<p><?php echo anchor('mahasiswa/inputmhs', 'Try it again!'); ?></p>

</body>
</html>