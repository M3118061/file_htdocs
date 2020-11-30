<?php 
error_reporting(0);

function encRSA($M){
  $kunciN = $_POST['kunciN'];
  $kunciE = $_POST['kunciE'];
  $data[0] = 1; //inisiasi data[$i]=1
  for ($i=0; $i<=$kunciE; $i++){ //looping sejumlah kunci e=$kunciE
    $rest[$i] = $M%$kunciN; //inisiasi plainteks ($M)
    if($data[$i] > $kunciN){ /*jika data lebih dari n=$kunciN maka kembalikan ke awal lagi (%$kunciN) */
      $data[$i+1] = $data[$i]*$rest[$i]%$kunciN;
    /*data baru merupakan perkalian data lama dengan plainteks sejumlah e=$kunciE */
    }else{
      $data[$i+1] = $data[$i] * $rest[$i];
    } }
  $get = $data[$kunciE] % $kunciN;
  return $get;
}

function decRSA($E){
  $kunciN = $_POST['kunciN'];
  $data[0]=1;
  for ($i=0; $i <= 23; $i++){
    $rest[$i] = $E%$kunciN;
    if($data[$i] > $kunciN){
    $data[$i+1] = $data[$i] * $rest[$i] % $kunciN;
    }else{
      $data[$i+1] = $data[$i] * $rest[$i];
    }
  }
  $get = $data[23] % $kunciN;
  return $get;
}

$kalimat= $_POST['kalimat'];
//enkripsi
echo "Plainteks = $kalimat ";
echo "<br>";
for ($i=0; $i<strlen($kalimat); $i++){
  $m = ord($kalimat[$i]); //merubah karakter menjadi ASCII
  $enc = $enc.chr( encRSA($m) );
}
echo "Hasil Enkripsi = $enc";
echo "<br>";
echo "<br>";
//dekripsi
for ($i=0;$i<strlen($kalimat);$i++){
  $m=ord($enc[$i]);
  $dec= $dec.chr(decRSA($m));
}
echo "Hasil Dekripsi = $dec";

?>
 
<!-- untuk memberikan tampilan bootstrap -->
<html>
<head>
	<title>Hasil Enkripsi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>
<br>
<!-- button logout untuk kembali ke form enkripsi -->
<a class="btn btn-primary" href="index.php" role="button">LOGOUT</a>

</html>