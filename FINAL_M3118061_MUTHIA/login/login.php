<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="../login_template/image/png" href="../login_template/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_template/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_template/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login_template/css/main.css">
<!--===============================================================================================-->
</head>
<body>	
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
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>
				<form class="login100-form validate-form" action="login_process.php" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

      <!--===============================================================================================-->
	<script src="../login_template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/vendor/bootstrap/js/popper.js"></script>
	<script src="../login_template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/vendor/daterangepicker/moment.min.js"></script>
	<script src="../login_template/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../login_template/js/main.js"></script> 

</body>
</html>