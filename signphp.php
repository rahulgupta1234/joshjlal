<?php
  session_start();
   if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"]==true){
    header('location:nothing.php');
    exit;
   }
 require_once "server.php";

   $username= $email= $password= $repass=$college=$name=$mobile="";
   $namerr= $emailerr= $passworderr= $repasserr="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){

 			$username=test($_POST['usrnm']);
 	    $name=test($_POST['name']);
      $college=test($_POST['clgnm']);
      $email=test($_POST['email']);
      $password=test($_POST['psw']);
      $repass=test($_POST['repsw']);
      $mobile=$_POST['num'];



    if(empty($_POST["usrnm"]))
          { 
            $namerr="required field";}
      else
          { 
            if (!preg_match("/^[a-zA-Z_0-9]*$/",test($_POST["usrnm"]))) { 
              $namerr = "Only letters and underscore allowed";
            }
            else{
              $sql= "SELECT id FROM register WHERE username = ?";

              if($stmt = mysqli_prepare($conn,$sql)){
                mysqli_stmt_bind_param($stmt,"s",$param_username);
                $param_username=test($_POST["usrnm"]);

                if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);
                  if(mysqli_stmt_num_rows($stmt)==1){
                    $namerr="Username already taken";  
                  }
                  else{
                     $username=test($_POST["usrnm"]);
                  }
                }
                else echo "Oops! something went wrong. Try Again!";
              }
              mysqli_stmt_close($stmt);
            }
          } 
      
      if (empty($_POST["email"])) 
      {
       $emailerr = "Email is required";
      } 
       else {
              if (!filter_var(test($_POST["email"]), FILTER_VALIDATE_EMAIL)) { 
                  $emailerr = "Invalid email format";
              }
              else {
                $email = test($_POST["email"]); 
                $sql= "SELECT id FROM register WHERE email = '".$email."';";

                $res=mysqli_query($conn,$sql);
                if($res->num_rows>0)
                  $emailerr="Email already registered.";
              }                                           
            }
     
      if (empty($_POST["psw"])) { 
         $passworderr = "Password is required";
                    } else 
                    {
                       if (!preg_match("/^[a-zA-Z0-9@]*$/",test($_POST["psw"]))) { 
                      $passworderr = "Password can contain only letters,numbers(0-9) and @ allowed";}
                      elseif (strlen(test($_POST["psw"]))<8) { 
                          $passworderr="Length should be atleast 8 characters";
                       }
                       else $password = test($_POST["psw"]);
                              }
      
      if (empty($_POST["repsw"])) { 
                $repasserr = "Re-enter Password again";
              } else {
                 if (!preg_match("/^[a-zA-Z0-9@]*$/",test($_POST["repsw"]))) { 
                  $repasserr = "Password can contain only letters,numbers(0-9) and @ allowed";
                    } else{
                
               if(test($_POST["psw"])!=test($_POST["repsw"])){ 
              $repasserr= "Passwords doesn't match. check and Re-enter again.";
                       }
                else $repass = test($_POST["repsw"]);        }
                   }

      /*if(empty($college)){
          $collerr="Entry is required.";
      }
      else{
                $sql= "SELECT id FROM register WHERE college = '".$college."';";

                $res=mysqli_query($conn,$sql);
                if($res->num_rows>0)
                  $collerr="Your college has already registered.";
      }*/         

      if(empty($namerr)&&empty($emailerr)&&empty($passworderr)&&empty($repasserr))
      {

            $pass=password_hash($password,PASSWORD_DEFAULT);

            $sql= "INSERT INTO register(username,name,college,email,password,mobile) VALUES ('$username','$name','$college','$email',
            '$pass','$mobile');";

            $result=mysqli_query($conn,$sql);
			if($result){
                header("location:signin.php?success");
          		} 
             else echo "Oops! something went wrong.";
      }             
    mysqli_close($conn); 
 }

 function test($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);

  return $data;
 }
?>