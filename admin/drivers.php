<?php 
	$page = 'drivers';
	include "./header.php";
	if (isset($_GET['remove'])){
		$del = $_GET['remove'];
		mysqli_query($conn, "DELETE FROM `drivers` WHERE driverId = '$del' ");
	}
?>

			<div class="col p-3" style="background:rgb(255, 239, 221);">	
				<div class="col p-2">	
					<form action="" method="post" class="row mb-2" style="justify-content: space-between; align-items: center;">
							<h4 class="col-7">Drivers</h4>
							<div class="col-5">
								<div class="input-group">
									<input type="search" name="search" placeholder="search" class="form-control">
									<button type="submit" class="btn btn-success"><i class="bi bi-search" style="width: 50px;"></i></button>
								</div>
							</div>
						</form>		
					
						<div style="height: 80vh; overflow-y: auto; overflow-x: hidden;">
						<table class="table table-success table-striped shadow">
							<thead class="table-primary shadow" style="top: 0; position: sticky; z-index: 3;">
								<tr>
									<th>Profile</th><th>ID</th><th>Name</th><th>Driving License</th><th>Date of Birth</th><th>Email</th><th>Contact No.</th><th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (isset($_POST['search'])){
									$search = $_POST['search'];
									$res = mysqli_query($conn, "SELECT * FROM `drivers` WHERE driverId LIKE '%$search%' OR name LIKE '%$search%' OR license LIKE '%$search%' ");
								}else{
									$res = mysqli_query($conn, "SELECT * FROM `drivers` ");
								}
								while($data = mysqli_fetch_assoc($res)){
								 echo "
								<tr>
									<td><img class='border' src='".$data['profile']."' height='50px'></td>
									<td>".$data['driverId']."</td>
									<td>".$data['name']."</td>
									<td>".$data['license']."</td>
									<td>".$data['dob']."</td>
									<td>".$data['mail']."</td>
									<td><a class='btn btn-success btn-sm' href='tel:".$data['phone']."'><i class='bi bi-telephone'></i> ".$data['phone']."</a></td>
									<td><a class='btn btn-outline-danger btn-sm' href='customers.php?remove=".$data['driverId']."'>Remove <i class='bi bi-x'></i></a></td>
								</tr>
								";
								}
								?>
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
<?php include "./end.php";?>
