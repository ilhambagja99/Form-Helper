<!DOCTYPE html>
<html>
<head>
	<title> penggunaanhtml </title>
</head>
<body>
	<?php
	echo form_open('email/send');
	echo "username" .form_input('name')."<br><br>";
	echo 'password' .form_password('password')."<br><br>";
	$options = array(
		'small' => 'small shirt' ,
		'ned' => 'medium shirt' ,
		'large' => 'large shirt' ,
		'xlarge' => 'extra large shirt' );

	$shirt_on_sale = array('small' => 'large' );
	echo "menu dropdown" .form_dropdown('shirts', $options, 'large')."<br><br>";
	echo form_submit('submit', 'submit');;
	echo form_close();
	?>
</body>
</html>