<html>
<head>
<title>Pembayaran</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<style type="text/css">
	.status{width: 20px; height: 20px; float: left;}
</style>
<br>
<ul>
	<li><div class="rounded-circle bg-danger status"></div>&nbsp;Konfirmasi pembayaran belum diterima</li>
	<li><div class="rounded-circle bg-success status"></div>&nbsp;Konfirmasi pembayaran telah diterima</li>
</ul>
<?php $data['query'] = $this->Pembayaran_model->get_all();?>
<!-- Page Heading -->

        <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <right><h6>Tambah Data Pembayaran :</h6></right>
              <right><h6 class="m-0 font-weight-bold text-primary"><a href="pembayaran/tambah"><BUTTON>Input Pembayaran</BUTTON></a></h6></right>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 100px;" aria-label="Name: activate to sort column ascending" aria-sort="descending">Kode Pembayaran</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 40px;" aria-label="Position: activate to sort column ascending">Status</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 300px;" aria-label="Office: activate to sort column ascending">Nama Pengunjung</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width:80px;" aria-label="Age: activate to sort column ascending">Tanggal Booking</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Age: activate to sort column ascending">Alat Bayar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width:  80px;" aria-label="Start date: activate to sort column ascending">Tanggal Bayar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Start date: activate to sort column ascending">Verifikasi</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 150px;" aria-label="Start date: activate to sort column ascending">Action</th>
                    </tr>
                  </thead>
		<?php
		foreach ($data['query']->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $row->kd_pembayaran;?></td>
			<td>
			<?php 
				switch($row->status){
				case 1:
					echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
					break;
				case 2:
                    echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                    break;
			}
			?>
			</td>
			<td><?php echo $row->id_pengunjung;?></td>
			<td><?php echo $row->tgl_booking;?></td>
			<td><?php echo $row->alat_bayar;?></td>
			<td><?php echo $row->tgl_bayar;?></td>
			<td><a href="../booking" class="btn btn-success btn-sm">Verifikasi</a></a></td>
			<td>
				<?php echo anchor('pembayaran/edit/'.$row->kd_pembayaran, 'Update '); ?>|
				<?php echo anchor('pembayaran/hapus/'.$row->kd_pembayaran, ' Delete'); ?>		
			</td>
		</tr>
		<?php }?>
<p><?php echo anchor('pembayaran/tambah', 'Add'); ?></p>
</body>
</table>
</html>