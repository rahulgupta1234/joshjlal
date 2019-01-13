<?php

 require_once 'server.php';
 session_start();
    $_SESSION['output']="";
     $name=$stat=$event="";

     $name=$_SESSION['game'];
     $event=$_SESSION['game'];

     if(isset($_POST['delsubmit']))
          {
            $stat="set1";
          }
     else if(isset($_POST['delsubmit1']))
          {
               $stat="set2";
          }


     $filename="documents/".$name.$stat."*"; 
     $fileinfo=glob($filename);

     if(!empty($fileinfo))
     {
     $fileext=explode(".", $fileinfo[0]);
     $fileActualExt=$fileext[1];   
     }
     $file="documents/".$name.$stat.".".$fileActualExt;
          
    $sql="UPDATE events SET ".$stat."=0 WHERE event='".$event."';";
     $res=mysqli_query($conn,$sql);
     if($res)$_SESSION['output']="File deleted!";

     header('location:upload_docx.php?deleted');
?>