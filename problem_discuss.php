<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
  	
  #anspost
  {
  		height: 200px;
  		width: 510px;
  		position: absolute;
  		margin-top:90px;
  		margin-left:260px;
      /*border: 1px solid red;*/
  		/*box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);*/
  }

  a
  {
  	text-decoration: none;
  }
  	
  </style>
  
</head>

<body id="page-top">

  	<div id="page-bottom" style="height: 100px;width: 1124px;margin-left: 224px;position: absolute;">
		
		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        	<h5 style="margin-left: 410px;"><center>Welcome to your panel</center></h5>
        </nav>

	</div>

	<div id="anspost">
		
		

	</div>

  <button id="ask" style="position: absolute;margin-top:300px;margin-left:260px;" onclick="askme()">Post Your Query</button>



	<div id="ask-ques" style="height: 230px;width: 510px;position: absolute;margin-top:350px;margin-left:260px;display: none;">
     <textarea rows="5" cols="50"></textarea> 
  </div>
 
  <button type="button" id="btn-post" onclick="postans()" style="position: absolute;margin-top:500px;margin-left:320px;display: none;">Post</button>

  <div id="faq-ques3" style="height: 490px;width: 550px;position: absolute;margin-top:90px;margin-left:800px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
			

	</div>

	

	<!-- <div id="faq-ques4" style="height: 180px;width: 530px;position: absolute;margin-top:280px;margin-left:800px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
		
		
	</div> --> 

	


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

<script>
  function askme()
  {
      var y=document.getElementById("btn-post");
      var x = document.getElementById("ask-ques");
      if (x.style.display === "none") 
      {
          x.style.display = "block";
      } 
      else 
      {
          x.style.display = "none";
      }

      if (y.style.display === "none") 
      {
          y.style.display = "block";
      } 
      else 
      {
          y.style.display = "none";
      }
  }

  function postans()
  {
       var x = document.getElementById("ask-ques").innerHTML;
      document.getElementById("anspost").innerHTML = x;
  }
</script>