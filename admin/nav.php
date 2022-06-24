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
