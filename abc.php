<?php
session_start();
if(isset($_SESSION["name"]))
{
print $_SESSION["name"];
}
else
{ 
print "No Session";
}
?>
