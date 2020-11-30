<?php
include 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);

$data = mysqli_query($conn, "SELECT * FROM customer WHERE username='$username' and password='$password_md5'");

$aName1 = mysqli_fetch_assoc($data);

//menghitung jumlah data yang ditemukan
$cek =  mysqli_num_rows($data);

$uname = $aName1['username'];

 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
echo "<h1> Login berhasil, selamat datang " . $uname . "</h1>";
}else{
	header("location:login.php?pesan=gagal");
}

?>

<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>

<a class="btn btn-primary" href="index.php" role="button">Form Register</a>
&nbsp;
<a class="btn btn-primary" href="login.php" role="button">Logout</a>

</html>