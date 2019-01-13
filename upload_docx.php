<link rel="stylesheet" type="text/css" href="upload.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
	session_start();

	//if(!(isset($_SESSION['loggedinadmin'])&&$_SESSION['loggedinadmin']==true))
		//header('location:login_admin.php');

	include 'server.php';
	$game=$_SESSION['game'];
	$s1="set1";
	$s2="set2";
	$filepath1=$filepath2="No file";

	$sql="SELECT * FROM events WHERE event='".$game."';";
	$res=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_assoc($res);
	if($row['set1']!=0)$filepath1="documents/".$game.$s1.".pdf";
	if($row['set2']!=0)$filepath2="documents/".$game.$s2.".pdf";
?>


<html>
<head>
	<title>Upload document</title>
</head>
<body style="background-color:choclate; height:100%">
	<div class='container-fluid'>
	<center><h1>Upload documents</h1></center><br>
	<hr style="width:50%;border-color: white;">
	<div  class='container event'>
		<label><?php echo $game;?></label>
		<span style='margin:left:20px'><?php echo $_SESSION['output']; $_SESSION['output']="";?></span>
		<div class='row box'>
			<a href='logout_admin.php'>Logout</a>
			<div class='col-md-6 col-sm-6 col-xs-12 '>
			File: <?php echo $filepath1;?>
			<form method='POST' action='upload.php' enctype='multipart/form-data'>
				<label>Schedule</label>
				<input type='file' name='file'>
				<button name='submit'>Upload</button>
			</form>
			<form method='POST' action='deletedocx.php'>
	   			<button type='submit' name='delsubmit'>Delete</button>
	  		</form>
	  		</div>
	  		<div class='col-md-6 col-sm-6 col-xs-12'>
	  			File: <?php echo $filepath2;?>
	  		<form method='POST' action='upload.php' enctype='multipart/form-data'>
				<label>Result</label>
				<input type='file' name='file1'>
				<button name='submit1'>Upload</button>
			</form>
			<form method='POST' action='deletedocx.php'>
	   			<button type='submit' name='delsubmit1'>Delete</button>
	  		</form>
	  		</div>  		
  		</div>
  		<label>Instructions:</label>
  		<ul>
  			<li>Set1 is Schedule</li>
  			<li>Set2 is Results</li>
  		</ul>
	</div>
	</div>
</body>
</html>
