
	
	
	<div>
		<?php $data['query'] = $this->Booking_Model->get_join(); ?>
		
          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <right><h6 class="m-0 font-weight-bold text-primary"><a href="Booking/inputBooking"><BUTTON>Input Booking</BUTTON></a></h6></right>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                  <thead>
                    <tr role="row">
                    	<th class="sorting_desc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 196.2px;" aria-label="Name: activate to sort column ascending" aria-sort="descending">Kode Booking</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 296.2px;" aria-label="Position: activate to sort column ascending">Tanggal Booking</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 142.2px;" aria-label="Office: activate to sort column ascending">Tanggal Bayar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 66.2px;" aria-label="Age: activate to sort column ascending">Nama Pengunjung</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 132.2px;" aria-label="Start date: activate to sort column ascending">Batas Waktu</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Nama Kamar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Tipe Kamar</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Kode Pembayaran</th>
                    	<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="width: 119px;" aria-label="Salary: activate to sort column ascending">Action</th>
                    </tr>
                  </thead>
                  <?php 
					foreach ($data['query']->result() as $row) {
				 ?>		
                  <tbody>
                  <tr >
                      <td ><?php echo $row->kd_booking; ?></td>
                      <td><?php echo $row->tgl_booking; ?></td>
                      <td><?php echo $row->tgl_bayar; ?></td>
                      <td><?php echo $row->nm_pengunjung; ?></td>
                      <td><?php echo $row->batas_waktu; ?></td>
                      <td><?php echo $row->nm_kamar; ?></td>
                       <td><?php echo $row->tipe_kamar; ?></td>
                        <td><?php echo $row->kd_pembayaran; ?></td>
                        <td><a href="deleteBooking/<?php echo $row->kd_booking ?>">Hapus</a></td>
                   </tr>
                   <?php 
					}
				 ?>
                </tbody>
                </table></div></div><div class="row"></li></ul></div></div></div></div>
              </div>
            </div>
          </div>