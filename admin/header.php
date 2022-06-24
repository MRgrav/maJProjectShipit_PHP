<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="../css/pre/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../css/pre/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
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
				<a href="">Logout</a>
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
							<a href="">Trucks</a>
						</div>
						<div class="options <?php if($page == 'drivers'){ echo 'active';}?>">
							<i class="bi bi-person"></i>
							<a href="./drivers.php">Drivers</a>
						</div>
						<div class="options <?php if($page == 'groups'){ echo 'active';}?>">
							<i class="bi bi-people"></i>
							<a href="">Groups</a>
						</div>
						<div class="options <?php if($page == 'orders'){ echo 'active';}?>">
							<i class="bi bi-orders"></i>
							<a href="">Orders</a>
						</div>
						<div class="options <?php if($page == 'request'){ echo 'active';}?>">
							<i class="bi bi-hourglass"></i>
							<a href="">New Requests</a>
						</div>
						<div class="options <?php if($page == 'customers'){ echo 'active';}?>">
							<i class="bi bi-person"></i>
							<a href="">Customers</a>
						</div>
						<hr>
						<div class="options <?php if($page == 'account'){ echo 'active';}?>">
							<i class="bi bi-person-circle"></i>
							<a href="">My Account</a>
						</div>
					</div>
					
					<footer>
						<div class="userlog b" onclick="console.log('logout');" style="padding: 6px 16px">
							<i class="bi bi-person-circle"></i>
							<a href="">Logout</a>
						</div>
					<hr>
					copyright &copy; 2022 shield.org
					</footer>
				</div>

