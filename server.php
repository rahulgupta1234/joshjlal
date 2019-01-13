<?php
	
	$conn= mysqli_connect("ec2-107-20-183-142.compute-1.amazonaws.com:5432","qgfekuimmdfdsy"," ","josh");

	if(!$conn)die('Cannot Connect'.mysqli_error($conn));
?>
