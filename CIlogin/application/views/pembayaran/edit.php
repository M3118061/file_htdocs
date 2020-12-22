<?php echo form_open_multipart('Pembayaran/update');?>
<?php foreach($pembayaran as $row){ ?>
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Pembayaran</td>
				<td><input type="text" name="kd_pembayaran" value="<?php echo $row->kd_pembayaran?>" size="50"></td>
			</tr>
			<tr>
<?php } ?>
				<td>Status</td>
				<td>
					<input type='radio' name='status' value='1' /><div class="p-2 d-inline-block rounded-circle bg-danger"></div>
					<br><input type='radio' name='status' value='2' /><div class="p-2 d-inline-block rounded-circle bg-success"></div></br>
				</td>
			</tr>
			<tr>
				<td>ID Pengunjung</td>
				<td>
				<?php
					$options = array(
										'1'        => 'Damian Erlangga',
										'2'         => 'Erika Guruh',
										'3'         => 'Aria Topan',
										'4'         => 'Hanny Pelangi',
										'5'        => 'Tonny Senjakala',
										'6'         => 'Oktavian Julius',
										'7'         => 'Valeria Guntur',
										'8'         => 'Viktor Yamada',
										'9'         => 'Putri Badai',
										'10'         => 'Jenny Angkasa'
									);

					echo form_dropdown('id_pengunjung', $options, $row->id_pengunjung);
				?>
			</td>
			</tr>
<?php foreach($pembayaran as $row){ ?>
			<tr>
				<td>Tanggal Booking</td>
				<td><input type="text" name="tgl_booking" value="<?php echo $row->tgl_booking ?>" size="50"></td>
			</tr>
			<tr>
				<td>Alat Bayar</td>
				<td><input type="text" name="alat_bayar" value="<?php echo $row->alat_bayar ?>" size="50"></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tgl_bayar" value="<?php echo $row->tgl_bayar ?>" size="50"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
<?php } ?>