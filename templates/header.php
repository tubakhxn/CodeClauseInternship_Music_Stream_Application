<?php  

// === SESSION === // 
session_start();
// === REQUIRE FUNCTION === //
require 'db/function.php';
$db = new Databasedx();
$allTracks = $db->getAllTrack();

if(isset($_POST["upload"])) {
  if($db->uploadTrack($_SESSION["data"]["name"], $_POST["artist"], $_POST["title"], $_FILES["img"], $_FILES["track"]) > 1) {
    echo "<script>alert('Berhasil Upload!'); document.location.href = 'dashboard.php';</script>";
  } else {
    echo "<script>alert('Fail Upload!');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard! - Uprising</title>

  <!-- Custom fonts for this template-->
  <link href="assets/sbadm0n/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/animate.css">
  <script src="https://kit.fontawesome.com/6dab888157.js" crossorigin="anonymous"></script>
  <!-- Custom styles for this template-->
  <link href="assets/sbadm0n/css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Uprising <sup>!</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Heading -->
      <div class="sidebar-heading">
        User Login
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-arrow-left"></i><span> Landing Page</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-music"></i>
          <span>Tracks</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="?action=upload">Upload Tracks</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php require 'assets/templates/topbar.php'; ?>