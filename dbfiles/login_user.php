<?php


$username=$_POST['ID'];
$userpwd=md5($_POST['pass']);

$con=mysqli_connect("localhost","root","","afcat");
$q="select * from candi where email='$username' and pass='$userpwd'";

$r=mysqli_query($con,$q);
$v = mysqli_fetch_assoc($r);

if (mysqli_affected_rows($con)>0) {

    session_start();
    $_SESSION['u_s_no'] = $v['s_no'];
    $_SESSION['u_name'] = $v['cname'];
    $_SESSION['u_fname'] = $v['fname'];
    $_SESSION['u_mname'] = $v['mname'];
    $_SESSION['u_gender'] = $v['gender'];
    $_SESSION['u_dob'] = $v['dob'];
    $_SESSION['u_mobile'] = $v['mobile'];
    $_SESSION['u_email'] = $v['email'];

    header("location:User dashboard\index.php");
}else{
	header("location:user_login\candidate\userlogin.php?f");
}

?>

