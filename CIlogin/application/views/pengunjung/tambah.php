<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH PENGUNJUNG</title>
</head>
<body>
	<?php echo form_open_multipart('pengunjung/simpanPengunjung'); ?>
	<table style="margin:20px auto;">
		<tr>
			<td>ID Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="id_pengunjung" value="<?php echo set_value('id_pengunjung'); ?>" size="3" /></td>
		</tr>
		<tr>
			<td>Nama Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="nm_pengunjung" value="<?php echo set_value('nm_pengunjung'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Alamat Pengunjung</td>
			<td>:</td>
			<td><input type="textarea" name="alamat_pengunjung" value="<?php echo set_value('alamat_pengunjung'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Kontak Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="kontak" value="<?php echo set_value('kontak'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Email Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Submit"></td>
		</tr>
	</table>
</body>
</html>