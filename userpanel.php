<?php
require('db_conn.php');
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

	<title></title>

	<!-- Custom fonts for this template-->
 <!--  <link href="css/all.min.css" rel="stylesheet" type="text/css"> --> 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  	<div id="page-bottom" style="height: 100px;width: 1139px;margin-left: 224px;position: absolute;">
		
		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        	<h5 style="margin-left: 410px;"><center>Welcome to your panel</center></h5>
        </nav>

	</div>

	<span id="page-search" style="height: 490px;width: 700px;position: absolute;margin-top:103px;margin-left:260px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
		<h3>CV Samples</h3>

	</span>

	<div id="profile-card" style="height: 490px;width: 340px;margin-left: 1000px;position: absolute;margin-top:103px;float: right;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		<center style="color:#4b4f;">Basic Profile</center>
		<img src="img/sign.png" style="height: 120px;width: 120px;margin-left: 120px;"><br>
		<div class="title">

      <?php

        $email=$_GET['id'];
        $sql="SELECT * FROM registration WHERE email='$email'";
        $result=mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {

      ?>

			<h4><center><b><?php echo $row["name"]; ?></b></center></h4>
		</div>
		<div class="main-content" style="padding: 20px;">
			<p><i class="fa fa-envelope" style="color:#4b4f;"></i><?php echo $_GET['id']; ?></p>
			<p><i class="fa fa-phone" style="color:#4b4f;"></i><?php echo $row["phone"]; ?></p>
			<p><i class="fa fa-home" style="color:#4b4f;"></i> India</p>
			<p><i class="fa fa-university" style="color:#4b4f;"></i><?php echo $row["college"]; ?></p>

			<hr>
		</div>
	</div>

    <?php  } ?>

  	<!-- Page Wrapper -->
  	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome User</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="userpanel.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Contents
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="alumni_connect.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Alumni Connect Network</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="https://www.hackerrank.com/hackcs">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Contest</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>FAQ's</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="problem_discuss.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Problem Discussion Forum</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="latest_updates.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Latest Updates</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
      </li>
	</div>
	</ul>
	<!-- End of Sidebar -->

	
</body>
</html>