<!DOCTYPE html>
<html>
<head>
	<title>Tambah Admin</title>
</head>
<body>
	<?php echo form_open_multipart('admin/simpanAdmin'); ?>
	<table style="margin:20px auto;">
		<tr>
			<td>Id Admin</td>
			<td>:</td>
			<td><input type="text" name="id_admin" value="<?php echo set_value('id_admin'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Nama Admin</td>
			<td>:</td>
			<td><input type="text" name="nm_admin" value="<?php echo set_value('nm_admin'); ?>" size="50" /></td>
		</tr>
		<tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Alamat Admin</td>
			<td>:</td>
			<td><input type="textarea" name="alamat_admin" value="<?php echo set_value('alamat_admin'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Kontak</td>
			<td>:</td>
			<td><input type="text" name="kontak" value="<?php echo set_value('kontak'); ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Email</td>
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