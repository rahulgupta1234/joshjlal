<?php
  include 'signphp.php';
?>


<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script  src="register.js"></script>
</head>
<body>

<div class="split left">
  <a href="index.php"><button id='home'><i class="fa fa-home"></i></button></a>
    <div class="container">
      <section>
      <h2>General rules & information</h2>
      <ul>
        <li>One college is allowed to create one account</li><br>
        <li>Already registered?</li>
      </ul> 
      <center><a href="signin.php">Log In</a><br>
      <div class="arro">
      <hr style="width: 50%; margin-top:30px"><br>
      SignUp
      <i class='fa fa-angle-double-down'></i></div></center>
      </section>
    </div>
</div>

<div class="split right">
  <div class="centered">
    <h1>Create an account</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return myfunction()" style="width:150%;margin:auto;" >
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Username" id="usrnm" name="usrnm" value="<?php echo $username;?>"  required>
      </div>
      <span id='text1'><?php echo $namerr;?></span>

      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="input-field" type="text" placeholder="Full name" name="name" value="<?php echo $name;?>"required>
      </div>

  	  <div class="input-container">
        <i class="fa fa-building icon"></i>
        <input class="input-field" type="text" placeholder="College name" id='clgnm' name="clgnm" value='<?php echo $college;?>'  required>
      </div>
      <!--<span id='text1'><?php echo $collerr;?></span>-->

      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="input-field" type="email" placeholder="Email" name="email" id="email" value='<?php echo $email;?>' required>
      </div>
      <span id='text2'><?php echo $emailerr;?></span>
      
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Password" name="psw" id="psw"  value='<?php echo $password;?>'required>
      </div>
      <span id='text3'><?php echo $passworderr;?></span>
      
      <div class="input-container">
        <i class="fa fa-key icon"></i>
        <input class="input-field" type="password" placeholder="Re-type Password" id="rpsw" name="repsw" value='<?php echo $repass;?>' required>
      </div>
      <span id='text4'><?php echo $repasserr;?></span>

      <div class="input-container">
        <i class="fa fa-phone icon"></i>
        <input class="input-field" type="text" placeholder="Mobile no." id="num" name="num" value='<?php echo $mobile;?>' required>
      </div>
      <span id='text5'></span>

      <button type="submit" name="submit" class="btn">Register</button>
    </form>
      <p> Already have an account?<a href="signin.php">Sign_In</a></p> 
  </div>
</div>
     
</body>


</html>
  
  

