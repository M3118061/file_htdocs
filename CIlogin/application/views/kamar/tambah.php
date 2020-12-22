<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH KAMAR</title>
</head>
<body>
	<?php echo form_open_multipart('kamar/simpanTambah'); ?>
	<table style="margin:20px auto;">
		<tr>
			<td>ID Kamar</td>
			<td>:</td>
			<td><input type="text" name="id_kamar" placeholder = "Masukkan ID Kamar" value="<?php echo set_value('id_kamar'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Nama Kamar</td>
			<td>:</td>
			<td><input type="text" name="nm_kamar" placeholder = "Masukkan Nama Kamar" value="<?php echo set_value('nm_kamar'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Nomor Kamar</td>
			<td>:</td>
			<td><input type="text" name="no_kamar" placeholder = "Masukkan Nomor Kamar" value="<?php echo set_value('no_kamar'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Tipe Kamar</td>
			<td>:</td>
			<td><input type="text" name="tipe_kamar" placeholder = "Masukkan Tipe Kamar" value="<?php echo set_value('tipe_kamar'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</body>
</html>