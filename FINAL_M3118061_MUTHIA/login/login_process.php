<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<body>

<?php
include '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);

$data = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' and password='$password_md5'");

$aName1 = mysqli_fetch_assoc($data);

$sql = 'SELECT id_admin, fullname, username, password, kota_lahir, tgl_lahir FROM admin';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//menghitung jumlah data yang ditemukan
$cek =  mysqli_num_rows($data);

$uname = $aName1['username'];

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
echo "<br>";
echo "<h3><center> Login berhasil, selamat datang " . $uname . "</center></h3><br>";
echo "<h4><center> Data Admin </center></h4><br>";
}else{
	header("location:login.php?pesan=gagal");
}

?>

	 <table class="table table-striped table-dark">
		<tr>
			<th>ID</th>
			<th>FULLNAME</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>KOTA LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th><center>DETAIL</center></th>
		</tr>
	<?php 
		include '../koneksi.php';
		
		$data = mysqli_query($conn,"select * from admin");
		while($row = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $row['id_admin'] ?></td>
				<td><?php echo $row['fullname'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<td><?php echo $row['password'] ?></td>
				<td><?php echo $row['kota_lahir'] ?></td>
				<td><?php echo $row['tgl_lahir'] ?></td>
				<td><center> <a href="../dekripsi.php?id_admin=<?php echo $row['id_admin']; ?>">dekripsi</a></center></td>

			</tr>
		<?php
		}
		?>
	</table>

</body>
<a class="btn btn-primary" href="../index.php" role="button">Logout</a>

</html>