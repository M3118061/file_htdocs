<html>
<head>
<title>index</title>
<script language="javascript" src="./mask.js"></script> 
</head>
<body>

<?php
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
			}else if($_GET['pesan'] == "belum_login"){
				echo "Anda harus login untuk mengakses halaman admin";
				}
}
?> 

<br/>
<br/>
<form method="POST" action="cek_login.php">
<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" onkeypress="return runScript(event)"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="Log in"></td>
	</tr>
</table>
</form>
</body>
</html>   