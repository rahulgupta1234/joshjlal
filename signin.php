<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="register.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.min.js">

<?php
  session_start();

   if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true){
    header('location:nothing.php');
    exit;
   }
   require_once "server.php";


   $username=$password="";
   $err="";

   if($_SERVER['REQUEST_METHOD']=="POST"){
     

     if(empty(test($_POST["user"]))){  
        $username_err="Please enter your username";
     }
     else $username=test($_POST["user"]);

     if(empty(test($_POST["psw"]))){
      $password_err="Please enter your password";
     }
     else $password=test($_POST["psw"]);

     if(empty($password_err)&&empty($username_err))
     {

          $sql="SELECT * FROM register WHERE username='$username'";
          $result=mysqli_query($conn,$sql);

          if($result->num_rows>0){
            $row=$result->fetch_assoc();
            $hashed_password=$row['password'];
            
                 if(password_verify($password,$hashed_password)){
                  session_start();
                  $_SESSION['username']=$username;
                  $_SESSION['loggedin']=true;
                  header("location:nothing.php");
                 }
                 else $err="Incorrect username or password.";
          }
          else $err="Incorrect username.";
      }
  }   

    function test($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);

    return $data;
    }
?>
  
<body>

<div class="split left">
  <a href="index.php" ><button id='home'><i class='fa fa-home'></i></button></a>
  <div class="container log">
    <section>
    <h1>WELCOME!!</h1> 
        <p class='text-justify'>
          Stressed from the hectic college life ?<br>
          MNNIT Allahabad welcomes you to register for the annual sports festival ,"Josh & J.Lal Memorial" tournament.<br>         
          Registration is open to all the colleges.
        </p>
    <br><br>
    <center><a href="signup.php">REGISTER HERE</a>
    <div class="arro">
      <hr style="width: 50%; margin-top:30px"><br>
      Log In
      <i class='fa fa-angle-double-down'></i></div></center>
    </section>
  </div>
</div>

<div class="split right">
  <div class="centered logo">
  <h1>Login your account</h1>
  <span><?php echo $err;?></span>
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

