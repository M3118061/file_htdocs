<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Registration Form</h1>
	<br>
	<form action="register.php" method="POST">
		<div class="form-group">
			<label for="exampleInputFName">Full Name</label>
			<input type="text" class="form-control" name="fullname" aria-describedby="Fname" placeholder="Enter Full Name">
		</div>
		<div class="form-group">
			<label for="exampleInputName">Username</label>
			<input type="text" class="form-control" name="username" aria-describedby="name" placeholder="Enter Username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</body>
</html>