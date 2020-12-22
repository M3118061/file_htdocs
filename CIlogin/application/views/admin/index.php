<!DOCTYPE html>
<html>
<head>
	<title>Index Admin</title>
</head>
<body>
<style type="text/css">
	.status[width:20px; height:20px; float: left;]
</style>
	<?php  
		$data['query']=$this->Admin_model->get_all();
	?>
	<table border="1" cellpadding="3">
		<tr>
			<th>Id Admin</th>
			<th>Nama Admin</th>
			<th>Password</th>
			<th>Alamat Admin</th>
			<th>Kontak</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php  
		foreach ($data['query']->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $row->id_admin; ?></td>
			<td><?php echo $row->nm_admin; ?></td>
			<td><?php echo $row->password; ?></td>
			<td><?php echo $row->alamat_admin; ?></td>
			<td><?php echo $row->kontak; ?></td>
			<td><?php echo $row->email; ?></td>
			<td>
				<?php echo anchor('admin/edit_data/'.$row->id_admin, 'Update'); ?>
				<?php echo anchor('admin/delete/'.$row->id_admin, 'Delete'); ?>
			</td>
		</tr>
		<?php ;} ?>
	</table>
	<p><?php echo anchor('admin/tambah', 'Add'); ?></p>
</body>
</html>