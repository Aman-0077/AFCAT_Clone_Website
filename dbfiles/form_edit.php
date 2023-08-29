
<?php
           $q = $_REQUEST['q'];
           $con = mysqli_connect("localhost","root","","afcat");

           $address = $_POST['address'];
           $city = $_POST['city'];
           $state = $_POST['state'];
           $zip = $_POST['zip'];
           $qualification = $_POST['qualification'];
           

           //for appli
           $sql2 = "update appli set address='$address', city='$city', state='$state', zip ='$zip',qualification = '$qualification'";
           $r2 = mysqli_query($con,$sql2);

           header("location:Applications.php");
      ?>