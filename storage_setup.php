<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Localhost Login</title>
  
<?php
session_start();
if(!isset($_SESSION["name"]))
{
header("location:index.php");
}
?>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="csslogin/style.css">

  
</head>

<body>


  <div class="cotn_principal">
<div class="cont_centrar">

	<br>
	<br>
  <div class="cont_login">

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1 style="color: #ffffff"><i>Storage Server is Getting Configured</i></h1>
<br>
<br>  
  </div>
 </div>
</div>
  
  

    <script  src="jslogin/index.js"></script>




<?php
$name=$_SESSION["name"];
$size=$_REQUEST["size"];
require_once 'db.php';
$command = 'sudo python /var/www/cgi-bin/stass.py '.$name.' '.$size;
$l=shell_exec($command);
shell_exec('sudo sshfs 192.168.0.104:/'.$name.' /cloud_storage/'.$name);
echo $l;
$sql="UPDATE `login` SET `storage`='".$size."' WHERE `email`='".$_SESSION['email']."'";
$_SESSION['storage']=$size;
$result = mysqli_query($con, $sql);
header("location:list.php");
?>
</body>

</html>
