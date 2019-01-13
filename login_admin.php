<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.js">


<?php
    include 'server.php';

    $game=$user=$output="";
    $arr=array('volleyball','basketball','tennis','cricket','badminton','chess','carrom','karate','football','kabaddi','gym','tabletennis','skating','hockey');

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $output="";
        $user=$_POST['user'];
        $game=$_POST['psw'];

    	if(!empty($game)&&!empty($user))
      {
        if($user=="gameadmin"&&in_array($game, $arr))
        	{	session_start();
        		$_SESSION['game']=$game;
            $_SESSION['output']="";
        		$_SESSION['loggedinadmin']=true;
        		header('location:upload_docx.php');
        	}
          else $output="*You are not Authorised.";
      }
    }
?>



<body>


<div class="split left">
  <a href="index.php" ><button id='home'><i class='fa fa-home'></i></button></a>
  <div class="container log">
    <section>
    <h1>WELCOME!!</h1> 
        <p class='text-justify'>
          Login facility for Admin/Co-ordinators only.
        </p>
        <center>
          <div class="arro">
          <hr style="width: 50%; margin-top:30px"><br>
          Log In
          <i class='fa fa-angle-double-down'></i></div>
        </center>
    </section>
  </div>
</div>

<div class="split right">
  <div class="centered logo">
  <h1>Login your account</h1>
  <span><?php echo $output;?></span>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" style="width:150%;margin:auto" method="POST">
      <hr>
      <div class="input-container">
         <i class="fa fa-user icon"></i>
         <input class="input-field" type="text" placeholder="Username" name="user" required>
      </div>
  
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="psw" required>
      </div>
  
     <button type="submit"name="submit" class="btn">Log in</button>
  </form>
  </div>
</div>
     
</body>
