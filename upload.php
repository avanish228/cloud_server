<?php
     session_start();
     if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      if(empty($errors)==true){
	$a=$_SESSION["name"];
	 if(move_uploaded_file($file_tmp,"/cloud_storage/$a/".$file_name)){
	  $l="/cloud_storage/$file_name";
	   $f="/cloud_storage/$a";

	    header("location:list.php");
           }
           else{ echo "Failure";
	      }
	 
#	 shell_exec("sudo mv $il $fl");
#         header("location:list.php");
 	echo "SUCCESS";
      }else{
         print_r($errors);
      }
   }

?>
