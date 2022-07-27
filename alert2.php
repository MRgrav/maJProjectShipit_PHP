<?php
$get = $_GET["alert2"];

if($get == "success"){
?>
	<div class="alert2 shadow" style="border-radius: 30px;">
		<div class="flexc align-items-center justify-content-center">
			<i class="bi "></i>
			<h3>Succeess</h3>
			<a class="btn btn-succeess" href="">Login</a>
		</div>
	</div>
<?php
}

if($get == "error"){
?>
	<div class="alert2 shadow" style="border-radius: 30px;">
		<div class="flexc align-items-center justify-content-center">
			<i class="bi "></i>
			<h3>Something went wrong</h3>
			<a class="btn btn-succeess" href="">Login</a>
		</div>
	</div>
<?php
}



?>
