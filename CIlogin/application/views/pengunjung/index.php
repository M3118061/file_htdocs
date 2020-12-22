<!DOCTYPE html>
<html>
<head>
	<title>INDEX PENGUNJUNG</title>
</head>
<body>
<style type="text/css">
	.status[width:20px; height:20px; float: left;]
</style>
<div>
		<?php  
			$data['query']=$this->Pengunjung_model->get_all();
		?>
		
        <!-- Page Heading -->

        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <right><h6>Tambah Data Pengunjung :</h6></right>
              <right><h6 class="m-0 font-weight-bold text-primary"><a href="pengunjung/tambah"><BUTTON>Input Pengunjung</BUTTON></a></h6></right>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 50px;" aria-label="Name: activate to sort column ascending" aria-sort="descending">Id Pengunjung</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 250px;" aria-label="Position: activate to sort column ascending">Nama Pengunjung</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 300px;" aria-label="Office: activate to sort column ascending">Alamat Pengunjung</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 66.2px;" aria-label="Age: activate to sort column ascending">Kontak</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 250px;" aria-label="Start date: activate to sort column ascending">Email</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Start date: activate to sort column ascending">Action</th>
                    </tr>
                  </thead>

		<?php  
		foreach ($data['query']->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $row->id_pengunjung; ?></td>
			<td><?php echo $row->nm_pengunjung; ?></td>
			<td><?php echo $row->alamat_pengunjung; ?></td>
			<td><?php echo $row->kontak; ?></td>
			<td><?php echo $row->email; ?></td>
			<td>
				<?php echo anchor('pengunjung/edit_data/'.$row->id_pengunjung, 'Update |'); ?>
				<?php echo anchor('pengunjung/delete/'.$row->id_pengunjung, '| Delete'); ?>
			</td>
		</tr>
		<?php ;} ?>
	</table>
	<hr>
</body>
</html>