<?php 


$con = mysqli_connect("localhost","root","","afcat");

//Total for Registered Candidates.
$sql1 = "select count(s_no) as to_c from candi";
$total1 = mysqli_query($con,$sql1);
while($key=mysqli_fetch_assoc($total1)){
    $total= $key['to_c'];
}


//Total for Total Applicationl
$sql = "select count(s_no) as toc from appli";
$re = mysqli_query($con,$sql);
$toApp = mysqli_fetch_assoc($re);


//Total for Approved application
?>
