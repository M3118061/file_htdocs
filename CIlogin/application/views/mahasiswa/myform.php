<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>
<?php echo $error; ?>
<?php echo form_open_multipart('mahasiswa/inputmhs'); ?>

<?php 
	echo form_hidden('no', set_value('urutan'));
 ?>

<h5>Username</h5>
<!-- <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
 -->
 <?php 
 	echo form_input('username', set_value('username'));
  ?>
<h5>Password</h5>
<?php 
 	echo form_password('password', set_value('password'));
  ?>
<!-- <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
 -->
<h5>Password Confirm</h5>
<?php 
 	echo form_password('passconf', set_value('passconf'));
  ?>
<!-- <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
 -->
<h5>Email Address</h5>
<?php 
 	echo form_input('email', set_value('email'));
  ?>
<!-- <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
 -->
<h5>Hobby</h5>
	Coding <input type="checkbox" name="hobby" value="Coding" <?php echo set_checkbox('mycheck', '1'); ?> />
	<br>Design <input type="checkbox" name="hobby" value="Design" <?php echo set_checkbox('mycheck', '2'); ?> />
	<br>IOT <input type="checkbox" name="hobby" value="IOT" <?php echo set_checkbox('mycheck', '3'); ?> />
	<br><br>

 <h5>Alamat</h5>
  <?php 
   	echo form_textarea('alamat', set_value('alamat'));
    ?>

<h5>Kota Asal</h5>
<?php 
  foreach ($query->result() as $row)
                {
                   // $this->table->add_row($row->username,$row->email,$row->hobby,$row->kota_asal,$row->jk,$row->alamat,img('uploads/'.$row->image));
                  $options[$row->id]=$row->kotaasal;
                }
  echo form_dropdown('kota_asal', $options, 'slo');
 ?>

<h5>Hari Ini</h5>
  <?php 
   // 	$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
  	// $time = time();
  	// echo mdate($datestring, $time);
  	echo date(DATE_RFC822, time());
    ?>

<h5>Jenis Kelamin</h5>
<?php 
	echo "Pria :"; echo form_radio('jk', 'Pria', FALSE); echo "</br>";
    echo "Wanita :"; echo form_radio('jk', 'Wanita', FALSE);
 ?>

  <h5> Upload Image</h5>
  <input type="file" name="image" size="20" />
  <br><br>

<div><input type="submit" value="Submit" /></div><br>
  <br>


</form>

</body>
</html>