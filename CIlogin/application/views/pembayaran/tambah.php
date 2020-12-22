<?php echo form_open_multipart('pembayaran/simpanPembayaran');?>
		<table style="margin:20px auto;">
			<tr>
				<td>Kode Pembayaran</td>
				<td><input type="text" name="kd_pembayaran" value="<?php echo set_value('kd_pembayaran'); ?>" size="50"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<input type='radio' name='status' value='1' /><div class="p-2 d-inline-block rounded-circle bg-danger"></div>
					<br><input type='radio' name='status' value='2' /><div class="p-2 d-inline-block rounded-circle bg-success"></div></br>
				</td>
			</tr>
			<tr>
				<td>ID Pengunjung</td>
				<td>
				<select name="id_pengunjung">
				<?php
					foreach ($pengunjung->result() as $tabel){
					echo "<option value=".$tabel->id_pengunjung.">".$tabel->nm_pengunjung."</option>";
					}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Booking</td>
				<td><input type="text" name="tgl_booking" value="<?php echo set_value('tgl_booking'); ?>" size="50"></td>
			</tr>
			<tr>
				<td>Alat Bayar</td>
				<td><input type="text" name="alat_bayar" value="<?php echo set_value('alat_bayar'); ?>" size="50"></td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td><input type="text" name="tgl_bayar" value="<?php echo set_value('tgl_bayar'); ?>" size="50"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>