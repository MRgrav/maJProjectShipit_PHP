<?php
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
if(isset($_GET['log'])){
	mysqli_query($conn, "UPDATE `admin` SET last = current_timestamp() WHERE AID = 'admin' ");
	$_SESSION['log'] == "no";
	session_start();
	session_destroy();
}
$abl = 1;
include_once "../common/heads.php";
if ($_SESSION['log'] == "yes"){
	header("location:index.php");
}
?>

	<div class="flexr w-100 justify-content-center align-items-center" style="height: 100vh; padding-top: 60px;">
		<form class="border p-3 shadow text-center" id="lgn-form">
			<img src="../media/user.png" height="100px" width="100px" class="shadow" style="margin-top: -70px; border: 2px solid white; border-radius: 70px;">
			
			<h2 class="p-2"><b>Admin Login</b></h2>
			<div class="p-2 border">
				<div class="row p-2 mt-3">
					<div class="col-sm-4"><label class="w-100 text-start" for="Id">User Name : </label></div>
					<div class="col-sm-8"><input id="Id" class="form-control" type="text" required></div>
				</div>
				<div class="row p-2">
					<div class="col-sm-4"><label class="w-100 text-start" for="pd">Password : </label></div>
					<div class="col-sm-8"><input id="pd" minlength="6" maxlength="6" class="form-control" type="password" required></div>
				</div>
			</div>
			
			<div class="row p-2 mt-1">
				<div class="col-sm p-2"></div>
				<div class="col-sm p-2"><button class="w-100 btn btn-success shadow" type="submit" id="submit">Login</button></div>
			</div>
			<br>
		</form>
	</div>

	<script>
		
		$(document).ready(function(){
			$("#lgn-form").submit(function(event){
				event.preventDefault();
				
				var Id = $("#Id").val();
				var pwd = $("#pd").val();
				
				$.ajax({
					url: "login_admin.php",
					type: "POST",
					data: {Id:Id, pwd:pwd},
					success: function(data2){
						if (data2 == 1){
							Swal.fire({
							  icon: 'success',
							  title: 'Login Successful',
							  showConfirmButton: false,
							  timer: 1500
							})
							setTimeout(function(){
								location.href="index.php";
							}, 1400);
						}else{
							Swal.fire({
							  icon: 'error',
							  title: 'User name or password is wrong',
							  showConfirmButton: false,
							  timer: 1500
							})
						}
						$("#lgn-form").trigger("reset");
					}
				});
			});
		});
	</script>

</body>
</html>
