<?php
	$page = 'home';
	include "./header.php";
?>
				
				<div class="col" style="background:rgb(255, 239, 221);">	
					<div class="col">
						<div class="m-2" style="padding: 1rem 1.5rem;">
							<div class="row shadow p-3" style="margin: 0px; border-radius: 6px; background: white; height: 260px;">
								<div class="col" style="min-width: 160px;">
									<div class="p-2" style="width: fit-content;">
										<div style="border: 4px solid blue; width: 140px; height: 200px; border-radius: 60px; background: rgba(80,80,155,0.3);">
											<div style="width: 132px; height: 100px; border-radius: 60px 60px 0px 0px; background: white;">
												<h2 class="w-100 h-100 pt-5 text-center">20<br>100</h2>
											</div>
										</div>
										<label class="w-100 text-center">Trucks</label>
									</div>
								</div>
								<div class="col" style="min-width: 160px;">
									
								</div>
							</div>	
						<div class="row">
							<div class="col-7" style="padding: 1rem .6rem;">
								<div class="shadow" style="border-radius: 6px; background: white; height: 50vh; overflow-y: auto; overflow-x: hidden;">
									<label class="w-100 shadow-sm p-2 bg-light" style="font-weight: 600; top: 0; position: sticky; z-index: 3;">Trucks list</label>
									<table class="table table-striped ">
										<thead class="table">
											<tr>
												<th>Sl.</th><th>Model</th><th>RC No.</th><th>Driver</th><th>Contact No.</th>
											</tr>
										</thead>
										<tbody>
										<?php
										 $res = mysqli_query($conn, "SELECT * FROM `truck` INNER JOIN `drivers` ON truck.owner = drivers.driverId ");
										 $i = 1;
										while ($data = mysqli_fetch_assoc($res)){
											 echo "<tr>
												<td>".$i."</td><td>".$data['model']."</td><td>".$data['rc']."</td><td>".$data['driverId']."</td>
												<td><a class='btn btn-success btn-sm' href='tel:".$data['phone']."'><i class='bi bi-telephone'></i> ".$data['phone']."</a></td>
											 </tr>";
											 $i++;
										}
										?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-5" style="padding: 1rem .6rem;">
								<div class="shadow" style="border-radius: 6px; background: white; height: 50vh; overflow-y: auto; overflow-x: hidden;">
									<label class="p-2 w-100 shadow-sm bg-light" style="font-weight: 600; text-align: center; top: 0; position: sticky; z-index: 3;">Updates/Notifications</label>
									<table class="table table-striped">
										<tbody>
										<?php
										 $res = mysqli_query($conn, "SELECT * FROM `orders` INNER JOIN `customers` ON orders.user = customers.userId ");
										 $i = 1;
										while ($data = mysqli_fetch_assoc($res)){
											 echo "<tr>
												<td>".$i."</td><td>".$data['orderName']."</td><td>".$data['orderFrom']."</td>
											 </tr>";
											 $i++;
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
			<script>console.log("<?php echo '1'; ?>");</script>
		</div>
	</div>
<?php include "./end.php";?>
