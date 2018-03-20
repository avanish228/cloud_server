<?php
session_start();
require_once 'db.php';

$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
$sql="SELECT * FROM login where uname='" . $name . "' and pass='" . $pass . "'";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1)
	{
	$row = mysqli_fetch_assoc($result);
	$_SESSION['name'] = $row['name'];
	$_SESSION['email']=$row['email'];
	$_SESSION['storage']=$row['storage'];
	header("location:home.php");
	}
  else
	{
	?>
           <script>alert("wrong username and password")</script>
       <?php
	header("location:index.php");
	}
	

?>
