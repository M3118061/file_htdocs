<?php
include "koneksi.php";

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);

//menambahkan data ke tabel customer database skd
$sql = "INSERT INTO customer (fullname, username, password) VALUES ('$fullname', '$username', '$password_md5')"; 

//jika data yang diisikan sesuai atau benar maka akan muncul pesan New record created successfully
if ($conn->query($sql) === TRUE) {
	echo "<h2>New record created successfully</h2>";
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

<a class="btn btn-primary" href="login.php" role="button">Form Login</a>

</html>
