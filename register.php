<?php

if (isset($_GET['submit'])) {
     $name= $_GET['name'];
     $college=$_GET['college'];
     $email=$_GET['email'];
     $password=$_GET['password'];
     $phone=$_GET['phn'];
     //Database connection
     $conn=new mysqli('localhost','root','','test2');
     if($conn->connect_error){
        die('Connection Failed : '.$conn->connection_error);
     }
     else{
        $stmt=$conn->prepare("insert into registration(name,college,email,password,phone)
            values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$name,$college,$email,$password,$phone);
        $stmt->execute();
        echo"Registered Succesfully...";
        header('Location:index.html');
        $stmt->close();
        $conn->close();
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/styling.css" />
</head>

<body>
	<div class="loginBox">
			<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" class="user">
			<h2>Register Here</h2>
			<form action="" method="GET">
						<input type="text" name="name" placeholder="Enter your name" required><br><br>
						<input type="text" name="college" placeholder="Enter college name" required><br><br>
    					<input type="text" name="email" placeholder="Type your email" required><br><br>
    					<input type="password" name="password" placeholder="Enter password" required><br><br>
    					<input type="text" name="phn" placeholder="Enter phone number" required><br><br>
    					<input type="submit" name="submit" value="Sign Up">
    		</form>
	</div>

</body>
</html>