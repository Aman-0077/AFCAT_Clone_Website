<?php

$con = mysqli_connect("localhost","root","","afcat");

$cname = $_POST['cname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = "insert into candi (cname,fname,mname,gender,dob,mobile,email,pass) values ('$cname','$fname','$mname','$gender','$dob','$mobile','$email','$pass')";

mysqli_query($con,$sql);

header("location:../../userlogin.php");
?>