<?php
	
	require_once 'server.php';


	$sql="SELECT * FROM events WHERE event='hockey';";
	$res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    if($row['set1']!=0)
	echo	"<a href='documents/hockeyset1.".$row['set1ext']."' target='_blank'>Schedule</a>";
	else  echo	"<a href='#''>Schedule</a>";
	if($row['set2']!=0)
	echo	" <a href='documents/hockeyset2.".$row['set2ext']."' target='_blank'>Results</a>";
	else   echo "<a href='#''>Result</a>";
  //echo "<a href='#''>Rules</a>";
?>
