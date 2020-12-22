<html>
<head>
<title>Input Booking Kamar</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo $error; ?>
<?php echo form_open_multipart('Booking/simpanBooking'); ?>

<table>
  <tr>
    <td>Kode Booking</td>
    <td>:</td>
    <td><?php echo form_input('kd_booking', set_value('kd_booking'));?></td>
  </tr>
   <tr>
    <td>Nama Pengunjung</td>
    <td>:</td>
    <td>
      <select name="id_pengunjung">
        <?php 
          foreach ($query_pengunjung->result() as $table) {
            echo "<option value=".$table->id_pengunjung.">".$table->nm_pengunjung."</option>";
          }
         ?>
      </select>
    </td>
  </tr>  
   <tr>
    <td>Batas Waktu Menginap</td>
    <td>:</td>
    <td><?php echo form_input('batas_waktu', set_value('batas_waktu'));?></td>
  </tr>  
   <tr>
    <td>Nama Kamar</td>
    <td>:</td>
    <td><select name="id_kamar">
        <?php 
          foreach ($query_kamar->result() as $table) {
            echo "<option value=".$table->id_kamar.">".$table->nm_kamar."</option>";
          }
         ?>
      </select></td>
  </tr>  
   <tr>
    <td>Tipe Kamar</td>
    <td>:</td>
    <td><?php echo form_input('tipe_kamar', set_value('tipe_kamar'));?></td>
  </tr>  
   <tr>
    <td>Kode Pembayaran</td>
    <td>:</td>
    <td><select name="kd_pembayaran">
        <?php 
          foreach ($query_bayar->result() as $table) {
            echo "<option value=".$table->kd_pembayaran.">".$table->kd_pembayaran."</option>";
          }
         ?>
      </select></td>
  </tr>  
   <tr>
    <td></td>
    <td></td>
    <td><div><input type="submit" value="Submit" />
<button><a href="../Booking">Back</a></button></div></td>
  </tr>  
</table>

<h5></h5>
<!-- <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
 -->
 




  <br>


</form>

</body>
</html>