<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php  echo $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/logo/rsz_1iaf-logo.png" rel="icon">
  <link href="assets/logo/rsz_1iaf-logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/logo/rsz_1iaf-logo.png">
        <span class="d-none d-lg-block"> Indian Air Force </span>
       
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="float-end">
      
</div>


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    
    
    <?php             
          session_start();
          $name =$_SESSION['u_name'];
          $fname =$_SESSION['u_fname'];
          $con = mysqli_connect("localhost","root","","afcat");
          $sql = "select * from appli where cname='$name' and fname='$fname'";
          $r = mysqli_query($con,$sql);
          $v = mysqli_fetch_assoc($r);
    ?>


    <li class="nav-item">
        <a class="nav-link collapsed"  href="#">
          <img src="../<?php echo $v['image']; ?>" alt="" height="100px" width="100px">
          <span style="color:black; font-size:20px; padding-left:8px;">
            <?php
            echo $_SESSION['u_name'];
            ?>
          </span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link <?php echo $profile ?> <?php echo $apply ?> <?php echo $vacancy ?> <?php echo $result ?>" href="index.php">
          <i class="bi bi-people"></i>
          <span>Profile</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link <?php echo $home ?> <?php echo $profile ?> <?php echo $vacancy ?> <?php echo $result ?>" href="apply.php">
          <i class="bi bi-people"></i>
          <span>Apply</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo $home ?> <?php echo $profile ?> <?php echo $apply ?> <?php echo $result ?>" href="newvacancy.php">
          <i class="bi bi-file-earmark-text"></i>
          <span>New Vancancy</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link <?php echo $home ?> <?php echo $profile ?> <?php echo $apply ?> <?php echo $vacancy ?>" href="result.php">
          <i class="bi bi-person"></i>
          <span>Result</span>
        </a>
      </li>

      <li class="nav-item nav-link collapsed">
      <a class="btn btn-danger" href="../logout.php?p" style="padding:0px 30px;">Log-Out</a>       
      </li>



    </ul>

  </aside><!-- End Sidebar-->