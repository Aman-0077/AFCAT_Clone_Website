<?php

session_start();
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$qualification = $_POST['qualification'];
$sno = $_SESSION['u_s_no'];
$name = $_SESSION['u_name'];
$fname = $_SESSION['u_fname'];

// Image 

$imagename = $_FILES['image']['name'];
$imagetype = $_FILES['image']['type'];
$imagesize = $_FILES['image']['size'];
$imagepath = $_FILES['image']['tmp_name'];
$imagelocation = "imgsign/".$_SESSION['u_name'].$imagename;
move_uploaded_file($imagepath,$imagelocation);

// Sign

$signname = $_FILES['sign']['name'];
$signpath = $_FILES['sign']['tmp_name'];
$signlocation = "imgsign/".$_SESSION['u_name'].$signname;
move_uploaded_file($signpath,$signlocation);



$con = mysqli_connect("localhost","root","","afcat");
$sql = "insert into appli (s_no,cname,fname,address,city,state,zip,qualification,image,sign) values ('$sno','$name','$fname','$address','$city','$state','$zip','$qualification','$imagelocation','$signlocation')";
mysqli_query($con,$sql);

header("location:User dashboard\index.php");
?>