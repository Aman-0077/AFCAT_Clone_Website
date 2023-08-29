
<?php

$ID = $_POST['ID'];
$pass = $_POST['pass'];

$con = mysqli_connect("localhost","root","","afcat");
$sql = "select * from admin where email='$ID' and pass='$pass'";
$r = mysqli_query($con,$sql);

if (mysqli_affected_rows($con)>0) {
    $v = mysqli_fetch_assoc($r);

    session_start();

    $_SESSION['s_name'] = $v['name'];
    $_SESSION['s_mobile'] = $v['mobile'];
    $_SESSION['s_email'] = $v['email'];


    
    header("location:admin_dashbord.php");
    
}else{
	header("location:admin_login\admin\adminlogin.php?f");

}

?>