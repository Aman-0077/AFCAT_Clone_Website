<?php

$q = $_REQUEST['q'];
$sn = $_REQUEST['sn'];
$con = mysqli_connect("localhost","root","","afcat");

// D E L E T E  for Registered Candidate.
if(isset($q)){

$sql = "delete from candi where s_no = '$q'"; 
mysqli_query($con,$sql);
header("location:candidate_table.php");
}


// D E L E T E  for Admin.
elseif(isset($sn)){
    
$sql = "delete from appli where s_no = '$sn'"; 
mysqli_query($con,$sql);
header("location:Applications.php");
}

mysqli_close($con);
?>