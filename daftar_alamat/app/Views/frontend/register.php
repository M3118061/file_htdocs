
<body>
	
	<?= $this->include('layout/header') ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('resources/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Registration
				</span>
				
				<form class="login100-form validate-form p-b-33 p-t-5"  action="/auth/register" method="POST">

				<?= $validate->listErrors() ?>

					<div class="wrap-input100 validate-input" data-validate = "Enter nama depan">
						<input class="input100" type="text" name="first_name" placeholder="Nama Depan">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter nama belakang">
						<input class="input100" type="text" name="last_name" placeholder="Nama Belakang">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter no hp">
						<input class="input100" type="text" name="no_hp" placeholder="No HP">
						<span class="focus-input100" data-placeholder="&#xe830;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#9993;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter alamat">
						<input class="input100" type="alamat" name="alamat" placeholder="Alamat">
						<span class="focus-input100" data-placeholder="&#xe7dc;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
						<a href="/" class="login100-form-btn" type="submit">
							Login
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<?= $this->include('layout/footer') ?>


</body>
</html>