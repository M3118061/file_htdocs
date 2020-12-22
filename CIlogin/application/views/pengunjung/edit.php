<!DOCTYPE html>
<html>
<head>
	<title>EDIT PENGUNJUNG</title>
</head>
<body>
	<?php echo form_open_multipart('pengunjung/update'); ?>
	<?php foreach ($pengunjung as $row) { ?>
	<table style="margin:20px auto;">
		<tr>
			<td>ID Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="id_pengunjung" value="<?php echo $row->id_pengunjung ?>" size="2" /></td>
		</tr>
		<tr>
			<td>Nama Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="nm_pengunjung" value="<?php echo $row->nm_pengunjung ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Alamat Pengunjung</td>
			<td>:</td>
			<td><input type="textarea" name="alamat_pengunjung" value="<?php echo $row->alamat_pengunjung ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Kontak Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="kontak" value="<?php echo $row->kontak ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Email Pengunjung</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $row->email ?>" size="50" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Update"></td>
		</tr>
	</table>
	<?php }; ?>
</body>
</html>