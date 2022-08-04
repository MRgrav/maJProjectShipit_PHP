<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE AID = 'admin' "));
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="../css/pre/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../css/pre/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="../css/pre/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>	
	<div class="base container-fluid p-0">
		<div class="nav-top w-100" style="top: 0; position: fixed; z-index: 1080; height: 56px;">
			<div class="brandL">
				<i class="bi bi-list" id="showH"></i>
				<a class="brandL-l" href="">Logo</a>
			</div>
			<div class="userlog">
				<i class="bi bi-person-circle"></i>
				<p><?php
				$dte = date_create($data['last']); 
				echo date_format($dte, "dS F, Y");
				 ?></p>
			</div>
		</div>
		<div class="container-fluid flexr" style="position: fixed; padding-top: 56px;">
			<div class="row" >
				
				<!--NAVBAR-->
				<div class="col nav p-0" id="sh">
					<div class="nav-options">
						
						<div class="options <?php if($page == 'home'){ echo 'active';}?>">
							<i class="bi bi-house"></i>
							<a href="./index.php">Home</a>
						</div>
						<div class="options <?php if($page == 'trucks'){ echo 'active';}?>">
							<i class="bi bi-truck"></i>
							<a href="./trucks.php">Trucks</a>
						</div>
						<div class="options <?php if($page == 'drivers'){ echo 'active';}?>">
							<i class="bi bi-person"></i>
							<a href="./drivers.php">Drivers</a>
						</div>
						<div class="options <?php if($page == 'orders'){ echo 'active';}?>">
							<i class="bi bi-box"></i>
							<a href="orders.php">Orders</a>
						</div>
						<div class="options <?php if($page == 'customers'){ echo 'active';}?>">
							<i class="bi bi-person"></i>
							<a href="customers.php">Customers</a>
						</div>
						<div class="options <?php if($page == 'sc'){ echo 'active';}?>">
							<i class="bi bi-collection"></i>
							<a href="suggesions_complaints.php">Feedback</a>
						</div>
					</div>
					
					<footer>
						<div class="userlog b" onclick="console.log('logout');" style="padding: 6px 16px">
							<i class="bi bi-person-circle"></i>
							<a href="login.php?log=logged out">Logout</a>
						</div>
					<hr>
					copyright &copy; 2022 shield.org
					</footer>
				</div>

