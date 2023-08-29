<?php

session_start();
session_destroy();

if(isset($_REQUEST['q'])){
header("location:admin_login\admin\adminlogin.php");
}

elseif(isset($_REQUEST['p'])){
header("location:user_login\candidate\userlogin.php");
}
?>