<?php
	$page = 'orders';
	include "./header.php";
?>
				
				<div class="col p-3" style="background:rgb(255, 239, 221); overflow-y: auto;">	
					<div class="col">
						<form action="" method="post" class="row mb-2" style="justify-content: space-between; align-items: center;">
							<h4 class="col-7">Orders</h4>
							<div class="col-5">
								<div class="input-group">
									<input type="search" name="search" placeholder="search" class="form-control">
									<button type="submit" class="btn btn-success"><i class="bi bi-search" style="width: 50px;"></i></button>
								</div>
							</div>
						</form>	
						<div style="height: 80vh; overflow-y: auto; overflow-x: hidden;">
							<table class="table table-success table-striped shadow" >
								<thead class="table-primary shadow" style="top: 0; position: sticky; z-index: 3;">
									<tr>
										<th>Order Name</th><th>From</th><th>To</th><th>Owner</th><th>Driver</th><th>Distance</th><th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($_POST['search'])){
										$search = $_POST['search'];
										$res = mysqli_query($conn, "SELECT * FROM `orders` WHERE orderName LIKE '%$search%' OR user LIKE '%$search%' OR driver LIKE '%$search%' OR orderFrom LIKE '%$search%' OR orderTo LIKE '%$search%' ");
									}else{
										$res = mysqli_query($conn, "SELECT * FROM `orders` ");
									}
									while($data = mysqli_fetch_assoc($res)){
									 echo "
									<tr>
										<td>".$data['orderName']."</td>
										<td>".$data['orderFrom']."</td>
										<td>".$data['orderTo']."</td>
										<td>".$data['user']."</td>
										<td>".$data['driver']."</td>
										<td>".$data['orderDist']."</td>
										<td>";
										switch ($data['status']){
										case 1:
											echo "Pending";
											break;
										case 2:
											echo "On pick up";
											break;
										case 3:
											echo "On delivery";
											break;
										case 4:
											echo "Order delivered";
											break;
										case 5:
										case 23:
											echo "Unknown"; 
										} echo "
										</td>
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
