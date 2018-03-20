<?php
session_start();
$_SESSION["name"]=$argv[1];
$_SESSION["email"]=$argv[2];
$_SESSION["storage"]=$argv[3];
?>
