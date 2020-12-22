<?php
include "../koneksi.php";

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);
$kota_lahir   = $_POST["kota_lahir"];
$tgl_lahir	  = $_POST["tgl_lahir"];

//vigenere
include "../vigenere/lib/lib.php";
$kunci = str_replace(" ", "", "data");
$plain = str_replace(" ", "", $fullname);
$panjang_plain = strlen($plain);
$panjang_kunci = strlen($kunci);
$index_x = 0;
$index_y = 0;
$hasil_ciper = array();
$hasil_akhir = "";

while ($index_x < $panjang_plain) {
	$x = substr($plain, $index_x, 1);
	$y = substr($kunci, $index_y, 1);
	$hasil_ciper[$index_x] = 
	$tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
	$index_x++;
	$index_y++;
	if ($index_y == $panjang_kunci) {
		$index_y = 0;
	}
}
$i = 0;

while ($i < $index_x) {
	$hasil_akhir .= $hasil_ciper[$i];
	$i++;
}//end vigenere

//caesar
$kalimat = $kota_lahir;
$key = 2;
for ($i = 0; $i < strlen($kalimat); $i++) {
	$kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
	$b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
	$c[$i] = chr($b[$i]); //rubah desimal ke ASCII
}

$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) {
	//echo $c[$i];
	$hsl = $hsl . $c[$i];
}//end caesar

//menambahkan data ke tabel admin database skd
$sql = "INSERT INTO admin (fullname, username, password, kota_lahir, tgl_lahir) 
VALUES ('$hasil_akhir', '$username', '$password_md5', '$hsl', '$tgl_lahir')"; 

//jika data yang diisikan sesuai atau benar maka akan muncul pesan New record created successfully
if ($conn->query($sql) === TRUE) {
	echo "<h2>Sukses !!</h2>";
	echo "<br>";
	echo "<h3>Silahkan kembali ke homepage untuk login</h3>";
}
else {
	echo "Error : " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<!-- untuk memberikan tampilan bootstrap dan botton login untuk berpindah ke halaman login -->
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>

<a class="btn btn-primary" href="../index.php" role="button">Logout</a>

</html>
