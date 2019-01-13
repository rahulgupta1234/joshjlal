<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

<?php
	session_start();

	if(!(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true))
		header('location:signin.php');

	require_once 'server.php';

	$user=$_SESSION['username'];
	$id="";

	$sql="SELECT * FROM register WHERE username='$user'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if($result->num_rows>0)
		$id=$row['id'];

?>


<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
		background-image: url('wallpaper/COVER2.jpg');
		height:500px;
		background-attachment: none;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		}

	.flip-card {
	  background-color: transparent;
	  width: 300px;
	  height: 400px;
	  margin-left:6%;
	  margin-top: 50px; 
	  
	}

	.flip-card-inner {
	  position: relative;
	  width: 100%;
	  height: 100%;
	  text-align: center;
	  transition: transform 0.6s;
	  transform-style: preserve-3d;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	}

	.flip-card:hover .flip-card-inner {
	  transform: rotateY(180deg);
	}

	.flip-card-front, .flip-card-back {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  backface-visibility: hidden;
	}

	.flip-card-front {
	  background-color: #bbb;
	  color: black;
	  z-index: 2;
	}
	.flip-card-front img{
			width:300px;
			height:400px;
		}
	.flip-card-back {
	  background-color: #663300;
	  color: white;
	  transform: rotateY(180deg);
	  z-index: 1;
	}

	span {
		background-color: #663300;
		color:white;
		font-size:17px;
	}	

	p{
		text-align: center;
		margin-top:40px;
	}

	small{
		font-size: 15px;
	}

	large{
		font-size:30px;
		background-color: #ffb366;
		border-radius: 2px; 
	}

	#logout{
		margin-top: 150px;
		background-color: #e67300;
		color:white;
		padding: 10px;
		font-size: 30px;
		border: none;
		cursor: pointer;
	}

	.logout1{
		background-color: transparent;
		color:white;
        float:right;
        position:fixed;
        right:0;
		padding: 10px;
		font-size: 40px;
		border: none;
		cursor: pointer;
	}
</style>


<body>

<div class='container-fluid'>
	<div class='row'>
		<div class='col-xs-12'>
	<form metho='POST' action="logout.php">
		<button class='logout1' name='LogOut'><i class='fa fa-home'></i></button>
	</form>
		<div class="flip-card">
		  <div class="flip-card-inner">
		    <div class="flip-card-front">
		      <img src="wallpaper/POSTER1.jpg">
		      <span>Flip Me!</span>
		    </div>
		    <div class="flip-card-back" id="back">
		     <h1><center style="text-decoration: underline;">Welcome</center></h1>
		     <p clss='text-justify'>
		     	<small>Your Registeration Id is-</small>
		     	<br>
		   		<large><?php echo" JJ-19".$id;?></large>
		 	</p>
		 	 <form metho='POST' action="logout.php">
			 <button id='logout' name='LogOut'><i class='fa fa-home'></i></button>
			</form>
		    </div>
		  </div>
		</div>
		</div>
	</div>	
</div>
</body>
</html>