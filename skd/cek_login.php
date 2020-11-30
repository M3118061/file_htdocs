<?php

session_start(); 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password']; 
 
$data = mysqli_query($mysqli,"select * from users where username='$username' and password='$password'");
$aName1 = mysqli_fetch_assoc($data); 
 
 $cek = mysqli_num_rows($data);
 if($cek > 0){
	 $role = $aName1['role'];
	 print($role); 
	 }
	 else{
		 print("no access"); 
		 }
		 
if($cek > 0){
	$role = $aName1['role'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	if($role == "admin"){
		header("location:admin/index.php");
		} 
		else{
			header("location:staff/index.php");
			}
}else{
	header("location:index.php?pesan=gagal");
	} 
 
?> 