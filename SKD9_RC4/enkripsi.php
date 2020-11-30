<?php
error_reporting(0);

function setupkey()
{
	/*proses pengacakan kunci SBox*/
	echo "<br>";
	$kce = $_GET["key"];
	echo "<h4>Kunci enkripsi = $kce</h4>";
	for ($i = 0; $i < strlen($kce); $i++) 
	{
		$key[$i] = ord($kce[$i]); //rubah ASCII ke desimal
	}
	global $m;
	$m = array();
	/*Proses inisialisasi S-Box (Array S)*/
	for ($i = 0; $i < 256; $i++) 
	{
		$m[$i] = $i;
	}
	$j = $k = 0;
	//pengacakan S-Box
	for ($i = 0; $i < 256; $i++) 
	{
		$a = $m[$i];
		$j = ($j + $m[$i] + $key[$k]) % 256;
		$m[$i] = $m[$j];
		$m[$j] = $a;
		$k++;
		if ($k > 15) 
		{
			$k = 0;
		}
	}
}

function crypt2($inp)
{
	//pembangkitan kunci
	global $m;
	$x = 0;
	$y = 0;
	$bb = '';
	$x = ($x + 1) % 256;
	$a = $m[$x];
	$y = ($y + $a) % 256;
	$m[$x] = $b = $m[$y];
	$m[$y] = $a;
	
	/*proses XOR antara plaintext dengan kunci dengan $inp sebagai plaintext
	dan $m sebagai kunci*/
	$bb = ($inp ^ $m[($a + $b) % 256]) % 256; //^ adalah xor
	return $bb;
}

$kalimat = $_GET["kata"];
setupkey();
for ($i = 0; $i < strlen($kalimat); $i++) 
{
	$kode[$i] = ord($kalimat[$i]); /*rubah ASCII ke desimal*/
	$b[$i] = crypt2($kode[$i]); /*proses enkripsi RC4*/
	$c[$i] = chr($b[$i]); /*rubah desimal ke ASCII*/
}

//echo "Kalimat ASLI : ";
for ($i = 0; $i < strlen($kalimat); $i++) 
{
	//echo $kalimat[$i];
}
echo "<hr>";
echo "<h4>";
echo "Hasil enkripsi = ";
$hsl = ''; 
for ($i = 0; $i < strlen($kalimat); $i++) 
{
	echo $c[$i];
	$hsl = $hsl . $c[$i];
}
echo "<br>";
/*simpan data di file*/
$fp = fopen("enkripsirc4.txt", "w");
fputs($fp, $hsl);
fclose($fp);
echo "<br>";
echo "</h4>"
?>

<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
	crossorigin="anonymous">
</head>

<a class="btn btn-primary" href="form_dekripsi.php" role="button">Form Dekripsi</a>

</html>
