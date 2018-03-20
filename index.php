<!DOCTYPE html>
<html lang="en" >
<?php
session_start();
if(isset($_SESSION["name"]))
{
header("location:home.php");
}
?>

<head>
  <meta charset="UTF-8">
  <title>Localhost Login</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

      <link rel="stylesheet" href="csslogin/style.css">

  
</head>

<body>

  <div class="cotn_principal">
<div class="cont_centrar">

	<br>
	<br>
  <h2 style="color: #ffffff">Welcome to <i><b>LocalHost</b></i>,   if you are an administrator, <a href="admin.php">Click Here!</a></h2>
  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>If you already have an account!</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>New Here? Don't worry you won't be now!</p>

  <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="bg.jpg" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="bg.jpg" alt="" />
       </div>
<form action="checklogin.php" >
 <div class="cont_form_login">
<a href="index.html" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
   <h2>LOGIN</h2>

 <input type="email" name="name" placeholder="Email" />
<input type="password" name="pass" placeholder="Password" />
<input type="submit" value="LOGIN" class="btn_login" onclick="cambiar_login()" />
 
 </div>
</form>  
<form action="/cgi-bin/signup.py">
   <div class="cont_form_sign_up">
<a href="home.html" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>

<input type="text" placeholder="Full Name" name="name" required/>
<input type="text" placeholder="Email" name="email" required/>
<input type="text" placeholder="Phone No" name="phone" required/>
<input type="password" placeholder="Password" name="pass" required/>
<input type="submit" value="SIGN UP" class="btn_sign_up" onclick="cambiar_sign_up()">

  </div>
</form>
    </div>
<br>
    
  </div>
 </div>
</div>
  
  

    <script  src="jslogin/index.js"></script>





</body>

</html>
