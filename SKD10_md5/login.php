<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Login Form</h1>
	
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "gagal"){
			echo "Password dan Username tidak boleh kosong";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Silahkan login terlebih dahulu";
		}
	}
	?>
	
	<br>
	<!-- Untuk membuat form login -->
	<form action="login_process.php" method="POST">
		<div class="form-group">
			<label for="exampleInputName">Username</label>
			<input type="text" class="form-control" name="username" aria-describedby="name" placeholder="Enter Username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary">Login</button>
</form>

</div>
</body>
</html>