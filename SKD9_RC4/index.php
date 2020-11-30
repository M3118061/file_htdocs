<html>
<head>
	<title>FORM ENKRIPSI</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
		crossorigin="anonymous"> 
</head>
<body>
<div class="container">
	<form action="enkripsi.php" method="get">
	<h1>Form - Enkripsi</h1>     
	<hr> 
		Plainteks : <br>
		<textarea cols="100" name="kata"maxlength="255"></textarea>
		<br>
		<br>
		Key : <br>
		<textarea cols="100" name="key" maxlength="16"></textarea>
		<br>
		<br>
		<input type="submit" class="btn btn-success" value="Kirim">
		<input type="reset" class="btn btn-primary" value="Reset">
		<br><br>
		Go to : <a href="form_dekripsi.php">Form Dekripsi</a><br>
	</form>
</div>
</body>
</html>