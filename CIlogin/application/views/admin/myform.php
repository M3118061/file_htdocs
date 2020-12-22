<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/tambahadmin'); ?>

<?php 
	echo form_hidden('no', set_value('urutan'));
 ?>

<h5>Id Admin</h5>
<!-- <input type="text" name="username" value="<?php echo set_value('id_admin'); ?>" size="50" />
 -->
 <?php 
 	echo form_input('id_admin', set_value('id_admin'));
  ?>
  
<h5>Nama Admin</h5>
<?php 
 	echo form_input('nm_admin', set_value('nm_admin'));
  ?>
<!-- <input type="text" name="email" value="<?php echo set_value('nm_admin'); ?>" size="50" />
 -->
 
<h5>Password</h5>
<?php 
 	echo form_password('password', set_value('password'));
  ?>
<!-- <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
 -->

 <h5>Alamat</h5>
  <?php 
   	echo form_textarea('alamat_admin', set_value('alamat_admin'));
    ?>
	
	<h5>Kontak</h5>
<?php 
 	echo form_input('kontak', set_value('kontak'));
  ?>
<!-- <input type="text" name="email" value="<?php echo set_value('kontak'); ?>" size="50" />
 -->
	
<h5>Email Address</h5>
<?php 
 	echo form_input('email', set_value('email'));
  ?>
<!-- <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
 -->

  <br><br>

<div><input type="submit" value="Submit" /></div><br>
  <br>


</form>

</body>
</html>