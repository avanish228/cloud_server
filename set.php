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
if(isset($_SESSION["name"]))
{
if($_SESSION["storage"] != "0")
{
header("location:list.php");
}
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
    <h1 style="color: #ffffff"><i>Enter Your Required Capacity</i></h1>
<br>
<br>
<form action="storage_setup.php">
    <input type="text" name="size" placeholder="Value in Megabyte" />
<input class="btn_login" onclick="" value="Set" type="submit" /> 
</form>   
  </div>
 </div>
</div>
  
  

    <script  src="jslogin/index.js"></script>





</body>

</html>
