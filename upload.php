<?php
    
    session_start();
    require_once 'server.php';

	$_SESSION["output"]="";
	$file=$name=$stat=$event=$ext="";

	$name=$_SESSION['game'];
	$event=$_SESSION['game'];

if(isset($_POST['submit']))
	{
		$file=$_FILES['file'];
		$stat='set1';
		$ext="set1ext";
	}
	else if(isset($_POST['submit1'])){
		$file=$_FILES['file1'];
		$stat='set2';
		$ext="set2ext";
	}


	if(!empty($file)){

		$filename=$file['name'];
		$filetmpname=$file['tmp_name'];
		$type=$file['type'];
		$error=$file['error'];
		$size=$file['size'];

		$fileExt=explode('.', $filename);
     	$fileActualExt=strtolower(end($fileExt));

     	$allowed= array('pdf','docx','jpg','png','jpeg');

     	if(in_array($fileActualExt, $allowed)){
     		if($error==0){

     			if($size<900000000){
     				$filenamenew=$name.$stat.".".$fileActualExt;
     				$fileDestination='documents/'.$filenamenew;
     				move_uploaded_file($filetmpname, $fileDestination);
     				$sql="UPDATE events SET ".$stat."=1 WHERE event='".$event."';";
					$res=mysqli_query($conn,$sql);
					$sql="UPDATE events SET ".$ext."='".$fileActualExt."' WHERE event='".$event."';";
					$res=mysqli_query($conn,$sql);
					$_SESSION['output']="File Uploaded!";
					header('location:upload_docx.php?success');
     			}
     			else echo 'File size too Big.';
     		}
     		else echo 'There was an error while uploading your file.';
     	}
     	else echo 'File format not Supported.';
	}

?>