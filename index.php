<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="indexCss.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--Carousel-->
<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
	var open=false;

	/*function closeNav() {
		open=false;
		document.getElementById('sidenav').style.width = "0px";
	}
	function openNav(){
		open=true;
		document.getElementById('sidenav').style.width = "250px";
	}*/


	$(document).ready(function(){

		$('#openNav').click(function(){
			open=true;
			$('#sidenav').width(250);
		});
		$('#closeNav').click(function(){
			open=false;
			$('#sidenav').width(0);
		});
	});
	
</script>
<html>
<head>
	<title>Josh&J.Lal</title>
</head>
<body>
	<div id='sidenav' class="sidenaav">
		<h5>MENU</h5>
		<div class='tabs'>
		<a href='javascript:void(0)' id='closeNav' class='closebtn'>&times;</a>
		<a href='#home'>Home</a>
		<a href="#about">About</a>
		<a href="#events">Events</a>
		<a href="signup.php">Register</a>
		<a href="#contact">Contact Us</a>
			<center><hr></center>
		<a href="login_admin.php">Admin</a>
		<a href="team.html">Our Team</a>
		</div>
	</div>

	<div class='container-fluid parallax home' id='home'>
		<span class="openNav" id='openNav' style="z-index:1;">&#9776;Menu</span>
		<!--<div class=container>
		<div class='row'>
		<div class='col-xs-12'>
		<center><a href="signup.php"><button class='btn btn-lg'>Register Now</button></a></center>-->
		</div>
	</div>

	<div id='about' class='container-fluid about'>
       	<center><large>About Us</large>
		<hr style="width:50%; border: 1px solid #989898;"></center>
		<p class='text-justify'> <b>Josh and J.Lal</b><br>
			Every year apart from producing resplendent minds in the fields of academics, MNNIT Allahabad also sculptures the fittest sportspersons from within and outside the institution by organising the annual sports festival "Josh and J Lal Memorial Tournament" organised by the Student's Activity Centre, MNNIT. With a participation of over 1000 students and increasing every year the mainframe sports event has never failed to elevate the aura of the sports culture among the pearls of the Institute.It also encourages women participation by organising some exclusively female events adding to the total of more than 14 formal and informal events of the annual sports event.</p>
	</div>

	<div class='container-fluid parallax events' id='events'>
		<center>Events
		<hr style="width:50%;"></center>
		<div class="container">
		 
		  <div id="myCarousel" class="carousel slide" data-interval='4000' data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
		      <li data-target="#myCarousel" data-slide-to="6"></li>
		      <li data-target="#myCarousel" data-slide-to="7"></li>
		      <li data-target="#myCarousel" data-slide-to="8"></li>
		      <li data-target="#myCarousel" data-slide-to="9"></li>
		      <li data-target="#myCarousel" data-slide-to="10"></li>
		      <li data-target="#myCarousel" data-slide-to="11"></li>
		      <li data-target="#myCarousel" data-slide-to="12"></li>
		      <li data-target="#myCarousel" data-slide-to="13"></li>
		    </ol>


		    <div class="carousel-inner">
		      <div class="item active">
		        <img src="wallpaper/BG2.jpg" alt="VolleyBall" style="width:100%;height:400px;">
		         <div class='carousel-caption'>
		          <h1>VolleyBall</h1>
		            <?php include 'docx/snippet.php';?>
		         </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/BB.jpg" alt="BasketBall" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>BasketBall</h1>
		            <?php include 'docx/snippet1.php';?>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="wallpaper/Tennis.jpg" alt="Tennis" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Tennis</h1>
		            <?php include 'docx/snippet2.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/cricket.jpg" alt="Cricket" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Cricket</h1>
		            <?php include 'docx/snippet3.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/badminton.jpg" alt="Badminton" style="width:100%;height:400px;">
		         <div class='carousel-caption'>
		          <h1>Badminton</h1>
		            <?php include 'docx/snippet4.php';?>
		         </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/CHESS.jpg" alt="Chess" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Chess</h1>
		            <?php include 'docx/snippet5.php';?>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="wallpaper/carrom.jpg" alt="Carrom" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Carrom</h1>
		            <?php include 'docx/snippet6.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/KARATE.jpg" alt="Karate" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Karate</h1>
		            <?php include 'docx/snippet7.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/football.jpg" alt="FootBall" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>FootBall</h1>
		            <?php include 'docx/snippet8.php';?>
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="wallpaper/kabaddi.jpg" alt="Kabaddi" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Kabaddi</h1>
		            <?php include 'docx/snippet9.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/GYM.jpg" alt="Gym" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Gym</h1>
		            <?php include 'docx/snippet10.php';?>
		        </div>
		      </div>

		      <div class="item">
		        <img src="wallpaper/TT.jpg" alt="Table Tennis" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Table Tennis</h1>
		            <?php include 'docx/snippet11.php';?>
		        </div>
		      </div>
			<div class="item">
		        <img src="wallpaper/skating.jpg" alt="Skating" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Skating</h1>
		            <?php include 'docx/snippet12.php';?>
		        </div>
		      </div>
			<div class="item">
		        <img src="wallpaper/hockey.jpg" alt="Hockey" style="width:100%;height:400px;">
		        <div class='carousel-caption'>
		          <h1>Hockey</h1>
		            <?php include 'docx/snippet13.php';?>
		        </div>
		      </div>

		    </div>


		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
		</div>
	</div>

	<div id='contact' class='container-fluid contact'>
		<center style='font-size: 40px;padding-top: 20px;'>Contact Us</center>
		<div class='row'>
			<div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
				<a href='https://www.google.com/maps/place/Motilal+Nehru+National+Institute+Of+Technology/@25.4920102,81.8639163,15z/data=!4m5!3m4!1s0x0:0x6690dd2de3a1415b!8m2!3d25.4920102!4d81.8639163' target='_blank'>
					<img src="wallpaper/mnnit.png" class='img-thumbnail'>
				</a>
			</div>
			<div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
				<ul id='list'>
					<li><b>Address:</b><br>MNNIT, Barrister Mullah Colony,<br>MNNIT Allahabad Campus, Teliarganj,<br>Prayagraj,Uttar Pradesh 211004</li>
					<li><b>Email:</b><br>spvsports@gmail.com</li>
					<li><b>Contact and Enquiry:</b><br>(+91)-6386191798</li>
					<!--<li><b>Follow us:</b><br>
						<a href='#' class='fa fa-facebook'></a>
						<a href='#' class='fa fa-instagram'></a>
						<a href='#'class='fa fa-twitter'></a>
					</li>-->
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
