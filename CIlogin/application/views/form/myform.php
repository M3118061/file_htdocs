<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Username</h5>
<!-- <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
 -->
 <?php 
 	echo form_input('username', set_value('username'));
  ?>
<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5>Kota Asal</h5>
<?php 
$options = array(
        'slo'         => 'Surakarta',
        'bgr'           => 'Bogor',
        'jkt'         => 'Jakarta',
        'byl'        => 'Boyolali',
);
echo form_dropdown('kota_asal' ,$options, 'bgr');
 ?>
<h5>Jenis Kelamin</h5>
<?php 
	echo "Pria :"; echo form_radio('jk', 'Pria', FALSE); echo "</br>";
    echo "Wanita :"; echo form_radio('jk', 'Wanita', FALSE);
 ?>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>