<?php

define('FILE_ENCRYPTION_BLOCKS', 10000);

/** Proses enkripsi ini akan berakhir dengan menyimpan ciphertext ke dalam sebuah file
dengan akhiran (ekstensi) .enc. Di bagian atas @param digunakan untuk
mendefinisikan variable apa saja yang dibutuhkan misalnya key untuk kunci, dest
untuk destination, dan source untuk plainteks yang akan dienkripsi.  */

/**
* @param string $source
* @param string $key
* @param string $dest
* @return string|false
*/
function encryptFile($source, $key, $dest)
{
	/**Mengambil kunci mulai dari indeks ke 0 sejumlah 16 digit dan mendefinisikan 
	openssl untuk mengenerate pseudo random bytes sejumlah 16*/
	$key = substr(sha1($key, true), 0, 16);
	$iv = openssl_random_pseudo_bytes(16);
	$error = false;
	if ($fpOut = fopen($dest, 'w')) 
	{	
		fwrite($fpOut, $iv);
		if ($fpIn = fopen($source, 'rb')) 
		{
			while (!feof($fpIn)) 
			{
				/** Menggunakan 16-byte pertama dari ciphertext sebagai vektor inisialisasi berikutnya */
				$plaintext = fread($fpIn, 16 * FILE_ENCRYPTION_BLOCKS);
				$ciphertext = openssl_encrypt($plaintext, 'AES-128-CBC',
				$key, OPENSSL_RAW_DATA, $iv);
				$iv = substr($ciphertext, 0, 16);
				fwrite($fpOut, $ciphertext);
			}
			fclose($fpIn);
		} 
		else 
		{
			$error = true;
		}
		fclose($fpOut);
	} 
	else 
	{
		$error = true;
	}
	return $error ? false : $dest;
}

/** Mendefinisikan variable source untuk sumber cipherteks yang akan didekripsi,
mendifinisikan kunci yang bernilai sama dengan yang digunakan pada proses
enkripsi, variable dest untuk mendefinisikan tujuan file akan disimpan. */

/**
*
* @param string $source
* @param string $key
* @param string $dest
* @return string|false
*/
function decryptFile($source, $key, $dest)
{
	$key = substr(sha1($key, true), 0, 16);
	$error = false;
	if ($fpOut = fopen($dest, 'w')) 
	{
		if ($fpIn = fopen($source, 'rb')) 
		{
			$iv = fread($fpIn, 16);
			while (!feof($fpIn)) 
			{
				/** Pembacaan blok */
				$ciphertext = fread($fpIn, 16 *(FILE_ENCRYPTION_BLOCKS + 1));
				$plaintext = openssl_decrypt($ciphertext, 'AES-128-CBC',
				$key, OPENSSL_RAW_DATA, $iv);
				$iv = substr($ciphertext, 0, 16);
				fwrite($fpOut, $plaintext);
			}
			fclose($fpIn);
		} 
		else 
		{
			$error = true;
		}
		fclose($fpOut);
		} 
		else 
		{
			$error = true;
		}
		return $error ? false : $dest;
}

$fileName = __DIR__.'/testfile.txt';
$key = 'my secret key';
file_put_contents($fileName, 'Sejarah awal Gowa dan Tallo dimulai pada sekitar abad ke-14, saat negeri Gowa
yang bersuku Makassar muncul sebagai entitas agraris di Sulawesi Selatan, Indonesia.
Tallo didirikan dua abad setelahnya oleh seorang pangeran Gowa yang melarikan diri
ke daerah pantai setelah kalah dalam perang takhta. Tallo yang berada di pesisir
berkembang melalui perdagangan maritim, sementara Gowa tumbuh pesat berkat
intensifikasi pertanian padi; hutan-hutan dibabat untuk dijadikan sawah.');
encryptFile($fileName, $key, $fileName . '.enc');
decryptFile($fileName . '.enc', $key, $fileName . '.dec');

?>