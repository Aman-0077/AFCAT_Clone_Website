<?php

$con = mysqli_connect("localhost","root","","afcat");

$sn = $_REQUEST['sn'];
$pas = $_REQUEST['pas'];

$cname = $_POST['cname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);

if($pas == $_POST['pass']){
    $sql1 = "update candi set cname='$cname',fname='$fname', mname='$mname',gender='$gender',dob='$dob',mobile='$mobile',email='$email' where s_no='$sn'";
    mysqli_query($con,$sql1);
}
else{
    $sql2 = "update candi set cname='$cname',fname='$fname', mname='$mname',gender='$gender',dob='$dob',mobile='$mobile',email='$email',pass='$pass' where s_no='$sn'";
    mysqli_query($con,$sql2);
}

header("location:../../../../candidate_table.php");

?>