<!DOCTYPE html>
<html>
<head>
	<title>INDEX KAMAR</title>
</head>
<body>

<div class="heading text-center">
    <h5>
		<?php echo anchor('kamar/tambah', 'Tambah Data Kamar'); ?>
    </h5>
    

<style type="text/css">
	.status[width:20px; height:20px; float: left;]
</style>
	<?php  
		$data['query']=$this->Kamar_model->get_all();
	?>
	<table border="1" cellpadding="3" width="1000">
		<tr>
			<th>ID Kamar</th>
			<th>Nama Kamar</th>
			<th>Nomor Kamar</th>
			<th>Tipe Kamar</th>
			<th>Tools</th>
		</tr>
		<?php  
		foreach ($data['query']->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $row->id_kamar; ?></td>
			<td><?php echo $row->nm_kamar; ?></td>
			<td><?php echo $row->no_kamar; ?></td>
			<td><?php echo $row->tipe_kamar; ?></td>
			<td>
				<?php echo anchor('kamar/edit_data/'.$row->id_kamar, 'Update |'); ?>
				<?php echo anchor('kamar/delete/'.$row->id_kamar, '| Delete'); ?>
			</td>
		</tr>
		<?php ;} ?>
	</table>
	</div>
</body>
</html>