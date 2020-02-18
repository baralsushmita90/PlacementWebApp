<?php

require('db_conn.php');
session_start();


if (isset($_GET['submit'])) {
     $email=$_GET['email'];
     $password=$_GET['password'];
     if($con)
     {
        echo '<h1>Connected to mysql</h1>';
        //$db=mysql_select_db("test2",$con);
        $sql="SELECT * FROM registration WHERE email='$email'and password='$password'";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            // header("Location: userpanel.php");
            header('Location: userpanel.php?id='.$email);

        }
        else
        {
            echo 'Login failed';
        }

     }

}

?>


<!DOCTYPE html>
<html>
<head>

	<title></title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/styling.css" />

    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<!-----------------Modal section ------------------------->
    		<!-- <div class="bg-modal">
    			<div class="modal-content">

    				<div class="close">+</div>
    				<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" style="height:100px;width: 100px;" alt="sign photo">

    				<form action="">
    					<input type="text" name="email" placeholder="Type your email"><br><br>
    					<input type="password" name="password" placeholder="Enter password"><br><br>
    					<a href="" class="button">Submit</a>
    				</form>
    		    </div>
			</div> -->
		<div class="loginBox">
			<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" class="user">
			<h2>Log In Here</h2>
			<form action="" method="GET">
    					<input type="text" name="email" placeholder="Type your email"><br><br>
    					<input type="password" name="password" placeholder="Enter password"><br><br>
    					<input type="submit" name="submit" value="Sign In">
    					<a href="#">Forget Password?</a>
    		</form>
		</div>
</body>
</html>

