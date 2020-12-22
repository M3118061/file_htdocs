<!DOCTYPE html>
<html>
<head>
	<title>Edit Admin</title>
</head>
<body>
	<?php echo form_open_multipart('admin/update'); ?>
	<?php foreach ($admin as $row) { ?>
	<table style="margin:20px auto;">
		<tr>
			<td>Id Admin</td>
			<td>:</td>
			<td><input type="text" name="id_admin" value="<?php echo $row->id_admin ?>" size="2" /></td>
		</tr>
		<tr>
			<td>Nama Admin</td>
			<td>:</td>
			<td><input type="text" name="nm_admin" value="<?php echo $row->nm_admin ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name="password" value="<?php echo $row->password ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Alamat Admin</td>
			<td>:</td>
			<td><input type="textarea" name="alamat_admin" value="<?php echo $row->alamat_admin ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Kontak</td>
			<td>:</td>
			<td><input type="text" name="kontak" value="<?php echo $row->kontak ?>" size="50" /></td>
		</tr>
		<tr>
			<td>Email</td>
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