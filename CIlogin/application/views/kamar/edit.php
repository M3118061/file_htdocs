<!DOCTYPE html>
<html>
<head>
	<title>EDIT PENGUNJUNG</title>
</head>
<body>
	<?php echo form_open_multipart('kamar/update'); ?>
	<?php foreach ($kelola_kamar as $row) { ?>
	<table style="margin:30px auto;">
		<tr>
			<td>ID Kamar</td>
			<td>:</td>
			<td><input type="text" name="id_kamar" value="<?php echo $row->id_kamar ?>" size="2" /></td>
		</tr>
		<tr>
			<td>Nama Kamar</td>
			<td>:</td>
			<td><input type="text" name="nm_kamar" value="<?php echo $row->nm_kamar ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Nomor Kamar</td>
			<td>:</td>
			<td><input type="text" name="no_kamar" value="<?php echo $row->no_kamar ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Tipe Kamar</td>
			<td>:</td>
			<td><input type="text" name="tipe_kamar" value="<?php echo $row->tipe_kamar ?>" size="50" /></td>
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