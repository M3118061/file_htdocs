<?php

$secret_key = "6LfobOsZAAAAANn89pxbk_pbiVe6qOnWiY9YVz18";
$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
$response = json_decode($verify);

if($response->success)
{ //Jika berhasil
	echo "<h2>Captcha Valid</h2>";
	echo "Yes, you're human (Anda adalah manusia)<hr>";
	echo "<b>Nama :</b><br>".$_POST['name']."<br><br>";
	echo "<b>Email :</b><br>".$_POST['email']."<br><br>";
	echo "<b>Komentar :</b><br>".$_POST['comment'];
}
else
{ // Jika captcha tidak valid
	echo "<h2>Captcha Tidak Valid</h2>";
	echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
	echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
}

?> 