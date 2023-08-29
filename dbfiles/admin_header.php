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
      <a href="admin_dashbord.php" class="logo d-flex align-items-center">
        <img src="assets/logo/rsz_1iaf-logo.png">
        <span class="d-none d-lg-block"> Indian Air Force </span>
        <img src="assets/logo/2.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      
    <li class="nav-item">
        <a class="nav-link collapsed"  href="#" style="color:black; font-size:30px; text-transform:uppercase; letter-spacing:5px;    background: linear-gradient(to right,pink,lightgray,lavender);">
          <span >
          <?php
          session_start();
          echo $_SESSION['s_name'];
        
          ?>
          </span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo $candi;?> <?php echo $app;?> <?php echo $add;?>" href="admin_dashbord.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link <?php echo $home;?> <?php echo $app;?> <?php echo $add;?> " href="candidate_table.php">
          <i class="bi bi-people"></i>
          <span>Candidates</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php echo $home;?> <?php echo $candi;?> <?php echo $add;?> " href="Applications.php">
          <i class="bi bi-file-earmark-text"></i>
          <span>Applications</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link <?php echo $home;?> <?php echo $candi;?> <?php echo $app;?> " href="Admin_page.php">
          <i class="bi bi-person"></i>
          <span>Admins</span>
        </a>
      </li>
      <li class="nav-item  nav-link">    <a class="btn btn-danger" href="logout.php?q">Log Out</a>
</li>

    </ul>

  </aside><!-- End Sidebar-->